<?php

/* utilisateurBundle:admin:afficherProjetAdmin.html.twig */
class __TwigTemplate_f9ebf6bedcfb1c408696f4c01c7a83e2a7be675416fdbe06badaf0d9d2d9cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/layoutAdmin.html.twig", "utilisateurBundle:admin:afficherProjetAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    
    

    
    
     <!-- Tasks table -->
    <div class=\"block\">
        <h6 class=\"heading-hr\"><i class=\"icon-grid\"></i> Liste des projets</h6>
        <div class=\"datatable-tasks\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class=\"task-priority\">Idprojet</th>
                        <th class=\"task-date-added\">Nomprojet</th>
                        <th class=\"task-progress\">Resume</th>
                        <th class=\"task-deadline\">Image</th>
                        <th class=\"task-tools text-center\">Budjet</th>
                    </tr>
                </thead>
                <tbody>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "
                    <tr>
                        <td class=\"task-desc\">
                            <a href=\"\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idProjet", array()), "html", null, true);
            echo "</span>
                        </td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomProjet", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "BUDJET", array()), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td><i class=\"icon-clock\"></i> <strong class=\"text-danger\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "FICHIER", array()), "html", null, true);
            echo "</strong> hours left</td>
                        <td class=\"text-center\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-icon btn-success dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog4\"></i></button>
                                <ul class=\"dropdown-menu icons-right dropdown-menu-right\">
                                    <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherUnProjetAdmin", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\"><i class=\"icon-quill2\"></i> voir projet </a></li>
                                    <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_edit", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\"><i class=\"icon-share2\"></i> editer projet</a></li>
                                    <li><a href=\"#\"><i class=\"icon-checkmark3\"></i> Complete</a></li>
                                    <li><a href=\"#\"><i class=\"icon-stack\"></i> Archive</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>  
                                </tbody>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                    
            </table>
        </div>
    </div>
    <!-- /tasks table -->

     <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("projet_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
                
                
            ";
    }

    public function getTemplateName()
    {
        return "utilisateurBundle:admin:afficherProjetAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 59,  110 => 51,  95 => 42,  91 => 41,  83 => 36,  77 => 33,  72 => 31,  68 => 30,  63 => 28,  58 => 25,  54 => 24,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::admin/layoutAdmin.html.twig" %}*/
/* {% block body %}*/
/*     */
/*     */
/* */
/*     */
/*     */
/*      <!-- Tasks table -->*/
/*     <div class="block">*/
/*         <h6 class="heading-hr"><i class="icon-grid"></i> Liste des projets</h6>*/
/*         <div class="datatable-tasks">*/
/*             <table class="table table-bordered">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>ID</th>*/
/*                         <th class="task-priority">Idprojet</th>*/
/*                         <th class="task-date-added">Nomprojet</th>*/
/*                         <th class="task-progress">Resume</th>*/
/*                         <th class="task-deadline">Image</th>*/
/*                         <th class="task-tools text-center">Budjet</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                                 {% for entity in entities %}*/
/* */
/*                     <tr>*/
/*                         <td class="task-desc">*/
/*                             <a href=""> {{entity.idProjet}}</span>*/
/*                         </td>*/
/*                         <td>{{entity.nomProjet}}</td>*/
/*                         <td>{{entity.resume}}</td>*/
/*                         <td>*/
/*                             {{entity.BUDJET}}*/
/*                             </div>*/
/*                         </td>*/
/*                         <td><i class="icon-clock"></i> <strong class="text-danger">{{entity.FICHIER}}</strong> hours left</td>*/
/*                         <td class="text-center">*/
/*                             <div class="btn-group">*/
/*                                 <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>*/
/*                                 <ul class="dropdown-menu icons-right dropdown-menu-right">*/
/*                                     <li><a href="{{ path('afficherUnProjetAdmin', { 'id': entity.idProjet }) }}"><i class="icon-quill2"></i> voir projet </a></li>*/
/*                                     <li><a href="{{ path('projet_edit', { 'id': entity.idProjet }) }}"><i class="icon-share2"></i> editer projet</a></li>*/
/*                                     <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>*/
/*                                     <li><a href="#"><i class="icon-stack"></i> Archive</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>  */
/*                                 </tbody>*/
/*                                 {% endfor %}*/
/*                                     */
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /tasks table -->*/
/* */
/*      <ul>*/
/*         <li>*/
/*             <a href="{{ path('projet_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*                 */
/*                 */
/*             {% endblock %}*/
