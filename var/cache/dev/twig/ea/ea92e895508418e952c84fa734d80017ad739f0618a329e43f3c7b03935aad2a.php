<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_73f4b099a4864cbcaf7bc6330b969e5d160aa9ef15bfe85e73c3a800849c247c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dfef05a1507866d8f80d17a8efa53d363f00769eaab481238c34a116730e6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfef05a1507866d8f80d17a8efa53d363f00769eaab481238c34a116730e6e2->enter($__internal_3dfef05a1507866d8f80d17a8efa53d363f00769eaab481238c34a116730e6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $__internal_b5fcd47c3b23a718b06fcff6c115f3764c0983d698191cd3987341191144947a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fcd47c3b23a718b06fcff6c115f3764c0983d698191cd3987341191144947a->enter($__internal_b5fcd47c3b23a718b06fcff6c115f3764c0983d698191cd3987341191144947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dfef05a1507866d8f80d17a8efa53d363f00769eaab481238c34a116730e6e2->leave($__internal_3dfef05a1507866d8f80d17a8efa53d363f00769eaab481238c34a116730e6e2_prof);

        
        $__internal_b5fcd47c3b23a718b06fcff6c115f3764c0983d698191cd3987341191144947a->leave($__internal_b5fcd47c3b23a718b06fcff6c115f3764c0983d698191cd3987341191144947a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d0a4b86f55efef4e9b24806579166b4456f65f25cf0dacdc8ddd614f5038f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0a4b86f55efef4e9b24806579166b4456f65f25cf0dacdc8ddd614f5038f1f->enter($__internal_4d0a4b86f55efef4e9b24806579166b4456f65f25cf0dacdc8ddd614f5038f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6caa5584b5cce54ff4310a73ebfd6a8d9a4a927ae0037cf4aec26c989cd68952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6caa5584b5cce54ff4310a73ebfd6a8d9a4a927ae0037cf4aec26c989cd68952->enter($__internal_6caa5584b5cce54ff4310a73ebfd6a8d9a4a927ae0037cf4aec26c989cd68952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (("unknown" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "symfonyState", array()))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->getSourceContext()); })()), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "applicationversion", array()), "html", null, true);
            echo "</span>
        ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 25
($context["collector"] ?? null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">
                ";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 45
        if ((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 45, $this->getSourceContext()); })())) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 48, $this->getSourceContext()); })()), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                </span>
            </div>

            ";
        // line 53
        if ( !("n/a" === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 53, $this->getSourceContext()); })()), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ( !("n/a" === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 60, $this->getSourceContext()); })()), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ( !("n/a" === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->getSourceContext()); })()), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 86, $this->getSourceContext()); })()), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 87, $this->getSourceContext()); })()), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 92, $this->getSourceContext()); })()), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 97
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "symfonyversion", array(), "any", true, true)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        ";
            // line 101
            if (("Silex" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "applicationname", array()))) {
                // line 102
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 106, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>
                        ";
            }
            // line 110
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 121
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        echo "
    ";
        // line 124
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => (isset($context["block_status"]) || array_key_exists("block_status", $context) ? $context["block_status"] : (function () { throw new Twig_Error_Runtime('Variable "block_status" does not exist.', 124, $this->getSourceContext()); })()), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . (isset($context["symfony_version_status"]) || array_key_exists("symfony_version_status", $context) ? $context["symfony_version_status"] : (function () { throw new Twig_Error_Runtime('Variable "symfony_version_status" does not exist.', 124, $this->getSourceContext()); })())) . "\"")));
        echo "
