<?php

/* TroopersAlertifyBundle::codrops-notification.html.twig */
class __TwigTemplate_356b4e67d9d655c7e4fc4b0c34775968ded5f52ba5c4291905145d08604691d1 extends Twig_Template
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
        $__internal_665a10a7e84d9858518ed5ea2bbf47cc65a0b5e01abb8afb22b10b8ec74d6775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665a10a7e84d9858518ed5ea2bbf47cc65a0b5e01abb8afb22b10b8ec74d6775->enter($__internal_665a10a7e84d9858518ed5ea2bbf47cc65a0b5e01abb8afb22b10b8ec74d6775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TroopersAlertifyBundle::codrops-notification.html.twig"));

        $__internal_5f2d1672760c2612a3d3f0d8dfcfd15e3258d9041dd200eea04775c277e49b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2d1672760c2612a3d3f0d8dfcfd15e3258d9041dd200eea04775c277e49b80->enter($__internal_5f2d1672760c2612a3d3f0d8dfcfd15e3258d9041dd200eea04775c277e49b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TroopersAlertifyBundle::codrops-notification.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    (function() {
        var notification = new NotificationFx({
            message : '<div>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new Twig_Error_Runtime('Variable "body" does not exist.', 4, $this->getSourceContext()); })()), array(), ((array_key_exists("translationDomain", $context)) ? (_twig_default_filter((isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new Twig_Error_Runtime('Variable "translationDomain" does not exist.', 4, $this->getSourceContext()); })()), "messages")) : ("messages"))), "html", null, true);
        echo "</div>',
            layout  : '";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 5, $this->getSourceContext()); })()), "growl")) : ("growl")), "html", null, true);
        echo "',
            effect  : '";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("effect", $context)) ? (_twig_default_filter((isset($context["effect"]) || array_key_exists("effect", $context) ? $context["effect"] : (function () { throw new Twig_Error_Runtime('Variable "effect" does not exist.', 6, $this->getSourceContext()); })()), "jelly")) : ("jelly")), "html", null, true);
        echo "',
            ttl     : ";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("timeout", $context)) ? (_twig_default_filter((isset($context["timeout"]) || array_key_exists("timeout", $context) ? $context["timeout"] : (function () { throw new Twig_Error_Runtime('Variable "timeout" does not exist.', 7, $this->getSourceContext()); })()), 10000)) : (10000)), "html", null, true);
        echo ",
            type    : '";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 8, $this->getSourceContext()); })()), "success")) : ("success")), "html", null, true);
        echo "'
        });

        // show the notification
        return notification.show();

        }).call(this);
</script>
";
        
        $__internal_665a10a7e84d9858518ed5ea2bbf47cc65a0b5e01abb8afb22b10b8ec74d6775->leave($__internal_665a10a7e84d9858518ed5ea2bbf47cc65a0b5e01abb8afb22b10b8ec74d6775_prof);

        
        $__internal_5f2d1672760c2612a3d3f0d8dfcfd15e3258d9041dd200eea04775c277e49b80->leave($__internal_5f2d1672760c2612a3d3f0d8dfcfd15e3258d9041dd200eea04775c277e49b80_prof);

    }

    public function getTemplateName()
    {
        return "TroopersAlertifyBundle::codrops-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    (function() {
        var notification = new NotificationFx({
            message : '<div>{{ body|raw|trans({}, translationDomain|default('messages')) }}</div>',
            layout  : '{{ layout|default('growl') }}',
            effect  : '{{ effect|default('jelly') }}',
            ttl     : {{ timeout|default(10000) }},
            type    : '{{ type|default('success') }}'
        });

        // show the notification
        return notification.show();

        }).call(this);
</script>
", "TroopersAlertifyBundle::codrops-notification.html.twig", "/var/www/html/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/views/codrops-notification.html.twig");
    }
}
