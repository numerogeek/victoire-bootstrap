<?php

/* VictoireBlogBundle:Blog:index.html.twig */
class __TwigTemplate_52acc4d38174fea0baffc5cdae4989029f2dc5571e4c5c6a08bc58565decf4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VictoireCoreBundle::_modal.html.twig", "VictoireBlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'modal_container_classes' => array($this, 'block_modal_container_classes'),
            'modal_header_title' => array($this, 'block_modal_header_title'),
            'modal_body_content' => array($this, 'block_modal_body_content'),
            'modal_footer_content' => array($this, 'block_modal_footer_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictoireCoreBundle::_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cccbd8ae381c31bf184d7e3f932952aa1918daedbedf9170293e9292b9f3885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cccbd8ae381c31bf184d7e3f932952aa1918daedbedf9170293e9292b9f3885->enter($__internal_8cccbd8ae381c31bf184d7e3f932952aa1918daedbedf9170293e9292b9f3885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:index.html.twig"));

        $__internal_f61aec8526dc013ccd228217dfe9e3a6bdf4a4402663d4f314087af5a34159a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61aec8526dc013ccd228217dfe9e3a6bdf4a4402663d4f314087af5a34159a0->enter($__internal_f61aec8526dc013ccd228217dfe9e3a6bdf4a4402663d4f314087af5a34159a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireBlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cccbd8ae381c31bf184d7e3f932952aa1918daedbedf9170293e9292b9f3885->leave($__internal_8cccbd8ae381c31bf184d7e3f932952aa1918daedbedf9170293e9292b9f3885_prof);

        
        $__internal_f61aec8526dc013ccd228217dfe9e3a6bdf4a4402663d4f314087af5a34159a0->leave($__internal_f61aec8526dc013ccd228217dfe9e3a6bdf4a4402663d4f314087af5a34159a0_prof);

    }

    // line 5
    public function block_modal_container_classes($context, array $blocks = array())
    {
        $__internal_d7c4eba297bf497d79d7f301f36f80e7f1788c733620d3458d968d6acfce262b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c4eba297bf497d79d7f301f36f80e7f1788c733620d3458d968d6acfce262b->enter($__internal_d7c4eba297bf497d79d7f301f36f80e7f1788c733620d3458d968d6acfce262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $__internal_30f92b36d74d476990a0e7515977fd11dcfc431a3ae3d653eb5af435ebe9461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f92b36d74d476990a0e7515977fd11dcfc431a3ae3d653eb5af435ebe9461a->enter($__internal_30f92b36d74d476990a0e7515977fd11dcfc431a3ae3d653eb5af435ebe9461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container_classes"));

        $this->displayParentBlock("modal_container_classes", $context, $blocks);
        echo " v-modal--view";
        
        $__internal_30f92b36d74d476990a0e7515977fd11dcfc431a3ae3d653eb5af435ebe9461a->leave($__internal_30f92b36d74d476990a0e7515977fd11dcfc431a3ae3d653eb5af435ebe9461a_prof);

        
        $__internal_d7c4eba297bf497d79d7f301f36f80e7f1788c733620d3458d968d6acfce262b->leave($__internal_d7c4eba297bf497d79d7f301f36f80e7f1788c733620d3458d968d6acfce262b_prof);

    }

    // line 7
    public function block_modal_header_title($context, array $blocks = array())
    {
        $__internal_31f13ed6ebf02ce08d748aefaa4fedffa305affd9d304d4b62d6437480da75a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f13ed6ebf02ce08d748aefaa4fedffa305affd9d304d4b62d6437480da75a8->enter($__internal_31f13ed6ebf02ce08d748aefaa4fedffa305affd9d304d4b62d6437480da75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        $__internal_4de4eae3be2f6397cc60f190965f1f0ac868e26043ee6eac51f077567c3bcb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de4eae3be2f6397cc60f190965f1f0ac868e26043ee6eac51f077567c3bcb5d->enter($__internal_4de4eae3be2f6397cc60f190965f1f0ac868e26043ee6eac51f077567c3bcb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header_title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("victoire_blog.index.title", array(), "victoire"), "html", null, true);
        echo "
";
        
        $__internal_4de4eae3be2f6397cc60f190965f1f0ac868e26043ee6eac51f077567c3bcb5d->leave($__internal_4de4eae3be2f6397cc60f190965f1f0ac868e26043ee6eac51f077567c3bcb5d_prof);

        
        $__internal_31f13ed6ebf02ce08d748aefaa4fedffa305affd9d304d4b62d6437480da75a8->leave($__internal_31f13ed6ebf02ce08d748aefaa4fedffa305affd9d304d4b62d6437480da75a8_prof);

    }

    // line 11
    public function block_modal_body_content($context, array $blocks = array())
    {
        $__internal_750473d6345136bfd32e4dfd63d264271a6b74effbe9a696b4db58bfa560fead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750473d6345136bfd32e4dfd63d264271a6b74effbe9a696b4db58bfa560fead->enter($__internal_750473d6345136bfd32e4dfd63d264271a6b74effbe9a696b4db58bfa560fead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        $__internal_0e7fc53be0fda2ccbba01b973ecb8b1268f197be8ef89d7e29959e095746fc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7fc53be0fda2ccbba01b973ecb8b1268f197be8ef89d7e29959e095746fc98->enter($__internal_0e7fc53be0fda2ccbba01b973ecb8b1268f197be8ef89d7e29959e095746fc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_body_content"));

        // line 12
        echo "    <div id=\"victoire-blog-modal\">
        ";
        // line 13
        $this->loadTemplate("VictoireBlogBundle:Blog:_blogItem.html.twig", "VictoireBlogBundle:Blog:index.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_0e7fc53be0fda2ccbba01b973ecb8b1268f197be8ef89d7e29959e095746fc98->leave($__internal_0e7fc53be0fda2ccbba01b973ecb8b1268f197be8ef89d7e29959e095746fc98_prof);

        
        $__internal_750473d6345136bfd32e4dfd63d264271a6b74effbe9a696b4db58bfa560fead->leave($__internal_750473d6345136bfd32e4dfd63d264271a6b74effbe9a696b4db58bfa560fead_prof);

    }

    // line 17
    public function block_modal_footer_content($context, array $blocks = array())
    {
        $__internal_df216362b211a99374c76ae23c249f7ae098f541d26dfff258bafc392416dc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df216362b211a99374c76ae23c249f7ae098f541d26dfff258bafc392416dc6e->enter($__internal_df216362b211a99374c76ae23c249f7ae098f541d26dfff258bafc392416dc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer_content"));

        $__internal_aff614c982cc5b4ee1c7b573e33dd74f27eacd2e3573ea2cc8c496e2a41e87b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff614c982cc5b4ee1c7b573e33dd74f27eacd2e3573ea2cc8c496e2a41e87b8->enter($__internal_aff614c982cc5b4ee1c7b573e33dd74f27eacd2e3573ea2cc8c496e2a41e87b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_footer_content"));

        
        $__internal_aff614c982cc5b4ee1c7b573e33dd74f27eacd2e3573ea2cc8c496e2a41e87b8->leave($__internal_aff614c982cc5b4ee1c7b573e33dd74f27eacd2e3573ea2cc8c496e2a41e87b8_prof);

        
        $__internal_df216362b211a99374c76ae23c249f7ae098f541d26dfff258bafc392416dc6e->leave($__internal_df216362b211a99374c76ae23c249f7ae098f541d26dfff258bafc392416dc6e_prof);

    }

    public function getTemplateName()
    {
        return "VictoireBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 17,  98 => 14,  96 => 13,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  43 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VictoireCoreBundle::_modal.html.twig' %}
{% trans_default_domain \"victoire\" %}


{% block modal_container_classes %}{{ parent() }} v-modal--view{% endblock modal_container_classes %}

{% block modal_header_title %}
    {{\"victoire_blog.index.title\"|trans() }}
{% endblock modal_header_title %}

{% block modal_body_content %}
    <div id=\"victoire-blog-modal\">
        {% include 'VictoireBlogBundle:Blog:_blogItem.html.twig' %}
    </div>
{% endblock modal_body_content %}

{% block modal_footer_content %}
{% endblock modal_footer_content %}
", "VictoireBlogBundle:Blog:index.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
