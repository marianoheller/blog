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
     *              "page": "p.\d+"
	 * 				}
	 * 			)
     */
    public function homePageAction($page)
    {
        $maxPostsPerPage = 3;

        $pag = intval (str_replace('p/','',$page));

        //GET POSTS
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('AppBundle:blog_post');
        $offset = $maxPostsPerPage*$pag;
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

    /**
     * @Route(	"/blog/a/{author}.{_format}",
     *     		name="author",
     *     		defaults={"_format":"html",
     *                    "author":"all"
     *                   },
     *     		requirements= {
     *     			"_format"="html",
     * 				}
     * 			)
     */
    public function authorAction($author)
    {
        if ($author == "all") {
            $repo = $this->getDoctrine()->getRepository('AppBundle:Author');
            $query = $repo->createQueryBuilder('a')
                ->where('LENGTH(a.name) > :val')
                ->setParameter('val', '0' )
                ->getQuery();
        }
        else {
            $repo = $this->getDoctrine()->getRepository('AppBundle:Author');
            $query = $repo->createQueryBuilder('a')
                ->where('a.name = :val')
                ->setParameter('val', $author )
                ->getQuery();
        }
        $authorsArray = $query->getResult();

        //Get Authors
        $em = $this->getDoctrine()->getManager();
        $queryCount = $em->createQuery('SELECT a FROM AppBundle:Author a ORDER BY a.name ASC');
        $allAuthorsArray = $queryCount->getResult();

        return $this->render(
            'author_content.html.twig',
            array('authorsArray' => $authorsArray,
                'allAuthorsArray' => $allAuthorsArray
            )
        );
    }
}