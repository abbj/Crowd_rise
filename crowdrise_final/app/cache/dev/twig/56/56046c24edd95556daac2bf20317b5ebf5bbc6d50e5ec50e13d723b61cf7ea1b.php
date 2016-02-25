<?php

/* ::admin/navbar.html.twig */
class __TwigTemplate_9c4793b20a561e301261c209face2ff2700b0af7cf496407c013779aa88c8675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'task' => array($this, 'block_task'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t<!-- Navbar -->
\t<div class=\"navbar navbar-inverse\" role=\"navigation\">
\t\t<div class=\"navbar-header\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/images/logo.png"), "html", null, true);
        echo "\" alt=\"Londinium\"></a>
\t\t\t<a class=\"sidebar-toggle\"><i class=\"icon-paragraph-justify2\"></i></a>
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-icons\">
\t\t\t\t<span class=\"sr-only\">Toggle navbar</span>
\t\t\t\t<i class=\"icon-grid3\"></i>
\t\t\t</button>
\t\t\t<button type=\"button\" class=\"navbar-toggle offcanvas\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<i class=\"icon-paragraph-justify2\"></i>
\t\t\t</button>
\t\t</div>

\t\t<ul class=\"nav navbar-nav navbar-right collapse\" id=\"navbar-icons\">
\t\t\t<li class=\"dropdown\">
\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"icon-people\"></i>
\t\t\t\t\t<span class=\"label label-default\">2</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"popup dropdown-menu dropdown-menu-right\">
\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left\"><i class=\"icon-spinner7\"></i></a>
\t\t\t\t\t\t<span>Activity</span>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-right\"><i class=\"icon-paragraph-justify\"></i></a>
\t\t\t\t\t</div>
\t                <ul class=\"activity\">
\t\t                <li>
\t\t                \t<i class=\"icon-cart-checkout text-success\"></i>
\t\t                \t<div>
\t\t\t                \t<a href=\"#\">Eugene</a> ordered 2 copies of <a href=\"#\">OEM license</a>
\t\t\t                \t<span>14 minutes ago</span>
\t\t                \t</div>
\t\t                </li>
\t\t                <li>
\t\t                \t<i class=\"icon-heart text-danger\"></i>
\t\t                \t<div>
\t\t\t                \tYour <a href=\"#\">latest post</a> was liked by <a href=\"#\">Audrey Mall</a>
\t\t\t                \t<span>35 minutes ago</span>
\t\t                \t</div>
\t\t                </li>
\t\t                <li>
\t\t                \t<i class=\"icon-checkmark3 text-success\"></i>
\t\t                \t<div>
\t\t\t                \tMail server was updated. See <a href=\"#\">changelog</a>
\t\t\t                \t<span>About 2 hours ago</span>
\t\t                \t</div>
\t\t                </li>
\t\t                <li>
\t\t                \t<i class=\"icon-paragraph-justify2 text-warning\"></i>
\t\t                \t<div>
\t\t\t                \tThere are <a href=\"#\">6 new tasks</a> waiting for you. Don't forget!
\t\t\t                \t<span>About 3 hours ago</span>
\t\t                \t</div>
\t\t                </li>
\t                </ul>
                </div>
\t\t\t</li>

