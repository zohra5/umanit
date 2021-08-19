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

/* nav.html.twig */
class __TwigTemplate_b1d637508fe0feca5da8f983518945f9b700d920739311efec7e93c0ea2b1df9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<header>
        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-transparent\">
            <div class=\"container-fluid\">

                <!-- Logo + Lien page d'accueil -->
                <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/LOGO_UmanIT_Nav.png"), "html", null, true);
        echo "\" class=\"align-middle\"></a>

                <!-- Boutons nav à droite -->
                <div class=\"d-flex justify-content-end\">

                    <!-- Bouton Accueil -->
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">accueil</a>
                            </div>
                        </li>

                        <!-- Bouton Formulaires -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"second nav-link dropdown-toggle px-3 py-3\" href=\"#\" id=\"navbarDropdown\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">formulaires</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">professionnel</a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">progression</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Bouton Historique -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\"
                                    href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
        echo "\">historique</a>
                            </div>
                        </li>
                        
                        ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH")) {
            // line 43
            echo "
                            <!-- Bouton Gestion des utilisateurs -->
                            <li class=\"nav-item dropdown\">
                                <div class=\"navbar-nav\">
                                    <a class=\"gestion nav-link px-3 py-3\" aria-current=\"page\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">gestion
                                        des
                                        utilisateurs</a>
                                </div>
                            </li>
                        ";
        }
        // line 53
        echo "
                        ";
        // line 54
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 55
            echo "
                            <!-- Bouton Ouvrir une session -->
                            <li class=\"nav-item dropdown\">
                                <div class=\"navbar-nav\">
                                    <a class=\"session nav-link px-3 py-3\" aria-current=\"page\" href=\"session.html\">ouvrir une
                                        session</a>
                                </div>
                            </li>

                        ";
        }
        // line 65
        echo "
                        

                        <!-- Bouton Déconnexion -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"last px-3 py-3\" aria-current=\"page\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">déconnexion</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  131 => 65,  119 => 55,  117 => 54,  114 => 53,  105 => 47,  99 => 43,  97 => 42,  90 => 38,  65 => 16,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-transparent\">
            <div class=\"container-fluid\">

                <!-- Logo + Lien page d'accueil -->
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\"><img src=\"{{ asset('img/LOGO_UmanIT_Nav.png')}}\" class=\"align-middle\"></a>

                <!-- Boutons nav à droite -->
                <div class=\"d-flex justify-content-end\">

                    <!-- Bouton Accueil -->
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\" href=\"{{ path('home') }}\">accueil</a>
                            </div>
                        </li>

                        <!-- Bouton Formulaires -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"second nav-link dropdown-toggle px-3 py-3\" href=\"#\" id=\"navbarDropdown\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">formulaires</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">professionnel</a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">progression</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Bouton Historique -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\"
                                    href=\"{{ path('historique') }}\">historique</a>
                            </div>
                        </li>
                        
                        {% if is_granted('ROLE_RH')%}

                            <!-- Bouton Gestion des utilisateurs -->
                            <li class=\"nav-item dropdown\">
                                <div class=\"navbar-nav\">
                                    <a class=\"gestion nav-link px-3 py-3\" aria-current=\"page\" href=\"{{ path('user_index') }}\">gestion
                                        des
                                        utilisateurs</a>
                                </div>
                            </li>
                        {% endif %}

                        {% if is_granted('ROLE_RH') or is_granted('ROLE_MANAGER') %}

                            <!-- Bouton Ouvrir une session -->
                            <li class=\"nav-item dropdown\">
                                <div class=\"navbar-nav\">
                                    <a class=\"session nav-link px-3 py-3\" aria-current=\"page\" href=\"session.html\">ouvrir une
                                        session</a>
                                </div>
                            </li>

                        {% endif %}

                        

                        <!-- Bouton Déconnexion -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"last px-3 py-3\" aria-current=\"page\" href=\"{{ path('app_logout') }}\">déconnexion</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
</header>", "nav.html.twig", "/home/superadmin/Documents/Projet WEB/umanit/app_umanit1/templates/nav.html.twig");
    }
}
