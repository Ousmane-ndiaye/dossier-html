<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
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
        $__internal_473b009ebdb8f9cf0fc7187776bc95428613b8a16f0bce97b5c027cf4c79306d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473b009ebdb8f9cf0fc7187776bc95428613b8a16f0bce97b5c027cf4c79306d->enter($__internal_473b009ebdb8f9cf0fc7187776bc95428613b8a16f0bce97b5c027cf4c79306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2629f19942349111d212b98a95598ebcc24b70ae3b0c895e51869334b4d1c92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2629f19942349111d212b98a95598ebcc24b70ae3b0c895e51869334b4d1c92d->enter($__internal_2629f19942349111d212b98a95598ebcc24b70ae3b0c895e51869334b4d1c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_473b009ebdb8f9cf0fc7187776bc95428613b8a16f0bce97b5c027cf4c79306d->leave($__internal_473b009ebdb8f9cf0fc7187776bc95428613b8a16f0bce97b5c027cf4c79306d_prof);

        
        $__internal_2629f19942349111d212b98a95598ebcc24b70ae3b0c895e51869334b4d1c92d->leave($__internal_2629f19942349111d212b98a95598ebcc24b70ae3b0c895e51869334b4d1c92d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
