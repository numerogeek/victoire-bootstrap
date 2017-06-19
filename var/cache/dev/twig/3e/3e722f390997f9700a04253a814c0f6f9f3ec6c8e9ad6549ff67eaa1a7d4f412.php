<?php

/* VictoireFormBundle:Form:fields.html.twig */
class __TwigTemplate_f65cd0c1351198e97cf8839cd936c48a940b8e51bc6f73d7a7e8f56ba69e250e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "VictoireFormBundle:Form:fields.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("VictoireFormBundle:Form:localeTabs.html.twig", "VictoireFormBundle:Form:fields.html.twig", 3);
        // line 3
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."VictoireFormBundle:Form:localeTabs.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'urlvalidated_row' => array($this, 'block_urlvalidated_row'),
                'urlvalidated_widget' => array($this, 'block_urlvalidated_widget'),
                'asynchronous_row' => array($this, 'block_asynchronous_row'),
                'criteria_collection_row' => array($this, 'block_criteria_collection_row'),
                'criteria_row' => array($this, 'block_criteria_row'),
                'tags_widget' => array($this, 'block_tags_widget'),
                'slug_widget' => array($this, 'block_slug_widget'),
                'button_attributes' => array($this, 'block_button_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'button_row' => array($this, 'block_button_row'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'form_tabs' => array($this, 'block_form_tabs'),
                'tabs_widget' => array($this, 'block_tabs_widget'),
                'form_tab' => array($this, 'block_form_tab'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_legend' => array($this, 'block_form_legend'),
                'form_label' => array($this, 'block_form_label'),
                'vic_help_label' => array($this, 'block_vic_help_label'),
                'vic_help_label_tooltip' => array($this, 'block_vic_help_label_tooltip'),
                'vic_help_label_popover' => array($this, 'block_vic_help_label_popover'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form_rows_visible' => array($this, 'block_form_rows_visible'),
                'form_row' => array($this, 'block_form_row'),
                'form_message' => array($this, 'block_form_message'),
                'form_help' => array($this, 'block_form_help'),
                'form_vic_widget_add_btn' => array($this, 'block_form_vic_widget_add_btn'),
                'form_vic_widget_remove_btn' => array($this, 'block_form_vic_widget_remove_btn'),
                'collection_button' => array($this, 'block_collection_button'),
                'label_asterisk' => array($this, 'block_label_asterisk'),
                'widget_addon' => array($this, 'block_widget_addon'),
                'form_errors' => array($this, 'block_form_errors'),
                'vic_error_type' => array($this, 'block_vic_error_type'),
                'vic_widget_form_group_start' => array($this, 'block_vic_widget_form_group_start'),
                'vic_help_widget_popover' => array($this, 'block_vic_help_widget_popover'),
                'vic_widget_form_group_end' => array($this, 'block_vic_widget_form_group_end'),
                'hierarchy_tree_widget' => array($this, 'block_hierarchy_tree_widget'),
                'hierarchy_tree_widget_collapsed' => array($this, 'block_hierarchy_tree_widget_collapsed'),
                'hierarchy_tree_widget_options' => array($this, 'block_hierarchy_tree_widget_options'),
                'font_awesome_picker_widget' => array($this, 'block_font_awesome_picker_widget'),
                'link_widget' => array($this, 'block_link_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a5db81b95636ad58dd667eecc742bfc6583383933e7b6dfb575cab2cf4afc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a5db81b95636ad58dd667eecc742bfc6583383933e7b6dfb575cab2cf4afc1->enter($__internal_75a5db81b95636ad58dd667eecc742bfc6583383933e7b6dfb575cab2cf4afc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireFormBundle:Form:fields.html.twig"));

        $__internal_caf99562e339a7dc572b2fbfd727b102ac3102a757cdcfedb4fece114e73c186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf99562e339a7dc572b2fbfd727b102ac3102a757cdcfedb4fece114e73c186->enter($__internal_caf99562e339a7dc572b2fbfd727b102ac3102a757cdcfedb4fece114e73c186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireFormBundle:Form:fields.html.twig"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('urlvalidated_row', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('urlvalidated_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('asynchronous_row', $context, $blocks);
        // line 25
        echo "

";
        // line 27
        $this->displayBlock('criteria_collection_row', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('criteria_row', $context, $blocks);
        // line 66
        echo "
";
        // line 68
        $this->displayBlock('tags_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('slug_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('button_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('button_row', $context, $blocks);
        // line 133
        echo "
";
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('form_tabs', $context, $blocks);
        // line 238
        echo "
";
        // line 239
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_tab', $context, $blocks);
        // line 259
        echo "
";
        // line 260
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 325
        echo "
";
        // line 326
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 377
        echo "
";
        // line 378
        $this->displayBlock('date_widget', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('time_widget', $context, $blocks);
        // line 429
        echo "
";
        // line 430
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 457
        echo "
";
        // line 458
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('money_widget', $context, $blocks);
        // line 471
        echo "
";
        // line 472
        $this->displayBlock('file_widget', $context, $blocks);
        // line 492
        echo "
";
        // line 494
        echo "
";
        // line 495
        $this->displayBlock('form_legend', $context, $blocks);
        // line 503
        echo "
";
        // line 504
        $this->displayBlock('form_label', $context, $blocks);
        // line 539
        echo "
";
        // line 540
        $this->displayBlock('vic_help_label', $context, $blocks);
        // line 543
        echo "
";
        // line 544
        $this->displayBlock('vic_help_label_tooltip', $context, $blocks);
        // line 556
        echo "
";
        // line 557
        $this->displayBlock('vic_help_label_popover', $context, $blocks);
        // line 569
        echo "
";
        // line 570
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 575
        echo "
";
        // line 577
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 580
        echo "
";
        // line 581
        $this->displayBlock('form_rows_visible', $context, $blocks);
        // line 595
        echo "
";
        // line 596
        $this->displayBlock('form_row', $context, $blocks);
        // line 625
        echo "
";
        // line 627
        echo "
";
        // line 628
        $this->displayBlock('form_message', $context, $blocks);
        // line 634
        echo "
";
        // line 636
        echo "
";
        // line 637
        $this->displayBlock('form_help', $context, $blocks);
        // line 650
        echo "
";
        // line 651
        $this->displayBlock('form_vic_widget_add_btn', $context, $blocks);
        // line 660
        echo "
";
        // line 661
        $this->displayBlock('form_vic_widget_remove_btn', $context, $blocks);
        // line 678
        echo "
";
        // line 679
        $this->displayBlock('collection_button', $context, $blocks);
        // line 688
        echo "
";
        // line 689
        $this->displayBlock('label_asterisk', $context, $blocks);
        // line 694
        echo "
";
        // line 695
        $this->displayBlock('widget_addon', $context, $blocks);
        // line 702
        echo "
";
        // line 704
        echo "
";
        // line 705
        $this->displayBlock('form_errors', $context, $blocks);
        // line 740
        echo "
";
        // line 742
        echo "
";
        // line 743
        $this->displayBlock('vic_error_type', $context, $blocks);
        // line 754
        echo "
";
        // line 756
        echo "
";
        // line 757
        $this->displayBlock('vic_widget_form_group_start', $context, $blocks);
        // line 794
        echo "
";
        // line 795
        $this->displayBlock('vic_help_widget_popover', $context, $blocks);
        // line 802
        echo "
";
        // line 803
        $this->displayBlock('vic_widget_form_group_end', $context, $blocks);
        // line 810
        echo "
";
        // line 811
        $this->displayBlock('hierarchy_tree_widget', $context, $blocks);
        // line 818
        echo "
";
        // line 819
        $this->displayBlock('hierarchy_tree_widget_collapsed', $context, $blocks);
        // line 838
        echo "
";
        // line 839
        $this->displayBlock('hierarchy_tree_widget_options', $context, $blocks);
        // line 851
        echo "
";
        // line 852
        $this->displayBlock('font_awesome_picker_widget', $context, $blocks);
        // line 863
        echo "
";
        // line 864
        $this->displayBlock('link_widget', $context, $blocks);
        
        $__internal_75a5db81b95636ad58dd667eecc742bfc6583383933e7b6dfb575cab2cf4afc1->leave($__internal_75a5db81b95636ad58dd667eecc742bfc6583383933e7b6dfb575cab2cf4afc1_prof);

        
        $__internal_caf99562e339a7dc572b2fbfd727b102ac3102a757cdcfedb4fece114e73c186->leave($__internal_caf99562e339a7dc572b2fbfd727b102ac3102a757cdcfedb4fece114e73c186_prof);

    }

    // line 5
    public function block_urlvalidated_row($context, array $blocks = array())
    {
        $__internal_17ebf2560a53646a403d645ee974c121adab2bc0067c2f8762c472d0dcd63da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ebf2560a53646a403d645ee974c121adab2bc0067c2f8762c472d0dcd63da6->enter($__internal_17ebf2560a53646a403d645ee974c121adab2bc0067c2f8762c472d0dcd63da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlvalidated_row"));

        $__internal_3ef1709c7f6866cbbb341e02b76ac25ee434da918a3eebe4b989ea64f798394e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef1709c7f6866cbbb341e02b76ac25ee434da918a3eebe4b989ea64f798394e->enter($__internal_3ef1709c7f6866cbbb341e02b76ac25ee434da918a3eebe4b989ea64f798394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlvalidated_row"));

        // line 6
        echo "    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'label');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "
    </div>
";
        
        $__internal_3ef1709c7f6866cbbb341e02b76ac25ee434da918a3eebe4b989ea64f798394e->leave($__internal_3ef1709c7f6866cbbb341e02b76ac25ee434da918a3eebe4b989ea64f798394e_prof);

        
        $__internal_17ebf2560a53646a403d645ee974c121adab2bc0067c2f8762c472d0dcd63da6->leave($__internal_17ebf2560a53646a403d645ee974c121adab2bc0067c2f8762c472d0dcd63da6_prof);

    }

    // line 13
    public function block_urlvalidated_widget($context, array $blocks = array())
    {
        $__internal_55aa036e954d1fe70811e927c74d2472b463d307dcc67e87ba7a980b5a755201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55aa036e954d1fe70811e927c74d2472b463d307dcc67e87ba7a980b5a755201->enter($__internal_55aa036e954d1fe70811e927c74d2472b463d307dcc67e87ba7a980b5a755201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlvalidated_widget"));

        $__internal_f8cd2d4a4a83b402588072814f48d18fb83986e77fd9da3792e25a2f8164d751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cd2d4a4a83b402588072814f48d18fb83986e77fd9da3792e25a2f8164d751->enter($__internal_f8cd2d4a4a83b402588072814f48d18fb83986e77fd9da3792e25a2f8164d751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlvalidated_widget"));

        // line 14
        echo "    <div class=\"v-form-group__input-group\">
        <div class=\"v-form-group__addon v-form-group__addon--url-slug\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
        ";
        // line 16
        $this->displayBlock("slug_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_f8cd2d4a4a83b402588072814f48d18fb83986e77fd9da3792e25a2f8164d751->leave($__internal_f8cd2d4a4a83b402588072814f48d18fb83986e77fd9da3792e25a2f8164d751_prof);

        
        $__internal_55aa036e954d1fe70811e927c74d2472b463d307dcc67e87ba7a980b5a755201->leave($__internal_55aa036e954d1fe70811e927c74d2472b463d307dcc67e87ba7a980b5a755201_prof);

    }

    // line 20
    public function block_asynchronous_row($context, array $blocks = array())
    {
        $__internal_dabe72be106e53639d4d8d7da5234061b7fa31c7a7baeca927b349a9f3305fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabe72be106e53639d4d8d7da5234061b7fa31c7a7baeca927b349a9f3305fa7->enter($__internal_dabe72be106e53639d4d8d7da5234061b7fa31c7a7baeca927b349a9f3305fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asynchronous_row"));

        $__internal_d22dfdce78fffa76d9de4a3f0a6daf0fc298c365ca1d5745627b17805e528240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22dfdce78fffa76d9de4a3f0a6daf0fc298c365ca1d5745627b17805e528240->enter($__internal_d22dfdce78fffa76d9de4a3f0a6daf0fc298c365ca1d5745627b17805e528240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asynchronous_row"));

        // line 21
        echo "    <div class=\"vic-col-xs-12\">
        ";
        // line 22
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_d22dfdce78fffa76d9de4a3f0a6daf0fc298c365ca1d5745627b17805e528240->leave($__internal_d22dfdce78fffa76d9de4a3f0a6daf0fc298c365ca1d5745627b17805e528240_prof);

        
        $__internal_dabe72be106e53639d4d8d7da5234061b7fa31c7a7baeca927b349a9f3305fa7->leave($__internal_dabe72be106e53639d4d8d7da5234061b7fa31c7a7baeca927b349a9f3305fa7_prof);

    }

    // line 27
    public function block_criteria_collection_row($context, array $blocks = array())
    {
        $__internal_feeab2b6d88e14b6e653c7ea5667a7bcc51c8a1d03544448ad06f7f6790ac3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeab2b6d88e14b6e653c7ea5667a7bcc51c8a1d03544448ad06f7f6790ac3e4->enter($__internal_feeab2b6d88e14b6e653c7ea5667a7bcc51c8a1d03544448ad06f7f6790ac3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "criteria_collection_row"));

        $__internal_e27493d5cb5bc8675fdc2ee561114cad55aa2dc7702cdd26127caf40da975680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27493d5cb5bc8675fdc2ee561114cad55aa2dc7702cdd26127caf40da975680->enter($__internal_e27493d5cb5bc8675fdc2ee561114cad55aa2dc7702cdd26127caf40da975680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "criteria_collection_row"));

        // line 28
        echo "    <a class=\"v-btn v-btn--warning / v-widget-form__quantum-btn\" data-collapse=\"toggle\" data-href=\"#collapse-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        ";
        // line 29
        $this->loadTemplate("VictoireUIBundle:SVG:quantum.html.twig", "VictoireFormBundle:Form:fields.html.twig", 29)->display(array_merge($context, array("class" => "v-btn__ic v-btn__ic--before")));
        // line 30
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire.widget.type.criterias.label", array(), "victoire"), "html", null, true);
        echo "
        ";
        // line 31
        $this->loadTemplate("VictoireUIBundle:SVG:caret.html.twig", "VictoireFormBundle:Form:fields.html.twig", 31)->display(array_merge($context, array("class" => "v-btn__ic v-btn__ic--after")));
        // line 32
        echo "    </a>

    <div class=\"v-collapse v-collapse--plain v-collapse--criteria\" id=\"collapse-";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-flag=\"v-collapse\">
        <div class=\"v-container\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "parent", array()), "quantum", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_e27493d5cb5bc8675fdc2ee561114cad55aa2dc7702cdd26127caf40da975680->leave($__internal_e27493d5cb5bc8675fdc2ee561114cad55aa2dc7702cdd26127caf40da975680_prof);

        
        $__internal_feeab2b6d88e14b6e653c7ea5667a7bcc51c8a1d03544448ad06f7f6790ac3e4->leave($__internal_feeab2b6d88e14b6e653c7ea5667a7bcc51c8a1d03544448ad06f7f6790ac3e4_prof);

    }

    // line 42
    public function block_criteria_row($context, array $blocks = array())
    {
        $__internal_6801e96ca4cca3377bd87c162119f8ba87b4f4614f50fe31f66118e64de1d8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6801e96ca4cca3377bd87c162119f8ba87b4f4614f50fe31f66118e64de1d8c9->enter($__internal_6801e96ca4cca3377bd87c162119f8ba87b4f4614f50fe31f66118e64de1d8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "criteria_row"));

        $__internal_27a69c960c9bc7a20ec7faa03412c29e16e906464d041d7492be261644bb236f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a69c960c9bc7a20ec7faa03412c29e16e906464d041d7492be261644bb236f->enter($__internal_27a69c960c9bc7a20ec7faa03412c29e16e906464d041d7492be261644bb236f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "criteria_row"));

        // line 43
        echo "    <div>
        <div class=\"v-grid\">
            <div class=\"v-col v-col--sm-6\">
                <div class=\"v-form-group v-form-group--md\" data-flag=\"v-mdForm\">
                    <label class=\"v-form-group__label\">
                        ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("victoire_criteria." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "vars", array()), "data", array()), "name", array())) . ".criteria.label"), array(), "victoire"), "html", null, true);
        echo "
                    </label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "operator", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"v-col v-col--sm-6\">
                <div class=\"v-form-group v-form-group--md\" data-flag=\"v-mdForm\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "value", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"v-col\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_27a69c960c9bc7a20ec7faa03412c29e16e906464d041d7492be261644bb236f->leave($__internal_27a69c960c9bc7a20ec7faa03412c29e16e906464d041d7492be261644bb236f_prof);

        
        $__internal_6801e96ca4cca3377bd87c162119f8ba87b4f4614f50fe31f66118e64de1d8c9->leave($__internal_6801e96ca4cca3377bd87c162119f8ba87b4f4614f50fe31f66118e64de1d8c9_prof);

    }

    // line 68
    public function block_tags_widget($context, array $blocks = array())
    {
        $__internal_16a0d567b870a725c2a65aa59a14ab90ded60be1d6e5a206fc1d01c254ab4285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a0d567b870a725c2a65aa59a14ab90ded60be1d6e5a206fc1d01c254ab4285->enter($__internal_16a0d567b870a725c2a65aa59a14ab90ded60be1d6e5a206fc1d01c254ab4285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_widget"));

        $__internal_be829b17fd2cd2800f7b1ad5cd6ca3af66c9545bb6b31aa2d2f7a833910cf1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be829b17fd2cd2800f7b1ad5cd6ca3af66c9545bb6b31aa2d2f7a833910cf1e9->enter($__internal_be829b17fd2cd2800f7b1ad5cd6ca3af66c9545bb6b31aa2d2f7a833910cf1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_widget"));

        // line 69
        echo "<input type=\"hidden\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["tag_values"]) || array_key_exists("tag_values", $context) ? $context["tag_values"] : (function () { throw new Twig_Error_Runtime('Variable "tag_values" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
        echo "\" tabindex=\"-1\" class=\"select2-offscreen\" />
<script type=\"text/javascript\">
    \$vic(\"#";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 71, $this->getSourceContext()); })()), "html", null, true);
        echo "\").select2({
        tags:[";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new Twig_Error_Runtime('Variable "tags" does not exist.', 72, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["id"] => $context["tag"]) {
            echo " { id: \"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\", text:\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" }";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        ";
        // line 73
        if ((isset($context["enable_creation"]) || array_key_exists("enable_creation", $context) ? $context["enable_creation"] : (function () { throw new Twig_Error_Runtime('Variable "enable_creation" does not exist.', 73, $this->getSourceContext()); })())) {
            // line 74
            echo "        createSearchChoice:function(term, data) {
            return { id:term, text:term};
        },
        ";
        }
        // line 78
        echo "    });
</script>
";
        
        $__internal_be829b17fd2cd2800f7b1ad5cd6ca3af66c9545bb6b31aa2d2f7a833910cf1e9->leave($__internal_be829b17fd2cd2800f7b1ad5cd6ca3af66c9545bb6b31aa2d2f7a833910cf1e9_prof);

        
        $__internal_16a0d567b870a725c2a65aa59a14ab90ded60be1d6e5a206fc1d01c254ab4285->leave($__internal_16a0d567b870a725c2a65aa59a14ab90ded60be1d6e5a206fc1d01c254ab4285_prof);

    }

    // line 82
    public function block_slug_widget($context, array $blocks = array())
    {
        $__internal_3e929ccab3782bc79117b5354363178f63011dc6af102c1d17f80c6e4d97e30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e929ccab3782bc79117b5354363178f63011dc6af102c1d17f80c6e4d97e30d->enter($__internal_3e929ccab3782bc79117b5354363178f63011dc6af102c1d17f80c6e4d97e30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slug_widget"));

        $__internal_8cafbbeafb7321d8e2b166718b6f4b5db213cb319cdbfcbd6d31ca02822b8dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cafbbeafb7321d8e2b166718b6f4b5db213cb319cdbfcbd6d31ca02822b8dc6->enter($__internal_8cafbbeafb7321d8e2b166718b6f4b5db213cb319cdbfcbd6d31ca02822b8dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slug_widget"));

        // line 83
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    <span id=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
        echo "-correct\" class=\"v-form-group__addon v-color--green v-hidden\">
        ";
        // line 85
        $this->loadTemplate("VictoireUIBundle:SVG:check.html.twig", "VictoireFormBundle:Form:fields.html.twig", 85)->display($context);
        // line 86
        echo "    </span>

    <span id=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
        echo "-not-correct\" class=\"v-form-group__addon v-color--pink v-hidden\">
        ";
        // line 89
        $this->loadTemplate("VictoireUIBundle:SVG:close.html.twig", "VictoireFormBundle:Form:fields.html.twig", 89)->display($context);
        // line 90
        echo "    </span>

    <script>
        <!--
        addSlugValidation(\$vic('#";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 94, $this->getSourceContext()); })()), "html", null, true);
        echo "'),";
        if ((isset($context["allow_empty"]) || array_key_exists("allow_empty", $context) ? $context["allow_empty"] : (function () { throw new Twig_Error_Runtime('Variable "allow_empty" does not exist.', 94, $this->getSourceContext()); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ");
        -->
    </script>
";
        
        $__internal_8cafbbeafb7321d8e2b166718b6f4b5db213cb319cdbfcbd6d31ca02822b8dc6->leave($__internal_8cafbbeafb7321d8e2b166718b6f4b5db213cb319cdbfcbd6d31ca02822b8dc6_prof);

        
        $__internal_3e929ccab3782bc79117b5354363178f63011dc6af102c1d17f80c6e4d97e30d->leave($__internal_3e929ccab3782bc79117b5354363178f63011dc6af102c1d17f80c6e4d97e30d_prof);

    }

    // line 99
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_eef666582634ba544c48fabb0674e4037d2dcba1ab5f72dee670b7f0cead2476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef666582634ba544c48fabb0674e4037d2dcba1ab5f72dee670b7f0cead2476->enter($__internal_eef666582634ba544c48fabb0674e4037d2dcba1ab5f72dee670b7f0cead2476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_4b9d2c76647be57c9bbece78b755c7f4c2ac7555224bae525a08e4169e89d21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9d2c76647be57c9bbece78b755c7f4c2ac7555224bae525a08e4169e89d21e->enter($__internal_4b9d2c76647be57c9bbece78b755c7f4c2ac7555224bae525a08e4169e89d21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 100
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 100, $this->getSourceContext()); })()), array("class" => ("vic-btn " . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")))));
        // line 101
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
        
        $__internal_4b9d2c76647be57c9bbece78b755c7f4c2ac7555224bae525a08e4169e89d21e->leave($__internal_4b9d2c76647be57c9bbece78b755c7f4c2ac7555224bae525a08e4169e89d21e_prof);

        
        $__internal_eef666582634ba544c48fabb0674e4037d2dcba1ab5f72dee670b7f0cead2476->leave($__internal_eef666582634ba544c48fabb0674e4037d2dcba1ab5f72dee670b7f0cead2476_prof);

    }

    // line 104
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_20a48f7afa58bba73e8d210f138eda5e381d5d96acd1e5ff0915d6f8eccdd49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a48f7afa58bba73e8d210f138eda5e381d5d96acd1e5ff0915d6f8eccdd49e->enter($__internal_20a48f7afa58bba73e8d210f138eda5e381d5d96acd1e5ff0915d6f8eccdd49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_60a8c73ee0dcb230878479b17298e2d8e1c5d9224dce6a7042dcbb79382d2794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a8c73ee0dcb230878479b17298e2d8e1c5d9224dce6a7042dcbb79382d2794->enter($__internal_60a8c73ee0dcb230878479b17298e2d8e1c5d9224dce6a7042dcbb79382d2794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 106, $this->getSourceContext()); })()))) {
            // line 107
            echo "        ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 107, $this->getSourceContext()); })()));
            // line 108
            echo "    ";
        }
        // line 109
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 109, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 110
        if ((array_key_exists("icon", $context) &&  !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 110, $this->getSourceContext()); })())))) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 111, $this->getSourceContext()); })()), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter((isset($context["icon_inverted"]) || array_key_exists("icon_inverted", $context) ? $context["icon_inverted"] : (function () { throw new Twig_Error_Runtime('Variable "icon_inverted" does not exist.', 111, $this->getSourceContext()); })()), false)) : (false)));
            echo "
    ";
        }
        // line 113
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 113, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 113, $this->getSourceContext()); })()));
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_60a8c73ee0dcb230878479b17298e2d8e1c5d9224dce6a7042dcbb79382d2794->leave($__internal_60a8c73ee0dcb230878479b17298e2d8e1c5d9224dce6a7042dcbb79382d2794_prof);

        
        $__internal_20a48f7afa58bba73e8d210f138eda5e381d5d96acd1e5ff0915d6f8eccdd49e->leave($__internal_20a48f7afa58bba73e8d210f138eda5e381d5d96acd1e5ff0915d6f8eccdd49e_prof);

    }

    // line 117
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f5909597bf480f97c79c4b642826ebb79eb0cc8c279ec6db9fa62ed242a60128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5909597bf480f97c79c4b642826ebb79eb0cc8c279ec6db9fa62ed242a60128->enter($__internal_f5909597bf480f97c79c4b642826ebb79eb0cc8c279ec6db9fa62ed242a60128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_85469fa53199ece0ccb8c0899b3027d89e134532eb17b69aba9e54d36ffbb16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85469fa53199ece0ccb8c0899b3027d89e134532eb17b69aba9e54d36ffbb16e->enter($__internal_85469fa53199ece0ccb8c0899b3027d89e134532eb17b69aba9e54d36ffbb16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 118
        echo "    ";
        ob_start();
        // line 119
        echo "        ";
        if ( !twig_test_empty((isset($context["vic_button_offset"]) || array_key_exists("vic_button_offset", $context) ? $context["vic_button_offset"] : (function () { throw new Twig_Error_Runtime('Variable "vic_button_offset" does not exist.', 119, $this->getSourceContext()); })()))) {
            // line 120
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 120, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 120, $this->getSourceContext()); })()), "class" => (isset($context["vic_button_offset"]) || array_key_exists("vic_button_offset", $context) ? $context["vic_button_offset"] : (function () { throw new Twig_Error_Runtime('Variable "vic_button_offset" does not exist.', 120, $this->getSourceContext()); })())));
            // line 121
            echo "            <div class=\"v-form-group\">
                <div ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 122, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 127
            echo "            <div>
                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'widget');
            echo "
            </div>
        ";
        }
        // line 131
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_85469fa53199ece0ccb8c0899b3027d89e134532eb17b69aba9e54d36ffbb16e->leave($__internal_85469fa53199ece0ccb8c0899b3027d89e134532eb17b69aba9e54d36ffbb16e_prof);

        
        $__internal_f5909597bf480f97c79c4b642826ebb79eb0cc8c279ec6db9fa62ed242a60128->leave($__internal_f5909597bf480f97c79c4b642826ebb79eb0cc8c279ec6db9fa62ed242a60128_prof);

    }

    // line 136
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b597ff721cdfe8188a70b5207ea15d0437515858c0ba55753b02dc2299585f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b597ff721cdfe8188a70b5207ea15d0437515858c0ba55753b02dc2299585f3c->enter($__internal_b597ff721cdfe8188a70b5207ea15d0437515858c0ba55753b02dc2299585f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_76fb0d46b241678607a96106afdab99c42fd43e5d4eed8aa02fb190b0ce0edd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fb0d46b241678607a96106afdab99c42fd43e5d4eed8aa02fb190b0ce0edd5->enter($__internal_76fb0d46b241678607a96106afdab99c42fd43e5d4eed8aa02fb190b0ce0edd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 137
        echo "    <div class=\"v-select\">
        ";
        // line 138
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 138, $this->getSourceContext()); })()), array("class" => "v-select__native"));
        // line 139
        echo "        ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
    </div>

    ";
        // line 142
        $this->displayBlock("form_message", $context, $blocks);
        echo "
