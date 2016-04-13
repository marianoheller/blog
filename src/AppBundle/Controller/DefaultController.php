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


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/cmd/addPost" , name="addPost")
     */

    public function createAction()
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
        $imagePath = 'https://unsplash.it/850/350?image='.rand(0,100);
        $blog_post->setImage($imagePath);

        //Push data
        $em = $this->getDoctrine()->getManager();
        $em->persist($blog_post);
        $em->flush();
        return new Response('Created blog post id '.$blog_post->getId());
    }


    /**
     * @Route("/cmd/clearPosts")
     */

    public function clearAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('AppBundle:blog_post');


        $query = $repo->createQueryBuilder('p');   
        $query->delete();
        // $query->where('p.author = :Val');
        // $query->setParameter('Val', 'Lorem ipsum');
        $query->getQuery()->execute();
        $em->flush();
        return $this->redirectToRoute('addPost');
    }

    /**
     * @Route("/cmd/setAuthors")
     */
    public function setAuthorsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('AppBundle:Author');
        $query = $repo->createQueryBuilder('p');
        $query->delete();
        $query->getQuery()->execute();
        $em->flush();

        $author = new Author();
        $author->setName("Skyler");
        $author->setMail("skyler@gmail.com");
        $d1=new \DateTime();
        $author->setLastPostDate($d1);
        //Push data
        $em->persist($author);
        $em->flush();

        $author = new Author();
        $author->setName("Jesse");
        $author->setMail("jesse@gmail.com");
        $d1=new \DateTime();
        $author->setLastPostDate($d1);
        //Push data
        $em->persist($author);
        $em->flush();

        $author = new Author();
        $author->setName("Mike");
        $author->setMail("mike@gmail.com");
        $d1=new \DateTime();
        $author->setLastPostDate($d1);
        //Push data
        $em->persist($author);
        $em->flush();

        $author = new Author();
        $author->setName("Molly");
        $author->setMail("molly@gmail.com");
        $d1=new \DateTime();
        $author->setLastPostDate($d1);
        //Push data
        $em->persist($author);
        $em->flush();

        return new Response("Authors created");
    }
}

    /**
     * @Route(  "/showProduct/{id}",
                requirements={
                    "id":"\d+"
                }
            )
     */

    // public function showAction($id)
    // {
    //     $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
    //     $query = $repo->createQueryBuilder('p');
    //     $query->where('p.price > :price');
    //     $query->setParameter('price', '19.99');
    //     $query->orderBy('p.price', 'ASC');
    //     $query->getQuery();
    // }

    /**
     * @Route(  "/showAllProduct"
            )
     */

    // public function showAction($id)
    // {
    //     $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
    //     if (!$product) 
    //     {
    //         throw $this->createNotFoundException('No product found for id '.$id);
    //     }
    //     // ... do something, like pass the $product object into a template
    //     return new Response("name: ".$product->getName());
    // }

