<?php

/* default/template/product/product.twig */
class __TwigTemplate_f9ce460bf7bcbb79349e0fbb71279eaecb9260a18bbf8ece06f82edb01224a72 extends Twig_Template
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
<div class=\"body-content outer-top-xs single-product\">
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

                    <div class=\"detail-block\">
                        <div class=\"row  wow fadeInUp\">
                            ";
        // line 30
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 31
            echo "                            <div class=\"col-xs-12 col-sm-6 col-md-5 gallery-holder\">
                                <div class=\"product-item-holder size-big single-product-gallery small-gallery\">

                                    <div id=\"owl-single-product\">
                                        ";
            // line 35
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 36
                echo "                                        <div class=\"single-product-gallery-item\" id=\"slide-thumb\">
                                            <a data-lightbox=\"image-1\" data-title=\"";
                // line 37
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\">
                                                <img class=\"img-responsive\" alt=\"";
                // line 38
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-echo=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        ";
            }
            // line 42
            echo "                                        ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 43
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 44
                    echo "                                            <div class=\"single-product-gallery-item\" id=\"slide-image-";
                    echo $context["key"];
                    echo "\">
                                                <a data-lightbox=\"image-1\" data-title=\"";
                    // line 45
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\">
                                                    <img class=\"img-responsive\" alt=\"";
                    // line 46
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-echo=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                                        ";
            }
            // line 51
            echo "                                    </div><!-- /.single-product-slider -->
                                    <div class=\"single-product-gallery-thumbs gallery-thumbs\">
                                        <div id=\"owl-single-product-thumbnails\">
                                            ";
            // line 54
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 55
                echo "                                                <div class=\"item\">
                                                    <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" href=\"#slide-thumb\">
                                                        <img class=\"img-responsive\" width=\"85\" alt=\"";
                // line 57
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-echo=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" />
                                                    </a>
                                                </div>
                                            ";
            }
            // line 61
            echo "                                            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 62
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 63
                    echo "                                                    <div class=\"item\">
                                                        <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" href=\"#slide-image-";
                    // line 64
                    echo $context["key"];
                    echo "\">
                                                            <img class=\"img-responsive\" width=\"85\" alt=\"";
                    // line 65
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-echo=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" />
                                                        </a>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                            ";
            }
            // line 70
            echo "                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->
                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            ";
        }
        // line 75
        echo "                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class=\"product-info\">
                                    <h1 class=\"name\">";
        // line 77
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                                    <div class=\"product-info-description\">
                                        <ul class=\"list-unstyled\">
                                            ";
        // line 80
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 81
            echo "                                                <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
                                            ";
        }
        // line 83
        echo "                                            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
                                            ";
        // line 84
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 85
            echo "                                                <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
                                            ";
        }
        // line 87
        echo "                                            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
                                        </ul>
                                        ";
        // line 89
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 90
            echo "                                            <ul class=\"list-unstyled\">
                                                ";
            // line 91
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 92
                echo "                                                    <li>
                                                        <h2>";
                // line 93
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
                                                    </li>
                                                ";
            } else {
                // line 96
                echo "                                                    <li><span style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
                                                    <li>
                                                        <h2>";
                // line 98
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
                                                    </li>
                                                ";
            }
            // line 101
            echo "                                                ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 102
                echo "                                                    <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
                                                ";
            }
            // line 104
            echo "                                                ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 105
                echo "                                                    <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
                                                ";
            }
            // line 107
            echo "                                                ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 108
                echo "                                                    <li>
                                                        <hr>
                                                    </li>
                                                    ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 112
                    echo "                                                        <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                                                ";
            }
            // line 115
            echo "                                            </ul>
                                        ";
        }
        // line 117
        echo "                                        <div id=\"product\">
                                            ";
        // line 118
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 119
            echo "                                                <hr>
                                                <h3>";
            // line 120
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                                                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 122
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 123
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 125
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <select name=\"option[";
                    // line 126
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                    id=\"input-option";
                    // line 127
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                                                                <option value=\"\">";
                    // line 128
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                                                                ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 130
                        echo "                                                                    <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                        ";
                        // line 131
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 132
                            echo "                                                                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                        ";
                        }
                        // line 133
                        echo " </option>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "                                                            </select>
                                                        </div>
                                                    ";
                }
                // line 138
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 139
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 140
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 141
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 142
                        echo "                                                                    <div class=\"radio\">
                                                                        <label>
                                                                            <input type=\"radio\"
                                                                                   name=\"option[";
                        // line 145
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\"
                                                                                   value=\"";
                        // line 146
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 147
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 148
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\"
                                                                                                             class=\"img-thumbnail\"/> ";
                        }
                        // line 150
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 151
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 152
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 153
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 158
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 159
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 160
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 161
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 162
                        echo "                                                                    <div class=\"checkbox\">
                                                                        <label>
                                                                            <input type=\"checkbox\"
                                                                                   name=\"option[";
                        // line 165
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\"
                                                                                   value=\"";
                        // line 166
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 167
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 168
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\"
                                                                                                             class=\"img-thumbnail\"/> ";
                        }
                        // line 170
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 171
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 172
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 173
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 178
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 179
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 181
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <input type=\"text\" name=\"option[";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                   value=\"";
                    // line 183
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                   id=\"input-option";
                    // line 184
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                                                        </div>
                                                    ";
                }
                // line 187
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 188
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 190
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <textarea name=\"option[";
                    // line 191
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\"
                                                                      placeholder=\"";
                    // line 192
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                      id=\"input-option";
                    // line 193
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                      class=\"form-control\">";
                    // line 194
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                                                        </div>
                                                    ";
                }
                // line 197
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 198
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 199
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <button type=\"button\" id=\"button-upload";
                    // line 200
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                    data-loading-text=\"";
                    // line 201
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\"
                                                                    class=\"btn btn-default btn-block\"><i
                                                                        class=\"fa fa-upload\"></i> ";
                    // line 203
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 204
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\"
                                                                   id=\"input-option";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                                                        </div>
                                                    ";
                }
                // line 208
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 209
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 211
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\" name=\"option[";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 214
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-option";
                    // line 215
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 222
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 223
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 225
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\" name=\"option[";
                    // line 227
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 228
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-option";
                    // line 229
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 236
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 237
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 239
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\" name=\"option[";
                    // line 241
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 242
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\"
                                                                       id=\"input-option";
                    // line 243
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 250
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                                            ";
        }
        // line 252
        echo "                                            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 253
            echo "                                                <hr>
                                                <h3>";
            // line 254
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
                                                <div class=\"form-group required\">
                                                    <select name=\"recurring_id\" class=\"form-control\">
                                                        <option value=\"\">";
            // line 257
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                                                        ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 259
                echo "                                                            <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                                                    </select>
                                                    <div class=\"help-block\" id=\"recurring-description\"></div>
                                                </div>
                                            ";
        }
        // line 265
        echo "                                            <div class=\"form-group\">
                                                <label class=\"control-label\" for=\"input-quantity\">";
        // line 266
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                                                <input type=\"text\" name=\"quantity\" value=\"";
        // line 267
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                                       class=\"form-control\"/>
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 269
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
                                                <br/>
                                                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 271
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">";
        // line 272
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                                            </div>
                                            ";
        // line 274
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 275
            echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
                                            ";
        }
        // line 276
        echo "</div>
                                        ";
        // line 277
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 278
            echo "                                            <div class=\"rating\">
                                                <p>";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 280
                echo "                                                        ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 281
                    echo "<span
                                                                class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 284
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                                    onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 285
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                                                    / <a href=\"\"
                                                         onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 287
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
                                                </p>
                                                <hr>
                                                <!-- AddThis Button BEGIN -->
                                                <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 291
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a
                                                            class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a
                                                            class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a>
                                                    <a class=\"addthis_counter addthis_pill_style\"></a></div>
                                                <script type=\"text/javascript\"
                                                        src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
                                                <!-- AddThis Button END -->
                                            </div>
                                        ";
        }
        // line 300
        echo "                                    </div>
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class=\"product-tabs inner-bottom-xs  wow fadeInUp\" style=\"padding: 10px;\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 309
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
                            ";
        // line 310
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 311
            echo "                                <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
                            ";
        }
        // line 313
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 314
            echo "                                <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
                            ";
        }
        // line 316
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-description\">
                                ";
        // line 319
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
                                ";
        // line 320
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 321
            echo "                                    <hr>
                                    <p>";
            // line 322
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
                                        ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 324
                echo "                                            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
                                            ";
                } else {
                    // line 325
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 326
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
                                ";
        }
        // line 328
        echo "                            </div>
                            ";
        // line 329
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 330
            echo "                                <div class=\"tab-pane\" id=\"tab-specification\">
                                    <table class=\"table table-bordered\">
                                        ";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 333
                echo "                                            <thead>
                                            <tr>
                                                <td colspan=\"2\"><strong>";
                // line 335
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 340
                    echo "                                                <tr>
                                                    <td>";
                    // line 341
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                                                    <td>";
                    // line 342
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 345
                echo "                                            </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            echo "                                    </table>
                                </div>
                            ";
        }
        // line 350
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 351
            echo "                                <div class=\"tab-pane\" id=\"tab-review\">
                                    <form class=\"form-horizontal\" id=\"form-review\">
                                        <div id=\"review\"></div>
                                        <h2>";
            // line 354
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                                        ";
            // line 355
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 356
                echo "                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\" for=\"input-name\">";
                // line 358
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                                                    <input type=\"text\" name=\"name\" value=\"";
                // line 359
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\"
                                                           id=\"input-name\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\"
                                                           for=\"input-review\">";
                // line 366
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                                                    <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                              class=\"form-control\"></textarea>
                                                    <div class=\"help-block\">";
                // line 369
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\">";
                // line 374
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                                                    &nbsp;&nbsp;&nbsp; ";
                // line 375
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"1\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"2\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"3\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"4\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"5\"/>
                                                    &nbsp;";
                // line 385
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                                            </div>
                                            ";
                // line 387
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                                            <div class=\"buttons clearfix\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" id=\"button-review\"
                                                            data-loading-text=\"";
                // line 391
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\"
                                                            class=\"btn btn-primary\">";
                // line 392
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 396
                echo "                                            ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                                        ";
            }
            // line 398
            echo "                                    </form>
                                </div>
                            ";
        }
        // line 401
        echo "                        </div>
                    </div><!-- /.product-tabs -->

                    ";
        // line 404
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 405
            echo "                    <section class=\"section featured-product wow fadeInUp\">
                        <h3 class=\"section-title\">";
            // line 406
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
                        <div class=\"owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs\">
                            ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 409
                echo "                            <div class=\"item item-carousel\">
                                <div class=\"products\">

                                    <div class=\"product\">
                                        <div class=\"product-image\">
                                            <div class=\"image\">
                                                <a href=\"";
                // line 415
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"> <img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
                                            </div><!-- /.image -->
                                            ";
                // line 417
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 418
                    echo "                                                <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                            ";
                }
                // line 420
                echo "                                        </div><!-- /.product-image -->


                                        <div class=\"product-info text-left\">
                                            <h3 class=\"name\"><a href=\"";
                // line 424
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                            <div class=\"product-price\">
                                                ";
                // line 426
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 427
                    echo "                                                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 428
                        echo "                                                        <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                    ";
                    } else {
                        // line 430
                        echo "                                                        <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                        <span class=\"price-before-discount\">";
                        // line 431
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                    ";
                    }
                    // line 433
                    echo "                                                ";
                }
                // line 434
                echo "                                            </div><!-- /.product-price -->
                                        </div><!-- /.product-info -->
                                        <div class=\"cart clearfix animate-effect\">
                                            <div class=\"action\">
                                                <ul class=\"list-unstyled\">
                                                    <li class=\"add-cart-button btn-group\">
                                                        <button onclick=\"cart.add('";
                // line 440
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                    </li>
                                                    <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 442
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                    <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 443
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"> <i class=\"fa fa-signal\" aria-hidden=\"true\"></i> </a> </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 452
            echo "                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    ";
        }
        // line 455
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 461
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 466
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function () {
                \$('#recurring-description').html('');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-cart').button('loading');
            },
            complete: function () {
                \$('#button-cart').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('header').after('<div class=\"container\"><div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');

                    setTimeout(function () {
                        \$('#cart #cart-total').text(json['total']);
                        //\$('#cart > button').html('<span class=\"count\" id=\"cart-total\">' + json['total'] + '</span>');
                    }, 100);

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 546
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 551
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 557
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function () {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(node).button('loading');
                    },
                    complete: function () {
                        \$(node).button('reset');
                    },
                    success: function (json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 624
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 628
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function () {
                \$('#button-review').button('loading');
            },
            complete: function () {
                \$('#button-review').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function () {
        \$('.thumbnails').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>
";
        // line 666
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1504 => 666,  1463 => 628,  1456 => 624,  1386 => 557,  1377 => 551,  1369 => 546,  1286 => 466,  1278 => 461,  1268 => 455,  1263 => 452,  1246 => 443,  1240 => 442,  1233 => 440,  1225 => 434,  1222 => 433,  1217 => 431,  1212 => 430,  1206 => 428,  1203 => 427,  1201 => 426,  1192 => 424,  1186 => 420,  1180 => 418,  1178 => 417,  1165 => 415,  1157 => 409,  1153 => 408,  1148 => 406,  1145 => 405,  1143 => 404,  1138 => 401,  1133 => 398,  1127 => 396,  1120 => 392,  1116 => 391,  1109 => 387,  1104 => 385,  1091 => 375,  1087 => 374,  1079 => 369,  1073 => 366,  1063 => 359,  1059 => 358,  1055 => 356,  1053 => 355,  1049 => 354,  1044 => 351,  1041 => 350,  1036 => 347,  1029 => 345,  1020 => 342,  1016 => 341,  1013 => 340,  1009 => 339,  1002 => 335,  998 => 333,  994 => 332,  990 => 330,  988 => 329,  985 => 328,  976 => 326,  969 => 325,  959 => 324,  955 => 323,  951 => 322,  948 => 321,  946 => 320,  942 => 319,  937 => 316,  931 => 314,  928 => 313,  922 => 311,  920 => 310,  916 => 309,  905 => 300,  893 => 291,  886 => 287,  881 => 285,  873 => 284,  868 => 281,  862 => 280,  858 => 279,  855 => 278,  853 => 277,  850 => 276,  844 => 275,  842 => 274,  837 => 272,  833 => 271,  828 => 269,  823 => 267,  819 => 266,  816 => 265,  810 => 261,  799 => 259,  795 => 258,  791 => 257,  785 => 254,  782 => 253,  779 => 252,  776 => 251,  770 => 250,  760 => 243,  756 => 242,  752 => 241,  745 => 239,  737 => 237,  734 => 236,  724 => 229,  720 => 228,  716 => 227,  709 => 225,  701 => 223,  698 => 222,  688 => 215,  684 => 214,  680 => 213,  673 => 211,  665 => 209,  662 => 208,  656 => 205,  652 => 204,  648 => 203,  643 => 201,  639 => 200,  635 => 199,  628 => 198,  625 => 197,  619 => 194,  615 => 193,  611 => 192,  607 => 191,  601 => 190,  593 => 188,  590 => 187,  584 => 184,  578 => 183,  574 => 182,  568 => 181,  560 => 179,  557 => 178,  552 => 175,  544 => 173,  537 => 172,  535 => 171,  530 => 170,  517 => 168,  511 => 167,  507 => 166,  503 => 165,  498 => 162,  492 => 161,  488 => 160,  481 => 159,  478 => 158,  473 => 155,  465 => 153,  458 => 152,  456 => 151,  451 => 150,  438 => 148,  432 => 147,  428 => 146,  424 => 145,  419 => 142,  413 => 141,  409 => 140,  402 => 139,  399 => 138,  394 => 135,  387 => 133,  380 => 132,  378 => 131,  371 => 130,  367 => 129,  363 => 128,  359 => 127,  355 => 126,  349 => 125,  341 => 123,  338 => 122,  334 => 121,  330 => 120,  327 => 119,  325 => 118,  322 => 117,  318 => 115,  315 => 114,  304 => 112,  300 => 111,  295 => 108,  292 => 107,  284 => 105,  281 => 104,  273 => 102,  270 => 101,  264 => 98,  258 => 96,  252 => 93,  249 => 92,  247 => 91,  244 => 90,  242 => 89,  234 => 87,  226 => 85,  224 => 84,  217 => 83,  207 => 81,  205 => 80,  199 => 77,  195 => 75,  188 => 70,  185 => 69,  171 => 65,  167 => 64,  164 => 63,  159 => 62,  156 => 61,  145 => 57,  141 => 55,  139 => 54,  134 => 51,  131 => 50,  117 => 46,  111 => 45,  106 => 44,  101 => 43,  98 => 42,  87 => 38,  81 => 37,  78 => 36,  76 => 35,  70 => 31,  68 => 30,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
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
/* <div class="body-content outer-top-xs single-product">*/
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
/* */
/*                     <div class="detail-block">*/
/*                         <div class="row  wow fadeInUp">*/
/*                             {% if thumb or images %}*/
/*                             <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">*/
/*                                 <div class="product-item-holder size-big single-product-gallery small-gallery">*/
/* */
/*                                     <div id="owl-single-product">*/
/*                                         {% if thumb %}*/
/*                                         <div class="single-product-gallery-item" id="slide-thumb">*/
/*                                             <a data-lightbox="image-1" data-title="{{ heading_title }}" href="{{ popup }}">*/
/*                                                 <img class="img-responsive" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ thumb }}" />*/
/*                                             </a>*/
/*                                         </div><!-- /.single-product-gallery-item -->*/
/*                                         {% endif %}*/
/*                                         {% if images %}*/
/*                                             {% for key, image in images %}*/
/*                                             <div class="single-product-gallery-item" id="slide-image-{{ key }}">*/
/*                                                 <a data-lightbox="image-1" data-title="{{ heading_title }}" href="{{ image.popup }}">*/
/*                                                     <img class="img-responsive" alt="{{ heading_title }}" src="{{ image.thumb }}" data-echo="{{ image.thumb }}" />*/
/*                                                 </a>*/
/*                                             </div><!-- /.single-product-gallery-item -->*/
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </div><!-- /.single-product-slider -->*/
/*                                     <div class="single-product-gallery-thumbs gallery-thumbs">*/
/*                                         <div id="owl-single-product-thumbnails">*/
/*                                             {% if thumb %}*/
/*                                                 <div class="item">*/
/*                                                     <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide-thumb">*/
/*                                                         <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ popup }}" />*/
/*                                                     </a>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             {% if images %}*/
/*                                                 {% for key, image in images %}*/
/*                                                     <div class="item">*/
/*                                                         <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide-image-{{ key }}">*/
/*                                                             <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ image.thumb }}" data-echo="{{ image.popup }}" />*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                         </div><!-- /#owl-single-product-thumbnails -->*/
/*                                     </div><!-- /.gallery-thumbs -->*/
/*                                 </div><!-- /.single-product-gallery -->*/
/*                             </div><!-- /.gallery-holder -->*/
/*                             {% endif %}*/
/*                             <div class='col-sm-6 col-md-7 product-info-block'>*/
/*                                 <div class="product-info">*/
/*                                     <h1 class="name">{{ heading_title }}</h1>*/
/*                                     <div class="product-info-description">*/
/*                                         <ul class="list-unstyled">*/
/*                                             {% if manufacturer %}*/
/*                                                 <li>{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                                             {% endif %}*/
/*                                             <li>{{ text_model }} {{ model }}</li>*/
/*                                             {% if reward %}*/
/*                                                 <li>{{ text_reward }} {{ reward }}</li>*/
/*                                             {% endif %}*/
/*                                             <li>{{ text_stock }} {{ stock }}</li>*/
/*                                         </ul>*/
/*                                         {% if price %}*/
/*                                             <ul class="list-unstyled">*/
/*                                                 {% if not special %}*/
/*                                                     <li>*/
/*                                                         <h2>{{ price }}</h2>*/
/*                                                     </li>*/
/*                                                 {% else %}*/
/*                                                     <li><span style="text-decoration: line-through;">{{ price }}</span></li>*/
/*                                                     <li>*/
/*                                                         <h2>{{ special }}</h2>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                                 {% if tax %}*/
/*                                                     <li>{{ text_tax }} {{ tax }}</li>*/
/*                                                 {% endif %}*/
/*                                                 {% if points %}*/
/*                                                     <li>{{ text_points }} {{ points }}</li>*/
/*                                                 {% endif %}*/
/*                                                 {% if discounts %}*/
/*                                                     <li>*/
/*                                                         <hr>*/
/*                                                     </li>*/
/*                                                     {% for discount in discounts %}*/
/*                                                         <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         {% endif %}*/
/*                                         <div id="product">*/
/*                                             {% if options %}*/
/*                                                 <hr>*/
/*                                                 <h3>{{ text_option }}</h3>*/
/*                                                 {% for option in options %}*/
/*                                                     {% if option.type == 'select' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <select name="option[{{ option.product_option_id }}]"*/
/*                                                                     id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                                                                 <option value="">{{ text_select }}</option>*/
/*                                                                 {% for option_value in option.product_option_value %}*/
/*                                                                     <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                                                                         {% if option_value.price %}*/
/*                                                                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                         {% endif %} </option>*/
/*                                                                 {% endfor %}*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'radio' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                                     <div class="radio">*/
/*                                                                         <label>*/
/*                                                                             <input type="radio"*/
/*                                                                                    name="option[{{ option.product_option_id }}]"*/
/*                                                                                    value="{{ option_value.product_option_value_id }}"/>*/
/*                                                                             {% if option_value.image %} <img src="{{ option_value.image }}"*/
/*                                                                                                              alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}"*/
/*                                                                                                              class="img-thumbnail"/> {% endif %}*/
/*                                                                             {{ option_value.name }}*/
/*                                                                             {% if option_value.price %}*/
/*                                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                             {% endif %} </label>*/
/*                                                                     </div>*/
/*                                                                 {% endfor %} </div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'checkbox' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                                     <div class="checkbox">*/
/*                                                                         <label>*/
/*                                                                             <input type="checkbox"*/
/*                                                                                    name="option[{{ option.product_option_id }}][]"*/
/*                                                                                    value="{{ option_value.product_option_value_id }}"/>*/
/*                                                                             {% if option_value.image %} <img src="{{ option_value.image }}"*/
/*                                                                                                              alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}"*/
/*                                                                                                              class="img-thumbnail"/> {% endif %}*/
/*                                                                             {{ option_value.name }}*/
/*                                                                             {% if option_value.price %}*/
/*                                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                             {% endif %} </label>*/
/*                                                                     </div>*/
/*                                                                 {% endfor %} </div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'text' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                    value="{{ option.value }}" placeholder="{{ option.name }}"*/
/*                                                                    id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'textarea' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <textarea name="option[{{ option.product_option_id }}]" rows="5"*/
/*                                                                       placeholder="{{ option.name }}"*/
/*                                                                       id="input-option{{ option.product_option_id }}"*/
/*                                                                       class="form-control">{{ option.value }}</textarea>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'file' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <button type="button" id="button-upload{{ option.product_option_id }}"*/
/*                                                                     data-loading-text="{{ text_loading }}"*/
/*                                                                     class="btn btn-default btn-block"><i*/
/*                                                                         class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                                             <input type="hidden" name="option[{{ option.product_option_id }}]" value=""*/
/*                                                                    id="input-option{{ option.product_option_id }}"/>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'date' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group date">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="YYYY-MM-DD"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'datetime' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group datetime">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'time' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group time">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="HH:mm"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                             {% if recurrings %}*/
/*                                                 <hr>*/
/*                                                 <h3>{{ text_payment_recurring }}</h3>*/
/*                                                 <div class="form-group required">*/
/*                                                     <select name="recurring_id" class="form-control">*/
/*                                                         <option value="">{{ text_select }}</option>*/
/*                                                         {% for recurring in recurrings %}*/
/*                                                             <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                     <div class="help-block" id="recurring-description"></div>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*                                                 <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity"*/
/*                                                        class="form-control"/>*/
/*                                                 <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                                                 <br/>*/
/*                                                 <button type="button" id="button-cart" data-loading-text="{{ text_loading }}"*/
/*                                                         class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*                                             </div>*/
/*                                             {% if minimum > 1 %}*/
/*                                                 <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*                                             {% endif %}</div>*/
/*                                         {% if review_status %}*/
/*                                             <div class="rating">*/
/*                                                 <p>{% for i in 1..5 %}*/
/*                                                         {% if rating < i %}<span class="fa fa-stack"><i*/
/*                                                                     class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span*/
/*                                                                 class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i*/
/*                                                                     class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                                                     {% endfor %} <a href=""*/
/*                                                                     onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>*/
/*                                                     / <a href=""*/
/*                                                          onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a>*/
/*                                                 </p>*/
/*                                                 <hr>*/
/*                                                 <!-- AddThis Button BEGIN -->*/
/*                                                 <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a*/
/*                                                             class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a*/
/*                                                             class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a>*/
/*                                                     <a class="addthis_counter addthis_pill_style"></a></div>*/
/*                                                 <script type="text/javascript"*/
/*                                                         src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*                                                 <!-- AddThis Button END -->*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div><!-- /.product-info -->*/
/*                             </div><!-- /.col-sm-7 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/* */
/*                     <div class="product-tabs inner-bottom-xs  wow fadeInUp" style="padding: 10px;">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active">*/
/*                                 <a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*                             {% if attribute_groups %}*/
/*                                 <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*                             {% endif %}*/
/*                             {% if review_status %}*/
/*                                 <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab-description">*/
/*                                 {{ description }}*/
/*                                 {% if tags %}*/
/*                                     <hr>*/
/*                                     <p>{{ text_tags }}*/
/*                                         {% for i in 0..tags|length %}*/
/*                                             {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*                                             {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*                                         {% endfor %} </p>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% if attribute_groups %}*/
/*                                 <div class="tab-pane" id="tab-specification">*/
/*                                     <table class="table table-bordered">*/
/*                                         {% for attribute_group in attribute_groups %}*/
/*                                             <thead>*/
/*                                             <tr>*/
/*                                                 <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                                             </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                             {% for attribute in attribute_group.attribute %}*/
/*                                                 <tr>*/
/*                                                     <td>{{ attribute.name }}</td>*/
/*                                                     <td>{{ attribute.text }}</td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         {% endfor %}*/
/*                                     </table>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if review_status %}*/
/*                                 <div class="tab-pane" id="tab-review">*/
/*                                     <form class="form-horizontal" id="form-review">*/
/*                                         <div id="review"></div>*/
/*                                         <h2>{{ text_write }}</h2>*/
/*                                         {% if review_guest %}*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                                                     <input type="text" name="name" value="{{ customer_name }}"*/
/*                                                            id="input-name" class="form-control"/>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label"*/
/*                                                            for="input-review">{{ entry_review }}</label>*/
/*                                                     <textarea name="text" rows="5" id="input-review"*/
/*                                                               class="form-control"></textarea>*/
/*                                                     <div class="help-block">{{ text_note }}</div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label">{{ entry_rating }}</label>*/
/*                                                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                                                     <input type="radio" name="rating" value="1"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="2"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="3"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="4"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="5"/>*/
/*                                                     &nbsp;{{ entry_good }}</div>*/
/*                                             </div>*/
/*                                             {{ captcha }}*/
/*                                             <div class="buttons clearfix">*/
/*                                                 <div class="pull-right">*/
/*                                                     <button type="button" id="button-review"*/
/*                                                             data-loading-text="{{ text_loading }}"*/
/*                                                             class="btn btn-primary">{{ button_continue }}</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             {{ text_login }}*/
/*                                         {% endif %}*/
/*                                     </form>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div><!-- /.product-tabs -->*/
/* */
/*                     {% if products %}*/
/*                     <section class="section featured-product wow fadeInUp">*/
/*                         <h3 class="section-title">{{ text_related }}</h3>*/
/*                         <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">*/
/*                             {% for product in products %}*/
/*                             <div class="item item-carousel">*/
/*                                 <div class="products">*/
/* */
/*                                     <div class="product">*/
/*                                         <div class="product-image">*/
/*                                             <div class="image">*/
/*                                                 <a href="{{ product.href }}" title="{{ product.name }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/></a>*/
/*                                             </div><!-- /.image -->*/
/*                                             {% if product.percent %}*/
/*                                                 <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                             {% endif %}*/
/*                                         </div><!-- /.product-image -->*/
/* */
/* */
/*                                         <div class="product-info text-left">*/
/*                                             <h3 class="name"><a href="{{ product.href }}" title="{{ product.name }}">{{ product.name }}</a></h3>*/
/*                                             <div class="product-price">*/
/*                                                 {% if product.price %}*/
/*                                                     {% if not product.special %}*/
/*                                                         <span class="price"> {{ product.price }} </span>*/
/*                                                     {% else %}*/
/*                                                         <span class="price">{{ product.special }}</span>*/
/*                                                         <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                     {% endif %}*/
/*                                                 {% endif %}*/
/*                                             </div><!-- /.product-price -->*/
/*                                         </div><!-- /.product-info -->*/
/*                                         <div class="cart clearfix animate-effect">*/
/*                                             <div class="action">*/
/*                                                 <ul class="list-unstyled">*/
/*                                                     <li class="add-cart-button btn-group">*/
/*                                                         <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                     </li>*/
/*                                                     <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                     <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>*/
/*                                                 </ul>*/
/*                                             </div><!-- /.action -->*/
/*                                         </div><!-- /.cart -->*/
/*                                     </div><!-- /.product -->*/
/* */
/*                                 </div><!-- /.products -->*/
/*                             </div><!-- /.item -->*/
/*                             {% endfor %}*/
/*                         </div><!-- /.home-owl-carousel -->*/
/*                     </section><!-- /.section -->*/
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
/*     $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/getRecurringDescription',*/
/*             type: 'post',*/
/*             data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#recurring-description').html('');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/* */
/*                 if (json['success']) {*/
/*                     $('#recurring-description').html(json['success']);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#button-cart').on('click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/cart/add',*/
/*             type: 'post',*/
/*             data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-cart').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-cart').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['error']) {*/
/*                     if (json['error']['option']) {*/
/*                         for (i in json['error']['option']) {*/
/*                             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*                             if (element.parent().hasClass('input-group')) {*/
/*                                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             } else {*/
/*                                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/*                     if (json['error']['recurring']) {*/
/*                         $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('header').after('<div class="container"><div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');*/
/* */
/*                     setTimeout(function () {*/
/*                         $('#cart #cart-total').text(json['total']);*/
/*                         //$('#cart > button').html('<span class="count" id="cart-total">' + json['total'] + '</span>');*/
/*                     }, 100);*/
/* */
/*                     $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/*                     $('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('button[id^=\'button-upload\']').on('click', function () {*/
/*         var node = this;*/
/* */
/*         $('#form-upload').remove();*/
/* */
/*         $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*         $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*         if (typeof timer != 'undefined') {*/
/*             clearInterval(timer);*/
/*         }*/
/* */
/*         timer = setInterval(function () {*/
/*             if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*                 clearInterval(timer);*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=tool/upload',*/
/*                     type: 'post',*/
/*                     dataType: 'json',*/
/*                     data: new FormData($('#form-upload')[0]),*/
/*                     cache: false,*/
/*                     contentType: false,*/
/*                     processData: false,*/
/*                     beforeSend: function () {*/
/*                         $(node).button('loading');*/
/*                     },*/
/*                     complete: function () {*/
/*                         $(node).button('reset');*/
/*                     },*/
/*                     success: function (json) {*/
/*                         $('.text-danger').remove();*/
/* */
/*                         if (json['error']) {*/
/*                             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*                         }*/
/* */
/*                         if (json['success']) {*/
/*                             alert(json['success']);*/
/* */
/*                             $(node).parent().find('input').val(json['code']);*/
/*                         }*/
/*                     },*/
/*                     error: function (xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         }, 500);*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#review').delegate('.pagination a', 'click', function (e) {*/
/*         e.preventDefault();*/
/* */
/*         $('#review').fadeOut('slow');*/
/* */
/*         $('#review').load(this.href);*/
/* */
/*         $('#review').fadeIn('slow');*/
/*     });*/
/* */
/*     $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*     $('#button-review').on('click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*             type: 'post',*/
/*             dataType: 'json',*/
/*             data: $("#form-review").serialize(),*/
/*             beforeSend: function () {*/
/*                 $('#button-review').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-review').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                     $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*                     $('input[name=\'name\']').val('');*/
/*                     $('textarea[name=\'text\']').val('');*/
/*                     $('input[name=\'rating\']:checked').prop('checked', false);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $(document).ready(function () {*/
/*         $('.thumbnails').magnificPopup({*/
/*             type: 'image',*/
/*             delegate: 'a',*/
/*             gallery: {*/
/*                 enabled: true*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/
