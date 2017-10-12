<?php

/* ReviewBundle:Category:Phone.html.twig */
class __TwigTemplate_de863fbd811c576099f1c17354effb43fcc33530e22ca1e48a3e07c01e036de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a011f24d2370c8a1e38dcf206333bf158621cff02280586f3c9067ca01c8a603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a011f24d2370c8a1e38dcf206333bf158621cff02280586f3c9067ca01c8a603->enter($__internal_a011f24d2370c8a1e38dcf206333bf158621cff02280586f3c9067ca01c8a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Phone.html.twig"));

        $__internal_593f5f77c1740b40023fc2e3cdbe589c26fb72af6ab83a5ac70ccd1f911e8270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593f5f77c1740b40023fc2e3cdbe589c26fb72af6ab83a5ac70ccd1f911e8270->enter($__internal_593f5f77c1740b40023fc2e3cdbe589c26fb72af6ab83a5ac70ccd1f911e8270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Phone.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Phone</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th><img src=\"Picture\\samsung.jpg\">Samsung</th>
        <th><img src=\"Picture\\iphone.jpg\">Iphone/th>
        <th>année</th>
        <th>test</th>
      </tr>

      <tr>
        <h1>Produit et description</h1>
      </tr>

      <tr>

        <td id=acceuil><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("menu");
        echo "\">Acceuil</a></td>
        <td id=pc><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("PC");
        echo "\">Pc</a></td>
        <td id=drones><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Drone");
        echo "\">Drones</a></td>
        <td id=other><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Other");
        echo "\">Other</a></td>
      </tr>
    </table>

  </body>
</html>
";
        
        $__internal_a011f24d2370c8a1e38dcf206333bf158621cff02280586f3c9067ca01c8a603->leave($__internal_a011f24d2370c8a1e38dcf206333bf158621cff02280586f3c9067ca01c8a603_prof);

        
        $__internal_593f5f77c1740b40023fc2e3cdbe589c26fb72af6ab83a5ac70ccd1f911e8270->leave($__internal_593f5f77c1740b40023fc2e3cdbe589c26fb72af6ab83a5ac70ccd1f911e8270_prof);

    }

    public function getTemplateName()
    {
        return "ReviewBundle:Category:Phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  56 => 24,  52 => 23,  48 => 22,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Phone</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th><img src=\"Picture\\samsung.jpg\">Samsung</th>
        <th><img src=\"Picture\\iphone.jpg\">Iphone/th>
        <th>année</th>
        <th>test</th>
      </tr>

      <tr>
        <h1>Produit et description</h1>
      </tr>

      <tr>

        <td id=acceuil><a href=\"{{ path(\"menu\") }}\">Acceuil</a></td>
        <td id=pc><a href=\"{{ path(\"PC\") }}\">Pc</a></td>
        <td id=drones><a href=\"{{ path(\"Drone\") }}\">Drones</a></td>
        <td id=other><a href=\"{{ path(\"Other\") }}\">Other</a></td>
      </tr>
    </table>

  </body>
</html>
", "ReviewBundle:Category:Phone.html.twig", "/home/pi/Innovation/src/ReviewBundle/Resources/views/Category/Phone.html.twig");
    }
}
