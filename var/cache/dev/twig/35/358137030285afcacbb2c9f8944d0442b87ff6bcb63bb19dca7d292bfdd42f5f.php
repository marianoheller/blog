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
        $__internal_a953bd4b69a7f2ad0e419580095e9cf72f1b9afcaa3cd699b58011c40726f0fb = $this->env->getExtension("native_profiler");
        $__internal_a953bd4b69a7f2ad0e419580095e9cf72f1b9afcaa3cd699b58011c40726f0fb->enter($__internal_a953bd4b69a7f2ad0e419580095e9cf72f1b9afcaa3cd699b58011c40726f0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a953bd4b69a7f2ad0e419580095e9cf72f1b9afcaa3cd699b58011c40726f0fb->leave($__internal_a953bd4b69a7f2ad0e419580095e9cf72f1b9afcaa3cd699b58011c40726f0fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ee0754fdfa6f6cbb0eb574fc35789c00ac5d0abd41dcd7950a7ba6ae37ffb4b = $this->env->getExtension("native_profiler");
        $__internal_7ee0754fdfa6f6cbb0eb574fc35789c00ac5d0abd41dcd7950a7ba6ae37ffb4b->enter($__internal_7ee0754fdfa6f6cbb0eb574fc35789c00ac5d0abd41dcd7950a7ba6ae37ffb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ee0754fdfa6f6cbb0eb574fc35789c00ac5d0abd41dcd7950a7ba6ae37ffb4b->leave($__internal_7ee0754fdfa6f6cbb0eb574fc35789c00ac5d0abd41dcd7950a7ba6ae37ffb4b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ec539fb9a89a1719d78fb114ad11726efe763af0ff356f35ccea4789f96f582 = $this->env->getExtension("native_profiler");
        $__internal_4ec539fb9a89a1719d78fb114ad11726efe763af0ff356f35ccea4789f96f582->enter($__internal_4ec539fb9a89a1719d78fb114ad11726efe763af0ff356f35ccea4789f96f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ec539fb9a89a1719d78fb114ad11726efe763af0ff356f35ccea4789f96f582->leave($__internal_4ec539fb9a89a1719d78fb114ad11726efe763af0ff356f35ccea4789f96f582_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e76828bb19eb74ef160e923eba82362ecfef4fe3f466f2a5db5b57e20cc8554a = $this->env->getExtension("native_profiler");
        $__internal_e76828bb19eb74ef160e923eba82362ecfef4fe3f466f2a5db5b57e20cc8554a->enter($__internal_e76828bb19eb74ef160e923eba82362ecfef4fe3f466f2a5db5b57e20cc8554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e76828bb19eb74ef160e923eba82362ecfef4fe3f466f2a5db5b57e20cc8554a->leave($__internal_e76828bb19eb74ef160e923eba82362ecfef4fe3f466f2a5db5b57e20cc8554a_prof);

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
