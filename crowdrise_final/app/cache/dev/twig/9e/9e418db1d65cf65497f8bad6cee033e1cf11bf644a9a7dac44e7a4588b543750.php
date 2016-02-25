<?php

/* crowdBundle:Default:Projets/List_projets.html.twig */
class __TwigTemplate_5b7a739ae0c12e28e0bfce8956f65a6796d820b4a7f49864359491e0fb48375f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "crowdBundle:Default:Projets/List_projets.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "

";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <!-- Page Title -->
    <div class=\"section section-breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Blog Post (Left Sidebar)</h1>
                </div>
            </div>
        </div>
    </div>

    
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Sidebar -->
                <div class=\"col-sm-3 blog-sidebar\">
                    <h4>Search our Blog</h4>
                    <form>
                        <div class=\"input-group\">
                            <input class=\"form-control input-md\" id=\"appendedInputButtons\" type=\"text\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-md\" type=\"button\">Search</button>
                            </span>
                        </div>
                    </form>
                    <h4>Recent Posts</h4>
                    <ul class=\"recent-posts\">
                        <li><a href=\"#\">Lorem ipsum dolor sit amet</a></li>
                        <li><a href=\"#\">Sed sit amet metus sit</a></li>
                        <li><a href=\"#\">Nunc et diam volutpat tellus ultrices</a></li>
                        <li><a href=\"#\">Quisque sollicitudin cursus felis</a></li>
                    </ul>
                    <h4>Categories</h4>
                    <ul class=\"blog-categories\">
                        <li><a href=\"#\">Lorem ipsum</a></li>
                        <li><a href=\"#\">Sed sit amet metus</a></li>
                        <li><a href=\"#\">Nunc et diam </a></li>
                        <li><a href=\"#\">Quisque</a></li>
                    </ul>
                    <h4>Archive</h4>
                    <ul>
                        <li><a href=\"#\">January 2013</a></li>
                        <li><a href=\"#\">February 2013</a></li>
                        <li><a href=\"#\">March 2013</a></li>
                        <li><a href=\"#\">April 2013</a></li>
                        <li><a href=\"#\">May 2013</a></li>
                    </ul>
                </div>
                <!-- End Sidebar -->
                <div class=\"col-sm-8\">
                    
                    <ul class=\"thumbnails list-unstyled\">
        <li class=\"col-md-4\">
          <div class=\"thumbnail\" style=\"padding: 0\">
            <div style=\"padding:4px\">
              <img alt=\"300x200\" style=\"width: 100%\" src=\"http://placehold.it/200x150\">
            </div>
            <div class=\"caption\">
              <h2>Project A</h2>
              <p>My project description</p>
              <p><i class=\"icon icon-map-marker\"></i> Place, Country</p>
            </div>
            <div class=\"modal-footer\" style=\"text-align: left\">
              <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\">
                    <span class=\"sr-only\">60% Complete</span>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4\"><b>60%</b><br/><small>FUNDED</small></div>
                <div class=\"col-md-4\"><b>\$400</b><br/><small>PLEDGED</small></div>
                <div class=\"col-md-4\"><b>18</b><br/><small>DAYS</small></div>
              </div>
            </div>
          </div>
        </li>
        <li class=\"col-md-4\">
          <div class=\"thumbnail\" style=\"padding: 0\">
            <div style=\"padding:4px\">
              <img alt=\"300x200\" style=\"width: 100%\" src=\"http://placehold.it/200x150\">
            </div>
            <div class=\"caption\">
              <h2>Project B</h2>
              <p>My project description</p>
              <p><i class=\"icon icon-map-marker\"></i> Place, Country</p>
            </div>
            <div class=\"modal-footer\" style=\"text-align: left\">
              <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">
                    <span class=\"sr-only\">60% Complete</span>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4\"><b>250%</b><br/><small>FUNDED</small></div>
                <div class=\"col-md-4\"><b>\$50000</b><br/><small>PLEDGED</small></div>
                <div class=\"col-md-4\"><b>FUNDED</b><br/><small>AUG 5</small></div>
              </div>
            </div>
          </div>
        </li>
        <li class=\"col-md-4\">
        <div class=\"thumbnail\" style=\"padding: 0\">
          <div style=\"padding:4px\">
            <img alt=\"300x200\" style=\"width: 100%\" src=\"http://placehold.it/200x150\">
          </div>
          <div class=\"caption\">
            <h2>Project C</h2>
            <p>My project description</p>
            <p><i class=\"icon icon-map-marker\"></i> Place, Country</p>
          </div>
          <div class=\"modal-footer\" style=\"text-align: left\">
              <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 30%;\">
                    <span class=\"sr-only\">60% Complete</span>
                </div>
              </div>
            <div class=\"row\">
              <div class=\"col-md-4\"><b>30%</b><br/><small>FUNDED</small></div>
              <div class=\"col-md-4\"><b>\$1000</b><br/><small>PLEDGED</small></div>
              <div class=\"col-md-4\"><b>NOT FUNDED</b><br/><small></small></div>
            </div>
          </div>
        </div>
      </li>
      </ul>

                </div>
            </div>
        </div>
    </div>
