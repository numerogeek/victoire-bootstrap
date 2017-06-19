<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_568a2884c183ae41a17edfbb1e79a8c987d119a614065f07c0a15a4bd2b41f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_edd5dc1efbc2b5ec043d8ed6484a4a94001423f46640420dd271687a136058ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd5dc1efbc2b5ec043d8ed6484a4a94001423f46640420dd271687a136058ce->enter($__internal_edd5dc1efbc2b5ec043d8ed6484a4a94001423f46640420dd271687a136058ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_4e8d8eed82d3b06d874529f36e37dacf68cf0ce1658e3f445b12c1dea18111d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8d8eed82d3b06d874529f36e37dacf68cf0ce1658e3f445b12c1dea18111d7->enter($__internal_4e8d8eed82d3b06d874529f36e37dacf68cf0ce1658e3f445b12c1dea18111d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd5dc1efbc2b5ec043d8ed6484a4a94001423f46640420dd271687a136058ce->leave($__internal_edd5dc1efbc2b5ec043d8ed6484a4a94001423f46640420dd271687a136058ce_prof);

        
        $__internal_4e8d8eed82d3b06d874529f36e37dacf68cf0ce1658e3f445b12c1dea18111d7->leave($__internal_4e8d8eed82d3b06d874529f36e37dacf68cf0ce1658e3f445b12c1dea18111d7_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e7008f0b1dc06504d0392ff9fb0a1a7eaef7863fee0e6a638a49e7989644376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7008f0b1dc06504d0392ff9fb0a1a7eaef7863fee0e6a638a49e7989644376->enter($__internal_9e7008f0b1dc06504d0392ff9fb0a1a7eaef7863fee0e6a638a49e7989644376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_03595fc5198c7a23257fcb4a88bb9c417439d9c033ab5443a95ee2ee58097b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03595fc5198c7a23257fcb4a88bb9c417439d9c033ab5443a95ee2ee58097b43->enter($__internal_03595fc5198c7a23257fcb4a88bb9c417439d9c033ab5443a95ee2ee58097b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "counterrors", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "countdeprecations", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "countwarnings", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 8, $this->getSourceContext()); })()), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "counterrors", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "counterrors", array())) : ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "countdeprecations", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "countwarnings", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->getSourceContext()); })()), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 30, $this->getSourceContext()); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 30, $this->getSourceContext()); })())));
            echo "
    ";
        }
        
        $__internal_03595fc5198c7a23257fcb4a88bb9c417439d9c033ab5443a95ee2ee58097b43->leave($__internal_03595fc5198c7a23257fcb4a88bb9c417439d9c033ab5443a95ee2ee58097b43_prof);

        
        $__internal_9e7008f0b1dc06504d0392ff9fb0a1a7eaef7863fee0e6a638a49e7989644376->leave($__internal_9e7008f0b1dc06504d0392ff9fb0a1a7eaef7863fee0e6a638a49e7989644376_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bed22da77a0b0f16d5a09c7f0ace5949c3c72535216afb6c512fbb33ae04004a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed22da77a0b0f16d5a09c7f0ace5949c3c72535216afb6c512fbb33ae04004a->enter($__internal_bed22da77a0b0f16d5a09c7f0ace5949c3c72535216afb6c512fbb33ae04004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fefb287ed9c9406612fabcda162f613b9c37b4eda99c40b0cba4a9cb7f4990b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fefb287ed9c9406612fabcda162f613b9c37b4eda99c40b0cba4a9cb7f4990b->enter($__internal_8fefb287ed9c9406612fabcda162f613b9c37b4eda99c40b0cba4a9cb7f4990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "counterrors", array())) ? ("error") : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "countdeprecations", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "countwarnings", array()))) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "counterrors", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "countdeprecations", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->getSourceContext()); })()), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "counterrors", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "counterrors", array())) : ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "countdeprecations", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->getSourceContext()); })()), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_8fefb287ed9c9406612fabcda162f613b9c37b4eda99c40b0cba4a9cb7f4990b->leave($__internal_8fefb287ed9c9406612fabcda162f613b9c37b4eda99c40b0cba4a9cb7f4990b_prof);

        
        $__internal_bed22da77a0b0f16d5a09c7f0ace5949c3c72535216afb6c512fbb33ae04004a->leave($__internal_bed22da77a0b0f16d5a09c7f0ace5949c3c72535216afb6c512fbb33ae04004a_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1946458c385898c03067dc1b16e7efb0e7af6f4ff24b19c2b4c59db4c0971de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1946458c385898c03067dc1b16e7efb0e7af6f4ff24b19c2b4c59db4c0971de->enter($__internal_d1946458c385898c03067dc1b16e7efb0e7af6f4ff24b19c2b4c59db4c0971de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d994a4d429294dc9e5809e420c1a96ced825d3d149c6cf2596fd6457fa0e91fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d994a4d429294dc9e5809e420c1a96ced825d3d149c6cf2596fd6457fa0e91fc->enter($__internal_d994a4d429294dc9e5809e420c1a96ced825d3d149c6cf2596fd6457fa0e91fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            // line 55
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array(), "any", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array()))) {
                    // line 58
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "deprecation_logs" does not exist.', 58, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 59
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "scream", array()))) {
                    // line 60
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new Twig_Error_Runtime('Variable "silenced_logs" does not exist.', 60, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 61
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 62, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 64, $this->getSourceContext()); })()), array(0 => $context["log"]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "counterrors", array())) ? ("error") : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "counterrors", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "counterrors", array())) : (twig_length_filter($this->env, (isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 70, $this->getSourceContext()); })())))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 73
            if (twig_test_empty((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 73, $this->getSourceContext()); })()))) {
                // line 74
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 78
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new Twig_Error_Runtime('Variable "info_and_error_logs" does not exist.', 78, $this->getSourceContext()); })()), "info", true);
                echo "
                    ";
            }
            // line 80
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 86
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 86, $this->getSourceContext()); })()), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 89
            if (twig_test_empty((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "deprecation_logs" does not exist.', 89, $this->getSourceContext()); })()))) {
                // line 90
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 94
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new Twig_Error_Runtime('Variable "deprecation_logs" does not exist.', 94, $this->getSourceContext()); })()), "deprecation", false, true);
                echo "
                    ";
            }
            // line 96
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 100
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 100, $this->getSourceContext()); })())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 103
            if (twig_test_empty((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 103, $this->getSourceContext()); })()))) {
                // line 104
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 108
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new Twig_Error_Runtime('Variable "debug_logs" does not exist.', 108, $this->getSourceContext()); })()), "debug");
                echo "
                    ";
            }
            // line 110
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">";
            // line 114
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 117
            if (twig_test_empty((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new Twig_Error_Runtime('Variable "silenced_logs" does not exist.', 117, $this->getSourceContext()); })()))) {
                // line 118
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 122
                echo "                        ";
                echo $context["helper"]->macro_render_table((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new Twig_Error_Runtime('Variable "silenced_logs" does not exist.', 122, $this->getSourceContext()); })()), "silenced");
                echo "
                    ";
            }
            // line 124
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_d994a4d429294dc9e5809e420c1a96ced825d3d149c6cf2596fd6457fa0e91fc->leave($__internal_d994a4d429294dc9e5809e420c1a96ced825d3d149c6cf2596fd6457fa0e91fc_prof);

        
        $__internal_d1946458c385898c03067dc1b16e7efb0e7af6f4ff24b19c2b4c59db4c0971de->leave($__internal_d1946458c385898c03067dc1b16e7efb0e7af6f4ff24b19c2b4c59db4c0971de_prof);

    }

    // line 131
    public function macro_render_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b24addc6ca3ea202f60b2736b71599189c101a2ec7fb2c79b6b42ceb0a34c548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b24addc6ca3ea202f60b2736b71599189c101a2ec7fb2c79b6b42ceb0a34c548->enter($__internal_b24addc6ca3ea202f60b2736b71599189c101a2ec7fb2c79b6b42ceb0a34c548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6612ffc8a31ba0ab802f2d7b500e706f67007c47d1c2017b8af3c98967c80701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6612ffc8a31ba0ab802f2d7b500e706f67007c47d1c2017b8af3c98967c80701->enter($__internal_6612ffc8a31ba0ab802f2d7b500e706f67007c47d1c2017b8af3c98967c80701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 132
            echo "    ";
            $context["helper"] = $this;
            // line 133
            echo "    ";
            $context["channel_is_defined"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 133, $this->getSourceContext()); })())), "channel", array(), "any", true, true);
            // line 134
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 138
            echo (((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new Twig_Error_Runtime('Variable "show_level" does not exist.', 138, $this->getSourceContext()); })())) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 139
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 139, $this->getSourceContext()); })())) {
                echo "<th>Channel</th>";
            }
            // line 140
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 145, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 146
                echo "                ";
                $context["css_class"] = (((isset($context["is_deprecation"]) || array_key_exists("is_deprecation", $context) ? $context["is_deprecation"] : (function () { throw new Twig_Error_Runtime('Variable "is_deprecation" does not exist.', 146, $this->getSourceContext()); })())) ? ("") : (((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(),                 // line 147
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 148
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 150
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new Twig_Error_Runtime('Variable "css_class" does not exist.', 150, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 152
                if ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new Twig_Error_Runtime('Variable "show_level" does not exist.', 152, $this->getSourceContext()); })())) {
                    // line 153
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 155
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->twigVicDateFormatFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 158
                if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 158, $this->getSourceContext()); })())) {
                    // line 159
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "channel", array()), "html", null, true);
                    echo "
                            ";
                    // line 161
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "errorCount", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "errorCount", array()) > 1))) {
                        // line 162
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>
                            ";
                    }
                    // line 164
                    echo "                        </td>

                    ";
                }
                // line 167
                echo "
                    <td class=\"font-normal\">";
                // line 168
                echo $context["helper"]->macro_render_log_message((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 168, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), $context["log"], (isset($context["is_deprecation"]) || array_key_exists("is_deprecation", $context) ? $context["is_deprecation"] : (function () { throw new Twig_Error_Runtime('Variable "is_deprecation" does not exist.', 168, $this->getSourceContext()); })()));
                echo "</td>
                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "        </tbody>
    </table>
