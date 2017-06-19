<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1c7fee3640a29865cf5bf84b0572d22d1c98e7c976b10df348aed891dcb132d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VictoireCoreBundle:Layout:base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_form_start' => array($this, 'block_fos_user_form_start'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_user_form_end' => array($this, 'block_fos_user_form_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireCoreBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a3da4e549a5b3de2e72f219f0762d8cc165411963d015a02479228971de84f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3da4e549a5b3de2e72f219f0762d8cc165411963d015a02479228971de84f8->enter($__internal_6a3da4e549a5b3de2e72f219f0762d8cc165411963d015a02479228971de84f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_28fa0ba4f3941ae2d992c4f0c41e2de97b6849d1e849c7416f973f3a8e5e7a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fa0ba4f3941ae2d992c4f0c41e2de97b6849d1e849c7416f973f3a8e5e7a54->enter($__internal_28fa0ba4f3941ae2d992c4f0c41e2de97b6849d1e849c7416f973f3a8e5e7a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3da4e549a5b3de2e72f219f0762d8cc165411963d015a02479228971de84f8->leave($__internal_6a3da4e549a5b3de2e72f219f0762d8cc165411963d015a02479228971de84f8_prof);

        
        $__internal_28fa0ba4f3941ae2d992c4f0c41e2de97b6849d1e849c7416f973f3a8e5e7a54->leave($__internal_28fa0ba4f3941ae2d992c4f0c41e2de97b6849d1e849c7416f973f3a8e5e7a54_prof);

    }

    // line 4
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_685df284d6664c92916adecca7150ea428a59dfc5f79a236af7cc77bd51909bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685df284d6664c92916adecca7150ea428a59dfc5f79a236af7cc77bd51909bb->enter($__internal_685df284d6664c92916adecca7150ea428a59dfc5f79a236af7cc77bd51909bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        $__internal_92e71c1752c659973117c8d75f683863d4d6e3285713ba58da071f2267952596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e71c1752c659973117c8d75f683863d4d6e3285713ba58da071f2267952596->enter($__internal_92e71c1752c659973117c8d75f683863d4d6e3285713ba58da071f2267952596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "728764f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_select2_1.css");
            // line 6
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_blog_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_font-awesome_3.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_bootstrap.min_4.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_bricks_5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_layouts_6.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ugly_7.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_fontawesome-iconpicker.min_8.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_build_standalone_9.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_media-style_10.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-default_11.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-bar_12.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-attached_13.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-growl_14.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "728764f_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f_ns-style-other_15.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "728764f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_728764f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/728764f.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_92e71c1752c659973117c8d75f683863d4d6e3285713ba58da071f2267952596->leave($__internal_92e71c1752c659973117c8d75f683863d4d6e3285713ba58da071f2267952596_prof);

        
        $__internal_685df284d6664c92916adecca7150ea428a59dfc5f79a236af7cc77bd51909bb->leave($__internal_685df284d6664c92916adecca7150ea428a59dfc5f79a236af7cc77bd51909bb_prof);

    }

    // line 10
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_9d9e050f0b7050a2b79edd5ec5fc6b41064a57e2514fc2ce5507e4912511eb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9e050f0b7050a2b79edd5ec5fc6b41064a57e2514fc2ce5507e4912511eb4e->enter($__internal_9d9e050f0b7050a2b79edd5ec5fc6b41064a57e2514fc2ce5507e4912511eb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_080b9ef3fab83e1f1365c7cdca51f8a3388cb8c8dcbefb298816d58356027b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080b9ef3fab83e1f1365c7cdca51f8a3388cb8c8dcbefb298816d58356027b0f->enter($__internal_080b9ef3fab83e1f1365c7cdca51f8a3388cb8c8dcbefb298816d58356027b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 11
        echo "    <!-- HEAD_SCRIPT -->
    ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5b9cb14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_5b9cb14_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5b9cb14_jquery-1.10.2_1.js");
            // line 13
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "5b9cb14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_5b9cb14_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5b9cb14_jquery.noConflict_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5b9cb14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_5b9cb14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5b9cb14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    <!-- END HEAD_SCRIPT -->

    ";
        // line 17
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
";
        
        $__internal_080b9ef3fab83e1f1365c7cdca51f8a3388cb8c8dcbefb298816d58356027b0f->leave($__internal_080b9ef3fab83e1f1365c7cdca51f8a3388cb8c8dcbefb298816d58356027b0f_prof);

        
        $__internal_9d9e050f0b7050a2b79edd5ec5fc6b41064a57e2514fc2ce5507e4912511eb4e->leave($__internal_9d9e050f0b7050a2b79edd5ec5fc6b41064a57e2514fc2ce5507e4912511eb4e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce85abd63d100b6bc6b558b4704030aca3a71200f9da2bda2a317168641e861f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce85abd63d100b6bc6b558b4704030aca3a71200f9da2bda2a317168641e861f->enter($__internal_ce85abd63d100b6bc6b558b4704030aca3a71200f9da2bda2a317168641e861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b86a618513be9eab5609fa6126ee868b0b296dd7d8a4add9eb04a5d8770b12fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86a618513be9eab5609fa6126ee868b0b296dd7d8a4add9eb04a5d8770b12fc->enter($__internal_b86a618513be9eab5609fa6126ee868b0b296dd7d8a4add9eb04a5d8770b12fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_b86a618513be9eab5609fa6126ee868b0b296dd7d8a4add9eb04a5d8770b12fc->leave($__internal_b86a618513be9eab5609fa6126ee868b0b296dd7d8a4add9eb04a5d8770b12fc_prof);

        
        $__internal_ce85abd63d100b6bc6b558b4704030aca3a71200f9da2bda2a317168641e861f->leave($__internal_ce85abd63d100b6bc6b558b4704030aca3a71200f9da2bda2a317168641e861f_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_d546b5fda1d0d8c72c364b58e8f933642ed4bee1e0c66319a4a01c479873637b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d546b5fda1d0d8c72c364b58e8f933642ed4bee1e0c66319a4a01c479873637b->enter($__internal_d546b5fda1d0d8c72c364b58e8f933642ed4bee1e0c66319a4a01c479873637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a27a7f5e47e21a6f67e5a4253457ca2995d7586dbb53cba2be265c108f1b962a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27a7f5e47e21a6f67e5a4253457ca2995d7586dbb53cba2be265c108f1b962a->enter($__internal_a27a7f5e47e21a6f67e5a4253457ca2995d7586dbb53cba2be265c108f1b962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div id=\"vic-login-wrapper\" style=\"height: 100%; width: 100%\">
        <canvas id=\"constellations-canvas\"></canvas>

        <div id=\"vic-login-content\">
            <div class=\"vic-text-center\">
                <img id=\"vic-login-logo\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/victoirecore/images/login/logo.svg"), "html", null, true);
        echo "\" alt=\"Logo Victoire\">
            </div>

            <div id=\"vic-login-form\">
                ";
        // line 31
        $this->displayBlock('fos_user_form_start', $context, $blocks);
        // line 32
        echo "                ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "                ";
        $this->displayBlock('fos_user_form_end', $context, $blocks);
        // line 34
        echo "            </div>
        </div>

        ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "960b9d3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_960b9d3_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/960b9d3_TweenLite.min_1.js");
            // line 44
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "960b9d3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_960b9d3_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/960b9d3_EasePack.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "960b9d3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_960b9d3_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/960b9d3_rAF_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "960b9d3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_960b9d3_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/960b9d3_constellations_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
            // asset "960b9d3_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_960b9d3_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/960b9d3_classie_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "960b9d3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_assetic_960b9d3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/960b9d3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 46
        echo "
        <script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( '.vic-input-kaede input.field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, '-filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, '-filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, '-filled' );
                    }
                }
            })();
        </script>
    </div>
";
        
        $__internal_a27a7f5e47e21a6f67e5a4253457ca2995d7586dbb53cba2be265c108f1b962a->leave($__internal_a27a7f5e47e21a6f67e5a4253457ca2995d7586dbb53cba2be265c108f1b962a_prof);

        
        $__internal_d546b5fda1d0d8c72c364b58e8f933642ed4bee1e0c66319a4a01c479873637b->leave($__internal_d546b5fda1d0d8c72c364b58e8f933642ed4bee1e0c66319a4a01c479873637b_prof);

    }

    // line 31
    public function block_fos_user_form_start($context, array $blocks = array())
    {
        $__internal_35580bfa683dc990eb338f78b1bbdeb040fd855f80064f95dc48383eaec874cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35580bfa683dc990eb338f78b1bbdeb040fd855f80064f95dc48383eaec874cd->enter($__internal_35580bfa683dc990eb338f78b1bbdeb040fd855f80064f95dc48383eaec874cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_form_start"));

        $__internal_1b7cb4dcb622d58a4e9269e6f676b8be54ef1d12614d3dc3ef4a0c4c432de25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7cb4dcb622d58a4e9269e6f676b8be54ef1d12614d3dc3ef4a0c4c432de25f->enter($__internal_1b7cb4dcb622d58a4e9269e6f676b8be54ef1d12614d3dc3ef4a0c4c432de25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_form_start"));

        
        $__internal_1b7cb4dcb622d58a4e9269e6f676b8be54ef1d12614d3dc3ef4a0c4c432de25f->leave($__internal_1b7cb4dcb622d58a4e9269e6f676b8be54ef1d12614d3dc3ef4a0c4c432de25f_prof);

        
        $__internal_35580bfa683dc990eb338f78b1bbdeb040fd855f80064f95dc48383eaec874cd->leave($__internal_35580bfa683dc990eb338f78b1bbdeb040fd855f80064f95dc48383eaec874cd_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b22570f4e2fb24c6c5cae8f340c83cf61b397a5e112d078b19eff222236b60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b22570f4e2fb24c6c5cae8f340c83cf61b397a5e112d078b19eff222236b60b->enter($__internal_3b22570f4e2fb24c6c5cae8f340c83cf61b397a5e112d078b19eff222236b60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd91b090c304b1ad4631033b0bca265e96616ecc4b36381b156a85293b1c8e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd91b090c304b1ad4631033b0bca265e96616ecc4b36381b156a85293b1c8e89->enter($__internal_fd91b090c304b1ad4631033b0bca265e96616ecc4b36381b156a85293b1c8e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_fd91b090c304b1ad4631033b0bca265e96616ecc4b36381b156a85293b1c8e89->leave($__internal_fd91b090c304b1ad4631033b0bca265e96616ecc4b36381b156a85293b1c8e89_prof);

        
        $__internal_3b22570f4e2fb24c6c5cae8f340c83cf61b397a5e112d078b19eff222236b60b->leave($__internal_3b22570f4e2fb24c6c5cae8f340c83cf61b397a5e112d078b19eff222236b60b_prof);

    }

    // line 33
    public function block_fos_user_form_end($context, array $blocks = array())
    {
        $__internal_1a5fb5ff5b0e4b1150c8cf607b03024f0bc73698d402a021149fa1db5f99b94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5fb5ff5b0e4b1150c8cf607b03024f0bc73698d402a021149fa1db5f99b94f->enter($__internal_1a5fb5ff5b0e4b1150c8cf607b03024f0bc73698d402a021149fa1db5f99b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_form_end"));

        $__internal_e02f89c9157b0b09464e7b5fb25864057a381de76c7e846f29cb8b05f0978a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02f89c9157b0b09464e7b5fb25864057a381de76c7e846f29cb8b05f0978a13->enter($__internal_e02f89c9157b0b09464e7b5fb25864057a381de76c7e846f29cb8b05f0978a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_form_end"));

        
        $__internal_e02f89c9157b0b09464e7b5fb25864057a381de76c7e846f29cb8b05f0978a13->leave($__internal_e02f89c9157b0b09464e7b5fb25864057a381de76c7e846f29cb8b05f0978a13_prof);

        
        $__internal_1a5fb5ff5b0e4b1150c8cf607b03024f0bc73698d402a021149fa1db5f99b94f->leave($__internal_1a5fb5ff5b0e4b1150c8cf607b03024f0bc73698d402a021149fa1db5f99b94f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 33,  378 => 32,  361 => 31,  314 => 46,  276 => 44,  272 => 37,  267 => 34,  264 => 33,  261 => 32,  259 => 31,  252 => 27,  245 => 22,  227 => 21,  218 => 20,  206 => 17,  202 => 15,  182 => 13,  178 => 12,  175 => 11,  166 => 10,  60 => 6,  55 => 5,  46 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle:Layout:base.html.twig' %}


{% block head_style %}
    {% stylesheets filter='less, cssrewrite' injector=\"victoire-edit, alertify-codrops-notification\" %}
    <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    {% endstylesheets %}
{% endblock head_style %}

{% block head_script %}
    <!-- HEAD_SCRIPT -->
    {% javascripts injector=\"victoire-head\" %}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    <!-- END HEAD_SCRIPT -->

    {{ parent() }}
{% endblock head_script %}

{% block body %}
{% block content %}
    <div id=\"vic-login-wrapper\" style=\"height: 100%; width: 100%\">
        <canvas id=\"constellations-canvas\"></canvas>

        <div id=\"vic-login-content\">
            <div class=\"vic-text-center\">
                <img id=\"vic-login-logo\" src=\"{{ asset('bundles/victoirecore/images/login/logo.svg') }}\" alt=\"Logo Victoire\">
            </div>

            <div id=\"vic-login-form\">
                {% block fos_user_form_start %}{% endblock %}
                {% block fos_user_content %}{% endblock %}
                {% block fos_user_form_end %}{% endblock %}
            </div>
        </div>

        {% javascripts
            '@VictoireCoreBundle/Resources/public/js/constellations/TweenLite.min.js'
            '@VictoireCoreBundle/Resources/public/js/constellations/EasePack.min.js'
            '@VictoireCoreBundle/Resources/public/js/constellations/rAF.js'
            '@VictoireCoreBundle/Resources/public/js/constellations/constellations.js'
            '@VictoireCoreBundle/Resources/public/js/input-kaede/classie.js'
        %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}

        <script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( '.vic-input-kaede input.field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, '-filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, '-filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, '-filled' );
                    }
                }
            })();
        </script>
    </div>
{% endblock %}
{% endblock body %}
", "FOSUserBundle::layout.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/UserBundle/Resources/views/layout.html.twig");
    }
}
