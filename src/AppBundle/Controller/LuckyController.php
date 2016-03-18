<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route(	"/blog.{_format}",
	 *     		name="blog",
	 *     		defaults={"_format":"html"},
	 *     		requirements= {
	 *     			"_format"="html"
	 * 				}
	 * 			)
     */
    public function numberAction()
    {

      $em = $this->getDoctrine()->getManager();
      $repo = $this->getDoctrine()->getRepository('AppBundle:blog_post');


      $query = $repo->createQueryBuilder('p')
                ->where('LENGTH(p.body) > :val')
                ->setParameter('val', '3')
                ->orderBy('p.id', 'DESC')     //de mas nuevo a mas viejo
                ->getQuery();


      $articles = $query->getResult();


    	return $this->render(
          'blog.html.twig',
          array('blog_entries' => $articles)
          );
    }

}