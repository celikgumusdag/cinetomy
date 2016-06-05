<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_46f28b0d31c1c7f8877336e421ba813f4e757e9d5a6595895b2fc3544426fccb extends Twig_Template
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
        $__internal_ad73a2a0dd7fbeb4be1f83335beaca017cfebfe73eb8eb5cca71bfd0cb30786b = $this->env->getExtension("native_profiler");
        $__internal_ad73a2a0dd7fbeb4be1f83335beaca017cfebfe73eb8eb5cca71bfd0cb30786b->enter($__internal_ad73a2a0dd7fbeb4be1f83335beaca017cfebfe73eb8eb5cca71bfd0cb30786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ad73a2a0dd7fbeb4be1f83335beaca017cfebfe73eb8eb5cca71bfd0cb30786b->leave($__internal_ad73a2a0dd7fbeb4be1f83335beaca017cfebfe73eb8eb5cca71bfd0cb30786b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
