<?php

/* VictoireUIBundle:SVG:check.html.twig */
class __TwigTemplate_8570a7efce24b2bb72e898667d8d5496de7f3825eb6c13628381a6274a92a663 extends Twig_Template
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
        $__internal_5e2ba751fa258d0c7183c4f71ff5b6c1eb9252a782bdc0df31063610a5063267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2ba751fa258d0c7183c4f71ff5b6c1eb9252a782bdc0df31063610a5063267->enter($__internal_5e2ba751fa258d0c7183c4f71ff5b6c1eb9252a782bdc0df31063610a5063267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:SVG:check.html.twig"));

        $__internal_d950275a87a1650e7aa84165ef30f60e6c70d788efcdd0660150d9426ed9ccf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d950275a87a1650e7aa84165ef30f60e6c70d788efcdd0660150d9426ed9ccf2->enter($__internal_d950275a87a1650e7aa84165ef30f60e6c70d788efcdd0660150d9426ed9ccf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:SVG:check.html.twig"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 1, $this->getSourceContext()); })()), 24)) : (24)), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 1, $this->getSourceContext()); })()), 24)) : (24)), "html", null, true);
        echo "\" viewBox=\"0 0 24 24\">
    <path fill=\"currentColor\" d=\"M21 7L9 19l-5.5-5.5 1.41-1.41L9 16.17 19.59 5.59 21 7z\"/>
</svg>";
        
        $__internal_5e2ba751fa258d0c7183c4f71ff5b6c1eb9252a782bdc0df31063610a5063267->leave($__internal_5e2ba751fa258d0c7183c4f71ff5b6c1eb9252a782bdc0df31063610a5063267_prof);

        
        $__internal_d950275a87a1650e7aa84165ef30f60e6c70d788efcdd0660150d9426ed9ccf2->leave($__internal_d950275a87a1650e7aa84165ef30f60e6c70d788efcdd0660150d9426ed9ccf2_prof);

    }

    public function getTemplateName()
    {
        return "VictoireUIBundle:SVG:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"{{ width|default(24) }}\" height=\"{{ height|default(24) }}\" viewBox=\"0 0 24 24\">
    <path fill=\"currentColor\" d=\"M21 7L9 19l-5.5-5.5 1.41-1.41L9 16.17 19.59 5.59 21 7z\"/>
</svg>", "VictoireUIBundle:SVG:check.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UIBundle/Resources/views/SVG/check.html.twig");
    }
}
