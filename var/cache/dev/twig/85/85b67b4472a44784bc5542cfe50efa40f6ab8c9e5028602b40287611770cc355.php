<?php

/* blog.html.twig */
class __TwigTemplate_d89c88604d60c4b571b79e77a1f2d49a0949ed4ff3413b468987e8e20ca54e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_923d90cdb01665feaecc44773b4bca5d37fe46a4b017e97ecdb1e44f565496e5 = $this->env->getExtension("native_profiler");
        $__internal_923d90cdb01665feaecc44773b4bca5d37fe46a4b017e97ecdb1e44f565496e5->enter($__internal_923d90cdb01665feaecc44773b4bca5d37fe46a4b017e97ecdb1e44f565496e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 1
        $context["maxPostsPerPage"] = 2;
        // line 2
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<title>Foundation | Welcome</title>
\t\t<link rel=\"stylesheet\" href=\"http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
\t</head>
\t<body>
\t\t<div class=\"top-bar\">
\t\t\t<div class=\"top-bar-left\">
\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t<li class=\"menu-text\">Lorem Agency</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"top-bar-right\">
\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t<li><a href=\"#\">One</a></li>
\t\t\t\t\t<li><a href=\"#\">Two</a></li>
\t\t\t\t\t<li><a href=\"#\">Three</a></li>
\t\t\t\t\t<li><a href=\"#\">Four</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"callout large primary\">
\t\t\t<div class=\"row column text-center\">
\t\t\t\t<h1>Lorem ipsum</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" id=\"content\">
\t\t\t<div class=\"medium-8 columns\">

\t\t\t\t";
        // line 35
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
            // line 36
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index0", array()) < (isset($context["maxPostsPerPage"]) ? $context["maxPostsPerPage"] : $this->getContext($context, "maxPostsPerPage")))) {
                // line 37
                echo "\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<h3>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
                echo " <small>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
                echo "</small></h3>
\t\t\t\t\t\t\t<img class=\"thumbnail\" src=";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "image", array()), "html", null, true);
                echo ">
\t\t\t\t\t\t\t<p>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "body", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"callout\">
\t\t\t\t\t\t\t\t<ul class=\"menu simple\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><p>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "author", array()), "html", null, true);
                echo "</p></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Comments: 3</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t    ";
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
        // line 50
        echo "\t\t\t</div>
\t\t\t<div class=\"medium-3 columns\" data-sticky-container>
\t\t\t\t<div class=\"sticky\" data-sticky data-anchor=\"content\">
\t\t\t\t\t<h4>Categories</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">A</a></li>
\t\t\t\t\t\t<li><a href=\"#\">B</a></li>
\t\t\t\t\t\t<li><a href=\"#\">C</a></li>
\t\t\t\t\t\t<li><a href=\"#\">D</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<h4>Authors</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Skyler</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Jesse</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Mike</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Holly</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row column\">
\t\t\t<ul class=\"pagination\" role=\"navigation\" aria-label=\"Pagination\">
\t\t\t\t<li class=\"disabled\">Previous</li>

