<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6e1e3aba01be7052388f1e44b1411d9d9aa2c799bacbd5badf4a18c9a38c4e3e extends Twig_Template
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
        $__internal_9a6ab0caf8a1cfcefdf35b5e8d48999ce638248b436b40e9fa0e35f9d980a808 = $this->env->getExtension("native_profiler");
        $__internal_9a6ab0caf8a1cfcefdf35b5e8d48999ce638248b436b40e9fa0e35f9d980a808->enter($__internal_9a6ab0caf8a1cfcefdf35b5e8d48999ce638248b436b40e9fa0e35f9d980a808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a6ab0caf8a1cfcefdf35b5e8d48999ce638248b436b40e9fa0e35f9d980a808->leave($__internal_9a6ab0caf8a1cfcefdf35b5e8d48999ce638248b436b40e9fa0e35f9d980a808_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
