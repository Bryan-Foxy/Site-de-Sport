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

/* base-front.html.twig */
class __TwigTemplate_702759a8a8a3036c6c5181dd2772cceb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>GYM-CONNECT</title>

    <!-- favicon icon -->
    <link rel=icon href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("iconFit.png"), "html", null, true);
        echo " type=\"png\">

    <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cta.png"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo ">

    <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\"\">
    <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo ">


</head>

<body>
<!-- ===========================
=====>> Top Preloader <<===== -->
<div id=\"preloader\">
    <div class=\"lds-css\">
        <div class=\"preloader-3\">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- =====>> End Top Preloader <<=====
=========================== -->

<!-- ===========================
=====>> Top Menu <<===== -->

<header class=\"top-nav\">
    <!-- Top Address -->
    <div class=\"top-address\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"top-address-ditels\">
                        <ul>
                            <li>
                                <i class=\"fas fa-map-marker-alt\"></i>
                                <a target=\"_blank\" href=\"https://www.google.com/maps/place/New+York,+NY+10036,+USA/@40.7462126,-74.0089606,14z/data=!3m1!4b1!4m5!3m4!1s0x89c2585393f82307:0xf7d56896de1566ed!8m2!3d40.7602619!4d-73.9932872\">Tunis, TUNISIE </a>
                            </li>
                            <li>
                                <i class=\"far fa-clock\"></i>
                                <span>Lundi à Dimanche  :  8.00 Am - 9.00 Pm</span>
                            </li>
                            <li>
                                <i class=\"fas fa-phone\"></i>
                                <a href=\"#\">+216 71 234 567</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"top-social\">
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Address -->

    <!-- Top Menu -->
    <nav id=\"cssmenu\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"logo\">
                        <div  id=\"logo\"><a href=\"logo.html\"><h3 style=\"color:#fff;\"></h3></a></div>


                        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero/GYM-CONNECT.png"), "html", null, true);
        echo "\" STYLE=\"width: 100px ; height: 100px; margin-left: 50%\" alt=\"ACME logo\">


                    </div>
                </div>
                <div class=\"col-lg-7 col-md-12\">
                    <div id=\"head-mobile\"></div>
                    <div class=\"button\"></div>
                    <ul class=\"navbar-nav\">
                        <!--<li><a href=\"acceuil.html\">Acceuil</a>

                        </li>
                        -->
                        <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach");
        echo "\">Nos Coachs</a>
                            <ul>
                                <li><a href=\"coach.html\">coachs</a></li>
                                <li><a href=\"trainers-single.html\">Trainers Single</a></li>
                            </ul>
                        </li>

                        <li><a href=\"#\">Nos Programmes Sprotifs</a>
                            <ul>
                                <li><a href=\"#\">Yoga</a></li>
                                <li><a href=\"#\">CrossFit</a></li>
                                <li><a href=\"#\">Musculation</a></li>
                                <li><a href=\"#\">Cardio</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Nutritions&Alimentation</a>
                            <ul>
                                <li><a href=\"nutritionniste.html\">Nutritionniste</a></li>
                                <li><a href=\"recette.html\">Recette alimentaire</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Forum</a>
                            <ul>
                                <li><a href=\"news.html\">News</a></li>
                                <li><a href=\"news-single.html\">News Single</a></li>
                            </ul>
                        </li>
                        <li><a href=\"contact.html\">Contact</a>

                        </li>
                        <li><a href=\"#\">Boutique</a>
                            <ul>
                                <li><a href=\"shop.html\">shop</a></li>
                                <li><a href=\"shop-single.html\">Articles</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
                <!--<div class=\"col-lg-3 text-right p-0 nobile-position\"style=\" margin-left: -30px;\">-->
                <div class=\"shopping-bag\">
                    <a class=\"cart\" href=\"#\"><i class=\"fa fa-shopping-bag\" ></i><span>0</span></a>
                </div>
                <a href=\"connexion.html\" class=\"btn btn-3\" style=\"margin-bottom: 50px;\">Connexion</a>
                <div class=\"search-dropdown\">
                    <button type=\"button\" class=\"icon-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" >
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <form class=\"dropdown-menu dropdown-menu-right\">
                        <input class=\"search-input \" name=\"search\" placeholder=\"Search \" aria-label=\"Search \">
                        <button class=\"search-btn \" type=\"submit\"><i class=\"fas fa-search \"></i>  </button>
                    </form>
                    <!-- </div>-->

                </div>
            </div>
        </div>
    </nav>
    <!-- End Top Menu -->
</header>
<!-- =====>> End Top Menu <<=====
=========================== -->

<!-- ===========================
=====>> Hero <<===== -->
<section id=\"Home-area\" class=\"header3\">
    <div class=\"fullslider3 owl-carousel owl-theme \">
        <!-- slider item -->
        <div class=\"item slider-bg-5\">
            <div class=\"container \">
                <div class=\"row \">
                    <div class=\"col-lg-8 offset-lg-2 text-center dis-tab \">
                        <div class=\"slider2-all-text \">
                            <h1><span>DECOUVREZ</span> CE QUI SE CACHE DERRIERE <span>VOTRE CORPS</span></h1>
                            <p>LIBÉREZ VOS PEURS, LIBÉREZ VOTRE ESPRIT, SENTEZ VOTRE CORPS</p>
                            <a href=\"membre.html\" class=\"btn btn-1\">DEVENIR MEMBRE <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider item -->
        <div class=\"item slider-bg-2\">
            <div class=\"container \">
                <div class=\"row \">
                    <div class=\"col-lg-8 offset-lg-2 text-center dis-tab\">
                        <div class=\"slider2-all-text \">
                            <h1><span>DEVENIR</span> VOTRE VERSION DE VOUS   <span>MÊME</span></h1>
                            <p></p>
                            <a href=\"#\" class=\"btn btn-1\">DEVENIR MEMBRE <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider item -->
        <div class=\"item slider-bg-3\">
            <div class=\"container \">
                <div class=\"row \">
                    <div class=\"col-lg-8 offset-lg-2 text-center dis-tab\">
                        <div class=\"slider2-all-text \">
                            <h1><span>DECOUVREZ</span> CE QUI SE CACHE DERRIERE <span>VOTRE CORPS</span></h1>
                            <p>LIBÉREZ VOS PEURS, LIBÉREZ VOTRE ESPRIT, SENTEZ VOTRE CORPS</p>
                            <a href=\"#\" class=\"btn btn-1\">DEVENIR MEMBRE <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Hero <<=====
=========================== -->

<!-- ===========================
=====>> TTM <<===== -->
<section id=\"about-area\" class=\"pt-150\" style=\"
    padding-top: 10px !important;
