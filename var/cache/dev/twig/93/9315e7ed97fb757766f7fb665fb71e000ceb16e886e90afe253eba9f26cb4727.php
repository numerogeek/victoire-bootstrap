<?php

/* VictoireCoreBundle::_userVoice.html.twig */
class __TwigTemplate_2f3cbd26dda7e97a923501f5abf1e1479ef4d594d1aa2e14d7469d484bbfd576 extends Twig_Template
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
        $__internal_292ee90d56fdd18b66e1030a3cd2598cf068e4e04d5a6db93bae10267af791ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292ee90d56fdd18b66e1030a3cd2598cf068e4e04d5a6db93bae10267af791ef->enter($__internal_292ee90d56fdd18b66e1030a3cd2598cf068e4e04d5a6db93bae10267af791ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle::_userVoice.html.twig"));

        $__internal_7875b147bfcf09e14b260fc4ca297868ac15614b8ef9e62b75f46e9877dd84c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7875b147bfcf09e14b260fc4ca297868ac15614b8ef9e62b75f46e9877dd84c0->enter($__internal_7875b147bfcf09e14b260fc4ca297868ac15614b8ef9e62b75f46e9877dd84c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireCoreBundle::_userVoice.html.twig"));

        // line 1
        echo "<script>
// Include the UserVoice JavaScript SDK (only needed once on a page)
UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/ZXkVps8ndvsaGSotxss4Fw.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();

//
// UserVoice Javascript SDK developer documentation:
// https://www.uservoice.com/o/javascript-sdk
//

// Set colors
UserVoice.push(['set', {
  accent_color: '#AE3484',
  trigger_color: 'white',
  trigger_background_color: '#04BF96'
}]);

// Identify the user and pass traits
// To enable, replace sample data with actual user traits and uncomment the line
UserVoice.push(['identify', {
  email:      '";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "user", array()), "email", array()), "html", null, true);
        echo "', // User’s email address
  name:       '";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "lastname", array()), "html", null, true);
        echo "', // User’s real name
  created_at: ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension')->twigVicDateFormatFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "user", array()), "createdAt", array()), "U"), "html", null, true);
        echo ", // Unix timestamp for the date the user signed up
  id:         ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "user", array()), "id", array()), "html", null, true);
        echo ", // Optional: Unique id of the user (if set, this should not change)
  type:       '";
        // line 24
        echo (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VICTOIRE_DEVELOPER")) ? ("developper") : ("editor"));
        echo "', // Optional: segment your users by type
}]);

// Add default trigger to the bottom-right corner of the window:
UserVoice.push(['addTrigger', {
    mode: 'contact',
    trigger_position: 'bottom-left',

}]);

// Or, use your own custom trigger:
//UserVoice.push(['addTrigger', '#id', { mode: 'contact' }]);

// Autoprompt for Satisfaction and SmartVote (only displayed under certain conditions)
UserVoice.push(['autoprompt', {}]);

</script>
<style type=\"text/css\">
.uv-icon.uv-bottom-left {
  bottom: 60px;
}
</style>
";
        
        $__internal_292ee90d56fdd18b66e1030a3cd2598cf068e4e04d5a6db93bae10267af791ef->leave($__internal_292ee90d56fdd18b66e1030a3cd2598cf068e4e04d5a6db93bae10267af791ef_prof);

        
        $__internal_7875b147bfcf09e14b260fc4ca297868ac15614b8ef9e62b75f46e9877dd84c0->leave($__internal_7875b147bfcf09e14b260fc4ca297868ac15614b8ef9e62b75f46e9877dd84c0_prof);

    }

    public function getTemplateName()
    {
        return "VictoireCoreBundle::_userVoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  60 => 23,  56 => 22,  50 => 21,  46 => 20,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
// Include the UserVoice JavaScript SDK (only needed once on a page)
UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/ZXkVps8ndvsaGSotxss4Fw.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();

//
// UserVoice Javascript SDK developer documentation:
// https://www.uservoice.com/o/javascript-sdk
//

// Set colors
UserVoice.push(['set', {
  accent_color: '#AE3484',
  trigger_color: 'white',
  trigger_background_color: '#04BF96'
}]);

// Identify the user and pass traits
// To enable, replace sample data with actual user traits and uncomment the line
UserVoice.push(['identify', {
  email:      '{{ app.user.email }}', // User’s email address
  name:       '{{ app.user.firstname }} {{ app.user.lastname }}', // User’s real name
  created_at: {{ app.user.createdAt|date('U') }}, // Unix timestamp for the date the user signed up
  id:         {{ app.user.id }}, // Optional: Unique id of the user (if set, this should not change)
  type:       '{{ is_granted('ROLE_VICTOIRE_DEVELOPER') ? 'developper' : 'editor' }}', // Optional: segment your users by type
}]);

// Add default trigger to the bottom-right corner of the window:
UserVoice.push(['addTrigger', {
    mode: 'contact',
    trigger_position: 'bottom-left',

}]);

// Or, use your own custom trigger:
//UserVoice.push(['addTrigger', '#id', { mode: 'contact' }]);

// Autoprompt for Satisfaction and SmartVote (only displayed under certain conditions)
UserVoice.push(['autoprompt', {}]);

</script>
<style type=\"text/css\">
.uv-icon.uv-bottom-left {
  bottom: 60px;
}
</style>
", "VictoireCoreBundle::_userVoice.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views/_userVoice.html.twig");
    }
}
