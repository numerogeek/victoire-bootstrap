<?php

/* VictoirePageBundle:Page:new.html.twig */
class __TwigTemplate_7eedb92856a343852fa502a7094c89a1674246dae6a3c0478bf9f0d9d37d3d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VictoireCoreBundle::_modal.html.twig", "VictoirePageBundle:Page:new.html.twig", 1);
        $this->blocks = array(
            'modal_container_classes' => array($this, 'block_modal_container_classes'),
            'modal_body_content' => array($this, 'block_modal_body_content'),
            'modal_header_title' => array($this, 'block_modal_header_title'),
            'modal_footer' => array($this, 'block_modal_footer'),
            'modal_footer_content' => array($this, 'block_modal_footer_content'),
            'action' => array($this, 'block_action'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireCoreBundle::_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90ba6218caa299ae474962257b4cbb65a298a6bb228b68b8bdcb4e665ec0cb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ba6218caa299ae474962257b4cbb65a298a6bb228b68b8bdcb4e665ec0cb5c->enter($__internal_90ba6218caa299ae474962257b4cbb65a298a6bb228b68b8bdcb4e665ec0cb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoirePageBundle:Page:new.html.twig"));

        $__internal_53fc7331185b93187da46ed05d12ab29dda9f95a5b28d4f15481db528d1dc0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fc7331185b93187da46ed05d12ab29dda9f95a5b28d4f15481db528d1dc0a6->enter($__internal_53fc7331185b93187da46ed05d12ab29dda9f95a5b28d4f15481db528d1dc0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoirePageBundle:Page:new.html.twig"));

        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), array(0 => "VictoireFormBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ba6218caa299ae474962257b4cbb65a298a6bb228b68b8bdcb4e665ec0cb5c->leave($__internal_90ba6218caa299ae474962257b4cbb65a298a6bb228b68b8bdcb4e665ec0cb5c_prof);

        
        $__internal_53fc7331185b93187da46ed05d12ab29dda9f95a5b28d4f15481db528d1dc0a6->leave($__internal_53fc7331185b93187da46ed05d12ab29dda9f95a5b28d4f15481db528d1dc0a6_prof);

    }

    // line 6
    public function block_modal_container_classes($context, array $blocks = array())
    {
        $__internal_e455308e069cbf9dc95c0cb108f535eca57e1057b96503029a53f2d5cf1d2583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e455308e069cbf9dc95c0cb108f535eca57e1057b96503029a53f2d5cf1d2583->enter($__internal_e455308e069cbf9dc95c0cb108f535eca57e1057b96503029a53f2d5cf1d2583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $__internal_626786f9cf05d663e8c9b1200b661b173717cd48f8d39424f9bca1c7ecbec148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626786f9cf05d663e8c9b1200b661b173717cd48f8d39424f9bca1c7ecbec148->enter($__internal_626786f9cf05d663e8c9b1200b661b173717cd48f8d39424f9bca1c7ecbec148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $this->displayParentBlock("modal_container_classes", $context, $blocks);
        echo " v-modal--view";
        
        $__internal_626786f9cf05d663e8c9b1200b661b173717cd48f8d39424f9bca1c7ecbec148->leave($__internal_626786f9cf05d663e8c9b1200b661b173717cd48f8d39424f9bca1c7ecbec148_prof);

        
        $__internal_e455308e069cbf9dc95c0cb108f535eca57e1057b96503029a53f2d5cf1d2583->leave($__internal_e455308e069cbf9dc95c0cb108f535eca57e1057b96503029a53f2d5cf1d2583_prof);

    }

    // line 8
    public function block_modal_body_content($context, array $blocks = array())
    {
        $__internal_f467f13f4eb03e40aa1b4e67fccca47f5a77d528035d59f2931e94fa2208511d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f467f13f4eb03e40aa1b4e67fccca47f5a77d528035d59f2931e94fa2208511d->enter($__internal_f467f13f4eb03e40aa1b4e67fccca47f5a77d528035d59f2931e94fa2208511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        $__internal_ebe02f5407a137bc1f3987ea888513a2b415baa79fe82209d1ec426f8802d37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe02f5407a137bc1f3987ea888513a2b415baa79fe82209d1ec426f8802d37d->enter($__internal_ebe02f5407a137bc1f3987ea888513a2b415baa79fe82209d1ec426f8802d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        // line 9
        echo "    <form method=\"POST\" action=\"";
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_core_page_new_post");
        echo "\">
        <div class=\"v-grid\">
            <div class=\"v-col v-col--xs-12 v-col--md-6\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "translations", array()), 'widget');
        echo "
            </div>

            <div class=\"v-col v-col--xs-12 v-col--md-6\">
                <div id=\"v-page-new--sidebar\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "template", array()), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "parent", array()), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'rest');
        echo "
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_ebe02f5407a137bc1f3987ea888513a2b415baa79fe82209d1ec426f8802d37d->leave($__internal_ebe02f5407a137bc1f3987ea888513a2b415baa79fe82209d1ec426f8802d37d_prof);

        
        $__internal_f467f13f4eb03e40aa1b4e67fccca47f5a77d528035d59f2931e94fa2208511d->leave($__internal_f467f13f4eb03e40aa1b4e67fccca47f5a77d528035d59f2931e94fa2208511d_prof);

    }

    // line 26
    public function block_modal_header_title($context, array $blocks = array())
    {
        $__internal_4dd1cb2276af1f72d051a6202e1ec81c2982cdd11e3dc2ede7b80e2f9310284d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd1cb2276af1f72d051a6202e1ec81c2982cdd11e3dc2ede7b80e2f9310284d->enter($__internal_4dd1cb2276af1f72d051a6202e1ec81c2982cdd11e3dc2ede7b80e2f9310284d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        $__internal_ae7b0c3a02bc10ab716075a2caf1005db3853cbcffd650d95d8dbf700b5fc8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7b0c3a02bc10ab716075a2caf1005db3853cbcffd650d95d8dbf700b5fc8aa->enter($__internal_ae7b0c3a02bc10ab716075a2caf1005db3853cbcffd650d95d8dbf700b5fc8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        // line 27
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page.modal.header", array(), "victoire"), "html", null, true);
        echo "
";
        
        $__internal_ae7b0c3a02bc10ab716075a2caf1005db3853cbcffd650d95d8dbf700b5fc8aa->leave($__internal_ae7b0c3a02bc10ab716075a2caf1005db3853cbcffd650d95d8dbf700b5fc8aa_prof);

        
        $__internal_4dd1cb2276af1f72d051a6202e1ec81c2982cdd11e3dc2ede7b80e2f9310284d->leave($__internal_4dd1cb2276af1f72d051a6202e1ec81c2982cdd11e3dc2ede7b80e2f9310284d_prof);

    }

    // line 30
    public function block_modal_footer($context, array $blocks = array())
    {
        $__internal_acbf083636fa0cc6b486cd68f9a61717aab74afae8d46e4c26148a4b9d4554ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbf083636fa0cc6b486cd68f9a61717aab74afae8d46e4c26148a4b9d4554ca->enter($__internal_acbf083636fa0cc6b486cd68f9a61717aab74afae8d46e4c26148a4b9d4554ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer"));

        $__internal_2367fc3d7540523da865e1882518526a6bc1946ae2550995cd230b379fa531a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2367fc3d7540523da865e1882518526a6bc1946ae2550995cd230b379fa531a2->enter($__internal_2367fc3d7540523da865e1882518526a6bc1946ae2550995cd230b379fa531a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer"));

        // line 31
        echo "    <div class=\"v-modal__footer\">
        <nav class=\"v-navbar\">
            <div class=\"v-container\">
                <div class=\"v-flex-grid v-flex-grid--justify-between\">
                    <div class=\"v-flex-col\"></div>

                    <div class=\"v-flex-col\">
                        ";
        // line 38
        $this->displayBlock('modal_footer_content', $context, $blocks);
        // line 43
        echo "                    </div>
                </div>
            </div>
        </nav>
    </div>
";
        
        $__internal_2367fc3d7540523da865e1882518526a6bc1946ae2550995cd230b379fa531a2->leave($__internal_2367fc3d7540523da865e1882518526a6bc1946ae2550995cd230b379fa531a2_prof);

        
        $__internal_acbf083636fa0cc6b486cd68f9a61717aab74afae8d46e4c26148a4b9d4554ca->leave($__internal_acbf083636fa0cc6b486cd68f9a61717aab74afae8d46e4c26148a4b9d4554ca_prof);

    }

    // line 38
    public function block_modal_footer_content($context, array $blocks = array())
    {
        $__internal_57d935fb7235f377780d3e87d014a53141b2096d3660fbd6fb120bfa3ec516cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d935fb7235f377780d3e87d014a53141b2096d3660fbd6fb120bfa3ec516cf->enter($__internal_57d935fb7235f377780d3e87d014a53141b2096d3660fbd6fb120bfa3ec516cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer_content"));

        $__internal_956c55cc3086a82ae6beeebc71f828472f3cffca36237b388cfa66824b4b916b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956c55cc3086a82ae6beeebc71f828472f3cffca36237b388cfa66824b4b916b->enter($__internal_956c55cc3086a82ae6beeebc71f828472f3cffca36237b388cfa66824b4b916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer_content"));

        // line 39
        echo "                            <a href=\"#\" class=\"v-btn v-btn--success\" data-modal=\"";
        $this->displayBlock('action', $context, $blocks);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("modal.button." .         $this->renderBlock("action", $context, $blocks)) . ".title"), array(), "victoire"), "html", null, true);
        echo "\">
                                ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("modal.button." .         $this->renderBlock("action", $context, $blocks)) . ".title"), array(), "victoire"), "html", null, true);
        echo "
                            </a>
                        ";
        
        $__internal_956c55cc3086a82ae6beeebc71f828472f3cffca36237b388cfa66824b4b916b->leave($__internal_956c55cc3086a82ae6beeebc71f828472f3cffca36237b388cfa66824b4b916b_prof);

        
        $__internal_57d935fb7235f377780d3e87d014a53141b2096d3660fbd6fb120bfa3ec516cf->leave($__internal_57d935fb7235f377780d3e87d014a53141b2096d3660fbd6fb120bfa3ec516cf_prof);

    }

    // line 39
    public function block_action($context, array $blocks = array())
    {
        $__internal_715a2a72a4535bcdc6f174491b46b624866368e3dcc5c91f0bd6aa924d156927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715a2a72a4535bcdc6f174491b46b624866368e3dcc5c91f0bd6aa924d156927->enter($__internal_715a2a72a4535bcdc6f174491b46b624866368e3dcc5c91f0bd6aa924d156927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action"));

        $__internal_6f71912963ff8a37635717da5000e4eb60c2c175b0e51f235dc3368c98105807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f71912963ff8a37635717da5000e4eb60c2c175b0e51f235dc3368c98105807->enter($__internal_6f71912963ff8a37635717da5000e4eb60c2c175b0e51f235dc3368c98105807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action"));

        echo "create";
        
        $__internal_6f71912963ff8a37635717da5000e4eb60c2c175b0e51f235dc3368c98105807->leave($__internal_6f71912963ff8a37635717da5000e4eb60c2c175b0e51f235dc3368c98105807_prof);

        
        $__internal_715a2a72a4535bcdc6f174491b46b624866368e3dcc5c91f0bd6aa924d156927->leave($__internal_715a2a72a4535bcdc6f174491b46b624866368e3dcc5c91f0bd6aa924d156927_prof);

    }

    public function getTemplateName()
    {
        return "VictoirePageBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 39,  188 => 40,  181 => 39,  172 => 38,  157 => 43,  155 => 38,  146 => 31,  137 => 30,  124 => 27,  115 => 26,  99 => 19,  95 => 18,  91 => 17,  83 => 12,  76 => 9,  67 => 8,  48 => 6,  38 => 1,  36 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle::_modal.html.twig' %}

{% trans_default_domain \"victoire\" %}

{% form_theme form 'VictoireFormBundle:Form:fields.html.twig' %}
{% block modal_container_classes %}{{ parent() }} v-modal--view{% endblock modal_container_classes %}

{% block modal_body_content %}
    <form method=\"POST\" action=\"{{path('victoire_core_page_new_post')}}\">
        <div class=\"v-grid\">
            <div class=\"v-col v-col--xs-12 v-col--md-6\">
                {{ form_widget(form.translations) }}
            </div>

            <div class=\"v-col v-col--xs-12 v-col--md-6\">
                <div id=\"v-page-new--sidebar\">
                    {{ form_row(form.template) }}
                    {{ form_row(form.parent) }}
                    {{ form_rest(form) }}
                </div>
            </div>
        </div>
    </form>
{% endblock modal_body_content %}

{% block modal_header_title %}
    {{'new.page.modal.header'|trans({}, 'victoire')}}
{% endblock modal_header_title %}

{% block modal_footer %}
    <div class=\"v-modal__footer\">
        <nav class=\"v-navbar\">
            <div class=\"v-container\">
                <div class=\"v-flex-grid v-flex-grid--justify-between\">
                    <div class=\"v-flex-col\"></div>

                    <div class=\"v-flex-col\">
                        {% block modal_footer_content %}
                            <a href=\"#\" class=\"v-btn v-btn--success\" data-modal=\"{% block action %}create{% endblock action %}\" title=\"{{ ('modal.button.'~ block('action') ~'.title')|trans({}, 'victoire') }}\">
                                {{ ('modal.button.'~ block('action') ~'.title')|trans({}, 'victoire') }}
                            </a>
                        {% endblock modal_footer_content %}
                    </div>
                </div>
            </div>
        </nav>
    </div>
{% endblock modal_footer  %}
", "VictoirePageBundle:Page:new.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/PageBundle/Resources/views/Page/new.html.twig");
    }
}
