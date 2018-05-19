<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_f3bcd5737b8d1f47115e5648d6c511d4fcfa2e6137bf77149158db4b545415f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bcd5737b8d1f47115e5648d6c511d4fcfa2e6137bf77149158db4b545415f7->enter($__internal_f3bcd5737b8d1f47115e5648d6c511d4fcfa2e6137bf77149158db4b545415f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8a45ff87f5761224ba8d710210a6ad8afabd00c1e94b710fa94f9e61e78e5853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a45ff87f5761224ba8d710210a6ad8afabd00c1e94b710fa94f9e61e78e5853->enter($__internal_8a45ff87f5761224ba8d710210a6ad8afabd00c1e94b710fa94f9e61e78e5853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f3bcd5737b8d1f47115e5648d6c511d4fcfa2e6137bf77149158db4b545415f7->leave($__internal_f3bcd5737b8d1f47115e5648d6c511d4fcfa2e6137bf77149158db4b545415f7_prof);

        
        $__internal_8a45ff87f5761224ba8d710210a6ad8afabd00c1e94b710fa94f9e61e78e5853->leave($__internal_8a45ff87f5761224ba8d710210a6ad8afabd00c1e94b710fa94f9e61e78e5853_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
