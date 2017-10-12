<?php

/* ReviewBundle:Category:Pc.html.twig */
class __TwigTemplate_ebf264c92efa7b51ae359a18d31124aa19d2600ee56dc45520ad8e0047acf174 extends Twig_Template
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
        $__internal_df13b1be1e57aad61ea9a34d565e96132af3c144db1250e094f6a6b2c20b1381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df13b1be1e57aad61ea9a34d565e96132af3c144db1250e094f6a6b2c20b1381->enter($__internal_df13b1be1e57aad61ea9a34d565e96132af3c144db1250e094f6a6b2c20b1381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Pc.html.twig"));

        $__internal_8335ee5a01b7aa2da67a352ca75a66d931f8321663724aa19aa69053d3f1e808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8335ee5a01b7aa2da67a352ca75a66d931f8321663724aa19aa69053d3f1e808->enter($__internal_8335ee5a01b7aa2da67a352ca75a66d931f8321663724aa19aa69053d3f1e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Pc.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Pc</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th><img src=\"Picture\\pc.jpg\">Dell</th>
        <th><img src=\"Picture\\asus.jpg\">Asus</th>
        <th>année</th>
        <th>test</th>
      </tr>

      <tr>
        <h1>Produit et description</h1>
      </tr>

      <tr>
        <td id=phone><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Phone");
        echo "\">Phone</a></td>
        <td id=drones><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Drone");
        echo "\">Drones</a></td>
        <td id=other><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Other");
        echo "\">Other</a></td>
        <td id=acceuil><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("menu");
        echo "\">Acceuil</a></td>

      </tr>
    </table>

  </body>
</html>
";
        
        $__internal_df13b1be1e57aad61ea9a34d565e96132af3c144db1250e094f6a6b2c20b1381->leave($__internal_df13b1be1e57aad61ea9a34d565e96132af3c144db1250e094f6a6b2c20b1381_prof);

        
        $__internal_8335ee5a01b7aa2da67a352ca75a66d931f8321663724aa19aa69053d3f1e808->leave($__internal_8335ee5a01b7aa2da67a352ca75a66d931f8321663724aa19aa69053d3f1e808_prof);

    }

    public function getTemplateName()
    {
        return "ReviewBundle:Category:Pc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  55 => 23,  51 => 22,  47 => 21,  25 => 1,);
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
    <title>Pc</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th><img src=\"Picture\\pc.jpg\">Dell</th>
        <th><img src=\"Picture\\asus.jpg\">Asus</th>
        <th>année</th>
        <th>test</th>
      </tr>

      <tr>
        <h1>Produit et description</h1>
      </tr>

      <tr>
        <td id=phone><a href=\"{{ path(\"Phone\") }}\">Phone</a></td>
        <td id=drones><a href=\"{{ path(\"Drone\") }}\">Drones</a></td>
        <td id=other><a href=\"{{ path(\"Other\") }}\">Other</a></td>
        <td id=acceuil><a href=\"{{ path(\"menu\") }}\">Acceuil</a></td>

      </tr>
    </table>

  </body>
</html>
", "ReviewBundle:Category:Pc.html.twig", "/home/pi/Innovation/src/ReviewBundle/Resources/views/Category/Pc.html.twig");
    }
}