\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 \">
                <div class=\"about-left media\">
                    <div class=\"about-left-text\">
                        <h2>NOUS SOMMES Là POUR VOUS SOUTENIR</h2>
                    </div>
                    <div class=\"about-left-img\">
                        <br><br>  <br><br>  <br><br>
                        <img src=\"assets/img/about1 (1).jpg\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"about-right-text\">
                    <div class=\"section-title text-center\">
                        <h2>GYM-<span style=\"-webkit-text-stroke: 1px black;\">CONNECT</span> </h2>

                    </div>
                    <p>GYM-CONNECT est le premier service en Tunisie de coaching sportif en ligne. Avec nos meilleurs coachs de la Tunisie, vous aurez un programme sur mesure accesible ou vous soyez que ce soit au bureau, à la maison, dans un parc, etc..</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=\"feature-area\" class=\"pt-100 pb-150\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Feature Item -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-item media mt-50\">
                    <div class=\"feature-i\">
                        <i class=\"flaticon-dumbbell-1\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h3>+500H videos</h3>
                        <p>Vous trouvez des videos d'exercices mise en ligne par vos coachs adapté à vos programmes choisis . </p>
                    </div>
                </div>
            </div>
            <!-- Feature Item -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-item media mt-50\">
                    <div class=\"feature-i\">
                        <i class=\"flaticon-clock\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h3>Ouvert 24/7</h3>
                        <p>Tout nos coachs sont disponibles pour vous à tout moments pour vous accompagner durant votre programme. </p>
                    </div>
                </div>
            </div>
            <!-- Feature Item -->
            <div class=\"col-lg-4 offset-lg-0 col-md-6 offset-md-3\">
                <div class=\"feature-item media mt-50\">
                    <div class=\"feature-i\">
                        <i class=\"flaticon-juice\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h3>Nutrition</h3>
                        <p>Plus de 100 recettes nutritifs et des regimes alimntaires adapté selon votre taille d'IMC, avec un suivi par vos coachs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====>> End About <<=====
=========================== -->




<!-- ===========================
=====>> Fitner <<===== -->
<section id=\"fitner-area\" class=\"pt-150\" style=\"
    padding-top: 10px !important;
\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"section-title text-center\">
                    <h2>POURQUOI CHOISIR GYM-<span style=\"-webkit-text-stroke: 1px black;\">CONNECT</span> </h2>

                </div>
            </div>
        </div>
        <div class=\"fitner-content pt-40 \">
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <!-- fitner item -->
                    <div class=\"fitner-item fitner-border mt-40\">
                        <img src=\"assets/img/icon/1.png\" alt=\" \">
                        <h2> DES COACHS PROFESSIONNELS </h2>
                        <p>Plus de 200 coachs sont disponible a votre dispotion pour vous guider tout au long de votre parcours </p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <!-- fitner item -->
                    <div class=\"fitner-item fitner-border mt-40\">
                        <img src=\"assets/img/icon/2.png\" alt=\" \">
                        <h2>UN PROGRAMME EVOLUITIF ET PERSONnALISé </h2>
                        <p>Vous avez la possibilité de choisir parmi nos quatre programmes sportifs </p>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3\">
                    <!-- fitner item -->
                    <div class=\"fitner-item mt-40\">
                        <img src=\"assets/img/icon/3.png\" alt=\" \">
                        <h2>Un suivis complet de vos progrèt</h2>
                        <p>Over 50 group training sessions per week There is no one type or way in our diverse community. Come as you are!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Fitner <<=====
=========================== -->

<!-- ===========================
=====>> Services <<===== -->
<section id=\"services-area\" class=\"pt-150\">
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1 \">
                <div class=\"section-title text-center \">
                    <h2>NOS PROGRAMMES <span>SPORTIFS</span></h2>
                    <p>BOUGEZ-VOUS! Avec des coachs de sport conçue autour de vous, nous pensons

                        <br> vous allez adorer ici.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"service-content pt-40 \">
        <div class=\"container-fluid \">
            <div class=\"row \">
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s1.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-male-silhouette-variant-showing-muscles \"></i>
                                <h3>YOGA</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-male-silhouette-variant-showing-muscles \"></i>
                            <h3>YOGA</h3>
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s2.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-male-arm-muscles \"></i>
                                <h3>MUSCULATION</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-male-arm-muscles \"></i>
                            <h3>MUSCULATION</h3>
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s3.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-calories \"></i>
                                <h3>CARDIO</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community. </p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-calories \"></i>
                            <h3>CARDIO</h3>
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s4.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-treadmill \"></i>
                                <h3>CROSSFIT</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-treadmill \"></i>
                            <h3>CROSSFIT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Services <<=====
=========================== -->


<!-- ===========================
=====>> Pricing <<===== -->
<section id=\"pricing-area\" class=\"pt-150\">
    <div class=\"container \">
        <div class=\"row \">
            <div class=\"col-lg-8 offset-lg-2 \">
                <div class=\"section-title text-center \">
                    <h2>TARIFS DES <span>ABONNEMENTS </span></h2>
                    <p>Kick your feet up! With a gym designed around you, we think
                        <br> you’ll love it here.</p>
                </div>
            </div>
        </div>
        <div class=\"pricing-content pt-40\">
            <div class=\"row\">
                <!-- Pricing Item -->
                <div class=\"col-lg-6 mt-40\">
                    <div class=\"pricing-item media\">
                        <div class=\"pricing-item-left\">
                            <ul>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">CLASSIC MEMBERSHIP </h3>
                                </li>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">BASIC PLAN </h3>
                                    <h6 class=\"pricing-item-left-h6\">Spend ten, get tons</h6>
                                </li>
                                <li>
                                    <h2 class=\"pricing-item-left-h2\">\$10 /mo</h2>
                                    <p class=\"pricing-item-left-p\">plus taxes and fees</p>
                                </li>
                            </ul>
                        </div>
                        <div class=\"pricing-item-right\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Unlimited Access to Home Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free Fitness Training</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free training session with a Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Over 116 free group fitness classes</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free functional movement screen</a></li>
                            </ul>
                            <a href=\"# \" class=\"btn btn-3\">COMMENCEZ</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item -->
                <div class=\"col-lg-6 mt-40\">
                    <div class=\"pricing-item media pricing-item-bgc\">
                        <div class=\"pricing-item-left pricing-right\">
                            <ul>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">CLASSIC MEMBERSHIP </h3>
                                </li>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">BASIC PLAN </h3>
                                    <h6 class=\"pricing-item-left-h6\">Spend ten, get tons</h6>
                                </li>
                                <li>
                                    <h2 class=\"pricing-item-left-h2\">\$10 /mo</h2>
                                    <p class=\"pricing-item-left-p\">plus taxes and fees</p>
                                </li>
                            </ul>
                        </div>
                        <div class=\"pricing-item-right pricing-right\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Unlimited Access to Home Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free Fitness Training</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free training session with a Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Over 116 free group fitness classes</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free functional movement screen</a></li>
                            </ul>
                            <a href=\"# \" class=\"btn btn-4\">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Pricing <<=====
