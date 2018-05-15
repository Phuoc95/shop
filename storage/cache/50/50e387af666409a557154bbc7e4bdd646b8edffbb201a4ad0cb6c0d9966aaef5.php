<?php

/* default/template/extension/module/latest.twig */
class __TwigTemplate_ffab811a76477cbd4e861c0d910aee5e53615c8193ffadbd97e2afdf87144c6a extends Twig_Template
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
        echo "<div class=\"sidebar-widget outer-bottom-small wow fadeInUp\">
    <h3 class=\"section-title\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    <div class=\"sidebar-widget-body outer-top-xs\">
        <div class=\"owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_combos"]) ? $context["products_combos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["products_combo"]) {
            // line 6
            echo "                <div class=\"item\">
                    <div class=\"products special-product\">
                        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["products_combo"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "                            <div class=\"product\">
                                <div class=\"product-micro\">
                                    <div class=\"row product-micro-row\">
                                        <div class=\"col col-xs-5\">
                                            <div class=\"product-image\">
                                                <div class=\"image\"><a href=\"";
                // line 14
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img
                                                                src=\"";
                // line 15
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                title=\"";
                // line 16
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class=\"col col-xs-7\">
                                            <div class=\"product-info\">
                                                <h3 class=\"name\"><a href=\"";
                // line 26
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
                                                </h3>
                                                <div class=\"product-price\">
                                                    ";
                // line 29
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 30
                    echo "                                                        ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 31
                        echo "                                                            <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                        ";
                    } else {
                        // line 33
                        echo "                                                            <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                            <span class=\"price-before-discount\">";
                        // line 34
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                        ";
                    }
                    // line 36
                    echo "                                                    ";
                }
                // line 37
                echo "                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products_combo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  118 => 48,  102 => 37,  99 => 36,  94 => 34,  89 => 33,  83 => 31,  80 => 30,  78 => 29,  70 => 26,  57 => 16,  51 => 15,  47 => 14,  40 => 9,  36 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="sidebar-widget outer-bottom-small wow fadeInUp">*/
/*     <h3 class="section-title">{{ heading_title }}</h3>*/
/*     <div class="sidebar-widget-body outer-top-xs">*/
/*         <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">*/
/*             {% for products_combo in products_combos %}*/
/*                 <div class="item">*/
/*                     <div class="products special-product">*/
/*                         {% for product in products_combo %}*/
/*                             <div class="product">*/
/*                                 <div class="product-micro">*/
/*                                     <div class="row product-micro-row">*/
/*                                         <div class="col col-xs-5">*/
/*                                             <div class="product-image">*/
/*                                                 <div class="image"><a href="{{ product.href }}"><img*/
/*                                                                 src="{{ product.thumb }}" alt="{{ product.name }}"*/
/*                                                                 title="{{ product.name }}" class="img-responsive"/></a>*/
/*                                                 </div>*/
/*                                                 <!-- /.image -->*/
/* */
/*                                             </div>*/
/*                                             <!-- /.product-image -->*/
/*                                         </div>*/
/*                                         <!-- /.col -->*/
/*                                         <div class="col col-xs-7">*/
/*                                             <div class="product-info">*/
/*                                                 <h3 class="name"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*                                                 </h3>*/
/*                                                 <div class="product-price">*/
/*                                                     {% if product.price %}*/
/*                                                         {% if not product.special %}*/
/*                                                             <span class="price"> {{ product.price }} </span>*/
/*                                                         {% else %}*/
/*                                                             <span class="price">{{ product.special }}</span>*/
/*                                                             <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                         {% endif %}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/*                                                 <!-- /.product-price -->*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!-- /.col -->*/
/*                                     </div>*/
/*                                     <!-- /.product-micro-row -->*/
/*                                 </div>*/
/*                                 <!-- /.product-micro -->*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.sidebar-widget-body -->*/
/* </div>*/
/* <!-- /.sidebar-widget -->*/
/* */
