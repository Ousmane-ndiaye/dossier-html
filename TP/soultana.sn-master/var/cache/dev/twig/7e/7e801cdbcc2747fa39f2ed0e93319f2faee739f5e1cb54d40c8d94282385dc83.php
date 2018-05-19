<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_60f6f4ebb2a2804e3f07686b6b50c7015b09598c138eee004618219d110dfa64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f6f4ebb2a2804e3f07686b6b50c7015b09598c138eee004618219d110dfa64->enter($__internal_60f6f4ebb2a2804e3f07686b6b50c7015b09598c138eee004618219d110dfa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7bd4694bfd13fff66b2c38ba2d48d1263986d7e0cacda28a3350f896547a9a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd4694bfd13fff66b2c38ba2d48d1263986d7e0cacda28a3350f896547a9a60->enter($__internal_7bd4694bfd13fff66b2c38ba2d48d1263986d7e0cacda28a3350f896547a9a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_60f6f4ebb2a2804e3f07686b6b50c7015b09598c138eee004618219d110dfa64->leave($__internal_60f6f4ebb2a2804e3f07686b6b50c7015b09598c138eee004618219d110dfa64_prof);

        
        $__internal_7bd4694bfd13fff66b2c38ba2d48d1263986d7e0cacda28a3350f896547a9a60->leave($__internal_7bd4694bfd13fff66b2c38ba2d48d1263986d7e0cacda28a3350f896547a9a60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
