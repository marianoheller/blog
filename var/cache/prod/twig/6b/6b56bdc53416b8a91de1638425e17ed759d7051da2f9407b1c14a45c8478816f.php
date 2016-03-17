<?php

/* astronomy/cosmos.html.twig */
class __TwigTemplate_44c97258ce11b6e6f39af5373c02341bb2d5d175a352b64aa822da7ef2f78547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("cosmicbase.html.twig", "astronomy/cosmos.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cosmicbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Astronomy!!";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <h3>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberLista"]) ? $context["luckyNumberLista"] : null), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "astronomy/cosmos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/astronomy/cosmos.html.twig #}*/
/* {% extends 'cosmicbase.html.twig' %}*/
/* */
/* {% block title %}Astronomy!!{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>Lucky Numbers: {{ luckyNumberLista }}</h3>*/
/* {% endblock %}*/
