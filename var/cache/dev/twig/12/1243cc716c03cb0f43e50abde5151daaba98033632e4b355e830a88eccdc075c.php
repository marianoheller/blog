<?php

/* cosmicbase.html.twig */
class __TwigTemplate_f96fe2dccd27d6028a1b97cf0189c08ed8af5bc37e21f7879af9486285a75a38 extends Twig_Template
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
        $__internal_cdc1cc6d14f1792c27bc66c7a45a9b4f789fb8b0312cab33f4f7446b691998ca = $this->env->getExtension("native_profiler");
        $__internal_cdc1cc6d14f1792c27bc66c7a45a9b4f789fb8b0312cab33f4f7446b691998ca->enter($__internal_cdc1cc6d14f1792c27bc66c7a45a9b4f789fb8b0312cab33f4f7446b691998ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cosmicbase.html.twig"));

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
        
        $__internal_cdc1cc6d14f1792c27bc66c7a45a9b4f789fb8b0312cab33f4f7446b691998ca->leave($__internal_cdc1cc6d14f1792c27bc66c7a45a9b4f789fb8b0312cab33f4f7446b691998ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87bb2b3ed3d46c79a4cf1bf844e5c315baf905dc64bfbea01e89d120b95b7da5 = $this->env->getExtension("native_profiler");
        $__internal_87bb2b3ed3d46c79a4cf1bf844e5c315baf905dc64bfbea01e89d120b95b7da5->enter($__internal_87bb2b3ed3d46c79a4cf1bf844e5c315baf905dc64bfbea01e89d120b95b7da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "!";
        
        $__internal_87bb2b3ed3d46c79a4cf1bf844e5c315baf905dc64bfbea01e89d120b95b7da5->leave($__internal_87bb2b3ed3d46c79a4cf1bf844e5c315baf905dc64bfbea01e89d120b95b7da5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89dee10834ddb9666399ffd8a27041f6500c4f168d010ac7a694ea162f33aea0 = $this->env->getExtension("native_profiler");
        $__internal_89dee10834ddb9666399ffd8a27041f6500c4f168d010ac7a694ea162f33aea0->enter($__internal_89dee10834ddb9666399ffd8a27041f6500c4f168d010ac7a694ea162f33aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89dee10834ddb9666399ffd8a27041f6500c4f168d010ac7a694ea162f33aea0->leave($__internal_89dee10834ddb9666399ffd8a27041f6500c4f168d010ac7a694ea162f33aea0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2071536f4184b23fb1b908fdb3d309ddc9f743647c50a7ad2c73583cf04dc5c0 = $this->env->getExtension("native_profiler");
        $__internal_2071536f4184b23fb1b908fdb3d309ddc9f743647c50a7ad2c73583cf04dc5c0->enter($__internal_2071536f4184b23fb1b908fdb3d309ddc9f743647c50a7ad2c73583cf04dc5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2071536f4184b23fb1b908fdb3d309ddc9f743647c50a7ad2c73583cf04dc5c0->leave($__internal_2071536f4184b23fb1b908fdb3d309ddc9f743647c50a7ad2c73583cf04dc5c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fafab2112802ac9090089a66481ca1cb94c292e218c12ba85966af85aaf744e1 = $this->env->getExtension("native_profiler");
        $__internal_fafab2112802ac9090089a66481ca1cb94c292e218c12ba85966af85aaf744e1->enter($__internal_fafab2112802ac9090089a66481ca1cb94c292e218c12ba85966af85aaf744e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fafab2112802ac9090089a66481ca1cb94c292e218c12ba85966af85aaf744e1->leave($__internal_fafab2112802ac9090089a66481ca1cb94c292e218c12ba85966af85aaf744e1_prof);

    }

    public function getTemplateName()
    {
        return "cosmicbase.html.twig";
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
/*         <title>{% block title %}!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
