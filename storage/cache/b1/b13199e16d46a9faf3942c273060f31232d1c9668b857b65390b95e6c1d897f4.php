<?php

/* default/template/extension/module/special.twig */
class __TwigTemplate_37ba26626b1b01ad1a00ee896b80ea82c5baeb7d3b25baf8873cccdf36fd0f42 extends Twig_Template
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
        echo "<div class=\"sidebar-widget hot-deals wow fadeInUp outer-bottom-xs\">
    <h3 class=\"section-title\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    <div class=\"owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "            <div class=\"item\">
                <div class=\"products\">
                    <div class=\"hot-deal-wrapper\">
                        <div class=\"image\"><a href=\"";
            // line 8
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\"
                                                                             alt=\"";
            // line 9
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"
                                                                             title=\"";
            // line 10
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"
                                                                             class=\"img-responsive\"/></a></div>
                        ";
            // line 12
            if ($this->getAttribute($context["product"], "percent", array())) {
                // line 13
                echo "                            <div class=\"sale-offer-tag\"><span>-";
                echo $this->getAttribute($context["product"], "percent", array());
                echo "%</span></div>
                        ";
            }
            // line 15
            echo "                    </div>
                    <!-- /.hot-deal-wrapper -->
                    <div class=\"product-info text-left m-t-20\">
                        <h3 class=\"name\"><a href=\"";
            // line 18
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h3>
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
                            <div class=\"add-cart-button btn-group\">
                                <button class=\"btn btn-primary icon\" data-toggle=\"dropdown\"
                                        onclick=\"cart.add('";
            // line 36
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" type=\"button\"><i
                                            class=\"fa fa-shopping-cart\"></i></button>
                                <button class=\"btn btn-primary cart-btn\" onclick=\"cart.add('";
            // line 38
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"
                                        type=\"button\">";
            // line 39
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
    <!-- /.sidebar-widget -->
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  114 => 39,  110 => 38,  105 => 36,  95 => 28,  92 => 27,  87 => 25,  82 => 24,  76 => 22,  73 => 21,  71 => 20,  64 => 18,  59 => 15,  53 => 13,  51 => 12,  46 => 10,  42 => 9,  36 => 8,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">*/
/*     <h3 class="section-title">{{ heading_title }}</h3>*/
/*     <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">*/
/*         {% for product in products %}*/
/*             <div class="item">*/
/*                 <div class="products">*/
/*                     <div class="hot-deal-wrapper">*/
/*                         <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}"*/
/*                                                                              alt="{{ product.name }}"*/
/*                                                                              title="{{ product.name }}"*/
/*                                                                              class="img-responsive"/></a></div>*/
/*                         {% if product.percent %}*/
/*                             <div class="sale-offer-tag"><span>-{{ product.percent }}%</span></div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <!-- /.hot-deal-wrapper -->*/
/*                     <div class="product-info text-left m-t-20">*/
/*                         <h3 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h3>*/
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
/*                             <div class="add-cart-button btn-group">*/
/*                                 <button class="btn btn-primary icon" data-toggle="dropdown"*/
/*                                         onclick="cart.add('{{ product.product_id }}');" type="button"><i*/
/*                                             class="fa fa-shopping-cart"></i></button>*/
/*                                 <button class="btn btn-primary cart-btn" onclick="cart.add('{{ product.product_id }}');"*/
/*                                         type="button">{{ button_cart }}</button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.action -->*/
/*                     </div>*/
/*                     <!-- /.cart -->*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <!-- /.sidebar-widget -->*/
/* </div>*/
