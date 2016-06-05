<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5c5e417324d43bc95cae7da474fb6850439e4fc5e3f1de8f044bf4a7698982da extends Twig_Template
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
        $__internal_bcac37a818c4b78703c1379ce6d746eddceb0cf02639ca7657ad791d8dab12df = $this->env->getExtension("native_profiler");
        $__internal_bcac37a818c4b78703c1379ce6d746eddceb0cf02639ca7657ad791d8dab12df->enter($__internal_bcac37a818c4b78703c1379ce6d746eddceb0cf02639ca7657ad791d8dab12df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bcac37a818c4b78703c1379ce6d746eddceb0cf02639ca7657ad791d8dab12df->leave($__internal_bcac37a818c4b78703c1379ce6d746eddceb0cf02639ca7657ad791d8dab12df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
