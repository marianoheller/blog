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

        // blog
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
