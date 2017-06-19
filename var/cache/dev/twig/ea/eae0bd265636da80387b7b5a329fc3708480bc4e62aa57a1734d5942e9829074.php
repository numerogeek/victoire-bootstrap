<?php

/* VictoireSeoBundle::_meta.html.twig */
class __TwigTemplate_280879bd89a8cdf210f5a019212c98fff8a1ed0a3bc47579cc20d6f97c1e3b12 extends Twig_Template
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
        $__internal_686d38f6ce29ff7dee3b406eeb2e42592c122a59050b00518dfed2bc260d4338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686d38f6ce29ff7dee3b406eeb2e42592c122a59050b00518dfed2bc260d4338->enter($__internal_686d38f6ce29ff7dee3b406eeb2e42592c122a59050b00518dfed2bc260d4338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSeoBundle::_meta.html.twig"));

        $__internal_2e94e923683fbba7564cd43044700eac3118e66566abec4c55636fa904509b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e94e923683fbba7564cd43044700eac3118e66566abec4c55636fa904509b39->enter($__internal_2e94e923683fbba7564cd43044700eac3118e66566abec4c55636fa904509b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireSeoBundle::_meta.html.twig"));

        // line 1
        echo "<meta charset=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("charset", $context)) ? (_twig_default_filter((isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new Twig_Error_Runtime('Variable "charset" does not exist.', 1, $this->getSourceContext()); })()), "UTF-8")) : ("UTF-8")), "html", null, true);
        echo "\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />

";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "articles", array(), "any", true, true)) {
            // line 6
            echo "    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_blog_rss", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\"/>
";
        }
        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("view", $context) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "seo", array(), "any", true, true)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 9, $this->getSourceContext()); })()), "seo", array()))) {
            // line 10
            echo "    <!-- Basics -->
    ";
            // line 11
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 11, $this->getSourceContext()); })()), "seo", array()), "metaTitle", array())) {
                echo "<title>";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 11, $this->getSourceContext()); })()), "seo", array()), "metaTitle", array())), "html", null, true);
                echo "</title>";
            }
            // line 12
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 12, $this->getSourceContext()); })()), "seo", array()), "metaDescription", array())) {
                echo "<meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 12, $this->getSourceContext()); })()), "seo", array()), "metaDescription", array())), "html", null, true);
                echo "\"/>";
            }
            // line 13
            echo "
    <!-- Google Authorship -->
    ";
            // line 15
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 15, $this->getSourceContext()); })()), "seo", array()), "relAuthor", array())) {
                echo "<link rel=\"author\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 15, $this->getSourceContext()); })()), "seo", array()), "relAuthor", array()), "html", null, true);
                echo "\"/>";
            }
            // line 16
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 16, $this->getSourceContext()); })()), "seo", array()), "relPublisher", array())) {
                echo "<link rel=\"publisher\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 16, $this->getSourceContext()); })()), "seo", array()), "relPublisher", array()), "html", null, true);
                echo "\"/>";
            }
            // line 17
            echo "
    <!-- OpenGraph (Facebook, Linkedin, ...) -->
    ";
            // line 19
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 19, $this->getSourceContext()); })()), "seo", array()), "ogTitle", array())) {
                echo "<meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 19, $this->getSourceContext()); })()), "seo", array()), "ogTitle", array())), "html", null, true);
                echo "\"/>";
            }
            // line 20
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 20, $this->getSourceContext()); })()), "seo", array()), "ogType", array())) {
                echo "<meta property=\"og:type\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 20, $this->getSourceContext()); })()), "seo", array()), "ogType", array()), "html", null, true);
                echo "\"/>";
            }
            // line 21
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 21, $this->getSourceContext()); })()), "seo", array()), "ogImage", array())) {
                echo "<meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "getSchemeAndHttpHost", array(), "method") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 21, $this->getSourceContext()); })()), "seo", array()), "ogImage", array())), "html", null, true);
                echo "\"/>";
            }
            // line 22
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 22, $this->getSourceContext()); })()), "seo", array()), "ogUrl", array())) {
                echo "<meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 22, $this->getSourceContext()); })()), "seo", array()), "ogUrl", array()), "html", null, true);
                echo "\"/>";
            }
            // line 23
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 23, $this->getSourceContext()); })()), "seo", array()), "ogDescription", array())) {
                echo "<meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 23, $this->getSourceContext()); })()), "seo", array()), "ogDescription", array())), "html", null, true);
                echo "\"/>";
            }
            // line 24
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 24, $this->getSourceContext()); })()), "seo", array()), "fbAdmins", array())) {
                echo "<meta property=\"fb:admins\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 24, $this->getSourceContext()); })()), "seo", array()), "fbAdmins", array()), "html", null, true);
                echo "\"/>";
            }
            // line 25
            echo "
    <!-- Twitter -->
    ";
            // line 27
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 27, $this->getSourceContext()); })()), "seo", array()), "twitterCard", array())) {
                echo "<meta name=\"twitter:card\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "seo", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "seo", array()), array("twitterCard" => "summary"))) : (array("twitterCard" => "summary"))), "twitterCard", array()), "html", null, true);
                echo "\"/>";
            }
            // line 28
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 28, $this->getSourceContext()); })()), "seo", array()), "twitterUrl", array())) {
                echo "<meta name=\"twitter:site\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 28, $this->getSourceContext()); })()), "seo", array()), "twitterUrl", array()), "html", null, true);
                echo "\"/>";
            }
            // line 29
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 29, $this->getSourceContext()); })()), "seo", array()), "twitterTitle", array())) {
                echo "<meta name=\"twitter:title\" content=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 29, $this->getSourceContext()); })()), "seo", array()), "twitterTitle", array())), "html", null, true);
                echo "\"/>";
            }
            // line 30
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 30, $this->getSourceContext()); })()), "seo", array()), "twitterCreator", array())) {
                echo "<meta name=\"twitter:creator\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 30, $this->getSourceContext()); })()), "seo", array()), "twitterCreator", array()), "html", null, true);
                echo "\"/>";
            }
            // line 31
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 31, $this->getSourceContext()); })()), "seo", array()), "twitterDescription", array())) {
                echo "<meta name=\"twitter:description\" content=\"";
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 31, $this->getSourceContext()); })()), "seo", array()), "twitterDescription", array())), "html", null, true);
                echo "\"/>";
            }
            // line 32
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 32, $this->getSourceContext()); })()), "seo", array()), "twitterImage", array())) {
                echo "<meta name=\"twitter:image\" content=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "request", array()), "getSchemeAndHttpHost", array(), "method") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 32, $this->getSourceContext()); })()), "seo", array()), "twitterImage", array())), "html", null, true);
                echo "\"/>";
            }
            // line 33
            echo "
    ";
            // line 34
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 34, $this->getSourceContext()); })()), "seo", array()), "metaRobotsIndex", array())) {
                echo "<meta name=\"robots\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 34, $this->getSourceContext()); })()), "seo", array()), "metaRobotsIndex", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 34, $this->getSourceContext()); })()), "seo", array()), "metaRobotsFollow", array()), "html", null, true);
                echo "\"/>";
            }
            // line 35
            echo "    <!-- Robots advanced ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 35, $this->getSourceContext()); })()), "seo", array()), "metaRobotsAdvanced", array()), "html", null, true);
            echo " -->

    ";
            // line 37
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 37, $this->getSourceContext()); })()), "seo", array()), "relCanonical", array())) {
                echo "<link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 37, $this->getSourceContext()); })()), "seo", array()), "relCanonical", array()), "html", null, true);
                echo "\"/>";
            }
            // line 38
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 38, $this->getSourceContext()); })()), "seo", array()), "keyword", array())) {
                echo "<meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 38, $this->getSourceContext()); })()), "seo", array()), "keyword", array()), "html", null, true);
                echo "\"/>";
            }
            // line 39
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 39, $this->getSourceContext()); })()), "seo", array()), "metaRobotsAdvanced", array())) {
                // line 40
                echo "        <meta name=\"robots\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 40, $this->getSourceContext()); })()), "seo", array()), "metaRobotsAdvanced", array()), "html", null, true);
                echo "\"/>
    ";
            } else {
                // line 42
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 42, $this->getSourceContext()); })()), "seo", array()), "metaRobotsIndex", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 42, $this->getSourceContext()); })()), "seo", array()), "metaRobotsFollow", array()))) {
                    echo "<meta name=\"robots\" content=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 42, $this->getSourceContext()); })()), "seo", array()), "metaRobotsIndex", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 42, $this->getSourceContext()); })()), "seo", array()), "metaRobotsFollow", array()), "html", null, true);
                    echo "\"/>";
                }
                // line 43
                echo "    ";
            }
        } else {
            // line 45
            echo "    <title>";
            echo twig_escape_filter($this->env, strip_tags(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "name", array()), "Victoire DCMS")) : ("Victoire DCMS"))), "html", null, true);
            echo "</title>
