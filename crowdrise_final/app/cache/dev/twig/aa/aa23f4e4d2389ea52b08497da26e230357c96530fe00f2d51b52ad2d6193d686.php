<?php

/* utilisateurBundle:admin:adminacceuil.html.twig */
class __TwigTemplate_ae3762ab163ee03c15f3f51b933e4efbe79cf74a1b91c3bd5b326ef1352e2d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/layoutAdmin.html.twig", "utilisateurBundle:admin:adminacceuil.html.twig", 1);
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
    Bienvenu ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "utilisateurBundle:admin:adminacceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::admin/layoutAdmin.html.twig" %}*/
/* {% block body %}*/
/*     */
/*     Bienvenu {{ app.user.username }}*/
/*     {% endblock %}*/
