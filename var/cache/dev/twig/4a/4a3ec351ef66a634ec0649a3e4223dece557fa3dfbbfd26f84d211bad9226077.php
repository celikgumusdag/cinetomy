<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c7e71cea76be5606594b79050351af27cc5ca4434d8c9d10eac49ba1220f72f7 extends Twig_Template
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
        $__internal_958583b940f7d2ffdfac2fb275abf3b18ee68250ae5a4f50d95d8d9823eabbfd = $this->env->getExtension("native_profiler");
        $__internal_958583b940f7d2ffdfac2fb275abf3b18ee68250ae5a4f50d95d8d9823eabbfd->enter($__internal_958583b940f7d2ffdfac2fb275abf3b18ee68250ae5a4f50d95d8d9823eabbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_958583b940f7d2ffdfac2fb275abf3b18ee68250ae5a4f50d95d8d9823eabbfd->leave($__internal_958583b940f7d2ffdfac2fb275abf3b18ee68250ae5a4f50d95d8d9823eabbfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
