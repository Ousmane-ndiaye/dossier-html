<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_592e8f8412ccbe3048199d3164834fc70e57b6dab8d3604c10b287881c004b04 extends Twig_Template
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
        $__internal_c58659f3dcf3e68e6189274ad6f253fbcff74c637f455838048386f05b5cb0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58659f3dcf3e68e6189274ad6f253fbcff74c637f455838048386f05b5cb0a6->enter($__internal_c58659f3dcf3e68e6189274ad6f253fbcff74c637f455838048386f05b5cb0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cb9be2c83952aca89a9b321bba70330a0627ad815c960b95c53f5cf36badf4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9be2c83952aca89a9b321bba70330a0627ad815c960b95c53f5cf36badf4b0->enter($__internal_cb9be2c83952aca89a9b321bba70330a0627ad815c960b95c53f5cf36badf4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c58659f3dcf3e68e6189274ad6f253fbcff74c637f455838048386f05b5cb0a6->leave($__internal_c58659f3dcf3e68e6189274ad6f253fbcff74c637f455838048386f05b5cb0a6_prof);

        
        $__internal_cb9be2c83952aca89a9b321bba70330a0627ad815c960b95c53f5cf36badf4b0->leave($__internal_cb9be2c83952aca89a9b321bba70330a0627ad815c960b95c53f5cf36badf4b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
