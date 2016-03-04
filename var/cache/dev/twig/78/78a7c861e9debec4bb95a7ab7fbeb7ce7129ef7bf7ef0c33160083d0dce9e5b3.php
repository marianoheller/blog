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
        $__internal_ed9fda02911f02d5f435a64d5b44ef84119c2addcc50ecb8b090e64b11f53c6d = $this->env->getExtension("native_profiler");
        $__internal_ed9fda02911f02d5f435a64d5b44ef84119c2addcc50ecb8b090e64b11f53c6d->enter($__internal_ed9fda02911f02d5f435a64d5b44ef84119c2addcc50ecb8b090e64b11f53c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9fda02911f02d5f435a64d5b44ef84119c2addcc50ecb8b090e64b11f53c6d->leave($__internal_ed9fda02911f02d5f435a64d5b44ef84119c2addcc50ecb8b090e64b11f53c6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6f52cdfa5e37a7b03d9d60157c2173820b617e32397e6208d817ecee40d91c3 = $this->env->getExtension("native_profiler");
        $__internal_e6f52cdfa5e37a7b03d9d60157c2173820b617e32397e6208d817ecee40d91c3->enter($__internal_e6f52cdfa5e37a7b03d9d60157c2173820b617e32397e6208d817ecee40d91c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6f52cdfa5e37a7b03d9d60157c2173820b617e32397e6208d817ecee40d91c3->leave($__internal_e6f52cdfa5e37a7b03d9d60157c2173820b617e32397e6208d817ecee40d91c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc0ea7c770cbe1878cf67351281dc16fca3459baaefca7c249f843235c9ba184 = $this->env->getExtension("native_profiler");
        $__internal_fc0ea7c770cbe1878cf67351281dc16fca3459baaefca7c249f843235c9ba184->enter($__internal_fc0ea7c770cbe1878cf67351281dc16fca3459baaefca7c249f843235c9ba184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc0ea7c770cbe1878cf67351281dc16fca3459baaefca7c249f843235c9ba184->leave($__internal_fc0ea7c770cbe1878cf67351281dc16fca3459baaefca7c249f843235c9ba184_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ca57193d8d58eb9a328d88587562298d290907bbe6740cdd9242ff6110134a0 = $this->env->getExtension("native_profiler");
        $__internal_6ca57193d8d58eb9a328d88587562298d290907bbe6740cdd9242ff6110134a0->enter($__internal_6ca57193d8d58eb9a328d88587562298d290907bbe6740cdd9242ff6110134a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ca57193d8d58eb9a328d88587562298d290907bbe6740cdd9242ff6110134a0->leave($__internal_6ca57193d8d58eb9a328d88587562298d290907bbe6740cdd9242ff6110134a0_prof);

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
