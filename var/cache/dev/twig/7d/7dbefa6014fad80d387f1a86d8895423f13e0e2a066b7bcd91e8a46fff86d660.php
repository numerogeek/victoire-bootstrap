<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_01edc7301176434d27e3ff682f3632173065ef1a7f9bfd07dc9d206fc8b34b40 extends Twig_Template
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
        $__internal_7affaeedeb4d974f70e5b0d3b10782e95ec16f69a8ae9f9fef9515eb55d22999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7affaeedeb4d974f70e5b0d3b10782e95ec16f69a8ae9f9fef9515eb55d22999->enter($__internal_7affaeedeb4d974f70e5b0d3b10782e95ec16f69a8ae9f9fef9515eb55d22999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_743c6e6213e105db016550873e2046cf4d05b89b08184349db3e813caad8449a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743c6e6213e105db016550873e2046cf4d05b89b08184349db3e813caad8449a->enter($__internal_743c6e6213e105db016550873e2046cf4d05b89b08184349db3e813caad8449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_7affaeedeb4d974f70e5b0d3b10782e95ec16f69a8ae9f9fef9515eb55d22999->leave($__internal_7affaeedeb4d974f70e5b0d3b10782e95ec16f69a8ae9f9fef9515eb55d22999_prof);

        
        $__internal_743c6e6213e105db016550873e2046cf4d05b89b08184349db3e813caad8449a->leave($__internal_743c6e6213e105db016550873e2046cf4d05b89b08184349db3e813caad8449a_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/html/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
