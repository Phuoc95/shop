<?php

/* default/template/common/header.twig */
class __TwigTemplate_52930eb5ff52efebc7c128f67e4be0cc55e4f68ebfe6bf306b119c97cb500008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]>
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 8
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
    <base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
    ";
        // line 16
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 17
            echo "        <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
    ";
        }
        // line 19
        echo "    ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 20
            echo "        <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
    ";
        }
        // line 22
        echo "    <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/bootstrap.min.css\">
    <!-- Customizable CSS -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/main.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/blue.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/owl.transitions.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/rateit.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/bootstrap-select.min.css\">
    <!-- Icons/Glyphs -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/default/assets/css/font-awesome.css\">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "        <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "        <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "        <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 51
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</head>
<body class=\"cnt-home\">
<!-- ============================================== HEADER ============================================== -->
<header class=\"header-style-1\">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class=\"top-bar animate-dropdown\">
        <div class=\"container\">
            <div class=\"header-top-inner\">
                <div class=\"cnt-account\">
                    <ul class=\"list-unstyled\">
                        ";
        // line 63
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 64
            echo "                            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\"><i class=\"icon fa fa-user\"></i> ";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 65
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\"><i class=\"icon fa fa-check\"></i> ";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 66
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\"><i class=\"icon fa fa-check\"></i> ";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 67
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\"><i class=\"icon fa fa-check\"></i> ";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 68
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"icon fa fa-lock\"></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                        ";
        } else {
            // line 70
            echo "                            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 71
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                        ";
        }
        // line 73
        echo "                        <li><a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> ";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
                        <li><a href=\"";
        // line 74
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</a></li>
                        <li><a href=\"";
        // line 75
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> ";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
                    </ul>
                </div>
                <!-- /.cnt-account -->
                <div class=\"cnt-block\">
                    <ul class=\"list-unstyled list-inline\">
                        ";
        // line 81
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
                        ";
        // line 82
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class=\"clearfix\"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class=\"main-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-3 logo-holder\">
                    <div class=\"logo\">
                    ";
        // line 100
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 101
            echo "                    <a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"
                                                           alt=\"";
            // line 102
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\"/>
                        </a>
                    ";
        } else {
            // line 105
            echo "                        <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
                    ";
        }
        // line 107
        echo "                    </div>
                </div>
                <!-- /.logo-holder -->
                <div class=\"col-xs-12 col-sm-12 col-md-7 top-search-holder\">
                    ";
        // line 111
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row\">
                    ";
        // line 114
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-header -->
    <!-- ============================================== NAVBAR ============================================== -->
    <div class=\"header-nav animate-dropdown\">
        <div class=\"container\">
            ";
        // line 125
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->
    </div>
    <!-- /.header-nav -->
</header>";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 125,  309 => 114,  303 => 111,  297 => 107,  289 => 105,  283 => 102,  274 => 101,  272 => 100,  251 => 82,  247 => 81,  234 => 75,  226 => 74,  217 => 73,  210 => 71,  203 => 70,  196 => 68,  190 => 67,  184 => 66,  178 => 65,  171 => 64,  169 => 63,  157 => 53,  148 => 51,  143 => 50,  132 => 48,  128 => 47,  125 => 46,  116 => 44,  111 => 43,  98 => 41,  94 => 40,  74 => 22,  68 => 20,  65 => 19,  59 => 17,  57 => 16,  53 => 15,  49 => 14,  38 => 8,  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{{ title }}</title>*/
/*     <base href="{{ base }}"/>*/
/*     {% if description %}*/
/*         <meta name="description" content="{{ description }}"/>*/
/*     {% endif %}*/
/*     {% if keywords %}*/
/*         <meta name="keywords" content="{{ keywords }}"/>*/
/*     {% endif %}*/
/*     <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/bootstrap.min.css">*/
/*     <!-- Customizable CSS -->*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/main.css">*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/blue.css">*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/owl.carousel.css">*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/owl.transitions.css">*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/animate.min.css">*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/rateit.css">*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/bootstrap-select.min.css">*/
/*     <!-- Icons/Glyphs -->*/
/*     <link rel="stylesheet" href="catalog/view/theme/default/assets/css/font-awesome.css">*/
/*     <!-- Fonts -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'*/
/*           rel='stylesheet' type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/*     {% for style in styles %}*/
/*         <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}"/>*/
/*     {% endfor %}*/
/*     {% for script in scripts %}*/
/*         <script src="{{ script }}" type="text/javascript"></script>*/
/*     {% endfor %}*/
/*     <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/*     {% for link in links %}*/
/*         <link href="{{ link.href }}" rel="{{ link.rel }}"/>*/
/*     {% endfor %}*/
/*     {% for analytic in analytics %}*/
/*         {{ analytic }}*/
/*     {% endfor %}*/
/* </head>*/
/* <body class="cnt-home">*/
/* <!-- ============================================== HEADER ============================================== -->*/
/* <header class="header-style-1">*/
/*     <!-- ============================================== TOP MENU ============================================== -->*/
/*     <div class="top-bar animate-dropdown">*/
/*         <div class="container">*/
/*             <div class="header-top-inner">*/
/*                 <div class="cnt-account">*/
/*                     <ul class="list-unstyled">*/
/*                         {% if logged %}*/
/*                             <li><a href="{{ account }}"><i class="icon fa fa-user"></i> {{ text_account }}</a></li>*/
/*                             <li><a href="{{ order }}"><i class="icon fa fa-check"></i> {{ text_order }}</a></li>*/
/*                             <li><a href="{{ transaction }}"><i class="icon fa fa-check"></i> {{ text_transaction }}</a></li>*/
/*                             <li><a href="{{ download }}"><i class="icon fa fa-check"></i> {{ text_download }}</a></li>*/
/*                             <li><a href="{{ logout }}"><i class="icon fa fa-lock"></i> {{ text_logout }}</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                         {% endif %}*/
/*                         <li><a href="{{ wishlist }}" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> {{ text_wishlist }}</a></li>*/
/*                         <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> {{ text_shopping_cart }}</a></li>*/
/*                         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> {{ text_checkout }}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.cnt-account -->*/
/*                 <div class="cnt-block">*/
/*                     <ul class="list-unstyled list-inline">*/
/*                         {{ currency }}*/
/*                         {{ language }}*/
/*                     </ul>*/
/*                     <!-- /.list-unstyled -->*/
/*                 </div>*/
/*                 <!-- /.cnt-cart -->*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*             <!-- /.header-top-inner -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </div>*/
/*     <!-- /.header-top -->*/
/*     <!-- ============================================== TOP MENU : END ============================================== -->*/
/*     <div class="main-header">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">*/
/*                     <div class="logo">*/
/*                     {% if logo %}*/
/*                     <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}"*/
/*                                                            alt="{{ name }}" class="img-responsive"/>*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*                     {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.logo-holder -->*/
/*                 <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">*/
/*                     {{ search }}*/
/*                 </div>*/
/*                 <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">*/
/*                     {{ cart }}*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </div>*/
/*     <!-- /.main-header -->*/
/*     <!-- ============================================== NAVBAR ============================================== -->*/
/*     <div class="header-nav animate-dropdown">*/
/*         <div class="container">*/
/*             {{ menu }}*/
/*             <!-- /.navbar-default -->*/
/*         </div>*/
/*         <!-- /.container-class -->*/
/*     </div>*/
/*     <!-- /.header-nav -->*/
/* </header>*/
