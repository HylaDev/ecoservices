<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_8ead4ee211ac1a3344e286cfa9990bde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extrastylesheets' => [$this, 'block_extrastylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "
        ";
        // line 19
        yield from $this->unwrap()->yieldBlock('extrastylesheets', $context, $blocks);
        // line 21
        yield "    </head>
    <body>
        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 120
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 121
        yield "        ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 185
        yield "        ";
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 199
        yield "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "        <!-- Libraries Stylesheet -->
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/assets/owl.carousel.min.css "), "html", null, true);
        yield "\" rel=\"stylesheet\">


        <!-- Bootstrap Stylesheet -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <!-- Locals Stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/general.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 19
    public function block_extrastylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastylesheets"));

        // line 20
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 23
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 24
        yield "        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
            <div class=\"spinner-grow text-green\"></div>
        </div>
        <!-- Spinner End -->
        
        <!-- Navbar start -->
        <div class=\"fixed-top\">
            <div class=\"topbar m-bg-primary d-none d-lg-block\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"top-info\">
                        <small class=\"me-3\">
                            <i class=\"text-white fas fa-map-marker-alt me-2 text-secondary\"></i> 
                            <a href=\"#\" class=\"text-white\">2 rue toto, 45140 Orléans, France</a>
                        </small>
                        <small class=\"me-3\"><i class=\"text-white fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">Email@Example.com</a></small>
                    </div>
                    <div class=\"top-link pe-\">
                        <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">Conditions d'utilisation</small>/</a>
                        <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Confidentialité</small></a>
                    </div>
                </div>
            </div>
            <div class=\"container px-0\">
                <nav class=\"navbar navbar-expand-xl\">
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"navbar-brand\">
                        <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                    </a>
                    <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars text-green\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-auto\">
                            
                            ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "customerRole", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59) == "Particulier")) {
                // line 60
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                yield "\" class=\"nav-item nav-link\">Accueil</a>
                                    <a href=\"";
                // line 61
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
                yield "\" class=\"nav-item nav-link\">Boutique</a>
                                    <a href=\"";
                // line 62
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
                yield "\" class=\"nav-item nav-link\">Catégories Produits</a>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 63
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "customerRole", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63) == "Professionnel")) {
                // line 64
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                yield "\" class=\"nav-item nav-link\">Accueil</a>
                                    <a href=\"";
                // line 65
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_catalogue");
                yield "\" class=\"nav-item nav-link\">Catalogue Services</a> 
                                    <a href=\"";
                // line 66
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                yield "\" class=\"nav-item nav-link\">Mon Compte</a>                                
                                ";
            }
            // line 68
            yield "                            ";
        } else {
            // line 69
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            yield "\" class=\"nav-item nav-link\">Accueil</a>
                                <a href=\"\" class=\"nav-item nav-link\">Qui sommes-nous ?</a>
                                <a href=\"\" class=\"nav-item nav-link\">Contact</a>
                            ";
        }
        // line 73
        yield "                        </div>
                        <div class=\"d-flex m-3 me-0\">
                            ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) {
            // line 76
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "customerRole", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76) == "Particulier")) {
                // line 77
                yield "                                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-green\"></i></button>
                                    <a href=\"";
                // line 78
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
                yield "\" class=\"position-relative me-4 my-auto\">
                                        <i class=\"fa fa-shopping-cart fa-2x text-green\"></i>
                                        <span class=\"position-absolute bg-white rounded-circle d-flex align-items-center justify-content-center text-green px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbCarts"]) || array_key_exists("nbCarts", $context) ? $context["nbCarts"] : (function () { throw new RuntimeError('Variable "nbCarts" does not exist.', 80, $this->source); })()), "html", null, true);
                yield "</span>
                                    </a>
                                    <a href=\"";
                // line 82
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                yield "\" class=\"my-auto\">
                                        <i class=\"fas fa-user fa-2x text-green\"></i>
                                    </a>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 85
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "customerRole", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85) == "Professionnel")) {
                // line 86
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_catalogue");
                yield "\" class=\"btn border border-secondary rounded-pill px-3 text-green\"><i class=\"fa-solid fa-pen-to-square\"></i> Demander un devis</a>                            
                                ";
            }
            // line 88
            yield "                            ";
        } else {
            // line 89
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"my-auto\">
                                <i class=\"fas fa-user fa-1.5x text-green\"> Identifiez-vous</i>
                            </a>
                            ";
        }
        // line 93
        yield "                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Rechercher un produit</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"nom du produit...\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 120
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 121
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 122
        yield "        <!-- Footer Start -->
        <div class=\"container-fluid m-bg-primary text-white-50 footer pt-5 mt-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"footer-item\">
                            <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"navbar-band\">
                                <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-wb.png"), "html", null, true);
        yield "\" width=\"150px\" class=\"img-fluid\" alt=\"\">
                            </a>
                            <p class=\"my-4 text-white\">Ensemble, protegeons l'environnement.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"\">
                            <h4 class=\"text-light mb-3\">Liens Utiles</h4>
                            ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137)) {
            // line 138
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "customerRole", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138) == "Particulier")) {
                // line 139
                yield "                            <ul>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Boutique</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Catégories Produits</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Politique Privées</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Mentions Légales</a></li>
                            </ul>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 145
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "customerRole", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145) == "Professionnel")) {
                // line 146
                yield "
                            <ul>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Catalogue Services</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Politique Privés</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Mentions Légales</a></li>
                            </ul>
                            
                            
                            ";
            }
            // line 155
            yield "                            ";
        } else {
            // line 156
            yield "                            <ul>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Politique Privés</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Mentions Légales</a></li>
                            </ul>
                            ";
        }
        // line 161
        yield "
                            
                            
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-light mb-3\">Contact</h4>
                            <div class=\"me-3\">
                                <i class=\"text-white fas fa-map-marker-alt me-2 text-secondary\"></i> 
                                <a href=\"#\" class=\"text-white\">2 rue toto, 45140 Orléans, France</a>
                            </div>
                            <div class=\"me-3\">
                                <i class=\"text-white fas fa-envelope me-2 text-secondary\"></i>
                                <a href=\"#\" class=\"text-white\">Email@Example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 185
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 186
        yield "        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Local Javascript -->
        <script src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
        <!-- Bootstrap JavaScript -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <!--Icon Font Stylesheet  -->
        <script src=\"https://kit.fontawesome.com/c2cd48c276.js\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  462 => 193,  457 => 191,  453 => 190,  449 => 189,  444 => 186,  437 => 185,  406 => 161,  399 => 156,  396 => 155,  385 => 146,  383 => 145,  375 => 139,  372 => 138,  370 => 137,  359 => 129,  355 => 128,  347 => 122,  340 => 121,  327 => 120,  293 => 93,  285 => 89,  282 => 88,  276 => 86,  274 => 85,  268 => 82,  263 => 80,  258 => 78,  255 => 77,  252 => 76,  250 => 75,  246 => 73,  238 => 69,  235 => 68,  230 => 66,  226 => 65,  221 => 64,  219 => 63,  215 => 62,  211 => 61,  206 => 60,  203 => 59,  201 => 58,  190 => 50,  186 => 49,  159 => 24,  152 => 23,  144 => 20,  137 => 19,  127 => 16,  118 => 10,  114 => 9,  111 => 8,  104 => 7,  91 => 5,  81 => 199,  78 => 185,  75 => 121,  72 => 120,  70 => 23,  66 => 21,  64 => 19,  61 => 18,  59 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
        <!-- Libraries Stylesheet -->
        <link href=\"{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css ') }}\" rel=\"stylesheet\">


        <!-- Bootstrap Stylesheet -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <!-- Locals Stylesheet -->
        <link rel=\"stylesheet\" href=\"{{ asset('styles/general.css') }}\">
        {% endblock %}

        {% block extrastylesheets %}
        {% endblock %}
    </head>
    <body>
        {% block navbar %}
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
            <div class=\"spinner-grow text-green\"></div>
        </div>
        <!-- Spinner End -->
        
        <!-- Navbar start -->
        <div class=\"fixed-top\">
            <div class=\"topbar m-bg-primary d-none d-lg-block\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"top-info\">
                        <small class=\"me-3\">
                            <i class=\"text-white fas fa-map-marker-alt me-2 text-secondary\"></i> 
                            <a href=\"#\" class=\"text-white\">2 rue toto, 45140 Orléans, France</a>
                        </small>
                        <small class=\"me-3\"><i class=\"text-white fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">Email@Example.com</a></small>
                    </div>
                    <div class=\"top-link pe-\">
                        <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">Conditions d'utilisation</small>/</a>
                        <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Confidentialité</small></a>
                    </div>
                </div>
            </div>
            <div class=\"container px-0\">
                <nav class=\"navbar navbar-expand-xl\">
                    <a href=\"{{ path('home') }}\" class=\"navbar-brand\">
                        <img src=\"{{ asset('assets/img/logo.png') }}\" class=\"img-fluid\" alt=\"\">
                    </a>
                    <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars text-green\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-auto\">
                            
                            {% if app.user %}
                                {% if app.user.customerRole.name == \"Particulier\" %}
                                    <a href=\"{{ path('home') }}\" class=\"nav-item nav-link\">Accueil</a>
                                    <a href=\"{{ path('shop') }}\" class=\"nav-item nav-link\">Boutique</a>
                                    <a href=\"{{ path('categories') }}\" class=\"nav-item nav-link\">Catégories Produits</a>
                                {% elseif app.user.customerRole.name == \"Professionnel\" %}
                                    <a href=\"{{ path('home') }}\" class=\"nav-item nav-link\">Accueil</a>
                                    <a href=\"{{ path('app_service_catalogue') }}\" class=\"nav-item nav-link\">Catalogue Services</a> 
                                    <a href=\"{{ path('profil') }}\" class=\"nav-item nav-link\">Mon Compte</a>                                
                                {% endif %}
                            {% else %}
                                <a href=\"{{ path('home') }}\" class=\"nav-item nav-link\">Accueil</a>
                                <a href=\"\" class=\"nav-item nav-link\">Qui sommes-nous ?</a>
                                <a href=\"\" class=\"nav-item nav-link\">Contact</a>
                            {% endif %}
                        </div>
                        <div class=\"d-flex m-3 me-0\">
                            {% if app.user %}
                                {% if app.user.customerRole.name == \"Particulier\" %}
                                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-green\"></i></button>
                                    <a href=\"{{path('app_cart')}}\" class=\"position-relative me-4 my-auto\">
                                        <i class=\"fa fa-shopping-cart fa-2x text-green\"></i>
                                        <span class=\"position-absolute bg-white rounded-circle d-flex align-items-center justify-content-center text-green px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">{{ nbCarts }}</span>
                                    </a>
                                    <a href=\"{{ path('profil') }}\" class=\"my-auto\">
                                        <i class=\"fas fa-user fa-2x text-green\"></i>
                                    </a>
                                {% elseif app.user.customerRole.name == \"Professionnel\" %}
                                    <a href=\"{{ path('app_service_catalogue') }}\" class=\"btn border border-secondary rounded-pill px-3 text-green\"><i class=\"fa-solid fa-pen-to-square\"></i> Demander un devis</a>                            
                                {% endif %}
                            {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"my-auto\">
                                <i class=\"fas fa-user fa-1.5x text-green\"> Identifiez-vous</i>
                            </a>
                            {% endif %}
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Rechercher un produit</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"nom du produit...\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
        {% endblock %}
        {% block content %}{% endblock %}
        {% block footer %}
        <!-- Footer Start -->
        <div class=\"container-fluid m-bg-primary text-white-50 footer pt-5 mt-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"footer-item\">
                            <a href=\"{{ path('home') }}\" class=\"navbar-band\">
                                <img src=\"{{ asset('assets/img/logo-wb.png') }}\" width=\"150px\" class=\"img-fluid\" alt=\"\">
                            </a>
                            <p class=\"my-4 text-white\">Ensemble, protegeons l'environnement.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"\">
                            <h4 class=\"text-light mb-3\">Liens Utiles</h4>
                            {% if app.user %}
                            {% if app.user.customerRole.name == 'Particulier'%}
                            <ul>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Boutique</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Catégories Produits</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Politique Privées</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Mentions Légales</a></li>
                            </ul>
                            {% elseif app.user.customerRole.name == 'Professionnel'%}

                            <ul>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Catalogue Services</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Politique Privés</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Mentions Légales</a></li>
                            </ul>
                            
                            
                            {% endif %}
                            {% else %}
                            <ul>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Politique Privés</a></li>
                                <li><a href=\"\"><i class=\"fa fa-chevron-right\"> </i> Mentions Légales</a></li>
                            </ul>
                            {% endif %}

                            
                            
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-light mb-3\">Contact</h4>
                            <div class=\"me-3\">
                                <i class=\"text-white fas fa-map-marker-alt me-2 text-secondary\"></i> 
                                <a href=\"#\" class=\"text-white\">2 rue toto, 45140 Orléans, France</a>
                            </div>
                            <div class=\"me-3\">
                                <i class=\"text-white fas fa-envelope me-2 text-secondary\"></i>
                                <a href=\"#\" class=\"text-white\">Email@Example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        {% endblock %}
        {% block scripts %}
        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('assets/lib/easing/easing.min.js') }}\"></script>
        <script src=\"{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}\"></script>
        <script src=\"{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
        <!-- Local Javascript -->
        <script src=\"{{ asset('assets/js/main.js') }}\"></script>
        <!-- Bootstrap JavaScript -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <!--Icon Font Stylesheet  -->
        <script src=\"https://kit.fontawesome.com/c2cd48c276.js\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/doscod/Bureau/Developpement/Symfony-projects/3FAP/ecoservices/eco_services_project/templates/base.html.twig");
    }
}
