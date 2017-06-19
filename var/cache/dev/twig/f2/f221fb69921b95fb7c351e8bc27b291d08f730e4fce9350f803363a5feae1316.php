<?php

/* VictoireBlogBundle:Blog:Tabs/content.html.twig */
class __TwigTemplate_3c7db5f465e8255c6258920e8e0013fb51f8b6ec70e5493f0113cd084b849e99 extends Twig_Template
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
        $__internal_f311a28de0e4168a8d114c94d3a55e9629442584491ffc2dd10fc62e90aab181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f311a28de0e4168a8d114c94d3a55e9629442584491ffc2dd10fc62e90aab181->enter($__internal_f311a28de0e4168a8d114c94d3a55e9629442584491ffc2dd10fc62e90aab181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/content.html.twig"));

        $__internal_17dbb7ebc98ec4bb9fd0dd5701e0bb6e0a15917e787383ae98ad4eec8b65655d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dbb7ebc98ec4bb9fd0dd5701e0bb6e0a15917e787383ae98ad4eec8b65655d->enter($__internal_17dbb7ebc98ec4bb9fd0dd5701e0bb6e0a15917e787383ae98ad4eec8b65655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/content.html.twig"));

        // line 1
        echo "<div class=\"vic-tab-content vic-modal-tab-content\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 3
            echo "        <div class=\"vic-tab-pane";
            if (($context["tab"] == (isset($context["currentTab"]) || array_key_exists("currentTab", $context) ? $context["currentTab"] : (function () { throw new Twig_Error_Runtime('Variable "currentTab" does not exist.', 3, $this->getSourceContext()); })()))) {
                echo " vic-active";
            }
            echo "\" id=\"victoire-blog-";
            echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
            echo "\">
            ";
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller(("VictoireBlogBundle:Blog:" . $context["tab"]), array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 4, $this->getSourceContext()); })()), "id", array()))));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    <div class=\"vic-tab-pane\" id=\"victoire-blog-links\">
        ";
        // line 8
        $this->loadTemplate("VictoireBlogBundle:Blog:Tabs/_links.html.twig", "VictoireBlogBundle:Blog:Tabs/content.html.twig", 8)->display(array_merge($context, array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 8, $this->getSourceContext()); })()), "id", array()))));
        // line 9
        echo "    </div>
</div>
";
        
        $__internal_f311a28de0e4168a8d114c94d3a55e9629442584491ffc2dd10fc62e90aab181->leave($__internal_f311a28de0e4168a8d114c94d3a55e9629442584491ffc2dd10fc62e90aab181_prof);

        
        $__internal_17dbb7ebc98ec4bb9fd0dd5701e0bb6e0a15917e787383ae98ad4eec8b65655d->leave($__internal_17dbb7ebc98ec4bb9fd0dd5701e0bb6e0a15917e787383ae98ad4eec8b65655d_prof);

    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:Tabs/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  53 => 8,  50 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"vic-tab-content vic-modal-tab-content\">
    {% for tab in tabs %}
        <div class=\"vic-tab-pane{% if tab == currentTab %} vic-active{% endif %}\" id=\"victoire-blog-{{tab}}\">
            {{ render(controller('VictoireBlogBundle:Blog:' ~ tab, {'id' : blog.id})) }}
        </div>
    {% endfor %}
    <div class=\"vic-tab-pane\" id=\"victoire-blog-links\">
        {% include 'VictoireBlogBundle:Blog:Tabs/_links.html.twig' with {'id' : blog.id} %}
    </div>
</div>
", "VictoireBlogBundle:Blog:Tabs/content.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/Tabs/content.html.twig");
    }
}
