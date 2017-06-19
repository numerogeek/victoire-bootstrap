<?php

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_66f5ccae14dee976357fb5642a2bbda99a0627ac47a5278517ea6d12dcc8b5aa extends Twig_Template
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
        $__internal_1d173532d0d016e978ea1807fb8c7fd7ae9648809525a2e50c1940e5304fdd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d173532d0d016e978ea1807fb8c7fd7ae9648809525a2e50c1940e5304fdd6a->enter($__internal_1d173532d0d016e978ea1807fb8c7fd7ae9648809525a2e50c1940e5304fdd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        $__internal_9c41af44f53e10e2b655227d240f5337d20a33f92c2874e55a0e8e328d5ccadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c41af44f53e10e2b655227d240f5337d20a33f92c2874e55a0e8e328d5ccadf->enter($__internal_9c41af44f53e10e2b655227d240f5337d20a33f92c2874e55a0e8e328d5ccadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        // line 1
        echo "<div id=\"sidebar-search\" class=\"hidden\">
    <form action=\"";
        // line 2
        echo $this->env->getExtension('Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new Twig_Error_Runtime('Variable "ip" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                    <option ";
            echo ((($context["m"] == (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 13, $this->getSourceContext()); })()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 47
            echo "                    <option ";
            echo ((($context["l"] == (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new Twig_Error_Runtime('Variable "limit" does not exist.', 47, $this->getSourceContext()); })()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
";
        
        $__internal_1d173532d0d016e978ea1807fb8c7fd7ae9648809525a2e50c1940e5304fdd6a->leave($__internal_1d173532d0d016e978ea1807fb8c7fd7ae9648809525a2e50c1940e5304fdd6a_prof);

        
        $__internal_9c41af44f53e10e2b655227d240f5337d20a33f92c2874e55a0e8e328d5ccadf->leave($__internal_9c41af44f53e10e2b655227d240f5337d20a33f92c2874e55a0e8e328d5ccadf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  111 => 47,  107 => 46,  98 => 40,  90 => 35,  82 => 30,  74 => 25,  66 => 20,  59 => 15,  48 => 13,  44 => 12,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar-search\" class=\"hidden\">
    <form action=\"{{ path('_profiler_search') }}\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"{{ ip }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}
                    <option {{ m == method ? 'selected=\"selected\"' }}>{{ m }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" value=\"{{ status_code }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"{{ url }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"{{ token }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"{{ start }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"{{ end }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                {% for l in [10, 50, 100] %}
                    <option {{ l == limit ? 'selected=\"selected\"' }}>{{ l }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
", "@WebProfiler/Profiler/search.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/search.html.twig");
    }
}
