<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cd11a5066481fa92aca687ffeedfc477a6ed1c4c21ea77f4b29684b334dce716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_248463be6393e828cc452061f756a54a31fbbe468a5fbbd0ecc115dacf3ceecb = $this->env->getExtension("native_profiler");
        $__internal_248463be6393e828cc452061f756a54a31fbbe468a5fbbd0ecc115dacf3ceecb->enter($__internal_248463be6393e828cc452061f756a54a31fbbe468a5fbbd0ecc115dacf3ceecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248463be6393e828cc452061f756a54a31fbbe468a5fbbd0ecc115dacf3ceecb->leave($__internal_248463be6393e828cc452061f756a54a31fbbe468a5fbbd0ecc115dacf3ceecb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_499f03a1d2cc7477180545a75710ee5a520933699a3257f17f1083c67e0e1e0d = $this->env->getExtension("native_profiler");
        $__internal_499f03a1d2cc7477180545a75710ee5a520933699a3257f17f1083c67e0e1e0d->enter($__internal_499f03a1d2cc7477180545a75710ee5a520933699a3257f17f1083c67e0e1e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_499f03a1d2cc7477180545a75710ee5a520933699a3257f17f1083c67e0e1e0d->leave($__internal_499f03a1d2cc7477180545a75710ee5a520933699a3257f17f1083c67e0e1e0d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_747060e414bcad7b6efca95091a2b9526e9fdaa493d0dcdb4ec65221fd466555 = $this->env->getExtension("native_profiler");
        $__internal_747060e414bcad7b6efca95091a2b9526e9fdaa493d0dcdb4ec65221fd466555->enter($__internal_747060e414bcad7b6efca95091a2b9526e9fdaa493d0dcdb4ec65221fd466555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_747060e414bcad7b6efca95091a2b9526e9fdaa493d0dcdb4ec65221fd466555->leave($__internal_747060e414bcad7b6efca95091a2b9526e9fdaa493d0dcdb4ec65221fd466555_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
