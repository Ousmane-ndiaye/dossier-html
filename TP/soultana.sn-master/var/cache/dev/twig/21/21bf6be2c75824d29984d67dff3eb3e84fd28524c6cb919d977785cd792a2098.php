<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b899e230b900d2b3d22cc796f5c3e88ddc745e5e93d6d9aceea31f84a82f7bb0 extends Twig_Template
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
        $__internal_57dbfab2524c9be77f479e6f739a5e00f5e58e2a9bdffd7b2fdccb26caf8184f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dbfab2524c9be77f479e6f739a5e00f5e58e2a9bdffd7b2fdccb26caf8184f->enter($__internal_57dbfab2524c9be77f479e6f739a5e00f5e58e2a9bdffd7b2fdccb26caf8184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8ba0d623c49a5ca7188e1bd0adec608123f1f876994de714fbc85d983175633e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba0d623c49a5ca7188e1bd0adec608123f1f876994de714fbc85d983175633e->enter($__internal_8ba0d623c49a5ca7188e1bd0adec608123f1f876994de714fbc85d983175633e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_57dbfab2524c9be77f479e6f739a5e00f5e58e2a9bdffd7b2fdccb26caf8184f->leave($__internal_57dbfab2524c9be77f479e6f739a5e00f5e58e2a9bdffd7b2fdccb26caf8184f_prof);

        
        $__internal_8ba0d623c49a5ca7188e1bd0adec608123f1f876994de714fbc85d983175633e->leave($__internal_8ba0d623c49a5ca7188e1bd0adec608123f1f876994de714fbc85d983175633e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
