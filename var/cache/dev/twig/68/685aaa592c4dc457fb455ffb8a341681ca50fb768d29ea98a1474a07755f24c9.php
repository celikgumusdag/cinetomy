<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_91bfac32b2f73dc0a70da9501f93c1ada988233cef7affab7b2621e8b650d3b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_8c65da164ec1da093257a27aa9061f669a46a3511a4e9a0c7ad3356e8a3f4ca8 = $this->env->getExtension("native_profiler");
        $__internal_8c65da164ec1da093257a27aa9061f669a46a3511a4e9a0c7ad3356e8a3f4ca8->enter($__internal_8c65da164ec1da093257a27aa9061f669a46a3511a4e9a0c7ad3356e8a3f4ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c65da164ec1da093257a27aa9061f669a46a3511a4e9a0c7ad3356e8a3f4ca8->leave($__internal_8c65da164ec1da093257a27aa9061f669a46a3511a4e9a0c7ad3356e8a3f4ca8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c780326572bf73759f40ca5ef3b5b2814f262e4ceb578f44b74cec9f5795475a = $this->env->getExtension("native_profiler");
        $__internal_c780326572bf73759f40ca5ef3b5b2814f262e4ceb578f44b74cec9f5795475a->enter($__internal_c780326572bf73759f40ca5ef3b5b2814f262e4ceb578f44b74cec9f5795475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c780326572bf73759f40ca5ef3b5b2814f262e4ceb578f44b74cec9f5795475a->leave($__internal_c780326572bf73759f40ca5ef3b5b2814f262e4ceb578f44b74cec9f5795475a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_100833d204f3774f42beb1911852e60a5c7ba13e32d9ad50bb8a3f3a4483080c = $this->env->getExtension("native_profiler");
        $__internal_100833d204f3774f42beb1911852e60a5c7ba13e32d9ad50bb8a3f3a4483080c->enter($__internal_100833d204f3774f42beb1911852e60a5c7ba13e32d9ad50bb8a3f3a4483080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_100833d204f3774f42beb1911852e60a5c7ba13e32d9ad50bb8a3f3a4483080c->leave($__internal_100833d204f3774f42beb1911852e60a5c7ba13e32d9ad50bb8a3f3a4483080c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52e4d007e4e1f844d1c4603f97dbbb9e6a1118b9080e0485bc7631239368fb45 = $this->env->getExtension("native_profiler");
        $__internal_52e4d007e4e1f844d1c4603f97dbbb9e6a1118b9080e0485bc7631239368fb45->enter($__internal_52e4d007e4e1f844d1c4603f97dbbb9e6a1118b9080e0485bc7631239368fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52e4d007e4e1f844d1c4603f97dbbb9e6a1118b9080e0485bc7631239368fb45->leave($__internal_52e4d007e4e1f844d1c4603f97dbbb9e6a1118b9080e0485bc7631239368fb45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
