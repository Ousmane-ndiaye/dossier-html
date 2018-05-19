<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39176bd9b91180d1f752583a24a92a9f9311951353d5d4bb9675fab7632a9e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39176bd9b91180d1f752583a24a92a9f9311951353d5d4bb9675fab7632a9e9c->enter($__internal_39176bd9b91180d1f752583a24a92a9f9311951353d5d4bb9675fab7632a9e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f8db41e5cf4c0be66f086e92640d2c5ac355bb3c0d60cc9c0cc7aa0fd2000854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8db41e5cf4c0be66f086e92640d2c5ac355bb3c0d60cc9c0cc7aa0fd2000854->enter($__internal_f8db41e5cf4c0be66f086e92640d2c5ac355bb3c0d60cc9c0cc7aa0fd2000854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_39176bd9b91180d1f752583a24a92a9f9311951353d5d4bb9675fab7632a9e9c->leave($__internal_39176bd9b91180d1f752583a24a92a9f9311951353d5d4bb9675fab7632a9e9c_prof);

        
        $__internal_f8db41e5cf4c0be66f086e92640d2c5ac355bb3c0d60cc9c0cc7aa0fd2000854->leave($__internal_f8db41e5cf4c0be66f086e92640d2c5ac355bb3c0d60cc9c0cc7aa0fd2000854_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3600ecbf61406d3dadde73243fdf374af49702adc93eb00ca1f1cba50aeb2dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3600ecbf61406d3dadde73243fdf374af49702adc93eb00ca1f1cba50aeb2dbd->enter($__internal_3600ecbf61406d3dadde73243fdf374af49702adc93eb00ca1f1cba50aeb2dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0c83f1d3be3b98c6bb815f62216f06fc0ce4d8311bd392568da07d3b82a19ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c83f1d3be3b98c6bb815f62216f06fc0ce4d8311bd392568da07d3b82a19ef->enter($__internal_f0c83f1d3be3b98c6bb815f62216f06fc0ce4d8311bd392568da07d3b82a19ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f0c83f1d3be3b98c6bb815f62216f06fc0ce4d8311bd392568da07d3b82a19ef->leave($__internal_f0c83f1d3be3b98c6bb815f62216f06fc0ce4d8311bd392568da07d3b82a19ef_prof);

        
        $__internal_3600ecbf61406d3dadde73243fdf374af49702adc93eb00ca1f1cba50aeb2dbd->leave($__internal_3600ecbf61406d3dadde73243fdf374af49702adc93eb00ca1f1cba50aeb2dbd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
