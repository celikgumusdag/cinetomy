<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_65af3f0116f22f382183de2eaa6b6154878c1045217b286be7728fca5e590a2e extends Twig_Template
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
        $__internal_6a844c917c7d4b9cca5a1bb5f8946c29cb66b7f67b842729888c19e37b85504e = $this->env->getExtension("native_profiler");
        $__internal_6a844c917c7d4b9cca5a1bb5f8946c29cb66b7f67b842729888c19e37b85504e->enter($__internal_6a844c917c7d4b9cca5a1bb5f8946c29cb66b7f67b842729888c19e37b85504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_6a844c917c7d4b9cca5a1bb5f8946c29cb66b7f67b842729888c19e37b85504e->leave($__internal_6a844c917c7d4b9cca5a1bb5f8946c29cb66b7f67b842729888c19e37b85504e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
