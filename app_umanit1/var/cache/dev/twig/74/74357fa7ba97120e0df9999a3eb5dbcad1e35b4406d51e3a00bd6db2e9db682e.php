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

/* formulaire_progression/index.html.twig */
class __TwigTemplate_53862590d6177c881d1b176d80a13d9e9b5f8c55efdeafe3fd0e8bf5fe42b59a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire_progression/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire_progression/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulaire_progression/index.html.twig", 1);
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

        echo "Hello FormulaireProgressionController!";
        
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
            <h1 class=\"mt-5 mb-5\">Entretien de progression</h1>

            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                <div>
                    <label for=\"dateToday\">Date de l'entretien :</label>
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateEntretien", [], "any", false, false, false, 14), 'widget');
        echo "
                </div>
                <div>
                    <label for=\"datePrecedent\">Date du précédent entretien :</label>
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "datePrecedentEntretien", [], "any", false, false, false, 18), 'widget');
        echo "
                </div>

";
        // line 76
        echo "            <input type=\"submit\" />
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "_token", [], "any", false, false, false, 77), 'widget');
        echo "
            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    </section>
</main>

";
        // line 82
        if ( !(null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "        ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })()));
            echo "
    ";
        } else {
            // line 85
            echo "        pas de data
";
        }
        // line 87
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire_progression/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 87,  136 => 85,  130 => 83,  128 => 82,  121 => 78,  117 => 77,  114 => 76,  108 => 18,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FormulaireProgressionController!{% endblock %}

{% block body %}

<main>
    <section>
            <h1 class=\"mt-5 mb-5\">Entretien de progression</h1>

            {{form_start(form)}}
                <div>
                    <label for=\"dateToday\">Date de l'entretien :</label>
                    {{form_widget(form.dateEntretien)}}
                </div>
                <div>
                    <label for=\"datePrecedent\">Date du précédent entretien :</label>
                    {{form_widget(form.datePrecedentEntretien)}}
                </div>

{#
                <!-- Tableau formulaire-->
                <table class=\"table mt-4\" style=\"table-layout : fixed;\">

                    <thead class=\"text-center\">
                        <th colspan=\"2\" class=\"bg-info\">Collaborateur</th>
                        <th colspan=\"2\" class=\"bg-secondary\">Responsable de l'entretien</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Nom :</td>
                            <td><input type=\"text\" id=\"name\" name=\"collab_name\"></td>
                            <td>Nom :</td>
                            <td><input type=\"text\" id=\"name\" name=\"manager_name\"></td>
                        </tr>
                        <tr>
                            <td>Prénom :</td>
                            <td><input type=\"text\" id=\"surname\" name=\"collab_surname\"></td>
                            <td>Prénom :</td>
                            <td><input type=\"text\" id=\"surname\" name=\"manager_surname\"></td>
                        </tr>
                        <tr>
                            <td>Date de naissance :</td>
                            <td><input type=\"date\" id=\"birthdate\" name=\"birthdate\"></td>
                            <td>Fonction :</td>
                            <td><input type=\"text\" id=\"fonction\" name=\"fonction_manager\"></td>
                        </tr>
                        <tr>
                            <td>Service :</td>
                            <td><input type=\"text\" id=\"service\" name=\"service\"></td>
                            <td>En présence de :</td>
                        </tr>
                        <tr>
                            <td>Intitulé du poste :</td>
                            <td><input type=\"text\" id=\"post\" name=\"post_name\"></td>
                            <td>Nom :</td>
                            <td><input type=\"text\" id=\"name\" name=\"collab_name\"></td>
                        </tr>
                        <tr>
                            <td>Date d'embauche :</td>
                            <td><input type=\"date\" id=\"date_hire\" name=\"date_hire\"></td>
                            <td>Prénom :</td>
                            <td><input type=\"text\" id=\"surname\" name=\"collab_surname\"></td>
                        </tr>
                        <tr>
                            <td>Date d'accession à ce poste :</td>
                            <td><input type=\"date\" id=\"date_access_post\" name=\"date_access_post\"></td>
                            <td>Fonction :</td>
                            <td><input type=\"text\" id=\"fonction\" name=\"fonction_collab\"></td>
                        </tr>
                    </tbody>

                </table>
#}
            <input type=\"submit\" />
            {{ form_widget(form._token) }}
            {{form_end(form, {'render_rest': false})}}
    </section>
</main>

{% if data is not null %}
        {{dump(data)}}
    {% else  %}
        pas de data
{% endif %}

{% endblock %}
", "formulaire_progression/index.html.twig", "/home/superadmin/Documents/Projet WEB/umanit/app_umanit1/templates/formulaire_progression/index.html.twig");
    }
}
