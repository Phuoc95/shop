<?php

/* default/template/product/category.twig */
class __TwigTemplate_4b4da4437f0bd38c781d3bf5820fc456ccb0d01fc9cd91303de0abe718f6c074 extends Twig_Template
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
        echo "
<div class=\"breadcrumb\">
    <div class=\"container\">
        <div class=\"breadcrumb-inner\">
            <ul class=\"list-inline list-unstyled\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
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
        // line 9
        echo "            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class=\"body-content outer-top-xs\" id=\"top-banner-and-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <!--  SIDEBAR  -->
            <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">
                ";
        // line 21
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
            </div>
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
            <div class=\"col-xs-12 col-sm-12 col-md-9\">
                <div id=\"content\">
                    ";
        // line 27
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 28
            echo "                    <div class=\"category-description\">
                        ";
            // line 29
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                    </div>
                    ";
        }
        // line 32
        echo "                    ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 33
            echo "                        <div class=\"clearfix filters-container\">
                            <div class=\"row\">
                                <div class=\"col col-sm-6 col-md-3\">
                                    <div class=\"filter-tabs\">
                                        <ul id=\"filter-tabs\" class=\"nav nav-tabs nav-tab-box nav-tab-fa-icon\">
                                            <li class=\"active\"> <a data-toggle=\"tab\" href=\"#grid-container\"><i class=\"icon fa fa-th-large\"></i>";
            // line 38
            echo (isset($context["text_grid"]) ? $context["text_grid"] : null);
            echo "</a> </li>
                                            <li><a data-toggle=\"tab\" href=\"#list-container\"><i class=\"icon fa fa-th-list\"></i>";
            // line 39
            echo (isset($context["text_list"]) ? $context["text_list"] : null);
            echo "</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.filter-tabs -->
                                </div>
                                <!-- /.col -->
                                <div class=\"col col-sm-12 col-md-9\">
                                    <div class=\"col col-sm-3 col-md-7 no-padding\">
                                        <div class=\"lbl-cnt\"> <span class=\"lbl\">";
            // line 47
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</span>
                                            <div class=\"fld inline\">
                                                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                                                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 51
                echo "                                                        ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 52
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 54
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                                        ";
                }
                // line 56
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                                                </select>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col col-sm-3 col-md-5 no-padding\">
                                        <div class=\"lbl-cnt\"> <span class=\"lbl\">";
            // line 65
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</span>
                                            <div class=\"fld inline\">
                                                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                                                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 69
                echo "                                                        ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 70
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 72
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                                        ";
                }
                // line 74
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                                </select>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class=\"search-result-container \">
                            <div id=\"myTabContent\" class=\"tab-content category-list\">
                                <div class=\"tab-pane active \" id=\"grid-container\">
                                    <div class=\"category-product\">
                                        <div class=\"row\">
                                            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "                                            <div class=\"col-sm-6 col-md-4 wow fadeInUp\">
                                                <div class=\"products\">
                                                    <div class=\"product\">
                                                        <div class=\"product-image\">
                                                            <div class=\"image\">
                                                                <a href=\"";
                // line 98
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"> <img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a> </div>
                                                            <!-- /.image -->
                                                            ";
                // line 100
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 101
                    echo "                                                                <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                                            ";
                }
                // line 103
                echo "                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class=\"product-info text-left\">
                                                            <h3 class=\"name\"><a href=\"";
                // line 107
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                                            <div class=\"product-price\">
                                                                ";
                // line 109
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 110
                    echo "                                                                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 111
                        echo "                                                                        <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                                    ";
                    } else {
                        // line 113
                        echo "                                                                        <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                                        <span class=\"price-before-discount\">";
                        // line 114
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                                    ";
                    }
                    // line 116
                    echo "                                                                ";
                }
                // line 117
                echo "                                                            </div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class=\"cart clearfix animate-effect\">
                                                            <div class=\"action\">
                                                                <ul class=\"list-unstyled\">
                                                                    <li class=\"add-cart-button btn-group\">
                                                                        <button onclick=\"cart.add('";
                // line 125
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                                    </li>
                                                                    <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 127
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                                    <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 128
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
            // line 142
            echo "                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.category-product -->
                                </div>
                                <!-- /.tab-pane -->

                                <div class=\"tab-pane \"  id=\"list-container\">
                                    <div class=\"category-product\">
                                        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 152
                echo "                                        <div class=\"category-product-inner wow fadeInUp\">
                                            <div class=\"products\">
                                                <div class=\"product-list product\">
                                                    <div class=\"row product-list-row\">
                                                        <div class=\"col col-sm-4 col-lg-4\">
                                                            <div class=\"product-image\">
                                                                <div class=\"image\"> <img src=\"";
                // line 158
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/> </div>
                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class=\"col col-sm-8 col-lg-8\">
                                                            <div class=\"product-info\">
                                                                <h3 class=\"name\"><a href=\"";
                // line 165
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                                                <div class=\"product-price\">
                                                                    ";
                // line 167
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 168
                    echo "                                                                        ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 169
                        echo "                                                                            <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                                        ";
                    } else {
                        // line 171
                        echo "                                                                            <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                                            <span class=\"price-before-discount\">";
                        // line 172
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                                        ";
                    }
                    // line 174
                    echo "                                                                    ";
                }
                // line 175
                echo "                                                                </div>
                                                                <!-- /.product-price -->
                                                                <div class=\"description m-t-10\">";
                // line 177
                echo $this->getAttribute($context["product"], "description", array());
                echo "</div>
                                                                <div class=\"cart clearfix animate-effect\">
                                                                    <div class=\"action\">
                                                                        <ul class=\"list-unstyled\">
                                                                            <li class=\"add-cart-button btn-group\">
                                                                                <button onclick=\"cart.add('";
                // line 182
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                                            </li>
                                                                            <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 184
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                                            <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 185
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
                                                            <!-- /.product-info -->
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-list-row -->
                                                    ";
                // line 197
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 198
                    echo "                                                        <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                                    ";
                }
                // line 200
                echo "                                                </div>
                                                <!-- /.product-list -->
                                            </div>
                                            <!-- /.products -->
                                        </div>
                                        <!-- /.category-product-inner -->
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                                    </div>
                                    <!-- /.category-product -->
                                </div>
                                <!-- /.tab-pane #list-container -->
                            </div>
                            <!-- /.tab-content -->
                            <div class=\"clearfix filters-container\">
                                <div class=\"text-right\">
                                    <div class=\"pagination-container\">
                                        ";
            // line 216
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
                                    </div>
                                    <div class=\"results-container\">
                                        ";
            // line 219
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "
                                    </div>
                                    <!-- /.pagination-container -->
                                </div>
                                <!-- /.text-right -->
                            </div>
                            <!-- /.filters-container -->
                        </div>
                    ";
        }
        // line 228
        echo "                    ";
        if ( !(isset($context["products"]) ? $context["products"] : null)) {
            // line 229
            echo "                        <p>";
            echo (isset($context["text_product_empty"]) ? $context["text_product_empty"] : null);
            echo "</p>
                        <div class=\"buttons\">
                            <div class=\"pull-right\"><a href=\"";
            // line 231
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                            </div>
                        </div>
                    ";
        }
        // line 235
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 241
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 246
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
";
        // line 247
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 247,  513 => 246,  505 => 241,  495 => 235,  486 => 231,  480 => 229,  477 => 228,  465 => 219,  459 => 216,  448 => 207,  436 => 200,  430 => 198,  428 => 197,  411 => 185,  405 => 184,  398 => 182,  390 => 177,  386 => 175,  383 => 174,  378 => 172,  373 => 171,  367 => 169,  364 => 168,  362 => 167,  353 => 165,  339 => 158,  331 => 152,  327 => 151,  316 => 142,  294 => 128,  288 => 127,  281 => 125,  271 => 117,  268 => 116,  263 => 114,  258 => 113,  252 => 111,  249 => 110,  247 => 109,  238 => 107,  232 => 103,  226 => 101,  224 => 100,  211 => 98,  204 => 93,  200 => 92,  181 => 75,  175 => 74,  167 => 72,  159 => 70,  156 => 69,  152 => 68,  146 => 65,  136 => 57,  130 => 56,  122 => 54,  114 => 52,  111 => 51,  107 => 50,  101 => 47,  90 => 39,  86 => 38,  79 => 33,  76 => 32,  70 => 29,  67 => 28,  65 => 27,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
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
/* <div class="body-content outer-top-xs" id="top-banner-and-menu">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <!--  SIDEBAR  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-3 sidebar">*/
/*                 {{ column_left }}*/
/*             </div>*/
/*             <!--  SIDEBAR : END  -->*/
/*             <!--  CONTENT  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-9">*/
/*                 <div id="content">*/
/*                     {% if description %}*/
/*                     <div class="category-description">*/
/*                         {{ description }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     {% if products %}*/
/*                         <div class="clearfix filters-container">*/
/*                             <div class="row">*/
/*                                 <div class="col col-sm-6 col-md-3">*/
/*                                     <div class="filter-tabs">*/
/*                                         <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">*/
/*                                             <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>{{ text_grid }}</a> </li>*/
/*                                             <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>{{ text_list }}</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <!-- /.filter-tabs -->*/
/*                                 </div>*/
/*                                 <!-- /.col -->*/
/*                                 <div class="col col-sm-12 col-md-9">*/
/*                                     <div class="col col-sm-3 col-md-7 no-padding">*/
/*                                         <div class="lbl-cnt"> <span class="lbl">{{ text_sort }}</span>*/
/*                                             <div class="fld inline">*/
/*                                                 <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                                                     {% for sorts in sorts %}*/
/*                                                         {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                                                             <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <!-- /.fld -->*/
/*                                         </div>*/
/*                                         <!-- /.lbl-cnt -->*/
/*                                     </div>*/
/*                                     <!-- /.col -->*/
/*                                     <div class="col col-sm-3 col-md-5 no-padding">*/
/*                                         <div class="lbl-cnt"> <span class="lbl">{{ text_limit }}</span>*/
/*                                             <div class="fld inline">*/
/*                                                 <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                                                     {% for limits in limits %}*/
/*                                                         {% if limits.value == limit %}*/
/*                                                             <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <!-- /.fld -->*/
/*                                         </div>*/
/*                                         <!-- /.lbl-cnt -->*/
/*                                     </div>*/
/*                                     <!-- /.col -->*/
/*                                 </div>*/
/*                                 <!-- /.col -->*/
/*                             </div>*/
/*                             <!-- /.row -->*/
/*                         </div>*/
/*                         <div class="search-result-container ">*/
/*                             <div id="myTabContent" class="tab-content category-list">*/
/*                                 <div class="tab-pane active " id="grid-container">*/
/*                                     <div class="category-product">*/
/*                                         <div class="row">*/
/*                                             {% for product in products %}*/
/*                                             <div class="col-sm-6 col-md-4 wow fadeInUp">*/
/*                                                 <div class="products">*/
/*                                                     <div class="product">*/
/*                                                         <div class="product-image">*/
/*                                                             <div class="image">*/
/*                                                                 <a href="{{ product.href }}" title="{{ product.name }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/></a> </div>*/
/*                                                             <!-- /.image -->*/
/*                                                             {% if product.percent %}*/
/*                                                                 <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                                             {% endif %}*/
/*                                                         </div>*/
/*                                                         <!-- /.product-image -->*/
/* */
/*                                                         <div class="product-info text-left">*/
/*                                                             <h3 class="name"><a href="{{ product.href }}" title="{{ product.name }}">{{ product.name }}</a></h3>*/
/*                                                             <div class="product-price">*/
/*                                                                 {% if product.price %}*/
/*                                                                     {% if not product.special %}*/
/*                                                                         <span class="price"> {{ product.price }} </span>*/
/*                                                                     {% else %}*/
/*                                                                         <span class="price">{{ product.special }}</span>*/
/*                                                                         <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                                     {% endif %}*/
/*                                                                 {% endif %}*/
/*                                                             </div>*/
/*                                                             <!-- /.product-price -->*/
/*                                                         </div>*/
/*                                                         <!-- /.product-info -->*/
/*                                                         <div class="cart clearfix animate-effect">*/
/*                                                             <div class="action">*/
/*                                                                 <ul class="list-unstyled">*/
/*                                                                     <li class="add-cart-button btn-group">*/
/*                                                                         <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                                     </li>*/
/*                                                                     <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                                     <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                                                                 </ul>*/
/*                                                             </div>*/
/*                                                             <!-- /.action -->*/
/*                                                         </div>*/
/*                                                         <!-- /.cart -->*/
/*                                                     </div>*/
/*                                                     <!-- /.product -->*/
/* */
/*                                                 </div>*/
/*                                                 <!-- /.products -->*/
/*                                             </div>*/
/*                                             <!-- /.item -->*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <!-- /.row -->*/
/*                                     </div>*/
/*                                     <!-- /.category-product -->*/
/*                                 </div>*/
/*                                 <!-- /.tab-pane -->*/
/* */
/*                                 <div class="tab-pane "  id="list-container">*/
/*                                     <div class="category-product">*/
/*                                         {% for product in products %}*/
/*                                         <div class="category-product-inner wow fadeInUp">*/
/*                                             <div class="products">*/
/*                                                 <div class="product-list product">*/
/*                                                     <div class="row product-list-row">*/
/*                                                         <div class="col col-sm-4 col-lg-4">*/
/*                                                             <div class="product-image">*/
/*                                                                 <div class="image"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/> </div>*/
/*                                                             </div>*/
/*                                                             <!-- /.product-image -->*/
/*                                                         </div>*/
/*                                                         <!-- /.col -->*/
/*                                                         <div class="col col-sm-8 col-lg-8">*/
/*                                                             <div class="product-info">*/
/*                                                                 <h3 class="name"><a href="{{ product.href }}" title="{{ product.name }}">{{ product.name }}</a></h3>*/
/*                                                                 <div class="product-price">*/
/*                                                                     {% if product.price %}*/
/*                                                                         {% if not product.special %}*/
/*                                                                             <span class="price"> {{ product.price }} </span>*/
/*                                                                         {% else %}*/
/*                                                                             <span class="price">{{ product.special }}</span>*/
/*                                                                             <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                                         {% endif %}*/
/*                                                                     {% endif %}*/
/*                                                                 </div>*/
/*                                                                 <!-- /.product-price -->*/
/*                                                                 <div class="description m-t-10">{{ product.description }}</div>*/
/*                                                                 <div class="cart clearfix animate-effect">*/
/*                                                                     <div class="action">*/
/*                                                                         <ul class="list-unstyled">*/
/*                                                                             <li class="add-cart-button btn-group">*/
/*                                                                                 <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                                             </li>*/
/*                                                                             <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                                             <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                                                                         </ul>*/
/*                                                                     </div>*/
/*                                                                     <!-- /.action -->*/
/*                                                                 </div>*/
/*                                                                 <!-- /.cart -->*/
/*                                                             </div>*/
/*                                                             <!-- /.product-info -->*/
/*                                                         </div>*/
/*                                                         <!-- /.col -->*/
/*                                                     </div>*/
/*                                                     <!-- /.product-list-row -->*/
/*                                                     {% if product.percent %}*/
/*                                                         <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/*                                                 <!-- /.product-list -->*/
/*                                             </div>*/
/*                                             <!-- /.products -->*/
/*                                         </div>*/
/*                                         <!-- /.category-product-inner -->*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                     <!-- /.category-product -->*/
/*                                 </div>*/
/*                                 <!-- /.tab-pane #list-container -->*/
/*                             </div>*/
/*                             <!-- /.tab-content -->*/
/*                             <div class="clearfix filters-container">*/
/*                                 <div class="text-right">*/
/*                                     <div class="pagination-container">*/
/*                                         {{ pagination }}*/
/*                                     </div>*/
/*                                     <div class="results-container">*/
/*                                         {{ results }}*/
/*                                     </div>*/
/*                                     <!-- /.pagination-container -->*/
/*                                 </div>*/
/*                                 <!-- /.text-right -->*/
/*                             </div>*/
/*                             <!-- /.filters-container -->*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if not products %}*/
/*                         <p>{{ text_product_empty }}</p>*/
/*                         <div class="buttons">*/
/*                             <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {{ content_top }}*/
/*                 </div>*/
/*             </div>*/
/*             <!--  CONTENT : END  -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ column_right }}*/
/* {{ footer }}*/
