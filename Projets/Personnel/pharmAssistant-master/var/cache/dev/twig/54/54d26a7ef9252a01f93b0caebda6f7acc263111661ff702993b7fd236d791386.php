<?php

/* base.html.twig */
class __TwigTemplate_4c7ef4825dbb52b1c5f07797ddcf35809d6a719de46e4b93927cc13bd4ec88bb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'themeoption' => array($this, 'block_themeoption'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'contenu' => array($this, 'block_contenu'),
            'footer' => array($this, 'block_footer'),
            'rightbar' => array($this, 'block_rightbar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
        <meta name=\"keywords\" content=\"HTML5 Bootstrap 3 Admin Template UI Theme\" />
        <meta name=\"description\" content=\"AdminDesigns - A Responsive HTML5 Admin UI Framework\">
        <meta name=\"author\" content=\"AdminDesigns\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["classbody"]) || array_key_exists("classbody", $context) ? $context["classbody"] : (function () { throw new Twig_Error_Runtime('Variable "classbody" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 1197
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1199
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PharmAssistant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        <!-------------------------------------------------------------+ 
        <body> Helper Classes: 
        ---------------------------------------------------------------+ 
        '.sb-l-o' - Sets Left Sidebar to \"open\"
        '.sb-l-m' - Sets Left Sidebar to \"minified\"
        '.sb-l-c' - Sets Left Sidebar to \"closed\"

        '.sb-r-o' - Sets Right Sidebar to \"open\"
        '.sb-r-c' - Sets Right Sidebar to \"closed\"
        ---------------------------------------------------------------+
        Example: <body class=\"example-page sb-l-o sb-r-c\">
        Results: Sidebar left Open, Sidebar right Closed
        --------------------------------------------------------------->

        <!-- Start: Theme Preview Pane -->
        ";
        // line 38
        $this->displayBlock('themeoption', $context, $blocks);
        // line 175
        echo "
        ";
        // line 176
        $this->displayBlock('main', $context, $blocks);
        // line 1194
        echo "
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_themeoption($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeoption"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeoption"));

        // line 39
        echo "        <div id=\"skin-toolbox\">
            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <span class=\"panel-icon\">
                    <i class=\"fa fa-gear text-primary\"></i>
                    </span>
                    <span class=\"panel-title\">Options du thème</span>
                </div>
                <div class=\"panel-body pn\">
                    <ul class=\"nav nav-list nav-list-sm pl15 pt10\" role=\"tablist\">
                        <li class=\"active\">
                            <a href=\"#toolbox-header\" role=\"tab\" data-toggle=\"tab\">En-tête</a>
                        </li>
                        <li>
                            <a href=\"#toolbox-sidebar\" role=\"tab\" data-toggle=\"tab\">Menu</a>
                        </li>
                        <li>
                            <a href=\"#toolbox-settings\" role=\"tab\" data-toggle=\"tab\">Divers</a>
                        </li>
                    </ul>
                    <div class=\"tab-content p20 ptn pb15\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"toolbox-header\">
                            <form id=\"toolbox-header-skin\">
                                <h4 class=\"mv20\">Fond En-tête</h4>
                                <div class=\"skin-toolbox-swatches\">
                                    <div class=\"checkbox-custom checkbox-disabled fill mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin8\" checked value=\"\">
                                        <label for=\"headerSkin8\">Light</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-primary mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin1\" value=\"bg-primary\">
                                        <label for=\"headerSkin1\">Primary</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-info mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin3\" value=\"bg-info\">
                                        <label for=\"headerSkin3\">Info</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-warning mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin4\" value=\"bg-warning\">
                                        <label for=\"headerSkin4\">Warning</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-danger mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin5\" value=\"bg-danger\">
                                        <label for=\"headerSkin5\">Danger</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-alert mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin6\" value=\"bg-alert\">
                                        <label for=\"headerSkin6\">Alert</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-system mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin7\" value=\"bg-system\">
                                        <label for=\"headerSkin7\">System</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-success mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin2\" value=\"bg-success\">
                                        <label for=\"headerSkin2\">Success</label>
                                    </div>
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin9\" value=\"bg-dark\">
                                        <label for=\"headerSkin9\">Dark</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"toolbox-sidebar\">
                            <form id=\"toolbox-sidebar-skin\">
                                <h4 class=\"mv20\">Fond Menu latéral</h4>
                                <div class=\"skin-toolbox-swatches\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"radio\" name=\"sidebarSkin\" checked id=\"sidebarSkin3\" value=\"\">
                                        <label for=\"sidebarSkin3\">Dark</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-disabled mb5\">
                                        <input type=\"radio\" name=\"sidebarSkin\" id=\"sidebarSkin1\" value=\"sidebar-light\">
                                        <label for=\"sidebarSkin1\">Light</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-light mb5\">
                                        <input type=\"radio\" name=\"sidebarSkin\" id=\"sidebarSkin2\" value=\"sidebar-light light\">
                                        <label for=\"sidebarSkin2\">Lighter</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"toolbox-settings\">
                            <form id=\"toolbox-settings-misc\">
                                <h4 class=\"mv20 mtn\">Mise en page</h4>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" checked=\"\" id=\"header-option\">
                                        <label for=\"header-option\">En-tête fixe</label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" checked=\"\" id=\"sidebar-option\">
                                        <label for=\"sidebar-option\">Menu fixe</label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" id=\"breadcrumb-option\">
                                        <label for=\"breadcrumb-option\">File d'Ariane fixe</label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" id=\"breadcrumb-hidden\">
                                        <label for=\"breadcrumb-hidden\">File d'Ariane caché</label>
                                    </div>
                                </div>
                                <h4 class=\"mv20\">Options de mise en page</h4>
                                <div class=\"form-group\">
                                    <div class=\"radio-custom mb5\">
                                        <input type=\"radio\" id=\"fullwidth-option\" checked name=\"layout-option\">
                                        <label for=\"fullwidth-option\">Largeur pleine</label>
                                    </div>
                                </div>
                                <div class=\"form-group mb20\">
                                    <div class=\"radio-custom radio-disabled mb5\">
                                        <input type=\"radio\" id=\"boxed-option\" name=\"layout-option\" disabled>
                                        <label for=\"boxed-option\">Largeur limitée
                                            <b class=\"text-muted\">(A venir)</b>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"form-group mn br-t p15\">
                        <a href=\"#\" id=\"clearLocalStorage\" class=\"btn btn-primary btn-block pb10 pt10\">Réinitialiser</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Theme Preview Pane -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 177
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 786
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 1081
        echo "        ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 1083
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 1100
        echo "        ";
        $this->displayBlock('rightbar', $context, $blocks);
        // line 1191
        echo "    </div>
    <!-- End: Main -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 178
        echo "        <!-- Start: Header -->
        <header class=\"navbar navbar-fixed-top navbar-shadow\">
            <div class=\"navbar-branding\">
                <a class=\"navbar-brand\" href=\"dashboard.html\">
                    <b>Pharm</b>Assistant
                </a>
                <span id=\"toggle_sidemenu_l\" class=\"ad ad-lines\"></span>
            </div>
            <ul class=\"nav navbar-nav navbar-left\">
                <li class=\"dropdown menu-merge hidden-xs\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown
                        <span class=\"caret caret-tp\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </li>
                <li class=\"hidden-xs\">
                    <a class=\"request-fullscreen toggle-active\" href=\"#\">
                        <span class=\"ad ad-screen-full fs18\"></span>
                    </a>
                </li>
            </ul>
            <form class=\"navbar-form navbar-left navbar-search alt\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" value=\"Search...\">
                </div>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <div class=\"navbar-btn btn-group\">
                        <a href=\"#\" class=\"topbar-menu-toggle btn btn-sm\" data-toggle=\"button\">
                            <span class=\"ad ad-wand\"></span>
                        </a>
                    </div>
                </li>
                <li class=\"dropdown menu-merge\">
                <div class=\"navbar-btn btn-group\">
                    <button data-toggle=\"dropdown\" class=\"btn btn-sm dropdown-toggle\">
                        <span class=\"fa fa-bell-o fs14 va-m\"></span>
                        <span class=\"badge badge-danger\">9</span>
                    </button>
                    <div class=\"dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn\" role=\"menu\">  
                    <div class=\"panel mbn\">
                        <div class=\"panel-menu\">
                            <span class=\"panel-icon\"><i class=\"fa fa-clock-o\"></i></span>
                            <span class=\"panel-title fw600\">Activités récentes</span>
                            <button class=\"btn btn-default light btn-xs pull-right\" type=\"button\"><i class=\"fa fa-refresh\"></i></button>
                        </div>
                        <div class=\"panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn\">
                            <ol class=\"timeline-list\">
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Michael</b> Added to his store:
                                    <a href=\"#\">Ipod</a>
                                </div>
                                <div class=\"timeline-date\">1:25am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Sara</b> Added his store:
                                    <a href=\"#\">Notebook</a>
                                </div>
                                <div class=\"timeline-date\">3:05am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Software</a>
                                </div>
                                <div class=\"timeline-date\">4:15am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Apple</a>
                                </div>
                                <div class=\"timeline-date\">7:45am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Software</a>
                                </div>
                                <div class=\"timeline-date\">4:15am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Apple</a>
                                </div>
                                <div class=\"timeline-date\">7:45am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Michael</b> Added his store:
                                    <a href=\"#\">Ipod</a>
                                </div>
                                <div class=\"timeline-date\">8:25am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-system\">
                                    <span class=\"fa fa-fire\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Software</a>
                                </div>
                                <div class=\"timeline-date\">4:15am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Sara</b> Added to his store:
                                    <a href=\"#\">Notebook</a>
                                </div>
                                <div class=\"timeline-date\">3:05am</div>
                                </li>
                            </ol>
            
                        </div>
                        <div class=\"panel-footer text-center p7\">
                            <a href=\"#\" class=\"link-unstyled\"> Tout voir </a>
                        </div>
                    </div>
                    </div>
                </div>
                </li>
                <li class=\"dropdown menu-merge\">
                <div class=\"navbar-btn btn-group\">
                    <button data-toggle=\"dropdown\" class=\"btn btn-sm dropdown-toggle\">
                    <span class=\"ad ad-radio-tower fs14 va-m\"></span>
                    <span class=\"badge\">5</span>
                    </button>
                    <div class=\"dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn\" role=\"menu\">  
                    <div class=\"panel mbn\">
                        <div class=\"panel-menu\">
                            <div class=\"btn-group btn-group-justified btn-group-nav\" role=\"tablist\">
                            <a href=\"#nav-tab1\" data-toggle=\"tab\" class=\"btn btn-default btn-sm active\">Notifications</a>
                            <a href=\"#nav-tab2\" data-toggle=\"tab\" class=\"btn btn-default btn-sm br-l-n br-r-n\">Messages</a>
                            <a href=\"#nav-tab3\" data-toggle=\"tab\" class=\"btn btn-default btn-sm\">Activités</a>
                            </div>
                        </div>
                        <div class=\"panel-body panel-scroller scroller-navbar pn\">
                            <div class=\"tab-content br-n pn\">
                            <div id=\"nav-tab1\" class=\"tab-pane alerts-widget active\" role=\"tabpanel\">
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-user text-info\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle inscription
                                    <small class=\"text-muted\"></small>
                                    </h5> Tyler Durden - 16 hours ago
                                    
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Approuver?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-shopping-cart text-success\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle Commande
                                    <small class=\"text-muted\"></small>
                                    </h5> <a href=\"#\">Apple Ipod</a> - 4 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Confirmer?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-print\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-comment text-system\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouveau Commentaire
                                    <small class=\"text-muted\"></small>
                                    </h5> Mike - I loved your article!                            
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response text-right\"> Moderer?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-star text-warning\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle Revue
                                    <small class=\"text-muted\"></small>
                                    </h5> Sammy Hilton - 4 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Approuver?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-user text-info\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle inscription
                                    <small class=\"text-muted\"></small>
                                    </h5> Michael Sober - 7 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Approuver?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-usd text-alert\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle facture d'achat
                                    <small class=\"text-muted\"></small>
                                    </h5> <a href=\"#\">Apple Ipod</a> - 4 hours ago
                                    
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response single\">#518358</div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-shopping-cart text-success\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle commande
                                    <small class=\"text-muted\"></small>
                                    </h5> <a href=\"#\">Apple Ipod</a> - 4 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Confirmer?</div>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                                <i class=\"fa fa-check text-success\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                                <i class=\"fa fa-print\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"nav-tab2\" class=\"tab-pane chat-widget\" role=\"tabpanel\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/3.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-status online\"></span>
                                        <h5 class=\"media-heading\">Courtney Faught
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-body\">
                                        <span class=\"media-status offline\"></span>
                                        <h5 class=\"media-heading\">Joe Gibbons
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                    </div>
                                    <div class=\"media-right\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/1.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-status online\"></span>
                                        <h5 class=\"media-heading\">Courtney Faught
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-body\">
                                        <span class=\"media-status offline\"></span>
                                        <h5 class=\"media-heading\">Joe Gibbons
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                                    </div>
                                    <div class=\"media-right\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/1.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-status online\"></span>
                                        <h5 class=\"media-heading\">Courtney Faught
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-body\">
                                        <span class=\"media-status offline\"></span>
                                        <h5 class=\"media-heading\">Joe Gibbons
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                    </div>
                                    <div class=\"media-right\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/1.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id=\"nav-tab3\" class=\"tab-pane scroller-nm\" role=\"tabpanel\">
                                <ul class=\"media-list\" role=\"menu\">
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/5.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/2.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading mv5\">Article
                                        <small> - 08/16/22</small>
                                    </h5>
                                    Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/3.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/4.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading mv5\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/5.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/2.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading mv5\">Article
                                        <small> - 08/16/22</small>
                                    </h5>
                                    Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/3.jpg"), "html", null, true);
        echo "\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                </ul>
                                <table class=\"table table-striped hidden\">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>Sussy</td>
                                    <td>Watcher</td>
                                    <td>@thehawk</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Sussy</td>
                                    <td>Watcher</td>
                                    <td>@thehawk</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>Sussy</td>
                                    <td>Watcher</td>
                                    <td>@thehawk</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                        <div class=\"panel-footer text-center p7\">
                            <a href=\"#\" class=\"link-unstyled\"> Tout voir </a>
                        </div>
                    </div>
                    </div>
                </div>
                </li>
                    <li class=\"dropdown menu-merge\">
                        <div class=\"navbar-btn btn-group\">
                            <button data-toggle=\"dropdown\" class=\"btn btn-sm dropdown-toggle\">
                                <span class=\"flag-xs flag-us\"></span>
                                <!-- <span class=\"caret\"></span> -->
                            </button>
                            <ul class=\"dropdown-menu pv5 animated animated-short flipInX\" role=\"menu\">
                                <li>
                                <a href=\"javascript:void(0);\">
                                    <span class=\"flag-xs flag-in mr10\"></span> Hindu </a>
                                </li>
                                <li>
                                <a href=\"javascript:void(0);\">
                                    <span class=\"flag-xs flag-tr mr10\"></span> Turkish </a>
                                </li>
                                <li>
                                <a href=\"javascript:void(0);\">
                                    <span class=\"flag-xs flag-es mr10\"></span> Spanish </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"menu-divider hidden-xs\">
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li class=\"dropdown menu-merge\">
                        <a href=\"#\" class=\"dropdown-toggle fw600 p15\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/1.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"mw30 br64\">
                            <span class=\"hidden-xs pl15\"> Michael .R </span>
                            <span class=\"caret caret-tp hidden-xs\"></span>
                        </a>
                        <ul class=\"dropdown-menu list-group dropdown-persist w250\" role=\"menu\">
                    <li class=\"dropdown-header clearfix\">
                    <div class=\"pull-left ml10\">
                        <select id=\"user-status\">
                        <optgroup label=\"Current Status:\">
                            <option value=\"1-1\">Away</option>
                            <option value=\"1-2\">Offline</option>
                            <option value=\"1-3\" selected=\"selected\">Online</option>
                        </optgroup>
                        </select>
                    </div>

                    <div class=\"pull-right mr10\">
                        <select id=\"user-role\">
                        <optgroup label=\"Logged in As:\">
                            <option value=\"1-1\">Client</option>
                            <option value=\"1-2\">Editeru</option>
                            <option value=\"1-3\" selected=\"selected\">Admin</option>
                        </optgroup>
                        </select>
                    </div>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-envelope\"></span> Messages
                        <span class=\"label label-warning\">2</span>
                    </a>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-user\"></span> Amis
                        <span class=\"label label-warning\">6</span>
                    </a>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-bell\"></span> Notifications </a>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-gear\"></span> Paramètres</a>
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"/admin/login\" class=\"\">
                        <span class=\"fa fa-power-off pr5\"></span> Déconnexion </a>
                    </li>
                </ul>
                </li>
            </ul>
        </header>
        <!-- End: Header -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 786
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 787
        echo "        <!-----------------------------------------------------------------+ 
        \"#sidebar_left\" Helper Classes: 
        -------------------------------------------------------------------+ 
        * Positioning Classes: 
            '.affix' - Sets Sidebar Left to the fixed position 

        * Available Skin Classes:
            .sidebar-dark (default no class needed)
            .sidebar-light  
            .sidebar-light.light   
        -------------------------------------------------------------------+
        Example: <aside id=\"sidebar_left\" class=\"affix sidebar-light\">
        Results: Fixed Left Sidebar with light/white background
        ------------------------------------------------------------------->

        <!-- Start: Sidebar -->
        <aside id=\"sidebar_left\" class=\"nano nano-light affix\">

            <!-- Start: Sidebar Left Content -->
            <div class=\"sidebar-left-content nano-content\">

                <!-- Start: Sidebar Header -->
                <header class=\"sidebar-header\">

                    <!-- Sidebar Widget - Author -->
                    <div class=\"sidebar-widget author-widget\">
                        <div class=\"media\">
                        <a class=\"media-left\" href=\"#\">
                            <img src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        </a>
                        <div class=\"media-body\">
                            <div class=\"media-links\">
                            <a href=\"#\" class=\"sidebar-menu-toggle\">Menu -</a> <a href=\"/admin/login\">Déconnexion</a>
                            </div>
                            <div class=\"media-author\">Michael Richards</div>
                        </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Menu (slidedown) -->
                    <div class=\"sidebar-widget menu-widget\">
                        <div class=\"row text-center mbn\">
                            <div class=\"col-xs-4\">
                                <a href=\"dashboard.html\" class=\"text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dashboard\">
                                    <span class=\"glyphicon glyphicon-home\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_messages.html\" class=\"text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Messages\">
                                    <span class=\"glyphicon glyphicon-inbox\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_profile.html\" class=\"text-alert\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tasks\">
                                    <span class=\"glyphicon glyphicon-bell\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_timeline.html\" class=\"text-system\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Activity\">
                                    <span class=\"fa fa-desktop\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_profile.html\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                                    <span class=\"fa fa-gears\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_gallery.html\" class=\"text-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cron Jobs\">
                                    <span class=\"fa fa-flask\"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Search (hidden) -->
                    <div class=\"sidebar-widget search-widget\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                                <i class=\"fa fa-search\"></i>
                            </span>
                            <input type=\"text\" id=\"sidebar-search\" class=\"form-control\" placeholder=\"Rechercher...\">
                        </div>
                    </div>

                </header>
                <!-- End: Sidebar Header -->

                <!-- Start: Sidebar Menu -->
                <ul class=\"nav sidebar-menu\">
                    <li class=\"sidebar-label pt20\">Menu</li>
                    <li>
                        <a href=\"pages_calendar.html\">
                            <span class=\"fa fa-calendar\"></span>
                            <span class=\"sidebar-title\">Calendrier</span>
                            <span class=\"sidebar-title-tray\">
                                <span class=\"label label-xs bg-primary\">New</span>
                            </span>
                        </a>
                    </li>
                    <li class=\"";
        // line 887
        if (array_key_exists("activeTDB", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeTDB"]) || array_key_exists("activeTDB", $context) ? $context["activeTDB"] : (function () { throw new Twig_Error_Runtime('Variable "activeTDB" does not exist.', 887, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                        <a href=\"/admin/index\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Tableau de bord</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"glyphicon glyphicon-usd text-alerts\"></span>
                            <span class=\"sidebar-title\">Achats</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"";
        // line 900
        if (array_key_exists("activeNA", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeNA"]) || array_key_exists("activeNA", $context) ? $context["activeNA"] : (function () { throw new Twig_Error_Runtime('Variable "activeNA" does not exist.', 900, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"/admin/nouveau/achat\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Nouveau achat
                                </a>
                            </li>
                            <li class=\"";
        // line 906
        if (array_key_exists("activeHDA", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeHDA"]) || array_key_exists("activeHDA", $context) ? $context["activeHDA"] : (function () { throw new Twig_Error_Runtime('Variable "activeHDA" does not exist.', 906, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"/admin/listes/achats\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Historiques des achats
                                </a>
                            </li>
                            <li class=\"";
        // line 912
        if (array_key_exists("activeF", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeF"]) || array_key_exists("activeF", $context) ? $context["activeF"] : (function () { throw new Twig_Error_Runtime('Variable "activeF" does not exist.', 912, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"/admin/listes/fournisseurs\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Fournisseurs
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-tasks text-alerts\"></span>
                            <span class=\"sidebar-title\">Inventaires</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"";
        // line 928
        if (array_key_exists("activeStks", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeStks"]) || array_key_exists("activeStks", $context) ? $context["activeStks"] : (function () { throw new Twig_Error_Runtime('Variable "activeStks" does not exist.', 928, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Stocks
                                </a>
                            </li>
                            <li class=\"";
        // line 934
        if (array_key_exists("activeG", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeG"]) || array_key_exists("activeG", $context) ? $context["activeG"] : (function () { throw new Twig_Error_Runtime('Variable "activeG" does not exist.', 934, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Genres
                                </a>
                            </li>
                            <li class=\"";
        // line 940
        if (array_key_exists("activeAr", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeAr"]) || array_key_exists("activeAr", $context) ? $context["activeAr"] : (function () { throw new Twig_Error_Runtime('Variable "activeAr" does not exist.', 940, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Articles
                                </a>
                            </li>
                            <li class=\"";
        // line 946
        if (array_key_exists("activeFa", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeFa"]) || array_key_exists("activeFa", $context) ? $context["activeFa"] : (function () { throw new Twig_Error_Runtime('Variable "activeFa" does not exist.', 946, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Fabricants
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-money text-alerts\"></span>
                            <span class=\"sidebar-title\">Ventes</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"";
        // line 962
        if (array_key_exists("activeNV", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeNV"]) || array_key_exists("activeNV", $context) ? $context["activeNV"] : (function () { throw new Twig_Error_Runtime('Variable "activeNV" does not exist.', 962, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Nouvelle vente
                                </a>
                            </li>
                            <li class=\"";
        // line 968
        if (array_key_exists("activeHDV", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeHDV"]) || array_key_exists("activeHDV", $context) ? $context["activeHDV"] : (function () { throw new Twig_Error_Runtime('Variable "activeHDV" does not exist.', 968, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Historique des ventes
                                </a>
                            </li>
                            <li class=\"";
        // line 974
        if (array_key_exists("activeAUV", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeAUV"]) || array_key_exists("activeAUV", $context) ? $context["activeAUV"] : (function () { throw new Twig_Error_Runtime('Variable "activeAUV" does not exist.', 974, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Annuler une vente
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"glyphicon glyphicon-modal-window text-alerts\"></span>
                            <span class=\"sidebar-title\">Rapports</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"";
        // line 990
        if (array_key_exists("activeStksR", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeStksR"]) || array_key_exists("activeStksR", $context) ? $context["activeStksR"] : (function () { throw new Twig_Error_Runtime('Variable "activeStksR" does not exist.', 990, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Stocks
                                </a>
                            </li>
                            <li class=\"";
        // line 996
        if (array_key_exists("activeVQ", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeVQ"]) || array_key_exists("activeVQ", $context) ? $context["activeVQ"] : (function () { throw new Twig_Error_Runtime('Variable "activeVQ" does not exist.', 996, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Ventes quotidienne
                                </a>
                            </li>
                            <li class=\"";
        // line 1002
        if (array_key_exists("activeVMen", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeVMen"]) || array_key_exists("activeVMen", $context) ? $context["activeVMen"] : (function () { throw new Twig_Error_Runtime('Variable "activeVMen" does not exist.', 1002, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Ventes mensuelle
                                </a>
                            </li>
                            <li class=\"";
        // line 1007
        if (array_key_exists("activeVAn", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeVAn"]) || array_key_exists("activeVAn", $context) ? $context["activeVAn"] : (function () { throw new Twig_Error_Runtime('Variable "activeVAn" does not exist.', 1007, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Ventes annuelle
                                </a>
                            </li>
                            <li class=\"";
        // line 1013
        if (array_key_exists("activeRDA", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeRDA"]) || array_key_exists("activeRDA", $context) ? $context["activeRDA"] : (function () { throw new Twig_Error_Runtime('Variable "activeRDA" does not exist.', 1013, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Rapports des achats
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-users text-alerts\"></span>
                            <span class=\"sidebar-title\">Gestion des utilisateurs</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"";
        // line 1029
        if (array_key_exists("activeUtil", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeUtil"]) || array_key_exists("activeUtil", $context) ? $context["activeUtil"] : (function () { throw new Twig_Error_Runtime('Variable "activeUtil" does not exist.', 1029, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Utilisateurs
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- sidebar progress bars -->
                    <li class=\"sidebar-label pt25 pb10\">User Stats</li>
                    <li class=\"sidebar-stat\">
                        <a href=\"#projectOne\" class=\"fs11\">
                            <span class=\"fa fa-inbox text-info\"></span>
                            <span class=\"sidebar-title text-muted\">Email Storage</span>
                            <span class=\"pull-right mr20 text-muted\">35%</span>
                            <div class=\"progress progress-bar-xs mh20 mb10\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 35%\">
                                    <span class=\"sr-only\">35% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"sidebar-stat\">
                        <a href=\"#projectOne\" class=\"fs11\">
                            <span class=\"fa fa-dropbox text-warning\"></span>
                            <span class=\"sidebar-title text-muted\">Bandwidth</span>
                            <span class=\"pull-right mr20 text-muted\">58%</span>
                            <div class=\"progress progress-bar-xs mh20\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 58%\">
                                    <span class=\"sr-only\">58% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End: Sidebar Menu -->

                <!-- Start: Sidebar Collapse Button -->
                <div class=\"sidebar-toggle-mini\">
                    <a href=\"#\">
                    <span class=\"fa fa-sign-out\"></span>
                    </a>
                </div>
                <!-- End: Sidebar Collapse Button -->

            </div>
            <!-- End: Sidebar Left Content -->

        </aside>
        <!-- End: Sidebar Left -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1081
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 1082
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1083
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 1084
        echo "        <!-- Begin: Page Footer -->
        <footer id=\"content-footer\" class=\"affix\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <span class=\"footer-legal\">© 2015 AdminDesigns</span>
                </div>
                <div class=\"col-md-6 text-right\">
                    <span class=\"footer-meta\">60GB of <b>350GB</b> Free</span>
                    <a href=\"#content\" class=\"footer-return-top\">
                        <span class=\"fa fa-arrow-up\"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End: Page Footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1100
    public function block_rightbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightbar"));

        // line 1101
        echo "        <!-- Start: Right Sidebar -->
        <aside id=\"sidebar_right\" class=\"nano affix\">

            <!-- Start: Sidebar Right Content -->
            <div class=\"sidebar-right-content nano-content\">

                <div class=\"tab-block sidebar-block br-n\">
                <ul class=\"nav nav-tabs tabs-border nav-justified hidden\">
                    <li class=\"active\">
                    <a href=\"#sidebar-right-tab1\" data-toggle=\"tab\">Tab 1</a>
                    </li>
                    <li>
                    <a href=\"#sidebar-right-tab2\" data-toggle=\"tab\">Tab 2</a>
                    </li>
                    <li>
                    <a href=\"#sidebar-right-tab3\" data-toggle=\"tab\">Tab 3</a>
                    </li>
                </ul>
                <div class=\"tab-content br-n\">
                    <div id=\"sidebar-right-tab1\" class=\"tab-pane active\">

                    <h5 class=\"title-divider text-muted mb20\"> Server Statistics
                        <span class=\"pull-right\"> 2013
                        <i class=\"fa fa-caret-down ml5\"></i>
                        </span>
                    </h5>
                    <div class=\"progress mh5\">
                        <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 44%\">
                        <span class=\"fs11\">DB Request</span>
                        </div>
                    </div>
                    <div class=\"progress mh5\">
                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 84%\">
                        <span class=\"fs11 text-left\">Server Load</span>
                        </div>
                    </div>
                    <div class=\"progress mh5\">
                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 61%\">
                        <span class=\"fs11 text-left\">Server Connections</span>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt30 mb10\">Traffic Margins</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                        <h3 class=\"text-primary mn pl5\">132</h3>
                        </div>
                        <div class=\"col-xs-7 text-right\">
                        <h3 class=\"text-success-dark mn\">
                            <i class=\"fa fa-caret-up\"></i> 13.2% </h3>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt25 mb10\">Database Request</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                        <h3 class=\"text-primary mn pl5\">212</h3>
                        </div>
                        <div class=\"col-xs-7 text-right\">
                        <h3 class=\"text-success-dark mn\">
                            <i class=\"fa fa-caret-up\"></i> 25.6% </h3>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt25 mb10\">Server Response</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                        <h3 class=\"text-primary mn pl5\">82.5</h3>
                        </div>
                        <div class=\"col-xs-7 text-right\">
                        <h3 class=\"text-danger mn\">
                            <i class=\"fa fa-caret-down\"></i> 17.9% </h3>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt40 mb20\"> Server Statistics
                        <span class=\"pull-right text-primary fw600\">USA</span>
                    </h5>


                    </div>
                    <div id=\"sidebar-right-tab2\" class=\"tab-pane\"></div>
                    <div id=\"sidebar-right-tab3\" class=\"tab-pane\"></div>
                </div>
                <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1198
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1632 => 1198,  1623 => 1197,  1524 => 1101,  1515 => 1100,  1490 => 1084,  1481 => 1083,  1471 => 1082,  1462 => 1081,  1396 => 1029,  1373 => 1013,  1360 => 1007,  1348 => 1002,  1335 => 996,  1322 => 990,  1299 => 974,  1286 => 968,  1273 => 962,  1250 => 946,  1237 => 940,  1224 => 934,  1211 => 928,  1188 => 912,  1175 => 906,  1162 => 900,  1142 => 887,  1067 => 815,  1037 => 787,  1028 => 786,  962 => 730,  847 => 618,  834 => 608,  822 => 599,  810 => 590,  798 => 581,  785 => 571,  773 => 562,  762 => 554,  740 => 535,  730 => 528,  708 => 509,  698 => 502,  676 => 483,  369 => 178,  360 => 177,  348 => 1191,  345 => 1100,  342 => 1083,  339 => 1081,  336 => 786,  333 => 177,  324 => 176,  179 => 39,  170 => 38,  158 => 1194,  156 => 176,  153 => 175,  151 => 38,  134 => 23,  125 => 22,  115 => 14,  106 => 13,  88 => 5,  76 => 1199,  73 => 1197,  71 => 22,  67 => 21,  59 => 15,  57 => 13,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}PharmAssistant{% endblock %}</title>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
        <meta name=\"keywords\" content=\"HTML5 Bootstrap 3 Admin Template UI Theme\" />
        <meta name=\"description\" content=\"AdminDesigns - A Responsive HTML5 Admin UI Framework\">
        <meta name=\"author\" content=\"AdminDesigns\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {% block stylesheets %}
        {% endblock %}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"{{classbody}}\">
        {% block body %}
        <!-------------------------------------------------------------+ 
        <body> Helper Classes: 
        ---------------------------------------------------------------+ 
        '.sb-l-o' - Sets Left Sidebar to \"open\"
        '.sb-l-m' - Sets Left Sidebar to \"minified\"
        '.sb-l-c' - Sets Left Sidebar to \"closed\"

        '.sb-r-o' - Sets Right Sidebar to \"open\"
        '.sb-r-c' - Sets Right Sidebar to \"closed\"
        ---------------------------------------------------------------+
        Example: <body class=\"example-page sb-l-o sb-r-c\">
        Results: Sidebar left Open, Sidebar right Closed
        --------------------------------------------------------------->

        <!-- Start: Theme Preview Pane -->
        {% block themeoption %}
        <div id=\"skin-toolbox\">
            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <span class=\"panel-icon\">
                    <i class=\"fa fa-gear text-primary\"></i>
                    </span>
                    <span class=\"panel-title\">Options du thème</span>
                </div>
                <div class=\"panel-body pn\">
                    <ul class=\"nav nav-list nav-list-sm pl15 pt10\" role=\"tablist\">
                        <li class=\"active\">
                            <a href=\"#toolbox-header\" role=\"tab\" data-toggle=\"tab\">En-tête</a>
                        </li>
                        <li>
                            <a href=\"#toolbox-sidebar\" role=\"tab\" data-toggle=\"tab\">Menu</a>
                        </li>
                        <li>
                            <a href=\"#toolbox-settings\" role=\"tab\" data-toggle=\"tab\">Divers</a>
                        </li>
                    </ul>
                    <div class=\"tab-content p20 ptn pb15\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"toolbox-header\">
                            <form id=\"toolbox-header-skin\">
                                <h4 class=\"mv20\">Fond En-tête</h4>
                                <div class=\"skin-toolbox-swatches\">
                                    <div class=\"checkbox-custom checkbox-disabled fill mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin8\" checked value=\"\">
                                        <label for=\"headerSkin8\">Light</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-primary mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin1\" value=\"bg-primary\">
                                        <label for=\"headerSkin1\">Primary</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-info mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin3\" value=\"bg-info\">
                                        <label for=\"headerSkin3\">Info</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-warning mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin4\" value=\"bg-warning\">
                                        <label for=\"headerSkin4\">Warning</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-danger mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin5\" value=\"bg-danger\">
                                        <label for=\"headerSkin5\">Danger</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-alert mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin6\" value=\"bg-alert\">
                                        <label for=\"headerSkin6\">Alert</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-system mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin7\" value=\"bg-system\">
                                        <label for=\"headerSkin7\">System</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-success mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin2\" value=\"bg-success\">
                                        <label for=\"headerSkin2\">Success</label>
                                    </div>
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin9\" value=\"bg-dark\">
                                        <label for=\"headerSkin9\">Dark</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"toolbox-sidebar\">
                            <form id=\"toolbox-sidebar-skin\">
                                <h4 class=\"mv20\">Fond Menu latéral</h4>
                                <div class=\"skin-toolbox-swatches\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"radio\" name=\"sidebarSkin\" checked id=\"sidebarSkin3\" value=\"\">
                                        <label for=\"sidebarSkin3\">Dark</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-disabled mb5\">
                                        <input type=\"radio\" name=\"sidebarSkin\" id=\"sidebarSkin1\" value=\"sidebar-light\">
                                        <label for=\"sidebarSkin1\">Light</label>
                                    </div>
                                    <div class=\"checkbox-custom fill checkbox-light mb5\">
                                        <input type=\"radio\" name=\"sidebarSkin\" id=\"sidebarSkin2\" value=\"sidebar-light light\">
                                        <label for=\"sidebarSkin2\">Lighter</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"toolbox-settings\">
                            <form id=\"toolbox-settings-misc\">
                                <h4 class=\"mv20 mtn\">Mise en page</h4>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" checked=\"\" id=\"header-option\">
                                        <label for=\"header-option\">En-tête fixe</label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" checked=\"\" id=\"sidebar-option\">
                                        <label for=\"sidebar-option\">Menu fixe</label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" id=\"breadcrumb-option\">
                                        <label for=\"breadcrumb-option\">File d'Ariane fixe</label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"checkbox-custom fill mb5\">
                                        <input type=\"checkbox\" id=\"breadcrumb-hidden\">
                                        <label for=\"breadcrumb-hidden\">File d'Ariane caché</label>
                                    </div>
                                </div>
                                <h4 class=\"mv20\">Options de mise en page</h4>
                                <div class=\"form-group\">
                                    <div class=\"radio-custom mb5\">
                                        <input type=\"radio\" id=\"fullwidth-option\" checked name=\"layout-option\">
                                        <label for=\"fullwidth-option\">Largeur pleine</label>
                                    </div>
                                </div>
                                <div class=\"form-group mb20\">
                                    <div class=\"radio-custom radio-disabled mb5\">
                                        <input type=\"radio\" id=\"boxed-option\" name=\"layout-option\" disabled>
                                        <label for=\"boxed-option\">Largeur limitée
                                            <b class=\"text-muted\">(A venir)</b>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"form-group mn br-t p15\">
                        <a href=\"#\" id=\"clearLocalStorage\" class=\"btn btn-primary btn-block pb10 pt10\">Réinitialiser</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Theme Preview Pane -->
        {% endblock %}

        {% block main %}
        {% block header %}
        <!-- Start: Header -->
        <header class=\"navbar navbar-fixed-top navbar-shadow\">
            <div class=\"navbar-branding\">
                <a class=\"navbar-brand\" href=\"dashboard.html\">
                    <b>Pharm</b>Assistant
                </a>
                <span id=\"toggle_sidemenu_l\" class=\"ad ad-lines\"></span>
            </div>
            <ul class=\"nav navbar-nav navbar-left\">
                <li class=\"dropdown menu-merge hidden-xs\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown
                        <span class=\"caret caret-tp\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </li>
                <li class=\"hidden-xs\">
                    <a class=\"request-fullscreen toggle-active\" href=\"#\">
                        <span class=\"ad ad-screen-full fs18\"></span>
                    </a>
                </li>
            </ul>
            <form class=\"navbar-form navbar-left navbar-search alt\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" value=\"Search...\">
                </div>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <div class=\"navbar-btn btn-group\">
                        <a href=\"#\" class=\"topbar-menu-toggle btn btn-sm\" data-toggle=\"button\">
                            <span class=\"ad ad-wand\"></span>
                        </a>
                    </div>
                </li>
                <li class=\"dropdown menu-merge\">
                <div class=\"navbar-btn btn-group\">
                    <button data-toggle=\"dropdown\" class=\"btn btn-sm dropdown-toggle\">
                        <span class=\"fa fa-bell-o fs14 va-m\"></span>
                        <span class=\"badge badge-danger\">9</span>
                    </button>
                    <div class=\"dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn\" role=\"menu\">  
                    <div class=\"panel mbn\">
                        <div class=\"panel-menu\">
                            <span class=\"panel-icon\"><i class=\"fa fa-clock-o\"></i></span>
                            <span class=\"panel-title fw600\">Activités récentes</span>
                            <button class=\"btn btn-default light btn-xs pull-right\" type=\"button\"><i class=\"fa fa-refresh\"></i></button>
                        </div>
                        <div class=\"panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn\">
                            <ol class=\"timeline-list\">
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Michael</b> Added to his store:
                                    <a href=\"#\">Ipod</a>
                                </div>
                                <div class=\"timeline-date\">1:25am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Sara</b> Added his store:
                                    <a href=\"#\">Notebook</a>
                                </div>
                                <div class=\"timeline-date\">3:05am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Software</a>
                                </div>
                                <div class=\"timeline-date\">4:15am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Apple</a>
                                </div>
                                <div class=\"timeline-date\">7:45am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Software</a>
                                </div>
                                <div class=\"timeline-date\">4:15am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-success\">
                                    <span class=\"fa fa-usd\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Apple</a>
                                </div>
                                <div class=\"timeline-date\">7:45am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Michael</b> Added his store:
                                    <a href=\"#\">Ipod</a>
                                </div>
                                <div class=\"timeline-date\">8:25am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-system\">
                                    <span class=\"fa fa-fire\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Admin</b> created invoice for:
                                    <a href=\"#\">Software</a>
                                </div>
                                <div class=\"timeline-date\">4:15am</div>
                                </li>
                                <li class=\"timeline-item\">
                                <div class=\"timeline-icon bg-dark light\">
                                    <span class=\"fa fa-tags\"></span>
                                </div>
                                <div class=\"timeline-desc\">
                                    <b>Sara</b> Added to his store:
                                    <a href=\"#\">Notebook</a>
                                </div>
                                <div class=\"timeline-date\">3:05am</div>
                                </li>
                            </ol>
            
                        </div>
                        <div class=\"panel-footer text-center p7\">
                            <a href=\"#\" class=\"link-unstyled\"> Tout voir </a>
                        </div>
                    </div>
                    </div>
                </div>
                </li>
                <li class=\"dropdown menu-merge\">
                <div class=\"navbar-btn btn-group\">
                    <button data-toggle=\"dropdown\" class=\"btn btn-sm dropdown-toggle\">
                    <span class=\"ad ad-radio-tower fs14 va-m\"></span>
                    <span class=\"badge\">5</span>
                    </button>
                    <div class=\"dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn\" role=\"menu\">  
                    <div class=\"panel mbn\">
                        <div class=\"panel-menu\">
                            <div class=\"btn-group btn-group-justified btn-group-nav\" role=\"tablist\">
                            <a href=\"#nav-tab1\" data-toggle=\"tab\" class=\"btn btn-default btn-sm active\">Notifications</a>
                            <a href=\"#nav-tab2\" data-toggle=\"tab\" class=\"btn btn-default btn-sm br-l-n br-r-n\">Messages</a>
                            <a href=\"#nav-tab3\" data-toggle=\"tab\" class=\"btn btn-default btn-sm\">Activités</a>
                            </div>
                        </div>
                        <div class=\"panel-body panel-scroller scroller-navbar pn\">
                            <div class=\"tab-content br-n pn\">
                            <div id=\"nav-tab1\" class=\"tab-pane alerts-widget active\" role=\"tabpanel\">
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-user text-info\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle inscription
                                    <small class=\"text-muted\"></small>
                                    </h5> Tyler Durden - 16 hours ago
                                    
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Approuver?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-shopping-cart text-success\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle Commande
                                    <small class=\"text-muted\"></small>
                                    </h5> <a href=\"#\">Apple Ipod</a> - 4 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Confirmer?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-print\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-comment text-system\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouveau Commentaire
                                    <small class=\"text-muted\"></small>
                                    </h5> Mike - I loved your article!                            
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response text-right\"> Moderer?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-star text-warning\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle Revue
                                    <small class=\"text-muted\"></small>
                                    </h5> Sammy Hilton - 4 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Approuver?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-user text-info\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle inscription
                                    <small class=\"text-muted\"></small>
                                    </h5> Michael Sober - 7 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Approuver?</div>
                                    <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                        <i class=\"fa fa-remove\"></i>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-usd text-alert\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle facture d'achat
                                    <small class=\"text-muted\"></small>
                                    </h5> <a href=\"#\">Apple Ipod</a> - 4 hours ago
                                    
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response single\">#518358</div>
                                </div>
                                </div>
                                <div class=\"media\">
                                <a class=\"media-left\" href=\"#\"> <span class=\"glyphicon glyphicon-shopping-cart text-success\"></span> </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Nouvelle commande
                                    <small class=\"text-muted\"></small>
                                    </h5> <a href=\"#\">Apple Ipod</a> - 4 hours ago
                                </div>
                                <div class=\"media-right\">
                                    <div class=\"media-response\"> Confirmer?</div>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                                <i class=\"fa fa-check text-success\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default btn-xs light\">
                                                <i class=\"fa fa-print\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"nav-tab2\" class=\"tab-pane chat-widget\" role=\"tabpanel\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"{{asset('assets/img/avatars/3.jpg')}}\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-status online\"></span>
                                        <h5 class=\"media-heading\">Courtney Faught
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-body\">
                                        <span class=\"media-status offline\"></span>
                                        <h5 class=\"media-heading\">Joe Gibbons
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                    </div>
                                    <div class=\"media-right\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"{{asset('assets/img/avatars/1.jpg')}}\">
                                        </a>
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"{{asset('assets/img/avatars/2.jpg')}}\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-status online\"></span>
                                        <h5 class=\"media-heading\">Courtney Faught
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-body\">
                                        <span class=\"media-status offline\"></span>
                                        <h5 class=\"media-heading\">Joe Gibbons
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                                    </div>
                                    <div class=\"media-right\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"{{asset('assets/img/avatars/1.jpg')}}\">
                                        </a>
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"{{asset('assets/img/avatars/2.jpg')}}\">
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-status online\"></span>
                                        <h5 class=\"media-heading\">Courtney Faught
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                                    </div>
                                    </div>
                                    <div class=\"media\">
                                    <div class=\"media-body\">
                                        <span class=\"media-status offline\"></span>
                                        <h5 class=\"media-heading\">Joe Gibbons
                                        <small> - 12:30am</small>
                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                    </div>
                                    <div class=\"media-right\">
                                        <a href=\"#\">
                                        <img class=\"media-object\" alt=\"64x64\" src=\"{{asset('assets/img/avatars/1.jpg')}}\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id=\"nav-tab3\" class=\"tab-pane scroller-nm\" role=\"tabpanel\">
                                <ul class=\"media-list\" role=\"menu\">
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/5.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/2.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading mv5\">Article
                                        <small> - 08/16/22</small>
                                    </h5>
                                    Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/3.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/4.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading mv5\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/5.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/2.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading mv5\">Article
                                        <small> - 08/16/22</small>
                                    </h5>
                                    Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <a class=\"media-left\" href=\"#\"> <img src=\"{{asset('assets/img/avatars/3.jpg')}}\" class=\"mw40\" alt=\"avatar\"> </a>
                                    <div class=\"media-body\">
                                    <h5 class=\"media-heading\">Article
                                        <small class=\"text-muted\">- 08/16/22</small>
                                    </h5> Last Updated 36 days ago by
                                    <a class=\"text-system\" href=\"#\"> Max </a>
                                    </div>
                                </li>
                                </ul>
                                <table class=\"table table-striped hidden\">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>Sussy</td>
                                    <td>Watcher</td>
                                    <td>@thehawk</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Sussy</td>
                                    <td>Watcher</td>
                                    <td>@thehawk</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>Sussy</td>
                                    <td>Watcher</td>
                                    <td>@thehawk</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                        <div class=\"panel-footer text-center p7\">
                            <a href=\"#\" class=\"link-unstyled\"> Tout voir </a>
                        </div>
                    </div>
                    </div>
                </div>
                </li>
                    <li class=\"dropdown menu-merge\">
                        <div class=\"navbar-btn btn-group\">
                            <button data-toggle=\"dropdown\" class=\"btn btn-sm dropdown-toggle\">
                                <span class=\"flag-xs flag-us\"></span>
                                <!-- <span class=\"caret\"></span> -->
                            </button>
                            <ul class=\"dropdown-menu pv5 animated animated-short flipInX\" role=\"menu\">
                                <li>
                                <a href=\"javascript:void(0);\">
                                    <span class=\"flag-xs flag-in mr10\"></span> Hindu </a>
                                </li>
                                <li>
                                <a href=\"javascript:void(0);\">
                                    <span class=\"flag-xs flag-tr mr10\"></span> Turkish </a>
                                </li>
                                <li>
                                <a href=\"javascript:void(0);\">
                                    <span class=\"flag-xs flag-es mr10\"></span> Spanish </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"menu-divider hidden-xs\">
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li class=\"dropdown menu-merge\">
                        <a href=\"#\" class=\"dropdown-toggle fw600 p15\" data-toggle=\"dropdown\">
                            <img src=\"{{asset('assets/img/avatars/1.jpg')}}\" alt=\"avatar\" class=\"mw30 br64\">
                            <span class=\"hidden-xs pl15\"> Michael .R </span>
                            <span class=\"caret caret-tp hidden-xs\"></span>
                        </a>
                        <ul class=\"dropdown-menu list-group dropdown-persist w250\" role=\"menu\">
                    <li class=\"dropdown-header clearfix\">
                    <div class=\"pull-left ml10\">
                        <select id=\"user-status\">
                        <optgroup label=\"Current Status:\">
                            <option value=\"1-1\">Away</option>
                            <option value=\"1-2\">Offline</option>
                            <option value=\"1-3\" selected=\"selected\">Online</option>
                        </optgroup>
                        </select>
                    </div>

                    <div class=\"pull-right mr10\">
                        <select id=\"user-role\">
                        <optgroup label=\"Logged in As:\">
                            <option value=\"1-1\">Client</option>
                            <option value=\"1-2\">Editeru</option>
                            <option value=\"1-3\" selected=\"selected\">Admin</option>
                        </optgroup>
                        </select>
                    </div>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-envelope\"></span> Messages
                        <span class=\"label label-warning\">2</span>
                    </a>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-user\"></span> Amis
                        <span class=\"label label-warning\">6</span>
                    </a>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-bell\"></span> Notifications </a>
                    </li>
                    <li class=\"list-group-item\">
                    <a href=\"#\" class=\"animated animated-short fadeInUp\">
                        <span class=\"fa fa-gear\"></span> Paramètres</a>
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"/admin/login\" class=\"\">
                        <span class=\"fa fa-power-off pr5\"></span> Déconnexion </a>
                    </li>
                </ul>
                </li>
            </ul>
        </header>
        <!-- End: Header -->
        {% endblock %}
        {% block sidebar %}
        <!-----------------------------------------------------------------+ 
        \"#sidebar_left\" Helper Classes: 
        -------------------------------------------------------------------+ 
        * Positioning Classes: 
            '.affix' - Sets Sidebar Left to the fixed position 

        * Available Skin Classes:
            .sidebar-dark (default no class needed)
            .sidebar-light  
            .sidebar-light.light   
        -------------------------------------------------------------------+
        Example: <aside id=\"sidebar_left\" class=\"affix sidebar-light\">
        Results: Fixed Left Sidebar with light/white background
        ------------------------------------------------------------------->

        <!-- Start: Sidebar -->
        <aside id=\"sidebar_left\" class=\"nano nano-light affix\">

            <!-- Start: Sidebar Left Content -->
            <div class=\"sidebar-left-content nano-content\">

                <!-- Start: Sidebar Header -->
                <header class=\"sidebar-header\">

                    <!-- Sidebar Widget - Author -->
                    <div class=\"sidebar-widget author-widget\">
                        <div class=\"media\">
                        <a class=\"media-left\" href=\"#\">
                            <img src=\"{{asset('assets/img/avatars/3.jpg')}}\" class=\"img-responsive\">
                        </a>
                        <div class=\"media-body\">
                            <div class=\"media-links\">
                            <a href=\"#\" class=\"sidebar-menu-toggle\">Menu -</a> <a href=\"/admin/login\">Déconnexion</a>
                            </div>
                            <div class=\"media-author\">Michael Richards</div>
                        </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Menu (slidedown) -->
                    <div class=\"sidebar-widget menu-widget\">
                        <div class=\"row text-center mbn\">
                            <div class=\"col-xs-4\">
                                <a href=\"dashboard.html\" class=\"text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dashboard\">
                                    <span class=\"glyphicon glyphicon-home\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_messages.html\" class=\"text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Messages\">
                                    <span class=\"glyphicon glyphicon-inbox\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_profile.html\" class=\"text-alert\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tasks\">
                                    <span class=\"glyphicon glyphicon-bell\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_timeline.html\" class=\"text-system\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Activity\">
                                    <span class=\"fa fa-desktop\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_profile.html\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                                    <span class=\"fa fa-gears\"></span>
                                </a>
                            </div>
                            <div class=\"col-xs-4\">
                                <a href=\"pages_gallery.html\" class=\"text-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cron Jobs\">
                                    <span class=\"fa fa-flask\"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Search (hidden) -->
                    <div class=\"sidebar-widget search-widget\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                                <i class=\"fa fa-search\"></i>
                            </span>
                            <input type=\"text\" id=\"sidebar-search\" class=\"form-control\" placeholder=\"Rechercher...\">
                        </div>
                    </div>

                </header>
                <!-- End: Sidebar Header -->

                <!-- Start: Sidebar Menu -->
                <ul class=\"nav sidebar-menu\">
                    <li class=\"sidebar-label pt20\">Menu</li>
                    <li>
                        <a href=\"pages_calendar.html\">
                            <span class=\"fa fa-calendar\"></span>
                            <span class=\"sidebar-title\">Calendrier</span>
                            <span class=\"sidebar-title-tray\">
                                <span class=\"label label-xs bg-primary\">New</span>
                            </span>
                        </a>
                    </li>
                    <li class=\"{% if activeTDB is defined %} {{ activeTDB }} {% endif %}\">
                        <a href=\"/admin/index\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Tableau de bord</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"glyphicon glyphicon-usd text-alerts\"></span>
                            <span class=\"sidebar-title\">Achats</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"{% if activeNA is defined %} {{ activeNA }} {% endif %}\">
                                <a href=\"/admin/nouveau/achat\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Nouveau achat
                                </a>
                            </li>
                            <li class=\"{% if activeHDA is defined %} {{ activeHDA }} {% endif %}\">
                                <a href=\"/admin/listes/achats\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Historiques des achats
                                </a>
                            </li>
                            <li class=\"{% if activeF is defined %} {{ activeF }} {% endif %}\">
                                <a href=\"/admin/listes/fournisseurs\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Fournisseurs
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-tasks text-alerts\"></span>
                            <span class=\"sidebar-title\">Inventaires</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"{% if activeStks is defined %} {{ activeStks }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Stocks
                                </a>
                            </li>
                            <li class=\"{% if activeG is defined %} {{ activeG }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Genres
                                </a>
                            </li>
                            <li class=\"{% if activeAr is defined %} {{ activeAr }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Articles
                                </a>
                            </li>
                            <li class=\"{% if activeFa is defined %} {{ activeFa }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Fabricants
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-money text-alerts\"></span>
                            <span class=\"sidebar-title\">Ventes</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"{% if activeNV is defined %} {{ activeNV }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Nouvelle vente
                                </a>
                            </li>
                            <li class=\"{% if activeHDV is defined %} {{ activeHDV }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Historique des ventes
                                </a>
                            </li>
                            <li class=\"{% if activeAUV is defined %} {{ activeAUV }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Annuler une vente
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"glyphicon glyphicon-modal-window text-alerts\"></span>
                            <span class=\"sidebar-title\">Rapports</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"{% if activeStksR is defined %} {{ activeStksR }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Stocks
                                </a>
                            </li>
                            <li class=\"{% if activeVQ is defined %} {{ activeVQ }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Ventes quotidienne
                                </a>
                            </li>
                            <li class=\"{% if activeVMen is defined %} {{ activeVMen }} {% endif %}\">                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Ventes mensuelle
                                </a>
                            </li>
                            <li class=\"{% if activeVAn is defined %} {{ activeVAn }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Ventes annuelle
                                </a>
                            </li>
                            <li class=\"{% if activeRDA is defined %} {{ activeRDA }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Rapports des achats
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-users text-alerts\"></span>
                            <span class=\"sidebar-title\">Gestion des utilisateurs</span>
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"nav sub-nav\">
                            <li class=\"{% if activeUtil is defined %} {{ activeUtil }} {% endif %}\">
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-tags\"></span>
                                    Utilisateurs
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- sidebar progress bars -->
                    <li class=\"sidebar-label pt25 pb10\">User Stats</li>
                    <li class=\"sidebar-stat\">
                        <a href=\"#projectOne\" class=\"fs11\">
                            <span class=\"fa fa-inbox text-info\"></span>
                            <span class=\"sidebar-title text-muted\">Email Storage</span>
                            <span class=\"pull-right mr20 text-muted\">35%</span>
                            <div class=\"progress progress-bar-xs mh20 mb10\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 35%\">
                                    <span class=\"sr-only\">35% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"sidebar-stat\">
                        <a href=\"#projectOne\" class=\"fs11\">
                            <span class=\"fa fa-dropbox text-warning\"></span>
                            <span class=\"sidebar-title text-muted\">Bandwidth</span>
                            <span class=\"pull-right mr20 text-muted\">58%</span>
                            <div class=\"progress progress-bar-xs mh20\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 58%\">
                                    <span class=\"sr-only\">58% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End: Sidebar Menu -->

                <!-- Start: Sidebar Collapse Button -->
                <div class=\"sidebar-toggle-mini\">
                    <a href=\"#\">
                    <span class=\"fa fa-sign-out\"></span>
                    </a>
                </div>
                <!-- End: Sidebar Collapse Button -->

            </div>
            <!-- End: Sidebar Left Content -->

        </aside>
        <!-- End: Sidebar Left -->
        {% endblock %}
        {% block contenu %}
        {% endblock %}
        {% block footer %}
        <!-- Begin: Page Footer -->
        <footer id=\"content-footer\" class=\"affix\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <span class=\"footer-legal\">© 2015 AdminDesigns</span>
                </div>
                <div class=\"col-md-6 text-right\">
                    <span class=\"footer-meta\">60GB of <b>350GB</b> Free</span>
                    <a href=\"#content\" class=\"footer-return-top\">
                        <span class=\"fa fa-arrow-up\"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End: Page Footer -->
        {% endblock %}
        {% block rightbar %}
        <!-- Start: Right Sidebar -->
        <aside id=\"sidebar_right\" class=\"nano affix\">

            <!-- Start: Sidebar Right Content -->
            <div class=\"sidebar-right-content nano-content\">

                <div class=\"tab-block sidebar-block br-n\">
                <ul class=\"nav nav-tabs tabs-border nav-justified hidden\">
                    <li class=\"active\">
                    <a href=\"#sidebar-right-tab1\" data-toggle=\"tab\">Tab 1</a>
                    </li>
                    <li>
                    <a href=\"#sidebar-right-tab2\" data-toggle=\"tab\">Tab 2</a>
                    </li>
                    <li>
                    <a href=\"#sidebar-right-tab3\" data-toggle=\"tab\">Tab 3</a>
                    </li>
                </ul>
                <div class=\"tab-content br-n\">
                    <div id=\"sidebar-right-tab1\" class=\"tab-pane active\">

                    <h5 class=\"title-divider text-muted mb20\"> Server Statistics
                        <span class=\"pull-right\"> 2013
                        <i class=\"fa fa-caret-down ml5\"></i>
                        </span>
                    </h5>
                    <div class=\"progress mh5\">
                        <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 44%\">
                        <span class=\"fs11\">DB Request</span>
                        </div>
                    </div>
                    <div class=\"progress mh5\">
                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 84%\">
                        <span class=\"fs11 text-left\">Server Load</span>
                        </div>
                    </div>
                    <div class=\"progress mh5\">
                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 61%\">
                        <span class=\"fs11 text-left\">Server Connections</span>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt30 mb10\">Traffic Margins</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                        <h3 class=\"text-primary mn pl5\">132</h3>
                        </div>
                        <div class=\"col-xs-7 text-right\">
                        <h3 class=\"text-success-dark mn\">
                            <i class=\"fa fa-caret-up\"></i> 13.2% </h3>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt25 mb10\">Database Request</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                        <h3 class=\"text-primary mn pl5\">212</h3>
                        </div>
                        <div class=\"col-xs-7 text-right\">
                        <h3 class=\"text-success-dark mn\">
                            <i class=\"fa fa-caret-up\"></i> 25.6% </h3>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt25 mb10\">Server Response</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                        <h3 class=\"text-primary mn pl5\">82.5</h3>
                        </div>
                        <div class=\"col-xs-7 text-right\">
                        <h3 class=\"text-danger mn\">
                            <i class=\"fa fa-caret-down\"></i> 17.9% </h3>
                        </div>
                    </div>

                    <h5 class=\"title-divider text-muted mt40 mb20\"> Server Statistics
                        <span class=\"pull-right text-primary fw600\">USA</span>
                    </h5>


                    </div>
                    <div id=\"sidebar-right-tab2\" class=\"tab-pane\"></div>
                    <div id=\"sidebar-right-tab3\" class=\"tab-pane\"></div>
                </div>
                <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->
        {% endblock %}
    </div>
    <!-- End: Main -->
        {% endblock %}

        
        {% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Projet/pharmAssistant/templates/base.html.twig");
    }
}
