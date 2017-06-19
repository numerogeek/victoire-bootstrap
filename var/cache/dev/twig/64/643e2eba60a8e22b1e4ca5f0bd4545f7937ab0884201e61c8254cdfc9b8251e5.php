<?php

/* VictoireCoreBundle:Menu:admin_navbar.html.twig */
class __TwigTemplate_4eed106cd1691e0816ee496a6701862bd4f7e91a737528169631643d3ba1e4ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'brand' => array($this, 'block_brand'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59c959d3ecbd6fa63916f77e83c12cb55b30e2eb580c1ef0e9ced119260b5ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c959d3ecbd6fa63916f77e83c12cb55b30e2eb580c1ef0e9ced119260b5ab4->enter($__internal_59c959d3ecbd6fa63916f77e83c12cb55b30e2eb580c1ef0e9ced119260b5ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Menu:admin_navbar.html.twig"));

        $__internal_2a1141b269f77bcde862478650c9c20e27621cf22783c28a3b797d23534bc462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1141b269f77bcde862478650c9c20e27621cf22783c28a3b797d23534bc462->enter($__internal_2a1141b269f77bcde862478650c9c20e27621cf22783c28a3b797d23534bc462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Menu:admin_navbar.html.twig"));

        // line 1
        echo "<header id=\"v-header\" class=\"v-navbar v-navbar--lg v-navbar--header\">
    <div class=\"v-container v-container--fluid\">
        ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "    </div>
</header>

";
        // line 35
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("floatactionnavbar");
        echo "

<footer class=\"v-navbar\" id=\"footer\">
    <div class=\"v-container v-container--fluid\">
        <div class=\"v-flex-grid v-flex-grid--align-center\">
            <div class=\"v-flex-col v-flex-col--grow-1 v-flex-col--shrink-0 v-flex-col--basis-0\">
                ";
        // line 41
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("bottomleftnavbar");
        echo "
            </div>

            <div class=\"v-flex-col v-flex-col--grow-1 v-flex-col--shrink-0 v-flex-col--basis-0 v-text--center\">
                ";
        // line 45
        $this->loadTemplate("VictoireUIBundle:Bricks:mode-switcher.html.twig", "VictoireCoreBundle:Menu:admin_navbar.html.twig", 45)->display(array_merge($context, array("name" => "mode-switcher", "startMode" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 47
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "victoire.edit_mode"), "method"))));
        // line 49
        echo "            </div>

            <div class=\"v-flex-col v-flex-col--grow-1 v-flex-col--shrink-0 v-flex-col--basis-0 v-text--right\">
                <div class=\"v-flex-grid v-flex-grid--align-center v-flex-grid--justify-end\">
                    <div class=\"v-flex-col\">
                        ";
        // line 54
        if ((array_key_exists("view", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["view"] ?? null), "published", array(), "any", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 54, $this->getSourceContext()); })()), "published", array())))) {
            // line 55
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 55, $this->getSourceContext()); })()), "status", array()) == twig_constant("Victoire\\Bundle\\PageBundle\\Entity\\PageStatus::SCHEDULED"))) {
                // line 56
                echo "                                ";
                $context["icon"] = "clock-o";
                // line 57
                echo "                                ";
                $context["theme"] = "info";
                // line 58
                echo "                                ";
                $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.menu.publication.scheduled.tooltip", array("%publication_date%" => twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 58, $this->getSourceContext()); })()), "publishedAt", array()), "medium", "none", null, null, "cccc dd/MM/yyyy à hh'h'mm")), "victoire");
                // line 59
                echo "                            ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 59, $this->getSourceContext()); })()), "status", array()) == twig_constant("Victoire\\Bundle\\PageBundle\\Entity\\PageStatus::DRAFT"))) {
                // line 60
                echo "                                ";
                $context["icon"] = "pencil";
                // line 61
                echo "                                ";
                $context["theme"] = "warning";
                // line 62
                echo "                                ";
                $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.menu.publication.draft.tooltip", array(), "victoire");
                // line 63
                echo "                            ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 63, $this->getSourceContext()); })()), "status", array()) == twig_constant("Victoire\\Bundle\\PageBundle\\Entity\\PageStatus::UNPUBLISHED"))) {
                // line 64
                echo "                                ";
                $context["icon"] = "moon-o";
                // line 65
                echo "                                ";
                $context["theme"] = "danger";
                // line 66
                echo "                                ";
                $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.menu.publication.unpublished.tooltip", array(), "victoire");
                // line 67
                echo "                            ";
            }
            // line 68
            echo "
                            <a class=\"v-btn v-btn--sm v-btn--";
            // line 69
            echo twig_escape_filter($this->env, ((array_key_exists("theme", $context)) ? (_twig_default_filter((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 69, $this->getSourceContext()); })()), "success")) : ("success")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("victoire_core_page_settings", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 69, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"vic-modal\" ";
            if (array_key_exists("tooltip", $context)) {
                echo "data-flag=\"v-drop\" data-position=\"topout center\" data-droptarget=\"#view-status-dropdown\" data-behavior=\"hover\"";
            }
            echo ">
                                <i class=\"fa fa-";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 70, $this->getSourceContext()); })()), "html", null, true);
            echo " fa-2x\"></i>
                            </a>

                            ";
            // line 73
            if (array_key_exists("tooltip", $context)) {
                // line 74
                echo "                                <div class=\"v-drop v-drop--tooltip\" id=\"view-status-dropdown\">
                                    <div class=\"v-drop__content\">
                                        ";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "tooltip" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
                echo "
                                    </div>
                                </div>
                            ";
            }
            // line 80
            echo "                        ";
        }
        // line 81
        echo "                    </div>

                    <div class=\"v-flex-col\">
                        ";
        // line 84
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("bottomrightnavbar");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_59c959d3ecbd6fa63916f77e83c12cb55b30e2eb580c1ef0e9ced119260b5ab4->leave($__internal_59c959d3ecbd6fa63916f77e83c12cb55b30e2eb580c1ef0e9ced119260b5ab4_prof);

        
        $__internal_2a1141b269f77bcde862478650c9c20e27621cf22783c28a3b797d23534bc462->leave($__internal_2a1141b269f77bcde862478650c9c20e27621cf22783c28a3b797d23534bc462_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_48f8cc0b6660bcd5b48f7e9accdef480f62950cfa5c60cfa108731adb5288475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f8cc0b6660bcd5b48f7e9accdef480f62950cfa5c60cfa108731adb5288475->enter($__internal_48f8cc0b6660bcd5b48f7e9accdef480f62950cfa5c60cfa108731adb5288475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_63c0942df1654a6f233d7ff3238508b6953cd48c548e213a73be957e61ec8096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c0942df1654a6f233d7ff3238508b6953cd48c548e213a73be957e61ec8096->enter($__internal_63c0942df1654a6f233d7ff3238508b6953cd48c548e213a73be957e61ec8096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <div class=\"v-flex-grid v-flex-grid--gutter-lg  v-flex-grid--align-center\">
                <div class=\"v-flex-col\">
                    ";
        // line 6
        $this->displayBlock('brand', $context, $blocks);
        // line 11
        echo "                </div>

                <div class=\"v-flex-col v-flex-col--grow-1\">
                    ";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "                </div>

                <div class=\"v-flex-col\">
                    <a class=\"v-btn v-btn--transparent v-btn--sm\" data-flag=\"v-drop\" data-position=\"bottomout rightin\" data-droptarget=\"#v-header-drop-profile\">
                        <img class=\"v-image--profile\" src=\"https://www.gravatar.com/avatar/";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->hash(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "email", array())), "html", null, true);
        echo "?s=70&d=";
        echo twig_escape_filter($this->env, twig_urlencode_filter("https://fr.gravatar.com/userimage/63937294/1d5eaaa346a27c5915344db44177b469.png?size=70"), "html", null, true);
        echo "\">
                    </a>

                    <div class=\"v-drop\" id=\"v-header-drop-profile\">
                        <nav class=\"v-drop__menu\">
                            <a class=\"v-drop__anchor\" href=\"";
        // line 26
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("vicmenu.logout.label", array(), "victoire"), "html", null, true);
        echo "</a>
                        </nav>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_63c0942df1654a6f233d7ff3238508b6953cd48c548e213a73be957e61ec8096->leave($__internal_63c0942df1654a6f233d7ff3238508b6953cd48c548e213a73be957e61ec8096_prof);

        
        $__internal_48f8cc0b6660bcd5b48f7e9accdef480f62950cfa5c60cfa108731adb5288475->leave($__internal_48f8cc0b6660bcd5b48f7e9accdef480f62950cfa5c60cfa108731adb5288475_prof);

    }

    // line 6
    public function block_brand($context, array $blocks = array())
    {
        $__internal_a2490ca6033db9805fe972e9247f3866d183ef7ec292f1e40366ac25d9faed99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2490ca6033db9805fe972e9247f3866d183ef7ec292f1e40366ac25d9faed99->enter($__internal_a2490ca6033db9805fe972e9247f3866d183ef7ec292f1e40366ac25d9faed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        $__internal_0af2b553428ba86a8572c5e8ecb1ece5cfbbb670528bf0070b87bc8b062b147a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af2b553428ba86a8572c5e8ecb1ece5cfbbb670528bf0070b87bc8b062b147a->enter($__internal_0af2b553428ba86a8572c5e8ecb1ece5cfbbb670528bf0070b87bc8b062b147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        // line 7
        echo "                        ";
        $this->loadTemplate("VictoireUIBundle:SVG:logo.html.twig", "VictoireCoreBundle:Menu:admin_navbar.html.twig", 7)->display(array_merge($context, array("height" => 60)));
        // line 10
        echo "                    ";
        
        $__internal_0af2b553428ba86a8572c5e8ecb1ece5cfbbb670528bf0070b87bc8b062b147a->leave($__internal_0af2b553428ba86a8572c5e8ecb1ece5cfbbb670528bf0070b87bc8b062b147a_prof);

        
        $__internal_a2490ca6033db9805fe972e9247f3866d183ef7ec292f1e40366ac25d9faed99->leave($__internal_a2490ca6033db9805fe972e9247f3866d183ef7ec292f1e40366ac25d9faed99_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca7777511c90bc70c250af578dfab9b40d6b120a520172c7d145c1fa51c5b754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7777511c90bc70c250af578dfab9b40d6b120a520172c7d145c1fa51c5b754->enter($__internal_ca7777511c90bc70c250af578dfab9b40d6b120a520172c7d145c1fa51c5b754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4856753d2865388db639f2daab82cf5c9e8e1a955a2201201efde1fbd5bd3a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4856753d2865388db639f2daab82cf5c9e8e1a955a2201201efde1fbd5bd3a8e->enter($__internal_4856753d2865388db639f2daab82cf5c9e8e1a955a2201201efde1fbd5bd3a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo "                        ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("topnavbar");
        echo "
                    ";
        
        $__internal_4856753d2865388db639f2daab82cf5c9e8e1a955a2201201efde1fbd5bd3a8e->leave($__internal_4856753d2865388db639f2daab82cf5c9e8e1a955a2201201efde1fbd5bd3a8e_prof);

        
        $__internal_ca7777511c90bc70c250af578dfab9b40d6b120a520172c7d145c1fa51c5b754->leave($__internal_ca7777511c90bc70c250af578dfab9b40d6b120a520172c7d145c1fa51c5b754_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle:Menu:admin_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 15,  242 => 14,  232 => 10,  229 => 7,  220 => 6,  202 => 26,  192 => 21,  186 => 17,  184 => 14,  179 => 11,  177 => 6,  173 => 4,  164 => 3,  146 => 84,  141 => 81,  138 => 80,  131 => 76,  127 => 74,  125 => 73,  119 => 70,  109 => 69,  106 => 68,  103 => 67,  100 => 66,  97 => 65,  94 => 64,  91 => 63,  88 => 62,  85 => 61,  82 => 60,  79 => 59,  76 => 58,  73 => 57,  70 => 56,  67 => 55,  65 => 54,  58 => 49,  56 => 47,  55 => 45,  48 => 41,  39 => 35,  34 => 32,  32 => 3,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"v-header\" class=\"v-navbar v-navbar--lg v-navbar--header\">
    <div class=\"v-container v-container--fluid\">
        {% block header %}
            <div class=\"v-flex-grid v-flex-grid--gutter-lg  v-flex-grid--align-center\">
                <div class=\"v-flex-col\">
                    {% block brand %}
                        {% include \"VictoireUIBundle:SVG:logo.html.twig\" with {
                            \"height\": 60,
                        } %}
                    {% endblock brand %}
                </div>

                <div class=\"v-flex-col v-flex-col--grow-1\">
                    {% block menu %}
                        {{ knp_menu_render('topnavbar') }}
                    {% endblock %}
                </div>

                <div class=\"v-flex-col\">
                    <a class=\"v-btn v-btn--transparent v-btn--sm\" data-flag=\"v-drop\" data-position=\"bottomout rightin\" data-droptarget=\"#v-header-drop-profile\">
                        <img class=\"v-image--profile\" src=\"https://www.gravatar.com/avatar/{{ app.user.email|hash }}?s=70&d={{ 'https://fr.gravatar.com/userimage/63937294/1d5eaaa346a27c5915344db44177b469.png?size=70'|url_encode }}\">
                    </a>

                    <div class=\"v-drop\" id=\"v-header-drop-profile\">
                        <nav class=\"v-drop__menu\">
                            <a class=\"v-drop__anchor\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'vicmenu.logout.label'|trans({}, 'victoire') }}</a>
                        </nav>
                    </div>
                </div>
            </div>
        {% endblock %}
    </div>
</header>

{{ knp_menu_render('floatactionnavbar') }}

<footer class=\"v-navbar\" id=\"footer\">
    <div class=\"v-container v-container--fluid\">
        <div class=\"v-flex-grid v-flex-grid--align-center\">
            <div class=\"v-flex-col v-flex-col--grow-1 v-flex-col--shrink-0 v-flex-col--basis-0\">
                {{ knp_menu_render('bottomleftnavbar') }}
            </div>

            <div class=\"v-flex-col v-flex-col--grow-1 v-flex-col--shrink-0 v-flex-col--basis-0 v-text--center\">
                {% include \"VictoireUIBundle:Bricks:mode-switcher.html.twig\" with {
                    \"name\": \"mode-switcher\",
                    \"startMode\": app.session.get('victoire.edit_mode'),
                } %}
            </div>

            <div class=\"v-flex-col v-flex-col--grow-1 v-flex-col--shrink-0 v-flex-col--basis-0 v-text--right\">
                <div class=\"v-flex-grid v-flex-grid--align-center v-flex-grid--justify-end\">
                    <div class=\"v-flex-col\">
                        {% if view is defined and (view.published is defined and not view.published) %}
                            {% if view.status == constant('Victoire\\\\Bundle\\\\PageBundle\\\\Entity\\\\PageStatus::SCHEDULED') %}
                                {% set icon = \"clock-o\" %}
                                {% set theme = \"info\" %}
                                {% set tooltip = \"victoire.menu.publication.scheduled.tooltip\"|trans({'%publication_date%': view.publishedAt|localizeddate('medium', 'none', null, null, \"cccc dd/MM/yyyy à hh'h'mm\") }, 'victoire') %}
                            {% elseif view.status == constant('Victoire\\\\Bundle\\\\PageBundle\\\\Entity\\\\PageStatus::DRAFT') %}
                                {% set icon = \"pencil\" %}
                                {% set theme = \"warning\" %}
                                {% set tooltip = \"victoire.menu.publication.draft.tooltip\"|trans({}, 'victoire') %}
                            {% elseif view.status == constant('Victoire\\\\Bundle\\\\PageBundle\\\\Entity\\\\PageStatus::UNPUBLISHED') %}
                                {% set icon = \"moon-o\" %}
                                {% set theme = \"danger\" %}
                                {% set tooltip = \"victoire.menu.publication.unpublished.tooltip\"|trans({}, 'victoire') %}
                            {% endif %}

                            <a class=\"v-btn v-btn--sm v-btn--{{ theme|default('success') }}\" href=\"{{ path('victoire_core_page_settings', {'id' : view.id }) }}\" data-toggle=\"vic-modal\" {% if tooltip is defined %}data-flag=\"v-drop\" data-position=\"topout center\" data-droptarget=\"#view-status-dropdown\" data-behavior=\"hover\"{% endif %}>
                                <i class=\"fa fa-{{ icon }} fa-2x\"></i>
                            </a>

                            {% if tooltip is defined %}
                                <div class=\"v-drop v-drop--tooltip\" id=\"view-status-dropdown\">
                                    <div class=\"v-drop__content\">
                                        {{ tooltip }}
                                    </div>
                                </div>
                            {% endif %}
                        {% endif %}
                    </div>

                    <div class=\"v-flex-col\">
                        {{ knp_menu_render('bottomrightnavbar') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
", "VictoireCoreBundle:Menu:admin_navbar.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/Menu/admin_navbar.html.twig");
    }
}
