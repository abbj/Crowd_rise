<?php

/* ::admin/layoutAdmin.html.twig */
class __TwigTemplate_cd6e06eb33d562cf58a9f04c88ea37abaf8e2fe7f245253a72b9cd2cdec2a0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('css', $context, $blocks);
        // line 51
        echo "    </head>
    <body>
                      ";
        // line 53
        $this->loadTemplate("::admin/navbar.html.twig", "::admin/layoutAdmin.html.twig", 53)->display($context);
        // line 54
        echo "                      

        
            
\t<!-- Page container -->
 \t<div class=\"page-container\">
            ";
        // line 60
        $this->loadTemplate("::admin/sidebar.html.twig", "::admin/layoutAdmin.html.twig", 60)->display($context);
        // line 61
        echo "            
            <div class=\"page-content\" >
            <div class=\"page-header\">
\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t<h3>Dashboard <small>Welcome ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</small></h3>
\t\t\t\t</div>

\t\t\t\t<div id=\"reportrange\" class=\"range\">
\t\t\t\t\t<div class=\"visible-xs header-element-toggle\">
\t\t\t\t\t\t<a class=\"btn btn-primary btn-icon\"><i class=\"icon-calendar\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"date-range\"></div>
\t\t\t\t\t<span class=\"label label-danger\">9</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /page header -->


\t\t\t<!-- Breadcrumbs line -->
\t\t\t<div class=\"breadcrumb-line\">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"visible-xs breadcrumb-toggle\">
\t\t\t\t\t<a class=\"btn btn-link btn-lg btn-icon\" data-toggle=\"collapse\" data-target=\".breadcrumb-buttons\"><i class=\"icon-menu2\"></i></a>
\t\t\t\t</div>

\t\t\t\t<ul class=\"breadcrumb-buttons collapse\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-search3\"></i> <span>Search</span> <b class=\"caret\"></b></a>
\t\t\t\t\t\t<div class=\"popup dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"pull-left\"><i class=\"icon-paragraph-justify\"></i></a>
\t\t\t\t\t\t\t\t<span>Quick search</span>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"pull-right\"><i class=\"icon-new-tab\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form action=\"#\" class=\"breadcrumb-search\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Type and hit enter...\" name=\"search\" class=\"form-control autocomplete\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"search-option\" class=\"styled\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\tEverywhere
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"search-option\" class=\"styled\">
\t\t\t\t\t\t\t\t\t\t\tInvoices
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"search-option\" class=\"styled\">
\t\t\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"search-option\" class=\"styled\">
\t\t\t\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block btn-success\" value=\"Search\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"language dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"images/flags/german.png\" alt=\"\"> <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right icons-right\">
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"images/flags/ukrainian.png\" alt=\"\"> Ukrainian</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\"><img src=\"images/flags/english.png\" alt=\"\"> English</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"images/flags/spanish.png\" alt=\"\"> Spanish</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"images/flags/german.png\" alt=\"\"> Option</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"images/flags/hungarian.png\" alt=\"\"> Hungarian</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- /breadcrumbs line -->
";
        // line 143
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "            
    <div class=\"row\">

    </div>
  

            
              ";
        // line 152
        $this->loadTemplate("::admin/footer.html.twig", "::admin/layoutAdmin.html.twig", 152)->display($context);
        // line 153
        echo "        
            </div>
        
        </div>
        
        
        
        
        
        
        
        
        
    </body>
    
        ";
        // line 168
        $this->displayBlock('javascripts', $context, $blocks);
        // line 170
        echo "            

</html>
";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "      <meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1\">
<title>Londinium - premium responsive admin template by Eugene Kopyov</title>

