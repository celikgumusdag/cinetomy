<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_91670ebbcc5e25258808e69919419b60813a1216bb20b0db069fc99fe40ca199 extends Twig_Template
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
        $__internal_e5a1b46890cc6d9a553df62daf99602273d456097c199c8187637d76c3c7ca4e = $this->env->getExtension("native_profiler");
        $__internal_e5a1b46890cc6d9a553df62daf99602273d456097c199c8187637d76c3c7ca4e->enter($__internal_e5a1b46890cc6d9a553df62daf99602273d456097c199c8187637d76c3c7ca4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e5a1b46890cc6d9a553df62daf99602273d456097c199c8187637d76c3c7ca4e->leave($__internal_e5a1b46890cc6d9a553df62daf99602273d456097c199c8187637d76c3c7ca4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
