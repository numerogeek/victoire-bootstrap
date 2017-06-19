<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_da13f67e0f85d2fdf77865d15c28808a81c435c3c6863eabfbe548ce8ffc2268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'container_class' => array($this, 'block_container_class'),
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da8aad33ab6feef18d7a0f4601a717b236ce7195e10bfa800ff0530df4ef591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8aad33ab6feef18d7a0f4601a717b236ce7195e10bfa800ff0530df4ef591b->enter($__internal_da8aad33ab6feef18d7a0f4601a717b236ce7195e10bfa800ff0530df4ef591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_05c886342ae1062d9deaf501d6f4852bda04984e67584b70e10fa795d36d2e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c886342ae1062d9deaf501d6f4852bda04984e67584b70e10fa795d36d2e7e->enter($__internal_05c886342ae1062d9deaf501d6f4852bda04984e67584b70e10fa795d36d2e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8aad33ab6feef18d7a0f4601a717b236ce7195e10bfa800ff0530df4ef591b->leave($__internal_da8aad33ab6feef18d7a0f4601a717b236ce7195e10bfa800ff0530df4ef591b_prof);

        
        $__internal_05c886342ae1062d9deaf501d6f4852bda04984e67584b70e10fa795d36d2e7e->leave($__internal_05c886342ae1062d9deaf501d6f4852bda04984e67584b70e10fa795d36d2e7e_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_fbae802175269df09df0a3baeda0d1d5cccf01f7baddfae565e3550bc662849f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbae802175269df09df0a3baeda0d1d5cccf01f7baddfae565e3550bc662849f->enter($__internal_fbae802175269df09df0a3baeda0d1d5cccf01f7baddfae565e3550bc662849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_d0baa7e484db5a244a2cbf79771475aec95fd0b5dc444852f59944b379805ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0baa7e484db5a244a2cbf79771475aec95fd0b5dc444852f59944b379805ea9->enter($__internal_d0baa7e484db5a244a2cbf79771475aec95fd0b5dc444852f59944b379805ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo "<title>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.login.meta.title", array(), "victoire"), "html", null, true);
        echo "</title>";
        
        $__internal_d0baa7e484db5a244a2cbf79771475aec95fd0b5dc444852f59944b379805ea9->leave($__internal_d0baa7e484db5a244a2cbf79771475aec95fd0b5dc444852f59944b379805ea9_prof);

        
        $__internal_fbae802175269df09df0a3baeda0d1d5cccf01f7baddfae565e3550bc662849f->leave($__internal_fbae802175269df09df0a3baeda0d1d5cccf01f7baddfae565e3550bc662849f_prof);

    }

    // line 6
    public function block_container_class($context, array $blocks = array())
    {
        $__internal_317a162e63441aa4fb3a290eb960984cf99b0f743702a6b65bfb82ff4315111f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317a162e63441aa4fb3a290eb960984cf99b0f743702a6b65bfb82ff4315111f->enter($__internal_317a162e63441aa4fb3a290eb960984cf99b0f743702a6b65bfb82ff4315111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        $__internal_c16c7aaf796d950547269684b6c6848f2b77e06f594af51b1964a61e5fca3485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16c7aaf796d950547269684b6c6848f2b77e06f594af51b1964a61e5fca3485->enter($__internal_c16c7aaf796d950547269684b6c6848f2b77e06f594af51b1964a61e5fca3485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        echo "vic-login";
        
        $__internal_c16c7aaf796d950547269684b6c6848f2b77e06f594af51b1964a61e5fca3485->leave($__internal_c16c7aaf796d950547269684b6c6848f2b77e06f594af51b1964a61e5fca3485_prof);

        
        $__internal_317a162e63441aa4fb3a290eb960984cf99b0f743702a6b65bfb82ff4315111f->leave($__internal_317a162e63441aa4fb3a290eb960984cf99b0f743702a6b65bfb82ff4315111f_prof);

    }

    // line 7
    public function block_style($context, array $blocks = array())
    {
        $__internal_0ec56bbc53e11536e19334841d27ac6e4867e5f6a6ecf91355ce8ed49ba5f31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec56bbc53e11536e19334841d27ac6e4867e5f6a6ecf91355ce8ed49ba5f31e->enter($__internal_0ec56bbc53e11536e19334841d27ac6e4867e5f6a6ecf91355ce8ed49ba5f31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_43738f38173bbe101c50f5b47cedf12a7b7758826107bdb84629ce473b4651b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43738f38173bbe101c50f5b47cedf12a7b7758826107bdb84629ce473b4651b3->enter($__internal_43738f38173bbe101c50f5b47cedf12a7b7758826107bdb84629ce473b4651b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 8
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "80dd735_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_select2_1.css");
            // line 10
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_blog_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_font-awesome_3.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_bootstrap.min_4.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_bricks_5.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_layouts_6.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_ugly_7.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_fontawesome-iconpicker.min_8.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_build_standalone_9.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "80dd735_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735_media-style_10.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "80dd735"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_80dd735") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/80dd735.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
";
        
        $__internal_43738f38173bbe101c50f5b47cedf12a7b7758826107bdb84629ce473b4651b3->leave($__internal_43738f38173bbe101c50f5b47cedf12a7b7758826107bdb84629ce473b4651b3_prof);

        
        $__internal_0ec56bbc53e11536e19334841d27ac6e4867e5f6a6ecf91355ce8ed49ba5f31e->leave($__internal_0ec56bbc53e11536e19334841d27ac6e4867e5f6a6ecf91355ce8ed49ba5f31e_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44efdc0c037dfa0086172dbc7234109f69d45837cbfade296e06d60896f61a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44efdc0c037dfa0086172dbc7234109f69d45837cbfade296e06d60896f61a60->enter($__internal_44efdc0c037dfa0086172dbc7234109f69d45837cbfade296e06d60896f61a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eec04e3b3ebfe1901d5351b83a416ef0fd469f8004be726597b40033421eaf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec04e3b3ebfe1901d5351b83a416ef0fd469f8004be726597b40033421eaf0f->enter($__internal_eec04e3b3ebfe1901d5351b83a416ef0fd469f8004be726597b40033421eaf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "    <div data-dev=\"static\" style=\"
    padding: 15px;
    background: #ae3484;
    color: whitesmoke;
    font-weight: bold;
    font-size: 17px;
    text-align: center;
    text-shadow: 3px 3px 10px #810456;
    border: 2px solid #810456;
\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 26, $this->getSourceContext()); })()), "message", array()), array(), "victoire"), "html", null, true);
            echo "</div>
";
        }
        // line 28
        echo "
