<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_e57d1fce2ca0a843a775c24d6166f92d07ce5f5ec0264cc47c1d0a4fc4a42ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57d1fce2ca0a843a775c24d6166f92d07ce5f5ec0264cc47c1d0a4fc4a42ecc->enter($__internal_e57d1fce2ca0a843a775c24d6166f92d07ce5f5ec0264cc47c1d0a4fc4a42ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2a12c246c8faf982fcac4e0e7ea89095db0c28fa03aeb9569a3c103de9c0353c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a12c246c8faf982fcac4e0e7ea89095db0c28fa03aeb9569a3c103de9c0353c->enter($__internal_2a12c246c8faf982fcac4e0e7ea89095db0c28fa03aeb9569a3c103de9c0353c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e57d1fce2ca0a843a775c24d6166f92d07ce5f5ec0264cc47c1d0a4fc4a42ecc->leave($__internal_e57d1fce2ca0a843a775c24d6166f92d07ce5f5ec0264cc47c1d0a4fc4a42ecc_prof);

        
        $__internal_2a12c246c8faf982fcac4e0e7ea89095db0c28fa03aeb9569a3c103de9c0353c->leave($__internal_2a12c246c8faf982fcac4e0e7ea89095db0c28fa03aeb9569a3c103de9c0353c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
