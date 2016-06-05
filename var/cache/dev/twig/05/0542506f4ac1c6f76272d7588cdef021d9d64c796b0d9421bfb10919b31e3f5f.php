<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_63acf9b01484703a21dc2c0bfc9a9bd31e43630b4dfc6ded0584cd5ad9f574ad extends Twig_Template
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
        $__internal_a784245599a5945ede4b6838ddb0c7aa3f42b3f84df919614caa4ed539eac1ea = $this->env->getExtension("native_profiler");
        $__internal_a784245599a5945ede4b6838ddb0c7aa3f42b3f84df919614caa4ed539eac1ea->enter($__internal_a784245599a5945ede4b6838ddb0c7aa3f42b3f84df919614caa4ed539eac1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a784245599a5945ede4b6838ddb0c7aa3f42b3f84df919614caa4ed539eac1ea->leave($__internal_a784245599a5945ede4b6838ddb0c7aa3f42b3f84df919614caa4ed539eac1ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
