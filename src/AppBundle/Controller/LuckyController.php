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
     * @Route(	"/blog/{page}.{_format}",
	 *     		name="blog",
	 *     		defaults={"_format":"html",
     *                    "page":"0"
     *                   },
	 *     		requirements= {
	 *     			"_format"="html",
     *              "page": "\d+"
	 * 				}
	 * 			)
     */
    public function numberAction($page)
    {
        $maxPostsPerPage = 3;

        //GET POSTS
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('AppBundle:blog_post');
        $offset = $maxPostsPerPage*$page;
        $query = $repo->createQueryBuilder('p')
                        ->where('LENGTH(p.body) > :val')
                        ->setParameter('val', '3')
                        ->orderBy('p.id', 'DESC')     //de mas nuevo a mas viejo
                        ->setFirstResult( $offset )
                        ->setMaxResults($maxPostsPerPage)          //max posts per page
                        ->getQuery();
        $articles = $query->getResult();

        //Get Total Count (for pagination)
        $queryCount = $em->createQuery('SELECT COUNT(b) FROM AppBundle:blog_post b');
        $numArticles = $queryCount->getSingleScalarResult();

        //Get Authors
        $queryCount = $em->createQuery('SELECT a FROM AppBundle:Author a ORDER BY a.name ASC');
        $authorsArray = $queryCount->getResult();

        return $this->render(
          'blog_content.html.twig',
          array('blog_entries' => $articles,
              'cantArticles' => $numArticles,
              'authorsArray' => $authorsArray
              )
          );
    }

}