";
        
        $__internal_6caa5584b5cce54ff4310a73ebfd6a8d9a4a927ae0037cf4aec26c989cd68952->leave($__internal_6caa5584b5cce54ff4310a73ebfd6a8d9a4a927ae0037cf4aec26c989cd68952_prof);

        
        $__internal_4d0a4b86f55efef4e9b24806579166b4456f65f25cf0dacdc8ddd614f5038f1f->leave($__internal_4d0a4b86f55efef4e9b24806579166b4456f65f25cf0dacdc8ddd614f5038f1f_prof);

    }

    // line 127
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdef82231c2d512e5d993c4a7fd9cc543b41a7b29d825771a3d55d6a1c438ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdef82231c2d512e5d993c4a7fd9cc543b41a7b29d825771a3d55d6a1c438ee5->enter($__internal_bdef82231c2d512e5d993c4a7fd9cc543b41a7b29d825771a3d55d6a1c438ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47cade1d553778d5321cba0046459d6a35c4797701b9ec2ada621a0ee055d053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cade1d553778d5321cba0046459d6a35c4797701b9ec2ada621a0ee055d053->enter($__internal_47cade1d553778d5321cba0046459d6a35c4797701b9ec2ada621a0ee055d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 128
        echo "    <span class=\"label label-status-";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 128, $this->getSourceContext()); })()), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 128, $this->getSourceContext()); })()), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_47cade1d553778d5321cba0046459d6a35c4797701b9ec2ada621a0ee055d053->leave($__internal_47cade1d553778d5321cba0046459d6a35c4797701b9ec2ada621a0ee055d053_prof);

        
        $__internal_bdef82231c2d512e5d993c4a7fd9cc543b41a7b29d825771a3d55d6a1c438ee5->leave($__internal_bdef82231c2d512e5d993c4a7fd9cc543b41a7b29d825771a3d55d6a1c438ee5_prof);

    }

    // line 134
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b68e7480012654631c8bf9e8612fa6204a3e7d0b299fb2fdf01501b99d0ad376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68e7480012654631c8bf9e8612fa6204a3e7d0b299fb2fdf01501b99d0ad376->enter($__internal_b68e7480012654631c8bf9e8612fa6204a3e7d0b299fb2fdf01501b99d0ad376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a58e1df03e33097f2072eaa4898535a39ba3ee70c512c8811a84f63acda4202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a58e1df03e33097f2072eaa4898535a39ba3ee70c512c8811a84f63acda4202->enter($__internal_0a58e1df03e33097f2072eaa4898535a39ba3ee70c512c8811a84f63acda4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 135
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 135, $this->getSourceContext()); })()), "applicationname", array())) {
            // line 136
            echo "        ";
            // line 137
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 141, $this->getSourceContext()); })()), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 146, $this->getSourceContext()); })()), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 152, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 155
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 159, $this->getSourceContext()); })()), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 163
            if (("n/a" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 163, $this->getSourceContext()); })()), "appname", array()))) {
                // line 164
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 165, $this->getSourceContext()); })()), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 169
            echo "
            ";
            // line 170
            if (("n/a" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 170, $this->getSourceContext()); })()), "env", array()))) {
                // line 171
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 172, $this->getSourceContext()); })()), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if (("n/a" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 177, $this->getSourceContext()); })()), "debug", array()))) {
                // line 178
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 179
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 179, $this->getSourceContext()); })()), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 183
            echo "        </div>
    ";
        }
        // line 185
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 190, $this->getSourceContext()); })()), "phpversion", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 195
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 195, $this->getSourceContext()); })()), "hasaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 200
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 200, $this->getSourceContext()); })()), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 207
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 207, $this->getSourceContext()); })()), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 212
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 212, $this->getSourceContext()); })()), "hasapc", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 217
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 217, $this->getSourceContext()); })()), "hasxcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 222
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 222, $this->getSourceContext()); })()), "haseaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 228
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 231
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 231, $this->getSourceContext()); })()), "bundles", array())) {
            // line 232
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 232, $this->getSourceContext()); })()), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 241, $this->getSourceContext()); })()), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 242
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 243
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 244, $this->getSourceContext()); })()), "bundles", array()), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_0a58e1df03e33097f2072eaa4898535a39ba3ee70c512c8811a84f63acda4202->leave($__internal_0a58e1df03e33097f2072eaa4898535a39ba3ee70c512c8811a84f63acda4202_prof);

        
        $__internal_b68e7480012654631c8bf9e8612fa6204a3e7d0b299fb2fdf01501b99d0ad376->leave($__internal_b68e7480012654631c8bf9e8612fa6204a3e7d0b299fb2fdf01501b99d0ad376_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 247,  555 => 244,  551 => 243,  548 => 242,  544 => 241,  531 => 232,  529 => 231,  523 => 228,  514 => 222,  506 => 217,  498 => 212,  490 => 207,  480 => 200,  472 => 195,  464 => 190,  457 => 185,  453 => 183,  446 => 179,  443 => 178,  441 => 177,  438 => 176,  431 => 172,  428 => 171,  426 => 170,  423 => 169,  416 => 165,  413 => 164,  411 => 163,  404 => 159,  398 => 155,  392 => 152,  383 => 146,  375 => 141,  369 => 137,  367 => 136,  364 => 135,  355 => 134,  341 => 129,  336 => 128,  327 => 127,  315 => 124,  312 => 123,  308 => 121,  295 => 110,  289 => 107,  284 => 106,  278 => 102,  276 => 101,  271 => 98,  269 => 97,  261 => 92,  253 => 87,  249 => 86,  240 => 80,  236 => 79,  228 => 73,  220 => 70,  216 => 68,  214 => 67,  211 => 66,  205 => 63,  201 => 61,  199 => 60,  196 => 59,  190 => 56,  186 => 54,  184 => 53,  179 => 50,  173 => 48,  165 => 46,  163 => 45,  157 => 41,  151 => 38,  147 => 37,  144 => 36,  142 => 35,  139 => 34,  137 => 33,  134 => 32,  131 => 31,  126 => 29,  121 => 27,  118 => 26,  116 => 25,  112 => 24,  107 => 23,  104 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        {% if collector.applicationname %}
            <span class=\"sf-toolbar-label\">{{ collector.applicationname }}</span>
            <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
        {% elseif collector.symfonyState is defined %}
            <span class=\"sf-toolbar-label\">
                {{ include('@WebProfiler/Icon/symfony.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">{{ collector.symfonyversion }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            {% if collector.applicationname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ collector.applicationname }}</b>
                    <span>{{ collector.applicationversion }}</span>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.appname) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        {% if 'Silex' == collector.applicationname %}
                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        {% else %}
                            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                                Read Symfony {{ collector.symfonyversion }} Docs
                            </a>
                        {% endif %}
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapc ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haseaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ collector.bundles[name] }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/config.html.twig");
    }
}
