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

/* front/shop.html.twig */
class __TwigTemplate_8dbb99826dfdcb763aded09f33b5a16d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/shop.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from raistheme.com/html/fitner/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:37 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>GYM-CONNECT</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type=\"png\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">


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
                        <div class=\"logo\" >
                            <a href=\"acceuil.html\"><img src=\"../../public/assets/img/logo FitHUb.png\" alt=\"logo\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-7 col-md-12\">
                        <div id=\"head-mobile\"></div>
                        <div class=\"button\"></div>
                        <ul class=\"navbar-nav\">
                            <!--<li><a href=\"acceuil.html\">Acceuil</a>
                             
                            </li>
                            -->
                            <li><a href=\"#\">Nos Coachs</a>
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
                        <a href=\"connexion.html\" class=\"btn btn-3\" style=\"margin-top:10px;\">Connexion</a>
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
    =====>> Page Hero <<===== -->
    <section id=\"page-hero\" class=\"about-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"page-title text-center\">
                        <h1>fitner <span>shop</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Shop <<===== -->
    <section id=\"shop-area\" class=\"shop-gallery pt-100 pb-150\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/1.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Skip Rope</a></h3>
                            <p>\$5</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/2.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">White Surface</a></h3>
                            <p>\$50</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/3.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Blue Surface</a></h3>
                            <p>\$120</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/1.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Skip Rope</a></h3>
                            <p>\$5</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/2.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">White Surface</a></h3>
                            <p>\$50</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/3.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Blue Surface</a></h3>
                            <p>\$120</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Shop <<===== 
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
    =====>> Footer <<===== -->
    <footer id=\"footer-area\" class=\"pt-100 pb-150\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 pt-50\">
                    <div class=\"footer-item\">
                        <a href=\"#\" class=\"footer-logo-img\"><img style=\"width: 300px;\" src=\"../../public/assets/img/logo FitHUb.png\" alt=\"\"></a>
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
                            <li><a href=\"#\">Fithub1@gmail.com</a></li>
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
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scroll-slider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/typing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>




</body>


<!-- Mirrored from raistheme.com/html/fitner/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:37 GMT -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 393,  472 => 392,  468 => 391,  464 => 390,  460 => 389,  456 => 388,  452 => 387,  448 => 386,  444 => 385,  440 => 384,  71 => 18,  67 => 17,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from raistheme.com/html/fitner/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:37 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>GYM-CONNECT</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type=\"png\">
    <link rel=\"stylesheet\" href=\"{{ asset ('assets/font/flaticon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/bootstrap.min.css')}}\">

    <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/style.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/responsive.css')}}\">


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
                        <div class=\"logo\" >
                            <a href=\"acceuil.html\"><img src=\"../../public/assets/img/logo FitHUb.png\" alt=\"logo\"></a>
                        </div>
                    </div>
                    <div class=\"col-lg-7 col-md-12\">
                        <div id=\"head-mobile\"></div>
                        <div class=\"button\"></div>
                        <ul class=\"navbar-nav\">
                            <!--<li><a href=\"acceuil.html\">Acceuil</a>
                             
                            </li>
                            -->
                            <li><a href=\"#\">Nos Coachs</a>
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
                        <a href=\"connexion.html\" class=\"btn btn-3\" style=\"margin-top:10px;\">Connexion</a>
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
    =====>> Page Hero <<===== -->
    <section id=\"page-hero\" class=\"about-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"page-title text-center\">
                        <h1>fitner <span>shop</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Shop <<===== -->
    <section id=\"shop-area\" class=\"shop-gallery pt-100 pb-150\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/1.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Skip Rope</a></h3>
                            <p>\$5</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/2.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">White Surface</a></h3>
                            <p>\$50</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/3.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Blue Surface</a></h3>
                            <p>\$120</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/1.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Skip Rope</a></h3>
                            <p>\$5</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/2.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">White Surface</a></h3>
                            <p>\$50</p>
                        </div>
                    </div>
                </div>
                <!-- Shop Item -->
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"shop-box effect-item pt-50\">
                        <div class=\"shop-item position-relative content-overlay\">
                            <img src=\"../../public/assets/img/shop/3.jpg\" alt=\"\">
                            <div class=\"content-details fadeIn-top\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a></li>
                                    <li><a href=\"#\" title=\"White Surface\"><i class=\"fas fa-search\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"shop-title text-center\">
                            <h3><a href=\"shop-single.html\">Blue Surface</a></h3>
                            <p>\$120</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Shop <<===== 
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
    =====>> Footer <<===== -->
    <footer id=\"footer-area\" class=\"pt-100 pb-150\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 pt-50\">
                    <div class=\"footer-item\">
                        <a href=\"#\" class=\"footer-logo-img\"><img style=\"width: 300px;\" src=\"../../public/assets/img/logo FitHUb.png\" alt=\"\"></a>
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
                            <li><a href=\"#\">Fithub1@gmail.com</a></li>
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


<!-- Mirrored from raistheme.com/html/fitner/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:37 GMT -->
</html>", "front/shop.html.twig", "C:\\Users\\Endezoumou Bryan\\FirstProject\\templates\\front\\shop.html.twig");
    }
}
