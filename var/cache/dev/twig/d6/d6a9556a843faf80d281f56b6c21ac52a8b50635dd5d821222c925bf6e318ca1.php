<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_95734c94726c17b3a0218f651541fe1f5849293e0eaea2eb42d5606c18c3cc1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95258854f126489126a16c673c3153ba5be715975e5a6bcf97303b81b3f56062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95258854f126489126a16c673c3153ba5be715975e5a6bcf97303b81b3f56062->enter($__internal_95258854f126489126a16c673c3153ba5be715975e5a6bcf97303b81b3f56062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8846aa61a5371981c91724dddc2f3a7e4bee8dce795197d2af4282fe25e89f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8846aa61a5371981c91724dddc2f3a7e4bee8dce795197d2af4282fe25e89f23->enter($__internal_8846aa61a5371981c91724dddc2f3a7e4bee8dce795197d2af4282fe25e89f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95258854f126489126a16c673c3153ba5be715975e5a6bcf97303b81b3f56062->leave($__internal_95258854f126489126a16c673c3153ba5be715975e5a6bcf97303b81b3f56062_prof);

        
        $__internal_8846aa61a5371981c91724dddc2f3a7e4bee8dce795197d2af4282fe25e89f23->leave($__internal_8846aa61a5371981c91724dddc2f3a7e4bee8dce795197d2af4282fe25e89f23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0caab567a0b43b1c089748606f2210e3a8a462a3b27e9755ddb47150308994cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0caab567a0b43b1c089748606f2210e3a8a462a3b27e9755ddb47150308994cd->enter($__internal_0caab567a0b43b1c089748606f2210e3a8a462a3b27e9755ddb47150308994cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9022a878de95d1c21441f82c80515e32057f2233684391bc73871681c4344daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9022a878de95d1c21441f82c80515e32057f2233684391bc73871681c4344daf->enter($__internal_9022a878de95d1c21441f82c80515e32057f2233684391bc73871681c4344daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9022a878de95d1c21441f82c80515e32057f2233684391bc73871681c4344daf->leave($__internal_9022a878de95d1c21441f82c80515e32057f2233684391bc73871681c4344daf_prof);

        
        $__internal_0caab567a0b43b1c089748606f2210e3a8a462a3b27e9755ddb47150308994cd->leave($__internal_0caab567a0b43b1c089748606f2210e3a8a462a3b27e9755ddb47150308994cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c184b6a4db77d18986da46c48855f06b3af8a701a9cf0c071da900971815abfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c184b6a4db77d18986da46c48855f06b3af8a701a9cf0c071da900971815abfb->enter($__internal_c184b6a4db77d18986da46c48855f06b3af8a701a9cf0c071da900971815abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08bda172a146451561f3c6eaa24a2b8451bdf8b9f752c7fcc483f02f53ea4fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bda172a146451561f3c6eaa24a2b8451bdf8b9f752c7fcc483f02f53ea4fac->enter($__internal_08bda172a146451561f3c6eaa24a2b8451bdf8b9f752c7fcc483f02f53ea4fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_08bda172a146451561f3c6eaa24a2b8451bdf8b9f752c7fcc483f02f53ea4fac->leave($__internal_08bda172a146451561f3c6eaa24a2b8451bdf8b9f752c7fcc483f02f53ea4fac_prof);

        
        $__internal_c184b6a4db77d18986da46c48855f06b3af8a701a9cf0c071da900971815abfb->leave($__internal_c184b6a4db77d18986da46c48855f06b3af8a701a9cf0c071da900971815abfb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1388d7b10200f4a49178c7039b2fa865edbe7d5fe32e325c3836eb448924089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1388d7b10200f4a49178c7039b2fa865edbe7d5fe32e325c3836eb448924089->enter($__internal_e1388d7b10200f4a49178c7039b2fa865edbe7d5fe32e325c3836eb448924089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e071239314ea5209f62a5e10d37dbe44f141dc7b2c6f67e2c99d93ee4e122d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e071239314ea5209f62a5e10d37dbe44f141dc7b2c6f67e2c99d93ee4e122d2e->enter($__internal_e071239314ea5209f62a5e10d37dbe44f141dc7b2c6f67e2c99d93ee4e122d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e071239314ea5209f62a5e10d37dbe44f141dc7b2c6f67e2c99d93ee4e122d2e->leave($__internal_e071239314ea5209f62a5e10d37dbe44f141dc7b2c6f67e2c99d93ee4e122d2e_prof);

        
        $__internal_e1388d7b10200f4a49178c7039b2fa865edbe7d5fe32e325c3836eb448924089->leave($__internal_e1388d7b10200f4a49178c7039b2fa865edbe7d5fe32e325c3836eb448924089_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
