<?php

/* utilisateurBundle:Message:mesMessage.html.twig */
class __TwigTemplate_d650ca6073c9c812f61a3c5c5f6587e70cc3c26e15c1cd5d6a0f7f51f6e3f38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "utilisateurBundle:Message:mesMessage.html.twig", 1);
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
        // line 8
        echo "

<div class=\"container\">
    <div class=\"row profile\">
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"profile-sidebar\">
\t\t\t\t<!-- SIDEBAR USERPIC -->
\t\t\t\t<div class=\"profile-userpic\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/avatar.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<!-- END SIDEBAR USERPIC -->
\t\t\t\t<!-- SIDEBAR USER TITLE -->
\t\t\t\t<div class=\"profile-usertitle\">
\t\t\t\t\t<div class=\"profile-usertitle-name\">
\t\t\t\t\t";
        // line 22
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
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user\"></i>
\t\t\t\t\t\t\tparametre du compte  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("mesprojet");
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"  ></i>
\t\t\t\t\t\t\tmes projett </a>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t\t<a href=\"\">
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
                                            
                                            
                                            
        
        <div class=\"panel panel-default widget\">
            <div class=\"panel-heading\">
                <span class=\"glyphicon glyphicon-comment\"></span>
                <h3 class=\"panel-title\">
                    Mes Messages</h3>
            
                    
            </div>
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["entities"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entities"]) {
            // line 87
            echo "            <div class=\"panel-body\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <div class=\"row\">
                            <div class=\"col-xs-2 col-md-1\">
                                <img src=\"http://placehold.it/80\" class=\"img-circle img-responsive\" alt=\"\" /></div>
                            <div class=\"col-xs-10 col-md-11\">
                                <div>
                                    
                                    <div class=\"mic-info\">
                                        By: <a href=\"#\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["entities"], "nomproprietaire", array()), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entities"], "sendAt", array()), "m/d/y"), "html", null, true);
            echo "
                                    </div>
                                    
                                    <p>
                                        ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entities"], "contenu", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"comment-text\">
                                
 

                                  
                                
                                </div>
                               
                        
    <a  href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Repondre", array("toUserId" => $this->getAttribute($context["entities"], "idsender", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-hover btn-primary\" href=\"\" ><span class=\"glyphicon glyphicon-share-alt\" style=\"padding-right:3px;\"></span>Repondre</a>
      <a href=\"#\" class=\"btn btn-sm btn-hover btn-danger\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:3px;\"></span>Delete</a>
      
                              
                            </div>
                        </div>
                    </li>
                
                    
                </ul>
                
            </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                
        </div>
    </div>
</div>
                                            
                                            </div>
\t</div>
</div>

<br>
<br>
";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/test.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/mesMessage.css.css"), "html", null, true);
        echo "\">
               
                ";
    }

    public function getTemplateName()
    {
        return "utilisateurBundle:Message:mesMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 5,  203 => 4,  200 => 3,  185 => 125,  166 => 112,  152 => 101,  143 => 97,  131 => 87,  127 => 86,  87 => 49,  79 => 44,  54 => 22,  45 => 16,  35 => 8,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     {% block css %}*/
/*                 <link rel="stylesheet" href="{{asset('css/test/test.css')}}">*/
/*                 <link rel="stylesheet" href="{{asset('css/test/mesMessage.css.css')}}">*/
/*                */
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
/* 							<a href="{{path('mesprojet')}}">*/
/* 							<i class="glyphicon glyphicon-ok"  ></i>*/
/* 							mes projett </a>*/
/* 						</li>*/
/*                                                 <li>*/
/* 							<a href="">*/
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
/*                                             */
/*                                             */
/*                                             */
/*         */
/*         <div class="panel panel-default widget">*/
/*             <div class="panel-heading">*/
/*                 <span class="glyphicon glyphicon-comment"></span>*/
/*                 <h3 class="panel-title">*/
/*                     Mes Messages</h3>*/
/*             */
/*                     */
/*             </div>*/
/*                 {% for entities in entities %}*/
/*             <div class="panel-body">*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-2 col-md-1">*/
/*                                 <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>*/
/*                             <div class="col-xs-10 col-md-11">*/
/*                                 <div>*/
/*                                     */
/*                                     <div class="mic-info">*/
/*                                         By: <a href="#">{{entities.nomproprietaire}}</a> {{entities.sendAt|date('m/d/y')}}*/
/*                                     </div>*/
/*                                     */
/*                                     <p>*/
/*                                         {{entities.contenu}}</p>*/
/*                                 </div>*/
/*                                 <div class="comment-text">*/
/*                                 */
/*  */
/* */
/*                                   */
/*                                 */
/*                                 </div>*/
/*                                */
/*                         */
/*     <a  href="{{path('Repondre',{'toUserId':entities.idsender})}}" class="btn btn-sm btn-hover btn-primary" href="" ><span class="glyphicon glyphicon-share-alt" style="padding-right:3px;"></span>Repondre</a>*/
/*       <a href="#" class="btn btn-sm btn-hover btn-danger"><span class="glyphicon glyphicon-remove" style="padding-right:3px;"></span>Delete</a>*/
/*       */
/*                               */
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 */
/*                     */
/*                 </ul>*/
/*                 */
/*             </div>*/
/*   {% endfor %}*/
/*                                 */
/*         </div>*/
/*     </div>*/
/* </div>*/
/*                                             */
/*                                             </div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <br>*/
/* <br>*/
/* {% endblock %}*/
/* */
