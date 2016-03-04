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
        $__internal_1085168767a0c5814276f816a2a284576c48623655dd137814ec5bf620f95a24 = $this->env->getExtension("native_profiler");
        $__internal_1085168767a0c5814276f816a2a284576c48623655dd137814ec5bf620f95a24->enter($__internal_1085168767a0c5814276f816a2a284576c48623655dd137814ec5bf620f95a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1085168767a0c5814276f816a2a284576c48623655dd137814ec5bf620f95a24->leave($__internal_1085168767a0c5814276f816a2a284576c48623655dd137814ec5bf620f95a24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1835b44e483f85459be550fb61057be9311212ee39df1fb6fabf8219b206811 = $this->env->getExtension("native_profiler");
        $__internal_b1835b44e483f85459be550fb61057be9311212ee39df1fb6fabf8219b206811->enter($__internal_b1835b44e483f85459be550fb61057be9311212ee39df1fb6fabf8219b206811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1835b44e483f85459be550fb61057be9311212ee39df1fb6fabf8219b206811->leave($__internal_b1835b44e483f85459be550fb61057be9311212ee39df1fb6fabf8219b206811_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f272b25409097b20c74313990dd1779e859168da852c0013267b0be39f22ed57 = $this->env->getExtension("native_profiler");
        $__internal_f272b25409097b20c74313990dd1779e859168da852c0013267b0be39f22ed57->enter($__internal_f272b25409097b20c74313990dd1779e859168da852c0013267b0be39f22ed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f272b25409097b20c74313990dd1779e859168da852c0013267b0be39f22ed57->leave($__internal_f272b25409097b20c74313990dd1779e859168da852c0013267b0be39f22ed57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_169a70a1376b98741cd55957b84215625cf836ccb7d85e16cdf02d6a8e4c3257 = $this->env->getExtension("native_profiler");
        $__internal_169a70a1376b98741cd55957b84215625cf836ccb7d85e16cdf02d6a8e4c3257->enter($__internal_169a70a1376b98741cd55957b84215625cf836ccb7d85e16cdf02d6a8e4c3257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_169a70a1376b98741cd55957b84215625cf836ccb7d85e16cdf02d6a8e4c3257->leave($__internal_169a70a1376b98741cd55957b84215625cf836ccb7d85e16cdf02d6a8e4c3257_prof);

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
