<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cb755ce55dce638dd19651ccc8d105e6530aa95b3174e689beeaf8b1e128d7e5 extends Twig_Template
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
        $__internal_0f00fa887afe24c7199382d140dd71a313019ae0606cfbadbaa7a14ecb978a96 = $this->env->getExtension("native_profiler");
        $__internal_0f00fa887afe24c7199382d140dd71a313019ae0606cfbadbaa7a14ecb978a96->enter($__internal_0f00fa887afe24c7199382d140dd71a313019ae0606cfbadbaa7a14ecb978a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0f00fa887afe24c7199382d140dd71a313019ae0606cfbadbaa7a14ecb978a96->leave($__internal_0f00fa887afe24c7199382d140dd71a313019ae0606cfbadbaa7a14ecb978a96_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
