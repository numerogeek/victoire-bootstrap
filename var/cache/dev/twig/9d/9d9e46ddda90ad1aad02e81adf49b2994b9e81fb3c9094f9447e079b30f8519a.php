<?php

/* VictoireCoreBundle:Profiler:widget_cache.html.twig */
class __TwigTemplate_2537e9aa30796ec49099d1f50ac67c6f785342e9be4d1b31f320322f941ef0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "VictoireCoreBundle:Profiler:widget_cache.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_987df5df944d7d64d71230159d64aa22993df96e663f68c62392681029222432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987df5df944d7d64d71230159d64aa22993df96e663f68c62392681029222432->enter($__internal_987df5df944d7d64d71230159d64aa22993df96e663f68c62392681029222432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Profiler:widget_cache.html.twig"));

        $__internal_ba96d71edacb3329aab5493477f722ae696e85ff5f78861f392d1205c6946b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba96d71edacb3329aab5493477f722ae696e85ff5f78861f392d1205c6946b9d->enter($__internal_ba96d71edacb3329aab5493477f722ae696e85ff5f78861f392d1205c6946b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Profiler:widget_cache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987df5df944d7d64d71230159d64aa22993df96e663f68c62392681029222432->leave($__internal_987df5df944d7d64d71230159d64aa22993df96e663f68c62392681029222432_prof);

        
        $__internal_ba96d71edacb3329aab5493477f722ae696e85ff5f78861f392d1205c6946b9d->leave($__internal_ba96d71edacb3329aab5493477f722ae696e85ff5f78861f392d1205c6946b9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ba10f2c5aaa83deabee379898b139fe7a89c9fb7604449e08624da0385e4763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba10f2c5aaa83deabee379898b139fe7a89c9fb7604449e08624da0385e4763->enter($__internal_4ba10f2c5aaa83deabee379898b139fe7a89c9fb7604449e08624da0385e4763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_665555e54daa93fc59e7b4602d43ec365ed5c736fcf3285373a3efc60faeccfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665555e54daa93fc59e7b4602d43ec365ed5c736fcf3285373a3efc60faeccfc->enter($__internal_665555e54daa93fc59e7b4602d43ec365ed5c736fcf3285373a3efc60faeccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@VictoireCore/Profiler/assets/victoire_icon_24.svg");
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cached widgets</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "cachedWidgetcount", array()), "html", null, true);
        echo "</span>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_core_widget_cache_clear");
        echo "\" style=\"text-decoration: none;\">
                ";
        // line 13
        echo twig_include($this->env, $context, "@VictoireCore/Profiler/assets/reload_icon_24.svg");
        echo "
            </a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    <style>
        .sf-toolbar-block.sf-toolbar-status-victoire {
            background-color: #04BF96;
        }
    </style>
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false, "status" => "victoire"));
        echo "
";
        
        $__internal_665555e54daa93fc59e7b4602d43ec365ed5c736fcf3285373a3efc60faeccfc->leave($__internal_665555e54daa93fc59e7b4602d43ec365ed5c736fcf3285373a3efc60faeccfc_prof);

        
        $__internal_4ba10f2c5aaa83deabee379898b139fe7a89c9fb7604449e08624da0385e4763->leave($__internal_4ba10f2c5aaa83deabee379898b139fe7a89c9fb7604449e08624da0385e4763_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle:Profiler:widget_cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  82 => 17,  75 => 13,  71 => 12,  67 => 11,  63 => 9,  61 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@VictoireCore/Profiler/assets/victoire_icon_24.svg') }}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cached widgets</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cachedWidgetcount }}</span>
            <a href=\"{{ path('victoire_core_widget_cache_clear') }}\" style=\"text-decoration: none;\">
                {{  include('@VictoireCore/Profiler/assets/reload_icon_24.svg') }}
            </a>
        </div>
    {% endset %}

    <style>
        .sf-toolbar-block.sf-toolbar-status-victoire {
            background-color: #04BF96;
        }
    </style>
    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false, status: 'victoire' }) }}
{% endblock %}
", "VictoireCoreBundle:Profiler:widget_cache.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/Profiler/widget_cache.html.twig");
    }
}
