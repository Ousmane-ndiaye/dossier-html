<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cbe54f18bcd2ec7904b5046b285c12f82dcedd8c9426bd5b09c59d5318f0d1c extends Twig_Template
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
        $__internal_1e5c0a8952116131db308f752ca7e9997c127600690dc8e1f260b28ea9108590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5c0a8952116131db308f752ca7e9997c127600690dc8e1f260b28ea9108590->enter($__internal_1e5c0a8952116131db308f752ca7e9997c127600690dc8e1f260b28ea9108590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8a5a599bbd71e1eba78df47001d738ce1c8d7a17c27215d35c99cc585dd097c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5a599bbd71e1eba78df47001d738ce1c8d7a17c27215d35c99cc585dd097c1->enter($__internal_8a5a599bbd71e1eba78df47001d738ce1c8d7a17c27215d35c99cc585dd097c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1e5c0a8952116131db308f752ca7e9997c127600690dc8e1f260b28ea9108590->leave($__internal_1e5c0a8952116131db308f752ca7e9997c127600690dc8e1f260b28ea9108590_prof);

        
        $__internal_8a5a599bbd71e1eba78df47001d738ce1c8d7a17c27215d35c99cc585dd097c1->leave($__internal_8a5a599bbd71e1eba78df47001d738ce1c8d7a17c27215d35c99cc585dd097c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
