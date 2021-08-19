<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* historique/index.html.twig */
class __TwigTemplate_409787eb915203dcee2ce22989420f4aaf1f8f1a568f043746aa34ab58259f88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "UmanIT - Historique";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main class=\"container w-75\">
    <section>
        <h1 class=\"mt-5 mb-5\">Historique</h1>

        <!-- Barre de recherche -->

        <div class=\"form-outline mb-4\">
            <input type=\"search\" id=\"research\" name=\"research\" class=\"form-control\" placeholder=\"Saisissez votre recherche\"
            aria-label=\"Search\" />
        </div>
        
        <!-- Tableau des formulaires -->
        <table class=\"table table-striped\">

            <thead>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Type de formulaire</th>
                <th>Date</th>
                <th></th>
            </thead>

            <tbody>
                <tr>
                    <td>MIEUZE</td>
                    <td>Virginie</td>
                    <td>Progression</td>
                    <td>JJ/MM/AAAA</td>

                    <!-- Bouton Consulter & Télécharger -->
                    <td>
                        <a href=\"#\" class=\"btn\">Consulter</a>
                        <a href=\"#\" class=\"btn\">Télécharger</a>
                    </td>
                </tr>

                <tr>
                    <td>DURAND-DAUBIN</td>
                    <td>Thomas</td>
                    <td>Professionnel</td>
                    <td>JJ/MM/AAAA</td>

                    <!-- Bouton Consulter & Télécharger -->
                    <td>
                        <a href=\"#\" class=\"btn\">Consulter</a>
                        <a href=\"#\" class=\"btn\">Télécharger</a>
                    </td>
                </tr>

                <tr>
                    <td>LOURENCO</td>
                    <td>Gabriel</td>
                    <td>Progression</td>
                    <td>JJ/MM/AAAA</td>

                    <!-- Bouton Consulter & Télécharger -->
                    <td>
                        <a href=\"#\" class=\"btn\">Consulter</a>
                        <a href=\"#\" class=\"btn\">Télécharger</a>
                    </td>
                </tr>
            </tbody>

        </table>

    </section>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UmanIT - Historique{% endblock %}

{% block body %}

<main class=\"container w-75\">
    <section>
        <h1 class=\"mt-5 mb-5\">Historique</h1>

        <!-- Barre de recherche -->

        <div class=\"form-outline mb-4\">
            <input type=\"search\" id=\"research\" name=\"research\" class=\"form-control\" placeholder=\"Saisissez votre recherche\"
            aria-label=\"Search\" />
        </div>
        
        <!-- Tableau des formulaires -->
        <table class=\"table table-striped\">

            <thead>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Type de formulaire</th>
                <th>Date</th>
                <th></th>
            </thead>

            <tbody>
                <tr>
                    <td>MIEUZE</td>
                    <td>Virginie</td>
                    <td>Progression</td>
                    <td>JJ/MM/AAAA</td>

                    <!-- Bouton Consulter & Télécharger -->
                    <td>
                        <a href=\"#\" class=\"btn\">Consulter</a>
                        <a href=\"#\" class=\"btn\">Télécharger</a>
                    </td>
                </tr>

                <tr>
                    <td>DURAND-DAUBIN</td>
                    <td>Thomas</td>
                    <td>Professionnel</td>
                    <td>JJ/MM/AAAA</td>

                    <!-- Bouton Consulter & Télécharger -->
                    <td>
                        <a href=\"#\" class=\"btn\">Consulter</a>
                        <a href=\"#\" class=\"btn\">Télécharger</a>
                    </td>
                </tr>

                <tr>
                    <td>LOURENCO</td>
                    <td>Gabriel</td>
                    <td>Progression</td>
                    <td>JJ/MM/AAAA</td>

                    <!-- Bouton Consulter & Télécharger -->
                    <td>
                        <a href=\"#\" class=\"btn\">Consulter</a>
                        <a href=\"#\" class=\"btn\">Télécharger</a>
                    </td>
                </tr>
            </tbody>

        </table>

    </section>
</main>

{% endblock %}
", "historique/index.html.twig", "/home/superadmin/Documents/Projet WEB/umanit/app_umanit1/templates/historique/index.html.twig");
    }
}
