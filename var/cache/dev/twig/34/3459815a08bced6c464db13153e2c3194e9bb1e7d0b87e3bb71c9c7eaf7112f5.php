<?php

/* VictoireMediaBundle:Form:formWidgets.html.twig */
class __TwigTemplate_0ce9c5b9536799bca5a5cf9145ecf7ecd00139fb23b7a0a04e8072241a072909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'media_widget' => array($this, 'block_media_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e379e0ae047af7cb4eb751c368213bd2482529eb5d64b26205b3c5dfd9e7ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e379e0ae047af7cb4eb751c368213bd2482529eb5d64b26205b3c5dfd9e7ddd->enter($__internal_9e379e0ae047af7cb4eb751c368213bd2482529eb5d64b26205b3c5dfd9e7ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireMediaBundle:Form:formWidgets.html.twig"));

        $__internal_865cbf3b8d52ee95c1faf185deab5e44da2a84166c85e9fd00bc616b073d318c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865cbf3b8d52ee95c1faf185deab5e44da2a84166c85e9fd00bc616b073d318c->enter($__internal_865cbf3b8d52ee95c1faf185deab5e44da2a84166c85e9fd00bc616b073d318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VictoireMediaBundle:Form:formWidgets.html.twig"));

        // line 1
        $this->displayBlock('media_widget', $context, $blocks);
        
        $__internal_9e379e0ae047af7cb4eb751c368213bd2482529eb5d64b26205b3c5dfd9e7ddd->leave($__internal_9e379e0ae047af7cb4eb751c368213bd2482529eb5d64b26205b3c5dfd9e7ddd_prof);

        
        $__internal_865cbf3b8d52ee95c1faf185deab5e44da2a84166c85e9fd00bc616b073d318c->leave($__internal_865cbf3b8d52ee95c1faf185deab5e44da2a84166c85e9fd00bc616b073d318c_prof);

    }

    public function block_media_widget($context, array $blocks = array())
    {
        $__internal_b5616b9e81e785f7ed847ebe250a7aee9b4171764b2331bab46281a60b50a5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5616b9e81e785f7ed847ebe250a7aee9b4171764b2331bab46281a60b50a5a9->enter($__internal_b5616b9e81e785f7ed847ebe250a7aee9b4171764b2331bab46281a60b50a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "media_widget"));

        $__internal_72b127b00ce5fab6e8bcac0ba1589c9905a06d86f99101e02100cf1c4f6ac9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b127b00ce5fab6e8bcac0ba1589c9905a06d86f99101e02100cf1c4f6ac9a2->enter($__internal_72b127b00ce5fab6e8bcac0ba1589c9905a06d86f99101e02100cf1c4f6ac9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "media_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "_widget\" class=\"clearfix\">
        <input type=\"hidden\" name=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\" value=\"";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "id", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        }
        echo "\"/>

        <div class=\"input_media hasnomedia\">
            <div class=\"preview\"></div>
            <a data-toggle=\"modal\" src=\"";
        // line 8
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("VictoireMediaBundle_chooser");
        echo "\" class=\"choose vic-btn vic-btn-default\"><i class=\"fa fa-picture-o\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("media.widget.choose", array(), "victoire"), "html", null, true);
        echo "</a>
        </div>

        <div class=\"input_media hasmedia\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "ent", array(), "any", true, true)) {
            // line 13
            echo "                ";
            $context["media"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "ent", array());
            // line 14
            echo "                ";
            $context["handler"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["mediamanager"]) || array_key_exists("mediamanager", $context) ? $context["mediamanager"] : (function () { throw new Twig_Error_Runtime('Variable "mediamanager" does not exist.', 14, $this->getSourceContext()); })()), "getHandler", array(0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 14, $this->getSourceContext()); })())), "method");
            // line 15
            echo "                ";
            $context["thumbnailurl"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new Twig_Error_Runtime('Variable "handler" does not exist.', 15, $this->getSourceContext()); })()), "getImageUrl", array(0 => (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 15, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "basePath", array()), 2 => 210, 3 => 150), "method");
            // line 16
            echo "                <div class=\"preview\" ";
            if (((isset($context["thumbnailurl"]) || array_key_exists("thumbnailurl", $context) ? $context["thumbnailurl"] : (function () { throw new Twig_Error_Runtime('Variable "thumbnailurl" does not exist.', 16, $this->getSourceContext()); })()) != "")) {
                echo "style=\"background-image: url('";
                echo twig_escape_filter($this->env, (isset($context["thumbnailurl"]) || array_key_exists("thumbnailurl", $context) ? $context["thumbnailurl"] : (function () { throw new Twig_Error_Runtime('Variable "thumbnailurl" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
                echo "');\"";
            }
            echo ">
                    <button class=\"del vic-btn vic-btn-danger vic-btn-bordered\"><i class=\"fa fa-trash-o\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("media.widget.delete", array(), "victoire"), "html", null, true);
            echo "</button>
                </div>
                <p class=\"title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 19, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 21
            echo "                <div class=\"preview\">
                    <button class=\"del vic-btn vic-btn-danger vic-btn-bordered\"><i class=\"fa fa-trash-o\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("media.widget.delete", array(), "victoire"), "html", null, true);
            echo "</button>
                </div>
                <p class=\"title\"></p>
            ";
        }
        // line 26
        echo "        </div>
    </div>

    <script type=\"text/javascript\">
        {
            var widget = jQuery('#";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
        echo "_widget');
            if ( widget.find('input').val() == '') {
                widget.find('.hasnomedia').show();
                widget.find('.hasmedia').hide();
            } else {
                widget.find('.hasnomedia').hide();
                widget.find('.hasmedia').show();
            }
            widget.find('.choose').on('click', function(ev) {
                ev.preventDefault();
                openDGDialog('";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath((isset($context["chooser"]) || array_key_exists("chooser", $context) ? $context["chooser"] : (function () { throw new Twig_Error_Runtime('Variable "chooser" does not exist.', 41, $this->getSourceContext()); })()), array("type" => (isset($context["mediatype"]) || array_key_exists("mediatype", $context) ? $context["mediatype"] : (function () { throw new Twig_Error_Runtime('Variable "mediatype" does not exist.', 41, $this->getSourceContext()); })()))), "html", null, true);
        echo "', 1050, 600, function(param){
                    var widget = jQuery('#";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
        echo "_widget');
                    widget.find('input').val(dialogWin.returnedValue.id);
                    if(typeof(dialogWin.returnedValue.title)!=\"undefined\"){
                        widget.find('.hasmedia').find('.title').html(dialogWin.returnedValue.title);
                        widget.find('.hasmedia').find('.title').show();
                    } else {
                        widget.find('.hasmedia').find('.title').hide();
                    }
                    if(typeof(dialogWin.returnedValue.imgpath)!=\"undefined\"){
                        widget.find('.hasmedia').find('.preview').attr('style', 'background-image: url(' + dialogWin.returnedValue.imgpath + ');');
                    } else {
                        widget.find('.hasmedia').find('.preview').attr('style', 'background-image: none;');
                    }
                    widget.find('.hasnomedia').hide();
                    widget.find('.hasmedia').show();
                });
            });
            widget.find('.del').on('click', function(ev) {
                ev.preventDefault();
                var widget = jQuery('#";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
        echo "_widget');
                widget.find('input').val('');
                widget.find('.hasnomedia').show();
                widget.find('.hasmedia').hide();
            });
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_72b127b00ce5fab6e8bcac0ba1589c9905a06d86f99101e02100cf1c4f6ac9a2->leave($__internal_72b127b00ce5fab6e8bcac0ba1589c9905a06d86f99101e02100cf1c4f6ac9a2_prof);

        
        $__internal_b5616b9e81e785f7ed847ebe250a7aee9b4171764b2331bab46281a60b50a5a9->leave($__internal_b5616b9e81e785f7ed847ebe250a7aee9b4171764b2331bab46281a60b50a5a9_prof);

    }

    public function getTemplateName()
    {
        return "VictoireMediaBundle:Form:formWidgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  135 => 42,  131 => 41,  118 => 31,  111 => 26,  104 => 22,  101 => 21,  96 => 19,  91 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  71 => 12,  62 => 8,  51 => 4,  46 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block media_widget %}
{% spaceless %}
    <div id=\"{{ id }}_widget\" class=\"clearfix\">
        <input type=\"hidden\" name=\"{{ full_name }}\" value=\"{% if(value.id is defined) %}{{ value.id }}{% endif %}\"/>

        <div class=\"input_media hasnomedia\">
            <div class=\"preview\"></div>
            <a data-toggle=\"modal\" src=\"{{ path('VictoireMediaBundle_chooser') }}\" class=\"choose vic-btn vic-btn-default\"><i class=\"fa fa-picture-o\"></i>{{ 'media.widget.choose'|trans({}, 'victoire') }}</a>
        </div>

        <div class=\"input_media hasmedia\">
            {% if value.ent is defined %}
                {% set media = value.ent %}
                {% set handler = mediamanager.getHandler(media) %}
                {% set thumbnailurl =  handler.getImageUrl(media, app.request.basePath, 210, 150) %}
                <div class=\"preview\" {% if thumbnailurl != \"\" %}style=\"background-image: url('{{ thumbnailurl }}');\"{% endif %}>
                    <button class=\"del vic-btn vic-btn-danger vic-btn-bordered\"><i class=\"fa fa-trash-o\"></i> {{ 'media.widget.delete'|trans({}, 'victoire') }}</button>
                </div>
                <p class=\"title\">{{ media.name }}</p>
            {% else %}
                <div class=\"preview\">
                    <button class=\"del vic-btn vic-btn-danger vic-btn-bordered\"><i class=\"fa fa-trash-o\"></i> {{ 'media.widget.delete'|trans({}, 'victoire') }}</button>
                </div>
                <p class=\"title\"></p>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\">
        {
            var widget = jQuery('#{{ id }}_widget');
            if ( widget.find('input').val() == '') {
                widget.find('.hasnomedia').show();
                widget.find('.hasmedia').hide();
            } else {
                widget.find('.hasnomedia').hide();
                widget.find('.hasmedia').show();
            }
            widget.find('.choose').on('click', function(ev) {
                ev.preventDefault();
                openDGDialog('{{ path(chooser, {'type': mediatype}) }}', 1050, 600, function(param){
                    var widget = jQuery('#{{ id }}_widget');
                    widget.find('input').val(dialogWin.returnedValue.id);
                    if(typeof(dialogWin.returnedValue.title)!=\"undefined\"){
                        widget.find('.hasmedia').find('.title').html(dialogWin.returnedValue.title);
                        widget.find('.hasmedia').find('.title').show();
                    } else {
                        widget.find('.hasmedia').find('.title').hide();
                    }
                    if(typeof(dialogWin.returnedValue.imgpath)!=\"undefined\"){
                        widget.find('.hasmedia').find('.preview').attr('style', 'background-image: url(' + dialogWin.returnedValue.imgpath + ');');
                    } else {
                        widget.find('.hasmedia').find('.preview').attr('style', 'background-image: none;');
                    }
                    widget.find('.hasnomedia').hide();
                    widget.find('.hasmedia').show();
                });
            });
            widget.find('.del').on('click', function(ev) {
                ev.preventDefault();
                var widget = jQuery('#{{ id }}_widget');
                widget.find('input').val('');
                widget.find('.hasnomedia').show();
                widget.find('.hasmedia').hide();
            });
        }
    </script>
{% endspaceless %}
{% endblock %}
", "VictoireMediaBundle:Form:formWidgets.html.twig", "/var/www/html/vendor/victoire/victoire/Bundle/MediaBundle/Resources/views/Form/formWidgets.html.twig");
    }
}
