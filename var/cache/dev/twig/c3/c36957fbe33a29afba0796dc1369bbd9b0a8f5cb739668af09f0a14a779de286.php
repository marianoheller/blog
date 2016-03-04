<?php

/* /lucky/luckynumber.html.twig */
class __TwigTemplate_3bb93db839b29a5031a77237dd88d6c533c7a6541c2fc81979f15c3d003a1707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "/lucky/luckynumber.html.twig", 2);
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
        $__internal_9dd0b1646ff2c0d7f62bdca95cf662926a7c45c6ba6c2fbb2fa59a3f8fb7591e = $this->env->getExtension("native_profiler");
        $__internal_9dd0b1646ff2c0d7f62bdca95cf662926a7c45c6ba6c2fbb2fa59a3f8fb7591e->enter($__internal_9dd0b1646ff2c0d7f62bdca95cf662926a7c45c6ba6c2fbb2fa59a3f8fb7591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/lucky/luckynumber.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd0b1646ff2c0d7f62bdca95cf662926a7c45c6ba6c2fbb2fa59a3f8fb7591e->leave($__internal_9dd0b1646ff2c0d7f62bdca95cf662926a7c45c6ba6c2fbb2fa59a3f8fb7591e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f3aae9235ae307a73e87e0a7308e25551cdb1aa125efd27d964ce65ea621ca = $this->env->getExtension("native_profiler");
        $__internal_15f3aae9235ae307a73e87e0a7308e25551cdb1aa125efd27d964ce65ea621ca->enter($__internal_15f3aae9235ae307a73e87e0a7308e25551cdb1aa125efd27d964ce65ea621ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h3>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberLista"]) ? $context["luckyNumberLista"] : $this->getContext($context, "luckyNumberLista")), "html", null, true);
        echo "</h3>
";
        
        $__internal_15f3aae9235ae307a73e87e0a7308e25551cdb1aa125efd27d964ce65ea621ca->leave($__internal_15f3aae9235ae307a73e87e0a7308e25551cdb1aa125efd27d964ce65ea621ca_prof);

    }

    public function getTemplateName()
    {
        return "/lucky/luckynumber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h3>Lucky Numbers: {{ luckyNumberLista }}</h3>*/
/* {% endblock %}*/
