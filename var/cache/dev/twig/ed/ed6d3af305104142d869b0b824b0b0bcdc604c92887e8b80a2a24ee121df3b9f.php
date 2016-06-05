<?php

/* @Header/Default/index.html.twig */
class __TwigTemplate_ae315ab0f988dda0bad9fc381ac7c4cc9af182e29ad93952888de40dd7e57099 extends Twig_Template
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
        $__internal_6e57e0a17b236499a013706497cfdf3f5cb09bf4733985a843c1ad58ab893e84 = $this->env->getExtension("native_profiler");
        $__internal_6e57e0a17b236499a013706497cfdf3f5cb09bf4733985a843c1ad58ab893e84->enter($__internal_6e57e0a17b236499a013706497cfdf3f5cb09bf4733985a843c1ad58ab893e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Header/Default/index.html.twig"));

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
        
        $__internal_6e57e0a17b236499a013706497cfdf3f5cb09bf4733985a843c1ad58ab893e84->leave($__internal_6e57e0a17b236499a013706497cfdf3f5cb09bf4733985a843c1ad58ab893e84_prof);

    }

    public function getTemplateName()
    {
        return "@Header/Default/index.html.twig";
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
/*     {{ name }}*/
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
