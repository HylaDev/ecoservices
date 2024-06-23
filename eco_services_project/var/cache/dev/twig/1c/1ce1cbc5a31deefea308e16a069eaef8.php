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

/* home/index.html.twig */
class __TwigTemplate_2d54294f8c7c3a946ca17274f1cfc1fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<!-- Hero Start -->
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secon\">100% Recyclable</h4>
                    <h1 class=\"mb-5 display-3 text-secon\">Produits de qualité et recyclable.</h1>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"carousel-item active rounded\">
                                <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-1.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                            </div>
                            <div class=\"carousel-item rounded\">
                                <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-2.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                            </div>
                        </div>
                        <button class=\"carousel-control-prev \" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden \">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End -->

";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "customerRole", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40) == "Particulier")) {
                // line 41
                yield "        <!--Specifications Start -->
            <div id=\"specifications\" class=\"container-fluid py-4\">
                <div class=\"container py-5\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fas fa-car-side fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Livraison gratuite</h5>
                                    <p class=\"mb-0\">Gratuite à partir de 50€ d'achat</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fas fa-user-shield fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Paiement sécurisé</h5>
                                    <p class=\"mb-0\">Payez en toute sécurité en ligne</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fas fa-exchange-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Retour sous 30 jours</h5>
                                    <p class=\"mb-0\">Garantie de paiement de 30 jours</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fa fa-phone-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Assistance 24/7</h5>
                                    <p class=\"mb-0\">Une assistance toujours rapide</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!-- Specifications End -->
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "customerRole", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95) == "Professionnel")) {
                // line 96
                yield "        <!--Specifications Start -->
            <div id=\"specifications\" class=\"p-5\">
                <div class=\"container\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6 col-lg-4\" >
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-3 mx-auto\">
                                    <i class=\"text-white fas fa-recycle fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Services</h5>
                                    <p class=\"mb-0\">5% de réduction</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-3 mx-auto\">
                                    <i class=\"text-white fas fa-exchange-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Retour sous 2 jours</h5>
                                    <p class=\"mb-0\">Recevez votre devis sous 2 jours</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-3 mx-auto\">
                                    <i class=\"text-white fa fa-phone-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Assistance 24/7</h5>
                                    <p class=\"mb-0\">Une assistance toujours rapide</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!-- Specifications End -->                               
    ";
            }
        } else {
            // line 142
            yield "    <div class=\"container p-3\">
        <h2 class=\"text-green mb-4\">Notre Démarche Zéro Déchets</h2>
        <div class=\"row\">
            <div class=\"col-md-4 step-hover my-3\">
                <h5 class=\"\"> 
                    <span>1.</span>
                    Qu'est-ce que la Démarche Zéro Déchets ?
                </h5>
                <p class=\"text-justify\">
                    La démarche zéro déchets vise à réduire au maximum la production de déchets en adoptant des 
                    habitudes de consommation plus responsables. Cela passe par la réduction de l'utilisation de plastiques, 
                    le recyclage, la réutilisation des produits et la limitation des emballages superflus. En choisissant des produits durables, réutilisables 
                    et compostables, nous pouvons tous contribuer à un avenir plus vert.
                </p>
            </div>
            <div class=\"col-md-4 step-hover my-3\">
                <h5 class=\"\">
                    <span>2.</span>
                    Nos Produits Éco-responsables
                </h5>
                <p class=\"text-justify\">
                    Notre sélection de produits est conçue pour minimiser votre empreinte écologique tout en répondant à vos besoins quotidiens. 
                    Voici quelques exemples de ce que nous proposons:
                    <ul>
                        <li class=\"fw-bold\">Emballages Réutilisables</li>
                        <li class=\"fw-bold\">Produits de Soins Naturels</li>
                        <li class=\"fw-bold\">Articles Ménagers Durables</li>
                        <li class=\"fw-bold\">Recyclage de vos déchets</li>
                    </ul> 
                </p>
            </div>
            <div class=\"col-md-4 step-hover my-3\">
                <h5 class=\"\">
                    <span>3.</span>
                    Pourquoi Choisir Nos Produits ?
                </h5>
                <p class=\"text-justify\">
                    <ul>
                        <li class=\"text-justify\">
                            <span class=\"fw-bold\">Qualité et Durabilité: </span> 
                            Nos produits sont sélectionnés pour leur durabilité et leur qualité 
                            supérieure.
                        </li>
                        <li class=\"text-justify\">
                            <span class=\"fw-bold\">Impact Environnemental Réduit: </span> 
                             En achetant chez nous, vous contribuez à la réduction des déchets 
                             et à la préservation des ressources naturelles.
                        </li>
                        <li class=\"text-justify\">
                            <span class=\"fw-bold\">Engagement Éthique: </span> 
                             Nous collaborons avec des fournisseurs respectueux de l'environnement.
                        </li>
                    </ul>
                </p>
            </div>
        </div>

    </div>
";
        }
        // line 201
        yield "
