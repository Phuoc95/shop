<?php

/* common/dashboard.twig */
class __TwigTemplate_3dfdb0474be0f8b38aa737a3648d8825647e6530dba8f9100e2c74f3360b90fa extends Twig_Template
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
                <button type=\"button\" id=\"button-setting\" title=\"";
        // line 6
        echo (isset($context["button_setting"]) ? $context["button_setting"] : null);
        echo "\"
                        data-loading-text=\"";
        // line 7
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
            </div>
            <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 17
        if ((isset($context["error_install"]) ? $context["error_install"] : null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close pull-right\" data-dismiss=\"alert\">&times;</button>
                <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo (isset($context["error_install"]) ? $context["error_install"] : null);
            echo "</div>
        ";
        }
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "            <div class=\"row\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 24
                echo "                    ";
                $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-3 col-sm-6");
                // line 25
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 26
                    echo "                        ";
                    if (($this->getAttribute($context["dashboard_2"], "width", array()) > 3)) {
                        // line 27
                        echo "                            ";
                        $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-12 col-sm-12");
                        // line 28
                        echo "                        ";
                    }
                    // line 29
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                    <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">";
                echo $this->getAttribute($context["dashboard_1"], "output", array());
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
    ";
        // line 33
        echo (isset($context["security"]) ? $context["security"] : null);
        echo "
    <script type=\"text/javascript\"><!--
        \$('#button-setting').on('click', function () {
            \$.ajax({
                url: 'index.php?route=common/developer&user_token=";
        // line 37
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
                dataType: 'html',
                beforeSend: function () {
                    \$('#button-setting').button('loading');
                },
                complete: function () {
                    \$('#button-setting').button('reset');
                },
                success: function (html) {
                    \$('#modal-developer').remove();

                    \$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');

                    \$('#modal-developer').modal('show');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
        //--></script>
</div>
";
        // line 59
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "common/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  134 => 37,  127 => 33,  124 => 32,  117 => 31,  106 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  86 => 25,  83 => 24,  78 => 23,  73 => 22,  68 => 20,  64 => 18,  62 => 17,  57 => 14,  46 => 12,  42 => 11,  37 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="button" id="button-setting" title="{{ button_setting }}"*/
/*                         data-loading-text="{{ text_loading }}" class="btn btn-info"><i class="fa fa-cog"></i></button>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">{% if error_install %}*/
/*             <div class="alert alert-danger alert-dismissible">*/
/*                 <button type="button" class="close pull-right" data-dismiss="alert">&times;</button>*/
/*                 <i class="fa fa-exclamation-circle"></i> {{ error_install }}</div>*/
/*         {% endif %}*/
/*         {% for row in rows %}*/
/*             <div class="row">{% for dashboard_1 in row %}*/
/*                     {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}*/
/*                     {% for dashboard_2 in row %}*/
/*                         {% if dashboard_2.width > 3 %}*/
/*                             {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <div class="{{ class }}">{{ dashboard_1.output }}</div>*/
/*                 {% endfor %}</div>*/
/*         {% endfor %}</div>*/
/*     {{ security }}*/
/*     <script type="text/javascript"><!--*/
/*         $('#button-setting').on('click', function () {*/
/*             $.ajax({*/
/*                 url: 'index.php?route=common/developer&user_token={{ user_token }}',*/
/*                 dataType: 'html',*/
/*                 beforeSend: function () {*/
/*                     $('#button-setting').button('loading');*/
/*                 },*/
/*                 complete: function () {*/
/*                     $('#button-setting').button('reset');*/
/*                 },*/
/*                 success: function (html) {*/
/*                     $('#modal-developer').remove();*/
/* */
/*                     $('body').prepend('<div id="modal-developer" class="modal">' + html + '</div>');*/
/* */
/*                     $('#modal-developer').modal('show');*/
/*                 },*/
/*                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         });*/
/*         //--></script>*/
/* </div>*/
/* {{ footer }}*/
