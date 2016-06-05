<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_63a58f4eabb45b18313f103d52fffe3d5aaa1272311102809d15eba312bda82e extends Twig_Template
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
        $__internal_6142d3c5f84bac3e1c326f017eab446703ab1b08c46332cdfe229f13d9369ce0 = $this->env->getExtension("native_profiler");
        $__internal_6142d3c5f84bac3e1c326f017eab446703ab1b08c46332cdfe229f13d9369ce0->enter($__internal_6142d3c5f84bac3e1c326f017eab446703ab1b08c46332cdfe229f13d9369ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6142d3c5f84bac3e1c326f017eab446703ab1b08c46332cdfe229f13d9369ce0->leave($__internal_6142d3c5f84bac3e1c326f017eab446703ab1b08c46332cdfe229f13d9369ce0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
