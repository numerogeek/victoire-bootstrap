<?php

/* VictoireBlogBundle:Blog:Tabs/nav.html.twig */
class __TwigTemplate_e7f6370030be538038d9f0c4770feb1acf32e84e9289cf0966e8b8a510d25d88 extends Twig_Template
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
        $__internal_11ee8676b5ef0f8612db7c9af8a3a9dfccd7c6b87aa55a73c60d84d77ffde52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ee8676b5ef0f8612db7c9af8a3a9dfccd7c6b87aa55a73c60d84d77ffde52b->enter($__internal_11ee8676b5ef0f8612db7c9af8a3a9dfccd7c6b87aa55a73c60d84d77ffde52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/nav.html.twig"));

        $__internal_1b16a00eb490a4c5e3fceff1a52aa87f54067c8d160acd147e99dd11328dd6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b16a00eb490a4c5e3fceff1a52aa87f54067c8d160acd147e99dd11328dd6b5->enter($__internal_1b16a00eb490a4c5e3fceff1a52aa87f54067c8d160acd147e99dd11328dd6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/nav.html.twig"));

        // line 2
        echo "
<ul class=\"vic-nav vic-nav-tabs vic-modal-nav-tabs\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 5
            echo "        <li";
            if (($context["tab"] == (isset($context["currentTab"]) || array_key_exists("currentTab", $context) ? $context["currentTab"] : (function () { throw new Twig_Error_Runtime('Variable "currentTab" does not exist.', 5, $this->getSourceContext()); })()))) {
                echo " class=\"vic-active\"";
            }
            echo ">
            <a class=\"offer-tab-nav-anchor\" href=\"#victoire-blog-";
            // line 6
            echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
            echo "\" role=\"vic-tab\" data-toggle=\"vic-tab\">
                ";
            // line 7
            ob_start();
            // line 8
            echo "                <span class=\"icon victoire-blog-tab-nav-icons victoire-blog-tab-nav-icons-";
            echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
            echo "\"></span>
                ";
            // line 9
            $context["label"] = (("victoire.blog.nav." . $context["tab"]) . ".label");
            // line 10
            echo "                <span class=\"hidden-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 10, $this->getSourceContext()); })()), array(), "victoire"), "html", null, true);
            echo "</span>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <li class=\"vic-pull-right\">
        <a href=\"#victoire-blog-links\" role=\"vic-tab\" data-toggle=\"vic-tab\">
            ";
        // line 17
        ob_start();
        // line 18
        echo "                <i class=\"fa fa-link\"></i>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 20
        echo "        </a>
    </li>
</ul>
";
        
        $__internal_11ee8676b5ef0f8612db7c9af8a3a9dfccd7c6b87aa55a73c60d84d77ffde52b->leave($__internal_11ee8676b5ef0f8612db7c9af8a3a9dfccd7c6b87aa55a73c60d84d77ffde52b_prof);

        
        $__internal_1b16a00eb490a4c5e3fceff1a52aa87f54067c8d160acd147e99dd11328dd6b5->leave($__internal_1b16a00eb490a4c5e3fceff1a52aa87f54067c8d160acd147e99dd11328dd6b5_prof);

    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:Tabs/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  73 => 18,  71 => 17,  67 => 15,  59 => 12,  53 => 10,  51 => 9,  46 => 8,  44 => 7,  40 => 6,  33 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}

<ul class=\"vic-nav vic-nav-tabs vic-modal-nav-tabs\">
    {% for tab in tabs %}
        <li{% if tab == currentTab %} class=\"vic-active\"{% endif %}>
            <a class=\"offer-tab-nav-anchor\" href=\"#victoire-blog-{{tab}}\" role=\"vic-tab\" data-toggle=\"vic-tab\">
                {% spaceless %}
                <span class=\"icon victoire-blog-tab-nav-icons victoire-blog-tab-nav-icons-{{ tab }}\"></span>
                {% set label = 'victoire.blog.nav.'~ tab ~ '.label' %}
                <span class=\"hidden-xs\">{{ label|trans }}</span>
                {% endspaceless %}
            </a>
        </li>
    {% endfor %}
    <li class=\"vic-pull-right\">
        <a href=\"#victoire-blog-links\" role=\"vic-tab\" data-toggle=\"vic-tab\">
            {% spaceless %}
                <i class=\"fa fa-link\"></i>
            {% endspaceless %}
        </a>
    </li>
</ul>
", "VictoireBlogBundle:Blog:Tabs/nav.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/Tabs/nav.html.twig");
    }
}
