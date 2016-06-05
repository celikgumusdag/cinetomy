<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_40f3556fb290d52f338bdf1dcd211838896a3fea42a276f94d4faafbb46fff89 extends Twig_Template
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
        $__internal_85b5d0f2deb57b5e418034499a8cc3f9c3bb1f88e6be1b748eef7d3ee2ba5eb7 = $this->env->getExtension("native_profiler");
        $__internal_85b5d0f2deb57b5e418034499a8cc3f9c3bb1f88e6be1b748eef7d3ee2ba5eb7->enter($__internal_85b5d0f2deb57b5e418034499a8cc3f9c3bb1f88e6be1b748eef7d3ee2ba5eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_85b5d0f2deb57b5e418034499a8cc3f9c3bb1f88e6be1b748eef7d3ee2ba5eb7->leave($__internal_85b5d0f2deb57b5e418034499a8cc3f9c3bb1f88e6be1b748eef7d3ee2ba5eb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
