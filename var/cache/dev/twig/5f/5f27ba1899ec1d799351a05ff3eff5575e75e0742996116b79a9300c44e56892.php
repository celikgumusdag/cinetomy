<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bc2d426e5f86cff3e0e43d86591c5c84a6b748b96f6495cc36403ba353ace461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65dc1bdcef5cf9d30e7983d40eaf928992ae193e35c227256d59bdcf5f00a26 = $this->env->getExtension("native_profiler");
        $__internal_b65dc1bdcef5cf9d30e7983d40eaf928992ae193e35c227256d59bdcf5f00a26->enter($__internal_b65dc1bdcef5cf9d30e7983d40eaf928992ae193e35c227256d59bdcf5f00a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b65dc1bdcef5cf9d30e7983d40eaf928992ae193e35c227256d59bdcf5f00a26->leave($__internal_b65dc1bdcef5cf9d30e7983d40eaf928992ae193e35c227256d59bdcf5f00a26_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_52fe99dbce8d481978b8bea9a3db74e95dce4651a3323b7fd034584ffe076301 = $this->env->getExtension("native_profiler");
        $__internal_52fe99dbce8d481978b8bea9a3db74e95dce4651a3323b7fd034584ffe076301->enter($__internal_52fe99dbce8d481978b8bea9a3db74e95dce4651a3323b7fd034584ffe076301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_52fe99dbce8d481978b8bea9a3db74e95dce4651a3323b7fd034584ffe076301->leave($__internal_52fe99dbce8d481978b8bea9a3db74e95dce4651a3323b7fd034584ffe076301_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
