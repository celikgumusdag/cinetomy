<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_7a2eccdba0f866ced63f353e14318c6c7689955c50bfa736656f43946456c6a3 extends Twig_Template
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
        $__internal_2f2a53e4b79785c11a26acdef4ecde1c3b2fb3007fe34248b09bbdb4d64920a5 = $this->env->getExtension("native_profiler");
        $__internal_2f2a53e4b79785c11a26acdef4ecde1c3b2fb3007fe34248b09bbdb4d64920a5->enter($__internal_2f2a53e4b79785c11a26acdef4ecde1c3b2fb3007fe34248b09bbdb4d64920a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Anasayfa</title>
</head>
<body>

";
        // line 12
        $this->loadTemplate("HeaderBundle:Default:index.html.twig", "IndexBundle:Default:index.html.twig", 12)->display($context);
        // line 13
        echo "
<div id=\"home\">
    <div class=\"homedesc\">
        <video src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("video/anasayfa.mp4"), "html", null, true);
        echo "\" loop=\"\" autoplay=\"\"></video>
    </div>

    <div class=\"registerform\">
        <form action=\"./form/register.php\" method=\"post\">
            <input type=\"text\" class=\"registerinput\" id=\"Username\" name=\"Username\" maxlength=\"30\"
                   placeholder=\"Kullanıcı Adı\" autocomplete=\"off\"/>
            <input type=\"text\" class=\"registerinput\" name=\"Ad\" placeholder=\"Ad\" maxlength=\"30\" autocomplete=\"off\"/>
            <input type=\"text\" class=\"registerinput\" name=\"Soyad\" placeholder=\"Soyad\" maxlength=\"30\"
                   autocomplete=\"off\"/>
            <input type=\"text\" class=\"registerinput\" name=\"Email\" placeholder=\"Email\" maxlength=\"30\"
                   autocomplete=\"off\"/>
            <input type=\"password\" class=\"registerinput\" name=\"Sifre\" placeholder=\"Şifre\" maxlength=\"15\"
                   autocomplete=\"off\"/>
            <input type=\"password\" class=\"registerinput\" name=\"Resifre\" placeholder=\"Şifre Onay\" maxlength=\"15\"
                   autocomplete=\"off\"/>

            <select name=\"Gun\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                    <option value=";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </select>
            <select name=\"Ay\">
                <option value=\"Ocak\">Ocak</option>
                <option value=\"Şubat\">Şubat</option>
                <option value=\"Mart\">Mart</option>
                <option value=\"Nisan\">Nisan</option>
                <option value=\"Mayıs\">Mayıs</option>
                <option value=\"Haziran\">Haziran</option>
                <option value=\"Temmuz\">Temmuz</option>
                <option value=\"Ağustos\">Ağustos</option>
                <option value=\"Eylül\">Eylül</option>
                <option value=\"Ekim\">Ekim</option>
                <option value=\"Kasım\">Kasım</option>
                <option value=\"Aralık\">Aralık</option>
            </select>
            <select name=\"Yil\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2016, 1900));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "                    <option value=";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </select>

            <div class=\"gender\"><input type=\"radio\" name=\"Cinsiyet\" value=\"Erkek\" checked=\"checked\"/>Erkek</div>
            <div class=\"gender\"><input type=\"radio\" name=\"Cinsiyet\" value=\"Kadın\"/>Kadın</div>

            <input type=\"submit\" class=\"registerbutton\"/>
        </form>
    </div>
    <div class=\"hometext\">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla tincidunt purus, id gravida metus
        elementum rutrum. Donec vel erat nec lectus molestie scelerisque. Praesent ultricies nulla justo, ac congue sem
        convallis sed. Quisque sed purus massa. Sed at massa ipsum. Nunc id elit tortor. Sed euismod quam vel eros
        convallis, sed porttitor metus accumsan. Quisque cursus fringilla augue at luctus. Maecenas tincidunt lacus in
        suscipit egestas.

        Nunc facilisis, urna ut accumsan condimentum, quam diam semper neque, quis ultricies nisl sapien placerat leo.
        Sed lobortis urna in venenatis pretium. Etiam efficitur tortor metus, eu blandit ipsum convallis a. Praesent ut
        suscipit ligula. Curabitur convallis ultrices est. Donec ac ornare lectus.

    </div>

</div>

";
        // line 79
        echo twig_include($this->env, $context, "FooterBundle:Default:index.html.twig");
        echo "

