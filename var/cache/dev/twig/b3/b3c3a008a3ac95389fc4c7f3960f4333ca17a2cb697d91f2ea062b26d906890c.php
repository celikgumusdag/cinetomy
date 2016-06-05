<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_25cca82e3c103e531bf270c9886ecf0d8275954d1a5677420d0fbbba1faeb00f extends Twig_Template
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
        $__internal_54b3433672d6fb8721b8a04a6934417b0be1cc919dbc4a993109f901eae8ddf6 = $this->env->getExtension("native_profiler");
        $__internal_54b3433672d6fb8721b8a04a6934417b0be1cc919dbc4a993109f901eae8ddf6->enter($__internal_54b3433672d6fb8721b8a04a6934417b0be1cc919dbc4a993109f901eae8ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_54b3433672d6fb8721b8a04a6934417b0be1cc919dbc4a993109f901eae8ddf6->leave($__internal_54b3433672d6fb8721b8a04a6934417b0be1cc919dbc4a993109f901eae8ddf6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
