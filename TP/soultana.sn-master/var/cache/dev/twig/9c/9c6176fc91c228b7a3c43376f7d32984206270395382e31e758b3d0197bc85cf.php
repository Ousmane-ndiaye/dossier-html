<?php

/* :reservation:index.html.twig */
class __TwigTemplate_5165123f1ce604fc509cc5736164d4bfe37af9e34b0a16dc78fb87b4df26d37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf825d98b99a6877e651c07642760a6042ae485890693aaa61483d5411202c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf825d98b99a6877e651c07642760a6042ae485890693aaa61483d5411202c62->enter($__internal_cf825d98b99a6877e651c07642760a6042ae485890693aaa61483d5411202c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_ca128908feede83aacf17db452663903b62649aa34d168c90c74117e2874b9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca128908feede83aacf17db452663903b62649aa34d168c90c74117e2874b9a7->enter($__internal_ca128908feede83aacf17db452663903b62649aa34d168c90c74117e2874b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf825d98b99a6877e651c07642760a6042ae485890693aaa61483d5411202c62->leave($__internal_cf825d98b99a6877e651c07642760a6042ae485890693aaa61483d5411202c62_prof);

        
        $__internal_ca128908feede83aacf17db452663903b62649aa34d168c90c74117e2874b9a7->leave($__internal_ca128908feede83aacf17db452663903b62649aa34d168c90c74117e2874b9a7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c5ea875205ca119c9a086f903c78441dea8eb38b1a4b5af80483683d7507091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5ea875205ca119c9a086f903c78441dea8eb38b1a4b5af80483683d7507091->enter($__internal_4c5ea875205ca119c9a086f903c78441dea8eb38b1a4b5af80483683d7507091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_212fc6e452a151ed0b92cf0ccca46eff3332be36b6e068f66992ede46d27dbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212fc6e452a151ed0b92cf0ccca46eff3332be36b6e068f66992ede46d27dbcc->enter($__internal_212fc6e452a151ed0b92cf0ccca46eff3332be36b6e068f66992ede46d27dbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_212fc6e452a151ed0b92cf0ccca46eff3332be36b6e068f66992ede46d27dbcc->leave($__internal_212fc6e452a151ed0b92cf0ccca46eff3332be36b6e068f66992ede46d27dbcc_prof);

        
        $__internal_4c5ea875205ca119c9a086f903c78441dea8eb38b1a4b5af80483683d7507091->leave($__internal_4c5ea875205ca119c9a086f903c78441dea8eb38b1a4b5af80483683d7507091_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Accueil{% endblock %}", ":reservation:index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/reservation/index.html.twig");
    }
}
