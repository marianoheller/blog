<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/cmd')) {
            // fillDB
            if ($pathinfo === '/cmd/fillDB') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'fillDB',);
            }

            // app_default_clear
            if ($pathinfo === '/cmd/clearDB') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::clearAction',  '_route' => 'app_default_clear',);
            }

        }

        // app_lucky_number
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
        }

        // app_lucky_index
        if (0 === strpos($pathinfo, '/api/lucky/number') && preg_match('#^/api/lucky/number/(?P<number>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_index')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::indexAction',));
        }

        // app_lucky_index2
        if (0 === strpos($pathinfo, '/lucky/number') && preg_match('#^/lucky/number(?:/(?P<number>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_index2')), array (  'number' => 1,  '_controller' => 'AppBundle\\Controller\\LuckyController::index2Action',));
        }

        if (0 === strpos($pathinfo, '/cosmos')) {
            // app_lucky_indexcosmic
            if ($pathinfo === '/cosmos') {
                return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::indexCosmicAction',  '_route' => 'app_lucky_indexcosmic',);
            }

            // app_lucky_indexcosmic2
            if ($pathinfo === '/cosmos2') {
                return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::indexCosmic2Action',  '_route' => 'app_lucky_indexcosmic2',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
