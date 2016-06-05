<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_99dcdd4c71d2ef1a26b78d3b4d07b1316fa7710e13838c22bd00d28de11626d2 extends Twig_Template
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
        $__internal_fa33c86436df9e5968a4eb710a1314abefc49820a39def159f374bde693e25e8 = $this->env->getExtension("native_profiler");
        $__internal_fa33c86436df9e5968a4eb710a1314abefc49820a39def159f374bde693e25e8->enter($__internal_fa33c86436df9e5968a4eb710a1314abefc49820a39def159f374bde693e25e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fa33c86436df9e5968a4eb710a1314abefc49820a39def159f374bde693e25e8->leave($__internal_fa33c86436df9e5968a4eb710a1314abefc49820a39def159f374bde693e25e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
