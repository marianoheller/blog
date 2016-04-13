<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3afbefb9f1eac09a906a156dad3c1c6e2e052611a4af8eed99bf6d9aab4137d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7c342b80acf85532f6a19982aa7fd63a004b0d90bd5fe56013a883bc57260e1 = $this->env->getExtension("native_profiler");
        $__internal_a7c342b80acf85532f6a19982aa7fd63a004b0d90bd5fe56013a883bc57260e1->enter($__internal_a7c342b80acf85532f6a19982aa7fd63a004b0d90bd5fe56013a883bc57260e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c342b80acf85532f6a19982aa7fd63a004b0d90bd5fe56013a883bc57260e1->leave($__internal_a7c342b80acf85532f6a19982aa7fd63a004b0d90bd5fe56013a883bc57260e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_574f66bcf35504bc4bffc86f15141f2d4f59565bd9f8bd7ebd0dfdde76a2a8ef = $this->env->getExtension("native_profiler");
        $__internal_574f66bcf35504bc4bffc86f15141f2d4f59565bd9f8bd7ebd0dfdde76a2a8ef->enter($__internal_574f66bcf35504bc4bffc86f15141f2d4f59565bd9f8bd7ebd0dfdde76a2a8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_574f66bcf35504bc4bffc86f15141f2d4f59565bd9f8bd7ebd0dfdde76a2a8ef->leave($__internal_574f66bcf35504bc4bffc86f15141f2d4f59565bd9f8bd7ebd0dfdde76a2a8ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d98f009df20848b30fca85d1dbc5d4389b2c8e4ff8c4953fcaf095a22d920f6 = $this->env->getExtension("native_profiler");
        $__internal_0d98f009df20848b30fca85d1dbc5d4389b2c8e4ff8c4953fcaf095a22d920f6->enter($__internal_0d98f009df20848b30fca85d1dbc5d4389b2c8e4ff8c4953fcaf095a22d920f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d98f009df20848b30fca85d1dbc5d4389b2c8e4ff8c4953fcaf095a22d920f6->leave($__internal_0d98f009df20848b30fca85d1dbc5d4389b2c8e4ff8c4953fcaf095a22d920f6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa5d1a086640d1416639ff2bd17db210fece467e1c9cd4edd8e066c8d8c0ece = $this->env->getExtension("native_profiler");
        $__internal_8aa5d1a086640d1416639ff2bd17db210fece467e1c9cd4edd8e066c8d8c0ece->enter($__internal_8aa5d1a086640d1416639ff2bd17db210fece467e1c9cd4edd8e066c8d8c0ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8aa5d1a086640d1416639ff2bd17db210fece467e1c9cd4edd8e066c8d8c0ece->leave($__internal_8aa5d1a086640d1416639ff2bd17db210fece467e1c9cd4edd8e066c8d8c0ece_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
