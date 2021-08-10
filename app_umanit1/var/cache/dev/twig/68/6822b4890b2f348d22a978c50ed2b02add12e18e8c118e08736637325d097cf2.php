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
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/LOGO_UmanIT_Nav.png"), "html", null, true);
        echo "\" class=\"align-middle\"></a>

                <!-- Boutons nav à droite -->
                <div class=\"d-flex justify-content-end\">
                    <!-- Bouton Accueil -->
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\" href=\"index.html\">accueil</a>
                            </div>
                        </li>
                        <!-- Bouton Formulaires -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"second nav-link dropdown-toggle px-3 py-3\" href=\"#\" id=\"navbarDropdown\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">formulaires</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"form_professionnel.html\">professionnel</a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"form_progression.html\">progression</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Bouton Historique -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\"
                                    href=\"historique.html\">historique</a>
                            </div>
                        </li>
                        <!-- Bouton Gestion des utilisateurs -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"gestion nav-link px-3 py-3\" aria-current=\"page\"
                                    href=\"user_interface.html\">gestion
                                    des
                                    utilisateurs</a>
                            </div>
                        </li>
                        <!-- Bouton Ouvrir une session -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"session nav-link px-3 py-3\" aria-current=\"page\" href=\"session.html\">ouvrir une
                                    session</a>
                            </div>
                        </li>
                        <!-- Bouton Déconnexion -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"last px-3 py-3\" aria-current=\"page\" href=\"login.html\">déconnexion</a>
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
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-transparent\">
            <div class=\"container-fluid\">
                <!-- Logo + Lien page d'accueil -->
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{ asset('img/LOGO_UmanIT_Nav.png')}}\" class=\"align-middle\"></a>

                <!-- Boutons nav à droite -->
                <div class=\"d-flex justify-content-end\">
                    <!-- Bouton Accueil -->
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\" href=\"index.html\">accueil</a>
                            </div>
                        </li>
                        <!-- Bouton Formulaires -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"second nav-link dropdown-toggle px-3 py-3\" href=\"#\" id=\"navbarDropdown\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">formulaires</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"form_professionnel.html\">professionnel</a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"form_progression.html\">progression</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Bouton Historique -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"first nav-link px-3 py-3\" aria-current=\"page\"
                                    href=\"historique.html\">historique</a>
                            </div>
                        </li>
                        <!-- Bouton Gestion des utilisateurs -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"gestion nav-link px-3 py-3\" aria-current=\"page\"
                                    href=\"user_interface.html\">gestion
                                    des
                                    utilisateurs</a>
                            </div>
                        </li>
                        <!-- Bouton Ouvrir une session -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"session nav-link px-3 py-3\" aria-current=\"page\" href=\"session.html\">ouvrir une
                                    session</a>
                            </div>
                        </li>
                        <!-- Bouton Déconnexion -->
                        <li class=\"nav-item dropdown\">
                            <div class=\"navbar-nav\">
                                <a class=\"last px-3 py-3\" aria-current=\"page\" href=\"login.html\">déconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>", "nav.html.twig", "/home/superadmin/Documents/Projet WEB/umanit/app_umanit1/templates/nav.html.twig");
    }
}
