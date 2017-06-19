<?php

/* base.html.twig */
class __TwigTemplate_05a5ec74f0d1db80bd1ec6bb67b27b035c528294616f0ea3dc6ff153aca07097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ce0dfa96ea0d63b2815fdedd2fc220c907639ace8ae8ef230811e1b14e17a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce0dfa96ea0d63b2815fdedd2fc220c907639ace8ae8ef230811e1b14e17a66->enter($__internal_6ce0dfa96ea0d63b2815fdedd2fc220c907639ace8ae8ef230811e1b14e17a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_462f68b99f90ef56c2adf0166ff50c7f7da03f29a0e7c5acb36e19a8e16ee6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462f68b99f90ef56c2adf0166ff50c7f7da03f29a0e7c5acb36e19a8e16ee6e3->enter($__internal_462f68b99f90ef56c2adf0166ff50c7f7da03f29a0e7c5acb36e19a8e16ee6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6ce0dfa96ea0d63b2815fdedd2fc220c907639ace8ae8ef230811e1b14e17a66->leave($__internal_6ce0dfa96ea0d63b2815fdedd2fc220c907639ace8ae8ef230811e1b14e17a66_prof);

        
        $__internal_462f68b99f90ef56c2adf0166ff50c7f7da03f29a0e7c5acb36e19a8e16ee6e3->leave($__internal_462f68b99f90ef56c2adf0166ff50c7f7da03f29a0e7c5acb36e19a8e16ee6e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f468b36034298dc1e5a025bd4b0c9177d2d8322369d05425c8796f9e17343b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f468b36034298dc1e5a025bd4b0c9177d2d8322369d05425c8796f9e17343b9->enter($__internal_2f468b36034298dc1e5a025bd4b0c9177d2d8322369d05425c8796f9e17343b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a24480889cd5386598c496a31048e51de8162460470c3fbbdd8cc150574d1d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24480889cd5386598c496a31048e51de8162460470c3fbbdd8cc150574d1d32->enter($__internal_a24480889cd5386598c496a31048e51de8162460470c3fbbdd8cc150574d1d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a24480889cd5386598c496a31048e51de8162460470c3fbbdd8cc150574d1d32->leave($__internal_a24480889cd5386598c496a31048e51de8162460470c3fbbdd8cc150574d1d32_prof);

        
        $__internal_2f468b36034298dc1e5a025bd4b0c9177d2d8322369d05425c8796f9e17343b9->leave($__internal_2f468b36034298dc1e5a025bd4b0c9177d2d8322369d05425c8796f9e17343b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b889bb0de4a69e9eca192727b337e510e75dd4f607130844d7edc72b3074f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b889bb0de4a69e9eca192727b337e510e75dd4f607130844d7edc72b3074f2c->enter($__internal_2b889bb0de4a69e9eca192727b337e510e75dd4f607130844d7edc72b3074f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ba68dfbb256c90cdaaf94fca3ddd9076dd00a55542bf6cad0dd4fb5055f90d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba68dfbb256c90cdaaf94fca3ddd9076dd00a55542bf6cad0dd4fb5055f90d7a->enter($__internal_ba68dfbb256c90cdaaf94fca3ddd9076dd00a55542bf6cad0dd4fb5055f90d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba68dfbb256c90cdaaf94fca3ddd9076dd00a55542bf6cad0dd4fb5055f90d7a->leave($__internal_ba68dfbb256c90cdaaf94fca3ddd9076dd00a55542bf6cad0dd4fb5055f90d7a_prof);

        
        $__internal_2b889bb0de4a69e9eca192727b337e510e75dd4f607130844d7edc72b3074f2c->leave($__internal_2b889bb0de4a69e9eca192727b337e510e75dd4f607130844d7edc72b3074f2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2bc2bf8760e66e7ecdc1c0ad47b3ca55532d3c2f18e5f62572ac28901ec517d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bc2bf8760e66e7ecdc1c0ad47b3ca55532d3c2f18e5f62572ac28901ec517d->enter($__internal_d2bc2bf8760e66e7ecdc1c0ad47b3ca55532d3c2f18e5f62572ac28901ec517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4453c0590ba0b11f61d1037f3ff09fc7cd99c01cae7a8818e61c23d54c264424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4453c0590ba0b11f61d1037f3ff09fc7cd99c01cae7a8818e61c23d54c264424->enter($__internal_4453c0590ba0b11f61d1037f3ff09fc7cd99c01cae7a8818e61c23d54c264424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4453c0590ba0b11f61d1037f3ff09fc7cd99c01cae7a8818e61c23d54c264424->leave($__internal_4453c0590ba0b11f61d1037f3ff09fc7cd99c01cae7a8818e61c23d54c264424_prof);

        
        $__internal_d2bc2bf8760e66e7ecdc1c0ad47b3ca55532d3c2f18e5f62572ac28901ec517d->leave($__internal_d2bc2bf8760e66e7ecdc1c0ad47b3ca55532d3c2f18e5f62572ac28901ec517d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_974a58dad79494255991a8ce8d35c573642400b84e264a02844de92b3b8f02e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974a58dad79494255991a8ce8d35c573642400b84e264a02844de92b3b8f02e4->enter($__internal_974a58dad79494255991a8ce8d35c573642400b84e264a02844de92b3b8f02e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3287b6af68fa5dada4e654ec2abb17350890aab9c770f310da0524e3801269a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3287b6af68fa5dada4e654ec2abb17350890aab9c770f310da0524e3801269a7->enter($__internal_3287b6af68fa5dada4e654ec2abb17350890aab9c770f310da0524e3801269a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3287b6af68fa5dada4e654ec2abb17350890aab9c770f310da0524e3801269a7->leave($__internal_3287b6af68fa5dada4e654ec2abb17350890aab9c770f310da0524e3801269a7_prof);

        
        $__internal_974a58dad79494255991a8ce8d35c573642400b84e264a02844de92b3b8f02e4->leave($__internal_974a58dad79494255991a8ce8d35c573642400b84e264a02844de92b3b8f02e4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
