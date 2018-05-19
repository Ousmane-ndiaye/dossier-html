<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
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
            'titre' => array($this, 'block_titre'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1abdaed6975d922bbb2096c649c8d72e234961ad121eaf67491a3f2ec40a3c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abdaed6975d922bbb2096c649c8d72e234961ad121eaf67491a3f2ec40a3c9b->enter($__internal_1abdaed6975d922bbb2096c649c8d72e234961ad121eaf67491a3f2ec40a3c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_aa63918a4c1e179ddd239a52ab9c2daf9817b43cd2af0f028dd1b8b71e99e522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa63918a4c1e179ddd239a52ab9c2daf9817b43cd2af0f028dd1b8b71e99e522->enter($__internal_aa63918a4c1e179ddd239a52ab9c2daf9817b43cd2af0f028dd1b8b71e99e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Début bloc CSS -->
        <style>
            .nav>li>a:hover{
                padding-bottom: 35px;
                border-bottom: 3px solid #e7b315;
            }
\t\t</style>
\t\t

\t\t<!-- Plugins css-->
        <!--<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "        <!-- Fin bloc CSS -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("senoffice.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 612
        echo "    </body>
</html>
";
        
        $__internal_1abdaed6975d922bbb2096c649c8d72e234961ad121eaf67491a3f2ec40a3c9b->leave($__internal_1abdaed6975d922bbb2096c649c8d72e234961ad121eaf67491a3f2ec40a3c9b_prof);

        
        $__internal_aa63918a4c1e179ddd239a52ab9c2daf9817b43cd2af0f028dd1b8b71e99e522->leave($__internal_aa63918a4c1e179ddd239a52ab9c2daf9817b43cd2af0f028dd1b8b71e99e522_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a04e5326c25d61c25e315d54303c3ee6ecbabac0274f689312ac40baa5d1f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a04e5326c25d61c25e315d54303c3ee6ecbabac0274f689312ac40baa5d1f89->enter($__internal_3a04e5326c25d61c25e315d54303c3ee6ecbabac0274f689312ac40baa5d1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deb4035642fe755f10466e1c6fada50f81981dda5c500252098277a20dcdfc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb4035642fe755f10466e1c6fada50f81981dda5c500252098277a20dcdfc06->enter($__internal_deb4035642fe755f10466e1c6fada50f81981dda5c500252098277a20dcdfc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_deb4035642fe755f10466e1c6fada50f81981dda5c500252098277a20dcdfc06->leave($__internal_deb4035642fe755f10466e1c6fada50f81981dda5c500252098277a20dcdfc06_prof);

        
        $__internal_3a04e5326c25d61c25e315d54303c3ee6ecbabac0274f689312ac40baa5d1f89->leave($__internal_3a04e5326c25d61c25e315d54303c3ee6ecbabac0274f689312ac40baa5d1f89_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a928ca9caaa5b1a9b862181f739673b34b9f0f718b758aa712ed85c76f9a4104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a928ca9caaa5b1a9b862181f739673b34b9f0f718b758aa712ed85c76f9a4104->enter($__internal_a928ca9caaa5b1a9b862181f739673b34b9f0f718b758aa712ed85c76f9a4104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1dd5d883e16be7a34874a4054d92800bd08794ab94d3b41cb4528c32ad7a7426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd5d883e16be7a34874a4054d92800bd08794ab94d3b41cb4528c32ad7a7426->enter($__internal_1dd5d883e16be7a34874a4054d92800bd08794ab94d3b41cb4528c32ad7a7426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/autocomplete/ac.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1dd5d883e16be7a34874a4054d92800bd08794ab94d3b41cb4528c32ad7a7426->leave($__internal_1dd5d883e16be7a34874a4054d92800bd08794ab94d3b41cb4528c32ad7a7426_prof);

        
        $__internal_a928ca9caaa5b1a9b862181f739673b34b9f0f718b758aa712ed85c76f9a4104->leave($__internal_a928ca9caaa5b1a9b862181f739673b34b9f0f718b758aa712ed85c76f9a4104_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d60b1b1a1dbefa077ee228e5cee47fe6622f1e02e8db6cd22256b685dc80abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d60b1b1a1dbefa077ee228e5cee47fe6622f1e02e8db6cd22256b685dc80abf->enter($__internal_0d60b1b1a1dbefa077ee228e5cee47fe6622f1e02e8db6cd22256b685dc80abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a65b33b2d6a4c6197cf16fa7c97fef29866735aabac003679eadf2046a2c70e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65b33b2d6a4c6197cf16fa7c97fef29866735aabac003679eadf2046a2c70e2->enter($__internal_a65b33b2d6a4c6197cf16fa7c97fef29866735aabac003679eadf2046a2c70e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "        <div class=\"preloader\"></div>
        ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        $this->displayBlock('titre', $context, $blocks);
        // line 101
        echo "
        ";
        // line 102
        $this->displayBlock('slide', $context, $blocks);
        // line 161
        echo "        ";
        $this->displayBlock('recherche', $context, $blocks);
        // line 205
        echo "        ";
        $this->displayBlock('offre', $context, $blocks);
        // line 268
        echo "        ";
        $this->displayBlock('apropos', $context, $blocks);
        // line 358
        echo "
        ";
        // line 359
        $this->displayBlock('partenaires', $context, $blocks);
        // line 394
        echo "        ";
        $this->displayBlock('galerie', $context, $blocks);
        // line 450
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 542
        echo "        <!-- Début bloc script -->
\t\t<script>
            if (window.location.href === \"http://127.0.0.1:8000/sen-office/catalogue\") {
\t\t\t\tvar lenav = document.getElementById(\"leheader\").children[0];
\t\t\t\tlenav.setAttribute(\"style\", \"background-color: rgba(22, 38, 46, 0.95);\");
            }
        </script>
        ";
        // line 549
        $this->displayBlock('javascripts', $context, $blocks);
        // line 570
        echo "\t\t<!-- Fin bloc script -->
\t\t

\t\t<script>
            var resizefunc = [];
        </script>

\t\t<!-- Main  -->
        <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/toggles/toggles.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>




        <script>
            jQuery(document).ready(function() {

                // Select2
                jQuery(\".select2\").select2({
\t\t\t\t\twidth: '100%'
\t\t\t\t});
\t\t\t\t
\t\t\t\tdocument.getElementById(\"select2-chosen-2\").setAttribute(\"style\", \"color: white\");
            });
        </script>
    ";
        
        $__internal_a65b33b2d6a4c6197cf16fa7c97fef29866735aabac003679eadf2046a2c70e2->leave($__internal_a65b33b2d6a4c6197cf16fa7c97fef29866735aabac003679eadf2046a2c70e2_prof);

        
        $__internal_0d60b1b1a1dbefa077ee228e5cee47fe6622f1e02e8db6cd22256b685dc80abf->leave($__internal_0d60b1b1a1dbefa077ee228e5cee47fe6622f1e02e8db6cd22256b685dc80abf_prof);

    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        $__internal_8890695d9126a7d31ba8a1311ac3b4c7f42ed7a474db68fb94a0af656c685f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8890695d9126a7d31ba8a1311ac3b4c7f42ed7a474db68fb94a0af656c685f8a->enter($__internal_8890695d9126a7d31ba8a1311ac3b4c7f42ed7a474db68fb94a0af656c685f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a4583bbd523495e00cb3d5db32d17e0c400593039d931a7696ab8f2f4fc6ec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4583bbd523495e00cb3d5db32d17e0c400593039d931a7696ab8f2f4fc6ec37->enter($__internal_a4583bbd523495e00cb3d5db32d17e0c400593039d931a7696ab8f2f4fc6ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "\t\t<header id=\"leheader\" class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/senoffice.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"";
        // line 70
        if (array_key_exists("activeA", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["activeA"] ?? $this->getContext($context, "activeA")), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo "acceuil";
        echo "\">Acceuil</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 71
        if (array_key_exists("activeC", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["activeC"] ?? $this->getContext($context, "activeC")), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo "catalogue";
        echo "\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Inscription</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Partagez votre salle</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t<div class=\"mg-search-box-cont pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mg-search-box\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"Type Keyword...\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</header>
        ";
        
        $__internal_a4583bbd523495e00cb3d5db32d17e0c400593039d931a7696ab8f2f4fc6ec37->leave($__internal_a4583bbd523495e00cb3d5db32d17e0c400593039d931a7696ab8f2f4fc6ec37_prof);

        
        $__internal_8890695d9126a7d31ba8a1311ac3b4c7f42ed7a474db68fb94a0af656c685f8a->leave($__internal_8890695d9126a7d31ba8a1311ac3b4c7f42ed7a474db68fb94a0af656c685f8a_prof);

    }

    // line 99
    public function block_titre($context, array $blocks = array())
    {
        $__internal_aa016751e0f5e5da1c7982c5a761c1f413432f72b9f42a1dfff7b99f4724cb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa016751e0f5e5da1c7982c5a761c1f413432f72b9f42a1dfff7b99f4724cb77->enter($__internal_aa016751e0f5e5da1c7982c5a761c1f413432f72b9f42a1dfff7b99f4724cb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_b16a701e352aa19427f728da3f2b0e60bb3cd2ff027551d8c7c495543cc8578e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16a701e352aa19427f728da3f2b0e60bb3cd2ff027551d8c7c495543cc8578e->enter($__internal_b16a701e352aa19427f728da3f2b0e60bb3cd2ff027551d8c7c495543cc8578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 100
        echo "        ";
        
        $__internal_b16a701e352aa19427f728da3f2b0e60bb3cd2ff027551d8c7c495543cc8578e->leave($__internal_b16a701e352aa19427f728da3f2b0e60bb3cd2ff027551d8c7c495543cc8578e_prof);

        
        $__internal_aa016751e0f5e5da1c7982c5a761c1f413432f72b9f42a1dfff7b99f4724cb77->leave($__internal_aa016751e0f5e5da1c7982c5a761c1f413432f72b9f42a1dfff7b99f4724cb77_prof);

    }

    // line 102
    public function block_slide($context, array $blocks = array())
    {
        $__internal_7ff968934a7557a80445360e30f2636e66a2c2705cb205ec3c5f0576ec697035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff968934a7557a80445360e30f2636e66a2c2705cb205ec3c5f0576ec697035->enter($__internal_7ff968934a7557a80445360e30f2636e66a2c2705cb205ec3c5f0576ec697035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_8c6fa21475e8965e42fea6558ea0755b80aec83717c1c24d891f4e832b3209ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6fa21475e8965e42fea6558ea0755b80aec83717c1c24d891f4e832b3209ed->enter($__internal_8c6fa21475e8965e42fea6558ea0755b80aec83717c1c24d891f4e832b3209ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 103
        echo "\t\t<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item active beactive\">
\t\t\t\t\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-4.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Bienvenue Sen Office</h2>
\t\t\t\t\t\t<p>Vos séminaires et réunions dans le lieu idéal</p>
                        <div class=\"col-md-3 \">\t
                        </div>
\t\t\t\t\t\t<div class=\"col-md-4\" style=\"margin-left: 9%;\">
\t\t\t\t\t\t    <center><button type=\"submit\" class=\"btn btn-main btn-block\">Comment ça marche?</button></center>
                        </div>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-2.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">\t
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-3.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>L'endroit parfait pour vos événements.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">\t
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
                </div>
\t\t\t    <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
                </a>
                <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
                </a>
            </div>
        </div>
        ";
        
        $__internal_8c6fa21475e8965e42fea6558ea0755b80aec83717c1c24d891f4e832b3209ed->leave($__internal_8c6fa21475e8965e42fea6558ea0755b80aec83717c1c24d891f4e832b3209ed_prof);

        
        $__internal_7ff968934a7557a80445360e30f2636e66a2c2705cb205ec3c5f0576ec697035->leave($__internal_7ff968934a7557a80445360e30f2636e66a2c2705cb205ec3c5f0576ec697035_prof);

    }

    // line 161
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_b1f2405cac1bd011ce2af4210442f8caa29cf7b0087d966851bc9351deb74b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f2405cac1bd011ce2af4210442f8caa29cf7b0087d966851bc9351deb74b2d->enter($__internal_b1f2405cac1bd011ce2af4210442f8caa29cf7b0087d966851bc9351deb74b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_b92a7835da056c7d6c0d6b950ed8990ceaf68a18f69b351495427e060624f198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92a7835da056c7d6c0d6b950ed8990ceaf68a18f69b351495427e060624f198->enter($__internal_b92a7835da056c7d6c0d6b950ed8990ceaf68a18f69b351495427e060624f198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 162
        echo "\t\t<div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h5 class=\"mg-bn-title\">&nbsp;Recherchez <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"select2 form-control\" style=\"padding: 0;\" data-placeholder=\"Choisir une localité...\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">&nbsp;</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["communes"] ?? $this->getContext($context, "communes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "nomCommune", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Type d'évènement</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 184
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nomtype", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"nbreDePlaces\" id=\"nbreDePlaces\" placeholder=\"Nombre de participants\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_b92a7835da056c7d6c0d6b950ed8990ceaf68a18f69b351495427e060624f198->leave($__internal_b92a7835da056c7d6c0d6b950ed8990ceaf68a18f69b351495427e060624f198_prof);

        
        $__internal_b1f2405cac1bd011ce2af4210442f8caa29cf7b0087d966851bc9351deb74b2d->leave($__internal_b1f2405cac1bd011ce2af4210442f8caa29cf7b0087d966851bc9351deb74b2d_prof);

    }

    // line 205
    public function block_offre($context, array $blocks = array())
    {
        $__internal_98fcb2c53d39b7904d77e505fc70c30fd6443861d87192f6eb55a01fddc75ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fcb2c53d39b7904d77e505fc70c30fd6443861d87192f6eb55a01fddc75ccf->enter($__internal_98fcb2c53d39b7904d77e505fc70c30fd6443861d87192f6eb55a01fddc75ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_90f4411eaab944ee3e63ad3874270d80651feabd63048cac6afac28e9ef7da7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f4411eaab944ee3e63ad3874270d80651feabd63048cac6afac28e9ef7da7c->enter($__internal_90f4411eaab944ee3e63ad3874270d80651feabd63048cac6afac28e9ef7da7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 206
        echo "
\t\t<div class=\"mg-best-rooms\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Nos meilleures salles</h2>
\t\t\t\t\t\t\t<p>Les salles les plus choisies par nos clients</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> -->
        ";
        
        $__internal_90f4411eaab944ee3e63ad3874270d80651feabd63048cac6afac28e9ef7da7c->leave($__internal_90f4411eaab944ee3e63ad3874270d80651feabd63048cac6afac28e9ef7da7c_prof);

        
        $__internal_98fcb2c53d39b7904d77e505fc70c30fd6443861d87192f6eb55a01fddc75ccf->leave($__internal_98fcb2c53d39b7904d77e505fc70c30fd6443861d87192f6eb55a01fddc75ccf_prof);

    }

    // line 268
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_187d05cd5f5a1f940264d28812dbfc00dc97dbbbfae14f6494b1e0e037a302d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187d05cd5f5a1f940264d28812dbfc00dc97dbbbfae14f6494b1e0e037a302d9->enter($__internal_187d05cd5f5a1f940264d28812dbfc00dc97dbbbfae14f6494b1e0e037a302d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_9972803859ade4b6cbc9c76c38d24e15973333d82796c3b7bbf284c8dc1f7d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9972803859ade4b6cbc9c76c38d24e15973333d82796c3b7bbf284c8dc1f7d22->enter($__internal_9972803859ade4b6cbc9c76c38d24e15973333d82796c3b7bbf284c8dc1f7d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 269
        echo "\t\t<div class=\"mg-about parallax\" id=\"apropos\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">A propos de Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSen Office c'est une équipe de passionnés qui souhaite simplifier la vie des particuliers, entreprises, ONG, Associations, PME en leur donnant accès à des salles de réunion, séminaire, de formation ou de conférence au meilleur prix et en quelques minutes.Notre mission est d'offrir à chaque professionnel plus de flexibilité en lui permettant de trouver le meilleur espace de travail à tout moment et dans la ville de son choix. Nous avons pour ambition de devenir le site de réservation de salles de référence pour toutes les entreprises
\t\t\t\t\t\t.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"video-responsive\">
\t\t\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/134008155\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Hotel facilties</h2>
\t\t\t\t\t\t\t<p>These best rooms chosen by our customers</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>24-hour reception</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Room service</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-car\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Car hire</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Wake-up call</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-coffee\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Coffee and tea</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Free Wi-Fi</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_9972803859ade4b6cbc9c76c38d24e15973333d82796c3b7bbf284c8dc1f7d22->leave($__internal_9972803859ade4b6cbc9c76c38d24e15973333d82796c3b7bbf284c8dc1f7d22_prof);

        
        $__internal_187d05cd5f5a1f940264d28812dbfc00dc97dbbbfae14f6494b1e0e037a302d9->leave($__internal_187d05cd5f5a1f940264d28812dbfc00dc97dbbbfae14f6494b1e0e037a302d9_prof);

    }

    // line 359
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_52a82487b865ac98d28cebbe7f7d314f18dbdd336ad7201cd9ba1ced1a717fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a82487b865ac98d28cebbe7f7d314f18dbdd336ad7201cd9ba1ced1a717fd4->enter($__internal_52a82487b865ac98d28cebbe7f7d314f18dbdd336ad7201cd9ba1ced1a717fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_8b4594990bf5f743263b1d89c45889c52b06e43c45507009dc3688efa1ec7c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4594990bf5f743263b1d89c45889c52b06e43c45507009dc3688efa1ec7c2b->enter($__internal_8b4594990bf5f743263b1d89c45889c52b06e43c45507009dc3688efa1ec7c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 360
        echo "\t\t<div class=\"mg-testi-partners parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Témoignages</h2>
\t\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Nos partenaires</h2>
\t\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t\t<li><img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-2.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_8b4594990bf5f743263b1d89c45889c52b06e43c45507009dc3688efa1ec7c2b->leave($__internal_8b4594990bf5f743263b1d89c45889c52b06e43c45507009dc3688efa1ec7c2b_prof);

        
        $__internal_52a82487b865ac98d28cebbe7f7d314f18dbdd336ad7201cd9ba1ced1a717fd4->leave($__internal_52a82487b865ac98d28cebbe7f7d314f18dbdd336ad7201cd9ba1ced1a717fd4_prof);

    }

    // line 394
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_012c4913ba581e617ea41b7a0e53a4d02ddf9aae9753d618b3f0db9fd6fa8021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012c4913ba581e617ea41b7a0e53a4d02ddf9aae9753d618b3f0db9fd6fa8021->enter($__internal_012c4913ba581e617ea41b7a0e53a4d02ddf9aae9753d618b3f0db9fd6fa8021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_2cd5b0f99927c0e98250b4e65b586eff3252d9a9e4b4f31d7d00fb2eb43a4de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd5b0f99927c0e98250b4e65b586eff3252d9a9e4b4f31d7d00fb2eb43a4de9->enter($__internal_2cd5b0f99927c0e98250b4e65b586eff3252d9a9e4b4f31d7d00fb2eb43a4de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 395
        echo "\t\t<div class=\"mg-news-gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent News</h2>
\t\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Gallery</h2>

\t\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_2cd5b0f99927c0e98250b4e65b586eff3252d9a9e4b4f31d7d00fb2eb43a4de9->leave($__internal_2cd5b0f99927c0e98250b4e65b586eff3252d9a9e4b4f31d7d00fb2eb43a4de9_prof);

        
        $__internal_012c4913ba581e617ea41b7a0e53a4d02ddf9aae9753d618b3f0db9fd6fa8021->leave($__internal_012c4913ba581e617ea41b7a0e53a4d02ddf9aae9753d618b3f0db9fd6fa8021_prof);

    }

    // line 450
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8f8d53ea1033d69f7fffc5b89f734f50d1179d291f23788c42da974e266dbbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8d53ea1033d69f7fffc5b89f734f50d1179d291f23788c42da974e266dbbef->enter($__internal_8f8d53ea1033d69f7fffc5b89f734f50d1179d291f23788c42da974e266dbbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7d4d9c31ff1086b33574ab0d5622e69ae513b4f6aed847a1c01db9bb578b4a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4d9c31ff1086b33574ab0d5622e69ae513b4f6aed847a1c01db9bb578b4a00->enter($__internal_7d4d9c31ff1086b33574ab0d5622e69ae513b4f6aed847a1c01db9bb578b4a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 451
        echo "\t\t<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong></strong><br>
\t\t\t\t\t\t\t\t\tRue 3,Brenger Feraud, Sonatel Academy<br>
\t\t\t\t\t\t\t\t\tCTIC/DAKAR
\t\t\t\t\t\t\t\t</address>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:#\">contact@myoffice.sn</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-02.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-03.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-04.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-05.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-06.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-07.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-08.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-09.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Newsletter</h2>
\t\t\t\t\t\t\t\t<p>inscrivez-vous à notre Newsletter pour ne rien manquer de nos nouveautés.</p>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre Email\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-main\" value=\"Je m'inscris\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Suivez-nous sur les réseaux sociaux</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLes équipes se réunissent souvent dans les espaces Sen Office pour une réunion commerciale, pour préparer un projet, pour une présentation des objectifs ou une réunion du service marketing
\t\t\t\t\t\t\t\t\t.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"mg-footer-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#apropos\">A propos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"gallery.html\">catalogue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.senoffice.sn\">ADOB-TECH</a>. All rights reserved.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            
\t\t</footer>
        ";
        
        $__internal_7d4d9c31ff1086b33574ab0d5622e69ae513b4f6aed847a1c01db9bb578b4a00->leave($__internal_7d4d9c31ff1086b33574ab0d5622e69ae513b4f6aed847a1c01db9bb578b4a00_prof);

        
        $__internal_8f8d53ea1033d69f7fffc5b89f734f50d1179d291f23788c42da974e266dbbef->leave($__internal_8f8d53ea1033d69f7fffc5b89f734f50d1179d291f23788c42da974e266dbbef_prof);

    }

    // line 549
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f05b9fe554adbd58fb8d47c43349ab3226f1281f579e1bb42818a1a83c54a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f05b9fe554adbd58fb8d47c43349ab3226f1281f579e1bb42818a1a83c54a91->enter($__internal_8f05b9fe554adbd58fb8d47c43349ab3226f1281f579e1bb42818a1a83c54a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7ce87ddc76b0c8836dee0a0a2669328d20999aac11f75dfec8beecc71484381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ce87ddc76b0c8836dee0a0a2669328d20999aac11f75dfec8beecc71484381->enter($__internal_a7ce87ddc76b0c8836dee0a0a2669328d20999aac11f75dfec8beecc71484381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 550
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--<script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\" ></script>-->
\t\t<script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/autocomplete/ac.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jssor.slider.mini.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/selectFx.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/starrr.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.shuffle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/script.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_a7ce87ddc76b0c8836dee0a0a2669328d20999aac11f75dfec8beecc71484381->leave($__internal_a7ce87ddc76b0c8836dee0a0a2669328d20999aac11f75dfec8beecc71484381_prof);

        
        $__internal_8f05b9fe554adbd58fb8d47c43349ab3226f1281f579e1bb42818a1a83c54a91->leave($__internal_8f05b9fe554adbd58fb8d47c43349ab3226f1281f579e1bb42818a1a83c54a91_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1216 => 567,  1212 => 566,  1208 => 565,  1203 => 563,  1199 => 562,  1195 => 561,  1191 => 560,  1187 => 559,  1183 => 558,  1179 => 557,  1175 => 556,  1171 => 555,  1166 => 553,  1162 => 552,  1158 => 551,  1155 => 550,  1146 => 549,  1080 => 486,  1076 => 485,  1072 => 484,  1068 => 483,  1064 => 482,  1060 => 481,  1056 => 480,  1052 => 479,  1048 => 478,  1019 => 451,  1010 => 450,  992 => 442,  988 => 441,  984 => 440,  980 => 439,  976 => 438,  972 => 437,  966 => 434,  962 => 433,  958 => 432,  954 => 431,  950 => 430,  946 => 429,  910 => 395,  901 => 394,  884 => 387,  880 => 386,  876 => 385,  872 => 384,  868 => 383,  843 => 360,  834 => 359,  736 => 269,  727 => 268,  693 => 244,  677 => 231,  661 => 218,  647 => 206,  638 => 205,  610 => 186,  599 => 184,  595 => 183,  588 => 178,  577 => 176,  573 => 175,  558 => 162,  549 => 161,  521 => 143,  516 => 141,  502 => 130,  497 => 128,  482 => 116,  477 => 114,  464 => 103,  455 => 102,  445 => 100,  436 => 99,  393 => 71,  383 => 70,  375 => 65,  362 => 54,  353 => 53,  326 => 595,  322 => 594,  318 => 593,  314 => 592,  310 => 591,  305 => 589,  300 => 587,  295 => 585,  291 => 584,  287 => 583,  283 => 582,  279 => 581,  275 => 580,  271 => 579,  267 => 578,  257 => 570,  255 => 549,  246 => 542,  243 => 450,  240 => 394,  238 => 359,  235 => 358,  232 => 268,  229 => 205,  226 => 161,  224 => 102,  221 => 101,  219 => 99,  216 => 98,  214 => 53,  211 => 52,  202 => 51,  190 => 45,  179 => 37,  175 => 36,  171 => 35,  167 => 34,  163 => 33,  159 => 32,  155 => 31,  151 => 30,  146 => 28,  141 => 27,  132 => 26,  114 => 5,  102 => 612,  100 => 51,  94 => 48,  91 => 47,  89 => 26,  83 => 23,  79 => 22,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  44 => 5,  38 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- Début bloc CSS -->
        <style>
            .nav>li>a:hover{
                padding-bottom: 35px;
                border-bottom: 3px solid #e7b315;
            }
\t\t</style>
\t\t

\t\t<!-- Plugins css-->
        <!--<link href=\"{{asset ('ac/assets/plugins/tagsinput/jquery.tagsinput.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('ac/assets/plugins/toggles/toggles.css')}}\" rel=\"stylesheet\">-->
        <link href=\"{{asset ('ac/assets/plugins/jquery-multi-select/multi-select.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/plugins/select2/dist/css/select2-bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset ('ac/assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">


        {% block stylesheets %}
        <link href=\"{{asset ('assets/template/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

\t\t<link href=\"{{asset ('assets/template/css/owl.carousel.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.theme.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.transitions.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/cs-select.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/freepik.hotels.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/style.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/autocomplete/ac.css')}}\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"{{asset ('assets/template/js/modernizr.custom.min.js')}}\"></script>
        {% endblock %}
        <!-- Fin bloc CSS -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('senoffice.ico') }}\" />
    </head>
    <body>
    {% block body %}
        <div class=\"preloader\"></div>
        {% block header %}
\t\t<header id=\"leheader\" class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"{{asset  ('assets/template/images/senoffice.png')}}\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"{% if activeA is defined %} {{ activeA }} {% endif %}\"><a href=\"{{'acceuil'}}\">Acceuil</a></li>
\t\t\t\t\t\t\t<li class=\"{% if activeC is defined %} {{ activeC }} {% endif %}\"><a href=\"{{'catalogue'}}\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Inscription</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Partagez votre salle</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t<div class=\"mg-search-box-cont pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mg-search-box\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"Type Keyword...\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</header>
        {% endblock %}

        {% block titre %}
        {% endblock %}

        {% block slide %}
\t\t<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item active beactive\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-4.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Bienvenue Sen Office</h2>
\t\t\t\t\t\t<p>Vos séminaires et réunions dans le lieu idéal</p>
                        <div class=\"col-md-3 \">\t
                        </div>
\t\t\t\t\t\t<div class=\"col-md-4\" style=\"margin-left: 9%;\">
\t\t\t\t\t\t    <center><button type=\"submit\" class=\"btn btn-main btn-block\">Comment ça marche?</button></center>
                        </div>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-2.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">\t
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-3.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>L'endroit parfait pour vos événements.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">\t
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
                </div>
\t\t\t    <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
                </a>
                <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
                </a>
            </div>
        </div>
        {% endblock %}
        {% block recherche %}
\t\t<div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h5 class=\"mg-bn-title\">&nbsp;Recherchez <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"select2 form-control\" style=\"padding: 0;\" data-placeholder=\"Choisir une localité...\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">&nbsp;</option>
\t\t\t\t\t\t\t\t\t\t\t{% for commune in communes %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{commune.id}}\">{{commune.nomCommune}}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Type d'évènement</option>
\t\t\t\t\t\t\t\t\t\t\t{% for type in types %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{type.id}}\">{{type.nomtype}}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"nbreDePlaces\" id=\"nbreDePlaces\" placeholder=\"Nombre de participants\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}
        {% block offre %}

\t\t<div class=\"mg-best-rooms\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Nos meilleures salles</h2>
\t\t\t\t\t\t\t<p>Les salles les plus choisies par nos clients</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/room-1.png')}}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/room-2.png')}}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/room-3.png')}}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> -->
        {% endblock %}
        {% block apropos %}
\t\t<div class=\"mg-about parallax\" id=\"apropos\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">A propos de Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSen Office c'est une équipe de passionnés qui souhaite simplifier la vie des particuliers, entreprises, ONG, Associations, PME en leur donnant accès à des salles de réunion, séminaire, de formation ou de conférence au meilleur prix et en quelques minutes.Notre mission est d'offrir à chaque professionnel plus de flexibilité en lui permettant de trouver le meilleur espace de travail à tout moment et dans la ville de son choix. Nous avons pour ambition de devenir le site de réservation de salles de référence pour toutes les entreprises
\t\t\t\t\t\t.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"video-responsive\">
\t\t\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/134008155\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Hotel facilties</h2>
\t\t\t\t\t\t\t<p>These best rooms chosen by our customers</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>24-hour reception</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Room service</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-car\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Car hire</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Wake-up call</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-coffee\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Coffee and tea</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Free Wi-Fi</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}

        {% block partenaires %}
\t\t<div class=\"mg-testi-partners parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Témoignages</h2>
\t\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Nos partenaires</h2>
\t\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-1.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-2.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-3.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-1.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-3.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}
        {% block galerie %}
\t\t<div class=\"mg-news-gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent News</h2>
\t\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Gallery</h2>

\t\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-01.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-02.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-05.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-06.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-07.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-08.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-01.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-02.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-05.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-06.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-07.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-08.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}
        {% block footer %}
\t\t<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong></strong><br>
\t\t\t\t\t\t\t\t\tRue 3,Brenger Feraud, Sonatel Academy<br>
\t\t\t\t\t\t\t\t\tCTIC/DAKAR
\t\t\t\t\t\t\t\t</address>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:#\">contact@myoffice.sn</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-01.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-02.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-03.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-04.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-05.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-06.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-07.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-08.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-09.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Newsletter</h2>
\t\t\t\t\t\t\t\t<p>inscrivez-vous à notre Newsletter pour ne rien manquer de nos nouveautés.</p>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre Email\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-main\" value=\"Je m'inscris\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Suivez-nous sur les réseaux sociaux</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLes équipes se réunissent souvent dans les espaces Sen Office pour une réunion commerciale, pour préparer un projet, pour une présentation des objectifs ou une réunion du service marketing
\t\t\t\t\t\t\t\t\t.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"mg-footer-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#apropos\">A propos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"gallery.html\">catalogue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.senoffice.sn\">ADOB-TECH</a>. All rights reserved.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            
\t\t</footer>
        {% endblock %}
        <!-- Début bloc script -->
\t\t<script>
            if (window.location.href === \"http://127.0.0.1:8000/sen-office/catalogue\") {
\t\t\t\tvar lenav = document.getElementById(\"leheader\").children[0];
\t\t\t\tlenav.setAttribute(\"style\", \"background-color: rgba(22, 38, 46, 0.95);\");
            }
        </script>
        {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"{{asset ('assets/template/js/jquery.min.js')}}\"></script>
\t\t<!--<script src=\"{{asset ('assets/js/jquery-3.3.1.min.js')}}\" ></script>-->
\t\t<script src=\"{{asset ('assets/autocomplete/ac.js')}}\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"{{asset ('assets/template/js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/owl.carousel.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/jssor.slider.mini.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/classie.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/selectFx.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/bootstrap-datepicker.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/starrr.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/nivo-lightbox.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/jquery.shuffle.min.js')}}\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"{{asset ('assets/template/js/gmaps.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/jquery.parallax-1.1.3.js')}}\"></script>
        <script src=\"{{asset ('assets/template/js/script.js')}}\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
        {% endblock %}
\t\t<!-- Fin bloc script -->
\t\t

\t\t<script>
            var resizefunc = [];
        </script>

\t\t<!-- Main  -->
        <script src=\"{{asset ('ac/assets/js/detect.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/waves.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset ('ac/assets/js/jquery.app.js')}}\"></script>

        <script src=\"{{asset ('ac/assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>

        <script src=\"{{asset ('ac/assets/plugins/tagsinput/jquery.tagsinput.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/plugins/toggles/toggles.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset ('ac/assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset ('ac/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}\" type=\"text/javascript\"></script>




        <script>
            jQuery(document).ready(function() {

                // Select2
                jQuery(\".select2\").select2({
\t\t\t\t\twidth: '100%'
\t\t\t\t});
\t\t\t\t
\t\t\t\tdocument.getElementById(\"select2-chosen-2\").setAttribute(\"style\", \"color: white\");
            });
        </script>
    {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/senoffice/myoffice/app/Resources/views/base.html.twig");
    }
}
