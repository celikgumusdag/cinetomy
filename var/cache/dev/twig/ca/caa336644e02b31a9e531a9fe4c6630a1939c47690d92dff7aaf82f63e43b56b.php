<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_100b818f263db6118d8cfb20f96aac2ceade19748b07dd912ceb0fc41394fd12 extends Twig_Template
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
        $__internal_6d92148bdb0fa0c39c07508a543c5281ed909204ba72bf1042e49ddeb3f62d74 = $this->env->getExtension("native_profiler");
        $__internal_6d92148bdb0fa0c39c07508a543c5281ed909204ba72bf1042e49ddeb3f62d74->enter($__internal_6d92148bdb0fa0c39c07508a543c5281ed909204ba72bf1042e49ddeb3f62d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6d92148bdb0fa0c39c07508a543c5281ed909204ba72bf1042e49ddeb3f62d74->leave($__internal_6d92148bdb0fa0c39c07508a543c5281ed909204ba72bf1042e49ddeb3f62d74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
