<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_283c715565f91e501b2996286beb476d5fcc8b62f4db023def832486c66ef5df extends Twig_Template
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
        $__internal_242fc040676ef11f2774f214a72fd33e6b665b675458ad65a2a8bc876d4fc152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242fc040676ef11f2774f214a72fd33e6b665b675458ad65a2a8bc876d4fc152->enter($__internal_242fc040676ef11f2774f214a72fd33e6b665b675458ad65a2a8bc876d4fc152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4b6c85d56bcff2470100664d6049f5b97b1aa3168eac72b9821ad9aee6a02302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6c85d56bcff2470100664d6049f5b97b1aa3168eac72b9821ad9aee6a02302->enter($__internal_4b6c85d56bcff2470100664d6049f5b97b1aa3168eac72b9821ad9aee6a02302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_242fc040676ef11f2774f214a72fd33e6b665b675458ad65a2a8bc876d4fc152->leave($__internal_242fc040676ef11f2774f214a72fd33e6b665b675458ad65a2a8bc876d4fc152_prof);

        
        $__internal_4b6c85d56bcff2470100664d6049f5b97b1aa3168eac72b9821ad9aee6a02302->leave($__internal_4b6c85d56bcff2470100664d6049f5b97b1aa3168eac72b9821ad9aee6a02302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
