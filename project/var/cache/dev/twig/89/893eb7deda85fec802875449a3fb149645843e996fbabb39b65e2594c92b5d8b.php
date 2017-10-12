<?php

/* ReviewBundle:Category:Drones.html.twig */
class __TwigTemplate_2f09ead18d24321d1f6e9b7152f8b3e00cb0b3d8a1fcf49256c6e73b541b41cb extends Twig_Template
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
        $__internal_fed0937ebc75aeeba596a55b19e5d6ab156033b7f1f34d766f6fe056928b06c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed0937ebc75aeeba596a55b19e5d6ab156033b7f1f34d766f6fe056928b06c9->enter($__internal_fed0937ebc75aeeba596a55b19e5d6ab156033b7f1f34d766f6fe056928b06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Drones.html.twig"));

        $__internal_ad83b7068a36a4b57eaa2abe494e9bdba41d89cd705c25ad457d52924c5e72f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad83b7068a36a4b57eaa2abe494e9bdba41d89cd705c25ad457d52924c5e72f0->enter($__internal_ad83b7068a36a4b57eaa2abe494e9bdba41d89cd705c25ad457d52924c5e72f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Category:Drones.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Drones</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th>><img src=\"..\\drone.jpg\">Drone</th>
        <th><img src=\"Picture\\drone2.jpg\">Drone</th>
        <th>année</th>
        <th>test</th>
      </tr>



      <tr>

        <td id=acceuil><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("menu");
        echo "\">Acceuil</a></td>
        <td id=phone><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Phone");
        echo "\">Phone</a></td>
        <td id=pc><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("PC");
        echo "\">Pc</a></td>
        <td id=other><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Other");
        echo "\">Other</a></td>

      </tr>
    </table>

  </body>
</html>
";
        
        $__internal_fed0937ebc75aeeba596a55b19e5d6ab156033b7f1f34d766f6fe056928b06c9->leave($__internal_fed0937ebc75aeeba596a55b19e5d6ab156033b7f1f34d766f6fe056928b06c9_prof);

        
        $__internal_ad83b7068a36a4b57eaa2abe494e9bdba41d89cd705c25ad457d52924c5e72f0->leave($__internal_ad83b7068a36a4b57eaa2abe494e9bdba41d89cd705c25ad457d52924c5e72f0_prof);

    }

    public function getTemplateName()
    {
        return "ReviewBundle:Category:Drones.html.twig";
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
    <title>Drones</title>
  </head>
  <body>

    <table style=\"width:100%\">
      <tr>
        <th>><img src=\"..\\drone.jpg\">Drone</th>
        <th><img src=\"Picture\\drone2.jpg\">Drone</th>
        <th>année</th>
        <th>test</th>
      </tr>



      <tr>

        <td id=acceuil><a href=\"{{ path(\"menu\") }}\">Acceuil</a></td>
        <td id=phone><a href=\"{{ path(\"Phone\") }}\">Phone</a></td>
        <td id=pc><a href=\"{{ path(\"PC\") }}\">Pc</a></td>
        <td id=other><a href=\"{{ path(\"Other\") }}\">Other</a></td>

      </tr>
    </table>

  </body>
</html>
", "ReviewBundle:Category:Drones.html.twig", "/home/pi/Innovation/src/ReviewBundle/Resources/views/Category/Drones.html.twig");
    }
}
