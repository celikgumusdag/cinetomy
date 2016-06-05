<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e8fbe8f427bd9e6d47ee56fdc04759d091bee16c1296d1f62513e4bc561f4bb4 extends Twig_Template
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
        $__internal_ba6f98a899d468b6972dd33e742a0ffdfc4d0190bd90b02ec8499e3bef052181 = $this->env->getExtension("native_profiler");
        $__internal_ba6f98a899d468b6972dd33e742a0ffdfc4d0190bd90b02ec8499e3bef052181->enter($__internal_ba6f98a899d468b6972dd33e742a0ffdfc4d0190bd90b02ec8499e3bef052181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ba6f98a899d468b6972dd33e742a0ffdfc4d0190bd90b02ec8499e3bef052181->leave($__internal_ba6f98a899d468b6972dd33e742a0ffdfc4d0190bd90b02ec8499e3bef052181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
