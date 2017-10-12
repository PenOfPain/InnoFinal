<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_66e7e75ec9c0010641dbe585aeeac70571ef1f0833e1a7882f58c23aa7e6cdbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65bc4166a994ff38ec75c22c5b601d61300b8ce0384131c29628585ef60fd250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc4166a994ff38ec75c22c5b601d61300b8ce0384131c29628585ef60fd250->enter($__internal_65bc4166a994ff38ec75c22c5b601d61300b8ce0384131c29628585ef60fd250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bba06903a2212f2ed74da2c49a0f1364785c73d8e31a3fdd4ca00f824da0d469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba06903a2212f2ed74da2c49a0f1364785c73d8e31a3fdd4ca00f824da0d469->enter($__internal_bba06903a2212f2ed74da2c49a0f1364785c73d8e31a3fdd4ca00f824da0d469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_65bc4166a994ff38ec75c22c5b601d61300b8ce0384131c29628585ef60fd250->leave($__internal_65bc4166a994ff38ec75c22c5b601d61300b8ce0384131c29628585ef60fd250_prof);

        
        $__internal_bba06903a2212f2ed74da2c49a0f1364785c73d8e31a3fdd4ca00f824da0d469->leave($__internal_bba06903a2212f2ed74da2c49a0f1364785c73d8e31a3fdd4ca00f824da0d469_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a302aba5a68cc75cdbf226bace7576379616c6f507de7f926e0e9447f0a64c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a302aba5a68cc75cdbf226bace7576379616c6f507de7f926e0e9447f0a64c68->enter($__internal_a302aba5a68cc75cdbf226bace7576379616c6f507de7f926e0e9447f0a64c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf7d143891d510ef57ffb6b1a974b863d9d34aa08ac45f15cd6478c38871d1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7d143891d510ef57ffb6b1a974b863d9d34aa08ac45f15cd6478c38871d1c8->enter($__internal_bf7d143891d510ef57ffb6b1a974b863d9d34aa08ac45f15cd6478c38871d1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bf7d143891d510ef57ffb6b1a974b863d9d34aa08ac45f15cd6478c38871d1c8->leave($__internal_bf7d143891d510ef57ffb6b1a974b863d9d34aa08ac45f15cd6478c38871d1c8_prof);

        
        $__internal_a302aba5a68cc75cdbf226bace7576379616c6f507de7f926e0e9447f0a64c68->leave($__internal_a302aba5a68cc75cdbf226bace7576379616c6f507de7f926e0e9447f0a64c68_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f78a7481d09537cf6317338d5a1a1aa66df2d0bf96f271c02768ee93746caf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78a7481d09537cf6317338d5a1a1aa66df2d0bf96f271c02768ee93746caf92->enter($__internal_f78a7481d09537cf6317338d5a1a1aa66df2d0bf96f271c02768ee93746caf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a99171c8b8ac5ddeb1395cef5f0284c8aa7abd53cad6154f65f105003e35ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a99171c8b8ac5ddeb1395cef5f0284c8aa7abd53cad6154f65f105003e35ca8->enter($__internal_9a99171c8b8ac5ddeb1395cef5f0284c8aa7abd53cad6154f65f105003e35ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9a99171c8b8ac5ddeb1395cef5f0284c8aa7abd53cad6154f65f105003e35ca8->leave($__internal_9a99171c8b8ac5ddeb1395cef5f0284c8aa7abd53cad6154f65f105003e35ca8_prof);

        
        $__internal_f78a7481d09537cf6317338d5a1a1aa66df2d0bf96f271c02768ee93746caf92->leave($__internal_f78a7481d09537cf6317338d5a1a1aa66df2d0bf96f271c02768ee93746caf92_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c349970faa1cafc1d129df6c5ee4fcc4a5544493dce818dedef10f2ee91bcc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c349970faa1cafc1d129df6c5ee4fcc4a5544493dce818dedef10f2ee91bcc4a->enter($__internal_c349970faa1cafc1d129df6c5ee4fcc4a5544493dce818dedef10f2ee91bcc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05d49f5a316e34220aabf22c049d797176c62c1130ae25c962263dc176325f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d49f5a316e34220aabf22c049d797176c62c1130ae25c962263dc176325f06->enter($__internal_05d49f5a316e34220aabf22c049d797176c62c1130ae25c962263dc176325f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05d49f5a316e34220aabf22c049d797176c62c1130ae25c962263dc176325f06->leave($__internal_05d49f5a316e34220aabf22c049d797176c62c1130ae25c962263dc176325f06_prof);

        
        $__internal_c349970faa1cafc1d129df6c5ee4fcc4a5544493dce818dedef10f2ee91bcc4a->leave($__internal_c349970faa1cafc1d129df6c5ee4fcc4a5544493dce818dedef10f2ee91bcc4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/pi/Innovation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
