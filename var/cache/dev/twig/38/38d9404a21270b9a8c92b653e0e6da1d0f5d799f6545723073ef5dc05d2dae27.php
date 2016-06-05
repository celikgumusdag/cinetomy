<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_12ec0947adcefeec6a56cc12193e1c6806e407a7116888faf8ce14a4f6c239aa extends Twig_Template
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
        $__internal_3c25c9c60cb17013fc6f654586b52b08f00e4aa115ee264dc75c008a06d2303e = $this->env->getExtension("native_profiler");
        $__internal_3c25c9c60cb17013fc6f654586b52b08f00e4aa115ee264dc75c008a06d2303e->enter($__internal_3c25c9c60cb17013fc6f654586b52b08f00e4aa115ee264dc75c008a06d2303e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3c25c9c60cb17013fc6f654586b52b08f00e4aa115ee264dc75c008a06d2303e->leave($__internal_3c25c9c60cb17013fc6f654586b52b08f00e4aa115ee264dc75c008a06d2303e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
