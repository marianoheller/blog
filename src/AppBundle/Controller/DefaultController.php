<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/addProduct")
     */

    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        return new Response('Created product id '.$product->getId());
    }


    /**
     * @Route(  "/showProduct/{id}",
                requirements={
                    "id":"\d+"
                }
            )
     */

    public function showAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
        $query = $repo->createQueryBuilder('p');
        $query->where('p.price > :price');
        $query->setParameter('price', '19.99');
        $query->orderBy('p.price', 'ASC');
        $query->getQuery();
    }

    /**
     * @Route(  "/showAllProduct"
            )
     */

    public function showAction($id)
    {
        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
        if (!$product) 
        {
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        // ... do something, like pass the $product object into a template
        return new Response("name: ".$product->getName());
    }
}
