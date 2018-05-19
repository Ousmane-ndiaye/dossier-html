<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_772e2b9f2630c882d0eb31f418aa3642088da37778810dcaef1685f1b9e02eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772e2b9f2630c882d0eb31f418aa3642088da37778810dcaef1685f1b9e02eb0->enter($__internal_772e2b9f2630c882d0eb31f418aa3642088da37778810dcaef1685f1b9e02eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_023d86060261f38429141bd948052d84272c7a8e0311db09c68f6085ed47f6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023d86060261f38429141bd948052d84272c7a8e0311db09c68f6085ed47f6bf->enter($__internal_023d86060261f38429141bd948052d84272c7a8e0311db09c68f6085ed47f6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_772e2b9f2630c882d0eb31f418aa3642088da37778810dcaef1685f1b9e02eb0->leave($__internal_772e2b9f2630c882d0eb31f418aa3642088da37778810dcaef1685f1b9e02eb0_prof);

        
        $__internal_023d86060261f38429141bd948052d84272c7a8e0311db09c68f6085ed47f6bf->leave($__internal_023d86060261f38429141bd948052d84272c7a8e0311db09c68f6085ed47f6bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
