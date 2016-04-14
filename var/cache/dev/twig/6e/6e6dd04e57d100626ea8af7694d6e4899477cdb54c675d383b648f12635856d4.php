<?php

/* author_content.html.twig */
class __TwigTemplate_1988fd305ca8cc7d17534b05e433afb97b8a11e62bcd30a530de1f222f1ed474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog_body.html.twig", "author_content.html.twig", 1);
        $this->blocks = array(
            'posts' => array($this, 'block_posts'),
            'authorList' => array($this, 'block_authorList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog_body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1a87ddf7d88d96777f626b7d9d325a68ad9917e0e76e755720af9f4f71be07b = $this->env->getExtension("native_profiler");
        $__internal_c1a87ddf7d88d96777f626b7d9d325a68ad9917e0e76e755720af9f4f71be07b->enter($__internal_c1a87ddf7d88d96777f626b7d9d325a68ad9917e0e76e755720af9f4f71be07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a87ddf7d88d96777f626b7d9d325a68ad9917e0e76e755720af9f4f71be07b->leave($__internal_c1a87ddf7d88d96777f626b7d9d325a68ad9917e0e76e755720af9f4f71be07b_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_a98cfaf35100e62eee0c3700a5d016bc8a708f990e9fbdea60b3b7e90ffaa31e = $this->env->getExtension("native_profiler");
        $__internal_a98cfaf35100e62eee0c3700a5d016bc8a708f990e9fbdea60b3b7e90ffaa31e->enter($__internal_a98cfaf35100e62eee0c3700a5d016bc8a708f990e9fbdea60b3b7e90ffaa31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "    ";
        if (twig_test_empty((isset($context["authorsArray"]) ? $context["authorsArray"] : $this->getContext($context, "authorsArray")))) {
            // line 5
            echo "        <p> Author not found!</p>
    ";
        } else {
            // line 7
            echo "        <ul>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["authorsArray"]) ? $context["authorsArray"] : $this->getContext($context, "authorsArray")));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 9
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "getName", array(), "method"), "html", null, true);
                echo "</a></li>
                <ul>
                    <li> Mail: ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "getMail", array(), "method"), "html", null, true);
                echo "</li>
                    <li> Last post: ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["author"], "getLastPostDate", array(), "method"), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
                echo "</li>
                </ul>
                <p> </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
    ";
        }
        
        $__internal_a98cfaf35100e62eee0c3700a5d016bc8a708f990e9fbdea60b3b7e90ffaa31e->leave($__internal_a98cfaf35100e62eee0c3700a5d016bc8a708f990e9fbdea60b3b7e90ffaa31e_prof);

    }

    // line 21
    public function block_authorList($context, array $blocks = array())
    {
        $__internal_b744ac31faa3209aa9c139f967ff96441ffb68da5eb285623d7e768db2561f57 = $this->env->getExtension("native_profiler");
        $__internal_b744ac31faa3209aa9c139f967ff96441ffb68da5eb285623d7e768db2561f57->enter($__internal_b744ac31faa3209aa9c139f967ff96441ffb68da5eb285623d7e768db2561f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authorList"));

        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAuthorsArray"]) ? $context["allAuthorsArray"] : $this->getContext($context, "allAuthorsArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 23
            echo "        <li><a href=\"/blog/a/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "getName", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        
        $__internal_b744ac31faa3209aa9c139f967ff96441ffb68da5eb285623d7e768db2561f57->leave($__internal_b744ac31faa3209aa9c139f967ff96441ffb68da5eb285623d7e768db2561f57_prof);

    }

    public function getTemplateName()
    {
        return "author_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  95 => 23,  90 => 22,  84 => 21,  75 => 16,  65 => 12,  61 => 11,  55 => 9,  51 => 8,  48 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'blog_body.html.twig' %}*/
/* */
/* {% block posts %}*/
/*     {% if authorsArray is empty %}*/
/*         <p> Author not found!</p>*/
/*     {% else %}*/
/*         <ul>*/
/*             {% for author in authorsArray  %}*/
/*                 <li>{{ author.getName() }}</a></li>*/
/*                 <ul>*/
/*                     <li> Mail: {{ author.getMail() }}</li>*/
/*                     <li> Last post: {{ author.getLastPostDate().format('d-m-Y') }}</li>*/
/*                 </ul>*/
/*                 <p> </p>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block authorList %}*/
/*     {% for author in allAuthorsArray  %}*/
/*         <li><a href="/blog/a/{{ author.getName() }}">{{ author.getName() }}</a></li>*/
/*     {%  endfor %}*/
/*     {#<li><a href="#">Skyler</a></li>*/
/*     <li><a href="#">Jesse</a></li>*/
/*     <li><a href="#">Mike</a></li>*/
/*     <li><a href="#">Holly</a></li>#}*/
/* {% endblock %}*/
