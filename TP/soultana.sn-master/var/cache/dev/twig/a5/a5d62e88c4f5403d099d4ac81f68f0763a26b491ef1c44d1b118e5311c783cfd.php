<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9e2c5a3d078d7aa19a74d2fd27d6243c0249da59f4e18117fd99d6d4ce28a52a extends Twig_Template
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
        $__internal_d958b4c25d201b5c668ffc88a53eafc2a13dc23948acf5566995873cd5cb7025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d958b4c25d201b5c668ffc88a53eafc2a13dc23948acf5566995873cd5cb7025->enter($__internal_d958b4c25d201b5c668ffc88a53eafc2a13dc23948acf5566995873cd5cb7025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_92a1783c057311ead240aa0e33e36567952de2453b4c580e80a8706b5868f273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a1783c057311ead240aa0e33e36567952de2453b4c580e80a8706b5868f273->enter($__internal_92a1783c057311ead240aa0e33e36567952de2453b4c580e80a8706b5868f273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d958b4c25d201b5c668ffc88a53eafc2a13dc23948acf5566995873cd5cb7025->leave($__internal_d958b4c25d201b5c668ffc88a53eafc2a13dc23948acf5566995873cd5cb7025_prof);

        
        $__internal_92a1783c057311ead240aa0e33e36567952de2453b4c580e80a8706b5868f273->leave($__internal_92a1783c057311ead240aa0e33e36567952de2453b4c580e80a8706b5868f273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
