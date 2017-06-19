<?php

/* VictoireBlogBundle:Blog:Tabs/_articles.html.twig */
class __TwigTemplate_ecf3dcba49a85a36d868da33b9ae2857d416942eb7efc3b77249ac4ab7d75967 extends Twig_Template
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
        $__internal_b77ea110e0488a887a43323f6e0e57937cbed7b7620703298a7760c936cc06fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77ea110e0488a887a43323f6e0e57937cbed7b7620703298a7760c936cc06fb->enter($__internal_b77ea110e0488a887a43323f6e0e57937cbed7b7620703298a7760c936cc06fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_articles.html.twig"));

        $__internal_711f072cee38c5d5d0c511b47afa421a6802f63782247b3c4a3a905caa44cba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711f072cee38c5d5d0c511b47afa421a6802f63782247b3c4a3a905caa44cba3->enter($__internal_711f072cee38c5d5d0c511b47afa421a6802f63782247b3c4a3a905caa44cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:Tabs/_articles.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 3, $this->getSourceContext()); })()), "articles", array()))) {
            // line 4
            echo "
<a class=\"vic-btn vic-btn-success\" data-toggle=\"vic-modal\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_article_new", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 5, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.blog.list.articlesList.new_article", array(), "victoire");
            echo "
</a>

<div id=\"vic-blog-articleList\">
";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 10, $this->getSourceContext()); })()), "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "deletedAt", array())) {
                    // line 11
                    echo "    <div>
        <div class=\"vic-panel vic-shadow-plan1 -vicBlog\">
            <div class=\"vic-panelBlog-image\" ";
                    // line 13
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "image", array())) {
                        echo "style=\"background-image: url(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "image", array()), "url", array()), "html", null, true);
                        echo ");\"";
                    }
                    echo ">
                <a class=\"vic-panelBlog-title\" href=\"";
                    // line 14
                    echo $this->env->getExtension('Victoire\Bundle\WidgetBundle\Twig\LinkExtension')->victoireBusinessLink($context["article"]);
                    echo "\">
                    <span class=\"vic-panelBlog-badge -";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "status", array()), "html", null, true);
                    echo "\">
                        <span class=\"vic-panelBlog-badge-popover\">
                            ";
                    // line 17
                    $context["transKey"] = ("modal.blog.list.articlesList.status." . twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "status", array()));
                    // line 18
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["transKey"]) || array_key_exists("transKey", $context) ? $context["transKey"] : (function () { throw new Twig_Error_Runtime('Variable "transKey" does not exist.', 18, $this->getSourceContext()); })()), array(), "victoire"), "html", null, true);
                    echo "
                        </span>
                    </span>
                </a>
            </div>

            <div class=\"vic-panelBlog-body vic-text-center\">
                <a class=\"vic-panelBlog-title\" href=\"";
                    // line 25
                    echo $this->env->getExtension('Victoire\Bundle\WidgetBundle\Twig\LinkExtension')->victoireBusinessLink($context["article"]);
                    echo "\">
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "name", array()), "html", null, true);
                    echo "
                </a>
                ";
                    // line 28
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "author", array())) {
                        // line 29
                        echo "                    <em>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "author", array()), "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "author", array()), "lastname", array()), "html", null, true);
                        echo "</em>
                ";
                    }
                    // line 31
                    echo "
                <time datetime=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->twigVicDateFormatFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "publishedAt", array()), "Y-m-d"), "html", null, true);
                    echo "\" class=\"vic-panelBlog-date\">";
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "publishedAt", array()), "medium", "none", null, null, "cccc d LLLL yyyy"), "html", null, true);
                    echo "</time>

                <a class=\"vic-btn vic-btn-sm vic-btn-default\" href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_article_settings", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"vic-modal\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.blog.list.articlesList.change.parameters.label", array(), "victoire"), "html", null, true);
                    echo "</a>
            </div>
        </div>
    </div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "</div>

