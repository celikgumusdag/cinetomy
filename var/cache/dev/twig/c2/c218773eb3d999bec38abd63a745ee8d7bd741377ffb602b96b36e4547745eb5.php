<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_09f1f083e4c15e78876db8b97880c85ba388566de7463ed5d1ce1450881d097c extends Twig_Template
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
        $__internal_51803d8e28f121333b59a5e81f0eef99764bf41694c4a1515c735b75fc08e0a2 = $this->env->getExtension("native_profiler");
        $__internal_51803d8e28f121333b59a5e81f0eef99764bf41694c4a1515c735b75fc08e0a2->enter($__internal_51803d8e28f121333b59a5e81f0eef99764bf41694c4a1515c735b75fc08e0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_51803d8e28f121333b59a5e81f0eef99764bf41694c4a1515c735b75fc08e0a2->leave($__internal_51803d8e28f121333b59a5e81f0eef99764bf41694c4a1515c735b75fc08e0a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
