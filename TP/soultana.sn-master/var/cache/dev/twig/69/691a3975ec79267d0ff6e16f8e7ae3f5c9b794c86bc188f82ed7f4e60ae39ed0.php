<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_9ccef2ccdcd63730e4b49d5d36d4335b8121e225508512d987be3b6fceeda176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_211f368cd2653563d5bd987e08b477bc9761eb4f8b8dfefe7d30e0be91f077e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211f368cd2653563d5bd987e08b477bc9761eb4f8b8dfefe7d30e0be91f077e7->enter($__internal_211f368cd2653563d5bd987e08b477bc9761eb4f8b8dfefe7d30e0be91f077e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_453650a3adca0b5193710d5dadd00a6060a4b416f26cc050d61abf37fb17268d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453650a3adca0b5193710d5dadd00a6060a4b416f26cc050d61abf37fb17268d->enter($__internal_453650a3adca0b5193710d5dadd00a6060a4b416f26cc050d61abf37fb17268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211f368cd2653563d5bd987e08b477bc9761eb4f8b8dfefe7d30e0be91f077e7->leave($__internal_211f368cd2653563d5bd987e08b477bc9761eb4f8b8dfefe7d30e0be91f077e7_prof);

        
        $__internal_453650a3adca0b5193710d5dadd00a6060a4b416f26cc050d61abf37fb17268d->leave($__internal_453650a3adca0b5193710d5dadd00a6060a4b416f26cc050d61abf37fb17268d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14ff51b1ce5ad12ce1054323452d20801fe4c97be7e5c44cb3bb16b68261990d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ff51b1ce5ad12ce1054323452d20801fe4c97be7e5c44cb3bb16b68261990d->enter($__internal_14ff51b1ce5ad12ce1054323452d20801fe4c97be7e5c44cb3bb16b68261990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d339cffc8eab741325718c3ba2fc7cfe1a38f7223a6a25d94d195c62599e4b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d339cffc8eab741325718c3ba2fc7cfe1a38f7223a6a25d94d195c62599e4b7c->enter($__internal_d339cffc8eab741325718c3ba2fc7cfe1a38f7223a6a25d94d195c62599e4b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d339cffc8eab741325718c3ba2fc7cfe1a38f7223a6a25d94d195c62599e4b7c->leave($__internal_d339cffc8eab741325718c3ba2fc7cfe1a38f7223a6a25d94d195c62599e4b7c_prof);

        
        $__internal_14ff51b1ce5ad12ce1054323452d20801fe4c97be7e5c44cb3bb16b68261990d->leave($__internal_14ff51b1ce5ad12ce1054323452d20801fe4c97be7e5c44cb3bb16b68261990d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
