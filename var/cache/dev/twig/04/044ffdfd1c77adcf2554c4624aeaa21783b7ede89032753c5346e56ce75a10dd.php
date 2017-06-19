<?php

/* VictoireBlogBundle:Blog:Tabs/_category.html.twig */
class __TwigTemplate_321305193745df78e188a85b62eda923aa1b27fcf6d760cddcaff0f510e85139 extends Twig_Template
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
        $__internal_69392b203436b3922eef4f93168f0d9c5a94ee5359eff0d534ba962c7762652d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69392b203436b3922eef4f93168f0d9c5a94ee5359eff0d534ba962c7762652d->enter($__internal_69392b203436b3922eef4f93168f0d9c5a94ee5359eff0d534ba962c7762652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_category.html.twig"));

        $__internal_61dda97cb3e43d618a127ee0ad4f8fca3cf2138d96caca21bc0abb69ffbb978e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dda97cb3e43d618a127ee0ad4f8fca3cf2138d96caca21bc0abb69ffbb978e->enter($__internal_61dda97cb3e43d618a127ee0ad4f8fca3cf2138d96caca21bc0abb69ffbb978e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_category.html.twig"));

        // line 2
        $context["_macros"] = $this;
        // line 3
        echo "
<div class=\"vic-tab-content vic-modal-tab-content\">
    <div class=\"vic-tab-pane vic-active\" id=\"basics\">
        <form method=\"POST\" id=\"victoire_blog_category_form\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_category", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"vic-form-group\">
                <div class=\"blogCategories\" data-prototype=\"";
        // line 8
        echo twig_escape_filter($this->env, $context["_macros"]->macro_widget_prototype(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "rootCategories", array()), "vars", array()), "prototype", array())));
        echo "\" role=\"blogCategory\" data-init=\"true\" data-blog-category=\"0\" data-index=\"0\">
                    <ul class=\"vic-cascade-list\" id=\"blog-category-cascadeList\" role=\"blogCategory-container\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "rootCategories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                        ";
            echo $context["_macros"]->macro_widget_prototype($context["category"], twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()));
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                    </ul>

                    <div class='vic-form-group vic-add_blogCategory_sibling-Container'>
                        ";
        // line 16
        ob_start();
        // line 17
        echo "                        <span>
                            <a href=\"#\" onclick=\"addBlogCategoryRootItem(this);return false;\" class=\"add_blogCategory_link vic-btn vic-btn-default add_blogCategory_sibling\">
                                <i class=\"fa fa-plus\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.blog.category.add.main.label", array(), "victoire"), "html", null, true);
        echo "
                            </a>
                        </span>
                        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "                    </div>
                </div>

                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'errors');
        echo "

                ";
        // line 29
        echo "                ";
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "rootCategories", array()), "setRendered", array());
        // line 30
        echo "            </div>

            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'rest');
        echo "

            ";
        // line 34
        ob_start();
        // line 35
        echo "            <button type=\"submit\" href=\"#\" class=\"vic-btn vic-btn-success vic-pull-right\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.button.category.title", array(), "victoire"), "html", null, true);
        echo "\">
                <i class=\"fa fa-check-circle\"></i>
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.button.category.title", array(), "victoire"), "html", null, true);
        echo "
            </button>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 40
        echo "        </form>
    </div>
</div>

<script type=\"text/javascript\">
    \$vic(document).ready(function() {
        blogCategories = new Array();
        prototype = \$vic('div.blogCategories').attr('data-prototype');

        //for the existing blogCategories, we generate the js blogCategories
        initBlogCategories();
    });

    \$vic('#victoire_blog_category_type_status').on('change', function(){
        if (\$vic(this).val() == '";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("Victoire\\Bundle\\PageBundle\\Entity\\PageStatus::SCHEDULED"), "html", null, true);
        echo "') {
            \$vic('.publication-date-container').removeClass('vic-hidden');
        } else {
            \$vic('.publication-date-container').addClass('vic-hidden');
        }
    });
</script>

";
        // line 62
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e59fdf5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_e59fdf5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e59fdf5_datetimepicker-init_1.js");
            // line 65
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "e59fdf5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_e59fdf5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e59fdf5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 67
        echo "
";
        // line 92
        echo "
