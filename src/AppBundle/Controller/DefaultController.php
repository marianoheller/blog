<?php

namespace AppBundle\Controller;

use AppBundle\Entity\blog_post;
use AppBundle\Entity\Author;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;


const imagesFolderName = "images_blog";
const cantPostsAtInit = 10;
define ("Authors", serialize (array ("Jesse", "Mike", "Molly","Skyler")));


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('blog');
    }

    /**
     * @Route("/cmd/addPost" , name="addPost")
     */

    public function createPostAction()
    {
        $blog_post = $this->generatePost();
        $this->savePostInDB($blog_post);
        return new Response('Created blog post id '.$blog_post->getId());
    }


    /**
     * @Route("/cmd/clearPosts")
     */

    public function clearAction()
    {
        $this->clearAllPosts();
        return new Response("All posts deleted");
    }

    /**
     * @Route("/cmd/setAuthors")
     */
    public function setAuthorsAction()
    {
        $this->clearAllAuthors();

        //CREATE AUTHORS
        $authorsArray = unserialize(Authors);
        for ($i=0 ; $i<sizeof($authorsArray) ; $i++)
        {
            $author = $this->generateAuthor($i);
            $this->saveAuthorInDB($author);
        }

        return new Response("Authors created");
    }

    /**
     * @Route ("/cmd/init.{_format}",
     *          defaults={"_format":"html"
     *                   },
     *     		requirements= {
     *     			"_format"="html"
     * 				}
     *     )
    */

    public function initializeBlogAction()
    {
        //CLEAR ALL AUTHORS AND POSTS
        $this->clearAllPosts();
        $this->clearAllAuthors();
        $this->deleteAllImages();

        //CREATE AUTHORS
        $authorsArray = unserialize(Authors);
        for ($i = 0; $i < sizeof($authorsArray); $i++) {
            $author = $this->generateAuthor($i);
            $this->saveAuthorInDB($author);
        }

        //CREATE POSTS
        for ($i = 0; $i < cantPostsAtInit; $i++) {
            $blog_post = $this->generatePost();
            $this->savePostInDB($blog_post);
        }

        //REPORT
        $response = new Response("Blog initialized");
        $response->setStatusCode(200);
        $response->headers->set('Refresh', '2; /blog');
        return $response;
    }

    /**
     * @Route ("/cmd/download.{_format}",
     *          name="download",
     *          defaults={"_format":"html"},
     *          requirements={"_format":"html"}
     *     )
     *  */
    public function downloadAction()
    {
        $folder= imagesFolderName;
        $file = 'https://unsplash.it/850/350?image='.rand(0,100);
        $dest = "$folder\\".rand(0,100).".png";    //.basename($file);
        if ( !is_dir($folder) )
            mkdir($folder);
        file_put_contents($dest,fopen($file,'r'));
        return $this->redirectToRoute("blog");
    }

//    =================================================================================================
//
//    PRIVATE FUNCTIONS
//
//    =================================================================================================




    private function generatePost()
    {
        $blog_post = new blog_post();

        //Title
        $url='http://loripsum.net/api/2/short';
        $lines_array=file($url);
        $lines_string=implode('',$lines_array);
        $crawler = new Crawler($lines_string);
        $text = $crawler->filter('body > p')->last()->text();
        $text=str_replace(', ','',$text);
        $text=str_replace('. ','',$text);
        $blog_post->setTitle(trim($text));

        //Body
        $url='http://loripsum.net/api';
        $lines_array=file($url);
        $lines_string=implode('',$lines_array);
        $crawler = new Crawler($lines_string);
        $nodeValues = $crawler->filter('body > p')->each(function (Crawler $node, $i) {
            return $node->text();
        });
        $text = implode("<br/>",$nodeValues);
        $blog_post->setBody($text);

        //Author
        /*$url='http://loripsum.net/api/2/short';
        $lines_array=file($url);
        $lines_string=implode('',$lines_array);
        $crawler = new Crawler($lines_string);
        $text = $crawler->filter('body > p')->last()->text();
        $text=str_replace(', ','',$text);
        $text=str_replace('. ','',$text);
        $blog_post->setAuthor(trim(substr($text,0,rand(5,12))));*/
        $repo = $this->getDoctrine()->getRepository('AppBundle:Author');
        $query = $repo->createQueryBuilder('a')
            ->where('LENGTH(a.name) > :val')
            ->setParameter('val', '1')
            ->getQuery();
        $authorsArray = $query->getResult();
        $author = $authorsArray[random_int(0, sizeof($authorsArray)-1)];
        $blog_post->setAuthor($author->getName());


        //DateTime
        $d1=new \DateTime();
        $blog_post->setDate($d1);

        //Image
        $folder = imagesFolderName;
        if ( !is_dir($folder) )
            mkdir($folder);
        $ficherosArray = scandir($folder);
        $filename_dest=0;
        foreach( $ficherosArray as $fichero) {
            $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($fichero) );
            $value = intval($withoutExt);
            if ( $value != 0 ) {
                if ( $value > $filename_dest )
                    $filename_dest = $value;
            }
        }
        $filename_dest++;

        $file = 'https://unsplash.it/850/350?image='.rand(0,70);
        $dest = "$folder\\$filename_dest.png";    //.basename($file);


        file_put_contents($dest,fopen($file,'r'));

        //$imagePath = 'https://unsplash.it/850/350?image='.rand(0,100);
        $blog_post->setImage("/".$dest);

        return $blog_post;
    }

    private function deleteAllImages()
    {
        $folder = imagesFolderName;
        if ( !is_dir($folder) )
            return;
        $ficherosArray = scandir($folder);
        foreach( $ficherosArray as $fichero) {
            if ( !is_dir($fichero) && strlen($fichero)>3)
                unlink($folder."\\".$fichero);
        }


    }

    private function savePostInDB($blog_post)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($blog_post);
        $em->flush();
    }

    private function clearAllPosts()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('AppBundle:blog_post');


        $query = $repo->createQueryBuilder('p');
        $query->delete();
        // $query->where('p.author = :Val');
        // $query->setParameter('Val', 'Lorem ipsum');
        $query->getQuery()->execute();
        $em->flush();
    }

    private function clearAllAuthors()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('AppBundle:Author');
        $query = $repo->createQueryBuilder('p');
        $query->delete();
        $query->getQuery()->execute();
        $em->flush();
    }

    private function generateAuthor($index)
    {
        $authors = unserialize(Authors);
        $name = $authors[$index];


        $author = new Author();
        $author->setName("$name");
        $author->setMail(strtolower($name)."@gmail.com");
        $d1=new \DateTime();
        $author->setLastPostDate($d1);

        return $author;
    }

    private function saveAuthorInDB($author)
    {
        $em = $this->getDoctrine()->getManager();
        //Push data
        $em->persist($author);
        $em->flush();
    }

}



    // public function showAction($id)
    // {
    //     $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
    //     $query = $repo->createQueryBuilder('p');
    //     $query->where('p.price > :price');
    //     $query->setParameter('price', '19.99');
    //     $query->orderBy('p.price', 'ASC');
    //     $query->getQuery();
    // }






    // public function showActionAll($id)
    // {
    //     $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
    //     if (!$product) 
    //     {
    //         throw $this->createNotFoundException('No product found for id '.$id);
    //     }
    //     // ... do something, like pass the $product object into a template
    //     return new Response("name: ".$product->getName());
    // }

