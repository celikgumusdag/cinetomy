<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aee4206da07ca229740e929a922e1d17bc7280f3c457172a143f7cfb80756392 extends Twig_Template
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
        $__internal_a40069e20f54fcefaee13f4b1a13c044119d346c26f88ba128e1e25100402020 = $this->env->getExtension("native_profiler");
        $__internal_a40069e20f54fcefaee13f4b1a13c044119d346c26f88ba128e1e25100402020->enter($__internal_a40069e20f54fcefaee13f4b1a13c044119d346c26f88ba128e1e25100402020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a40069e20f54fcefaee13f4b1a13c044119d346c26f88ba128e1e25100402020->leave($__internal_a40069e20f54fcefaee13f4b1a13c044119d346c26f88ba128e1e25100402020_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
