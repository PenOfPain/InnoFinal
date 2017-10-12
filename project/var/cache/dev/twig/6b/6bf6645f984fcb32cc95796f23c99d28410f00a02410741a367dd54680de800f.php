<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0daaa3d5cfd073d06a3840dd526eb53dc2929fac357308915d14d50f05ae0819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_364b330c7e188a288c3fe84f4aa4e4d493476956b3fa0d670730533bdcd253e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364b330c7e188a288c3fe84f4aa4e4d493476956b3fa0d670730533bdcd253e3->enter($__internal_364b330c7e188a288c3fe84f4aa4e4d493476956b3fa0d670730533bdcd253e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a850538ba88305532f4fe9d320a038b75450c687892adfb567da7f6f8d5fbd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a850538ba88305532f4fe9d320a038b75450c687892adfb567da7f6f8d5fbd91->enter($__internal_a850538ba88305532f4fe9d320a038b75450c687892adfb567da7f6f8d5fbd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364b330c7e188a288c3fe84f4aa4e4d493476956b3fa0d670730533bdcd253e3->leave($__internal_364b330c7e188a288c3fe84f4aa4e4d493476956b3fa0d670730533bdcd253e3_prof);

        
        $__internal_a850538ba88305532f4fe9d320a038b75450c687892adfb567da7f6f8d5fbd91->leave($__internal_a850538ba88305532f4fe9d320a038b75450c687892adfb567da7f6f8d5fbd91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be11e895df41f139a56c53e87be68e1e5dc828d6026d131fc5e08ee486d93aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be11e895df41f139a56c53e87be68e1e5dc828d6026d131fc5e08ee486d93aeb->enter($__internal_be11e895df41f139a56c53e87be68e1e5dc828d6026d131fc5e08ee486d93aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_390bbf5e6f55265cce03653a062c6320978230b922eb03360cbcbf176d3b174a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390bbf5e6f55265cce03653a062c6320978230b922eb03360cbcbf176d3b174a->enter($__internal_390bbf5e6f55265cce03653a062c6320978230b922eb03360cbcbf176d3b174a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_390bbf5e6f55265cce03653a062c6320978230b922eb03360cbcbf176d3b174a->leave($__internal_390bbf5e6f55265cce03653a062c6320978230b922eb03360cbcbf176d3b174a_prof);

        
        $__internal_be11e895df41f139a56c53e87be68e1e5dc828d6026d131fc5e08ee486d93aeb->leave($__internal_be11e895df41f139a56c53e87be68e1e5dc828d6026d131fc5e08ee486d93aeb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_339aa4344d92b3f5c119717e0b8600e8bec4ca71f74a3ccaf1507c13a98a61e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339aa4344d92b3f5c119717e0b8600e8bec4ca71f74a3ccaf1507c13a98a61e3->enter($__internal_339aa4344d92b3f5c119717e0b8600e8bec4ca71f74a3ccaf1507c13a98a61e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08ee9a37b90784ef959c710ccb4d2a08223f6ef6c0af5bcb068afccc4bc0fa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ee9a37b90784ef959c710ccb4d2a08223f6ef6c0af5bcb068afccc4bc0fa35->enter($__internal_08ee9a37b90784ef959c710ccb4d2a08223f6ef6c0af5bcb068afccc4bc0fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08ee9a37b90784ef959c710ccb4d2a08223f6ef6c0af5bcb068afccc4bc0fa35->leave($__internal_08ee9a37b90784ef959c710ccb4d2a08223f6ef6c0af5bcb068afccc4bc0fa35_prof);

        
        $__internal_339aa4344d92b3f5c119717e0b8600e8bec4ca71f74a3ccaf1507c13a98a61e3->leave($__internal_339aa4344d92b3f5c119717e0b8600e8bec4ca71f74a3ccaf1507c13a98a61e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b3818984bf2d487f66006f28734f25b750c72fcd0e51343744f135c50971154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3818984bf2d487f66006f28734f25b750c72fcd0e51343744f135c50971154->enter($__internal_1b3818984bf2d487f66006f28734f25b750c72fcd0e51343744f135c50971154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47e3353f6495b70cf389ca960bc7dae8acdbd70c5c26b7da95d8fbfd4c4df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f47e3353f6495b70cf389ca960bc7dae8acdbd70c5c26b7da95d8fbfd4c4df6->enter($__internal_6f47e3353f6495b70cf389ca960bc7dae8acdbd70c5c26b7da95d8fbfd4c4df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f47e3353f6495b70cf389ca960bc7dae8acdbd70c5c26b7da95d8fbfd4c4df6->leave($__internal_6f47e3353f6495b70cf389ca960bc7dae8acdbd70c5c26b7da95d8fbfd4c4df6_prof);

        
        $__internal_1b3818984bf2d487f66006f28734f25b750c72fcd0e51343744f135c50971154->leave($__internal_1b3818984bf2d487f66006f28734f25b750c72fcd0e51343744f135c50971154_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/pi/Innovation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
