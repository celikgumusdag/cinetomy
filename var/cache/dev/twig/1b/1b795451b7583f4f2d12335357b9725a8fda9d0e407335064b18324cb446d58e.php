<?php

/* HeaderBundle:Default:index.html.twig */
class __TwigTemplate_f269be068b526a611aa935f2602608ec03a9b7b90c1079ed83f6852950620d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a7fbab3156eebebcb51778c8d0d757342e6ca56967efab52df2549298f9fd7c = $this->env->getExtension("native_profiler");
        $__internal_3a7fbab3156eebebcb51778c8d0d757342e6ca56967efab52df2549298f9fd7c->enter($__internal_3a7fbab3156eebebcb51778c8d0d757342e6ca56967efab52df2549298f9fd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeaderBundle:Default:index.html.twig"));

        // line 1
        echo "<?php
session_start();
?>
<script src=\"./js/jquery.min.js\"></script>
<div id=\"header\">
    <div id=\"logo\">
        <a href=\"index.php\"><img src=\"./img/logo.png\"/></a>
    </div>
    <div id=\"search\">
        <input type=\"text\" maxlength=\"35\">
    </div>
";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
</div>

<script>
    \$(document).ready(function () {
        \$(\".loginbutton\").click(function () {
            \$(\".loginform\").show();
        });
    });
</script>

<script>
    \$(document).ready(function () {
        \$(\"#login\").mouseenter(function () {
            \$(\"#content\").show();
        });
        \$(\"#login\").mouseleave(function () {
            \$(\"#content\").show();
        });
    });
</script>";
        
        $__internal_3a7fbab3156eebebcb51778c8d0d757342e6ca56967efab52df2549298f9fd7c->leave($__internal_3a7fbab3156eebebcb51778c8d0d757342e6ca56967efab52df2549298f9fd7c_prof);

    }

    public function getTemplateName()
    {
        return "HeaderBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  22 => 1,);
    }
}
/* <?php*/
/* session_start();*/
/* ?>*/
/* <script src="./js/jquery.min.js"></script>*/
/* <div id="header">*/
/*     <div id="logo">*/
/*         <a href="index.php"><img src="./img/logo.png"/></a>*/
/*     </div>*/
/*     <div id="search">*/
/*         <input type="text" maxlength="35">*/
/*     </div>*/
/* {{ name }}*/
/* </div>*/
/* */
/* <script>*/
/*     $(document).ready(function () {*/
/*         $(".loginbutton").click(function () {*/
/*             $(".loginform").show();*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <script>*/
/*     $(document).ready(function () {*/
/*         $("#login").mouseenter(function () {*/
/*             $("#content").show();*/
/*         });*/
/*         $("#login").mouseleave(function () {*/
/*             $("#content").show();*/
/*         });*/
/*     });*/
/* </script>*/
