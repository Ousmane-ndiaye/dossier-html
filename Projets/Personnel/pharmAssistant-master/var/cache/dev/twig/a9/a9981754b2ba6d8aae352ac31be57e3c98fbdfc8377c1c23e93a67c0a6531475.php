<?php

/* admin/listesfournisseurs.html.twig */
class __TwigTemplate_913c3cc23d88f32f4862e41e00ec828ba7d7e9f6141138915a478f7e46251a38 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/listesfournisseurs.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listesfournisseurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listesfournisseurs.html.twig"));

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

        echo "Fournisseurs";
        
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

<!-- Datatables CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/media/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">

<!-- Datatables Editor Addon CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css"), "html", null, true);
        echo "\">

<!-- Datatables ColReorder Addon CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"), "html", null, true);
        echo "\">

<!-- Theme CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/datatables.css"), "html", null, true);
        echo "\">
<style>
    .save-row,
    .cancel-row,
    .edit-row,
    .remove-row{
        margin: 5px;
        font-size: 18px;
    }

    .save-row{
        color: green;
    }

    .cancel-row, .remove-row{
        color: red;
    }

    .edit-row{
        color: #29b6f6;;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 45
        echo "<!-- Start: Content-Wrapper -->
<section id=\"content_wrapper\">
    <!-- Start: Topbar-Dropdown -->
    <div id=\"topbar-dropmenu\" class=\"alt\">
        <div class=\"topbar-menu row\">
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-primary light\">
                    <span class=\"glyphicon glyphicon-inbox text-muted\"></span>
                    <span class=\"metro-title\">Messages</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-info light\">
                    <span class=\"glyphicon glyphicon-user text-muted\"></span>
                    <span class=\"metro-title\">Users</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-success light\">
                    <span class=\"glyphicon glyphicon-headphones text-muted\"></span>
                    <span class=\"metro-title\">Support</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-system light\">
                    <span class=\"glyphicon glyphicon-facetime-video text-muted\"></span>
                    <span class=\"metro-title\">Videos</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-warning light\">
                    <span class=\"fa fa-gears text-muted\"></span>
                    <span class=\"metro-title\">Settings</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-alert light\">
                    <span class=\"glyphicon glyphicon-picture text-muted\"></span>
                    <span class=\"metro-title\">Pictures</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End: Topbar-Dropdown -->

    <!-- Start: Topbar -->
    <header id=\"topbar\" class=\"alt\">
        <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
                <li class=\"crumb-active\">
                    <a href=\"/admin/index\">Tableau de Bord</a>
                </li>
                <li class=\"crumb-icon\">
                    <a href=\"/admin/index\">
                        <span class=\"glyphicon glyphicon-home\"></span>
                    </a>
                </li>
                <li class=\"crumb-link\">
                    <a href=\"/admin/index\">Accueil</a>
                </li>
                <li class=\"crumb-trail\">Fournisseurs</li>
            </ol>
        </div>
        <div class=\"topbar-right\">
            <div class=\"ib topbar-dropdown\">
                <label for=\"topbar-multiple\" class=\"control-label pr10 fs11 text-muted\">Reporter la période</label>
                <select id=\"topbar-multiple\" class=\"hidden\">
                    <optgroup label=\"Filter By:\">
                        <option value=\"1-1\">Les 30 derniers jours</option>
                        <option value=\"1-2\" selected=\"selected\">Les 60 derniers jours</option>
                        <option value=\"1-3\">La dernière année</option>
                    </optgroup>
                </select>
            </div>
            <div class=\"ml15 ib va-m\" id=\"toggle_sidemenu_r\">
                <a href=\"#\" class=\"pl5\">
                    <i class=\"fa fa-sign-in fs22 text-primary\"></i>
                    <span class=\"badge badge-danger badge-hero\">3</span>
                </a>
            </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id=\"content\" class=\"table-layout animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-visible\" id=\"spy2\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title hidden-xs\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>Liste des fournisseurs</div>
                        </div>

                        <div class=\"panel\">
                            
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"m-b-30\">
                                            <button type=\"button\" id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=\"gradeA\">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                        <tr class=\"gradeX\">
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                        <tr class=\"gradeC\">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                        <tr class=\"gradeU\">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>-</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- MODAL -->
<div id=\"dialog\" class=\"modal-block hidden\">
    <section class=\"panel panel-info panel-color\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Are you sure?</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"modal-wrapper\">
                <div class=\"modal-text\">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>

            <div class=\"m-t-20\">
                <div class=\"text-right\">
                    <button type=\"button\" id=\"dialogConfirm\" class=\"btn btn-primary waves-effect waves-light\">Confirm</button>
                    <button type=\"button\" id=\"dialogCancel\" class=\"btn btn-default waves-effect\">Cancel</button>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end Modal -->
<!-- End: Content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 256
        echo "<!-- jQuery -->
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables -->
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables Tabletools addon -->
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables ColReorder addon -->
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/datatables.editable.init.js"), "html", null, true);
        echo "\"></script>

<!-- Theme Javascript -->
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/monscript.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core    
        Core.init();

        // Init Demo JS
        Demo.init();

        // Add Placeholder text to datatables filter bar
        \$('.dataTables_filter input').attr(\"placeholder\", \"Entrer un nom...\");
    });
</script>
<!-- END: PAGE SCRIPTS -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listesfournisseurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 277,  420 => 276,  416 => 275,  412 => 274,  406 => 271,  402 => 270,  396 => 267,  390 => 264,  384 => 261,  378 => 258,  374 => 257,  371 => 256,  362 => 255,  144 => 45,  135 => 44,  102 => 20,  98 => 19,  92 => 16,  86 => 13,  80 => 10,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Fournisseurs{% endblock %}

{% block stylesheets %}
<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