";
        
        $__internal_69392b203436b3922eef4f93168f0d9c5a94ee5359eff0d534ba962c7762652d->leave($__internal_69392b203436b3922eef4f93168f0d9c5a94ee5359eff0d534ba962c7762652d_prof);

        
        $__internal_61dda97cb3e43d618a127ee0ad4f8fca3cf2138d96caca21bc0abb69ffbb978e->leave($__internal_61dda97cb3e43d618a127ee0ad4f8fca3cf2138d96caca21bc0abb69ffbb978e_prof);

    }

    // line 68
    public function macro_widget_prototype($__form__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5a1051fe449bfcb36a31182c4ae5d39fd6cc1fbfa1ec0c37bd3267ac27011128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5a1051fe449bfcb36a31182c4ae5d39fd6cc1fbfa1ec0c37bd3267ac27011128->enter($__internal_5a1051fe449bfcb36a31182c4ae5d39fd6cc1fbfa1ec0c37bd3267ac27011128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widget_prototype"));

            $__internal_9414bbc6f46281767ef6f7750c6b0cb1c645ae0dbc88af2c08a5665528d7ed5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9414bbc6f46281767ef6f7750c6b0cb1c645ae0dbc88af2c08a5665528d7ed5d->enter($__internal_9414bbc6f46281767ef6f7750c6b0cb1c645ae0dbc88af2c08a5665528d7ed5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widget_prototype"));

            // line 69
            $context["_macros"] = $this;
            // line 70
            echo "<li class='vic-item vic-blogcategoryWidget-item-formGroup' role=\"blogCategory\" data-index=\"";
            echo twig_escape_filter($this->env, (( !(null === (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 70, $this->getSourceContext()); })()))) ? ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 70, $this->getSourceContext()); })())) : ("__blogCategory_index__")), "html", null, true);
            echo "\" data-blog-category=\"__blogCategory_id__\" data-init=\"false\">
    ";
            // line 71
            echo $context["_macros"]->macro_category_render_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()));
            echo "

    ";
            // line 73
            ob_start();
            // line 74
            echo "    <span class='add_blogCategory_link-container'>
        <a href=\"#\" onclick=\"addBlogCategoryRow(this);return false;\" class=\"vic-btn -square vic-blogCategoryWidget-btn vic-btn-default add_blogCategory_link\">
            <i class=\"fa fa-level-up fa-rotate-90\"></i>
        </a>
    </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 80
            echo "
    <ul class=\"vic-cascade-sublist\" role=\"blogCategory-container\">
        ";
            // line 82
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array(), "any", true, true)) {
                // line 83
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "children", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 84
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array(), "any", true, true)) {
                        // line 85
                        echo "                    ";
                        echo $context["_macros"]->macro_widget_prototype($context["category"], twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()));
                        echo "
                ";
                    }
                    // line 87
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "        ";
            }
            // line 89
            echo "    </ul>
</li>
";
            
            $__internal_9414bbc6f46281767ef6f7750c6b0cb1c645ae0dbc88af2c08a5665528d7ed5d->leave($__internal_9414bbc6f46281767ef6f7750c6b0cb1c645ae0dbc88af2c08a5665528d7ed5d_prof);

            
            $__internal_5a1051fe449bfcb36a31182c4ae5d39fd6cc1fbfa1ec0c37bd3267ac27011128->leave($__internal_5a1051fe449bfcb36a31182c4ae5d39fd6cc1fbfa1ec0c37bd3267ac27011128_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 93
    public function macro_category_render_form($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d6568d8df5622889b679c2fe5b5d8e0702674f514edb1130defa4bf7f5c080e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d6568d8df5622889b679c2fe5b5d8e0702674f514edb1130defa4bf7f5c080e5->enter($__internal_d6568d8df5622889b679c2fe5b5d8e0702674f514edb1130defa4bf7f5c080e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "category_render_form"));

            $__internal_8037fd6a1395269575c4a444da89cbab17caf8e195ed28164e2e56dfc2a9df29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8037fd6a1395269575c4a444da89cbab17caf8e195ed28164e2e56dfc2a9df29->enter($__internal_8037fd6a1395269575c4a444da89cbab17caf8e195ed28164e2e56dfc2a9df29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "category_render_form"));

            // line 94
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "title", array()), "vars", array()), "label", array())), "required" => true));
            echo "

    ";
            // line 96
            ob_start();
            // line 97
            echo "    <a onclick=\"deleteBlogCategoryRow(this);return false;\" href=\"#\" class=\"vic-btn -square -framed vic-btn-danger vic-blogCategoryWidget-btn vic-blogCategoryWidget-deleteRow\">
        <i class=\"fa fa-trash-o\"></i>
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_8037fd6a1395269575c4a444da89cbab17caf8e195ed28164e2e56dfc2a9df29->leave($__internal_8037fd6a1395269575c4a444da89cbab17caf8e195ed28164e2e56dfc2a9df29_prof);

            
            $__internal_d6568d8df5622889b679c2fe5b5d8e0702674f514edb1130defa4bf7f5c080e5->leave($__internal_d6568d8df5622889b679c2fe5b5d8e0702674f514edb1130defa4bf7f5c080e5_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:Tabs/_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 97,  321 => 96,  315 => 94,  297 => 93,  280 => 89,  277 => 88,  263 => 87,  257 => 85,  254 => 84,  236 => 83,  234 => 82,  230 => 80,  222 => 74,  220 => 73,  215 => 71,  210 => 70,  208 => 69,  189 => 68,  178 => 92,  175 => 67,  161 => 65,  157 => 62,  146 => 54,  130 => 40,  124 => 37,  118 => 35,  116 => 34,  111 => 32,  107 => 30,  104 => 29,  99 => 26,  94 => 23,  87 => 19,  83 => 17,  81 => 16,  76 => 13,  59 => 11,  42 => 10,  37 => 8,  32 => 6,  27 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}
{% import _self as _macros %}

