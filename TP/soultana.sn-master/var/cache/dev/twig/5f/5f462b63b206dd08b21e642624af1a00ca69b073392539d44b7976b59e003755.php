<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cdf3da827ae15155c54c8a96aa20bd1c1d3a1d98fc877ab9bb83957028972073 extends Twig_Template
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
        $__internal_8e7adeb0efeeea032f31a6e0b267d3595ba04d9ab7ce706ddd4217a1d6f240fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7adeb0efeeea032f31a6e0b267d3595ba04d9ab7ce706ddd4217a1d6f240fe->enter($__internal_8e7adeb0efeeea032f31a6e0b267d3595ba04d9ab7ce706ddd4217a1d6f240fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3f661bb4cea87ff03a594509db782d0fc7815811c0e068f8a50069e718517187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f661bb4cea87ff03a594509db782d0fc7815811c0e068f8a50069e718517187->enter($__internal_3f661bb4cea87ff03a594509db782d0fc7815811c0e068f8a50069e718517187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8e7adeb0efeeea032f31a6e0b267d3595ba04d9ab7ce706ddd4217a1d6f240fe->leave($__internal_8e7adeb0efeeea032f31a6e0b267d3595ba04d9ab7ce706ddd4217a1d6f240fe_prof);

        
        $__internal_3f661bb4cea87ff03a594509db782d0fc7815811c0e068f8a50069e718517187->leave($__internal_3f661bb4cea87ff03a594509db782d0fc7815811c0e068f8a50069e718517187_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
