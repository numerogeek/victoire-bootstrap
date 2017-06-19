<?php

/* VictoireUIBundle:Bricks:alert.html.twig */
class __TwigTemplate_90bd3c664612f1ebec4eca4b869f0d4ff6f9f871cc089170da8ad2a00b532928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2e142c3c69dcd842d6aedf6a3e851306c8c201f5f70328e8410ec945209ff4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e142c3c69dcd842d6aedf6a3e851306c8c201f5f70328e8410ec945209ff4b->enter($__internal_e2e142c3c69dcd842d6aedf6a3e851306c8c201f5f70328e8410ec945209ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:Bricks:alert.html.twig"));

        $__internal_4ffca5243514fdecf3159df88a9e116528e5365c387463ba32aeb34c209dee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffca5243514fdecf3159df88a9e116528e5365c387463ba32aeb34c209dee6e->enter($__internal_4ffca5243514fdecf3159df88a9e116528e5365c387463ba32aeb34c209dee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireUIBundle:Bricks:alert.html.twig"));

        // line 1
        echo "<div class=\"v-alert v-alert--";
        echo twig_escape_filter($this->env, ((array_key_exists("theme", $context)) ? (_twig_default_filter((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 1, $this->getSourceContext()); })()), "info")) : ("info")), "html", null, true);
        echo "\"";
        if (((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->getSourceContext()); })()), false)) : (false))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        echo ">
    <div class=\"v-alert__body\">
        ";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 4
        echo "    </div>
</div>";
        
        $__internal_e2e142c3c69dcd842d6aedf6a3e851306c8c201f5f70328e8410ec945209ff4b->leave($__internal_e2e142c3c69dcd842d6aedf6a3e851306c8c201f5f70328e8410ec945209ff4b_prof);

        
        $__internal_4ffca5243514fdecf3159df88a9e116528e5365c387463ba32aeb34c209dee6e->leave($__internal_4ffca5243514fdecf3159df88a9e116528e5365c387463ba32aeb34c209dee6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bed13b15c504a3f821b3bb7f95d2f14c646f1417f6fe20209674c43e8e4c84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bed13b15c504a3f821b3bb7f95d2f14c646f1417f6fe20209674c43e8e4c84b->enter($__internal_4bed13b15c504a3f821b3bb7f95d2f14c646f1417f6fe20209674c43e8e4c84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73aa83f6a83b471df896ebf34d043f5554b1d4305889d28912295d1f28aabc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aa83f6a83b471df896ebf34d043f5554b1d4305889d28912295d1f28aabc7e->enter($__internal_73aa83f6a83b471df896ebf34d043f5554b1d4305889d28912295d1f28aabc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73aa83f6a83b471df896ebf34d043f5554b1d4305889d28912295d1f28aabc7e->leave($__internal_73aa83f6a83b471df896ebf34d043f5554b1d4305889d28912295d1f28aabc7e_prof);

        
        $__internal_4bed13b15c504a3f821b3bb7f95d2f14c646f1417f6fe20209674c43e8e4c84b->leave($__internal_4bed13b15c504a3f821b3bb7f95d2f14c646f1417f6fe20209674c43e8e4c84b_prof);

    }

    public function getTemplateName()
    {
        return "VictoireUIBundle:Bricks:alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  40 => 4,  38 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"v-alert v-alert--{{ theme|default('info') }}\"{% if id|default(false) %} id=\"{{ id }}\"{% endif %}>
    <div class=\"v-alert__body\">
        {% block body %}{% endblock body %}
    </div>
</div>", "VictoireUIBundle:Bricks:alert.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UIBundle/Resources/views/Bricks/alert.html.twig");
    }
}
