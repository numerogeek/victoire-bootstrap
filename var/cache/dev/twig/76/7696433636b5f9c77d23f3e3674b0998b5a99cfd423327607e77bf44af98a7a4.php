<?php

/* VictoireCoreBundle:Layout:defaultLayout.html.twig */
class __TwigTemplate_f4f070b08ef0d9eeed63c9b5e20ddc66e2d99fd4ff060cbd0eb98370c338a4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VictoireCoreBundle:Layout:layout.html.twig", "VictoireCoreBundle:Layout:defaultLayout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireCoreBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9b4d59bc0a07da6fa98296bc9dc82337f8c9171f532fd87bdebbc4a62eae28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b4d59bc0a07da6fa98296bc9dc82337f8c9171f532fd87bdebbc4a62eae28c->enter($__internal_f9b4d59bc0a07da6fa98296bc9dc82337f8c9171f532fd87bdebbc4a62eae28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Layout:defaultLayout.html.twig"));

        $__internal_e2fe71d46ffd4995fc71bdff76adf3cd40344731bbe63c204d09c231efbe4806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fe71d46ffd4995fc71bdff76adf3cd40344731bbe63c204d09c231efbe4806->enter($__internal_e2fe71d46ffd4995fc71bdff76adf3cd40344731bbe63c204d09c231efbe4806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Layout:defaultLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b4d59bc0a07da6fa98296bc9dc82337f8c9171f532fd87bdebbc4a62eae28c->leave($__internal_f9b4d59bc0a07da6fa98296bc9dc82337f8c9171f532fd87bdebbc4a62eae28c_prof);

        
        $__internal_e2fe71d46ffd4995fc71bdff76adf3cd40344731bbe63c204d09c231efbe4806->leave($__internal_e2fe71d46ffd4995fc71bdff76adf3cd40344731bbe63c204d09c231efbe4806_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle:Layout:defaultLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle:Layout:layout.html.twig' %}
{# Override this template to add your own style, script or markup and define the default app layout
    Read more here: https://github.com/Victoire/documentation-fr/new/master/COOKBOOK/OverrideLayout.md
#}
", "VictoireCoreBundle:Layout:defaultLayout.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/Layout/defaultLayout.html.twig");
    }
}
