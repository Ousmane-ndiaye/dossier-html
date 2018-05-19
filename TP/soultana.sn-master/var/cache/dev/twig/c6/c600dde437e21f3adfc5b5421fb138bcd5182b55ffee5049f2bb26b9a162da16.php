<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_dc3c9b427afe010e8d4cd1f906ca885b010a0836a1c4a71df68aef110b236ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3c9b427afe010e8d4cd1f906ca885b010a0836a1c4a71df68aef110b236ee0->enter($__internal_dc3c9b427afe010e8d4cd1f906ca885b010a0836a1c4a71df68aef110b236ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7b805bf7c71f6640064a9c5b0cb9e5ba016fc2a1f3502854c8ae5e80e77dcf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b805bf7c71f6640064a9c5b0cb9e5ba016fc2a1f3502854c8ae5e80e77dcf9b->enter($__internal_7b805bf7c71f6640064a9c5b0cb9e5ba016fc2a1f3502854c8ae5e80e77dcf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dc3c9b427afe010e8d4cd1f906ca885b010a0836a1c4a71df68aef110b236ee0->leave($__internal_dc3c9b427afe010e8d4cd1f906ca885b010a0836a1c4a71df68aef110b236ee0_prof);

        
        $__internal_7b805bf7c71f6640064a9c5b0cb9e5ba016fc2a1f3502854c8ae5e80e77dcf9b->leave($__internal_7b805bf7c71f6640064a9c5b0cb9e5ba016fc2a1f3502854c8ae5e80e77dcf9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
