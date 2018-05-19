<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_20b31c47bf094a8b67d7723d435789f37f5a6914c211d54cbeb4fcb75040603e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b31c47bf094a8b67d7723d435789f37f5a6914c211d54cbeb4fcb75040603e->enter($__internal_20b31c47bf094a8b67d7723d435789f37f5a6914c211d54cbeb4fcb75040603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_af16a6b9ebb66ff1abcaa2ac95e5a7af36324c7ede4b3a25b2720db74c1b8b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af16a6b9ebb66ff1abcaa2ac95e5a7af36324c7ede4b3a25b2720db74c1b8b33->enter($__internal_af16a6b9ebb66ff1abcaa2ac95e5a7af36324c7ede4b3a25b2720db74c1b8b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_20b31c47bf094a8b67d7723d435789f37f5a6914c211d54cbeb4fcb75040603e->leave($__internal_20b31c47bf094a8b67d7723d435789f37f5a6914c211d54cbeb4fcb75040603e_prof);

        
        $__internal_af16a6b9ebb66ff1abcaa2ac95e5a7af36324c7ede4b3a25b2720db74c1b8b33->leave($__internal_af16a6b9ebb66ff1abcaa2ac95e5a7af36324c7ede4b3a25b2720db74c1b8b33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