\t\t\t\t";
        // line 74
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
            // line 75
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($context["loop"], "index0", array()) % (isset($context["maxPostsPerPage"]) ? $context["maxPostsPerPage"] : $this->getContext($context, "maxPostsPerPage"))) == 0)) {
                // line 76
                echo "\t\t\t\t\t\t";
                $context["auxPagIndex"] = ($this->getAttribute($context["loop"], "index0", array()) / (isset($context["maxPostsPerPage"]) ? $context["maxPostsPerPage"] : $this->getContext($context, "maxPostsPerPage")));
                // line 77
                echo "\t\t\t\t\t\t<li><a href=\"#";
                echo twig_escape_filter($this->env, (isset($context["auxPagIndex"]) ? $context["auxPagIndex"] : $this->getContext($context, "auxPagIndex")), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, (isset($context["auxPagIndex"]) ? $context["auxPagIndex"] : $this->getContext($context, "auxPagIndex")), "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t";
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
        // line 80
        echo "\t\t\t\t";
        // line 87
        echo "
\t\t\t\t<li><a href=\"#\" >Next</a></li>
\t\t\t</ul>
\t\t</div>
\t\t<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
\t\t<script src=\"http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
\t\t<script>
\t\t\t\$(document).foundation();
\t\t</script>
\t</body>
</html>";
        
        $__internal_923d90cdb01665feaecc44773b4bca5d37fe46a4b017e97ecdb1e44f565496e5->leave($__internal_923d90cdb01665feaecc44773b4bca5d37fe46a4b017e97ecdb1e44f565496e5_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 87,  192 => 80,  178 => 79,  170 => 77,  167 => 76,  164 => 75,  147 => 74,  121 => 50,  107 => 49,  98 => 43,  92 => 40,  88 => 39,  82 => 38,  79 => 37,  76 => 36,  59 => 35,  24 => 2,  22 => 1,);
    }
}
/* {% set maxPostsPerPage = 2 %}*/
/* */
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* 	<head>*/
/* 		<meta charset="utf-8"/>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* 		<title>Foundation | Welcome</title>*/
/* 		<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">*/
/* 	</head>*/
/* 	<body>*/
/* 		<div class="top-bar">*/
/* 			<div class="top-bar-left">*/
/* 				<ul class="menu">*/
/* 					<li class="menu-text">Lorem Agency</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="top-bar-right">*/
/* 				<ul class="menu">*/
/* 					<li><a href="#">One</a></li>*/
/* 					<li><a href="#">Two</a></li>*/
/* 					<li><a href="#">Three</a></li>*/
/* 					<li><a href="#">Four</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="callout large primary">*/
/* 			<div class="row column text-center">*/
/* 				<h1>Lorem ipsum</h1>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row" id="content">*/
/* 			<div class="medium-8 columns">*/
/* */
/* 				{% for entry in blog_entries  %}*/
/* 					{% if loop.index0 < maxPostsPerPage %}*/
/* 						<div class="blog-post">*/
/* 							<h3>{{ entry.title }} <small>{{ entry.date.format('d-m-Y') }}</small></h3>*/
/* 							<img class="thumbnail" src={{ entry.image }}>*/
/* 							<p>{{ entry.body }}</p>*/
/* 							<div class="callout">*/
/* 								<ul class="menu simple">*/
/* 									<li><a href="#"><p>{{ entry.author }}</p></a></li>*/
/* 									<li><a href="#">Comments: 3</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 			    {% endfor %}*/
/* 			</div>*/
/* 			<div class="medium-3 columns" data-sticky-container>*/
/* 				<div class="sticky" data-sticky data-anchor="content">*/
/* 					<h4>Categories</h4>*/
/* 					<ul>*/
/* 						<li><a href="#">A</a></li>*/
/* 						<li><a href="#">B</a></li>*/
/* 						<li><a href="#">C</a></li>*/
/* 						<li><a href="#">D</a></li>*/
/* 					</ul>*/
/* 					<h4>Authors</h4>*/
/* 					<ul>*/
/* 						<li><a href="#">Skyler</a></li>*/
/* 						<li><a href="#">Jesse</a></li>*/
/* 						<li><a href="#">Mike</a></li>*/
/* 						<li><a href="#">Holly</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row column">*/
/* 			<ul class="pagination" role="navigation" aria-label="Pagination">*/
/* 				<li class="disabled">Previous</li>*/
/* */
/* 				{% for entry in blog_entries %}*/
/* 					{% if (loop.index0%maxPostsPerPage) == 0 %}*/
/* 						{% set auxPagIndex = loop.index0/maxPostsPerPage %}*/
/* 						<li><a href="#{{auxPagIndex}}" >{{ auxPagIndex }}</a></li>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				{#<li class="current"><span class="show-for-sr">You're on page</span> 1</li>*/
/* 				<li><a href="#" >2</a></li>*/
/* 				<li><a href="#" >3</a></li>*/
/* 				<li><a href="#" >4</a></li>*/
/* 				<li class="ellipsis"></li>*/
/* 				<li><a href="#" >12</a></li>*/
/* 				<li><a href="#" >13</a></li>#}*/
/* */
/* 				<li><a href="#" >Next</a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* 		<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>*/
/* 		<script>*/
/* 			$(document).foundation();*/
/* 		</script>*/
/* 	</body>*/
/* </html>*/
