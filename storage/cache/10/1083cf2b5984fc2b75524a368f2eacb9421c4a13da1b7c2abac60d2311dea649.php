<?php

/* default/template/news/category.twig */
class __TwigTemplate_784d5124a56fab7aff21793ad5f04c2de04562b7709d27306d09ae92115dd4f7 extends Twig_Template
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
                    ";
        // line 28
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                    ";
        // line 29
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 30
            echo "                        <div class=\"category-description\">
                            ";
            // line 31
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                        </div>
                    ";
        }
        // line 34
        echo "                    ";
        if ((isset($context["newss"]) ? $context["newss"] : null)) {
            // line 35
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newss"]) ? $context["newss"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 36
                echo "                            <div class=\"blog-post  wow fadeInUp\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">
                                        <a href=\"";
                // line 39
                echo $this->getAttribute($context["news"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["news"], "thumb", array());
                echo "\"
                                                                       alt=\"";
                // line 40
                echo $this->getAttribute($context["news"], "name", array());
                echo "\"
                                                                       title=\"";
                // line 41
                echo $this->getAttribute($context["news"], "name", array());
                echo "\"
                                                                       class=\"img-responsive\"/></a>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9\">
                                        <h4><a href=\"";
                // line 45
                echo $this->getAttribute($context["news"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["news"], "name", array());
                echo "</a></h4>
                                        <span class=\"date-time\">";
                // line 46
                echo $this->getAttribute($context["news"], "date_added", array());
                echo "</span>
                                        <p>";
                // line 47
                echo $this->getAttribute($context["news"], "description", array());
                echo "</p>
                                        <a href=\"";
                // line 48
                echo $this->getAttribute($context["news"], "href", array());
                echo "\" class=\"btn btn-upper btn-primary read-more\">";
                echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
                echo "</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
            // line 56
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                            <div class=\"col-sm-6 text-right\">";
            // line 57
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
                        </div>
                    ";
        }
        // line 60
        echo "                    ";
        if ( !(isset($context["newss"]) ? $context["newss"] : null)) {
            // line 61
            echo "                        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                        <div class=\"buttons\">
                            <div class=\"pull-right\"><a href=\"";
            // line 63
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                            </div>
                        </div>
                    ";
        }
        // line 67
        echo "                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 72
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 77
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
";
        // line 78
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/news/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 78,  189 => 77,  181 => 72,  174 => 67,  165 => 63,  159 => 61,  156 => 60,  150 => 57,  146 => 56,  142 => 54,  128 => 48,  124 => 47,  120 => 46,  114 => 45,  107 => 41,  103 => 40,  97 => 39,  92 => 36,  87 => 35,  84 => 34,  78 => 31,  75 => 30,  73 => 29,  69 => 28,  65 => 27,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
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
/*                     {{ content_top }}*/
/*                     {% if description %}*/
/*                         <div class="category-description">*/
/*                             {{ description }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if newss %}*/
/*                         {% for news in newss %}*/
/*                             <div class="blog-post  wow fadeInUp">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">*/
/*                                         <a href="{{ news.href }}"><img src="{{ news.thumb }}"*/
/*                                                                        alt="{{ news.name }}"*/
/*                                                                        title="{{ news.name }}"*/
/*                                                                        class="img-responsive"/></a>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">*/
/*                                         <h4><a href="{{ news.href }}">{{ news.name }}</a></h4>*/
/*                                         <span class="date-time">{{ news.date_added }}</span>*/
/*                                         <p>{{ news.description }}</p>*/
/*                                         <a href="{{ news.href }}" class="btn btn-upper btn-primary read-more">{{ text_read_more }}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr>*/
/*                             </div>*/
/*                         {% endfor %}*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if not newss %}*/
/*                         <p>{{ text_empty }}</p>*/
/*                         <div class="buttons">*/
/*                             <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
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
