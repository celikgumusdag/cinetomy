<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_76a108daf36facb17cd6724b11c422cffcb1b30acf9a52caa8dbb4d9b8c582d1 extends Twig_Template
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
        $__internal_c14c0764cdca625f123180b122b58a0ecd4c9022d4bff52b0f9991b07cd786ed = $this->env->getExtension("native_profiler");
        $__internal_c14c0764cdca625f123180b122b58a0ecd4c9022d4bff52b0f9991b07cd786ed->enter($__internal_c14c0764cdca625f123180b122b58a0ecd4c9022d4bff52b0f9991b07cd786ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c14c0764cdca625f123180b122b58a0ecd4c9022d4bff52b0f9991b07cd786ed->leave($__internal_c14c0764cdca625f123180b122b58a0ecd4c9022d4bff52b0f9991b07cd786ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