";
    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        // line 145
        echo "


";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Default:Projets/List_projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 145,  178 => 144,  42 => 10,  39 => 9,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block css %}*/
/* */
/* */
/* {% endblock%}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     <!-- Page Title -->*/
/*     <div class="section section-breadcrumbs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1>Blog Post (Left Sidebar)</h1>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     */
/*     <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Sidebar -->*/
/*                 <div class="col-sm-3 blog-sidebar">*/
/*                     <h4>Search our Blog</h4>*/
/*                     <form>*/
/*                         <div class="input-group">*/
/*                             <input class="form-control input-md" id="appendedInputButtons" type="text">*/
/*                             <span class="input-group-btn">*/
/*                                 <button class="btn btn-md" type="button">Search</button>*/
/*                             </span>*/
/*                         </div>*/
/*                     </form>*/
/*                     <h4>Recent Posts</h4>*/
/*                     <ul class="recent-posts">*/
/*                         <li><a href="#">Lorem ipsum dolor sit amet</a></li>*/
/*                         <li><a href="#">Sed sit amet metus sit</a></li>*/
/*                         <li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>*/
/*                         <li><a href="#">Quisque sollicitudin cursus felis</a></li>*/
/*                     </ul>*/
/*                     <h4>Categories</h4>*/
/*                     <ul class="blog-categories">*/
/*                         <li><a href="#">Lorem ipsum</a></li>*/
/*                         <li><a href="#">Sed sit amet metus</a></li>*/
/*                         <li><a href="#">Nunc et diam </a></li>*/
/*                         <li><a href="#">Quisque</a></li>*/
/*                     </ul>*/
/*                     <h4>Archive</h4>*/
/*                     <ul>*/
/*                         <li><a href="#">January 2013</a></li>*/
/*                         <li><a href="#">February 2013</a></li>*/
/*                         <li><a href="#">March 2013</a></li>*/
/*                         <li><a href="#">April 2013</a></li>*/
/*                         <li><a href="#">May 2013</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- End Sidebar -->*/
/*                 <div class="col-sm-8">*/
/*                     */
/*                     <ul class="thumbnails list-unstyled">*/
/*         <li class="col-md-4">*/
/*           <div class="thumbnail" style="padding: 0">*/
/*             <div style="padding:4px">*/
/*               <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">*/
/*             </div>*/
/*             <div class="caption">*/
/*               <h2>Project A</h2>*/
/*               <p>My project description</p>*/
/*               <p><i class="icon icon-map-marker"></i> Place, Country</p>*/
/*             </div>*/
/*             <div class="modal-footer" style="text-align: left">*/
/*               <div class="progress">*/
/*                 <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">*/
/*                     <span class="sr-only">60% Complete</span>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="row">*/
/*                 <div class="col-md-4"><b>60%</b><br/><small>FUNDED</small></div>*/
/*                 <div class="col-md-4"><b>$400</b><br/><small>PLEDGED</small></div>*/
/*                 <div class="col-md-4"><b>18</b><br/><small>DAYS</small></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         <li class="col-md-4">*/
/*           <div class="thumbnail" style="padding: 0">*/
/*             <div style="padding:4px">*/
/*               <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">*/
/*             </div>*/
/*             <div class="caption">*/
/*               <h2>Project B</h2>*/
/*               <p>My project description</p>*/
/*               <p><i class="icon icon-map-marker"></i> Place, Country</p>*/
/*             </div>*/
/*             <div class="modal-footer" style="text-align: left">*/
/*               <div class="progress">*/
/*                 <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">*/
/*                     <span class="sr-only">60% Complete</span>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="row">*/
/*                 <div class="col-md-4"><b>250%</b><br/><small>FUNDED</small></div>*/
/*                 <div class="col-md-4"><b>$50000</b><br/><small>PLEDGED</small></div>*/
/*                 <div class="col-md-4"><b>FUNDED</b><br/><small>AUG 5</small></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         <li class="col-md-4">*/
/*         <div class="thumbnail" style="padding: 0">*/
/*           <div style="padding:4px">*/
/*             <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">*/
/*           </div>*/
/*           <div class="caption">*/
/*             <h2>Project C</h2>*/
/*             <p>My project description</p>*/
/*             <p><i class="icon icon-map-marker"></i> Place, Country</p>*/
/*           </div>*/
/*           <div class="modal-footer" style="text-align: left">*/
/*               <div class="progress">*/
/*                 <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">*/
/*                     <span class="sr-only">60% Complete</span>*/
/*                 </div>*/
/*               </div>*/
/*             <div class="row">*/
/*               <div class="col-md-4"><b>30%</b><br/><small>FUNDED</small></div>*/
/*               <div class="col-md-4"><b>$1000</b><br/><small>PLEDGED</small></div>*/
/*               <div class="col-md-4"><b>NOT FUNDED</b><br/><small></small></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </li>*/
/*       </ul>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
