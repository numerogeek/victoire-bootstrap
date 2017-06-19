<?php

/* A2lixTranslationFormBundle::default.html.twig */
class __TwigTemplate_a61490e131d34827babde555eed545b870a80b068223e85b87a7446859b80dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translationsForms_widget' => array($this, 'block_a2lix_translationsForms_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5421ec8a960ea7307e666f191bc6ffd76a7bc8c8073aef824ee0469803725f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5421ec8a960ea7307e666f191bc6ffd76a7bc8c8073aef824ee0469803725f3->enter($__internal_d5421ec8a960ea7307e666f191bc6ffd76a7bc8c8073aef824ee0469803725f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::default.html.twig"));

        $__internal_9aff24fd291216d340967c2a6f2f98978333a9cac480c2520a5f145e3a4c6408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aff24fd291216d340967c2a6f2f98978333a9cac480c2520a5f145e3a4c6408->enter($__internal_9aff24fd291216d340967c2a6f2f98978333a9cac480c2520a5f145e3a4c6408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::default.html.twig"));

        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
        
        $__internal_d5421ec8a960ea7307e666f191bc6ffd76a7bc8c8073aef824ee0469803725f3->leave($__internal_d5421ec8a960ea7307e666f191bc6ffd76a7bc8c8073aef824ee0469803725f3_prof);

        
        $__internal_9aff24fd291216d340967c2a6f2f98978333a9cac480c2520a5f145e3a4c6408->leave($__internal_9aff24fd291216d340967c2a6f2f98978333a9cac480c2520a5f145e3a4c6408_prof);

    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        $__internal_09732308b31beb9daac0f11e60342af3a21a2387150bdebbcbf6888c06297031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09732308b31beb9daac0f11e60342af3a21a2387150bdebbcbf6888c06297031->enter($__internal_09732308b31beb9daac0f11e60342af3a21a2387150bdebbcbf6888c06297031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        $__internal_1249ba658e352ae9dc1e1463f59e789fb6190179648ababcb8cd24127321bd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1249ba658e352ae9dc1e1463f59e789fb6190179648ababcb8cd24127321bd66->enter($__internal_1249ba658e352ae9dc1e1463f59e789fb6190179648ababcb8cd24127321bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 6
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "name", array());
            // line 7
            echo "
            <li ";
            // line 8
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 8, $this->getSourceContext()); })()))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"#\" data-toggle=\"tab\" data-target=\".";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo "_a2lix_translationsFields-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
            echo "
                    ";
            // line 11
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "vars", array()), "default_locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 11, $this->getSourceContext()); })()))) {
                echo "[Default]";
            }
            // line 12
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "required", array())) {
                echo "*";
            }
            // line 13
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 20
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "name", array());
            // line 21
            echo "
            <div class=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo "_a2lix_translationsFields-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo " tab-pane ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "request", array()), "locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 22, $this->getSourceContext()); })()))) {
                echo "active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "vars", array()), "valid", array())) {
                echo "sonata-ba-field-error";
            }
            echo "\">
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_1249ba658e352ae9dc1e1463f59e789fb6190179648ababcb8cd24127321bd66->leave($__internal_1249ba658e352ae9dc1e1463f59e789fb6190179648ababcb8cd24127321bd66_prof);

        
        $__internal_09732308b31beb9daac0f11e60342af3a21a2387150bdebbcbf6888c06297031->leave($__internal_09732308b31beb9daac0f11e60342af3a21a2387150bdebbcbf6888c06297031_prof);

    }

    // line 31
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        $__internal_58b1bafa7fc76d2b7175f39646ce50a00c3aca739f2663a022528185bc6ea6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b1bafa7fc76d2b7175f39646ce50a00c3aca739f2663a022528185bc6ea6eb->enter($__internal_58b1bafa7fc76d2b7175f39646ce50a00c3aca739f2663a022528185bc6ea6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        $__internal_c4c659de6f70d95f8e013d628238d4bd9c602ab9b6ee7d2ef6626449cbb32f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c659de6f70d95f8e013d628238d4bd9c602ab9b6ee7d2ef6626449cbb32f62->enter($__internal_c4c659de6f70d95f8e013d628238d4bd9c602ab9b6ee7d2ef6626449cbb32f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        // line 32
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
        
        $__internal_c4c659de6f70d95f8e013d628238d4bd9c602ab9b6ee7d2ef6626449cbb32f62->leave($__internal_c4c659de6f70d95f8e013d628238d4bd9c602ab9b6ee7d2ef6626449cbb32f62_prof);

        
        $__internal_58b1bafa7fc76d2b7175f39646ce50a00c3aca739f2663a022528185bc6ea6eb->leave($__internal_58b1bafa7fc76d2b7175f39646ce50a00c3aca739f2663a022528185bc6ea6eb_prof);

    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 32,  155 => 31,  143 => 27,  134 => 24,  130 => 23,  116 => 22,  113 => 21,  110 => 20,  106 => 19,  101 => 16,  93 => 13,  88 => 12,  84 => 11,  80 => 10,  74 => 9,  68 => 8,  65 => 7,  62 => 6,  58 => 5,  51 => 2,  42 => 1,  32 => 31,  29 => 30,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block a2lix_translations_widget %}
    {{ form_errors(form) }}
    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <li {% if app.request.locale == locale %}class=\"active\"{% endif %}>
                <a href=\"#\" data-toggle=\"tab\" data-target=\".{{ translationsFields.vars.id }}_a2lix_translationsFields-{{ locale }}\">
                    {{ locale|capitalize }}
                    {% if form.vars.default_locale == locale %}[Default]{% endif %}
                    {% if translationsFields.vars.required %}*{% endif %}
                </a>
            </li>
        {% endfor %}
        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <div class=\"{{ translationsFields.vars.id }}_a2lix_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %} {% if not form.vars.valid %}sonata-ba-field-error{% endif %}\">
                {{ form_errors(translationsFields) }}
                {{ form_widget(translationsFields) }}
            </div>
        {% endfor %}
        </div>
    </div>
{% endblock %}

{% block a2lix_translationsForms_widget %}
    {{ block('a2lix_translations_widget') }}
{% endblock %}
", "A2lixTranslationFormBundle::default.html.twig", "/var/www/html/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views/default.html.twig");
    }
}
