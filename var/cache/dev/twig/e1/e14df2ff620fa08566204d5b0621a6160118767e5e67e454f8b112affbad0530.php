<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_695c66e2183563807fba0dfdfff57f45335a8fd34cf16cdb12ee001029f7e635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3946b087f15bf00e3706bc02ff6190c9efa86d6f3564ee7339d5da80cfa435e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3946b087f15bf00e3706bc02ff6190c9efa86d6f3564ee7339d5da80cfa435e->enter($__internal_f3946b087f15bf00e3706bc02ff6190c9efa86d6f3564ee7339d5da80cfa435e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2f7726f797123101f95b6b4f075082c4693df794afb9f492733c4b294ca55087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7726f797123101f95b6b4f075082c4693df794afb9f492733c4b294ca55087->enter($__internal_2f7726f797123101f95b6b4f075082c4693df794afb9f492733c4b294ca55087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3946b087f15bf00e3706bc02ff6190c9efa86d6f3564ee7339d5da80cfa435e->leave($__internal_f3946b087f15bf00e3706bc02ff6190c9efa86d6f3564ee7339d5da80cfa435e_prof);

        
        $__internal_2f7726f797123101f95b6b4f075082c4693df794afb9f492733c4b294ca55087->leave($__internal_2f7726f797123101f95b6b4f075082c4693df794afb9f492733c4b294ca55087_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f346d1fb68431ddddcb4c7fd8e00d7a22ec72116128a58c8f230901e65ae7dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f346d1fb68431ddddcb4c7fd8e00d7a22ec72116128a58c8f230901e65ae7dd9->enter($__internal_f346d1fb68431ddddcb4c7fd8e00d7a22ec72116128a58c8f230901e65ae7dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96b1de49fc013b500dcf6b252aa56f046b5a819cf55a5fab21bfff1c86b26835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b1de49fc013b500dcf6b252aa56f046b5a819cf55a5fab21bfff1c86b26835->enter($__internal_96b1de49fc013b500dcf6b252aa56f046b5a819cf55a5fab21bfff1c86b26835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_96b1de49fc013b500dcf6b252aa56f046b5a819cf55a5fab21bfff1c86b26835->leave($__internal_96b1de49fc013b500dcf6b252aa56f046b5a819cf55a5fab21bfff1c86b26835_prof);

        
        $__internal_f346d1fb68431ddddcb4c7fd8e00d7a22ec72116128a58c8f230901e65ae7dd9->leave($__internal_f346d1fb68431ddddcb4c7fd8e00d7a22ec72116128a58c8f230901e65ae7dd9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ad5054011eaf0974ffae9d2c59c54b3c0f25d7d4074b2bcd604349b16ccbfa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad5054011eaf0974ffae9d2c59c54b3c0f25d7d4074b2bcd604349b16ccbfa5->enter($__internal_8ad5054011eaf0974ffae9d2c59c54b3c0f25d7d4074b2bcd604349b16ccbfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ade2da7e68771099a06a6e877b05cee07f569101f46a04b2e2e2189706e7c116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade2da7e68771099a06a6e877b05cee07f569101f46a04b2e2e2189706e7c116->enter($__internal_ade2da7e68771099a06a6e877b05cee07f569101f46a04b2e2e2189706e7c116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ade2da7e68771099a06a6e877b05cee07f569101f46a04b2e2e2189706e7c116->leave($__internal_ade2da7e68771099a06a6e877b05cee07f569101f46a04b2e2e2189706e7c116_prof);

        
        $__internal_8ad5054011eaf0974ffae9d2c59c54b3c0f25d7d4074b2bcd604349b16ccbfa5->leave($__internal_8ad5054011eaf0974ffae9d2c59c54b3c0f25d7d4074b2bcd604349b16ccbfa5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_988a95e94cba21611bb5ab307cdd25ab9a73ac0f0ccca669c0e4c8a00b63364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988a95e94cba21611bb5ab307cdd25ab9a73ac0f0ccca669c0e4c8a00b63364a->enter($__internal_988a95e94cba21611bb5ab307cdd25ab9a73ac0f0ccca669c0e4c8a00b63364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b557f5136318f864e86610fd24903d85136acb32ce68b99c3a7ab2e3da37242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b557f5136318f864e86610fd24903d85136acb32ce68b99c3a7ab2e3da37242c->enter($__internal_b557f5136318f864e86610fd24903d85136acb32ce68b99c3a7ab2e3da37242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b557f5136318f864e86610fd24903d85136acb32ce68b99c3a7ab2e3da37242c->leave($__internal_b557f5136318f864e86610fd24903d85136acb32ce68b99c3a7ab2e3da37242c_prof);

        
        $__internal_988a95e94cba21611bb5ab307cdd25ab9a73ac0f0ccca669c0e4c8a00b63364a->leave($__internal_988a95e94cba21611bb5ab307cdd25ab9a73ac0f0ccca669c0e4c8a00b63364a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