";
        // line 202
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202)) {
            // line 203
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "customerRole", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203) == "Particulier")) {
                // line 204
                yield "    <!--Product Start -->
    <div class=\"container py-3\">
        <div class=\" mx-auto mb-5\">
                <h1 class=\"\">Quelques Produits <span class=\"text-secon\">Eco-Responsables<span></h1>
            </div>
            <div class=\"row g-4\">
                ";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 210, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 211
                    yield "                    
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    ";
                    // line 216
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 216)) {
                        // line 217
                        yield "                                        <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 217))), "html", null, true);
                        yield "\" class=\"img-fluid\" alt=\"\">
                                    ";
                    } else {
                        // line 219
                        yield "                                        <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/num.jpg"), "html", null, true);
                        yield "\" class=\"img-fluid\" alt=\"\">
                                    ";
                    }
                    // line 221
                    yield "                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "designation", [], "any", false, false, false, 223), "html", null, true);
                    yield "</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    ";
                    // line 231
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231)) {
                        // line 232
                        yield "                                        <div class=\"mb-3\">
                                            <h4 class=\"text-secon\">";
                        // line 233
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 233), "html", null, true);
                        yield " €</h4>
                                        </div>
                                        ";
                    }
                    // line 236
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["product_id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 236), "quantity" => 1]), "html", null, true);
                    yield "\" class=\"btn border border-secondary rounded-pill px-3 text-green\"><i class=\"fa fa-shopping-cart me-2 text-green\"></i> Acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                yield "        </div>
    </div>
    <!--Product End -->
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 245
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245), "customerRole", [], "any", false, false, false, 245), "name", [], "any", false, false, false, 245) == "Professionnel")) {
                // line 246
                yield "    <!-- Service Start -->
        <div class=\"container\">
            <h1 class=\"mb-5\">Nos services <span class=\"text-secon\">Eco-Responsables<span></h1>
            <div class=\"row g-4 text-white\">
                ";
                // line 250
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 250, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 251
                    yield "                    <div class=\"col-md-6 col-lg-6 col-xl-3 m-bg-primary p-5\">
                        <div class=\" rounded\">
                            <h4>";
                    // line 253
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "designation", [], "any", false, false, false, 253), "html", null, true);
                    yield "</h4>
                            <a href=\"";
                    // line 254
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_request", ["service_id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 254), "quantity" => 50]), "html", null, true);
                    yield "\" class=\"btn border p-1 text-white\">Sélectionner ce service</a>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                yield "            </div>
        </div>
        <!-- End Start -->
    ";
            }
        } else {
            // line 263
            yield "<!--Particulier Section Start -->
    <div class=\"container h-200  text-white\">
        <div class=\"\">
            <div class=\"row\">
                <div class=\"col-lg-6 m-bg-secondary p-5\">
                    <div class=\"\">
                        <h6 class=\"text-white\">Vous êtes un Particulier...</h6>
                        <p class=\" text-justify\">
                            Profitez des produits eco-responsables disponibles pour nos utilisateurs particuliers 
                            avec des avantages incroyables 🎁!
                        </p>
                        <p>Prêt à acheter des produits eco-responsables🚀 ?</p>
                         <a href=\"";
            // line 275
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_choice_role");
            yield "\" class=\"btn m-btn-primary px-3\"> Inscrivez-vous</a>
                    </div>
                </div>
                <div class=\"col-lg-6 m-bg-primary p-5\">
                    <div class=\"\">
                        <h6 class=\"text-white\">Vous êtes un Professionnel...</h6>
                        <p class=\" text-justify\">
                            Profitez des services pour nos utilisateurs professionnels 
                            avec des avantages incroyables!
                        </p>
                         <a href=\"";
            // line 285
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_choice_role");
            yield "\" class=\"btn m-btn-primary px-3\"> Inscrivez-vous</a>
                    </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Particulier Section End -->
";
        }
        // line 296
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  451 => 296,  437 => 285,  424 => 275,  410 => 263,  403 => 258,  393 => 254,  389 => 253,  385 => 251,  381 => 250,  375 => 246,  373 => 245,  368 => 242,  355 => 236,  349 => 233,  346 => 232,  344 => 231,  333 => 223,  329 => 221,  323 => 219,  317 => 217,  315 => 216,  308 => 211,  304 => 210,  296 => 204,  293 => 203,  291 => 202,  288 => 201,  227 => 142,  179 => 96,  177 => 95,  121 => 41,  118 => 40,  116 => 39,  95 => 21,  89 => 18,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block content %}
<!-- Hero Start -->
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secon\">100% Recyclable</h4>
                    <h1 class=\"mb-5 display-3 text-secon\">Produits de qualité et recyclable.</h1>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"carousel-item active rounded\">
                                <img src=\"{{ asset('assets/img/hero-1.jpeg') }}\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                            </div>
                            <div class=\"carousel-item rounded\">
                                <img src=\"{{ asset('assets/img/hero-2.jpeg') }}\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                            </div>
                        </div>
                        <button class=\"carousel-control-prev \" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden \">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End -->

