<?php

/* utilisateurBundle:admin:afficherutilisateur.html.twig */
class __TwigTemplate_735c515608f4b134fda6acd15e08415ed17a95a6cad6ba925769a9799cdec4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/layoutAdmin.html.twig", "utilisateurBundle:admin:afficherutilisateur.html.twig", 1);
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
    <!-- Page header -->

    <!-- /page header -->




    <!-- Page tabs -->
    <div class=\"tabbable page-tabs\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#grid-unboxed\" data-toggle=\"tab\"><i class=\"icon-checkbox-unchecked\"></i> Liste de tous les utilisateur</a></li>
        </ul>
        <div class=\"tab-content\">

            <!-- First tab -->
            <div class=\"tab-pane active fade in\" id=\"grid-unboxed\">

                <!-- Top option bar -->
                <div class=\"bar block clearfix\">
                    <form class=\"bar-left\" action=\"#\">
                        <label>Search entries: </label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Gallery search...\">
                        <button type=\"button\" class=\"btn btn-primary btn-icon btn-loading\" data-loading-text=\"<i class='icon-spinner7 spin'></i>\"><i class=\"icon-search3\"></i></button>
                    </form>

                    <div class=\"bar-right\">
                        <label>Sorting: </label>
                        <select name=\"select2\" class=\"select\">
                            <option value=\"bydate\">Sort by date</option>
                            <option value=\"bytime\">Sort by time</option>
                            <option value=\"bycategory\">Sort by category</option>
                            <option value=\"bysize\">Sort by size</option>
                        </select>
                        <button type=\"button\" class=\"btn btn-primary btn-icon btn-loading\" data-loading-text=\"<i class='icon-spinner7 spin'></i>\"><i class=\"icon-sort\"></i></button>
                    </div>
                </div>
                <!-- /top option bar -->


                <!-- Unboxed grid -->
                <div class=\"row\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["entities"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entities"]) {
            // line 51
            echo "                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"block\">
                            <div class=\"thumbnail\">
                                <a href=\"http://placehold.it/300\" class=\"thumb-zoom lightbox\" title=\"Eugene A. Kopyov\">
                                    <img src=\"http://placehold.it/300\" alt=\"\">
                                </a>

                                <div class=\"caption text-center\">
                                    <h6>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entities"], "username", array()), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entities"], "email", array()), "html", null, true);
            echo "</small></h6>
                                    <div class=\"icons-group\">
                                        <a href=\"#\" title=\"Google Drive\" class=\"tip\"><i class=\"icon-google-drive\"></i></a>
                                        <a href=\"#\" title=\"Twitter\" class=\"tip\"><i class=\"icon-twitter\"></i></a>
                                        <a href=\"#\" title=\"Github\" class=\"tip\"><i class=\"icon-github3\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </div>
                <!-- /unboxed grid -->


                <!-- Pagination -->
                <div class=\"text-center block\">
                    <ul class=\"pagination\">
                        <li><a href=\"#\">&larr;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li class=\"active\"><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">&rarr;</a></li>
                    </ul>
                </div>
                <!-- /pagination -->

            </div>
            <!-- /first tab -->

        ";
    }

    public function getTemplateName()
    {
        return "utilisateurBundle:admin:afficherutilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 71,  94 => 59,  84 => 51,  80 => 50,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::admin/layoutAdmin.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- Tasks table -->*/
/*     <!-- Page header -->*/
/* */
/*     <!-- /page header -->*/
/* */
/* */
/* */
/* */
/*     <!-- Page tabs -->*/
/*     <div class="tabbable page-tabs">*/
/*         <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#grid-unboxed" data-toggle="tab"><i class="icon-checkbox-unchecked"></i> Liste de tous les utilisateur</a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/* */
/*             <!-- First tab -->*/
/*             <div class="tab-pane active fade in" id="grid-unboxed">*/
/* */
/*                 <!-- Top option bar -->*/
/*                 <div class="bar block clearfix">*/
/*                     <form class="bar-left" action="#">*/
/*                         <label>Search entries: </label>*/
/*                         <input type="text" class="form-control" placeholder="Gallery search...">*/
/*                         <button type="button" class="btn btn-primary btn-icon btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i>"><i class="icon-search3"></i></button>*/
/*                     </form>*/
/* */
/*                     <div class="bar-right">*/
/*                         <label>Sorting: </label>*/
/*                         <select name="select2" class="select">*/
/*                             <option value="bydate">Sort by date</option>*/
/*                             <option value="bytime">Sort by time</option>*/
/*                             <option value="bycategory">Sort by category</option>*/
/*                             <option value="bysize">Sort by size</option>*/
/*                         </select>*/
/*                         <button type="button" class="btn btn-primary btn-icon btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i>"><i class="icon-sort"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /top option bar -->*/
/* */
/* */
/*                 <!-- Unboxed grid -->*/
/*                 <div class="row">*/
/*                     {% for entities in entities %}*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6">*/
/*                         <div class="block">*/
/*                             <div class="thumbnail">*/
/*                                 <a href="http://placehold.it/300" class="thumb-zoom lightbox" title="Eugene A. Kopyov">*/
/*                                     <img src="http://placehold.it/300" alt="">*/
/*                                 </a>*/
/* */
/*                                 <div class="caption text-center">*/
/*                                     <h6>{{entities.username}} <small>{{entities.email}}</small></h6>*/
/*                                     <div class="icons-group">*/
/*                                         <a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>*/
/*                                         <a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>*/
/*                                         <a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                                      {% endfor %}*/
/*                 </div>*/
/*                 <!-- /unboxed grid -->*/
/* */
/* */
/*                 <!-- Pagination -->*/
/*                 <div class="text-center block">*/
/*                     <ul class="pagination">*/
/*                         <li><a href="#">&larr;</a></li>*/
/*                         <li><a href="#">1</a></li>*/
/*                         <li class="active"><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">&rarr;</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /pagination -->*/
/* */
/*             </div>*/
/*             <!-- /first tab -->*/
/* */
/*         {% endblock %}*/
