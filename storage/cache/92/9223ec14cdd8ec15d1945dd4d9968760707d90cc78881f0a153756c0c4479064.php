<?php

/* default/template/common/menu.twig */
class __TwigTemplate_b66ae15449ca7ec2968c60aef87c874b2b2a3d622a6c27dd2d1a1ef0cdcb311c extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"yamm navbar navbar-default\" role=\"navigation\">
    <div class=\"navbar-header\">
        <button data-target=\"#mc-horizontal-menu-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
            <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
    </div>
    <div class=\"nav-bg-class\">
        <div class=\"navbar-collapse collapse\" id=\"mc-horizontal-menu-collapse\">
            <div class=\"nav-outer\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\"> <a href=\"";
            // line 11
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["text_home"]) ? $context["text_home"] : null);
            echo "</a> </li>
                    ";
            // line 12
            if ((isset($context["categories_news"]) ? $context["categories_news"] : null)) {
                // line 13
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories_news"]) ? $context["categories_news"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 14
                    echo "                            ";
                    if ($this->getAttribute($context["category"], "children", array())) {
                        // line 15
                        echo "                                <li class=\"dropdown mega-menu\">
                                    <a href=\"";
                        // line 16
                        echo $this->getAttribute($context["category"], "href", array());
                        echo "\"  data-hover=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</a>
                                    <ul class=\"dropdown-menu container\">
                                        <li>
                                            <div class=\"yamm-content\">
                                                <div class=\"row\">
                                                    ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 22
                            echo "                                                        <div class=\"col-xs-12 col-sm-12 col-md-3 col-menu\">
                                                            <h2 class=\"title\">";
                            // line 23
                            echo $this->getAttribute($context["category"], "name", array());
                            echo "</h2>
                                                            <ul class=\"links\">
                                                                ";
                            // line 25
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 26
                                echo "                                                                    <li><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 28
                            echo "                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                            ";
                    } else {
                        // line 40
                        echo "                                <li class=\"dropdown\"> <a href=\"";
                        echo $this->getAttribute($context["category"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</a> </li>
                            ";
                    }
                    // line 42
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                    ";
            }
            // line 44
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 45
                echo "                        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 46
                    echo "                            <li class=\"dropdown\">
                                <a href=\"";
                    // line 47
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\"  data-hover=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"yamm-content\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 col-menu\">
                                                    <ul class=\"links\">
                                                        ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 55
                        echo "                                                            <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.yamm-content -->
                                    </li>
                                </ul>
                            </li>
                        ";
                } else {
                    // line 67
                    echo "                            <li class=\"dropdown\"> <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </li>
                        ";
                }
                // line 69
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    <li class=\"dropdown\"> <a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a> </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class=\"clearfix\"></div>
            </div>
            <!-- /.nav-outer -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.nav-bg-class -->
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  182 => 69,  174 => 67,  162 => 57,  151 => 55,  147 => 54,  135 => 47,  132 => 46,  129 => 45,  124 => 44,  121 => 43,  115 => 42,  107 => 40,  97 => 32,  88 => 28,  77 => 26,  73 => 25,  68 => 23,  65 => 22,  61 => 21,  51 => 16,  48 => 15,  45 => 14,  40 => 13,  38 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="yamm navbar navbar-default" role="navigation">*/
/*     <div class="navbar-header">*/
/*         <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">*/
/*             <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>*/
/*     </div>*/
/*     <div class="nav-bg-class">*/
/*         <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">*/
/*             <div class="nav-outer">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="dropdown"> <a href="{{ home }}">{{ text_home }}</a> </li>*/
/*                     {% if categories_news %}*/
/*                         {% for category in categories_news %}*/
/*                             {% if category.children %}*/
/*                                 <li class="dropdown mega-menu">*/
/*                                     <a href="{{ category.href }}"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*                                     <ul class="dropdown-menu container">*/
/*                                         <li>*/
/*                                             <div class="yamm-content">*/
/*                                                 <div class="row">*/
/*                                                     {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                                                         <div class="col-xs-12 col-sm-12 col-md-3 col-menu">*/
/*                                                             <h2 class="title">{{ category.name }}</h2>*/
/*                                                             <ul class="links">*/
/*                                                                 {% for child in children %}*/
/*                                                                     <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                                                 {% endfor %}*/
/*                                                             </ul>*/
/*                                                         </div>*/
/*                                                         <!-- /.col -->*/
/*                                                     {% endfor %}*/
/*                                                 </div>*/
/*                                                 <!-- /.row -->*/
/*                                             </div>*/
/*                                             <!-- /.yamm-content -->*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             {% else %}*/
/*                                 <li class="dropdown"> <a href="{{ category.href }}">{{ category.name }}</a> </li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     {% for category in categories %}*/
/*                         {% if category.children %}*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ category.href }}"  data-hover="dropdown">{{ category.name }}</a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li>*/
/*                                         <div class="yamm-content">*/
/*                                             <div class="row">*/
/*                                                 <div class="col-xs-12 col-menu">*/
/*                                                     <ul class="links">*/
/*                                                         {% for child in category.children %}*/
/*                                                             <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <!-- /.row -->*/
/*                                         </div>*/
/*                                         <!-- /.yamm-content -->*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% else %}*/
/*                             <li class="dropdown"> <a href="{{ category.href }}">{{ category.name }}</a> </li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <li class="dropdown"> <a href="{{ contact }}">{{ text_contact }}</a> </li>*/
/*                 </ul>*/
/*                 <!-- /.navbar-nav -->*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*             <!-- /.nav-outer -->*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.nav-bg-class -->*/
/* </div>*/
/* {% endif %}*/
