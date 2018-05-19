<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_4e686003131179917e02daf9a450de0ce5e6c14bb5533712350be269aa76c37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e686003131179917e02daf9a450de0ce5e6c14bb5533712350be269aa76c37f->enter($__internal_4e686003131179917e02daf9a450de0ce5e6c14bb5533712350be269aa76c37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f4135ad5b562edad33fb173fcd7ef4abdf58739b985f091dfe201fb215a2850d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4135ad5b562edad33fb173fcd7ef4abdf58739b985f091dfe201fb215a2850d->enter($__internal_f4135ad5b562edad33fb173fcd7ef4abdf58739b985f091dfe201fb215a2850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4e686003131179917e02daf9a450de0ce5e6c14bb5533712350be269aa76c37f->leave($__internal_4e686003131179917e02daf9a450de0ce5e6c14bb5533712350be269aa76c37f_prof);

        
        $__internal_f4135ad5b562edad33fb173fcd7ef4abdf58739b985f091dfe201fb215a2850d->leave($__internal_f4135ad5b562edad33fb173fcd7ef4abdf58739b985f091dfe201fb215a2850d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
