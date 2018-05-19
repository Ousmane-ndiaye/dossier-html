<?php

/* admin/detail.html.twig */
class __TwigTemplate_e0352f7c1d1322bfe2997d7b65d72a542c19823f168e1978285d1b856d6d83bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/detail.html.twig", 1);
        $this->blocks = array(
            'accueil' => array($this, 'block_accueil'),
            'titre_page_li' => array($this, 'block_titre_page_li'),
            'titre_page_h1' => array($this, 'block_titre_page_h1'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_133a87a803116c8724cfe8956b442eec0691330601d0e5c9052e9e6ed87b323e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133a87a803116c8724cfe8956b442eec0691330601d0e5c9052e9e6ed87b323e->enter($__internal_133a87a803116c8724cfe8956b442eec0691330601d0e5c9052e9e6ed87b323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/detail.html.twig"));

        $__internal_148a11a3e92ee081210fa3d2ca7d9819b365bd1931e60a607995010dbbb8a032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148a11a3e92ee081210fa3d2ca7d9819b365bd1931e60a607995010dbbb8a032->enter($__internal_148a11a3e92ee081210fa3d2ca7d9819b365bd1931e60a607995010dbbb8a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133a87a803116c8724cfe8956b442eec0691330601d0e5c9052e9e6ed87b323e->leave($__internal_133a87a803116c8724cfe8956b442eec0691330601d0e5c9052e9e6ed87b323e_prof);

        
        $__internal_148a11a3e92ee081210fa3d2ca7d9819b365bd1931e60a607995010dbbb8a032->leave($__internal_148a11a3e92ee081210fa3d2ca7d9819b365bd1931e60a607995010dbbb8a032_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_bd9fedc22f26f458996db489cbb252f33b1104cf1ba705e794d44bdb54f854c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9fedc22f26f458996db489cbb252f33b1104cf1ba705e794d44bdb54f854c7->enter($__internal_bd9fedc22f26f458996db489cbb252f33b1104cf1ba705e794d44bdb54f854c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_d6e4516b5de8050b6503c366057f534c06f8300ece74ca3266acff5f365137ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e4516b5de8050b6503c366057f534c06f8300ece74ca3266acff5f365137ab->enter($__internal_d6e4516b5de8050b6503c366057f534c06f8300ece74ca3266acff5f365137ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_d6e4516b5de8050b6503c366057f534c06f8300ece74ca3266acff5f365137ab->leave($__internal_d6e4516b5de8050b6503c366057f534c06f8300ece74ca3266acff5f365137ab_prof);

        
        $__internal_bd9fedc22f26f458996db489cbb252f33b1104cf1ba705e794d44bdb54f854c7->leave($__internal_bd9fedc22f26f458996db489cbb252f33b1104cf1ba705e794d44bdb54f854c7_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_e8e6648d7cde0a0467f8e69877856f53b17df45e031a97b06837456c259eebb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e6648d7cde0a0467f8e69877856f53b17df45e031a97b06837456c259eebb2->enter($__internal_e8e6648d7cde0a0467f8e69877856f53b17df45e031a97b06837456c259eebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_730eca67242261f92606e7c58a4c92c49f3f290cd56549ce4b9b0470388afb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730eca67242261f92606e7c58a4c92c49f3f290cd56549ce4b9b0470388afb33->enter($__internal_730eca67242261f92606e7c58a4c92c49f3f290cd56549ce4b9b0470388afb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_730eca67242261f92606e7c58a4c92c49f3f290cd56549ce4b9b0470388afb33->leave($__internal_730eca67242261f92606e7c58a4c92c49f3f290cd56549ce4b9b0470388afb33_prof);

        
        $__internal_e8e6648d7cde0a0467f8e69877856f53b17df45e031a97b06837456c259eebb2->leave($__internal_e8e6648d7cde0a0467f8e69877856f53b17df45e031a97b06837456c259eebb2_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_26dbb1b4d8a0dad18d63836ad323c8dbe1a1debab75daeb8a5d1d0fced1070a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26dbb1b4d8a0dad18d63836ad323c8dbe1a1debab75daeb8a5d1d0fced1070a3->enter($__internal_26dbb1b4d8a0dad18d63836ad323c8dbe1a1debab75daeb8a5d1d0fced1070a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_d4f5ee60fcff309347e2d1a2ec3583a1fab027b24478532805f8d811a24d0fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f5ee60fcff309347e2d1a2ec3583a1fab027b24478532805f8d811a24d0fe0->enter($__internal_d4f5ee60fcff309347e2d1a2ec3583a1fab027b24478532805f8d811a24d0fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_d4f5ee60fcff309347e2d1a2ec3583a1fab027b24478532805f8d811a24d0fe0->leave($__internal_d4f5ee60fcff309347e2d1a2ec3583a1fab027b24478532805f8d811a24d0fe0_prof);

        
        $__internal_26dbb1b4d8a0dad18d63836ad323c8dbe1a1debab75daeb8a5d1d0fced1070a3->leave($__internal_26dbb1b4d8a0dad18d63836ad323c8dbe1a1debab75daeb8a5d1d0fced1070a3_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_b8a7f63c5906cf06912f37fa0232fa432f822f0d5edaf90c6e7c984e95280d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a7f63c5906cf06912f37fa0232fa432f822f0d5edaf90c6e7c984e95280d77->enter($__internal_b8a7f63c5906cf06912f37fa0232fa432f822f0d5edaf90c6e7c984e95280d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_9657256e18b2bd8bf34d238538fc759dafc00d57d336ac3a5fc8673378dff8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9657256e18b2bd8bf34d238538fc759dafc00d57d336ac3a5fc8673378dff8e8->enter($__internal_9657256e18b2bd8bf34d238538fc759dafc00d57d336ac3a5fc8673378dff8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "    <div class=\"row\" id=\"charge_detail\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">Détail du demande de réservation faites par ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo "
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du bien
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <ul class=\"col-md-4 ul_detail\">
                        <li>
                            <span class=\"droite\"> nom  </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> adresse </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> localité </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> type </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> proprietaire </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> montant </span> :
                        </li>
                    </ul>
                    <ul class=\"col-md-8 ul_detail\">
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomVille", array()) . ", ") . $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomQuartier", array())), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomComplet", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du client
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <ul class=\"col-md-4 ul_detail\">
                        <li>
                            <span class=\"droite\"> prénom & nom  </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> Numéro cni </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> adresse </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> e-mail </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> téléphone </span> :
                        </li>
                    </ul>
                    <ul class=\"col-md-8 ul_detail\">
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_cni", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_telephone", array()), "html", null, true);
        echo " </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Description
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body\">
                            <p>
                                ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "description", array()), "html", null, true);
        echo "
                            </p>
                            <div class=\"panel-body row\">
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Meublé </span> <span class=\"reponse_description col-md-2\">";
        // line 145
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "meuble", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> balcon </span> <span class=\"reponse_description col-md-2\">";
        // line 148
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "balcon", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </l>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> parking </span> <span class=\"reponse_description col-md-2\">";
        // line 151
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "parking", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </li>
                                </ul>
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Surface </span> <span class=\"reponse_description col-md-2\">";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "surface", array()), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> chambre à coucher </span> <span class=\"reponse_description col-md-2\">";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nbreChambre", array()), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> salle de bain </span> <span class=\"reponse_description col-md-2\">";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nbreSallebain", array()), "html", null, true);
        echo "</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-sm-12\">
            <span class=\"col-sm-3\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_annuler_reserve\">Annuler</a>
            <span class=\"col-sm-2\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_valider_reserve\" data-idreservation=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Reservation_id", array()), "html", null, true);
        echo "\" data-idbien=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Bien_id", array()), "html", null, true);
        echo "\" data-idclient=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_id", array()), "html", null, true);
        echo "\">Valider</a>
            <span class=\"col-sm-3\">&nbsp;</span>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
";
        
        $__internal_9657256e18b2bd8bf34d238538fc759dafc00d57d336ac3a5fc8673378dff8e8->leave($__internal_9657256e18b2bd8bf34d238538fc759dafc00d57d336ac3a5fc8673378dff8e8_prof);

        
        $__internal_b8a7f63c5906cf06912f37fa0232fa432f822f0d5edaf90c6e7c984e95280d77->leave($__internal_b8a7f63c5906cf06912f37fa0232fa432f822f0d5edaf90c6e7c984e95280d77_prof);

    }

    public function getTemplateName()
    {
        return "admin/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 175,  341 => 162,  335 => 159,  329 => 156,  317 => 151,  307 => 148,  297 => 145,  289 => 140,  271 => 125,  265 => 122,  259 => 119,  253 => 116,  247 => 113,  212 => 81,  206 => 78,  200 => 75,  194 => 72,  188 => 69,  182 => 66,  144 => 31,  136 => 26,  128 => 21,  119 => 15,  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
{% block accueil %}
    {{ 'class=\" \"' }}
{% endblock %}
{% block titre_page_li %}
    Réservation
{% endblock %}
{% block titre_page_h1 %}
    Gestion des réservations
{% endblock %}
{% block contenus %}
    <div class=\"row\" id=\"charge_detail\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">Détail du demande de réservation faites par {{ reservation[0].nomClient }}
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"{{asset(reservation[0].chemin)}}\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"{{asset(reservation[0].chemin)}}\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"{{asset(reservation[0].chemin)}}\" alt=\"\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du bien
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <ul class=\"col-md-4 ul_detail\">
                        <li>
                            <span class=\"droite\"> nom  </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> adresse </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> localité </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> type </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> proprietaire </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> montant </span> :
                        </li>
                    </ul>
                    <ul class=\"col-md-8 ul_detail\">
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].nomBien }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].adresse }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].nomVille ~\", \"~reservation[0].nomQuartier }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].nomTypeBien }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].nomComplet }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].prixLoc}} fcfa </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du client
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <ul class=\"col-md-4 ul_detail\">
                        <li>
                            <span class=\"droite\"> prénom & nom  </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> Numéro cni </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> adresse </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> e-mail </span> :
                        </li>
                        <li>
                            <span class=\"droite\"> téléphone </span> :
                        </li>
                    </ul>
                    <ul class=\"col-md-8 ul_detail\">
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].nomClient }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].Client_cni }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].Client_adresse }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].Client_email }} </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> {{ reservation[0].Client_telephone }} </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Description
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body\">
                            <p>
                                {{ reservation[0].description }}
                            </p>
                            <div class=\"panel-body row\">
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Meublé </span> <span class=\"reponse_description col-md-2\">{% if reservation[0].meuble == false %}Non{% else %}Oui{% endif %}</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> balcon </span> <span class=\"reponse_description col-md-2\">{% if reservation[0].balcon == false %}Non{% else %}Oui{% endif %}</span>
                                    </l>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> parking </span> <span class=\"reponse_description col-md-2\">{% if reservation[0].parking == false %}Non{% else %}Oui{% endif %}</span>
                                    </li>
                                </ul>
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Surface </span> <span class=\"reponse_description col-md-2\">{{ reservation[0].surface }}</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> chambre à coucher </span> <span class=\"reponse_description col-md-2\">{{ reservation[0].nbreChambre }}</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> salle de bain </span> <span class=\"reponse_description col-md-2\">{{ reservation[0].nbreSallebain }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-sm-12\">
            <span class=\"col-sm-3\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_annuler_reserve\">Annuler</a>
            <span class=\"col-sm-2\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_valider_reserve\" data-idreservation=\"{{ reservation[0].Reservation_id }}\" data-idbien=\"{{ reservation[0].Bien_id }}\" data-idclient=\"{{ reservation[0].Client_id }}\">Valider</a>
            <span class=\"col-sm-3\">&nbsp;</span>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
{% endblock %}", "admin/detail.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/detail.html.twig");
    }
}
