<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45bf5c7d21036b1fd2c456510a44c89889dbb06d472826a666f9502bdc6ffb24 extends Twig_Template
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
        $__internal_b37acbda705b7d61efa3a365ca2d0810700f4ee9bde1e3f1c53f60a44fae7426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37acbda705b7d61efa3a365ca2d0810700f4ee9bde1e3f1c53f60a44fae7426->enter($__internal_b37acbda705b7d61efa3a365ca2d0810700f4ee9bde1e3f1c53f60a44fae7426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_da61dbd7f5b89838e6d9a0e279c98f7edf432aa3c76eaf0dd65aa89b34c4ffb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da61dbd7f5b89838e6d9a0e279c98f7edf432aa3c76eaf0dd65aa89b34c4ffb2->enter($__internal_da61dbd7f5b89838e6d9a0e279c98f7edf432aa3c76eaf0dd65aa89b34c4ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b37acbda705b7d61efa3a365ca2d0810700f4ee9bde1e3f1c53f60a44fae7426->leave($__internal_b37acbda705b7d61efa3a365ca2d0810700f4ee9bde1e3f1c53f60a44fae7426_prof);

        
        $__internal_da61dbd7f5b89838e6d9a0e279c98f7edf432aa3c76eaf0dd65aa89b34c4ffb2->leave($__internal_da61dbd7f5b89838e6d9a0e279c98f7edf432aa3c76eaf0dd65aa89b34c4ffb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
