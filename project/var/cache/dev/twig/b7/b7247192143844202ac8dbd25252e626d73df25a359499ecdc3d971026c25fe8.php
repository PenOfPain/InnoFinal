<?php

/* base.html.twig */
class __TwigTemplate_022e5fbe7553c6a016dcf07c24e69cb5d15b6be45fa6378c7d9809f11e8f699d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a41fdffaac5d403ed7b7e6d9206bddeb03aa5e740ce52631b7f271a505b420e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a41fdffaac5d403ed7b7e6d9206bddeb03aa5e740ce52631b7f271a505b420e->enter($__internal_6a41fdffaac5d403ed7b7e6d9206bddeb03aa5e740ce52631b7f271a505b420e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b64dcdb689682ca28bdc6e9f14abb209fe3d60d2f055a1bb0269267c32e66551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64dcdb689682ca28bdc6e9f14abb209fe3d60d2f055a1bb0269267c32e66551->enter($__internal_b64dcdb689682ca28bdc6e9f14abb209fe3d60d2f055a1bb0269267c32e66551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6a41fdffaac5d403ed7b7e6d9206bddeb03aa5e740ce52631b7f271a505b420e->leave($__internal_6a41fdffaac5d403ed7b7e6d9206bddeb03aa5e740ce52631b7f271a505b420e_prof);

        
        $__internal_b64dcdb689682ca28bdc6e9f14abb209fe3d60d2f055a1bb0269267c32e66551->leave($__internal_b64dcdb689682ca28bdc6e9f14abb209fe3d60d2f055a1bb0269267c32e66551_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c1e74b3c723a0ee3f95603fd53e123ab61ec295c23817cca28f05cc13f403b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c1e74b3c723a0ee3f95603fd53e123ab61ec295c23817cca28f05cc13f403b->enter($__internal_89c1e74b3c723a0ee3f95603fd53e123ab61ec295c23817cca28f05cc13f403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98475cc6ad07bac9d76969b7192b1dc406a5a80304c49f29fa27f29f754489d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98475cc6ad07bac9d76969b7192b1dc406a5a80304c49f29fa27f29f754489d9->enter($__internal_98475cc6ad07bac9d76969b7192b1dc406a5a80304c49f29fa27f29f754489d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98475cc6ad07bac9d76969b7192b1dc406a5a80304c49f29fa27f29f754489d9->leave($__internal_98475cc6ad07bac9d76969b7192b1dc406a5a80304c49f29fa27f29f754489d9_prof);

        
        $__internal_89c1e74b3c723a0ee3f95603fd53e123ab61ec295c23817cca28f05cc13f403b->leave($__internal_89c1e74b3c723a0ee3f95603fd53e123ab61ec295c23817cca28f05cc13f403b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d49d5e5a0513bbcc27501715003e80fe45c27107c8563157cc78ef096244e3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49d5e5a0513bbcc27501715003e80fe45c27107c8563157cc78ef096244e3c7->enter($__internal_d49d5e5a0513bbcc27501715003e80fe45c27107c8563157cc78ef096244e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03300b0d318cc56644e866bab37ae4ea28790dbfc2d1bdacc2ee56f0dc0d0ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03300b0d318cc56644e866bab37ae4ea28790dbfc2d1bdacc2ee56f0dc0d0ab8->enter($__internal_03300b0d318cc56644e866bab37ae4ea28790dbfc2d1bdacc2ee56f0dc0d0ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_03300b0d318cc56644e866bab37ae4ea28790dbfc2d1bdacc2ee56f0dc0d0ab8->leave($__internal_03300b0d318cc56644e866bab37ae4ea28790dbfc2d1bdacc2ee56f0dc0d0ab8_prof);

        
        $__internal_d49d5e5a0513bbcc27501715003e80fe45c27107c8563157cc78ef096244e3c7->leave($__internal_d49d5e5a0513bbcc27501715003e80fe45c27107c8563157cc78ef096244e3c7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50284414ea922ec8ec7ad066c589afa66c2f7cb844b5601cc69f283a5fd8d711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50284414ea922ec8ec7ad066c589afa66c2f7cb844b5601cc69f283a5fd8d711->enter($__internal_50284414ea922ec8ec7ad066c589afa66c2f7cb844b5601cc69f283a5fd8d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12e678093e1f5dd6e1449919e7fe4a701978f3164a53f19cbac07ca006c68740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e678093e1f5dd6e1449919e7fe4a701978f3164a53f19cbac07ca006c68740->enter($__internal_12e678093e1f5dd6e1449919e7fe4a701978f3164a53f19cbac07ca006c68740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12e678093e1f5dd6e1449919e7fe4a701978f3164a53f19cbac07ca006c68740->leave($__internal_12e678093e1f5dd6e1449919e7fe4a701978f3164a53f19cbac07ca006c68740_prof);

        
        $__internal_50284414ea922ec8ec7ad066c589afa66c2f7cb844b5601cc69f283a5fd8d711->leave($__internal_50284414ea922ec8ec7ad066c589afa66c2f7cb844b5601cc69f283a5fd8d711_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_030845edb043dec4c9e631ff634fac818d87db53471ad7b56bcf884ea06f2840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030845edb043dec4c9e631ff634fac818d87db53471ad7b56bcf884ea06f2840->enter($__internal_030845edb043dec4c9e631ff634fac818d87db53471ad7b56bcf884ea06f2840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6dcee8186f14982c30e6035f8e403a07151f9595c723a82fc99e90df1f28d52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcee8186f14982c30e6035f8e403a07151f9595c723a82fc99e90df1f28d52b->enter($__internal_6dcee8186f14982c30e6035f8e403a07151f9595c723a82fc99e90df1f28d52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6dcee8186f14982c30e6035f8e403a07151f9595c723a82fc99e90df1f28d52b->leave($__internal_6dcee8186f14982c30e6035f8e403a07151f9595c723a82fc99e90df1f28d52b_prof);

        
        $__internal_030845edb043dec4c9e631ff634fac818d87db53471ad7b56bcf884ea06f2840->leave($__internal_030845edb043dec4c9e631ff634fac818d87db53471ad7b56bcf884ea06f2840_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/pi/Innovation/app/Resources/views/base.html.twig");
    }
}
