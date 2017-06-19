<?php

/* VictoireBlogBundle:Blog:_blogItem.html.twig */
class __TwigTemplate_801069585a6d876997ef3779f970437952ad40a5827e91e99a599ba996dbe16f extends Twig_Template
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
        $__internal_ad9aa167c1af40a67e502c9df4cdb9eaf24d985c8230a248d4756e16291df6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9aa167c1af40a67e502c9df4cdb9eaf24d985c8230a248d4756e16291df6b6->enter($__internal_ad9aa167c1af40a67e502c9df4cdb9eaf24d985c8230a248d4756e16291df6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:_blogItem.html.twig"));

        $__internal_6d570dc7301e7481491e08466d9af6ad0fdf8b29b81bd3413401712ce050b5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d570dc7301e7481491e08466d9af6ad0fdf8b29b81bd3413401712ce050b5ca->enter($__internal_6d570dc7301e7481491e08466d9af6ad0fdf8b29b81bd3413401712ce050b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:_blogItem.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["chooseBlogForm"]) || array_key_exists("chooseBlogForm", $context) ? $context["chooseBlogForm"] : (function () { throw new Twig_Error_Runtime('Variable "chooseBlogForm" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "VictoireFormBundle:Form:fields.html.twig"));
        // line 2
        echo "

<div id=\"vic-blog-item-header\">
    <div class=\"vic-row\">

        ";
        // line 7
        if ((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "        <div class=\"vic-col-sm-3\">
            ";
            // line 9
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["chooseBlogForm"]) || array_key_exists("chooseBlogForm", $context) ? $context["chooseBlogForm"] : (function () { throw new Twig_Error_Runtime('Variable "chooseBlogForm" does not exist.', 9, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "victoire_blog_choose_form"), "action" => $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_index")));
            echo "
            ";
            // line 10
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["chooseBlogForm"]) || array_key_exists("chooseBlogForm", $context) ? $context["chooseBlogForm"] : (function () { throw new Twig_Error_Runtime('Variable "chooseBlogForm" does not exist.', 10, $this->getSourceContext()); })()), "blog", array()), 'row');
            echo "
            ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["chooseBlogForm"]) || array_key_exists("chooseBlogForm", $context) ? $context["chooseBlogForm"] : (function () { throw new Twig_Error_Runtime('Variable "chooseBlogForm" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
            echo "
        </div>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        ob_start();
        // line 16
        echo "        <a href=\"";
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_new");
        echo "\" id=\"vic-blog-newBlogBtn\" class=\"vic-btn vic-btn-default\" data-toggle=\"vic-modal\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.blog.button.new.title", array(), "victoire"), "html", null, true);
        echo "\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.blog.button.new.label", array(), "victoire"), "html", null, true);
        echo "
        </a>
        ";
        $context["addBlogButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "        ";
        if ((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 20, $this->getSourceContext()); })())) {
            // line 21
            echo "        <div class=\"vic-col-sm-9 vic-text-right\">
            ";
            // line 22
            echo (isset($context["addBlogButton"]) || array_key_exists("addBlogButton", $context) ? $context["addBlogButton"] : (function () { throw new Twig_Error_Runtime('Variable "addBlogButton" does not exist.', 22, $this->getSourceContext()); })());
            echo "
        </div>
        ";
        } else {
            // line 25
            echo "        <div class=\"vic-col-sm-12 vic-text-center\">

            <div class=\"vic-alert vic-alert-info\" role=\"alert\">
                ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire_blog.noresult", array(), "victoire"), "html", null, true);
            echo "
            </div>
            ";
            // line 30
            echo (isset($context["addBlogButton"]) || array_key_exists("addBlogButton", $context) ? $context["addBlogButton"] : (function () { throw new Twig_Error_Runtime('Variable "addBlogButton" does not exist.', 30, $this->getSourceContext()); })());
            echo "
        </div>
        ";
        }
        // line 33
        echo "    </div>
</div>

<script type=\"text/javascript\">
    \$vic('#choose_blog_blog').on('change', function(){
        \$('#victoire_blog_choose_form').on('submit', function(event) {
            event.preventDefault();
            var form = \$vic(this);
            var formData = \$vic(form).serializeArray();
            formData = \$vic.param(formData);

            if (\$vic(form).attr('enctype') == 'multipart/form-data') {
                formData = new FormData(\$vic(form)[0]);
                var contentType = false;
            }

            \$vic.ajax({
                url         : \$vic(form).attr('action'),
                context     : document.body,
                data        : formData,
                type        : \$vic(form).attr('method'),
                contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
                processData : false,
                async       : true,
                cache       : false,
                success     : function(jsonResponse) {
                    \$vic('#victoire-blog-modal').html(jsonResponse.html);
                }
            });
        }).submit();
    });
