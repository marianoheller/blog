<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c28db748db794c7798f4637be8807f2b82b25c6f953dfd0cb96a3b5f71a9def7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e346bdc65e448d5fe94567c4643c1c5e31b4e5cb234313ff10526f5d316e6813 = $this->env->getExtension("native_profiler");
        $__internal_e346bdc65e448d5fe94567c4643c1c5e31b4e5cb234313ff10526f5d316e6813->enter($__internal_e346bdc65e448d5fe94567c4643c1c5e31b4e5cb234313ff10526f5d316e6813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e346bdc65e448d5fe94567c4643c1c5e31b4e5cb234313ff10526f5d316e6813->leave($__internal_e346bdc65e448d5fe94567c4643c1c5e31b4e5cb234313ff10526f5d316e6813_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b4a3ee14a59c558567b6cab7cc462a5884250e427cebb127f8227df13aad6fa = $this->env->getExtension("native_profiler");
        $__internal_3b4a3ee14a59c558567b6cab7cc462a5884250e427cebb127f8227df13aad6fa->enter($__internal_3b4a3ee14a59c558567b6cab7cc462a5884250e427cebb127f8227df13aad6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b4a3ee14a59c558567b6cab7cc462a5884250e427cebb127f8227df13aad6fa->leave($__internal_3b4a3ee14a59c558567b6cab7cc462a5884250e427cebb127f8227df13aad6fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbea463acb119d4559535cc7bd8754a7a81dfccd202ed67dee4746abe8d5910f = $this->env->getExtension("native_profiler");
        $__internal_cbea463acb119d4559535cc7bd8754a7a81dfccd202ed67dee4746abe8d5910f->enter($__internal_cbea463acb119d4559535cc7bd8754a7a81dfccd202ed67dee4746abe8d5910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cbea463acb119d4559535cc7bd8754a7a81dfccd202ed67dee4746abe8d5910f->leave($__internal_cbea463acb119d4559535cc7bd8754a7a81dfccd202ed67dee4746abe8d5910f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dce2fa5787aecf4f4688b9cfe6f21a90fa4abea44a2ba5d14c6e0197c3299be = $this->env->getExtension("native_profiler");
        $__internal_8dce2fa5787aecf4f4688b9cfe6f21a90fa4abea44a2ba5d14c6e0197c3299be->enter($__internal_8dce2fa5787aecf4f4688b9cfe6f21a90fa4abea44a2ba5d14c6e0197c3299be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8dce2fa5787aecf4f4688b9cfe6f21a90fa4abea44a2ba5d14c6e0197c3299be->leave($__internal_8dce2fa5787aecf4f4688b9cfe6f21a90fa4abea44a2ba5d14c6e0197c3299be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
