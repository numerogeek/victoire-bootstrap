<?php

/* VictoireUIBundle:SVG:calendar.html.twig */
class __TwigTemplate_a7f581ab06b55416f1a4166535089eb5ce2f73aea6e6cbce6fa35bdc54e0e945 extends Twig_Template
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
        $__internal_94827993dce1265d56dfbcf9f01150f5e9b977b72a02b0231a2c243166fefd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94827993dce1265d56dfbcf9f01150f5e9b977b72a02b0231a2c243166fefd98->enter($__internal_94827993dce1265d56dfbcf9f01150f5e9b977b72a02b0231a2c243166fefd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:SVG:calendar.html.twig"));

        $__internal_a7b7f64cef8607fe4903a3fa6ad0fadf691b3abcb057d2bd29c26eaff5f18748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b7f64cef8607fe4903a3fa6ad0fadf691b3abcb057d2bd29c26eaff5f18748->enter($__internal_a7b7f64cef8607fe4903a3fa6ad0fadf691b3abcb057d2bd29c26eaff5f18748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:SVG:calendar.html.twig"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 1, $this->getSourceContext()); })()), 24)) : (24)), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 1, $this->getSourceContext()); })()), 24)) : (24)), "html", null, true);
        echo "\" viewBox=\"0 0 24 24\">
    <path fill=\"currentColor\" d=\"M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2h-1V1m-1 11h-5v5h5v-5z\"/>
</svg>";
        
        $__internal_94827993dce1265d56dfbcf9f01150f5e9b977b72a02b0231a2c243166fefd98->leave($__internal_94827993dce1265d56dfbcf9f01150f5e9b977b72a02b0231a2c243166fefd98_prof);

        
        $__internal_a7b7f64cef8607fe4903a3fa6ad0fadf691b3abcb057d2bd29c26eaff5f18748->leave($__internal_a7b7f64cef8607fe4903a3fa6ad0fadf691b3abcb057d2bd29c26eaff5f18748_prof);

    }

    public function getTemplateName()
    {
        return "VictoireUIBundle:SVG:calendar.html.twig";
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
    <path fill=\"currentColor\" d=\"M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2h-1V1m-1 11h-5v5h5v-5z\"/>
</svg>", "VictoireUIBundle:SVG:calendar.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UIBundle/Resources/views/SVG/calendar.html.twig");
    }
}
