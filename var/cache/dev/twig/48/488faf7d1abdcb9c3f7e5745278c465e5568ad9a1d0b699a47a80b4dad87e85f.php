<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ba965484ea4c3ad9f0d01d1a84ee095923de46f3fb68eb748b0b87e49661d06c extends Twig_Template
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
        $__internal_36693effac1b6881b61391d881edde9730376c56f55e139852830af1458272df = $this->env->getExtension("native_profiler");
        $__internal_36693effac1b6881b61391d881edde9730376c56f55e139852830af1458272df->enter($__internal_36693effac1b6881b61391d881edde9730376c56f55e139852830af1458272df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_36693effac1b6881b61391d881edde9730376c56f55e139852830af1458272df->leave($__internal_36693effac1b6881b61391d881edde9730376c56f55e139852830af1458272df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
