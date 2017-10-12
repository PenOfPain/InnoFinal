<?php

/* ReviewBundle:Category:categoryList.html.twig */
class __TwigTemplate_45191966beab4c1d84b5c52efafa9a1a0c554146493923bcafebbedda64f3f22 extends Twig_Template
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
        $__internal_83337f678bfe5f20698675d7df192401b10b7bf6266a2ea5f46f2b56b898dbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83337f678bfe5f20698675d7df192401b10b7bf6266a2ea5f46f2b56b898dbf8->enter($__internal_83337f678bfe5f20698675d7df192401b10b7bf6266a2ea5f46f2b56b898dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:categoryList.html.twig"));

        $__internal_1daa91e825aa30c9d8060e530dfd3f446ccb5d1e299c8ee89eb1440a8e1f28c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1daa91e825aa30c9d8060e530dfd3f446ccb5d1e299c8ee89eb1440a8e1f28c6->enter($__internal_1daa91e825aa30c9d8060e530dfd3f446ccb5d1e299c8ee89eb1440a8e1f28c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:categoryList.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Acceuil cate</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th>price</th>
          <ul> <th>marque</th></ul>
        <th>année</th>
        <th>test</th>
      </tr>




      <tr>
        <td id=phone><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Phone");
        echo "\">Phone</a></td>
        <td id=pc><br><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("PC");
        echo "\">Pc</a></td>
        <td id=drones><br><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Drone");
        echo "\">Drones</a></td>
        <td id=other><br><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Other");
        echo "\">Other</a></td>
      </tr>

    </table>

  </body>
</html>
";
        
        $__internal_83337f678bfe5f20698675d7df192401b10b7bf6266a2ea5f46f2b56b898dbf8->leave($__internal_83337f678bfe5f20698675d7df192401b10b7bf6266a2ea5f46f2b56b898dbf8_prof);

        
        $__internal_1daa91e825aa30c9d8060e530dfd3f446ccb5d1e299c8ee89eb1440a8e1f28c6->leave($__internal_1daa91e825aa30c9d8060e530dfd3f446ccb5d1e299c8ee89eb1440a8e1f28c6_prof);

    }

    public function getTemplateName()
    {
        return "ReviewBundle:Category:categoryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  54 => 22,  50 => 21,  46 => 20,  25 => 1,);
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
    <title>Acceuil cate</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th>price</th>
          <ul> <th>marque</th></ul>
        <th>année</th>
        <th>test</th>
      </tr>




      <tr>
        <td id=phone><a href=\"{{ path(\"Phone\") }}\">Phone</a></td>
        <td id=pc><br><a href=\"{{ path(\"PC\") }}\">Pc</a></td>
        <td id=drones><br><a href=\"{{ path(\"Drone\") }}\">Drones</a></td>
        <td id=other><br><a href=\"{{ path(\"Other\") }}\">Other</a></td>
      </tr>

    </table>

  </body>
</html>
", "ReviewBundle:Category:categoryList.html.twig", "/home/pi/Innovation/src/ReviewBundle/Resources/views/Category/categoryList.html.twig");
    }
}
