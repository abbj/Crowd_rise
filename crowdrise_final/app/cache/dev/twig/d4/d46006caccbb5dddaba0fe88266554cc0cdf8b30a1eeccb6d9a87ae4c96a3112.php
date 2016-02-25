<?php

/* utilisateurBundle:admin:afficherUnProjetAdmin.html.twig */
class __TwigTemplate_d1d5d6d24679f8df43942b6056d8f7f11f220f2ae1fde46b1d0e39afcb61cd3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::admin/layoutAdmin.html.twig", "utilisateurBundle:admin:afficherUnProjetAdmin.html.twig", 2);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
    
     <!-- Tasks table -->
    <div class=\"block\">
        <h6 class=\"heading-hr\"><i class=\"icon-grid\"></i> Appercu projets</h6>
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

                    <tr>
                        <td class=\"task-desc\">
                            <a href=\"\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idProjet", array()), "html", null, true);
        echo "</span>
                        </td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomProjet", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume", array()), "html", null, true);
        echo "</td>
                        <td>
                            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "BUDJET", array()), "html", null, true);
        echo "
                            </div>
                        </td>
                        <td><i class=\"icon-clock\"></i> <strong class=\"text-danger\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "FICHIER", array()), "html", null, true);
        echo "</strong> hours left</td>
                        <td class=\"text-center\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-icon btn-success dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog4\"></i></button>
                              
                            </div>
                        </td>
                    </tr>  
                                </tbody>
                                    
            </table>
        </div>
    </div>
    <!-- /tasks table -->


            ";
    }

    public function getTemplateName()
    {
        return "utilisateurBundle:admin:afficherUnProjetAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  68 => 30,  63 => 28,  59 => 27,  54 => 25,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/*     {% extends "::admin/layoutAdmin.html.twig" %}*/
/* {% block body %}*/
/*     */
/*     */
/*      <!-- Tasks table -->*/
/*     <div class="block">*/
/*         <h6 class="heading-hr"><i class="icon-grid"></i> Appercu projets</h6>*/
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
/*                               */
/*                             </div>*/
/*                         </td>*/
/*                     </tr>  */
/*                                 </tbody>*/
/*                                     */
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /tasks table -->*/
/* */
/* */
/*             {% endblock %}*/
