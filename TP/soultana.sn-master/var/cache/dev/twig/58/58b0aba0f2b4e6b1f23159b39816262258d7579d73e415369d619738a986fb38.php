<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_bd79d5b5529820066440c5bc195815ff118a7b521b5d17d79b1504256aae2640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd79d5b5529820066440c5bc195815ff118a7b521b5d17d79b1504256aae2640->enter($__internal_bd79d5b5529820066440c5bc195815ff118a7b521b5d17d79b1504256aae2640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4b2895831561b1475eb7821e09647e1cf4cd1299d4b8c58fea82d26780c26f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2895831561b1475eb7821e09647e1cf4cd1299d4b8c58fea82d26780c26f37->enter($__internal_4b2895831561b1475eb7821e09647e1cf4cd1299d4b8c58fea82d26780c26f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bd79d5b5529820066440c5bc195815ff118a7b521b5d17d79b1504256aae2640->leave($__internal_bd79d5b5529820066440c5bc195815ff118a7b521b5d17d79b1504256aae2640_prof);

        
        $__internal_4b2895831561b1475eb7821e09647e1cf4cd1299d4b8c58fea82d26780c26f37->leave($__internal_4b2895831561b1475eb7821e09647e1cf4cd1299d4b8c58fea82d26780c26f37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
