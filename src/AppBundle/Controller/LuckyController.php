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
     * @Route("/lucky/number/slevin")
     */
    public function numberAction()
    {
    	$number = rand(0,100);

    	return new Response(
    		'<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

   /**
    * @Route("/api/lucky/number/{number}")
    */
   public function indexAction($number)
   {
   		$numberArray = array();
   		for ( $i=0 ; $i<$number ; $i++) {
   			$numberArray[] = rand(0,100);
   		}

   		$numbersList = implode(',', $numberArray);

       	return new JsonResponse($numbersList);
   }

   /**
    * @Route("/lucky/number/{number}" , defaults={"number" = 1} , requirements={ "number" = "\d+"})
    */

   public function index2Action($number)
   {
   		$numberArray = array();
   		for ( $i=0 ; $i<$number ; $i++) {
   			$numberArray[] = rand(0,100);
   		}

   		$numbersList = implode(',', $numberArray);

		return $this->render(
					'/lucky/luckynumber.html.twig',
					array('luckyNumberLista' => $numbersList )
					);  
	}

	/**
	 * @Route("/cosmos")
	 */
	public function indexCosmicAction()
   {
   		$numberArray = array();
   		for ( $i=0 ; $i<3 ; $i++) {
   			$numberArray[] = rand(0,100);
   		}

   		$numbersList = implode(',', $numberArray);

		return $this->render(
					'/astronomy/cosmos.html.twig',
					array('luckyNumberLista' => $numbersList )
					);  
	}


	/**
	 * @Route("/cosmos2")
	 */
	public function indexCosmic2Action()
   {
   		$numberArray = array();
   		for ( $i=0 ; $i<3 ; $i++) {
   			$numberArray[] = rand(0,100);
   		}

   		$numbersList = implode(',', $numberArray);

		return $this->render(
					'\astronomywebsitetemplate\index.html.twig',
					array('luckyNumberLista' => $numbersList )
					);  
	}
	

}