<?php

/* BazingaJsTranslationBundle::config.json.twig */
class __TwigTemplate_b3e6181ff1ece6e46b9e12866396f03d4a6384ab09a0695b8a6b8ebb57f6f36e extends Twig_Template
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
        $__internal_2866765a08cc424441fbcd475c0a88e9739f17ed95d1a65bea36f8487f722b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2866765a08cc424441fbcd475c0a88e9739f17ed95d1a65bea36f8487f722b77->enter($__internal_2866765a08cc424441fbcd475c0a88e9739f17ed95d1a65bea36f8487f722b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::config.json.twig"));

        $__internal_5fb3c11788bd485e82f313fdd02f51fc2b39d67611e17e012d442a703d15d87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb3c11788bd485e82f313fdd02f51fc2b39d67611e17e012d442a703d15d87d->enter($__internal_5fb3c11788bd485e82f313fdd02f51fc2b39d67611e17e012d442a703d15d87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::config.json.twig"));

        // line 1
        echo "{
    \"fallback\": \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new Twig_Error_Runtime('Variable "fallback" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"defaultDomain\": \"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new Twig_Error_Runtime('Variable "defaultDomain" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
}
";
        
        $__internal_2866765a08cc424441fbcd475c0a88e9739f17ed95d1a65bea36f8487f722b77->leave($__internal_2866765a08cc424441fbcd475c0a88e9739f17ed95d1a65bea36f8487f722b77_prof);

        
        $__internal_5fb3c11788bd485e82f313fdd02f51fc2b39d67611e17e012d442a703d15d87d->leave($__internal_5fb3c11788bd485e82f313fdd02f51fc2b39d67611e17e012d442a703d15d87d_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::config.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"fallback\": \"{{ fallback }}\",
    \"defaultDomain\": \"{{ defaultDomain }}\"
}
", "BazingaJsTranslationBundle::config.json.twig", "/var/www/html/vendor/willdurand/js-translation-bundle/Resources/views/config.json.twig");
    }
}
