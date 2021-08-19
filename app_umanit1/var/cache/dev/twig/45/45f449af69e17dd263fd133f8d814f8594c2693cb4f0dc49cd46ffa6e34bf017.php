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

/* user/show.html.twig */
class __TwigTemplate_13fa327cbc5e1651c18ec63aa347cf878e60c873610a2fcfa601dd86a6b8b30a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo "UmanIT - Consulter un utilisateur";
        
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
    <main>
        <section>

            <h1 class=\"mt-5 mb-4\">Consultation de ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo " </h1>

            Rôle : ";
        // line 12
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "roles", [], "any", false, false, false, 12)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "roles", [], "any", false, false, false, 12)), "html", null, true))) : (print ("")));
        echo "

            <!-- Informations personnelles -->
            <h2 class=\"mt-5\">Informations personnelles :</h2>
                <hr>

                <!-- Nom & Prénom -->
                <div class=\"row px-3 mb-4 mt-4\">
                    <div class=\"col\">
                        <label for=\"name\">Nom :</label>
                        ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "        
                    </div>

                    <div class=\"col\">
                        <label for=\"firstname\">Prénom :</label>
                        ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "firstname", [], "any", false, false, false, 27), "html", null, true);
        echo "
                    </div>
                </div>

                <!-- Anniversaire & Email -->
                <div class=\"row px-3 mb-4\">
                    <div class=\"col\">
                        <label for=\"birthday\">Date de naissance :</label>
                        ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "birthday", [], "any", false, false, false, 35), "m/d/Y"), "html", null, true);
        echo "
                    </div>

                    <div class=\"col\">
                        <label for=\"mail\">Email :</label>
                        ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "
                    </div>
                </div>

            <!-- Informations relatives au poste -->
            <h2 class=\"mt-5\">Informations relatives au poste :</h2>
                <hr>

                <!-- Service & Date d'embauche -->
                <div class=\"row px-3 mb-4 mt-4\">
                    <div class=\"col\">
                        <label for=\"service\">Service :</label>
                        ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "service", [], "any", false, false, false, 52), "html", null, true);
        echo "        
                    </div>

                    <div class=\"col\">
                        <label for=\"dateHire\">Date d'embauche :</label>
                        ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "dateHire", [], "any", false, false, false, 57), "m/d/Y"), "html", null, true);
        echo "
                    </div>
                </div>

                <!-- Anniversaire & Mail -->
                <div class=\"row px-3 mb-4\">
                    <div class=\"col\">
                        <label for=\"jobTitle\">Intitulé du poste :</label>
                        ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "jobTitle", [], "any", false, false, false, 65), "html", null, true);
        echo "
                    </div>

                    <div class=\"col\">
                        <label for=\"accesssionDate\">Date d'accession au poste :</label>
                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "accessionDate", [], "any", false, false, false, 70), "m/d/Y"), "html", null, true);
        echo "
                    </div>
                </div>

            <div class=\"pt-3\">
                <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"btn\">Annuler</a>
                <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        echo "\" class=\"btn\">Éditer</a>
                ";
        // line 77
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
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
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 77,  195 => 76,  191 => 75,  183 => 70,  175 => 65,  164 => 57,  156 => 52,  141 => 40,  133 => 35,  122 => 27,  114 => 22,  101 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UmanIT - Consulter un utilisateur{% endblock %}

{% block body %}

    <main>
        <section>

            <h1 class=\"mt-5 mb-4\">Consultation de {{ user.firstname }} {{ user.name }} </h1>

            Rôle : {{ user.roles ? user.roles|json_encode : '' }}

            <!-- Informations personnelles -->
            <h2 class=\"mt-5\">Informations personnelles :</h2>
                <hr>

                <!-- Nom & Prénom -->
                <div class=\"row px-3 mb-4 mt-4\">
                    <div class=\"col\">
                        <label for=\"name\">Nom :</label>
                        {{ user.name }}        
                    </div>

                    <div class=\"col\">
                        <label for=\"firstname\">Prénom :</label>
                        {{ user.firstname }}
                    </div>
                </div>

                <!-- Anniversaire & Email -->
                <div class=\"row px-3 mb-4\">
                    <div class=\"col\">
                        <label for=\"birthday\">Date de naissance :</label>
                        {{ user.birthday|date(\"m/d/Y\") }}
                    </div>

                    <div class=\"col\">
                        <label for=\"mail\">Email :</label>
                        {{ user.email }}
                    </div>
                </div>

            <!-- Informations relatives au poste -->
            <h2 class=\"mt-5\">Informations relatives au poste :</h2>
                <hr>

                <!-- Service & Date d'embauche -->
                <div class=\"row px-3 mb-4 mt-4\">
                    <div class=\"col\">
                        <label for=\"service\">Service :</label>
                        {{ user.service }}        
                    </div>

                    <div class=\"col\">
                        <label for=\"dateHire\">Date d'embauche :</label>
                        {{ user.dateHire|date(\"m/d/Y\") }}
                    </div>
                </div>

                <!-- Anniversaire & Mail -->
                <div class=\"row px-3 mb-4\">
                    <div class=\"col\">
                        <label for=\"jobTitle\">Intitulé du poste :</label>
                        {{ user.jobTitle }}
                    </div>

                    <div class=\"col\">
                        <label for=\"accesssionDate\">Date d'accession au poste :</label>
                        {{ user.accessionDate|date(\"m/d/Y\") }}
                    </div>
                </div>

            <div class=\"pt-3\">
                <a href=\"{{ path('user_index') }}\" class=\"btn\">Annuler</a>
                <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"btn\">Éditer</a>
                {{ include('user/_delete_form.html.twig') }}
            </div>
        
        </section>
    </main>

{% endblock %}
", "user/show.html.twig", "/home/superadmin/Documents/Projet WEB/umanit/app_umanit1/templates/user/show.html.twig");
    }
}
