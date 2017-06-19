<?php

/* knp_menu.html.twig */
class __TwigTemplate_16f2770fbddcf2d494475d28fa7e16a94bbca405fb1d8532d4fbeca2a4544178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8208b047a78a1196d6d89e7d178b2a15d679e470a487169c869dd74de2774634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8208b047a78a1196d6d89e7d178b2a15d679e470a487169c869dd74de2774634->enter($__internal_8208b047a78a1196d6d89e7d178b2a15d679e470a487169c869dd74de2774634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_cdf9fed7241a754fdc59e55e52ffaddb98955d67ce584d830aeb9d2bce0d9998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf9fed7241a754fdc59e55e52ffaddb98955d67ce584d830aeb9d2bce0d9998->enter($__internal_cdf9fed7241a754fdc59e55e52ffaddb98955d67ce584d830aeb9d2bce0d9998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8208b047a78a1196d6d89e7d178b2a15d679e470a487169c869dd74de2774634->leave($__internal_8208b047a78a1196d6d89e7d178b2a15d679e470a487169c869dd74de2774634_prof);

        
        $__internal_cdf9fed7241a754fdc59e55e52ffaddb98955d67ce584d830aeb9d2bce0d9998->leave($__internal_cdf9fed7241a754fdc59e55e52ffaddb98955d67ce584d830aeb9d2bce0d9998_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_034d9e05ed1868ed45f5750b86ecf97d39b063a639769bacf44fbcd48bcd6a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034d9e05ed1868ed45f5750b86ecf97d39b063a639769bacf44fbcd48bcd6a4c->enter($__internal_034d9e05ed1868ed45f5750b86ecf97d39b063a639769bacf44fbcd48bcd6a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_762d360bdb10a599f8327d425fe0987b5374f126704a204b140fe17757c46fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762d360bdb10a599f8327d425fe0987b5374f126704a204b140fe17757c46fc7->enter($__internal_762d360bdb10a599f8327d425fe0987b5374f126704a204b140fe17757c46fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_762d360bdb10a599f8327d425fe0987b5374f126704a204b140fe17757c46fc7->leave($__internal_762d360bdb10a599f8327d425fe0987b5374f126704a204b140fe17757c46fc7_prof);

        
        $__internal_034d9e05ed1868ed45f5750b86ecf97d39b063a639769bacf44fbcd48bcd6a4c->leave($__internal_034d9e05ed1868ed45f5750b86ecf97d39b063a639769bacf44fbcd48bcd6a4c_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_1e19d837e3d81c63e9e8c5b3b6c8923edd9601f887f974ad6d88cf4c7561c638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e19d837e3d81c63e9e8c5b3b6c8923edd9601f887f974ad6d88cf4c7561c638->enter($__internal_1e19d837e3d81c63e9e8c5b3b6c8923edd9601f887f974ad6d88cf4c7561c638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_e3429f23b9af3cab5a3a00fbe7c4d05a487d4433dbe83ee328a0e38f016e0ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3429f23b9af3cab5a3a00fbe7c4d05a487d4433dbe83ee328a0e38f016e0ee0->enter($__internal_e3429f23b9af3cab5a3a00fbe7c4d05a487d4433dbe83ee328a0e38f016e0ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_e3429f23b9af3cab5a3a00fbe7c4d05a487d4433dbe83ee328a0e38f016e0ee0->leave($__internal_e3429f23b9af3cab5a3a00fbe7c4d05a487d4433dbe83ee328a0e38f016e0ee0_prof);

        
        $__internal_1e19d837e3d81c63e9e8c5b3b6c8923edd9601f887f974ad6d88cf4c7561c638->leave($__internal_1e19d837e3d81c63e9e8c5b3b6c8923edd9601f887f974ad6d88cf4c7561c638_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_2e3b087a47cec7d242ae0bddf079c2bef24c65b2813ed545c9b87bd3eda2aa80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3b087a47cec7d242ae0bddf079c2bef24c65b2813ed545c9b87bd3eda2aa80->enter($__internal_2e3b087a47cec7d242ae0bddf079c2bef24c65b2813ed545c9b87bd3eda2aa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_6609f85675b7308a456d3043aedbecc129aac38792f0072c5c37b64ce52bf9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6609f85675b7308a456d3043aedbecc129aac38792f0072c5c37b64ce52bf9e9->enter($__internal_6609f85675b7308a456d3043aedbecc129aac38792f0072c5c37b64ce52bf9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 23, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 25, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_6609f85675b7308a456d3043aedbecc129aac38792f0072c5c37b64ce52bf9e9->leave($__internal_6609f85675b7308a456d3043aedbecc129aac38792f0072c5c37b64ce52bf9e9_prof);

        
        $__internal_2e3b087a47cec7d242ae0bddf079c2bef24c65b2813ed545c9b87bd3eda2aa80->leave($__internal_2e3b087a47cec7d242ae0bddf079c2bef24c65b2813ed545c9b87bd3eda2aa80_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_5b2e99573fbf9b9e0c913d3d2f9fb2932842a18ffecf8df51c64cbbad2b53010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2e99573fbf9b9e0c913d3d2f9fb2932842a18ffecf8df51c64cbbad2b53010->enter($__internal_5b2e99573fbf9b9e0c913d3d2f9fb2932842a18ffecf8df51c64cbbad2b53010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_979fdfe1c3f902988d887512cebfd2536badd0fd493b152406325166767185f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979fdfe1c3f902988d887512cebfd2536badd0fd493b152406325166767185f1->enter($__internal_979fdfe1c3f902988d887512cebfd2536badd0fd493b152406325166767185f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 33, $this->getSourceContext()); })());
        // line 34
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })());
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 36, $this->getSourceContext()); })()), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->getSourceContext()); })()), array("depth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 37, $this->getSourceContext()); })()), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 41, $this->getSourceContext()); })()), array("matchingDepth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 41, $this->getSourceContext()); })()), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 43, $this->getSourceContext()); })()), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 47, $this->getSourceContext()); })());
        // line 48
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 48, $this->getSourceContext()); })());
        
        $__internal_979fdfe1c3f902988d887512cebfd2536badd0fd493b152406325166767185f1->leave($__internal_979fdfe1c3f902988d887512cebfd2536badd0fd493b152406325166767185f1_prof);

        
        $__internal_5b2e99573fbf9b9e0c913d3d2f9fb2932842a18ffecf8df51c64cbbad2b53010->leave($__internal_5b2e99573fbf9b9e0c913d3d2f9fb2932842a18ffecf8df51c64cbbad2b53010_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_72279df85bc4f96ff526c40454575b5ee95b32f1efa55c3d36fdfa1d0bb3e965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72279df85bc4f96ff526c40454575b5ee95b32f1efa55c3d36fdfa1d0bb3e965->enter($__internal_72279df85bc4f96ff526c40454575b5ee95b32f1efa55c3d36fdfa1d0bb3e965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_2671f96bd0822c6c0f1c3d83570dd3fc50d9d5e27a28638908b4351708ee6d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2671f96bd0822c6c0f1c3d83570dd3fc50d9d5e27a28638908b4351708ee6d9c->enter($__internal_2671f96bd0822c6c0f1c3d83570dd3fc50d9d5e27a28638908b4351708ee6d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->getSourceContext()); })()), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 55, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->getSourceContext()); })())), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 56, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 56, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 57
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 57, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 57, $this->getSourceContext()); })()), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 58, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 58, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 60
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 61, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 61, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 63
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 64, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 64, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 68, $this->getSourceContext()); })()), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 69, $this->getSourceContext()); })()), "branch_class", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->getSourceContext()); })()), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 70, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 70, $this->getSourceContext()); })()), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 72, $this->getSourceContext()); })()), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 73, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 73, $this->getSourceContext()); })()), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 77, $this->getSourceContext()); })()))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 78, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 78, $this->getSourceContext()); })()), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 82, $this->getSourceContext()); })()));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 83, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })())), "method") || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 83, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 90, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->getSourceContext()); })()), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 91, $this->getSourceContext()); })()), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_2671f96bd0822c6c0f1c3d83570dd3fc50d9d5e27a28638908b4351708ee6d9c->leave($__internal_2671f96bd0822c6c0f1c3d83570dd3fc50d9d5e27a28638908b4351708ee6d9c_prof);

        
        $__internal_72279df85bc4f96ff526c40454575b5ee95b32f1efa55c3d36fdfa1d0bb3e965->leave($__internal_72279df85bc4f96ff526c40454575b5ee95b32f1efa55c3d36fdfa1d0bb3e965_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_131dde93ccedbcd3bd8a3eff9df2cc6af38fb82f4170c9a2705ca90880547769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131dde93ccedbcd3bd8a3eff9df2cc6af38fb82f4170c9a2705ca90880547769->enter($__internal_131dde93ccedbcd3bd8a3eff9df2cc6af38fb82f4170c9a2705ca90880547769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_612b7799e0c04cbcbc67290b5768f06dbe812e2f88be226890fe3a6b1509cbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612b7799e0c04cbcbc67290b5768f06dbe812e2f88be226890fe3a6b1509cbbd->enter($__internal_612b7799e0c04cbcbc67290b5768f06dbe812e2f88be226890fe3a6b1509cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_612b7799e0c04cbcbc67290b5768f06dbe812e2f88be226890fe3a6b1509cbbd->leave($__internal_612b7799e0c04cbcbc67290b5768f06dbe812e2f88be226890fe3a6b1509cbbd_prof);

        
        $__internal_131dde93ccedbcd3bd8a3eff9df2cc6af38fb82f4170c9a2705ca90880547769->leave($__internal_131dde93ccedbcd3bd8a3eff9df2cc6af38fb82f4170c9a2705ca90880547769_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_5e2041b11cdaedfdcaf42f8b9003656c5f67a5b2af0d6c2736200a24d154b3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2041b11cdaedfdcaf42f8b9003656c5f67a5b2af0d6c2736200a24d154b3b3->enter($__internal_5e2041b11cdaedfdcaf42f8b9003656c5f67a5b2af0d6c2736200a24d154b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_136f8a9300eafccfb5a5819dbd32163a108cabe89007d0738a77afb3e55e2e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136f8a9300eafccfb5a5819dbd32163a108cabe89007d0738a77afb3e55e2e20->enter($__internal_136f8a9300eafccfb5a5819dbd32163a108cabe89007d0738a77afb3e55e2e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->getSourceContext()); })()), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_136f8a9300eafccfb5a5819dbd32163a108cabe89007d0738a77afb3e55e2e20->leave($__internal_136f8a9300eafccfb5a5819dbd32163a108cabe89007d0738a77afb3e55e2e20_prof);

        
        $__internal_5e2041b11cdaedfdcaf42f8b9003656c5f67a5b2af0d6c2736200a24d154b3b3->leave($__internal_5e2041b11cdaedfdcaf42f8b9003656c5f67a5b2af0d6c2736200a24d154b3b3_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_277d8768e06c3728312e70a4ec994e7c1cefc29cca427b03ca8bab851c0bbda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277d8768e06c3728312e70a4ec994e7c1cefc29cca427b03ca8bab851c0bbda9->enter($__internal_277d8768e06c3728312e70a4ec994e7c1cefc29cca427b03ca8bab851c0bbda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_10221c55e0496c8027cb80ebb889d87ef6354ed94996a1627f0c694a161f202c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10221c55e0496c8027cb80ebb889d87ef6354ed94996a1627f0c694a161f202c->enter($__internal_10221c55e0496c8027cb80ebb889d87ef6354ed94996a1627f0c694a161f202c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 101, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "label", array()), "html", null, true);
        }
        
        $__internal_10221c55e0496c8027cb80ebb889d87ef6354ed94996a1627f0c694a161f202c->leave($__internal_10221c55e0496c8027cb80ebb889d87ef6354ed94996a1627f0c694a161f202c_prof);

        
        $__internal_277d8768e06c3728312e70a4ec994e7c1cefc29cca427b03ca8bab851c0bbda9->leave($__internal_277d8768e06c3728312e70a4ec994e7c1cefc29cca427b03ca8bab851c0bbda9_prof);

    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_94810b0edff23d246de10a39153e1253ddf5b55587b08ba12fa879e0350ea280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_94810b0edff23d246de10a39153e1253ddf5b55587b08ba12fa879e0350ea280->enter($__internal_94810b0edff23d246de10a39153e1253ddf5b55587b08ba12fa879e0350ea280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_900107e62b33d3478ec47bba92907b45f35c7d8a477680031f9d9d7ae261d658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_900107e62b33d3478ec47bba92907b45f35c7d8a477680031f9d9d7ae261d658->enter($__internal_900107e62b33d3478ec47bba92907b45f35c7d8a477680031f9d9d7ae261d658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_900107e62b33d3478ec47bba92907b45f35c7d8a477680031f9d9d7ae261d658->leave($__internal_900107e62b33d3478ec47bba92907b45f35c7d8a477680031f9d9d7ae261d658_prof);

            
            $__internal_94810b0edff23d246de10a39153e1253ddf5b55587b08ba12fa879e0350ea280->leave($__internal_94810b0edff23d246de10a39153e1253ddf5b55587b08ba12fa879e0350ea280_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/var/www/html/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
