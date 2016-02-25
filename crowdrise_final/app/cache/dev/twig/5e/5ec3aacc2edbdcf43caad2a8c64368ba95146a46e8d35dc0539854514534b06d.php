<?php

/* ::base.html.twig */
class __TwigTemplate_946abc48af8fd67d1766fe6da4cbb1e1fac0736f485d3cfc67ff4ded29fa7899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
                <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon-social.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/leaflet.css"), "html", null, true);
        echo "\" />
\t\t<!--[if lte IE 8]>
\t\t    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/leaflet.ie.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 30
        $this->loadTemplate("::navbar.html.twig", "::base.html.twig", 30)->display($context);
        // line 31
        echo "        
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        
        
        
        
        
        ";
        // line 43
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 43)->display($context);
        // line 44
        echo "        
        
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "          <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js')}}\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\"></script>
        
        
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 25
    public function block_css($context, array $blocks = array())
    {
        // line 26
        echo "        ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "        
        
        
        
        ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  164 => 46,  156 => 33,  153 => 32,  149 => 26,  146 => 25,  140 => 5,  129 => 56,  125 => 55,  121 => 54,  117 => 53,  113 => 52,  108 => 50,  104 => 49,  101 => 48,  99 => 46,  95 => 44,  93 => 43,  86 => 38,  84 => 32,  81 => 31,  79 => 30,  72 => 27,  70 => 25,  65 => 23,  60 => 21,  55 => 19,  50 => 17,  44 => 14,  40 => 13,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         */
/*                 <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width">*/
/* */
/*         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/icomoon-social.css')}}">*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>*/
/* */
/*         <link rel="stylesheet" href="{{asset('css/leaflet.css')}}" />*/
/* 		<!--[if lte IE 8]>*/
/* 		    <link rel="stylesheet" href="{{asset('css/leaflet.ie.css')}}" />*/
/* 		<![endif]-->*/
/* 		<link rel="stylesheet" href="{{asset('css/main.css')}}">*/
/* */
/*         <script src="{{asset('js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>*/
/*         */
/*         {% block css %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% include '::navbar.html.twig' %}*/
/*         */
/*         {% block body %}*/
/*         */
/*         */
/*         */
/*         */
/*         {% endblock %}*/
/*         */
/*         */
/*         */
/*         */
/*         */
/*         {% include '::footer.html.twig' %}*/
/*         */
/*         */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*           <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>*/
/*         <script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.9.1.min.js')}}"><\/script>')</script>*/
/*         <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*         <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js')}}"></script>*/
/*         <script src="{{asset('js/jquery.fitvids.js')}}"></script>*/
/*         <script src="{{asset('js/jquery.sequence-min.js')}}"></script>*/
/*         <script src="{{asset('js/jquery.bxslider.js')}}"></script>*/
/*         <script src="{{asset('js/main-menu.js')}}"></script>*/
/*         <script src="{{asset('js/template.js')}}"></script>*/
/*         */
/*         */
/*         */
/*     </body>*/
/* </html>*/
/* */
