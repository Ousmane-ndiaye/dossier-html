<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_67d1e0e0b391cc1f9de9076683a365cc818a5865f732ada451c3498b7121b9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d1e0e0b391cc1f9de9076683a365cc818a5865f732ada451c3498b7121b9a1->enter($__internal_67d1e0e0b391cc1f9de9076683a365cc818a5865f732ada451c3498b7121b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_940d95923a0f1a4ebb72f4b124ea158f0a8b5882374fc6ad6b56541abacd81aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940d95923a0f1a4ebb72f4b124ea158f0a8b5882374fc6ad6b56541abacd81aa->enter($__internal_940d95923a0f1a4ebb72f4b124ea158f0a8b5882374fc6ad6b56541abacd81aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_67d1e0e0b391cc1f9de9076683a365cc818a5865f732ada451c3498b7121b9a1->leave($__internal_67d1e0e0b391cc1f9de9076683a365cc818a5865f732ada451c3498b7121b9a1_prof);

        
        $__internal_940d95923a0f1a4ebb72f4b124ea158f0a8b5882374fc6ad6b56541abacd81aa->leave($__internal_940d95923a0f1a4ebb72f4b124ea158f0a8b5882374fc6ad6b56541abacd81aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
