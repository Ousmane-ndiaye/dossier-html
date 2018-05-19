<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_19f7a80657dc39f54a8a0a25a26df05a20da34f0902e594a9b33f0c2e9a8ae58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f7a80657dc39f54a8a0a25a26df05a20da34f0902e594a9b33f0c2e9a8ae58->enter($__internal_19f7a80657dc39f54a8a0a25a26df05a20da34f0902e594a9b33f0c2e9a8ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_09d5ec8ac3391224a2a6ba003c79f79b8224ee6a7a9818af4cf8dd54ace8328d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d5ec8ac3391224a2a6ba003c79f79b8224ee6a7a9818af4cf8dd54ace8328d->enter($__internal_09d5ec8ac3391224a2a6ba003c79f79b8224ee6a7a9818af4cf8dd54ace8328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_19f7a80657dc39f54a8a0a25a26df05a20da34f0902e594a9b33f0c2e9a8ae58->leave($__internal_19f7a80657dc39f54a8a0a25a26df05a20da34f0902e594a9b33f0c2e9a8ae58_prof);

        
        $__internal_09d5ec8ac3391224a2a6ba003c79f79b8224ee6a7a9818af4cf8dd54ace8328d->leave($__internal_09d5ec8ac3391224a2a6ba003c79f79b8224ee6a7a9818af4cf8dd54ace8328d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
