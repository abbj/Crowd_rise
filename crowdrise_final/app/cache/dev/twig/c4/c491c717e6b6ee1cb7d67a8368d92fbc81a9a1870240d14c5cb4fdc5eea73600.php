<?php

/* utilisateurBundle:Message:Repondre.html.twig */
class __TwigTemplate_c30340dfdcd5ee7c5af1e3a01d3778eda19f0f19db52d95627abd4eab822a362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "utilisateurBundle:Message:Repondre.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 6
        echo "

    <div class=\"container\">
        <div class=\"row profile\">
            <div class=\"col-md-3\">
                <div class=\"profile-sidebar\">
                    <!-- SIDEBAR USERPIC -->
                    <div class=\"profile-userpic\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/avatar.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class=\"profile-usertitle\">
                        <div class=\"profile-usertitle-name\">
                            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                        </div>
                        <div class=\"profile-usertitle-job\">
                            Developer
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class=\"profile-userbuttons\">
                        <button type=\"button\" class=\"btn btn-success btn-sm\">Follow</button>
                        <button type=\"button\" class=\"btn btn-danger btn-sm\">Message</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class=\"profile-usermenu\">
                        <ul class=\"nav\">
                            <li class=\"active\">
                                <a href=\"#\">
                                    <i class=\"glyphicon glyphicon-home\"></i>
                                    Overview </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
                                    <i class=\"glyphicon glyphicon-user\"></i>
                                    parametre du compte  </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("mesprojet");
        echo "\">
                                    <i class=\"glyphicon glyphicon-ok\"  ></i>
                                    mes projett </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"glyphicon glyphicon glyphicon-envelope\"  ></i>
                                    mes message </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"glyphicon glyphicon glyphicon-envelope\"  ></i>
                                    composer message </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"glyphicon glyphicon-flag\"></i>
                                    Help </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>

            <div class=\"col-md-9\">
                <div class=\"profile-content\">
<div class=\"container\">
    <div class=\"row\">
\t\t<div class=\"col-sm-8 col-md-8\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">                
                    <form accept-charset=\"UTF-8\" action=\"\" method=\"POST\">
                        

    
    ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'row', array("attr" => array("class" => "form-control", "type" => "text", "placeholder" => "Type in your message", "style" => "margin-bottom:10px")));
        echo "
    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("label" => "Submit me"));
        echo "
";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        <h6 class=\"pull-right\" id=\"counter\">320 characters remaining</h6>
                        <button class=\"btn btn-info\" type=\"submit\">Post New Message</button>
                </div>
            </div>
        </div>
\t</div>
</div>

    <h1>Message creation</h1>

    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>


                </div>
            </div>
        </div>

        <br>
        <br>
    ";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/test.css"), "html", null, true);
        echo "\">
    ";
    }

    public function getTemplateName()
    {
        return "utilisateurBundle:Message:Repondre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 4,  178 => 3,  160 => 102,  153 => 98,  138 => 86,  134 => 85,  130 => 84,  126 => 83,  87 => 47,  79 => 42,  54 => 20,  45 => 14,  35 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     {% block css %}*/
/*         <link rel="stylesheet" href="{{asset('css/test/test.css')}}">*/
/*     {% endblock %}*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="row profile">*/
/*             <div class="col-md-3">*/
/*                 <div class="profile-sidebar">*/
/*                     <!-- SIDEBAR USERPIC -->*/
/*                     <div class="profile-userpic">*/
/*                         <img src="{{asset('css/test/avatar.png')}}" class="img-responsive" alt="">*/
/*                     </div>*/
/*                     <!-- END SIDEBAR USERPIC -->*/
/*                     <!-- SIDEBAR USER TITLE -->*/
/*                     <div class="profile-usertitle">*/
/*                         <div class="profile-usertitle-name">*/
/*                             {{ app.user.username }}*/
/*                         </div>*/
/*                         <div class="profile-usertitle-job">*/
/*                             Developer*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- END SIDEBAR USER TITLE -->*/
/*                     <!-- SIDEBAR BUTTONS -->*/
/*                     <div class="profile-userbuttons">*/
/*                         <button type="button" class="btn btn-success btn-sm">Follow</button>*/
/*                         <button type="button" class="btn btn-danger btn-sm">Message</button>*/
/*                     </div>*/
/*                     <!-- END SIDEBAR BUTTONS -->*/
/*                     <!-- SIDEBAR MENU -->*/
/*                     <div class="profile-usermenu">*/
/*                         <ul class="nav">*/
/*                             <li class="active">*/
/*                                 <a href="#">*/
/*                                     <i class="glyphicon glyphicon-home"></i>*/
/*                                     Overview </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('fos_user_profile_edit')}}">*/
/*                                     <i class="glyphicon glyphicon-user"></i>*/
/*                                     parametre du compte  </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('mesprojet')}}">*/
/*                                     <i class="glyphicon glyphicon-ok"  ></i>*/
/*                                     mes projett </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="">*/
/*                                     <i class="glyphicon glyphicon glyphicon-envelope"  ></i>*/
/*                                     mes message </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="">*/
/*                                     <i class="glyphicon glyphicon glyphicon-envelope"  ></i>*/
/*                                     composer message </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <i class="glyphicon glyphicon-flag"></i>*/
/*                                     Help </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- END MENU -->*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/*                 <div class="profile-content">*/
/* <div class="container">*/
/*     <div class="row">*/
/* 		<div class="col-sm-8 col-md-8">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">                */
/*                     <form accept-charset="UTF-8" action="" method="POST">*/
/*                         */
/* */
/*     */
/*     {{ form_start(form) }}*/
/*     {{ form_row(form.contenu, { 'attr': {'class': 'form-control','type':'text', 'placeholder': 'Type in your message','style':'margin-bottom:10px' } }) }}*/
/*     {{ form_row(form.submit, { 'label': 'Submit me' }) }}*/
/* {{ form_end(form) }}*/
/* */
/*                         <h6 class="pull-right" id="counter">320 characters remaining</h6>*/
/*                         <button class="btn btn-info" type="submit">Post New Message</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
/* */
/*     <h1>Message creation</h1>*/
/* */
/*     {{ form_widget(form.contenu) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('message') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <br>*/
/*         <br>*/
/*     {% endblock %}*/
/* */
