<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_28d71bc6cad2fb2fec40c538037e815071fbf667935606728b3a6dfa05a28376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d71bc6cad2fb2fec40c538037e815071fbf667935606728b3a6dfa05a28376->enter($__internal_28d71bc6cad2fb2fec40c538037e815071fbf667935606728b3a6dfa05a28376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_69b7e627b5f525ee1038d2a5aaba6cc19a18069af50223c99a3d44c28b452152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b7e627b5f525ee1038d2a5aaba6cc19a18069af50223c99a3d44c28b452152->enter($__internal_69b7e627b5f525ee1038d2a5aaba6cc19a18069af50223c99a3d44c28b452152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_28d71bc6cad2fb2fec40c538037e815071fbf667935606728b3a6dfa05a28376->leave($__internal_28d71bc6cad2fb2fec40c538037e815071fbf667935606728b3a6dfa05a28376_prof);

        
        $__internal_69b7e627b5f525ee1038d2a5aaba6cc19a18069af50223c99a3d44c28b452152->leave($__internal_69b7e627b5f525ee1038d2a5aaba6cc19a18069af50223c99a3d44c28b452152_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52ccd0dbc8e048240eefedc0b17cc27dc2546c1244d5f37c9099aca30f702b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ccd0dbc8e048240eefedc0b17cc27dc2546c1244d5f37c9099aca30f702b57->enter($__internal_52ccd0dbc8e048240eefedc0b17cc27dc2546c1244d5f37c9099aca30f702b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e22b0b09321a44000bbc26e89a84bbb99fe1b7e621ca5e7c5c9daac9652f60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e22b0b09321a44000bbc26e89a84bbb99fe1b7e621ca5e7c5c9daac9652f60d->enter($__internal_5e22b0b09321a44000bbc26e89a84bbb99fe1b7e621ca5e7c5c9daac9652f60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5e22b0b09321a44000bbc26e89a84bbb99fe1b7e621ca5e7c5c9daac9652f60d->leave($__internal_5e22b0b09321a44000bbc26e89a84bbb99fe1b7e621ca5e7c5c9daac9652f60d_prof);

        
        $__internal_52ccd0dbc8e048240eefedc0b17cc27dc2546c1244d5f37c9099aca30f702b57->leave($__internal_52ccd0dbc8e048240eefedc0b17cc27dc2546c1244d5f37c9099aca30f702b57_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_040b339692933b96976a51dfdd846dcc54b96f1fa00cd1c9b4f78d48ea2b6f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040b339692933b96976a51dfdd846dcc54b96f1fa00cd1c9b4f78d48ea2b6f62->enter($__internal_040b339692933b96976a51dfdd846dcc54b96f1fa00cd1c9b4f78d48ea2b6f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd37509b123d8a0c79c08e7157b38e3c0adbfaebbd7579e07e430e79a846f220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd37509b123d8a0c79c08e7157b38e3c0adbfaebbd7579e07e430e79a846f220->enter($__internal_fd37509b123d8a0c79c08e7157b38e3c0adbfaebbd7579e07e430e79a846f220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fd37509b123d8a0c79c08e7157b38e3c0adbfaebbd7579e07e430e79a846f220->leave($__internal_fd37509b123d8a0c79c08e7157b38e3c0adbfaebbd7579e07e430e79a846f220_prof);

        
        $__internal_040b339692933b96976a51dfdd846dcc54b96f1fa00cd1c9b4f78d48ea2b6f62->leave($__internal_040b339692933b96976a51dfdd846dcc54b96f1fa00cd1c9b4f78d48ea2b6f62_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bf20d55eb84d0fc3131f4bec204374bb9e574ec99529c268a03f1fab078375b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf20d55eb84d0fc3131f4bec204374bb9e574ec99529c268a03f1fab078375b->enter($__internal_2bf20d55eb84d0fc3131f4bec204374bb9e574ec99529c268a03f1fab078375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_243075137384f46054b7e379dad76f2f36cc462e4f105a089ff93a7340ac77e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243075137384f46054b7e379dad76f2f36cc462e4f105a089ff93a7340ac77e6->enter($__internal_243075137384f46054b7e379dad76f2f36cc462e4f105a089ff93a7340ac77e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_243075137384f46054b7e379dad76f2f36cc462e4f105a089ff93a7340ac77e6->leave($__internal_243075137384f46054b7e379dad76f2f36cc462e4f105a089ff93a7340ac77e6_prof);

        
        $__internal_2bf20d55eb84d0fc3131f4bec204374bb9e574ec99529c268a03f1fab078375b->leave($__internal_2bf20d55eb84d0fc3131f4bec204374bb9e574ec99529c268a03f1fab078375b_prof);

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
", "@Twig/layout.html.twig", "/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
