<?php

/* news/news_form.twig */
class __TwigTemplate_dcffc097f8a9d42f689e797e78f75dbc2ee3ff44f0a7d19752ba7dbb93c11985 extends Twig_Template
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
                <button type=\"submit\" form=\"form-news\" data-toggle=\"tooltip\" title=\"";
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
    <div class=\"container-fluid\"> ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-news\"
                      class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "                                    <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img
                                                    src=\"language/";
            // line 43
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\"
                                                    title=\"";
            // line 44
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            </ul>
                            <div class=\"tab-content\">";
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
                                                       name=\"news_description[";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\"
                                                       value=\"";
            // line 55
            echo (($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
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
            // line 60
            echo " </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 64
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"news_description[";
            // line 67
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\"
                                                        placeholder=\"";
            // line 68
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\"
                                                        id=\"input-description";
            // line 69
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 70
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\"
                                                        class=\"form-control\">";
            // line 71
            echo (($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 76
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"news_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\"
                                                       value=\"";
            // line 80
            echo (($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 81
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 82
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                       class=\"form-control\"/>
                                                ";
            // line 84
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 85
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                                                ";
            }
            // line 86
            echo " </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 90
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"news_description[";
            // line 93
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\"
                                                        rows=\"5\" placeholder=\"";
            // line 94
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 95
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        class=\"form-control\">";
            // line 96
            echo (($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 101
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"news_description[";
            // line 104
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\"
                                                        rows=\"5\" placeholder=\"";
            // line 105
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 106
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        class=\"form-control\">";
            // line 107
            echo (($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 112
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 113
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"news_description[";
            // line 116
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\"
                                                       value=\"";
            // line 117
            echo (($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 118
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\"
                                                       id=\"input-tag";
            // line 119
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 128
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 131
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\"
                                               placeholder=\"";
        // line 132
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-date-available\" class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 140
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 143
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 144
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\">";
            // line 145
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        } else {
            // line 147
            echo "                                            <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 148
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        }
        // line 150
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 155
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 157
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\"
                                           placeholder=\"";
        // line 158
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\"
                                           class=\"form-control\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-links\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 166
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 168
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\"
                                           id=\"input-category\" class=\"form-control\"/>
                                    <div id=\"news-category\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_categories"]) ? $context["news_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news_category"]) {
            // line 172
            echo "                                            <div id=\"news-category";
            echo $this->getAttribute($context["news_category"], "category_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 173
            echo $this->getAttribute($context["news_category"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"news_category[]\"
                                                       value=\"";
            // line 175
            echo $this->getAttribute($context["news_category"], "category_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 182
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 184
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"news-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_downloads"]) ? $context["news_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news_download"]) {
            // line 188
            echo "                                            <div id=\"news-download";
            echo $this->getAttribute($context["news_download"], "download_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 189
            echo $this->getAttribute($context["news_download"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"news_download[]\"
                                                       value=\"";
            // line 191
            echo $this->getAttribute($context["news_download"], "download_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 198
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 200
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"news-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_relateds"]) ? $context["news_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news_related"]) {
            // line 204
            echo "                                            <div id=\"news-related";
            echo $this->getAttribute($context["news_related"], "news_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 205
            echo $this->getAttribute($context["news_related"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"news_related[]\"
                                                       value=\"";
            // line 207
            echo $this->getAttribute($context["news_related"], "news_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-image\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 218
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 224
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 226
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 227
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"table-responsive\">
                                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 237
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 238
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 244
        $context["image_row"] = 0;
        // line 245
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_images"]) ? $context["news_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news_image"]) {
            // line 246
            echo "                                        <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 247
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 249
            echo $this->getAttribute($context["news_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 250
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"/></a>
                                                <input type=\"hidden\" name=\"news_image[";
            // line 251
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\"
                                                       value=\"";
            // line 252
            echo $this->getAttribute($context["news_image"], "image", array());
            echo "\"
                                                       id=\"input-image";
            // line 253
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"news_image[";
            // line 255
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 256
            echo $this->getAttribute($context["news_image"], "sort_order", array());
            echo "\"
                                                                          placeholder=\"";
            // line 257
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 260
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 261
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 266
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 267
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 275
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 284
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 289
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 290
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 295
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 296
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\">";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 298
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 299
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\"
                                                                    title=\"";
                // line 300
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span>
                                                        <input type=\"text\"
                                                               name=\"news_seo_url[";
                // line 302
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\"
                                                               value=\"";
                // line 303
                if ($this->getAttribute($this->getAttribute((isset($context["news_seo_url"]) ? $context["news_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["news_seo_url"]) ? $context["news_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\"
                                                               placeholder=\"";
                // line 304
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\"/>
                                                    </div>
                                                    ";
                // line 306
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 307
                    echo "                                                        <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                                                    ";
                }
                // line 309
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
        // line 312
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
        // Category
        \$('input[name=\\'category\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=news/category/autocomplete&user_token=";
        // line 336
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
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
                \$('input[name=\\'category\\']').val('');

                \$('#news-category' + item['value']).remove();

                \$('#news-category').append('<div id=\"news-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"news_category[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#news-category').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Downloads
        \$('input[name=\\'download\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=news/download/autocomplete&user_token=";
        // line 365
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['download_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'download\\']').val('');

                \$('#news-download' + item['value']).remove();

                \$('#news-download').append('<div id=\"news-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"news_download[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#news-download').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Related
        \$('input[name=\\'related\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=news/news/autocomplete&user_token=";
        // line 394
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['news_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'related\\']').val('');

                \$('#news-related' + item['value']).remove();

                \$('#news-related').append('<div id=\"news-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"news_related[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#news-related').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 420
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 424
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"news_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"news_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 425
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 426
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }
        //--></script>

    <script type=\"text/javascript\"><!--
        \$('.date').datetimepicker({
            language: '";
        // line 437
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 442
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 447
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickDate: true,
            pickTime: true
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
        //--></script>
</div>
";
        // line 457
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "news/news_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  974 => 457,  961 => 447,  953 => 442,  945 => 437,  931 => 426,  927 => 425,  921 => 424,  914 => 420,  885 => 394,  853 => 365,  821 => 336,  795 => 312,  782 => 309,  776 => 307,  774 => 306,  769 => 304,  763 => 303,  757 => 302,  752 => 300,  746 => 299,  743 => 298,  739 => 297,  735 => 296,  732 => 295,  728 => 294,  721 => 290,  717 => 289,  709 => 284,  697 => 275,  688 => 268,  682 => 267,  680 => 266,  672 => 261,  668 => 260,  662 => 257,  658 => 256,  654 => 255,  649 => 253,  645 => 252,  641 => 251,  637 => 250,  633 => 249,  628 => 247,  623 => 246,  618 => 245,  616 => 244,  607 => 238,  603 => 237,  590 => 227,  586 => 226,  581 => 224,  572 => 218,  561 => 209,  552 => 207,  547 => 205,  542 => 204,  538 => 203,  532 => 200,  525 => 198,  518 => 193,  509 => 191,  504 => 189,  499 => 188,  495 => 187,  489 => 184,  482 => 182,  475 => 177,  466 => 175,  461 => 173,  456 => 172,  452 => 171,  446 => 168,  439 => 166,  428 => 158,  424 => 157,  419 => 155,  412 => 150,  407 => 148,  402 => 147,  397 => 145,  392 => 144,  390 => 143,  384 => 140,  373 => 132,  369 => 131,  363 => 128,  356 => 123,  345 => 119,  341 => 118,  337 => 117,  333 => 116,  325 => 113,  321 => 112,  313 => 107,  309 => 106,  305 => 105,  301 => 104,  293 => 101,  285 => 96,  281 => 95,  277 => 94,  273 => 93,  265 => 90,  259 => 86,  253 => 85,  251 => 84,  246 => 82,  242 => 81,  238 => 80,  234 => 79,  226 => 76,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  202 => 67,  194 => 64,  188 => 60,  182 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  156 => 51,  149 => 48,  145 => 47,  142 => 46,  132 => 44,  126 => 43,  121 => 42,  117 => 41,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  87 => 29,  81 => 26,  77 => 24,  70 => 20,  67 => 19,  65 => 18,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-news" data-toggle="tooltip" title="{{ button_save }}"*/
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
/*     <div class="container-fluid"> {% if error_warning %}*/
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
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-news"*/
/*                       class="form-horizontal">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                         <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*                         <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*                         <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
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
/*                             <div class="tab-content">{% for language in languages %}*/
/*                                     <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="news_description[{{ language.language_id }}][name]"*/
/*                                                        value="{{ news_description[language.language_id] ? news_description[language.language_id].name }}"*/
/*                                                        placeholder="{{ entry_name }}"*/
/*                                                        id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                                                 {% if error_name[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                                                 {% endif %} </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="news_description[{{ language.language_id }}][description]"*/
/*                                                         placeholder="{{ entry_description }}"*/
/*                                                         id="input-description{{ language.language_id }}"*/
/*                                                         data-toggle="summernote" data-lang="{{ summernote }}"*/
/*                                                         class="form-control">{{ news_description[language.language_id] ? news_description[language.language_id].description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="news_description[{{ language.language_id }}][meta_title]"*/
/*                                                        value="{{ news_description[language.language_id] ? news_description[language.language_id].meta_title }}"*/
/*                                                        placeholder="{{ entry_meta_title }}"*/
/*                                                        id="input-meta-title{{ language.language_id }}"*/
/*                                                        class="form-control"/>*/
/*                                                 {% if error_meta_title[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                                                 {% endif %} </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="news_description[{{ language.language_id }}][meta_description]"*/
/*                                                         rows="5" placeholder="{{ entry_meta_description }}"*/
/*                                                         id="input-meta-description{{ language.language_id }}"*/
/*                                                         class="form-control">{{ news_description[language.language_id] ? news_description[language.language_id].meta_description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="news_description[{{ language.language_id }}][meta_keyword]"*/
/*                                                         rows="5" placeholder="{{ entry_meta_keyword }}"*/
/*                                                         id="input-meta-keyword{{ language.language_id }}"*/
/*                                                         class="form-control">{{ news_description[language.language_id] ? news_description[language.language_id].meta_keyword }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-tag{{ language.language_id }}"><span data-toggle="tooltip"*/
/*                                                                                                    title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="news_description[{{ language.language_id }}][tag]"*/
/*                                                        value="{{ news_description[language.language_id] ? news_description[language.language_id].tag }}"*/
/*                                                        placeholder="{{ entry_tag }}"*/
/*                                                        id="input-tag{{ language.language_id }}" class="form-control"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}</div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-data">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-date-available">{{ entry_date_available }}</label>*/
/*                                 <div class="col-sm-3">*/
/*                                     <div class="input-group date">*/
/*                                         <input type="text" name="date_available" value="{{ date_available }}"*/
/*                                                placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD"*/
/*                                                id="input-date-available" class="form-control"/>*/
/*                                         <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
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
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="sort_order" value="{{ sort_order }}"*/
/*                                            placeholder="{{ entry_sort_order }}" id="input-sort-order"*/
/*                                            class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-links">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip"*/
/*                                                                                                  title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="category" value="" placeholder="{{ entry_category }}"*/
/*                                            id="input-category" class="form-control"/>*/
/*                                     <div id="news-category" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for news_category in news_categories %}*/
/*                                             <div id="news-category{{ news_category.category_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ news_category.name }}*/
/*                                                 <input type="hidden" name="news_category[]"*/
/*                                                        value="{{ news_category.category_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip"*/
/*                                                                                                  title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="download" value="" placeholder="{{ entry_download }}"*/
/*                                            id="input-download" class="form-control"/>*/
/*                                     <div id="news-download" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for news_download in news_downloads %}*/
/*                                             <div id="news-download{{ news_download.download_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ news_download.name }}*/
/*                                                 <input type="hidden" name="news_download[]"*/
/*                                                        value="{{ news_download.download_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip"*/
/*                                                                                                 title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="related" value="" placeholder="{{ entry_related }}"*/
/*                                            id="input-related" class="form-control"/>*/
/*                                     <div id="news-related" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for news_related in news_relateds %}*/
/*                                             <div id="news-related{{ news_related.news_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ news_related.name }}*/
/*                                                 <input type="hidden" name="news_related[]"*/
/*                                                        value="{{ news_related.news_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-image">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_image }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="text-left"><a href="" id="thumb-image" data-toggle="image"*/
/*                                                                  class="img-thumbnail"><img src="{{ thumb }}" alt=""*/
/*                                                                                             title=""*/
/*                                                                                             data-placeholder="{{ placeholder }}"/></a>*/
/*                                             <input type="hidden" name="image" value="{{ image }}" id="input-image"/>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="table-responsive">*/
/*                                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_additional_image }}</td>*/
/*                                         <td class="text-right">{{ entry_sort_order }}</td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% set image_row = 0 %}*/
/*                                     {% for news_image in news_images %}*/
/*                                         <tr id="image-row{{ image_row }}">*/
/*                                             <td class="text-left"><a href="" id="thumb-image{{ image_row }}"*/
/*                                                                      data-toggle="image" class="img-thumbnail"><img*/
/*                                                             src="{{ news_image.thumb }}" alt="" title=""*/
/*                                                             data-placeholder="{{ placeholder }}"/></a>*/
/*                                                 <input type="hidden" name="news_image[{{ image_row }}][image]"*/
/*                                                        value="{{ news_image.image }}"*/
/*                                                        id="input-image{{ image_row }}"/></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="news_image[{{ image_row }}][sort_order]"*/
/*                                                                           value="{{ news_image.sort_order }}"*/
/*                                                                           placeholder="{{ entry_sort_order }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-left">*/
/*                                                 <button type="button" onclick="$('#image-row{{ image_row }}').remove();"*/
/*                                                         data-toggle="tooltip" title="{{ button_remove }}"*/
/*                                                         class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% set image_row = image_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                     <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="2"></td>*/
/*                                         <td class="text-left">*/
/*                                             <button type="button" onclick="addImage();" data-toggle="tooltip"*/
/*                                                     title="{{ button_image_add }}" class="btn btn-primary"><i*/
/*                                                         class="fa fa-plus-circle"></i></button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tfoot>*/
/*                                 </table>*/
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
/*                                                                name="news_seo_url[{{ store.store_id }}][{{ language.language_id }}]"*/
/*                                                                value="{% if news_seo_url[store.store_id][language.language_id] %}{{ news_seo_url[store.store_id][language.language_id] }}{% endif %}"*/
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
/*     <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*     <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*     <script type="text/javascript"><!--*/
/*         // Category*/
/*         $('input[name=\'category\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=news/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
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
/*                 $('input[name=\'category\']').val('');*/
/* */
/*                 $('#news-category' + item['value']).remove();*/
/* */
/*                 $('#news-category').append('<div id="news-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="news_category[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#news-category').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         // Downloads*/
/*         $('input[name=\'download\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=news/download/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['download_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'download\']').val('');*/
/* */
/*                 $('#news-download' + item['value']).remove();*/
/* */
/*                 $('#news-download').append('<div id="news-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="news_download[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#news-download').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         // Related*/
/*         $('input[name=\'related\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=news/news/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['news_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'related\']').val('');*/
/* */
/*                 $('#news-related' + item['value']).remove();*/
/* */
/*                 $('#news-related').append('<div id="news-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="news_related[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#news-related').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var image_row = {{ image_row }};*/
/* */
/*         function addImage() {*/
/*             html = '<tr id="image-row' + image_row + '">';*/
/*             html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="news_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="news_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#images tbody').append(html);*/
/* */
/*             image_row++;*/
/*         }*/
/*         //--></script>*/
/* */
/*     <script type="text/javascript"><!--*/
/*         $('.date').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickTime: false*/
/*         });*/
/* */
/*         $('.time').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickDate: false*/
/*         });*/
/* */
/*         $('.datetime').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickDate: true,*/
/*             pickTime: true*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         $('#option a:first').tab('show');*/
/*         //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
