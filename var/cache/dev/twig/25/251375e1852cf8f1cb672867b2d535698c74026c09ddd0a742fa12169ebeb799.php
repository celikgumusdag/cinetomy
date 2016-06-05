<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_deb82311d3733b11a3a032c6f5b26987d845e2c7dc5643d3fd7fed8aec2aece8 extends Twig_Template
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
        $__internal_824ee576745826d54e7fe2dd0a8d94613b87a76fa8b8e8547c478038ec852de9 = $this->env->getExtension("native_profiler");
        $__internal_824ee576745826d54e7fe2dd0a8d94613b87a76fa8b8e8547c478038ec852de9->enter($__internal_824ee576745826d54e7fe2dd0a8d94613b87a76fa8b8e8547c478038ec852de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_824ee576745826d54e7fe2dd0a8d94613b87a76fa8b8e8547c478038ec852de9->leave($__internal_824ee576745826d54e7fe2dd0a8d94613b87a76fa8b8e8547c478038ec852de9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
