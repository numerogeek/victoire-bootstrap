<?php

/* BazingaJsTranslationBundle::getTranslations.json.twig */
class __TwigTemplate_2123b099a30666a6e4b08fc3d7372500a95dc6bace7b1ca9ec08531525a376c5 extends Twig_Template
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
        $__internal_0eb887eae527883d721cdbc2b156931cd433e30a6b4925b7058eb72099ed86b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb887eae527883d721cdbc2b156931cd433e30a6b4925b7058eb72099ed86b9->enter($__internal_0eb887eae527883d721cdbc2b156931cd433e30a6b4925b7058eb72099ed86b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::getTranslations.json.twig"));

        $__internal_a92e51ed70ecb73dee7ddd6f20ce51a4619504d13156f77d9acfe0f0c63c6724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92e51ed70ecb73dee7ddd6f20ce51a4619504d13156f77d9acfe0f0c63c6724->enter($__internal_a92e51ed70ecb73dee7ddd6f20ce51a4619504d13156f77d9acfe0f0c63c6724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::getTranslations.json.twig"));

        // line 1
        echo "{
";
        // line 2
        if ((isset($context["include_config"]) || array_key_exists("include_config", $context) ? $context["include_config"] : (function () { throw new Twig_Error_Runtime('Variable "include_config" does not exist.', 2, $this->getSourceContext()); })())) {
            // line 3
            echo "    \"fallback\": \"";
            echo twig_escape_filter($this->env, (isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new Twig_Error_Runtime('Variable "fallback" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "\",
    \"defaultDomain\": \"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new Twig_Error_Runtime('Variable "defaultDomain" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            echo "\",
";
        }
        // line 6
        echo "    \"translations\": ";
        echo json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 6, $this->getSourceContext()); })()));
        echo "
}
";
        
        $__internal_0eb887eae527883d721cdbc2b156931cd433e30a6b4925b7058eb72099ed86b9->leave($__internal_0eb887eae527883d721cdbc2b156931cd433e30a6b4925b7058eb72099ed86b9_prof);

        
        $__internal_a92e51ed70ecb73dee7ddd6f20ce51a4619504d13156f77d9acfe0f0c63c6724->leave($__internal_a92e51ed70ecb73dee7ddd6f20ce51a4619504d13156f77d9acfe0f0c63c6724_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::getTranslations.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
{% if include_config %}
    \"fallback\": \"{{ fallback }}\",
    \"defaultDomain\": \"{{ defaultDomain }}\",
{% endif %}
    \"translations\": {{ translations|json_encode|raw }}
}
", "BazingaJsTranslationBundle::getTranslations.json.twig", "/var/www/html/vendor/willdurand/js-translation-bundle/Resources/views/getTranslations.json.twig");
    }
}