=========================== -->

<!-- ===========================
=====>> Feature <<===== -->

<!-- =====>> End Feature <<=====
=========================== -->

<!-- ===========================
=====>> Testimonial <<===== -->
<section id=\"testimonial-area\" class=\"testimonial-home1 pt-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-left\">
                    <h2> <span>ça à marcher pour eux !</span></h2>

                </div>
            </div>
        </div>
        <div class=\"testimonial-content pt-40\">
            <div class=\"row\">
                <!-- Testimonial Item -->
                <div class=\"col-lg-6\">
                    <div class=\"testimonial-item mt-40\">
                        <img src=\"assets/img/testimonial/1.jpg\" alt=\"\">
                        <div class=\"testimonial-text\">
                            <h3>“Mes meilleurs jours on commencé ici!”</h3>
                            <a class=\"video-play-button \" href=\"https://www.youtube.com/watch?v=ZoZSp-wy8h8\">
                                <i class=\"flaticon-play-button \"></i>
                                <span>play</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <div class=\"col-lg-6\">
                    <div class=\"testimonial-item mt-40\">
                        <img src=\"assets/img/testimonial/2.jpg\" alt=\"\">
                        <div class=\"testimonial-text\">
                            <h3>“Meilleur endroit pour maigrir et avoir un beau corps”</h3>
                            <a class=\"video-play-button \" href=\"https://www.youtube.com/watch?v=ZoZSp-wy8h8\">
                                <i class=\"flaticon-play-button \"></i>
                                <span>play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Testimonial <<=====
=========================== -->


<!-- ===========================
=====>> Fitner Classes <<===== -->
<section id=\"fitner-classes-area\" class=\"pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-12\">
                <div class=\"section-title text-center\">
                    <h2>programmes GYM-<span     style=\"-webkit-text-stroke: 1px black;\"\">CONNECT</span></h2>
                </div>
            </div>
        </div>
        <div class=\"fitner-classes-content pt-50\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"fitner-classes-tab\">
                        <!-- tab nav -->
                        <ul class=\"classes-tabs classes-tab-btn\">
                            <li class=\"tab-link current\" data-tab=\"tab-2\">PROGRAMME</li>
                            <li class=\"tab-link\" data-tab=\"tab-2\">YOGA</li>
                            <li class=\"tab-link\" data-tab=\"tab-3\">MUSCULATION</li>
                            <li class=\"tab-link\" data-tab=\"tab-4\">CARDIO</li>
                            <li class=\"tab-link\" data-tab=\"tab-5\">CROSSFIT</li>
                        </ul>

                        <!-- tab 1 -->
                        <div id=\"tab-1\" class=\"tab-content current\">
                            <div class=\"fitner-tab-all\">
                                <h5>Lundi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>Mardi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>Mercredi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>Jeudi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>Vendredi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>samedi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>dimanche</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 2 -->
                        <div id=\"tab-2\" class=\"tab-content \">
                            <div class=\"fitner-tab-all\">
                                <h5>Lundi</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>Mardi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>Mercredi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>Jeudi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>Vendredi</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>Samedi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>Dimanche</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 3 -->
                        <div id=\"tab-3\" class=\"tab-content\">
                            <div class=\"fitner-tab-all\">
                                <h5>sunday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>monday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>tuesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>wednesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>thursday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>friday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>saturday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 4 -->
                        <div id=\"tab-4\" class=\"tab-content \">
                            <div class=\"fitner-tab-all\">
                                <h5>sunday</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>monday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>tuesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>wednesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>thursday</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>friday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>saturday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 5 -->
                        <div id=\"tab-5\" class=\"tab-content\">
                            <div class=\"fitner-tab-all\">
                                <h5>sunday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>monday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>tuesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>wednesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>thursday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>friday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>saturday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- =====>> End Fitner classes <<=====
=========================== -->

<!-- ===========================
=====>> Bmi <<===== -->
<section id=\"bmi-area\" class=\"bmi-bg parallax pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-left\">
                    <h2>calculer votre <span>imc</span></h2>
                    <p>L'indice de masse corporelle (IMC) est une mesure de la graisse corporelle basée sur la taille et le poids qui s'applique aux hommes et aux femmes adultes. </p>
                </div>
            </div>
        </div>
        <div class=\"bmi-calculus-content pt-30\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <form class=\"bmi-calculator row mt-50\">
                        <div class=\"col-md-6 form-group\">
                            <input type=\"number\" placeholder=\"Hauteur\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <input type=\"number\" placeholder=\"Largeur\">
                        </div>
                        <div class=\"col-md-12 checkbox-wrapper d-flex\">
                            <div class=\"checkbox-item\">
                                <input type=\"radio\" id=\"c1\" name=\"ticket-type\">
                                <label for=\"c1\">Unités métriques</label>
                            </div>
                            <div class=\"checkbox-item\">
                                <input type=\"radio\" id=\"c2\" name=\"ticket-type\">
                                <label for=\"c2\">Unités impériales
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-12 form-group\">
                            <button class=\"btn btn-1\" type=\"submit\">Calculez maintenant</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"bmi-rate-status-content mt-50\">
                        <li>
                            <div class=\"bmi-rate\"> IMC </div>
                            <div class=\"bmi-status\"> Largeur Status </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> Moins 18 </div>
                            <div class=\"bmi-status\"> Sous poids </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> 18.5 - 24.9 </div>
                            <div class=\"bmi-status\"> Normale </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> 25 - 29.9 </div>
                            <div class=\"bmi-status\"> Sur poids </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> 30 et plus </div>
                            <div class=\"bmi-status\"> Obése </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Bmi <<=====
    =========================== -->

