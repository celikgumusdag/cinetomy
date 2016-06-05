<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5847c2affb1fc3139e0f7f335113ccf2f8b9504eaa3cbd3a615a50da4eb077e2 extends Twig_Template
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
        $__internal_4a3a0eb8c4091bd80ac4f63908b005cf847a9cd9800178ca8c9448a946ab4004 = $this->env->getExtension("native_profiler");
        $__internal_4a3a0eb8c4091bd80ac4f63908b005cf847a9cd9800178ca8c9448a946ab4004->enter($__internal_4a3a0eb8c4091bd80ac4f63908b005cf847a9cd9800178ca8c9448a946ab4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4a3a0eb8c4091bd80ac4f63908b005cf847a9cd9800178ca8c9448a946ab4004->leave($__internal_4a3a0eb8c4091bd80ac4f63908b005cf847a9cd9800178ca8c9448a946ab4004_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
