<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e58f93548e9176181ef8bca0c4c05f50b3a285c07a8b50685a6c894e5ff36db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e58f93548e9176181ef8bca0c4c05f50b3a285c07a8b50685a6c894e5ff36db->enter($__internal_3e58f93548e9176181ef8bca0c4c05f50b3a285c07a8b50685a6c894e5ff36db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_aa59c6a3f8762459eafc199f8261a34e41884109b7395cde292bf7f757de33fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa59c6a3f8762459eafc199f8261a34e41884109b7395cde292bf7f757de33fb->enter($__internal_aa59c6a3f8762459eafc199f8261a34e41884109b7395cde292bf7f757de33fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e58f93548e9176181ef8bca0c4c05f50b3a285c07a8b50685a6c894e5ff36db->leave($__internal_3e58f93548e9176181ef8bca0c4c05f50b3a285c07a8b50685a6c894e5ff36db_prof);

        
        $__internal_aa59c6a3f8762459eafc199f8261a34e41884109b7395cde292bf7f757de33fb->leave($__internal_aa59c6a3f8762459eafc199f8261a34e41884109b7395cde292bf7f757de33fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8f5f0323b0dd8b168d6db815522737bd134896b63a0c35dd92a0047eac712d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f5f0323b0dd8b168d6db815522737bd134896b63a0c35dd92a0047eac712d1->enter($__internal_b8f5f0323b0dd8b168d6db815522737bd134896b63a0c35dd92a0047eac712d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec87189817e14b93f107d6671c3ddf8f7d8db4838c970fa810644c51d80af434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec87189817e14b93f107d6671c3ddf8f7d8db4838c970fa810644c51d80af434->enter($__internal_ec87189817e14b93f107d6671c3ddf8f7d8db4838c970fa810644c51d80af434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ec87189817e14b93f107d6671c3ddf8f7d8db4838c970fa810644c51d80af434->leave($__internal_ec87189817e14b93f107d6671c3ddf8f7d8db4838c970fa810644c51d80af434_prof);

        
        $__internal_b8f5f0323b0dd8b168d6db815522737bd134896b63a0c35dd92a0047eac712d1->leave($__internal_b8f5f0323b0dd8b168d6db815522737bd134896b63a0c35dd92a0047eac712d1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_079740c337e9ebfd19b6616294bf8845e1290f62765c84ab3a6a14ebe55555b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079740c337e9ebfd19b6616294bf8845e1290f62765c84ab3a6a14ebe55555b1->enter($__internal_079740c337e9ebfd19b6616294bf8845e1290f62765c84ab3a6a14ebe55555b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_022024758a82f25014e5ffa070208f1ad76c985bcfa7d4d4a304cfcd13cbe826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022024758a82f25014e5ffa070208f1ad76c985bcfa7d4d4a304cfcd13cbe826->enter($__internal_022024758a82f25014e5ffa070208f1ad76c985bcfa7d4d4a304cfcd13cbe826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_022024758a82f25014e5ffa070208f1ad76c985bcfa7d4d4a304cfcd13cbe826->leave($__internal_022024758a82f25014e5ffa070208f1ad76c985bcfa7d4d4a304cfcd13cbe826_prof);

        
        $__internal_079740c337e9ebfd19b6616294bf8845e1290f62765c84ab3a6a14ebe55555b1->leave($__internal_079740c337e9ebfd19b6616294bf8845e1290f62765c84ab3a6a14ebe55555b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
