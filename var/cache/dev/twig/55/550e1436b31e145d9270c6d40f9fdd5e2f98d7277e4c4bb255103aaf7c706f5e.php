<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a76f38da15d5fbbc0908e7ff655b6e345bdb3470f94eb862d9b93a90878bf4bb extends Twig_Template
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
        $__internal_a4b9aa130d5ae36996d7587931b4a1277a24a2d92a251791250fd71ca120ff5f = $this->env->getExtension("native_profiler");
        $__internal_a4b9aa130d5ae36996d7587931b4a1277a24a2d92a251791250fd71ca120ff5f->enter($__internal_a4b9aa130d5ae36996d7587931b4a1277a24a2d92a251791250fd71ca120ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a4b9aa130d5ae36996d7587931b4a1277a24a2d92a251791250fd71ca120ff5f->leave($__internal_a4b9aa130d5ae36996d7587931b4a1277a24a2d92a251791250fd71ca120ff5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
