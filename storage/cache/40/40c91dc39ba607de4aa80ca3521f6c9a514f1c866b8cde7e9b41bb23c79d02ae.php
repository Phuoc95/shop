<?php

/* default/template/checkout/cart.twig */
class __TwigTemplate_30c32688644b21863671abe797a49c22df5b257ef01be8ea98da90d1452c87f4 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
";
        // line 2
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 3
            echo "    <div class=\"container\">
        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 4
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    </div>
";
        }
        // line 9
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 10
            echo "    <div class=\"container\">
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 11
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    </div>
    ";
        }
        // line 16
        echo "    ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"container\">
        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    </div>
    ";
        }
        // line 23
        echo "<div class=\"breadcrumb\">
    <div class=\"container\">
        <div class=\"breadcrumb-inner\">
            <ul class=\"list-inline list-unstyled\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class=\"body-content\">
    <div class=\"container\">
        <div class=\"contact-page\" style=\"margin-bottom: 20px;\">
            <div id=\"content\">
                <h1>";
        // line 41
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <form action=\"";
        // line 42
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <td class=\"text-center\">";
        // line 47
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 48
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 49
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 50
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 51
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 52
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                            </tr>
                            </thead>
                            <tbody>

                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 58
            echo "                                <tr>
                                    <td class=\"text-center\">";
            // line 59
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img
                                                    src=\"";
                // line 60
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                    title=\"";
                // line 61
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                                    <td class=\"text-left\"><a
                                                href=\"";
            // line 63
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                // line 64
                echo "                                            <span class=\"text-danger\">***</span> ";
            }
            // line 65
            echo "                                        ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 66
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                                                <small>";
                    // line 67
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                                        ";
            }
            // line 69
            echo "                                        ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br/>
                                            <small>";
                // line 70
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 71
            echo "                                        ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br/>
                                            <span class=\"label label-info\">";
                // line 72
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span>
                                            <small>";
                // line 73
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
                                    <td class=\"text-left\">";
            // line 74
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                                    <td class=\"text-left\">
                                        <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                            <input type=\"text\" name=\"quantity[";
            // line 77
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\"
                                                   value=\"";
            // line 78
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 82
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"cart.remove('";
            // line 83
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                    </td>
                                    <td class=\"text-right\">";
            // line 86
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                                    <td class=\"text-right\">";
            // line 87
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 91
            echo "                                <tr>
                                    <td></td>
                                    <td class=\"text-left\">";
            // line 93
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
                                    <td class=\"text-left\"></td>
                                    <td class=\"text-left\">
                                        <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                            <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 100
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"voucher.remove('";
            // line 101
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                    </td>
                                    <td class=\"text-right\">";
            // line 104
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                                    <td class=\"text-right\">";
            // line 105
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                            </tbody>

                        </table>
                    </div>
                </form>
                ";
        // line 113
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 114
            echo "                    <h2>";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
                    <p>";
            // line 115
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
                    <div class=\"panel-group\" id=\"accordion\"> ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 117
                echo "                            ";
                echo $context["module"];
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo " </div>
                ";
        }
        // line 119
        echo " <br/>
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <table class=\"table table-bordered\">
                            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 124
            echo "                                <tr>
                                    <td class=\"text-right\"><strong>";
            // line 125
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
                                    <td class=\"text-right\">";
            // line 126
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                        </table>
                    </div>
                </div>
                <div class=\"buttons clearfix\">
                    <div class=\"pull-left\"><a href=\"";
        // line 133
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
                    <div class=\"pull-right\"><a href=\"";
        // line 134
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
                </div>
                ";
        // line 136
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            </div>
        </div>
        <!-- /.row -->
        ";
        // line 140
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 145
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 146,  400 => 145,  392 => 140,  385 => 136,  378 => 134,  372 => 133,  366 => 129,  357 => 126,  353 => 125,  350 => 124,  346 => 123,  340 => 119,  336 => 118,  327 => 117,  323 => 116,  319 => 115,  314 => 114,  312 => 113,  305 => 108,  296 => 105,  292 => 104,  286 => 101,  282 => 100,  272 => 93,  268 => 91,  263 => 90,  254 => 87,  250 => 86,  244 => 83,  240 => 82,  235 => 80,  230 => 78,  226 => 77,  220 => 74,  214 => 73,  210 => 72,  205 => 71,  201 => 70,  196 => 69,  193 => 68,  184 => 67,  177 => 66,  174 => 65,  171 => 64,  165 => 63,  158 => 61,  152 => 60,  146 => 59,  143 => 58,  139 => 57,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  103 => 42,  99 => 41,  86 => 30,  75 => 28,  71 => 27,  65 => 23,  57 => 18,  54 => 17,  51 => 16,  43 => 11,  40 => 10,  37 => 9,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* {% if attention %}*/
/*     <div class="container">*/
/*         <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/*     {% if success %}*/
/*     <div class="container">*/
/*         <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if error_warning %}*/
/*     <div class="container">*/
/*         <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* <div class="breadcrumb">*/
/*     <div class="container">*/
/*         <div class="breadcrumb-inner">*/
/*             <ul class="list-inline list-unstyled">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.breadcrumb-inner -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /.breadcrumb -->*/
/* <div class="body-content">*/
/*     <div class="container">*/
/*         <div class="contact-page" style="margin-bottom: 20px;">*/
/*             <div id="content">*/
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <td class="text-center">{{ column_image }}</td>*/
/*                                 <td class="text-left">{{ column_name }}</td>*/
/*                                 <td class="text-left">{{ column_model }}</td>*/
/*                                 <td class="text-left">{{ column_quantity }}</td>*/
/*                                 <td class="text-right">{{ column_price }}</td>*/
/*                                 <td class="text-right">{{ column_total }}</td>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/* */
/*                             {% for product in products %}*/
/*                                 <tr>*/
/*                                     <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img*/
/*                                                     src="{{ product.thumb }}" alt="{{ product.name }}"*/
/*                                                     title="{{ product.name }}" class="img-thumbnail"/></a> {% endif %}</td>*/
/*                                     <td class="text-left"><a*/
/*                                                 href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %}*/
/*                                             <span class="text-danger">***</span> {% endif %}*/
/*                                         {% if product.option %}*/
/*                                             {% for option in product.option %} <br/>*/
/*                                                 <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                                         {% endif %}*/
/*                                         {% if product.reward %} <br/>*/
/*                                             <small>{{ product.reward }}</small> {% endif %}*/
/*                                         {% if product.recurring %} <br/>*/
/*                                             <span class="label label-info">{{ text_recurring_item }}</span>*/
/*                                             <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*                                     <td class="text-left">{{ product.model }}</td>*/
/*                                     <td class="text-left">*/
/*                                         <div class="input-group btn-block" style="max-width: 200px;">*/
/*                                             <input type="text" name="quantity[{{ product.cart_id }}]"*/
/*                                                    value="{{ product.quantity }}" size="1" class="form-control"/>*/
/*                                             <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i*/
/*                               class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"*/
/*                           onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                                     </td>*/
/*                                     <td class="text-right">{{ product.price }}</td>*/
/*                                     <td class="text-right">{{ product.total }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             {% for voucher in vouchers %}*/
/*                                 <tr>*/
/*                                     <td></td>*/
/*                                     <td class="text-left">{{ voucher.description }}</td>*/
/*                                     <td class="text-left"></td>*/
/*                                     <td class="text-left">*/
/*                                         <div class="input-group btn-block" style="max-width: 200px;">*/
/*                                             <input type="text" name="" value="1" size="1" disabled="disabled"*/
/*                                                    class="form-control"/>*/
/*                                             <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"*/
/*                           onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                                     </td>*/
/*                                     <td class="text-right">{{ voucher.amount }}</td>*/
/*                                     <td class="text-right">{{ voucher.amount }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/* */
/*                         </table>*/
/*                     </div>*/
/*                 </form>*/
/*                 {% if modules %}*/
/*                     <h2>{{ text_next }}</h2>*/
/*                     <p>{{ text_next_choice }}</p>*/
/*                     <div class="panel-group" id="accordion"> {% for module in modules %}*/
/*                             {{ module }}*/
/*                         {% endfor %} </div>*/
/*                 {% endif %} <br/>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-4 col-sm-offset-8">*/
/*                         <table class="table table-bordered">*/
/*                             {% for total in totals %}*/
/*                                 <tr>*/
/*                                     <td class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*                                     <td class="text-right">{{ total.text }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="buttons clearfix">*/
/*                     <div class="pull-left"><a href="{{ continue }}" class="btn btn-default">{{ button_shopping }}</a></div>*/
/*                     <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary">{{ button_checkout }}</a></div>*/
/*                 </div>*/
/*                 {{ content_top }}*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ column_right }}*/
/* {{ footer }}*/
