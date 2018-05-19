<?php

/* RESERVATIONBundle::layout.html.twig */
class __TwigTemplate_222f1b63373fa5bc0bc39865f5c202b4370ec044aa56df3003d598931c66f297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c8fb132467c643eb210435c3e4d6a066641e1ea782a1725a5bd6bfd7ca6ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c8fb132467c643eb210435c3e4d6a066641e1ea782a1725a5bd6bfd7ca6ac7->enter($__internal_51c8fb132467c643eb210435c3e4d6a066641e1ea782a1725a5bd6bfd7ca6ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        $__internal_f8e62256deea1ed0829d8518692d37195675fd64440a2ad08e0d07ea356d255a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e62256deea1ed0829d8518692d37195675fd64440a2ad08e0d07ea356d255a->enter($__internal_f8e62256deea1ed0829d8518692d37195675fd64440a2ad08e0d07ea356d255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>

";
        
        $__internal_51c8fb132467c643eb210435c3e4d6a066641e1ea782a1725a5bd6bfd7ca6ac7->leave($__internal_51c8fb132467c643eb210435c3e4d6a066641e1ea782a1725a5bd6bfd7ca6ac7_prof);

        
        $__internal_f8e62256deea1ed0829d8518692d37195675fd64440a2ad08e0d07ea356d255a->leave($__internal_f8e62256deea1ed0829d8518692d37195675fd64440a2ad08e0d07ea356d255a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d5de314c06e2575f35668b6c912a73e788a4cbb7486f3bc8929bd3d98d3dd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5de314c06e2575f35668b6c912a73e788a4cbb7486f3bc8929bd3d98d3dd44->enter($__internal_2d5de314c06e2575f35668b6c912a73e788a4cbb7486f3bc8929bd3d98d3dd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28424a54002fcbe900848026d72db56fadbaa931a728e0d7a1d3a57149f87cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28424a54002fcbe900848026d72db56fadbaa931a728e0d7a1d3a57149f87cc4->enter($__internal_28424a54002fcbe900848026d72db56fadbaa931a728e0d7a1d3a57149f87cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_28424a54002fcbe900848026d72db56fadbaa931a728e0d7a1d3a57149f87cc4->leave($__internal_28424a54002fcbe900848026d72db56fadbaa931a728e0d7a1d3a57149f87cc4_prof);

        
        $__internal_2d5de314c06e2575f35668b6c912a73e788a4cbb7486f3bc8929bd3d98d3dd44->leave($__internal_2d5de314c06e2575f35668b6c912a73e788a4cbb7486f3bc8929bd3d98d3dd44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_550d7a985042ad4efdfc2b6359c6a22fb08ce251f75137afd30e7c977f4020c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550d7a985042ad4efdfc2b6359c6a22fb08ce251f75137afd30e7c977f4020c5->enter($__internal_550d7a985042ad4efdfc2b6359c6a22fb08ce251f75137afd30e7c977f4020c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87856885fb3ac574f334e95ac738e3a48b8d2d46cda03e029eaf85c590775fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87856885fb3ac574f334e95ac738e3a48b8d2d46cda03e029eaf85c590775fc3->enter($__internal_87856885fb3ac574f334e95ac738e3a48b8d2d46cda03e029eaf85c590775fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"GARO is a real-estate template\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"html5, css, bootstrap, property, real-estate theme , bootstrap template\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fontello.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/icon-7-stroke/css/helper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icheck.min_all.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/price-range.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.transitions.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/lightslider.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/monstyle.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_87856885fb3ac574f334e95ac738e3a48b8d2d46cda03e029eaf85c590775fc3->leave($__internal_87856885fb3ac574f334e95ac738e3a48b8d2d46cda03e029eaf85c590775fc3_prof);

        
        $__internal_550d7a985042ad4efdfc2b6359c6a22fb08ce251f75137afd30e7c977f4020c5->leave($__internal_550d7a985042ad4efdfc2b6359c6a22fb08ce251f75137afd30e7c977f4020c5_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a793af7ca36bac8bccd9070182bd3c4e4560b2f231b698cbb625cfa8cc12ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a793af7ca36bac8bccd9070182bd3c4e4560b2f231b698cbb625cfa8cc12ec->enter($__internal_68a793af7ca36bac8bccd9070182bd3c4e4560b2f231b698cbb625cfa8cc12ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_795a2ee0d6c01120b1927504b24535679a1721a24994cad89f81b1abd30d0e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795a2ee0d6c01120b1927504b24535679a1721a24994cad89f81b1abd30d0e7b->enter($__internal_795a2ee0d6c01120b1927504b24535679a1721a24994cad89f81b1abd30d0e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_795a2ee0d6c01120b1927504b24535679a1721a24994cad89f81b1abd30d0e7b->leave($__internal_795a2ee0d6c01120b1927504b24535679a1721a24994cad89f81b1abd30d0e7b_prof);

        
        $__internal_68a793af7ca36bac8bccd9070182bd3c4e4560b2f231b698cbb625cfa8cc12ec->leave($__internal_68a793af7ca36bac8bccd9070182bd3c4e4560b2f231b698cbb625cfa8cc12ec_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f3717a66cb52309288e8ab4a4c9a7e156a192a1dba4aae64c952536205dcb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3717a66cb52309288e8ab4a4c9a7e156a192a1dba4aae64c952536205dcb1f->enter($__internal_8f3717a66cb52309288e8ab4a4c9a7e156a192a1dba4aae64c952536205dcb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7058c986d44fa8932f39fa719681b51cc3571e8ebf41c2ced4e06505a1a88b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7058c986d44fa8932f39fa719681b51cc3571e8ebf41c2ced4e06505a1a88b8->enter($__internal_b7058c986d44fa8932f39fa719681b51cc3571e8ebf41c2ced4e06505a1a88b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 55
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/price-range.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lightslider.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/monfichier.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function() {

                \$('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        \$('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>
        ";
        
        $__internal_b7058c986d44fa8932f39fa719681b51cc3571e8ebf41c2ced4e06505a1a88b8->leave($__internal_b7058c986d44fa8932f39fa719681b51cc3571e8ebf41c2ced4e06505a1a88b8_prof);

        
        $__internal_8f3717a66cb52309288e8ab4a4c9a7e156a192a1dba4aae64c952536205dcb1f->leave($__internal_8f3717a66cb52309288e8ab4a4c9a7e156a192a1dba4aae64c952536205dcb1f_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 70,  273 => 69,  268 => 67,  264 => 66,  260 => 65,  255 => 63,  251 => 62,  246 => 60,  242 => 59,  237 => 57,  233 => 56,  228 => 55,  224 => 53,  218 => 51,  209 => 50,  198 => 48,  189 => 47,  177 => 36,  173 => 35,  169 => 34,  165 => 33,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  98 => 7,  89 => 6,  72 => 5,  59 => 89,  56 => 50,  54 => 47,  41 => 38,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"GARO is a real-estate template\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"html5, css, bootstrap, property, real-estate theme , bootstrap template\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"{{asset('assets/css/normalize.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/font-awesome.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontello.css')}}\">
        <link href=\"{{asset('assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/fonts/icon-7-stroke/css/helper.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/css/animate.css')}}\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap-select.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('bootstrap/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/icheck.min_all.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/price-range.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.carousel.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.theme.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.transitions.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/lightslider.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/responsive.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/monstyle.css')}}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        {% block body %}

        {% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('assets/js/modernizr-2.6.2.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/jquery-1.10.2.min.js')}}\"></script>
        {# <script src=\"{{asset('assets/js/jquery-3.3.1.min.js')}}\"></script> #}
        <script src=\"{{asset('bootstrap/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap-select.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap-hover-dropdown.js')}}\"></script>

        <script src=\"{{asset('assets/js/easypiechart.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.easypiechart.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.js')}}\"></script>

        <script src=\"{{asset('assets/js/icheck.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/price-range.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/js/lightslider.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/main.js')}}\"></script>
        <script src=\"{{asset('assets/js/monfichier.js')}}\"></script>
        <script>
            \$(document).ready(function() {

                \$('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        \$('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>
        {% endblock %}
    </body>
</html>

", "RESERVATIONBundle::layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/src/SNT/ReservationBundle/Resources/views/layout.html.twig");
    }
}