</script>

";
        // line 66
        if ((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 66, $this->getSourceContext()); })())) {
            // line 67
            $this->loadTemplate("VictoireBlogBundle:Blog:Tabs/nav.html.twig", "VictoireBlogBundle:Blog:_blogItem.html.twig", 67)->display($context);
            // line 68
            $this->loadTemplate("VictoireBlogBundle:Blog:Tabs/content.html.twig", "VictoireBlogBundle:Blog:_blogItem.html.twig", 68)->display($context);
        }
        
        $__internal_ad9aa167c1af40a67e502c9df4cdb9eaf24d985c8230a248d4756e16291df6b6->leave($__internal_ad9aa167c1af40a67e502c9df4cdb9eaf24d985c8230a248d4756e16291df6b6_prof);

        
        $__internal_6d570dc7301e7481491e08466d9af6ad0fdf8b29b81bd3413401712ce050b5ca->leave($__internal_6d570dc7301e7481491e08466d9af6ad0fdf8b29b81bd3413401712ce050b5ca_prof);

    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:_blogItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  136 => 67,  134 => 66,  99 => 33,  93 => 30,  88 => 28,  83 => 25,  77 => 22,  74 => 21,  71 => 20,  65 => 17,  58 => 16,  56 => 15,  53 => 14,  47 => 11,  43 => 10,  39 => 9,  36 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme chooseBlogForm 'VictoireFormBundle:Form:fields.html.twig' %}


<div id=\"vic-blog-item-header\">
    <div class=\"vic-row\">

        {% if blog %}
        <div class=\"vic-col-sm-3\">
            {{ form_start(chooseBlogForm, {'attr' : {'id' : 'victoire_blog_choose_form'}, 'action' : path('victoire_blog_index')}) }}
            {{ form_row(chooseBlogForm.blog) }}
            {{ form_end(chooseBlogForm) }}
        </div>
        {% endif %}

        {% set addBlogButton %}
        <a href=\"{{ path('victoire_blog_new') }}\" id=\"vic-blog-newBlogBtn\" class=\"vic-btn vic-btn-default\" data-toggle=\"vic-modal\" title=\"{{ ('modal.blog.button.new.title')|trans({}, 'victoire') }}\">
            {{ ('modal.blog.button.new.label')|trans({}, 'victoire') }}
        </a>
        {% endset %}
        {% if blog %}
        <div class=\"vic-col-sm-9 vic-text-right\">
            {{ addBlogButton|raw }}
        </div>
        {% else %}
        <div class=\"vic-col-sm-12 vic-text-center\">

            <div class=\"vic-alert vic-alert-info\" role=\"alert\">
                {{ 'victoire_blog.noresult'|trans({}, 'victoire') }}
            </div>
            {{ addBlogButton|raw }}
        </div>
        {% endif%}
    </div>
</div>

<script type=\"text/javascript\">
    \$vic('#choose_blog_blog').on('change', function(){
        \$('#victoire_blog_choose_form').on('submit', function(event) {
            event.preventDefault();
            var form = \$vic(this);
            var formData = \$vic(form).serializeArray();
            formData = \$vic.param(formData);

            if (\$vic(form).attr('enctype') == 'multipart/form-data') {
                formData = new FormData(\$vic(form)[0]);
                var contentType = false;
            }

            \$vic.ajax({
                url         : \$vic(form).attr('action'),
                context     : document.body,
                data        : formData,
                type        : \$vic(form).attr('method'),
                contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
                processData : false,
                async       : true,
                cache       : false,
                success     : function(jsonResponse) {
                    \$vic('#victoire-blog-modal').html(jsonResponse.html);
                }
            });
        }).submit();
    });
</script>

{% if blog %}
{% include 'VictoireBlogBundle:Blog:Tabs/nav.html.twig' %}
{% include 'VictoireBlogBundle:Blog:Tabs/content.html.twig' %}
{% endif %}
", "VictoireBlogBundle:Blog:_blogItem.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/_blogItem.html.twig");
    }
}
