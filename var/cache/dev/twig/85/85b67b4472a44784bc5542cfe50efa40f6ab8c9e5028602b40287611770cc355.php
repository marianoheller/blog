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
        $__internal_947d9caa22937d469a3dd68029af94a1098b26a5d144797a7a75215204229690 = $this->env->getExtension("native_profiler");
        $__internal_947d9caa22937d469a3dd68029af94a1098b26a5d144797a7a75215204229690->enter($__internal_947d9caa22937d469a3dd68029af94a1098b26a5d144797a7a75215204229690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 1
        echo "<!doctype html>
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
\t\t\t\t\t<li class=\"menu-text\">Yeti Agency</li>
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
\t\t\t\t<h1>Our Blog</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" id=\"content\">
\t\t\t<div class=\"medium-8 columns\">

\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_entries"]) ? $context["blog_entries"] : $this->getContext($context, "blog_entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 34
            echo "\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t<h3>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "</small></h3>
\t\t\t\t\t\t<img class=\"thumbnail\" src=";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "image", array()), "html", null, true);
            echo ">
\t\t\t\t\t\t<p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "body", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<div class=\"callout\">
\t\t\t\t\t\t\t<ul class=\"menu simple\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "author", array()), "html", null, true);
            echo "</p></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Comments: 3</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</div>
\t\t\t<div class=\"medium-3 columns\" data-sticky-container>
\t\t\t\t<div class=\"sticky\" data-sticky data-anchor=\"content\">
\t\t\t\t\t<h4>Categories</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Skyler</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Jesse</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Mike</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Holly</a></li>
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
\t\t\t\t<li class=\"current\"><span class=\"show-for-sr\">You're on page</span> 1</li>
\t\t\t\t<li><a href=\"#\" aria-label=\"Page 2\">2</a></li>
\t\t\t\t<li><a href=\"#\" aria-label=\"Page 3\">3</a></li>
\t\t\t\t<li><a href=\"#\" aria-label=\"Page 4\">4</a></li>
\t\t\t\t<li class=\"ellipsis\"></li>
\t\t\t\t<li><a href=\"#\" aria-label=\"Page 12\">12</a></li>
\t\t\t\t<li><a href=\"#\" aria-label=\"Page 13\">13</a></li>
\t\t\t\t<li><a href=\"#\" aria-label=\"Next page\">Next</a></li>
\t\t\t</ul>
\t\t</div>
\t\t<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
\t\t<script src=\"http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
\t\t<script>
\t\t\t\$(document).foundation();
\t\t</script>
\t</body>
</html>";
        
        $__internal_947d9caa22937d469a3dd68029af94a1098b26a5d144797a7a75215204229690->leave($__internal_947d9caa22937d469a3dd68029af94a1098b26a5d144797a7a75215204229690_prof);

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
        return array (  91 => 46,  79 => 40,  73 => 37,  69 => 36,  63 => 35,  60 => 34,  56 => 33,  22 => 1,);
    }
}
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
/* 					<li class="menu-text">Yeti Agency</li>*/
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
/* 				<h1>Our Blog</h1>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row" id="content">*/
/* 			<div class="medium-8 columns">*/
/* */
/* 				{% for entry in blog_entries %}*/
/* 					<div class="blog-post">*/
/* 						<h3>{{ entry.title }} <small>{{ entry.date.format('d-m-Y') }}</small></h3>*/
/* 						<img class="thumbnail" src={{ entry.image }}>*/
/* 						<p>{{ entry.body }}</p>*/
/* 						<div class="callout">*/
/* 							<ul class="menu simple">*/
/* 								<li><a href="#"><p>{{ entry.author }}</p></a></li>*/
/* 								<li><a href="#">Comments: 3</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 			    {% endfor %}*/
/* 			</div>*/
/* 			<div class="medium-3 columns" data-sticky-container>*/
/* 				<div class="sticky" data-sticky data-anchor="content">*/
/* 					<h4>Categories</h4>*/
/* 					<ul>*/
/* 						<li><a href="#">Skyler</a></li>*/
/* 						<li><a href="#">Jesse</a></li>*/
/* 						<li><a href="#">Mike</a></li>*/
/* 						<li><a href="#">Holly</a></li>*/
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
/* 				<li class="current"><span class="show-for-sr">You're on page</span> 1</li>*/
/* 				<li><a href="#" aria-label="Page 2">2</a></li>*/
/* 				<li><a href="#" aria-label="Page 3">3</a></li>*/
/* 				<li><a href="#" aria-label="Page 4">4</a></li>*/
/* 				<li class="ellipsis"></li>*/
/* 				<li><a href="#" aria-label="Page 12">12</a></li>*/
/* 				<li><a href="#" aria-label="Page 13">13</a></li>*/
/* 				<li><a href="#" aria-label="Next page">Next</a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* 		<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>*/
/* 		<script>*/
/* 			$(document).foundation();*/
/* 		</script>*/
/* 	</body>*/
/* </html>*/
