<?php

/* default/template/extension/module/news_latest.twig */
class __TwigTemplate_b7a32bff07bee03ad22809159eee42e623761ae3c4e3bfde6671fcc7dbd08be7 extends Twig_Template
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
        if (((isset($context["position"]) ? $context["position"] : null) == "content_top")) {
            // line 2
            echo "    <section class=\"section latest-blog outer-bottom-vs wow fadeInUp\">
        <h3 class=\"section-title\">";
            // line 3
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3>
        <div class=\"blog-slider-container outer-top-xs\">
            <div class=\"owl-carousel blog-slider custom-carousel\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newss"]) ? $context["newss"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 7
                echo "                    <div class=\"item\">
                        <div class=\"blog-post\">
                            <div class=\"blog-post-image\">
                                <div class=\"image\"><a href=\"";
                // line 10
                echo $this->getAttribute($context["news"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["news"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["news"], "name", array());
                echo "\"
                                                                                  title=\"";
                // line 11
                echo $this->getAttribute($context["news"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
                                </div>
                            </div>
                            <!-- /.blog-post-image -->
                            <div class=\"blog-post-info text-left\">
                                <h3 class=\"name\"><a href=\"";
                // line 16
                echo $this->getAttribute($context["news"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["news"], "name", array());
                echo "</a></h3>
                                <span class=\"info\">";
                // line 17
                echo $this->getAttribute($context["news"], "date_added", array());
                echo "</span>
                                <p class=\"text\">";
                // line 18
                echo $this->getAttribute($context["news"], "description", array());
                echo "</p>
                                <a href=\"";
                // line 19
                echo $this->getAttribute($context["news"], "href", array());
                echo "\" class=\"lnk btn btn-primary\">";
                echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
                echo "</a></div>
                            <!-- /.blog-post-info -->
                        </div>
                        <!-- /.blog-post -->
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.blog-slider-container -->
    </section>
    <!-- /.section -->
";
        } elseif (((        // line 31
(isset($context["position"]) ? $context["position"] : null) == "column_right") || ((isset($context["position"]) ? $context["position"] : null) == "column_left"))) {
            // line 32
            echo "    <div class=\"sidebar-widget wow fadeInUp outer-bottom-xs\">
        <h3 class=\"section-title\">";
            // line 33
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3>
        <div class=\"box-news\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newss"]) ? $context["newss"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 36
                echo "                <div class=\"news-item\">
                    <div class=\"blog-post row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <div class=\"image\"><a href=\"";
                // line 39
                echo $this->getAttribute($context["news"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["news"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["news"], "name", array());
                echo "\"
                                                                              title=\"";
                // line 40
                echo $this->getAttribute($context["news"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                            <div class=\"blog-post-info text-left\">
                                <h5 style=\"line-height: 18px;\" class=\"name\"><a href=\"";
                // line 45
                echo $this->getAttribute($context["news"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["news"], "name", array());
                echo "</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.blog-post -->
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
        <!-- /.sidebar-widget -->
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/news_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 52,  126 => 45,  118 => 40,  110 => 39,  105 => 36,  101 => 35,  96 => 33,  93 => 32,  91 => 31,  83 => 25,  69 => 19,  65 => 18,  61 => 17,  55 => 16,  47 => 11,  39 => 10,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if position == 'content_top' %}*/
/*     <section class="section latest-blog outer-bottom-vs wow fadeInUp">*/
/*         <h3 class="section-title">{{ heading_title }}</h3>*/
/*         <div class="blog-slider-container outer-top-xs">*/
/*             <div class="owl-carousel blog-slider custom-carousel">*/
/*                 {% for news in newss %}*/
/*                     <div class="item">*/
/*                         <div class="blog-post">*/
/*                             <div class="blog-post-image">*/
/*                                 <div class="image"><a href="{{ news.href }}"><img src="{{ news.thumb }}" alt="{{ news.name }}"*/
/*                                                                                   title="{{ news.name }}" class="img-responsive"/></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- /.blog-post-image -->*/
/*                             <div class="blog-post-info text-left">*/
/*                                 <h3 class="name"><a href="{{ news.href }}">{{ news.name }}</a></h3>*/
/*                                 <span class="info">{{ news.date_added }}</span>*/
/*                                 <p class="text">{{ news.description }}</p>*/
/*                                 <a href="{{ news.href }}" class="lnk btn btn-primary">{{ text_read_more }}</a></div>*/
/*                             <!-- /.blog-post-info -->*/
/*                         </div>*/
/*                         <!-- /.blog-post -->*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <!-- /.owl-carousel -->*/
/*         </div>*/
/*         <!-- /.blog-slider-container -->*/
/*     </section>*/
/*     <!-- /.section -->*/
/* {% elseif position == 'column_right' or position == 'column_left' %}*/
/*     <div class="sidebar-widget wow fadeInUp outer-bottom-xs">*/
/*         <h3 class="section-title">{{ heading_title }}</h3>*/
/*         <div class="box-news">*/
/*             {% for news in newss %}*/
/*                 <div class="news-item">*/
/*                     <div class="blog-post row">*/
/*                         <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">*/
/*                             <div class="image"><a href="{{ news.href }}"><img src="{{ news.thumb }}" alt="{{ news.name }}"*/
/*                                                                               title="{{ news.name }}" class="img-responsive"/></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">*/
/*                             <div class="blog-post-info text-left">*/
/*                                 <h5 style="line-height: 18px;" class="name"><a href="{{ news.href }}">{{ news.name }}</a></h5>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.blog-post -->*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <!-- /.sidebar-widget -->*/
/*     </div>*/
/* {% endif %}*/
