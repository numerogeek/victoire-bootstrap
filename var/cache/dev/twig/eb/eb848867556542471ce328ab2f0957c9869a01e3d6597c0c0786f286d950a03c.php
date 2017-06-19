<?php

/* VictoireCoreBundle:Layout:layout.html.twig */
class __TwigTemplate_fff2b72f277e1dd1447967785787fea6dccbabbaebba7dd2c3a07027f6f2e213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VictoireCoreBundle:Layout:base.html.twig", "VictoireCoreBundle:Layout:layout.html.twig", 1);
        $this->blocks = array(
            'html_attr' => array($this, 'block_html_attr'),
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'head_icons' => array($this, 'block_head_icons'),
            'head_script' => array($this, 'block_head_script'),
            'head_style' => array($this, 'block_head_style'),
            'container_attributes' => array($this, 'block_container_attributes'),
            'container_class' => array($this, 'block_container_class'),
            'container_attr' => array($this, 'block_container_attr'),
            'victoire_ui' => array($this, 'block_victoire_ui'),
            'body_content' => array($this, 'block_body_content'),
            'body_content_main_attr' => array($this, 'block_body_content_main_attr'),
            'body_content_main' => array($this, 'block_body_content_main'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script__view' => array($this, 'block_foot_script__view'),
            'foot_script__view_bootstrap' => array($this, 'block_foot_script__view_bootstrap'),
            'foot_script_victoire' => array($this, 'block_foot_script_victoire'),
            'alertify' => array($this, 'block_alertify'),
            'foot_script_uservoice' => array($this, 'block_foot_script_uservoice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireCoreBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b8bfdbe9ea54189992e880aa50d110ee8e3247f847efa93d5c64a952962f3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8bfdbe9ea54189992e880aa50d110ee8e3247f847efa93d5c64a952962f3c8->enter($__internal_0b8bfdbe9ea54189992e880aa50d110ee8e3247f847efa93d5c64a952962f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Layout:layout.html.twig"));

        $__internal_e18459aa20f90a33fcc8096901eb4269bc86765e99d153e41878a14c29dfcc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18459aa20f90a33fcc8096901eb4269bc86765e99d153e41878a14c29dfcc79->enter($__internal_e18459aa20f90a33fcc8096901eb4269bc86765e99d153e41878a14c29dfcc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8bfdbe9ea54189992e880aa50d110ee8e3247f847efa93d5c64a952962f3c8->leave($__internal_0b8bfdbe9ea54189992e880aa50d110ee8e3247f847efa93d5c64a952962f3c8_prof);

        
        $__internal_e18459aa20f90a33fcc8096901eb4269bc86765e99d153e41878a14c29dfcc79->leave($__internal_e18459aa20f90a33fcc8096901eb4269bc86765e99d153e41878a14c29dfcc79_prof);

    }

    // line 5
    public function block_html_attr($context, array $blocks = array())
    {
        $__internal_b2317e77369cc989af237e61fef2bd8c90d1df328bdd29a0f3adadf8cb0d10a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2317e77369cc989af237e61fef2bd8c90d1df328bdd29a0f3adadf8cb0d10a7->enter($__internal_b2317e77369cc989af237e61fef2bd8c90d1df328bdd29a0f3adadf8cb0d10a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attr"));

        $__internal_5e9232dd3ac195993b2ba9e306a75a922c5c847fbb3e549853064648fffa4612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9232dd3ac195993b2ba9e306a75a922c5c847fbb3e549853064648fffa4612->enter($__internal_5e9232dd3ac195993b2ba9e306a75a922c5c847fbb3e549853064648fffa4612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attr"));

        echo "ng-app=\"ngApp\" lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_"), 0, array(), "array"), "html", null, true);
        echo "\"";
        
        $__internal_5e9232dd3ac195993b2ba9e306a75a922c5c847fbb3e549853064648fffa4612->leave($__internal_5e9232dd3ac195993b2ba9e306a75a922c5c847fbb3e549853064648fffa4612_prof);

        
        $__internal_b2317e77369cc989af237e61fef2bd8c90d1df328bdd29a0f3adadf8cb0d10a7->leave($__internal_b2317e77369cc989af237e61fef2bd8c90d1df328bdd29a0f3adadf8cb0d10a7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e975ab17f10a64e17c6c4affdc301b18636ae2cf02d298be7588b297eefc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e975ab17f10a64e17c6c4affdc301b18636ae2cf02d298be7588b297eefc7a->enter($__internal_c5e975ab17f10a64e17c6c4affdc301b18636ae2cf02d298be7588b297eefc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39f39bfb8b5e6e009fcb875bcd63f03c27f1a773246506992c00a213be5a774c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f39bfb8b5e6e009fcb875bcd63f03c27f1a773246506992c00a213be5a774c->enter($__internal_39f39bfb8b5e6e009fcb875bcd63f03c27f1a773246506992c00a213be5a774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Victoire DCMS";
        
        $__internal_39f39bfb8b5e6e009fcb875bcd63f03c27f1a773246506992c00a213be5a774c->leave($__internal_39f39bfb8b5e6e009fcb875bcd63f03c27f1a773246506992c00a213be5a774c_prof);

        
        $__internal_c5e975ab17f10a64e17c6c4affdc301b18636ae2cf02d298be7588b297eefc7a->leave($__internal_c5e975ab17f10a64e17c6c4affdc301b18636ae2cf02d298be7588b297eefc7a_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        $__internal_797462eb23c4b24f87f5ad5764dd246c5395444a560c9b8e83fc811ba4811175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797462eb23c4b24f87f5ad5764dd246c5395444a560c9b8e83fc811ba4811175->enter($__internal_797462eb23c4b24f87f5ad5764dd246c5395444a560c9b8e83fc811ba4811175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_1eef0b4e1926cc622e9e65c49d1278d321a7738e612720a9b287dfba62dbb2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eef0b4e1926cc622e9e65c49d1278d321a7738e612720a9b287dfba62dbb2f0->enter($__internal_1eef0b4e1926cc622e9e65c49d1278d321a7738e612720a9b287dfba62dbb2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $this->loadTemplate("VictoireSeoBundle::_meta.html.twig", "VictoireCoreBundle:Layout:layout.html.twig", 7)->display($context);
        
        $__internal_1eef0b4e1926cc622e9e65c49d1278d321a7738e612720a9b287dfba62dbb2f0->leave($__internal_1eef0b4e1926cc622e9e65c49d1278d321a7738e612720a9b287dfba62dbb2f0_prof);

        
        $__internal_797462eb23c4b24f87f5ad5764dd246c5395444a560c9b8e83fc811ba4811175->leave($__internal_797462eb23c4b24f87f5ad5764dd246c5395444a560c9b8e83fc811ba4811175_prof);

    }

    // line 8
    public function block_head_icons($context, array $blocks = array())
    {
        $__internal_baabd21b194882097c2e31ee2329f7a700af11345c698422ed6fc123753bcf0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baabd21b194882097c2e31ee2329f7a700af11345c698422ed6fc123753bcf0b->enter($__internal_baabd21b194882097c2e31ee2329f7a700af11345c698422ed6fc123753bcf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_icons"));

        $__internal_b32ebc723fe81a0ef2071cbaf6efcaeef5a9232adc479c4dbc924a4cb12e0366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32ebc723fe81a0ef2071cbaf6efcaeef5a9232adc479c4dbc924a4cb12e0366->enter($__internal_b32ebc723fe81a0ef2071cbaf6efcaeef5a9232adc479c4dbc924a4cb12e0366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_icons"));

        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />";
        
        $__internal_b32ebc723fe81a0ef2071cbaf6efcaeef5a9232adc479c4dbc924a4cb12e0366->leave($__internal_b32ebc723fe81a0ef2071cbaf6efcaeef5a9232adc479c4dbc924a4cb12e0366_prof);

        
        $__internal_baabd21b194882097c2e31ee2329f7a700af11345c698422ed6fc123753bcf0b->leave($__internal_baabd21b194882097c2e31ee2329f7a700af11345c698422ed6fc123753bcf0b_prof);

    }

    // line 10
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_c2e04fddb80fa25f54d9325b645b515cb184b57bd70caab51e0cf7dfb2a59a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e04fddb80fa25f54d9325b645b515cb184b57bd70caab51e0cf7dfb2a59a08->enter($__internal_c2e04fddb80fa25f54d9325b645b515cb184b57bd70caab51e0cf7dfb2a59a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_deed2887ca820da3cd6086c5bfa5ff739c5a99bf2de92840cc8b5d6370bacc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deed2887ca820da3cd6086c5bfa5ff739c5a99bf2de92840cc8b5d6370bacc52->enter($__internal_deed2887ca820da3cd6086c5bfa5ff739c5a99bf2de92840cc8b5d6370bacc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 11
        echo "    <!-- HEAD_SCRIPT -->
    <script type=\"text/javascript\">
        var locale = '";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "';
        var debug = ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "debug", array())) ? ("true") : ("false"));
        echo ";
    </script>

    ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE")) {
            // line 18
            echo "        <script type=\"text/javascript\">
            var adminLocale = '";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "user", array()), "locale", array()), "html", null, true);
            echo "';
        </script>
        ";
            // line 21
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7c9a009_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7c9a009_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c9a009_jquery-1.10.2_1.js");
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
                // asset "7c9a009_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7c9a009_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c9a009_jquery.noConflict_2.js");
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
                // asset "7c9a009_2"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7c9a009_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c9a009_modernizr.custom_3.js");
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
            } else {
                // asset "7c9a009"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7c9a009") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c9a009.js");
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
            }
            unset($context["asset_url"]);
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1b37284.js");
            // line 27
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "
    <!-- END HEAD_SCRIPT -->
    ";
        // line 31
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "debug", array())) {
            // line 32
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/victoireui/bower_components/jquery/dist/jquery.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/victoireui/bower_components/angular/angular.min.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 35
            echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js\"></script>
    ";
        }
        
        $__internal_deed2887ca820da3cd6086c5bfa5ff739c5a99bf2de92840cc8b5d6370bacc52->leave($__internal_deed2887ca820da3cd6086c5bfa5ff739c5a99bf2de92840cc8b5d6370bacc52_prof);

        
        $__internal_c2e04fddb80fa25f54d9325b645b515cb184b57bd70caab51e0cf7dfb2a59a08->leave($__internal_c2e04fddb80fa25f54d9325b645b515cb184b57bd70caab51e0cf7dfb2a59a08_prof);

    }

    // line 40
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_9825ebce3221111d163c87f4d4b2d5bcf298a86565463c2e04d666126aa6dab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9825ebce3221111d163c87f4d4b2d5bcf298a86565463c2e04d666126aa6dab6->enter($__internal_9825ebce3221111d163c87f4d4b2d5bcf298a86565463c2e04d666126aa6dab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        $__internal_255be1dc33266bca8489955c7d0128966613f5507af4ff2de28eb4b77f0a6e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255be1dc33266bca8489955c7d0128966613f5507af4ff2de28eb4b77f0a6e0f->enter($__internal_255be1dc33266bca8489955c7d0128966613f5507af4ff2de28eb4b77f0a6e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 41
        echo "    <!-- HEAD_STYLE -->
    ";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4938fda_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_4938fda_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/4938fda_victoire-head_1.css");
            // line 43
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "4938fda"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_4938fda") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/4938fda.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "
    ";
        // line 46
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE") || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login"))) {
            // line 47
            echo "        ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "728764f_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_select2_1.css");
                // line 48
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_blog_2.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_2"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_font-awesome_3.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_3"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_bootstrap.min_4.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_4"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_bricks_5.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_5"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_layouts_6.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_6"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ugly_7.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_7"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_fontawesome-iconpicker.min_8.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_8"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_build_standalone_9.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_9"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_media-style_10.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_10"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-default_11.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_11"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-bar_12.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_12"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-attached_13.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_13"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-growl_14.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
                // asset "728764f_14"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-other_15.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
            } else {
                // asset "728764f"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
            }
            unset($context["asset_url"]);
            // line 50
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/victoireui/stylesheets/main-front.css"), "html", null, true);
            echo "\"/>
    ";
        }
        // line 53
        echo "    <!-- END HEAD_STYLE -->

    <!-- CUSTOM PAGE STYLE -->
    ";
        // line 56
        echo $this->env->getExtension('Victoire\Bundle\PageBundle\Twig\Extension\PageExtension')->cmsPageCss();
        echo "
    <!-- EN CUSTOM PAGE STYLE -->
";
        
        $__internal_255be1dc33266bca8489955c7d0128966613f5507af4ff2de28eb4b77f0a6e0f->leave($__internal_255be1dc33266bca8489955c7d0128966613f5507af4ff2de28eb4b77f0a6e0f_prof);

        
        $__internal_9825ebce3221111d163c87f4d4b2d5bcf298a86565463c2e04d666126aa6dab6->leave($__internal_9825ebce3221111d163c87f4d4b2d5bcf298a86565463c2e04d666126aa6dab6_prof);

    }

    // line 60
    public function block_container_attributes($context, array $blocks = array())
    {
        $__internal_7c46410005c30095688968e5ab3c1ccff5b3531bc657b90a2b70ac06aa7b60dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c46410005c30095688968e5ab3c1ccff5b3531bc657b90a2b70ac06aa7b60dc->enter($__internal_7c46410005c30095688968e5ab3c1ccff5b3531bc657b90a2b70ac06aa7b60dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attributes"));

        $__internal_9e2ebc141516548f1957c93bbde5ab335fd0b35bfbbb2f28a51667d921a5206d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2ebc141516548f1957c93bbde5ab335fd0b35bfbbb2f28a51667d921a5206d->enter($__internal_9e2ebc141516548f1957c93bbde5ab335fd0b35bfbbb2f28a51667d921a5206d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attributes"));

        $this->displayParentBlock("container_attributes", $context, $blocks);
        echo " ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "victoire.edit_mode"), "method")) {
            echo "role=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "victoire.edit_mode"), "method"), "html", null, true);
            echo "\"";
        }
        
        $__internal_9e2ebc141516548f1957c93bbde5ab335fd0b35bfbbb2f28a51667d921a5206d->leave($__internal_9e2ebc141516548f1957c93bbde5ab335fd0b35bfbbb2f28a51667d921a5206d_prof);

        
        $__internal_7c46410005c30095688968e5ab3c1ccff5b3531bc657b90a2b70ac06aa7b60dc->leave($__internal_7c46410005c30095688968e5ab3c1ccff5b3531bc657b90a2b70ac06aa7b60dc_prof);

    }

    // line 61
    public function block_container_class($context, array $blocks = array())
    {
        $__internal_85025dd39aeee09665b3b268133ded57b0ed12e5747ef30be10aec39365efdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85025dd39aeee09665b3b268133ded57b0ed12e5747ef30be10aec39365efdaa->enter($__internal_85025dd39aeee09665b3b268133ded57b0ed12e5747ef30be10aec39365efdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        $__internal_78d3a8026c32013ebedb5d2a76843744a6581dea7202eb73bbf4f86f5431c895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d3a8026c32013ebedb5d2a76843744a6581dea7202eb73bbf4f86f5431c895->enter($__internal_78d3a8026c32013ebedb5d2a76843744a6581dea7202eb73bbf4f86f5431c895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE")) {
            echo "victoire-ui";
        }
        
        $__internal_78d3a8026c32013ebedb5d2a76843744a6581dea7202eb73bbf4f86f5431c895->leave($__internal_78d3a8026c32013ebedb5d2a76843744a6581dea7202eb73bbf4f86f5431c895_prof);

        
        $__internal_85025dd39aeee09665b3b268133ded57b0ed12e5747ef30be10aec39365efdaa->leave($__internal_85025dd39aeee09665b3b268133ded57b0ed12e5747ef30be10aec39365efdaa_prof);

    }

    // line 62
    public function block_container_attr($context, array $blocks = array())
    {
        $__internal_a4348fe3e7ec37d75a3c60cf27191548774cf14a24ff76782eff8a9c6ad5f3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4348fe3e7ec37d75a3c60cf27191548774cf14a24ff76782eff8a9c6ad5f3fd->enter($__internal_a4348fe3e7ec37d75a3c60cf27191548774cf14a24ff76782eff8a9c6ad5f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attr"));

        $__internal_d566ae85191bfdbee0102870f49cd5f5bf0089b46eca77404cc6eb46fbf91276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d566ae85191bfdbee0102870f49cd5f5bf0089b46eca77404cc6eb46fbf91276->enter($__internal_d566ae85191bfdbee0102870f49cd5f5bf0089b46eca77404cc6eb46fbf91276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attr"));

        if (array_key_exists("view", $context)) {
            echo "ng-controller=\"PageController as pageCtrl\" ng-init=\"init(";
            echo (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE")) ? ("true") : ("false"));
            echo ")\"";
        }
        
        $__internal_d566ae85191bfdbee0102870f49cd5f5bf0089b46eca77404cc6eb46fbf91276->leave($__internal_d566ae85191bfdbee0102870f49cd5f5bf0089b46eca77404cc6eb46fbf91276_prof);

        
        $__internal_a4348fe3e7ec37d75a3c60cf27191548774cf14a24ff76782eff8a9c6ad5f3fd->leave($__internal_a4348fe3e7ec37d75a3c60cf27191548774cf14a24ff76782eff8a9c6ad5f3fd_prof);

    }

    // line 64
    public function block_victoire_ui($context, array $blocks = array())
    {
        $__internal_aacbba8c58c4f56bdb1217a3ce5b7b4945ef4ce8f6aa6b645897eb9df9c1f367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacbba8c58c4f56bdb1217a3ce5b7b4945ef4ce8f6aa6b645897eb9df9c1f367->enter($__internal_aacbba8c58c4f56bdb1217a3ce5b7b4945ef4ce8f6aa6b645897eb9df9c1f367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "victoire_ui"));

        $__internal_6bac282f6825585a2a1cf39e98bab8a28432a0fbf6d0a6e7df4cb3a39bb3c224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bac282f6825585a2a1cf39e98bab8a28432a0fbf6d0a6e7df4cb3a39bb3c224->enter($__internal_6bac282f6825585a2a1cf39e98bab8a28432a0fbf6d0a6e7df4cb3a39bb3c224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "victoire_ui"));

        // line 65
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE")) {
            // line 66
            echo "        ";
            $this->loadTemplate("VictoireCoreBundle:Menu:admin_navbar.html.twig", "VictoireCoreBundle:Layout:layout.html.twig", 66)->display($context);
            // line 67
            echo "    ";
        }
        
        $__internal_6bac282f6825585a2a1cf39e98bab8a28432a0fbf6d0a6e7df4cb3a39bb3c224->leave($__internal_6bac282f6825585a2a1cf39e98bab8a28432a0fbf6d0a6e7df4cb3a39bb3c224_prof);

        
        $__internal_aacbba8c58c4f56bdb1217a3ce5b7b4945ef4ce8f6aa6b645897eb9df9c1f367->leave($__internal_aacbba8c58c4f56bdb1217a3ce5b7b4945ef4ce8f6aa6b645897eb9df9c1f367_prof);

    }

    // line 70
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_cd31f580f171cef319b78143e7b2ba93ee6ab2c6159f57171966f94f3adf9ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd31f580f171cef319b78143e7b2ba93ee6ab2c6159f57171966f94f3adf9ff8->enter($__internal_cd31f580f171cef319b78143e7b2ba93ee6ab2c6159f57171966f94f3adf9ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_b44e7f6f40b3b0b48b377fa4c66819d83046c69631e0ed1aae9f9b6f710b06d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44e7f6f40b3b0b48b377fa4c66819d83046c69631e0ed1aae9f9b6f710b06d5->enter($__internal_b44e7f6f40b3b0b48b377fa4c66819d83046c69631e0ed1aae9f9b6f710b06d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 71
        echo "    <main role=\"main\" ";
        $this->displayBlock('body_content_main_attr', $context, $blocks);
        echo ">
        ";
        // line 72
        $this->displayBlock('body_content_main', $context, $blocks);
        // line 75
        echo "    </main>
";
        
        $__internal_b44e7f6f40b3b0b48b377fa4c66819d83046c69631e0ed1aae9f9b6f710b06d5->leave($__internal_b44e7f6f40b3b0b48b377fa4c66819d83046c69631e0ed1aae9f9b6f710b06d5_prof);

        
        $__internal_cd31f580f171cef319b78143e7b2ba93ee6ab2c6159f57171966f94f3adf9ff8->leave($__internal_cd31f580f171cef319b78143e7b2ba93ee6ab2c6159f57171966f94f3adf9ff8_prof);

    }

    // line 71
    public function block_body_content_main_attr($context, array $blocks = array())
    {
        $__internal_6573cbb47a42ee1af5fdc1979de36358c8f5f3839d2468d4b78b0d9bda54461d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6573cbb47a42ee1af5fdc1979de36358c8f5f3839d2468d4b78b0d9bda54461d->enter($__internal_6573cbb47a42ee1af5fdc1979de36358c8f5f3839d2468d4b78b0d9bda54461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_main_attr"));

        $__internal_6eaa907392a4437ac256da12796d50968c3c0a283e7456974370d6629d15158a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaa907392a4437ac256da12796d50968c3c0a283e7456974370d6629d15158a->enter($__internal_6eaa907392a4437ac256da12796d50968c3c0a283e7456974370d6629d15158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_main_attr"));

        echo "id=\"content\"";
        
        $__internal_6eaa907392a4437ac256da12796d50968c3c0a283e7456974370d6629d15158a->leave($__internal_6eaa907392a4437ac256da12796d50968c3c0a283e7456974370d6629d15158a_prof);

        
        $__internal_6573cbb47a42ee1af5fdc1979de36358c8f5f3839d2468d4b78b0d9bda54461d->leave($__internal_6573cbb47a42ee1af5fdc1979de36358c8f5f3839d2468d4b78b0d9bda54461d_prof);

    }

    // line 72
    public function block_body_content_main($context, array $blocks = array())
    {
        $__internal_6d7f0b7f4919d1f7b44264011223a786334829f1bfe52a9091cd41503f7f6921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7f0b7f4919d1f7b44264011223a786334829f1bfe52a9091cd41503f7f6921->enter($__internal_6d7f0b7f4919d1f7b44264011223a786334829f1bfe52a9091cd41503f7f6921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_main"));

        $__internal_fdace52b8f2858b27b5f090787b32abdec1be976dd5f08a15288e21fdad1b6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdace52b8f2858b27b5f090787b32abdec1be976dd5f08a15288e21fdad1b6d3->enter($__internal_fdace52b8f2858b27b5f090787b32abdec1be976dd5f08a15288e21fdad1b6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_main"));

        // line 73
        echo "            ";
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->cmsSlotWidgets("main_content");
        echo "
        ";
        
        $__internal_fdace52b8f2858b27b5f090787b32abdec1be976dd5f08a15288e21fdad1b6d3->leave($__internal_fdace52b8f2858b27b5f090787b32abdec1be976dd5f08a15288e21fdad1b6d3_prof);

        
        $__internal_6d7f0b7f4919d1f7b44264011223a786334829f1bfe52a9091cd41503f7f6921->leave($__internal_6d7f0b7f4919d1f7b44264011223a786334829f1bfe52a9091cd41503f7f6921_prof);

    }

    // line 78
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_7f0b2b6de3a61681e89b6528c5d4f41390add6845b1fef0015a5471fcf9e3233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0b2b6de3a61681e89b6528c5d4f41390add6845b1fef0015a5471fcf9e3233->enter($__internal_7f0b2b6de3a61681e89b6528c5d4f41390add6845b1fef0015a5471fcf9e3233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        $__internal_22e868ccd87fafe4814639c9ecf1f533d32b4e1dada37e8d2d092887c418a71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e868ccd87fafe4814639c9ecf1f533d32b4e1dada37e8d2d092887c418a71e->enter($__internal_22e868ccd87fafe4814639c9ecf1f533d32b4e1dada37e8d2d092887c418a71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        // line 79
        echo "    <!-- Script foot includes -->
    ";
        // line 80
        if (((twig_length_filter($this->env, ((array_key_exists("victoire_i18n_available_locales", $context)) ? (_twig_default_filter((isset($context["victoire_i18n_available_locales"]) || array_key_exists("victoire_i18n_available_locales", $context) ? $context["victoire_i18n_available_locales"] : (function () { throw new Twig_Error_Runtime('Variable "victoire_i18n_available_locales" does not exist.', 80, $this->getSourceContext()); })()), array())) : (array()))) > 1) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE"))) {
            // line 81
            echo "        ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "0565b05_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_0565b05_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/0565b05_translator.min_1.js");
                // line 84
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
                // asset "0565b05_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_0565b05_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/0565b05_config_2.js");
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
            } else {
                // asset "0565b05"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_0565b05") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/0565b05.js");
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
        ";
            }
            unset($context["asset_url"]);
            // line 86
            echo "    ";
        }
        // line 87
        echo "
    <!-- ==================== -->

    ";
        // line 90
        $this->displayBlock('foot_script__view', $context, $blocks);
        // line 113
        echo "
    ";
        // line 114
        $this->displayBlock('foot_script_victoire', $context, $blocks);
        // line 148
        echo "
    ";
        // line 149
        $this->displayBlock('alertify', $context, $blocks);
        // line 152
        echo "
    ";
        // line 153
        $this->displayBlock('foot_script_uservoice', $context, $blocks);
        // line 158
        echo "
    <!-- END FOOT_SCRIPT -->
";
        
        $__internal_22e868ccd87fafe4814639c9ecf1f533d32b4e1dada37e8d2d092887c418a71e->leave($__internal_22e868ccd87fafe4814639c9ecf1f533d32b4e1dada37e8d2d092887c418a71e_prof);

        
        $__internal_7f0b2b6de3a61681e89b6528c5d4f41390add6845b1fef0015a5471fcf9e3233->leave($__internal_7f0b2b6de3a61681e89b6528c5d4f41390add6845b1fef0015a5471fcf9e3233_prof);

    }

    // line 90
    public function block_foot_script__view($context, array $blocks = array())
    {
        $__internal_f7a55a2bd7fb4647c13e7788e1e5d6d52af4cd315eec340e6c7d9d8bd3db7776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a55a2bd7fb4647c13e7788e1e5d6d52af4cd315eec340e6c7d9d8bd3db7776->enter($__internal_f7a55a2bd7fb4647c13e7788e1e5d6d52af4cd315eec340e6c7d9d8bd3db7776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script__view"));

        $__internal_3b00599c55688e2577aff3e3e5f7ad20b029fdd5010c130bd67828404a513bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b00599c55688e2577aff3e3e5f7ad20b029fdd5010c130bd67828404a513bd7->enter($__internal_3b00599c55688e2577aff3e3e5f7ad20b029fdd5010c130bd67828404a513bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script__view"));

        // line 91
        echo "        ";
        $this->displayBlock('foot_script__view_bootstrap', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        if (array_key_exists("view", $context)) {
            // line 100
            echo "            <script type=\"text/javascript\">
                var viewReferenceId = '";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\PageBundle\Twig\Extension\PageExtension')->victoireCurrentPageReference(), "html", null, true);
            echo "';
            </script>

            ";
            // line 104
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->getSourceContext()); })()), "debug", array())) {
                // line 105
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("VictoireAnalyticsBundle:BrowseEvent:track", array("viewReferenceId" => $this->env->getExtension('Victoire\Bundle\PageBundle\Twig\Extension\PageExtension')->victoireCurrentPageReference(), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 105, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))));
                echo "
            ";
            }
            // line 107
            echo "
            ";
            // line 108
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "user", array())) {
                // line 109
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("VictoireAnalyticsBundle:BrowseEvent:heartbeat", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->getSourceContext()); })()), "user", array()), "id", array()))));
                echo "
            ";
            }
            // line 111
            echo "        ";
        }
        // line 112
        echo "    ";
        
        $__internal_3b00599c55688e2577aff3e3e5f7ad20b029fdd5010c130bd67828404a513bd7->leave($__internal_3b00599c55688e2577aff3e3e5f7ad20b029fdd5010c130bd67828404a513bd7_prof);

        
        $__internal_f7a55a2bd7fb4647c13e7788e1e5d6d52af4cd315eec340e6c7d9d8bd3db7776->leave($__internal_f7a55a2bd7fb4647c13e7788e1e5d6d52af4cd315eec340e6c7d9d8bd3db7776_prof);

    }

    // line 91
    public function block_foot_script__view_bootstrap($context, array $blocks = array())
    {
        $__internal_dc435291101f93f93c8732faa44c4d9922378c22b17605557d0e53a4d5b4f4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc435291101f93f93c8732faa44c4d9922378c22b17605557d0e53a4d5b4f4cb->enter($__internal_dc435291101f93f93c8732faa44c4d9922378c22b17605557d0e53a4d5b4f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script__view_bootstrap"));

        $__internal_2fb95ce66c1b931883e18f226dafa7648644da203dc8cbfa9cb58758e5066067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb95ce66c1b931883e18f226dafa7648644da203dc8cbfa9cb58758e5066067->enter($__internal_2fb95ce66c1b931883e18f226dafa7648644da203dc8cbfa9cb58758e5066067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script__view_bootstrap"));

        // line 92
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->getSourceContext()); })()), "debug", array())) {
            // line 93
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/victoireui/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // line 95
            echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            ";
        }
        // line 97
        echo "        ";
        
        $__internal_2fb95ce66c1b931883e18f226dafa7648644da203dc8cbfa9cb58758e5066067->leave($__internal_2fb95ce66c1b931883e18f226dafa7648644da203dc8cbfa9cb58758e5066067_prof);

        
        $__internal_dc435291101f93f93c8732faa44c4d9922378c22b17605557d0e53a4d5b4f4cb->leave($__internal_dc435291101f93f93c8732faa44c4d9922378c22b17605557d0e53a4d5b4f4cb_prof);

    }

    // line 114
    public function block_foot_script_victoire($context, array $blocks = array())
    {
        $__internal_604b00858becba82885ced13ce016a69377cf11ab4147c24f546952d5556c880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604b00858becba82885ced13ce016a69377cf11ab4147c24f546952d5556c880->enter($__internal_604b00858becba82885ced13ce016a69377cf11ab4147c24f546952d5556c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_victoire"));

        $__internal_10ed960ad08e60413d1af93827c26be0bb4b4728eac7110146aff097b8987559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ed960ad08e60413d1af93827c26be0bb4b4728eac7110146aff097b8987559->enter($__internal_10ed960ad08e60413d1af93827c26be0bb4b4728eac7110146aff097b8987559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_victoire"));

        // line 115
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE")) {
            // line 116
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "550cb3a_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_blog_1.js");
                // line 117
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_select2.min_2.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_2"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_select2_locale_fr_3.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_3"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_jquery-ui-1.10.4_4.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_4"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_classie_5.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_5"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_custom_radio_6.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_6"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_victoire_7.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_7"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_modal_8.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_8"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_widget_9.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_9"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_confirm_10.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_10"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_bootstrap.min_11.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_11"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_jquery.mjs.nestedSortable_12.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_12"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_bootstrap-datetimepicker_13.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_13"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_bootstrap-datetimepicker.fr_14.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_14"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_fontawesome-iconpicker.min_15.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_15"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_mopabootstrap-collection_16.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_16"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_slug_17.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_17"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_form_18.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_18"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_modaldialog.min_19.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_19"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_19") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_modal_page_20.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_20"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_20") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_businessProperty_21.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_21"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_21") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_sitemap_22.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
                // asset "550cb3a_22"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a_22") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a_gnmenu_23.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
            } else {
                // asset "550cb3a"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_550cb3a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/550cb3a.js");
                echo "                <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></script>
            ";
            }
            unset($context["asset_url"]);
            // line 119
            echo "
            <script src=\"";
            // line 120
            echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "victoire"));
            echo "?locales=";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["victoire_i18n_available_locales"]) || array_key_exists("victoire_i18n_available_locales", $context) ? $context["victoire_i18n_available_locales"] : (function () { throw new Twig_Error_Runtime('Variable "victoire_i18n_available_locales" does not exist.', 120, $this->getSourceContext()); })()), ","), "html", null, true);
            echo "\"></script>

            <script type=\"text/javascript\">
                \$vic(document).ready(function(){
                    \$vic('a#media-manager').on('click', function(ev) {
                        ev.preventDefault();
                        openDGDialog(\"";
            // line 126
            echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("VictoireMediaBundle_folder_show", array("folderId" => 1));
            echo "\", 1050, 600);
                    });
                });
            </script>

            <script src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/victoireui/bower_components/tether/dist/js/tether.js"), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/victoireui/scripts/victoire.bundle.js"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 134
        echo "
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 137
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "environment", array()) == "test") || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "environment", array()) == "domain")) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "environment", array()) == "prod"))) {
            // line 138
            echo "            <script src=\"/js/fos_js_routes_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 138, $this->getSourceContext()); })()), "environment", array()), "html", null, true);
            echo ".js\"></script>
        ";
        } else {
            // line 140
            echo "            <script src=\"";
            echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
        }
        // line 142
        echo "
        <script type=\"text/javascript\" src=\"https://code.angularjs.org/1.4.1/angular-sanitize.min.js\"></script>
        ";
        // line 144
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7f92b18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_confirm_1.js");
            // line 145
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_alertify_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_jquery.scrollTo.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_smooth-scroll_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_jquery.unveil_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_unveil_6.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_linkModal_7.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_app_8.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_translateFilter_9.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_PageCtrl_10.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_SlotCtrl_11.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_WidgetAsynchronousLoadCtrl_12.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_slotLocalStorageService_13.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_widgetAPIService_14.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_widgetLocalStorageService_15.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_widget_16.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_newWidgetButton_17.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_classie_18.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "7f92b18_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18_notificationFx_19.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "7f92b18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_7f92b18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7f92b18.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 147
        echo "    ";
        
        $__internal_10ed960ad08e60413d1af93827c26be0bb4b4728eac7110146aff097b8987559->leave($__internal_10ed960ad08e60413d1af93827c26be0bb4b4728eac7110146aff097b8987559_prof);

        
        $__internal_604b00858becba82885ced13ce016a69377cf11ab4147c24f546952d5556c880->leave($__internal_604b00858becba82885ced13ce016a69377cf11ab4147c24f546952d5556c880_prof);

    }

    // line 149
    public function block_alertify($context, array $blocks = array())
    {
        $__internal_0ad34b510687fe9865283442ca0dd896b5e1592f1a3ea50fa16fa784b61c1334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad34b510687fe9865283442ca0dd896b5e1592f1a3ea50fa16fa784b61c1334->enter($__internal_0ad34b510687fe9865283442ca0dd896b5e1592f1a3ea50fa16fa784b61c1334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alertify"));

        $__internal_016982a76cbc3cbe5c25033ef85331ccae6ffed0db7c472142f0231b731bbb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016982a76cbc3cbe5c25033ef85331ccae6ffed0db7c472142f0231b731bbb1a->enter($__internal_016982a76cbc3cbe5c25033ef85331ccae6ffed0db7c472142f0231b731bbb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alertify"));

        // line 150
        echo "        ";
        echo $this->env->getExtension('Troopers\AlertifyBundle\Twig\Extension\AlertifyExtension')->alertifyFilter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 150, $this->getSourceContext()); })()), "session", array()));
        echo "
    ";
        
        $__internal_016982a76cbc3cbe5c25033ef85331ccae6ffed0db7c472142f0231b731bbb1a->leave($__internal_016982a76cbc3cbe5c25033ef85331ccae6ffed0db7c472142f0231b731bbb1a_prof);

        
        $__internal_0ad34b510687fe9865283442ca0dd896b5e1592f1a3ea50fa16fa784b61c1334->leave($__internal_0ad34b510687fe9865283442ca0dd896b5e1592f1a3ea50fa16fa784b61c1334_prof);

    }

    // line 153
    public function block_foot_script_uservoice($context, array $blocks = array())
    {
        $__internal_8aa6d9eb807ed3871feb069948ff8f4f4ac26042187ef0c94a8b4d70d6c79ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa6d9eb807ed3871feb069948ff8f4f4ac26042187ef0c94a8b4d70d6c79ca5->enter($__internal_8aa6d9eb807ed3871feb069948ff8f4f4ac26042187ef0c94a8b4d70d6c79ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_uservoice"));

        $__internal_4dd4108d0263a8ec0cc30254136d4fb3942a851c1d03d09db4b4067c6a72f361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd4108d0263a8ec0cc30254136d4fb3942a851c1d03d09db4b4067c6a72f361->enter($__internal_4dd4108d0263a8ec0cc30254136d4fb3942a851c1d03d09db4b4067c6a72f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_uservoice"));

        // line 154
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE")) {
            // line 155
            echo "            ";
            $this->loadTemplate("VictoireCoreBundle::_userVoice.html.twig", "VictoireCoreBundle:Layout:layout.html.twig", 155)->display($context);
            // line 156
            echo "        ";
        }
        // line 157
        echo "    ";
        
        $__internal_4dd4108d0263a8ec0cc30254136d4fb3942a851c1d03d09db4b4067c6a72f361->leave($__internal_4dd4108d0263a8ec0cc30254136d4fb3942a851c1d03d09db4b4067c6a72f361_prof);

        
        $__internal_8aa6d9eb807ed3871feb069948ff8f4f4ac26042187ef0c94a8b4d70d6c79ca5->leave($__internal_8aa6d9eb807ed3871feb069948ff8f4f4ac26042187ef0c94a8b4d70d6c79ca5_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1129 => 157,  1126 => 156,  1123 => 155,  1120 => 154,  1111 => 153,  1098 => 150,  1089 => 149,  1079 => 147,  957 => 145,  953 => 144,  949 => 142,  943 => 140,  937 => 138,  935 => 137,  930 => 135,  927 => 134,  922 => 132,  918 => 131,  910 => 126,  899 => 120,  896 => 119,  750 => 117,  745 => 116,  742 => 115,  733 => 114,  723 => 97,  719 => 95,  713 => 93,  710 => 92,  701 => 91,  691 => 112,  688 => 111,  682 => 109,  680 => 108,  677 => 107,  671 => 105,  669 => 104,  663 => 101,  660 => 100,  658 => 99,  655 => 98,  652 => 91,  643 => 90,  631 => 158,  629 => 153,  626 => 152,  624 => 149,  621 => 148,  619 => 114,  616 => 113,  614 => 90,  609 => 87,  606 => 86,  586 => 84,  581 => 81,  579 => 80,  576 => 79,  567 => 78,  554 => 73,  545 => 72,  527 => 71,  516 => 75,  514 => 72,  509 => 71,  500 => 70,  489 => 67,  486 => 66,  483 => 65,  474 => 64,  452 => 62,  432 => 61,  408 => 60,  395 => 56,  390 => 53,  385 => 51,  382 => 50,  284 => 48,  279 => 47,  277 => 46,  274 => 45,  260 => 43,  256 => 42,  253 => 41,  244 => 40,  231 => 35,  226 => 33,  221 => 32,  219 => 31,  215 => 29,  208 => 27,  203 => 26,  200 => 25,  197 => 24,  171 => 22,  167 => 21,  162 => 19,  159 => 18,  157 => 17,  151 => 14,  147 => 13,  143 => 11,  134 => 10,  114 => 8,  96 => 7,  78 => 6,  58 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle:Layout:base.html.twig' %}

{% trans_default_domain \"victoire\" %}

{% block html_attr %}ng-app=\"ngApp\" lang=\"{{ app.request.locale|split('_')[0] }}\"{% endblock html_attr %}
{% block title %}Victoire DCMS{% endblock %}
{% block meta %}{% include 'VictoireSeoBundle::_meta.html.twig' %}{% endblock %}
{% block head_icons %}<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />{% endblock %}

{% block head_script %}
    <!-- HEAD_SCRIPT -->
    <script type=\"text/javascript\">
        var locale = '{{ app.request.locale }}';
        var debug = {{ app.debug ? \"true\" : \"false\" }};
    </script>

    {% if is_granted('ROLE_VICTOIRE') %}
        <script type=\"text/javascript\">
            var adminLocale = '{{ app.user.locale }}';
        </script>
        {% javascripts injector=\"victoire-head, modernizr\" %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    {% endif %}

    {% javascripts injector=\"head\" %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

    <!-- END HEAD_SCRIPT -->
    {% if app.debug %}
        <script src=\"{{ asset('/bundles/victoireui/bower_components/jquery/dist/jquery.js') }}\"></script>
        <script src=\"{{ asset('/bundles/victoireui/bower_components/angular/angular.min.js') }}\"></script>
    {% else %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js\"></script>
    {% endif %}
{% endblock head_script %}

{% block head_style %}
    <!-- HEAD_STYLE -->
    {% stylesheets filter='less, cssrewrite' injector=\"head\" %}
        <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    {% endstylesheets %}

    {% if is_granted('ROLE_VICTOIRE') or app.request.attributes.get('_route') == 'fos_user_security_login' %}
        {% stylesheets filter='less, cssrewrite' injector=\"victoire-edit, alertify-codrops-notification\" %}
            <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        {% endstylesheets %}

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/victoireui/stylesheets/main-front.css') }}\"/>
    {% endif %}
    <!-- END HEAD_STYLE -->

    <!-- CUSTOM PAGE STYLE -->
    {{ cms_page_css() }}
    <!-- EN CUSTOM PAGE STYLE -->
{% endblock head_style %}

{% block container_attributes %}{{ parent() }} {% if app.session.get('victoire.edit_mode') %}role=\"{{ app.session.get('victoire.edit_mode') }}\"{% endif %}{% endblock container_attributes %}
{% block container_class %}{% if is_granted('ROLE_VICTOIRE') %}victoire-ui{% endif %}{% endblock container_class %}
{% block container_attr %}{% if view is defined %}ng-controller=\"PageController as pageCtrl\" ng-init=\"init({{ is_granted(\"ROLE_VICTOIRE\") ? \"true\" : \"false\" }})\"{% endif %}{% endblock %}

{% block victoire_ui %}
    {% if is_granted('ROLE_VICTOIRE') %}
        {% include 'VictoireCoreBundle:Menu:admin_navbar.html.twig' %}
    {% endif %}
{% endblock victoire_ui %}

{% block body_content %}
    <main role=\"main\" {% block body_content_main_attr %}id=\"content\"{% endblock %}>
        {% block body_content_main %}
            {{ cms_slot_widgets('main_content') }}
        {% endblock body_content_main %}
    </main>
{% endblock body_content %}

{% block foot_script %}
    <!-- Script foot includes -->
    {% if victoire_i18n_available_locales|default([])|length > 1 or is_granted('ROLE_VICTOIRE') %}
        {% javascripts
            \"@BazingaJsTranslationBundle/Resources/public/js/translator.min.js\"
            \"js/translations/config.js\" %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    {% endif %}

    <!-- ==================== -->

    {% block foot_script__view %}
        {% block foot_script__view_bootstrap %}
            {% if app.debug %}
                <script src=\"{{ asset('/bundles/victoireui/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
            {% else %}
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            {% endif %}
        {% endblock foot_script__view_bootstrap %}

        {% if view is defined %}
            <script type=\"text/javascript\">
                var viewReferenceId = '{{ vic_current_page_reference() }}';
            </script>

            {% if not app.debug %}
                {{ render_hinclude(controller('VictoireAnalyticsBundle:BrowseEvent:track', {'viewReferenceId': vic_current_page_reference(), 'referer': app.request.headers.get('referer')})) }}
            {% endif %}

            {% if app.user %}
                {{ render_hinclude(controller('VictoireAnalyticsBundle:BrowseEvent:heartbeat', {'id': app.user.id })) }}
            {% endif %}
        {% endif %}
    {% endblock foot_script__view %}

    {% block foot_script_victoire %}
        {% if is_granted('ROLE_VICTOIRE') %}
            {% javascripts injector='victoire-edit, victoire-leftnavbar' %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}

            <script src=\"{{ url('bazinga_jstranslation_js', { 'domain': 'victoire'}) }}?locales={{ victoire_i18n_available_locales|join(',') }}\"></script>

            <script type=\"text/javascript\">
                \$vic(document).ready(function(){
                    \$vic('a#media-manager').on('click', function(ev) {
                        ev.preventDefault();
                        openDGDialog(\"{{ path('VictoireMediaBundle_folder_show', {'folderId': 1} ) }}\", 1050, 600);
                    });
                });
            </script>

            <script src=\"{{ asset('/bundles/victoireui/bower_components/tether/dist/js/tether.js') }}\"></script>
            <script src=\"{{ asset('/bundles/victoireui/scripts/victoire.bundle.js') }}\"></script>
        {% endif %}

        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>

        {% if app.environment == \"test\" or app.environment == \"domain\" or app.environment == \"prod\" %}
            <script src=\"/js/fos_js_routes_{{ app.environment }}.js\"></script>
        {% else %}
            <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
        {% endif %}

        <script type=\"text/javascript\" src=\"https://code.angularjs.org/1.4.1/angular-sanitize.min.js\"></script>
        {% javascripts injector=\"foot, victoire-ngApp, alertify-codrops-notification\" %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    {% endblock foot_script_victoire %}

    {% block alertify %}
        {{ app.session|alertify|raw }}
    {% endblock %}

    {% block foot_script_uservoice %}
        {% if is_granted('ROLE_VICTOIRE') %}
            {% include 'VictoireCoreBundle::_userVoice.html.twig' %}
        {% endif %}
    {% endblock foot_script_uservoice %}

    <!-- END FOOT_SCRIPT -->
{% endblock foot_script %}
", "VictoireCoreBundle:Layout:layout.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/Layout/layout.html.twig");
    }
}