<!-- ===========================
=====>> Team <<===== -->
<section id=\"team-area\" class=\"pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"section-title text-center\">
                    <h2>NOTRE EQUIPE DE <span >COACHS</span ></h2>

                </div>
            </div>
        </div>
        <div class=\"team-content pt-40\">
            <div class=\"row\">
                <!-- team item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"team-box effect-item mt-40\">
                        <div class=\"team-item content-overlay\">
                            <img src=\"../public/assets/img/team/1.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"team-title text-center\">
                            <h3><a href=\"#\">Arial hedger</a></h3>
                            <p>Fitness & Body</p>
                        </div>
                    </div>
                </div>
                <!-- team item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"team-box effect-item mt-40\">
                        <div class=\"team-item content-overlay\">
                            <img src=\"assets/img/team/2.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"team-title text-center\">
                            <h3><a href=\"#\">marina aring</a></h3>
                            <p>Fitness & Body</p>
                        </div>
                    </div>
                </div>
                <!-- team item -->
                <div class=\"col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3\">
                    <div class=\"team-box effect-item mt-40\">
                        <div class=\"team-item content-overlay\">
                            <img src=\"assets/img/team/3.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"team-title text-center\">
                            <h3><a href=\"#\">alan lynda</a></h3>
                            <p>Fitness & Body</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =====>> End Team <<=====
=========================== -->

<!-- ===========================
=====>> Cta <<===== -->
<section id=\"cta-area\" class=\"cta-bg1 pt-80 pb-80\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"cta-left\">
                    <h2>Offre du Decembre </h2>
                    <p>2 mois de reduction <span>\$39.95/</span> pour les couples</p>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"cta-btn \">
                    <a href=\"contact.html\" class=\"btn btn-1\">Contactez nous</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Cta <<=====
=========================== -->

<!-- ===========================
=====>> Blog <<===== -->
<section id=\"blog-area\" class=\"pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-12\">
                <div class=\"section-title text-center\">
                    <h2>blog<span style=\"-webkit-text-stroke: 1px black;\">hub</span></h2>
                </div>
            </div>
        </div>
        <div class=\"row pt-50\">
            <div class=\"col-lg-8\">
                <!-- Blog item -->
                <div class=\"blog-item row\">
                    <div class=\"col-lg-6 col-md-6 p-0\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"../public/assets/img/blog/1.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 p-0\">
                        <div class=\"blog-text pl-4 pr-4\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-calendar-alt\"></i> 11 Dec 2018</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a></li>
                            </ul>
                            <h3 class=\"blog-title\"><a href=\"news.html\">Push your fitness further with our gym facilities</a></h3>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.</p>
                        </div>
                    </div>
                </div>
                <!-- Blog item -->
                <div class=\"blog-item row\">
                    <div class=\"col-lg-6 col-md-6 p-0 mobile-block\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"../public/assets/img/blog/2.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 p-0\">
                        <div class=\"blog-text pr-4\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-calendar-alt\"></i> 11 Dec 2018</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a></li>
                            </ul>
                            <h3 class=\"blog-title\"><a href=\"news.html\">Push your fitness further with our gym facilities</a></h3>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 p-0 desktop-block\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"../public/assets/img/blog/2.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <!-- Blog item -->
                <div class=\"blog-item row\">
                    <div class=\"col-lg-12 col-md-6 p-0\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"assets/img/blog/3.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-12 col-md-6 p-0\">
                        <div class=\"blog-text pl-4\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-calendar-alt\"></i> 11 Dec 2018</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a></li>
                            </ul>
                            <h3 class=\"blog-title\"><a href=\"news.html\">Push your fitness further with our gym facilities</a></h3>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Blog <<=====
=========================== -->



<!-- ===========================
=====>> Footer <<===== -->
<footer id=\"footer-area\" class=\"pt-100 pb-150\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 pt-50\">
                <div class=\"footer-item\">
                    <a href=\"#\" class=\"footer-logo-img\"><img style=\"width: 300px;\" src=\"assets/img/hero/GYM-CONNECT.png\" alt=\"\"></a>
                    <p>Notre commité est de fournir un service honnête, amical et ponctuel. </p>

                </div>
            </div>
            <div class=\"col-lg-2 offset-lg-1 col-md-4 pt-50\">
                <div class=\"footer-item\">
                    <h6>Liens</h6>
                    <ul>
                        <li><a href=\"index-1.html\"><i class=\"fas fa-angle-right\"></i> Acceuil</a></li>

                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Nos Coachs</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Boutique</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Forum</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 pt-50\">
                <div class=\"footer-item\">
                    <h6>Nos Services</h6>
                    <ul>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Yoga </a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Cardio</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> CrossFit</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Musculation</a></li>

                    </ul>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 pt-50\">
                <div class=\"footer-item\">
                    <h6>Contactez nous </h6>
                    <ul class=\"media\">
                        <li><i class=\"fas fa-map-marker-alt\"></i></li>
                        <li><a target=\"_blank\" href=\"\">Tunis,TUNISIE</a></li>

                    </ul>
                    <ul class=\"media\">
                        <li><i class=\"fas fa-phone-volume\"></i></li>
                        <li><a href=\"#\">+216 71 234 567</a></li>
                    </ul>
                    <ul class=\"media\">
                        <li><i class=\"fas fa-envelope\"></i></li>
                        <li><a href=\"#\">GYM-CONNECT@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"copy-right\">  © Tous droits résevés 2020.
                    </a> </div>
            </div>
        </div>
    </div>
</footer>
<!-- =====>> End Footer <<=====
=========================== -->



<script src=\"";
        // line 1232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scroll-slider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/typing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>

</body>


<!-- Mirrored from raistheme.com/html/fitner/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:23 GMT -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1336 => 1241,  1332 => 1240,  1328 => 1239,  1324 => 1238,  1320 => 1237,  1316 => 1236,  1312 => 1235,  1308 => 1234,  1304 => 1233,  1300 => 1232,  161 => 96,  145 => 83,  77 => 18,  73 => 17,  69 => 16,  64 => 14,  60 => 13,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>GYM-CONNECT</title>

    <!-- favicon icon -->
    <link rel=icon href={{ asset('iconFit.png') }} type=\"png\">

    <link rel=\"stylesheet\" href={{ asset('assets/img/cta.png') }}>
    <link rel=\"stylesheet\" href={{ asset ('assets/css/bootstrap.min.css') }}>

    <link rel=\"stylesheet\" href={{ asset ('assets/css/style.css') }}>
    <link rel=\"stylesheet\" href={{ asset ('assets/css/responsive.css') }}\"\">
    <link rel=\"stylesheet\" href={{ asset ('assets/css/about.css') }}>


</head>

<body>
<!-- ===========================
=====>> Top Preloader <<===== -->
<div id=\"preloader\">
    <div class=\"lds-css\">
        <div class=\"preloader-3\">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- =====>> End Top Preloader <<=====
=========================== -->

<!-- ===========================
=====>> Top Menu <<===== -->