";
            
            $__internal_6612ffc8a31ba0ab802f2d7b500e706f67007c47d1c2017b8af3c98967c80701->leave($__internal_6612ffc8a31ba0ab802f2d7b500e706f67007c47d1c2017b8af3c98967c80701_prof);

            
            $__internal_b24addc6ca3ea202f60b2736b71599189c101a2ec7fb2c79b6b42ceb0a34c548->leave($__internal_b24addc6ca3ea202f60b2736b71599189c101a2ec7fb2c79b6b42ceb0a34c548_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 175
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b038601f89cb63ded61f04267657236124beedec4d0b5d0e09956df437f6d0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b038601f89cb63ded61f04267657236124beedec4d0b5d0e09956df437f6d0dc->enter($__internal_b038601f89cb63ded61f04267657236124beedec4d0b5d0e09956df437f6d0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_d55813c7c2751b60ca59ef0e063e4626aa956f388945a6736695cbdab2972292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d55813c7c2751b60ca59ef0e063e4626aa956f388945a6736695cbdab2972292->enter($__internal_d55813c7c2751b60ca59ef0e063e4626aa956f388945a6736695cbdab2972292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 176
            echo "    ";
            if ((isset($context["is_deprecation"]) || array_key_exists("is_deprecation", $context) ? $context["is_deprecation"] : (function () { throw new Twig_Error_Runtime('Variable "is_deprecation" does not exist.', 176, $this->getSourceContext()); })())) {
                // line 177
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 177, $this->getSourceContext()); })()), "message", array()), "html", null, true);
                echo "

        ";
                // line 179
                $context["context_id"] = ((("context-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 179, $this->getSourceContext()); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new Twig_Error_Runtime('Variable "log_index" does not exist.', 179, $this->getSourceContext()); })()));
                // line 180
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 182
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 182, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"";
                // line 184
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 184, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 185
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 185, $this->getSourceContext()); })()), "context", array()), "seek", array(0 => "exception"), "method"), "seek", array(0 => "\000Exception\000trace"), "method"), 2));
                echo "
            </div>
        </span>
    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 188
