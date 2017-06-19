<?php

/* VictoireCoreBundle:Menu:knp_menu_main.html.twig */
class __TwigTemplate_17d34af2e4b7eb525ae433424645da1606a53e20ec00b61e42fee92dfde46602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "VictoireCoreBundle:Menu:knp_menu_main.html.twig", 2);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
            'label' => array($this, 'block_label'),
            'dropdown' => array($this, 'block_dropdown'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc0c910e7f8abb2e1719de81dff1b25d88bcceb0f7545895a73a3202f7bac3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0c910e7f8abb2e1719de81dff1b25d88bcceb0f7545895a73a3202f7bac3b7->enter($__internal_bc0c910e7f8abb2e1719de81dff1b25d88bcceb0f7545895a73a3202f7bac3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Menu:knp_menu_main.html.twig"));

        $__internal_004571115dcd8eb1704f8fdb6b2f40fc3c4170e2e81806f3c049ed4c4b0d3f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004571115dcd8eb1704f8fdb6b2f40fc3c4170e2e81806f3c049ed4c4b0d3f2c->enter($__internal_004571115dcd8eb1704f8fdb6b2f40fc3c4170e2e81806f3c049ed4c4b0d3f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle:Menu:knp_menu_main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0c910e7f8abb2e1719de81dff1b25d88bcceb0f7545895a73a3202f7bac3b7->leave($__internal_bc0c910e7f8abb2e1719de81dff1b25d88bcceb0f7545895a73a3202f7bac3b7_prof);

        
        $__internal_004571115dcd8eb1704f8fdb6b2f40fc3c4170e2e81806f3c049ed4c4b0d3f2c->leave($__internal_004571115dcd8eb1704f8fdb6b2f40fc3c4170e2e81806f3c049ed4c4b0d3f2c_prof);

    }

    // line 4
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_d26811d530232151da94c88614310262272d968e96af4d370c57e1ec152853d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26811d530232151da94c88614310262272d968e96af4d370c57e1ec152853d0->enter($__internal_d26811d530232151da94c88614310262272d968e96af4d370c57e1ec152853d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_cf81ac6596fb0b92995608ce5cb832d59df10ca811ea5ab815057ef87179c29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf81ac6596fb0b92995608ce5cb832d59df10ca811ea5ab815057ef87179c29e->enter($__internal_cf81ac6596fb0b92995608ce5cb832d59df10ca811ea5ab815057ef87179c29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 5
        ob_start();
        // line 6
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "VictoireCoreBundle:Menu:knp_menu_main.html.twig", 6);
        // line 7
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "caret", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "caret", array()), false)) : (false))) {
            // line 8
            echo "    <div class=\"vic-dropdown\">
        <a data-toggle=\"vic-dropdown\"";
            // line 9
            echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "linkAttributes", array()));
            echo " title=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(            $this->renderBlock("label", $context, $blocks))), "html", null, true);
            echo "\">
            <span>";
            // line 10
            $this->displayBlock("label", $context, $blocks);
            echo "</span>
            <span class=\"vic-caret\"></span>
        </a>
        <ul class=\"vic-dropdown-menu\" role=\"menu\" aria-labelledby=\"";
            // line 13
            $this->displayBlock("label", $context, $blocks);
            echo "DropdownMenu\">
            ";
            // line 14
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    </div>
";
        } else {
            // line 18
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
            echo "\"";
            echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "linkAttributes", array()));
            echo " title=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(            $this->renderBlock("label", $context, $blocks))), "html", null, true);
            echo "\">
    ";
            // line 19
            $this->displayBlock("label", $context, $blocks);
            echo "
    </a>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cf81ac6596fb0b92995608ce5cb832d59df10ca811ea5ab815057ef87179c29e->leave($__internal_cf81ac6596fb0b92995608ce5cb832d59df10ca811ea5ab815057ef87179c29e_prof);

        
        $__internal_d26811d530232151da94c88614310262272d968e96af4d370c57e1ec152853d0->leave($__internal_d26811d530232151da94c88614310262272d968e96af4d370c57e1ec152853d0_prof);

    }

    // line 24
    public function block_label($context, array $blocks = array())
    {
        $__internal_bbbcade14c3b95d68049bb7a9913f37a72dd54a4b492e3af6c067a5519404ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbcade14c3b95d68049bb7a9913f37a72dd54a4b492e3af6c067a5519404ebf->enter($__internal_bbbcade14c3b95d68049bb7a9913f37a72dd54a4b492e3af6c067a5519404ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_133ce877400e6e956ecebc0af25141c19df75b9dd19af2b8a6edf58a8e1660cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133ce877400e6e956ecebc0af25141c19df75b9dd19af2b8a6edf58a8e1660cd->enter($__internal_133ce877400e6e956ecebc0af25141c19df75b9dd19af2b8a6edf58a8e1660cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->getSourceContext()); })()), "label", array()), array(), "victoire");
        
        $__internal_133ce877400e6e956ecebc0af25141c19df75b9dd19af2b8a6edf58a8e1660cd->leave($__internal_133ce877400e6e956ecebc0af25141c19df75b9dd19af2b8a6edf58a8e1660cd_prof);

        
        $__internal_bbbcade14c3b95d68049bb7a9913f37a72dd54a4b492e3af6c067a5519404ebf->leave($__internal_bbbcade14c3b95d68049bb7a9913f37a72dd54a4b492e3af6c067a5519404ebf_prof);

    }

    // line 25
    public function block_dropdown($context, array $blocks = array())
    {
        $__internal_2c2d870d196f5aab239181b3b39f4246703ca7ac544e8ca9bef253265b14e3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2d870d196f5aab239181b3b39f4246703ca7ac544e8ca9bef253265b14e3b4->enter($__internal_2c2d870d196f5aab239181b3b39f4246703ca7ac544e8ca9bef253265b14e3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdown"));

        $__internal_6696058649933fe7fd238f56210afa2bca1d79f68b0160297b1b8b914192e034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6696058649933fe7fd238f56210afa2bca1d79f68b0160297b1b8b914192e034->enter($__internal_6696058649933fe7fd238f56210afa2bca1d79f68b0160297b1b8b914192e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdown"));

        if ((((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 25, $this->getSourceContext()); })()) == 2) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "hasChildren", array()))) {
            echo "vic-dropdown-menu";
        }
        
        $__internal_6696058649933fe7fd238f56210afa2bca1d79f68b0160297b1b8b914192e034->leave($__internal_6696058649933fe7fd238f56210afa2bca1d79f68b0160297b1b8b914192e034_prof);

        
        $__internal_2c2d870d196f5aab239181b3b39f4246703ca7ac544e8ca9bef253265b14e3b4->leave($__internal_2c2d870d196f5aab239181b3b39f4246703ca7ac544e8ca9bef253265b14e3b4_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle:Menu:knp_menu_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  107 => 24,  92 => 19,  83 => 18,  76 => 14,  72 => 13,  66 => 10,  60 => 9,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  42 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}
{% extends 'knp_menu.html.twig' %}

{% block linkElement %}
{% spaceless %}
{% import 'knp_menu.html.twig' as macros %}
{% if item.extras.caret|default(false) %}
    <div class=\"vic-dropdown\">
        <a data-toggle=\"vic-dropdown\"{{ macros.attributes(item.linkAttributes) }} title=\"{{ block('label')|striptags|trim }}\">
            <span>{{ block('label') }}</span>
            <span class=\"vic-caret\"></span>
        </a>
        <ul class=\"vic-dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ block('label') }}DropdownMenu\">
            {{ block('children') }}
        </ul>
    </div>
{% else %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }} title=\"{{ block('label')|striptags|trim }}\">
    {{ block('label') }}
    </a>
{% endif -%}
{% endspaceless %}
{% endblock %}
{% block label %}{{ item.label|trans|raw }}{% endblock %}
{% block dropdown %}{% if level == 2 and item.hasChildren %}vic-dropdown-menu{% endif %}{% endblock %}
", "VictoireCoreBundle:Menu:knp_menu_main.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/Menu/knp_menu_main.html.twig");
    }
}
