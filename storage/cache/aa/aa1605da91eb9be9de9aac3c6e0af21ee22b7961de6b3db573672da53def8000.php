<?php

/* default/template/account/register.twig */
class __TwigTemplate_400dcf16a6db1cc33cc115cb33d98f1654f885b8ca5a546c903e5d15508dac1f extends Twig_Template
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
<div class=\"body-content\">
    <div class=\"container\">
        <div class=\"contact-page\" style=\"margin-bottom: 20px;\">
            <div id=\"content\">
                <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                ";
        // line 21
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                <p>";
        // line 22
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
                <form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <fieldset id=\"account\">
                        <legend>";
        // line 25
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
                        <div class=\"form-group required\"
                             style=\"display: ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                            <label class=\"col-sm-2 control-label\">";
        // line 28
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 30
            echo "                                    ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 31
                echo "                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"customer_group_id\"
                                                       value=\"";
                // line 34
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\"/>
                                                ";
                // line 35
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                                        </div>
                                    ";
            } else {
                // line 38
                echo "                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"customer_group_id\"
                                                       value=\"";
                // line 41
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\"/>
                                                ";
                // line 42
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                                        </div>
                                    ";
            }
            // line 45
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 48
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"firstname\" value=\"";
        // line 50
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\"
                                       placeholder=\"";
        // line 51
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                                ";
        // line 52
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 53
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                                ";
        }
        // line 54
        echo " </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 57
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"lastname\" value=\"";
        // line 59
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\"
                                       id=\"input-lastname\" class=\"form-control\"/>
                                ";
        // line 61
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 62
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                                ";
        }
        // line 63
        echo " </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 66
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" name=\"email\" value=\"";
        // line 68
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\"
                                       id=\"input-email\" class=\"form-control\"/>
                                ";
        // line 70
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 71
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                                ";
        }
        // line 72
        echo " </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 75
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 77
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\"
                                       placeholder=\"";
        // line 78
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                                ";
        // line 79
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 80
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                                ";
        }
        // line 81
        echo " </div>
                        </div>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 84
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 85
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 86
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-custom-field";
                // line 88
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"custom_field[";
                // line 90
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                                id=\"input-custom-field";
                // line 91
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                                class=\"form-control\">
                                            <option value=\"\">";
                // line 93
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>


                                            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 97
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "location", array()), array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 98
                        echo "                                                    <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"
                                                            selected=\"selected\">";
                        // line 99
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                                                ";
                    } else {
                        // line 101
                        echo "                                                    <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                                                ";
                    }
                    // line 103
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                                        </select>
                                        ";
                // line 105
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 106
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 107
                echo "</div>
                                </div>
                            ";
            }
            // line 110
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 111
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 112
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 113
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div> ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 116
                    echo "                                                <div class=\"radio\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 117
                        echo "                                                        <label>
                                                            <input type=\"radio\"
                                                                   name=\"custom_field[";
                        // line 119
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\"
                                                                   value=\"";
                        // line 120
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"
                                                                   checked=\"checked\"/>
                                                            ";
                        // line 122
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                                                    ";
                    } else {
                        // line 124
                        echo "                                                        <label>
                                                            <input type=\"radio\"
                                                                   name=\"custom_field[";
                        // line 126
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\"
                                                                   value=\"";
                        // line 127
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                                                            ";
                        // line 128
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                                                    ";
                    }
                    // line 129
                    echo " </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "</div>
                                        ";
                // line 131
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 132
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 133
                echo "</div>
                                </div>
                            ";
            }
            // line 136
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 137
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 138
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 139
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div> ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 142
                    echo "                                                <div class=\"checkbox\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 143
                        echo "                                                        <label>
                                                            <input type=\"checkbox\"
                                                                   name=\"custom_field[";
                        // line 145
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\"
                                                                   value=\"";
                        // line 146
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"
                                                                   checked=\"checked\"/>
                                                            ";
                        // line 148
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                                                    ";
                    } else {
                        // line 150
                        echo "                                                        <label>
                                                            <input type=\"checkbox\"
                                                                   name=\"custom_field[";
                        // line 152
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\"
                                                                   value=\"";
                        // line 153
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                                                            ";
                        // line 154
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                                                    ";
                    }
                    // line 155
                    echo " </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo " </div>
                                        ";
                // line 157
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 158
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 159
                echo " </div>
                                </div>
                            ";
            }
            // line 162
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 163
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 164
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-custom-field";
                // line 166
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 169
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                               value=\"";
                // line 170
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\"
                                               placeholder=\"";
                // line 171
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\"
                                               id=\"input-custom-field";
                // line 172
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                               class=\"form-control\"/>
                                        ";
                // line 174
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 175
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 176
                echo " </div>
                                </div>
                            ";
            }
            // line 179
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 180
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 181
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-custom-field";
                // line 183
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 186
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 187
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\"
                                            id=\"input-custom-field";
                // line 188
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                            class=\"form-control\">";
                // line 189
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
                                        ";
                // line 190
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 191
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 192
                echo " </div>
                                </div>
                            ";
            }
            // line 195
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 196
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 197
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 198
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <button type=\"button\" id=\"button-custom-field";
                // line 200
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                                data-loading-text=\"";
                // line 201
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i
                                                    class=\"fa fa-upload\"></i> ";
                // line 202
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                                        <input type=\"hidden\"
                                               name=\"custom_field[";
                // line 204
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                               value=\"";
                // line 205
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\"/>
                                        ";
                // line 206
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 207
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 208
                echo "</div>
                                </div>
                            ";
            }
            // line 211
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 212
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 213
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-custom-field";
                // line 215
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group date\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 219
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                                   value=\"";
                // line 220
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\"
                                                   placeholder=\"";
                // line 221
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                                   id=\"input-custom-field";
                // line 222
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        ";
                // line 227
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 228
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 229
                echo " </div>
                                </div>
                            ";
            }
            // line 232
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 233
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 234
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-custom-field";
                // line 236
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group time\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 240
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                                   value=\"";
                // line 241
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\"
                                                   placeholder=\"";
                // line 242
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\"
                                                   id=\"input-custom-field";
                // line 243
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        ";
                // line 248
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 249
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 250
                echo " </div>
                                </div>
                            ";
            }
            // line 253
            echo "                            ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 254
                echo "                                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\"
                                     data-sort=\"";
                // line 255
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-custom-field";
                // line 257
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 261
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\"
                                                   value=\"";
                // line 262
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\"
                                                   placeholder=\"";
                // line 263
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                   id=\"input-custom-field";
                // line 264
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        ";
                // line 269
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 270
                    echo "                                            <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                                        ";
                }
                // line 271
                echo " </div>
                                </div>
                            ";
            }
            // line 274
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                    </fieldset>
                    <fieldset>
                        <legend>";
        // line 277
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 279
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"password\" name=\"password\" value=\"";
        // line 281
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\"
                                       placeholder=\"";
        // line 282
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                ";
        // line 283
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 284
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                                ";
        }
        // line 285
        echo " </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 288
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"password\" name=\"confirm\" value=\"";
        // line 290
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\"
                                       placeholder=\"";
        // line 291
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                                ";
        // line 292
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 293
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                                ";
        }
        // line 294
        echo " </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>";
        // line 298
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 300
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
                            <div class=\"col-sm-10\"> ";
        // line 301
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 302
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                        ";
            // line 304
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                        ";
            // line 307
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                                ";
        } else {
            // line 309
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                        ";
            // line 311
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                        ";
            // line 314
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                                ";
        }
        // line 315
        echo " </div>
                        </div>
                    </fieldset>
                    ";
        // line 318
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
                    ";
        // line 319
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 320
            echo "                        <div class=\"buttons\">
                            <div class=\"pull-right\">";
            // line 321
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
                                ";
            // line 322
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 323
                echo "                                    <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                                ";
            } else {
                // line 325
                echo "                                    <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                                ";
            }
            // line 327
            echo "                                &nbsp;
                                <input type=\"submit\" value=\"";
            // line 328
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\"/>
                            </div>
                        </div>
                    ";
        } else {
            // line 332
            echo "                        <div class=\"buttons\">
                            <div class=\"pull-right\">
                                <input type=\"submit\" value=\"";
            // line 334
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\"/>
                            </div>
                        </div>
                    ";
        }
        // line 338
        echo "                </form>
            </div>
        </div>
        <!-- /.row -->
        ";
        // line 342
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 347
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function (json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function () {
        var element = this;

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
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
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
    \$('.date').datetimepicker({
        language: '";
        // line 449
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 454
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 459
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 464
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1152 => 464,  1144 => 459,  1136 => 454,  1128 => 449,  1023 => 347,  1015 => 342,  1009 => 338,  1002 => 334,  998 => 332,  991 => 328,  988 => 327,  984 => 325,  980 => 323,  978 => 322,  974 => 321,  971 => 320,  969 => 319,  965 => 318,  960 => 315,  955 => 314,  949 => 311,  945 => 309,  940 => 307,  934 => 304,  930 => 302,  928 => 301,  924 => 300,  919 => 298,  913 => 294,  907 => 293,  905 => 292,  901 => 291,  897 => 290,  892 => 288,  887 => 285,  881 => 284,  879 => 283,  875 => 282,  871 => 281,  866 => 279,  861 => 277,  857 => 275,  851 => 274,  846 => 271,  840 => 270,  838 => 269,  830 => 264,  826 => 263,  818 => 262,  812 => 261,  803 => 257,  798 => 255,  793 => 254,  790 => 253,  785 => 250,  779 => 249,  777 => 248,  769 => 243,  765 => 242,  757 => 241,  751 => 240,  742 => 236,  737 => 234,  732 => 233,  729 => 232,  724 => 229,  718 => 228,  716 => 227,  708 => 222,  704 => 221,  696 => 220,  690 => 219,  681 => 215,  676 => 213,  671 => 212,  668 => 211,  663 => 208,  657 => 207,  655 => 206,  647 => 205,  641 => 204,  636 => 202,  632 => 201,  628 => 200,  623 => 198,  619 => 197,  614 => 196,  611 => 195,  606 => 192,  600 => 191,  598 => 190,  590 => 189,  586 => 188,  582 => 187,  576 => 186,  568 => 183,  563 => 181,  558 => 180,  555 => 179,  550 => 176,  544 => 175,  542 => 174,  537 => 172,  533 => 171,  525 => 170,  519 => 169,  511 => 166,  506 => 164,  501 => 163,  498 => 162,  493 => 159,  487 => 158,  485 => 157,  482 => 156,  475 => 155,  470 => 154,  466 => 153,  460 => 152,  456 => 150,  451 => 148,  446 => 146,  440 => 145,  436 => 143,  433 => 142,  429 => 141,  424 => 139,  420 => 138,  415 => 137,  412 => 136,  407 => 133,  401 => 132,  399 => 131,  396 => 130,  389 => 129,  384 => 128,  380 => 127,  374 => 126,  370 => 124,  365 => 122,  360 => 120,  354 => 119,  350 => 117,  347 => 116,  343 => 115,  338 => 113,  334 => 112,  329 => 111,  326 => 110,  321 => 107,  315 => 106,  313 => 105,  310 => 104,  304 => 103,  296 => 101,  291 => 99,  286 => 98,  283 => 97,  279 => 96,  273 => 93,  268 => 91,  262 => 90,  255 => 88,  250 => 86,  245 => 85,  242 => 84,  238 => 83,  234 => 81,  228 => 80,  226 => 79,  222 => 78,  218 => 77,  213 => 75,  208 => 72,  202 => 71,  200 => 70,  193 => 68,  188 => 66,  183 => 63,  177 => 62,  175 => 61,  168 => 59,  163 => 57,  158 => 54,  152 => 53,  150 => 52,  146 => 51,  142 => 50,  137 => 48,  127 => 45,  121 => 42,  117 => 41,  112 => 38,  106 => 35,  102 => 34,  97 => 31,  94 => 30,  90 => 29,  86 => 28,  78 => 27,  73 => 25,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  43 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
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
/*                 {{ content_top }}*/
/*                 <p>{{ text_account_already }}</p>*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*                     <fieldset id="account">*/
/*                         <legend>{{ text_your_details }}</legend>*/
/*                         <div class="form-group required"*/
/*                              style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*                             <label class="col-sm-2 control-label">{{ entry_customer_group }}</label>*/
/*                             <div class="col-sm-10">{% for customer_group in customer_groups %}*/
/*                                     {% if customer_group.customer_group_id == customer_group_id %}*/
/*                                         <div class="radio">*/
/*                                             <label>*/
/*                                                 <input type="radio" name="customer_group_id"*/
/*                                                        value="{{ customer_group.customer_group_id }}" checked="checked"/>*/
/*                                                 {{ customer_group.name }}</label>*/
/*                                         </div>*/
/*                                     {% else %}*/
/*                                         <div class="radio">*/
/*                                             <label>*/
/*                                                 <input type="radio" name="customer_group_id"*/
/*                                                        value="{{ customer_group.customer_group_id }}"/>*/
/*                                                 {{ customer_group.name }}</label>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="firstname" value="{{ firstname }}"*/
/*                                        placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control"/>*/
/*                                 {% if error_firstname %}*/
/*                                     <div class="text-danger">{{ error_firstname }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}"*/
/*                                        id="input-lastname" class="form-control"/>*/
/*                                 {% if error_lastname %}*/
/*                                     <div class="text-danger">{{ error_lastname }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}"*/
/*                                        id="input-email" class="form-control"/>*/
/*                                 {% if error_email %}*/
/*                                     <div class="text-danger">{{ error_email }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="tel" name="telephone" value="{{ telephone }}"*/
/*                                        placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*                                 {% if error_telephone %}*/
/*                                     <div class="text-danger">{{ error_telephone }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                         {% for custom_field in custom_fields %}*/
/*                             {% if custom_field.type == 'select' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                 id="input-custom-field{{ custom_field.custom_field_id }}"*/
/*                                                 class="form-control">*/
/*                                             <option value="">{{ text_select }}</option>*/
/* */
/* */
/*                                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                                 {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                                                     <option value="{{ custom_field_value.custom_field_value_id }}"*/
/*                                                             selected="selected">{{ custom_field_value.name }}</option>*/
/*                                                 {% else %}*/
/*                                                     <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %}</div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'radio' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                                 <div class="radio">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                                                         <label>*/
/*                                                             <input type="radio"*/
/*                                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                                    value="{{ custom_field_value.custom_field_value_id }}"*/
/*                                                                    checked="checked"/>*/
/*                                                             {{ custom_field_value.name }}</label>*/
/*                                                     {% else %}*/
/*                                                         <label>*/
/*                                                             <input type="radio"*/
/*                                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                                    value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                                                             {{ custom_field_value.name }}</label>*/
/*                                                     {% endif %} </div>*/
/*                                             {% endfor %}</div>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %}</div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'checkbox' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                                 <div class="checkbox">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                                                         <label>*/
/*                                                             <input type="checkbox"*/
/*                                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]"*/
/*                                                                    value="{{ custom_field_value.custom_field_value_id }}"*/
/*                                                                    checked="checked"/>*/
/*                                                             {{ custom_field_value.name }}</label>*/
/*                                                     {% else %}*/
/*                                                         <label>*/
/*                                                             <input type="checkbox"*/
/*                                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]"*/
/*                                                                    value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                                                             {{ custom_field_value.name }}</label>*/
/*                                                     {% endif %} </div>*/
/*                                             {% endfor %} </div>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %} </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'text' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text"*/
/*                                                name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}"*/
/*                                                placeholder="{{ custom_field.name }}"*/
/*                                                id="input-custom-field{{ custom_field.custom_field_id }}"*/
/*                                                class="form-control"/>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %} </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'textarea' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                     <textarea*/
/*                                             name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                             rows="5" placeholder="{{ custom_field.name }}"*/
/*                                             id="input-custom-field{{ custom_field.custom_field_id }}"*/
/*                                             class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %} </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'file' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}"*/
/*                                                 data-loading-text="{{ text_loading }}" class="btn btn-default"><i*/
/*                                                     class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                         <input type="hidden"*/
/*                                                name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}"/>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %}</div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'date' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="input-group date">*/
/*                                             <input type="text"*/
/*                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                    value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}"*/
/*                                                    placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD"*/
/*                                                    id="input-custom-field{{ custom_field.custom_field_id }}"*/
/*                                                    class="form-control"/>*/
/*                                             <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %} </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'time' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="input-group time">*/
/*                                             <input type="text"*/
/*                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                    value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}"*/
/*                                                    placeholder="{{ custom_field.name }}" data-date-format="HH:mm"*/
/*                                                    id="input-custom-field{{ custom_field.custom_field_id }}"*/
/*                                                    class="form-control"/>*/
/*                                             <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %} </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'time' %}*/
/*                                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field"*/
/*                                      data-sort="{{ custom_field.sort_order }}">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="input-group datetime">*/
/*                                             <input type="text"*/
/*                                                    name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]"*/
/*                                                    value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}"*/
/*                                                    placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm"*/
/*                                                    id="input-custom-field{{ custom_field.custom_field_id }}"*/
/*                                                    class="form-control"/>*/
/*                                             <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                         {% endif %} </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </fieldset>*/
/*                     <fieldset>*/
/*                         <legend>{{ text_your_password }}</legend>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="password" name="password" value="{{ password }}"*/
/*                                        placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                                 {% if error_password %}*/
/*                                     <div class="text-danger">{{ error_password }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="password" name="confirm" value="{{ confirm }}"*/
/*                                        placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control"/>*/
/*                                 {% if error_confirm %}*/
/*                                     <div class="text-danger">{{ error_confirm }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                     <fieldset>*/
/*                         <legend>{{ text_newsletter }}</legend>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_newsletter }}</label>*/
/*                             <div class="col-sm-10"> {% if newsletter %}*/
/*                                     <label class="radio-inline">*/
/*                                         <input type="radio" name="newsletter" value="1" checked="checked"/>*/
/*                                         {{ text_yes }}</label>*/
/*                                     <label class="radio-inline">*/
/*                                         <input type="radio" name="newsletter" value="0"/>*/
/*                                         {{ text_no }}</label>*/
/*                                 {% else %}*/
/*                                     <label class="radio-inline">*/
/*                                         <input type="radio" name="newsletter" value="1"/>*/
/*                                         {{ text_yes }}</label>*/
/*                                     <label class="radio-inline">*/
/*                                         <input type="radio" name="newsletter" value="0" checked="checked"/>*/
/*                                         {{ text_no }}</label>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                     {{ captcha }}*/
/*                     {% if text_agree %}*/
/*                         <div class="buttons">*/
/*                             <div class="pull-right">{{ text_agree }}*/
/*                                 {% if agree %}*/
/*                                     <input type="checkbox" name="agree" value="1" checked="checked"/>*/
/*                                 {% else %}*/
/*                                     <input type="checkbox" name="agree" value="1"/>*/
/*                                 {% endif %}*/
/*                                 &nbsp;*/
/*                                 <input type="submit" value="{{ button_continue }}" class="btn btn-primary"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div class="buttons">*/
/*                             <div class="pull-right">*/
/*                                 <input type="submit" value="{{ button_continue }}" class="btn btn-primary"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ column_right }}*/
/* <script type="text/javascript"><!--*/
/*     // Sort the custom fields*/
/*     $('#account .form-group[data-sort]').detach().each(function () {*/
/*         if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/*             $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/*             $('#account .form-group:last').after(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/*             $('#account .form-group:last').after(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/*             $('#account .form-group:first').before(this);*/
/*         }*/
/*     });*/
/* */
/*     $('input[name=\'customer_group_id\']').on('change', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/*             dataType: 'json',*/
/*             success: function (json) {*/
/*                 $('.custom-field').hide();*/
/*                 $('.custom-field').removeClass('required');*/
/* */
/*                 for (i = 0; i < json.length; i++) {*/
/*                     custom_field = json[i];*/
/* */
/*                     $('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*                     if (custom_field['required']) {*/
/*                         $('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*                     }*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $('input[name=\'customer_group_id\']:checked').trigger('change');*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('button[id^=\'button-custom-field\']').on('click', function () {*/
/*         var element = this;*/
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
/*                         $(element).button('loading');*/
/*                     },*/
/*                     complete: function () {*/
/*                         $(element).button('reset');*/
/*                     },*/
/*                     success: function (json) {*/
/*                         $(element).parent().find('.text-danger').remove();*/
/* */
/*                         if (json['error']) {*/
/*                             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*                         }*/
/* */
/*                         if (json['success']) {*/
/*                             alert(json['success']);*/
/* */
/*                             $(element).parent().find('input').val(json['code']);*/
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
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/
