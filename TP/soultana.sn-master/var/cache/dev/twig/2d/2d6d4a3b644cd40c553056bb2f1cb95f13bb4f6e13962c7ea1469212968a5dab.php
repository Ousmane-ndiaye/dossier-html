<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6c1891cfa0df1ad9c01e564727ba2e8328fa05bf37295d26f76c26e49bb91e73 extends Twig_Template
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
        $__internal_3176ce9753d130fd4b05c01c2c2f43fd20a93d848aacd34eb6570c339e8b20cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3176ce9753d130fd4b05c01c2c2f43fd20a93d848aacd34eb6570c339e8b20cc->enter($__internal_3176ce9753d130fd4b05c01c2c2f43fd20a93d848aacd34eb6570c339e8b20cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_68d93e2662eb0c3333884017a65573c01ec3ebaec3173aaa5f9d7bae262eb812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d93e2662eb0c3333884017a65573c01ec3ebaec3173aaa5f9d7bae262eb812->enter($__internal_68d93e2662eb0c3333884017a65573c01ec3ebaec3173aaa5f9d7bae262eb812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3176ce9753d130fd4b05c01c2c2f43fd20a93d848aacd34eb6570c339e8b20cc->leave($__internal_3176ce9753d130fd4b05c01c2c2f43fd20a93d848aacd34eb6570c339e8b20cc_prof);

        
        $__internal_68d93e2662eb0c3333884017a65573c01ec3ebaec3173aaa5f9d7bae262eb812->leave($__internal_68d93e2662eb0c3333884017a65573c01ec3ebaec3173aaa5f9d7bae262eb812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
