<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf6af93aaf41605089383a337ef58178336e4c834d1204ee99ac48ea9245a8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6af93aaf41605089383a337ef58178336e4c834d1204ee99ac48ea9245a8c4->enter($__internal_bf6af93aaf41605089383a337ef58178336e4c834d1204ee99ac48ea9245a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_8d82eb4151ad20fdea5560097c8878c0b84f92ec84dbf7f161a1e21e3fc7d0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d82eb4151ad20fdea5560097c8878c0b84f92ec84dbf7f161a1e21e3fc7d0fa->enter($__internal_8d82eb4151ad20fdea5560097c8878c0b84f92ec84dbf7f161a1e21e3fc7d0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bf6af93aaf41605089383a337ef58178336e4c834d1204ee99ac48ea9245a8c4->leave($__internal_bf6af93aaf41605089383a337ef58178336e4c834d1204ee99ac48ea9245a8c4_prof);

        
        $__internal_8d82eb4151ad20fdea5560097c8878c0b84f92ec84dbf7f161a1e21e3fc7d0fa->leave($__internal_8d82eb4151ad20fdea5560097c8878c0b84f92ec84dbf7f161a1e21e3fc7d0fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9a857b6464ea09822a90ca31f955f58d035fb5fca32a5a8aa796e929fa73439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a857b6464ea09822a90ca31f955f58d035fb5fca32a5a8aa796e929fa73439->enter($__internal_f9a857b6464ea09822a90ca31f955f58d035fb5fca32a5a8aa796e929fa73439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65588aba23c1d46a72cba1645ab5554938b94de7ae0d4b564640b091ca5d6414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65588aba23c1d46a72cba1645ab5554938b94de7ae0d4b564640b091ca5d6414->enter($__internal_65588aba23c1d46a72cba1645ab5554938b94de7ae0d4b564640b091ca5d6414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_65588aba23c1d46a72cba1645ab5554938b94de7ae0d4b564640b091ca5d6414->leave($__internal_65588aba23c1d46a72cba1645ab5554938b94de7ae0d4b564640b091ca5d6414_prof);

        
        $__internal_f9a857b6464ea09822a90ca31f955f58d035fb5fca32a5a8aa796e929fa73439->leave($__internal_f9a857b6464ea09822a90ca31f955f58d035fb5fca32a5a8aa796e929fa73439_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_86aa769c1c03b32ce8ef2f50c27081f0fdddc8aecc003b8f9a5361df9f837f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86aa769c1c03b32ce8ef2f50c27081f0fdddc8aecc003b8f9a5361df9f837f38->enter($__internal_86aa769c1c03b32ce8ef2f50c27081f0fdddc8aecc003b8f9a5361df9f837f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a04494df78aab9cd0ea83e2654403a556bedc5d093329e71f4dc49015e276c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a04494df78aab9cd0ea83e2654403a556bedc5d093329e71f4dc49015e276c6->enter($__internal_2a04494df78aab9cd0ea83e2654403a556bedc5d093329e71f4dc49015e276c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2a04494df78aab9cd0ea83e2654403a556bedc5d093329e71f4dc49015e276c6->leave($__internal_2a04494df78aab9cd0ea83e2654403a556bedc5d093329e71f4dc49015e276c6_prof);

        
        $__internal_86aa769c1c03b32ce8ef2f50c27081f0fdddc8aecc003b8f9a5361df9f837f38->leave($__internal_86aa769c1c03b32ce8ef2f50c27081f0fdddc8aecc003b8f9a5361df9f837f38_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_abbe6bb11f1935ff8249379b5ae9f53edd8e76224036236208170654f602e6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbe6bb11f1935ff8249379b5ae9f53edd8e76224036236208170654f602e6b7->enter($__internal_abbe6bb11f1935ff8249379b5ae9f53edd8e76224036236208170654f602e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d235e85cd41774def9bfb8fe14c906728cf647bb1a0548c9abeb38adcea88d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d235e85cd41774def9bfb8fe14c906728cf647bb1a0548c9abeb38adcea88d43->enter($__internal_d235e85cd41774def9bfb8fe14c906728cf647bb1a0548c9abeb38adcea88d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d235e85cd41774def9bfb8fe14c906728cf647bb1a0548c9abeb38adcea88d43->leave($__internal_d235e85cd41774def9bfb8fe14c906728cf647bb1a0548c9abeb38adcea88d43_prof);

        
        $__internal_abbe6bb11f1935ff8249379b5ae9f53edd8e76224036236208170654f602e6b7->leave($__internal_abbe6bb11f1935ff8249379b5ae9f53edd8e76224036236208170654f602e6b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
