<?php

/* VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig */
class __TwigTemplate_eeaa9a6d1215b17d0ab88de9353eb2286aec79b8dd087669c6ef8c6f742bb4eb extends Twig_Template
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
        $__internal_4124e3780d5e3146e0031e2df5e24d20163856278c9c1a3ab34779fb8aca82e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4124e3780d5e3146e0031e2df5e24d20163856278c9c1a3ab34779fb8aca82e6->enter($__internal_4124e3780d5e3146e0031e2df5e24d20163856278c9c1a3ab34779fb8aca82e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig"));

        $__internal_129c4ba0c1cb0ad41681f1afb205141e7e559a88f010dc85da687dda48cba9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129c4ba0c1cb0ad41681f1afb205141e7e559a88f010dc85da687dda48cba9f7->enter($__internal_129c4ba0c1cb0ad41681f1afb205141e7e559a88f010dc85da687dda48cba9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig"));

        // line 1
        echo "<li class=\"v-list-group__item\" id=\"page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 1, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\">
    <div class=\"v-sitemap__line v-sitemap__line--";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        ";
        // line 3
        ob_start();
        // line 4
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/victoirecore/images/move_cross.png"), "html", null, true);
        echo "\" height=\"20\">

            <a class=\"v-sitemap__cell v-sitemap__cell--title\"
               href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_core_page_show", array("url" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 7, $this->getSourceContext()); })()), "url", array()))), "html", null, true);
        echo "\"
               title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sitemap.goto", array("%pageName%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 8, $this->getSourceContext()); })()), "name", array())), "victoire"), "html", null, true);
        echo "\"
            >
                ";
        // line 10
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 10, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        echo "
            </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 13
        echo "
        ";
        // line 14
        $context["sitemapPriorityForm"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 14, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 14, $this->getSourceContext()); })()), "id", array()));
        // line 15
        echo "
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["sitemapPriorityForm"]) || array_key_exists("sitemapPriorityForm", $context) ? $context["sitemapPriorityForm"] : (function () { throw new Twig_Error_Runtime('Variable "sitemapPriorityForm" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
            <div class=\"v-sitemap__interact-wrapper\">
                <div class=\"v-sitemap__cell v-sitemap__cell--priority\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sitemapPriorityForm"]) || array_key_exists("sitemapPriorityForm", $context) ? $context["sitemapPriorityForm"] : (function () { throw new Twig_Error_Runtime('Variable "sitemapPriorityForm" does not exist.', 19, $this->getSourceContext()); })()), "sitemapPriority", array()), 'widget', array("attr" => array("onchange" => "\$vic(this).parents(\"form\").submit();")));
        // line 23
        echo "
                </div>

                <div class=\"v-sitemap__cell v-sitemap__cell--indexed\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sitemapPriorityForm"]) || array_key_exists("sitemapPriorityForm", $context) ? $context["sitemapPriorityForm"] : (function () { throw new Twig_Error_Runtime('Variable "sitemapPriorityForm" does not exist.', 27, $this->getSourceContext()); })()), "sitemapIndexed", array()), 'widget', array("attr" => array("onchange" => "\$vic(this).parents(\"form\").submit();")));
        // line 31
        echo "
                </div>
            </div>
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["sitemapPriorityForm"]) || array_key_exists("sitemapPriorityForm", $context) ? $context["sitemapPriorityForm"] : (function () { throw new Twig_Error_Runtime('Variable "sitemapPriorityForm" does not exist.', 34, $this->getSourceContext()); })()), 'form_end');
        echo "

        <div class=\"v-sitemap__cell v-sitemap__cell--delete\" domflag>
            ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 37, $this->getSourceContext()); })()), "undeletable", array())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_core_page_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 38, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\"
                   data-toggle=\"vic-confirm\"
                   class=\"v-btn v-btn--danger v-btn--square v-btn--framed v-btn--transparent v-btn--sm\"
                   data-title=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.form.page.settings.action.delete.confirm.title", array(), "victoire"), "html", null, true);
            echo "\"
                   data-body=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.form.page.settings.action.delete.confirm.body", array(), "victoire"), "html", null, true);
            echo "\"
                   data-modal=\"delete\"
                >
                    <i class=\"fa fa-trash-o\"></i>
                </a>
            ";
        }
        // line 48
        echo "        </div>
    </div>

    ";
        // line 51
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 51, $this->getSourceContext()); })()), "children", array()))) {
            // line 52
            echo "        <ul class=\"v-list-group v-list-group__sub-list\">
            ";
            // line 53
            $context["level"] = ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 53, $this->getSourceContext()); })()) + 1);
            // line 54
            echo "
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 55, $this->getSourceContext()); })()), "getWebViewChildren", array(0 => true), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["_page"]) {
                // line 56
                echo "                ";
                $this->loadTemplate("VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig", "VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig", 56)->display(array_merge($context, array("page" => $context["_page"], "level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 56, $this->getSourceContext()); })()))));
                // line 57
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </ul>
    ";
        }
        // line 60
        echo "</li>
";
        
        $__internal_4124e3780d5e3146e0031e2df5e24d20163856278c9c1a3ab34779fb8aca82e6->leave($__internal_4124e3780d5e3146e0031e2df5e24d20163856278c9c1a3ab34779fb8aca82e6_prof);

        
        $__internal_129c4ba0c1cb0ad41681f1afb205141e7e559a88f010dc85da687dda48cba9f7->leave($__internal_129c4ba0c1cb0ad41681f1afb205141e7e559a88f010dc85da687dda48cba9f7_prof);

    }

    public function getTemplateName()
    {
        return "VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 60,  164 => 58,  150 => 57,  147 => 56,  130 => 55,  127 => 54,  125 => 53,  122 => 52,  120 => 51,  115 => 48,  106 => 42,  102 => 41,  95 => 38,  93 => 37,  87 => 34,  82 => 31,  80 => 27,  74 => 23,  72 => 19,  66 => 16,  63 => 15,  61 => 14,  58 => 13,  52 => 10,  47 => 8,  43 => 7,  36 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"v-list-group__item\" id=\"page-{{ page.id }}\">
    <div class=\"v-sitemap__line v-sitemap__line--{{ level }}\">
        {% spaceless %}
            <img src=\"{{ asset('bundles/victoirecore/images/move_cross.png') }}\" height=\"20\">

            <a class=\"v-sitemap__cell v-sitemap__cell--title\"
               href=\"{{ path('victoire_core_page_show', {'url': page.url}) }}\"
               title=\"{{ 'sitemap.goto'|trans({'%pageName%': page.name}, 'victoire') }}\"
            >
                {{ page.name|striptags }}
            </a>
        {% endspaceless %}

        {% set sitemapPriorityForm = attribute(forms, page.id) %}

        {{ form_start(sitemapPriorityForm) }}
            <div class=\"v-sitemap__interact-wrapper\">
                <div class=\"v-sitemap__cell v-sitemap__cell--priority\">
                    {{ form_widget(sitemapPriorityForm.sitemapPriority, {
                        'attr': {
                            'onchange':'\$vic(this).parents(\"form\").submit();'
                        }})
                    }}
                </div>

                <div class=\"v-sitemap__cell v-sitemap__cell--indexed\">
                    {{ form_widget(sitemapPriorityForm.sitemapIndexed, {
                        'attr': {
                            'onchange':'\$vic(this).parents(\"form\").submit();'
                        }})
                    }}
                </div>
            </div>
        {{ form_end(sitemapPriorityForm) }}

        <div class=\"v-sitemap__cell v-sitemap__cell--delete\" domflag>
            {% if not page.undeletable %}
                <a href=\"{{ path('victoire_core_page_delete', {'id': page.id}) }}\"
                   data-toggle=\"vic-confirm\"
                   class=\"v-btn v-btn--danger v-btn--square v-btn--framed v-btn--transparent v-btn--sm\"
                   data-title=\"{{ 'modal.form.page.settings.action.delete.confirm.title'|trans({}, 'victoire') }}\"
                   data-body=\"{{ 'modal.form.page.settings.action.delete.confirm.body'|trans({}, 'victoire') }}\"
                   data-modal=\"delete\"
                >
                    <i class=\"fa fa-trash-o\"></i>
                </a>
            {% endif %}
        </div>
    </div>

    {% if page.children|length %}
        <ul class=\"v-list-group v-list-group__sub-list\">
            {% set level = level + 1 %}

            {% for _page in page.getWebViewChildren(true) %}
                {% include 'VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig' with {'page': _page, 'level': level} %}
            {% endfor %}
        </ul>
    {% endif %}
</li>
", "VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/views/Sitemap/_sitemapItem.html.twig");
    }
}
