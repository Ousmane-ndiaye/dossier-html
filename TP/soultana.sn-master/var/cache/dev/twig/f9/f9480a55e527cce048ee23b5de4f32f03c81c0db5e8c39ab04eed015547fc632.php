<?php

/* :admin:listebien.html.twig */
class __TwigTemplate_9d0f6050a4ac7249871c0ae5462aefb9178979f520422651cf4e4ec92693421d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:listebien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39da2dc990f1e6b5d14166d66c971c1657c54d160937d1dc57404a8ca3d6924b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39da2dc990f1e6b5d14166d66c971c1657c54d160937d1dc57404a8ca3d6924b->enter($__internal_39da2dc990f1e6b5d14166d66c971c1657c54d160937d1dc57404a8ca3d6924b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:listebien.html.twig"));

        $__internal_4a47cf5013916955a68600dc379e9f33c37df8186c1c49aa3fabb36cfc6fc783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a47cf5013916955a68600dc379e9f33c37df8186c1c49aa3fabb36cfc6fc783->enter($__internal_4a47cf5013916955a68600dc379e9f33c37df8186c1c49aa3fabb36cfc6fc783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39da2dc990f1e6b5d14166d66c971c1657c54d160937d1dc57404a8ca3d6924b->leave($__internal_39da2dc990f1e6b5d14166d66c971c1657c54d160937d1dc57404a8ca3d6924b_prof);

        
        $__internal_4a47cf5013916955a68600dc379e9f33c37df8186c1c49aa3fabb36cfc6fc783->leave($__internal_4a47cf5013916955a68600dc379e9f33c37df8186c1c49aa3fabb36cfc6fc783_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_03ac2eab5aeb0b7efb5fa6aab44235eda8c67944f38cc3bbbeadc4f09be4b563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ac2eab5aeb0b7efb5fa6aab44235eda8c67944f38cc3bbbeadc4f09be4b563->enter($__internal_03ac2eab5aeb0b7efb5fa6aab44235eda8c67944f38cc3bbbeadc4f09be4b563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_017b3c00b1d800d694ebe58b14c9d1081320fae88d12270e3d751ee87150caff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017b3c00b1d800d694ebe58b14c9d1081320fae88d12270e3d751ee87150caff->enter($__internal_017b3c00b1d800d694ebe58b14c9d1081320fae88d12270e3d751ee87150caff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_017b3c00b1d800d694ebe58b14c9d1081320fae88d12270e3d751ee87150caff->leave($__internal_017b3c00b1d800d694ebe58b14c9d1081320fae88d12270e3d751ee87150caff_prof);

        
        $__internal_03ac2eab5aeb0b7efb5fa6aab44235eda8c67944f38cc3bbbeadc4f09be4b563->leave($__internal_03ac2eab5aeb0b7efb5fa6aab44235eda8c67944f38cc3bbbeadc4f09be4b563_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_69671afe772c569267d51b4d9a848616f1fad74f493ec0fe236c2cbfa1fc21ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69671afe772c569267d51b4d9a848616f1fad74f493ec0fe236c2cbfa1fc21ca->enter($__internal_69671afe772c569267d51b4d9a848616f1fad74f493ec0fe236c2cbfa1fc21ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_634291828314dd8123aafece89b3d0bd52ecc1203ad7fc07d652c6de8a471d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634291828314dd8123aafece89b3d0bd52ecc1203ad7fc07d652c6de8a471d33->enter($__internal_634291828314dd8123aafece89b3d0bd52ecc1203ad7fc07d652c6de8a471d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Accueil Admin </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<table class=\"table\" id=\"tablebien\" border=\"2\">
    <thead>
        <tr>
            <th>TYPE DE BIEN</th>
            <th>ADRESSE</th>
            <th>MONTANT LOCATION</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 24
            echo "        <tr>
            <td scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomTypeBien", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "adresse", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLoc", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
</table>
<div style=\"width: 500px; margin: auto; backrgound-color: black;\">
    <form action=\"\" method=\"post\" data-form=\"form_connexion\">
        <div class=\"alert alert-danger cacher\" id=\"form_connexion\" role=\"alert\">
            <ul>

            </ul>
        </div>
        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
        <div class=\"form-group\">
            <label for=\"login\">Nom d'utilisateur</label>
            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\" data-champ=\"nom d'utilisateur\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" data-champ=\"mot de passe\">
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
        </div>
    </form>
    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_ajax");
        echo "\" name=\"tablebien\" id=\"tablebien\" class=\"bg-primary\" >Bien</a>
</div>
";
        
        $__internal_634291828314dd8123aafece89b3d0bd52ecc1203ad7fc07d652c6de8a471d33->leave($__internal_634291828314dd8123aafece89b3d0bd52ecc1203ad7fc07d652c6de8a471d33_prof);

        
        $__internal_69671afe772c569267d51b4d9a848616f1fad74f493ec0fe236c2cbfa1fc21ca->leave($__internal_69671afe772c569267d51b4d9a848616f1fad74f493ec0fe236c2cbfa1fc21ca_prof);

    }

    public function getTemplateName()
    {
        return ":admin:listebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  113 => 30,  104 => 27,  100 => 26,  96 => 25,  93 => 24,  89 => 23,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Connexion{% endblock %}
{% block contenus %}
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Accueil Admin </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<table class=\"table\" id=\"tablebien\" border=\"2\">
    <thead>
        <tr>
            <th>TYPE DE BIEN</th>
            <th>ADRESSE</th>
            <th>MONTANT LOCATION</th>
        </tr>
    </thead>
    <tbody>
    {% for bien in biens %}
        <tr>
            <td scope=\"row\">{{ bien.nomTypeBien }}</td>
            <td>{{ bien.adresse }}</td>
            <td>{{ bien.prixLoc }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<div style=\"width: 500px; margin: auto; backrgound-color: black;\">
    <form action=\"\" method=\"post\" data-form=\"form_connexion\">
        <div class=\"alert alert-danger cacher\" id=\"form_connexion\" role=\"alert\">
            <ul>

            </ul>
        </div>
        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
        <div class=\"form-group\">
            <label for=\"login\">Nom d'utilisateur</label>
            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\" data-champ=\"nom d'utilisateur\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" data-champ=\"mot de passe\">
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
        </div>
    </form>
    <a href=\"{{ path('test_ajax') }}\" name=\"tablebien\" id=\"tablebien\" class=\"bg-primary\" >Bien</a>
</div>
{% endblock %}", ":admin:listebien.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/listebien.html.twig");
    }
}
