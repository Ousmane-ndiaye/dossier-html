<?php

/* :reservation:catalogue.html.twig */
class __TwigTemplate_dea6a4e9bd212aee2f19f88dee335087004b7ff7f43425907dbb0b145754130b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:catalogue.html.twig", 1);
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
        $__internal_bce9b99f7c3a15726d2a900bf702039afac1a08b925678bfe854c7faa76beee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce9b99f7c3a15726d2a900bf702039afac1a08b925678bfe854c7faa76beee5->enter($__internal_bce9b99f7c3a15726d2a900bf702039afac1a08b925678bfe854c7faa76beee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:catalogue.html.twig"));

        $__internal_f4d11db24b0f42646a35eef066e1029c6ff2001938538961e6d874b063b1b624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d11db24b0f42646a35eef066e1029c6ff2001938538961e6d874b063b1b624->enter($__internal_f4d11db24b0f42646a35eef066e1029c6ff2001938538961e6d874b063b1b624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce9b99f7c3a15726d2a900bf702039afac1a08b925678bfe854c7faa76beee5->leave($__internal_bce9b99f7c3a15726d2a900bf702039afac1a08b925678bfe854c7faa76beee5_prof);

        
        $__internal_f4d11db24b0f42646a35eef066e1029c6ff2001938538961e6d874b063b1b624->leave($__internal_f4d11db24b0f42646a35eef066e1029c6ff2001938538961e6d874b063b1b624_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_129cd245b5689973667cd8bc621a987c2eb602d2317cb4a16dad4e1b1e91cb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129cd245b5689973667cd8bc621a987c2eb602d2317cb4a16dad4e1b1e91cb47->enter($__internal_129cd245b5689973667cd8bc621a987c2eb602d2317cb4a16dad4e1b1e91cb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_254dc6e4213ffdce2923cccc99af92e4db76cf290100c24e2966bb4f88bb1aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254dc6e4213ffdce2923cccc99af92e4db76cf290100c24e2966bb4f88bb1aaf->enter($__internal_254dc6e4213ffdce2923cccc99af92e4db76cf290100c24e2966bb4f88bb1aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_254dc6e4213ffdce2923cccc99af92e4db76cf290100c24e2966bb4f88bb1aaf->leave($__internal_254dc6e4213ffdce2923cccc99af92e4db76cf290100c24e2966bb4f88bb1aaf_prof);

        
        $__internal_129cd245b5689973667cd8bc621a987c2eb602d2317cb4a16dad4e1b1e91cb47->leave($__internal_129cd245b5689973667cd8bc621a987c2eb602d2317cb4a16dad4e1b1e91cb47_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_aae7d63aad06de4a819fc014c7f3bd97b321c9f7db4785fec2dd3cb459f47ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae7d63aad06de4a819fc014c7f3bd97b321c9f7db4785fec2dd3cb459f47ec3->enter($__internal_aae7d63aad06de4a819fc014c7f3bd97b321c9f7db4785fec2dd3cb459f47ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_6f036f23a9c426ed7961df301d72df7d4af71f22f7f865c1f409326a141a437a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f036f23a9c426ed7961df301d72df7d4af71f22f7f865c1f409326a141a437a->enter($__internal_6f036f23a9c426ed7961df301d72df7d4af71f22f7f865c1f409326a141a437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Liste des biens repondant à votre recherche</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class=\"properties-area recent-property\" style=\"background-color: #FFF;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9 padding-top-40 properties-page\">
                <div class=\"section clear\">
                    <div class=\"col-xs-10 page-subheader sorting pl0\">
                        <ul class=\"sort-by-list\">
                            <li class=\"active\">
                                <a href=\"javascript:void(0);\" class=\"order_by_date\" data-orderby=\"property_date\" data-order=\"ASC\">
                                        Property Date <i class=\"fa fa-sort-amount-asc\"></i>
                                    </a>
                            </li>
                            <li class=\"\">
                                <a href=\"javascript:void(0);\" class=\"order_by_price\" data-orderby=\"property_price\" data-order=\"DESC\">
                                        Property Price <i class=\"fa fa-sort-numeric-desc\"></i>
                                    </a>
                            </li>
                        </ul>
                        <!--/ .sort-by-list-->
                        <div class=\"items-per-page\">
                            <label for=\"items_per_page\"><b>Property per page :</b></label>
                            <div class=\"sel\">
                                <select id=\"items_per_page\" name=\"per_page\">
                                        <option value=\"3\">3</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"9\">9</option>
                                        <option selected=\"selected\" value=\"12\">12</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"30\">30</option>
                                        <option value=\"45\">45</option>
                                        <option value=\"60\">60</option>
                                    </select>
                            </div>
                            <!--/ .sel-->
                        </div>
                        <!--/ .items-per-page-->
                    </div>

                    <div class=\"col-xs-2 layout-switcher\">
                        <a class=\"layout-list\" href=\"javascript:void(0);\"> <i class=\"fa fa-th-list\"></i> </a>
                        <a class=\"layout-grid active\" href=\"javascript:void(0);\"> <i class=\"fa fa-th\"></i> </a>
                    </div>
                    <!--/ .layout-switcher-->
                </div>

                <div class=\"section clear\">
                    <div id=\"list-type\" class=\"proerty-th\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 64
            echo "                        <div class=\"col-sm-6 col-md-4 p0\">
                            <div class=\"box-two proerty-item\">
                                <div class=\"item-thumb\">
                                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_approuver", array("idBien" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["bien"], "chemin", array())), "html", null, true);
            echo "\"></a>
                                </div>

                                <div class=\"item-entry overflow\">
                                    <h5><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_approuver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\"> Superbe ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomTypeBien", array()), "html", null, true);
            echo " </a></h5>
                                    <div class=\"dot-hr\"></div>
                                    <span class=\"pull-left\"><b> Surface :</b> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "surface", array()), "html", null, true);
            echo " </span>
                                    <span class=\"proerty-price pull-right\"> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLoc", array()), "html", null, true);
            echo "f</span>
                                    <p style=\"display: none;\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</p>
                                    <div class=\"property-icon\">
                                        <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/bed.png"), "html", null, true);
            echo "\">(";
            if (($this->getAttribute($context["bien"], "nbreChambre", array()) == null)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nbreChambre", array()), "html", null, true);
            }
            echo ")|
                                        <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/shawer.png"), "html", null, true);
            echo "\">(";
            if (($this->getAttribute($context["bien"], "nbreSallebain", array()) == null)) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nbreSallebain", array()), "html", null, true);
            }
            echo ")|
                                        <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/cars.png"), "html", null, true);
            echo "\">(";
            if (($this->getAttribute($context["bien"], "parking", array()) == false)) {
                echo "0";
            } else {
                echo "1";
            }
            echo ")
                                    </div>
                                </div>

                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </div>
                </div>
                <div class=\"section\">
                    <div class=\"pull-right\">
                        <div class=\"pagination\">
                            <ul>
                                <li><a href=\"#\">Prev</a></li>
                                <li><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 pl0 padding-top-40\">
                <div class=\"blog-asside-right pl0\">
                    <div class=\"panel panel-default sidebar-menu wow fadeInRight animated\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Smart search</h3>
                        </div>
                        <div class=\"panel-body search-widget\">
                            <form action=\"\" class=\" form-inline\">
                                <fieldset>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Key word\">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">

                                            <select id=\"lunchBegins\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Select Your City\">

                                                    <option>New york, CA</option>
                                                    <option>Paris</option>
                                                    <option>Casablanca</option>
                                                    <option>Tokyo</option>
                                                    <option>Marraekch</option>
                                                    <option>kyoto , shibua</option>
                                                </select>
                                        </div>
                                        <div class=\"col-xs-6\">

                                            <select id=\"basic\" class=\"selectpicker show-tick form-control\">
                                                    <option> -Status- </option>
                                                    <option>Rent </option>
                                                    <option>Boy</option>
                                                    <option>used</option>

                                                </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <label for=\"price-range\">Price range (\$):</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"price-range\"><br />
                                            <b class=\"pull-left color\">2000\$</b>
                                            <b class=\"pull-right color\">100000\$</b>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <label for=\"property-geo\">Property geo (m2) :</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[50,450]\" id=\"property-geo\"><br />
                                            <b class=\"pull-left color\">40m</b>
                                            <b class=\"pull-right color\">12000m</b>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <label for=\"price-range\">Min baths :</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-baths\"><br />
                                            <b class=\"pull-left color\">1</b>
                                            <b class=\"pull-right color\">120</b>
                                        </div>

                                        <div class=\"col-xs-6\">
                                            <label for=\"property-geo\">Min bed :</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-bed\"><br />
                                            <b class=\"pull-left color\">1</b>
                                            <b class=\"pull-right color\">120</b>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\" checked> Fire Place</label>
                                            </div>
                                        </div>

                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\"> Dual Sinks</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\" checked> Swimming Pool</label>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\" checked> 2 Stories </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label><input type=\"checkbox\"> Laundry Room </label>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\"> Emergency Exit</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label>  <input type=\"checkbox\" checked> Jog Path </label>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label>  <input type=\"checkbox\"> 26' Ceilings </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div class=\"checkbox\">
                                                <label>  <input type=\"checkbox\"> Hurricane Shutters </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <input class=\"button btn largesearch-btn\" value=\"Search\" type=\"submit\">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class=\"panel panel-default sidebar-menu wow fadeInRight animated\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Recommended</h3>
                        </div>
                        <div class=\"panel-body recent-property-widget\">
                            <ul>
                                <li>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-2.jpg"), "html", null, true);
        echo "\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col-md-3 col-sm-3  col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-1.jpg"), "html", null, true);
        echo "\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-3.jpg"), "html", null, true);
        echo "\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-2.jpg"), "html", null, true);
        echo "\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f036f23a9c426ed7961df301d72df7d4af71f22f7f865c1f409326a141a437a->leave($__internal_6f036f23a9c426ed7961df301d72df7d4af71f22f7f865c1f409326a141a437a_prof);

        
        $__internal_aae7d63aad06de4a819fc014c7f3bd97b321c9f7db4785fec2dd3cb459f47ec3->leave($__internal_aae7d63aad06de4a819fc014c7f3bd97b321c9f7db4785fec2dd3cb459f47ec3_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 312,  426 => 298,  410 => 285,  394 => 272,  206 => 86,  187 => 79,  177 => 78,  167 => 77,  162 => 75,  158 => 74,  154 => 73,  147 => 71,  138 => 67,  133 => 64,  129 => 63,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Catalogue{% endblock %}
{% block contenus %}
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Liste des biens repondant à votre recherche</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class=\"properties-area recent-property\" style=\"background-color: #FFF;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9 padding-top-40 properties-page\">
                <div class=\"section clear\">
                    <div class=\"col-xs-10 page-subheader sorting pl0\">
                        <ul class=\"sort-by-list\">
                            <li class=\"active\">
                                <a href=\"javascript:void(0);\" class=\"order_by_date\" data-orderby=\"property_date\" data-order=\"ASC\">
                                        Property Date <i class=\"fa fa-sort-amount-asc\"></i>
                                    </a>
                            </li>
                            <li class=\"\">
                                <a href=\"javascript:void(0);\" class=\"order_by_price\" data-orderby=\"property_price\" data-order=\"DESC\">
                                        Property Price <i class=\"fa fa-sort-numeric-desc\"></i>
                                    </a>
                            </li>
                        </ul>
                        <!--/ .sort-by-list-->
                        <div class=\"items-per-page\">
                            <label for=\"items_per_page\"><b>Property per page :</b></label>
                            <div class=\"sel\">
                                <select id=\"items_per_page\" name=\"per_page\">
                                        <option value=\"3\">3</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"9\">9</option>
                                        <option selected=\"selected\" value=\"12\">12</option>
                                        <option value=\"15\">15</option>
                                        <option value=\"30\">30</option>
                                        <option value=\"45\">45</option>
                                        <option value=\"60\">60</option>
                                    </select>
                            </div>
                            <!--/ .sel-->
                        </div>
                        <!--/ .items-per-page-->
                    </div>

                    <div class=\"col-xs-2 layout-switcher\">
                        <a class=\"layout-list\" href=\"javascript:void(0);\"> <i class=\"fa fa-th-list\"></i> </a>
                        <a class=\"layout-grid active\" href=\"javascript:void(0);\"> <i class=\"fa fa-th\"></i> </a>
                    </div>
                    <!--/ .layout-switcher-->
                </div>

                <div class=\"section clear\">
                    <div id=\"list-type\" class=\"proerty-th\">
                    {% for bien in biens %}
                        <div class=\"col-sm-6 col-md-4 p0\">
                            <div class=\"box-two proerty-item\">
                                <div class=\"item-thumb\">
                                    <a href=\"{{path('reservation_approuver',{'idBien':bien.id})}}\"><img src=\"{{asset(bien.chemin)}}\"></a>
                                </div>

                                <div class=\"item-entry overflow\">
                                    <h5><a href=\"{{path('reservation_approuver',{'id':bien.id})}}\"> Superbe {{ bien.nomTypeBien }} </a></h5>
                                    <div class=\"dot-hr\"></div>
                                    <span class=\"pull-left\"><b> Surface :</b> {{ bien.surface }} </span>
                                    <span class=\"proerty-price pull-right\"> {{ bien.prixLoc }}f</span>
                                    <p style=\"display: none;\">{{ bien.description }}</p>
                                    <div class=\"property-icon\">
                                        <img src=\"{{asset('assets/img/icon/bed.png')}}\">({% if bien.nbreChambre == null %}0{% else %}{{ bien.nbreChambre }}{% endif %})|
                                        <img src=\"{{asset('assets/img/icon/shawer.png')}}\">({% if bien.nbreSallebain == null %}0{% else %}{{ bien.nbreSallebain }}{% endif %})|
                                        <img src=\"{{asset('assets/img/icon/cars.png')}}\">({% if bien.parking == false %}0{% else %}1{% endif %})
                                    </div>
                                </div>

                            </div>
                        </div>
                    {% endfor %}
                    </div>
                </div>
                <div class=\"section\">
                    <div class=\"pull-right\">
                        <div class=\"pagination\">
                            <ul>
                                <li><a href=\"#\">Prev</a></li>
                                <li><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li><a href=\"#\">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 pl0 padding-top-40\">
                <div class=\"blog-asside-right pl0\">
                    <div class=\"panel panel-default sidebar-menu wow fadeInRight animated\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Smart search</h3>
                        </div>
                        <div class=\"panel-body search-widget\">
                            <form action=\"\" class=\" form-inline\">
                                <fieldset>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Key word\">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">

                                            <select id=\"lunchBegins\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Select Your City\">

                                                    <option>New york, CA</option>
                                                    <option>Paris</option>
                                                    <option>Casablanca</option>
                                                    <option>Tokyo</option>
                                                    <option>Marraekch</option>
                                                    <option>kyoto , shibua</option>
                                                </select>
                                        </div>
                                        <div class=\"col-xs-6\">

                                            <select id=\"basic\" class=\"selectpicker show-tick form-control\">
                                                    <option> -Status- </option>
                                                    <option>Rent </option>
                                                    <option>Boy</option>
                                                    <option>used</option>

                                                </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <label for=\"price-range\">Price range (\$):</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"price-range\"><br />
                                            <b class=\"pull-left color\">2000\$</b>
                                            <b class=\"pull-right color\">100000\$</b>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <label for=\"property-geo\">Property geo (m2) :</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[50,450]\" id=\"property-geo\"><br />
                                            <b class=\"pull-left color\">40m</b>
                                            <b class=\"pull-right color\">12000m</b>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <label for=\"price-range\">Min baths :</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-baths\"><br />
                                            <b class=\"pull-left color\">1</b>
                                            <b class=\"pull-right color\">120</b>
                                        </div>

                                        <div class=\"col-xs-6\">
                                            <label for=\"property-geo\">Min bed :</label>
                                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-bed\"><br />
                                            <b class=\"pull-left color\">1</b>
                                            <b class=\"pull-right color\">120</b>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\" checked> Fire Place</label>
                                            </div>
                                        </div>

                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\"> Dual Sinks</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\" checked> Swimming Pool</label>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\" checked> 2 Stories </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label><input type=\"checkbox\"> Laundry Room </label>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label> <input type=\"checkbox\"> Emergency Exit</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label>  <input type=\"checkbox\" checked> Jog Path </label>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <div class=\"checkbox\">
                                                <label>  <input type=\"checkbox\"> 26' Ceilings </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class=\"padding-5\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div class=\"checkbox\">
                                                <label>  <input type=\"checkbox\"> Hurricane Shutters </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <input class=\"button btn largesearch-btn\" value=\"Search\" type=\"submit\">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class=\"panel panel-default sidebar-menu wow fadeInRight animated\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Recommended</h3>
                        </div>
                        <div class=\"panel-body recent-property-widget\">
                            <ul>
                                <li>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-2.jpg')}}\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col-md-3 col-sm-3  col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-1.jpg')}}\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-3.jpg')}}\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                        <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-2.jpg')}}\"></a>
                                        <span class=\"property-seeker\">
                                            <b class=\"b-1\">A</b>
                                            <b class=\"b-2\">S</b>
                                        </span>
                                    </div>
                                    <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                        <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                        <span class=\"property-price\">3000000\$</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", ":reservation:catalogue.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/reservation/catalogue.html.twig");
    }
}
