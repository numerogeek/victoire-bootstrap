<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_31706a759131bf0b1a7d2eb26d89cceedd673f0d17c872dd9daed3d0ee603f0a extends Twig_Template
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
        $__internal_38cad7963a095c3b01254c33f5ea3cff361c6e5eff039577454bef86343f10b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cad7963a095c3b01254c33f5ea3cff361c6e5eff039577454bef86343f10b0->enter($__internal_38cad7963a095c3b01254c33f5ea3cff361c6e5eff039577454bef86343f10b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_2e834efffb8d1ed77fd27d49e96fc1e119142b90bd7a8c415d0fa81c49871d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e834efffb8d1ed77fd27d49e96fc1e119142b90bd7a8c415d0fa81c49871d43->enter($__internal_2e834efffb8d1ed77fd27d49e96fc1e119142b90bd7a8c415d0fa81c49871d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new Twig_Error_Runtime('Variable "templates" does not exist.', 10, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
                $__internal_32e877cc912b9d987743c72fe75bebd23eb0976bc5fae0cad72249e9d07ce98a = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 13, $this->getSourceContext()); })()), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 14, $this->getSourceContext()); })()), "token" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 15
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 15, $this->getSourceContext()); })()), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 17, $this->getSourceContext()); })()), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_script_nonce" does not exist.', 18, $this->getSourceContext()); })()), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_style_nonce" does not exist.', 19, $this->getSourceContext()); })()));
                if (!is_array($__internal_32e877cc912b9d987743c72fe75bebd23eb0976bc5fae0cad72249e9d07ce98a)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_32e877cc912b9d987743c72fe75bebd23eb0976bc5fae0cad72249e9d07ce98a);
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_38cad7963a095c3b01254c33f5ea3cff361c6e5eff039577454bef86343f10b0->leave($__internal_38cad7963a095c3b01254c33f5ea3cff361c6e5eff039577454bef86343f10b0_prof);

        
        $__internal_2e834efffb8d1ed77fd27d49e96fc1e119142b90bd7a8c415d0fa81c49871d43->leave($__internal_2e834efffb8d1ed77fd27d49e96fc1e119142b90bd7a8c415d0fa81c49871d43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
