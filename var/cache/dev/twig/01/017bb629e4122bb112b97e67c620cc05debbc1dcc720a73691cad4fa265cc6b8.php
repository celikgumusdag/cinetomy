<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9e76ea6202c6d7223a4f1696fa459c777676568d6e9b7ff6414e3b285d37c7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_097aa5db5f15ba8c6ecd79152a76908c1f3413e4beb0b03aba7ca4ec5a8546cd = $this->env->getExtension("native_profiler");
        $__internal_097aa5db5f15ba8c6ecd79152a76908c1f3413e4beb0b03aba7ca4ec5a8546cd->enter($__internal_097aa5db5f15ba8c6ecd79152a76908c1f3413e4beb0b03aba7ca4ec5a8546cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_097aa5db5f15ba8c6ecd79152a76908c1f3413e4beb0b03aba7ca4ec5a8546cd->leave($__internal_097aa5db5f15ba8c6ecd79152a76908c1f3413e4beb0b03aba7ca4ec5a8546cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81fc80a6e3b1d845911ab1d8d3f51f46fff90bc87d89af46408af7c32344bead = $this->env->getExtension("native_profiler");
        $__internal_81fc80a6e3b1d845911ab1d8d3f51f46fff90bc87d89af46408af7c32344bead->enter($__internal_81fc80a6e3b1d845911ab1d8d3f51f46fff90bc87d89af46408af7c32344bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_81fc80a6e3b1d845911ab1d8d3f51f46fff90bc87d89af46408af7c32344bead->leave($__internal_81fc80a6e3b1d845911ab1d8d3f51f46fff90bc87d89af46408af7c32344bead_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa0384227e7681d4d02159548fa7761761e6a0be6ae81d9740d4bc1431b8ead1 = $this->env->getExtension("native_profiler");
        $__internal_aa0384227e7681d4d02159548fa7761761e6a0be6ae81d9740d4bc1431b8ead1->enter($__internal_aa0384227e7681d4d02159548fa7761761e6a0be6ae81d9740d4bc1431b8ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aa0384227e7681d4d02159548fa7761761e6a0be6ae81d9740d4bc1431b8ead1->leave($__internal_aa0384227e7681d4d02159548fa7761761e6a0be6ae81d9740d4bc1431b8ead1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79760785093c13234d5423e42a4380761c9cae4bf1cba3ab2ca061ad9c5f4189 = $this->env->getExtension("native_profiler");
        $__internal_79760785093c13234d5423e42a4380761c9cae4bf1cba3ab2ca061ad9c5f4189->enter($__internal_79760785093c13234d5423e42a4380761c9cae4bf1cba3ab2ca061ad9c5f4189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_79760785093c13234d5423e42a4380761c9cae4bf1cba3ab2ca061ad9c5f4189->leave($__internal_79760785093c13234d5423e42a4380761c9cae4bf1cba3ab2ca061ad9c5f4189_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
