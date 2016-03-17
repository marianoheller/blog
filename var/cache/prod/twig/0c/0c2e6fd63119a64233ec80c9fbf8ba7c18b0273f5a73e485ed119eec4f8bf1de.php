<?php

/* astronomywebsitetemplate/contact.html */
class __TwigTemplate_0fba5051b6be0422558cf4e6f729dbc2c751c461e7779966516065389be37008 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>Contact - Astronomy Website Template</title>
\t<link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>
<body>
\t<div id=\"header\">
\t\t<div class=\"wrapper clearfix\">
\t\t\t<div id=\"logo\">
\t\t\t\t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"LOGO\"></a>
\t\t\t</div>
\t\t\t<ul id=\"navigation\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"gallery.html\">Gallery</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"selected\">
\t\t\t\t\t<a href=\"contact.html\">Contact Us</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div id=\"contents\">
\t\t<div id=\"contact\" class=\"wrapper clearfix\">
\t\t\t<div id=\"sidebar\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog.html\"><img src=\"images/earth-small.jpg\" alt=\"Img\" height=\"154\" width=\"213\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog.html\"><img src=\"images/spaceshuttle-closeup.jpg\" alt=\"Img\" height=\"154\" width=\"213\"></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"click-here\">
\t\t\t\t\t<h1>Lorem Ipsum Dolor!</h1>
\t\t\t\t\t<a href=\"index.html\" class=\"btn1\">Click Here!</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main\">
\t\t\t\t<h1>Contact Us</h1>
\t\t\t\t<form action=\"index.html\" method=\"post\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<label>Enter your full name here.</label>
\t\t\t\t\t\t\t<input type=\"text\" value=\"Full Name\" onBlur=\"javascript:if(this.value==''){this.value=this.defaultValue;}\" onFocus=\"javascript:if(this.value==this.defaultValue){this.value='';}\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<label>Enter your email address here.</label>
\t\t\t\t\t\t\t<input type=\"text\" value=\"Email Address\" onBlur=\"javascript:if(this.value==''){this.value=this.defaultValue;}\" onFocus=\"javascript:if(this.value==this.defaultValue){this.value='';}\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<label>Enter the Subject message here.</label>
\t\t\t\t\t\t\t<input type=\"text\" value=\"Subject\" onBlur=\"javascript:if(this.value==''){this.value=this.defaultValue;}\" onFocus=\"javascript:if(this.value==this.defaultValue){this.value='';}\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<label class=\"msg\">Enter your Message here.</label>
\t\t\t\t\t\t\t<textarea onBlur=\"javascript:if(this.value==''){this.value=this.defaultValue;}\" onFocus=\"javascript:if(this.value==this.defaultValue){this.value='';}\">Message</textarea>
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label for=\"terms\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"terms\">
\t\t\t\t\t\t\t\t\tI agree to the Terms and Conditions</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<label for=\"subscribe\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"subscribe\">
\t\t\t\t\t\t\t\t\tSubscribe to newsletter</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send Now\" class=\"btn3\">
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"footer\">
\t\t<ul id=\"featured\" class=\"wrapper clearfix\">
\t\t\t<li>
\t\t\t\t<img src=\"images/astronaut.jpg\" alt=\"Img\" height=\"204\" width=\"220\">
\t\t\t\t<h3><a href=\"blog.html\">Category 1</a></h3>
\t\t\t\t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"images/earth.jpg\" alt=\"Img\" height=\"204\" width=\"220\">
\t\t\t\t<h3><a href=\"blog.html\">Category 2</a></h3>
\t\t\t\t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"images/spacecraft-small.jpg\" alt=\"Img\" height=\"204\" width=\"220\">
\t\t\t\t<h3><a href=\"blog.html\">Category 3</a></h3>
\t\t\t\t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"images/space-shuttle.jpg\" alt=\"Img\" height=\"204\" width=\"220\">
\t\t\t\t<h3><a href=\"blog.html\">Category 4</a></h3>
\t\t\t\t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
\t\t\t\t</p>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"body\">
\t\t\t<div class=\"wrapper clearfix\">
\t\t\t\t<div id=\"links\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>Social</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"http://freewebsitetemplates.com/go/googleplus/\" target=\"_blank\">Google +</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"http://freewebsitetemplates.com/go/facebook/\" target=\"_blank\">Facebook</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"http://freewebsitetemplates.com/go/youtube/\" target=\"_blank\">Youtube</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>Heading placeholder</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html\">Link Title 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html\">Link Title 2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html\">Link Title 3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\tSign up for Our Newsletter
\t\t\t\t\t</p>
\t\t\t\t\t<form action=\"index.html\" method=\"post\">
\t\t\t\t\t\t<input type=\"text\" value=\"\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Sign Up!\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<p class=\"footnote\">
\t\t\t\t\t© Copyright © 2023.Company name all rights reserved
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "astronomywebsitetemplate/contact.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!-- Website template by freewebsitetemplates.com -->*/
/* <html>*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<title>Contact - Astronomy Website Template</title>*/
/* 	<link rel="stylesheet" href="css/style.css" type="text/css">*/
/* </head>*/
/* <body>*/
/* 	<div id="header">*/
/* 		<div class="wrapper clearfix">*/
/* 			<div id="logo">*/
/* 				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>*/
/* 			</div>*/
/* 			<ul id="navigation">*/
/* 				<li>*/
/* 					<a href="index.html">Home</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="about.html">About</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="blog.html">Blog</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="gallery.html">Gallery</a>*/
/* 				</li>*/
/* 				<li class="selected">*/
/* 					<a href="contact.html">Contact Us</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="contents">*/
/* 		<div id="contact" class="wrapper clearfix">*/
/* 			<div id="sidebar">*/
/* 				<ul>*/
/* 					<li>*/
/* 						<a href="blog.html"><img src="images/earth-small.jpg" alt="Img" height="154" width="213"></a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="blog.html"><img src="images/spaceshuttle-closeup.jpg" alt="Img" height="154" width="213"></a>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div class="click-here">*/
/* 					<h1>Lorem Ipsum Dolor!</h1>*/
/* 					<a href="index.html" class="btn1">Click Here!</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="main">*/
/* 				<h1>Contact Us</h1>*/
/* 				<form action="index.html" method="post">*/
/* 					<ul>*/
/* 						<li>*/
/* 							<label>Enter your full name here.</label>*/
/* 							<input type="text" value="Full Name" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">*/
/* 						</li>*/
/* 						<li>*/
/* 							<label>Enter your email address here.</label>*/
/* 							<input type="text" value="Email Address" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">*/
/* 						</li>*/
/* 						<li>*/
/* 							<label>Enter the Subject message here.</label>*/
/* 							<input type="text" value="Subject" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">*/
/* 						</li>*/
/* 						<li>*/
/* 							<label class="msg">Enter your Message here.</label>*/
/* 							<textarea onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">Message</textarea>*/
/* 							<div class="checkbox">*/
/* 								<label for="terms">*/
/* 									<input type="checkbox" id="terms">*/
/* 									I agree to the Terms and Conditions</label>*/
/* 								<br>*/
/* 								<label for="subscribe">*/
/* 									<input type="checkbox" id="subscribe">*/
/* 									Subscribe to newsletter</label>*/
/* 							</div>*/
/* 							<input type="submit" value="Send Now" class="btn3">*/
/* 						</li>*/
/* 					</ul>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="footer">*/
/* 		<ul id="featured" class="wrapper clearfix">*/
/* 			<li>*/
/* 				<img src="images/astronaut.jpg" alt="Img" height="204" width="220">*/
/* 				<h3><a href="blog.html">Category 1</a></h3>*/
/* 				<p>*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.*/
/* 				</p>*/
/* 			</li>*/
/* 			<li>*/
/* 				<img src="images/earth.jpg" alt="Img" height="204" width="220">*/
/* 				<h3><a href="blog.html">Category 2</a></h3>*/
/* 				<p>*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.*/
/* 				</p>*/
/* 			</li>*/
/* 			<li>*/
/* 				<img src="images/spacecraft-small.jpg" alt="Img" height="204" width="220">*/
/* 				<h3><a href="blog.html">Category 3</a></h3>*/
/* 				<p>*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.*/
/* 				</p>*/
/* 			</li>*/
/* 			<li>*/
/* 				<img src="images/space-shuttle.jpg" alt="Img" height="204" width="220">*/
/* 				<h3><a href="blog.html">Category 4</a></h3>*/
/* 				<p>*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.*/
/* 				</p>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<div class="body">*/
/* 			<div class="wrapper clearfix">*/
/* 				<div id="links">*/
/* 					<div>*/
/* 						<h4>Social</h4>*/
/* 						<ul>*/
/* 							<li>*/
/* 								<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank">Google +</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank">Facebook</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank">Youtube</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div>*/
/* 						<h4>Heading placeholder</h4>*/
/* 						<ul>*/
/* 							<li>*/
/* 								<a href="index.html">Link Title 1</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html">Link Title 2</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html">Link Title 3</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="newsletter">*/
/* 					<h4>Newsletter</h4>*/
/* 					<p>*/
/* 						Sign up for Our Newsletter*/
/* 					</p>*/
/* 					<form action="index.html" method="post">*/
/* 						<input type="text" value="">*/
/* 						<input type="submit" value="Sign Up!">*/
/* 					</form>*/
/* 				</div>*/
/* 				<p class="footnote">*/
/* 					© Copyright © 2023.Company name all rights reserved*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </body>*/
/* </html>*/
