<?php

/* blog_body.html.twig */
class __TwigTemplate_587cfb42374f5e5fb0e0557bc41b3b4a028b8ac3c908cc620c01e40ac415ca6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'posts' => array($this, 'block_posts'),
            'authorList' => array($this, 'block_authorList'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bf1ada99b84c36659303273924bfe9d7ef7ede6be593fff4fdc6ec50af0c2b3 = $this->env->getExtension("native_profiler");
        $__internal_3bf1ada99b84c36659303273924bfe9d7ef7ede6be593fff4fdc6ec50af0c2b3->enter($__internal_3bf1ada99b84c36659303273924bfe9d7ef7ede6be593fff4fdc6ec50af0c2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog_body.html.twig"));

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
\t\t\t\t<h1><a href=\"/blog\">Lorem ipsum</a></h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" id=\"content\">
\t\t\t<div class=\"medium-8 columns\">
\t\t\t\t";
        // line 32
        $this->displayBlock('posts', $context, $blocks);
        // line 33
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
\t\t\t\t\t\t";
        // line 45
        $this->displayBlock('authorList', $context, $blocks);
        // line 46
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row column\">
\t\t\t<ul class=\"pagination\" role=\"navigation\" aria-label=\"Pagination\">
\t\t\t\t";
        // line 52
        $this->displayBlock('pagination', $context, $blocks);
        // line 53
        echo "\t\t\t</ul>
\t\t</div>
\t\t<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
\t\t<script src=\"http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
\t\t<script>
\t\t\t\$(document).foundation();
\t\t</script>
\t</body>
</html>";
        
        $__internal_3bf1ada99b84c36659303273924bfe9d7ef7ede6be593fff4fdc6ec50af0c2b3->leave($__internal_3bf1ada99b84c36659303273924bfe9d7ef7ede6be593fff4fdc6ec50af0c2b3_prof);

    }

    // line 32
    public function block_posts($context, array $blocks = array())
    {
        $__internal_49c0b2740376699e4330fb4f825dbfebd31968c998493c9c74faa10b97c95790 = $this->env->getExtension("native_profiler");
        $__internal_49c0b2740376699e4330fb4f825dbfebd31968c998493c9c74faa10b97c95790->enter($__internal_49c0b2740376699e4330fb4f825dbfebd31968c998493c9c74faa10b97c95790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        echo " ";
        
        $__internal_49c0b2740376699e4330fb4f825dbfebd31968c998493c9c74faa10b97c95790->leave($__internal_49c0b2740376699e4330fb4f825dbfebd31968c998493c9c74faa10b97c95790_prof);

    }

    // line 45
    public function block_authorList($context, array $blocks = array())
    {
        $__internal_14f29adc5525012f17eefcea99c929d9b3ad538b67e51b6ba68f7d88c92e2e6c = $this->env->getExtension("native_profiler");
        $__internal_14f29adc5525012f17eefcea99c929d9b3ad538b67e51b6ba68f7d88c92e2e6c->enter($__internal_14f29adc5525012f17eefcea99c929d9b3ad538b67e51b6ba68f7d88c92e2e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authorList"));

        echo " ";
        
        $__internal_14f29adc5525012f17eefcea99c929d9b3ad538b67e51b6ba68f7d88c92e2e6c->leave($__internal_14f29adc5525012f17eefcea99c929d9b3ad538b67e51b6ba68f7d88c92e2e6c_prof);

    }

    // line 52
    public function block_pagination($context, array $blocks = array())
    {
        $__internal_2f6ed26635281b3ff6009109e1ed43d51d28088040393f50b8a816cd6ef34948 = $this->env->getExtension("native_profiler");
        $__internal_2f6ed26635281b3ff6009109e1ed43d51d28088040393f50b8a816cd6ef34948->enter($__internal_2f6ed26635281b3ff6009109e1ed43d51d28088040393f50b8a816cd6ef34948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        echo " ";
        
        $__internal_2f6ed26635281b3ff6009109e1ed43d51d28088040393f50b8a816cd6ef34948->leave($__internal_2f6ed26635281b3ff6009109e1ed43d51d28088040393f50b8a816cd6ef34948_prof);

    }

    public function getTemplateName()
    {
        return "blog_body.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 52,  113 => 45,  101 => 32,  86 => 53,  84 => 52,  76 => 46,  74 => 45,  60 => 33,  58 => 32,  25 => 1,);
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
/* 				<h1><a href="/blog">Lorem ipsum</a></h1>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row" id="content">*/
/* 			<div class="medium-8 columns">*/
/* 				{% block posts %} {% endblock %}*/
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
/* 						{% block authorList %} {% endblock %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row column">*/
/* 			<ul class="pagination" role="navigation" aria-label="Pagination">*/
/* 				{% block pagination %} {% endblock %}*/
/* 			</ul>*/
/* 		</div>*/
/* 		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* 		<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>*/
/* 		<script>*/
/* 			$(document).foundation();*/
/* 		</script>*/
/* 	</body>*/
/* </html>*/
