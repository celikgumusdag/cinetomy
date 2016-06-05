<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f7bcbbfe3b978ec2d16ce2c7c184506998a32c3f7914690e28417107f27ac0dd extends Twig_Template
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
        $__internal_02667ec1eec999b4abe7054714c41c0fadfb074bf86aa3fcfdba18f472cae68a = $this->env->getExtension("native_profiler");
        $__internal_02667ec1eec999b4abe7054714c41c0fadfb074bf86aa3fcfdba18f472cae68a->enter($__internal_02667ec1eec999b4abe7054714c41c0fadfb074bf86aa3fcfdba18f472cae68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_02667ec1eec999b4abe7054714c41c0fadfb074bf86aa3fcfdba18f472cae68a->leave($__internal_02667ec1eec999b4abe7054714c41c0fadfb074bf86aa3fcfdba18f472cae68a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
