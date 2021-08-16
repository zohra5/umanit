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

/* home/index.html.twig */
class __TwigTemplate_abc49deb31b6c9685acf6ddcb361b55ecd1ee5c8dcc780e170cd510cfac778d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "UmanIT - Accueil";
        
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
<main class=\"container accueil\">
    <section>

        <!-- Boutons Formulaires -->
        <div class=\"row text-center\">
            <div class=\"col-5 mx-auto\">
                <div class=\"row mb-4 formulaire\">
                    <div class=\"col\">
                        <a class=\"image\" href=\"#\"><img src=\"/img/FORM.png\" alt=\"Formulaire professionnel\" /></a>
                    </div>
                    <div class=\"col\">
                        <a class=\"image\" href=\"#\"><img src=\"/img/FORM.png\" alt=\"Formulaire progression\" /></a>
                    </div>
                </div>
                <!-- Bouton Historique -->
                <div class=\"row\">
                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
        echo "\">Historique</a>
                </div>

                <!-- Bouton Session et Gestion -->
                <div class=\"row mt-3\">
                    <div class=\"col\">
                        ";
        // line 29
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 30
            echo "                            <a class=\"w-100\" href=\"session.html\">Ouvrir une Session</a>
                        ";
        }
        // line 32
        echo "                        
                        ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) {
            // line 34
            echo "                            <a class=\"w-100 mt-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Gestion des utilisateurs</a>
                        ";
        }
        // line 36
        echo "                    </div>
                </div>
            </div>

            ";
        // line 40
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 41
            echo "                <div class=\"col-5 equipe mx-5\">
                    <p>Formulaire Équipe</p>
                </div>
            ";
        }
        // line 45
        echo "
        </div>

    </section>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  141 => 41,  139 => 40,  133 => 36,  127 => 34,  125 => 33,  122 => 32,  118 => 30,  116 => 29,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UmanIT - Accueil{% endblock %}

{% block body %}

<main class=\"container accueil\">
    <section>

        <!-- Boutons Formulaires -->
        <div class=\"row text-center\">
            <div class=\"col-5 mx-auto\">
                <div class=\"row mb-4 formulaire\">
                    <div class=\"col\">
                        <a class=\"image\" href=\"#\"><img src=\"/img/FORM.png\" alt=\"Formulaire professionnel\" /></a>
                    </div>
                    <div class=\"col\">
                        <a class=\"image\" href=\"#\"><img src=\"/img/FORM.png\" alt=\"Formulaire progression\" /></a>
                    </div>
                </div>
                <!-- Bouton Historique -->
                <div class=\"row\">
                        <a href=\"{{ path('historique') }}\">Historique</a>
                </div>

                <!-- Bouton Session et Gestion -->
                <div class=\"row mt-3\">
                    <div class=\"col\">
                        {% if is_granted('ROLE_RH') or is_granted('ROLE_MANAGER')%}
                            <a class=\"w-100\" href=\"session.html\">Ouvrir une Session</a>
                        {% endif %}
                        
                        {% if is_granted('ROLE_RH') %}
                            <a class=\"w-100 mt-3\" href=\"{{ path('user_index') }}\">Gestion des utilisateurs</a>
                        {% endif %}
                    </div>
                </div>
            </div>

            {% if is_granted('ROLE_RH') or is_granted('ROLE_MANAGER')%}
                <div class=\"col-5 equipe mx-5\">
                    <p>Formulaire Équipe</p>
                </div>
            {% endif %}

        </div>

    </section>
</main>

{% endblock %}
", "home/index.html.twig", "/home/superadmin/Documents/Projet WEB/umanit/app_umanit1/templates/home/index.html.twig");
    }
}
