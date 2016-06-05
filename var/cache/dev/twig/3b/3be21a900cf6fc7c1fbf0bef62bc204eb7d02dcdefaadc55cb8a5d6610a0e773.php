<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a0f79260a4ecd04149322510abbc5c2412ea654b081e5cad68945db34cedb5d4 extends Twig_Template
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
        $__internal_100850adc81f9fdbfa7bc5aed9b2b4b73f1c47bf28602d661c1786634377ad67 = $this->env->getExtension("native_profiler");
        $__internal_100850adc81f9fdbfa7bc5aed9b2b4b73f1c47bf28602d661c1786634377ad67->enter($__internal_100850adc81f9fdbfa7bc5aed9b2b4b73f1c47bf28602d661c1786634377ad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_100850adc81f9fdbfa7bc5aed9b2b4b73f1c47bf28602d661c1786634377ad67->leave($__internal_100850adc81f9fdbfa7bc5aed9b2b4b73f1c47bf28602d661c1786634377ad67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