<div class=\"vic-tab-content vic-modal-tab-content\">
    <div class=\"vic-tab-pane vic-active\" id=\"basics\">
        <form method=\"POST\" id=\"victoire_blog_category_form\" action=\"{{path('victoire_blog_category', {'id':blog.id} )}}\">
            <div class=\"vic-form-group\">
                <div class=\"blogCategories\" data-prototype=\"{{ _macros.widget_prototype(form.rootCategories.vars.prototype)|e }}\" role=\"blogCategory\" data-init=\"true\" data-blog-category=\"0\" data-index=\"0\">
                    <ul class=\"vic-cascade-list\" id=\"blog-category-cascadeList\" role=\"blogCategory-container\">
                        {% for category in form.rootCategories %}
                        {{ _macros.widget_prototype(category, loop.index0) }}
                        {% endfor %}
                    </ul>

                    <div class='vic-form-group vic-add_blogCategory_sibling-Container'>
                        {% spaceless %}
                        <span>
                            <a href=\"#\" onclick=\"addBlogCategoryRootItem(this);return false;\" class=\"add_blogCategory_link vic-btn vic-btn-default add_blogCategory_sibling\">
                                <i class=\"fa fa-plus\"></i> {{'victoire.blog.category.add.main.label'|trans}}
                            </a>
                        </span>
                        {% endspaceless %}
                    </div>
                </div>

                {{ form_errors(form) }}

                {# Add this line to set the widget as rendered to not display it twice in form_rest #}
                {% do form.rootCategories.setRendered %}
            </div>

            {{ form_rest(form) }}

            {% spaceless %}
            <button type=\"submit\" href=\"#\" class=\"vic-btn vic-btn-success vic-pull-right\" title=\"{{ ('modal.button.category.title')|trans({}, 'victoire') }}\">
                <i class=\"fa fa-check-circle\"></i>
                {{ ('modal.button.category.title')|trans({}, 'victoire') }}
            </button>
            {% endspaceless %}
        </form>
    </div>
</div>

<script type=\"text/javascript\">
    \$vic(document).ready(function() {
        blogCategories = new Array();
        prototype = \$vic('div.blogCategories').attr('data-prototype');

        //for the existing blogCategories, we generate the js blogCategories
        initBlogCategories();
    });

    \$vic('#victoire_blog_category_type_status').on('change', function(){
        if (\$vic(this).val() == '{{ constant('Victoire\\\\Bundle\\\\PageBundle\\\\Entity\\\\PageStatus::SCHEDULED') }}') {
            \$vic('.publication-date-container').removeClass('vic-hidden');
        } else {
            \$vic('.publication-date-container').addClass('vic-hidden');
        }
    });
</script>

{% javascripts
    '@VictoireFormBundle/Resources/public/js/datetimepicker-init.js'
%}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

{% macro widget_prototype(form, index) %}
{% import _self as _macros %}
<li class='vic-item vic-blogcategoryWidget-item-formGroup' role=\"blogCategory\" data-index=\"{{ index is not null ? index : '__blogCategory_index__' }}\" data-blog-category=\"__blogCategory_id__\" data-init=\"false\">
    {{ _macros.category_render_form(form) }}

    {% spaceless %}
    <span class='add_blogCategory_link-container'>
        <a href=\"#\" onclick=\"addBlogCategoryRow(this);return false;\" class=\"vic-btn -square vic-blogCategoryWidget-btn vic-btn-default add_blogCategory_link\">
            <i class=\"fa fa-level-up fa-rotate-90\"></i>
        </a>
    </span>
    {% endspaceless %}

    <ul class=\"vic-cascade-sublist\" role=\"blogCategory-container\">
        {% if form.children is defined %}
            {% for category in form.children %}
                {% if category.title is defined %}
                    {{ _macros.widget_prototype(category, loop.index0) }}
                {% endif %}
            {% endfor %}
        {% endif %}
    </ul>
</li>
{% endmacro %}

{% macro category_render_form(form) %}
    {{ form_widget(form.title, {'attr': {'placeholder': form.title.vars.label}, 'required' : true}) }}

    {% spaceless %}
    <a onclick=\"deleteBlogCategoryRow(this);return false;\" href=\"#\" class=\"vic-btn -square -framed vic-btn-danger vic-blogCategoryWidget-btn vic-blogCategoryWidget-deleteRow\">
        <i class=\"fa fa-trash-o\"></i>
    </a>
    {% endspaceless %}
{% endmacro %}
", "VictoireBlogBundle:Blog:Tabs/_category.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/Tabs/_category.html.twig");
    }
}
