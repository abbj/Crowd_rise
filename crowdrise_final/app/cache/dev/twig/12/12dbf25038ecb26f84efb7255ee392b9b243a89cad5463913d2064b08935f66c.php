<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e9014a742cef4be22419d4cfd8e1637eff0ff3fe8e5bf94dd6fc62bc52fb74ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "



    <!-- Page Title -->
    <div class=\"section section-breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Register</h1>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"basic-login\">
                        <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
    <div class=\"form-group\" >
 <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Email</b></label>

        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-username", "placeholder" => $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"))));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
          </div>
          
          
         <div class=\"form-group\" >
             <label for=\"register-username\"><i class=\"icon-user\"></i> <b>username</b></label>
             ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-username", "type" => "text", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
             ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
             <div class=\"form-group\" >             
                 <label for=\"register-password\"><i class=\"icon-lock\"></i> <b>mot de passe</b></label>



                 ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-password", "placeholder" => $this->env->getExtension('translator')->trans("form.password", array(), "FOSUserBundle"))));
        echo "
                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
             </div>
             <div class=\"form-group\" >
                 <label for=\"register-password\"><i class=\"icon-lock\"></i> <b>repeter mot de passe</b></label>


                 ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-password2", "placeholder" => $this->env->getExtension('translator')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "
                 ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
             </div>
             ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

         </div>
    <div>
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
    </div>
</form>
                      
                    </div>
                </div>
                <div class=\"col-sm-6 col-sm-offset-1 social-login\">
                    <p>You can use your Facebook or Twitter for registration</p>
                    <div class=\"social-login-buttons\">
                        <a href=\"#\" class=\"btn-facebook-login\">Use Facebook</a>
                        <a href=\"#\" class=\"btn-twitter-login\">Use Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 57,  112 => 53,  107 => 51,  103 => 50,  94 => 44,  90 => 43,  81 => 37,  77 => 36,  68 => 30,  64 => 29,  55 => 25,  33 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# https://github.com/FriendsOfSymfony/FOSUserBundle/issues/1077#}*/
/* {% extends "base.html.twig" %}*/
/* {% block body %}*/
/*     {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* */
/*     <!-- Page Title -->*/
/*     <div class="section section-breadcrumbs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1>Register</h1>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-5">*/
/*                     <div class="basic-login">*/
/*                         <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST">*/
/*     <div class="form-group" >*/
/*  <label for="register-username"><i class="icon-user"></i> <b>Email</b></label>*/
/* */
/*         {{ form_widget(form.email, { 'attr': {'class': 'form-control','id':'register-username', 'placeholder': 'form.email'|trans } }) }}*/
/*         {{ form_errors(form.email) }}*/
/*           </div>*/
/*           */
/*           */
/*          <div class="form-group" >*/
/*              <label for="register-username"><i class="icon-user"></i> <b>username</b></label>*/
/*              {{ form_widget(form.username, { 'attr': {'class': 'form-control','id':'register-username','type':'text', 'placeholder': 'form.username'|trans } }) }}*/
/*              {{ form_errors(form.username) }}*/
/*              <div class="form-group" >             */
/*                  <label for="register-password"><i class="icon-lock"></i> <b>mot de passe</b></label>*/
/* */
/* */
/* */
/*                  {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control','id':'register-password' , 'placeholder': 'form.password'|trans } }) }}*/
/*                  {{ form_errors(form.plainPassword.first) }}*/
/*              </div>*/
/*              <div class="form-group" >*/
/*                  <label for="register-password"><i class="icon-lock"></i> <b>repeter mot de passe</b></label>*/
/* */
/* */
/*                  {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'id':'register-password2','placeholder': 'form.password_confirmation'|trans } }) }}*/
/*                  {{ form_errors(form.plainPassword.second) }}*/
/*              </div>*/
/*              {{ form_rest(form) }}*/
/* */
/*          </div>*/
/*     <div>*/
/*         <input class="btn btn-lg btn-primary btn-block" type="submit" value="{{ 'registration.submit'|trans }}">*/
/*     </div>*/
/* </form>*/
/*                       */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-sm-offset-1 social-login">*/
/*                     <p>You can use your Facebook or Twitter for registration</p>*/
/*                     <div class="social-login-buttons">*/
/*                         <a href="#" class="btn-facebook-login">Use Facebook</a>*/
/*                         <a href="#" class="btn-twitter-login">Use Twitter</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Footer -->*/
/* */
/* {% endblock %}*/
