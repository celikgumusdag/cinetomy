<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bdd010664a502d4b369981ada8d0b2288a79e4081e7ce7a34646a5d112bf590c extends Twig_Template
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
        $__internal_798528c17263b5041df23f39a92b94e6e92071f6397b3a9d9ee23e4c1bfd87dc = $this->env->getExtension("native_profiler");
        $__internal_798528c17263b5041df23f39a92b94e6e92071f6397b3a9d9ee23e4c1bfd87dc->enter($__internal_798528c17263b5041df23f39a92b94e6e92071f6397b3a9d9ee23e4c1bfd87dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_798528c17263b5041df23f39a92b94e6e92071f6397b3a9d9ee23e4c1bfd87dc->leave($__internal_798528c17263b5041df23f39a92b94e6e92071f6397b3a9d9ee23e4c1bfd87dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