";
        }
        
        $__internal_686d38f6ce29ff7dee3b406eeb2e42592c122a59050b00518dfed2bc260d4338->leave($__internal_686d38f6ce29ff7dee3b406eeb2e42592c122a59050b00518dfed2bc260d4338_prof);

        
        $__internal_2e94e923683fbba7564cd43044700eac3118e66566abec4c55636fa904509b39->leave($__internal_2e94e923683fbba7564cd43044700eac3118e66566abec4c55636fa904509b39_prof);

    }

    public function getTemplateName()
    {
        return "VictoireSeoBundle::_meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 45,  219 => 43,  210 => 42,  204 => 40,  201 => 39,  194 => 38,  188 => 37,  182 => 35,  174 => 34,  171 => 33,  164 => 32,  157 => 31,  150 => 30,  143 => 29,  136 => 28,  130 => 27,  126 => 25,  119 => 24,  112 => 23,  105 => 22,  98 => 21,  91 => 20,  85 => 19,  81 => 17,  74 => 16,  68 => 15,  64 => 13,  57 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  35 => 6,  33 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"{{ charset|default('UTF-8') }}\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />

{% if view.articles is defined %}
    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ view.name }}\" href=\"{{ path('victoire_blog_rss', {'id': view.id}) }}\"/>
{% endif %}

