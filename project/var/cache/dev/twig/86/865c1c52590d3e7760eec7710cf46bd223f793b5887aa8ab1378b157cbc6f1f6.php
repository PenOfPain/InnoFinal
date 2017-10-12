<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_caf7b1d7b95f6abc89582e2e5b79c7f046292f956997dfed28631694418fd538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf7b1d7b95f6abc89582e2e5b79c7f046292f956997dfed28631694418fd538->enter($__internal_caf7b1d7b95f6abc89582e2e5b79c7f046292f956997dfed28631694418fd538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_058738e2f92e0cec69497f1dbcadae1b910d8fea5986ec21a9cc62f9799c6777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058738e2f92e0cec69497f1dbcadae1b910d8fea5986ec21a9cc62f9799c6777->enter($__internal_058738e2f92e0cec69497f1dbcadae1b910d8fea5986ec21a9cc62f9799c6777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf7b1d7b95f6abc89582e2e5b79c7f046292f956997dfed28631694418fd538->leave($__internal_caf7b1d7b95f6abc89582e2e5b79c7f046292f956997dfed28631694418fd538_prof);

        
        $__internal_058738e2f92e0cec69497f1dbcadae1b910d8fea5986ec21a9cc62f9799c6777->leave($__internal_058738e2f92e0cec69497f1dbcadae1b910d8fea5986ec21a9cc62f9799c6777_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7da312f5a688860205dc439916da7600846b311b82f63be5ddf8ee96a0c16521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da312f5a688860205dc439916da7600846b311b82f63be5ddf8ee96a0c16521->enter($__internal_7da312f5a688860205dc439916da7600846b311b82f63be5ddf8ee96a0c16521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e6737b8bb376303c9a6d6d2e5e6f96ec0c2ebd1bfca1c201e01fee29318377ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6737b8bb376303c9a6d6d2e5e6f96ec0c2ebd1bfca1c201e01fee29318377ae->enter($__internal_e6737b8bb376303c9a6d6d2e5e6f96ec0c2ebd1bfca1c201e01fee29318377ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6737b8bb376303c9a6d6d2e5e6f96ec0c2ebd1bfca1c201e01fee29318377ae->leave($__internal_e6737b8bb376303c9a6d6d2e5e6f96ec0c2ebd1bfca1c201e01fee29318377ae_prof);

        
        $__internal_7da312f5a688860205dc439916da7600846b311b82f63be5ddf8ee96a0c16521->leave($__internal_7da312f5a688860205dc439916da7600846b311b82f63be5ddf8ee96a0c16521_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_798aabce053869bea25b03a776978c790b4751b2a8945e2de2886e2a53b61c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798aabce053869bea25b03a776978c790b4751b2a8945e2de2886e2a53b61c87->enter($__internal_798aabce053869bea25b03a776978c790b4751b2a8945e2de2886e2a53b61c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06e241c0caaddca2ca47f19e30fdd9aa0a640c273d2ec2b337e7a3e0b3a6d00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e241c0caaddca2ca47f19e30fdd9aa0a640c273d2ec2b337e7a3e0b3a6d00a->enter($__internal_06e241c0caaddca2ca47f19e30fdd9aa0a640c273d2ec2b337e7a3e0b3a6d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06e241c0caaddca2ca47f19e30fdd9aa0a640c273d2ec2b337e7a3e0b3a6d00a->leave($__internal_06e241c0caaddca2ca47f19e30fdd9aa0a640c273d2ec2b337e7a3e0b3a6d00a_prof);

        
        $__internal_798aabce053869bea25b03a776978c790b4751b2a8945e2de2886e2a53b61c87->leave($__internal_798aabce053869bea25b03a776978c790b4751b2a8945e2de2886e2a53b61c87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_789b130b95f30368035c32342ea122082b1b529c061c3218537da22a010dafe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789b130b95f30368035c32342ea122082b1b529c061c3218537da22a010dafe0->enter($__internal_789b130b95f30368035c32342ea122082b1b529c061c3218537da22a010dafe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5153a7f2a35f2f8fc4b0a715f46430e868f5c6581fb34a09025e9817ec09e182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5153a7f2a35f2f8fc4b0a715f46430e868f5c6581fb34a09025e9817ec09e182->enter($__internal_5153a7f2a35f2f8fc4b0a715f46430e868f5c6581fb34a09025e9817ec09e182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5153a7f2a35f2f8fc4b0a715f46430e868f5c6581fb34a09025e9817ec09e182->leave($__internal_5153a7f2a35f2f8fc4b0a715f46430e868f5c6581fb34a09025e9817ec09e182_prof);

        
        $__internal_789b130b95f30368035c32342ea122082b1b529c061c3218537da22a010dafe0->leave($__internal_789b130b95f30368035c32342ea122082b1b529c061c3218537da22a010dafe0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
