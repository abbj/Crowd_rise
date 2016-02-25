<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8309ec69ee1a4cd5117dd9f8e7e73a83656f7779311b509f86cc26d1873b8ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "    <!-- Page Title -->
<div class=\"section section-breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Login</h1>
            </div>
        </div>
    </div>
</div>

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-5\">
                <div class=\"basic-login\">
                     ";
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "                </div>
            </div>
            <div class=\"col-sm-7 social-login\">
                <p>Or login with your Facebook or Twitter</p>
                <div class=\"social-login-buttons\">
                    <a href=\"#\" class=\"btn-facebook-login\">Login with Facebook</a>
                    <a href=\"#\" class=\"btn-twitter-login\">Login with Twitter</a>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"not-member\">
                    <p>Not a member? <a href=\"page-register.html\">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


";
    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 25
        echo "                    <form role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <div class=\"form-group\">
                            <label for=\"login-username\"><i class=\"icon-user\"></i> <b>Username or Email</b></label>
                            <input class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\">
                        </div>
                                    
                        <div class=\"form-group\">
                            <label for=\"login-password\"><i class=\"icon-lock\"></i> <b>Password</b></label>
                            <input class=\"form-control\"  type=\"password\" placeholder=\"\" id=\"password\" name=\"_password\" required=\"required\" >
                        </div>
                        <div class=\"form-group\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> Remember me
                            </label>
                            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"forgot-password\">mot d passe perdu?</a>
                            <button class=\"btn pull-right\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\">Login</button>
                            <div class=\"clearfix\"></div>
                        </div>
                    </form>
                                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  115 => 41,  101 => 30,  94 => 26,  89 => 25,  83 => 23,  80 => 22,  77 => 21,  55 => 47,  53 => 21,  50 => 20,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <!-- Page Title -->*/
/* <div class="section section-breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1>Login</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="section">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-5">*/
/*                 <div class="basic-login">*/
/*                      {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {% block fos_user_content %}*/
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/*                     <form role="form" action="{{ path("fos_user_security_check") }}" method="POST">*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="login-username"><i class="icon-user"></i> <b>Username or Email</b></label>*/
/*                             <input class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="">*/
/*                         </div>*/
/*                                     */
/*                         <div class="form-group">*/
/*                             <label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>*/
/*                             <input class="form-control"  type="password" placeholder="" id="password" name="_password" required="required" >*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"> Remember me*/
/*                             </label>*/
/*                             <a href="{{path('fos_user_resetting_request')}}" class="forgot-password">mot d passe perdu?</a>*/
/*                             <button class="btn pull-right" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}">Login</button>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     </form>*/
/*                                 {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-7 social-login">*/
/*                 <p>Or login with your Facebook or Twitter</p>*/
/*                 <div class="social-login-buttons">*/
/*                     <a href="#" class="btn-facebook-login">Login with Facebook</a>*/
/*                     <a href="#" class="btn-twitter-login">Login with Twitter</a>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="not-member">*/
/*                     <p>Not a member? <a href="page-register.html">Register here</a></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
