<?php

/* /astronomy/cosmos.html.twig */
class __TwigTemplate_0c8f7f94e277edb85552396c2cec4f9f9e25b90ba6596b9ef393f24ef763128d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("cosmicbase.html.twig", "/astronomy/cosmos.html.twig", 2);
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
        $__internal_bc11f557e2edbca105cae1f5523da43c8a39d6d5a6b638225652582c318b3ef5 = $this->env->getExtension("native_profiler");
        $__internal_bc11f557e2edbca105cae1f5523da43c8a39d6d5a6b638225652582c318b3ef5->enter($__internal_bc11f557e2edbca105cae1f5523da43c8a39d6d5a6b638225652582c318b3ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/astronomy/cosmos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc11f557e2edbca105cae1f5523da43c8a39d6d5a6b638225652582c318b3ef5->leave($__internal_bc11f557e2edbca105cae1f5523da43c8a39d6d5a6b638225652582c318b3ef5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbce503d9a62736a1a25eeeb7ab04f687e4e78f097050b99d38f07f0dc161b98 = $this->env->getExtension("native_profiler");
        $__internal_cbce503d9a62736a1a25eeeb7ab04f687e4e78f097050b99d38f07f0dc161b98->enter($__internal_cbce503d9a62736a1a25eeeb7ab04f687e4e78f097050b99d38f07f0dc161b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Astronomy!!";
        
        $__internal_cbce503d9a62736a1a25eeeb7ab04f687e4e78f097050b99d38f07f0dc161b98->leave($__internal_cbce503d9a62736a1a25eeeb7ab04f687e4e78f097050b99d38f07f0dc161b98_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_baefc444d24583cb792c42d8b3aa7c498bc85a7ed1d0f92856127da8a261c79d = $this->env->getExtension("native_profiler");
        $__internal_baefc444d24583cb792c42d8b3aa7c498bc85a7ed1d0f92856127da8a261c79d->enter($__internal_baefc444d24583cb792c42d8b3aa7c498bc85a7ed1d0f92856127da8a261c79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h3>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberLista"]) ? $context["luckyNumberLista"] : $this->getContext($context, "luckyNumberLista")), "html", null, true);
        echo "</h3>
";
        
        $__internal_baefc444d24583cb792c42d8b3aa7c498bc85a7ed1d0f92856127da8a261c79d->leave($__internal_baefc444d24583cb792c42d8b3aa7c498bc85a7ed1d0f92856127da8a261c79d_prof);

    }

    public function getTemplateName()
    {
        return "/astronomy/cosmos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