($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 188, $this->getSourceContext()); })()), "context", array())))) {
                // line 189
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 189, $this->getSourceContext()); })()), "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 189, $this->getSourceContext()); })()), "context", array()));
                echo "

        ";
                // line 191
                $context["context_id"] = ((("context-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 191, $this->getSourceContext()); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new Twig_Error_Runtime('Variable "log_index" does not exist.', 191, $this->getSourceContext()); })()));
                // line 192
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 194
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 194, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"";
                // line 196
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new Twig_Error_Runtime('Variable "context_id" does not exist.', 196, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 197
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 197, $this->getSourceContext()); })()), "context", array()), 1));
                echo "
            </div>
        </span>
    ";
            } else {
                // line 201
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 201, $this->getSourceContext()); })()), "message", array()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_d55813c7c2751b60ca59ef0e063e4626aa956f388945a6736695cbdab2972292->leave($__internal_d55813c7c2751b60ca59ef0e063e4626aa956f388945a6736695cbdab2972292_prof);

            
            $__internal_b038601f89cb63ded61f04267657236124beedec4d0b5d0e09956df437f6d0dc->leave($__internal_b038601f89cb63ded61f04267657236124beedec4d0b5d0e09956df437f6d0dc_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 201,  580 => 197,  576 => 196,  571 => 194,  567 => 192,  565 => 191,  559 => 189,  557 => 188,  551 => 185,  547 => 184,  542 => 182,  538 => 180,  536 => 179,  530 => 177,  527 => 176,  506 => 175,  489 => 171,  472 => 168,  469 => 167,  464 => 164,  458 => 162,  456 => 161,  452 => 160,  449 => 159,  447 => 158,  440 => 155,  434 => 153,  432 => 152,  426 => 150,  424 => 148,  423 => 147,  421 => 146,  404 => 145,  397 => 140,  393 => 139,  389 => 138,  383 => 134,  380 => 133,  377 => 132,  356 => 131,  341 => 124,  335 => 122,  329 => 118,  327 => 117,  321 => 114,  315 => 110,  309 => 108,  303 => 104,  301 => 103,  295 => 100,  289 => 96,  283 => 94,  277 => 90,  275 => 89,  266 => 86,  260 => 80,  254 => 78,  248 => 74,  246 => 73,  238 => 70,  233 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  215 => 62,  212 => 61,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  195 => 56,  192 => 55,  190 => 54,  184 => 50,  182 => 49,  178 => 47,  169 => 46,  158 => 43,  152 => 40,  149 => 39,  147 => 38,  142 => 36,  135 => 35,  126 => 34,  113 => 30,  110 => 29,  102 => 26,  92 => 21,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  68 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {{ log.channel }}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log, is_deprecation) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log, is_deprecation = false) %}
    {% if is_deprecation %}
        {{ log.message }}

        {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}

        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.seek('exception').seek('\\0Exception\\0trace'), maxDepth=2) }}
            </div>
        </span>
    {% elseif log.context is defined and log.context is not empty %}
        {{ profiler_dump_log(log.message, log.context) }}

        {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}

        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context, maxDepth=1) }}
            </div>
        </span>
    {% else %}
        {{ log.message }}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
