<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_2e21129c9f324681a5e3e3d01aeaef12d9cf2b38ab4d0e3aa89bbbbe958b4b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e21129c9f324681a5e3e3d01aeaef12d9cf2b38ab4d0e3aa89bbbbe958b4b7b->enter($__internal_2e21129c9f324681a5e3e3d01aeaef12d9cf2b38ab4d0e3aa89bbbbe958b4b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e1bc13900baf5da90cb4050a9d5aa948fdeabc36e30eb72b096ef7c98587c7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bc13900baf5da90cb4050a9d5aa948fdeabc36e30eb72b096ef7c98587c7cb->enter($__internal_e1bc13900baf5da90cb4050a9d5aa948fdeabc36e30eb72b096ef7c98587c7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2e21129c9f324681a5e3e3d01aeaef12d9cf2b38ab4d0e3aa89bbbbe958b4b7b->leave($__internal_2e21129c9f324681a5e3e3d01aeaef12d9cf2b38ab4d0e3aa89bbbbe958b4b7b_prof);

        
        $__internal_e1bc13900baf5da90cb4050a9d5aa948fdeabc36e30eb72b096ef7c98587c7cb->leave($__internal_e1bc13900baf5da90cb4050a9d5aa948fdeabc36e30eb72b096ef7c98587c7cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
