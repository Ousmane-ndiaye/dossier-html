<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_defdf6d3f704ba170c9208a867cc48e06f6ded494e4cf0bec8e51a6f0c96e07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defdf6d3f704ba170c9208a867cc48e06f6ded494e4cf0bec8e51a6f0c96e07f->enter($__internal_defdf6d3f704ba170c9208a867cc48e06f6ded494e4cf0bec8e51a6f0c96e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6f748547be34cb2f48486ed6501000908fe967a70f00372d6605f7b0c92bcbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f748547be34cb2f48486ed6501000908fe967a70f00372d6605f7b0c92bcbca->enter($__internal_6f748547be34cb2f48486ed6501000908fe967a70f00372d6605f7b0c92bcbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_defdf6d3f704ba170c9208a867cc48e06f6ded494e4cf0bec8e51a6f0c96e07f->leave($__internal_defdf6d3f704ba170c9208a867cc48e06f6ded494e4cf0bec8e51a6f0c96e07f_prof);

        
        $__internal_6f748547be34cb2f48486ed6501000908fe967a70f00372d6605f7b0c92bcbca->leave($__internal_6f748547be34cb2f48486ed6501000908fe967a70f00372d6605f7b0c92bcbca_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cea3412f279720dfe978e3df36c945dfd1c4edeb3e05f00d8d1af90bd3e8b28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea3412f279720dfe978e3df36c945dfd1c4edeb3e05f00d8d1af90bd3e8b28b->enter($__internal_cea3412f279720dfe978e3df36c945dfd1c4edeb3e05f00d8d1af90bd3e8b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_59f5365773bd6b49c9c60dac69fd388dd7e088d2a0fbdb921038afae982da3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f5365773bd6b49c9c60dac69fd388dd7e088d2a0fbdb921038afae982da3bb->enter($__internal_59f5365773bd6b49c9c60dac69fd388dd7e088d2a0fbdb921038afae982da3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_59f5365773bd6b49c9c60dac69fd388dd7e088d2a0fbdb921038afae982da3bb->leave($__internal_59f5365773bd6b49c9c60dac69fd388dd7e088d2a0fbdb921038afae982da3bb_prof);

        
        $__internal_cea3412f279720dfe978e3df36c945dfd1c4edeb3e05f00d8d1af90bd3e8b28b->leave($__internal_cea3412f279720dfe978e3df36c945dfd1c4edeb3e05f00d8d1af90bd3e8b28b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00de5e610e966eddd297ebdb4b3e4ee00c47f9d00346050fd71f0839c7766d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00de5e610e966eddd297ebdb4b3e4ee00c47f9d00346050fd71f0839c7766d1b->enter($__internal_00de5e610e966eddd297ebdb4b3e4ee00c47f9d00346050fd71f0839c7766d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bd76aa1f542c91e2df435779272b55ea1f06b57cbdf242f1b2d992f5d17d173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd76aa1f542c91e2df435779272b55ea1f06b57cbdf242f1b2d992f5d17d173->enter($__internal_0bd76aa1f542c91e2df435779272b55ea1f06b57cbdf242f1b2d992f5d17d173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0bd76aa1f542c91e2df435779272b55ea1f06b57cbdf242f1b2d992f5d17d173->leave($__internal_0bd76aa1f542c91e2df435779272b55ea1f06b57cbdf242f1b2d992f5d17d173_prof);

        
        $__internal_00de5e610e966eddd297ebdb4b3e4ee00c47f9d00346050fd71f0839c7766d1b->leave($__internal_00de5e610e966eddd297ebdb4b3e4ee00c47f9d00346050fd71f0839c7766d1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
