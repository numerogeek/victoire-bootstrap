<?php

/* VictoireBlogBundle:Blog:Tabs/_settings.html.twig */
class __TwigTemplate_5f522057c9bc05b761c54f61391c6e850632e512334db1179523d27321600140 extends Twig_Template
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
        $__internal_5ced22d186e2520278f087e72c84e339ce8b19510e4ad64915f027368fd461dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ced22d186e2520278f087e72c84e339ce8b19510e4ad64915f027368fd461dc->enter($__internal_5ced22d186e2520278f087e72c84e339ce8b19510e4ad64915f027368fd461dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_settings.html.twig"));

        $__internal_06b0675db9c8af9b309f0bc157ffe169151f4b275dafd0a7bb9db1d3d8ecdbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b0675db9c8af9b309f0bc157ffe169151f4b275dafd0a7bb9db1d3d8ecdbbf->enter($__internal_06b0675db9c8af9b309f0bc157ffe169151f4b275dafd0a7bb9db1d3d8ecdbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_settings.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), array(0 => "VictoireFormBundle:Form:fields.html.twig"));
        // line 3
        echo "
<div class=\"vic-tab-content vic-modal-tab-content\">
    ";
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["blog"] ?? null), "businessEntity", array(), "any", true, true)) {
            // line 7
            echo "        ";
            $this->loadTemplate("VictoireBusinessEntityBundle:BusinessProperty:list.html.twig", "VictoireBlogBundle:Blog:Tabs/_settings.html.twig", 7)->display(array_merge($context, array("businessProperties" => (isset($context["businessProperties"]) || array_key_exists("businessProperties", $context) ? $context["businessProperties"] : (function () { throw new Twig_Error_Runtime('Variable "businessProperties" does not exist.', 7, $this->getSourceContext()); })()))));
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    <div class=\"vic-tab-pane vic-active\" id=\"basics\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_settings_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 11, $this->getSourceContext()); })()), "id", array()))), "id" => "victoire_blog_settings_form"));
        echo "
            <div class=\"vic-row\">
                <div class=\"vic-col-md-offset-8 vic-col-md-4\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "status", array()), 'row');
        echo "
                </div>
            </div>

            <div class=\"vic-row\">
                <div class=\"vic-col-md-12\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "translations", array()), 'widget');
        echo "
                </div>

                <div class=\"vic-col-md-6\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "template", array()), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "roles", array()), 'row');
        echo "
                </div>


                <div class=\"vic-col-md-6\">
                    ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "locale", array(), "any", true, true)) {
            // line 31
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "locale", array()), 'row');
            echo "
                    ";
        }
        // line 33
        echo "                </div>

                <div class=\"vic-col-md-6\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "parent", array()), 'row');
        echo "
                </div>

                <div class=\"vic-col-md-6\">
                    <div class=\"vic-form-group\">
                        <div class=\"publication-date-container";
        // line 41
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "vars", array()), "value", array()), "status", array()) != twig_constant("Victoire\\Bundle\\PageBundle\\Entity\\PageStatus::SCHEDULED"))) ? (" vic-hidden") : (""));
        echo "\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "publishedAt", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"vic-col-md-6\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'errors');
        echo "

                    ";
        // line 50
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "slug", array()), "setRendered", array());
        // line 51
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'rest');
        echo "
                </div>
            </div>

            ";
        // line 55
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 55, $this->getSourceContext()); })()), "undeletable", array())) {
            // line 56
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 56, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"vic-confirm\" class=\"vic-btn vic-btn-danger vic-pull-left\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.form.page.settings.action.delete.confirm.title", array(), "victoire"), "html", null, true);
            echo "\" data-body=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.form.page.settings.action.delete.confirm.body", array(), "victoire"), "html", null, true);
            echo "\" data-modal=\"delete\"><i class=\"fa fa-trash-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.button.delete.title", array(), "victoire"), "html", null, true);
            echo "</a>
            ";
        }
        // line 58
        echo "            <button type=\"submit\" href=\"#\" class=\"vic-btn vic-btn-success vic-pull-right\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.button.settings.title", array(), "victoire"), "html", null, true);
        echo "\"><i class=\"fa fa-check-circle\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.button.settings.title", array(), "victoire"), "html", null, true);
        echo "</button>
        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), 'form_end');
        echo "

    </div>
</div>

<script type=\"text/javascript\">
    \$vic('#victoire_blog_settings_type_status').on('change', function(){
        if (\$vic(this).val() == '";
        // line 66
        echo twig_escape_filter($this->env, twig_constant("Victoire\\Bundle\\PageBundle\\Entity\\PageStatus::SCHEDULED"), "html", null, true);
        echo "') {
            \$vic('.publication-date-container').removeClass('vic-hidden');
        } else {
            \$vic('.publication-date-container').addClass('vic-hidden');
        }
    });
