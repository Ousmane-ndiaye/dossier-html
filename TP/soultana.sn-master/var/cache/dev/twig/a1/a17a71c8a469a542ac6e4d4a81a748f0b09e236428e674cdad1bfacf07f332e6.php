<?php

/* admin/reservation.html.twig */
class __TwigTemplate_3ed7906d5f2e409372f9203a2d1ec3ea3762cd307c7b0ed0de42fb4a403491d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/reservation.html.twig", 1);
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
        $__internal_7472e1cac9a1da3ff5c08af6bb4c10c47b539959d54bdbcef6d9b32739126be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7472e1cac9a1da3ff5c08af6bb4c10c47b539959d54bdbcef6d9b32739126be7->enter($__internal_7472e1cac9a1da3ff5c08af6bb4c10c47b539959d54bdbcef6d9b32739126be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $__internal_1ac6ac9f5d24248de43c7d1c44b64d902baa1f96dd8a2e52354799af2a6ea229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac6ac9f5d24248de43c7d1c44b64d902baa1f96dd8a2e52354799af2a6ea229->enter($__internal_1ac6ac9f5d24248de43c7d1c44b64d902baa1f96dd8a2e52354799af2a6ea229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7472e1cac9a1da3ff5c08af6bb4c10c47b539959d54bdbcef6d9b32739126be7->leave($__internal_7472e1cac9a1da3ff5c08af6bb4c10c47b539959d54bdbcef6d9b32739126be7_prof);

        
        $__internal_1ac6ac9f5d24248de43c7d1c44b64d902baa1f96dd8a2e52354799af2a6ea229->leave($__internal_1ac6ac9f5d24248de43c7d1c44b64d902baa1f96dd8a2e52354799af2a6ea229_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_bfb61a6ed0ff0df123a75999d0351a9ff3e402ad94d8865f821de4d2fb1fca9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb61a6ed0ff0df123a75999d0351a9ff3e402ad94d8865f821de4d2fb1fca9c->enter($__internal_bfb61a6ed0ff0df123a75999d0351a9ff3e402ad94d8865f821de4d2fb1fca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_07b584feddc161a49cd7f7f526b215b574f01852ae4597f22e9c40604957c124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b584feddc161a49cd7f7f526b215b574f01852ae4597f22e9c40604957c124->enter($__internal_07b584feddc161a49cd7f7f526b215b574f01852ae4597f22e9c40604957c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_07b584feddc161a49cd7f7f526b215b574f01852ae4597f22e9c40604957c124->leave($__internal_07b584feddc161a49cd7f7f526b215b574f01852ae4597f22e9c40604957c124_prof);

        
        $__internal_bfb61a6ed0ff0df123a75999d0351a9ff3e402ad94d8865f821de4d2fb1fca9c->leave($__internal_bfb61a6ed0ff0df123a75999d0351a9ff3e402ad94d8865f821de4d2fb1fca9c_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_1a2c726c2072d20766ee6e563c1cdf72893067f7462737af300b662ab17e7670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2c726c2072d20766ee6e563c1cdf72893067f7462737af300b662ab17e7670->enter($__internal_1a2c726c2072d20766ee6e563c1cdf72893067f7462737af300b662ab17e7670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_fb6f7f097fad4939b763b752941e9026580a9e3dd2d3be72da9656f0e48b7994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6f7f097fad4939b763b752941e9026580a9e3dd2d3be72da9656f0e48b7994->enter($__internal_fb6f7f097fad4939b763b752941e9026580a9e3dd2d3be72da9656f0e48b7994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_fb6f7f097fad4939b763b752941e9026580a9e3dd2d3be72da9656f0e48b7994->leave($__internal_fb6f7f097fad4939b763b752941e9026580a9e3dd2d3be72da9656f0e48b7994_prof);

        
        $__internal_1a2c726c2072d20766ee6e563c1cdf72893067f7462737af300b662ab17e7670->leave($__internal_1a2c726c2072d20766ee6e563c1cdf72893067f7462737af300b662ab17e7670_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_76553e11d310fc49fc406085d33f0c2dcea0f2cd3fc64c29f0560a8e1319e25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76553e11d310fc49fc406085d33f0c2dcea0f2cd3fc64c29f0560a8e1319e25a->enter($__internal_76553e11d310fc49fc406085d33f0c2dcea0f2cd3fc64c29f0560a8e1319e25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_54351a88d10165dde80aa9713683860b9f65b98c8dc4318bb2352d053d4b1eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54351a88d10165dde80aa9713683860b9f65b98c8dc4318bb2352d053d4b1eec->enter($__internal_54351a88d10165dde80aa9713683860b9f65b98c8dc4318bb2352d053d4b1eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_54351a88d10165dde80aa9713683860b9f65b98c8dc4318bb2352d053d4b1eec->leave($__internal_54351a88d10165dde80aa9713683860b9f65b98c8dc4318bb2352d053d4b1eec_prof);

        
        $__internal_76553e11d310fc49fc406085d33f0c2dcea0f2cd3fc64c29f0560a8e1319e25a->leave($__internal_76553e11d310fc49fc406085d33f0c2dcea0f2cd3fc64c29f0560a8e1319e25a_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_5804d6e93e78f4273969ed1c650b919801da5c6ca56cb7d5f7b31fa85a4304b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5804d6e93e78f4273969ed1c650b919801da5c6ca56cb7d5f7b31fa85a4304b5->enter($__internal_5804d6e93e78f4273969ed1c650b919801da5c6ca56cb7d5f7b31fa85a4304b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_20c388b63517191c923ba9de48ec94b1210fd6fbc8c5fc1224f89589189ca916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c388b63517191c923ba9de48ec94b1210fd6fbc8c5fc1224f89589189ca916->enter($__internal_20c388b63517191c923ba9de48ec94b1210fd6fbc8c5fc1224f89589189ca916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "<div class=\"row\" id=\"charge_reservation\">
    <div class=\"col-md-12\" id=\"tableau\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-{1:inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                    <thead class=\"thead-inverse\">
                        <tr id=\"th_1\">
                            <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Client</th>
                            <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Bien</th>
                            <th style=\"width: 5%; height: 20px;\" colspan=\"1\">Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id=\"th_2\">
                            <!-- CLIENT -->
                            <td style=\"width: 2%;\">#</td>
                            <td style=\"width: 17%;\">Prénom & Nom</td>
                            <td style=\"width: 23%;\"> E-mail</td>
                            <td style=\"width: 8%;\">Téléphone</td>
                            <!-- /.CLIENT -->
                            <!-- BIEN -->
                            <td style=\"width: 15%;\">Nom</td>
                            <td style=\"width: 10%;\">Image</td>
                            <td style=\"width: 10%;\">Adresse</td>
                            <td style=\"width: 10%;\">Montant</td>
                            <td style=\"width: 5%;\">&nbsp;</td>
                            <!-- /.BIEN -->
                        </tr>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 45
            echo "                        <tr>
                            <td scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nomClient", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_telephone", array()), "html", null, true);
            echo "</d>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nomBien", array()), "html", null, true);
            echo "</td>
                            <td class=\"bien_photo\"><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["reservation"], "chemin", array())), "html", null, true);
            echo "\"/></td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "adresse", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "prixLoc", array()), "html", null, true);
            echo " f</td>
                            <td><a class=\"btn btn-primary voir_detail\" data-idreservation=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Reservation_id", array()), "html", null, true);
            echo "\" data-idbien=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Bien_id", array()), "html", null, true);
            echo "\" data-idclient=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_id", array()), "html", null, true);
            echo "\" title=\"Voir les détails\">voir</a></td>
                        </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
";
        
        $__internal_20c388b63517191c923ba9de48ec94b1210fd6fbc8c5fc1224f89589189ca916->leave($__internal_20c388b63517191c923ba9de48ec94b1210fd6fbc8c5fc1224f89589189ca916_prof);

        
        $__internal_5804d6e93e78f4273969ed1c650b919801da5c6ca56cb7d5f7b31fa85a4304b5->leave($__internal_5804d6e93e78f4273969ed1c650b919801da5c6ca56cb7d5f7b31fa85a4304b5_prof);

    }

    public function getTemplateName()
    {
        return "admin/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 57,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  176 => 48,  172 => 47,  168 => 46,  165 => 45,  148 => 44,  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
<div class=\"row\" id=\"charge_reservation\">
    <div class=\"col-md-12\" id=\"tableau\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-{1:inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                    <thead class=\"thead-inverse\">
                        <tr id=\"th_1\">
                            <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Client</th>
                            <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Bien</th>
                            <th style=\"width: 5%; height: 20px;\" colspan=\"1\">Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id=\"th_2\">
                            <!-- CLIENT -->
                            <td style=\"width: 2%;\">#</td>
                            <td style=\"width: 17%;\">Prénom & Nom</td>
                            <td style=\"width: 23%;\"> E-mail</td>
                            <td style=\"width: 8%;\">Téléphone</td>
                            <!-- /.CLIENT -->
                            <!-- BIEN -->
                            <td style=\"width: 15%;\">Nom</td>
                            <td style=\"width: 10%;\">Image</td>
                            <td style=\"width: 10%;\">Adresse</td>
                            <td style=\"width: 10%;\">Montant</td>
                            <td style=\"width: 5%;\">&nbsp;</td>
                            <!-- /.BIEN -->
                        </tr>
                        {% for reservation in reservations %}
                        <tr>
                            <td scope=\"row\">{{ loop.index }}</td>
                            <td>{{ reservation.nomClient }}</td>
                            <td>{{ reservation.Client_email }}</td>
                            <td>{{ reservation.Client_telephone }}</d>
                            <td>{{ reservation.nomBien}}</td>
                            <td class=\"bien_photo\"><img src=\"{{ asset(reservation.chemin) }}\"/></td>
                            <td>{{ reservation.adresse}}</td>
                            <td>{{ reservation.prixLoc}} f</td>
                            <td><a class=\"btn btn-primary voir_detail\" data-idreservation=\"{{ reservation.Reservation_id }}\" data-idbien=\"{{ reservation.Bien_id }}\" data-idclient=\"{{ reservation.Client_id }}\" title=\"Voir les détails\">voir</a></td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
{% endblock %}", "admin/reservation.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/reservation.html.twig");
    }
}
