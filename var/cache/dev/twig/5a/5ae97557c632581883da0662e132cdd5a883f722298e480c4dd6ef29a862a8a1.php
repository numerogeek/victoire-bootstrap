<?php

/* VictoireUIBundle:SVG:close.html.twig */
class __TwigTemplate_fd847f397df88aa99b2a5f2cf48e811840adb7a21d4ae1c7d3c237e321a0c7f0 extends Twig_Template
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
        $__internal_ce57be42ef6c3f76baf73e001a5151a329b0f0fe2476afc3fa4e7b6ce63da531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce57be42ef6c3f76baf73e001a5151a329b0f0fe2476afc3fa4e7b6ce63da531->enter($__internal_ce57be42ef6c3f76baf73e001a5151a329b0f0fe2476afc3fa4e7b6ce63da531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:SVG:close.html.twig"));

        $__internal_02987b79aa203f8e4b8c204b1f18fbd779c21ad7dbc5376167f476bb6e1a5fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02987b79aa203f8e4b8c204b1f18fbd779c21ad7dbc5376167f476bb6e1a5fd2->enter($__internal_02987b79aa203f8e4b8c204b1f18fbd779c21ad7dbc5376167f476bb6e1a5fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:SVG:close.html.twig"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 1, $this->getSourceContext()); })()), 24)) : (24)), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 1, $this->getSourceContext()); })()), 24)) : (24)), "html", null, true);
        echo "\" viewBox=\"0 0 24 24\">
    <path fill=\"currentColor\" d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z\"/>
</svg>";
        
        $__internal_ce57be42ef6c3f76baf73e001a5151a329b0f0fe2476afc3fa4e7b6ce63da531->leave($__internal_ce57be42ef6c3f76baf73e001a5151a329b0f0fe2476afc3fa4e7b6ce63da531_prof);

        
        $__internal_02987b79aa203f8e4b8c204b1f18fbd779c21ad7dbc5376167f476bb6e1a5fd2->leave($__internal_02987b79aa203f8e4b8c204b1f18fbd779c21ad7dbc5376167f476bb6e1a5fd2_prof);

    }

    public function getTemplateName()
    {
        return "VictoireUIBundle:SVG:close.html.twig";
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
    <path fill=\"currentColor\" d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z\"/>
</svg>", "VictoireUIBundle:SVG:close.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UIBundle/Resources/views/SVG/close.html.twig");
    }
}