<header class=\"top-nav\">
    <!-- Top Address -->
    <div class=\"top-address\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"top-address-ditels\">
                        <ul>
                            <li>
                                <i class=\"fas fa-map-marker-alt\"></i>
                                <a target=\"_blank\" href=\"https://www.google.com/maps/place/New+York,+NY+10036,+USA/@40.7462126,-74.0089606,14z/data=!3m1!4b1!4m5!3m4!1s0x89c2585393f82307:0xf7d56896de1566ed!8m2!3d40.7602619!4d-73.9932872\">Tunis, TUNISIE </a>
                            </li>
                            <li>
                                <i class=\"far fa-clock\"></i>
                                <span>Lundi à Dimanche  :  8.00 Am - 9.00 Pm</span>
                            </li>
                            <li>
                                <i class=\"fas fa-phone\"></i>
                                <a href=\"#\">+216 71 234 567</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"top-social\">
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Address -->

    <!-- Top Menu -->
    <nav id=\"cssmenu\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"logo\">
                        <div  id=\"logo\"><a href=\"logo.html\"><h3 style=\"color:#fff;\"></h3></a></div>


                        <img src=\"{{ asset('assets/img/hero/GYM-CONNECT.png') }}\" STYLE=\"width: 100px ; height: 100px; margin-left: 50%\" alt=\"ACME logo\">


                    </div>
                </div>
                <div class=\"col-lg-7 col-md-12\">
                    <div id=\"head-mobile\"></div>
                    <div class=\"button\"></div>
                    <ul class=\"navbar-nav\">
                        <!--<li><a href=\"acceuil.html\">Acceuil</a>

                        </li>
                        -->
                        <li><a href=\"{{ path('coach') }}\">Nos Coachs</a>
                            <ul>
                                <li><a href=\"coach.html\">coachs</a></li>
                                <li><a href=\"trainers-single.html\">Trainers Single</a></li>
                            </ul>
                        </li>

                        <li><a href=\"#\">Nos Programmes Sprotifs</a>
                            <ul>
                                <li><a href=\"#\">Yoga</a></li>
                                <li><a href=\"#\">CrossFit</a></li>
                                <li><a href=\"#\">Musculation</a></li>
                                <li><a href=\"#\">Cardio</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Nutritions&Alimentation</a>
                            <ul>
                                <li><a href=\"nutritionniste.html\">Nutritionniste</a></li>
                                <li><a href=\"recette.html\">Recette alimentaire</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Forum</a>
                            <ul>
                                <li><a href=\"news.html\">News</a></li>
                                <li><a href=\"news-single.html\">News Single</a></li>
                            </ul>
                        </li>
                        <li><a href=\"contact.html\">Contact</a>

                        </li>
                        <li><a href=\"#\">Boutique</a>
                            <ul>
                                <li><a href=\"shop.html\">shop</a></li>
                                <li><a href=\"shop-single.html\">Articles</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
                <!--<div class=\"col-lg-3 text-right p-0 nobile-position\"style=\" margin-left: -30px;\">-->
                <div class=\"shopping-bag\">
                    <a class=\"cart\" href=\"#\"><i class=\"fa fa-shopping-bag\" ></i><span>0</span></a>
                </div>
                <a href=\"connexion.html\" class=\"btn btn-3\" style=\"margin-bottom: 50px;\">Connexion</a>
                <div class=\"search-dropdown\">
                    <button type=\"button\" class=\"icon-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" >
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <form class=\"dropdown-menu dropdown-menu-right\">
                        <input class=\"search-input \" name=\"search\" placeholder=\"Search \" aria-label=\"Search \">
                        <button class=\"search-btn \" type=\"submit\"><i class=\"fas fa-search \"></i>  </button>
                    </form>
                    <!-- </div>-->

                </div>
            </div>
        </div>
    </nav>
    <!-- End Top Menu -->
</header>
<!-- =====>> End Top Menu <<=====
=========================== -->

<!-- ===========================
=====>> Hero <<===== -->
<section id=\"Home-area\" class=\"header3\">
    <div class=\"fullslider3 owl-carousel owl-theme \">
        <!-- slider item -->
        <div class=\"item slider-bg-5\">
            <div class=\"container \">
                <div class=\"row \">
                    <div class=\"col-lg-8 offset-lg-2 text-center dis-tab \">
                        <div class=\"slider2-all-text \">
                            <h1><span>DECOUVREZ</span> CE QUI SE CACHE DERRIERE <span>VOTRE CORPS</span></h1>
                            <p>LIBÉREZ VOS PEURS, LIBÉREZ VOTRE ESPRIT, SENTEZ VOTRE CORPS</p>
                            <a href=\"membre.html\" class=\"btn btn-1\">DEVENIR MEMBRE <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider item -->
        <div class=\"item slider-bg-2\">
            <div class=\"container \">
                <div class=\"row \">
                    <div class=\"col-lg-8 offset-lg-2 text-center dis-tab\">
                        <div class=\"slider2-all-text \">
                            <h1><span>DEVENIR</span> VOTRE VERSION DE VOUS   <span>MÊME</span></h1>
                            <p></p>
                            <a href=\"#\" class=\"btn btn-1\">DEVENIR MEMBRE <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider item -->
        <div class=\"item slider-bg-3\">
            <div class=\"container \">
                <div class=\"row \">
                    <div class=\"col-lg-8 offset-lg-2 text-center dis-tab\">
                        <div class=\"slider2-all-text \">
                            <h1><span>DECOUVREZ</span> CE QUI SE CACHE DERRIERE <span>VOTRE CORPS</span></h1>
                            <p>LIBÉREZ VOS PEURS, LIBÉREZ VOTRE ESPRIT, SENTEZ VOTRE CORPS</p>
                            <a href=\"#\" class=\"btn btn-1\">DEVENIR MEMBRE <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Hero <<=====
=========================== -->

<!-- ===========================
=====>> TTM <<===== -->
<section id=\"about-area\" class=\"pt-150\" style=\"
    padding-top: 10px !important;
