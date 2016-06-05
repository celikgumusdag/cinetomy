<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d2f73e31d6febae799ee39f7693fcc59e0b2882ab34323ef590a252bc8d9695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be26b42e14c6c5ae57cb1c2c1857d6064588bded52de7b742f7b4a35feedd99 = $this->env->getExtension("native_profiler");
        $__internal_9be26b42e14c6c5ae57cb1c2c1857d6064588bded52de7b742f7b4a35feedd99->enter($__internal_9be26b42e14c6c5ae57cb1c2c1857d6064588bded52de7b742f7b4a35feedd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be26b42e14c6c5ae57cb1c2c1857d6064588bded52de7b742f7b4a35feedd99->leave($__internal_9be26b42e14c6c5ae57cb1c2c1857d6064588bded52de7b742f7b4a35feedd99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d660a50d5340878a2fa547b6931a6b86b88bef9f35c8e3f02051c92c8cc1987 = $this->env->getExtension("native_profiler");
        $__internal_1d660a50d5340878a2fa547b6931a6b86b88bef9f35c8e3f02051c92c8cc1987->enter($__internal_1d660a50d5340878a2fa547b6931a6b86b88bef9f35c8e3f02051c92c8cc1987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d660a50d5340878a2fa547b6931a6b86b88bef9f35c8e3f02051c92c8cc1987->leave($__internal_1d660a50d5340878a2fa547b6931a6b86b88bef9f35c8e3f02051c92c8cc1987_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_590bd3b3b3d3375a97619babbe8f4268f80ce9fc414309e21efe93f81548b907 = $this->env->getExtension("native_profiler");
        $__internal_590bd3b3b3d3375a97619babbe8f4268f80ce9fc414309e21efe93f81548b907->enter($__internal_590bd3b3b3d3375a97619babbe8f4268f80ce9fc414309e21efe93f81548b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_590bd3b3b3d3375a97619babbe8f4268f80ce9fc414309e21efe93f81548b907->leave($__internal_590bd3b3b3d3375a97619babbe8f4268f80ce9fc414309e21efe93f81548b907_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5d928f3e90b6231f802335efba760140d094339c5ab9f0d7e3de3a986138108 = $this->env->getExtension("native_profiler");
        $__internal_b5d928f3e90b6231f802335efba760140d094339c5ab9f0d7e3de3a986138108->enter($__internal_b5d928f3e90b6231f802335efba760140d094339c5ab9f0d7e3de3a986138108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b5d928f3e90b6231f802335efba760140d094339c5ab9f0d7e3de3a986138108->leave($__internal_b5d928f3e90b6231f802335efba760140d094339c5ab9f0d7e3de3a986138108_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
