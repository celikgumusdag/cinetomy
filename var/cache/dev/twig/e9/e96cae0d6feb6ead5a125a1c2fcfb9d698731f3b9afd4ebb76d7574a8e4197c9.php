<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_78583d5f02a320f88dc459170b2236c3de8ab77cb530a4b134ee9d5864503e9b extends Twig_Template
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
        $__internal_9212f2dfdd5db1083aa09f44ae21bb9f92d6f6df0b287306b0535576bfd97825 = $this->env->getExtension("native_profiler");
        $__internal_9212f2dfdd5db1083aa09f44ae21bb9f92d6f6df0b287306b0535576bfd97825->enter($__internal_9212f2dfdd5db1083aa09f44ae21bb9f92d6f6df0b287306b0535576bfd97825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9212f2dfdd5db1083aa09f44ae21bb9f92d6f6df0b287306b0535576bfd97825->leave($__internal_9212f2dfdd5db1083aa09f44ae21bb9f92d6f6df0b287306b0535576bfd97825_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
