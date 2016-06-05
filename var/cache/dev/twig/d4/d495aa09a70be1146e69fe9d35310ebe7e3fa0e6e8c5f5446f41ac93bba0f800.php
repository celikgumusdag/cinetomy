<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_4db8a6d8274b82e68ce8ec9e9d0732c12bc574bd315cfe6dde23be21a27c70e4 extends Twig_Template
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
        $__internal_f187a762265d1e844571030270c904e76df3cdb0e9d6ce15e71023e8cfe2b9ee = $this->env->getExtension("native_profiler");
        $__internal_f187a762265d1e844571030270c904e76df3cdb0e9d6ce15e71023e8cfe2b9ee->enter($__internal_f187a762265d1e844571030270c904e76df3cdb0e9d6ce15e71023e8cfe2b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f187a762265d1e844571030270c904e76df3cdb0e9d6ce15e71023e8cfe2b9ee->leave($__internal_f187a762265d1e844571030270c904e76df3cdb0e9d6ce15e71023e8cfe2b9ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
