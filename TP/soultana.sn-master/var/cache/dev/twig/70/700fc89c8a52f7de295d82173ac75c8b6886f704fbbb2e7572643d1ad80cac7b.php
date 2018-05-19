<?php

/* base1.html.twig */
class __TwigTemplate_4cd5a20413dcb4641539b1ece8e02c7a22cf319bb455a0476a93efb01f7abb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slidebar' => array($this, 'block_slidebar'),
            'accueil' => array($this, 'block_accueil'),
            'reservation' => array($this, 'block_reservation'),
            'main' => array($this, 'block_main'),
            'titre_page_li' => array($this, 'block_titre_page_li'),
            'titre_page_h1' => array($this, 'block_titre_page_h1'),
            'contenus' => array($this, 'block_contenus'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb5b5fc3880b35474415f78f0b719c2621e1aef8c3b9172bd12f9b446f384c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb5b5fc3880b35474415f78f0b719c2621e1aef8c3b9172bd12f9b446f384c3->enter($__internal_feb5b5fc3880b35474415f78f0b719c2621e1aef8c3b9172bd12f9b446f384c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_d18aae54c6116df1ada542edd935d1723222e44dd27bd15e8a527659f803197f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18aae54c6116df1ada542edd935d1723222e44dd27bd15e8a527659f803197f->enter($__internal_d18aae54c6116df1ada542edd935d1723222e44dd27bd15e8a527659f803197f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 589
        echo "<!--/.body-->
";
        // line 590
        $this->displayBlock('scripts', $context, $blocks);
        // line 612
        echo "</body>

</html>";
        
        $__internal_feb5b5fc3880b35474415f78f0b719c2621e1aef8c3b9172bd12f9b446f384c3->leave($__internal_feb5b5fc3880b35474415f78f0b719c2621e1aef8c3b9172bd12f9b446f384c3_prof);

        
        $__internal_d18aae54c6116df1ada542edd935d1723222e44dd27bd15e8a527659f803197f->leave($__internal_d18aae54c6116df1ada542edd935d1723222e44dd27bd15e8a527659f803197f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2985ef44061677b1b4d2a8e40ea37f9cee7165b1a87f5c4b3da00b772bbdbe03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2985ef44061677b1b4d2a8e40ea37f9cee7165b1a87f5c4b3da00b772bbdbe03->enter($__internal_2985ef44061677b1b4d2a8e40ea37f9cee7165b1a87f5c4b3da00b772bbdbe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e642fd22eda19ebb07d2827876132e3e6421eb87ca9a4c690da87f39cc484454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e642fd22eda19ebb07d2827876132e3e6421eb87ca9a4c690da87f39cc484454->enter($__internal_e642fd22eda19ebb07d2827876132e3e6421eb87ca9a4c690da87f39cc484454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
        
        $__internal_e642fd22eda19ebb07d2827876132e3e6421eb87ca9a4c690da87f39cc484454->leave($__internal_e642fd22eda19ebb07d2827876132e3e6421eb87ca9a4c690da87f39cc484454_prof);

        
        $__internal_2985ef44061677b1b4d2a8e40ea37f9cee7165b1a87f5c4b3da00b772bbdbe03->leave($__internal_2985ef44061677b1b4d2a8e40ea37f9cee7165b1a87f5c4b3da00b772bbdbe03_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a3f036428c72fa470b60edc13ca0d49aa6ff9d36ba06b491542749be72490a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3f036428c72fa470b60edc13ca0d49aa6ff9d36ba06b491542749be72490a9->enter($__internal_6a3f036428c72fa470b60edc13ca0d49aa6ff9d36ba06b491542749be72490a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77760a80d06cf4e3a6aea22172a06cca2b10aee1f313c9d878a881851ff9d0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77760a80d06cf4e3a6aea22172a06cca2b10aee1f313c9d878a881851ff9d0d6->enter($__internal_77760a80d06cf4e3a6aea22172a06cca2b10aee1f313c9d878a881851ff9d0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/monstyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 19
        echo "    ";
        // line 20
        echo "
    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
        
        $__internal_77760a80d06cf4e3a6aea22172a06cca2b10aee1f313c9d878a881851ff9d0d6->leave($__internal_77760a80d06cf4e3a6aea22172a06cca2b10aee1f313c9d878a881851ff9d0d6_prof);

        
        $__internal_6a3f036428c72fa470b60edc13ca0d49aa6ff9d36ba06b491542749be72490a9->leave($__internal_6a3f036428c72fa470b60edc13ca0d49aa6ff9d36ba06b491542749be72490a9_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_b38fd3b90f0176a40e86577274961d60f6194765533df70b60e847d0d5129b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38fd3b90f0176a40e86577274961d60f6194765533df70b60e847d0d5129b96->enter($__internal_b38fd3b90f0176a40e86577274961d60f6194765533df70b60e847d0d5129b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42e08ce79827a23987016637f1310bb6a39c34e4add29579655ad49154e34059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e08ce79827a23987016637f1310bb6a39c34e4add29579655ad49154e34059->enter($__internal_42e08ce79827a23987016637f1310bb6a39c34e4add29579655ad49154e34059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 113
        echo "

    ";
        // line 115
        $this->displayBlock('slidebar', $context, $blocks);
        // line 166
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    ";
        // line 167
        $this->displayBlock('main', $context, $blocks);
        // line 583
        echo "    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
";
        
        $__internal_42e08ce79827a23987016637f1310bb6a39c34e4add29579655ad49154e34059->leave($__internal_42e08ce79827a23987016637f1310bb6a39c34e4add29579655ad49154e34059_prof);

        
        $__internal_b38fd3b90f0176a40e86577274961d60f6194765533df70b60e847d0d5129b96->leave($__internal_b38fd3b90f0176a40e86577274961d60f6194765533df70b60e847d0d5129b96_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_3b26a5c105eea661a82e22b3f8709827ca4fa4c0d4852cd0481f0cc1721e990f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b26a5c105eea661a82e22b3f8709827ca4fa4c0d4852cd0481f0cc1721e990f->enter($__internal_3b26a5c105eea661a82e22b3f8709827ca4fa4c0d4852cd0481f0cc1721e990f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_27dccb3e276780eea76953fdd22591ae656ece09de146d887f6c15ae45daf9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dccb3e276780eea76953fdd22591ae656ece09de146d887f6c15ae45daf9ee->enter($__internal_27dccb3e276780eea76953fdd22591ae656ece09de146d887f6c15ae45daf9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><span>SOULTANA </span>Admin</a>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-envelope\"></em><span class=\"label label-danger\">15</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">3 mins ago</small>
                                        <a href=\"#\"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">1 hour ago</small>
                                        <a href=\"#\">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class=\"text-muted\">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"all-button\">
                                    <a href=\"#\">
                                        <em class=\"fa fa-inbox\"></em> <strong>All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-bell\"></em><span class=\"label label-info\">5</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-envelope\"></em> 1 New Message
                                        <span class=\"pull-right text-muted small\">3 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-heart\"></em> 12 New Likes
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-user\"></em> 5 New Followers
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    ";
        
        $__internal_27dccb3e276780eea76953fdd22591ae656ece09de146d887f6c15ae45daf9ee->leave($__internal_27dccb3e276780eea76953fdd22591ae656ece09de146d887f6c15ae45daf9ee_prof);

        
        $__internal_3b26a5c105eea661a82e22b3f8709827ca4fa4c0d4852cd0481f0cc1721e990f->leave($__internal_3b26a5c105eea661a82e22b3f8709827ca4fa4c0d4852cd0481f0cc1721e990f_prof);

    }

    // line 115
    public function block_slidebar($context, array $blocks = array())
    {
        $__internal_2127370e053c8bef726464c5134e5fb4c7164d5337eec681491cefd897a0707f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2127370e053c8bef726464c5134e5fb4c7164d5337eec681491cefd897a0707f->enter($__internal_2127370e053c8bef726464c5134e5fb4c7164d5337eec681491cefd897a0707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_8577937245e79bfb525e15261d3cbcc37cdf971dc4705c97b8125dff08fbeb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8577937245e79bfb525e15261d3cbcc37cdf971dc4705c97b8125dff08fbeb26->enter($__internal_8577937245e79bfb525e15261d3cbcc37cdf971dc4705c97b8125dff08fbeb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        // line 116
        echo "    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/images/photo-profil/client-face2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 14px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        <ul class=\"nav menu\" id=\"menu_nav\">
            <li ";
        // line 134
        $this->displayBlock('accueil', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accueil");
        echo "\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li ";
        // line 137
        $this->displayBlock('reservation', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation");
        echo "\"><em class=\"fa fa-registered\">&nbsp;</em> Réservation</a></li>
            <li><a href=\"panels.html\" class=\"\"><em class=\"fa fa-clone\">&nbsp;</em> Alerts &amp; Panels</a></li>
            <li class=\"parent \">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Multilevel <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 2
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 3
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    ";
        
        $__internal_8577937245e79bfb525e15261d3cbcc37cdf971dc4705c97b8125dff08fbeb26->leave($__internal_8577937245e79bfb525e15261d3cbcc37cdf971dc4705c97b8125dff08fbeb26_prof);

        
        $__internal_2127370e053c8bef726464c5134e5fb4c7164d5337eec681491cefd897a0707f->leave($__internal_2127370e053c8bef726464c5134e5fb4c7164d5337eec681491cefd897a0707f_prof);

    }

    // line 134
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_f7218eeef31712f2b17343f8c5d2c47fbc27e82150e4912c32ecdb93a86d6fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7218eeef31712f2b17343f8c5d2c47fbc27e82150e4912c32ecdb93a86d6fbf->enter($__internal_f7218eeef31712f2b17343f8c5d2c47fbc27e82150e4912c32ecdb93a86d6fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_31c2728ee023295e5c6044a1991c3b17340f4f5079b5d3476bec3c81cf3d62ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c2728ee023295e5c6044a1991c3b17340f4f5079b5d3476bec3c81cf3d62ef->enter($__internal_31c2728ee023295e5c6044a1991c3b17340f4f5079b5d3476bec3c81cf3d62ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        echo " class=\"active\" ";
        
        $__internal_31c2728ee023295e5c6044a1991c3b17340f4f5079b5d3476bec3c81cf3d62ef->leave($__internal_31c2728ee023295e5c6044a1991c3b17340f4f5079b5d3476bec3c81cf3d62ef_prof);

        
        $__internal_f7218eeef31712f2b17343f8c5d2c47fbc27e82150e4912c32ecdb93a86d6fbf->leave($__internal_f7218eeef31712f2b17343f8c5d2c47fbc27e82150e4912c32ecdb93a86d6fbf_prof);

    }

    // line 137
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_ff68de929b007a4983f8c31912daf334ee158709f00efd9d98837dc7c5af3e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff68de929b007a4983f8c31912daf334ee158709f00efd9d98837dc7c5af3e07->enter($__internal_ff68de929b007a4983f8c31912daf334ee158709f00efd9d98837dc7c5af3e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_875031c29e13c6edb924276604db9ac2344b26e0a38356604f3238beb47093f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875031c29e13c6edb924276604db9ac2344b26e0a38356604f3238beb47093f7->enter($__internal_875031c29e13c6edb924276604db9ac2344b26e0a38356604f3238beb47093f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo " class=\"active\" ";
        
        $__internal_875031c29e13c6edb924276604db9ac2344b26e0a38356604f3238beb47093f7->leave($__internal_875031c29e13c6edb924276604db9ac2344b26e0a38356604f3238beb47093f7_prof);

        
        $__internal_ff68de929b007a4983f8c31912daf334ee158709f00efd9d98837dc7c5af3e07->leave($__internal_ff68de929b007a4983f8c31912daf334ee158709f00efd9d98837dc7c5af3e07_prof);

    }

    // line 167
    public function block_main($context, array $blocks = array())
    {
        $__internal_a40bb1a384c39f8ef2705781b02dcc00b847a9188b7ebb34adbf1d4b01f315fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40bb1a384c39f8ef2705781b02dcc00b847a9188b7ebb34adbf1d4b01f315fc->enter($__internal_a40bb1a384c39f8ef2705781b02dcc00b847a9188b7ebb34adbf1d4b01f315fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_796c1c6de2c65f154357a55b43496c55e07432f45adba90bd793a48d3d4fa5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796c1c6de2c65f154357a55b43496c55e07432f45adba90bd793a48d3d4fa5b5->enter($__internal_796c1c6de2c65f154357a55b43496c55e07432f45adba90bd793a48d3d4fa5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 168
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\"> ";
        // line 175
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> ";
        // line 181
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo " </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
            ";
        // line 186
        $this->displayBlock('contenus', $context, $blocks);
        // line 580
        echo "        </div>
        <!--/.contenus-->
    ";
        
        $__internal_796c1c6de2c65f154357a55b43496c55e07432f45adba90bd793a48d3d4fa5b5->leave($__internal_796c1c6de2c65f154357a55b43496c55e07432f45adba90bd793a48d3d4fa5b5_prof);

        
        $__internal_a40bb1a384c39f8ef2705781b02dcc00b847a9188b7ebb34adbf1d4b01f315fc->leave($__internal_a40bb1a384c39f8ef2705781b02dcc00b847a9188b7ebb34adbf1d4b01f315fc_prof);

    }

    // line 175
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_c47676d69370d4535e2676705165958251dd494cf0783bd087afc6cb876e04d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47676d69370d4535e2676705165958251dd494cf0783bd087afc6cb876e04d7->enter($__internal_c47676d69370d4535e2676705165958251dd494cf0783bd087afc6cb876e04d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_6b5ab04393936284ec23a9f9a4af6275d402e6b7a5733b5fe564d5466963613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5ab04393936284ec23a9f9a4af6275d402e6b7a5733b5fe564d5466963613f->enter($__internal_6b5ab04393936284ec23a9f9a4af6275d402e6b7a5733b5fe564d5466963613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        echo " tableau de bord ";
        
        $__internal_6b5ab04393936284ec23a9f9a4af6275d402e6b7a5733b5fe564d5466963613f->leave($__internal_6b5ab04393936284ec23a9f9a4af6275d402e6b7a5733b5fe564d5466963613f_prof);

        
        $__internal_c47676d69370d4535e2676705165958251dd494cf0783bd087afc6cb876e04d7->leave($__internal_c47676d69370d4535e2676705165958251dd494cf0783bd087afc6cb876e04d7_prof);

    }

    // line 181
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_1206dd4c2291bb25d057e6a205d62e89fcddb7786fe153a169bd379679c95225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1206dd4c2291bb25d057e6a205d62e89fcddb7786fe153a169bd379679c95225->enter($__internal_1206dd4c2291bb25d057e6a205d62e89fcddb7786fe153a169bd379679c95225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_a0310aeb387f246a4f069a01e675a40731a2aa10638e47d4ac10664b2b3cb5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0310aeb387f246a4f069a01e675a40731a2aa10638e47d4ac10664b2b3cb5f2->enter($__internal_a0310aeb387f246a4f069a01e675a40731a2aa10638e47d4ac10664b2b3cb5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        echo " Tableau de bord ";
        
        $__internal_a0310aeb387f246a4f069a01e675a40731a2aa10638e47d4ac10664b2b3cb5f2->leave($__internal_a0310aeb387f246a4f069a01e675a40731a2aa10638e47d4ac10664b2b3cb5f2_prof);

        
        $__internal_1206dd4c2291bb25d057e6a205d62e89fcddb7786fe153a169bd379679c95225->leave($__internal_1206dd4c2291bb25d057e6a205d62e89fcddb7786fe153a169bd379679c95225_prof);

    }

    // line 186
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_d3d40710dd3e6ed41a2b5cc00c3e21647b4cf6d4b4fa1884f3b33725f0dc61c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d40710dd3e6ed41a2b5cc00c3e21647b4cf6d4b4fa1884f3b33725f0dc61c1->enter($__internal_d3d40710dd3e6ed41a2b5cc00c3e21647b4cf6d4b4fa1884f3b33725f0dc61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_d69cbe983ce004f866a3f04a8706a011345614a421124ba6c6f5dac9f1de6882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69cbe983ce004f866a3f04a8706a011345614a421124ba6c6f5dac9f1de6882->enter($__internal_d69cbe983ce004f866a3f04a8706a011345614a421124ba6c6f5dac9f1de6882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 187
        echo "            <div class=\"panel panel-container\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-teal panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-shopping-cart color-blue\"></em>
                                <div class=\"large\">120</div>
                                <div class=\"text-muted\">New Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-blue panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-comments color-orange\"></em>
                                <div class=\"large\">52</div>
                                <div class=\"text-muted\">Comments</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-orange panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-users color-teal\"></em>
                                <div class=\"large\">24</div>
                                <div class=\"text-muted\">New Users</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-red panel-widget \">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-search color-red\"></em>
                                <div class=\"large\">25.2k</div>
                                <div class=\"text-muted\">Page Views</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Site Traffic Overview
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <div class=\"canvas-wrapper\">
                                <canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class=\"row\">
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>New Orders</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\"><span class=\"percent\">92%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>Comments</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\"><span class=\"percent\">65%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>New Users</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\"><span class=\"percent\">56%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>Visitors</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\"><span class=\"percent\">27%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"panel panel-default chat\">
                        <div class=\"panel-heading\">
                            Chat
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <ul>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" /><span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
                            </span></div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            To-do List
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <ul class=\"todo-list\">
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-1\" />
                                        <label for=\"checkbox-1\">Make coffee</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-2\" />
                                        <label for=\"checkbox-2\">Check emails</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-3\" />
                                        <label for=\"checkbox-3\">Reply to Jane</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-4\" />
                                        <label for=\"checkbox-4\">Make more coffee</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-5\" />
                                        <label for=\"checkbox-5\">Work on the new design</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-6\" />
                                        <label for=\"checkbox-6\">Get feedback on design</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                            </span></div>
                        </div>
                    </div>
                </div>
                <!--/.col-->


                <div class=\"col-md-6\">
                    <div class=\"panel panel-default \">
                        <div class=\"panel-heading\">
                            Timeline
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body timeline-container\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-pushpin\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge primary\"><em class=\"glyphicon glyphicon-link\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-camera\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-paperclip\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->
        ";
        
        $__internal_d69cbe983ce004f866a3f04a8706a011345614a421124ba6c6f5dac9f1de6882->leave($__internal_d69cbe983ce004f866a3f04a8706a011345614a421124ba6c6f5dac9f1de6882_prof);

        
        $__internal_d3d40710dd3e6ed41a2b5cc00c3e21647b4cf6d4b4fa1884f3b33725f0dc61c1->leave($__internal_d3d40710dd3e6ed41a2b5cc00c3e21647b4cf6d4b4fa1884f3b33725f0dc61c1_prof);

    }

    // line 590
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b3ea106b6c8d3b0244de904c9af9c20af01f2cf5e94a7b30083fd0942ef15bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea106b6c8d3b0244de904c9af9c20af01f2cf5e94a7b30083fd0942ef15bcf->enter($__internal_b3ea106b6c8d3b0244de904c9af9c20af01f2cf5e94a7b30083fd0942ef15bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_63b7ee0844d1c1e96c5acaec1a59d1d8725536202f0e06ec0120fa5212c4a8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b7ee0844d1c1e96c5acaec1a59d1d8725536202f0e06ec0120fa5212c4a8a5->enter($__internal_63b7ee0844d1c1e96c5acaec1a59d1d8725536202f0e06ec0120fa5212c4a8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 591
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/monscript.js"), "html", null, true);
        echo "\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
        };
    </script>
";
        
        $__internal_63b7ee0844d1c1e96c5acaec1a59d1d8725536202f0e06ec0120fa5212c4a8a5->leave($__internal_63b7ee0844d1c1e96c5acaec1a59d1d8725536202f0e06ec0120fa5212c4a8a5_prof);

        
        $__internal_b3ea106b6c8d3b0244de904c9af9c20af01f2cf5e94a7b30083fd0942ef15bcf->leave($__internal_b3ea106b6c8d3b0244de904c9af9c20af01f2cf5e94a7b30083fd0942ef15bcf_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  941 => 599,  937 => 598,  933 => 597,  929 => 596,  925 => 595,  921 => 594,  917 => 593,  913 => 592,  908 => 591,  899 => 590,  497 => 187,  488 => 186,  470 => 181,  452 => 175,  440 => 580,  438 => 186,  430 => 181,  421 => 175,  412 => 168,  403 => 167,  385 => 137,  367 => 134,  352 => 161,  323 => 137,  315 => 134,  297 => 119,  292 => 116,  283 => 115,  194 => 33,  185 => 32,  170 => 583,  168 => 167,  165 => 166,  163 => 115,  159 => 113,  156 => 32,  147 => 31,  130 => 20,  128 => 19,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 7,  62 => 612,  60 => 590,  57 => 589,  55 => 31,  50 => 28,  47 => 10,  45 => 7,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %}
    <title>Soultana - Dashboard</title>
    {% endblock %}
    {% block stylesheets %}
    <link href=\"{{asset('admin/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/datepicker3.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/monstyle.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
    {# <script type=\"text/javascript\" src=\"{{asset('DataTables/datatables.min.js')}}\"></script>
    <link rel=\"stylesheet\" href=\"{{asset('DataTables/datatables.min.css')}}\" type=\"text/css\"/> #}
    {# <script src=\"{{asset('admin/js/jquery-1.11.1.min.js')}}\"></script> #}

    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    {% endblock %}
</head>

<body>
{% block body %}
    {% block header %}
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><span>SOULTANA </span>Admin</a>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-envelope\"></em><span class=\"label label-danger\">15</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">3 mins ago</small>
                                        <a href=\"#\"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">1 hour ago</small>
                                        <a href=\"#\">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class=\"text-muted\">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"all-button\">
                                    <a href=\"#\">
                                        <em class=\"fa fa-inbox\"></em> <strong>All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-bell\"></em><span class=\"label label-info\">5</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-envelope\"></em> 1 New Message
                                        <span class=\"pull-right text-muted small\">3 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-heart\"></em> 12 New Likes
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-user\"></em> 5 New Followers
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    {% endblock %}


    {% block slidebar %}
    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"{{asset('admin/images/photo-profil/client-face2.png')}}\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 14px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        <ul class=\"nav menu\" id=\"menu_nav\">
            <li {% block accueil %} class=\"active\" {% endblock %} ><a href=\"{{path('admin_accueil')}}\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li {% block reservation %} class=\"active\" {% endblock %}><a href=\"{{path('admin_reservation')}}\"><em class=\"fa fa-registered\">&nbsp;</em> Réservation</a></li>
            <li><a href=\"panels.html\" class=\"\"><em class=\"fa fa-clone\">&nbsp;</em> Alerts &amp; Panels</a></li>
            <li class=\"parent \">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Multilevel <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 2
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 3
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"{{path('admin_index')}}\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    {% endblock %}
    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    {% block main %}
        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\"> {% block titre_page_li %} tableau de bord {% endblock %} </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> {% block titre_page_h1 %} Tableau de bord {% endblock %} </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
            {% block contenus %}
            <div class=\"panel panel-container\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-teal panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-shopping-cart color-blue\"></em>
                                <div class=\"large\">120</div>
                                <div class=\"text-muted\">New Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-blue panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-comments color-orange\"></em>
                                <div class=\"large\">52</div>
                                <div class=\"text-muted\">Comments</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-orange panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-users color-teal\"></em>
                                <div class=\"large\">24</div>
                                <div class=\"text-muted\">New Users</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-red panel-widget \">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-search color-red\"></em>
                                <div class=\"large\">25.2k</div>
                                <div class=\"text-muted\">Page Views</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Site Traffic Overview
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <div class=\"canvas-wrapper\">
                                <canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class=\"row\">
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>New Orders</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\"><span class=\"percent\">92%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>Comments</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\"><span class=\"percent\">65%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>New Users</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\"><span class=\"percent\">56%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>Visitors</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\"><span class=\"percent\">27%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"panel panel-default chat\">
                        <div class=\"panel-heading\">
                            Chat
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <ul>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" /><span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
                            </span></div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            To-do List
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <ul class=\"todo-list\">
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-1\" />
                                        <label for=\"checkbox-1\">Make coffee</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-2\" />
                                        <label for=\"checkbox-2\">Check emails</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-3\" />
                                        <label for=\"checkbox-3\">Reply to Jane</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-4\" />
                                        <label for=\"checkbox-4\">Make more coffee</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-5\" />
                                        <label for=\"checkbox-5\">Work on the new design</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-6\" />
                                        <label for=\"checkbox-6\">Get feedback on design</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                            </span></div>
                        </div>
                    </div>
                </div>
                <!--/.col-->


                <div class=\"col-md-6\">
                    <div class=\"panel panel-default \">
                        <div class=\"panel-heading\">
                            Timeline
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body timeline-container\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-pushpin\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge primary\"><em class=\"glyphicon glyphicon-link\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-camera\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-paperclip\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->
        {% endblock %}
        </div>
        <!--/.contenus-->
    {% endblock %}
    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
{% endblock %}
<!--/.body-->
{% block scripts %}
    <script src=\"{{asset('admin/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('admin/js/custom.js')}}\"></script>
    <script src=\"{{asset('admin/js/monscript.js')}}\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
        };
    </script>
{% endblock %}
</body>

</html>", "base1.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/base1.html.twig");
    }
}
