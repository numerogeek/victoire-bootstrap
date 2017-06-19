<?php

/* VictoireCoreBundle::_modal.html.twig */
class __TwigTemplate_2782068c7d58e266037774ce350563b5e4cd886232e9eba7edd3de1c5c5f8289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modal_container' => array($this, 'block_modal_container'),
            'modal_container_classes' => array($this, 'block_modal_container_classes'),
            'modal_container_id' => array($this, 'block_modal_container_id'),
            'modal_header' => array($this, 'block_modal_header'),
            'modal_header_title_container' => array($this, 'block_modal_header_title_container'),
            'modal_header_title' => array($this, 'block_modal_header_title'),
            'modal_body' => array($this, 'block_modal_body'),
            'modal_body_sidebar' => array($this, 'block_modal_body_sidebar'),
            'modal_body_content' => array($this, 'block_modal_body_content'),
            'modal_footer' => array($this, 'block_modal_footer'),
            'modal_footer_content' => array($this, 'block_modal_footer_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07fdb4af45c0f5fa6b0dbc0052b50567db56434fb901ea32cb2c1ad9092bbd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fdb4af45c0f5fa6b0dbc0052b50567db56434fb901ea32cb2c1ad9092bbd2c->enter($__internal_07fdb4af45c0f5fa6b0dbc0052b50567db56434fb901ea32cb2c1ad9092bbd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle::_modal.html.twig"));

        $__internal_264dcc2d98b57bc9d7aec054c5c7038edc0d0333e5d4f9175e363e4c5cb379e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264dcc2d98b57bc9d7aec054c5c7038edc0d0333e5d4f9175e363e4c5cb379e6->enter($__internal_264dcc2d98b57bc9d7aec054c5c7038edc0d0333e5d4f9175e363e4c5cb379e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle::_modal.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('modal_container', $context, $blocks);
        
        $__internal_07fdb4af45c0f5fa6b0dbc0052b50567db56434fb901ea32cb2c1ad9092bbd2c->leave($__internal_07fdb4af45c0f5fa6b0dbc0052b50567db56434fb901ea32cb2c1ad9092bbd2c_prof);

        
        $__internal_264dcc2d98b57bc9d7aec054c5c7038edc0d0333e5d4f9175e363e4c5cb379e6->leave($__internal_264dcc2d98b57bc9d7aec054c5c7038edc0d0333e5d4f9175e363e4c5cb379e6_prof);

    }

    public function block_modal_container($context, array $blocks = array())
    {
        $__internal_1c9d649fdbff17efb7df740053ff0b6afda2884e0af03ede848016e4e47ed199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9d649fdbff17efb7df740053ff0b6afda2884e0af03ede848016e4e47ed199->enter($__internal_1c9d649fdbff17efb7df740053ff0b6afda2884e0af03ede848016e4e47ed199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container"));

        $__internal_f8723e359a21b04b287ef2a72d84c59bb6b688c9fc11a77b979516f8a97bf023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8723e359a21b04b287ef2a72d84c59bb6b688c9fc11a77b979516f8a97bf023->enter($__internal_f8723e359a21b04b287ef2a72d84c59bb6b688c9fc11a77b979516f8a97bf023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container"));

        // line 4
        echo "    <section class=\"";
        $this->displayBlock('modal_container_classes', $context, $blocks);
        echo "\" id=\"";
        $this->displayBlock('modal_container_id', $context, $blocks);
        echo "\">
        ";
        // line 5
        $this->displayBlock('modal_header', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('modal_body', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('modal_footer', $context, $blocks);
        // line 46
        echo "    </section>
";
        
        $__internal_f8723e359a21b04b287ef2a72d84c59bb6b688c9fc11a77b979516f8a97bf023->leave($__internal_f8723e359a21b04b287ef2a72d84c59bb6b688c9fc11a77b979516f8a97bf023_prof);

        
        $__internal_1c9d649fdbff17efb7df740053ff0b6afda2884e0af03ede848016e4e47ed199->leave($__internal_1c9d649fdbff17efb7df740053ff0b6afda2884e0af03ede848016e4e47ed199_prof);

    }

    // line 4
    public function block_modal_container_classes($context, array $blocks = array())
    {
        $__internal_15d5a5322f6ef3e7f434ca9952d2abbe62e52bf69002be8a6e5b1e9d8bea0790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d5a5322f6ef3e7f434ca9952d2abbe62e52bf69002be8a6e5b1e9d8bea0790->enter($__internal_15d5a5322f6ef3e7f434ca9952d2abbe62e52bf69002be8a6e5b1e9d8bea0790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $__internal_371ba2994a0d2e6ca1655c6023d2a6d65e227b3778753b37fb1c3482dcd864fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371ba2994a0d2e6ca1655c6023d2a6d65e227b3778753b37fb1c3482dcd864fc->enter($__internal_371ba2994a0d2e6ca1655c6023d2a6d65e227b3778753b37fb1c3482dcd864fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        echo "v-modal";
        
        $__internal_371ba2994a0d2e6ca1655c6023d2a6d65e227b3778753b37fb1c3482dcd864fc->leave($__internal_371ba2994a0d2e6ca1655c6023d2a6d65e227b3778753b37fb1c3482dcd864fc_prof);

        
        $__internal_15d5a5322f6ef3e7f434ca9952d2abbe62e52bf69002be8a6e5b1e9d8bea0790->leave($__internal_15d5a5322f6ef3e7f434ca9952d2abbe62e52bf69002be8a6e5b1e9d8bea0790_prof);

    }

    public function block_modal_container_id($context, array $blocks = array())
    {
        $__internal_8a1ec961d8fbeb444ecf503893cd9714956511553b87b4f68891dd73f44c4bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1ec961d8fbeb444ecf503893cd9714956511553b87b4f68891dd73f44c4bf8->enter($__internal_8a1ec961d8fbeb444ecf503893cd9714956511553b87b4f68891dd73f44c4bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_id"));

        $__internal_691b77e11b59f2b8757143a46289c12e1e1a5a96f0d4cdd704d45d8decd4bd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691b77e11b59f2b8757143a46289c12e1e1a5a96f0d4cdd704d45d8decd4bd8b->enter($__internal_691b77e11b59f2b8757143a46289c12e1e1a5a96f0d4cdd704d45d8decd4bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_id"));

        echo "vic-modal";
        
        $__internal_691b77e11b59f2b8757143a46289c12e1e1a5a96f0d4cdd704d45d8decd4bd8b->leave($__internal_691b77e11b59f2b8757143a46289c12e1e1a5a96f0d4cdd704d45d8decd4bd8b_prof);

        
        $__internal_8a1ec961d8fbeb444ecf503893cd9714956511553b87b4f68891dd73f44c4bf8->leave($__internal_8a1ec961d8fbeb444ecf503893cd9714956511553b87b4f68891dd73f44c4bf8_prof);

    }

    // line 5
    public function block_modal_header($context, array $blocks = array())
    {
        $__internal_74e3b59f2e2bc8f5fa1905a8e5db0f5a0399dabcdcd6ce230b0ddb5431d6facd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e3b59f2e2bc8f5fa1905a8e5db0f5a0399dabcdcd6ce230b0ddb5431d6facd->enter($__internal_74e3b59f2e2bc8f5fa1905a8e5db0f5a0399dabcdcd6ce230b0ddb5431d6facd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header"));

        $__internal_6a70af9d0a9f635874f902b55335866e6a1f4fc999596660c1331204f43538ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a70af9d0a9f635874f902b55335866e6a1f4fc999596660c1331204f43538ec->enter($__internal_6a70af9d0a9f635874f902b55335866e6a1f4fc999596660c1331204f43538ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header"));

        // line 6
        echo "            <div class=\"v-modal__header\">
                <nav class=\"v-navbar v-navbar--grey\">
                    <div class=\"v-container v-container--fluid\">
                        <div class=\"v-flex-grid\">
                            <div class=\"v-flex-col\">
                                ";
        // line 11
        $this->displayBlock('modal_header_title_container', $context, $blocks);
        // line 14
        echo "                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        ";
        
        $__internal_6a70af9d0a9f635874f902b55335866e6a1f4fc999596660c1331204f43538ec->leave($__internal_6a70af9d0a9f635874f902b55335866e6a1f4fc999596660c1331204f43538ec_prof);

        
        $__internal_74e3b59f2e2bc8f5fa1905a8e5db0f5a0399dabcdcd6ce230b0ddb5431d6facd->leave($__internal_74e3b59f2e2bc8f5fa1905a8e5db0f5a0399dabcdcd6ce230b0ddb5431d6facd_prof);

    }

    // line 11
    public function block_modal_header_title_container($context, array $blocks = array())
    {
        $__internal_076221417cc539786ab130ca5c1decd9a0882c1be5fb0932258d424c676607d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076221417cc539786ab130ca5c1decd9a0882c1be5fb0932258d424c676607d7->enter($__internal_076221417cc539786ab130ca5c1decd9a0882c1be5fb0932258d424c676607d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title_container"));

        $__internal_b0c1a39e2e1b2192a97c1895935b1f4d6cd32f3ff2dc0e978aa2b641e9ff1c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c1a39e2e1b2192a97c1895935b1f4d6cd32f3ff2dc0e978aa2b641e9ff1c8f->enter($__internal_b0c1a39e2e1b2192a97c1895935b1f4d6cd32f3ff2dc0e978aa2b641e9ff1c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title_container"));

        // line 12
        echo "                                    <h2 class=\"v-modal__heading\">";
        $this->displayBlock('modal_header_title', $context, $blocks);
        echo "</h2>
                                ";
        
        $__internal_b0c1a39e2e1b2192a97c1895935b1f4d6cd32f3ff2dc0e978aa2b641e9ff1c8f->leave($__internal_b0c1a39e2e1b2192a97c1895935b1f4d6cd32f3ff2dc0e978aa2b641e9ff1c8f_prof);

        
        $__internal_076221417cc539786ab130ca5c1decd9a0882c1be5fb0932258d424c676607d7->leave($__internal_076221417cc539786ab130ca5c1decd9a0882c1be5fb0932258d424c676607d7_prof);

    }

    public function block_modal_header_title($context, array $blocks = array())
    {
        $__internal_fce8a2d39511f80e14213998791dabab1663194f8d3ad93850b21c61167aa915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce8a2d39511f80e14213998791dabab1663194f8d3ad93850b21c61167aa915->enter($__internal_fce8a2d39511f80e14213998791dabab1663194f8d3ad93850b21c61167aa915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        $__internal_db760f118cba44ff7504a85d78d7ff6f6122828fd7fa58976d29eecdebf02f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db760f118cba44ff7504a85d78d7ff6f6122828fd7fa58976d29eecdebf02f63->enter($__internal_db760f118cba44ff7504a85d78d7ff6f6122828fd7fa58976d29eecdebf02f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        
        $__internal_db760f118cba44ff7504a85d78d7ff6f6122828fd7fa58976d29eecdebf02f63->leave($__internal_db760f118cba44ff7504a85d78d7ff6f6122828fd7fa58976d29eecdebf02f63_prof);

        
        $__internal_fce8a2d39511f80e14213998791dabab1663194f8d3ad93850b21c61167aa915->leave($__internal_fce8a2d39511f80e14213998791dabab1663194f8d3ad93850b21c61167aa915_prof);

    }

    // line 21
    public function block_modal_body($context, array $blocks = array())
    {
        $__internal_46ae90188ddb7a2ae7f4d5988904cf6a6da30b008ef4535d0453d0597c8435ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ae90188ddb7a2ae7f4d5988904cf6a6da30b008ef4535d0453d0597c8435ba->enter($__internal_46ae90188ddb7a2ae7f4d5988904cf6a6da30b008ef4535d0453d0597c8435ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body"));

        $__internal_486b5fecea56feea5979dff7441d9f85b29c39109fca4d2e888e23eed89e916a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486b5fecea56feea5979dff7441d9f85b29c39109fca4d2e888e23eed89e916a->enter($__internal_486b5fecea56feea5979dff7441d9f85b29c39109fca4d2e888e23eed89e916a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body"));

        // line 22
        echo "            <div class=\"v-modal__body\">
                <div>
                    ";
        // line 24
        $this->displayBlock('modal_body_sidebar', $context, $blocks);
        // line 25
        echo "                </div>

                <div class=\"v-modal__content\">
                    <div class=\"v-modal__content-inner\">
                        <div class=\"v-container\">
                            ";
        // line 30
        $this->displayBlock('modal_body_content', $context, $blocks);
        // line 31
        echo "                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_486b5fecea56feea5979dff7441d9f85b29c39109fca4d2e888e23eed89e916a->leave($__internal_486b5fecea56feea5979dff7441d9f85b29c39109fca4d2e888e23eed89e916a_prof);

        
        $__internal_46ae90188ddb7a2ae7f4d5988904cf6a6da30b008ef4535d0453d0597c8435ba->leave($__internal_46ae90188ddb7a2ae7f4d5988904cf6a6da30b008ef4535d0453d0597c8435ba_prof);

    }

    // line 24
    public function block_modal_body_sidebar($context, array $blocks = array())
    {
        $__internal_4d8191ee7d943e117bf20b3faa21880fdf01792affc407f13a6460045c3ca7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8191ee7d943e117bf20b3faa21880fdf01792affc407f13a6460045c3ca7a7->enter($__internal_4d8191ee7d943e117bf20b3faa21880fdf01792affc407f13a6460045c3ca7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_sidebar"));

        $__internal_0192c95db7f6ab8d38d733f117c220c233492f3612ed585405c741a49e9d8368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0192c95db7f6ab8d38d733f117c220c233492f3612ed585405c741a49e9d8368->enter($__internal_0192c95db7f6ab8d38d733f117c220c233492f3612ed585405c741a49e9d8368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_sidebar"));

        
        $__internal_0192c95db7f6ab8d38d733f117c220c233492f3612ed585405c741a49e9d8368->leave($__internal_0192c95db7f6ab8d38d733f117c220c233492f3612ed585405c741a49e9d8368_prof);

        
        $__internal_4d8191ee7d943e117bf20b3faa21880fdf01792affc407f13a6460045c3ca7a7->leave($__internal_4d8191ee7d943e117bf20b3faa21880fdf01792affc407f13a6460045c3ca7a7_prof);

    }

    // line 30
    public function block_modal_body_content($context, array $blocks = array())
    {
        $__internal_cba7de7ef04ba0f6ed4f36e9844445d627e531c5c51a2fe28e21dc4ed1ec06e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba7de7ef04ba0f6ed4f36e9844445d627e531c5c51a2fe28e21dc4ed1ec06e0->enter($__internal_cba7de7ef04ba0f6ed4f36e9844445d627e531c5c51a2fe28e21dc4ed1ec06e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        $__internal_d872a4d74bf6fcc36ff0faa4c9d92a8d4898e5830371a3564723bd8468ebe666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d872a4d74bf6fcc36ff0faa4c9d92a8d4898e5830371a3564723bd8468ebe666->enter($__internal_d872a4d74bf6fcc36ff0faa4c9d92a8d4898e5830371a3564723bd8468ebe666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        
        $__internal_d872a4d74bf6fcc36ff0faa4c9d92a8d4898e5830371a3564723bd8468ebe666->leave($__internal_d872a4d74bf6fcc36ff0faa4c9d92a8d4898e5830371a3564723bd8468ebe666_prof);

        
        $__internal_cba7de7ef04ba0f6ed4f36e9844445d627e531c5c51a2fe28e21dc4ed1ec06e0->leave($__internal_cba7de7ef04ba0f6ed4f36e9844445d627e531c5c51a2fe28e21dc4ed1ec06e0_prof);

    }

    // line 37
    public function block_modal_footer($context, array $blocks = array())
    {
        $__internal_6c702628aaac808b89a66846e63a9d32c13c14368ef148df181a6802f46f49bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c702628aaac808b89a66846e63a9d32c13c14368ef148df181a6802f46f49bc->enter($__internal_6c702628aaac808b89a66846e63a9d32c13c14368ef148df181a6802f46f49bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer"));

        $__internal_1227e0f12ec3d866c549f0e67b87123777532ce76797011d9e92c496e7abd0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1227e0f12ec3d866c549f0e67b87123777532ce76797011d9e92c496e7abd0d8->enter($__internal_1227e0f12ec3d866c549f0e67b87123777532ce76797011d9e92c496e7abd0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer"));

        // line 38
        echo "            <div class=\"v-modal__footer\">
                <nav class=\"v-navbar\">
                    <div class=\"v-container\">
                        ";
        // line 41
        $this->displayBlock('modal_footer_content', $context, $blocks);
        // line 42
        echo "                    </div>
                </nav>
            </div>
        ";
        
        $__internal_1227e0f12ec3d866c549f0e67b87123777532ce76797011d9e92c496e7abd0d8->leave($__internal_1227e0f12ec3d866c549f0e67b87123777532ce76797011d9e92c496e7abd0d8_prof);

        
        $__internal_6c702628aaac808b89a66846e63a9d32c13c14368ef148df181a6802f46f49bc->leave($__internal_6c702628aaac808b89a66846e63a9d32c13c14368ef148df181a6802f46f49bc_prof);

    }

    // line 41
    public function block_modal_footer_content($context, array $blocks = array())
    {
        $__internal_6e1d25981ec5fce7f8a22523b761c8a5b5b229092ed061137e6556d8e9a28b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1d25981ec5fce7f8a22523b761c8a5b5b229092ed061137e6556d8e9a28b1a->enter($__internal_6e1d25981ec5fce7f8a22523b761c8a5b5b229092ed061137e6556d8e9a28b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer_content"));

        $__internal_d2fe346756f467ce856579ab851cca6ba851d533259942763e91650a4f14da45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fe346756f467ce856579ab851cca6ba851d533259942763e91650a4f14da45->enter($__internal_d2fe346756f467ce856579ab851cca6ba851d533259942763e91650a4f14da45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer_content"));

        
        $__internal_d2fe346756f467ce856579ab851cca6ba851d533259942763e91650a4f14da45->leave($__internal_d2fe346756f467ce856579ab851cca6ba851d533259942763e91650a4f14da45_prof);

        
        $__internal_6e1d25981ec5fce7f8a22523b761c8a5b5b229092ed061137e6556d8e9a28b1a->leave($__internal_6e1d25981ec5fce7f8a22523b761c8a5b5b229092ed061137e6556d8e9a28b1a_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle::_modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 41,  281 => 42,  279 => 41,  274 => 38,  265 => 37,  248 => 30,  231 => 24,  217 => 31,  215 => 30,  208 => 25,  206 => 24,  202 => 22,  193 => 21,  164 => 12,  155 => 11,  140 => 14,  138 => 11,  131 => 6,  122 => 5,  87 => 4,  76 => 46,  74 => 37,  71 => 36,  69 => 21,  66 => 20,  64 => 5,  57 => 4,  39 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}

{% block modal_container %}
    <section class=\"{% block modal_container_classes %}v-modal{% endblock modal_container_classes %}\" id=\"{% block modal_container_id %}vic-modal{% endblock %}\">
        {% block modal_header %}
            <div class=\"v-modal__header\">
                <nav class=\"v-navbar v-navbar--grey\">
                    <div class=\"v-container v-container--fluid\">
                        <div class=\"v-flex-grid\">
                            <div class=\"v-flex-col\">
                                {% block modal_header_title_container %}
                                    <h2 class=\"v-modal__heading\">{% block modal_header_title %}{% endblock %}</h2>
                                {% endblock modal_header_title_container %}
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        {% endblock modal_header %}

        {% block modal_body %}
            <div class=\"v-modal__body\">
                <div>
                    {% block modal_body_sidebar %}{% endblock %}
                </div>

                <div class=\"v-modal__content\">
                    <div class=\"v-modal__content-inner\">
                        <div class=\"v-container\">
                            {% block modal_body_content %}{% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        {% endblock modal_body %}

        {% block modal_footer %}
            <div class=\"v-modal__footer\">
                <nav class=\"v-navbar\">
                    <div class=\"v-container\">
                        {% block modal_footer_content %}{% endblock %}
                    </div>
                </nav>
            </div>
        {% endblock modal_footer %}
    </section>
{% endblock modal_container %}
", "VictoireCoreBundle::_modal.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/_modal.html.twig");
    }
}
