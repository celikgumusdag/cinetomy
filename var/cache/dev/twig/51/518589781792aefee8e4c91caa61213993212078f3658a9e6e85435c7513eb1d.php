<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_742389b0ea83b777334c8948631f13760d4374ae44748efe58793c661dd0c28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4c7bd0a0e17fe4d292342d59c05ea057e9a16f58255329b65cc18233a6ce0b2e = $this->env->getExtension("native_profiler");
        $__internal_4c7bd0a0e17fe4d292342d59c05ea057e9a16f58255329b65cc18233a6ce0b2e->enter($__internal_4c7bd0a0e17fe4d292342d59c05ea057e9a16f58255329b65cc18233a6ce0b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7bd0a0e17fe4d292342d59c05ea057e9a16f58255329b65cc18233a6ce0b2e->leave($__internal_4c7bd0a0e17fe4d292342d59c05ea057e9a16f58255329b65cc18233a6ce0b2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2958fcfdc3f6b998c52adad7d8d1dc681934c7916b616bf434dbfdc0d976821c = $this->env->getExtension("native_profiler");
        $__internal_2958fcfdc3f6b998c52adad7d8d1dc681934c7916b616bf434dbfdc0d976821c->enter($__internal_2958fcfdc3f6b998c52adad7d8d1dc681934c7916b616bf434dbfdc0d976821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2958fcfdc3f6b998c52adad7d8d1dc681934c7916b616bf434dbfdc0d976821c->leave($__internal_2958fcfdc3f6b998c52adad7d8d1dc681934c7916b616bf434dbfdc0d976821c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a9fe522ce4d4c2db769e22019249715149909382413b6122b03e2db90e7969 = $this->env->getExtension("native_profiler");
        $__internal_14a9fe522ce4d4c2db769e22019249715149909382413b6122b03e2db90e7969->enter($__internal_14a9fe522ce4d4c2db769e22019249715149909382413b6122b03e2db90e7969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14a9fe522ce4d4c2db769e22019249715149909382413b6122b03e2db90e7969->leave($__internal_14a9fe522ce4d4c2db769e22019249715149909382413b6122b03e2db90e7969_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
