<?php

/* default/template/common/cart.twig */
class __TwigTemplate_1cb7ab19ab07827af508de097ec735c0b82cd01961425018ea4b16ebb42505eb extends Twig_Template
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
        echo "<div id=\"cart\" class=\"dropdown dropdown-cart\">
    <a href=\"#\" class=\"dropdown-toggle lnk-cart\" data-toggle=\"dropdown\">
        <div class=\"items-cart-inner\">
            <div class=\"basket\"><i class=\"glyphicon glyphicon-shopping-cart\"></i></div>
            <div class=\"basket-item-count\"><span class=\"count\"
                        id=\"cart-total\">";
        // line 6
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></div>
            <div class=\"total-price-basket\"><span class=\"lbl\">";
        // line 7
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</span></div>
        </div>
    </a>
    <ul class=\"dropdown-menu\">
        ";
        // line 11
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 12
            echo "            <li>
                <table class=\"table table-striped\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 15
                echo "                        <tr>
                            <td class=\"text-center\">";
                // line 16
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img
                                            src=\"";
                    // line 17
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"
                                            title=\"";
                    // line 18
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\"/></a> ";
                }
                echo "</td>
                            <td class=\"text-left\"><a
                                        href=\"";
                // line 20
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 21
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br/>
                                        -
                                        <small>";
                        // line 23
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "                                ";
                }
                // line 25
                echo "                                ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br/>
                                    -
                                    <small>";
                    // line 27
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
                            <td class=\"text-right\">x ";
                // line 28
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
                            <td class=\"text-right\">";
                // line 29
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
                            <td class=\"text-center\">
                                <button type=\"button\" onclick=\"cart.remove('";
                // line 31
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\"
                                        title=\"";
                // line 32
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i
                                            class=\"fa fa-times\"></i></button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 38
                echo "                        <tr>
                            <td class=\"text-center\"></td>
                            <td class=\"text-left\">";
                // line 40
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
                            <td class=\"text-right\">x&nbsp;1</td>
                            <td class=\"text-right\">";
                // line 42
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
                            <td class=\"text-center text-danger\">
                                <button type=\"button\" onclick=\"voucher.remove('";
                // line 44
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\"
                                        title=\"";
                // line 45
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i
                                            class=\"fa fa-times\"></i></button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </table>
            </li>
            <li>
                <div>
                    <table class=\"table table-bordered\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 56
                echo "                            <tr>
                                <td class=\"text-right\"><strong>";
                // line 57
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
                                <td class=\"text-right\">";
                // line 58
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    </table>
                    <p class=\"text-right\"><a href=\"";
            // line 62
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><strong><i
                                        class=\"fa fa-shopping-cart\"></i> ";
            // line 63
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "
                            </strong></a>&nbsp;&nbsp;&nbsp;<a class=\"btn btn-upper btn-primary btn-block m-t-20\" href=\"";
            // line 64
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"><strong><i
                                        class=\"fa fa-share\"></i> ";
            // line 65
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</strong></a></p>
                </div>
            </li>
        ";
        } else {
            // line 69
            echo "            <li>
                <p class=\"text-center\">";
            // line 70
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
            </li>
        ";
        }
        // line 73
        echo "    </ul>
    <!-- /.dropdown-menu-->
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 73,  219 => 70,  216 => 69,  209 => 65,  205 => 64,  201 => 63,  197 => 62,  194 => 61,  185 => 58,  181 => 57,  178 => 56,  174 => 55,  167 => 50,  156 => 45,  152 => 44,  147 => 42,  142 => 40,  138 => 38,  133 => 37,  122 => 32,  118 => 31,  113 => 29,  109 => 28,  101 => 27,  95 => 25,  92 => 24,  83 => 23,  75 => 21,  69 => 20,  62 => 18,  56 => 17,  50 => 16,  47 => 15,  43 => 14,  39 => 12,  37 => 11,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div id="cart" class="dropdown dropdown-cart">*/
/*     <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">*/
/*         <div class="items-cart-inner">*/
/*             <div class="basket"><i class="glyphicon glyphicon-shopping-cart"></i></div>*/
/*             <div class="basket-item-count"><span class="count"*/
/*                         id="cart-total">{{ text_items }}</span></div>*/
/*             <div class="total-price-basket"><span class="lbl">{{ text_cart }}</span></div>*/
/*         </div>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         {% if products or vouchers %}*/
/*             <li>*/
/*                 <table class="table table-striped">*/
/*                     {% for product in products %}*/
/*                         <tr>*/
/*                             <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img*/
/*                                             src="{{ product.thumb }}" alt="{{ product.name }}"*/
/*                                             title="{{ product.name }}" class="img-thumbnail"/></a> {% endif %}</td>*/
/*                             <td class="text-left"><a*/
/*                                         href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*                                     {% for option in product.option %} <br/>*/
/*                                         -*/
/*                                         <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*                                 {% endif %}*/
/*                                 {% if product.recurring %} <br/>*/
/*                                     -*/
/*                                     <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*                             <td class="text-right">x {{ product.quantity }}</td>*/
/*                             <td class="text-right">{{ product.total }}</td>*/
/*                             <td class="text-center">*/
/*                                 <button type="button" onclick="cart.remove('{{ product.cart_id }}');"*/
/*                                         title="{{ button_remove }}" class="btn btn-danger btn-xs"><i*/
/*                                             class="fa fa-times"></i></button>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     {% for voucher in vouchers %}*/
/*                         <tr>*/
/*                             <td class="text-center"></td>*/
/*                             <td class="text-left">{{ voucher.description }}</td>*/
/*                             <td class="text-right">x&nbsp;1</td>*/
/*                             <td class="text-right">{{ voucher.amount }}</td>*/
/*                             <td class="text-center text-danger">*/
/*                                 <button type="button" onclick="voucher.remove('{{ voucher.key }}');"*/
/*                                         title="{{ button_remove }}" class="btn btn-danger btn-xs"><i*/
/*                                             class="fa fa-times"></i></button>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </li>*/
/*             <li>*/
/*                 <div>*/
/*                     <table class="table table-bordered">*/
/*                         {% for total in totals %}*/
/*                             <tr>*/
/*                                 <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*                                 <td class="text-right">{{ total.text }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                     <p class="text-right"><a href="{{ cart }}"><strong><i*/
/*                                         class="fa fa-shopping-cart"></i> {{ text_cart }}*/
/*                             </strong></a>&nbsp;&nbsp;&nbsp;<a class="btn btn-upper btn-primary btn-block m-t-20" href="{{ checkout }}"><strong><i*/
/*                                         class="fa fa-share"></i> {{ text_checkout }}</strong></a></p>*/
/*                 </div>*/
/*             </li>*/
/*         {% else %}*/
/*             <li>*/
/*                 <p class="text-center">{{ text_empty }}</p>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/*     <!-- /.dropdown-menu-->*/
/* </div>*/
