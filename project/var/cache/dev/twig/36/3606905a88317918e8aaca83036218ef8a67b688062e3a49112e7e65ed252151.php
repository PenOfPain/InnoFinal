<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_09844bb93f0f0778cf7b699dca115e97ed413cae6cc9a49fbf028d6952dfeeda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09844bb93f0f0778cf7b699dca115e97ed413cae6cc9a49fbf028d6952dfeeda->enter($__internal_09844bb93f0f0778cf7b699dca115e97ed413cae6cc9a49fbf028d6952dfeeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_48cf8d087edcf3c824c6e4f0faf1e8d32281e97a319ba35383cc523b8e545941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cf8d087edcf3c824c6e4f0faf1e8d32281e97a319ba35383cc523b8e545941->enter($__internal_48cf8d087edcf3c824c6e4f0faf1e8d32281e97a319ba35383cc523b8e545941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09844bb93f0f0778cf7b699dca115e97ed413cae6cc9a49fbf028d6952dfeeda->leave($__internal_09844bb93f0f0778cf7b699dca115e97ed413cae6cc9a49fbf028d6952dfeeda_prof);

        
        $__internal_48cf8d087edcf3c824c6e4f0faf1e8d32281e97a319ba35383cc523b8e545941->leave($__internal_48cf8d087edcf3c824c6e4f0faf1e8d32281e97a319ba35383cc523b8e545941_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9826ed6961e7db688018323e33e7a367c6acd8610b6028c64f32e153339b6987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9826ed6961e7db688018323e33e7a367c6acd8610b6028c64f32e153339b6987->enter($__internal_9826ed6961e7db688018323e33e7a367c6acd8610b6028c64f32e153339b6987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e742c728dfb5bdb8be91c0a4104381b58057255832776c8c43cff976884def0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e742c728dfb5bdb8be91c0a4104381b58057255832776c8c43cff976884def0->enter($__internal_9e742c728dfb5bdb8be91c0a4104381b58057255832776c8c43cff976884def0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e742c728dfb5bdb8be91c0a4104381b58057255832776c8c43cff976884def0->leave($__internal_9e742c728dfb5bdb8be91c0a4104381b58057255832776c8c43cff976884def0_prof);

        
        $__internal_9826ed6961e7db688018323e33e7a367c6acd8610b6028c64f32e153339b6987->leave($__internal_9826ed6961e7db688018323e33e7a367c6acd8610b6028c64f32e153339b6987_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d9daded6001e09e25184d9d91ebacf58966ed112c2904a03736fd119b48a8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9daded6001e09e25184d9d91ebacf58966ed112c2904a03736fd119b48a8b9->enter($__internal_6d9daded6001e09e25184d9d91ebacf58966ed112c2904a03736fd119b48a8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4319b8406801ef27add909eacf88d483400083e0a7a0d8a83befdd280df6182c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4319b8406801ef27add909eacf88d483400083e0a7a0d8a83befdd280df6182c->enter($__internal_4319b8406801ef27add909eacf88d483400083e0a7a0d8a83befdd280df6182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4319b8406801ef27add909eacf88d483400083e0a7a0d8a83befdd280df6182c->leave($__internal_4319b8406801ef27add909eacf88d483400083e0a7a0d8a83befdd280df6182c_prof);

        
        $__internal_6d9daded6001e09e25184d9d91ebacf58966ed112c2904a03736fd119b48a8b9->leave($__internal_6d9daded6001e09e25184d9d91ebacf58966ed112c2904a03736fd119b48a8b9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7950eb859f85f262f79714b587131201cf5454381ace4fdb7a7e1b882e18605e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7950eb859f85f262f79714b587131201cf5454381ace4fdb7a7e1b882e18605e->enter($__internal_7950eb859f85f262f79714b587131201cf5454381ace4fdb7a7e1b882e18605e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4bf109866b702d6b0e82165cc837175d048a6caf248d344f4b0250cfcbd3974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bf109866b702d6b0e82165cc837175d048a6caf248d344f4b0250cfcbd3974->enter($__internal_a4bf109866b702d6b0e82165cc837175d048a6caf248d344f4b0250cfcbd3974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a4bf109866b702d6b0e82165cc837175d048a6caf248d344f4b0250cfcbd3974->leave($__internal_a4bf109866b702d6b0e82165cc837175d048a6caf248d344f4b0250cfcbd3974_prof);

        
        $__internal_7950eb859f85f262f79714b587131201cf5454381ace4fdb7a7e1b882e18605e->leave($__internal_7950eb859f85f262f79714b587131201cf5454381ace4fdb7a7e1b882e18605e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
