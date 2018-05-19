<?php

/* admin/accueil.html.twig */
class __TwigTemplate_ea46664aabeccd3da7341480fff545441ec789321de69c953e14fd49be61acea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/accueil.html.twig", 1);
        $this->blocks = array(
            'reservation' => array($this, 'block_reservation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58aea44d8e83cc8ff8fb7ada955c3d9c64a30246d71b966541e8d9fbaba4d14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58aea44d8e83cc8ff8fb7ada955c3d9c64a30246d71b966541e8d9fbaba4d14e->enter($__internal_58aea44d8e83cc8ff8fb7ada955c3d9c64a30246d71b966541e8d9fbaba4d14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accueil.html.twig"));

        $__internal_ef483521ade3e25c2c760c85271fb8bb7809e981a9c3dc0e731f2a043ea7d85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef483521ade3e25c2c760c85271fb8bb7809e981a9c3dc0e731f2a043ea7d85d->enter($__internal_ef483521ade3e25c2c760c85271fb8bb7809e981a9c3dc0e731f2a043ea7d85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58aea44d8e83cc8ff8fb7ada955c3d9c64a30246d71b966541e8d9fbaba4d14e->leave($__internal_58aea44d8e83cc8ff8fb7ada955c3d9c64a30246d71b966541e8d9fbaba4d14e_prof);

        
        $__internal_ef483521ade3e25c2c760c85271fb8bb7809e981a9c3dc0e731f2a043ea7d85d->leave($__internal_ef483521ade3e25c2c760c85271fb8bb7809e981a9c3dc0e731f2a043ea7d85d_prof);

    }

    // line 2
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_eec11de5c31dd27a805781f12b405439091baf5269297c1e4651279c5691bb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec11de5c31dd27a805781f12b405439091baf5269297c1e4651279c5691bb48->enter($__internal_eec11de5c31dd27a805781f12b405439091baf5269297c1e4651279c5691bb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_f56323906d1e4fe793a48995bc22d15f307ee2d8c291d24a26caee1fa3939710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56323906d1e4fe793a48995bc22d15f307ee2d8c291d24a26caee1fa3939710->enter($__internal_f56323906d1e4fe793a48995bc22d15f307ee2d8c291d24a26caee1fa3939710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_f56323906d1e4fe793a48995bc22d15f307ee2d8c291d24a26caee1fa3939710->leave($__internal_f56323906d1e4fe793a48995bc22d15f307ee2d8c291d24a26caee1fa3939710_prof);

        
        $__internal_eec11de5c31dd27a805781f12b405439091baf5269297c1e4651279c5691bb48->leave($__internal_eec11de5c31dd27a805781f12b405439091baf5269297c1e4651279c5691bb48_prof);

    }

    public function getTemplateName()
    {
        return "admin/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% block reservation %}
    {{ 'class=\" \"' }}
{% endblock %}
", "admin/accueil.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/accueil.html.twig");
    }
}
