<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_df30803c53c705af90cc6daef821364019f24884c3ec5ade9ceb922441ccd152 extends Twig_Template
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
        $__internal_e35856f750fffc4cf8ed235a7519bf51d5a4bd4311e84396f43bc498a82df5ce = $this->env->getExtension("native_profiler");
        $__internal_e35856f750fffc4cf8ed235a7519bf51d5a4bd4311e84396f43bc498a82df5ce->enter($__internal_e35856f750fffc4cf8ed235a7519bf51d5a4bd4311e84396f43bc498a82df5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e35856f750fffc4cf8ed235a7519bf51d5a4bd4311e84396f43bc498a82df5ce->leave($__internal_e35856f750fffc4cf8ed235a7519bf51d5a4bd4311e84396f43bc498a82df5ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
