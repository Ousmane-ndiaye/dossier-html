<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_28174b8b4da5e5a728a472d89892a869c9337a3455ee51aa44b21c99859e3caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28174b8b4da5e5a728a472d89892a869c9337a3455ee51aa44b21c99859e3caf->enter($__internal_28174b8b4da5e5a728a472d89892a869c9337a3455ee51aa44b21c99859e3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1daf0be94063ccc2e4d762b0777b252b0935fcc00e15006e3cf10c5872e56114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1daf0be94063ccc2e4d762b0777b252b0935fcc00e15006e3cf10c5872e56114->enter($__internal_1daf0be94063ccc2e4d762b0777b252b0935fcc00e15006e3cf10c5872e56114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28174b8b4da5e5a728a472d89892a869c9337a3455ee51aa44b21c99859e3caf->leave($__internal_28174b8b4da5e5a728a472d89892a869c9337a3455ee51aa44b21c99859e3caf_prof);

        
        $__internal_1daf0be94063ccc2e4d762b0777b252b0935fcc00e15006e3cf10c5872e56114->leave($__internal_1daf0be94063ccc2e4d762b0777b252b0935fcc00e15006e3cf10c5872e56114_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35439e6e4c3ed0088630257cbe4fb6e1f915c40cd4b8b6000fa61200b7a83a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35439e6e4c3ed0088630257cbe4fb6e1f915c40cd4b8b6000fa61200b7a83a2d->enter($__internal_35439e6e4c3ed0088630257cbe4fb6e1f915c40cd4b8b6000fa61200b7a83a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5248cf6c9d31d9e497fd9cd31e3b72a0c8af0b09b4c3c0d78bf99db5245baa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5248cf6c9d31d9e497fd9cd31e3b72a0c8af0b09b4c3c0d78bf99db5245baa5->enter($__internal_c5248cf6c9d31d9e497fd9cd31e3b72a0c8af0b09b4c3c0d78bf99db5245baa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c5248cf6c9d31d9e497fd9cd31e3b72a0c8af0b09b4c3c0d78bf99db5245baa5->leave($__internal_c5248cf6c9d31d9e497fd9cd31e3b72a0c8af0b09b4c3c0d78bf99db5245baa5_prof);

        
        $__internal_35439e6e4c3ed0088630257cbe4fb6e1f915c40cd4b8b6000fa61200b7a83a2d->leave($__internal_35439e6e4c3ed0088630257cbe4fb6e1f915c40cd4b8b6000fa61200b7a83a2d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7660f0478271fdb287b1fa17511067ebd91d707a7903a7482ab62c0e8ddb7b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7660f0478271fdb287b1fa17511067ebd91d707a7903a7482ab62c0e8ddb7b46->enter($__internal_7660f0478271fdb287b1fa17511067ebd91d707a7903a7482ab62c0e8ddb7b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d4d9eb716e728a205364972e73cae206f58e7ffad5de443d394a83448b864c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4d9eb716e728a205364972e73cae206f58e7ffad5de443d394a83448b864c7->enter($__internal_3d4d9eb716e728a205364972e73cae206f58e7ffad5de443d394a83448b864c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d4d9eb716e728a205364972e73cae206f58e7ffad5de443d394a83448b864c7->leave($__internal_3d4d9eb716e728a205364972e73cae206f58e7ffad5de443d394a83448b864c7_prof);

        
        $__internal_7660f0478271fdb287b1fa17511067ebd91d707a7903a7482ab62c0e8ddb7b46->leave($__internal_7660f0478271fdb287b1fa17511067ebd91d707a7903a7482ab62c0e8ddb7b46_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_383d76f135f03b51b3a676d81bfe654655aa27e25e676ef715fae3244bdda698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383d76f135f03b51b3a676d81bfe654655aa27e25e676ef715fae3244bdda698->enter($__internal_383d76f135f03b51b3a676d81bfe654655aa27e25e676ef715fae3244bdda698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4557d9fc30117d9850dd1b87c4cbdd5a074bf29086fe8b8ea6d688427032adb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4557d9fc30117d9850dd1b87c4cbdd5a074bf29086fe8b8ea6d688427032adb1->enter($__internal_4557d9fc30117d9850dd1b87c4cbdd5a074bf29086fe8b8ea6d688427032adb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4557d9fc30117d9850dd1b87c4cbdd5a074bf29086fe8b8ea6d688427032adb1->leave($__internal_4557d9fc30117d9850dd1b87c4cbdd5a074bf29086fe8b8ea6d688427032adb1_prof);

        
        $__internal_383d76f135f03b51b3a676d81bfe654655aa27e25e676ef715fae3244bdda698->leave($__internal_383d76f135f03b51b3a676d81bfe654655aa27e25e676ef715fae3244bdda698_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