";
        
        $__internal_76fb0d46b241678607a96106afdab99c42fd43e5d4eed8aa02fb190b0ce0edd5->leave($__internal_76fb0d46b241678607a96106afdab99c42fd43e5d4eed8aa02fb190b0ce0edd5_prof);

        
        $__internal_b597ff721cdfe8188a70b5207ea15d0437515858c0ba55753b02dc2299585f3c->leave($__internal_b597ff721cdfe8188a70b5207ea15d0437515858c0ba55753b02dc2299585f3c_prof);

    }

    // line 145
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c5bbde75c9241d27fa32cdc350cb62f0ef47afbf6a0bc1e92b063fcf497cf749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bbde75c9241d27fa32cdc350cb62f0ef47afbf6a0bc1e92b063fcf497cf749->enter($__internal_c5bbde75c9241d27fa32cdc350cb62f0ef47afbf6a0bc1e92b063fcf497cf749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_410853451ad96f7e1d7fc1cb4739d1131bf68fb22b17a3d4b6fd4ef7e0a69d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410853451ad96f7e1d7fc1cb4739d1131bf68fb22b17a3d4b6fd4ef7e0a69d6e->enter($__internal_410853451ad96f7e1d7fc1cb4739d1131bf68fb22b17a3d4b6fd4ef7e0a69d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 146
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 146, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 147
        echo "
    ";
        // line 148
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 148, $this->getSourceContext()); })()) != "hidden") && ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 148, $this->getSourceContext()); })()), null)) : (null))) ||  !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 148, $this->getSourceContext()); })()), null)) : (null)))))) {
            // line 149
            echo "        <div class=\"vic-input-group\">
            ";
            // line 150
            if ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 150, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 151
                echo "                ";
                $context["widget_addon"] = (isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 151, $this->getSourceContext()); })());
                // line 152
                echo "
                ";
                // line 153
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
            ";
            }
            // line 155
            echo "    ";
        }
        // line 156
        echo "
            ";
        // line 157
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 157, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["vic_widget_form_control_class"]) || array_key_exists("vic_widget_form_control_class", $context) ? $context["vic_widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_control_class" does not exist.', 157, $this->getSourceContext()); })()))));
        // line 158
        echo "
            ";
        // line 159
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "

            ";
        // line 161
        if ((isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 161, $this->getSourceContext()); })())) {
            // line 162
            echo "                ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
            ";
        }
        // line 164
        echo "
    ";
        // line 165
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 165, $this->getSourceContext()); })()) != "hidden") && ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 165, $this->getSourceContext()); })()), null)) : (null))) ||  !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 165, $this->getSourceContext()); })()), null)) : (null)))))) {
            // line 166
            echo "            ";
            if ( !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 166, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 167
                echo "                ";
                $context["widget_addon"] = (isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 167, $this->getSourceContext()); })());
                // line 168
                echo "
                ";
                // line 169
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
            ";
            }
            // line 171
            echo "        </div>
    ";
        }
        
        $__internal_410853451ad96f7e1d7fc1cb4739d1131bf68fb22b17a3d4b6fd4ef7e0a69d6e->leave($__internal_410853451ad96f7e1d7fc1cb4739d1131bf68fb22b17a3d4b6fd4ef7e0a69d6e_prof);

        
        $__internal_c5bbde75c9241d27fa32cdc350cb62f0ef47afbf6a0bc1e92b063fcf497cf749->leave($__internal_c5bbde75c9241d27fa32cdc350cb62f0ef47afbf6a0bc1e92b063fcf497cf749_prof);

    }

    // line 175
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_030a52f8fdcbcadb47e10cb0e073e681091f93c90567051ee2bcab8bb20b4d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030a52f8fdcbcadb47e10cb0e073e681091f93c90567051ee2bcab8bb20b4d1b->enter($__internal_030a52f8fdcbcadb47e10cb0e073e681091f93c90567051ee2bcab8bb20b4d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1f41735b3e037b2f1ece431a2899170e8b1aa9605041da9c76579938ac540478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f41735b3e037b2f1ece431a2899170e8b1aa9605041da9c76579938ac540478->enter($__internal_1f41735b3e037b2f1ece431a2899170e8b1aa9605041da9c76579938ac540478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 176
        ob_start();
        // line 177
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 177, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 178
        echo "    ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 178, $this->getSourceContext()); })()) != "hidden") && ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 178, $this->getSourceContext()); })()), null)) : (null))) ||  !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 178, $this->getSourceContext()); })()), null)) : (null)))))) {
            // line 179
            echo "    <div class=\"vic-input-group\">
        ";
            // line 180
            if ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 180, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 181
                echo "            ";
                $context["widget_addon"] = (isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 181, $this->getSourceContext()); })());
                // line 182
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 184
            echo "    ";
        }
        // line 185
        echo "    ";
        if ( !((array_key_exists("vic_widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 185, $this->getSourceContext()); })()), null)) : (null))) {
            // line 186
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 186, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " vic-not-removable")));
            // line 187
            echo "    ";
        }
        // line 188
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 188, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["vic_widget_form_control_class"]) || array_key_exists("vic_widget_form_control_class", $context) ? $context["vic_widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_control_class" does not exist.', 188, $this->getSourceContext()); })()))));
        // line 189
        echo "    ";
        if (((isset($context["vic_static_text"]) || array_key_exists("vic_static_text", $context) ? $context["vic_static_text"] : (function () { throw new Twig_Error_Runtime('Variable "vic_static_text" does not exist.', 189, $this->getSourceContext()); })()) === true)) {
            // line 190
            echo "        <p class=\"vic-form-control-static\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 190, $this->getSourceContext()); })()), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 192
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 194
        echo "    ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()) != "hidden") && ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 194, $this->getSourceContext()); })()), null)) : (null))) ||  !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 194, $this->getSourceContext()); })()), null)) : (null)))))) {
            // line 195
            echo "        ";
            if ( !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 195, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 196
                echo "        ";
                $context["widget_addon"] = (isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 196, $this->getSourceContext()); })());
                // line 197
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 199
            echo "    </div>
    ";
        }
        // line 201
        echo "    ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 201, $this->getSourceContext()); })()) != "hidden") && (isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 201, $this->getSourceContext()); })()))) {
            // line 202
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f41735b3e037b2f1ece431a2899170e8b1aa9605041da9c76579938ac540478->leave($__internal_1f41735b3e037b2f1ece431a2899170e8b1aa9605041da9c76579938ac540478_prof);

        
        $__internal_030a52f8fdcbcadb47e10cb0e073e681091f93c90567051ee2bcab8bb20b4d1b->leave($__internal_030a52f8fdcbcadb47e10cb0e073e681091f93c90567051ee2bcab8bb20b4d1b_prof);

    }

    // line 207
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1f4670401038789085afa9bdb9549036decb84386ae63fee53b03bf3541aa524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4670401038789085afa9bdb9549036decb84386ae63fee53b03bf3541aa524->enter($__internal_1f4670401038789085afa9bdb9549036decb84386ae63fee53b03bf3541aa524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ebb043f0f58bcde333aa949942f86bb89cb25707b232dc594214a7e2f00043fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb043f0f58bcde333aa949942f86bb89cb25707b232dc594214a7e2f00043fb->enter($__internal_ebb043f0f58bcde333aa949942f86bb89cb25707b232dc594214a7e2f00043fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 208
        ob_start();
        // line 209
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 209, $this->getSourceContext()); })()), "parent", array()) == null)) {
            // line 210
            echo "        ";
            if ((isset($context["vic_render_fieldset"]) || array_key_exists("vic_render_fieldset", $context) ? $context["vic_render_fieldset"] : (function () { throw new Twig_Error_Runtime('Variable "vic_render_fieldset" does not exist.', 210, $this->getSourceContext()); })())) {
                echo "<fieldset>";
            }
            // line 211
            echo "        ";
            if ((isset($context["vic_show_legend"]) || array_key_exists("vic_show_legend", $context) ? $context["vic_show_legend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_show_legend" does not exist.', 211, $this->getSourceContext()); })())) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 212
            echo "    ";
        }
        // line 213
        echo "
    ";
        // line 214
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 214, $this->getSourceContext()); })()), "vars", array()), "vic_tabbed", array())) {
            // line 215
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 215, $this->getSourceContext()); })()), 'tabs');
            echo "
        <div class=\"vic-tab-content\">
    ";
        }
        // line 218
        echo "
    ";
        // line 219
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 221
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 221, $this->getSourceContext()); })()), "vars", array()), "vic_tabbed", array())) {
            // line 222
            echo "        </div>
    ";
        }
        // line 224
        echo "
    ";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 225, $this->getSourceContext()); })()), 'rest');
        echo "

    ";
        // line 227
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 227, $this->getSourceContext()); })()), "parent", array()) == null)) {
            // line 228
            echo "        ";
            if ((isset($context["vic_render_fieldset"]) || array_key_exists("vic_render_fieldset", $context) ? $context["vic_render_fieldset"] : (function () { throw new Twig_Error_Runtime('Variable "vic_render_fieldset" does not exist.', 228, $this->getSourceContext()); })())) {
                echo "</fieldset>";
            }
            // line 229
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ebb043f0f58bcde333aa949942f86bb89cb25707b232dc594214a7e2f00043fb->leave($__internal_ebb043f0f58bcde333aa949942f86bb89cb25707b232dc594214a7e2f00043fb_prof);

        
        $__internal_1f4670401038789085afa9bdb9549036decb84386ae63fee53b03bf3541aa524->leave($__internal_1f4670401038789085afa9bdb9549036decb84386ae63fee53b03bf3541aa524_prof);

    }

    // line 233
    public function block_form_tabs($context, array $blocks = array())
    {
        $__internal_9bf983dd835853d599ad2635652a8cae939176db3f5c7e398fd693ff1a355dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf983dd835853d599ad2635652a8cae939176db3f5c7e398fd693ff1a355dda->enter($__internal_9bf983dd835853d599ad2635652a8cae939176db3f5c7e398fd693ff1a355dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tabs"));

        $__internal_a93728240e4237edcc5a1ce9993d5758fffc396970d2a361a8c023da0620dd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93728240e4237edcc5a1ce9993d5758fffc396970d2a361a8c023da0620dd16->enter($__internal_a93728240e4237edcc5a1ce9993d5758fffc396970d2a361a8c023da0620dd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tabs"));

        // line 234
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 235
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->getSourceContext()); })()), "vars", array()), "tabsView", array()), 'widget');
            echo "