\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 \">
                <div class=\"about-left media\">
                    <div class=\"about-left-text\">
                        <h2>NOUS SOMMES Là POUR VOUS SOUTENIR</h2>
                    </div>
                    <div class=\"about-left-img\">
                        <br><br>  <br><br>  <br><br>
                        <img src=\"assets/img/about1 (1).jpg\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"about-right-text\">
                    <div class=\"section-title text-center\">
                        <h2>GYM-<span style=\"-webkit-text-stroke: 1px black;\">CONNECT</span> </h2>

                    </div>
                    <p>GYM-CONNECT est le premier service en Tunisie de coaching sportif en ligne. Avec nos meilleurs coachs de la Tunisie, vous aurez un programme sur mesure accesible ou vous soyez que ce soit au bureau, à la maison, dans un parc, etc..</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=\"feature-area\" class=\"pt-100 pb-150\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Feature Item -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-item media mt-50\">
                    <div class=\"feature-i\">
                        <i class=\"flaticon-dumbbell-1\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h3>+500H videos</h3>
                        <p>Vous trouvez des videos d'exercices mise en ligne par vos coachs adapté à vos programmes choisis . </p>
                    </div>
                </div>
            </div>
            <!-- Feature Item -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-item media mt-50\">
                    <div class=\"feature-i\">
                        <i class=\"flaticon-clock\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h3>Ouvert 24/7</h3>
                        <p>Tout nos coachs sont disponibles pour vous à tout moments pour vous accompagner durant votre programme. </p>
                    </div>
                </div>
            </div>
            <!-- Feature Item -->
            <div class=\"col-lg-4 offset-lg-0 col-md-6 offset-md-3\">
                <div class=\"feature-item media mt-50\">
                    <div class=\"feature-i\">
                        <i class=\"flaticon-juice\"></i>
                    </div>
                    <div class=\"feature-text\">
                        <h3>Nutrition</h3>
                        <p>Plus de 100 recettes nutritifs et des regimes alimntaires adapté selon votre taille d'IMC, avec un suivi par vos coachs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====>> End About <<=====
=========================== -->




<!-- ===========================
=====>> Fitner <<===== -->
<section id=\"fitner-area\" class=\"pt-150\" style=\"
    padding-top: 10px !important;
\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"section-title text-center\">
                    <h2>POURQUOI CHOISIR GYM-<span style=\"-webkit-text-stroke: 1px black;\">CONNECT</span> </h2>

                </div>
            </div>
        </div>
        <div class=\"fitner-content pt-40 \">
            <div class=\"row \">
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <!-- fitner item -->
                    <div class=\"fitner-item fitner-border mt-40\">
                        <img src=\"assets/img/icon/1.png\" alt=\" \">
                        <h2> DES COACHS PROFESSIONNELS </h2>
                        <p>Plus de 200 coachs sont disponible a votre dispotion pour vous guider tout au long de votre parcours </p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <!-- fitner item -->
                    <div class=\"fitner-item fitner-border mt-40\">
                        <img src=\"assets/img/icon/2.png\" alt=\" \">
                        <h2>UN PROGRAMME EVOLUITIF ET PERSONnALISé </h2>
                        <p>Vous avez la possibilité de choisir parmi nos quatre programmes sportifs </p>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3\">
                    <!-- fitner item -->
                    <div class=\"fitner-item mt-40\">
                        <img src=\"assets/img/icon/3.png\" alt=\" \">
                        <h2>Un suivis complet de vos progrèt</h2>
                        <p>Over 50 group training sessions per week There is no one type or way in our diverse community. Come as you are!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Fitner <<=====
=========================== -->

<!-- ===========================
=====>> Services <<===== -->
<section id=\"services-area\" class=\"pt-150\">
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1 \">
                <div class=\"section-title text-center \">
                    <h2>NOS PROGRAMMES <span>SPORTIFS</span></h2>
                    <p>BOUGEZ-VOUS! Avec des coachs de sport conçue autour de vous, nous pensons

                        <br> vous allez adorer ici.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"service-content pt-40 \">
        <div class=\"container-fluid \">
            <div class=\"row \">
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s1.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-male-silhouette-variant-showing-muscles \"></i>
                                <h3>YOGA</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-male-silhouette-variant-showing-muscles \"></i>
                            <h3>YOGA</h3>
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s2.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-male-arm-muscles \"></i>
                                <h3>MUSCULATION</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-male-arm-muscles \"></i>
                            <h3>MUSCULATION</h3>
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s3.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-calories \"></i>
                                <h3>CARDIO</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community. </p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-calories \"></i>
                            <h3>CARDIO</h3>
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"services-box effect-item mt-40\">
                        <div class=\"services-item content-overlay\">
                            <img src=\"assets/img/services/s4.jpg\" alt=\" \">
                            <div class=\"content-details fadeIn-top\">
                                <i class=\"flaticon-treadmill \"></i>
                                <h3>CROSSFIT</h3>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"services-text text-center\">
                            <i class=\"flaticon-treadmill \"></i>
                            <h3>CROSSFIT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Services <<=====
=========================== -->


<!-- ===========================
=====>> Pricing <<===== -->
<section id=\"pricing-area\" class=\"pt-150\">
    <div class=\"container \">
        <div class=\"row \">
            <div class=\"col-lg-8 offset-lg-2 \">
                <div class=\"section-title text-center \">
                    <h2>TARIFS DES <span>ABONNEMENTS </span></h2>
                    <p>Kick your feet up! With a gym designed around you, we think
                        <br> you’ll love it here.</p>
                </div>
            </div>
        </div>
        <div class=\"pricing-content pt-40\">
            <div class=\"row\">
                <!-- Pricing Item -->
                <div class=\"col-lg-6 mt-40\">
                    <div class=\"pricing-item media\">
                        <div class=\"pricing-item-left\">
                            <ul>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">CLASSIC MEMBERSHIP </h3>
                                </li>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">BASIC PLAN </h3>
                                    <h6 class=\"pricing-item-left-h6\">Spend ten, get tons</h6>
                                </li>
                                <li>
                                    <h2 class=\"pricing-item-left-h2\">\$10 /mo</h2>
                                    <p class=\"pricing-item-left-p\">plus taxes and fees</p>
                                </li>
                            </ul>
                        </div>
                        <div class=\"pricing-item-right\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Unlimited Access to Home Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free Fitness Training</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free training session with a Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Over 116 free group fitness classes</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free functional movement screen</a></li>
                            </ul>
                            <a href=\"# \" class=\"btn btn-3\">COMMENCEZ</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item -->
                <div class=\"col-lg-6 mt-40\">
                    <div class=\"pricing-item media pricing-item-bgc\">
                        <div class=\"pricing-item-left pricing-right\">
                            <ul>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">CLASSIC MEMBERSHIP </h3>
                                </li>
                                <li>
                                    <h3 class=\"pricing-item-left-h3\">BASIC PLAN </h3>
                                    <h6 class=\"pricing-item-left-h6\">Spend ten, get tons</h6>
                                </li>
                                <li>
                                    <h2 class=\"pricing-item-left-h2\">\$10 /mo</h2>
                                    <p class=\"pricing-item-left-p\">plus taxes and fees</p>
                                </li>
                            </ul>
                        </div>
                        <div class=\"pricing-item-right pricing-right\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Unlimited Access to Home Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free Fitness Training</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free training session with a Club</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Over 116 free group fitness classes</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-check-circle \"></i> Free functional movement screen</a></li>
                            </ul>
                            <a href=\"# \" class=\"btn btn-4\">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Pricing <<=====
