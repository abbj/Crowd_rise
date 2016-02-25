<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_36c816cd653bcdcfb0a3e5b981e8215891ea8138452553b5276036fa063037dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 4);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "

<div class=\"container\">
    <div class=\"row profile\">
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"profile-sidebar\">
\t\t\t\t<!-- SIDEBAR USERPIC -->
\t\t\t\t<div class=\"profile-userpic\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/avatar.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<!-- END SIDEBAR USERPIC -->
\t\t\t\t<!-- SIDEBAR USER TITLE -->
\t\t\t\t<div class=\"profile-usertitle\">
\t\t\t\t\t<div class=\"profile-usertitle-name\">
\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user\"></i>
\t\t\t\t\t\t\tparametre du compte  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("mesprojet");
        echo "\" >
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"  ></i>
\t\t\t\t\t\t\tmes projett </a>
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

                                            ";
        // line 68
        echo "
";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                            
                                            </div>
\t</div>
</div>

<br>
<br>
";
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        // line 7
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/test.css"), "html", null, true);
        echo "\">
                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 7,  137 => 6,  124 => 74,  119 => 72,  114 => 70,  110 => 69,  107 => 68,  87 => 50,  79 => 45,  54 => 23,  45 => 17,  35 => 9,  32 => 6,  29 => 5,  11 => 4,);
    }
}
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
/* 					{{ app.user.username }}*/
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
/* 							<a href="{{path('mesprojet')}}" >*/
/* 							<i class="glyphicon glyphicon-ok"  ></i>*/
/* 							mes projett </a>*/
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
/*                                             {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/*                                             */
/*                                             </div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <br>*/
/* <br>*/
/* {% endblock %}*/
/* */
