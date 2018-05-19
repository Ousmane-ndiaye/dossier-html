<?php

/* admin/listesachats.html.twig */
class __TwigTemplate_989d0e05a5b2ccd233986c583bc9535f265382e58a205d64c969c33f0e67ae9c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/listesachats.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listesachats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listesachats.html.twig"));

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

        echo "Achats";
        
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 24
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
                <li class=\"crumb-trail\">Historiques des achats</li>
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
                            <span class=\"glyphicon glyphicon-tasks\"></span>Liste des achats</div>
                        </div>
                        <div class=\"panel-body pn\">
                            <table class=\"table table-striped table-hover\" id=\"datatable2\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>\$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>\$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>\$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>\$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>\$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>\$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>\$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>\$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>\$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>\$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>\$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>\$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>\$345,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- End: Content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "<!-- jQuery -->
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables -->
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables Tabletools addon -->
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables ColReorder addon -->
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script> 

<!-- Theme Javascript -->
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/monscript.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core    
        Core.init();

        // Init Demo JS
        Demo.init();

        \$('#datatable2').dataTable({
            \"aoColumnDefs\": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            \"oLanguage\": {
                \"oPaginate\": {
                \"sPrevious\": \"Précedent\",
                \"sNext\": \"Suivant\"
                },
                \"sSearch\": \"Recherche:\",
            },
            \"iDisplayLength\": 5,
            \"aLengthMenu\": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, \"Tout\"]
            ],
            \"sDom\": '<\"dt-panelmenu clearfix\"lfr>t<\"dt-panelfooter clearfix\"ip>',
            \"oTableTools\": {
                \"sSwfPath\": \"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"), "html", null, true);
        echo "\"
            }
    });

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
        return "admin/listesachats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 298,  411 => 267,  407 => 266,  403 => 265,  399 => 264,  393 => 261,  387 => 258,  381 => 255,  375 => 252,  369 => 249,  365 => 248,  362 => 247,  353 => 246,  123 => 24,  114 => 23,  102 => 20,  98 => 19,  92 => 16,  86 => 13,  80 => 10,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Achats{% endblock %}

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
                <li class=\"crumb-trail\">Historiques des achats</li>
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
                            <span class=\"glyphicon glyphicon-tasks\"></span>Liste des achats</div>
                        </div>
                        <div class=\"panel-body pn\">
                            <table class=\"table table-striped table-hover\" id=\"datatable2\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>\$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>\$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>\$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>\$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>\$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>\$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>\$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>\$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>\$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>\$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>\$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>\$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>\$345,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
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

        \$('#datatable2').dataTable({
            \"aoColumnDefs\": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            \"oLanguage\": {
                \"oPaginate\": {
                \"sPrevious\": \"Précedent\",
                \"sNext\": \"Suivant\"
                },
                \"sSearch\": \"Recherche:\",
            },
            \"iDisplayLength\": 5,
            \"aLengthMenu\": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, \"Tout\"]
            ],
            \"sDom\": '<\"dt-panelmenu clearfix\"lfr>t<\"dt-panelfooter clearfix\"ip>',
            \"oTableTools\": {
                \"sSwfPath\": \"{{asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf')}}\"
            }
    });

        // Add Placeholder text to datatables filter bar
        \$('.dataTables_filter input').attr(\"placeholder\", \"Entrer un nom...\");
    });
</script>
<!-- END: PAGE SCRIPTS -->
{% endblock %}", "admin/listesachats.html.twig", "/var/www/html/Projet/pharmAssistant/templates/admin/listesachats.html.twig");
    }
}