</script>
";
        
        $__internal_5ced22d186e2520278f087e72c84e339ce8b19510e4ad64915f027368fd461dc->leave($__internal_5ced22d186e2520278f087e72c84e339ce8b19510e4ad64915f027368fd461dc_prof);

        
        $__internal_06b0675db9c8af9b309f0bc157ffe169151f4b275dafd0a7bb9db1d3d8ecdbbf->leave($__internal_06b0675db9c8af9b309f0bc157ffe169151f4b275dafd0a7bb9db1d3d8ecdbbf_prof);

    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:Tabs/_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 66,  148 => 59,  141 => 58,  129 => 56,  127 => 55,  119 => 51,  117 => 50,  112 => 48,  103 => 42,  99 => 41,  91 => 36,  86 => 33,  80 => 31,  78 => 30,  70 => 25,  66 => 24,  59 => 20,  50 => 14,  44 => 11,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  27 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}
{% form_theme form 'VictoireFormBundle:Form:fields.html.twig' %}

<div class=\"vic-tab-content vic-modal-tab-content\">
    {# Only display this business entity property list when related to a business entity #}
    {% if blog.businessEntity is defined %}
        {% include 'VictoireBusinessEntityBundle:BusinessProperty:list.html.twig' with { 'businessProperties': businessProperties } %}
    {% endif %}

    <div class=\"vic-tab-pane vic-active\" id=\"basics\">
        {{ form_start(form, { 'action': path('victoire_blog_settings_post', {'id':blog.id} ), 'id': 'victoire_blog_settings_form' }) }}
            <div class=\"vic-row\">
                <div class=\"vic-col-md-offset-8 vic-col-md-4\">
                    {{ form_row(form.status) }}
                </div>
            </div>

            <div class=\"vic-row\">
                <div class=\"vic-col-md-12\">
                    {{ form_widget(form.translations) }}
                </div>

                <div class=\"vic-col-md-6\">
                    {{ form_row(form.template) }}
                    {{ form_row(form.roles) }}
                </div>


                <div class=\"vic-col-md-6\">
                    {% if form.locale is defined %}
                        {{ form_row(form.locale) }}
                    {% endif %}
                </div>

                <div class=\"vic-col-md-6\">
                    {{ form_row(form.parent) }}
                </div>

                <div class=\"vic-col-md-6\">
                    <div class=\"vic-form-group\">
                        <div class=\"publication-date-container{{ form.vars.value.status != constant('Victoire\\\\Bundle\\\\PageBundle\\\\Entity\\\\PageStatus::SCHEDULED') ? ' vic-hidden' }}\">
                            {{ form_widget(form.publishedAt) }}
                        </div>
                    </div>
                </div>

                <div class=\"vic-col-md-6\">
                    {{ form_errors(form) }}

                    {% do form.slug.setRendered %}
                    {{ form_rest(form) }}
                </div>
            </div>

            {% if not blog.undeletable %}
                <a href=\"{{ path('victoire_blog_delete', {'id': blog.id}) }}\" data-toggle=\"vic-confirm\" class=\"vic-btn vic-btn-danger vic-pull-left\" data-title=\"{{ 'modal.form.page.settings.action.delete.confirm.title'|trans({}, 'victoire') }}\" data-body=\"{{ 'modal.form.page.settings.action.delete.confirm.body'|trans({}, 'victoire') }}\" data-modal=\"delete\"><i class=\"fa fa-trash-o\"></i> {{ 'modal.button.delete.title'|trans({}, 'victoire') }}</a>
            {% endif %}
            <button type=\"submit\" href=\"#\" class=\"vic-btn vic-btn-success vic-pull-right\" title=\"{{ ('modal.button.settings.title')|trans({}, 'victoire') }}\"><i class=\"fa fa-check-circle\"></i> {{ ('modal.button.settings.title')|trans({}, 'victoire') }}</button>
        {{ form_end(form) }}

    </div>
</div>

<script type=\"text/javascript\">
    \$vic('#victoire_blog_settings_type_status').on('change', function(){
        if (\$vic(this).val() == '{{ constant('Victoire\\\\Bundle\\\\PageBundle\\\\Entity\\\\PageStatus::SCHEDULED') }}') {
            \$vic('.publication-date-container').removeClass('vic-hidden');
        } else {
            \$vic('.publication-date-container').addClass('vic-hidden');
        }
    });
</script>
", "VictoireBlogBundle:Blog:Tabs/_settings.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/Tabs/_settings.html.twig");
    }
}
