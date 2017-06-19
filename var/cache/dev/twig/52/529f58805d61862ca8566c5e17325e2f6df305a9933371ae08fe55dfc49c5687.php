<?php

/* BazingaJsTranslationBundle::config.js.twig */
class __TwigTemplate_c763fe9ce3c246e452c26851a7a312014b7f8f7bf5d4832b6fc0ab87781c47f9 extends Twig_Template
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
        $__internal_1eefca5489bc03e2249dd2a9c28934f4359344b59228494dcf6eca7474f9e377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eefca5489bc03e2249dd2a9c28934f4359344b59228494dcf6eca7474f9e377->enter($__internal_1eefca5489bc03e2249dd2a9c28934f4359344b59228494dcf6eca7474f9e377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::config.js.twig"));

        $__internal_4cabeeaf639bb1201fc46239d5df39c9f65d49ffa9315f941db2948dec6678d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cabeeaf639bb1201fc46239d5df39c9f65d49ffa9315f941db2948dec6678d3->enter($__internal_4cabeeaf639bb1201fc46239d5df39c9f65d49ffa9315f941db2948dec6678d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::config.js.twig"));

        // line 1
        echo "(function (t) {
t.fallback = '";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new Twig_Error_Runtime('Variable "fallback" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "';
t.defaultDomain = '";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new Twig_Error_Runtime('Variable "defaultDomain" does not exist.', 3, $this->getSourceContext()); })()), "js", null, true);
        echo "';
})(Translator);
";
        
        $__internal_1eefca5489bc03e2249dd2a9c28934f4359344b59228494dcf6eca7474f9e377->leave($__internal_1eefca5489bc03e2249dd2a9c28934f4359344b59228494dcf6eca7474f9e377_prof);

        
        $__internal_4cabeeaf639bb1201fc46239d5df39c9f65d49ffa9315f941db2948dec6678d3->leave($__internal_4cabeeaf639bb1201fc46239d5df39c9f65d49ffa9315f941db2948dec6678d3_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::config.js.twig";
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
        return new Twig_Source("(function (t) {
t.fallback = '{{ fallback }}';
t.defaultDomain = '{{ defaultDomain }}';
})(Translator);
", "BazingaJsTranslationBundle::config.js.twig", "/var/www/html/vendor/willdurand/js-translation-bundle/Resources/views/config.js.twig");
    }
}
