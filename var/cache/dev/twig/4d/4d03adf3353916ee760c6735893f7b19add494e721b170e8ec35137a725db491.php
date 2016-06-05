<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ed2c20511db3958c6bab2f3148c03235b50217634ace4494dabdbe56ca79b500 extends Twig_Template
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
        $__internal_87559e99bae58402e93cf940498858b83f6d3e6848d72c8c2f56a67b4c1a040c = $this->env->getExtension("native_profiler");
        $__internal_87559e99bae58402e93cf940498858b83f6d3e6848d72c8c2f56a67b4c1a040c->enter($__internal_87559e99bae58402e93cf940498858b83f6d3e6848d72c8c2f56a67b4c1a040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_87559e99bae58402e93cf940498858b83f6d3e6848d72c8c2f56a67b4c1a040c->leave($__internal_87559e99bae58402e93cf940498858b83f6d3e6848d72c8c2f56a67b4c1a040c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
