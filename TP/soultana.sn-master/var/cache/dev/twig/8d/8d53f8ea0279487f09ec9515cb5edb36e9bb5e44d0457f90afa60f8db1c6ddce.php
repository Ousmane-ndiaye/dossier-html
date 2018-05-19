<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e7de65dc322f3baf9afdbd684d2d1da932942dc33f335d8588eb99db32a9d5 extends Twig_Template
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
        $__internal_4639c2b8fa42b9711dbe7708eb14e99efaffc2023dc0025156140a00d3e9b6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4639c2b8fa42b9711dbe7708eb14e99efaffc2023dc0025156140a00d3e9b6b6->enter($__internal_4639c2b8fa42b9711dbe7708eb14e99efaffc2023dc0025156140a00d3e9b6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_74a95c73ba8a4edfa3060c1ec2fde80a7c18af49c76f4e9ef3828a8638b665e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a95c73ba8a4edfa3060c1ec2fde80a7c18af49c76f4e9ef3828a8638b665e0->enter($__internal_74a95c73ba8a4edfa3060c1ec2fde80a7c18af49c76f4e9ef3828a8638b665e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4639c2b8fa42b9711dbe7708eb14e99efaffc2023dc0025156140a00d3e9b6b6->leave($__internal_4639c2b8fa42b9711dbe7708eb14e99efaffc2023dc0025156140a00d3e9b6b6_prof);

        
        $__internal_74a95c73ba8a4edfa3060c1ec2fde80a7c18af49c76f4e9ef3828a8638b665e0->leave($__internal_74a95c73ba8a4edfa3060c1ec2fde80a7c18af49c76f4e9ef3828a8638b665e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
