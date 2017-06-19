<?php

/* VictoireBlogBundle:Blog:Tabs/_links.html.twig */
class __TwigTemplate_2e9a413071dca80f6814d8c4f1d8ef552ae62ee3d5cab7b9225ed0a469a20e2b extends Twig_Template
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
        $__internal_1d69ab0344cd664734f65e48152f1aecd713cbb7af3d125412f66ce12dfd1a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d69ab0344cd664734f65e48152f1aecd713cbb7af3d125412f66ce12dfd1a18->enter($__internal_1d69ab0344cd664734f65e48152f1aecd713cbb7af3d125412f66ce12dfd1a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_links.html.twig"));

        $__internal_361bea34f578a4da332ab701f21ef7add8e02c18ac6e834e6f9bd9c7b1741565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361bea34f578a4da332ab701f21ef7add8e02c18ac6e834e6f9bd9c7b1741565->enter($__internal_361bea34f578a4da332ab701f21ef7add8e02c18ac6e834e6f9bd9c7b1741565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_links.html.twig"));

        // line 2
        echo "
<div class=\"vic-tab-content vic-modal-tab-content\">
    <div class=\"vic-tab-pane vic-active\" id=\"links\">
        <ul>
            <li>
                <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_core_page_show", array("url" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 7, $this->getSourceContext()); })()), "url", array()))), "html", null, true);
        echo "\">URL</a>
            </li>
            <li>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_rss", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 10, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">RSS</a>
                ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "blog_rss_category", array(0 => (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 11, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 11, $this->getSourceContext()); })()), "categories", array())), "method"), "html", null, true);
        echo "
                </ul>
            </li>
        </ul>
    </div>
</div>

";
        
        $__internal_1d69ab0344cd664734f65e48152f1aecd713cbb7af3d125412f66ce12dfd1a18->leave($__internal_1d69ab0344cd664734f65e48152f1aecd713cbb7af3d125412f66ce12dfd1a18_prof);

        
        $__internal_361bea34f578a4da332ab701f21ef7add8e02c18ac6e834e6f9bd9c7b1741565->leave($__internal_361bea34f578a4da332ab701f21ef7add8e02c18ac6e834e6f9bd9c7b1741565_prof);

    }

    // line 18
    public function macro_blog_rss_category($__blog__ = null, $__categories__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blog" => $__blog__,
            "categories" => $__categories__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3ce5f90f7647e1aee39632aff615686aec0227807521f73fe987ba1455966234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3ce5f90f7647e1aee39632aff615686aec0227807521f73fe987ba1455966234->enter($__internal_3ce5f90f7647e1aee39632aff615686aec0227807521f73fe987ba1455966234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "blog_rss_category"));

            $__internal_7f21ac61432069dd299c12fd3e0f1b823e7e8d0182ccea220a53abce1279758d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7f21ac61432069dd299c12fd3e0f1b823e7e8d0182ccea220a53abce1279758d->enter($__internal_7f21ac61432069dd299c12fd3e0f1b823e7e8d0182ccea220a53abce1279758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "blog_rss_category"));

            // line 19
            echo "    ";
            if (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 19, $this->getSourceContext()); })()))) {
                // line 20
                echo "        <ul>
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 21, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 22
                    echo "                <li>
                    ";
                    // line 23
                    $context["categoryRssLink"] = $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_rss", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 23, $this->getSourceContext()); })()), "id", array()), "category" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array())));
                    // line 24
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["categoryRssLink"]) || array_key_exists("categoryRssLink", $context) ? $context["categoryRssLink"] : (function () { throw new Twig_Error_Runtime('Variable "categoryRssLink" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    echo "</a>
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "blog_rss_category", array(0 => (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 25, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "children", array())), "method"), "html", null, true);
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "        </ul>
    ";
            }
            
            $__internal_7f21ac61432069dd299c12fd3e0f1b823e7e8d0182ccea220a53abce1279758d->leave($__internal_7f21ac61432069dd299c12fd3e0f1b823e7e8d0182ccea220a53abce1279758d_prof);

            
            $__internal_3ce5f90f7647e1aee39632aff615686aec0227807521f73fe987ba1455966234->leave($__internal_3ce5f90f7647e1aee39632aff615686aec0227807521f73fe987ba1455966234_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:Tabs/_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  101 => 25,  94 => 24,  92 => 23,  89 => 22,  85 => 21,  82 => 20,  79 => 19,  60 => 18,  42 => 11,  38 => 10,  32 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}

<div class=\"vic-tab-content vic-modal-tab-content\">
    <div class=\"vic-tab-pane vic-active\" id=\"links\">
        <ul>
            <li>
                <a href=\"{{ path('victoire_core_page_show', {'url': blog.url}) }}\">URL</a>
            </li>
            <li>
                <a href=\"{{ path('victoire_blog_rss', {'id': blog.id}) }}\">RSS</a>
                {{ _self.blog_rss_category(blog, blog.categories) }}
                </ul>
            </li>
        </ul>
    </div>
</div>

{% macro blog_rss_category(blog, categories) %}
    {% if categories|length %}
        <ul>
            {% for category in categories %}
                <li>
                    {% set categoryRssLink = path('victoire_blog_rss', {'id': blog.id, 'category': category.id}) %}
                    <a href=\"{{ categoryRssLink }}\">{{ category.title }}</a>
                    {{ _self.blog_rss_category(blog, category.children) }}
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}", "VictoireBlogBundle:Blog:Tabs/_links.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/Tabs/_links.html.twig");
    }
}
