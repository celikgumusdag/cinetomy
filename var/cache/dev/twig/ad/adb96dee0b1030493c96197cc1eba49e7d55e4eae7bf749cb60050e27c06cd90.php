<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f45fae8757358c2caf990102aa9d8c9880d6d83a7a07805e8b1a4f94be365e88 extends Twig_Template
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
        $__internal_f2b74a4ac38e1f24f58a7c319978febd7a027f082d35b4b078dc63eea1610803 = $this->env->getExtension("native_profiler");
        $__internal_f2b74a4ac38e1f24f58a7c319978febd7a027f082d35b4b078dc63eea1610803->enter($__internal_f2b74a4ac38e1f24f58a7c319978febd7a027f082d35b4b078dc63eea1610803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f2b74a4ac38e1f24f58a7c319978febd7a027f082d35b4b078dc63eea1610803->leave($__internal_f2b74a4ac38e1f24f58a7c319978febd7a027f082d35b4b078dc63eea1610803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
