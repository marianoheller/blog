<?php

namespace AppBundle\Controller;

use AppBundle\Entity\blog_post;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

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
     * @Route("/cmd/fillDB" , name="fillDB")
     */

    public function createAction()
    {
        $blog_post = new blog_post();
        $blog_post->setTitle('A Foo Bar');
        $blog_post->setBody(    'DateTime does not support split seconds (microseconds or milliseconds etc.)
                                I dont know why this isnt documented.
                                The class constructor will accept them without complaint, but they are discarded.
                                There does not appear to be a way to take a string like "2012-07-08 11:14:15.638276" and store it in an objective form in a complete way.'
                            );
        $blog_post->setAuthor('Lorem ipsum');
        $d1=new \DateTime("2012-07-08 11:14:15");
        $blog_post->setDate($d1);
        $blog_post->setImage('https://www.google.com.ar/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
        $em = $this->getDoctrine()->getManager();
        $em->persist($blog_post);
        $em->flush();
        return new Response('Created blog post id '.$blog_post->getId());
    }


    /**
     * @Route("/cmd/clearDB")
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
        return $this->redirectToRoute('fillDB');
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