{% if app.user %}
    {% if app.user.customerRole.name == \"Particulier\" %}
        <!--Specifications Start -->
            <div id=\"specifications\" class=\"container-fluid py-4\">
                <div class=\"container py-5\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fas fa-car-side fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Livraison gratuite</h5>
                                    <p class=\"mb-0\">Gratuite à partir de 50€ d'achat</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fas fa-user-shield fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Paiement sécurisé</h5>
                                    <p class=\"mb-0\">Payez en toute sécurité en ligne</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fas fa-exchange-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Retour sous 30 jours</h5>
                                    <p class=\"mb-0\">Garantie de paiement de 30 jours</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-5 mx-auto\">
                                    <i class=\"text-white fa fa-phone-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Assistance 24/7</h5>
                                    <p class=\"mb-0\">Une assistance toujours rapide</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!-- Specifications End -->
    {% elseif app.user.customerRole.name == \"Professionnel\" %}
        <!--Specifications Start -->
            <div id=\"specifications\" class=\"p-5\">
                <div class=\"container\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6 col-lg-4\" >
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-3 mx-auto\">
                                    <i class=\"text-white fas fa-recycle fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Services</h5>
                                    <p class=\"mb-0\">5% de réduction</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-3 mx-auto\">
                                    <i class=\"text-white fas fa-exchange-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Retour sous 2 jours</h5>
                                    <p class=\"mb-0\">Recevez votre devis sous 2 jours</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\" text-center m-bg-secondary p-4\">
                                <div class=\"specifications-icon mb-3 mx-auto\">
                                    <i class=\"text-white fa fa-phone-alt fa-3x\"></i>
                                </div>
                                <div class=\"specifications-content text-white text-center\">
                                    <h5>Assistance 24/7</h5>
                                    <p class=\"mb-0\">Une assistance toujours rapide</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!-- Specifications End -->                               
    {% endif %}
{% else %}
    <div class=\"container p-3\">
        <h2 class=\"text-green mb-4\">Notre Démarche Zéro Déchets</h2>
        <div class=\"row\">
            <div class=\"col-md-4 step-hover my-3\">
                <h5 class=\"\"> 
                    <span>1.</span>
                    Qu'est-ce que la Démarche Zéro Déchets ?
                </h5>
                <p class=\"text-justify\">
                    La démarche zéro déchets vise à réduire au maximum la production de déchets en adoptant des 
                    habitudes de consommation plus responsables. Cela passe par la réduction de l'utilisation de plastiques, 
                    le recyclage, la réutilisation des produits et la limitation des emballages superflus. En choisissant des produits durables, réutilisables 
                    et compostables, nous pouvons tous contribuer à un avenir plus vert.
                </p>
            </div>
            <div class=\"col-md-4 step-hover my-3\">
                <h5 class=\"\">
                    <span>2.</span>
                    Nos Produits Éco-responsables
                </h5>
                <p class=\"text-justify\">
                    Notre sélection de produits est conçue pour minimiser votre empreinte écologique tout en répondant à vos besoins quotidiens. 
                    Voici quelques exemples de ce que nous proposons:
                    <ul>
                        <li class=\"fw-bold\">Emballages Réutilisables</li>
                        <li class=\"fw-bold\">Produits de Soins Naturels</li>
                        <li class=\"fw-bold\">Articles Ménagers Durables</li>
                        <li class=\"fw-bold\">Recyclage de vos déchets</li>
                    </ul> 
                </p>
            </div>
            <div class=\"col-md-4 step-hover my-3\">
                <h5 class=\"\">
                    <span>3.</span>
                    Pourquoi Choisir Nos Produits ?
                </h5>
                <p class=\"text-justify\">
                    <ul>
                        <li class=\"text-justify\">
                            <span class=\"fw-bold\">Qualité et Durabilité: </span> 
                            Nos produits sont sélectionnés pour leur durabilité et leur qualité 
                            supérieure.
                        </li>
                        <li class=\"text-justify\">
                            <span class=\"fw-bold\">Impact Environnemental Réduit: </span> 
                             En achetant chez nous, vous contribuez à la réduction des déchets 
                             et à la préservation des ressources naturelles.
                        </li>
                        <li class=\"text-justify\">
                            <span class=\"fw-bold\">Engagement Éthique: </span> 
                             Nous collaborons avec des fournisseurs respectueux de l'environnement.
                        </li>
                    </ul>
                </p>
            </div>
        </div>

    </div>
{% endif %}

{% if app.user %}
    {% if app.user.customerRole.name == \"Particulier\" %}
    <!--Product Start -->
    <div class=\"container py-3\">
        <div class=\" mx-auto mb-5\">
                <h1 class=\"\">Quelques Produits <span class=\"text-secon\">Eco-Responsables<span></h1>
            </div>
            <div class=\"row g-4\">
                {% for product in products %}
                    
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    {% if product.image %}
                                        <img src=\"{{ asset('assets/img/products/' ~ product.image) }}\" class=\"img-fluid\" alt=\"\">
                                    {% else %}
                                        <img src=\"{{ asset('assets/img/num.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                    {% endif %}
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">{{ product.designation }}</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star text-green\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    {% if app.user %}
                                        <div class=\"mb-3\">
                                            <h4 class=\"text-secon\">{{ product.price }} €</h4>
                                        </div>
                                        {% endif %}
                                    <a href=\"{{ path('add_to_cart', { 'product_id': product.id, 'quantity':1 }) }}\" class=\"btn border border-secondary rounded-pill px-3 text-green\"><i class=\"fa fa-shopping-cart me-2 text-green\"></i> Acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
        </div>
    </div>
    <!--Product End -->
    {% elseif app.user.customerRole.name == \"Professionnel\" %}
    <!-- Service Start -->
        <div class=\"container\">
            <h1 class=\"mb-5\">Nos services <span class=\"text-secon\">Eco-Responsables<span></h1>
            <div class=\"row g-4 text-white\">
                {% for service in services %}
                    <div class=\"col-md-6 col-lg-6 col-xl-3 m-bg-primary p-5\">
                        <div class=\" rounded\">
                            <h4>{{service.designation}}</h4>
                            <a href=\"{{ path('add_to_request', { 'service_id': service.id, 'quantity':50 }) }}\" class=\"btn border p-1 text-white\">Sélectionner ce service</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <!-- End Start -->
    {% endif %}
{% else %}
<!--Particulier Section Start -->
    <div class=\"container h-200  text-white\">
        <div class=\"\">
            <div class=\"row\">
                <div class=\"col-lg-6 m-bg-secondary p-5\">
                    <div class=\"\">
                        <h6 class=\"text-white\">Vous êtes un Particulier...</h6>
                        <p class=\" text-justify\">
                            Profitez des produits eco-responsables disponibles pour nos utilisateurs particuliers 
                            avec des avantages incroyables 🎁!
                        </p>
                        <p>Prêt à acheter des produits eco-responsables🚀 ?</p>
                         <a href=\"{{ path('app_choice_role') }}\" class=\"btn m-btn-primary px-3\"> Inscrivez-vous</a>
                    </div>
                </div>
                <div class=\"col-lg-6 m-bg-primary p-5\">
                    <div class=\"\">
                        <h6 class=\"text-white\">Vous êtes un Professionnel...</h6>
                        <p class=\" text-justify\">
                            Profitez des services pour nos utilisateurs professionnels 
                            avec des avantages incroyables!
                        </p>
                         <a href=\"{{ path('app_choice_role') }}\" class=\"btn m-btn-primary px-3\"> Inscrivez-vous</a>
                    </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Particulier Section End -->
{% endif %}

{% endblock %}", "home/index.html.twig", "/home/doscod/Bureau/Developpement/Symfony-projects/3FAP/ecoservices/eco_services_project/templates/home/index.html.twig");
    }
}
