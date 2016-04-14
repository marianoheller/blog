<?php

/* base.html.twig */
class __TwigTemplate_ed176fc5aa84488d1e8585f58192758bcf5022e6e508553134ea3d91b28853c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_440df6eb4923da36bc05401c570a36b58b24f2546d824a3359c0d59c03bef556 = $this->env->getExtension("native_profiler");
        $__internal_440df6eb4923da36bc05401c570a36b58b24f2546d824a3359c0d59c03bef556->enter($__internal_440df6eb4923da36bc05401c570a36b58b24f2546d824a3359c0d59c03bef556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_440df6eb4923da36bc05401c570a36b58b24f2546d824a3359c0d59c03bef556->leave($__internal_440df6eb4923da36bc05401c570a36b58b24f2546d824a3359c0d59c03bef556_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79745fb299aadc247b7f655de5f99e57e32edd752fe6ef997eb135d87c55bfba = $this->env->getExtension("native_profiler");
        $__internal_79745fb299aadc247b7f655de5f99e57e32edd752fe6ef997eb135d87c55bfba->enter($__internal_79745fb299aadc247b7f655de5f99e57e32edd752fe6ef997eb135d87c55bfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79745fb299aadc247b7f655de5f99e57e32edd752fe6ef997eb135d87c55bfba->leave($__internal_79745fb299aadc247b7f655de5f99e57e32edd752fe6ef997eb135d87c55bfba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_635299d7b5da4d4acfc7d41b7dea6ea89a48650b5e34a88df0c3cdcdf7ea5f4f = $this->env->getExtension("native_profiler");
        $__internal_635299d7b5da4d4acfc7d41b7dea6ea89a48650b5e34a88df0c3cdcdf7ea5f4f->enter($__internal_635299d7b5da4d4acfc7d41b7dea6ea89a48650b5e34a88df0c3cdcdf7ea5f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_635299d7b5da4d4acfc7d41b7dea6ea89a48650b5e34a88df0c3cdcdf7ea5f4f->leave($__internal_635299d7b5da4d4acfc7d41b7dea6ea89a48650b5e34a88df0c3cdcdf7ea5f4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_91852d35fc57771215ca61a48e15d70fa7c838b8c42cf493b7c8ee3125732a40 = $this->env->getExtension("native_profiler");
        $__internal_91852d35fc57771215ca61a48e15d70fa7c838b8c42cf493b7c8ee3125732a40->enter($__internal_91852d35fc57771215ca61a48e15d70fa7c838b8c42cf493b7c8ee3125732a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91852d35fc57771215ca61a48e15d70fa7c838b8c42cf493b7c8ee3125732a40->leave($__internal_91852d35fc57771215ca61a48e15d70fa7c838b8c42cf493b7c8ee3125732a40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a93b56058743ad576ae9d067b8d72ce71785e21cc7428b1c5c5131d5a32c511 = $this->env->getExtension("native_profiler");
        $__internal_6a93b56058743ad576ae9d067b8d72ce71785e21cc7428b1c5c5131d5a32c511->enter($__internal_6a93b56058743ad576ae9d067b8d72ce71785e21cc7428b1c5c5131d5a32c511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a93b56058743ad576ae9d067b8d72ce71785e21cc7428b1c5c5131d5a32c511->leave($__internal_6a93b56058743ad576ae9d067b8d72ce71785e21cc7428b1c5c5131d5a32c511_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