";
        }
        
        $__internal_a93728240e4237edcc5a1ce9993d5758fffc396970d2a361a8c023da0620dd16->leave($__internal_a93728240e4237edcc5a1ce9993d5758fffc396970d2a361a8c023da0620dd16_prof);

        
        $__internal_9bf983dd835853d599ad2635652a8cae939176db3f5c7e398fd693ff1a355dda->leave($__internal_9bf983dd835853d599ad2635652a8cae939176db3f5c7e398fd693ff1a355dda_prof);

    }

    // line 239
    public function block_tabs_widget($context, array $blocks = array())
    {
        $__internal_8c1b3101b6879b86d6a5708553be5aabfce13b09537e117fdbe9cb403c31cc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1b3101b6879b86d6a5708553be5aabfce13b09537e117fdbe9cb403c31cc5d->enter($__internal_8c1b3101b6879b86d6a5708553be5aabfce13b09537e117fdbe9cb403c31cc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs_widget"));

        $__internal_706df6afcda599d2c856b1703cbe202c4d82162ef9cf21febae01e70178c8ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706df6afcda599d2c856b1703cbe202c4d82162ef9cf21febae01e70178c8ef8->enter($__internal_706df6afcda599d2c856b1703cbe202c4d82162ef9cf21febae01e70178c8ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs_widget"));

        // line 240
        ob_start();
        // line 241
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->getSourceContext()); })()), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->getSourceContext()); })()), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 243
            echo "        <li";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "active", array())) {
                echo " class=\"vic-active\"";
            }
            echo ">
            <a data-toggle=\"vic-tab\" href=\"#";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 245
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "icon", array())) {
                echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon(twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "icon", array()));
            }
            // line 246
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "translation_domain", array())), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_706df6afcda599d2c856b1703cbe202c4d82162ef9cf21febae01e70178c8ef8->leave($__internal_706df6afcda599d2c856b1703cbe202c4d82162ef9cf21febae01e70178c8ef8_prof);

        
        $__internal_8c1b3101b6879b86d6a5708553be5aabfce13b09537e117fdbe9cb403c31cc5d->leave($__internal_8c1b3101b6879b86d6a5708553be5aabfce13b09537e117fdbe9cb403c31cc5d_prof);

    }

    // line 254
    public function block_form_tab($context, array $blocks = array())
    {
        $__internal_b0952e7a516639a42cf64c26ab00e22a0af37eb3b2389499996eeb15890d8bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0952e7a516639a42cf64c26ab00e22a0af37eb3b2389499996eeb15890d8bc5->enter($__internal_b0952e7a516639a42cf64c26ab00e22a0af37eb3b2389499996eeb15890d8bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tab"));

        $__internal_70f3be535454366bd69aa54610a3d745d9555da35c69d2331d4ef62b38f5b3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f3be535454366bd69aa54610a3d745d9555da35c69d2331d4ef62b38f5b3c3->enter($__internal_70f3be535454366bd69aa54610a3d745d9555da35c69d2331d4ef62b38f5b3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tab"));

        // line 255
        echo "<div class=\"vic-tab-pane";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 255, $this->getSourceContext()); })()), "vars", array()), "tab_active", array())) ? (" vic-active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 255, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
    ";
        // line 256
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
</div>
";
        
        $__internal_70f3be535454366bd69aa54610a3d745d9555da35c69d2331d4ef62b38f5b3c3->leave($__internal_70f3be535454366bd69aa54610a3d745d9555da35c69d2331d4ef62b38f5b3c3_prof);

        
        $__internal_b0952e7a516639a42cf64c26ab00e22a0af37eb3b2389499996eeb15890d8bc5->leave($__internal_b0952e7a516639a42cf64c26ab00e22a0af37eb3b2389499996eeb15890d8bc5_prof);

    }

    // line 260
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e666f1632c08d6a7b3ec4106ec14b5a424dad853b87e30bd85a85b57dd4dd552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e666f1632c08d6a7b3ec4106ec14b5a424dad853b87e30bd85a85b57dd4dd552->enter($__internal_e666f1632c08d6a7b3ec4106ec14b5a424dad853b87e30bd85a85b57dd4dd552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_aff4d09d37096741050a667949ea2fac9f5e4d013aa11084f09dfb6f637cb934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff4d09d37096741050a667949ea2fac9f5e4d013aa11084f09dfb6f637cb934->enter($__internal_aff4d09d37096741050a667949ea2fac9f5e4d013aa11084f09dfb6f637cb934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 261
        ob_start();
        // line 262
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 263
            echo "        ";
            $context["prototype_markup"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 263, $this->getSourceContext()); })()), 'row');
            // line 264
            echo "        ";
            $context["data_prototype_name"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array()), "__name__")) : ("__name__"));
            // line 265
            echo "        ";
            $context["data_prototype_label"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array()), "__name__label__")) : ("__name__label__"));
            // line 266
            echo "        ";
            $context["vic_vic_widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 266, $this->getSourceContext()); })()), array("data-prototype" =>             // line 267
(isset($context["prototype_markup"]) || array_key_exists("prototype_markup", $context) ? $context["prototype_markup"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_markup" does not exist.', 267, $this->getSourceContext()); })()), "data-prototype-name" =>             // line 268
(isset($context["data_prototype_name"]) || array_key_exists("data_prototype_name", $context) ? $context["data_prototype_name"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype_name" does not exist.', 268, $this->getSourceContext()); })()), "data-prototype-label" =>             // line 269
(isset($context["data_prototype_label"]) || array_key_exists("data_prototype_label", $context) ? $context["data_prototype_label"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype_label" does not exist.', 269, $this->getSourceContext()); })()))),             // line 270
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 270, $this->getSourceContext()); })()));
            // line 271
            echo "    ";
        }
        // line 272
        echo "    ";
        // line 273
        echo "    ";
        if ((twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->getSourceContext()); })()), "vars", array()), "block_prefixes", array())) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true))) {
            // line 274
            echo "        ";
            $context["vic_vic_widget_form_group_attr"] = twig_array_merge((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 274, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["vic_vic_widget_form_group_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["vic_vic_widget_form_group_attr"] ?? null), "class", array()), "row")) : ("row")) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 274, $this->getSourceContext()); })()), "class", array()))));
            // line 275
            echo "    ";
        }
        // line 276
        echo "    ";
        // line 277
        echo "    ";
        $context["vic_vic_widget_form_group_attr"] = twig_array_merge((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 277, $this->getSourceContext()); })()), array("id" => (("collection" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 277, $this->getSourceContext()); })())) . "_form_group"), "class" => (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 277, $this->getSourceContext()); })()), "class", array()) . " vic-collection-items ") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 277, $this->getSourceContext()); })())) . "_form_group")));
        // line 278
        echo "
    <div ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 279, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    ";
        // line 281
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 281, $this->getSourceContext()); })()), "vars", array()), "value", array())) == 0) && array_key_exists("prototype", $context))) {
            // line 282
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vic_prototype_names"]) || array_key_exists("vic_prototype_names", $context) ? $context["vic_prototype_names"] : (function () { throw new Twig_Error_Runtime('Variable "vic_prototype_names" does not exist.', 282, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 283
                echo "            ";
                echo twig_replace_filter((isset($context["prototype_markup"]) || array_key_exists("prototype_markup", $context) ? $context["prototype_markup"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_markup" does not exist.', 283, $this->getSourceContext()); })()), array("__name__" => $context["name"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "    ";
        }
        // line 286
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aff4d09d37096741050a667949ea2fac9f5e4d013aa11084f09dfb6f637cb934->leave($__internal_aff4d09d37096741050a667949ea2fac9f5e4d013aa11084f09dfb6f637cb934_prof);

        
        $__internal_e666f1632c08d6a7b3ec4106ec14b5a424dad853b87e30bd85a85b57dd4dd552->leave($__internal_e666f1632c08d6a7b3ec4106ec14b5a424dad853b87e30bd85a85b57dd4dd552_prof);

    }

    // line 291
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_22b75b735fbe432129ffb3caa32211665e0aee236eda8f05a85215b3230526ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b75b735fbe432129ffb3caa32211665e0aee236eda8f05a85215b3230526ad->enter($__internal_22b75b735fbe432129ffb3caa32211665e0aee236eda8f05a85215b3230526ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_43db25b1e6ac89c227d1143ecf6f27afbdc5412d444c265212b1fc8c34f5284f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43db25b1e6ac89c227d1143ecf6f27afbdc5412d444c265212b1fc8c34f5284f->enter($__internal_43db25b1e6ac89c227d1143ecf6f27afbdc5412d444c265212b1fc8c34f5284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 292
        ob_start();
        // line 293
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 293, $this->getSourceContext()); })()), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 294
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 294, $this->getSourceContext()); })()), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 294, $this->getSourceContext()); })()), "class", array()) . " ") . ((((isset($context["vic_widget_type"]) || array_key_exists("vic_widget_type", $context) ? $context["vic_widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_type" does not exist.', 294, $this->getSourceContext()); })()) != "")) ? ((((((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 294, $this->getSourceContext()); })())) ? ("vic-checkbox") : ("vic-radio")) . "-") . (isset($context["vic_widget_type"]) || array_key_exists("vic_widget_type", $context) ? $context["vic_widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_type" does not exist.', 294, $this->getSourceContext()); })()))) : ("")))));
        // line 295
        echo "    ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 295, $this->getSourceContext()); })())) {
            // line 296
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 296, $this->getSourceContext()); })()), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), (isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 296, $this->getSourceContext()); })()))) : ((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 296, $this->getSourceContext()); })())))));
            // line 297
            echo "    ";
        }
        // line 298
        echo "
    ";
        // line 299
        if (((isset($context["vic_widget_type"]) || array_key_exists("vic_widget_type", $context) ? $context["vic_widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_type" does not exist.', 299, $this->getSourceContext()); })()) == "inline")) {
            echo "<div class=\"v-flex-grid\">";
        }
        // line 300
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            echo "            ";
            if (((isset($context["vic_widget_type"]) || array_key_exists("vic_widget_type", $context) ? $context["vic_widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_type" does not exist.', 301, $this->getSourceContext()); })()) == "inline")) {
                // line 302
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 302, $this->getSourceContext()); })()), array("class" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 302, $this->getSourceContext()); })()), "class", array()) . " v-flex-col")));
                // line 303
                echo "            ";
            } else {
                // line 304
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 304, $this->getSourceContext()); })()), array("class" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 304, $this->getSourceContext()); })()), "class", array()) . " v-form-group v-form-group--small")));
                // line 305
                echo "            ";
            }
            // line 306
            echo "
            <div";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 307, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 308
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("vic_horizontal_label_class" =>             // line 309
(isset($context["vic_horizontal_label_class"]) || array_key_exists("vic_horizontal_label_class", $context) ? $context["vic_horizontal_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_label_class" does not exist.', 309, $this->getSourceContext()); })()), "choiceLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 310
$context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 310, $this->getSourceContext()); })())), "vic_horizontal_input_wrapper_class" =>             // line 311
(isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 311, $this->getSourceContext()); })()), "attr" => array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 313
($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")))));
            // line 315
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "    ";
        if (((isset($context["vic_widget_type"]) || array_key_exists("vic_widget_type", $context) ? $context["vic_widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_type" does not exist.', 318, $this->getSourceContext()); })()) == "inline")) {
            echo "</div>";
        }
        // line 319
        echo "
    ";
        // line 320
        $this->displayBlock("form_message", $context, $blocks);
        echo "
    ";
        // line 321
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 321, $this->getSourceContext()); })())) {
            // line 322
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_43db25b1e6ac89c227d1143ecf6f27afbdc5412d444c265212b1fc8c34f5284f->leave($__internal_43db25b1e6ac89c227d1143ecf6f27afbdc5412d444c265212b1fc8c34f5284f_prof);

        
        $__internal_22b75b735fbe432129ffb3caa32211665e0aee236eda8f05a85215b3230526ad->leave($__internal_22b75b735fbe432129ffb3caa32211665e0aee236eda8f05a85215b3230526ad_prof);

    }

    // line 326
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9f21482680b3bace1b3d6d2e77802eec5320884df0a93be945c3202595f14546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f21482680b3bace1b3d6d2e77802eec5320884df0a93be945c3202595f14546->enter($__internal_9f21482680b3bace1b3d6d2e77802eec5320884df0a93be945c3202595f14546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f76abd9dfbeb15f03b510c6917709553a6f831c6626dec8b44c72b9aeaa164f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f76abd9dfbeb15f03b510c6917709553a6f831c6626dec8b44c72b9aeaa164f->enter($__internal_6f76abd9dfbeb15f03b510c6917709553a6f831c6626dec8b44c72b9aeaa164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 327
        echo "    ";
        ob_start();
        // line 328
        echo "        ";
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 328, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 328, $this->getSourceContext()); })())))) {
            // line 329
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 329, $this->getSourceContext()); })()));
            // line 330
            echo "        ";
        }
        // line 331
        echo "
        ";
        // line 332
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            echo "<div>";
        }
        // line 333
        echo "            <label class=\"v-checkbox ";
        if ( !(isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 333, $this->getSourceContext()); })())) {
            echo " vic-checkbox-inline";
        }
        echo "\">
                ";
        // line 334
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 334, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " v-checkbox__native")));
        // line 335
        echo "                <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 335, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 335, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <span class=\"v-checkbox__indicator\"></span>

                ";
        // line 338
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 338, $this->getSourceContext()); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 338, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 339
            echo "                    ";
            if (((isset($context["vic_label_render"]) || array_key_exists("vic_label_render", $context) ? $context["vic_label_render"] : (function () { throw new Twig_Error_Runtime('Variable "vic_label_render" does not exist.', 339, $this->getSourceContext()); })()) && twig_in_filter((isset($context["vic_widget_vic_checkbox_label"]) || array_key_exists("vic_widget_vic_checkbox_label", $context) ? $context["vic_widget_vic_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_vic_checkbox_label" does not exist.', 339, $this->getSourceContext()); })()), array(0 => "both", 1 => "widget")))) {
                // line 340
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 340, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 340, $this->getSourceContext()); })())), "html", null, true);
                echo "
                    ";
            }
            // line 342
            echo "                ";
        }
        // line 343
        echo "
                ";
        // line 344
        if (((array_key_exists("choiceLabel", $context)) ? (_twig_default_filter((isset($context["choiceLabel"]) || array_key_exists("choiceLabel", $context) ? $context["choiceLabel"] : (function () { throw new Twig_Error_Runtime('Variable "choiceLabel" does not exist.', 344, $this->getSourceContext()); })()), false)) : (false))) {
            // line 345
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["choiceLabel"]) || array_key_exists("choiceLabel", $context) ? $context["choiceLabel"] : (function () { throw new Twig_Error_Runtime('Variable "choiceLabel" does not exist.', 345, $this->getSourceContext()); })()), "html", null, true);
            echo "
                ";
        }
        // line 347
        echo "            </label>
        ";
        // line 348
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            echo "</div>";
            $this->displayBlock("form_message", $context, $blocks);
        }
        // line 349
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6f76abd9dfbeb15f03b510c6917709553a6f831c6626dec8b44c72b9aeaa164f->leave($__internal_6f76abd9dfbeb15f03b510c6917709553a6f831c6626dec8b44c72b9aeaa164f_prof);

        
        $__internal_9f21482680b3bace1b3d6d2e77802eec5320884df0a93be945c3202595f14546->leave($__internal_9f21482680b3bace1b3d6d2e77802eec5320884df0a93be945c3202595f14546_prof);

    }

    // line 352
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_65e0780b3eb63a9ba4344ff59542c935e0af9d2badea9beab7529124e842f2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e0780b3eb63a9ba4344ff59542c935e0af9d2badea9beab7529124e842f2c4->enter($__internal_65e0780b3eb63a9ba4344ff59542c935e0af9d2badea9beab7529124e842f2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_318c6555f9840dd6a056357392b065ff859fc9560a04dd2ec1154d35dfd7a9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318c6555f9840dd6a056357392b065ff859fc9560a04dd2ec1154d35dfd7a9f9->enter($__internal_318c6555f9840dd6a056357392b065ff859fc9560a04dd2ec1154d35dfd7a9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 353
        echo "    ";
        ob_start();
        // line 354
        echo "        ";
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 354, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 354, $this->getSourceContext()); })())))) {
            // line 355
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 355, $this->getSourceContext()); })()));
            // line 356
            echo "        ";
        }
        // line 357
        echo "
        ";
        // line 358
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 358, $this->getSourceContext()); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 358, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            echo "<div>";
        }
        // line 359
        echo "            <label class=\"v-radio ";
        if ( !(isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 359, $this->getSourceContext()); })())) {
            echo " vic-radio-inline";
        }
        echo "\">
                ";
        // line 360
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 360, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " v-radio__native")));
        // line 361
        echo "                <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 361, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 361, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <span class=\"v-radio__indicator\"></span>

                ";
        // line 364
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 364, $this->getSourceContext()); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 364, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 365
            echo "                    ";
            if (((isset($context["vic_label_render"]) || array_key_exists("vic_label_render", $context) ? $context["vic_label_render"] : (function () { throw new Twig_Error_Runtime('Variable "vic_label_render" does not exist.', 365, $this->getSourceContext()); })()) && twig_in_filter((isset($context["vic_widget_vic_checkbox_label"]) || array_key_exists("vic_widget_vic_checkbox_label", $context) ? $context["vic_widget_vic_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_vic_checkbox_label" does not exist.', 365, $this->getSourceContext()); })()), array(0 => "both", 1 => "widget")))) {
                // line 366
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 366, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 366, $this->getSourceContext()); })())), "html", null, true);
                echo "
                    ";
            }
            // line 368
            echo "                ";
        }
        // line 369
        echo "
                ";
        // line 370
        if (((array_key_exists("choiceLabel", $context)) ? (_twig_default_filter((isset($context["choiceLabel"]) || array_key_exists("choiceLabel", $context) ? $context["choiceLabel"] : (function () { throw new Twig_Error_Runtime('Variable "choiceLabel" does not exist.', 370, $this->getSourceContext()); })()), false)) : (false))) {
            // line 371
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["choiceLabel"]) || array_key_exists("choiceLabel", $context) ? $context["choiceLabel"] : (function () { throw new Twig_Error_Runtime('Variable "choiceLabel" does not exist.', 371, $this->getSourceContext()); })()), "html", null, true);
            echo "
                ";
        }
        // line 373
        echo "            </label>
        ";
        // line 374
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 374, $this->getSourceContext()); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 374, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            echo "</div>";
            $this->displayBlock("form_message", $context, $blocks);
        }
        // line 375
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_318c6555f9840dd6a056357392b065ff859fc9560a04dd2ec1154d35dfd7a9f9->leave($__internal_318c6555f9840dd6a056357392b065ff859fc9560a04dd2ec1154d35dfd7a9f9_prof);

        
        $__internal_65e0780b3eb63a9ba4344ff59542c935e0af9d2badea9beab7529124e842f2c4->leave($__internal_65e0780b3eb63a9ba4344ff59542c935e0af9d2badea9beab7529124e842f2c4_prof);

    }

    // line 378
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e35599ca3e9e8ac7316ee8c1e7e8dc67eddf9ae313e807fadc4d2097d5fbc312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35599ca3e9e8ac7316ee8c1e7e8dc67eddf9ae313e807fadc4d2097d5fbc312->enter($__internal_e35599ca3e9e8ac7316ee8c1e7e8dc67eddf9ae313e807fadc4d2097d5fbc312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0d8c834587cbd3451a47c07fdb31cf188da05c38426239881cf1e3eb5a7b0a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8c834587cbd3451a47c07fdb31cf188da05c38426239881cf1e3eb5a7b0a88->enter($__internal_0d8c834587cbd3451a47c07fdb31cf188da05c38426239881cf1e3eb5a7b0a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 379
        ob_start();
        // line 380
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 380, $this->getSourceContext()); })()) == "single_text")) {
            // line 381
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 382
                echo "        <div data-provider=\"datepicker\" class=\"vic-input-group vic-date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 382, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 382, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-link-format=\"dd-mm-yyyy\">
            <input ";
                // line 383
                if ( !((isset($context["vic_widget_form_control_class"]) || array_key_exists("vic_widget_form_control_class", $context) ? $context["vic_widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_control_class" does not exist.', 383, $this->getSourceContext()); })()) === false)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["vic_widget_form_control_class"]) || array_key_exists("vic_widget_form_control_class", $context) ? $context["vic_widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_control_class" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" ";
                }
                echo "type=\"text\" ";
                if ((array_key_exists("read_only", $context) && (isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 383, $this->getSourceContext()); })()))) {
                    echo " readonly=\"readonly\"";
                }
                if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 383, $this->getSourceContext()); })())) {
                    echo " disabled=\"disabled\"";
                }
                if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 383, $this->getSourceContext()); })())) {
                    echo " required=\"required\"";
                }
                echo ">
            <input type=\"hidden\" value=\"";
                // line 384
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 384, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            <span class=\"vic-input-group-addon\">";
                // line 385
                echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon("calendar");
                echo "</span>
        </div>
    ";
            } else {
                // line 388
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 391
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 391, $this->getSourceContext()); })()), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "inline")) : ("inline"))));
            // line 392
            echo "        <div class=\"vic-row\">
        ";
            // line 393
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 393, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 394
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 394, $this->getSourceContext()); })()), "year", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . "")), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 394, $this->getSourceContext()); })()), "vic-col-lg-3")) : ("vic-col-lg-3")))), "{{ month }}" =>             // line 395
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 395, $this->getSourceContext()); })()), "month", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . "")), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 395, $this->getSourceContext()); })()), "vic-col-lg-3")) : ("vic-col-lg-3")))), "{{ day }}" =>             // line 396
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 396, $this->getSourceContext()); })()), "day", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . "")), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 396, $this->getSourceContext()); })()), "vic-col-lg-3")) : ("vic-col-lg-3"))))));
            // line 397
            echo "
        </div>
    ";
            // line 399
            $this->displayBlock("form_message", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0d8c834587cbd3451a47c07fdb31cf188da05c38426239881cf1e3eb5a7b0a88->leave($__internal_0d8c834587cbd3451a47c07fdb31cf188da05c38426239881cf1e3eb5a7b0a88_prof);

        
        $__internal_e35599ca3e9e8ac7316ee8c1e7e8dc67eddf9ae313e807fadc4d2097d5fbc312->leave($__internal_e35599ca3e9e8ac7316ee8c1e7e8dc67eddf9ae313e807fadc4d2097d5fbc312_prof);

    }

    // line 404
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_eb726cfbb3296c01359cd8102bba57a73b45e56576f27a433734284649885888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb726cfbb3296c01359cd8102bba57a73b45e56576f27a433734284649885888->enter($__internal_eb726cfbb3296c01359cd8102bba57a73b45e56576f27a433734284649885888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_65e2bdd8dcdb5874ae96d666ba184538005a25c9af677279d6a2b875d21f5d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e2bdd8dcdb5874ae96d666ba184538005a25c9af677279d6a2b875d21f5d6d->enter($__internal_65e2bdd8dcdb5874ae96d666ba184538005a25c9af677279d6a2b875d21f5d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 405
        ob_start();
        // line 406
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 406, $this->getSourceContext()); })()) == "single_text")) {
            // line 407
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 408
                echo "        <div data-provider=\"timepicker\" class=\"vic-input-group vic-date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 408, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 408, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input class=\"v-form-group__input\" type=\"text\" ";
                // line 409
                if ((array_key_exists("read_only", $context) && (isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 409, $this->getSourceContext()); })()))) {
                    echo " readonly=\"readonly\"";
                }
                if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 409, $this->getSourceContext()); })())) {
                    echo " disabled=\"disabled\"";
                }
                if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 409, $this->getSourceContext()); })())) {
                    echo " required=\"required\"";
                }
                echo ">
            <input type=\"hidden\" value=\"";
                // line 410
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 410, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            <span class=\"vic-input-group-addon\">";
                // line 411
                echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon("time");
                echo "</span>
        </div>
    ";
            } else {
                // line 414
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 417
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 417, $this->getSourceContext()); })()), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 418
            echo "    ";
            ob_start();
            // line 419
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 419, $this->getSourceContext()); })()), "hour", array()), 'widget', array("attr" => array("size" => "1"), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 419, $this->getSourceContext()); })()), "vic-col-lg-2")) : ("vic-col-lg-2"))));
            echo "
    ";
            // line 420
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 420, $this->getSourceContext()); })()), "minute", array()), 'widget', array("attr" => array("size" => "1"), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 420, $this->getSourceContext()); })()), "vic-col-lg-2")) : ("vic-col-lg-2"))));
            echo "
    ";
            // line 421
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 421, $this->getSourceContext()); })())) {
                // line 422
                echo "        :";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 422, $this->getSourceContext()); })()), "second", array()), 'widget', array("attr" => array("size" => "1"), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 422, $this->getSourceContext()); })()), "vic-col-lg-2")) : ("vic-col-lg-2"))));
                echo "
    ";
            }
            // line 424
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 425
            echo "    ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_65e2bdd8dcdb5874ae96d666ba184538005a25c9af677279d6a2b875d21f5d6d->leave($__internal_65e2bdd8dcdb5874ae96d666ba184538005a25c9af677279d6a2b875d21f5d6d_prof);

        
        $__internal_eb726cfbb3296c01359cd8102bba57a73b45e56576f27a433734284649885888->leave($__internal_eb726cfbb3296c01359cd8102bba57a73b45e56576f27a433734284649885888_prof);

    }

    // line 430
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_16fe61973428a4e182d8dd6d1049ee529bbf488048009993138badf0c5f37ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fe61973428a4e182d8dd6d1049ee529bbf488048009993138badf0c5f37ff3->enter($__internal_16fe61973428a4e182d8dd6d1049ee529bbf488048009993138badf0c5f37ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1e48b8b482597442594adba205a86dcb3d721146df9e885fa0f23a6116b13678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e48b8b482597442594adba205a86dcb3d721146df9e885fa0f23a6116b13678->enter($__internal_1e48b8b482597442594adba205a86dcb3d721146df9e885fa0f23a6116b13678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 431
        ob_start();
        // line 432
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 432, $this->getSourceContext()); })()) == "single_text")) {
            // line 433
            echo "        ";
            if (array_key_exists("vic_datetimepicker", $context)) {
                // line 434
                echo "            <div data-provider=\"datetimepicker\" class=\"v-form-group__input-group v-date\" data-date=\"";
                if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 434, $this->getSourceContext()); })())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->twigVicDateFormatFilter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 434, $this->getSourceContext()); })()), "d-m-Y H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 434, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-link-format=\"dd-mm-yyyy hh:ii\">
                <span class=\"v-form-group__addon\">
                    ";
                // line 436
                $this->loadTemplate("VictoireUIBundle:SVG:calendar.html.twig", "VictoireFormBundle:Form:fields.html.twig", 436)->display($context);
                // line 437
                echo "                </span>

                <input class=\"v-form-group__input\" type=\"text\" ";
                // line 439
                if ((array_key_exists("read_only", $context) && (isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 439, $this->getSourceContext()); })()))) {
                    echo " readonly=\"readonly\"";
                }
                if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 439, $this->getSourceContext()); })())) {
                    echo " disabled=\"disabled\"";
                }
                if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 439, $this->getSourceContext()); })())) {
                    echo " required=\"required\"";
                }
                echo " value=\"";
                if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 439, $this->getSourceContext()); })())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->twigVicDateFormatFilter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 439, $this->getSourceContext()); })()), "d-m-Y H:i"), "html", null, true);
                }
                echo "\">
                <input type=\"hidden\" value=\"";
                // line 440
                if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 440, $this->getSourceContext()); })())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->twigVicDateFormatFilter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 440, $this->getSourceContext()); })()), "d-m-Y H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            </div>
        ";
            } else {
                // line 443
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 445
            echo "    ";
        } else {
            // line 446
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 446, $this->getSourceContext()); })()), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 447
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 448
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 448, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "
                ";
            // line 449
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 449, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "
                ";
            // line 450
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 450, $this->getSourceContext()); })()), "date", array()), 'widget', array("attr" => array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : (""))), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 450, $this->getSourceContext()); })()), "vic-col-lg-3")) : ("vic-col-lg-3"))));
            echo "
                ";
            // line 451
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 451, $this->getSourceContext()); })()), "time", array()), 'widget', array("attr" => array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : (""))), "vic_horizontal_input_wrapper_class" => ((array_key_exists("vic_horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 451, $this->getSourceContext()); })()), "vic-col-lg-2")) : ("vic-col-lg-2"))));
            echo "
                ";
            // line 452
            $this->displayBlock("form_message", $context, $blocks);
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1e48b8b482597442594adba205a86dcb3d721146df9e885fa0f23a6116b13678->leave($__internal_1e48b8b482597442594adba205a86dcb3d721146df9e885fa0f23a6116b13678_prof);

        
        $__internal_16fe61973428a4e182d8dd6d1049ee529bbf488048009993138badf0c5f37ff3->leave($__internal_16fe61973428a4e182d8dd6d1049ee529bbf488048009993138badf0c5f37ff3_prof);

    }

    // line 458
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5879665c438896eb2e3347ed63a4d0314f16912c4e5ff4c5873c7c2aa089c155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5879665c438896eb2e3347ed63a4d0314f16912c4e5ff4c5873c7c2aa089c155->enter($__internal_5879665c438896eb2e3347ed63a4d0314f16912c4e5ff4c5873c7c2aa089c155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4bb79c7fe789ca4fc70c0f290a67e0c8985768918943a185bae21124bdb9d10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb79c7fe789ca4fc70c0f290a67e0c8985768918943a185bae21124bdb9d10a->enter($__internal_4bb79c7fe789ca4fc70c0f290a67e0c8985768918943a185bae21124bdb9d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 459
        ob_start();
        // line 460
        echo "    ";
        $context["vic_widget_addon_append"] = twig_array_merge((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 460, $this->getSourceContext()); })()), array("text" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["vic_widget_addon_append"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["vic_widget_addon_append"] ?? null), "text", array()), "%")) : ("%"))));
        // line 461
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4bb79c7fe789ca4fc70c0f290a67e0c8985768918943a185bae21124bdb9d10a->leave($__internal_4bb79c7fe789ca4fc70c0f290a67e0c8985768918943a185bae21124bdb9d10a_prof);

        
        $__internal_5879665c438896eb2e3347ed63a4d0314f16912c4e5ff4c5873c7c2aa089c155->leave($__internal_5879665c438896eb2e3347ed63a4d0314f16912c4e5ff4c5873c7c2aa089c155_prof);

    }

    // line 465
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_901f63d0e68d7e30ceed62fab1b23e2fb108377b6e3d7bf8a58d547964b40731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901f63d0e68d7e30ceed62fab1b23e2fb108377b6e3d7bf8a58d547964b40731->enter($__internal_901f63d0e68d7e30ceed62fab1b23e2fb108377b6e3d7bf8a58d547964b40731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f809e021214aac8df390e014bbaf4ecc915692bfe44246734234ac9e56fe2f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f809e021214aac8df390e014bbaf4ecc915692bfe44246734234ac9e56fe2f51->enter($__internal_f809e021214aac8df390e014bbaf4ecc915692bfe44246734234ac9e56fe2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 466
        ob_start();
        // line 467
        echo "    ";
        $context["vic_widget_addon_prepend"] = ((((((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 467, $this->getSourceContext()); })()) != false) || ((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 467, $this->getSourceContext()); })()) == null)) && ((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 467, $this->getSourceContext()); })()) != "{{ widget }}"))) ? (array("text" => twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 467, $this->getSourceContext()); })()), array("{{ widget }}" => "")))) : (((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 467, $this->getSourceContext()); })()), null)) : (null))));
        // line 468
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f809e021214aac8df390e014bbaf4ecc915692bfe44246734234ac9e56fe2f51->leave($__internal_f809e021214aac8df390e014bbaf4ecc915692bfe44246734234ac9e56fe2f51_prof);

        
        $__internal_901f63d0e68d7e30ceed62fab1b23e2fb108377b6e3d7bf8a58d547964b40731->leave($__internal_901f63d0e68d7e30ceed62fab1b23e2fb108377b6e3d7bf8a58d547964b40731_prof);

    }

    // line 472
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_2626e53bbf7ff2246f38ed89502b0d12d6024a69116449cb8e65fccbef08c009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2626e53bbf7ff2246f38ed89502b0d12d6024a69116449cb8e65fccbef08c009->enter($__internal_2626e53bbf7ff2246f38ed89502b0d12d6024a69116449cb8e65fccbef08c009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_901a16c8c92aa83d399f08b452fc5ce7642d15b17d68757d76ca9262b9004c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901a16c8c92aa83d399f08b452fc5ce7642d15b17d68757d76ca9262b9004c37->enter($__internal_901a16c8c92aa83d399f08b452fc5ce7642d15b17d68757d76ca9262b9004c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 473
        ob_start();
        // line 474
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 474, $this->getSourceContext()); })()), "file")) : ("file"));
        // line 475
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 475, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["vic_widget_form_control_class"]) || array_key_exists("vic_widget_form_control_class", $context) ? $context["vic_widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_control_class" does not exist.', 475, $this->getSourceContext()); })()))));
        // line 476
        echo "    ";
        if ( !(null === ((array_key_exists("vic_widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 476, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 477
            echo "        ";
            $context["widget_addon"] = (isset($context["vic_widget_addon_prepend"]) || array_key_exists("vic_widget_addon_prepend", $context) ? $context["vic_widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_prepend" does not exist.', 477, $this->getSourceContext()); })());
            // line 478
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 480
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 480, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 481
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 481, $this->getSourceContext()); })()) != "hidden") &&  !(null === ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "type", array()), null)) : (null))))) {
            // line 482
            echo "    ";
            if ( !(null === ((array_key_exists("vic_widget_addon_append", $context)) ? (_twig_default_filter((isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 482, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 483
                echo "        ";
                $context["widget_addon"] = (isset($context["vic_widget_addon_append"]) || array_key_exists("vic_widget_addon_append", $context) ? $context["vic_widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_addon_append" does not exist.', 483, $this->getSourceContext()); })());
                // line 484
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        // line 487
        echo "    ";
        if ((isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 487, $this->getSourceContext()); })())) {
            // line 488
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_901a16c8c92aa83d399f08b452fc5ce7642d15b17d68757d76ca9262b9004c37->leave($__internal_901a16c8c92aa83d399f08b452fc5ce7642d15b17d68757d76ca9262b9004c37_prof);

        
        $__internal_2626e53bbf7ff2246f38ed89502b0d12d6024a69116449cb8e65fccbef08c009->leave($__internal_2626e53bbf7ff2246f38ed89502b0d12d6024a69116449cb8e65fccbef08c009_prof);

    }

    // line 495
    public function block_form_legend($context, array $blocks = array())
    {
        $__internal_ca4f4198ea49437669d7d5f0662bac2f64bddf537bb9ebd7c31f2475368d357c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4f4198ea49437669d7d5f0662bac2f64bddf537bb9ebd7c31f2475368d357c->enter($__internal_ca4f4198ea49437669d7d5f0662bac2f64bddf537bb9ebd7c31f2475368d357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_legend"));

        $__internal_7bf8a5063d4685e49d99777d5cae2b48332d2a04061b270f42f16d9854c47408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf8a5063d4685e49d99777d5cae2b48332d2a04061b270f42f16d9854c47408->enter($__internal_7bf8a5063d4685e49d99777d5cae2b48332d2a04061b270f42f16d9854c47408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_legend"));

        // line 496
        ob_start();
        // line 497
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 497, $this->getSourceContext()); })()))) {
            // line 498
            echo "        ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 498, $this->getSourceContext()); })()));
            // line 499
            echo "    ";
        }
        // line 500
        echo "    <";
        echo twig_escape_filter($this->env, (isset($context["vic_legend_tag"]) || array_key_exists("vic_legend_tag", $context) ? $context["vic_legend_tag"] : (function () { throw new Twig_Error_Runtime('Variable "vic_legend_tag" does not exist.', 500, $this->getSourceContext()); })()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 500, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 500, $this->getSourceContext()); })())), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["vic_legend_tag"]) || array_key_exists("vic_legend_tag", $context) ? $context["vic_legend_tag"] : (function () { throw new Twig_Error_Runtime('Variable "vic_legend_tag" does not exist.', 500, $this->getSourceContext()); })()), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7bf8a5063d4685e49d99777d5cae2b48332d2a04061b270f42f16d9854c47408->leave($__internal_7bf8a5063d4685e49d99777d5cae2b48332d2a04061b270f42f16d9854c47408_prof);

        
        $__internal_ca4f4198ea49437669d7d5f0662bac2f64bddf537bb9ebd7c31f2475368d357c->leave($__internal_ca4f4198ea49437669d7d5f0662bac2f64bddf537bb9ebd7c31f2475368d357c_prof);

    }

    // line 504
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_378b2873a8e848c67e0827e62d43d2ebf30883c4bc70a33001cea57617cb8334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378b2873a8e848c67e0827e62d43d2ebf30883c4bc70a33001cea57617cb8334->enter($__internal_378b2873a8e848c67e0827e62d43d2ebf30883c4bc70a33001cea57617cb8334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_58d3a9d51e0ea6865df9f6d0158aa31e34a50c5dbcdc986ab96c0dcc315cb1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d3a9d51e0ea6865df9f6d0158aa31e34a50c5dbcdc986ab96c0dcc315cb1a7->enter($__internal_58d3a9d51e0ea6865df9f6d0158aa31e34a50c5dbcdc986ab96c0dcc315cb1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 505
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 505, $this->getSourceContext()); })())) || twig_in_filter((isset($context["vic_widget_vic_checkbox_label"]) || array_key_exists("vic_widget_vic_checkbox_label", $context) ? $context["vic_widget_vic_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_vic_checkbox_label" does not exist.', 505, $this->getSourceContext()); })()), array(0 => "label", 1 => "both")))) {
            // line 506
            ob_start();
            // line 507
            echo "    ";
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 507, $this->getSourceContext()); })()) === false)) {
                // line 508
                echo "        ";
                if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 508, $this->getSourceContext()); })()))) {
                    // line 509
                    echo "            ";
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 509, $this->getSourceContext()); })()));
                    // line 510
                    echo "        ";
                }
                // line 511
                echo "        ";
                if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 511, $this->getSourceContext()); })())) {
                    // line 512
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 512, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 512, $this->getSourceContext()); })())));
                    // line 513
                    echo "        ";
                }
                // line 514
                echo "        ";
                $context["label_attr_class"] = "";
                // line 515
                echo "        ";
                if ((isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 515, $this->getSourceContext()); })())) {
                    // line 516
                    echo "            ";
                    $context["label_attr_class"] = (("v-form-group__label " . (isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr_class" does not exist.', 516, $this->getSourceContext()); })())) . (isset($context["vic_horizontal_label_class"]) || array_key_exists("vic_horizontal_label_class", $context) ? $context["vic_horizontal_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_label_class" does not exist.', 516, $this->getSourceContext()); })()));
                    // line 517
                    echo "        ";
                }
                // line 518
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 518, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . (isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr_class" does not exist.', 518, $this->getSourceContext()); })())) . (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 518, $this->getSourceContext()); })())) ? (" vic-required") : ("")))));
                // line 519
                echo "        <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 519, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 520
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 520, $this->getSourceContext()); })()), array(), "victoire");
                // line 521
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 522
                if (((twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 522, $this->getSourceContext()); })()), "vars", array()), "block_prefixes", array())) && ((array_key_exists("vic_widget_add_btn", $context)) ? (_twig_default_filter((isset($context["vic_widget_add_btn"]) || array_key_exists("vic_widget_add_btn", $context) ? $context["vic_widget_add_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_add_btn" does not exist.', 522, $this->getSourceContext()); })()), null)) : (null))) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 522, $this->getSourceContext()); })()), "vars", array()), "allow_add", array()) == true))) {
                    // line 523
                    echo "            ";
                    $this->displayBlock("form_vic_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 525
                echo "        ";
                if ((isset($context["vic_help_label"]) || array_key_exists("vic_help_label", $context) ? $context["vic_help_label"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label" does not exist.', 525, $this->getSourceContext()); })())) {
                    // line 526
                    echo "            ";
                    $this->displayBlock("vic_help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 528
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 528, $this->getSourceContext()); })()), "title", array())) {
                    // line 529
                    echo "            ";
                    $this->displayBlock("vic_help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 531
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 531, $this->getSourceContext()); })()), "title", array())) {
                    // line 532
                    echo "            ";
                    $this->displayBlock("vic_help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 534
                echo "        </label>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_58d3a9d51e0ea6865df9f6d0158aa31e34a50c5dbcdc986ab96c0dcc315cb1a7->leave($__internal_58d3a9d51e0ea6865df9f6d0158aa31e34a50c5dbcdc986ab96c0dcc315cb1a7_prof);

        
        $__internal_378b2873a8e848c67e0827e62d43d2ebf30883c4bc70a33001cea57617cb8334->leave($__internal_378b2873a8e848c67e0827e62d43d2ebf30883c4bc70a33001cea57617cb8334_prof);

    }

    // line 540
    public function block_vic_help_label($context, array $blocks = array())
    {
        $__internal_26c8dd5144bb6b1a705941bb424cb66642ba24fdc7b2d0a519e3b7d9ad408af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c8dd5144bb6b1a705941bb424cb66642ba24fdc7b2d0a519e3b7d9ad408af6->enter($__internal_26c8dd5144bb6b1a705941bb424cb66642ba24fdc7b2d0a519e3b7d9ad408af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_label"));

        $__internal_9a2b2167fa5b18e37ebf1002c81072322bd825a3cfe5c2acfdde2bfb94c55fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2b2167fa5b18e37ebf1002c81072322bd825a3cfe5c2acfdde2bfb94c55fc6->enter($__internal_9a2b2167fa5b18e37ebf1002c81072322bd825a3cfe5c2acfdde2bfb94c55fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_label"));

        // line 541
        echo "    <span class=\"v-form-group__help\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["vic_help_label"]) || array_key_exists("vic_help_label", $context) ? $context["vic_help_label"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label" does not exist.', 541, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 541, $this->getSourceContext()); })())), "html", null, true);
        echo "</span>
";
        
        $__internal_9a2b2167fa5b18e37ebf1002c81072322bd825a3cfe5c2acfdde2bfb94c55fc6->leave($__internal_9a2b2167fa5b18e37ebf1002c81072322bd825a3cfe5c2acfdde2bfb94c55fc6_prof);

        
        $__internal_26c8dd5144bb6b1a705941bb424cb66642ba24fdc7b2d0a519e3b7d9ad408af6->leave($__internal_26c8dd5144bb6b1a705941bb424cb66642ba24fdc7b2d0a519e3b7d9ad408af6_prof);

    }

    // line 544
    public function block_vic_help_label_tooltip($context, array $blocks = array())
    {
        $__internal_a09b3cc96ec4b5cab18aaccf608c9c13c889744bb567b9c2ef26fc7ffc49ea68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09b3cc96ec4b5cab18aaccf608c9c13c889744bb567b9c2ef26fc7ffc49ea68->enter($__internal_a09b3cc96ec4b5cab18aaccf608c9c13c889744bb567b9c2ef26fc7ffc49ea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_label_tooltip"));

        $__internal_af21b9dce5e30008e701acd2d3ffb157a5f35d9d4b1e9a3a9a59b6772feca457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af21b9dce5e30008e701acd2d3ffb157a5f35d9d4b1e9a3a9a59b6772feca457->enter($__internal_af21b9dce5e30008e701acd2d3ffb157a5f35d9d4b1e9a3a9a59b6772feca457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_label_tooltip"));

        // line 545
        echo "    <span class=\"v-form-group__help\">
        <a href=\"#\" data-toggle=\"vic-tooltip\" data-placement=\"";
        // line 546
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 546, $this->getSourceContext()); })()), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 546, $this->getSourceContext()); })()), "title", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 546, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
            ";
        // line 547
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 547, $this->getSourceContext()); })()), "icon", array()) === false)) {
            // line 548
            echo "                ";
            echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 548, $this->getSourceContext()); })()), "icon", array()));
            echo "
            ";
        }
        // line 550
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 550, $this->getSourceContext()); })()), "text", array()) === null)) {
            // line 551
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_tooltip"]) || array_key_exists("vic_help_label_tooltip", $context) ? $context["vic_help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_tooltip" does not exist.', 551, $this->getSourceContext()); })()), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 553
        echo "        </a>
    </span>
";
        
        $__internal_af21b9dce5e30008e701acd2d3ffb157a5f35d9d4b1e9a3a9a59b6772feca457->leave($__internal_af21b9dce5e30008e701acd2d3ffb157a5f35d9d4b1e9a3a9a59b6772feca457_prof);

        
        $__internal_a09b3cc96ec4b5cab18aaccf608c9c13c889744bb567b9c2ef26fc7ffc49ea68->leave($__internal_a09b3cc96ec4b5cab18aaccf608c9c13c889744bb567b9c2ef26fc7ffc49ea68_prof);

    }

    // line 557
    public function block_vic_help_label_popover($context, array $blocks = array())
    {
        $__internal_6bfa24833dc3761a4563066ab15472ee92ec6ef68ccffb3a9f9f58c990812acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfa24833dc3761a4563066ab15472ee92ec6ef68ccffb3a9f9f58c990812acb->enter($__internal_6bfa24833dc3761a4563066ab15472ee92ec6ef68ccffb3a9f9f58c990812acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_label_popover"));

        $__internal_b5e40c69c45f17c120c001ec2c36ef558ade1ba2107a846973adbca16aae8af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e40c69c45f17c120c001ec2c36ef558ade1ba2107a846973adbca16aae8af7->enter($__internal_b5e40c69c45f17c120c001ec2c36ef558ade1ba2107a846973adbca16aae8af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_label_popover"));

        // line 558
        echo "    <span class=\"v-form-group__help\">
        <a href=\"#\" data-toggle=\"vic-popover\" data-trigger=\"hover\" data-placement=\"";
        // line 559
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 559, $this->getSourceContext()); })()), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 559, $this->getSourceContext()); })()), "title", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 559, $this->getSourceContext()); })())), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 559, $this->getSourceContext()); })()), "content", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 559, $this->getSourceContext()); })())), "html", null, true);
        echo "\" >
            ";
        // line 560
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 560, $this->getSourceContext()); })()), "icon", array()) === false)) {
            // line 561
            echo "                ";
            echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 561, $this->getSourceContext()); })()), "icon", array()));
            echo "
            ";
        }
        // line 563
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 563, $this->getSourceContext()); })()), "text", array()) === null)) {
            // line 564
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_label_popover"]) || array_key_exists("vic_help_label_popover", $context) ? $context["vic_help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_label_popover" does not exist.', 564, $this->getSourceContext()); })()), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 566
        echo "        </a>
    </span>
";
        
        $__internal_b5e40c69c45f17c120c001ec2c36ef558ade1ba2107a846973adbca16aae8af7->leave($__internal_b5e40c69c45f17c120c001ec2c36ef558ade1ba2107a846973adbca16aae8af7_prof);

        
        $__internal_6bfa24833dc3761a4563066ab15472ee92ec6ef68ccffb3a9f9f58c990812acb->leave($__internal_6bfa24833dc3761a4563066ab15472ee92ec6ef68ccffb3a9f9f58c990812acb_prof);

    }

    // line 570
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_4937e1ed21b7c106d190a66809e05ae7350c36dcaec7074cb7389f358664a893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4937e1ed21b7c106d190a66809e05ae7350c36dcaec7074cb7389f358664a893->enter($__internal_4937e1ed21b7c106d190a66809e05ae7350c36dcaec7074cb7389f358664a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        $__internal_8577701862791f6f170bae1e5f6cf2cd7a004fd55dce41da1fd1826cf17fcd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8577701862791f6f170bae1e5f6cf2cd7a004fd55dce41da1fd1826cf17fcd9c->enter($__internal_8577701862791f6f170bae1e5f6cf2cd7a004fd55dce41da1fd1826cf17fcd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 571
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new Twig_Error_Runtime('Variable "buttons" does not exist.', 571, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 572
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 573
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8577701862791f6f170bae1e5f6cf2cd7a004fd55dce41da1fd1826cf17fcd9c->leave($__internal_8577701862791f6f170bae1e5f6cf2cd7a004fd55dce41da1fd1826cf17fcd9c_prof);

        
        $__internal_4937e1ed21b7c106d190a66809e05ae7350c36dcaec7074cb7389f358664a893->leave($__internal_4937e1ed21b7c106d190a66809e05ae7350c36dcaec7074cb7389f358664a893_prof);

    }

    // line 577
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_0f682d23d34b6f27177d1b444a5776d4812efa1305dcb2b214d534669160baa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f682d23d34b6f27177d1b444a5776d4812efa1305dcb2b214d534669160baa7->enter($__internal_0f682d23d34b6f27177d1b444a5776d4812efa1305dcb2b214d534669160baa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        $__internal_a519b32a25635e554ea96c8a129333ae4785f04b9030f9330dc188bc112623dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a519b32a25635e554ea96c8a129333ae4785f04b9030f9330dc188bc112623dc->enter($__internal_a519b32a25635e554ea96c8a129333ae4785f04b9030f9330dc188bc112623dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 578
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_a519b32a25635e554ea96c8a129333ae4785f04b9030f9330dc188bc112623dc->leave($__internal_a519b32a25635e554ea96c8a129333ae4785f04b9030f9330dc188bc112623dc_prof);

        
        $__internal_0f682d23d34b6f27177d1b444a5776d4812efa1305dcb2b214d534669160baa7->leave($__internal_0f682d23d34b6f27177d1b444a5776d4812efa1305dcb2b214d534669160baa7_prof);

    }

    // line 581
    public function block_form_rows_visible($context, array $blocks = array())
    {
        $__internal_82d83ae901f0d94b284afed363c94ac8d7d978765d8c688272d7c2ff69d5b204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d83ae901f0d94b284afed363c94ac8d7d978765d8c688272d7c2ff69d5b204->enter($__internal_82d83ae901f0d94b284afed363c94ac8d7d978765d8c688272d7c2ff69d5b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows_visible"));

        $__internal_0b51ae46b12b057aa04cb5040c9ff5b6614870dae4dc11d4b7c1930bdde3bc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b51ae46b12b057aa04cb5040c9ff5b6614870dae4dc11d4b7c1930bdde3bc76->enter($__internal_0b51ae46b12b057aa04cb5040c9ff5b6614870dae4dc11d4b7c1930bdde3bc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows_visible"));

        // line 582
        ob_start();
        // line 583
        echo "    ";
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 583, $this->getSourceContext()); })()), 'errors')) {
            // line 584
            echo "        <div class=\"vic-symfony-form-errors\">
            ";
            // line 585
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 585, $this->getSourceContext()); })()), 'errors');
            echo "
        </div>
    ";
        }
        // line 588
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 588, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 589
            echo "        ";
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "block_prefixes", array()))) {
                echo " ";
                // line 590
                echo "            ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 592
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0b51ae46b12b057aa04cb5040c9ff5b6614870dae4dc11d4b7c1930bdde3bc76->leave($__internal_0b51ae46b12b057aa04cb5040c9ff5b6614870dae4dc11d4b7c1930bdde3bc76_prof);

        
        $__internal_82d83ae901f0d94b284afed363c94ac8d7d978765d8c688272d7c2ff69d5b204->leave($__internal_82d83ae901f0d94b284afed363c94ac8d7d978765d8c688272d7c2ff69d5b204_prof);

    }

    // line 596
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_44a0dbf4afe5573012c5cbede606b9c8625fea85a826eb3f2ea35b07bb2293ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a0dbf4afe5573012c5cbede606b9c8625fea85a826eb3f2ea35b07bb2293ad->enter($__internal_44a0dbf4afe5573012c5cbede606b9c8625fea85a826eb3f2ea35b07bb2293ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_71883dc25936d461cc1ae70fc01e0bddd35917ceceb08cdb105272a096750617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71883dc25936d461cc1ae70fc01e0bddd35917ceceb08cdb105272a096750617->enter($__internal_71883dc25936d461cc1ae70fc01e0bddd35917ceceb08cdb105272a096750617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 597
        ob_start();
        // line 598
        echo "    ";
        if (twig_in_filter("tab", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 598, $this->getSourceContext()); })()), "vars", array()), "block_prefixes", array()))) {
            // line 599
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } else {
            // line 601
            echo "        ";
            $this->displayBlock("vic_widget_form_group_start", $context, $blocks);
            echo "

        ";
            // line 603
            $context["show_horizontal_wrapper"] = ((isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 603, $this->getSourceContext()); })()) &&  !( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 603, $this->getSourceContext()); })()), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 603, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array()))));
            // line 604
            echo "
        ";
            // line 605
            if (((isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 605, $this->getSourceContext()); })()) &&  !(isset($context["vic_label_render"]) || array_key_exists("vic_label_render", $context) ? $context["vic_label_render"] : (function () { throw new Twig_Error_Runtime('Variable "vic_label_render" does not exist.', 605, $this->getSourceContext()); })()))) {
                // line 606
                echo "            ";
                $context["vic_horizontal_input_wrapper_class"] = (((isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 606, $this->getSourceContext()); })()) . " ") . (isset($context["vic_horizontal_label_offset_class"]) || array_key_exists("vic_horizontal_label_offset_class", $context) ? $context["vic_horizontal_label_offset_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_label_offset_class" does not exist.', 606, $this->getSourceContext()); })()));
                // line 607
                echo "        ";
            }
            // line 608
            echo "
        ";
            // line 609
            if ((isset($context["show_horizontal_wrapper"]) || array_key_exists("show_horizontal_wrapper", $context) ? $context["show_horizontal_wrapper"] : (function () { throw new Twig_Error_Runtime('Variable "show_horizontal_wrapper" does not exist.', 609, $this->getSourceContext()); })())) {
                // line 610
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["vic_horizontal_input_wrapper_class"]) || array_key_exists("vic_horizontal_input_wrapper_class", $context) ? $context["vic_horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal_input_wrapper_class" does not exist.', 610, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
        ";
            }
            // line 612
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["vic_widget_prefix"]) || array_key_exists("vic_widget_prefix", $context) ? $context["vic_widget_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_prefix" does not exist.', 612, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 612, $this->getSourceContext()); })()));
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 612, $this->getSourceContext()); })()), 'widget', $context);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["vic_widget_suffix"]) || array_key_exists("vic_widget_suffix", $context) ? $context["vic_widget_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_suffix" does not exist.', 612, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 612, $this->getSourceContext()); })()));
            echo "

        ";
            // line 614
            if ((isset($context["show_horizontal_wrapper"]) || array_key_exists("show_horizontal_wrapper", $context) ? $context["show_horizontal_wrapper"] : (function () { throw new Twig_Error_Runtime('Variable "show_horizontal_wrapper" does not exist.', 614, $this->getSourceContext()); })())) {
                // line 615
                echo "        </div>
        ";
            }
            // line 617
            echo "
        ";
            // line 618
            if (((( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 618, $this->getSourceContext()); })()), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 618, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array()))) && ((array_key_exists("vic_widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 618, $this->getSourceContext()); })()), null)) : (null))) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false)))) {
                // line 619
                echo "            ";
                $this->displayBlock("form_vic_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 621
            $this->displayBlock("vic_widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_71883dc25936d461cc1ae70fc01e0bddd35917ceceb08cdb105272a096750617->leave($__internal_71883dc25936d461cc1ae70fc01e0bddd35917ceceb08cdb105272a096750617_prof);

        
        $__internal_44a0dbf4afe5573012c5cbede606b9c8625fea85a826eb3f2ea35b07bb2293ad->leave($__internal_44a0dbf4afe5573012c5cbede606b9c8625fea85a826eb3f2ea35b07bb2293ad_prof);

    }

    // line 628
    public function block_form_message($context, array $blocks = array())
    {
        $__internal_e1f73360f43eb851b2d28fd092d2f784457ce47e62b8acb8bdbe6e38dff67def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f73360f43eb851b2d28fd092d2f784457ce47e62b8acb8bdbe6e38dff67def->enter($__internal_e1f73360f43eb851b2d28fd092d2f784457ce47e62b8acb8bdbe6e38dff67def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_message"));

        $__internal_2294ec9bd55d23453ce0016978d1c2b4610fe15c284ced45f2616bbd669a1737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2294ec9bd55d23453ce0016978d1c2b4610fe15c284ced45f2616bbd669a1737->enter($__internal_2294ec9bd55d23453ce0016978d1c2b4610fe15c284ced45f2616bbd669a1737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_message"));

        // line 629
        ob_start();
        // line 630
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 630, $this->getSourceContext()); })()), 'errors');
        echo "
    ";
        // line 631
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2294ec9bd55d23453ce0016978d1c2b4610fe15c284ced45f2616bbd669a1737->leave($__internal_2294ec9bd55d23453ce0016978d1c2b4610fe15c284ced45f2616bbd669a1737_prof);

        
        $__internal_e1f73360f43eb851b2d28fd092d2f784457ce47e62b8acb8bdbe6e38dff67def->leave($__internal_e1f73360f43eb851b2d28fd092d2f784457ce47e62b8acb8bdbe6e38dff67def_prof);

    }

    // line 637
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_d6b1d217a784e0bdd2fcf18ffee889cd75e5f0cc06d667605c5317721530d0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b1d217a784e0bdd2fcf18ffee889cd75e5f0cc06d667605c5317721530d0e4->enter($__internal_d6b1d217a784e0bdd2fcf18ffee889cd75e5f0cc06d667605c5317721530d0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_55fd88e99c3f37483948d4184d1cb07a2e2b6152194326007cf7ccc793df0136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fd88e99c3f37483948d4184d1cb07a2e2b6152194326007cf7ccc793df0136->enter($__internal_55fd88e99c3f37483948d4184d1cb07a2e2b6152194326007cf7ccc793df0136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 638
        echo "    ";
        ob_start();
        // line 639
        echo "        ";
        if ((isset($context["vic_help_block"]) || array_key_exists("vic_help_block", $context) ? $context["vic_help_block"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_block" does not exist.', 639, $this->getSourceContext()); })())) {
            // line 640
            echo "            <p class=\"v-form-group__help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["vic_help_block"]) || array_key_exists("vic_help_block", $context) ? $context["vic_help_block"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_block" does not exist.', 640, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 640, $this->getSourceContext()); })()));
            echo "</p>
        ";
        }
        // line 642
        echo "        ";
        if ((isset($context["vic_business_property_picker"]) || array_key_exists("vic_business_property_picker", $context) ? $context["vic_business_property_picker"] : (function () { throw new Twig_Error_Runtime('Variable "vic_business_property_picker" does not exist.', 642, $this->getSourceContext()); })())) {
            // line 643
            echo "            ";
            $this->loadTemplate("VictoireBusinessEntityBundle:BusinessProperty:list.html.twig", "VictoireFormBundle:Form:fields.html.twig", 643)->display(array_merge($context, array("description" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(            // line 644
(isset($context["vic_business_property_picker_description"]) || array_key_exists("vic_business_property_picker_description", $context) ? $context["vic_business_property_picker_description"] : (function () { throw new Twig_Error_Runtime('Variable "vic_business_property_picker_description" does not exist.', 644, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 644, $this->getSourceContext()); })())), "businessProperties" =>             // line 645
(isset($context["vic_business_properties"]) || array_key_exists("vic_business_properties", $context) ? $context["vic_business_properties"] : (function () { throw new Twig_Error_Runtime('Variable "vic_business_properties" does not exist.', 645, $this->getSourceContext()); })()))));
            // line 647
            echo "        ";
        }
        // line 648
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_55fd88e99c3f37483948d4184d1cb07a2e2b6152194326007cf7ccc793df0136->leave($__internal_55fd88e99c3f37483948d4184d1cb07a2e2b6152194326007cf7ccc793df0136_prof);

        
        $__internal_d6b1d217a784e0bdd2fcf18ffee889cd75e5f0cc06d667605c5317721530d0e4->leave($__internal_d6b1d217a784e0bdd2fcf18ffee889cd75e5f0cc06d667605c5317721530d0e4_prof);

    }

    // line 651
    public function block_form_vic_widget_add_btn($context, array $blocks = array())
    {
        $__internal_82a418f7beba5501de6a6d652704312e1447332b5f9d7ed57866e127f9e9b83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a418f7beba5501de6a6d652704312e1447332b5f9d7ed57866e127f9e9b83e->enter($__internal_82a418f7beba5501de6a6d652704312e1447332b5f9d7ed57866e127f9e9b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_vic_widget_add_btn"));

        $__internal_a15f31876390846ce6fdbc78ffd9282dedcfdcbfc76bc7ada2c507619e916a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15f31876390846ce6fdbc78ffd9282dedcfdcbfc76bc7ada2c507619e916a90->enter($__internal_a15f31876390846ce6fdbc78ffd9282dedcfdcbfc76bc7ada2c507619e916a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_vic_widget_add_btn"));

        // line 652
        ob_start();
        // line 653
        echo "    ";
        if (((array_key_exists("vic_widget_add_btn", $context)) ? (_twig_default_filter((isset($context["vic_widget_add_btn"]) || array_key_exists("vic_widget_add_btn", $context) ? $context["vic_widget_add_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_add_btn" does not exist.', 653, $this->getSourceContext()); })()), null)) : (null))) {
            // line 654
            echo "        ";
            $context["button_type"] = "add";
            // line 655
            echo "        ";
            $context["button_values"] = (isset($context["vic_widget_add_btn"]) || array_key_exists("vic_widget_add_btn", $context) ? $context["vic_widget_add_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_add_btn" does not exist.', 655, $this->getSourceContext()); })());
            // line 656
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a15f31876390846ce6fdbc78ffd9282dedcfdcbfc76bc7ada2c507619e916a90->leave($__internal_a15f31876390846ce6fdbc78ffd9282dedcfdcbfc76bc7ada2c507619e916a90_prof);

        
        $__internal_82a418f7beba5501de6a6d652704312e1447332b5f9d7ed57866e127f9e9b83e->leave($__internal_82a418f7beba5501de6a6d652704312e1447332b5f9d7ed57866e127f9e9b83e_prof);

    }

    // line 661
    public function block_form_vic_widget_remove_btn($context, array $blocks = array())
    {
        $__internal_61c72bc3eda3efdba8aa74424f51824cecd4a7244005b53a480e8ee5fc69ea7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c72bc3eda3efdba8aa74424f51824cecd4a7244005b53a480e8ee5fc69ea7f->enter($__internal_61c72bc3eda3efdba8aa74424f51824cecd4a7244005b53a480e8ee5fc69ea7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_vic_widget_remove_btn"));

        $__internal_64bcd6573594a5d142fdbd4b96df2857df2e13553cc28e26ce9bb37a9a507e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bcd6573594a5d142fdbd4b96df2857df2e13553cc28e26ce9bb37a9a507e76->enter($__internal_64bcd6573594a5d142fdbd4b96df2857df2e13553cc28e26ce9bb37a9a507e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_vic_widget_remove_btn"));

        // line 662
        ob_start();
        // line 663
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 663, $this->getSourceContext()); })()), "wrapper_div", array()) === false)) {
            // line 664
            echo "        <div class=\"v-form-group\">
            <div class=\"";
            // line 665
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 665, $this->getSourceContext()); })()), "wrapper_div", array()), "class", array()), "html", null, true);
            echo " vic-col-lg-offset-3\">
    ";
        }
        // line 667
        echo "    ";
        if (((array_key_exists("vic_widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 667, $this->getSourceContext()); })()), null)) : (null))) {
            // line 668
            echo "    ";
            $context["button_type"] = "remove";
            // line 669
            echo "    ";
            $context["button_values"] = (isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 669, $this->getSourceContext()); })());
            // line 670
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 672
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_widget_remove_btn"]) || array_key_exists("vic_widget_remove_btn", $context) ? $context["vic_widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_remove_btn" does not exist.', 672, $this->getSourceContext()); })()), "wrapper_div", array()) === false)) {
            // line 673
            echo "            </div>
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64bcd6573594a5d142fdbd4b96df2857df2e13553cc28e26ce9bb37a9a507e76->leave($__internal_64bcd6573594a5d142fdbd4b96df2857df2e13553cc28e26ce9bb37a9a507e76_prof);

        
        $__internal_61c72bc3eda3efdba8aa74424f51824cecd4a7244005b53a480e8ee5fc69ea7f->leave($__internal_61c72bc3eda3efdba8aa74424f51824cecd4a7244005b53a480e8ee5fc69ea7f_prof);

    }

    // line 679
    public function block_collection_button($context, array $blocks = array())
    {
        $__internal_5f006dc35bf29bb1137319dc2f162c2058193dc93e0f88f9159ff8b6904699ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f006dc35bf29bb1137319dc2f162c2058193dc93e0f88f9159ff8b6904699ff->enter($__internal_5f006dc35bf29bb1137319dc2f162c2058193dc93e0f88f9159ff8b6904699ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_button"));

        $__internal_117fe339170cb4f16327558a83acc2826ae8fed63abe305749bc0567624575f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117fe339170cb4f16327558a83acc2826ae8fed63abe305749bc0567624575f3->enter($__internal_117fe339170cb4f16327558a83acc2826ae8fed63abe305749bc0567624575f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_button"));

        // line 680
        echo "<a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 680, $this->getSourceContext()); })()), "attr", array()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-vic-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new Twig_Error_Runtime('Variable "button_type" does not exist.', 680, $this->getSourceContext()); })()), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 680, $this->getSourceContext()); })()), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 681
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 681, $this->getSourceContext()); })()), "icon", array()))) {
            // line 682
            echo "    ";
            echo $this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 682, $this->getSourceContext()); })()), "icon", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "icon_inverted", array()), false)) : (false)));
            echo "
