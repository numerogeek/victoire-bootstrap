<?php

/* VictoireFormBundle:Form:localeTabs.html.twig */
class __TwigTemplate_889d0f48fc5d036de899aba174582763d013471162b9ab1441ca40709bbf7ab4 extends Twig_Template
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
        $__internal_eb45e67d952e52d01f65d2b32067dc57f498ec1be4b01075586124a1fdc5b22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb45e67d952e52d01f65d2b32067dc57f498ec1be4b01075586124a1fdc5b22b->enter($__internal_eb45e67d952e52d01f65d2b32067dc57f498ec1be4b01075586124a1fdc5b22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireFormBundle:Form:localeTabs.html.twig"));

        $__internal_18cff2738f76046bb5f51db0666ef5c29419c4e6c57b82a6cfaf45a5c03b7dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cff2738f76046bb5f51db0666ef5c29419c4e6c57b82a6cfaf45a5c03b7dbb->enter($__internal_18cff2738f76046bb5f51db0666ef5c29419c4e6c57b82a6cfaf45a5c03b7dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireFormBundle:Form:localeTabs.html.twig"));

        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
        
        $__internal_eb45e67d952e52d01f65d2b32067dc57f498ec1be4b01075586124a1fdc5b22b->leave($__internal_eb45e67d952e52d01f65d2b32067dc57f498ec1be4b01075586124a1fdc5b22b_prof);

        
        $__internal_18cff2738f76046bb5f51db0666ef5c29419c4e6c57b82a6cfaf45a5c03b7dbb->leave($__internal_18cff2738f76046bb5f51db0666ef5c29419c4e6c57b82a6cfaf45a5c03b7dbb_prof);

    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        $__internal_ffe52446556caace9388ad8c15edd45d812bef29788a62628bf641a633e85cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe52446556caace9388ad8c15edd45d812bef29788a62628bf641a633e85cba->enter($__internal_ffe52446556caace9388ad8c15edd45d812bef29788a62628bf641a633e85cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        $__internal_d5f13d3f9244c94eda61057c1660a1b6ccd106c8d31818be25f3a0da7be92cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f13d3f9244c94eda61057c1660a1b6ccd106c8d31818be25f3a0da7be92cda->enter($__internal_d5f13d3f9244c94eda61057c1660a1b6ccd106c8d31818be25f3a0da7be92cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "

    <div class=\"a2lix_translations tabbable\">
        <div class=\"a2lix_translationsLocales v-tabs-nav v-tabs-nav--insert\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 7
            echo "                ";
            $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "name", array());
            // line 8
            echo "
                <div class=\"v-tabs-nav__item\">
                    <a class=\"v-tabs-nav__anchor";
            // line 10
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 10, $this->getSourceContext()); })()))) ? (" v-tabs-nav__anchor--active") : (""));
            echo "\"
                       data-collapse=\"show\"
                       data-href=\"#";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo "_a2lix_translationsFields-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\"
                       data-activeclass=\"v-tabs-nav__anchor--active\"
                    >
                        ";
            // line 15
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array(), "any", false, true), "label", array()), $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 15, $this->getSourceContext()); })())))) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 15, $this->getSourceContext()); })())))))), "html", null, true);
            echo "
                        ";
            // line 16
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "vars", array()), "default_locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 16, $this->getSourceContext()); })()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "default_label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "default_label", array()), "(default)")) : ("(default)"))), "html", null, true);
            }
            // line 17
            echo "                        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "required", array())) {
                echo "*";
            }
            // line 18
            echo "                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>

        <div class=\"a2lix_translationsFields v-tabs-collapses v-tabs-collapses--insert\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 25
            echo "                ";
            $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "name", array());
            // line 26
            echo "
                <div id=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo "_a2lix_translationsFields-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"
                     class=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo "_a2lix_translationsFields-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "vars", array()), "valid", array())) {
                echo "sonata-ba-field-error";
            }
            echo " v-collapse\"
                     data-flag=\"v-collapse\"
                     data-group=\"a2lix_translationsFields\"
                     ";
            // line 31
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "request", array()), "locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 31, $this->getSourceContext()); })()))) {
                echo "data-state=\"visible\"";
            }
            // line 32
            echo "                >
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
";
        
        $__internal_d5f13d3f9244c94eda61057c1660a1b6ccd106c8d31818be25f3a0da7be92cda->leave($__internal_d5f13d3f9244c94eda61057c1660a1b6ccd106c8d31818be25f3a0da7be92cda_prof);

        
        $__internal_ffe52446556caace9388ad8c15edd45d812bef29788a62628bf641a633e85cba->leave($__internal_ffe52446556caace9388ad8c15edd45d812bef29788a62628bf641a633e85cba_prof);

    }

    // line 41
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        $__internal_02a4fddbef82190dea147701424390dba728061c835e85d04a4f35f5a552862d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a4fddbef82190dea147701424390dba728061c835e85d04a4f35f5a552862d->enter($__internal_02a4fddbef82190dea147701424390dba728061c835e85d04a4f35f5a552862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        $__internal_84aa0e7a37ac72649be314eeda0e43d3eda5fefb04b15320a29681f2d20f5447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84aa0e7a37ac72649be314eeda0e43d3eda5fefb04b15320a29681f2d20f5447->enter($__internal_84aa0e7a37ac72649be314eeda0e43d3eda5fefb04b15320a29681f2d20f5447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        // line 42
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
        
        $__internal_84aa0e7a37ac72649be314eeda0e43d3eda5fefb04b15320a29681f2d20f5447->leave($__internal_84aa0e7a37ac72649be314eeda0e43d3eda5fefb04b15320a29681f2d20f5447_prof);

        
        $__internal_02a4fddbef82190dea147701424390dba728061c835e85d04a4f35f5a552862d->leave($__internal_02a4fddbef82190dea147701424390dba728061c835e85d04a4f35f5a552862d_prof);

    }

    public function getTemplateName()
    {
        return "VictoireFormBundle:Form:localeTabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 42,  169 => 41,  157 => 37,  148 => 34,  144 => 33,  141 => 32,  137 => 31,  125 => 28,  119 => 27,  116 => 26,  113 => 25,  109 => 24,  104 => 21,  96 => 18,  91 => 17,  87 => 16,  83 => 15,  75 => 12,  70 => 10,  66 => 8,  63 => 7,  59 => 6,  51 => 2,  42 => 1,  32 => 41,  29 => 40,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block a2lix_translations_widget %}
    {{ form_errors(form) }}

    <div class=\"a2lix_translations tabbable\">
        <div class=\"a2lix_translationsLocales v-tabs-nav v-tabs-nav--insert\">
            {% for translationsFields in form %}
                {% set locale = translationsFields.vars.name %}

                <div class=\"v-tabs-nav__item\">
                    <a class=\"v-tabs-nav__anchor{{ app.request.locale == locale ? ' v-tabs-nav__anchor--active' }}\"
                       data-collapse=\"show\"
                       data-href=\"#{{ translationsFields.vars.id }}_a2lix_translationsFields-{{ locale }}\"
                       data-activeclass=\"v-tabs-nav__anchor--active\"
                    >
                        {{ translationsFields.vars.label|default(locale|humanize)|trans|upper }}
                        {% if form.vars.default_locale == locale %}{{ form.vars.default_label|default('(default)')|trans }}{% endif %}
                        {% if translationsFields.vars.required %}*{% endif %}
                    </a>
                </div>
            {% endfor %}
        </div>

        <div class=\"a2lix_translationsFields v-tabs-collapses v-tabs-collapses--insert\">
            {% for translationsFields in form %}
                {% set locale = translationsFields.vars.name %}

                <div id=\"{{ translationsFields.vars.id }}_a2lix_translationsFields-{{ locale }}\"
                     class=\"{{ translationsFields.vars.id }}_a2lix_translationsFields-{{ locale }} {% if not form.vars.valid %}sonata-ba-field-error{% endif %} v-collapse\"
                     data-flag=\"v-collapse\"
                     data-group=\"a2lix_translationsFields\"
                     {% if app.request.locale == locale %}data-state=\"visible\"{% endif %}
                >
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
", "VictoireFormBundle:Form:localeTabs.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/FormBundle/Resources/views/Form/localeTabs.html.twig");
    }
}
