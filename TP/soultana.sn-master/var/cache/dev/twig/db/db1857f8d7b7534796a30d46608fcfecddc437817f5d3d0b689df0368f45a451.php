<?php

/* RESERVATIONBundle:Reservation:index.html.twig */
class __TwigTemplate_a3d56a9cbed28a8cba1385591976ed3f42b877aa192906084a88b453904057f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RESERVATIONBundle:Reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c91614554634bb1b08341792aa65356d9de370bd1868fba387259e175e2a033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c91614554634bb1b08341792aa65356d9de370bd1868fba387259e175e2a033->enter($__internal_0c91614554634bb1b08341792aa65356d9de370bd1868fba387259e175e2a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Reservation:index.html.twig"));

        $__internal_3b2f3ce08fe001157e39834e442585fbb832789d3a55254b456283aa3a78fb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2f3ce08fe001157e39834e442585fbb832789d3a55254b456283aa3a78fb2b->enter($__internal_3b2f3ce08fe001157e39834e442585fbb832789d3a55254b456283aa3a78fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c91614554634bb1b08341792aa65356d9de370bd1868fba387259e175e2a033->leave($__internal_0c91614554634bb1b08341792aa65356d9de370bd1868fba387259e175e2a033_prof);

        
        $__internal_3b2f3ce08fe001157e39834e442585fbb832789d3a55254b456283aa3a78fb2b->leave($__internal_3b2f3ce08fe001157e39834e442585fbb832789d3a55254b456283aa3a78fb2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc6f97feab7ceed15f31b4c7a8c129a444d6f5bc7c21de34bb661d764560c6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6f97feab7ceed15f31b4c7a8c129a444d6f5bc7c21de34bb661d764560c6fc->enter($__internal_fc6f97feab7ceed15f31b4c7a8c129a444d6f5bc7c21de34bb661d764560c6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4041b8fcd30841e968da56b23c3ff9e0a0abfde9a7bd89cc91642ecaad9aa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4041b8fcd30841e968da56b23c3ff9e0a0abfde9a7bd89cc91642ecaad9aa95->enter($__internal_f4041b8fcd30841e968da56b23c3ff9e0a0abfde9a7bd89cc91642ecaad9aa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RESERVATIONBundle:Reservation:index";
        
        $__internal_f4041b8fcd30841e968da56b23c3ff9e0a0abfde9a7bd89cc91642ecaad9aa95->leave($__internal_f4041b8fcd30841e968da56b23c3ff9e0a0abfde9a7bd89cc91642ecaad9aa95_prof);

        
        $__internal_fc6f97feab7ceed15f31b4c7a8c129a444d6f5bc7c21de34bb661d764560c6fc->leave($__internal_fc6f97feab7ceed15f31b4c7a8c129a444d6f5bc7c21de34bb661d764560c6fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_032ec38140399a951e37eb4453a7c718ffe1b4e36348728f93ab8570d866cb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032ec38140399a951e37eb4453a7c718ffe1b4e36348728f93ab8570d866cb43->enter($__internal_032ec38140399a951e37eb4453a7c718ffe1b4e36348728f93ab8570d866cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbda17682076d25767fcefa7ff0a8464585eff98e28e45b74afbd7715bd5fc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbda17682076d25767fcefa7ff0a8464585eff98e28e45b74afbd7715bd5fc62->enter($__internal_dbda17682076d25767fcefa7ff0a8464585eff98e28e45b74afbd7715bd5fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Reservation:index page</h1>
";
        
        $__internal_dbda17682076d25767fcefa7ff0a8464585eff98e28e45b74afbd7715bd5fc62->leave($__internal_dbda17682076d25767fcefa7ff0a8464585eff98e28e45b74afbd7715bd5fc62_prof);

        
        $__internal_032ec38140399a951e37eb4453a7c718ffe1b4e36348728f93ab8570d866cb43->leave($__internal_032ec38140399a951e37eb4453a7c718ffe1b4e36348728f93ab8570d866cb43_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}RESERVATIONBundle:Reservation:index{% endblock %}

{% block body %}
<h1>Welcome to the Reservation:index page</h1>
{% endblock %}
", "RESERVATIONBundle:Reservation:index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/src/SNT/ReservationBundle/Resources/views/Reservation/index.html.twig");
    }
}