";
        } else {
            // line 42
            echo "<div class=\"vic-alert vic-alert-info\" id=\"vic-blog-articleList-alert\">
    <p>
        ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.blog.list.articlesList.empty.notice", array(), "victoire"), "html", null, true);
            echo "
    </p>

    <a data-toggle=\"vic-modal\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_article_new", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new Twig_Error_Runtime('Variable "blog" does not exist.', 47, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" class=\"vic-btn vic-btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.blog.list.articlesList.empty.notice.label", array(), "victoire"), "html", null, true);
            echo "</a>
</div>
";
        }
        
        $__internal_b77ea110e0488a887a43323f6e0e57937cbed7b7620703298a7760c936cc06fb->leave($__internal_b77ea110e0488a887a43323f6e0e57937cbed7b7620703298a7760c936cc06fb_prof);

        
        $__internal_711f072cee38c5d5d0c511b47afa421a6802f63782247b3c4a3a905caa44cba3->leave($__internal_711f072cee38c5d5d0c511b47afa421a6802f63782247b3c4a3a905caa44cba3_prof);

    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:Tabs/_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  135 => 44,  131 => 42,  126 => 39,  112 => 34,  105 => 32,  102 => 31,  94 => 29,  92 => 28,  87 => 26,  83 => 25,  72 => 18,  70 => 17,  65 => 15,  61 => 14,  53 => 13,  49 => 11,  44 => 10,  37 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}

{% if blog.articles|length %}

<a class=\"vic-btn vic-btn-success\" data-toggle=\"vic-modal\" href=\"{{ path('victoire_blog_article_new', {'id' : blog.id}) }}\">
    {{'modal.blog.list.articlesList.new_article'|trans({}, 'victoire')|raw}}
</a>

<div id=\"vic-blog-articleList\">
{% for article in blog.articles if not article.deletedAt %}
    <div>
        <div class=\"vic-panel vic-shadow-plan1 -vicBlog\">
            <div class=\"vic-panelBlog-image\" {% if article.image %}style=\"background-image: url({{ article.image.url }});\"{% endif %}>
                <a class=\"vic-panelBlog-title\" href=\"{{ vic_business_link(article) }}\">
                    <span class=\"vic-panelBlog-badge -{{ article.status }}\">
                        <span class=\"vic-panelBlog-badge-popover\">
                            {% set transKey = 'modal.blog.list.articlesList.status.' ~ article.status %}
                            {{ transKey |trans }}
                        </span>
                    </span>
                </a>
            </div>

            <div class=\"vic-panelBlog-body vic-text-center\">
                <a class=\"vic-panelBlog-title\" href=\"{{vic_business_link(article)}}\">
                    {{ article.name }}
                </a>
                {% if article.author %}
                    <em>{{ article.author.firstname }} {{ article.author.lastname }}</em>
                {% endif %}

                <time datetime=\"{{ article.publishedAt|date(\"Y-m-d\") }}\" class=\"vic-panelBlog-date\">{{ article.publishedAt|localizeddate(\"medium\", \"none\", null, null, \"cccc d LLLL yyyy\") }}</time>

                <a class=\"vic-btn vic-btn-sm vic-btn-default\" href=\"{{ path('victoire_blog_article_settings', {'id' : article.id}) }}\" data-toggle=\"vic-modal\">{{ 'modal.blog.list.articlesList.change.parameters.label'|trans }}</a>
            </div>
        </div>
    </div>
{% endfor %}
</div>

{% else %}
<div class=\"vic-alert vic-alert-info\" id=\"vic-blog-articleList-alert\">
    <p>
        {{ 'modal.blog.list.articlesList.empty.notice'|trans }}
    </p>

    <a data-toggle=\"vic-modal\" href=\"{{ path('victoire_blog_article_new', {'id' : blog.id}) }}\" class=\"vic-btn vic-btn-info\">{{ 'modal.blog.list.articlesList.empty.notice.label'|trans }}</a>
</div>
{% endif %}
", "VictoireBlogBundle:Blog:Tabs/_articles.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/Tabs/_articles.html.twig");
    }
}
