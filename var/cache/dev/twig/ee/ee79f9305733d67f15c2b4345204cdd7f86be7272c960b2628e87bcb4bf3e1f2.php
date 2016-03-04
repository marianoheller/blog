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
        $__internal_e7d304921230805cb6fb04c2e25709e46d454a0bd68497d66195ceb13a5bd6c1 = $this->env->getExtension("native_profiler");
        $__internal_e7d304921230805cb6fb04c2e25709e46d454a0bd68497d66195ceb13a5bd6c1->enter($__internal_e7d304921230805cb6fb04c2e25709e46d454a0bd68497d66195ceb13a5bd6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e7d304921230805cb6fb04c2e25709e46d454a0bd68497d66195ceb13a5bd6c1->leave($__internal_e7d304921230805cb6fb04c2e25709e46d454a0bd68497d66195ceb13a5bd6c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e598fa85b89c81e337c1ccdf102f26ee4671094be2f52e08610fe108dee8426f = $this->env->getExtension("native_profiler");
        $__internal_e598fa85b89c81e337c1ccdf102f26ee4671094be2f52e08610fe108dee8426f->enter($__internal_e598fa85b89c81e337c1ccdf102f26ee4671094be2f52e08610fe108dee8426f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e598fa85b89c81e337c1ccdf102f26ee4671094be2f52e08610fe108dee8426f->leave($__internal_e598fa85b89c81e337c1ccdf102f26ee4671094be2f52e08610fe108dee8426f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_410e49ec5e3c02cba60871ecc52032e4bf91ced4ed6a648b2c1ea9cb50ce0409 = $this->env->getExtension("native_profiler");
        $__internal_410e49ec5e3c02cba60871ecc52032e4bf91ced4ed6a648b2c1ea9cb50ce0409->enter($__internal_410e49ec5e3c02cba60871ecc52032e4bf91ced4ed6a648b2c1ea9cb50ce0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_410e49ec5e3c02cba60871ecc52032e4bf91ced4ed6a648b2c1ea9cb50ce0409->leave($__internal_410e49ec5e3c02cba60871ecc52032e4bf91ced4ed6a648b2c1ea9cb50ce0409_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_22379d2b57dc6d3f0bd8bd18d85f7525b9e1913d91640358e19cb430115a65e0 = $this->env->getExtension("native_profiler");
        $__internal_22379d2b57dc6d3f0bd8bd18d85f7525b9e1913d91640358e19cb430115a65e0->enter($__internal_22379d2b57dc6d3f0bd8bd18d85f7525b9e1913d91640358e19cb430115a65e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22379d2b57dc6d3f0bd8bd18d85f7525b9e1913d91640358e19cb430115a65e0->leave($__internal_22379d2b57dc6d3f0bd8bd18d85f7525b9e1913d91640358e19cb430115a65e0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca07bc916b3aefab4452e62fa346bfafc6208a9babb3bc0a856f78b51b23d1d9 = $this->env->getExtension("native_profiler");
        $__internal_ca07bc916b3aefab4452e62fa346bfafc6208a9babb3bc0a856f78b51b23d1d9->enter($__internal_ca07bc916b3aefab4452e62fa346bfafc6208a9babb3bc0a856f78b51b23d1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca07bc916b3aefab4452e62fa346bfafc6208a9babb3bc0a856f78b51b23d1d9->leave($__internal_ca07bc916b3aefab4452e62fa346bfafc6208a9babb3bc0a856f78b51b23d1d9_prof);

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
