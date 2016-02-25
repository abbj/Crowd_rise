<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ac1d2ca8ee9c2cd9738945ec1d3ec9b594f73bca9e0438a60ba0f0d419ac0303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 6);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'css' => array($this, 'block_css'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "

<div class=\"container\">
    <div class=\"row profile\">
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"profile-sidebar\">
\t\t\t\t<!-- SIDEBAR USERPIC -->
\t\t\t\t<div class=\"profile-userpic\">
\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/avatar.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<!-- END SIDEBAR USERPIC -->
\t\t\t\t<!-- SIDEBAR USER TITLE -->
\t\t\t\t<div class=\"profile-usertitle\">
\t\t\t\t\t<div class=\"profile-usertitle-name\">
\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"profile-usertitle-job\">
\t\t\t\t\t\tDeveloper
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- END SIDEBAR USER TITLE -->
\t\t\t\t<!-- SIDEBAR BUTTONS -->
\t\t\t\t<div class=\"profile-userbuttons\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Follow</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\">Message</button>
\t\t\t\t</div>
\t\t\t\t<!-- END SIDEBAR BUTTONS -->
\t\t\t\t<!-- SIDEBAR MENU -->
\t\t\t\t<div class=\"profile-usermenu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>
\t\t\t\t\t\t\tOverview </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user\"></i>
\t\t\t\t\t\t\tparametre du compte  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("mesprojet");
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"  ></i>
\t\t\t\t\t\t\tmes projett </a>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("mesMessage");
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon glyphicon-envelope\"  ></i>
\t\t\t\t\t\t\tmes message </a>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon glyphicon-envelope\"  ></i>
\t\t\t\t\t\t\tcomposer message </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-flag\"></i>
\t\t\t\t\t\t\tHelp </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- END MENU -->
\t\t\t</div>
\t\t</div>
                                        <div class=\"col-md-9\">
                                            <div class=\"profile-content\">

                                            
                                            
                                            </div>
\t</div>
</div>

<br>
<br>
";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/test.css"), "html", null, true);
        echo "\">
                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 9,  130 => 8,  95 => 57,  87 => 52,  79 => 47,  54 => 25,  45 => 19,  35 => 11,  32 => 8,  29 => 7,  11 => 6,);
    }
}
/* */
/* */
/* */
/* */
/* */
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     {% block css %}*/
/*                 <link rel="stylesheet" href="{{asset('css/test/test.css')}}">*/
/*                 {% endblock %}*/
/* */
/* */
/* <div class="container">*/
/*     <div class="row profile">*/
/* 		<div class="col-md-3">*/
/* 			<div class="profile-sidebar">*/
/* 				<!-- SIDEBAR USERPIC -->*/
/* 				<div class="profile-userpic">*/
/* 					<img src="{{asset('css/test/avatar.png')}}" class="img-responsive" alt="">*/
/* 				</div>*/
/* 				<!-- END SIDEBAR USERPIC -->*/
/* 				<!-- SIDEBAR USER TITLE -->*/
/* 				<div class="profile-usertitle">*/
/* 					<div class="profile-usertitle-name">*/
/* 					{{ user.username }}*/
/* 					</div>*/
/* 					<div class="profile-usertitle-job">*/
/* 						Developer*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- END SIDEBAR USER TITLE -->*/
/* 				<!-- SIDEBAR BUTTONS -->*/
/* 				<div class="profile-userbuttons">*/
/* 					<button type="button" class="btn btn-success btn-sm">Follow</button>*/
/* 					<button type="button" class="btn btn-danger btn-sm">Message</button>*/
/* 				</div>*/
/* 				<!-- END SIDEBAR BUTTONS -->*/
/* 				<!-- SIDEBAR MENU -->*/
/* 				<div class="profile-usermenu">*/
/* 					<ul class="nav">*/
/* 						<li class="active">*/
/* 							<a href="#">*/
/* 							<i class="glyphicon glyphicon-home"></i>*/
/* 							Overview </a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="{{path('fos_user_profile_edit')}}">*/
/* 							<i class="glyphicon glyphicon-user"></i>*/
/* 							parametre du compte  </a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="{{path('mesprojet')}}">*/
/* 							<i class="glyphicon glyphicon-ok"  ></i>*/
/* 							mes projett </a>*/
/* 						</li>*/
/*                                                 <li>*/
/* 							<a href="{{path('mesMessage')}}">*/
/* 							<i class="glyphicon glyphicon glyphicon-envelope"  ></i>*/
/* 							mes message </a>*/
/* 						</li>*/
/*                                                 <li>*/
/* 							<a href="">*/
/* 							<i class="glyphicon glyphicon glyphicon-envelope"  ></i>*/
/* 							composer message </a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">*/
/* 							<i class="glyphicon glyphicon-flag"></i>*/
/* 							Help </a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<!-- END MENU -->*/
/* 			</div>*/
/* 		</div>*/
/*                                         <div class="col-md-9">*/
/*                                             <div class="profile-content">*/
/* */
/*                                             */
/*                                             */
/*                                             </div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <br>*/
/* <br>*/
/* {% endblock %}*/
/* */
