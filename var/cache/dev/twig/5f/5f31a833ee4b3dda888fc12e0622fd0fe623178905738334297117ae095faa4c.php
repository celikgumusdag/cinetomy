<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d1827bc855ec60dade144cf6067f13743a6fa1ce4f60eabae8237b4f822f7dee extends Twig_Template
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
        $__internal_abb6942432631de28f2d802796b0e03a52772eef3866d1e5e2db56497142b76b = $this->env->getExtension("native_profiler");
        $__internal_abb6942432631de28f2d802796b0e03a52772eef3866d1e5e2db56497142b76b->enter($__internal_abb6942432631de28f2d802796b0e03a52772eef3866d1e5e2db56497142b76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_abb6942432631de28f2d802796b0e03a52772eef3866d1e5e2db56497142b76b->leave($__internal_abb6942432631de28f2d802796b0e03a52772eef3866d1e5e2db56497142b76b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
