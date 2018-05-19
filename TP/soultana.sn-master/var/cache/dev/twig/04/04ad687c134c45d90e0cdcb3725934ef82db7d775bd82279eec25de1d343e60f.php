<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_c87553782e922198489dc7e9d77f7c4c460ba2301a255d44a3c3091a383522f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87553782e922198489dc7e9d77f7c4c460ba2301a255d44a3c3091a383522f1->enter($__internal_c87553782e922198489dc7e9d77f7c4c460ba2301a255d44a3c3091a383522f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f48f8453fc3d19e4be792db23320d1111c4e25b51d8233fea12f890e67896c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48f8453fc3d19e4be792db23320d1111c4e25b51d8233fea12f890e67896c77->enter($__internal_f48f8453fc3d19e4be792db23320d1111c4e25b51d8233fea12f890e67896c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c87553782e922198489dc7e9d77f7c4c460ba2301a255d44a3c3091a383522f1->leave($__internal_c87553782e922198489dc7e9d77f7c4c460ba2301a255d44a3c3091a383522f1_prof);

        
        $__internal_f48f8453fc3d19e4be792db23320d1111c4e25b51d8233fea12f890e67896c77->leave($__internal_f48f8453fc3d19e4be792db23320d1111c4e25b51d8233fea12f890e67896c77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
