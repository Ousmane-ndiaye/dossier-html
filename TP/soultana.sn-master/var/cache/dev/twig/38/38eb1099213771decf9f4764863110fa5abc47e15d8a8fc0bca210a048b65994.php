<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8a4715959982d62a4eaa372133700d380573fa9f6c314ef5bd53288d0f741fa extends Twig_Template
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
        $__internal_e54b83cb2db111f0b4fca4156b31b8302230beb4f9f865c506dbb9e7fd751d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54b83cb2db111f0b4fca4156b31b8302230beb4f9f865c506dbb9e7fd751d8c->enter($__internal_e54b83cb2db111f0b4fca4156b31b8302230beb4f9f865c506dbb9e7fd751d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a8a19a14f16cfa842f9a6d36af4035b86d78cf093d59b250eb0cb988803204c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a19a14f16cfa842f9a6d36af4035b86d78cf093d59b250eb0cb988803204c6->enter($__internal_a8a19a14f16cfa842f9a6d36af4035b86d78cf093d59b250eb0cb988803204c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e54b83cb2db111f0b4fca4156b31b8302230beb4f9f865c506dbb9e7fd751d8c->leave($__internal_e54b83cb2db111f0b4fca4156b31b8302230beb4f9f865c506dbb9e7fd751d8c_prof);

        
        $__internal_a8a19a14f16cfa842f9a6d36af4035b86d78cf093d59b250eb0cb988803204c6->leave($__internal_a8a19a14f16cfa842f9a6d36af4035b86d78cf093d59b250eb0cb988803204c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
