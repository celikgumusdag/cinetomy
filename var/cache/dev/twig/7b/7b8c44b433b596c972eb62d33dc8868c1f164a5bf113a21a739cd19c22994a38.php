<?php

/* ::base.html.twig */
class __TwigTemplate_7b87fcf70ebff8772ca6d8ea0737905c643b9eda5a12f49dd3876005a7929050 extends Twig_Template
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
        $__internal_58e82fc0a833d23710485e01cef4f5256ad8d130ae11607b9184b4af7f31c609 = $this->env->getExtension("native_profiler");
        $__internal_58e82fc0a833d23710485e01cef4f5256ad8d130ae11607b9184b4af7f31c609->enter($__internal_58e82fc0a833d23710485e01cef4f5256ad8d130ae11607b9184b4af7f31c609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_58e82fc0a833d23710485e01cef4f5256ad8d130ae11607b9184b4af7f31c609->leave($__internal_58e82fc0a833d23710485e01cef4f5256ad8d130ae11607b9184b4af7f31c609_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3118bf9bcc32ec73d55ac4103c8f95d01511a8939dcdac758034c15da58d92c = $this->env->getExtension("native_profiler");
        $__internal_b3118bf9bcc32ec73d55ac4103c8f95d01511a8939dcdac758034c15da58d92c->enter($__internal_b3118bf9bcc32ec73d55ac4103c8f95d01511a8939dcdac758034c15da58d92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3118bf9bcc32ec73d55ac4103c8f95d01511a8939dcdac758034c15da58d92c->leave($__internal_b3118bf9bcc32ec73d55ac4103c8f95d01511a8939dcdac758034c15da58d92c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98591683ac81646bfd4e32c3c9264e021f65c775553ea608907ffa2332b00593 = $this->env->getExtension("native_profiler");
        $__internal_98591683ac81646bfd4e32c3c9264e021f65c775553ea608907ffa2332b00593->enter($__internal_98591683ac81646bfd4e32c3c9264e021f65c775553ea608907ffa2332b00593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98591683ac81646bfd4e32c3c9264e021f65c775553ea608907ffa2332b00593->leave($__internal_98591683ac81646bfd4e32c3c9264e021f65c775553ea608907ffa2332b00593_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f76da76c3028d7f061d0ee60a156035df5a4e896c7c4402cc042211e08c131e = $this->env->getExtension("native_profiler");
        $__internal_5f76da76c3028d7f061d0ee60a156035df5a4e896c7c4402cc042211e08c131e->enter($__internal_5f76da76c3028d7f061d0ee60a156035df5a4e896c7c4402cc042211e08c131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f76da76c3028d7f061d0ee60a156035df5a4e896c7c4402cc042211e08c131e->leave($__internal_5f76da76c3028d7f061d0ee60a156035df5a4e896c7c4402cc042211e08c131e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4806e54a54a99ae0aad57a373afcd2cf7cd25ddcbf39805100833e24dcd7fc1d = $this->env->getExtension("native_profiler");
        $__internal_4806e54a54a99ae0aad57a373afcd2cf7cd25ddcbf39805100833e24dcd7fc1d->enter($__internal_4806e54a54a99ae0aad57a373afcd2cf7cd25ddcbf39805100833e24dcd7fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4806e54a54a99ae0aad57a373afcd2cf7cd25ddcbf39805100833e24dcd7fc1d->leave($__internal_4806e54a54a99ae0aad57a373afcd2cf7cd25ddcbf39805100833e24dcd7fc1d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