<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/londinium-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
           
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/charts/sparkline.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/uniform.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/inputmask.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/autosize.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/inputlimit.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/listbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/multiselect.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/validate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/tags.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/switch.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/uploader/plupload.full.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/uploader/plupload.queue.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/wysihtml5/wysihtml5.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/forms/wysihtml5/toolbar.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/moment.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/jgrowl.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/datatables.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/colorpicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/plugins/interface/timepicker.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/application.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 143
    public function block_body($context, array $blocks = array())
    {
        // line 144
        echo "            ";
    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        // line 169
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::admin/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 169,  317 => 168,  313 => 144,  310 => 143,  303 => 48,  299 => 47,  294 => 45,  290 => 44,  286 => 43,  282 => 42,  278 => 41,  274 => 40,  270 => 39,  266 => 38,  261 => 36,  257 => 35,  252 => 33,  248 => 32,  243 => 30,  239 => 29,  235 => 28,  231 => 27,  227 => 26,  223 => 25,  219 => 24,  215 => 23,  211 => 22,  207 => 21,  202 => 19,  193 => 13,  189 => 12,  185 => 11,  181 => 10,  174 => 5,  171 => 4,  164 => 170,  162 => 168,  145 => 153,  143 => 152,  134 => 145,  132 => 143,  51 => 65,  45 => 61,  43 => 60,  35 => 54,  33 => 53,  29 => 51,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {%block css %}*/
/*       <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">*/
/* <title>Londinium - premium responsive admin template by Eugene Kopyov</title>*/
/* */
/* <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">*/
/* <link href="{{asset('admin/css/londinium-theme.css')}}" rel="stylesheet" type="text/css">*/
/* <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" type="text/css">*/
/* <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css">*/
/* <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">*/
/*            */
/* <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>*/
/* <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/plugins/charts/sparkline.min.js')}}"></script>*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/uniform.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/select2.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/inputmask.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/autosize.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/inputlimit.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/listbox.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/multiselect.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/validate.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/tags.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/switch.min.js')}}"></script>*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/uploader/plupload.full.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/uploader/plupload.queue.min.js')}}"></script>*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/wysihtml5/wysihtml5.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/forms/wysihtml5/toolbar.js')}}"></script>*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/daterangepicker.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/fancybox.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/moment.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/jgrowl.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/datatables.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/colorpicker.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/fullcalendar.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/plugins/interface/timepicker.min.js')}}"></script>*/
/* */
/* <script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('admin/js/application.js')}}"></script>*/
/* */
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*                       {% include '::admin/navbar.html.twig' %}*/
/*                       */
/* */
/*         */
/*             */
/* 	<!-- Page container -->*/
/*  	<div class="page-container">*/
/*             {%include '::admin/sidebar.html.twig' %}*/
/*             */
/*             <div class="page-content" >*/
/*             <div class="page-header">*/
/* 				<div class="page-title">*/
/* 					<h3>Dashboard <small>Welcome {{ app.user.username }}</small></h3>*/
/* 				</div>*/
/* */
/* 				<div id="reportrange" class="range">*/
/* 					<div class="visible-xs header-element-toggle">*/
/* 						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>*/
/* 					</div>*/
/* 					<div class="date-range"></div>*/
/* 					<span class="label label-danger">9</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- /page header -->*/
/* */
/* */
/* 			<!-- Breadcrumbs line -->*/
/* 			<div class="breadcrumb-line">*/
/* 				<ul class="breadcrumb">*/
/* 					<li><a href="index.html">Home</a></li>*/
/* 					<li class="active">Dashboard</li>*/
/* 				</ul>*/
/* */
/* 				<div class="visible-xs breadcrumb-toggle">*/
/* 					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>*/
/* 				</div>*/
/* */
/* 				<ul class="breadcrumb-buttons collapse">*/
/* 					<li class="dropdown">*/
/* 						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>*/
/* 						<div class="popup dropdown-menu dropdown-menu-right">*/
/* 							<div class="popup-header">*/
/* 								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>*/
/* 								<span>Quick search</span>*/
/* 								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>*/
/* 							</div>*/
/* 							<form action="#" class="breadcrumb-search">*/
/* 								<input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">*/
/* 								<div class="row">*/
/* 									<div class="col-xs-6">*/
/* 										<label class="radio">*/
/* 											<input type="radio" name="search-option" class="styled" checked="checked">*/
/* 											Everywhere*/
/* 										</label>*/
/* 										<label class="radio">*/
/* 											<input type="radio" name="search-option" class="styled">*/
/* 											Invoices*/
/* 										</label>*/
/* 									</div>*/
/* */
/* 									<div class="col-xs-6">*/
/* 										<label class="radio">*/
/* 											<input type="radio" name="search-option" class="styled">*/
/* 											Users*/
/* 										</label>*/
/* 										<label class="radio">*/
/* 											<input type="radio" name="search-option" class="styled">*/
/* 											Orders*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<input type="submit" class="btn btn-block btn-success" value="Search">*/
/* 							</form>*/
/* 						</div>*/
/* 					</li>*/
/* */
/* 					<li class="language dropdown">*/
/* 						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/german.png" alt=""> <b class="caret"></b></a>*/
/* 						<ul class="dropdown-menu dropdown-menu-right icons-right">*/
/* 							<li><a href="#"><img src="images/flags/ukrainian.png" alt=""> Ukrainian</a></li>*/
/* 							<li class="active"><a href="#"><img src="images/flags/english.png" alt=""> English</a></li>*/
/* 							<li><a href="#"><img src="images/flags/spanish.png" alt=""> Spanish</a></li>*/
/* 							<li><a href="#"><img src="images/flags/german.png" alt=""> Option</a></li>*/
/* 							<li><a href="#"><img src="images/flags/hungarian.png" alt=""> Hungarian</a></li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<!-- /breadcrumbs line -->*/
/* {% block body %}*/
/*             {% endblock %}*/
/*             */
/*     <div class="row">*/
/* */
/*     </div>*/
/*   */
/* */
/*             */
/*               {% include '::admin/footer.html.twig' %}*/
/*         */
/*             </div>*/
/*         */
/*         </div>*/
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*     </body>*/
/*     */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*             */
/* */
/* </html>*/
/* */
