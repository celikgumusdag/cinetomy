<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3b27a91ee8f1a2327e0d4d1eb8401a18b787cd6abfb7dfb9a0bcfe5bb752343f extends Twig_Template
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
        $__internal_ee64ceb2e75b5dc636e713a17606f023ded6766d27ee9160f3d26e540cefbec2 = $this->env->getExtension("native_profiler");
        $__internal_ee64ceb2e75b5dc636e713a17606f023ded6766d27ee9160f3d26e540cefbec2->enter($__internal_ee64ceb2e75b5dc636e713a17606f023ded6766d27ee9160f3d26e540cefbec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ee64ceb2e75b5dc636e713a17606f023ded6766d27ee9160f3d26e540cefbec2->leave($__internal_ee64ceb2e75b5dc636e713a17606f023ded6766d27ee9160f3d26e540cefbec2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
