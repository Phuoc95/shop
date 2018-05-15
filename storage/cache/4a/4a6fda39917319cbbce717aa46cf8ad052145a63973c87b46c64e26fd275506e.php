<?php

/* default/template/product/search.twig */
class __TwigTemplate_852ec5cbe8fd9b6ab56bf07a32fc680c87a9f0fb577cbe2cac97c57548162aa8 extends Twig_Template
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
                    <h1>";
        // line 27
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                    <label class=\"control-label\" for=\"input-search\">";
        // line 28
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <input type=\"text\" name=\"search\" value=\"";
        // line 31
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
                        </div>
                        <div class=\"col-sm-3\">
                            <select name=\"category_id\" class=\"form-control\">
                                <option value=\"0\">";
        // line 35
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 37
            echo "                                    ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 38
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 40
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
                                    ";
            }
            // line 42
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 43
                echo "                                        ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 44
                    echo "                                            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
                                        ";
                } else {
                    // line 46
                    echo "                                            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
                                        ";
                }
                // line 48
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 49
                    echo "                                            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 50
                        echo "                                                <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
                                            ";
                    } else {
                        // line 52
                        echo "                                                <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
                                            ";
                    }
                    // line 54
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </select>
                        </div>
                        <div class=\"col-sm-3\">
                            <label class=\"checkbox-inline\">
                                ";
        // line 61
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 62
            echo "                                    <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
                                ";
        } else {
            // line 64
            echo "                                    <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
                                ";
        }
        // line 66
        echo "                                ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
                        </div>
                    </div>
                    <p>
                        <label class=\"checkbox-inline\">
                            ";
        // line 71
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 72
            echo "                                <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
                            ";
        } else {
            // line 74
            echo "                                <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
                            ";
        }
        // line 76
        echo "                            ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
                    </p>
                    <input type=\"button\" value=\"";
        // line 78
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
                    <h2>";
        // line 79
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>
                    ";
        // line 80
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 81
            echo "                        <div class=\"clearfix filters-container\">
                            <div class=\"row\">
                                <div class=\"col col-sm-6 col-md-3\">
                                    <div class=\"filter-tabs\">
                                        <ul id=\"filter-tabs\" class=\"nav nav-tabs nav-tab-box nav-tab-fa-icon\">
                                            <li class=\"active\"> <a data-toggle=\"tab\" href=\"#grid-container\"><i class=\"icon fa fa-th-large\"></i>";
            // line 86
            echo (isset($context["text_grid"]) ? $context["text_grid"] : null);
            echo "</a> </li>
                                            <li><a data-toggle=\"tab\" href=\"#list-container\"><i class=\"icon fa fa-th-list\"></i>";
            // line 87
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
            // line 95
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</span>
                                            <div class=\"fld inline\">
                                                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                                                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 99
                echo "                                                        ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 100
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 102
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                                        ";
                }
                // line 104
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                                                </select>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col col-sm-3 col-md-5 no-padding\">
                                        <div class=\"lbl-cnt\"> <span class=\"lbl\">";
            // line 113
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</span>
                                            <div class=\"fld inline\">
                                                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                                                    ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 117
                echo "                                                        ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 118
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 120
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                                        ";
                }
                // line 122
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
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
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 141
                echo "                                                <div class=\"col-sm-6 col-md-4 wow fadeInUp\">
                                                    <div class=\"products\">
                                                        <div class=\"product\">
                                                            <div class=\"product-image\">
                                                                <div class=\"image\">
                                                                    <a href=\"";
                // line 146
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
                // line 148
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 149
                    echo "                                                                    <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                                                ";
                }
                // line 151
                echo "                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class=\"product-info text-left\">
                                                                <h3 class=\"name\"><a href=\"";
                // line 155
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                                                <div class=\"product-price\">
                                                                    ";
                // line 157
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 158
                    echo "                                                                        ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 159
                        echo "                                                                            <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                                        ";
                    } else {
                        // line 161
                        echo "                                                                            <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                                            <span class=\"price-before-discount\">";
                        // line 162
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                                        ";
                    }
                    // line 164
                    echo "                                                                    ";
                }
                // line 165
                echo "                                                                </div>
                                                                <!-- /.product-price -->
                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class=\"cart clearfix animate-effect\">
                                                                <div class=\"action\">
                                                                    <ul class=\"list-unstyled\">
                                                                        <li class=\"add-cart-button btn-group\">
                                                                            <button onclick=\"cart.add('";
                // line 173
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                                        </li>
                                                                        <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 175
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                                        <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 176
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
            // line 190
            echo "                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.category-product -->
                                </div>
                                <!-- /.tab-pane -->

                                <div class=\"tab-pane \"  id=\"list-container\">
                                    <div class=\"category-product\">
                                        ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 200
                echo "                                            <div class=\"category-product-inner wow fadeInUp\">
                                                <div class=\"products\">
                                                    <div class=\"product-list product\">
                                                        <div class=\"row product-list-row\">
                                                            <div class=\"col col-sm-4 col-lg-4\">
                                                                <div class=\"product-image\">
                                                                    <div class=\"image\"> <img src=\"";
                // line 206
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
                // line 213
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                                                    <div class=\"product-price\">
                                                                        ";
                // line 215
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 216
                    echo "                                                                            ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 217
                        echo "                                                                                <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                                            ";
                    } else {
                        // line 219
                        echo "                                                                                <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                                                <span class=\"price-before-discount\">";
                        // line 220
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                                            ";
                    }
                    // line 222
                    echo "                                                                        ";
                }
                // line 223
                echo "                                                                    </div>
                                                                    <!-- /.product-price -->
                                                                    <div class=\"description m-t-10\">";
                // line 225
                echo $this->getAttribute($context["product"], "description", array());
                echo "</div>
                                                                    <div class=\"cart clearfix animate-effect\">
                                                                        <div class=\"action\">
                                                                            <ul class=\"list-unstyled\">
                                                                                <li class=\"add-cart-button btn-group\">
                                                                                    <button onclick=\"cart.add('";
                // line 230
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                                                </li>
                                                                                <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 232
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                                                <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 233
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
                // line 245
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 246
                    echo "                                                            <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                                        ";
                }
                // line 248
                echo "                                                    </div>
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
            // line 255
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
            // line 264
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
                                    </div>
                                    <div class=\"results-container\">
                                        ";
            // line 267
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
        // line 276
        echo "                    ";
        if ( !(isset($context["products"]) ? $context["products"] : null)) {
            // line 277
            echo "                        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                        <div class=\"buttons\">
                            <div class=\"pull-right\"><a href=\"";
            // line 279
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                            </div>
                        </div>
                    ";
        }
        // line 283
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 289
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 294
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 342
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 342,  662 => 294,  654 => 289,  644 => 283,  635 => 279,  629 => 277,  626 => 276,  614 => 267,  608 => 264,  597 => 255,  585 => 248,  579 => 246,  577 => 245,  560 => 233,  554 => 232,  547 => 230,  539 => 225,  535 => 223,  532 => 222,  527 => 220,  522 => 219,  516 => 217,  513 => 216,  511 => 215,  502 => 213,  488 => 206,  480 => 200,  476 => 199,  465 => 190,  443 => 176,  437 => 175,  430 => 173,  420 => 165,  417 => 164,  412 => 162,  407 => 161,  401 => 159,  398 => 158,  396 => 157,  387 => 155,  381 => 151,  375 => 149,  373 => 148,  360 => 146,  353 => 141,  349 => 140,  330 => 123,  324 => 122,  316 => 120,  308 => 118,  305 => 117,  301 => 116,  295 => 113,  285 => 105,  279 => 104,  271 => 102,  263 => 100,  260 => 99,  256 => 98,  250 => 95,  239 => 87,  235 => 86,  228 => 81,  226 => 80,  222 => 79,  218 => 78,  212 => 76,  208 => 74,  204 => 72,  202 => 71,  193 => 66,  189 => 64,  185 => 62,  183 => 61,  177 => 57,  171 => 56,  165 => 55,  159 => 54,  151 => 52,  143 => 50,  140 => 49,  135 => 48,  127 => 46,  119 => 44,  116 => 43,  111 => 42,  103 => 40,  95 => 38,  92 => 37,  88 => 36,  84 => 35,  75 => 31,  69 => 28,  65 => 27,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
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
/*                     <h1>{{ heading_title }}</h1>*/
/*                     <label class="control-label" for="input-search">{{ entry_search }}</label>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <select name="category_id" class="form-control">*/
/*                                 <option value="0">{{ text_category }}</option>*/
/*                                 {% for category_1 in categories %}*/
/*                                     {% if category_1.category_id == category_id %}*/
/*                                         <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*                                     {% endif %}*/
/*                                     {% for category_2 in category_1.children %}*/
/*                                         {% if category_2.category_id == category_id %}*/
/*                                             <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                                         {% endif %}*/
/*                                         {% for category_3 in category_2.children %}*/
/*                                             {% if category_3.category_id == category_id %}*/
/*                                                 <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                                             {% else %}*/
/*                                                 <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     {% endfor %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <label class="checkbox-inline">*/
/*                                 {% if sub_category %}*/
/*                                     <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*                                 {% else %}*/
/*                                     <input type="checkbox" name="sub_category" value="1" />*/
/*                                 {% endif %}*/
/*                                 {{ text_sub_category }}</label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>*/
/*                         <label class="checkbox-inline">*/
/*                             {% if description %}*/
/*                                 <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="description" value="1" id="description" />*/
/*                             {% endif %}*/
/*                             {{ entry_description }}</label>*/
/*                     </p>*/
/*                     <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/*                     <h2>{{ text_search }}</h2>*/
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
/*                                                 <div class="col-sm-6 col-md-4 wow fadeInUp">*/
/*                                                     <div class="products">*/
/*                                                         <div class="product">*/
/*                                                             <div class="product-image">*/
/*                                                                 <div class="image">*/
/*                                                                     <a href="{{ product.href }}" title="{{ product.name }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/></a> </div>*/
/*                                                                 <!-- /.image -->*/
/*                                                                 {% if product.percent %}*/
/*                                                                     <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                                                 {% endif %}*/
/*                                                             </div>*/
/*                                                             <!-- /.product-image -->*/
/* */
/*                                                             <div class="product-info text-left">*/
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
/*                                                             </div>*/
/*                                                             <!-- /.product-info -->*/
/*                                                             <div class="cart clearfix animate-effect">*/
/*                                                                 <div class="action">*/
/*                                                                     <ul class="list-unstyled">*/
/*                                                                         <li class="add-cart-button btn-group">*/
/*                                                                             <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                                         </li>*/
/*                                                                         <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                                         <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                                                                     </ul>*/
/*                                                                 </div>*/
/*                                                                 <!-- /.action -->*/
/*                                                             </div>*/
/*                                                             <!-- /.cart -->*/
/*                                                         </div>*/
/*                                                         <!-- /.product -->*/
/* */
/*                                                     </div>*/
/*                                                     <!-- /.products -->*/
/*                                                 </div>*/
/*                                                 <!-- /.item -->*/
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
/*                                             <div class="category-product-inner wow fadeInUp">*/
/*                                                 <div class="products">*/
/*                                                     <div class="product-list product">*/
/*                                                         <div class="row product-list-row">*/
/*                                                             <div class="col col-sm-4 col-lg-4">*/
/*                                                                 <div class="product-image">*/
/*                                                                     <div class="image"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/> </div>*/
/*                                                                 </div>*/
/*                                                                 <!-- /.product-image -->*/
/*                                                             </div>*/
/*                                                             <!-- /.col -->*/
/*                                                             <div class="col col-sm-8 col-lg-8">*/
/*                                                                 <div class="product-info">*/
/*                                                                     <h3 class="name"><a href="{{ product.href }}" title="{{ product.name }}">{{ product.name }}</a></h3>*/
/*                                                                     <div class="product-price">*/
/*                                                                         {% if product.price %}*/
/*                                                                             {% if not product.special %}*/
/*                                                                                 <span class="price"> {{ product.price }} </span>*/
/*                                                                             {% else %}*/
/*                                                                                 <span class="price">{{ product.special }}</span>*/
/*                                                                                 <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                                             {% endif %}*/
/*                                                                         {% endif %}*/
/*                                                                     </div>*/
/*                                                                     <!-- /.product-price -->*/
/*                                                                     <div class="description m-t-10">{{ product.description }}</div>*/
/*                                                                     <div class="cart clearfix animate-effect">*/
/*                                                                         <div class="action">*/
/*                                                                             <ul class="list-unstyled">*/
/*                                                                                 <li class="add-cart-button btn-group">*/
/*                                                                                     <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                                                 </li>*/
/*                                                                                 <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                                                 <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                                                                             </ul>*/
/*                                                                         </div>*/
/*                                                                         <!-- /.action -->*/
/*                                                                     </div>*/
/*                                                                     <!-- /.cart -->*/
/*                                                                 </div>*/
/*                                                                 <!-- /.product-info -->*/
/*                                                             </div>*/
/*                                                             <!-- /.col -->*/
/*                                                         </div>*/
/*                                                         <!-- /.product-list-row -->*/
/*                                                         {% if product.percent %}*/
/*                                                             <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                                         {% endif %}*/
/*                                                     </div>*/
/*                                                     <!-- /.product-list -->*/
/*                                                 </div>*/
/*                                                 <!-- /.products -->*/
/*                                             </div>*/
/*                                             <!-- /.category-product-inner -->*/
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
/*                         <p>{{ text_empty }}</p>*/
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
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* {{ footer }}*/
