<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_cd2ddcbf8fe13f3fd4d1677a3e8127ffa39c0cc2878841ef796ad323a4fbfc53 extends Twig_Template
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
        $__internal_f29cbca81f4ddf582c68517866a1a9106a71643a40b0581bfbced15bf9bd87a4 = $this->env->getExtension("native_profiler");
        $__internal_f29cbca81f4ddf582c68517866a1a9106a71643a40b0581bfbced15bf9bd87a4->enter($__internal_f29cbca81f4ddf582c68517866a1a9106a71643a40b0581bfbced15bf9bd87a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f29cbca81f4ddf582c68517866a1a9106a71643a40b0581bfbced15bf9bd87a4->leave($__internal_f29cbca81f4ddf582c68517866a1a9106a71643a40b0581bfbced15bf9bd87a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
