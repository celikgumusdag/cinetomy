<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_782d6779f2a2664073f42ac0592e1cb742005b1e5f1383dcfc4070b8cf3c9fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_63ca4213c7929fb04d0f25f3dfe3014b5725f960f7ae966db0b5f2f151877488 = $this->env->getExtension("native_profiler");
        $__internal_63ca4213c7929fb04d0f25f3dfe3014b5725f960f7ae966db0b5f2f151877488->enter($__internal_63ca4213c7929fb04d0f25f3dfe3014b5725f960f7ae966db0b5f2f151877488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ca4213c7929fb04d0f25f3dfe3014b5725f960f7ae966db0b5f2f151877488->leave($__internal_63ca4213c7929fb04d0f25f3dfe3014b5725f960f7ae966db0b5f2f151877488_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceef6c0a383fbe1ba2498ab6467589933454f81131c9af17f47c95840c03b3e0 = $this->env->getExtension("native_profiler");
        $__internal_ceef6c0a383fbe1ba2498ab6467589933454f81131c9af17f47c95840c03b3e0->enter($__internal_ceef6c0a383fbe1ba2498ab6467589933454f81131c9af17f47c95840c03b3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ceef6c0a383fbe1ba2498ab6467589933454f81131c9af17f47c95840c03b3e0->leave($__internal_ceef6c0a383fbe1ba2498ab6467589933454f81131c9af17f47c95840c03b3e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c61a240df77789b1548a766790c4c13d8e4ad3f8ccf5f7683508d1388a93dfd6 = $this->env->getExtension("native_profiler");
        $__internal_c61a240df77789b1548a766790c4c13d8e4ad3f8ccf5f7683508d1388a93dfd6->enter($__internal_c61a240df77789b1548a766790c4c13d8e4ad3f8ccf5f7683508d1388a93dfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c61a240df77789b1548a766790c4c13d8e4ad3f8ccf5f7683508d1388a93dfd6->leave($__internal_c61a240df77789b1548a766790c4c13d8e4ad3f8ccf5f7683508d1388a93dfd6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaa80da013238f25665200ad769e1e658e0100cc0a6d16d12fdab97e60de3a65 = $this->env->getExtension("native_profiler");
        $__internal_eaa80da013238f25665200ad769e1e658e0100cc0a6d16d12fdab97e60de3a65->enter($__internal_eaa80da013238f25665200ad769e1e658e0100cc0a6d16d12fdab97e60de3a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eaa80da013238f25665200ad769e1e658e0100cc0a6d16d12fdab97e60de3a65->leave($__internal_eaa80da013238f25665200ad769e1e658e0100cc0a6d16d12fdab97e60de3a65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
