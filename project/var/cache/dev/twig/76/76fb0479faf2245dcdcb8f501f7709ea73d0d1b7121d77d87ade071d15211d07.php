<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_540208acb6eb8e68f2ef3e007d7996a1eb047223c9fe99bdc16804a2f1c9db94 extends Twig_Template
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
        $__internal_415719cf5748fb52f5c0e9608b1d5851c1b758c4265255bc273b722bdaf528b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415719cf5748fb52f5c0e9608b1d5851c1b758c4265255bc273b722bdaf528b2->enter($__internal_415719cf5748fb52f5c0e9608b1d5851c1b758c4265255bc273b722bdaf528b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dbfc7678dafadeb152fcfcc0102d0284ddfc8d368399f88b9fdda757167ffb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfc7678dafadeb152fcfcc0102d0284ddfc8d368399f88b9fdda757167ffb78->enter($__internal_dbfc7678dafadeb152fcfcc0102d0284ddfc8d368399f88b9fdda757167ffb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_415719cf5748fb52f5c0e9608b1d5851c1b758c4265255bc273b722bdaf528b2->leave($__internal_415719cf5748fb52f5c0e9608b1d5851c1b758c4265255bc273b722bdaf528b2_prof);

        
        $__internal_dbfc7678dafadeb152fcfcc0102d0284ddfc8d368399f88b9fdda757167ffb78->leave($__internal_dbfc7678dafadeb152fcfcc0102d0284ddfc8d368399f88b9fdda757167ffb78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3fd8599d983739626d84b7240c28b1c310c5b11641f6c5b183ba71f6cf3f3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fd8599d983739626d84b7240c28b1c310c5b11641f6c5b183ba71f6cf3f3fd->enter($__internal_b3fd8599d983739626d84b7240c28b1c310c5b11641f6c5b183ba71f6cf3f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_642e690088c3f16efaf3d325df97e57e85f7ea4f65a2986a58e7fe6fdb2292cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642e690088c3f16efaf3d325df97e57e85f7ea4f65a2986a58e7fe6fdb2292cc->enter($__internal_642e690088c3f16efaf3d325df97e57e85f7ea4f65a2986a58e7fe6fdb2292cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_642e690088c3f16efaf3d325df97e57e85f7ea4f65a2986a58e7fe6fdb2292cc->leave($__internal_642e690088c3f16efaf3d325df97e57e85f7ea4f65a2986a58e7fe6fdb2292cc_prof);

        
        $__internal_b3fd8599d983739626d84b7240c28b1c310c5b11641f6c5b183ba71f6cf3f3fd->leave($__internal_b3fd8599d983739626d84b7240c28b1c310c5b11641f6c5b183ba71f6cf3f3fd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f47cf91e6962a71070849b5847a534f71cf1636aafeaa03b28b85e24e923f9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47cf91e6962a71070849b5847a534f71cf1636aafeaa03b28b85e24e923f9c6->enter($__internal_f47cf91e6962a71070849b5847a534f71cf1636aafeaa03b28b85e24e923f9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9727b2cffa44730431e3e07dfa44710a6ba7de7bc8de70f2b805d0c9a69ba7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9727b2cffa44730431e3e07dfa44710a6ba7de7bc8de70f2b805d0c9a69ba7a9->enter($__internal_9727b2cffa44730431e3e07dfa44710a6ba7de7bc8de70f2b805d0c9a69ba7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9727b2cffa44730431e3e07dfa44710a6ba7de7bc8de70f2b805d0c9a69ba7a9->leave($__internal_9727b2cffa44730431e3e07dfa44710a6ba7de7bc8de70f2b805d0c9a69ba7a9_prof);

        
        $__internal_f47cf91e6962a71070849b5847a534f71cf1636aafeaa03b28b85e24e923f9c6->leave($__internal_f47cf91e6962a71070849b5847a534f71cf1636aafeaa03b28b85e24e923f9c6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49968f0c408f6d89fe04c168010b48894bfdcee8e687626148d6130ec10293c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49968f0c408f6d89fe04c168010b48894bfdcee8e687626148d6130ec10293c->enter($__internal_b49968f0c408f6d89fe04c168010b48894bfdcee8e687626148d6130ec10293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d7a44db88d63b26446670a0558059966a92ac50db07122e3f42c9426267d12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7a44db88d63b26446670a0558059966a92ac50db07122e3f42c9426267d12b->enter($__internal_6d7a44db88d63b26446670a0558059966a92ac50db07122e3f42c9426267d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6d7a44db88d63b26446670a0558059966a92ac50db07122e3f42c9426267d12b->leave($__internal_6d7a44db88d63b26446670a0558059966a92ac50db07122e3f42c9426267d12b_prof);

        
        $__internal_b49968f0c408f6d89fe04c168010b48894bfdcee8e687626148d6130ec10293c->leave($__internal_b49968f0c408f6d89fe04c168010b48894bfdcee8e687626148d6130ec10293c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "/home/pi/Innovation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
