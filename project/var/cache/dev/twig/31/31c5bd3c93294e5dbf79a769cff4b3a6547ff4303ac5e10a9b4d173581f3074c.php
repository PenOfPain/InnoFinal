<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d8de0f99e344099204aff626deb5cbc0b82f7106ce08a3ffc6e5461e5316ca23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c270c0347ea74bd632dd922faef2f7b1dcf7156c59cc6756b9b949e4968a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c270c0347ea74bd632dd922faef2f7b1dcf7156c59cc6756b9b949e4968a21->enter($__internal_22c270c0347ea74bd632dd922faef2f7b1dcf7156c59cc6756b9b949e4968a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cfda96327811f985ec580be12aba0bff75f21acb85bf3e18e2714fa94d773c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfda96327811f985ec580be12aba0bff75f21acb85bf3e18e2714fa94d773c32->enter($__internal_cfda96327811f985ec580be12aba0bff75f21acb85bf3e18e2714fa94d773c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c270c0347ea74bd632dd922faef2f7b1dcf7156c59cc6756b9b949e4968a21->leave($__internal_22c270c0347ea74bd632dd922faef2f7b1dcf7156c59cc6756b9b949e4968a21_prof);

        
        $__internal_cfda96327811f985ec580be12aba0bff75f21acb85bf3e18e2714fa94d773c32->leave($__internal_cfda96327811f985ec580be12aba0bff75f21acb85bf3e18e2714fa94d773c32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9d20ef3dfe0e8ecc78e623bc6447e2417a3aff3bdf502d1639c9ed62e3242e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d20ef3dfe0e8ecc78e623bc6447e2417a3aff3bdf502d1639c9ed62e3242e5->enter($__internal_f9d20ef3dfe0e8ecc78e623bc6447e2417a3aff3bdf502d1639c9ed62e3242e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bcf039b3934268ac263b644c43a32a619635bccaaacd71c9bf95c23d92010a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf039b3934268ac263b644c43a32a619635bccaaacd71c9bf95c23d92010a2e->enter($__internal_bcf039b3934268ac263b644c43a32a619635bccaaacd71c9bf95c23d92010a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bcf039b3934268ac263b644c43a32a619635bccaaacd71c9bf95c23d92010a2e->leave($__internal_bcf039b3934268ac263b644c43a32a619635bccaaacd71c9bf95c23d92010a2e_prof);

        
        $__internal_f9d20ef3dfe0e8ecc78e623bc6447e2417a3aff3bdf502d1639c9ed62e3242e5->leave($__internal_f9d20ef3dfe0e8ecc78e623bc6447e2417a3aff3bdf502d1639c9ed62e3242e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/pi/Innovation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
