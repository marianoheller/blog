<?php

/* astronomy/css/style.css */
class __TwigTemplate_04e2d97df9f534570fae13a64df092815a59ff848f5fe78b3bd24ba82c34790a extends Twig_Template
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
        echo "/* Website template by freewebsitetemplates.com */
@font-face {
\tfont-family: 'PTSerif-Caption';
\tsrc: url('../fonts/PT_Serif-Caption-Web-Regular.eot');
\tsrc: local('☺'), url('../fonts/PT_Serif-Caption-Web-Regular.woff') format('woff'), url('../fonts/PT_Serif-Caption-Web-Regular.ttf') format('truetype'), url('../fonts/PT_Serif-Caption-Web-Regular.svg') format('svg');
\tfont-weight: normal;
\tfont-style: normal;
}
body {
\tbackground: url(../images/bg-body.jpg) repeat left top;
\tfont-family: Arial, Helvetica, sans-serif;
\tmin-width: 960px;
\tmargin: 0;
}
img {
\tborder: 0;
}
.wrapper {
\twidth: 960px;
\tmargin: 0 auto;
}
.clearfix:after {
\tclear:both;
\tcontent:\"\";
\tdisplay:block;
\theight:1%;
\tline-height:0;
\tvisibility:hidden;
}
/*------------------------------ HEADER ------------------------------*/
.btn1, .btn2, .btn3, #newsletter input {
\tbackground: url(../images/interface.png) no-repeat;
}
.btn1, .btn2, .btn3 {
\tcolor: #fdfdfd;
\tdisplay: inline-block;
\tfont-size: 14px;
\tfont-weight: bold;
\ttext-align: center;
\ttext-decoration: none;
\ttext-shadow: -3px 0 3px #053131;
\ttext-transform: uppercase;
}
.btn1 {
\tbackground-position: 0 0;
\theight: 34px;
\tline-height: 34px;
\twidth: 202px;
\tpadding: 0 3px 9px;
}
.btn2 {
\tbackground-position: 0 -53px;
\theight: 37px;
\tline-height: 37px;
\twidth: 216px;
\tpadding: 0 3px 8px;
}
.btn3 {
\tbackground-position: 0 -108px;
\tfont: 22px/49px Georgia, \"Times New Roman\", Times, serif;
\theight: 49px;
\twidth: 222px;
}
.btn1:hover {
\tbackground-position: -222px 0;
}
.btn2:hover {
\tbackground-position: -232px -53px;
}
.btn3:hover {
\tbackground-position: -232px -108px;
}
/*------------------------------ HEADER ------------------------------*/
#header {
\tbackground: url(../images/bg-header.png) repeat-x center top;
\theight: 50px;
\tpadding: 16px 0 0;
\ttext-align: right;
}
/** Logo **/
#logo {
\tfloat: left;
\tdisplay: inline-block;
\tmargin-left: 10px;
}
/** Navigation **/
#navigation {
\tdisplay: inline-block;
\theight: 30px;
\tlist-style: none;
\tmargin: 0 10px;
\tpadding: 0;
*width: 516px; /** Needed for IE7 **/
}
#navigation li {
\tfloat: left;
\tmargin: 0 30px;
}
#navigation li:first-child {
\tmargin-left: 0;
}
#navigation li a {
\tcolor: #efefef;
\tline-height: 30px;
\tpadding: 0;
\ttext-decoration: none;
}
#navigation li a:hover, #navigation li.selected a {
\tcolor: #44b2f1;
}
/*------------------------------ CONTENTS ------------------------------*/
#contents {
\tbackground: url(../images/bg-content.png) repeat-x center top;
\tmargin: 0 0 24px;
\tpadding: 56px 0 0;
}
#contents h1, #featured h3 {
\tcolor: #fbfdfd;
\tfont: italic 34px Georgia, \"Times New Roman\", Times, serif;
\tfont-style: italic;
\tmargin: 0 0 18px;
}
#contents p {
\tcolor: #e8eff4;
\tfont-size: 14px;
\tline-height: 24px;
\tmargin: 0;
\tpadding: 0 0 30px;
\ttext-align: justify;
}
#contents p a {
\tcolor: #e8eff4;
}
#contents p a:hover {
\tcolor: #0aa3fa;
}
#contents p b {
\tdisplay: block;
}
#contents .body {
\twidth: 940px;
\tmargin: 0 auto;
\tpadding: 0 10px;
}
#contents .click-here {
\tfloat: right;
\tbackground: url(../images/spacecraft.jpg) no-repeat center top;
\tdisplay: inline-block;
\theight: 162px;
\twidth: 301px;
\tmargin-left: 20px;
\ttext-align: center;
}
#contents .click-here h1 {
\tcolor: #addcfe;
\tfont-style: italic;
\tline-height: 36px;
\tmargin: 18px 0;
}
/** adbox **/
#adbox {
\tbackground: #020a13 url(../images/bg-adbox.jpg) no-repeat center top;
\tfont-family: Georgia, \"Times New Roman\", Times, serif;
\tmin-height: 433px;
\tmargin: -56px 0 22px;
/** Needed for IE7 **/
*margin: 0;
*position: relative;
*top: -56px;
}
#adbox .wrapper {
\twidth: 940px;
\tpadding: 54px 10px 26px;
}
#adbox .info {
\theight: 354px;
\twidth: 330px;
\toverflow: hidden;
}
#adbox h1 {
\tcolor: #ffffff;
\tfont-size: 48px;
\tfont-style: italic;
\tline-height: 50px;
\tmargin-bottom: 30px;
}
#adbox p {
\tcolor: #176eb0;
\tfont-size: 14px;
\tline-height: 24px;
}
#adbox p a {
\tcolor: #176eb0;
}
#adbox div.highlight {
\tbackground: #171a1a url(../images/adbox-bg-heading.jpg) repeat-x left top;
\tmin-height: 82px;
\tborder-color: #000;
\tborder-style: solid none;
\tborder-width: 1px;
}
#adbox div.highlight h2 {
\tcolor: #484b4b;
\tfont-size: 34px;
\tline-height: 82px;
\twidth: 940px;
\tmargin: 0 auto;
\tpadding: 0 10px;
\ttext-shadow: -3px 0 3px #121413;
}
#adbox div.highlight h2 i {
\tfont-weight: normal;
}
/** main **/
.main {
\tpadding: 0 10px;
}
/** sidebar **/
#sidebar {
\tfloat: right;
\twidth: 220px;
\tmargin: 0 10px 0 80px;
}
#sidebar ul {
\tlist-style: none;
\tmargin: 0 0 80px;
\tpadding: 0;
}
#sidebar > ul li {
\tmargin: 0 0 16px;
}
#sidebar > ul li img {
\tborder: 4px solid #fff;
\tborder-radius: 3px;
}
#sidebar > ul li a:hover {
\tfilter:alpha(opacity=80);
\topacity:0.8;
}
#sidebar .click-here {
\tbackground: url(../images/spacecraft-dark.jpg) no-repeat center top;
\tdisplay: inline-block;
\theight: 162px;
\twidth: 221px;
\tmargin-left: 20px;
\ttext-align: center;
}
/** time **/
.time {
\tcolor: #2986bb;
\tfont-size: 12px;
}
/** list **/
.list {
\tlist-style: none;
\tmargin: 0;
\tpadding: 0;
}
.list li span.time {
\tfloat: right;
\tmargin-top: 6px;
}
.list li h4 {
\tcolor: #fbfdfd;
\tfont-size: 16px;
\tline-height: 24px;
\tmargin: 0;
\ttext-transform: uppercase;
}
.list li {
\tpadding: 0 0 48px;
}
#contents .list li p {
\tpadding: 0;
}
.list li a.more {
\tfloat: right;
\tcolor: #34b0fb;
\tdisplay: inline-block;
\tfont-size: 14px;
}
.list li a.more:hover {
\tcolor: #c3e9fe;
}
/** pagination **/
.pagination {
\tdisplay: inline-block;
\tlist-style: none;
\tmargin: 0;
\tpadding: 0;
}
.pagination li {
\tfloat: left;
\tfont: 12px Arial, Helvetica, sans-serif;
\tmargin: 0 2px;
}
.pagination li a {
\tcolor: #36b4fd;
\tpadding: 3px;
\ttext-decoration: none;
}
.pagination li a:hover, #pagination li.selected a {
\tcolor: #95d3f9;
}
/** gallery **/
#gallery #sidebar, #contact #sidebar {
\tmargin-left: 10px;
}
#gallery .photos {
\tmargin: 0 0 20px;
}
#gallery .viewer {
\tmargin: 0 0 18px;
}
#gallery .photos > ul {
\tbackground-color: #072a3e;
\tdisplay: inline-block;
\tlist-style: none;
\tmargin: 0;
\tpadding: 12px 15px;
}
#gallery .photos > ul li {
\tfloat: left;
\tmargin: 0 9px;
\tposition: relative;
}
#gallery .photos > ul li a:hover span.cover {
\tbackground-color: #e8eff4;
\tdisplay: block;
\theight: 96px;
\twidth: 100%;
\topacity: 0.49;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}
/** Contact **/
#contact form {
\twidth: 709px;
}
#contact form ul {
\tlist-style: none;
\tmargin: 0;
\tpadding: 0;
}
#contact form ul li {
\tdisplay: inline-block;
\twidth: 100%;
\tmargin: 0 0 18px;
}
#contact form ul li > label {
\tfloat: right;
\tcolor: #e8eff4;
\tdisplay: inline-block;
\tfont: italic 14px/36px 'PTSerif-Caption';
\twidth: 230px;
}
#contact form ul li > label.msg {
\tmargin-bottom: 60px;
\tpadding-top: 80px;
}
#contact form ul li:hover > label {
\tcolor: #2da6fc;
}
#contact textarea {
\tfloat: left;
\tbackground-color: #fff;
\tcolor: #060606;
\tfont: 14px/36px Arial, Helvetica, sans-serif;
\theight: 367px;
\twidth: 450px;
\tborder: 0;
\tmargin: 0 10px 0 0;
\tpadding-left: 10px;
\toverflow: auto;
}
#contact form ul li div {
\tdisplay: inline-block;
\twidth: 225px;
\tmargin: 50px 0;
\tpadding-left: 5px;
}
#contact form ul li div label {
\tcolor: #fcc43d;
\tdisplay: inline-block;
\tfont: 12px Arial, Helvetica, sans-serif;
\tfont-weight: normal;
}
#contact input[type='text'] {
\tbackground-color: #fff;
\tcolor: #060606;
\tfont: 14px/36px Arial, Helvetica, sans-serif;
\theight: 36px;
\twidth: 440px;
\tborder: 0;
\tmargin-right: 10px;
\tpadding: 0 10px;
}
#contact input[type='checkbox'] {
\tbackground-position: 0 0;
\theight: 13px;
\twidth: 12px;
\tborder: 0;
\tmargin-left: 0;
\tmargin-right: 10px;
\tpadding: 0;
}
#contact input[type='submit'] {
\tcursor: pointer;
\tborder: 0;
\tmargin-top: 3px;
\tmargin-left: 5px;
}
#contact div.checkbox label {
\tcursor: pointer;
}
/*------------------------------ FOOTER ------------------------------*/
#footer {
\tbackground-color: #e8eff4;
\tborder-top: 1px solid #fdfcfc;
}
#footer .body {
\tbackground: #072438 url(../images/bg-footer.jpg) no-repeat center top;
\tmin-height: 136px;
\tpadding: 36px 0;
}
#footer h4 {
\tcolor: #fff;
\tfont: normal 14px Georgia, \"Times New Roman\", Times, serif;
\tmargin: 0 0 12px;
}
#footer p {
\tcolor: #7890a1;
\tfont-size: 12px;
\tline-height: 24px;
\tmargin: 0;
\tpadding: 0 0 6px;
}
/** featured **/
#featured {
\tdisplay: block;
\tlist-style: none;
\twidth: 960px;
\tmargin: 0 auto;
\tpadding: 30px 0;
}
#featured li {
\tfloat: left;
\twidth: 220px;
\tmargin: 0 10px;
\ttext-align: center;
}
#featured li h3 {
\tcolor: #07304d;
\tfont-size: 18px;
\tmargin: 18px 0;
}
#featured li h3 a {
\tcolor: #07304d;
\ttext-decoration: none;
}
#featured li h3 a:hover {
\tcolor: #51a9e9;
}
#featured li p {
\tcolor: #07304d;
\tfont-size: 12px;
\ttext-align: center;
}
/** links **/
#links {
\tfloat: left;
\twidth: 460px;
\tmargin: 0 10px;
}
#links > div {
\tfloat: left;
\twidth: 230px;
}
#links ul {
\tlist-style: none;
\twidth: 178px;
\tmargin: 0;
\tpadding: 0;
}
#links ul li {
\tbackground: url(../images/border-footer.png) repeat-x left bottom;
\tmargin: 0 0 6px;
\tpadding: 3px 0 8px;
}
#links ul li:first-child {
\tpadding-top: 0;
}
#links ul li a {
\tcolor: #7890a1;
\tfont-size: 12px;
\tline-height: 24px;
\ttext-decoration: none;
}
#links ul li a:hover {
\tcolor: #e8eff4;
}
/** newsletter **/
#newsletter {
\tfloat: left;
\twidth: 460px;
\tmargin: 0 10px 10px;
}
#newsletter form {
\tdisplay: inline-block;
}
#newsletter input {
\tfloat: left;
\tfont: 12px/36px \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
\theight: 36px;
\tborder: 0;
\tmargin: 0;
\tpadding: 0;
}
#newsletter input[type='text'] {
\tbackground-position: 0 bottom;
\twidth: 282px;
\tmargin-right: 24px;
\tpadding-left: 6px;
\tpadding-right: 6px
}
#newsletter input[type='submit'] {
\tbackground-position: -304px bottom;
\tcolor: #fff;
\tcursor: pointer;
\twidth: 102px;
}
#newsletter input[type='submit']:hover {
\tbackground-position: right bottom;
}
#footer .footnote {
\tfloat: right;
\tdisplay: inline-block;
\tcolor: #03436f;
\twidth: 460px;
\tmargin-right: 10px;
}
";
    }

    public function getTemplateName()
    {
        return "astronomy/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /* Website template by freewebsitetemplates.com *//* */
/* @font-face {*/
/* 	font-family: 'PTSerif-Caption';*/
/* 	src: url('../fonts/PT_Serif-Caption-Web-Regular.eot');*/
/* 	src: local('☺'), url('../fonts/PT_Serif-Caption-Web-Regular.woff') format('woff'), url('../fonts/PT_Serif-Caption-Web-Regular.ttf') format('truetype'), url('../fonts/PT_Serif-Caption-Web-Regular.svg') format('svg');*/
/* 	font-weight: normal;*/
/* 	font-style: normal;*/
/* }*/
/* body {*/
/* 	background: url(../images/bg-body.jpg) repeat left top;*/
/* 	font-family: Arial, Helvetica, sans-serif;*/
/* 	min-width: 960px;*/
/* 	margin: 0;*/
/* }*/
/* img {*/
/* 	border: 0;*/
/* }*/
/* .wrapper {*/
/* 	width: 960px;*/
/* 	margin: 0 auto;*/
/* }*/
/* .clearfix:after {*/
/* 	clear:both;*/
/* 	content:"";*/
/* 	display:block;*/
/* 	height:1%;*/
/* 	line-height:0;*/
/* 	visibility:hidden;*/
/* }*/
/* /*------------------------------ HEADER ------------------------------*//* */
/* .btn1, .btn2, .btn3, #newsletter input {*/
/* 	background: url(../images/interface.png) no-repeat;*/
/* }*/
/* .btn1, .btn2, .btn3 {*/
/* 	color: #fdfdfd;*/
/* 	display: inline-block;*/
/* 	font-size: 14px;*/
/* 	font-weight: bold;*/
/* 	text-align: center;*/
/* 	text-decoration: none;*/
/* 	text-shadow: -3px 0 3px #053131;*/
/* 	text-transform: uppercase;*/
/* }*/
/* .btn1 {*/
/* 	background-position: 0 0;*/
/* 	height: 34px;*/
/* 	line-height: 34px;*/
/* 	width: 202px;*/
/* 	padding: 0 3px 9px;*/
/* }*/
/* .btn2 {*/
/* 	background-position: 0 -53px;*/
/* 	height: 37px;*/
/* 	line-height: 37px;*/
/* 	width: 216px;*/
/* 	padding: 0 3px 8px;*/
/* }*/
/* .btn3 {*/
/* 	background-position: 0 -108px;*/
/* 	font: 22px/49px Georgia, "Times New Roman", Times, serif;*/
/* 	height: 49px;*/
/* 	width: 222px;*/
/* }*/
/* .btn1:hover {*/
/* 	background-position: -222px 0;*/
/* }*/
/* .btn2:hover {*/
/* 	background-position: -232px -53px;*/
/* }*/
/* .btn3:hover {*/
/* 	background-position: -232px -108px;*/
/* }*/
/* /*------------------------------ HEADER ------------------------------*//* */
/* #header {*/
/* 	background: url(../images/bg-header.png) repeat-x center top;*/
/* 	height: 50px;*/
/* 	padding: 16px 0 0;*/
/* 	text-align: right;*/
/* }*/
/* /** Logo **//* */
/* #logo {*/
/* 	float: left;*/
/* 	display: inline-block;*/
/* 	margin-left: 10px;*/
/* }*/
/* /** Navigation **//* */
/* #navigation {*/
/* 	display: inline-block;*/
/* 	height: 30px;*/
/* 	list-style: none;*/
/* 	margin: 0 10px;*/
/* 	padding: 0;*/
/* *width: 516px; /** Needed for IE7 **//* */
/* }*/
/* #navigation li {*/
/* 	float: left;*/
/* 	margin: 0 30px;*/
/* }*/
/* #navigation li:first-child {*/
/* 	margin-left: 0;*/
/* }*/
/* #navigation li a {*/
/* 	color: #efefef;*/
/* 	line-height: 30px;*/
/* 	padding: 0;*/
/* 	text-decoration: none;*/
/* }*/
/* #navigation li a:hover, #navigation li.selected a {*/
/* 	color: #44b2f1;*/
/* }*/
/* /*------------------------------ CONTENTS ------------------------------*//* */
/* #contents {*/
/* 	background: url(../images/bg-content.png) repeat-x center top;*/
/* 	margin: 0 0 24px;*/
/* 	padding: 56px 0 0;*/
/* }*/
/* #contents h1, #featured h3 {*/
/* 	color: #fbfdfd;*/
/* 	font: italic 34px Georgia, "Times New Roman", Times, serif;*/
/* 	font-style: italic;*/
/* 	margin: 0 0 18px;*/
/* }*/
/* #contents p {*/
/* 	color: #e8eff4;*/
/* 	font-size: 14px;*/
/* 	line-height: 24px;*/
/* 	margin: 0;*/
/* 	padding: 0 0 30px;*/
/* 	text-align: justify;*/
/* }*/
/* #contents p a {*/
/* 	color: #e8eff4;*/
/* }*/
/* #contents p a:hover {*/
/* 	color: #0aa3fa;*/
/* }*/
/* #contents p b {*/
/* 	display: block;*/
/* }*/
/* #contents .body {*/
/* 	width: 940px;*/
/* 	margin: 0 auto;*/
/* 	padding: 0 10px;*/
/* }*/
/* #contents .click-here {*/
/* 	float: right;*/
/* 	background: url(../images/spacecraft.jpg) no-repeat center top;*/
/* 	display: inline-block;*/
/* 	height: 162px;*/
/* 	width: 301px;*/
/* 	margin-left: 20px;*/
/* 	text-align: center;*/
/* }*/
/* #contents .click-here h1 {*/
/* 	color: #addcfe;*/
/* 	font-style: italic;*/
/* 	line-height: 36px;*/
/* 	margin: 18px 0;*/
/* }*/
/* /** adbox **//* */
/* #adbox {*/
/* 	background: #020a13 url(../images/bg-adbox.jpg) no-repeat center top;*/
/* 	font-family: Georgia, "Times New Roman", Times, serif;*/
/* 	min-height: 433px;*/
/* 	margin: -56px 0 22px;*/
/* /** Needed for IE7 **//* */
/* *margin: 0;*/
/* *position: relative;*/
/* *top: -56px;*/
/* }*/
/* #adbox .wrapper {*/
/* 	width: 940px;*/
/* 	padding: 54px 10px 26px;*/
/* }*/
/* #adbox .info {*/
/* 	height: 354px;*/
/* 	width: 330px;*/
/* 	overflow: hidden;*/
/* }*/
/* #adbox h1 {*/
/* 	color: #ffffff;*/
/* 	font-size: 48px;*/
/* 	font-style: italic;*/
/* 	line-height: 50px;*/
/* 	margin-bottom: 30px;*/
/* }*/
/* #adbox p {*/
/* 	color: #176eb0;*/
/* 	font-size: 14px;*/
/* 	line-height: 24px;*/
/* }*/
/* #adbox p a {*/
/* 	color: #176eb0;*/
/* }*/
/* #adbox div.highlight {*/
/* 	background: #171a1a url(../images/adbox-bg-heading.jpg) repeat-x left top;*/
/* 	min-height: 82px;*/
/* 	border-color: #000;*/
/* 	border-style: solid none;*/
/* 	border-width: 1px;*/
/* }*/
/* #adbox div.highlight h2 {*/
/* 	color: #484b4b;*/
/* 	font-size: 34px;*/
/* 	line-height: 82px;*/
/* 	width: 940px;*/
/* 	margin: 0 auto;*/
/* 	padding: 0 10px;*/
/* 	text-shadow: -3px 0 3px #121413;*/
/* }*/
/* #adbox div.highlight h2 i {*/
/* 	font-weight: normal;*/
/* }*/
/* /** main **//* */
/* .main {*/
/* 	padding: 0 10px;*/
/* }*/
/* /** sidebar **//* */
/* #sidebar {*/
/* 	float: right;*/
/* 	width: 220px;*/
/* 	margin: 0 10px 0 80px;*/
/* }*/
/* #sidebar ul {*/
/* 	list-style: none;*/
/* 	margin: 0 0 80px;*/
/* 	padding: 0;*/
/* }*/
/* #sidebar > ul li {*/
/* 	margin: 0 0 16px;*/
/* }*/
/* #sidebar > ul li img {*/
/* 	border: 4px solid #fff;*/
/* 	border-radius: 3px;*/
/* }*/
/* #sidebar > ul li a:hover {*/
/* 	filter:alpha(opacity=80);*/
/* 	opacity:0.8;*/
/* }*/
/* #sidebar .click-here {*/
/* 	background: url(../images/spacecraft-dark.jpg) no-repeat center top;*/
/* 	display: inline-block;*/
/* 	height: 162px;*/
/* 	width: 221px;*/
/* 	margin-left: 20px;*/
/* 	text-align: center;*/
/* }*/
/* /** time **//* */
/* .time {*/
/* 	color: #2986bb;*/
/* 	font-size: 12px;*/
/* }*/
/* /** list **//* */
/* .list {*/
/* 	list-style: none;*/
/* 	margin: 0;*/
/* 	padding: 0;*/
/* }*/
/* .list li span.time {*/
/* 	float: right;*/
/* 	margin-top: 6px;*/
/* }*/
/* .list li h4 {*/
/* 	color: #fbfdfd;*/
/* 	font-size: 16px;*/
/* 	line-height: 24px;*/
/* 	margin: 0;*/
/* 	text-transform: uppercase;*/
/* }*/
/* .list li {*/
/* 	padding: 0 0 48px;*/
/* }*/
/* #contents .list li p {*/
/* 	padding: 0;*/
/* }*/
/* .list li a.more {*/
/* 	float: right;*/
/* 	color: #34b0fb;*/
/* 	display: inline-block;*/
/* 	font-size: 14px;*/
/* }*/
/* .list li a.more:hover {*/
/* 	color: #c3e9fe;*/
/* }*/
/* /** pagination **//* */
/* .pagination {*/
/* 	display: inline-block;*/
/* 	list-style: none;*/
/* 	margin: 0;*/
/* 	padding: 0;*/
/* }*/
/* .pagination li {*/
/* 	float: left;*/
/* 	font: 12px Arial, Helvetica, sans-serif;*/
/* 	margin: 0 2px;*/
/* }*/
/* .pagination li a {*/
/* 	color: #36b4fd;*/
/* 	padding: 3px;*/
/* 	text-decoration: none;*/
/* }*/
/* .pagination li a:hover, #pagination li.selected a {*/
/* 	color: #95d3f9;*/
/* }*/
/* /** gallery **//* */
/* #gallery #sidebar, #contact #sidebar {*/
/* 	margin-left: 10px;*/
/* }*/
/* #gallery .photos {*/
/* 	margin: 0 0 20px;*/
/* }*/
/* #gallery .viewer {*/
/* 	margin: 0 0 18px;*/
/* }*/
/* #gallery .photos > ul {*/
/* 	background-color: #072a3e;*/
/* 	display: inline-block;*/
/* 	list-style: none;*/
/* 	margin: 0;*/
/* 	padding: 12px 15px;*/
/* }*/
/* #gallery .photos > ul li {*/
/* 	float: left;*/
/* 	margin: 0 9px;*/
/* 	position: relative;*/
/* }*/
/* #gallery .photos > ul li a:hover span.cover {*/
/* 	background-color: #e8eff4;*/
/* 	display: block;*/
/* 	height: 96px;*/
/* 	width: 100%;*/
/* 	opacity: 0.49;*/
/* 	position: absolute;*/
/* 	top: 0;*/
/* 	left: 0;*/
/* }*/
/* /** Contact **//* */
/* #contact form {*/
/* 	width: 709px;*/
/* }*/
/* #contact form ul {*/
/* 	list-style: none;*/
/* 	margin: 0;*/
/* 	padding: 0;*/
/* }*/
/* #contact form ul li {*/
/* 	display: inline-block;*/
/* 	width: 100%;*/
/* 	margin: 0 0 18px;*/
/* }*/
/* #contact form ul li > label {*/
/* 	float: right;*/
/* 	color: #e8eff4;*/
/* 	display: inline-block;*/
/* 	font: italic 14px/36px 'PTSerif-Caption';*/
/* 	width: 230px;*/
/* }*/
/* #contact form ul li > label.msg {*/
/* 	margin-bottom: 60px;*/
/* 	padding-top: 80px;*/
/* }*/
/* #contact form ul li:hover > label {*/
/* 	color: #2da6fc;*/
/* }*/
/* #contact textarea {*/
/* 	float: left;*/
/* 	background-color: #fff;*/
/* 	color: #060606;*/
/* 	font: 14px/36px Arial, Helvetica, sans-serif;*/
/* 	height: 367px;*/
/* 	width: 450px;*/
/* 	border: 0;*/
/* 	margin: 0 10px 0 0;*/
/* 	padding-left: 10px;*/
/* 	overflow: auto;*/
/* }*/
/* #contact form ul li div {*/
/* 	display: inline-block;*/
/* 	width: 225px;*/
/* 	margin: 50px 0;*/
/* 	padding-left: 5px;*/
/* }*/
/* #contact form ul li div label {*/
/* 	color: #fcc43d;*/
/* 	display: inline-block;*/
/* 	font: 12px Arial, Helvetica, sans-serif;*/
/* 	font-weight: normal;*/
/* }*/
/* #contact input[type='text'] {*/
/* 	background-color: #fff;*/
/* 	color: #060606;*/
/* 	font: 14px/36px Arial, Helvetica, sans-serif;*/
/* 	height: 36px;*/
/* 	width: 440px;*/
/* 	border: 0;*/
/* 	margin-right: 10px;*/
/* 	padding: 0 10px;*/
/* }*/
/* #contact input[type='checkbox'] {*/
/* 	background-position: 0 0;*/
/* 	height: 13px;*/
/* 	width: 12px;*/
/* 	border: 0;*/
/* 	margin-left: 0;*/
/* 	margin-right: 10px;*/
/* 	padding: 0;*/
/* }*/
/* #contact input[type='submit'] {*/
/* 	cursor: pointer;*/
/* 	border: 0;*/
/* 	margin-top: 3px;*/
/* 	margin-left: 5px;*/
/* }*/
/* #contact div.checkbox label {*/
/* 	cursor: pointer;*/
/* }*/
/* /*------------------------------ FOOTER ------------------------------*//* */
/* #footer {*/
/* 	background-color: #e8eff4;*/
/* 	border-top: 1px solid #fdfcfc;*/
/* }*/
/* #footer .body {*/
/* 	background: #072438 url(../images/bg-footer.jpg) no-repeat center top;*/
/* 	min-height: 136px;*/
/* 	padding: 36px 0;*/
/* }*/
/* #footer h4 {*/
/* 	color: #fff;*/
/* 	font: normal 14px Georgia, "Times New Roman", Times, serif;*/
/* 	margin: 0 0 12px;*/
/* }*/
/* #footer p {*/
/* 	color: #7890a1;*/
/* 	font-size: 12px;*/
/* 	line-height: 24px;*/
/* 	margin: 0;*/
/* 	padding: 0 0 6px;*/
/* }*/
/* /** featured **//* */
/* #featured {*/
/* 	display: block;*/
/* 	list-style: none;*/
/* 	width: 960px;*/
/* 	margin: 0 auto;*/
/* 	padding: 30px 0;*/
/* }*/
/* #featured li {*/
/* 	float: left;*/
/* 	width: 220px;*/
/* 	margin: 0 10px;*/
/* 	text-align: center;*/
/* }*/
/* #featured li h3 {*/
/* 	color: #07304d;*/
/* 	font-size: 18px;*/
/* 	margin: 18px 0;*/
/* }*/
/* #featured li h3 a {*/
/* 	color: #07304d;*/
/* 	text-decoration: none;*/
/* }*/
/* #featured li h3 a:hover {*/
/* 	color: #51a9e9;*/
/* }*/
/* #featured li p {*/
/* 	color: #07304d;*/
/* 	font-size: 12px;*/
/* 	text-align: center;*/
/* }*/
/* /** links **//* */
/* #links {*/
/* 	float: left;*/
/* 	width: 460px;*/
/* 	margin: 0 10px;*/
/* }*/
/* #links > div {*/
/* 	float: left;*/
/* 	width: 230px;*/
/* }*/
/* #links ul {*/
/* 	list-style: none;*/
/* 	width: 178px;*/
/* 	margin: 0;*/
/* 	padding: 0;*/
/* }*/
/* #links ul li {*/
/* 	background: url(../images/border-footer.png) repeat-x left bottom;*/
/* 	margin: 0 0 6px;*/
/* 	padding: 3px 0 8px;*/
/* }*/
/* #links ul li:first-child {*/
/* 	padding-top: 0;*/
/* }*/
/* #links ul li a {*/
/* 	color: #7890a1;*/
/* 	font-size: 12px;*/
/* 	line-height: 24px;*/
/* 	text-decoration: none;*/
/* }*/
/* #links ul li a:hover {*/
/* 	color: #e8eff4;*/
/* }*/
/* /** newsletter **//* */
/* #newsletter {*/
/* 	float: left;*/
/* 	width: 460px;*/
/* 	margin: 0 10px 10px;*/
/* }*/
/* #newsletter form {*/
/* 	display: inline-block;*/
/* }*/
/* #newsletter input {*/
/* 	float: left;*/
/* 	font: 12px/36px "Palatino Linotype", "Book Antiqua", Palatino, serif;*/
/* 	height: 36px;*/
/* 	border: 0;*/
/* 	margin: 0;*/
/* 	padding: 0;*/
/* }*/
/* #newsletter input[type='text'] {*/
/* 	background-position: 0 bottom;*/
/* 	width: 282px;*/
/* 	margin-right: 24px;*/
/* 	padding-left: 6px;*/
/* 	padding-right: 6px*/
/* }*/
/* #newsletter input[type='submit'] {*/
/* 	background-position: -304px bottom;*/
/* 	color: #fff;*/
/* 	cursor: pointer;*/
/* 	width: 102px;*/
/* }*/
/* #newsletter input[type='submit']:hover {*/
/* 	background-position: right bottom;*/
/* }*/
/* #footer .footnote {*/
/* 	float: right;*/
/* 	display: inline-block;*/
/* 	color: #03436f;*/
/* 	width: 460px;*/
/* 	margin-right: 10px;*/
/* }*/
/* */
