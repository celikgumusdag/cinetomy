<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f9bacd2bb17c58bc5da17115d320621a6eb83953c4242b60067456121d6f39fd extends Twig_Template
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
        $__internal_a28441621451cf94f40c861113e515e4397cdea9832780348213a903f9bc1e67 = $this->env->getExtension("native_profiler");
        $__internal_a28441621451cf94f40c861113e515e4397cdea9832780348213a903f9bc1e67->enter($__internal_a28441621451cf94f40c861113e515e4397cdea9832780348213a903f9bc1e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a28441621451cf94f40c861113e515e4397cdea9832780348213a903f9bc1e67->leave($__internal_a28441621451cf94f40c861113e515e4397cdea9832780348213a903f9bc1e67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