";
        }
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 684, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 684, $this->getSourceContext()); })())), "html", null, true);
        echo "
</a>

";
        
        $__internal_117fe339170cb4f16327558a83acc2826ae8fed63abe305749bc0567624575f3->leave($__internal_117fe339170cb4f16327558a83acc2826ae8fed63abe305749bc0567624575f3_prof);

        
        $__internal_5f006dc35bf29bb1137319dc2f162c2058193dc93e0f88f9159ff8b6904699ff->leave($__internal_5f006dc35bf29bb1137319dc2f162c2058193dc93e0f88f9159ff8b6904699ff_prof);

    }

    // line 689
    public function block_label_asterisk($context, array $blocks = array())
    {
        $__internal_276c980b240f615f9923aa48093e843dd150f0bc8259e80fe2448d05b6386578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c980b240f615f9923aa48093e843dd150f0bc8259e80fe2448d05b6386578->enter($__internal_276c980b240f615f9923aa48093e843dd150f0bc8259e80fe2448d05b6386578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label_asterisk"));

        $__internal_dcff3048505cabb72230b8f7d1e2b10ba11d3153cde18c056b9b1bdd1d1a9640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcff3048505cabb72230b8f7d1e2b10ba11d3153cde18c056b9b1bdd1d1a9640->enter($__internal_dcff3048505cabb72230b8f7d1e2b10ba11d3153cde18c056b9b1bdd1d1a9640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label_asterisk"));

        // line 690
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 690, $this->getSourceContext()); })())) {
            // line 691
            if ((isset($context["vic_render_required_asterisk"]) || array_key_exists("vic_render_required_asterisk", $context) ? $context["vic_render_required_asterisk"] : (function () { throw new Twig_Error_Runtime('Variable "vic_render_required_asterisk" does not exist.', 691, $this->getSourceContext()); })())) {
                echo " <span class=\"vic-asterisk\">*</span>";
            }
        }
        
        $__internal_dcff3048505cabb72230b8f7d1e2b10ba11d3153cde18c056b9b1bdd1d1a9640->leave($__internal_dcff3048505cabb72230b8f7d1e2b10ba11d3153cde18c056b9b1bdd1d1a9640_prof);

        
        $__internal_276c980b240f615f9923aa48093e843dd150f0bc8259e80fe2448d05b6386578->leave($__internal_276c980b240f615f9923aa48093e843dd150f0bc8259e80fe2448d05b6386578_prof);

    }

    // line 695
    public function block_widget_addon($context, array $blocks = array())
    {
        $__internal_c0bb11156836122b8116f459efc3ae399371493b1c4622096dc0096e5847f93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bb11156836122b8116f459efc3ae399371493b1c4622096dc0096e5847f93f->enter($__internal_c0bb11156836122b8116f459efc3ae399371493b1c4622096dc0096e5847f93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_addon"));

        $__internal_e375b95ee81a57f6ee064f6fb31d1ce656bddfb3a8528adbc429798def4d8e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e375b95ee81a57f6ee064f6fb31d1ce656bddfb3a8528adbc429798def4d8e5f->enter($__internal_e375b95ee81a57f6ee064f6fb31d1ce656bddfb3a8528adbc429798def4d8e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_addon"));

        // line 696
        ob_start();
        // line 697
        $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["widget_addon"]) || array_key_exists("widget_addon", $context) ? $context["widget_addon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon" does not exist.', 697, $this->getSourceContext()); })()), "icon", array())) : (null));
        // line 698
        $context["widget_addon_icon_inverted"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "icon_inverted", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["widget_addon"]) || array_key_exists("widget_addon", $context) ? $context["widget_addon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon" does not exist.', 698, $this->getSourceContext()); })()), "icon_inverted", array())) : (false));
        // line 699
        echo "    <span class=\"vic-input-group-addon\">";
        echo ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "text", array()), false)) : (false))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["widget_addon"]) || array_key_exists("widget_addon", $context) ? $context["widget_addon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon" does not exist.', 699, $this->getSourceContext()); })()), "text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 699, $this->getSourceContext()); })()))) : ($this->env->getExtension('Victoire\Bundle\FormBundle\Twig\IconExtension')->renderIcon((isset($context["widget_addon_icon"]) || array_key_exists("widget_addon_icon", $context) ? $context["widget_addon_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon" does not exist.', 699, $this->getSourceContext()); })()), (isset($context["widget_addon_icon_inverted"]) || array_key_exists("widget_addon_icon_inverted", $context) ? $context["widget_addon_icon_inverted"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon_inverted" does not exist.', 699, $this->getSourceContext()); })()))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e375b95ee81a57f6ee064f6fb31d1ce656bddfb3a8528adbc429798def4d8e5f->leave($__internal_e375b95ee81a57f6ee064f6fb31d1ce656bddfb3a8528adbc429798def4d8e5f_prof);

        
        $__internal_c0bb11156836122b8116f459efc3ae399371493b1c4622096dc0096e5847f93f->leave($__internal_c0bb11156836122b8116f459efc3ae399371493b1c4622096dc0096e5847f93f_prof);

    }

    // line 705
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_26fa01150fc9b6481c3aa7ee32331e40251734ae4493592e6e1dbee2a3da53b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fa01150fc9b6481c3aa7ee32331e40251734ae4493592e6e1dbee2a3da53b6->enter($__internal_26fa01150fc9b6481c3aa7ee32331e40251734ae4493592e6e1dbee2a3da53b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3ace3c94bbef1662dd7f151e10701f1b0cb0417bd82746a673688970ce92561c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ace3c94bbef1662dd7f151e10701f1b0cb0417bd82746a673688970ce92561c->enter($__internal_3ace3c94bbef1662dd7f151e10701f1b0cb0417bd82746a673688970ce92561c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 706
        ob_start();
        // line 707
        if ((isset($context["vic_error_delay"]) || array_key_exists("vic_error_delay", $context) ? $context["vic_error_delay"] : (function () { throw new Twig_Error_Runtime('Variable "vic_error_delay" does not exist.', 707, $this->getSourceContext()); })())) {
            // line 708
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 708, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 709
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) {
                    // line 710
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "set", array(0 => "errors", 1 => (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 710, $this->getSourceContext()); })())), "method")) {
                    }
                    // line 711
                    echo "        ";
                }
                // line 712
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 714
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 714, $this->getSourceContext()); })())) > 0)) {
                // line 715
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 715, $this->getSourceContext()); })()), "parent", array()) == null)) {
                    // line 716
                    echo "            ";
                    $context["__internal_63beab88f9f9e11bd0e658378267a0d3fa5ff5f1f85517f95eac799ae8d92e2d"] = $this->loadTemplate("VictoireFormBundle::flash.html.twig", "VictoireFormBundle:Form:fields.html.twig", 716);
                    // line 717
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 717, $this->getSourceContext()); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 718
                        echo "                ";
                        echo $context["__internal_63beab88f9f9e11bd0e658378267a0d3fa5ff5f1f85517f95eac799ae8d92e2d"]->macro_flash("danger", (((null === twig_get_attribute($this->env, $this->getSourceContext(),                         // line 719
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),                         // line 720
$context["error"], "messageTemplate", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice(twig_get_attribute($this->env, $this->getSourceContext(),                         // line 721
$context["error"], "messageTemplate", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messagePluralization", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messageParameters", array()), "validators"))));
                        // line 723
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 725
                    echo "        ";
                } else {
                    // line 726
                    echo "            <span class=\"vic-help-";
                    $this->displayBlock("vic_error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 727
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 727, $this->getSourceContext()); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 728
                        echo "                ";
                        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->getSourceContext(),                         // line 729
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),                         // line 730
$context["error"], "messageTemplate", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice(twig_get_attribute($this->env, $this->getSourceContext(),                         // line 731
$context["error"], "messageTemplate", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messagePluralization", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                        // line 732
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 734
                    echo "            </span>
        ";
                }
                // line 736
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3ace3c94bbef1662dd7f151e10701f1b0cb0417bd82746a673688970ce92561c->leave($__internal_3ace3c94bbef1662dd7f151e10701f1b0cb0417bd82746a673688970ce92561c_prof);

        
        $__internal_26fa01150fc9b6481c3aa7ee32331e40251734ae4493592e6e1dbee2a3da53b6->leave($__internal_26fa01150fc9b6481c3aa7ee32331e40251734ae4493592e6e1dbee2a3da53b6_prof);

    }

    // line 743
    public function block_vic_error_type($context, array $blocks = array())
    {
        $__internal_ef532c161f4caff42a5a4c187798ab901c29815c0931c617d66a7c8c6d7bb9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef532c161f4caff42a5a4c187798ab901c29815c0931c617d66a7c8c6d7bb9d2->enter($__internal_ef532c161f4caff42a5a4c187798ab901c29815c0931c617d66a7c8c6d7bb9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_error_type"));

        $__internal_ae00f844647e815dcf3cb9a480c391eb7f30e7bb277915420b21ad7005960536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae00f844647e815dcf3cb9a480c391eb7f30e7bb277915420b21ad7005960536->enter($__internal_ae00f844647e815dcf3cb9a480c391eb7f30e7bb277915420b21ad7005960536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_error_type"));

        // line 744
        ob_start();
        // line 745
        if ((isset($context["vic_error_type"]) || array_key_exists("vic_error_type", $context) ? $context["vic_error_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_error_type" does not exist.', 745, $this->getSourceContext()); })())) {
            // line 746
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["vic_error_type"]) || array_key_exists("vic_error_type", $context) ? $context["vic_error_type"] : (function () { throw new Twig_Error_Runtime('Variable "vic_error_type" does not exist.', 746, $this->getSourceContext()); })()), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 747
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 747, $this->getSourceContext()); })()), "parent", array()) == null)) {
            // line 748
            echo "    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "vic_error_type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "vic_error_type", array()), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 750
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ae00f844647e815dcf3cb9a480c391eb7f30e7bb277915420b21ad7005960536->leave($__internal_ae00f844647e815dcf3cb9a480c391eb7f30e7bb277915420b21ad7005960536_prof);

        
        $__internal_ef532c161f4caff42a5a4c187798ab901c29815c0931c617d66a7c8c6d7bb9d2->leave($__internal_ef532c161f4caff42a5a4c187798ab901c29815c0931c617d66a7c8c6d7bb9d2_prof);

    }

    // line 757
    public function block_vic_widget_form_group_start($context, array $blocks = array())
    {
        $__internal_95d73d9317882e8c288c05951df97a84aaa1c84bc2615287ca18ffe9b7963d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d73d9317882e8c288c05951df97a84aaa1c84bc2615287ca18ffe9b7963d77->enter($__internal_95d73d9317882e8c288c05951df97a84aaa1c84bc2615287ca18ffe9b7963d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_widget_form_group_start"));

        $__internal_048954f19a2787fac1f1ed363ab230001a5e3c768c78266304d7d566dd2ef463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048954f19a2787fac1f1ed363ab230001a5e3c768c78266304d7d566dd2ef463->enter($__internal_048954f19a2787fac1f1ed363ab230001a5e3c768c78266304d7d566dd2ef463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_widget_form_group_start"));

        // line 758
        if ((((array_key_exists("vic_widget_form_group", $context)) ? (_twig_default_filter((isset($context["vic_widget_form_group"]) || array_key_exists("vic_widget_form_group", $context) ? $context["vic_widget_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_group" does not exist.', 758, $this->getSourceContext()); })()), false)) : (false)) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 758, $this->getSourceContext()); })()), "parent", array()) == null))) {
            // line 759
            echo "    ";
            if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 759, $this->getSourceContext()); })()), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 759, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
                echo " ";
                // line 760
                echo "        ";
                if ( !(isset($context["vic_omit_collection_item"]) || array_key_exists("vic_omit_collection_item", $context) ? $context["vic_omit_collection_item"] : (function () { throw new Twig_Error_Runtime('Variable "vic_omit_collection_item" does not exist.', 760, $this->getSourceContext()); })())) {
                    // line 761
                    echo "            ";
                    // line 762
                    echo "            ";
                    $context["vic_vic_widget_form_group_attr"] = twig_array_merge((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 762, $this->getSourceContext()); })()), array("class" => "vic-collection-item"));
                    // line 763
                    echo "        ";
                }
                // line 764
                echo "    ";
            }
            // line 765
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 765, $this->getSourceContext()); })())) > 0)) {
                // line 766
                echo "        ";
                // line 767
                echo "        ";
                $context["vic_vic_widget_form_group_attr"] = twig_array_merge((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 767, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["vic_vic_widget_form_group_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["vic_vic_widget_form_group_attr"] ?? null), "class", array()), "")) : ("")) . " has-error")));
                // line 768
                echo "    ";
            }
            // line 769
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_widget_popover"]) || array_key_exists("vic_help_widget_popover", $context) ? $context["vic_help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_widget_popover" does not exist.', 769, $this->getSourceContext()); })()), "selector", array()) === null)) {
                // line 770
                echo "        ";
                $context["vic_help_widget_popover"] = twig_array_merge((isset($context["vic_help_widget_popover"]) || array_key_exists("vic_help_widget_popover", $context) ? $context["vic_help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_widget_popover" does not exist.', 770, $this->getSourceContext()); })()), array("selector" => ("#" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 770, $this->getSourceContext()); })()))));
                // line 771
                echo "    ";
            }
            // line 772
            echo "    <div";
            if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vic_help_widget_popover"]) || array_key_exists("vic_help_widget_popover", $context) ? $context["vic_help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_widget_popover" does not exist.', 772, $this->getSourceContext()); })()), "title", array()) === null)) {
                $this->displayBlock("vic_help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vic_vic_widget_form_group_attr"]) || array_key_exists("vic_vic_widget_form_group_attr", $context) ? $context["vic_vic_widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "vic_vic_widget_form_group_attr" does not exist.', 772, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 774
            echo "    ";
            if (((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 774, $this->getSourceContext()); })())) > 0) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 774, $this->getSourceContext()); })()), "parent", array()) != null)) && !twig_in_filter("field", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 775
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 775, $this->getSourceContext()); })()), "vars", array()), "block_prefixes", array()))) && !twig_in_filter("date", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 776
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 776, $this->getSourceContext()); })()), "vars", array()), "block_prefixes", array())))) {
                // line 777
                echo "        ";
                if ((isset($context["vic_show_child_legend"]) || array_key_exists("vic_show_child_legend", $context) ? $context["vic_show_child_legend"] : (function () { throw new Twig_Error_Runtime('Variable "vic_show_child_legend" does not exist.', 777, $this->getSourceContext()); })())) {
                    // line 778
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif (                // line 779
(isset($context["vic_label_render"]) || array_key_exists("vic_label_render", $context) ? $context["vic_label_render"] : (function () { throw new Twig_Error_Runtime('Variable "vic_label_render" does not exist.', 779, $this->getSourceContext()); })())) {
                    // line 780
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 780, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 780, $this->getSourceContext()); })()), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 782
                    echo "        ";
                }
                // line 783
                echo "    ";
            } else {
                // line 784
                echo "        ";
                if ((isset($context["vic_label_render"]) || array_key_exists("vic_label_render", $context) ? $context["vic_label_render"] : (function () { throw new Twig_Error_Runtime('Variable "vic_label_render" does not exist.', 784, $this->getSourceContext()); })())) {
                    // line 785
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 785, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 785, $this->getSourceContext()); })()), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 787
                echo "    ";
            }
        } else {
            // line 789
            echo "    ";
            if ((isset($context["vic_label_render"]) || array_key_exists("vic_label_render", $context) ? $context["vic_label_render"] : (function () { throw new Twig_Error_Runtime('Variable "vic_label_render" does not exist.', 789, $this->getSourceContext()); })())) {
                // line 790
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 790, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 790, $this->getSourceContext()); })()), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
        
        $__internal_048954f19a2787fac1f1ed363ab230001a5e3c768c78266304d7d566dd2ef463->leave($__internal_048954f19a2787fac1f1ed363ab230001a5e3c768c78266304d7d566dd2ef463_prof);

        
        $__internal_95d73d9317882e8c288c05951df97a84aaa1c84bc2615287ca18ffe9b7963d77->leave($__internal_95d73d9317882e8c288c05951df97a84aaa1c84bc2615287ca18ffe9b7963d77_prof);

    }

    // line 795
    public function block_vic_help_widget_popover($context, array $blocks = array())
    {
        $__internal_86f927d754535a93f983f711105bd72fc4982f63e6cd8843efae494aa0efd4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f927d754535a93f983f711105bd72fc4982f63e6cd8843efae494aa0efd4aa->enter($__internal_86f927d754535a93f983f711105bd72fc4982f63e6cd8843efae494aa0efd4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_widget_popover"));

        $__internal_b391d4935505a722ad4cbe1b95bc654ec4d1a3ef2703224aa4800d89ba9a25b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b391d4935505a722ad4cbe1b95bc654ec4d1a3ef2703224aa4800d89ba9a25b7->enter($__internal_b391d4935505a722ad4cbe1b95bc654ec4d1a3ef2703224aa4800d89ba9a25b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_help_widget_popover"));

        // line 796
        echo " ";
        ob_start();
        // line 797
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vic_help_widget_popover"]) || array_key_exists("vic_help_widget_popover", $context) ? $context["vic_help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "vic_help_widget_popover" does not exist.', 797, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 798
            echo " data-";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b391d4935505a722ad4cbe1b95bc654ec4d1a3ef2703224aa4800d89ba9a25b7->leave($__internal_b391d4935505a722ad4cbe1b95bc654ec4d1a3ef2703224aa4800d89ba9a25b7_prof);

        
        $__internal_86f927d754535a93f983f711105bd72fc4982f63e6cd8843efae494aa0efd4aa->leave($__internal_86f927d754535a93f983f711105bd72fc4982f63e6cd8843efae494aa0efd4aa_prof);

    }

    // line 803
    public function block_vic_widget_form_group_end($context, array $blocks = array())
    {
        $__internal_1bb29c079807c33419ce925dee05debc3ea80bec1076819b9ba7444dfdc56e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb29c079807c33419ce925dee05debc3ea80bec1076819b9ba7444dfdc56e5a->enter($__internal_1bb29c079807c33419ce925dee05debc3ea80bec1076819b9ba7444dfdc56e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_widget_form_group_end"));

        $__internal_171d158244c13e37dafec3d92f8b5112684413db1738510f2bd6b3b264f25702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171d158244c13e37dafec3d92f8b5112684413db1738510f2bd6b3b264f25702->enter($__internal_171d158244c13e37dafec3d92f8b5112684413db1738510f2bd6b3b264f25702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vic_widget_form_group_end"));

        // line 804
        ob_start();
        // line 805
        if ((((array_key_exists("vic_widget_form_group", $context)) ? (_twig_default_filter((isset($context["vic_widget_form_group"]) || array_key_exists("vic_widget_form_group", $context) ? $context["vic_widget_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_group" does not exist.', 805, $this->getSourceContext()); })()), false)) : (false)) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 805, $this->getSourceContext()); })()), "parent", array()) == null))) {
            // line 806
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_171d158244c13e37dafec3d92f8b5112684413db1738510f2bd6b3b264f25702->leave($__internal_171d158244c13e37dafec3d92f8b5112684413db1738510f2bd6b3b264f25702_prof);

        
        $__internal_1bb29c079807c33419ce925dee05debc3ea80bec1076819b9ba7444dfdc56e5a->leave($__internal_1bb29c079807c33419ce925dee05debc3ea80bec1076819b9ba7444dfdc56e5a_prof);

    }

    // line 811
    public function block_hierarchy_tree_widget($context, array $blocks = array())
    {
        $__internal_001510316697258ef14df2476aafbc81e82160705e377868309ccbd8d4545180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001510316697258ef14df2476aafbc81e82160705e377868309ccbd8d4545180->enter($__internal_001510316697258ef14df2476aafbc81e82160705e377868309ccbd8d4545180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hierarchy_tree_widget"));

        $__internal_05b026b26f4aa67cd88f3d5e4c76b849b531b1742832cb259d61657107628035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b026b26f4aa67cd88f3d5e4c76b849b531b1742832cb259d61657107628035->enter($__internal_05b026b26f4aa67cd88f3d5e4c76b849b531b1742832cb259d61657107628035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hierarchy_tree_widget"));

        // line 812
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 812, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["vic_widget_form_control_class"]) || array_key_exists("vic_widget_form_control_class", $context) ? $context["vic_widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "vic_widget_form_control_class" does not exist.', 812, $this->getSourceContext()); })()))));
        // line 813
        echo "        ";
        $this->displayBlock("hierarchy_tree_widget_collapsed", $context, $blocks);
        echo "
    ";
        // line 814
        if ((isset($context["vic_horizontal"]) || array_key_exists("vic_horizontal", $context) ? $context["vic_horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "vic_horizontal" does not exist.', 814, $this->getSourceContext()); })())) {
            // line 815
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_05b026b26f4aa67cd88f3d5e4c76b849b531b1742832cb259d61657107628035->leave($__internal_05b026b26f4aa67cd88f3d5e4c76b849b531b1742832cb259d61657107628035_prof);

        
        $__internal_001510316697258ef14df2476aafbc81e82160705e377868309ccbd8d4545180->leave($__internal_001510316697258ef14df2476aafbc81e82160705e377868309ccbd8d4545180_prof);

    }

    // line 819
    public function block_hierarchy_tree_widget_collapsed($context, array $blocks = array())
    {
        $__internal_501c0d66ec65314876f15ed9a24caca99699979627ec5c3ef88712a17594a18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501c0d66ec65314876f15ed9a24caca99699979627ec5c3ef88712a17594a18f->enter($__internal_501c0d66ec65314876f15ed9a24caca99699979627ec5c3ef88712a17594a18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hierarchy_tree_widget_collapsed"));

        $__internal_fa86c8875c911515b53e80a61c40fa60e2e16863fead9d26dab5ddbf188e7938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa86c8875c911515b53e80a61c40fa60e2e16863fead9d26dab5ddbf188e7938->enter($__internal_fa86c8875c911515b53e80a61c40fa60e2e16863fead9d26dab5ddbf188e7938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hierarchy_tree_widget_collapsed"));

        // line 820
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 820, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 820, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 820, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 820, $this->getSourceContext()); })()))) {
            // line 821
            $context["required"] = false;
        }
        // line 823
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 823, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 824
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 824, $this->getSourceContext()); })()))) {
            // line 825
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 825, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 825, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 825, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 825, $this->getSourceContext()); })())), "html", null, true);
            echo "</option>";
        }
        // line 827
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 827, $this->getSourceContext()); })())) > 0)) {
            // line 828
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 828, $this->getSourceContext()); })());
            // line 829
            $this->displayBlock("hierarchy_tree_widget_options", $context, $blocks);
            // line 830
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 830, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 830, $this->getSourceContext()); })())))) {
                // line 831
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 831, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 834
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 834, $this->getSourceContext()); })());
        // line 835
        $this->displayBlock("hierarchy_tree_widget_options", $context, $blocks);
        // line 836
        echo "</select>
