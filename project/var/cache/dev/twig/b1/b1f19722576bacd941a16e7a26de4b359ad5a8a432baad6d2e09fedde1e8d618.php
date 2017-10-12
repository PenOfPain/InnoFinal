<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_4d378a98a269640a77e0babecf123ac07951ad57dee833f459b3488274705f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d378a98a269640a77e0babecf123ac07951ad57dee833f459b3488274705f35->enter($__internal_4d378a98a269640a77e0babecf123ac07951ad57dee833f459b3488274705f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_47ede3795230e302cd0579af02a51d4c2bcbe556f9658810e1f0830ebb852a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ede3795230e302cd0579af02a51d4c2bcbe556f9658810e1f0830ebb852a7b->enter($__internal_47ede3795230e302cd0579af02a51d4c2bcbe556f9658810e1f0830ebb852a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4d378a98a269640a77e0babecf123ac07951ad57dee833f459b3488274705f35->leave($__internal_4d378a98a269640a77e0babecf123ac07951ad57dee833f459b3488274705f35_prof);

        
        $__internal_47ede3795230e302cd0579af02a51d4c2bcbe556f9658810e1f0830ebb852a7b->leave($__internal_47ede3795230e302cd0579af02a51d4c2bcbe556f9658810e1f0830ebb852a7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d39800c04fcbda283a27283abcd5bc57d88afa90f8b8db0799e735bc571af7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39800c04fcbda283a27283abcd5bc57d88afa90f8b8db0799e735bc571af7d7->enter($__internal_d39800c04fcbda283a27283abcd5bc57d88afa90f8b8db0799e735bc571af7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6952e4830193b106ab9c8d5de871dcf952e88db284e93e62b27b77e943425dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6952e4830193b106ab9c8d5de871dcf952e88db284e93e62b27b77e943425dad->enter($__internal_6952e4830193b106ab9c8d5de871dcf952e88db284e93e62b27b77e943425dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6952e4830193b106ab9c8d5de871dcf952e88db284e93e62b27b77e943425dad->leave($__internal_6952e4830193b106ab9c8d5de871dcf952e88db284e93e62b27b77e943425dad_prof);

        
        $__internal_d39800c04fcbda283a27283abcd5bc57d88afa90f8b8db0799e735bc571af7d7->leave($__internal_d39800c04fcbda283a27283abcd5bc57d88afa90f8b8db0799e735bc571af7d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_981f8353e86a867a991584250ee502aa7e1919b6f127b43f6efbe479e5863644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981f8353e86a867a991584250ee502aa7e1919b6f127b43f6efbe479e5863644->enter($__internal_981f8353e86a867a991584250ee502aa7e1919b6f127b43f6efbe479e5863644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_48f0e53d322c869b165d64c5ce85684647cf0cec901b6d82ad302cadc150da5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f0e53d322c869b165d64c5ce85684647cf0cec901b6d82ad302cadc150da5c->enter($__internal_48f0e53d322c869b165d64c5ce85684647cf0cec901b6d82ad302cadc150da5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48f0e53d322c869b165d64c5ce85684647cf0cec901b6d82ad302cadc150da5c->leave($__internal_48f0e53d322c869b165d64c5ce85684647cf0cec901b6d82ad302cadc150da5c_prof);

        
        $__internal_981f8353e86a867a991584250ee502aa7e1919b6f127b43f6efbe479e5863644->leave($__internal_981f8353e86a867a991584250ee502aa7e1919b6f127b43f6efbe479e5863644_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_476293a23fe6f03bc86b5e335e350cdb7cd8a11d51eb4a58a204d5c3b631947d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476293a23fe6f03bc86b5e335e350cdb7cd8a11d51eb4a58a204d5c3b631947d->enter($__internal_476293a23fe6f03bc86b5e335e350cdb7cd8a11d51eb4a58a204d5c3b631947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05df3e1ce92c22aafdda224205ee1f387960ce12a5289c57ec5f372785756091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05df3e1ce92c22aafdda224205ee1f387960ce12a5289c57ec5f372785756091->enter($__internal_05df3e1ce92c22aafdda224205ee1f387960ce12a5289c57ec5f372785756091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05df3e1ce92c22aafdda224205ee1f387960ce12a5289c57ec5f372785756091->leave($__internal_05df3e1ce92c22aafdda224205ee1f387960ce12a5289c57ec5f372785756091_prof);

        
        $__internal_476293a23fe6f03bc86b5e335e350cdb7cd8a11d51eb4a58a204d5c3b631947d->leave($__internal_476293a23fe6f03bc86b5e335e350cdb7cd8a11d51eb4a58a204d5c3b631947d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da578ea4b471487404b8aeab2dfeb4c5d00d9f60c7ceaf279ca2c4bda836bf32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da578ea4b471487404b8aeab2dfeb4c5d00d9f60c7ceaf279ca2c4bda836bf32->enter($__internal_da578ea4b471487404b8aeab2dfeb4c5d00d9f60c7ceaf279ca2c4bda836bf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ccd04e74d9ffbbed6ecaa7d867ea37c934e54a924056915c9e589ce94439a11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd04e74d9ffbbed6ecaa7d867ea37c934e54a924056915c9e589ce94439a11b->enter($__internal_ccd04e74d9ffbbed6ecaa7d867ea37c934e54a924056915c9e589ce94439a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccd04e74d9ffbbed6ecaa7d867ea37c934e54a924056915c9e589ce94439a11b->leave($__internal_ccd04e74d9ffbbed6ecaa7d867ea37c934e54a924056915c9e589ce94439a11b_prof);

        
        $__internal_da578ea4b471487404b8aeab2dfeb4c5d00d9f60c7ceaf279ca2c4bda836bf32->leave($__internal_da578ea4b471487404b8aeab2dfeb4c5d00d9f60c7ceaf279ca2c4bda836bf32_prof);

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
", "base.html.twig", "/vagrant/project/app/Resources/views/base.html.twig");
    }
}
