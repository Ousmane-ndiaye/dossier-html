<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_18a5e4cea65d1efca633b66817ba2738c76cbea58bda5a4d16583f035c99c959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a5e4cea65d1efca633b66817ba2738c76cbea58bda5a4d16583f035c99c959->enter($__internal_18a5e4cea65d1efca633b66817ba2738c76cbea58bda5a4d16583f035c99c959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_07691fda6ad8938e2d70fcd9351cb5b45ad21b0a678e11cebe6ad37a8697caf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07691fda6ad8938e2d70fcd9351cb5b45ad21b0a678e11cebe6ad37a8697caf3->enter($__internal_07691fda6ad8938e2d70fcd9351cb5b45ad21b0a678e11cebe6ad37a8697caf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_18a5e4cea65d1efca633b66817ba2738c76cbea58bda5a4d16583f035c99c959->leave($__internal_18a5e4cea65d1efca633b66817ba2738c76cbea58bda5a4d16583f035c99c959_prof);

        
        $__internal_07691fda6ad8938e2d70fcd9351cb5b45ad21b0a678e11cebe6ad37a8697caf3->leave($__internal_07691fda6ad8938e2d70fcd9351cb5b45ad21b0a678e11cebe6ad37a8697caf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
