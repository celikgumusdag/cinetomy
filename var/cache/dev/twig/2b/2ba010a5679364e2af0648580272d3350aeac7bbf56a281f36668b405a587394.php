<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e859d92fe9d95efeee3f8c7cdd45bb65407bc3bb0df5bb8ed1eba6029de1227e extends Twig_Template
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
        $__internal_fc8daa594e4f582563d8c3d737b66eb2a57420db5227e4e3fdbb270fe75eefd9 = $this->env->getExtension("native_profiler");
        $__internal_fc8daa594e4f582563d8c3d737b66eb2a57420db5227e4e3fdbb270fe75eefd9->enter($__internal_fc8daa594e4f582563d8c3d737b66eb2a57420db5227e4e3fdbb270fe75eefd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fc8daa594e4f582563d8c3d737b66eb2a57420db5227e4e3fdbb270fe75eefd9->leave($__internal_fc8daa594e4f582563d8c3d737b66eb2a57420db5227e4e3fdbb270fe75eefd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
