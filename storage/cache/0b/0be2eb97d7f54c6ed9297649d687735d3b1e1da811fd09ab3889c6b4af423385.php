<?php

/* default/template/extension/module/product_by_categories.twig */
class __TwigTemplate_7129841f3ba856e5814da66492fdfb0f674f3dfb00bc66515c0ce91f5335a8c0 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div id=\"product-tabs-slider\" class=\"scroll-tabs outer-top-vs wow fadeInUp\">
    <div class=\"more-info-tab clearfix \">
        <h3 class=\"new-product-title pull-left\">";
            // line 4
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3>
        <ul class=\"nav nav-tabs nav-tab-line pull-right\" id=\"new-products-1\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 7
                echo "                <li ";
                if (($context["key"] == 0)) {
                    echo "class=\"active\"";
                }
                echo "><a data-transition-type=\"backSlide\" href=\"#product-by-category-";
                echo $context["key"];
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
        <!-- /.nav-tabs -->
    </div>
    <div class=\"tab-content outer-top-xs\">
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 14
                echo "        <div class=\"tab-pane in ";
                if (($context["key"] == 0)) {
                    echo "active";
                }
                echo "\" id=\"product-by-category-";
                echo $context["key"];
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\">
            <div class=\"product-slider\">
                ";
                // line 16
                if ($this->getAttribute($context["category"], "products", array())) {
                    // line 17
                    echo "                <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\">
                    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 19
                        echo "                        <div class=\"item item-carousel\">
                            <div class=\"products\">
                                <div class=\"product\">
                                    <div class=\"product-image\">
                                        <div class=\"image\">
                                            <a href=\"";
                        // line 24
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\"><img  src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"></a> </div>
                                        <!-- /.image -->
                                    </div>
                                    <!-- /.product-image -->
                                    <div class=\"product-info text-left\">
                                        <h3 class=\"name\"><a href=\"";
                        // line 29
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></h3>
                                        <div class=\"description\"></div>
                                        <div class=\"product-price\">
                                            ";
                        // line 32
                        if ($this->getAttribute($context["product"], "price", array())) {
                            // line 33
                            echo "                                                ";
                            if ( !$this->getAttribute($context["product"], "special", array())) {
                                // line 34
                                echo "                                                    <span class=\"price\"> ";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo " </span>
                                                ";
                            } else {
                                // line 36
                                echo "                                                    <span class=\"price\">";
                                echo $this->getAttribute($context["product"], "special", array());
                                echo "</span>
                                                    <span class=\"price-before-discount\">";
                                // line 37
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "</span>
                                                ";
                            }
                            // line 39
                            echo "                                            ";
                        }
                        // line 40
                        echo "                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-info -->
                                    <div class=\"cart clearfix animate-effect\">
                                        <div class=\"action\">
                                            <ul class=\"list-unstyled\">
                                                <li class=\"add-cart-button btn-group\">
                                                    <button onclick=\"cart.add('";
                        // line 48
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                </li>
                                                <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                        // line 50
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" title=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                        // line 51
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
                        <!-- /.item -->
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                    <!-- /.item -->
                </div>
                ";
                }
                // line 68
                echo "            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.tab-pane -->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "    </div>
    <!-- /.tab-content -->
</div>
<!-- /.scroll-tabs -->
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/product_by_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 73,  181 => 68,  176 => 65,  154 => 51,  148 => 50,  141 => 48,  131 => 40,  128 => 39,  123 => 37,  118 => 36,  112 => 34,  109 => 33,  107 => 32,  99 => 29,  87 => 24,  80 => 19,  76 => 18,  73 => 17,  71 => 16,  60 => 14,  56 => 13,  50 => 9,  34 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">*/
/*     <div class="more-info-tab clearfix ">*/
/*         <h3 class="new-product-title pull-left">{{ heading_title }}</h3>*/
/*         <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">*/
/*             {% for key, category in categories %}*/
/*                 <li {% if key == 0 %}class="active"{% endif %}><a data-transition-type="backSlide" href="#product-by-category-{{ key }}{{ category.category_id }}" data-toggle="tab">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <!-- /.nav-tabs -->*/
/*     </div>*/
/*     <div class="tab-content outer-top-xs">*/
/*     {% for key, category in categories %}*/
/*         <div class="tab-pane in {% if key == 0 %}active{% endif %}" id="product-by-category-{{ key }}{{ category.category_id }}">*/
/*             <div class="product-slider">*/
/*                 {% if category.products %}*/
/*                 <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">*/
/*                     {% for product in category.products %}*/
/*                         <div class="item item-carousel">*/
/*                             <div class="products">*/
/*                                 <div class="product">*/
/*                                     <div class="product-image">*/
/*                                         <div class="image">*/
/*                                             <a href="{{ product.href }}"><img  src="{{ product.thumb }}" alt="{{ product.name }}"></a> </div>*/
/*                                         <!-- /.image -->*/
/*                                     </div>*/
/*                                     <!-- /.product-image -->*/
/*                                     <div class="product-info text-left">*/
/*                                         <h3 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h3>*/
/*                                         <div class="description"></div>*/
/*                                         <div class="product-price">*/
/*                                             {% if product.price %}*/
/*                                                 {% if not product.special %}*/
/*                                                     <span class="price"> {{ product.price }} </span>*/
/*                                                 {% else %}*/
/*                                                     <span class="price">{{ product.special }}</span>*/
/*                                                     <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                         <!-- /.product-price -->*/
/*                                     </div>*/
/*                                     <!-- /.product-info -->*/
/*                                     <div class="cart clearfix animate-effect">*/
/*                                         <div class="action">*/
/*                                             <ul class="list-unstyled">*/
/*                                                 <li class="add-cart-button btn-group">*/
/*                                                     <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                 </li>*/
/*                                                 <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                 <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <!-- /.action -->*/
/*                                     </div>*/
/*                                     <!-- /.cart -->*/
/*                                 </div>*/
/*                                 <!-- /.product -->*/
/* */
/*                             </div>*/
/*                             <!-- /.products -->*/
/*                         </div>*/
/*                         <!-- /.item -->*/
/*                     {% endfor %}*/
/*                     <!-- /.item -->*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <!-- /.product-slider -->*/
/*         </div>*/
/*         <!-- /.tab-pane -->*/
/*     {% endfor %}*/
/*     </div>*/
/*     <!-- /.tab-content -->*/
/* </div>*/
/* <!-- /.scroll-tabs -->*/
/* {% endif %}*/
