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
        $__internal_d62a75b5af53bed668aa81168a0994c97fe8be3cbc8c3933f53be97a6c008e9c = $this->env->getExtension("native_profiler");
        $__internal_d62a75b5af53bed668aa81168a0994c97fe8be3cbc8c3933f53be97a6c008e9c->enter($__internal_d62a75b5af53bed668aa81168a0994c97fe8be3cbc8c3933f53be97a6c008e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d62a75b5af53bed668aa81168a0994c97fe8be3cbc8c3933f53be97a6c008e9c->leave($__internal_d62a75b5af53bed668aa81168a0994c97fe8be3cbc8c3933f53be97a6c008e9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6132f10f91b4f3c5c13c8c1f0fc31d35ef8428811d948ba11f5571168b073794 = $this->env->getExtension("native_profiler");
        $__internal_6132f10f91b4f3c5c13c8c1f0fc31d35ef8428811d948ba11f5571168b073794->enter($__internal_6132f10f91b4f3c5c13c8c1f0fc31d35ef8428811d948ba11f5571168b073794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6132f10f91b4f3c5c13c8c1f0fc31d35ef8428811d948ba11f5571168b073794->leave($__internal_6132f10f91b4f3c5c13c8c1f0fc31d35ef8428811d948ba11f5571168b073794_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e1c4719bddfdf6ca5389f636e67f5de96938ad10fb819c2086664a82d942a01 = $this->env->getExtension("native_profiler");
        $__internal_7e1c4719bddfdf6ca5389f636e67f5de96938ad10fb819c2086664a82d942a01->enter($__internal_7e1c4719bddfdf6ca5389f636e67f5de96938ad10fb819c2086664a82d942a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e1c4719bddfdf6ca5389f636e67f5de96938ad10fb819c2086664a82d942a01->leave($__internal_7e1c4719bddfdf6ca5389f636e67f5de96938ad10fb819c2086664a82d942a01_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca11c3bc13b086c8cfd30da665fd1b402e451d763a79c41f7d439aec26124cdb = $this->env->getExtension("native_profiler");
        $__internal_ca11c3bc13b086c8cfd30da665fd1b402e451d763a79c41f7d439aec26124cdb->enter($__internal_ca11c3bc13b086c8cfd30da665fd1b402e451d763a79c41f7d439aec26124cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca11c3bc13b086c8cfd30da665fd1b402e451d763a79c41f7d439aec26124cdb->leave($__internal_ca11c3bc13b086c8cfd30da665fd1b402e451d763a79c41f7d439aec26124cdb_prof);

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
