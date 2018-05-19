<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_90078b1e90f5d6996ca78d42d13a5442e1a209a9950e4aa028031fb5dd83ed7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90078b1e90f5d6996ca78d42d13a5442e1a209a9950e4aa028031fb5dd83ed7f->enter($__internal_90078b1e90f5d6996ca78d42d13a5442e1a209a9950e4aa028031fb5dd83ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bd2cce2be4c1e0e8b728e75fb2dddb456f5afabbe74b7cf1578735d140cb6c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2cce2be4c1e0e8b728e75fb2dddb456f5afabbe74b7cf1578735d140cb6c8e->enter($__internal_bd2cce2be4c1e0e8b728e75fb2dddb456f5afabbe74b7cf1578735d140cb6c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_90078b1e90f5d6996ca78d42d13a5442e1a209a9950e4aa028031fb5dd83ed7f->leave($__internal_90078b1e90f5d6996ca78d42d13a5442e1a209a9950e4aa028031fb5dd83ed7f_prof);

        
        $__internal_bd2cce2be4c1e0e8b728e75fb2dddb456f5afabbe74b7cf1578735d140cb6c8e->leave($__internal_bd2cce2be4c1e0e8b728e75fb2dddb456f5afabbe74b7cf1578735d140cb6c8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
