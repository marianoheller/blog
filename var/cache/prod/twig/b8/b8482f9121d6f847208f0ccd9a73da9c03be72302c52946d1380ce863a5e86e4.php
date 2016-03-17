<?php

/* :lucky:luckynumber.html.twig */
class __TwigTemplate_c1fc42cff6070fcd2aa04662f56007c2d81599a6401da93ab9e6aa7bdb1984c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":lucky:luckynumber.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h3>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberLista"]) ? $context["luckyNumberLista"] : null), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return ":lucky:luckynumber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h3>Lucky Numbers: {{ luckyNumberLista }}</h3>*/
/* {% endblock %}*/
