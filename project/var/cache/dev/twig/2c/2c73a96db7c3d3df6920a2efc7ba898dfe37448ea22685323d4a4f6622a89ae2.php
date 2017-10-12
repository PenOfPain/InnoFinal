<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9686a4200268e8228f08a645977c6ab94f42aa617b6e80356a4d3defaa116264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7ba87d4ed29ce2ab32f9c8c451f256aeafeb9dee1515b5e61d37cd01fad93fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ba87d4ed29ce2ab32f9c8c451f256aeafeb9dee1515b5e61d37cd01fad93fb->enter($__internal_f7ba87d4ed29ce2ab32f9c8c451f256aeafeb9dee1515b5e61d37cd01fad93fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_16aeb295b9a959c164be4fd78d4caf01e6a5d2224d9e0f5e0647c3564101301a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16aeb295b9a959c164be4fd78d4caf01e6a5d2224d9e0f5e0647c3564101301a->enter($__internal_16aeb295b9a959c164be4fd78d4caf01e6a5d2224d9e0f5e0647c3564101301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ba87d4ed29ce2ab32f9c8c451f256aeafeb9dee1515b5e61d37cd01fad93fb->leave($__internal_f7ba87d4ed29ce2ab32f9c8c451f256aeafeb9dee1515b5e61d37cd01fad93fb_prof);

        
        $__internal_16aeb295b9a959c164be4fd78d4caf01e6a5d2224d9e0f5e0647c3564101301a->leave($__internal_16aeb295b9a959c164be4fd78d4caf01e6a5d2224d9e0f5e0647c3564101301a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94384795c06cde5c630c48a946ead0cf2e0e3613a4a8f78733215602b72620c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94384795c06cde5c630c48a946ead0cf2e0e3613a4a8f78733215602b72620c7->enter($__internal_94384795c06cde5c630c48a946ead0cf2e0e3613a4a8f78733215602b72620c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c92c88b9b7ecf59060ce0aa8f5d4b5d307ffa66b1077b8dff45e8c76dc0aa0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c92c88b9b7ecf59060ce0aa8f5d4b5d307ffa66b1077b8dff45e8c76dc0aa0c->enter($__internal_1c92c88b9b7ecf59060ce0aa8f5d4b5d307ffa66b1077b8dff45e8c76dc0aa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1c92c88b9b7ecf59060ce0aa8f5d4b5d307ffa66b1077b8dff45e8c76dc0aa0c->leave($__internal_1c92c88b9b7ecf59060ce0aa8f5d4b5d307ffa66b1077b8dff45e8c76dc0aa0c_prof);

        
        $__internal_94384795c06cde5c630c48a946ead0cf2e0e3613a4a8f78733215602b72620c7->leave($__internal_94384795c06cde5c630c48a946ead0cf2e0e3613a4a8f78733215602b72620c7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edd24304254390a0bb8b9e8a13af88776bc894b1b9040a4548a2b63b5cca768b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd24304254390a0bb8b9e8a13af88776bc894b1b9040a4548a2b63b5cca768b->enter($__internal_edd24304254390a0bb8b9e8a13af88776bc894b1b9040a4548a2b63b5cca768b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eccaefa20c80aa5683e45879e57dc35d80171aa50d8f590b6817f3fb6df0a280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccaefa20c80aa5683e45879e57dc35d80171aa50d8f590b6817f3fb6df0a280->enter($__internal_eccaefa20c80aa5683e45879e57dc35d80171aa50d8f590b6817f3fb6df0a280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_eccaefa20c80aa5683e45879e57dc35d80171aa50d8f590b6817f3fb6df0a280->leave($__internal_eccaefa20c80aa5683e45879e57dc35d80171aa50d8f590b6817f3fb6df0a280_prof);

        
        $__internal_edd24304254390a0bb8b9e8a13af88776bc894b1b9040a4548a2b63b5cca768b->leave($__internal_edd24304254390a0bb8b9e8a13af88776bc894b1b9040a4548a2b63b5cca768b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bddc914d2cbc6a8ffdd7663f03a6751cd429f11d7510084d0ee9ba9f0bf33a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddc914d2cbc6a8ffdd7663f03a6751cd429f11d7510084d0ee9ba9f0bf33a92->enter($__internal_bddc914d2cbc6a8ffdd7663f03a6751cd429f11d7510084d0ee9ba9f0bf33a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad95104159294b18b83e6294b45a13b846da8b10f583b445a6f518ebe8f31649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad95104159294b18b83e6294b45a13b846da8b10f583b445a6f518ebe8f31649->enter($__internal_ad95104159294b18b83e6294b45a13b846da8b10f583b445a6f518ebe8f31649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ad95104159294b18b83e6294b45a13b846da8b10f583b445a6f518ebe8f31649->leave($__internal_ad95104159294b18b83e6294b45a13b846da8b10f583b445a6f518ebe8f31649_prof);

        
        $__internal_bddc914d2cbc6a8ffdd7663f03a6751cd429f11d7510084d0ee9ba9f0bf33a92->leave($__internal_bddc914d2cbc6a8ffdd7663f03a6751cd429f11d7510084d0ee9ba9f0bf33a92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/pi/Innovation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
