<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_05e90c391ca97e3718c4b2fa552c12ab9e7f997c719e1b018d1771bfaaec0c02 extends Twig_Template
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
        $__internal_1cd07bb18fce48164814d92c518066bda8e2a9b8420bffc500724704fa740086 = $this->env->getExtension("native_profiler");
        $__internal_1cd07bb18fce48164814d92c518066bda8e2a9b8420bffc500724704fa740086->enter($__internal_1cd07bb18fce48164814d92c518066bda8e2a9b8420bffc500724704fa740086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1cd07bb18fce48164814d92c518066bda8e2a9b8420bffc500724704fa740086->leave($__internal_1cd07bb18fce48164814d92c518066bda8e2a9b8420bffc500724704fa740086_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
