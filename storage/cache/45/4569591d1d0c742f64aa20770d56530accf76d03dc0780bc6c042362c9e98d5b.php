<?php

/* default/template/extension/module/featured.twig */
class __TwigTemplate_9eb961eb7f36ab12738df4e1d2535dd67a2176660ac0b6b73dd1eb73df4fe904 extends Twig_Template
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
        echo "<section class=\"section featured-product wow fadeInUp\">
    <h3 class=\"section-title\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "        <div class=\"item item-carousel\">
            <div class=\"products\">
                <div class=\"product\">
                    <div class=\"product-image\">
                        <div class=\"image\">
                            <a href=\"";
            // line 10
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"
                                                              title=\"";
            // line 11
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\"/></a>
                        </div>
                        <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                    <div class=\"product-info text-left\">
                        <h3 class=\"name\"><a href=\"";
            // line 17
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h3>
                        <div class=\"description\"></div>
                        <div class=\"product-price\">
                            ";
            // line 20
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 21
                echo "                                ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 22
                    echo "                                    <span class=\"price\"> ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
                                ";
                } else {
                    // line 24
                    echo "                                    <span class=\"price\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>
                                    <span class=\"price-before-discount\">";
                    // line 25
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                                ";
                }
                // line 27
                echo "                            ";
            }
            // line 28
            echo "                        </div>
                        <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class=\"cart clearfix animate-effect\">
                        <div class=\"action\">
                            <ul class=\"list-unstyled\">
                                <li class=\"add-cart-button btn-group\">
                                    <button onclick=\"cart.add('";
            // line 36
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                </li>
                                <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
            // line 38
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" title=\"";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
            // line 39
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" title=\"";
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\"> <i class=\"fa fa-signal\" aria-hidden=\"true\"></i> </a> </li>
                            </ul>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
                <!-- /.product -->

            </div>
            <!-- /.products -->
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
    <!-- /.home-owl-carousel -->
</section>
<!-- /.section -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  110 => 39,  104 => 38,  97 => 36,  87 => 28,  84 => 27,  79 => 25,  74 => 24,  68 => 22,  65 => 21,  63 => 20,  55 => 17,  46 => 11,  38 => 10,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <section class="section featured-product wow fadeInUp">*/
/*     <h3 class="section-title">{{ heading_title }}</h3>*/
/*     <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">*/
/*         {% for product in products %}*/
/*         <div class="item item-carousel">*/
/*             <div class="products">*/
/*                 <div class="product">*/
/*                     <div class="product-image">*/
/*                         <div class="image">*/
/*                             <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}"*/
/*                                                               title="{{ product.name }}" class="img-responsive"/></a>*/
/*                         </div>*/
/*                         <!-- /.image -->*/
/*                     </div>*/
/*                     <!-- /.product-image -->*/
/*                     <div class="product-info text-left">*/
/*                         <h3 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h3>*/
/*                         <div class="description"></div>*/
/*                         <div class="product-price">*/
/*                             {% if product.price %}*/
/*                                 {% if not product.special %}*/
/*                                     <span class="price"> {{ product.price }} </span>*/
/*                                 {% else %}*/
/*                                     <span class="price">{{ product.special }}</span>*/
/*                                     <span class="price-before-discount">{{ product.price }}</span>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <!-- /.product-price -->*/
/*                     </div>*/
/*                     <!-- /.product-info -->*/
/*                     <div class="cart clearfix animate-effect">*/
/*                         <div class="action">*/
/*                             <ul class="list-unstyled">*/
/*                                 <li class="add-cart-button btn-group">*/
/*                                     <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                 </li>*/
/*                                 <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                 <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <!-- /.action -->*/
/*                     </div>*/
/*                     <!-- /.cart -->*/
/*                 </div>*/
/*                 <!-- /.product -->*/
/* */
/*             </div>*/
/*             <!-- /.products -->*/
/*         </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <!-- /.home-owl-carousel -->*/
/* </section>*/
/* <!-- /.section -->*/
