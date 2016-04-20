<?php

/* blog_content.html.twig */
class __TwigTemplate_d41f717ebbe895d942d1af5b8eba5458fc53aa759aae42ad440aae731ef341b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog_body.html.twig", "blog_content.html.twig", 1);
        $this->blocks = array(
            'posts' => array($this, 'block_posts'),
            'pagination' => array($this, 'block_pagination'),
            'authorList' => array($this, 'block_authorList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog_body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23ce12e263daebd2b34c5cf42de70a056f0459f4eac8a49dbcb66ec300cefcec = $this->env->getExtension("native_profiler");
        $__internal_23ce12e263daebd2b34c5cf42de70a056f0459f4eac8a49dbcb66ec300cefcec->enter($__internal_23ce12e263daebd2b34c5cf42de70a056f0459f4eac8a49dbcb66ec300cefcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog_content.html.twig"));

        // line 3
        $context["maxPostsPerPage"] = 3;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ce12e263daebd2b34c5cf42de70a056f0459f4eac8a49dbcb66ec300cefcec->leave($__internal_23ce12e263daebd2b34c5cf42de70a056f0459f4eac8a49dbcb66ec300cefcec_prof);

    }

    // line 5
    public function block_posts($context, array $blocks = array())
    {
        $__internal_68485c8ffa3b6bdd2e515429bca32aa5296518a7505b3d5e61116b16a91ea780 = $this->env->getExtension("native_profiler");
        $__internal_68485c8ffa3b6bdd2e515429bca32aa5296518a7505b3d5e61116b16a91ea780->enter($__internal_68485c8ffa3b6bdd2e515429bca32aa5296518a7505b3d5e61116b16a91ea780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_entries"]) ? $context["blog_entries"] : $this->getContext($context, "blog_entries")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 7
            echo "        ";
            if (($this->getAttribute($context["loop"], "index0", array()) < (isset($context["maxPostsPerPage"]) ? $context["maxPostsPerPage"] : $this->getContext($context, "maxPostsPerPage")))) {
                // line 8
                echo "            <div class=\"blog-post\">
                <h3>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
                echo " <small>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
                echo "</small></h3>
                <img class=\"thumbnail\" src=";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "image", array()), "html", null, true);
                echo ">
                <p>";
                // line 11
                echo $this->getAttribute($context["entry"], "body", array());
                echo "</p>
                <div class=\"callout\">
                    <ul class=\"menu simple\">
                        <li><a href=\"/blog/a/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "author", array()), "html", null, true);
                echo "\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "author", array()), "html", null, true);
                echo "</p></a></li>
                        <li><a href=\"#\">Comments: ";
                // line 15
                echo twig_escape_filter($this->env, twig_random($this->env, 1, 10), "html", null, true);
                echo "</a></li>
                    </ul>
                </div>
            </div>
        ";
            }
            // line 20
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_68485c8ffa3b6bdd2e515429bca32aa5296518a7505b3d5e61116b16a91ea780->leave($__internal_68485c8ffa3b6bdd2e515429bca32aa5296518a7505b3d5e61116b16a91ea780_prof);

    }

    // line 23
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_26fd97849f29d306c72c1bbaac335bcef25548531ad2390740db69208a7e7ac2 = $this->env->getExtension("native_profiler");
        $__internal_26fd97849f29d306c72c1bbaac335bcef25548531ad2390740db69208a7e7ac2->enter($__internal_26fd97849f29d306c72c1bbaac335bcef25548531ad2390740db69208a7e7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 24
        echo "    <li class=\"disabled\">Previous</li>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cantArticles"]) ? $context["cantArticles"] : $this->getContext($context, "cantArticles")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "        ";
            if ((($context["i"] % (isset($context["maxPostsPerPage"]) ? $context["maxPostsPerPage"] : $this->getContext($context, "maxPostsPerPage"))) == 0)) {
                // line 27
                echo "            ";
                $context["auxPagIndex"] = ($context["i"] / (isset($context["maxPostsPerPage"]) ? $context["maxPostsPerPage"] : $this->getContext($context, "maxPostsPerPage")));
                // line 28
                echo "            ";
                if (((isset($context["auxPagIndex"]) ? $context["auxPagIndex"] : $this->getContext($context, "auxPagIndex")) == 0)) {
                    // line 29
                    echo "                <li><a href=\"/blog\" >";
                    echo twig_escape_filter($this->env, (isset($context["auxPagIndex"]) ? $context["auxPagIndex"] : $this->getContext($context, "auxPagIndex")), "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 31
                    echo "                <li><a href=\"/blog/p/";
                    echo twig_escape_filter($this->env, (isset($context["auxPagIndex"]) ? $context["auxPagIndex"] : $this->getContext($context, "auxPagIndex")), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, (isset($context["auxPagIndex"]) ? $context["auxPagIndex"] : $this->getContext($context, "auxPagIndex")), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 33
                echo "        ";
            }
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    <li><a href=\"#\" >Next</a></li>
";
        
        $__internal_26fd97849f29d306c72c1bbaac335bcef25548531ad2390740db69208a7e7ac2->leave($__internal_26fd97849f29d306c72c1bbaac335bcef25548531ad2390740db69208a7e7ac2_prof);

    }

    // line 39
    public function block_authorList($context, array $blocks = array())
    {
        $__internal_d0a66cd28fe150f58d9692fb014e3ce346b4b10b2965f1acd90a00e49186c33d = $this->env->getExtension("native_profiler");
        $__internal_d0a66cd28fe150f58d9692fb014e3ce346b4b10b2965f1acd90a00e49186c33d->enter($__internal_d0a66cd28fe150f58d9692fb014e3ce346b4b10b2965f1acd90a00e49186c33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authorList"));

        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authorsArray"]) ? $context["authorsArray"] : $this->getContext($context, "authorsArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 41
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
        // line 43
        echo "    ";
        
        $__internal_d0a66cd28fe150f58d9692fb014e3ce346b4b10b2965f1acd90a00e49186c33d->leave($__internal_d0a66cd28fe150f58d9692fb014e3ce346b4b10b2965f1acd90a00e49186c33d_prof);

    }

    public function getTemplateName()
    {
        return "blog_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 43,  182 => 41,  177 => 40,  171 => 39,  163 => 35,  157 => 34,  154 => 33,  146 => 31,  140 => 29,  137 => 28,  134 => 27,  131 => 26,  127 => 25,  124 => 24,  118 => 23,  99 => 20,  91 => 15,  85 => 14,  79 => 11,  75 => 10,  69 => 9,  66 => 8,  63 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'blog_body.html.twig' %}*/
/* */
/* {% set maxPostsPerPage = 3 %}*/
/* */
/* {% block posts %}*/
/*     {% for entry in blog_entries  %}*/
/*         {% if loop.index0 < maxPostsPerPage %}*/
/*             <div class="blog-post">*/
/*                 <h3>{{ entry.title }} <small>{{ entry.date.format('d-m-Y') }}</small></h3>*/
/*                 <img class="thumbnail" src={{ entry.image }}>*/
/*                 <p>{{ entry.body | raw}}</p>*/
/*                 <div class="callout">*/
/*                     <ul class="menu simple">*/
/*                         <li><a href="/blog/a/{{ entry.author }}"><p>{{ entry.author }}</p></a></li>*/
/*                         <li><a href="#">Comments: {{ random(1,10) }}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block pagination %}*/
/*     <li class="disabled">Previous</li>*/
/*     {% for i in 0..(cantArticles-1) %}*/
/*         {% if (i % maxPostsPerPage) == 0 %}*/
/*             {% set auxPagIndex = i/maxPostsPerPage %}*/
/*             {% if auxPagIndex == 0 %}*/
/*                 <li><a href="/blog" >{{ auxPagIndex }}</a></li>*/
/*             {% else %}*/
/*                 <li><a href="/blog/p/{{auxPagIndex}}" >{{ auxPagIndex }}</a></li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     <li><a href="#" >Next</a></li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block authorList %}*/
/*     {% for author in authorsArray  %}*/
/*         <li><a href="/blog/a/{{ author.getName() }}">{{ author.getName() }}</a></li>*/
/*     {%  endfor %}*/
/*     {#<li><a href="#">Skyler</a></li>*/
/*     <li><a href="#">Jesse</a></li>*/
/*     <li><a href="#">Mike</a></li>*/
/*     <li><a href="#">Holly</a></li>#}*/
/* {% endblock %}*/
/* */
/* {#<li class="current"><span class="show-for-sr">You're on page</span> 1</li>*/
/* <li><a href="#" >2</a></li>*/
/* <li><a href="#" >3</a></li>*/
/* <li><a href="#" >4</a></li>*/
/* <li class="ellipsis"></li>*/
/* <li><a href="#" >12</a></li>*/
/* <li><a href="#" >13</a></li>#}*/
