<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_57c4173bb6055926fb74b44fc1fd4da007e9fca55a382d6044ad6bc44c6f43f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20672a719d1e4570decb66abbf7224027f5ca3eb38e039fdfa6567df76d8df4d = $this->env->getExtension("native_profiler");
        $__internal_20672a719d1e4570decb66abbf7224027f5ca3eb38e039fdfa6567df76d8df4d->enter($__internal_20672a719d1e4570decb66abbf7224027f5ca3eb38e039fdfa6567df76d8df4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20672a719d1e4570decb66abbf7224027f5ca3eb38e039fdfa6567df76d8df4d->leave($__internal_20672a719d1e4570decb66abbf7224027f5ca3eb38e039fdfa6567df76d8df4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_931059489fa3a27e3fe3fe9b5ee95b5c95ed9e3fb928f16bb7d83b59d237e407 = $this->env->getExtension("native_profiler");
        $__internal_931059489fa3a27e3fe3fe9b5ee95b5c95ed9e3fb928f16bb7d83b59d237e407->enter($__internal_931059489fa3a27e3fe3fe9b5ee95b5c95ed9e3fb928f16bb7d83b59d237e407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_931059489fa3a27e3fe3fe9b5ee95b5c95ed9e3fb928f16bb7d83b59d237e407->leave($__internal_931059489fa3a27e3fe3fe9b5ee95b5c95ed9e3fb928f16bb7d83b59d237e407_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c7ad5f64ec5ab2de8b1768a66ddb1c72b124bbf6a75f5c601467aabad3d9e01 = $this->env->getExtension("native_profiler");
        $__internal_6c7ad5f64ec5ab2de8b1768a66ddb1c72b124bbf6a75f5c601467aabad3d9e01->enter($__internal_6c7ad5f64ec5ab2de8b1768a66ddb1c72b124bbf6a75f5c601467aabad3d9e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c7ad5f64ec5ab2de8b1768a66ddb1c72b124bbf6a75f5c601467aabad3d9e01->leave($__internal_6c7ad5f64ec5ab2de8b1768a66ddb1c72b124bbf6a75f5c601467aabad3d9e01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40ae7ef17f81880197b46e476c8598f4e5a070ec6ffe87fbdb379baf7d64f951 = $this->env->getExtension("native_profiler");
        $__internal_40ae7ef17f81880197b46e476c8598f4e5a070ec6ffe87fbdb379baf7d64f951->enter($__internal_40ae7ef17f81880197b46e476c8598f4e5a070ec6ffe87fbdb379baf7d64f951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40ae7ef17f81880197b46e476c8598f4e5a070ec6ffe87fbdb379baf7d64f951->leave($__internal_40ae7ef17f81880197b46e476c8598f4e5a070ec6ffe87fbdb379baf7d64f951_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
