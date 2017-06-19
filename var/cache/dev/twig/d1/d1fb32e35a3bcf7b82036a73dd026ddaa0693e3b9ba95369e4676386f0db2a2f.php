<?php

/* BazingaJsTranslationBundle::getTranslations.js.twig */
class __TwigTemplate_130fd8566e7e7c93c189e55dd2ef1dd7983e703a366128f916942465ce20f476 extends Twig_Template
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
        $__internal_166bec18c6c0408e069da94ea51ba70223cba84137a7108d011b2a7f89e3d5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166bec18c6c0408e069da94ea51ba70223cba84137a7108d011b2a7f89e3d5d3->enter($__internal_166bec18c6c0408e069da94ea51ba70223cba84137a7108d011b2a7f89e3d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::getTranslations.js.twig"));

        $__internal_0098589195a8789f8786e52bf58f2b4423bc1799e2b70e5d7e5c3601015d6213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0098589195a8789f8786e52bf58f2b4423bc1799e2b70e5d7e5c3601015d6213->enter($__internal_0098589195a8789f8786e52bf58f2b4423bc1799e2b70e5d7e5c3601015d6213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::getTranslations.js.twig"));

        // line 1
        echo "(function (t) {
";
        // line 2
        if ((isset($context["include_config"]) || array_key_exists("include_config", $context) ? $context["include_config"] : (function () { throw new Twig_Error_Runtime('Variable "include_config" does not exist.', 2, $this->getSourceContext()); })())) {
            // line 3
            echo "t.fallback = '";
            echo twig_escape_filter($this->env, (isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new Twig_Error_Runtime('Variable "fallback" does not exist.', 3, $this->getSourceContext()); })()), "js", null, true);
            echo "';
t.defaultDomain = '";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new Twig_Error_Runtime('Variable "defaultDomain" does not exist.', 4, $this->getSourceContext()); })()), "js", null, true);
            echo "';
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["locale"] => $context["domains"]) {
            // line 7
            echo "// ";
            echo twig_escape_filter($this->env, $context["locale"], "js", null, true);
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["domains"]);
            foreach ($context['_seq'] as $context["domain"] => $context["messages"]) {
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                    // line 10
                    echo "t.add(";
                    echo json_encode($context["key"]);
                    echo ", ";
                    echo json_encode($context["message"]);
                    echo ", \"";
                    echo twig_escape_filter($this->env, $context["domain"], "js", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, $context["locale"], "js", null, true);
                    echo "\");
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['domain'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['domains'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "})(Translator);
";
        
        $__internal_166bec18c6c0408e069da94ea51ba70223cba84137a7108d011b2a7f89e3d5d3->leave($__internal_166bec18c6c0408e069da94ea51ba70223cba84137a7108d011b2a7f89e3d5d3_prof);

        
        $__internal_0098589195a8789f8786e52bf58f2b4423bc1799e2b70e5d7e5c3601015d6213->leave($__internal_0098589195a8789f8786e52bf58f2b4423bc1799e2b70e5d7e5c3601015d6213_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::getTranslations.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  57 => 10,  53 => 9,  49 => 8,  44 => 7,  40 => 6,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function (t) {
{% if include_config %}
t.fallback = '{{ fallback }}';
t.defaultDomain = '{{ defaultDomain }}';
{% endif %}
{% for locale, domains in translations %}
// {{ locale }}
{% for domain, messages in domains %}
{% for key, message in messages %}
t.add({{ key|json_encode|raw }}, {{ message|json_encode|raw }}, \"{{ domain }}\", \"{{ locale }}\");
{% endfor %}
{% endfor %}
{% endfor %}
})(Translator);
", "BazingaJsTranslationBundle::getTranslations.js.twig", "/var/www/html/vendor/willdurand/js-translation-bundle/Resources/views/getTranslations.js.twig");
    }
}
