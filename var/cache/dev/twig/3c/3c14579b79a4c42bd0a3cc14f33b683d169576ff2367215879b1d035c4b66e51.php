<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_cd26851f52d6f3b21e11d8fbaa1e2fa3c5fecde4fc9f5f0c58d861fc2bbadef1 extends Twig_Template
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
        $__internal_eaf2185ab871736a4093520b838436abe3a7ec71895ee93fb996ae381ea12dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf2185ab871736a4093520b838436abe3a7ec71895ee93fb996ae381ea12dae->enter($__internal_eaf2185ab871736a4093520b838436abe3a7ec71895ee93fb996ae381ea12dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ea2788e5527ce0f492c7696e1dbe2dca55350167579cf699c8b41ffc9574d15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2788e5527ce0f492c7696e1dbe2dca55350167579cf699c8b41ffc9574d15a->enter($__internal_ea2788e5527ce0f492c7696e1dbe2dca55350167579cf699c8b41ffc9574d15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_eaf2185ab871736a4093520b838436abe3a7ec71895ee93fb996ae381ea12dae->leave($__internal_eaf2185ab871736a4093520b838436abe3a7ec71895ee93fb996ae381ea12dae_prof);

        
        $__internal_ea2788e5527ce0f492c7696e1dbe2dca55350167579cf699c8b41ffc9574d15a->leave($__internal_ea2788e5527ce0f492c7696e1dbe2dca55350167579cf699c8b41ffc9574d15a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
