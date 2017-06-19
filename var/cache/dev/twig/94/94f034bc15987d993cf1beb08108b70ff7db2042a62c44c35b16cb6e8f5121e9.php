<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_49b5bee0055c151df622fa8e5b99945da91099b919265f246c9533a7de8055df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aafc673477854a7476a20ab4c8772103c142fef144bbfef57a3b27276e6d55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aafc673477854a7476a20ab4c8772103c142fef144bbfef57a3b27276e6d55c->enter($__internal_3aafc673477854a7476a20ab4c8772103c142fef144bbfef57a3b27276e6d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c4eee66a36d87d4c1ab1a77e8f2956d72aaa62758a05169948116ab6d6941b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eee66a36d87d4c1ab1a77e8f2956d72aaa62758a05169948116ab6d6941b50->enter($__internal_c4eee66a36d87d4c1ab1a77e8f2956d72aaa62758a05169948116ab6d6941b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aafc673477854a7476a20ab4c8772103c142fef144bbfef57a3b27276e6d55c->leave($__internal_3aafc673477854a7476a20ab4c8772103c142fef144bbfef57a3b27276e6d55c_prof);

        
        $__internal_c4eee66a36d87d4c1ab1a77e8f2956d72aaa62758a05169948116ab6d6941b50->leave($__internal_c4eee66a36d87d4c1ab1a77e8f2956d72aaa62758a05169948116ab6d6941b50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf8007b03c8b71d28003a71914b5ad554103ebb4b998b34fdfdef20e2e2d8480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8007b03c8b71d28003a71914b5ad554103ebb4b998b34fdfdef20e2e2d8480->enter($__internal_cf8007b03c8b71d28003a71914b5ad554103ebb4b998b34fdfdef20e2e2d8480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_732c56be53ea3e6cbf2a5d519e28c0769c44a9ccb0c4cd8ee5544d4bcd7d092c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732c56be53ea3e6cbf2a5d519e28c0769c44a9ccb0c4cd8ee5544d4bcd7d092c->enter($__internal_732c56be53ea3e6cbf2a5d519e28c0769c44a9ccb0c4cd8ee5544d4bcd7d092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_732c56be53ea3e6cbf2a5d519e28c0769c44a9ccb0c4cd8ee5544d4bcd7d092c->leave($__internal_732c56be53ea3e6cbf2a5d519e28c0769c44a9ccb0c4cd8ee5544d4bcd7d092c_prof);

        
        $__internal_cf8007b03c8b71d28003a71914b5ad554103ebb4b998b34fdfdef20e2e2d8480->leave($__internal_cf8007b03c8b71d28003a71914b5ad554103ebb4b998b34fdfdef20e2e2d8480_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
