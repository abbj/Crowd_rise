<?php

/* ::navbar.html.twig */
class __TwigTemplate_c2dbdcdb5213a0209e2c039733101f630f110c98aad785884eb42f8a13ecf18a extends Twig_Template
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
        echo "<!-- Navigation & Logo-->



<div class=\"mainmenu-wrapper\">
    <div class=\"container\">
      

        <div class=\"menuextras \" >
            <div class=\"extras\">
                <ul>
                    
                ";
        // line 14
        echo "               
                       
                    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Bonjour,";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>

                        <li>

                            <div class=\"dropdown choose-country\">
                                <a class=\"glyphicon glyphicon-user btn-xs  \" data-toggle=\"dropdown\" href=\"#\">.PROFILE</a>
                                <ul class=\"dropdown-menu nav-drop\" role=\"menu\">
                                    <li role=\"menuitem\"><a href=\"#\"><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/us.png"), "html", null, true);
            echo "\" alt=\"United States\"> US</a></li>
                                    <li role=\"menuitem\"><a href=\"#\"><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/de.png"), "html", null, true);
            echo "\" alt=\"Germany\"> DE</a></li>
                                    <li role=\"menuitem\"><a href=\"#\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/es.png"), "html", null, true);
            echo "\" alt=\"Spain\"> ES</a></li>
                                </ul>
                            </div>
                        </li>



                    


  <a type=\"button\" class=\"btn-xs btn-default btn-danger \" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>
  <li>
      <div class=\"dropdown choose-country\">
          <a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/gb.png"), "html", null, true);
            echo "\" alt=\"Great Britain\"> FR</a>
          <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"menuitem\"><a href=\"#\"><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/us.png"), "html", null, true);
            echo "\" alt=\"United States\"> US</a></li>
              
          </ul>
      </div>
  </li>
                    ";
        } else {
            // line 46
            echo "             
                        <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se Connecte</a></li>
                        <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
";
            // line 50
            echo "                        <li>
      <div class=\"dropdown choose-country\">
          <a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/gb.png"), "html", null, true);
            echo "\" alt=\"Great Britain\"> FR</a>
          <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"menuitem\"><a href=\"#\"><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/us.png"), "html", null, true);
            echo "\" alt=\"United States\"> US</a></li>
              
          </ul>
      </div>
  </li>
                    ";
        }
        // line 60
        echo "
                   
                </ul>
            </div>
        </div>
        <nav id=\"mainmenu\" class=\"mainmenu\">
            <ul>
                <li class=\"logo-wrapper\"><a href=\"index.html\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/mPurpose-logo.png"), "html", null, true);
        echo "\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
                <li class=\"active\">
                    <a href=\"index.html\">Home</a>
                </li>

                <li class=\"has-submenu\">
                    <a href=\"#\">CrowdSourcing +</a>
                    <div class=\"mainmenu-submenu\">
                        <div class=\"mainmenu-submenu-inner\"> 
                            <div>
                                <h4>choix</h4>
                                <ul>
                                    <li><a href=\"\">je veux travailler</a></li>
                                    <li><a href=\"\">je veux embaucher</a></li>
                                </ul>

                            </div>
                            <div>
                                <h4>notre forum </h4>
                                <ul>
                                    <li><a href=\"\">
                                            Visiter notre forum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"has-submenu\">
                    <a href=\"#\">evenement +</a>
                    <div class=\"mainmenu-submenu\">
                        <div class=\"mainmenu-submenu-inner\"> 
                            <div>
                                <h4>nos evenement</h4>
                                <ul>
                                    <li><a href=\"\">detail de l'evenement</a></li>
                                    <li><a href=\"\">Calendrier des evenements</a></li>
                                    <li><a href=\"\">evenement a venir</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class=\"has-submenu\">
                    <a href=\"#\">CrowdFunding +</a>
                    <div class=\"mainmenu-submenu\">
                        <div class=\"mainmenu-submenu-inner\"> 
                            <div>
                                <h4>nos projets financeé</h4>
                                <ul>
                                    <li><a href=\"\">liste des projets</a></li>
                                    <li><a href=\"\">ajouter projets</a></li>
                                </ul>
                            </div>
                        </div>

                </li>
             
                <li>
                    <a href=\"\">contact</a>
                </li>



            </ul>
        </nav>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 67,  122 => 60,  113 => 54,  108 => 52,  104 => 50,  100 => 48,  96 => 47,  93 => 46,  84 => 41,  79 => 39,  73 => 36,  60 => 26,  56 => 25,  52 => 24,  39 => 17,  37 => 16,  33 => 14,  19 => 1,);
    }
}
/* <!-- Navigation & Logo-->*/
/* */
/* */
/* */
/* <div class="mainmenu-wrapper">*/
/*     <div class="container">*/
/*       */
/* */
/*         <div class="menuextras " >*/
/*             <div class="extras">*/
/*                 <ul>*/
/*                     */
/*                 {#<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>#}*/
/*                */
/*                        */
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         <li><a href="{{path('fos_user_security_login')}}">Bonjour,{{ app.user.username }}</a></li>*/
/* */
/*                         <li>*/
/* */
/*                             <div class="dropdown choose-country">*/
/*                                 <a class="glyphicon glyphicon-user btn-xs  " data-toggle="dropdown" href="#">.PROFILE</a>*/
/*                                 <ul class="dropdown-menu nav-drop" role="menu">*/
/*                                     <li role="menuitem"><a href="#"><img src="{{asset('img/flags/us.png')}}" alt="United States"> US</a></li>*/
/*                                     <li role="menuitem"><a href="#"><img src="{{asset('img/flags/de.png')}}" alt="Germany"> DE</a></li>*/
/*                                     <li role="menuitem"><a href="#"><img src="{{asset('img/flags/es.png')}}" alt="Spain"> ES</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </li>*/
/* */
/* */
/* */
/*                     */
/* */
/* */
/*   <a type="button" class="btn-xs btn-default btn-danger " href="{{ path('fos_user_security_logout') }}">Deconnexion</a>*/
/*   <li>*/
/*       <div class="dropdown choose-country">*/
/*           <a class="#" data-toggle="dropdown" href="#"><img src="{{asset('img/flags/gb.png')}}" alt="Great Britain"> FR</a>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*               <li role="menuitem"><a href="#"><img src="{{asset('img/flags/us.png')}}" alt="United States"> US</a></li>*/
/*               */
/*           </ul>*/
/*       </div>*/
/*   </li>*/
/*                     {% else %}             */
/*                         <li><a href="{{path('fos_user_security_login')}}">Se Connecte</a></li>*/
/*                         <li><a href="{{path('fos_user_registration_register')}}">S'inscrire</a></li>*/
/* {# barre de translation en mode connect et en mode non connecte #}*/
/*                         <li>*/
/*       <div class="dropdown choose-country">*/
/*           <a class="#" data-toggle="dropdown" href="#"><img src="{{asset('img/flags/gb.png')}}" alt="Great Britain"> FR</a>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*               <li role="menuitem"><a href="#"><img src="{{asset('img/flags/us.png')}}" alt="United States"> US</a></li>*/
/*               */
/*           </ul>*/
/*       </div>*/
/*   </li>*/
/*                     {% endif %}*/
/* */
/*                    */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <nav id="mainmenu" class="mainmenu">*/
/*             <ul>*/
/*                 <li class="logo-wrapper"><a href="index.html"><img src="{{asset('img/mPurpose-logo.png')}}" alt="Multipurpose Twitter Bootstrap Template"></a></li>*/
/*                 <li class="active">*/
/*                     <a href="index.html">Home</a>*/
/*                 </li>*/
/* */
/*                 <li class="has-submenu">*/
/*                     <a href="#">CrowdSourcing +</a>*/
/*                     <div class="mainmenu-submenu">*/
/*                         <div class="mainmenu-submenu-inner"> */
/*                             <div>*/
/*                                 <h4>choix</h4>*/
/*                                 <ul>*/
/*                                     <li><a href="">je veux travailler</a></li>*/
/*                                     <li><a href="">je veux embaucher</a></li>*/
/*                                 </ul>*/
/* */
/*                             </div>*/
/*                             <div>*/
/*                                 <h4>notre forum </h4>*/
/*                                 <ul>*/
/*                                     <li><a href="">*/
/*                                             Visiter notre forum</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li class="has-submenu">*/
/*                     <a href="#">evenement +</a>*/
/*                     <div class="mainmenu-submenu">*/
/*                         <div class="mainmenu-submenu-inner"> */
/*                             <div>*/
/*                                 <h4>nos evenement</h4>*/
/*                                 <ul>*/
/*                                     <li><a href="">detail de l'evenement</a></li>*/
/*                                     <li><a href="">Calendrier des evenements</a></li>*/
/*                                     <li><a href="">evenement a venir</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/* */
/*                 <li class="has-submenu">*/
/*                     <a href="#">CrowdFunding +</a>*/
/*                     <div class="mainmenu-submenu">*/
/*                         <div class="mainmenu-submenu-inner"> */
/*                             <div>*/
/*                                 <h4>nos projets financeé</h4>*/
/*                                 <ul>*/
/*                                     <li><a href="">liste des projets</a></li>*/
/*                                     <li><a href="">ajouter projets</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                 </li>*/
/*              */
/*                 <li>*/
/*                     <a href="">contact</a>*/
/*                 </li>*/
/* */
/* */
/* */
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/* </div>*/
/* */
/* */
