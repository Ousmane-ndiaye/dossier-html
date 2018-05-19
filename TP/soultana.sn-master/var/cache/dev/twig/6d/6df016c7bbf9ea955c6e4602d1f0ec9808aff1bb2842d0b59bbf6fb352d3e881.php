<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d6f0a730c3bd69fe21ff8968ffbb53bc8776ce66392bacef7ec9877d7e4a9c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f0a730c3bd69fe21ff8968ffbb53bc8776ce66392bacef7ec9877d7e4a9c63->enter($__internal_d6f0a730c3bd69fe21ff8968ffbb53bc8776ce66392bacef7ec9877d7e4a9c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b712672caec2864344cd814061005736bc669535c1c232b4aff759d8fd2d026c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b712672caec2864344cd814061005736bc669535c1c232b4aff759d8fd2d026c->enter($__internal_b712672caec2864344cd814061005736bc669535c1c232b4aff759d8fd2d026c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f0a730c3bd69fe21ff8968ffbb53bc8776ce66392bacef7ec9877d7e4a9c63->leave($__internal_d6f0a730c3bd69fe21ff8968ffbb53bc8776ce66392bacef7ec9877d7e4a9c63_prof);

        
        $__internal_b712672caec2864344cd814061005736bc669535c1c232b4aff759d8fd2d026c->leave($__internal_b712672caec2864344cd814061005736bc669535c1c232b4aff759d8fd2d026c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7038e8e6147b479dd8ca808af96b9d4add569aa060c648ef8161ca99b92824c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7038e8e6147b479dd8ca808af96b9d4add569aa060c648ef8161ca99b92824c0->enter($__internal_7038e8e6147b479dd8ca808af96b9d4add569aa060c648ef8161ca99b92824c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_199c97634af6843fada69afcc4a3e4696f2dd01623b710445c68a440e758fa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199c97634af6843fada69afcc4a3e4696f2dd01623b710445c68a440e758fa37->enter($__internal_199c97634af6843fada69afcc4a3e4696f2dd01623b710445c68a440e758fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_199c97634af6843fada69afcc4a3e4696f2dd01623b710445c68a440e758fa37->leave($__internal_199c97634af6843fada69afcc4a3e4696f2dd01623b710445c68a440e758fa37_prof);

        
        $__internal_7038e8e6147b479dd8ca808af96b9d4add569aa060c648ef8161ca99b92824c0->leave($__internal_7038e8e6147b479dd8ca808af96b9d4add569aa060c648ef8161ca99b92824c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99b544b4f6318b7bd53ce23fe5152a86c5e2fc2084392054d36f9831b9b85751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b544b4f6318b7bd53ce23fe5152a86c5e2fc2084392054d36f9831b9b85751->enter($__internal_99b544b4f6318b7bd53ce23fe5152a86c5e2fc2084392054d36f9831b9b85751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ee5c258ea7109333894d2c921c7648dd501fe53b0c41af12a6cf4a5010b3d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee5c258ea7109333894d2c921c7648dd501fe53b0c41af12a6cf4a5010b3d33->enter($__internal_8ee5c258ea7109333894d2c921c7648dd501fe53b0c41af12a6cf4a5010b3d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ee5c258ea7109333894d2c921c7648dd501fe53b0c41af12a6cf4a5010b3d33->leave($__internal_8ee5c258ea7109333894d2c921c7648dd501fe53b0c41af12a6cf4a5010b3d33_prof);

        
        $__internal_99b544b4f6318b7bd53ce23fe5152a86c5e2fc2084392054d36f9831b9b85751->leave($__internal_99b544b4f6318b7bd53ce23fe5152a86c5e2fc2084392054d36f9831b9b85751_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23903f23097dfeffb70481a2370fe5ee5fbc12add3cd72b78289fe9a06b39de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23903f23097dfeffb70481a2370fe5ee5fbc12add3cd72b78289fe9a06b39de4->enter($__internal_23903f23097dfeffb70481a2370fe5ee5fbc12add3cd72b78289fe9a06b39de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cadebe6875281a76d7c8a222fef8c0b475f4b99663a7ad4b17383064b5eaadeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadebe6875281a76d7c8a222fef8c0b475f4b99663a7ad4b17383064b5eaadeb->enter($__internal_cadebe6875281a76d7c8a222fef8c0b475f4b99663a7ad4b17383064b5eaadeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cadebe6875281a76d7c8a222fef8c0b475f4b99663a7ad4b17383064b5eaadeb->leave($__internal_cadebe6875281a76d7c8a222fef8c0b475f4b99663a7ad4b17383064b5eaadeb_prof);

        
        $__internal_23903f23097dfeffb70481a2370fe5ee5fbc12add3cd72b78289fe9a06b39de4->leave($__internal_23903f23097dfeffb70481a2370fe5ee5fbc12add3cd72b78289fe9a06b39de4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