\t\t\t<li class=\"dropdown\">
\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"icon-paragraph-justify2\"></i>
\t\t\t\t\t<span class=\"label label-default\">6</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"popup dropdown-menu dropdown-menu-right\">
\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left\"><i class=\"icon-spinner7\"></i></a>
\t\t\t\t\t\t<span>Messages</span>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-right\"><i class=\"icon-new-tab\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"popup-messages\">
\t\t\t\t\t\t<li class=\"unread\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
\t\t\t\t\t\t\t\t<strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <i class=\"icon-attachment2\"></i></strong>
\t\t\t\t\t\t\t\t<span>Aliquam interdum convallis massa...</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
\t\t\t\t\t\t\t\t<strong>Jason Goldsmith <i class=\"icon-attachment2\"></i></strong>
\t\t\t\t\t\t\t\t<span>Aliquam interdum convallis massa...</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
\t\t\t\t\t\t\t\t<strong>Angel Novator</strong>
\t\t\t\t\t\t\t\t<span>Aliquam interdum convallis massa...</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
\t\t\t\t\t\t\t\t<strong>Monica Bloomberg</strong>
\t\t\t\t\t\t\t\t<span>Aliquam interdum convallis massa...</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
\t\t\t\t\t\t\t\t<strong>Patrick Winsleur</strong>
\t\t\t\t\t\t\t\t<span>Aliquam interdum convallis massa...</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t<li class=\"dropdown\">
\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\">
\t\t\t\t\t<i class=\"icon-grid\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"popup dropdown-menu dropdown-menu-right\">
\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left\"><i class=\"icon-spinner7\"></i></a>
\t\t\t\t\t\t<span>Tasks list</span>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-right\"><i class=\"icon-new-tab\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Projets</th>
\t\t\t\t\t\t\t\t<th>Category</th>
\t\t\t\t\t\t\t\t<th class=\"text-center\">taux fianance</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
                                                    ";
        // line 132
        $this->displayBlock('task', $context, $blocks);
        // line 135
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t<li class=\"user dropdown\">
\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t<img src=\"http://placehold.it/300\">
\t\t\t\t\t<span>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t<i class=\"caret\"></i>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right icons-right\">
\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-user\"></i> Profile</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-bubble4\"></i> Messages</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-cog\"></i> Settings</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-exit\"></i> Logout</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<!-- /navbar -->
";
    }

    // line 132
    public function block_task($context, array $blocks = array())
    {
        // line 133
        echo "\t\t\t\t\t\t\t
                                                        ";
    }

    public function getTemplateName()
    {
        return "::admin/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 133,  190 => 132,  172 => 144,  161 => 135,  159 => 132,  101 => 77,  26 => 5,  20 => 1,);
    }
}
/* */
/* 	<!-- Navbar -->*/
/* 	<div class="navbar navbar-inverse" role="navigation">*/
/* 		<div class="navbar-header">*/
/* 			<a class="navbar-brand" href="#"><img src="{{asset('admin/images/logo.png')}}" alt="Londinium"></a>*/
/* 			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">*/
/* 				<span class="sr-only">Toggle navbar</span>*/
/* 				<i class="icon-grid3"></i>*/
/* 			</button>*/
/* 			<button type="button" class="navbar-toggle offcanvas">*/
/* 				<span class="sr-only">Toggle navigation</span>*/
/* 				<i class="icon-paragraph-justify2"></i>*/
/* 			</button>*/
/* 		</div>*/
/* */
/* 		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">*/
/* 			<li class="dropdown">*/
/* 				<a class="dropdown-toggle" data-toggle="dropdown">*/
/* 					<i class="icon-people"></i>*/
/* 					<span class="label label-default">2</span>*/
/* 				</a>*/
/* 				<div class="popup dropdown-menu dropdown-menu-right">*/
/* 					<div class="popup-header">*/
/* 						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>*/
/* 						<span>Activity</span>*/
/* 						<a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>*/
/* 					</div>*/
/* 	                <ul class="activity">*/
/* 		                <li>*/
/* 		                	<i class="icon-cart-checkout text-success"></i>*/
/* 		                	<div>*/
/* 			                	<a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a>*/
/* 			                	<span>14 minutes ago</span>*/
/* 		                	</div>*/
/* 		                </li>*/
/* 		                <li>*/
/* 		                	<i class="icon-heart text-danger"></i>*/
/* 		                	<div>*/
/* 			                	Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a>*/
/* 			                	<span>35 minutes ago</span>*/
/* 		                	</div>*/
/* 		                </li>*/
/* 		                <li>*/
/* 		                	<i class="icon-checkmark3 text-success"></i>*/
/* 		                	<div>*/
/* 			                	Mail server was updated. See <a href="#">changelog</a>*/
/* 			                	<span>About 2 hours ago</span>*/
/* 		                	</div>*/
/* 		                </li>*/
/* 		                <li>*/
/* 		                	<i class="icon-paragraph-justify2 text-warning"></i>*/
/* 		                	<div>*/
/* 			                	There are <a href="#">6 new tasks</a> waiting for you. Don't forget!*/
/* 			                	<span>About 3 hours ago</span>*/
/* 		                	</div>*/
/* 		                </li>*/
/* 	                </ul>*/
/*                 </div>*/
/* 			</li>*/
/* */
/* 			<li class="dropdown">*/
/* 				<a class="dropdown-toggle" data-toggle="dropdown">*/
/* 					<i class="icon-paragraph-justify2"></i>*/
/* 					<span class="label label-default">6</span>*/
/* 				</a>*/
/* 				<div class="popup dropdown-menu dropdown-menu-right">*/
/* 					<div class="popup-header">*/
/* 						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>*/
/* 						<span>Messages</span>*/
/* 						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>*/
/* 					</div>*/
/* 					<ul class="popup-messages">*/
/* 						<li class="unread">*/
/* 							<a href="#">*/
/* 								<img src="http://placehold.it/300" alt="" class="user-face">*/
/* 								<strong>{{ app.user.username }} <i class="icon-attachment2"></i></strong>*/
/* 								<span>Aliquam interdum convallis massa...</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">*/
/* 								<img src="http://placehold.it/300" alt="" class="user-face">*/
/* 								<strong>Jason Goldsmith <i class="icon-attachment2"></i></strong>*/
/* 								<span>Aliquam interdum convallis massa...</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">*/
/* 								<img src="http://placehold.it/300" alt="" class="user-face">*/
/* 								<strong>Angel Novator</strong>*/
/* 								<span>Aliquam interdum convallis massa...</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">*/
/* 								<img src="http://placehold.it/300" alt="" class="user-face">*/
/* 								<strong>Monica Bloomberg</strong>*/
/* 								<span>Aliquam interdum convallis massa...</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="#">*/
/* 								<img src="http://placehold.it/300" alt="" class="user-face">*/
/* 								<strong>Patrick Winsleur</strong>*/
/* 								<span>Aliquam interdum convallis massa...</span>*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</li>*/
/* */
/* 			<li class="dropdown">*/
/* 				<a data-toggle="dropdown" class="dropdown-toggle">*/
/* 					<i class="icon-grid"></i>*/
/* 				</a>*/
/* 				<div class="popup dropdown-menu dropdown-menu-right">*/
/* 					<div class="popup-header">*/
/* 						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>*/
/* 						<span>Tasks list</span>*/
/* 						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>*/
/* 					</div>*/
/* 					<table class="table table-hover">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>Projets</th>*/
/* 								<th>Category</th>*/
/* 								<th class="text-center">taux fianance</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/*                                                     {% block task %}*/
/* 							*/
/*                                                         {% endblock %}*/
/* 							*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</li>*/
/* */
/* 			<li class="user dropdown">*/
/* 				<a class="dropdown-toggle" data-toggle="dropdown">*/
/* 					<img src="http://placehold.it/300">*/
/* 					<span>{{ app.user.username }}</span>*/
/* 					<i class="caret"></i>*/
/* 				</a>*/
/* 				<ul class="dropdown-menu dropdown-menu-right icons-right">*/
/* 					<li><a href="#"><i class="icon-user"></i> Profile</a></li>*/
/* 					<li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>*/
/* 					<li><a href="#"><i class="icon-cog"></i> Settings</a></li>*/
/* 					<li><a href="#"><i class="icon-exit"></i> Logout</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<!-- /navbar -->*/
/* */