=========================== -->

<!-- ===========================
=====>> Feature <<===== -->

<!-- =====>> End Feature <<=====
=========================== -->

<!-- ===========================
=====>> Testimonial <<===== -->
<section id=\"testimonial-area\" class=\"testimonial-home1 pt-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-left\">
                    <h2> <span>ça à marcher pour eux !</span></h2>

                </div>
            </div>
        </div>
        <div class=\"testimonial-content pt-40\">
            <div class=\"row\">
                <!-- Testimonial Item -->
                <div class=\"col-lg-6\">
                    <div class=\"testimonial-item mt-40\">
                        <img src=\"assets/img/testimonial/1.jpg\" alt=\"\">
                        <div class=\"testimonial-text\">
                            <h3>“Mes meilleurs jours on commencé ici!”</h3>
                            <a class=\"video-play-button \" href=\"https://www.youtube.com/watch?v=ZoZSp-wy8h8\">
                                <i class=\"flaticon-play-button \"></i>
                                <span>play</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <div class=\"col-lg-6\">
                    <div class=\"testimonial-item mt-40\">
                        <img src=\"assets/img/testimonial/2.jpg\" alt=\"\">
                        <div class=\"testimonial-text\">
                            <h3>“Meilleur endroit pour maigrir et avoir un beau corps”</h3>
                            <a class=\"video-play-button \" href=\"https://www.youtube.com/watch?v=ZoZSp-wy8h8\">
                                <i class=\"flaticon-play-button \"></i>
                                <span>play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Testimonial <<=====
=========================== -->


<!-- ===========================
=====>> Fitner Classes <<===== -->
<section id=\"fitner-classes-area\" class=\"pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-12\">
                <div class=\"section-title text-center\">
                    <h2>programmes GYM-<span     style=\"-webkit-text-stroke: 1px black;\"\">CONNECT</span></h2>
                </div>
            </div>
        </div>
        <div class=\"fitner-classes-content pt-50\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"fitner-classes-tab\">
                        <!-- tab nav -->
                        <ul class=\"classes-tabs classes-tab-btn\">
                            <li class=\"tab-link current\" data-tab=\"tab-2\">PROGRAMME</li>
                            <li class=\"tab-link\" data-tab=\"tab-2\">YOGA</li>
                            <li class=\"tab-link\" data-tab=\"tab-3\">MUSCULATION</li>
                            <li class=\"tab-link\" data-tab=\"tab-4\">CARDIO</li>
                            <li class=\"tab-link\" data-tab=\"tab-5\">CROSSFIT</li>
                        </ul>

                        <!-- tab 1 -->
                        <div id=\"tab-1\" class=\"tab-content current\">
                            <div class=\"fitner-tab-all\">
                                <h5>Lundi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>Mardi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>Mercredi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>Jeudi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>Vendredi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>samedi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>dimanche</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 2 -->
                        <div id=\"tab-2\" class=\"tab-content \">
                            <div class=\"fitner-tab-all\">
                                <h5>Lundi</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>Mardi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>Mercredi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>Jeudi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>Vendredi</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>Samedi</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>Dimanche</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 3 -->
                        <div id=\"tab-3\" class=\"tab-content\">
                            <div class=\"fitner-tab-all\">
                                <h5>sunday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>monday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>tuesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>wednesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>thursday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>friday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>saturday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 4 -->
                        <div id=\"tab-4\" class=\"tab-content \">
                            <div class=\"fitner-tab-all\">
                                <h5>sunday</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>monday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>tuesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>wednesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>thursday</h5>
                                <ul>
                                    <li></li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>friday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>saturday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab 5 -->
                        <div id=\"tab-5\" class=\"tab-content\">
                            <div class=\"fitner-tab-all\">
                                <h5>sunday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-2 fitner-tab-all\">
                                <h5>monday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-3 fitner-tab-all\">
                                <h5>tuesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-4 fitner-tab-all\">
                                <h5>wednesday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-5 fitner-tab-all\">
                                <h5>thursday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-6 fitner-tab-all\">
                                <h5>friday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                            <div class=\"fitner-tab-7 fitner-tab-all\">
                                <h5>saturday</h5>
                                <ul>
                                    <li><span>aerobic</span>9:0am-11:0am</li>
                                    <li><span>wet loss</span>11:0am-01:0am</li>
                                    <li><span>fitness</span>9:0am-11:0am</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- =====>> End Fitner classes <<=====
=========================== -->

<!-- ===========================
=====>> Bmi <<===== -->
<section id=\"bmi-area\" class=\"bmi-bg parallax pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-left\">
                    <h2>calculer votre <span>imc</span></h2>
                    <p>L'indice de masse corporelle (IMC) est une mesure de la graisse corporelle basée sur la taille et le poids qui s'applique aux hommes et aux femmes adultes. </p>
                </div>
            </div>
        </div>
        <div class=\"bmi-calculus-content pt-30\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <form class=\"bmi-calculator row mt-50\">
                        <div class=\"col-md-6 form-group\">
                            <input type=\"number\" placeholder=\"Hauteur\">
                        </div>
                        <div class=\"col-md-6 form-group\">
                            <input type=\"number\" placeholder=\"Largeur\">
                        </div>
                        <div class=\"col-md-12 checkbox-wrapper d-flex\">
                            <div class=\"checkbox-item\">
                                <input type=\"radio\" id=\"c1\" name=\"ticket-type\">
                                <label for=\"c1\">Unités métriques</label>
                            </div>
                            <div class=\"checkbox-item\">
                                <input type=\"radio\" id=\"c2\" name=\"ticket-type\">
                                <label for=\"c2\">Unités impériales
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-12 form-group\">
                            <button class=\"btn btn-1\" type=\"submit\">Calculez maintenant</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"bmi-rate-status-content mt-50\">
                        <li>
                            <div class=\"bmi-rate\"> IMC </div>
                            <div class=\"bmi-status\"> Largeur Status </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> Moins 18 </div>
                            <div class=\"bmi-status\"> Sous poids </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> 18.5 - 24.9 </div>
                            <div class=\"bmi-status\"> Normale </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> 25 - 29.9 </div>
                            <div class=\"bmi-status\"> Sur poids </div>
                        </li>
                        <li>
                            <div class=\"bmi-rate\"> 30 et plus </div>
                            <div class=\"bmi-status\"> Obése </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Bmi <<=====
    =========================== -->