<script type=\"text/javascript\">
    \$('input#Username').bind('keypress', function (event) {
        var regex = new RegExp(\"^[a-zA-Z0-9]+\$\");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

</body>
</html>";
        
        $__internal_2f2a53e4b79785c11a26acdef4ecde1c3b2fb3007fe34248b09bbdb4d64920a5->leave($__internal_2f2a53e4b79785c11a26acdef4ecde1c3b2fb3007fe34248b09bbdb4d64920a5_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 79,  114 => 56,  103 => 54,  99 => 53,  81 => 37,  70 => 35,  66 => 34,  45 => 16,  40 => 13,  38 => 12,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"*/
/*         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet"/>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*     <title>Anasayfa</title>*/
/* </head>*/
/* <body>*/
/* */
/* {% include "HeaderBundle:Default:index.html.twig" %}*/
/* */
/* <div id="home">*/
/*     <div class="homedesc">*/
/*         <video src="{{ asset('video/anasayfa.mp4') }}" loop="" autoplay=""></video>*/
/*     </div>*/
/* */
/*     <div class="registerform">*/
/*         <form action="./form/register.php" method="post">*/
/*             <input type="text" class="registerinput" id="Username" name="Username" maxlength="30"*/
/*                    placeholder="Kullanıcı Adı" autocomplete="off"/>*/
/*             <input type="text" class="registerinput" name="Ad" placeholder="Ad" maxlength="30" autocomplete="off"/>*/
/*             <input type="text" class="registerinput" name="Soyad" placeholder="Soyad" maxlength="30"*/
/*                    autocomplete="off"/>*/
/*             <input type="text" class="registerinput" name="Email" placeholder="Email" maxlength="30"*/
/*                    autocomplete="off"/>*/
/*             <input type="password" class="registerinput" name="Sifre" placeholder="Şifre" maxlength="15"*/
/*                    autocomplete="off"/>*/
/*             <input type="password" class="registerinput" name="Resifre" placeholder="Şifre Onay" maxlength="15"*/
/*                    autocomplete="off"/>*/
/* */
/*             <select name="Gun">*/
/*                 {% for i in 1..31 %}*/
/*                     <option value={{ i }}>{{ i }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*             <select name="Ay">*/
/*                 <option value="Ocak">Ocak</option>*/
/*                 <option value="Şubat">Şubat</option>*/
/*                 <option value="Mart">Mart</option>*/
/*                 <option value="Nisan">Nisan</option>*/
/*                 <option value="Mayıs">Mayıs</option>*/
/*                 <option value="Haziran">Haziran</option>*/
/*                 <option value="Temmuz">Temmuz</option>*/
/*                 <option value="Ağustos">Ağustos</option>*/
/*                 <option value="Eylül">Eylül</option>*/
/*                 <option value="Ekim">Ekim</option>*/
/*                 <option value="Kasım">Kasım</option>*/
/*                 <option value="Aralık">Aralık</option>*/
/*             </select>*/
/*             <select name="Yil">*/
/*                 {% for i in 2016..1900 %}*/
/*                     <option value={{ i }}>{{ i }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/* */
/*             <div class="gender"><input type="radio" name="Cinsiyet" value="Erkek" checked="checked"/>Erkek</div>*/
/*             <div class="gender"><input type="radio" name="Cinsiyet" value="Kadın"/>Kadın</div>*/
/* */
/*             <input type="submit" class="registerbutton"/>*/
/*         </form>*/
/*     </div>*/
/*     <div class="hometext">*/
/*         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla tincidunt purus, id gravida metus*/
/*         elementum rutrum. Donec vel erat nec lectus molestie scelerisque. Praesent ultricies nulla justo, ac congue sem*/
/*         convallis sed. Quisque sed purus massa. Sed at massa ipsum. Nunc id elit tortor. Sed euismod quam vel eros*/
/*         convallis, sed porttitor metus accumsan. Quisque cursus fringilla augue at luctus. Maecenas tincidunt lacus in*/
/*         suscipit egestas.*/
/* */
/*         Nunc facilisis, urna ut accumsan condimentum, quam diam semper neque, quis ultricies nisl sapien placerat leo.*/
/*         Sed lobortis urna in venenatis pretium. Etiam efficitur tortor metus, eu blandit ipsum convallis a. Praesent ut*/
/*         suscipit ligula. Curabitur convallis ultrices est. Donec ac ornare lectus.*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {{ include('FooterBundle:Default:index.html.twig') }}*/
/* */
/* <script type="text/javascript">*/
/*     $('input#Username').bind('keypress', function (event) {*/
/*         var regex = new RegExp("^[a-zA-Z0-9]+$");*/
/*         var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);*/
/*         if (!regex.test(key)) {*/
/*             event.preventDefault();*/
/*             return false;*/
/*         }*/
/*     });*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
