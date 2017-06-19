<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_ad50c2d3050179416e9e915b3e993e46b1b48e1f29a100f6a7fa434a2ab924c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cb366aefeb08bd915347c6e9ae3e799768277aece4a33ccee5586ef53fce257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb366aefeb08bd915347c6e9ae3e799768277aece4a33ccee5586ef53fce257->enter($__internal_5cb366aefeb08bd915347c6e9ae3e799768277aece4a33ccee5586ef53fce257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        $__internal_c51c7f76405ccba3f161bb94aaba66a92482a0250185572e068d517001fb9acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51c7f76405ccba3f161bb94aaba66a92482a0250185572e068d517001fb9acb->enter($__internal_c51c7f76405ccba3f161bb94aaba66a92482a0250185572e068d517001fb9acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_5cb366aefeb08bd915347c6e9ae3e799768277aece4a33ccee5586ef53fce257->leave($__internal_5cb366aefeb08bd915347c6e9ae3e799768277aece4a33ccee5586ef53fce257_prof);

        
        $__internal_c51c7f76405ccba3f161bb94aaba66a92482a0250185572e068d517001fb9acb->leave($__internal_c51c7f76405ccba3f161bb94aaba66a92482a0250185572e068d517001fb9acb_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_087f32e19860dec9a8d76dfd6c4cbf3ed29fc992171947178f6415a28f7b0eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087f32e19860dec9a8d76dfd6c4cbf3ed29fc992171947178f6415a28f7b0eca->enter($__internal_087f32e19860dec9a8d76dfd6c4cbf3ed29fc992171947178f6415a28f7b0eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        $__internal_5597d92b4fb4275af3c793a4894e6cbe8ef9bb8881357717e499bf8f85ee7d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5597d92b4fb4275af3c793a4894e6cbe8ef9bb8881357717e499bf8f85ee7d36->enter($__internal_5597d92b4fb4275af3c793a4894e6cbe8ef9bb8881357717e499bf8f85ee7d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) || array_key_exists("image_path", $context) ? $context["image_path"] : (function () { throw new Twig_Error_Runtime('Variable "image_path" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 5, $this->getSourceContext()); })())) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["link_filter"]) || array_key_exists("link_filter", $context) ? $context["link_filter"] : (function () { throw new Twig_Error_Runtime('Variable "link_filter" does not exist.', 6, $this->getSourceContext()); })())) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 6, $this->getSourceContext()); })()), (isset($context["link_filter"]) || array_key_exists("link_filter", $context) ? $context["link_filter"] : (function () { throw new Twig_Error_Runtime('Variable "link_filter" does not exist.', 6, $this->getSourceContext()); })()))) : ((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 6, $this->getSourceContext()); })()))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) || array_key_exists("link_attr", $context) ? $context["link_attr"] : (function () { throw new Twig_Error_Runtime('Variable "link_attr" does not exist.', 6, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["image_path"]) || array_key_exists("image_path", $context) ? $context["image_path"] : (function () { throw new Twig_Error_Runtime('Variable "image_path" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["image_filter"]) || array_key_exists("image_filter", $context) ? $context["image_filter"] : (function () { throw new Twig_Error_Runtime('Variable "image_filter" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) || array_key_exists("image_attr", $context) ? $context["image_attr"] : (function () { throw new Twig_Error_Runtime('Variable "image_attr" does not exist.', 9, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 11, $this->getSourceContext()); })())) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5597d92b4fb4275af3c793a4894e6cbe8ef9bb8881357717e499bf8f85ee7d36->leave($__internal_5597d92b4fb4275af3c793a4894e6cbe8ef9bb8881357717e499bf8f85ee7d36_prof);

        
        $__internal_087f32e19860dec9a8d76dfd6c4cbf3ed29fc992171947178f6415a28f7b0eca->leave($__internal_087f32e19860dec9a8d76dfd6c4cbf3ed29fc992171947178f6415a28f7b0eca_prof);

    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  103 => 16,  99 => 14,  95 => 12,  93 => 11,  76 => 9,  73 => 8,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block liip_imagine_image_widget %}
    {% spaceless %}
        {% if image_path %}
            <div>
                {% if link_url %}
                    <a href=\"{{ link_filter ? link_url|imagine_filter(link_filter): link_url }}\" {% for attrname, attrvalue in link_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
                {% endif %}

                <img src=\"{{ image_path|imagine_filter(image_filter) }}\" {% for attrname, attrvalue in image_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %} />

                {% if link_url %}
                    </a>
                {% endif %}
            </div>
        {% endif %}

        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock %}
", "LiipImagineBundle:Form:form_div_layout.html.twig", "/var/www/html/vendor/liip/imagine-bundle/Resources/views/Form/form_div_layout.html.twig");
    }
}
