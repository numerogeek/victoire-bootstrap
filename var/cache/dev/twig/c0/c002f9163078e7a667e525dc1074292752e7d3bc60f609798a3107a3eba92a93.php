<?php

/* VictoireSitemapBundle:Sitemap:reorganize.html.twig */
class __TwigTemplate_38239fd562a593041ea53dbe5501d2f0989c8126abe41f2bd85eaa92f66fa6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VictoireCoreBundle::_modal.html.twig", "VictoireSitemapBundle:Sitemap:reorganize.html.twig", 1);
        $this->blocks = array(
            'modal_container_classes' => array($this, 'block_modal_container_classes'),
            'modal_header_title' => array($this, 'block_modal_header_title'),
            'modal_body_content' => array($this, 'block_modal_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireCoreBundle::_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d1c9214e4b846931a870e1e1cce8d25c49317f3658c265c215651ca5ea70772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1c9214e4b846931a870e1e1cce8d25c49317f3658c265c215651ca5ea70772->enter($__internal_0d1c9214e4b846931a870e1e1cce8d25c49317f3658c265c215651ca5ea70772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSitemapBundle:Sitemap:reorganize.html.twig"));

        $__internal_282db9d5e47e8149175ce6b69b999b7e83d064c83cae4075586c5739e51117bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282db9d5e47e8149175ce6b69b999b7e83d064c83cae4075586c5739e51117bb->enter($__internal_282db9d5e47e8149175ce6b69b999b7e83d064c83cae4075586c5739e51117bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSitemapBundle:Sitemap:reorganize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1c9214e4b846931a870e1e1cce8d25c49317f3658c265c215651ca5ea70772->leave($__internal_0d1c9214e4b846931a870e1e1cce8d25c49317f3658c265c215651ca5ea70772_prof);

        
        $__internal_282db9d5e47e8149175ce6b69b999b7e83d064c83cae4075586c5739e51117bb->leave($__internal_282db9d5e47e8149175ce6b69b999b7e83d064c83cae4075586c5739e51117bb_prof);

    }

    // line 5
    public function block_modal_container_classes($context, array $blocks = array())
    {
        $__internal_2895143bbabb7981e507aaa79e34923d49949b5031f940b43d8974743788dbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2895143bbabb7981e507aaa79e34923d49949b5031f940b43d8974743788dbb4->enter($__internal_2895143bbabb7981e507aaa79e34923d49949b5031f940b43d8974743788dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $__internal_34fba874b486cd3dacc703d8b47f9ff2e96a46f909a81e12af74290e1a900ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fba874b486cd3dacc703d8b47f9ff2e96a46f909a81e12af74290e1a900ea5->enter($__internal_34fba874b486cd3dacc703d8b47f9ff2e96a46f909a81e12af74290e1a900ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $this->displayParentBlock("modal_container_classes", $context, $blocks);
        echo " v-modal--view";
        
        $__internal_34fba874b486cd3dacc703d8b47f9ff2e96a46f909a81e12af74290e1a900ea5->leave($__internal_34fba874b486cd3dacc703d8b47f9ff2e96a46f909a81e12af74290e1a900ea5_prof);

        
        $__internal_2895143bbabb7981e507aaa79e34923d49949b5031f940b43d8974743788dbb4->leave($__internal_2895143bbabb7981e507aaa79e34923d49949b5031f940b43d8974743788dbb4_prof);

    }

    // line 7
    public function block_modal_header_title($context, array $blocks = array())
    {
        $__internal_825e2b6eb74f5273e5fab9467c5a941231fdf268c92d2b7f2c1c069b15b641e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825e2b6eb74f5273e5fab9467c5a941231fdf268c92d2b7f2c1c069b15b641e5->enter($__internal_825e2b6eb74f5273e5fab9467c5a941231fdf268c92d2b7f2c1c069b15b641e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        $__internal_df8bd48137a064c7ef083ab9856f993260cf5ff5505857a1dbe792b1afac9efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8bd48137a064c7ef083ab9856f993260cf5ff5505857a1dbe792b1afac9efd->enter($__internal_df8bd48137a064c7ef083ab9856f993260cf5ff5505857a1dbe792b1afac9efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.sitemap.title", array(), "victoire"), "html", null, true);
        echo "
";
        
        $__internal_df8bd48137a064c7ef083ab9856f993260cf5ff5505857a1dbe792b1afac9efd->leave($__internal_df8bd48137a064c7ef083ab9856f993260cf5ff5505857a1dbe792b1afac9efd_prof);

        
        $__internal_825e2b6eb74f5273e5fab9467c5a941231fdf268c92d2b7f2c1c069b15b641e5->leave($__internal_825e2b6eb74f5273e5fab9467c5a941231fdf268c92d2b7f2c1c069b15b641e5_prof);

    }

    // line 11
    public function block_modal_body_content($context, array $blocks = array())
    {
        $__internal_584697737777c6edc356e1db23cecd16f5416d464c27267617466df0d06f122f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584697737777c6edc356e1db23cecd16f5416d464c27267617466df0d06f122f->enter($__internal_584697737777c6edc356e1db23cecd16f5416d464c27267617466df0d06f122f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        $__internal_a41375109005f82a94996d196186cbb3cd0a621baaba382649f3e729294e04c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41375109005f82a94996d196186cbb3cd0a621baaba382649f3e729294e04c2->enter($__internal_a41375109005f82a94996d196186cbb3cd0a621baaba382649f3e729294e04c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        // line 12
        echo "    ";
        $this->loadTemplate("VictoireSitemapBundle:Sitemap:reorganize.html.twig", "VictoireSitemapBundle:Sitemap:reorganize.html.twig", 12, "412914456")->display(array_merge($context, array("theme" => "info")));
        // line 17
        echo "
    <nav class=\"v-sitemap\">
        <div class=\"v-sitemap__head\">
            <div class=\"v-sitemap__head-cell v-sitemap__head-cell--priority\">
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.sitemap.priority.label", array(), "victoire"), "html", null, true);
        echo "
            </div>

            <div class=\"v-sitemap__head-cell v-sitemap__head-cell--indexed\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.sitemap.indexed.label", array(), "victoire"), "html", null, true);
        echo "
            </div>
        </div>

        <ul class=\"v-list-group v-list-group--main\" id=\"sortable\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 30, $this->getSourceContext()); })()));
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
            // line 31
            echo "                ";
            $context["level"] = 0;
            // line 32
            echo "                ";
            $this->loadTemplate("VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig", "VictoireSitemapBundle:Sitemap:reorganize.html.twig", 32)->display(array_merge($context, array("page" => $context["_page"])));
            // line 33
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
        // line 34
        echo "        </ul>
    </nav>

    <script>
        \$vic(document).ready(function () {
            \$vic('#sortable').nestedSortable({
                handle: 'div',
                items: 'li',
                listType: 'ul',
                toleranceElement: '> div',
                update: function (event, ui )
                {
                    updateSitemapPosition(\$vic('#sortable'), ui);
                }
            });
        });
    </script>
";
        
        $__internal_a41375109005f82a94996d196186cbb3cd0a621baaba382649f3e729294e04c2->leave($__internal_a41375109005f82a94996d196186cbb3cd0a621baaba382649f3e729294e04c2_prof);

        
        $__internal_584697737777c6edc356e1db23cecd16f5416d464c27267617466df0d06f122f->leave($__internal_584697737777c6edc356e1db23cecd16f5416d464c27267617466df0d06f122f_prof);

    }

    public function getTemplateName()
    {
        return "VictoireSitemapBundle:Sitemap:reorganize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 34,  139 => 33,  136 => 32,  133 => 31,  116 => 30,  108 => 25,  101 => 21,  95 => 17,  92 => 12,  83 => 11,  70 => 8,  61 => 7,  42 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle::_modal.html.twig' %}

{% trans_default_domain \"victoire\" %}

{% block modal_container_classes %}{{ parent() }} v-modal--view{% endblock modal_container_classes %}

{% block modal_header_title %}
    {{ 'modal.sitemap.title'|trans({}, 'victoire')}}
{% endblock modal_header_title %}

{% block modal_body_content %}
    {% embed \"VictoireUIBundle:Bricks:alert.html.twig\" with { theme: \"info\" } %}
        {% block body %}
            <i class=\"fa fa-info\"></i>&nbsp;&nbsp;{{ 'modal.sitemap.caption'|trans({}, 'victoire') }}
        {% endblock body %}
    {% endembed %}

    <nav class=\"v-sitemap\">
        <div class=\"v-sitemap__head\">
            <div class=\"v-sitemap__head-cell v-sitemap__head-cell--priority\">
                {{ 'modal.sitemap.priority.label'|trans({}, 'victoire')}}
            </div>

            <div class=\"v-sitemap__head-cell v-sitemap__head-cell--indexed\">
                {{ 'modal.sitemap.indexed.label'|trans({}, 'victoire')}}
            </div>
        </div>

        <ul class=\"v-list-group v-list-group--main\" id=\"sortable\">
            {% for _page in pages %}
                {% set level = 0 %}
                {% include 'VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig' with {'page': _page} %}
            {% endfor %}
        </ul>
    </nav>

    <script>
        \$vic(document).ready(function () {
            \$vic('#sortable').nestedSortable({
                handle: 'div',
                items: 'li',
                listType: 'ul',
                toleranceElement: '> div',
                update: function (event, ui )
                {
                    updateSitemapPosition(\$vic('#sortable'), ui);
                }
            });
        });
    </script>
{% endblock modal_body_content %}
", "VictoireSitemapBundle:Sitemap:reorganize.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/views/Sitemap/reorganize.html.twig");
    }
}


/* VictoireSitemapBundle:Sitemap:reorganize.html.twig */
class __TwigTemplate_38239fd562a593041ea53dbe5501d2f0989c8126abe41f2bd85eaa92f66fa6fa_412914456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("VictoireUIBundle:Bricks:alert.html.twig", "VictoireSitemapBundle:Sitemap:reorganize.html.twig", 12);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireUIBundle:Bricks:alert.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6cbc4838b2ee0f0fdd8d1c1fc5b40b39cfc8796d6a7a6f3aff3daa553a528d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cbc4838b2ee0f0fdd8d1c1fc5b40b39cfc8796d6a7a6f3aff3daa553a528d8->enter($__internal_e6cbc4838b2ee0f0fdd8d1c1fc5b40b39cfc8796d6a7a6f3aff3daa553a528d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSitemapBundle:Sitemap:reorganize.html.twig"));

        $__internal_747c4a2b9ebb587ac2740c3ae5e85f3f2e3f4ccc09755aca4c1bfd62ec2ee4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747c4a2b9ebb587ac2740c3ae5e85f3f2e3f4ccc09755aca4c1bfd62ec2ee4ff->enter($__internal_747c4a2b9ebb587ac2740c3ae5e85f3f2e3f4ccc09755aca4c1bfd62ec2ee4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSitemapBundle:Sitemap:reorganize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6cbc4838b2ee0f0fdd8d1c1fc5b40b39cfc8796d6a7a6f3aff3daa553a528d8->leave($__internal_e6cbc4838b2ee0f0fdd8d1c1fc5b40b39cfc8796d6a7a6f3aff3daa553a528d8_prof);

        
        $__internal_747c4a2b9ebb587ac2740c3ae5e85f3f2e3f4ccc09755aca4c1bfd62ec2ee4ff->leave($__internal_747c4a2b9ebb587ac2740c3ae5e85f3f2e3f4ccc09755aca4c1bfd62ec2ee4ff_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6644f9cd94cd7f526d30f94ba0cdb06c3726455192ffb89d9c76f506729892cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6644f9cd94cd7f526d30f94ba0cdb06c3726455192ffb89d9c76f506729892cc->enter($__internal_6644f9cd94cd7f526d30f94ba0cdb06c3726455192ffb89d9c76f506729892cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e2f93137ec760e1658ab845ea6ae84c84af566f170cb41cc37ee5e11cf62e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2f93137ec760e1658ab845ea6ae84c84af566f170cb41cc37ee5e11cf62e60->enter($__internal_6e2f93137ec760e1658ab845ea6ae84c84af566f170cb41cc37ee5e11cf62e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            <i class=\"fa fa-info\"></i>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.sitemap.caption", array(), "victoire"), "html", null, true);
        echo "
        ";
        
        $__internal_6e2f93137ec760e1658ab845ea6ae84c84af566f170cb41cc37ee5e11cf62e60->leave($__internal_6e2f93137ec760e1658ab845ea6ae84c84af566f170cb41cc37ee5e11cf62e60_prof);

        
        $__internal_6644f9cd94cd7f526d30f94ba0cdb06c3726455192ffb89d9c76f506729892cc->leave($__internal_6644f9cd94cd7f526d30f94ba0cdb06c3726455192ffb89d9c76f506729892cc_prof);

    }

    public function getTemplateName()
    {
        return "VictoireSitemapBundle:Sitemap:reorganize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 14,  289 => 13,  260 => 12,  153 => 34,  139 => 33,  136 => 32,  133 => 31,  116 => 30,  108 => 25,  101 => 21,  95 => 17,  92 => 12,  83 => 11,  70 => 8,  61 => 7,  42 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle::_modal.html.twig' %}

{% trans_default_domain \"victoire\" %}

{% block modal_container_classes %}{{ parent() }} v-modal--view{% endblock modal_container_classes %}

{% block modal_header_title %}
    {{ 'modal.sitemap.title'|trans({}, 'victoire')}}
{% endblock modal_header_title %}

{% block modal_body_content %}
    {% embed \"VictoireUIBundle:Bricks:alert.html.twig\" with { theme: \"info\" } %}
        {% block body %}
            <i class=\"fa fa-info\"></i>&nbsp;&nbsp;{{ 'modal.sitemap.caption'|trans({}, 'victoire') }}
        {% endblock body %}
    {% endembed %}

    <nav class=\"v-sitemap\">
        <div class=\"v-sitemap__head\">
            <div class=\"v-sitemap__head-cell v-sitemap__head-cell--priority\">
                {{ 'modal.sitemap.priority.label'|trans({}, 'victoire')}}
            </div>

            <div class=\"v-sitemap__head-cell v-sitemap__head-cell--indexed\">
                {{ 'modal.sitemap.indexed.label'|trans({}, 'victoire')}}
            </div>
        </div>

        <ul class=\"v-list-group v-list-group--main\" id=\"sortable\">
            {% for _page in pages %}
                {% set level = 0 %}
                {% include 'VictoireSitemapBundle:Sitemap:_sitemapItem.html.twig' with {'page': _page} %}
            {% endfor %}
        </ul>
    </nav>

    <script>
        \$vic(document).ready(function () {
            \$vic('#sortable').nestedSortable({
                handle: 'div',
                items: 'li',
                listType: 'ul',
                toleranceElement: '> div',
                update: function (event, ui )
                {
                    updateSitemapPosition(\$vic('#sortable'), ui);
                }
            });
        });
    </script>
{% endblock modal_body_content %}
", "VictoireSitemapBundle:Sitemap:reorganize.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/views/Sitemap/reorganize.html.twig");
    }
}
