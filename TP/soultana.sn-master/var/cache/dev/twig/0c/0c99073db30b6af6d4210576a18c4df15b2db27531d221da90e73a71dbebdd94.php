<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf923edc6235522d43de524cd6a9b12a30b15d6132dea0e10865cee31e1f7f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf923edc6235522d43de524cd6a9b12a30b15d6132dea0e10865cee31e1f7f24->enter($__internal_bf923edc6235522d43de524cd6a9b12a30b15d6132dea0e10865cee31e1f7f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b076399afc7d278d00dd0f3483f925a7ed68331edf6aa1dbfb126d6c024e5c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b076399afc7d278d00dd0f3483f925a7ed68331edf6aa1dbfb126d6c024e5c39->enter($__internal_b076399afc7d278d00dd0f3483f925a7ed68331edf6aa1dbfb126d6c024e5c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf923edc6235522d43de524cd6a9b12a30b15d6132dea0e10865cee31e1f7f24->leave($__internal_bf923edc6235522d43de524cd6a9b12a30b15d6132dea0e10865cee31e1f7f24_prof);

        
        $__internal_b076399afc7d278d00dd0f3483f925a7ed68331edf6aa1dbfb126d6c024e5c39->leave($__internal_b076399afc7d278d00dd0f3483f925a7ed68331edf6aa1dbfb126d6c024e5c39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5a29cde0a09f6c69c1745cc86f02e9f46b4e6f2a9149195ecf9a024a54684f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a29cde0a09f6c69c1745cc86f02e9f46b4e6f2a9149195ecf9a024a54684f3->enter($__internal_a5a29cde0a09f6c69c1745cc86f02e9f46b4e6f2a9149195ecf9a024a54684f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2434295e0318578ead83a6f9093ea454c3df4837fd58c5de3f66b3260f7fc1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2434295e0318578ead83a6f9093ea454c3df4837fd58c5de3f66b3260f7fc1bd->enter($__internal_2434295e0318578ead83a6f9093ea454c3df4837fd58c5de3f66b3260f7fc1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2434295e0318578ead83a6f9093ea454c3df4837fd58c5de3f66b3260f7fc1bd->leave($__internal_2434295e0318578ead83a6f9093ea454c3df4837fd58c5de3f66b3260f7fc1bd_prof);

        
        $__internal_a5a29cde0a09f6c69c1745cc86f02e9f46b4e6f2a9149195ecf9a024a54684f3->leave($__internal_a5a29cde0a09f6c69c1745cc86f02e9f46b4e6f2a9149195ecf9a024a54684f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e12950b0819ac3577e10689baf21214155de4ef2561f3c5530d1744aa3f722e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12950b0819ac3577e10689baf21214155de4ef2561f3c5530d1744aa3f722e4->enter($__internal_e12950b0819ac3577e10689baf21214155de4ef2561f3c5530d1744aa3f722e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1abc00da5450220467eed0fabfc92215425a58686ed703527b83d658e715bd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abc00da5450220467eed0fabfc92215425a58686ed703527b83d658e715bd29->enter($__internal_1abc00da5450220467eed0fabfc92215425a58686ed703527b83d658e715bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1abc00da5450220467eed0fabfc92215425a58686ed703527b83d658e715bd29->leave($__internal_1abc00da5450220467eed0fabfc92215425a58686ed703527b83d658e715bd29_prof);

        
        $__internal_e12950b0819ac3577e10689baf21214155de4ef2561f3c5530d1744aa3f722e4->leave($__internal_e12950b0819ac3577e10689baf21214155de4ef2561f3c5530d1744aa3f722e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0475b7f383e3281e1f52d6ed341c2434d7a1323d6182248489da8c33777ca67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0475b7f383e3281e1f52d6ed341c2434d7a1323d6182248489da8c33777ca67->enter($__internal_b0475b7f383e3281e1f52d6ed341c2434d7a1323d6182248489da8c33777ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dea8a6546f7f52300ae8aa62c5296003ce3a637259d770bbbe2824bcb7c9287c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea8a6546f7f52300ae8aa62c5296003ce3a637259d770bbbe2824bcb7c9287c->enter($__internal_dea8a6546f7f52300ae8aa62c5296003ce3a637259d770bbbe2824bcb7c9287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dea8a6546f7f52300ae8aa62c5296003ce3a637259d770bbbe2824bcb7c9287c->leave($__internal_dea8a6546f7f52300ae8aa62c5296003ce3a637259d770bbbe2824bcb7c9287c_prof);

        
        $__internal_b0475b7f383e3281e1f52d6ed341c2434d7a1323d6182248489da8c33777ca67->leave($__internal_b0475b7f383e3281e1f52d6ed341c2434d7a1323d6182248489da8c33777ca67_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
