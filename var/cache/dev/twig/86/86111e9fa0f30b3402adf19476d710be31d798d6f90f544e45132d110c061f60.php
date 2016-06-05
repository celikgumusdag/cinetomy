<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_97e536d376065061298d7af771fc03109146fd1c51543ded9ebb01940440639a extends Twig_Template
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
        $__internal_8e6651bac9ddb7eb94ba7b90e2e4cb9a850f674a2509fa32a0c8dc481b20b511 = $this->env->getExtension("native_profiler");
        $__internal_8e6651bac9ddb7eb94ba7b90e2e4cb9a850f674a2509fa32a0c8dc481b20b511->enter($__internal_8e6651bac9ddb7eb94ba7b90e2e4cb9a850f674a2509fa32a0c8dc481b20b511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8e6651bac9ddb7eb94ba7b90e2e4cb9a850f674a2509fa32a0c8dc481b20b511->leave($__internal_8e6651bac9ddb7eb94ba7b90e2e4cb9a850f674a2509fa32a0c8dc481b20b511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
