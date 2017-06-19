<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7ba3c3cac797b22a435ba3bc0c4830d2e51707cb94b10a08c395408731459c94 extends Twig_Template
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
        $__internal_50d476522ed87c68ad5595a6ea6f6210e499491f6fe323baa20700898e213251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d476522ed87c68ad5595a6ea6f6210e499491f6fe323baa20700898e213251->enter($__internal_50d476522ed87c68ad5595a6ea6f6210e499491f6fe323baa20700898e213251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4a7d9592ffa79d4f559815f33a7ba38b7a40a7d5ad950b986cc4aa5f0a4d8a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7d9592ffa79d4f559815f33a7ba38b7a40a7d5ad950b986cc4aa5f0a4d8a6b->enter($__internal_4a7d9592ffa79d4f559815f33a7ba38b7a40a7d5ad950b986cc4aa5f0a4d8a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_50d476522ed87c68ad5595a6ea6f6210e499491f6fe323baa20700898e213251->leave($__internal_50d476522ed87c68ad5595a6ea6f6210e499491f6fe323baa20700898e213251_prof);

        
        $__internal_4a7d9592ffa79d4f559815f33a7ba38b7a40a7d5ad950b986cc4aa5f0a4d8a6b->leave($__internal_4a7d9592ffa79d4f559815f33a7ba38b7a40a7d5ad950b986cc4aa5f0a4d8a6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
