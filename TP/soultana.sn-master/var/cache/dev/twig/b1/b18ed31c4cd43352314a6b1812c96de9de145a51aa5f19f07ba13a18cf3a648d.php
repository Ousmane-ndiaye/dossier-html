<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_ece616a6d671f1b20d33e95c28dec0f5421e2c72af15d324120e487134b8a468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece616a6d671f1b20d33e95c28dec0f5421e2c72af15d324120e487134b8a468->enter($__internal_ece616a6d671f1b20d33e95c28dec0f5421e2c72af15d324120e487134b8a468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0c5dc81713931a1a01a1811189b5d98fd5c80414269563669b6fbc2713f19b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5dc81713931a1a01a1811189b5d98fd5c80414269563669b6fbc2713f19b1c->enter($__internal_0c5dc81713931a1a01a1811189b5d98fd5c80414269563669b6fbc2713f19b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ece616a6d671f1b20d33e95c28dec0f5421e2c72af15d324120e487134b8a468->leave($__internal_ece616a6d671f1b20d33e95c28dec0f5421e2c72af15d324120e487134b8a468_prof);

        
        $__internal_0c5dc81713931a1a01a1811189b5d98fd5c80414269563669b6fbc2713f19b1c->leave($__internal_0c5dc81713931a1a01a1811189b5d98fd5c80414269563669b6fbc2713f19b1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