<!-- Datatables CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')}}\">

<!-- Datatables Editor Addon CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')}}\">

<!-- Datatables ColReorder Addon CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')}}\">

<!-- Theme CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/skin/default_skin/css/theme.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/datatables.css')}}\">
<style>
    .save-row,
    .cancel-row,
    .edit-row,
    .remove-row{
        margin: 5px;
        font-size: 18px;
    }

    .save-row{
        color: green;
    }

    .cancel-row, .remove-row{
        color: red;
    }

    .edit-row{
        color: #29b6f6;;
    }
</style>
{% endblock %}

{% block contenu %}
<!-- Start: Content-Wrapper -->
<section id=\"content_wrapper\">
    <!-- Start: Topbar-Dropdown -->
    <div id=\"topbar-dropmenu\" class=\"alt\">
        <div class=\"topbar-menu row\">
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-primary light\">
                    <span class=\"glyphicon glyphicon-inbox text-muted\"></span>
                    <span class=\"metro-title\">Messages</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-info light\">
                    <span class=\"glyphicon glyphicon-user text-muted\"></span>
                    <span class=\"metro-title\">Users</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-success light\">
                    <span class=\"glyphicon glyphicon-headphones text-muted\"></span>
                    <span class=\"metro-title\">Support</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-system light\">
                    <span class=\"glyphicon glyphicon-facetime-video text-muted\"></span>
                    <span class=\"metro-title\">Videos</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-warning light\">
                    <span class=\"fa fa-gears text-muted\"></span>
                    <span class=\"metro-title\">Settings</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"metro-tile bg-alert light\">
                    <span class=\"glyphicon glyphicon-picture text-muted\"></span>
                    <span class=\"metro-title\">Pictures</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End: Topbar-Dropdown -->

    <!-- Start: Topbar -->
    <header id=\"topbar\" class=\"alt\">
        <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
                <li class=\"crumb-active\">
                    <a href=\"/admin/index\">Tableau de Bord</a>
                </li>
                <li class=\"crumb-icon\">
                    <a href=\"/admin/index\">
                        <span class=\"glyphicon glyphicon-home\"></span>
                    </a>
                </li>
                <li class=\"crumb-link\">
                    <a href=\"/admin/index\">Accueil</a>
                </li>
                <li class=\"crumb-trail\">Fournisseurs</li>
            </ol>
        </div>
        <div class=\"topbar-right\">
            <div class=\"ib topbar-dropdown\">
                <label for=\"topbar-multiple\" class=\"control-label pr10 fs11 text-muted\">Reporter la période</label>
                <select id=\"topbar-multiple\" class=\"hidden\">
                    <optgroup label=\"Filter By:\">
                        <option value=\"1-1\">Les 30 derniers jours</option>
                        <option value=\"1-2\" selected=\"selected\">Les 60 derniers jours</option>
                        <option value=\"1-3\">La dernière année</option>
                    </optgroup>
                </select>
            </div>
            <div class=\"ml15 ib va-m\" id=\"toggle_sidemenu_r\">
                <a href=\"#\" class=\"pl5\">
                    <i class=\"fa fa-sign-in fs22 text-primary\"></i>
                    <span class=\"badge badge-danger badge-hero\">3</span>
                </a>
            </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id=\"content\" class=\"table-layout animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-visible\" id=\"spy2\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title hidden-xs\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>Liste des fournisseurs</div>
                        </div>

                        <div class=\"panel\">
                            
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"m-b-30\">
                                            <button type=\"button\" id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=\"gradeA\">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                        <tr class=\"gradeX\">
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                        <tr class=\"gradeC\">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                        <tr class=\"gradeU\">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>-</td>
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                                <a style=\"margin: 5px;\" href=\"\"><span style=\"text-transform: upperCase; font-weight: bold;\">Détails</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- MODAL -->
<div id=\"dialog\" class=\"modal-block hidden\">
    <section class=\"panel panel-info panel-color\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Are you sure?</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"modal-wrapper\">
                <div class=\"modal-text\">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>

            <div class=\"m-t-20\">
                <div class=\"text-right\">
                    <button type=\"button\" id=\"dialogConfirm\" class=\"btn btn-primary waves-effect waves-light\">Confirm</button>
                    <button type=\"button\" id=\"dialogCancel\" class=\"btn btn-default waves-effect\">Cancel</button>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end Modal -->
<!-- End: Content -->
{% endblock %}

{% block javascripts %}
<!-- jQuery -->
<script src=\"{{asset('vendor/jquery/jquery-1.11.1.min.js')}}\"></script>
<script src=\"{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}\"></script>

<!-- Datatables -->
<script src=\"{{asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')}}\"></script>

<!-- Datatables Tabletools addon -->
<script src=\"{{asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}\"></script>

<!-- Datatables ColReorder addon -->
<script src=\"{{asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}\"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src=\"{{asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')}}\"></script> 
<script src=\"{{asset('assets/js/datatables.editable.init.js')}}\"></script>

<!-- Theme Javascript -->
<script src=\"{{asset('assets/js/utility/utility.js')}}\"></script>
<script src=\"{{asset('assets/js/demo/demo.js')}}\"></script>
<script src=\"{{asset('assets/js/main.js')}}\"></script>
<script src=\"{{asset('assets/js/monscript.js')}}\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core    
        Core.init();

        // Init Demo JS
        Demo.init();

        // Add Placeholder text to datatables filter bar
        \$('.dataTables_filter input').attr(\"placeholder\", \"Entrer un nom...\");
    });
</script>
<!-- END: PAGE SCRIPTS -->
{% endblock %}", "admin/listesfournisseurs.html.twig", "/var/www/html/Projet/pharmAssistant/templates/admin/listesfournisseurs.html.twig");
    }
}