";
        
        $__internal_fa86c8875c911515b53e80a61c40fa60e2e16863fead9d26dab5ddbf188e7938->leave($__internal_fa86c8875c911515b53e80a61c40fa60e2e16863fead9d26dab5ddbf188e7938_prof);

        
        $__internal_501c0d66ec65314876f15ed9a24caca99699979627ec5c3ef88712a17594a18f->leave($__internal_501c0d66ec65314876f15ed9a24caca99699979627ec5c3ef88712a17594a18f_prof);

    }

    // line 839
    public function block_hierarchy_tree_widget_options($context, array $blocks = array())
    {
        $__internal_a9ed1a2d9f2dea677a6492537dc1339636a99a2903d0d95a5d26f37ec5ad6841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ed1a2d9f2dea677a6492537dc1339636a99a2903d0d95a5d26f37ec5ad6841->enter($__internal_a9ed1a2d9f2dea677a6492537dc1339636a99a2903d0d95a5d26f37ec5ad6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hierarchy_tree_widget_options"));

        $__internal_8894bcf60715d9490601e8a34717163092b840961800e971eee00d4929d97884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8894bcf60715d9490601e8a34717163092b840961800e971eee00d4929d97884->enter($__internal_8894bcf60715d9490601e8a34717163092b840961800e971eee00d4929d97884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hierarchy_tree_widget_options"));

        // line 840
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 840, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 841
            if (twig_test_iterable($context["choice"])) {
                // line 842
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 842, $this->getSourceContext()); })())), "html", null, true);
                echo "\">
                ";
                // line 843
                $context["options"] = $context["choice"];
                // line 844
                $this->displayBlock("hierarchy_tree_widget_options", $context, $blocks);
                // line 845
                echo "</optgroup>";
            } else {
                // line 847
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 847, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 847, $this->getSourceContext()); })()));
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8894bcf60715d9490601e8a34717163092b840961800e971eee00d4929d97884->leave($__internal_8894bcf60715d9490601e8a34717163092b840961800e971eee00d4929d97884_prof);

        
        $__internal_a9ed1a2d9f2dea677a6492537dc1339636a99a2903d0d95a5d26f37ec5ad6841->leave($__internal_a9ed1a2d9f2dea677a6492537dc1339636a99a2903d0d95a5d26f37ec5ad6841_prof);

    }

    // line 852
    public function block_font_awesome_picker_widget($context, array $blocks = array())
    {
        $__internal_420c49e5305ff188339d6415636972818cdce052c1a308318bcd9b1024063de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420c49e5305ff188339d6415636972818cdce052c1a308318bcd9b1024063de2->enter($__internal_420c49e5305ff188339d6415636972818cdce052c1a308318bcd9b1024063de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "font_awesome_picker_widget"));

        $__internal_bdfca1cc16774253f5817c945ee325f69abb4a28cb4417dd5c8420f9df246392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfca1cc16774253f5817c945ee325f69abb4a28cb4417dd5c8420f9df246392->enter($__internal_bdfca1cc16774253f5817c945ee325f69abb4a28cb4417dd5c8420f9df246392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "font_awesome_picker_widget"));

        // line 853
        echo "    ";
        ob_start();
        // line 854
        echo "    <div class=\"v-form-group\">
        <input type=\"search\" ";
        // line 855
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"v-form-group__input\" ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 855, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 855, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>
    <script type=\"text/javascript\">

        \$vic('[name=\"";
        // line 859
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 859, $this->getSourceContext()); })()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"]').iconpicker(";
        echo json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 859, $this->getSourceContext()); })()), "vars", array()), "font_awesome_picker_settings", array()));
        echo ");
    </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bdfca1cc16774253f5817c945ee325f69abb4a28cb4417dd5c8420f9df246392->leave($__internal_bdfca1cc16774253f5817c945ee325f69abb4a28cb4417dd5c8420f9df246392_prof);

        
        $__internal_420c49e5305ff188339d6415636972818cdce052c1a308318bcd9b1024063de2->leave($__internal_420c49e5305ff188339d6415636972818cdce052c1a308318bcd9b1024063de2_prof);

    }

    // line 864
    public function block_link_widget($context, array $blocks = array())
    {
        $__internal_7e07e50b392fca334ed2d40bd8e07cc28c2524a52934f33c5a5574314c79391b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e07e50b392fca334ed2d40bd8e07cc28c2524a52934f33c5a5574314c79391b->enter($__internal_7e07e50b392fca334ed2d40bd8e07cc28c2524a52934f33c5a5574314c79391b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link_widget"));

        $__internal_7cd28ddcdd6cecc42f9b46620ca396e80610dd939699d73d26f567b708cf636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd28ddcdd6cecc42f9b46620ca396e80610dd939699d73d26f567b708cf636f->enter($__internal_7cd28ddcdd6cecc42f9b46620ca396e80610dd939699d73d26f567b708cf636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link_widget"));

        // line 865
        echo "    ";
        $context["disposition"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 865, $this->getSourceContext()); })()), "vars", array()), "horizontal", array())) ? ("-horizontal") : ("-vertical"));
        // line 866
        echo "    <div data-link class=\"vic-link-container ";
        echo twig_escape_filter($this->env, (isset($context["disposition"]) || array_key_exists("disposition", $context) ? $context["disposition"] : (function () { throw new Twig_Error_Runtime('Variable "disposition" does not exist.', 866, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        ";
        // line 867
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 867, $this->getSourceContext()); })()), "linkType", array()), 'row');
        echo "
        ";
        // line 868
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "url", array(), "any", true, true)) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 868, $this->getSourceContext()); })()), "url", array()), 'row');
        }
        // line 869
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "viewReference", array(), "any", true, true)) {
            // line 870
            echo "        <div class=\"vic-row\">
            <div class=\"vic-col-xs-9\">
                ";
            // line 872
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 872, $this->getSourceContext()); })()), "viewReference", array()), 'row');
            echo "
            </div>
            <div class=\"vic-col-xs-3\" style=\"padding-top: 29px;\">
                ";
            // line 875
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 875, $this->getSourceContext()); })()), "locale", array()), 'widget');
            echo "
            </div>
        </div>
        ";
        }
        // line 879
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "attachedWidget", array(), "any", true, true)) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 879, $this->getSourceContext()); })()), "attachedWidget", array()), 'row');
        }
        // line 880
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "route", array(), "any", true, true)) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 880, $this->getSourceContext()); })()), "route", array()), 'row');
        }
        // line 881
        echo "
        ";
        // line 882
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 882, $this->getSourceContext()); })()), "vars", array()), "horizontal", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "route_parameters", array(), "any", true, true))) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 882, $this->getSourceContext()); })()), "route_parameters", array()), 'row');
        }
        // line 883
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "target", array(), "any", true, true)) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 883, $this->getSourceContext()); })()), "target", array()), 'row');
        }
        // line 884
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 884, $this->getSourceContext()); })()), "vars", array()), "horizontal", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "route_parameters", array(), "any", true, true))) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 884, $this->getSourceContext()); })()), "route_parameters", array()), 'row');
        }
        // line 885
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "analytics_track_code", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 885, $this->getSourceContext()); })()), "analytics_track_code", array()))) {
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 885, $this->getSourceContext()); })()), "analytics_track_code", array()), 'row');
        }
        // line 886
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 886, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>
";
        
        $__internal_7cd28ddcdd6cecc42f9b46620ca396e80610dd939699d73d26f567b708cf636f->leave($__internal_7cd28ddcdd6cecc42f9b46620ca396e80610dd939699d73d26f567b708cf636f_prof);

        
        $__internal_7e07e50b392fca334ed2d40bd8e07cc28c2524a52934f33c5a5574314c79391b->leave($__internal_7e07e50b392fca334ed2d40bd8e07cc28c2524a52934f33c5a5574314c79391b_prof);

    }

    public function getTemplateName()
    {
        return "VictoireFormBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3471 => 886,  3466 => 885,  3461 => 884,  3456 => 883,  3452 => 882,  3449 => 881,  3444 => 880,  3439 => 879,  3432 => 875,  3426 => 872,  3422 => 870,  3419 => 869,  3415 => 868,  3411 => 867,  3406 => 866,  3403 => 865,  3394 => 864,  3378 => 859,  3365 => 855,  3362 => 854,  3359 => 853,  3350 => 852,  3319 => 847,  3316 => 845,  3314 => 844,  3312 => 843,  3307 => 842,  3305 => 841,  3287 => 840,  3278 => 839,  3267 => 836,  3265 => 835,  3263 => 834,  3257 => 831,  3255 => 830,  3253 => 829,  3251 => 828,  3249 => 827,  3240 => 825,  3238 => 824,  3231 => 823,  3228 => 821,  3226 => 820,  3217 => 819,  3203 => 815,  3201 => 814,  3196 => 813,  3193 => 812,  3184 => 811,  3171 => 806,  3169 => 805,  3167 => 804,  3158 => 803,  3147 => 800,  3136 => 798,  3131 => 797,  3128 => 796,  3119 => 795,  3104 => 790,  3101 => 789,  3097 => 787,  3091 => 785,  3088 => 784,  3085 => 783,  3082 => 782,  3076 => 780,  3074 => 779,  3069 => 778,  3066 => 777,  3064 => 776,  3063 => 775,  3061 => 774,  3041 => 772,  3038 => 771,  3035 => 770,  3032 => 769,  3029 => 768,  3026 => 767,  3024 => 766,  3021 => 765,  3018 => 764,  3015 => 763,  3012 => 762,  3010 => 761,  3007 => 760,  3003 => 759,  3001 => 758,  2992 => 757,  2979 => 750,  2973 => 748,  2971 => 747,  2966 => 746,  2964 => 745,  2962 => 744,  2953 => 743,  2940 => 736,  2936 => 734,  2929 => 732,  2927 => 731,  2926 => 730,  2925 => 729,  2923 => 728,  2919 => 727,  2914 => 726,  2911 => 725,  2904 => 723,  2902 => 721,  2901 => 720,  2900 => 719,  2898 => 718,  2893 => 717,  2890 => 716,  2887 => 715,  2884 => 714,  2869 => 712,  2866 => 711,  2862 => 710,  2859 => 709,  2841 => 708,  2839 => 707,  2837 => 706,  2828 => 705,  2814 => 699,  2812 => 698,  2810 => 697,  2808 => 696,  2799 => 695,  2786 => 691,  2784 => 690,  2775 => 689,  2761 => 684,  2755 => 682,  2753 => 681,  2733 => 680,  2724 => 679,  2710 => 673,  2707 => 672,  2701 => 670,  2698 => 669,  2695 => 668,  2692 => 667,  2687 => 665,  2684 => 664,  2681 => 663,  2679 => 662,  2670 => 661,  2655 => 656,  2652 => 655,  2649 => 654,  2646 => 653,  2644 => 652,  2635 => 651,  2624 => 648,  2621 => 647,  2619 => 645,  2618 => 644,  2616 => 643,  2613 => 642,  2607 => 640,  2604 => 639,  2601 => 638,  2592 => 637,  2579 => 631,  2574 => 630,  2572 => 629,  2563 => 628,  2549 => 621,  2543 => 619,  2541 => 618,  2538 => 617,  2534 => 615,  2532 => 614,  2522 => 612,  2516 => 610,  2514 => 609,  2511 => 608,  2508 => 607,  2505 => 606,  2503 => 605,  2500 => 604,  2498 => 603,  2492 => 601,  2486 => 599,  2483 => 598,  2481 => 597,  2472 => 596,  2457 => 592,  2451 => 590,  2447 => 589,  2442 => 588,  2436 => 585,  2433 => 584,  2430 => 583,  2428 => 582,  2419 => 581,  2406 => 578,  2397 => 577,  2383 => 573,  2379 => 572,  2374 => 571,  2365 => 570,  2353 => 566,  2347 => 564,  2344 => 563,  2338 => 561,  2336 => 560,  2328 => 559,  2325 => 558,  2316 => 557,  2304 => 553,  2298 => 551,  2295 => 550,  2289 => 548,  2287 => 547,  2281 => 546,  2278 => 545,  2269 => 544,  2256 => 541,  2247 => 540,  2233 => 534,  2227 => 532,  2224 => 531,  2218 => 529,  2215 => 528,  2209 => 526,  2206 => 525,  2200 => 523,  2198 => 522,  2194 => 521,  2192 => 520,  2176 => 519,  2173 => 518,  2170 => 517,  2167 => 516,  2164 => 515,  2161 => 514,  2158 => 513,  2155 => 512,  2152 => 511,  2149 => 510,  2146 => 509,  2143 => 508,  2140 => 507,  2138 => 506,  2136 => 505,  2127 => 504,  2109 => 500,  2106 => 499,  2103 => 498,  2100 => 497,  2098 => 496,  2089 => 495,  2074 => 488,  2071 => 487,  2064 => 484,  2061 => 483,  2058 => 482,  2056 => 481,  2049 => 480,  2043 => 478,  2040 => 477,  2037 => 476,  2035 => 475,  2033 => 474,  2031 => 473,  2022 => 472,  2008 => 468,  2005 => 467,  2003 => 466,  1994 => 465,  1980 => 461,  1977 => 460,  1975 => 459,  1966 => 458,  1951 => 452,  1947 => 451,  1943 => 450,  1939 => 449,  1935 => 448,  1930 => 447,  1927 => 446,  1924 => 445,  1918 => 443,  1908 => 440,  1892 => 439,  1888 => 437,  1886 => 436,  1876 => 434,  1873 => 433,  1870 => 432,  1868 => 431,  1859 => 430,  1844 => 425,  1841 => 424,  1835 => 422,  1833 => 421,  1829 => 420,  1824 => 419,  1821 => 418,  1818 => 417,  1811 => 414,  1805 => 411,  1799 => 410,  1787 => 409,  1780 => 408,  1777 => 407,  1775 => 406,  1773 => 405,  1764 => 404,  1750 => 399,  1746 => 397,  1744 => 396,  1743 => 395,  1742 => 394,  1741 => 393,  1738 => 392,  1735 => 391,  1728 => 388,  1722 => 385,  1716 => 384,  1698 => 383,  1691 => 382,  1688 => 381,  1686 => 380,  1684 => 379,  1675 => 378,  1664 => 375,  1659 => 374,  1656 => 373,  1650 => 371,  1648 => 370,  1645 => 369,  1642 => 368,  1636 => 366,  1633 => 365,  1631 => 364,  1616 => 361,  1614 => 360,  1607 => 359,  1603 => 358,  1600 => 357,  1597 => 356,  1594 => 355,  1591 => 354,  1588 => 353,  1579 => 352,  1568 => 349,  1563 => 348,  1560 => 347,  1554 => 345,  1552 => 344,  1549 => 343,  1546 => 342,  1540 => 340,  1537 => 339,  1535 => 338,  1520 => 335,  1518 => 334,  1511 => 333,  1507 => 332,  1504 => 331,  1501 => 330,  1498 => 329,  1495 => 328,  1492 => 327,  1483 => 326,  1471 => 322,  1469 => 321,  1465 => 320,  1462 => 319,  1457 => 318,  1449 => 315,  1447 => 313,  1446 => 311,  1445 => 310,  1444 => 309,  1443 => 308,  1428 => 307,  1425 => 306,  1422 => 305,  1419 => 304,  1416 => 303,  1413 => 302,  1410 => 301,  1405 => 300,  1401 => 299,  1398 => 298,  1395 => 297,  1392 => 296,  1389 => 295,  1386 => 294,  1383 => 293,  1381 => 292,  1372 => 291,  1357 => 286,  1354 => 285,  1345 => 283,  1340 => 282,  1337 => 281,  1322 => 279,  1319 => 278,  1316 => 277,  1314 => 276,  1311 => 275,  1308 => 274,  1305 => 273,  1303 => 272,  1300 => 271,  1298 => 270,  1297 => 269,  1296 => 268,  1295 => 267,  1293 => 266,  1290 => 265,  1287 => 264,  1284 => 263,  1281 => 262,  1279 => 261,  1270 => 260,  1257 => 256,  1250 => 255,  1241 => 254,  1229 => 250,  1218 => 246,  1214 => 245,  1210 => 244,  1203 => 243,  1199 => 242,  1194 => 241,  1192 => 240,  1183 => 239,  1170 => 235,  1168 => 234,  1159 => 233,  1147 => 229,  1142 => 228,  1140 => 227,  1135 => 225,  1132 => 224,  1128 => 222,  1126 => 221,  1121 => 219,  1118 => 218,  1111 => 215,  1109 => 214,  1106 => 213,  1103 => 212,  1098 => 211,  1093 => 210,  1090 => 209,  1088 => 208,  1079 => 207,  1064 => 202,  1061 => 201,  1057 => 199,  1051 => 197,  1048 => 196,  1045 => 195,  1042 => 194,  1036 => 192,  1030 => 190,  1027 => 189,  1024 => 188,  1021 => 187,  1018 => 186,  1015 => 185,  1012 => 184,  1006 => 182,  1003 => 181,  1001 => 180,  998 => 179,  995 => 178,  992 => 177,  990 => 176,  981 => 175,  969 => 171,  964 => 169,  961 => 168,  958 => 167,  955 => 166,  953 => 165,  950 => 164,  944 => 162,  942 => 161,  937 => 159,  934 => 158,  932 => 157,  929 => 156,  926 => 155,  921 => 153,  918 => 152,  915 => 151,  913 => 150,  910 => 149,  908 => 148,  905 => 147,  902 => 146,  893 => 145,  881 => 142,  874 => 139,  872 => 138,  869 => 137,  860 => 136,  849 => 131,  843 => 128,  840 => 127,  833 => 123,  818 => 122,  815 => 121,  812 => 120,  809 => 119,  806 => 118,  797 => 117,  783 => 113,  777 => 111,  775 => 110,  768 => 109,  765 => 108,  762 => 107,  759 => 106,  757 => 105,  748 => 104,  735 => 101,  732 => 100,  723 => 99,  703 => 94,  697 => 90,  695 => 89,  691 => 88,  687 => 86,  685 => 85,  681 => 84,  676 => 83,  667 => 82,  655 => 78,  649 => 74,  647 => 73,  608 => 72,  604 => 71,  594 => 69,  585 => 68,  570 => 61,  562 => 56,  553 => 50,  548 => 48,  541 => 43,  532 => 42,  518 => 37,  514 => 36,  509 => 34,  505 => 32,  503 => 31,  498 => 30,  496 => 29,  491 => 28,  482 => 27,  469 => 22,  466 => 21,  457 => 20,  444 => 16,  440 => 15,  437 => 14,  428 => 13,  415 => 9,  411 => 8,  407 => 7,  404 => 6,  395 => 5,  385 => 864,  382 => 863,  380 => 852,  377 => 851,  375 => 839,  372 => 838,  370 => 819,  367 => 818,  365 => 811,  362 => 810,  360 => 803,  357 => 802,  355 => 795,  352 => 794,  350 => 757,  347 => 756,  344 => 754,  342 => 743,  339 => 742,  336 => 740,  334 => 705,  331 => 704,  328 => 702,  326 => 695,  323 => 694,  321 => 689,  318 => 688,  316 => 679,  313 => 678,  311 => 661,  308 => 660,  306 => 651,  303 => 650,  301 => 637,  298 => 636,  295 => 634,  293 => 628,  290 => 627,  287 => 625,  285 => 596,  282 => 595,  280 => 581,  277 => 580,  275 => 577,  272 => 575,  270 => 570,  267 => 569,  265 => 557,  262 => 556,  260 => 544,  257 => 543,  255 => 540,  252 => 539,  250 => 504,  247 => 503,  245 => 495,  242 => 494,  239 => 492,  237 => 472,  234 => 471,  232 => 465,  229 => 464,  227 => 458,  224 => 457,  222 => 430,  219 => 429,  217 => 404,  214 => 403,  212 => 378,  209 => 377,  207 => 352,  204 => 351,  202 => 326,  199 => 325,  197 => 291,  194 => 290,  192 => 260,  189 => 259,  187 => 254,  184 => 253,  182 => 239,  179 => 238,  177 => 233,  174 => 232,  172 => 207,  169 => 206,  167 => 175,  164 => 174,  162 => 145,  159 => 144,  157 => 136,  154 => 135,  151 => 133,  149 => 117,  146 => 116,  144 => 104,  141 => 103,  139 => 99,  136 => 98,  134 => 82,  131 => 81,  129 => 68,  126 => 66,  124 => 42,  121 => 41,  119 => 27,  115 => 25,  113 => 20,  110 => 19,  108 => 13,  105 => 12,  103 => 5,  100 => 4,  21 => 3,  14 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain \"victoire\" %}
{% use 'form_div_layout.html.twig' %}
{% use 'VictoireFormBundle:Form:localeTabs.html.twig' %}

{% block urlvalidated_row %}
    <div class=\"form-group\">
        {{ form_label(form) }}
        {{ form_widget(form) }}
        {{ form_errors(form) }}
    </div>
{% endblock %}

{% block urlvalidated_widget %}
    <div class=\"v-form-group__input-group\">
        <div class=\"v-form-group__addon v-form-group__addon--url-slug\">{{ base_url }}</div>
        {{ block('slug_widget') }}
    </div>
{% endblock urlvalidated_widget %}

{% block asynchronous_row %}
    <div class=\"vic-col-xs-12\">
        {{ block('checkbox_widget') }}
    </div>
{% endblock asynchronous_row %}


{% block criteria_collection_row %}
    <a class=\"v-btn v-btn--warning / v-widget-form__quantum-btn\" data-collapse=\"toggle\" data-href=\"#collapse-{{ id }}\">
        {% include 'VictoireUIBundle:SVG:quantum.html.twig' with { class: 'v-btn__ic v-btn__ic--before' } %}
        {{ 'victoire.widget.type.criterias.label'|trans({}, 'victoire') }}
        {% include 'VictoireUIBundle:SVG:caret.html.twig' with { class: 'v-btn__ic v-btn__ic--after' } %}
    </a>

    <div class=\"v-collapse v-collapse--plain v-collapse--criteria\" id=\"collapse-{{ id }}\" data-flag=\"v-collapse\">
        <div class=\"v-container\">
            {{ form_row(form.parent.quantum) }}
            {{ form_widget(form) }}
        </div>
    </div>
{% endblock %}

{% block criteria_row %}
    <div>
        <div class=\"v-grid\">
            <div class=\"v-col v-col--sm-6\">
                <div class=\"v-form-group v-form-group--md\" data-flag=\"v-mdForm\">
                    <label class=\"v-form-group__label\">
                        {{ ('victoire_criteria.' ~ form.vars.data.name ~ '.criteria.label')|trans }}
                    </label>
                    {{ form_widget(form.operator) }}
                </div>
            </div>

            <div class=\"v-col v-col--sm-6\">
                <div class=\"v-form-group v-form-group--md\" data-flag=\"v-mdForm\">
                    {{ form_widget(form.value) }}
                </div>
            </div>

            <div class=\"v-col\">
                {{ form_row(form.name) }}
            </div>
        </div>
    </div>
{% endblock criteria_row %}

{# Buttons #}
{% block tags_widget %}
<input type=\"hidden\" id=\"{{id}}\" name=\"{{ full_name }}\" value=\"{{tag_values}}\" tabindex=\"-1\" class=\"select2-offscreen\" />
<script type=\"text/javascript\">
    \$vic(\"#{{ id }}\").select2({
        tags:[{% for id, tag in tags %} { id: \"{{id}}\", text:\"{{tag}}\" }{% if not loop.last %},{% endif %}{% endfor %}],
        {% if enable_creation %}
        createSearchChoice:function(term, data) {
            return { id:term, text:term};
        },
        {% endif %}
    });
</script>
{% endblock tags_widget %}

{% block slug_widget %}
    {{ block('form_widget') }}
    <span id=\"{{ id }}-correct\" class=\"v-form-group__addon v-color--green v-hidden\">
        {% include 'VictoireUIBundle:SVG:check.html.twig' %}
    </span>

    <span id=\"{{ id }}-not-correct\" class=\"v-form-group__addon v-color--pink v-hidden\">
        {% include 'VictoireUIBundle:SVG:close.html.twig' %}
    </span>

    <script>
        <!--
        addSlugValidation(\$vic('#{{id}}'),{% if allow_empty %}true{% else %}false{% endif %});
        -->
    </script>
{% endblock %}

{% block button_attributes %}
    {% set attr = attr|merge({class: 'vic-btn ' ~ attr.class | default(\"\")}) %}
    {{ parent() }}
{% endblock button_attributes %}

{% block button_widget %}
{% spaceless %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>
    {% if icon is defined and icon is not empty %}
            {{ victoire_icon(icon, icon_inverted|default(false)) }}
    {% endif %}
    {{ label|trans({}, translation_domain)|raw }}</button>
{% endspaceless %}
{% endblock button_widget %}

{% block button_row %}
    {% spaceless %}
        {% if vic_button_offset is not empty %}
            {% set attr = attr|merge({'for': id, 'class': vic_button_offset }) %}
            <div class=\"v-form-group\">
                <div {% for attrname, attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
                {{ form_widget(form) }}
                </div>
            </div>
        {% else %}
            <div>
                {{ form_widget(form) }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock button_row %}

{# Widgets #}

{% block choice_widget_collapsed %}
    <div class=\"v-select\">
        {% set attr = attr|merge({'class': 'v-select__native'}) %}
        {{ parent() }}
    </div>

    {{ block('form_message') }}
{% endblock choice_widget_collapsed %}

{% block textarea_widget %}
    {% set type = type|default('text') %}

    {% if type != 'hidden' and ( vic_widget_addon_prepend|default(null) is not null or vic_widget_addon_append|default(null) is not null ) %}
        <div class=\"vic-input-group\">
            {% if vic_widget_addon_prepend|default(null) is not null %}
                {% set widget_addon = vic_widget_addon_prepend %}

                {{ block('widget_addon') }}
            {% endif %}
    {% endif %}

            {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ vic_widget_form_control_class}) %}

            {{ parent() }}

            {% if vic_horizontal %}
                {{ block('form_message') }}
            {% endif %}

    {% if type != 'hidden' and ( vic_widget_addon_prepend|default(null) is not null or vic_widget_addon_append|default(null) is not null ) %}
            {% if vic_widget_addon_append|default(null) is not null %}
                {% set widget_addon = vic_widget_addon_append %}

                {{ block('widget_addon') }}
            {% endif %}
        </div>
    {% endif %}
{% endblock textarea_widget %}

{% block form_widget_simple %}
{% spaceless %}
    {% set type = type|default('text') %}
    {% if type != 'hidden' and ( vic_widget_addon_prepend|default(null) is not null or vic_widget_addon_append|default(null) is not null ) %}
    <div class=\"vic-input-group\">
        {% if vic_widget_addon_prepend|default(null) is not null %}
            {% set widget_addon = vic_widget_addon_prepend %}
            {{ block('widget_addon') }}
        {% endif %}
    {% endif %}
    {% if not vic_widget_remove_btn|default(null) %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' vic-not-removable'}) %}
    {% endif %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ vic_widget_form_control_class}) %}
    {% if vic_static_text is same as(true) %}
        <p class=\"vic-form-control-static\">{{ value }}</p>
    {% else %}
        {{ parent() }}
    {% endif %}
    {% if type != 'hidden' and ( vic_widget_addon_prepend|default(null) is not null or vic_widget_addon_append|default(null) is not null ) %}
        {% if vic_widget_addon_append|default(null) is not null %}
        {% set widget_addon = vic_widget_addon_append %}
        {{ block('widget_addon') }}
        {% endif %}
    </div>
    {% endif %}
    {% if type != 'hidden' and vic_horizontal %}
        {{ block('form_message') }}
    {% endif %}
{% endspaceless %}
{% endblock form_widget_simple %}

{% block form_widget_compound %}
{% spaceless %}
    {% if form.parent == null %}
        {% if vic_render_fieldset %}<fieldset>{% endif %}
        {% if vic_show_legend %}{{ block('form_legend') }}{% endif %}
    {% endif %}

    {% if form.vars.vic_tabbed %}
        {{ form_tabs(form) }}
        <div class=\"vic-tab-content\">
    {% endif %}

    {{ block('form_rows_visible') }}

    {% if form.vars.vic_tabbed %}
        </div>
    {% endif %}

    {{ form_rest(form) }}

    {% if form.parent == null %}
        {% if vic_render_fieldset %}</fieldset>{% endif %}
    {% endif %}
{% endspaceless %}
{% endblock form_widget_compound %}

{% block form_tabs %}
{% if form.vars.tabsView is defined %}
{{ form_widget(form.vars.tabsView) }}
{% endif %}
{% endblock %}

{% block tabs_widget %}
{% spaceless %}
<ul class=\"{{ form.vars.attr.class }}\">
    {% for tab in form.vars.tabs %}
        <li{% if tab.active %} class=\"vic-active\"{% endif %}>
            <a data-toggle=\"vic-tab\" href=\"#{{ tab.id }}\">
                {% if tab.icon %}{{ victoire_icon(tab.icon) }}{% endif %}
                {{ tab.label|trans({}, tab.translation_domain) }}
            </a>
        </li>
    {% endfor %}
</ul>
{% endspaceless %}
{% endblock %}

{% block form_tab %}
<div class=\"vic-tab-pane{{ form.vars.tab_active ? ' vic-active' : '' }}\" id=\"{{ id }}\">
    {{ block('form_widget') }}
</div>
{% endblock %}

{% block collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set prototype_markup = form_row(prototype) %}
        {% set data_prototype_name = form.vars.form.vars.prototype.vars.name|default('__name__') %}
        {% set data_prototype_label = form.vars.form.vars.prototype.vars.label|default('__name__label__') %}
        {% set vic_vic_widget_form_group_attr = vic_vic_widget_form_group_attr|merge({
            'data-prototype': prototype_markup,
            'data-prototype-name': data_prototype_name,
            'data-prototype-label': data_prototype_label
        })|merge(attr) %}
    {% endif %}
    {# Add row by default use attr.class to change#}
    {% if 'collection' in form.vars.block_prefixes and attr.class is defined %}
        {% set vic_vic_widget_form_group_attr = vic_vic_widget_form_group_attr|merge({'class': vic_vic_widget_form_group_attr.class|default('row') ~ ' ' ~ attr.class}) %}
    {% endif %}
    {# collection item adds class {form_id}_form-group  too #}
    {% set vic_vic_widget_form_group_attr = vic_vic_widget_form_group_attr|merge({'id': 'collection' ~ id ~ '_form_group', 'class': vic_vic_widget_form_group_attr.class ~ ' vic-collection-items ' ~ id ~ '_form_group'}) %}

    <div {% for attrname,attrvalue in vic_vic_widget_form_group_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
    {# Add initial prototype form #}
    {% if form.vars.value|length == 0 and prototype is defined %}
        {% for name in vic_prototype_names %}
            {{ prototype_markup|replace({'__name__': name})|raw }}
        {% endfor %}
    {% endif %}
    {{ block('form_widget') }}
    </div>
{% endspaceless %}
{% endblock collection_widget %}

{% block choice_widget_expanded %}
{% spaceless %}
    {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
    {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (vic_widget_type != '' ? (multiple ? 'vic-checkbox' : 'vic-radio') ~ '-' ~ vic_widget_type : ''))}) %}
    {% if expanded %}
        {% set attr = attr|merge({'class': attr.class|default(vic_horizontal_input_wrapper_class)}) %}
    {% endif %}

    {% if vic_widget_type == 'inline' %}<div class=\"v-flex-grid\">{% endif %}
        {% for child in form %}
            {% if vic_widget_type == 'inline' %}
                {% set label_attr = label_attr|merge({'class': label_attr.class ~ ' v-flex-col'}) %}
            {% else %}
                {% set label_attr = label_attr|merge({'class': label_attr.class ~ ' v-form-group v-form-group--small'}) %}
            {% endif %}

            <div{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
                {{ form_widget(child, {
                    'vic_horizontal_label_class': vic_horizontal_label_class,
                    'choiceLabel': child.vars.label|trans({}, translation_domain),
                    'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class,
                    'attr': {
                        'class': attr.widget_class|default('')
                    }
                }) }}
            </div>
        {% endfor %}
    {% if vic_widget_type == 'inline' %}</div>{% endif %}

    {{ block('form_message') }}
    {% if expanded %}
    {% endif %}
{% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}

        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}<div>{% endif %}
            <label class=\"v-checkbox {% if not vic_horizontal %} vic-checkbox-inline{% endif %}\">
                {% set attr = attr|merge({'class': attr.class|default('') ~ ' v-checkbox__native'}) %}
                <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
                <span class=\"v-checkbox__indicator\"></span>

                {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
                    {% if vic_label_render and vic_widget_vic_checkbox_label in ['both', 'widget'] %}
                        {{ label|trans({}, translation_domain) }}
                    {% endif %}
                {% endif %}

                {% if choiceLabel|default(false) %}
                    {{ choiceLabel }}
                {% endif %}
            </label>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}</div>{{ block('form_message') }}{% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block radio_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}

        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}<div>{% endif %}
            <label class=\"v-radio {% if not vic_horizontal %} vic-radio-inline{% endif %}\">
                {% set attr = attr|merge({'class': attr.class|default('') ~ ' v-radio__native'}) %}
                <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
                <span class=\"v-radio__indicator\"></span>

                {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
                    {% if vic_label_render and vic_widget_vic_checkbox_label in ['both', 'widget'] %}
                        {{ label|trans({}, translation_domain) }}
                    {% endif %}
                {% endif %}

                {% if choiceLabel|default(false) %}
                    {{ choiceLabel }}
                {% endif %}
            </label>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}</div>{{ block('form_message') }}{% endif %}
    {% endspaceless %}
{% endblock radio_widget %}

{% block date_widget %}
{% spaceless %}
{% if widget == 'single_text' %}
    {% if datepicker is defined %}
        <div data-provider=\"datepicker\" class=\"vic-input-group vic-date\" data-date=\"{{ value }}\" data-link-field=\"{{ id }}\" data-link-format=\"dd-mm-yyyy\">
            <input {% if vic_widget_form_control_class is not same as(false) %}class=\"{{ vic_widget_form_control_class }}\" {% endif %}type=\"text\" {% if read_only is defined and read_only %} readonly=\"readonly\"{% endif %}{% if disabled %} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %}>
            <input type=\"hidden\" value=\"{{ value }}\" {{ block('widget_attributes') }}>
            <span class=\"vic-input-group-addon\">{{ victoire_icon('calendar') }}</span>
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% else %}
    {% set attr = attr|merge({'class': attr.class|default('inline')}) %}
        <div class=\"vic-row\">
        {{ date_pattern|replace({
            '{{ year }}':  form_widget(form.year, {'attr': {'class': attr.widget_class|default('') ~ ''}, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-3')}),
            '{{ month }}': form_widget(form.month, {'attr': {'class': attr.widget_class|default('') ~ ''}, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-3')}),
            '{{ day }}':   form_widget(form.day, {'attr': {'class': attr.widget_class|default('') ~ ''}, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-3')}),
        })|raw }}
        </div>
    {{ block('form_message') }}
{% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
{% if widget == 'single_text' %}
    {% if timepicker is defined %}
        <div data-provider=\"timepicker\" class=\"vic-input-group vic-date\" data-date=\"{{ value }}\" data-link-field=\"{{ id }}\" data-link-format=\"hh:ii\">
            <input class=\"v-form-group__input\" type=\"text\" {% if read_only is defined and read_only %} readonly=\"readonly\"{% endif %}{% if disabled %} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %}>
            <input type=\"hidden\" value=\"{{ value }}\" {{ block('widget_attributes') }}>
            <span class=\"vic-input-group-addon\">{{ victoire_icon('time') }}</span>
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% else %}
    {% set attr = attr|merge({'class': attr.class|default('')}) %}
    {% spaceless %}
    {{ form_widget(form.hour, { 'attr': {  'size': '1'}, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-2')}) }}
    {{ form_widget(form.minute, { 'attr': { 'size': '1' }, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-2')}) }}
    {% if with_seconds %}
        :{{ form_widget(form.second, { 'attr': { 'size': '1' }, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-2') }) }}
    {% endif %}
    {% endspaceless %}
    {{ block('form_message') }}
{% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {% if vic_datetimepicker is defined %}
            <div data-provider=\"datetimepicker\" class=\"v-form-group__input-group v-date\" data-date=\"{% if value %}{{ value|date('d-m-Y H:i') }}{% endif %}\" data-link-field=\"{{ id }}\" data-link-format=\"dd-mm-yyyy hh:ii\">
                <span class=\"v-form-group__addon\">
                    {% include 'VictoireUIBundle:SVG:calendar.html.twig' %}
                </span>

                <input class=\"v-form-group__input\" type=\"text\" {% if read_only is defined and read_only %} readonly=\"readonly\"{% endif %}{% if disabled %} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %} value=\"{% if value %}{{ value|date('d-m-Y H:i') }}{% endif %}\">
                <input type=\"hidden\" value=\"{% if value %}{{ value|date('d-m-Y H:i') }}{% endif %}\" {{ block('widget_attributes') }}>
            </div>
        {% else %}
            {{ block('form_widget_simple') }}
        {% endif %}
    {% else %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_errors(form.date) }}
                {{ form_errors(form.time) }}
                {{ form_widget(form.date, {'attr': {'class': attr.widget_class|default('')}, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-3')}) }}
                {{ form_widget(form.time, {'attr': {'class': attr.widget_class|default('')}, 'vic_horizontal_input_wrapper_class': vic_horizontal_input_wrapper_class|default('vic-col-lg-2')}) }}
                {{ block('form_message') }}
            </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block percent_widget %}
{% spaceless %}
    {% set vic_widget_addon_append = vic_widget_addon_append|merge({'text': vic_widget_addon_append.text|default('%')}) %}
    {{ block('form_widget_simple') }}
{% endspaceless %}
{% endblock percent_widget %}

{% block money_widget %}
{% spaceless %}
    {% set vic_widget_addon_prepend = (vic_widget_addon_prepend != false or vic_widget_addon_prepend == null) and money_pattern != '{{ widget }}' ? {'text': money_pattern|replace({ '{{ widget }}': ''})} : vic_widget_addon_prepend|default(null) %}
    {{ block('form_widget_simple') }}
{% endspaceless %}
{% endblock money_widget %}

{% block file_widget %}
{% spaceless %}
{% set type = type|default('file') %}
{% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ vic_widget_form_control_class}) %}
    {% if vic_widget_addon_prepend|default(null) is not null %}
        {% set widget_addon = vic_widget_addon_prepend %}
        {{ block('widget_addon') }}
    {% endif %}
<input type=\"{{ type }}\" {{ block('widget_attributes') }}/>
{% if type != 'hidden' and  widget_addon.type|default(null) is not null %}
    {% if vic_widget_addon_append|default(null) is not null %}
        {% set widget_addon = vic_widget_addon_append %}
        {{ block('widget_addon') }}
    {% endif %}
{% endif %}
    {% if vic_horizontal %}
        {{ block('form_message') }}
    {% endif %}
{% endspaceless %}
{% endblock file_widget %}

{# Labels #}

{% block form_legend %}
{% spaceless %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <{{ vic_legend_tag }}>{{ label|trans({}, translation_domain) }}</{{ vic_legend_tag }}>
{% endspaceless %}
{% endblock form_legend %}

{% block form_label %}
{% if 'checkbox' not in block_prefixes or vic_widget_vic_checkbox_label in ['label', 'both'] %}
{% spaceless %}
    {% if label is not same as(false) %}
        {% if label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% set label_attr_class = '' %}
        {% if vic_horizontal %}
            {% set label_attr_class = 'v-form-group__label ' ~ label_attr_class ~ vic_horizontal_label_class %}
        {% endif %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_attr_class ~ (required ? ' vic-required' : '') }) %}
        <label{% for attrname,attrvalue in label_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
        {{ label|trans|raw }}
        {{- block('label_asterisk') }}
        {% if 'collection' in form.vars.block_prefixes and vic_widget_add_btn|default(null) and form.vars.allow_add == true %}
            {{ block('form_vic_widget_add_btn') }}
        {% endif %}
        {% if vic_help_label %}
            {{ block('vic_help_label') }}
        {% endif %}
        {% if vic_help_label_tooltip.title %}
            {{ block('vic_help_label_tooltip') }}
        {% endif %}
        {% if vic_help_label_popover.title %}
            {{ block('vic_help_label_popover') }}
        {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endif %}
{% endblock form_label %}

{% block vic_help_label %}
    <span class=\"v-form-group__help\">{{ vic_help_label|trans({}, translation_domain) }}</span>
{% endblock vic_help_label %}

{% block vic_help_label_tooltip %}
    <span class=\"v-form-group__help\">
        <a href=\"#\" data-toggle=\"vic-tooltip\" data-placement=\"{{ vic_help_label_tooltip.placement}}\" data-title=\"{{ vic_help_label_tooltip.title|trans({}, translation_domain) }}\">
            {% if vic_help_label_tooltip.icon is not same as(false) %}
                {{ victoire_icon(vic_help_label_tooltip.icon) }}
            {% endif %}
            {% if vic_help_label_tooltip.text is not same as(null) %}
            {{ vic_help_label_tooltip.text }}
            {% endif %}
        </a>
    </span>
{% endblock vic_help_label_tooltip %}

{% block vic_help_label_popover %}
    <span class=\"v-form-group__help\">
        <a href=\"#\" data-toggle=\"vic-popover\" data-trigger=\"hover\" data-placement=\"{{ vic_help_label_popover.placement}}\" data-title=\"{{ vic_help_label_popover.title|trans({}, translation_domain) }}\" data-content=\"{{ vic_help_label_popover.content|trans({}, translation_domain) }}\" >
            {% if vic_help_label_popover.icon is not same as(false) %}
                {{ victoire_icon(vic_help_label_popover.icon) }}
            {% endif %}
            {% if vic_help_label_popover.text is not same as(null) %}
            {{ vic_help_label_popover.text }}
            {% endif %}
        </a>
    </span>
{% endblock vic_help_label_popover %}

{% block form_actions_widget %}
    {% for button in buttons %}
        {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}
    {% endfor  %}
{% endblock %}

{# Rows #}
{% block form_actions_row %}
    {{ block('button_row')  }}
{% endblock %}

{% block form_rows_visible %}
{% spaceless %}
    {% if form_errors(form) %}
        <div class=\"vic-symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
    {% endif %}
    {% for child in form %}
        {% if 'hidden' not in child.vars.block_prefixes %} {# smbdy: why do we not add the hiddens of childs? 131024 phiamo: i think form rest should do this !? it was afaik removed because it cause side effekts #}
            {{ form_row(child) }}
        {% endif %}
    {% endfor %}
{% endspaceless %}
{% endblock form_rows_visible %}

{% block form_row %}
{% spaceless %}
    {% if 'tab' in form.vars.block_prefixes %}
        {{ block('form_tab') }}
    {% else %}
        {{ block('vic_widget_form_group_start') }}

        {% set show_horizontal_wrapper = vic_horizontal and not (form.parent is not null and 'collection' in form.parent.vars.block_prefixes) %}

        {% if vic_horizontal and not vic_label_render %}
            {% set vic_horizontal_input_wrapper_class = vic_horizontal_input_wrapper_class ~ ' ' ~ vic_horizontal_label_offset_class %}
        {% endif %}

        {% if show_horizontal_wrapper %}
        <div class=\"{{ vic_horizontal_input_wrapper_class }}\">
        {% endif %}
        {{ vic_widget_prefix|trans({}, translation_domain)|raw }} {{ form_widget(form, _context) }} {{ vic_widget_suffix|trans({}, translation_domain)|raw }}

        {% if show_horizontal_wrapper %}
        </div>
        {% endif %}

        {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes and vic_widget_remove_btn|default(null) and form.parent.vars.allow_delete|default(false) %}
            {{ block('form_vic_widget_remove_btn') }}
        {% endif -%}
        {{ block('vic_widget_form_group_end') }}
    {% endif %}
{% endspaceless %}
{% endblock form_row %}

{# Support #}

{% block form_message %}
{% spaceless %}
    {{ form_errors(form) }}
    {{ block('form_help') }}
{% endspaceless %}
{% endblock form_message %}

{# Help #}

{% block form_help %}
    {% spaceless %}
        {% if vic_help_block %}
            <p class=\"v-form-group__help\">{{ vic_help_block|trans({}, translation_domain)|raw }}</p>
        {%endif %}
        {% if vic_business_property_picker %}
            {% include 'VictoireBusinessEntityBundle:BusinessProperty:list.html.twig' with {
                'description': vic_business_property_picker_description|trans({}, translation_domain)|raw,
                'businessProperties': vic_business_properties
            } %}
        {% endif %}
    {% endspaceless %}
{% endblock form_help %}

{% block form_vic_widget_add_btn %}
{% spaceless %}
    {% if vic_widget_add_btn|default(null) %}
        {% set button_type = 'add' %}
        {% set button_values = vic_widget_add_btn %}
        {{ block('collection_button') }}
    {% endif %}
{% endspaceless %}
{% endblock form_vic_widget_add_btn %}

{% block form_vic_widget_remove_btn %}
{% spaceless %}
    {% if vic_widget_remove_btn.wrapper_div is not same as(false) %}
        <div class=\"v-form-group\">
            <div class=\"{{ vic_widget_remove_btn.wrapper_div.class }} vic-col-lg-offset-3\">
    {% endif %}
    {% if vic_widget_remove_btn|default(null) %}
    {% set button_type = 'remove' %}
    {% set button_values = vic_widget_remove_btn %}
    {{ block('collection_button') }}
    {% endif %}
    {% if vic_widget_remove_btn.wrapper_div is not same as(false) %}
            </div>
        </div>
    {% endif %}
{% endspaceless %}
{% endblock form_vic_widget_remove_btn %}

{% block collection_button %}
<a {% for attrname,attrvalue in button_values.attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %} data-collection-vic-{{ button_type }}-btn=\".{{ form.vars['id'] }}_form_group\">
{% if button_values.icon is not null %}
    {{ victoire_icon(button_values.icon, button_values.icon_inverted|default(false)) }}
{% endif %}
{{ button_values.label|trans({}, translation_domain) }}
</a>

{% endblock collection_button %}

{% block label_asterisk %}
{% if required %}
    {%- if vic_render_required_asterisk %} <span class=\"vic-asterisk\">*</span>{% endif %}
{% endif %}
{% endblock label_asterisk %}

{% block widget_addon %}
{% spaceless %}
{% set widget_addon_icon = widget_addon.icon is defined ? widget_addon.icon : null  %}
{% set widget_addon_icon_inverted = widget_addon.icon_inverted is defined ? widget_addon.icon_inverted : false  %}
    <span class=\"vic-input-group-addon\">{{ (widget_addon.text|default(false) ? widget_addon.text|trans({}, translation_domain)|raw : victoire_icon(widget_addon_icon, widget_addon_icon_inverted)) }}</span>
{% endspaceless %}
{% endblock widget_addon %}

{# Errors #}

{% block form_errors %}
{% spaceless %}
{% if vic_error_delay %}
    {% for child in form %}
        {% if loop.index == 1 %}
            {% if child.set('errors', errors) %}{% endif %}
        {% endif %}
    {% endfor %}
{% else %}
    {% if errors|length > 0 %}
        {% if form.parent == null %}
            {% from 'VictoireFormBundle::flash.html.twig' import flash %}
            {% for error in errors %}
                {{
                    flash('danger', error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'validators')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
                    )
                }}
            {% endfor %}
        {% else %}
            <span class=\"vic-help-{{ block('vic_error_type') }}\">
            {% for error in errors %}
                {{
                    error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'validators')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
                }} <br>
            {% endfor %}
            </span>
        {% endif %}
    {% endif %}
{% endif %}
{% endspaceless %}
{% endblock form_errors %}

{# used to determine which type of error #}

{% block vic_error_type %}
{% spaceless %}
{% if vic_error_type %}
    {{ vic_error_type }}
{% elseif form.parent == null %}
    {{ form.vars.vic_error_type | default('inline') }}
{% else %}
    block
{% endif %}
{% endspaceless %}
{% endblock vic_error_type %}

{# widget helper blocks #}

{% block vic_widget_form_group_start %}
{% if vic_widget_form_group|default(false) or form.parent == null %}
    {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes %} {# i am a collection child #}
        {% if not vic_omit_collection_item %}
            {# collection item wrapper doesnt need form-group it gets added to childs anyways #}
            {% set vic_vic_widget_form_group_attr = vic_vic_widget_form_group_attr|merge({class: 'vic-collection-item'}) %}
        {% endif %}
    {% endif %}
    {% if errors|length > 0 %}
        {# Add Error Class to Widget Wrapper#}
        {% set vic_vic_widget_form_group_attr = vic_vic_widget_form_group_attr|merge({'class': vic_vic_widget_form_group_attr.class|default('') ~ ' has-error'}) %}
    {% endif %}
    {% if vic_help_widget_popover.selector is same as(null) %}
        {% set vic_help_widget_popover = vic_help_widget_popover|merge({'selector': '#' ~ id }) %}
    {% endif %}
    <div{% if vic_help_widget_popover.title is not same as(null) %}{{ block('vic_help_widget_popover') }}{% endif %} {% for attrname,attrvalue in vic_vic_widget_form_group_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
    {# a form item containing the field in block_prefixes is a near subform or a field directly #}
    {% if (form|length > 0 and form.parent != null)
        and 'field' not in form.vars.block_prefixes
        and 'date' not in form.vars.block_prefixes %}
        {% if vic_show_child_legend%}
            {{ block('form_legend') }}
        {% elseif vic_label_render %}
            {{ form_label(form, label|default(null)) }}
        {% else %}
        {% endif %}
    {% else %}
        {% if vic_label_render %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}
    {% endif %}
{% else %}
    {% if vic_label_render %}
        {{ form_label(form, label|default(null)) }}
    {% endif %}
{% endif %}
{% endblock vic_widget_form_group_start %}

{% block vic_help_widget_popover %}
 {% spaceless %}
 {% for attrname,attrvalue in vic_help_widget_popover %}
 data-{{attrname}}=\"{{attrvalue}}\"
 {% endfor %}
 {% endspaceless %}
{% endblock vic_help_widget_popover %}

{% block vic_widget_form_group_end %}
{% spaceless %}
{% if vic_widget_form_group|default(false) or form.parent == null %}
    </div>
{% endif %}
{% endspaceless %}
{% endblock vic_widget_form_group_end %}

{% block hierarchy_tree_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ vic_widget_form_control_class}) %}
        {{ block('hierarchy_tree_widget_collapsed')}}
    {% if vic_horizontal %}
        {{ block('form_message') }}
    {% endif %}
{% endblock %}

{% block hierarchy_tree_widget_collapsed %}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder|trans({}, translation_domain) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('hierarchy_tree_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('hierarchy_tree_widget_options') -}}
    </select>
{% endblock hierarchy_tree_widget_collapsed %}

{% block hierarchy_tree_widget_options %}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ group_label|trans({}, translation_domain) }}\">
                {% set options = choice %}
                {{- block('hierarchy_tree_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice.label|trans({}, translation_domain)|raw }}</option>
        {%- endif -%}
    {% endfor %}
{% endblock hierarchy_tree_widget_options %}

{% block font_awesome_picker_widget %}
    {% spaceless %}
    <div class=\"v-form-group\">
        <input type=\"search\" {{ block('widget_attributes') }} class=\"v-form-group__input\" {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    </div>
    <script type=\"text/javascript\">

        \$vic('[name=\"{{ form.vars.full_name }}\"]').iconpicker({{ form.vars.font_awesome_picker_settings|json_encode|raw }});
    </script>
    {% endspaceless %}
{% endblock font_awesome_picker_widget %}

{% block link_widget %}
    {% set disposition = form.vars.horizontal ? \"-horizontal\" : \"-vertical\" %}
    <div data-link class=\"vic-link-container {{ disposition }}\">
        {{ form_row(form.linkType) }}
        {% if form.url is defined %}{{ form_row(form.url) }}{% endif %}
        {% if form.viewReference is defined %}
        <div class=\"vic-row\">
            <div class=\"vic-col-xs-9\">
                {{ form_row(form.viewReference) }}
            </div>
            <div class=\"vic-col-xs-3\" style=\"padding-top: 29px;\">
                {{ form_widget(form.locale) }}
            </div>
        </div>
        {% endif %}
        {% if form.attachedWidget is defined %}{{ form_row(form.attachedWidget) }}{% endif %}
        {% if form.route is defined %}{{ form_row(form.route) }}{% endif %}

        {% if not form.vars.horizontal and form.route_parameters is defined %}{{ form_row(form.route_parameters) }}{% endif %}
        {% if form.target is defined %}{{ form_row(form.target) }}{% endif %}
        {% if form.vars.horizontal and form.route_parameters is defined %}{{ form_row(form.route_parameters) }}{% endif %}
        {% if form.analytics_track_code is defined and form.analytics_track_code %}{{ form_row(form.analytics_track_code) }}{% endif %}
        {{ form_rest(form) }}
    </div>
{% endblock %}
", "VictoireFormBundle:Form:fields.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/FormBundle/Resources/views/Form/fields.html.twig");
    }
}
