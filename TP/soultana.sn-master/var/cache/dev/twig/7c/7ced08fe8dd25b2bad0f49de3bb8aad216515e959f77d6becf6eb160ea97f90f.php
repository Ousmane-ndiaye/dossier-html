<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84273d0a8419ce3b6f9420b66f8c4df03e1e97089a7a0775e2cdafef7328346e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84273d0a8419ce3b6f9420b66f8c4df03e1e97089a7a0775e2cdafef7328346e->enter($__internal_84273d0a8419ce3b6f9420b66f8c4df03e1e97089a7a0775e2cdafef7328346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8235648c5bf5acd0666b228895df528536f1599b8aa79bc92682979c5a1459e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8235648c5bf5acd0666b228895df528536f1599b8aa79bc92682979c5a1459e9->enter($__internal_8235648c5bf5acd0666b228895df528536f1599b8aa79bc92682979c5a1459e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84273d0a8419ce3b6f9420b66f8c4df03e1e97089a7a0775e2cdafef7328346e->leave($__internal_84273d0a8419ce3b6f9420b66f8c4df03e1e97089a7a0775e2cdafef7328346e_prof);

        
        $__internal_8235648c5bf5acd0666b228895df528536f1599b8aa79bc92682979c5a1459e9->leave($__internal_8235648c5bf5acd0666b228895df528536f1599b8aa79bc92682979c5a1459e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbb63b21904b902ba74d22d8758b50f11a2507a532601556459c0d8fa49ea2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb63b21904b902ba74d22d8758b50f11a2507a532601556459c0d8fa49ea2ee->enter($__internal_cbb63b21904b902ba74d22d8758b50f11a2507a532601556459c0d8fa49ea2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_526d35f9a6c41715d722c36e2db5e754b44885e0666cabb1ce26eb6d895668db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526d35f9a6c41715d722c36e2db5e754b44885e0666cabb1ce26eb6d895668db->enter($__internal_526d35f9a6c41715d722c36e2db5e754b44885e0666cabb1ce26eb6d895668db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_526d35f9a6c41715d722c36e2db5e754b44885e0666cabb1ce26eb6d895668db->leave($__internal_526d35f9a6c41715d722c36e2db5e754b44885e0666cabb1ce26eb6d895668db_prof);

        
        $__internal_cbb63b21904b902ba74d22d8758b50f11a2507a532601556459c0d8fa49ea2ee->leave($__internal_cbb63b21904b902ba74d22d8758b50f11a2507a532601556459c0d8fa49ea2ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_436c91bbec8766b84f451b5e63148e33b595b4686e081a37371968d412ecaa00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436c91bbec8766b84f451b5e63148e33b595b4686e081a37371968d412ecaa00->enter($__internal_436c91bbec8766b84f451b5e63148e33b595b4686e081a37371968d412ecaa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_427818b6765aa1e9be5499b045b1bed1b2c20b6fedd72716ca0cbaf457b1241f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427818b6765aa1e9be5499b045b1bed1b2c20b6fedd72716ca0cbaf457b1241f->enter($__internal_427818b6765aa1e9be5499b045b1bed1b2c20b6fedd72716ca0cbaf457b1241f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_427818b6765aa1e9be5499b045b1bed1b2c20b6fedd72716ca0cbaf457b1241f->leave($__internal_427818b6765aa1e9be5499b045b1bed1b2c20b6fedd72716ca0cbaf457b1241f_prof);

        
        $__internal_436c91bbec8766b84f451b5e63148e33b595b4686e081a37371968d412ecaa00->leave($__internal_436c91bbec8766b84f451b5e63148e33b595b4686e081a37371968d412ecaa00_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
