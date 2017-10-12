<?php

/* ReviewBundle:Category:Other.html.twig */
class __TwigTemplate_f38bd38fdbe6e4e91e3f349f65eddcdf9e8d5fada0366d9f869f4d078b85f42b extends Twig_Template
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
        $__internal_8b29e0bfbcdcd78a358a86d6d1d732fe274f3c2a18d0444f6b51567b3f2aa00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b29e0bfbcdcd78a358a86d6d1d732fe274f3c2a18d0444f6b51567b3f2aa00d->enter($__internal_8b29e0bfbcdcd78a358a86d6d1d732fe274f3c2a18d0444f6b51567b3f2aa00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Other.html.twig"));

        $__internal_bacd724a27e32033213e14d165468ae0c6e27c3e1bbafe2f4e2fccbb666b701d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacd724a27e32033213e14d165468ae0c6e27c3e1bbafe2f4e2fccbb666b701d->enter($__internal_bacd724a27e32033213e14d165468ae0c6e27c3e1bbafe2f4e2fccbb666b701d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Other.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Other</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th>price</th>
        <th>marque</th>
        <th>année</th>
        <th>test</th>
      </tr>



      <tr>


        <td id=phone><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Phone");
        echo "\">Phone</a></td>
        <td id=pc><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("PC");
        echo "\">Pc</a></td>
        <td id=drones><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Drone");
        echo "\">Drones</a></td>
        <td id=acceuil><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("menu");
        echo "\">Acceuil</a></td>

      </tr>
    </table>

  </body>
</html>
";
        
        $__internal_8b29e0bfbcdcd78a358a86d6d1d732fe274f3c2a18d0444f6b51567b3f2aa00d->leave($__internal_8b29e0bfbcdcd78a358a86d6d1d732fe274f3c2a18d0444f6b51567b3f2aa00d_prof);

        
        $__internal_bacd724a27e32033213e14d165468ae0c6e27c3e1bbafe2f4e2fccbb666b701d->leave($__internal_bacd724a27e32033213e14d165468ae0c6e27c3e1bbafe2f4e2fccbb666b701d_prof);

    }

    public function getTemplateName()
    {
        return "ReviewBundle:Category:Other.html.twig";
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
    <title>Other</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th>price</th>
        <th>marque</th>
        <th>année</th>
        <th>test</th>
      </tr>



      <tr>


        <td id=phone><a href=\"{{ path(\"Phone\") }}\">Phone</a></td>
        <td id=pc><a href=\"{{ path(\"PC\") }}\">Pc</a></td>
        <td id=drones><a href=\"{{ path(\"Drone\") }}\">Drones</a></td>
        <td id=acceuil><a href=\"{{ path(\"menu\") }}\">Acceuil</a></td>

      </tr>
    </table>

  </body>
</html>
", "ReviewBundle:Category:Other.html.twig", "/home/pi/Innovation/src/ReviewBundle/Resources/views/Category/Other.html.twig");
    }
}
