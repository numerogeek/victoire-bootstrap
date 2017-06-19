<?php

/* VictoireUIBundle:Bricks:mode-switcher.html.twig */
class __TwigTemplate_3bf22f816899359f22ea8a54b741c34f5dde8c3a7ecf09d856a50b79a0397316 extends Twig_Template
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
        $__internal_4c3265bdfaa451e2266602749e872ef6cae4fac6831fa47f0774d2dcbf0d8c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3265bdfaa451e2266602749e872ef6cae4fac6831fa47f0774d2dcbf0d8c73->enter($__internal_4c3265bdfaa451e2266602749e872ef6cae4fac6831fa47f0774d2dcbf0d8c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:Bricks:mode-switcher.html.twig"));

        $__internal_e4b2cd4e7af81a2d1de4454dba1df3b39c09169174c373e5dcd55010fe190efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b2cd4e7af81a2d1de4454dba1df3b39c09169174c373e5dcd55010fe190efb->enter($__internal_e4b2cd4e7af81a2d1de4454dba1df3b39c09169174c373e5dcd55010fe190efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:Bricks:mode-switcher.html.twig"));

        // line 1
        $context["name"] = ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 1, $this->getSourceContext()); })()), "mode-switcher")) : ("mode-switcher"));
        // line 2
        $context["startMode"] = ((array_key_exists("startMode", $context)) ? (_twig_default_filter((isset($context["startMode"]) || array_key_exists("startMode", $context) ? $context["startMode"] : (function () { throw new Twig_Error_Runtime('Variable "startMode" does not exist.', 2, $this->getSourceContext()); })()), "preview")) : ("preview"));
        // line 3
        $context["modes"] = array(0 => array("name" => "layout", "value" => "admin-layout", "svg" => "create"), 1 => array("name" => "readonly", "value" => "admin-readonly", "svg" => "preview"), 2 => array("name" => "edit", "value" => "admin-edit", "svg" => "edit"), 3 => array("name" => "style", "value" => "admin-style", "svg" => "style"));
        // line 20
        echo "
<div class=\"v-mode-switcher\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modes"]) || array_key_exists("modes", $context) ? $context["modes"] : (function () { throw new Twig_Error_Runtime('Variable "modes" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 23
            echo "        <input type=\"radio\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "value", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "name", array()), "html", null, true);
            echo "\"";
            if (((isset($context["startMode"]) || array_key_exists("startMode", $context) ? $context["startMode"] : (function () { throw new Twig_Error_Runtime('Variable "startMode" does not exist.', 23, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "value", array()))) {
                echo " checked=\"checked\"";
            }
            echo ">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modes"]) || array_key_exists("modes", $context) ? $context["modes"] : (function () { throw new Twig_Error_Runtime('Variable "modes" does not exist.', 26, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 27
            echo "        <label class=\"v-mode-switcher__item\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "name", array()), "html", null, true);
            echo "\" data-flag=\"v-drop\" data-position=\"topout center\" data-droptarget=\"#";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "name", array()), "html", null, true);
            echo "-popover\" data-position=\"middle rightout\" data-behavior=\"hover\">
            ";
            // line 28
            $this->loadTemplate((("VictoireUIBundle:SVG:" . twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "svg", array())) . ".html.twig"), "VictoireUIBundle:Bricks:mode-switcher.html.twig", 28)->display($context);
            // line 29
            echo "        </label>

        <div class=\"v-drop v-drop--tooltip\" id=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "name", array()), "html", null, true);
            echo "-popover\">
            <div class=\"v-drop__content\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("navbar.mode." . twig_get_attribute($this->env, $this->getSourceContext(), $context["mode"], "name", array())), array(), "victoire"), "html", null, true);
            echo "
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    <span class=\"v-mode-switcher__backdrop\"></span>
</div>
";
        
        $__internal_4c3265bdfaa451e2266602749e872ef6cae4fac6831fa47f0774d2dcbf0d8c73->leave($__internal_4c3265bdfaa451e2266602749e872ef6cae4fac6831fa47f0774d2dcbf0d8c73_prof);

        
        $__internal_e4b2cd4e7af81a2d1de4454dba1df3b39c09169174c373e5dcd55010fe190efb->leave($__internal_e4b2cd4e7af81a2d1de4454dba1df3b39c09169174c373e5dcd55010fe190efb_prof);

    }

    public function getTemplateName()
    {
        return "VictoireUIBundle:Bricks:mode-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  102 => 33,  95 => 31,  91 => 29,  89 => 28,  78 => 27,  61 => 26,  58 => 25,  39 => 23,  35 => 22,  31 => 20,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set name = name|default('mode-switcher') %}
{% set startMode = startMode|default('preview') %}
{% set modes = [{
    'name': 'layout',
    'value': 'admin-layout',
    'svg': 'create',
}, {
    'name': 'readonly',
    'value': 'admin-readonly',
    'svg': 'preview',
}, {
    'name': 'edit',
    'value': 'admin-edit',
    'svg': 'edit',
}, {
    'name': 'style',
    'value': 'admin-style',
    'svg': 'style',
}] %}

<div class=\"v-mode-switcher\">
    {% for mode in modes %}
        <input type=\"radio\" name=\"{{ name }}\" value=\"{{ mode.value }}\" id=\"{{ name }}--{{ mode.name }}\"{% if startMode == mode.value %} checked=\"checked\"{% endif %}>
    {% endfor %}

    {% for mode in modes %}
        <label class=\"v-mode-switcher__item\" for=\"{{ name }}--{{ mode.name }}\" data-flag=\"v-drop\" data-position=\"topout center\" data-droptarget=\"#{{ name }}--{{ mode.name }}-popover\" data-position=\"middle rightout\" data-behavior=\"hover\">
            {% include 'VictoireUIBundle:SVG:' ~ mode.svg ~ '.html.twig' %}
        </label>

        <div class=\"v-drop v-drop--tooltip\" id=\"{{ name }}--{{ mode.name }}-popover\">
            <div class=\"v-drop__content\">
                {{ ('navbar.mode.' ~ mode.name)|trans({}, 'victoire') }}
            </div>
        </div>
    {% endfor %}

    <span class=\"v-mode-switcher__backdrop\"></span>
</div>
", "VictoireUIBundle:Bricks:mode-switcher.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UIBundle/Resources/views/Bricks/mode-switcher.html.twig");
    }
}
