<?php

/* VictoireCoreBundle:Layout:base.html.twig */
class __TwigTemplate_53fd048f0b1ac859932efd0176d1887d81b62bba2956190edb05985a9d5f9976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attr' => array($this, 'block_html_attr'),
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'head_script' => array($this, 'block_head_script'),
            'head_style' => array($this, 'block_head_style'),
            'head_icons' => array($this, 'block_head_icons'),
            'container_attributes' => array($this, 'block_container_attributes'),
            'container_class' => array($this, 'block_container_class'),
            'container_attr' => array($this, 'block_container_attr'),
            'victoire_ui' => array($this, 'block_victoire_ui'),
            'body' => array($this, 'block_body'),
            'body_header' => array($this, 'block_body_header'),
            'body_content' => array($this, 'block_body_content'),
            'body_footer' => array($this, 'block_body_footer'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ce4428b557c1707443694b81ebdb152d5fd99fb55ed5cc2d85fa4d7ca0af97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce4428b557c1707443694b81ebdb152d5fd99fb55ed5cc2d85fa4d7ca0af97c->enter($__internal_1ce4428b557c1707443694b81ebdb152d5fd99fb55ed5cc2d85fa4d7ca0af97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Layout:base.html.twig"));

        $__internal_b94a9c61013d9f6b9ef75613a3dbd570e64fb36eb0f1520aee61e18025175f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94a9c61013d9f6b9ef75613a3dbd570e64fb36eb0f1520aee61e18025175f52->enter($__internal_b94a9c61013d9f6b9ef75613a3dbd570e64fb36eb0f1520aee61e18025175f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Layout:base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html ";
        // line 3
        $this->displayBlock('html_attr', $context, $blocks);
        echo ">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body ";
        // line 12
        $this->displayBlock('container_attributes', $context, $blocks);
        echo " class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\" ";
        $this->displayBlock('container_attr', $context, $blocks);
        echo ">
        ";
        // line 13
        $this->displayBlock('victoire_ui', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('foot_script', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_1ce4428b557c1707443694b81ebdb152d5fd99fb55ed5cc2d85fa4d7ca0af97c->leave($__internal_1ce4428b557c1707443694b81ebdb152d5fd99fb55ed5cc2d85fa4d7ca0af97c_prof);

        
        $__internal_b94a9c61013d9f6b9ef75613a3dbd570e64fb36eb0f1520aee61e18025175f52->leave($__internal_b94a9c61013d9f6b9ef75613a3dbd570e64fb36eb0f1520aee61e18025175f52_prof);

    }

    // line 3
    public function block_html_attr($context, array $blocks = array())
    {
        $__internal_60618de5ffe6ae94b23e1a3e6510964b961e55c6050a8431d31b9f96eb8897ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60618de5ffe6ae94b23e1a3e6510964b961e55c6050a8431d31b9f96eb8897ee->enter($__internal_60618de5ffe6ae94b23e1a3e6510964b961e55c6050a8431d31b9f96eb8897ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attr"));

        $__internal_517bcad9ba50c0a2450307bb94ab1e646383e0047056d74176a3bc970b82083c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517bcad9ba50c0a2450307bb94ab1e646383e0047056d74176a3bc970b82083c->enter($__internal_517bcad9ba50c0a2450307bb94ab1e646383e0047056d74176a3bc970b82083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attr"));

        
        $__internal_517bcad9ba50c0a2450307bb94ab1e646383e0047056d74176a3bc970b82083c->leave($__internal_517bcad9ba50c0a2450307bb94ab1e646383e0047056d74176a3bc970b82083c_prof);

        
        $__internal_60618de5ffe6ae94b23e1a3e6510964b961e55c6050a8431d31b9f96eb8897ee->leave($__internal_60618de5ffe6ae94b23e1a3e6510964b961e55c6050a8431d31b9f96eb8897ee_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_b26cfa24361a18b38655b26ff6123a173e60b5662800d544b7cef44d6bd79c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26cfa24361a18b38655b26ff6123a173e60b5662800d544b7cef44d6bd79c1e->enter($__internal_b26cfa24361a18b38655b26ff6123a173e60b5662800d544b7cef44d6bd79c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae5f4fc790fd49b1d3cff17b316ddff23676d6f8de0cc1472ce96a9b1f05bfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5f4fc790fd49b1d3cff17b316ddff23676d6f8de0cc1472ce96a9b1f05bfcb->enter($__internal_ae5f4fc790fd49b1d3cff17b316ddff23676d6f8de0cc1472ce96a9b1f05bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "            ";
        $this->displayBlock('meta', $context, $blocks);
        // line 7
        echo "            ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 8
        echo "            ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 9
        echo "            ";
        $this->displayBlock('head_icons', $context, $blocks);
        // line 10
        echo "        ";
        
        $__internal_ae5f4fc790fd49b1d3cff17b316ddff23676d6f8de0cc1472ce96a9b1f05bfcb->leave($__internal_ae5f4fc790fd49b1d3cff17b316ddff23676d6f8de0cc1472ce96a9b1f05bfcb_prof);

        
        $__internal_b26cfa24361a18b38655b26ff6123a173e60b5662800d544b7cef44d6bd79c1e->leave($__internal_b26cfa24361a18b38655b26ff6123a173e60b5662800d544b7cef44d6bd79c1e_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2320901feb9549f8dd39bae50c5b2f307ced06dbc505e45e179f0283bf17417e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2320901feb9549f8dd39bae50c5b2f307ced06dbc505e45e179f0283bf17417e->enter($__internal_2320901feb9549f8dd39bae50c5b2f307ced06dbc505e45e179f0283bf17417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_2131644790f535b359d380e51a4be96ec66b44ef020441cf6dcd8530e0f0dada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2131644790f535b359d380e51a4be96ec66b44ef020441cf6dcd8530e0f0dada->enter($__internal_2131644790f535b359d380e51a4be96ec66b44ef020441cf6dcd8530e0f0dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_2131644790f535b359d380e51a4be96ec66b44ef020441cf6dcd8530e0f0dada->leave($__internal_2131644790f535b359d380e51a4be96ec66b44ef020441cf6dcd8530e0f0dada_prof);

        
        $__internal_2320901feb9549f8dd39bae50c5b2f307ced06dbc505e45e179f0283bf17417e->leave($__internal_2320901feb9549f8dd39bae50c5b2f307ced06dbc505e45e179f0283bf17417e_prof);

    }

    // line 7
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_098fd723f817544142074dba1cb3a792272d500f1e52044598884d950ca8353d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098fd723f817544142074dba1cb3a792272d500f1e52044598884d950ca8353d->enter($__internal_098fd723f817544142074dba1cb3a792272d500f1e52044598884d950ca8353d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_bdd5a416b88b2824d0d88199c005385c87270ca5578d50ebe70170884dbc4654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd5a416b88b2824d0d88199c005385c87270ca5578d50ebe70170884dbc4654->enter($__internal_bdd5a416b88b2824d0d88199c005385c87270ca5578d50ebe70170884dbc4654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        
        $__internal_bdd5a416b88b2824d0d88199c005385c87270ca5578d50ebe70170884dbc4654->leave($__internal_bdd5a416b88b2824d0d88199c005385c87270ca5578d50ebe70170884dbc4654_prof);

        
        $__internal_098fd723f817544142074dba1cb3a792272d500f1e52044598884d950ca8353d->leave($__internal_098fd723f817544142074dba1cb3a792272d500f1e52044598884d950ca8353d_prof);

    }

    // line 8
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_017741907525bcba4e6b4997df37cd1f2b7acb25f40482c7435562a4de91e435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017741907525bcba4e6b4997df37cd1f2b7acb25f40482c7435562a4de91e435->enter($__internal_017741907525bcba4e6b4997df37cd1f2b7acb25f40482c7435562a4de91e435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        $__internal_1df6e303a62bb161f8e5c3e4f2a4e70fc0b415190433b75b3d4139b2da31336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df6e303a62bb161f8e5c3e4f2a4e70fc0b415190433b75b3d4139b2da31336c->enter($__internal_1df6e303a62bb161f8e5c3e4f2a4e70fc0b415190433b75b3d4139b2da31336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        
        $__internal_1df6e303a62bb161f8e5c3e4f2a4e70fc0b415190433b75b3d4139b2da31336c->leave($__internal_1df6e303a62bb161f8e5c3e4f2a4e70fc0b415190433b75b3d4139b2da31336c_prof);

        
        $__internal_017741907525bcba4e6b4997df37cd1f2b7acb25f40482c7435562a4de91e435->leave($__internal_017741907525bcba4e6b4997df37cd1f2b7acb25f40482c7435562a4de91e435_prof);

    }

    // line 9
    public function block_head_icons($context, array $blocks = array())
    {
        $__internal_0fd804818431a3e650b4ba610a965d2e7198a00bc3818dda4b7d3155576b606c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd804818431a3e650b4ba610a965d2e7198a00bc3818dda4b7d3155576b606c->enter($__internal_0fd804818431a3e650b4ba610a965d2e7198a00bc3818dda4b7d3155576b606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_icons"));

        $__internal_cb83293a4b4e5e9b1b0d872269bdf3f42c6f2b36938050a7f9fc90bdf3d3afc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb83293a4b4e5e9b1b0d872269bdf3f42c6f2b36938050a7f9fc90bdf3d3afc6->enter($__internal_cb83293a4b4e5e9b1b0d872269bdf3f42c6f2b36938050a7f9fc90bdf3d3afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_icons"));

        
        $__internal_cb83293a4b4e5e9b1b0d872269bdf3f42c6f2b36938050a7f9fc90bdf3d3afc6->leave($__internal_cb83293a4b4e5e9b1b0d872269bdf3f42c6f2b36938050a7f9fc90bdf3d3afc6_prof);

        
        $__internal_0fd804818431a3e650b4ba610a965d2e7198a00bc3818dda4b7d3155576b606c->leave($__internal_0fd804818431a3e650b4ba610a965d2e7198a00bc3818dda4b7d3155576b606c_prof);

    }

    // line 12
    public function block_container_attributes($context, array $blocks = array())
    {
        $__internal_9a09d1e3dc0d536854d2a5b8a4027ca48ee9eaa668f9b6fea237319b73b8ab58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a09d1e3dc0d536854d2a5b8a4027ca48ee9eaa668f9b6fea237319b73b8ab58->enter($__internal_9a09d1e3dc0d536854d2a5b8a4027ca48ee9eaa668f9b6fea237319b73b8ab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attributes"));

        $__internal_2d7e298514c0f0c15c2b186965f7323c76769bcf31cafb5bd8aa2382123bc822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7e298514c0f0c15c2b186965f7323c76769bcf31cafb5bd8aa2382123bc822->enter($__internal_2d7e298514c0f0c15c2b186965f7323c76769bcf31cafb5bd8aa2382123bc822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attributes"));

        
        $__internal_2d7e298514c0f0c15c2b186965f7323c76769bcf31cafb5bd8aa2382123bc822->leave($__internal_2d7e298514c0f0c15c2b186965f7323c76769bcf31cafb5bd8aa2382123bc822_prof);

        
        $__internal_9a09d1e3dc0d536854d2a5b8a4027ca48ee9eaa668f9b6fea237319b73b8ab58->leave($__internal_9a09d1e3dc0d536854d2a5b8a4027ca48ee9eaa668f9b6fea237319b73b8ab58_prof);

    }

    public function block_container_class($context, array $blocks = array())
    {
        $__internal_2da21baccba04e019f2aab02e9e1e6dcf830942ce1ca873a47ad9a5e337a1855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da21baccba04e019f2aab02e9e1e6dcf830942ce1ca873a47ad9a5e337a1855->enter($__internal_2da21baccba04e019f2aab02e9e1e6dcf830942ce1ca873a47ad9a5e337a1855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        $__internal_0e24131d5d4f2c5d07b62b3c0095e30ee1667f612b4f13a580a2398522301bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e24131d5d4f2c5d07b62b3c0095e30ee1667f612b4f13a580a2398522301bba->enter($__internal_0e24131d5d4f2c5d07b62b3c0095e30ee1667f612b4f13a580a2398522301bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        
        $__internal_0e24131d5d4f2c5d07b62b3c0095e30ee1667f612b4f13a580a2398522301bba->leave($__internal_0e24131d5d4f2c5d07b62b3c0095e30ee1667f612b4f13a580a2398522301bba_prof);

        
        $__internal_2da21baccba04e019f2aab02e9e1e6dcf830942ce1ca873a47ad9a5e337a1855->leave($__internal_2da21baccba04e019f2aab02e9e1e6dcf830942ce1ca873a47ad9a5e337a1855_prof);

    }

    public function block_container_attr($context, array $blocks = array())
    {
        $__internal_91a34ec59dfaf3665e78665976a3904a066e54737e6fb2cfd55057278fa46c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a34ec59dfaf3665e78665976a3904a066e54737e6fb2cfd55057278fa46c38->enter($__internal_91a34ec59dfaf3665e78665976a3904a066e54737e6fb2cfd55057278fa46c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attr"));

        $__internal_526a13ccd639f1ee5c1a6f2920315887722e6b060c471dfde94684845ec5e137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526a13ccd639f1ee5c1a6f2920315887722e6b060c471dfde94684845ec5e137->enter($__internal_526a13ccd639f1ee5c1a6f2920315887722e6b060c471dfde94684845ec5e137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_attr"));

        
        $__internal_526a13ccd639f1ee5c1a6f2920315887722e6b060c471dfde94684845ec5e137->leave($__internal_526a13ccd639f1ee5c1a6f2920315887722e6b060c471dfde94684845ec5e137_prof);

        
        $__internal_91a34ec59dfaf3665e78665976a3904a066e54737e6fb2cfd55057278fa46c38->leave($__internal_91a34ec59dfaf3665e78665976a3904a066e54737e6fb2cfd55057278fa46c38_prof);

    }

    // line 13
    public function block_victoire_ui($context, array $blocks = array())
    {
        $__internal_5cfdeaa52d34b295fbdf94297cd8895fb8f0ddc9fd212f9dd2909026762759c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfdeaa52d34b295fbdf94297cd8895fb8f0ddc9fd212f9dd2909026762759c8->enter($__internal_5cfdeaa52d34b295fbdf94297cd8895fb8f0ddc9fd212f9dd2909026762759c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "victoire_ui"));

        $__internal_9c165633b717a26506886d43d151d6d347ae846d6d9b2e08a981a18b941e382e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c165633b717a26506886d43d151d6d347ae846d6d9b2e08a981a18b941e382e->enter($__internal_9c165633b717a26506886d43d151d6d347ae846d6d9b2e08a981a18b941e382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "victoire_ui"));

        
        $__internal_9c165633b717a26506886d43d151d6d347ae846d6d9b2e08a981a18b941e382e->leave($__internal_9c165633b717a26506886d43d151d6d347ae846d6d9b2e08a981a18b941e382e_prof);

        
        $__internal_5cfdeaa52d34b295fbdf94297cd8895fb8f0ddc9fd212f9dd2909026762759c8->leave($__internal_5cfdeaa52d34b295fbdf94297cd8895fb8f0ddc9fd212f9dd2909026762759c8_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_63b96d37ffb41578abade1c5a85418f6f6255ba4836e565c310c0a630d3ec2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b96d37ffb41578abade1c5a85418f6f6255ba4836e565c310c0a630d3ec2e3->enter($__internal_63b96d37ffb41578abade1c5a85418f6f6255ba4836e565c310c0a630d3ec2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2cefd3692ee497d9c124489e1f06a4bbe0f7687be1fafe69a14017ccd884f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cefd3692ee497d9c124489e1f06a4bbe0f7687be1fafe69a14017ccd884f3e->enter($__internal_d2cefd3692ee497d9c124489e1f06a4bbe0f7687be1fafe69a14017ccd884f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "            ";
        $this->displayBlock('body_header', $context, $blocks);
        // line 16
        echo "            ";
        $this->displayBlock('body_content', $context, $blocks);
        // line 17
        echo "            ";
        $this->displayBlock('body_footer', $context, $blocks);
        // line 18
        echo "        ";
        
        $__internal_d2cefd3692ee497d9c124489e1f06a4bbe0f7687be1fafe69a14017ccd884f3e->leave($__internal_d2cefd3692ee497d9c124489e1f06a4bbe0f7687be1fafe69a14017ccd884f3e_prof);

        
        $__internal_63b96d37ffb41578abade1c5a85418f6f6255ba4836e565c310c0a630d3ec2e3->leave($__internal_63b96d37ffb41578abade1c5a85418f6f6255ba4836e565c310c0a630d3ec2e3_prof);

    }

    // line 15
    public function block_body_header($context, array $blocks = array())
    {
        $__internal_60d409b8b36ad0e91f9d219290aec95dfbac90653a3b39a52af04fe618f1db12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d409b8b36ad0e91f9d219290aec95dfbac90653a3b39a52af04fe618f1db12->enter($__internal_60d409b8b36ad0e91f9d219290aec95dfbac90653a3b39a52af04fe618f1db12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_header"));

        $__internal_7a59ed095e9fcbcd2f4d6e69748370563181c8180070dc2aab68702e8e4b4bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a59ed095e9fcbcd2f4d6e69748370563181c8180070dc2aab68702e8e4b4bf0->enter($__internal_7a59ed095e9fcbcd2f4d6e69748370563181c8180070dc2aab68702e8e4b4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_header"));

        
        $__internal_7a59ed095e9fcbcd2f4d6e69748370563181c8180070dc2aab68702e8e4b4bf0->leave($__internal_7a59ed095e9fcbcd2f4d6e69748370563181c8180070dc2aab68702e8e4b4bf0_prof);

        
        $__internal_60d409b8b36ad0e91f9d219290aec95dfbac90653a3b39a52af04fe618f1db12->leave($__internal_60d409b8b36ad0e91f9d219290aec95dfbac90653a3b39a52af04fe618f1db12_prof);

    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_98256330f9f9a90151699a67696444a8e44c7a8cbd9e6daeceb1e63bf51113e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98256330f9f9a90151699a67696444a8e44c7a8cbd9e6daeceb1e63bf51113e5->enter($__internal_98256330f9f9a90151699a67696444a8e44c7a8cbd9e6daeceb1e63bf51113e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_2b408abe1af0218542852ebae0b0bb162b83df2d7fe91c1491f48886aa605d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b408abe1af0218542852ebae0b0bb162b83df2d7fe91c1491f48886aa605d6a->enter($__internal_2b408abe1af0218542852ebae0b0bb162b83df2d7fe91c1491f48886aa605d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        
        $__internal_2b408abe1af0218542852ebae0b0bb162b83df2d7fe91c1491f48886aa605d6a->leave($__internal_2b408abe1af0218542852ebae0b0bb162b83df2d7fe91c1491f48886aa605d6a_prof);

        
        $__internal_98256330f9f9a90151699a67696444a8e44c7a8cbd9e6daeceb1e63bf51113e5->leave($__internal_98256330f9f9a90151699a67696444a8e44c7a8cbd9e6daeceb1e63bf51113e5_prof);

    }

    // line 17
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_9863d8dac2370ef6a242ee734d9b5de2fb74b160c48659d4ede5745ad49156c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9863d8dac2370ef6a242ee734d9b5de2fb74b160c48659d4ede5745ad49156c1->enter($__internal_9863d8dac2370ef6a242ee734d9b5de2fb74b160c48659d4ede5745ad49156c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_94286f66d890eedfe8cb548cd9ade7419f05322bd2516e61f0298a0f17916aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94286f66d890eedfe8cb548cd9ade7419f05322bd2516e61f0298a0f17916aca->enter($__internal_94286f66d890eedfe8cb548cd9ade7419f05322bd2516e61f0298a0f17916aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        
        $__internal_94286f66d890eedfe8cb548cd9ade7419f05322bd2516e61f0298a0f17916aca->leave($__internal_94286f66d890eedfe8cb548cd9ade7419f05322bd2516e61f0298a0f17916aca_prof);

        
        $__internal_9863d8dac2370ef6a242ee734d9b5de2fb74b160c48659d4ede5745ad49156c1->leave($__internal_9863d8dac2370ef6a242ee734d9b5de2fb74b160c48659d4ede5745ad49156c1_prof);

    }

    // line 19
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_9a3b2e5d997c8b404ab8bcfe4bf91f14e0106cd92154852e674f9544af345a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3b2e5d997c8b404ab8bcfe4bf91f14e0106cd92154852e674f9544af345a1e->enter($__internal_9a3b2e5d997c8b404ab8bcfe4bf91f14e0106cd92154852e674f9544af345a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        $__internal_0513afc2820641163d89c4b5995a53b7ab3dfa99c03138db734cf9eb82fd39c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0513afc2820641163d89c4b5995a53b7ab3dfa99c03138db734cf9eb82fd39c7->enter($__internal_0513afc2820641163d89c4b5995a53b7ab3dfa99c03138db734cf9eb82fd39c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        
        $__internal_0513afc2820641163d89c4b5995a53b7ab3dfa99c03138db734cf9eb82fd39c7->leave($__internal_0513afc2820641163d89c4b5995a53b7ab3dfa99c03138db734cf9eb82fd39c7_prof);

        
        $__internal_9a3b2e5d997c8b404ab8bcfe4bf91f14e0106cd92154852e674f9544af345a1e->leave($__internal_9a3b2e5d997c8b404ab8bcfe4bf91f14e0106cd92154852e674f9544af345a1e_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle:Layout:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  342 => 19,  325 => 17,  308 => 16,  291 => 15,  281 => 18,  278 => 17,  275 => 16,  272 => 15,  263 => 14,  246 => 13,  197 => 12,  180 => 9,  163 => 8,  146 => 7,  129 => 6,  119 => 10,  116 => 9,  113 => 8,  110 => 7,  107 => 6,  98 => 5,  81 => 3,  69 => 20,  66 => 19,  63 => 14,  61 => 13,  53 => 12,  50 => 11,  48 => 5,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}
<!DOCTYPE html>
<html {% block html_attr %}{% endblock %}>
    <head>
        {% block head %}
            {% block meta %}{% endblock %}
            {% block head_script %}{% endblock %}
            {% block head_style %}{% endblock %}
            {% block head_icons %}{% endblock %}
        {% endblock head %}
    </head>
    <body {% block container_attributes %}{% endblock %} class=\"{% block container_class %}{% endblock %}\" {% block container_attr %}{% endblock %}>
        {% block victoire_ui %}{% endblock %}
        {% block body %}
            {% block body_header %}{% endblock %}
            {% block body_content %}{% endblock %}
            {% block body_footer %}{% endblock %}
        {% endblock body %}
        {% block foot_script %}{% endblock %}
    </body>
</html>
", "VictoireCoreBundle:Layout:base.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/Layout/base.html.twig");
    }
}
