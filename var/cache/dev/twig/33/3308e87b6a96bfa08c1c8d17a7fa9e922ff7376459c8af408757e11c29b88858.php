<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0501e7698dd75831e54274be0360317f4db6c24b16baab680ec78b87ea8ef584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_14a217eeafce1454ac96e0200df878d5422231dccd31e7ff2addb289506ea71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a217eeafce1454ac96e0200df878d5422231dccd31e7ff2addb289506ea71d->enter($__internal_14a217eeafce1454ac96e0200df878d5422231dccd31e7ff2addb289506ea71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd9fca1abbcc03299450937dd8df83ac4d89699e2f6d234a435c6cef3a1573dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9fca1abbcc03299450937dd8df83ac4d89699e2f6d234a435c6cef3a1573dc->enter($__internal_cd9fca1abbcc03299450937dd8df83ac4d89699e2f6d234a435c6cef3a1573dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a217eeafce1454ac96e0200df878d5422231dccd31e7ff2addb289506ea71d->leave($__internal_14a217eeafce1454ac96e0200df878d5422231dccd31e7ff2addb289506ea71d_prof);

        
        $__internal_cd9fca1abbcc03299450937dd8df83ac4d89699e2f6d234a435c6cef3a1573dc->leave($__internal_cd9fca1abbcc03299450937dd8df83ac4d89699e2f6d234a435c6cef3a1573dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5c263f81bc1990e7d6659c32f2c2fac069f232b6784a4e886216855ad2c36b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c263f81bc1990e7d6659c32f2c2fac069f232b6784a4e886216855ad2c36b3->enter($__internal_b5c263f81bc1990e7d6659c32f2c2fac069f232b6784a4e886216855ad2c36b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04e65532fd1893eef34540cb7baedbac2f2af26c7f5f51c7cffa3f3fce6b2509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e65532fd1893eef34540cb7baedbac2f2af26c7f5f51c7cffa3f3fce6b2509->enter($__internal_04e65532fd1893eef34540cb7baedbac2f2af26c7f5f51c7cffa3f3fce6b2509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04e65532fd1893eef34540cb7baedbac2f2af26c7f5f51c7cffa3f3fce6b2509->leave($__internal_04e65532fd1893eef34540cb7baedbac2f2af26c7f5f51c7cffa3f3fce6b2509_prof);

        
        $__internal_b5c263f81bc1990e7d6659c32f2c2fac069f232b6784a4e886216855ad2c36b3->leave($__internal_b5c263f81bc1990e7d6659c32f2c2fac069f232b6784a4e886216855ad2c36b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_168993931ce5359d1545ae93b9da3f76e76714a2b4a2dd16e032bb54190e5c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168993931ce5359d1545ae93b9da3f76e76714a2b4a2dd16e032bb54190e5c84->enter($__internal_168993931ce5359d1545ae93b9da3f76e76714a2b4a2dd16e032bb54190e5c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31287e87e225fc1e758032f98ae3baa0342af8cd1e09b0455ae0203546a32839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31287e87e225fc1e758032f98ae3baa0342af8cd1e09b0455ae0203546a32839->enter($__internal_31287e87e225fc1e758032f98ae3baa0342af8cd1e09b0455ae0203546a32839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31287e87e225fc1e758032f98ae3baa0342af8cd1e09b0455ae0203546a32839->leave($__internal_31287e87e225fc1e758032f98ae3baa0342af8cd1e09b0455ae0203546a32839_prof);

        
        $__internal_168993931ce5359d1545ae93b9da3f76e76714a2b4a2dd16e032bb54190e5c84->leave($__internal_168993931ce5359d1545ae93b9da3f76e76714a2b4a2dd16e032bb54190e5c84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76d895d3bc34a22c8e6b1d20410a909eaaa3497b02ecc178ef047dc492f954c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d895d3bc34a22c8e6b1d20410a909eaaa3497b02ecc178ef047dc492f954c9->enter($__internal_76d895d3bc34a22c8e6b1d20410a909eaaa3497b02ecc178ef047dc492f954c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6ccf4790e203012a4e8596cd42f137e81f057e3c07c6800c144baccf1bb3b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ccf4790e203012a4e8596cd42f137e81f057e3c07c6800c144baccf1bb3b0c->enter($__internal_f6ccf4790e203012a4e8596cd42f137e81f057e3c07c6800c144baccf1bb3b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f6ccf4790e203012a4e8596cd42f137e81f057e3c07c6800c144baccf1bb3b0c->leave($__internal_f6ccf4790e203012a4e8596cd42f137e81f057e3c07c6800c144baccf1bb3b0c_prof);

        
        $__internal_76d895d3bc34a22c8e6b1d20410a909eaaa3497b02ecc178ef047dc492f954c9->leave($__internal_76d895d3bc34a22c8e6b1d20410a909eaaa3497b02ecc178ef047dc492f954c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
