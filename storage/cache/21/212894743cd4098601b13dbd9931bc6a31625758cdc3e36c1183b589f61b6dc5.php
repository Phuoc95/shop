<?php

/* news/category_form.twig */
class __TwigTemplate_f6d3747e61e4fadc4ff554d6fc7c426eeae3bc237bdd7953c6ffb82d6b9fc43e extends Twig_Template
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
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\"
                      class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                                    <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img
                                                    src=\"language/";
            // line 42
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\"
                                                    title=\"";
            // line 43
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"category_description[";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\"
                                                       value=\"";
            // line 55
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 56
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\"
                                                       id=\"input-name";
            // line 57
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                                                ";
            // line 58
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 59
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                                                ";
            }
            // line 61
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 65
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"category_description[";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\"
                                                        placeholder=\"";
            // line 69
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\"
                                                        id=\"input-description";
            // line 70
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 71
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\"
                                                        class=\"form-control\">";
            // line 72
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"category_description[";
            // line 80
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\"
                                                       value=\"";
            // line 81
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 82
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 83
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                       class=\"form-control\"/>
                                                ";
            // line 85
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 86
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                                                ";
            }
            // line 88
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 92
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"category_description[";
            // line 95
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\"
                                                        rows=\"5\" placeholder=\"";
            // line 96
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 97
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        class=\"form-control\">";
            // line 98
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 103
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"category_description[";
            // line 106
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\"
                                                        rows=\"5\" placeholder=\"";
            // line 107
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 108
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        class=\"form-control\">";
            // line 109
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 118
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"path\" value=\"";
        // line 120
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "\"
                                           id=\"input-parent\" class=\"form-control\"/>
                                    <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 122
        echo (isset($context["parent_id"]) ? $context["parent_id"] : null);
        echo "\"/>
                                    ";
        // line 123
        if ((isset($context["error_parent"]) ? $context["error_parent"] : null)) {
            // line 124
            echo "                                        <div class=\"text-danger\">";
            echo (isset($context["error_parent"]) ? $context["error_parent"] : null);
            echo "</div>
                                    ";
        }
        // line 126
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 129
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                          class=\"img-thumbnail\"><img src=\"";
        // line 131
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\"
                                                                                     data-placeholder=\"";
        // line 132
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a>
                                    <input type=\"hidden\" name=\"image\" value=\"";
        // line 133
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 138
        echo (isset($context["help_top"]) ? $context["help_top"] : null);
        echo "\">";
        echo (isset($context["entry_top"]) ? $context["entry_top"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"checkbox\">
                                        <label>
                                            ";
        // line 142
        if ((isset($context["top"]) ? $context["top"] : null)) {
            // line 143
            echo "                                                <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\"
                                                       id=\"input-top\"/>
                                            ";
        } else {
            // line 146
            echo "                                                <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\"/>
                                            ";
        }
        // line 148
        echo "                                            &nbsp; </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 154
        echo (isset($context["help_column"]) ? $context["help_column"] : null);
        echo "\">";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"column\" value=\"";
        // line 156
        echo (isset($context["column"]) ? $context["column"] : null);
        echo "\"
                                           placeholder=\"";
        // line 157
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "\" id=\"input-column\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 162
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 164
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\"
                                           placeholder=\"";
        // line 165
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\"
                                           class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 170
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 173
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 174
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\">";
            // line 175
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        } else {
            // line 177
            echo "                                            <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 178
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        }
        // line 180
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 185
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 190
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 191
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 196
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 197
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\">";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 199
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 200
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\"
                                                                    title=\"";
                // line 201
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span>
                                                        <input type=\"text\"
                                                               name=\"category_seo_url[";
                // line 203
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\"
                                                               value=\"";
                // line 204
                if ($this->getAttribute($this->getAttribute((isset($context["category_seo_url"]) ? $context["category_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["category_seo_url"]) ? $context["category_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\"
                                                               placeholder=\"";
                // line 205
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\"/>
                                                    </div>
                                                    ";
                // line 207
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 208
                    echo "                                                        <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                                                    ";
                }
                // line 210
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>

    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
    <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

    <script type=\"text/javascript\"><!--
        \$('input[name=\\'path\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=news/category/autocomplete&user_token=";
        // line 238
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            category_id: 0,
                            name: '";
        // line 243
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
                        });

                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['category_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'path\\']').val(item['label']);
                \$('input[name=\\'parent_id\\']').val(item['value']);
            }
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        //--></script>
</div>
";
        // line 265
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "news/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 265,  594 => 243,  586 => 238,  559 => 213,  546 => 210,  540 => 208,  538 => 207,  533 => 205,  527 => 204,  521 => 203,  516 => 201,  510 => 200,  507 => 199,  503 => 198,  499 => 197,  496 => 196,  492 => 195,  485 => 191,  481 => 190,  473 => 185,  466 => 180,  461 => 178,  456 => 177,  451 => 175,  446 => 174,  444 => 173,  438 => 170,  430 => 165,  426 => 164,  421 => 162,  413 => 157,  409 => 156,  402 => 154,  394 => 148,  390 => 146,  385 => 143,  383 => 142,  374 => 138,  366 => 133,  362 => 132,  358 => 131,  353 => 129,  348 => 126,  342 => 124,  340 => 123,  336 => 122,  329 => 120,  324 => 118,  318 => 114,  307 => 109,  303 => 108,  299 => 107,  295 => 106,  287 => 103,  279 => 98,  275 => 97,  271 => 96,  267 => 95,  259 => 92,  253 => 88,  247 => 86,  245 => 85,  240 => 83,  236 => 82,  232 => 81,  228 => 80,  220 => 77,  212 => 72,  208 => 71,  204 => 70,  200 => 69,  196 => 68,  188 => 65,  182 => 61,  176 => 59,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  158 => 54,  150 => 51,  143 => 48,  139 => 47,  135 => 45,  125 => 43,  119 => 42,  114 => 41,  110 => 40,  102 => 35,  98 => 34,  94 => 33,  88 => 30,  82 => 27,  78 => 25,  71 => 21,  68 => 20,  66 => 19,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-category" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-category"*/
/*                       class="form-horizontal">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                         <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*                         <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="tab-general">*/
/*                             <ul class="nav nav-tabs" id="language">*/
/*                                 {% for language in languages %}*/
/*                                     <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img*/
/*                                                     src="language/{{ language.code }}/{{ language.code }}.png"*/
/*                                                     title="{{ language.name }}"/> {{ language.name }}</a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             <div class="tab-content">*/
/*                                 {% for language in languages %}*/
/*                                     <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="category_description[{{ language.language_id }}][name]"*/
/*                                                        value="{{ category_description[language.language_id] ? category_description[language.language_id].name }}"*/
/*                                                        placeholder="{{ entry_name }}"*/
/*                                                        id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                                                 {% if error_name[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="category_description[{{ language.language_id }}][description]"*/
/*                                                         placeholder="{{ entry_description }}"*/
/*                                                         id="input-description{{ language.language_id }}"*/
/*                                                         data-toggle="summernote" data-lang="{{ summernote }}"*/
/*                                                         class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="category_description[{{ language.language_id }}][meta_title]"*/
/*                                                        value="{{ category_description[language.language_id] ? category_description[language.language_id].meta_title }}"*/
/*                                                        placeholder="{{ entry_meta_title }}"*/
/*                                                        id="input-meta-title{{ language.language_id }}"*/
/*                                                        class="form-control"/>*/
/*                                                 {% if error_meta_title[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="category_description[{{ language.language_id }}][meta_description]"*/
/*                                                         rows="5" placeholder="{{ entry_meta_description }}"*/
/*                                                         id="input-meta-description{{ language.language_id }}"*/
/*                                                         class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].meta_description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="category_description[{{ language.language_id }}][meta_keyword]"*/
/*                                                         rows="5" placeholder="{{ entry_meta_keyword }}"*/
/*                                                         id="input-meta-keyword{{ language.language_id }}"*/
/*                                                         class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].meta_keyword }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-data">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-parent">{{ entry_parent }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="path" value="{{ path }}" placeholder="{{ entry_parent }}"*/
/*                                            id="input-parent" class="form-control"/>*/
/*                                     <input type="hidden" name="parent_id" value="{{ parent_id }}"/>*/
/*                                     {% if error_parent %}*/
/*                                         <div class="text-danger">{{ error_parent }}</div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/*                                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image"*/
/*                                                           class="img-thumbnail"><img src="{{ thumb }}" alt="" title=""*/
/*                                                                                      data-placeholder="{{ placeholder }}"/></a>*/
/*                                     <input type="hidden" name="image" value="{{ image }}" id="input-image"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-top"><span data-toggle="tooltip"*/
/*                                                                                             title="{{ help_top }}">{{ entry_top }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="checkbox">*/
/*                                         <label>*/
/*                                             {% if top %}*/
/*                                                 <input type="checkbox" name="top" value="1" checked="checked"*/
/*                                                        id="input-top"/>*/
/*                                             {% else %}*/
/*                                                 <input type="checkbox" name="top" value="1" id="input-top"/>*/
/*                                             {% endif %}*/
/*                                             &nbsp; </label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-column"><span data-toggle="tooltip"*/
/*                                                                                                title="{{ help_column }}">{{ entry_column }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="column" value="{{ column }}"*/
/*                                            placeholder="{{ entry_column }}" id="input-column" class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="sort_order" value="{{ sort_order }}"*/
/*                                            placeholder="{{ entry_sort_order }}" id="input-sort-order"*/
/*                                            class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="status" id="input-status" class="form-control">*/
/*                                         {% if status %}*/
/*                                             <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                             <option value="0">{{ text_disabled }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="1">{{ text_enabled }}</option>*/
/*                                             <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                         {% endif %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-seo">*/
/*                             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_store }}</td>*/
/*                                         <td class="text-left">{{ entry_keyword }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for store in stores %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{ store.name }}</td>*/
/*                                             <td class="text-left">{% for language in languages %}*/
/*                                                     <div class="input-group"><span class="input-group-addon"><img*/
/*                                                                     src="language/{{ language.code }}/{{ language.code }}.png"*/
/*                                                                     title="{{ language.name }}"/></span>*/
/*                                                         <input type="text"*/
/*                                                                name="category_seo_url[{{ store.store_id }}][{{ language.language_id }}]"*/
/*                                                                value="{% if category_seo_url[store.store_id][language.language_id] %}{{ category_seo_url[store.store_id][language.language_id] }}{% endif %}"*/
/*                                                                placeholder="{{ entry_keyword }}" class="form-control"/>*/
/*                                                     </div>*/
/*                                                     {% if error_keyword[store.store_id][language.language_id] %}*/
/*                                                         <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet"/>*/
/*     <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet"/>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/* */
/*     <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*     <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* */
/*     <script type="text/javascript"><!--*/
/*         $('input[name=\'path\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=news/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         json.unshift({*/
/*                             category_id: 0,*/
/*                             name: '{{ text_none }}'*/
/*                         });*/
/* */
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['category_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'path\']').val(item['label']);*/
/*                 $('input[name=\'parent_id\']').val(item['value']);*/
/*             }*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
