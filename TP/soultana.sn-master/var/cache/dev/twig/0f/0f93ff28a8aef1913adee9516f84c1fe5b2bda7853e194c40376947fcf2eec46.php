<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88fa095271f0b72c40f5caa69b7b8f0d25ed25e6f42e1cf82ff1111deec3979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82cfa8fd293737bed1504fecf6df99fdaa4bc1f266e099c6a2df3bcea09b42da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cfa8fd293737bed1504fecf6df99fdaa4bc1f266e099c6a2df3bcea09b42da->enter($__internal_82cfa8fd293737bed1504fecf6df99fdaa4bc1f266e099c6a2df3bcea09b42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_906e536af20d49043daae0204e6d9937f402c956b381c16a0cf9bda0557bc7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906e536af20d49043daae0204e6d9937f402c956b381c16a0cf9bda0557bc7dd->enter($__internal_906e536af20d49043daae0204e6d9937f402c956b381c16a0cf9bda0557bc7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_82cfa8fd293737bed1504fecf6df99fdaa4bc1f266e099c6a2df3bcea09b42da->leave($__internal_82cfa8fd293737bed1504fecf6df99fdaa4bc1f266e099c6a2df3bcea09b42da_prof);

        
        $__internal_906e536af20d49043daae0204e6d9937f402c956b381c16a0cf9bda0557bc7dd->leave($__internal_906e536af20d49043daae0204e6d9937f402c956b381c16a0cf9bda0557bc7dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
