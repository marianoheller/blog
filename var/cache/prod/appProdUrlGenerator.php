<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fillDB' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cmd/fillDB',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_clear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::clearAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cmd/clearDB',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_number' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_index' => array (  0 =>   array (    0 => 'number',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'number',    ),    1 =>     array (      0 => 'text',      1 => '/api/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_index2' => array (  0 =>   array (    0 => 'number',  ),  1 =>   array (    'number' => 1,    '_controller' => 'AppBundle\\Controller\\LuckyController::index2Action',  ),  2 =>   array (    'number' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'number',    ),    1 =>     array (      0 => 'text',      1 => '/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_indexcosmic' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::indexCosmicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cosmos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_indexcosmic2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::indexCosmic2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cosmos2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
