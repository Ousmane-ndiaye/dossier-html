<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9906a7bb6d4587fc2ea785007594fb1945e70c549a8eb237652fa8e706c8c68 extends Twig_Template
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
        $__internal_8d3633be0c789bcc33cb6b8bffdb36cf662610883be3e789ddfaf7182306faa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3633be0c789bcc33cb6b8bffdb36cf662610883be3e789ddfaf7182306faa5->enter($__internal_8d3633be0c789bcc33cb6b8bffdb36cf662610883be3e789ddfaf7182306faa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3d76552668ecd4293bcdf712b357d67a0c1a84adba555bd081691eb44d6b1104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d76552668ecd4293bcdf712b357d67a0c1a84adba555bd081691eb44d6b1104->enter($__internal_3d76552668ecd4293bcdf712b357d67a0c1a84adba555bd081691eb44d6b1104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8d3633be0c789bcc33cb6b8bffdb36cf662610883be3e789ddfaf7182306faa5->leave($__internal_8d3633be0c789bcc33cb6b8bffdb36cf662610883be3e789ddfaf7182306faa5_prof);

        
        $__internal_3d76552668ecd4293bcdf712b357d67a0c1a84adba555bd081691eb44d6b1104->leave($__internal_3d76552668ecd4293bcdf712b357d67a0c1a84adba555bd081691eb44d6b1104_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
