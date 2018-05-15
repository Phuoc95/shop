<?php

/* news/news_list.twig */
class __TwigTemplate_b8142b9aafbb056f3f94a2cb26c8599262ac6b3dc79646a503440dbacb4fd75b extends Twig_Template
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
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\"
                        onclick=\"\$('#filter-news').toggleClass('hidden-sm hidden-xs');\"
                        class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
                <a href=\"";
        // line 9
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-news\" formaction=\"";
        // line 11
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\" data-toggle=\"tooltip\"
                        title=\"";
        // line 12
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" form=\"form-news\" formaction=\"";
        // line 13
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" data-toggle=\"tooltip\"
                        title=\"";
        // line 14
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 15
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-news').submit() : false;\"><i
                            class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 21
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
        // line 23
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 26
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 27
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 28
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 32
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 33
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 37
        echo "        <div class=\"row\">
            <div id=\"filter-news\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 41
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-name\">";
        // line 45
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                            <input type=\"text\" name=\"filter_name\" value=\"";
        // line 46
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\"
                                   placeholder=\"";
        // line 47
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-status\">";
        // line 50
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                            <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 53
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 54
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 56
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        }
        // line 58
        echo "                                ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 59
            echo "                                    <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 61
            echo "                                    <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 63
        echo "                            </select>
                        </div>
                        <div class=\"form-group text-right\">
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i
                                        class=\"fa fa-filter\"></i> ";
        // line 67
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 75
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 78
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-news\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\"
                                                                                           onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/>
                                        </td>
                                        <td class=\"text-center\">";
        // line 86
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 87
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\"
                                                                                            class=\"";
            // line 88
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        } else {
            // line 89
            echo "                                                <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 90
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\"
                                                                                             class=\"";
            // line 91
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            // line 92
            echo "                                                <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 93
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 98
        if ((isset($context["newss"]) ? $context["newss"] : null)) {
            // line 99
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newss"]) ? $context["newss"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 100
                echo "                                            <tr>
                                                <td class=\"text-center\">";
                // line 101
                if (twig_in_filter($this->getAttribute($context["news"], "news_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 102
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 103
                    echo $this->getAttribute($context["news"], "news_id", array());
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 105
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 106
                    echo $this->getAttribute($context["news"], "news_id", array());
                    echo "\"/>
                                                    ";
                }
                // line 107
                echo "</td>
                                                <td class=\"text-center\">";
                // line 108
                if ($this->getAttribute($context["news"], "image", array())) {
                    echo " <img
                                                            src=\"";
                    // line 109
                    echo $this->getAttribute($context["news"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["news"], "name", array());
                    echo "\"
                                                            class=\"img-thumbnail\"/> ";
                } else {
                    // line 110
                    echo " <span
                                                            class=\"img-thumbnail list\"><i
                                                                class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                // line 112
                echo "</td>
                                                <td class=\"text-left\">";
                // line 113
                echo $this->getAttribute($context["news"], "name", array());
                echo "</td>
                                                <td class=\"text-left\">";
                // line 114
                echo $this->getAttribute($context["news"], "status", array());
                echo "</td>
                                                <td class=\"text-right\"><a href=\"";
                // line 115
                echo $this->getAttribute($context["news"], "edit", array());
                echo "\"
                                                                          data-toggle=\"tooltip\"
                                                                          title=\"";
                // line 117
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\"
                                                                          class=\"btn btn-primary\"><i
                                                                class=\"fa fa-pencil\"></i></a></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                    ";
        } else {
            // line 123
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"8\">";
            // line 124
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 127
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 133
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 134
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
        \$('#button-filter').on('click', function () {
            var url = '';

            var filter_name = \$('input[name=\\'filter_name\\']').val();

            if (filter_name) {
                url += '&filter_name=' + encodeURIComponent(filter_name);
            }
            var filter_status = \$('select[name=\\'filter_status\\']').val();

            if (filter_status !== '') {
                url += '&filter_status=' + encodeURIComponent(filter_status);
            }

            location = 'index.php?route=news/news&user_token=";
        // line 156
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        // IE and Edge fix!
        \$('button[form=\\'form-news\\']').on('click', function (e) {
            \$('#form-news').attr('action', \$(this).attr('formaction'));
        });

        \$('input[name=\\'filter_name\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=news/news/autocomplete&user_token=";
        // line 168
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
                \$('input[name=\\'filter_name\\']').val(item['label']);
            }
        });

        //--></script>
</div>
";
        // line 187
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "news/news_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 187,  399 => 168,  384 => 156,  359 => 134,  355 => 133,  347 => 127,  341 => 124,  338 => 123,  335 => 122,  324 => 117,  319 => 115,  315 => 114,  311 => 113,  308 => 112,  303 => 110,  296 => 109,  292 => 108,  289 => 107,  284 => 106,  281 => 105,  276 => 103,  273 => 102,  271 => 101,  268 => 100,  263 => 99,  261 => 98,  253 => 93,  244 => 92,  238 => 91,  232 => 90,  223 => 89,  217 => 88,  211 => 87,  207 => 86,  196 => 78,  190 => 75,  179 => 67,  173 => 63,  167 => 61,  161 => 59,  158 => 58,  152 => 56,  146 => 54,  144 => 53,  138 => 50,  132 => 47,  128 => 46,  124 => 45,  117 => 41,  111 => 37,  103 => 33,  100 => 32,  93 => 28,  90 => 27,  88 => 26,  83 => 23,  72 => 21,  68 => 20,  63 => 18,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  34 => 9,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_filter }}"*/
/*                         onclick="$('#filter-news').toggleClass('hidden-sm hidden-xs');"*/
/*                         class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*                 <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i*/
/*                             class="fa fa-plus"></i></a>*/
/*                 <button type="submit" form="form-news" formaction="{{ copy }}" data-toggle="tooltip"*/
/*                         title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*                 <button type="button" form="form-news" formaction="{{ delete }}" data-toggle="tooltip"*/
/*                         title="{{ button_delete }}" class="btn btn-danger"*/
/*                         onclick="confirm('{{ text_confirm }}') ? $('#form-news').submit() : false;"><i*/
/*                             class="fa fa-trash-o"></i></button>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">{% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*             <div id="filter-news" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                             <input type="text" name="filter_name" value="{{ filter_name }}"*/
/*                                    placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*                             <select name="filter_status" id="input-status" class="form-control">*/
/*                                 <option value=""></option>*/
/*                                 {% if filter_status == '1' %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if filter_status == '0' %}*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group text-right">*/
/*                             <button type="button" id="button-filter" class="btn btn-default"><i*/
/*                                         class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-news">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td style="width: 1px;" class="text-center"><input type="checkbox"*/
/*                                                                                            onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"/>*/
/*                                         </td>*/
/*                                         <td class="text-center">{{ column_image }}</td>*/
/*                                         <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_name }}"*/
/*                                                                                             class="{{ order|lower }}">{{ column_name }}</a> {% else %}*/
/*                                                 <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>*/
/*                                         <td class="text-left">{% if sort == 'p.status' %} <a href="{{ sort_status }}"*/
/*                                                                                              class="{{ order|lower }}">{{ column_status }}</a> {% else %}*/
/*                                                 <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                                         <td class="text-right">{{ column_action }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% if newss %}*/
/*                                         {% for news in newss %}*/
/*                                             <tr>*/
/*                                                 <td class="text-center">{% if news.news_id in selected %}*/
/*                                                         <input type="checkbox" name="selected[]"*/
/*                                                                value="{{ news.news_id }}" checked="checked"/>*/
/*                                                     {% else %}*/
/*                                                         <input type="checkbox" name="selected[]"*/
/*                                                                value="{{ news.news_id }}"/>*/
/*                                                     {% endif %}</td>*/
/*                                                 <td class="text-center">{% if news.image %} <img*/
/*                                                             src="{{ news.image }}" alt="{{ news.name }}"*/
/*                                                             class="img-thumbnail"/> {% else %} <span*/
/*                                                             class="img-thumbnail list"><i*/
/*                                                                 class="fa fa-camera fa-2x"></i></span> {% endif %}</td>*/
/*                                                 <td class="text-left">{{ news.name }}</td>*/
/*                                                 <td class="text-left">{{ news.status }}</td>*/
/*                                                 <td class="text-right"><a href="{{ news.edit }}"*/
/*                                                                           data-toggle="tooltip"*/
/*                                                                           title="{{ button_edit }}"*/
/*                                                                           class="btn btn-primary"><i*/
/*                                                                 class="fa fa-pencil"></i></a></td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% else %}*/
/*                                         <tr>*/
/*                                             <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                                         </tr>*/
/*                                     {% endif %}*/
/*                                     </tbody>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/*                         </form>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript"><!--*/
/*         $('#button-filter').on('click', function () {*/
/*             var url = '';*/
/* */
/*             var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*             if (filter_name) {*/
/*                 url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*             }*/
/*             var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/*             if (filter_status !== '') {*/
/*                 url += '&filter_status=' + encodeURIComponent(filter_status);*/
/*             }*/
/* */
/*             location = 'index.php?route=news/news&user_token={{ user_token }}' + url;*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         // IE and Edge fix!*/
/*         $('button[form=\'form-news\']').on('click', function (e) {*/
/*             $('#form-news').attr('action', $(this).attr('formaction'));*/
/*         });*/
/* */
/*         $('input[name=\'filter_name\']').autocomplete({*/
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
/*                 $('input[name=\'filter_name\']').val(item['label']);*/
/*             }*/
/*         });*/
/* */
/*         //--></script>*/
/* </div>*/
/* {{ footer }}*/
