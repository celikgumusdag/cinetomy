<?php

/* base.html.twig */
class __TwigTemplate_1248333d6197c6da3e4d5ef0f6737cade3cb5cbb4e65c1cba6a0af4e289b49d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7315aa67936f457714419f193b92fe455c2da8ce487d9736a5c69b780a0b51d1 = $this->env->getExtension("native_profiler");
        $__internal_7315aa67936f457714419f193b92fe455c2da8ce487d9736a5c69b780a0b51d1->enter($__internal_7315aa67936f457714419f193b92fe455c2da8ce487d9736a5c69b780a0b51d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7315aa67936f457714419f193b92fe455c2da8ce487d9736a5c69b780a0b51d1->leave($__internal_7315aa67936f457714419f193b92fe455c2da8ce487d9736a5c69b780a0b51d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6c0a679bb98363388478be8224634d13933f68a73d0b843ae4e271598367814 = $this->env->getExtension("native_profiler");
        $__internal_e6c0a679bb98363388478be8224634d13933f68a73d0b843ae4e271598367814->enter($__internal_e6c0a679bb98363388478be8224634d13933f68a73d0b843ae4e271598367814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6c0a679bb98363388478be8224634d13933f68a73d0b843ae4e271598367814->leave($__internal_e6c0a679bb98363388478be8224634d13933f68a73d0b843ae4e271598367814_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a215d20493bad778dcf38d3c6a895d7c902047dcffd0e1609d6927d5b2d8e8e0 = $this->env->getExtension("native_profiler");
        $__internal_a215d20493bad778dcf38d3c6a895d7c902047dcffd0e1609d6927d5b2d8e8e0->enter($__internal_a215d20493bad778dcf38d3c6a895d7c902047dcffd0e1609d6927d5b2d8e8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a215d20493bad778dcf38d3c6a895d7c902047dcffd0e1609d6927d5b2d8e8e0->leave($__internal_a215d20493bad778dcf38d3c6a895d7c902047dcffd0e1609d6927d5b2d8e8e0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c6442da36ee90d6b8860b5e685dc20d8f4ef654a5a0b52e5d7bf4e517adb878 = $this->env->getExtension("native_profiler");
        $__internal_8c6442da36ee90d6b8860b5e685dc20d8f4ef654a5a0b52e5d7bf4e517adb878->enter($__internal_8c6442da36ee90d6b8860b5e685dc20d8f4ef654a5a0b52e5d7bf4e517adb878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c6442da36ee90d6b8860b5e685dc20d8f4ef654a5a0b52e5d7bf4e517adb878->leave($__internal_8c6442da36ee90d6b8860b5e685dc20d8f4ef654a5a0b52e5d7bf4e517adb878_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_877dbfc8daacaa84a77a35b4c3a6beefa38bcbef7125323fa3d178e29f370e1b = $this->env->getExtension("native_profiler");
        $__internal_877dbfc8daacaa84a77a35b4c3a6beefa38bcbef7125323fa3d178e29f370e1b->enter($__internal_877dbfc8daacaa84a77a35b4c3a6beefa38bcbef7125323fa3d178e29f370e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_877dbfc8daacaa84a77a35b4c3a6beefa38bcbef7125323fa3d178e29f370e1b->leave($__internal_877dbfc8daacaa84a77a35b4c3a6beefa38bcbef7125323fa3d178e29f370e1b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