<form action=\"";
        // line 29
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <div class=\"vic-form-group -vic-login\">
        <span class=\"vic-input-kaede\">
            <input class=\"field\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\"/>
            <label class=\"label\" for=\"username\">
                <span class=\"labelContent\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.login.mail.label", array(), "victoire"), "html", null, true);
        echo "</span>
            </label>
        </span>
    </div>

    <div class=\"vic-form-group -vic-login\">
        <span class=\"vic-input-kaede\">
            <input class=\"field\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
            <label class=\"label\" for=\"password\">
                <span class=\"labelContent\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.login.password.label", array(), "victoire"), "html", null, true);
        echo "</span>
            </label>
        </span>
    </div>

    <div class=\"vic-form-group -vic-login vic-text-center\">
        <button class=\"vic-btn vic-btn-success vic-btn-block -vic-login\" type=\"submit\" id=\"_submit\" name=\"_submit\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.login.submit.label", array(), "victoire"), "html", null, true);
        echo "</button>
    </div>
        <p class=\"vic-help-block\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.login.forgot.label", array(), "victoire"), "html", null, true);
        echo "</a></p>
</form>
";
        
        $__internal_eec04e3b3ebfe1901d5351b83a416ef0fd469f8004be726597b40033421eaf0f->leave($__internal_eec04e3b3ebfe1901d5351b83a416ef0fd469f8004be726597b40033421eaf0f_prof);

        
        $__internal_44efdc0c037dfa0086172dbc7234109f69d45837cbfade296e06d60896f61a60->leave($__internal_44efdc0c037dfa0086172dbc7234109f69d45837cbfade296e06d60896f61a60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 53,  243 => 51,  234 => 45,  222 => 36,  217 => 34,  210 => 30,  206 => 29,  203 => 28,  198 => 26,  187 => 17,  185 => 16,  176 => 15,  163 => 12,  95 => 10,  90 => 8,  81 => 7,  63 => 6,  43 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block meta %}<title>{{ 'victoire.login.meta.title'|trans({}, 'victoire') }}</title>{% endblock meta %}
{% block container_class %}vic-login{% endblock container_class %}
{% block style %}
    {% stylesheets filter='less, cssrewrite' injector=\"victoire-edit\"
    %}
        <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    {% endstylesheets %}
    {{ parent() }}
{% endblock style %}

{% block fos_user_content %}
{% if error %}
    <div data-dev=\"static\" style=\"
    padding: 15px;
    background: #ae3484;
    color: whitesmoke;
    font-weight: bold;
    font-size: 17px;
    text-align: center;
    text-shadow: 3px 3px 10px #810456;
    border: 2px solid #810456;
\">{{ error.message|trans({}, 'victoire') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

    <div class=\"vic-form-group -vic-login\">
        <span class=\"vic-input-kaede\">
            <input class=\"field\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>
            <label class=\"label\" for=\"username\">
                <span class=\"labelContent\">{{ 'victoire.login.mail.label'|trans({}, 'victoire') }}</span>
            </label>
        </span>
    </div>

    <div class=\"vic-form-group -vic-login\">
        <span class=\"vic-input-kaede\">
            <input class=\"field\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
            <label class=\"label\" for=\"password\">
                <span class=\"labelContent\">{{ 'victoire.login.password.label'|trans({}, 'victoire') }}</span>
            </label>
        </span>
    </div>

    <div class=\"vic-form-group -vic-login vic-text-center\">
        <button class=\"vic-btn vic-btn-success vic-btn-block -vic-login\" type=\"submit\" id=\"_submit\" name=\"_submit\">{{ 'victoire.login.submit.label'|trans({}, 'victoire') }}</button>
    </div>
        <p class=\"vic-help-block\"><a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'victoire.login.forgot.label'|trans({}, 'victoire') }}</a></p>
</form>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UserBundle/Resources/views/Security/login.html.twig");
    }
}
