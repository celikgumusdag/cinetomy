<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07c28caf737080fe505f68cc4999b380e107df067b6f71842dac7914ce07464b extends Twig_Template
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
        $__internal_f192390e06f20beef5b9f6a86d46c7200d50b58f8b26208efed68fe3b6f1655c = $this->env->getExtension("native_profiler");
        $__internal_f192390e06f20beef5b9f6a86d46c7200d50b58f8b26208efed68fe3b6f1655c->enter($__internal_f192390e06f20beef5b9f6a86d46c7200d50b58f8b26208efed68fe3b6f1655c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f192390e06f20beef5b9f6a86d46c7200d50b58f8b26208efed68fe3b6f1655c->leave($__internal_f192390e06f20beef5b9f6a86d46c7200d50b58f8b26208efed68fe3b6f1655c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
