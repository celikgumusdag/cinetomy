<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0608d11d4b5ec7f709afd59658150f028f55a5bb240ba4e01bd370dc042a46ad extends Twig_Template
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
        $__internal_630d60a035b680bce8eaf3443137d1a1ad3a596752a0528d0cc6bc36f899e997 = $this->env->getExtension("native_profiler");
        $__internal_630d60a035b680bce8eaf3443137d1a1ad3a596752a0528d0cc6bc36f899e997->enter($__internal_630d60a035b680bce8eaf3443137d1a1ad3a596752a0528d0cc6bc36f899e997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_630d60a035b680bce8eaf3443137d1a1ad3a596752a0528d0cc6bc36f899e997->leave($__internal_630d60a035b680bce8eaf3443137d1a1ad3a596752a0528d0cc6bc36f899e997_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
