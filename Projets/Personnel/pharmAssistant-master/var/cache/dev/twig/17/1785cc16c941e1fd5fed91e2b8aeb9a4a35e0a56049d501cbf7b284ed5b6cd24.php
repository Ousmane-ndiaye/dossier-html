<?php

/* admin/login.html.twig */
class __TwigTemplate_fbf282e8e864bc1a2edec6fcce4116a3dc978673c126cbc6fb6ad975854a188f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tableau de bord!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

<!-- Theme CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">

<!-- Admin Forms CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-tools/admin-forms/css/admin-forms.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<!-- Start: Main -->
    <div id=\"main\" class=\"animated fadeIn\">

        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">

            <!-- Begin: Content -->
            <section id=\"content\">

                <div class=\"admin-form theme-info mw500\" id=\"login\">

                    <!-- Login Logo -->
                    <div class=\"row table-layout\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/logo.png"), "html", null, true);
        echo "\" title=\"AdminDesigns Logo\" class=\"center-block img-responsive\" style=\"max-width: 275px;\">
                    </div>

                    <!-- Login Panel/Form -->
                    <div class=\"panel mt30 mb25\">

                        <form method=\"post\" action=\"\" id=\"contact\">
                            <div class=\"panel-body bg-light p25 pb15\">
                                <!-- Username Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">E-mail</label>
                                    <label for=\"username\" class=\"field prepend-icon\">
                                        <input type=\"email\" name=\"email\" id=\"email\" class=\"gui-input\" placeholder=\"Entrer votre E-mail\">
                                        <label for=\"email\" class=\"field-icon\">
                                            <i class=\"fa fa-user\"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- Password Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Mot de passe</label>
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        <input type=\"password\" name=\"password\" id=\"password\" class=\"gui-input\" placeholder=\"Entrer votre mot de passe\">
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class=\"panel-footer clearfix\">
                                <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Se connecter</button>
                                <label class=\"switch ib switch-primary mt10\">
                                    <input type=\"checkbox\" name=\"remember\" id=\"remember\" checked>
                                    <label for=\"remember\" data-on=\"OUI\" data-off=\"NON\"></label>
                                    <span>Se souvenir de moi</span>
                                </label>
                            </div>
                        </form>
                    </div>

                    <!-- Registration Links -->
                    <div class=\"login-links\">
                        <p>
                            <a href=\"pages_forgotpw(alt).html\" class=\"active\" title=\"Sign In\">Mot de passe oublié ?</a>
                        </p>
                        <!--
                        <p>Haven't yet Registered?
                            <a href=\"pages_register(alt).html\" title=\"Sign In\">Sign up here</a>
                        </p>
                        -->
                    </div>
                </div>
            </section>
            <!-- End: Content -->
        </section>
        <!-- End: Content-Wrapper -->
    </div>
    <!-- End: Main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "<!-- jQuery -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme Javascript -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

    <!-- Page Javascript -->
    <script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core      
        Core.init();

        // Init Demo JS
        Demo.init();

    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 100,  220 => 99,  216 => 98,  210 => 95,  206 => 94,  203 => 93,  194 => 92,  123 => 30,  108 => 17,  99 => 16,  86 => 13,  80 => 10,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord!{% endblock %}

{% block stylesheets %}
<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

<!-- Theme CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/skin/default_skin/css/theme.css')}}\">

<!-- Admin Forms CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/admin-tools/admin-forms/css/admin-forms.css')}}\">

{% endblock %}
{% block body %}
<!-- Start: Main -->
    <div id=\"main\" class=\"animated fadeIn\">

        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">

            <!-- Begin: Content -->
            <section id=\"content\">

                <div class=\"admin-form theme-info mw500\" id=\"login\">

                    <!-- Login Logo -->
                    <div class=\"row table-layout\">
                        <img src=\"{{asset('assets/img/logos/logo.png')}}\" title=\"AdminDesigns Logo\" class=\"center-block img-responsive\" style=\"max-width: 275px;\">
                    </div>

                    <!-- Login Panel/Form -->
                    <div class=\"panel mt30 mb25\">

                        <form method=\"post\" action=\"\" id=\"contact\">
                            <div class=\"panel-body bg-light p25 pb15\">
                                <!-- Username Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">E-mail</label>
                                    <label for=\"username\" class=\"field prepend-icon\">
                                        <input type=\"email\" name=\"email\" id=\"email\" class=\"gui-input\" placeholder=\"Entrer votre E-mail\">
                                        <label for=\"email\" class=\"field-icon\">
                                            <i class=\"fa fa-user\"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- Password Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Mot de passe</label>
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        <input type=\"password\" name=\"password\" id=\"password\" class=\"gui-input\" placeholder=\"Entrer votre mot de passe\">
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class=\"panel-footer clearfix\">
                                <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Se connecter</button>
                                <label class=\"switch ib switch-primary mt10\">
                                    <input type=\"checkbox\" name=\"remember\" id=\"remember\" checked>
                                    <label for=\"remember\" data-on=\"OUI\" data-off=\"NON\"></label>
                                    <span>Se souvenir de moi</span>
                                </label>
                            </div>
                        </form>
                    </div>

                    <!-- Registration Links -->
                    <div class=\"login-links\">
                        <p>
                            <a href=\"pages_forgotpw(alt).html\" class=\"active\" title=\"Sign In\">Mot de passe oublié ?</a>
                        </p>
                        <!--
                        <p>Haven't yet Registered?
                            <a href=\"pages_register(alt).html\" title=\"Sign In\">Sign up here</a>
                        </p>
                        -->
                    </div>
                </div>
            </section>
            <!-- End: Content -->
        </section>
        <!-- End: Content-Wrapper -->
    </div>
    <!-- End: Main -->
{% endblock %}

{% block javascripts %}
<!-- jQuery -->
    <script src=\"{{asset('vendor/jquery/jquery-1.11.1.min.js')}}\"></script>
    <script src=\"{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}\"></script>

    <!-- Theme Javascript -->
    <script src=\"{{asset('assets/js/utility/utility.js')}}\"></script>
    <script src=\"{{asset('assets/js/demo/demo.js')}}\"></script>
    <script src=\"{{asset('assets/js/main.js')}}\"></script>

    <!-- Page Javascript -->
    <script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core      
        Core.init();

        // Init Demo JS
        Demo.init();

    });
    </script>
{% endblock %}", "admin/login.html.twig", "/var/www/html/Projet/pharmAssistant/templates/admin/login.html.twig");
    }
}