<!-- ===========================
=====>> Team <<===== -->
<section id=\"team-area\" class=\"pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"section-title text-center\">
                    <h2>NOTRE EQUIPE DE <span >COACHS</span ></h2>

                </div>
            </div>
        </div>
        <div class=\"team-content pt-40\">
            <div class=\"row\">
                <!-- team item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"team-box effect-item mt-40\">
                        <div class=\"team-item content-overlay\">
                            <img src=\"../public/assets/img/team/1.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"team-title text-center\">
                            <h3><a href=\"#\">Arial hedger</a></h3>
                            <p>Fitness & Body</p>
                        </div>
                    </div>
                </div>
                <!-- team item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"team-box effect-item mt-40\">
                        <div class=\"team-item content-overlay\">
                            <img src=\"assets/img/team/2.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"team-title text-center\">
                            <h3><a href=\"#\">marina aring</a></h3>
                            <p>Fitness & Body</p>
                        </div>
                    </div>
                </div>
                <!-- team item -->
                <div class=\"col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3\">
                    <div class=\"team-box effect-item mt-40\">
                        <div class=\"team-item content-overlay\">
                            <img src=\"assets/img/team/3.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                </ul>
                                <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                            </div>
                        </div>
                        <div class=\"team-title text-center\">
                            <h3><a href=\"#\">alan lynda</a></h3>
                            <p>Fitness & Body</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =====>> End Team <<=====
=========================== -->

<!-- ===========================
=====>> Cta <<===== -->
<section id=\"cta-area\" class=\"cta-bg1 pt-80 pb-80\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"cta-left\">
                    <h2>Offre du Decembre </h2>
                    <p>2 mois de reduction <span>\$39.95/</span> pour les couples</p>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"cta-btn \">
                    <a href=\"contact.html\" class=\"btn btn-1\">Contactez nous</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Cta <<=====
=========================== -->

<!-- ===========================
=====>> Blog <<===== -->
<section id=\"blog-area\" class=\"pt-150 pb-150\">
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-lg-12\">
                <div class=\"section-title text-center\">
                    <h2>blog<span style=\"-webkit-text-stroke: 1px black;\">hub</span></h2>
                </div>
            </div>
        </div>
        <div class=\"row pt-50\">
            <div class=\"col-lg-8\">
                <!-- Blog item -->
                <div class=\"blog-item row\">
                    <div class=\"col-lg-6 col-md-6 p-0\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"../public/assets/img/blog/1.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 p-0\">
                        <div class=\"blog-text pl-4 pr-4\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-calendar-alt\"></i> 11 Dec 2018</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a></li>
                            </ul>
                            <h3 class=\"blog-title\"><a href=\"news.html\">Push your fitness further with our gym facilities</a></h3>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.</p>
                        </div>
                    </div>
                </div>
                <!-- Blog item -->
                <div class=\"blog-item row\">
                    <div class=\"col-lg-6 col-md-6 p-0 mobile-block\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"../public/assets/img/blog/2.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 p-0\">
                        <div class=\"blog-text pr-4\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-calendar-alt\"></i> 11 Dec 2018</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a></li>
                            </ul>
                            <h3 class=\"blog-title\"><a href=\"news.html\">Push your fitness further with our gym facilities</a></h3>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 p-0 desktop-block\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"../public/assets/img/blog/2.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <!-- Blog item -->
                <div class=\"blog-item row\">
                    <div class=\"col-lg-12 col-md-6 p-0\">
                        <div class=\"blog-img\">
                            <a href=\"news.html\"><img src=\"assets/img/blog/3.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-12 col-md-6 p-0\">
                        <div class=\"blog-text pl-4\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fas fa-calendar-alt\"></i> 11 Dec 2018</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a></li>
                            </ul>
                            <h3 class=\"blog-title\"><a href=\"news.html\">Push your fitness further with our gym facilities</a></h3>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community Alienum phaedrum torquatos nec eu.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====>> End Blog <<=====
=========================== -->



<!-- ===========================
=====>> Footer <<===== -->
<footer id=\"footer-area\" class=\"pt-100 pb-150\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 pt-50\">
                <div class=\"footer-item\">
                    <a href=\"#\" class=\"footer-logo-img\"><img style=\"width: 300px;\" src=\"assets/img/hero/GYM-CONNECT.png\" alt=\"\"></a>
                    <p>Notre commité est de fournir un service honnête, amical et ponctuel. </p>

                </div>
            </div>
            <div class=\"col-lg-2 offset-lg-1 col-md-4 pt-50\">
                <div class=\"footer-item\">
                    <h6>Liens</h6>
                    <ul>
                        <li><a href=\"index-1.html\"><i class=\"fas fa-angle-right\"></i> Acceuil</a></li>

                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Nos Coachs</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Boutique</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Forum</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-4 pt-50\">
                <div class=\"footer-item\">
                    <h6>Nos Services</h6>
                    <ul>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Yoga </a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Cardio</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> CrossFit</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-angle-right\"></i> Musculation</a></li>

                    </ul>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 pt-50\">
                <div class=\"footer-item\">
                    <h6>Contactez nous </h6>
                    <ul class=\"media\">
                        <li><i class=\"fas fa-map-marker-alt\"></i></li>
                        <li><a target=\"_blank\" href=\"\">Tunis,TUNISIE</a></li>

                    </ul>
                    <ul class=\"media\">
                        <li><i class=\"fas fa-phone-volume\"></i></li>
                        <li><a href=\"#\">+216 71 234 567</a></li>
                    </ul>
                    <ul class=\"media\">
                        <li><i class=\"fas fa-envelope\"></i></li>
                        <li><a href=\"#\">GYM-CONNECT@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"copy-right\">  © Tous droits résevés 2020.
                    </a> </div>
            </div>
        </div>
    </div>
</footer>
<!-- =====>> End Footer <<=====
=========================== -->



<script src=\"{{ asset('assets/js/jquery-3.3.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugins.js') }}\"></script>
<script src=\"{{ asset('assets/js/menu.js') }}\"></script>
<script src=\"{{ asset('assets/js/scroll-slider.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.parallax-1.1.3.js') }}\"></script>
<script src=\"{{ asset('assets/js/typing.js') }}\"></script>
<script src=\"{{ asset('assets/js/contact.js') }}\"></script>
<script src=\"{{ asset('assets/js/script.js') }}\"></script>

</body>


<!-- Mirrored from raistheme.com/html/fitner/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:23 GMT -->
</html>", "base-front.html.twig", "C:\\Users\\Endezoumou Bryan\\FirstProject\\templates\\base-front.html.twig");
    }
}