{% if view is defined and view.seo is defined and view.seo %}
    <!-- Basics -->
    {% if view.seo.metaTitle %}<title>{{ view.seo.metaTitle|striptags }}</title>{% endif %}
    {% if view.seo.metaDescription %}<meta name=\"description\" content=\"{{ view.seo.metaDescription|striptags }}\"/>{% endif %}

    <!-- Google Authorship -->
    {% if view.seo.relAuthor %}<link rel=\"author\" href=\"{{ view.seo.relAuthor }}\"/>{% endif %}
    {% if view.seo.relPublisher %}<link rel=\"publisher\" href=\"{{ view.seo.relPublisher }}\"/>{% endif %}

    <!-- OpenGraph (Facebook, Linkedin, ...) -->
    {% if view.seo.ogTitle %}<meta property=\"og:title\" content=\"{{ view.seo.ogTitle|striptags }}\"/>{% endif %}
    {% if view.seo.ogType %}<meta property=\"og:type\" content=\"{{ view.seo.ogType }}\"/>{% endif %}
    {% if view.seo.ogImage %}<meta property=\"og:image\" content=\"{{ app.request.getSchemeAndHttpHost() ~ view.seo.ogImage }}\"/>{% endif %}
    {% if view.seo.ogUrl %}<meta property=\"og:url\" content=\"{{ view.seo.ogUrl }}\"/>{% endif %}
    {% if view.seo.ogDescription %}<meta property=\"og:description\" content=\"{{ view.seo.ogDescription|striptags }}\"/>{% endif %}
    {% if view.seo.fbAdmins %}<meta property=\"fb:admins\" content=\"{{ view.seo.fbAdmins }}\"/>{% endif %}

    <!-- Twitter -->
    {% if view.seo.twitterCard %}<meta name=\"twitter:card\" content=\"{{ view.seo|default({'twitterCard': 'summary'}).twitterCard }}\"/>{% endif %}
    {% if view.seo.twitterUrl %}<meta name=\"twitter:site\" content=\"{{ view.seo.twitterUrl }}\"/>{% endif %}
    {% if view.seo.twitterTitle %}<meta name=\"twitter:title\" content=\"{{ view.seo.twitterTitle|striptags }}\"/>{% endif %}
    {% if view.seo.twitterCreator %}<meta name=\"twitter:creator\" content=\"{{ view.seo.twitterCreator }}\"/>{% endif %}
    {% if view.seo.twitterDescription %}<meta name=\"twitter:description\" content=\"{{ view.seo.twitterDescription|striptags }}\"/>{% endif %}
    {% if view.seo.twitterImage %}<meta name=\"twitter:image\" content=\"{{ app.request.getSchemeAndHttpHost() ~ view.seo.twitterImage }}\"/>{% endif %}

    {% if view.seo.metaRobotsIndex %}<meta name=\"robots\" content=\"{{ view.seo.metaRobotsIndex }},{{ view.seo.metaRobotsFollow }}\"/>{% endif %}
    <!-- Robots advanced {{ view.seo.metaRobotsAdvanced }} -->

    {% if view.seo.relCanonical %}<link rel=\"canonical\" href=\"{{ view.seo.relCanonical }}\"/>{% endif %}
    {% if view.seo.keyword %}<meta name=\"keywords\" content=\"{{ view.seo.keyword }}\"/>{% endif %}
    {% if view.seo.metaRobotsAdvanced %}
        <meta name=\"robots\" content=\"{{ view.seo.metaRobotsAdvanced }}\"/>
    {% else %}
        {% if view.seo.metaRobotsIndex and view.seo.metaRobotsFollow %}<meta name=\"robots\" content=\"{{ view.seo.metaRobotsIndex }}, {{ view.seo.metaRobotsFollow }}\"/>{% endif %}
    {% endif %}
{% else %}
    <title>{{ view.name|default('Victoire DCMS')|striptags }}</title>
{% endif %}
", "VictoireSeoBundle::_meta.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/SeoBundle/Resources/views/_meta.html.twig");
    }
}
