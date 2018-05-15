<?php

/* default/template/extension/module/category_product.twig */
class __TwigTemplate_c67d90115d2fbc8b889e461a76913e984f0a3093cf7c993de7dd9de4f6ab8d31 extends Twig_Template
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
        if (((isset($context["position"]) ? $context["position"] : null) == "column_left")) {
            // line 2
            echo "    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class=\"side-menu animate-dropdown outer-bottom-xs\">
        <div class=\"head\"><i class=\"icon fa fa-align-justify fa-fw\"></i> ";
            // line 4
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
        <nav class=\"yamm megamenu-horizontal\">
            <ul class=\"nav\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "                    ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 9
                    echo "                        <li class=\"dropdown menu-item\">
                            <a href=\"";
                    // line 10
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-hover=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
                            <ul class=\"dropdown-menu mega-menu\">
                                <li>
                                    <div class=\"yamm-content\">
                                        <div class=\"row\">
                                            ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 16
                        echo "                                                <div class=\"col-xs-12 col-sm-12 col-md-4 col-menu\">
                                                    <ul class=\"links list-unstyled\">
                                                        ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
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
                        // line 21
                        echo "                                                    </ul>
                                                </div>
                                                <!-- /.col -->
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>
                    ";
                } else {
                    // line 33
                    echo "                        <li class=\"dropdown menu-item\"> <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
                    ";
                }
                // line 35
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </ul>
            <!-- /.nav -->
        </nav>
        <!-- /.megamenu-horizontal -->
    </div>
    <!-- /.side-menu -->
";
        } elseif ((        // line 42
(isset($context["position"]) ? $context["position"] : null) == "column_right")) {
            // line 43
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  115 => 42,  107 => 36,  101 => 35,  93 => 33,  83 => 25,  74 => 21,  63 => 19,  59 => 18,  55 => 16,  51 => 15,  41 => 10,  38 => 9,  35 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if position == 'column_left' %}*/
/*     <!-- ================================== TOP NAVIGATION ================================== -->*/
/*     <div class="side-menu animate-dropdown outer-bottom-xs">*/
/*         <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> {{ heading_title }}</div>*/
/*         <nav class="yamm megamenu-horizontal">*/
/*             <ul class="nav">*/
/*                 {% for category in categories %}*/
/*                     {% if category.children %}*/
/*                         <li class="dropdown menu-item">*/
/*                             <a href="{{ category.href }}" class="dropdown-toggle" data-hover="dropdown">{{ category.name }}</a>*/
/*                             <ul class="dropdown-menu mega-menu">*/
/*                                 <li>*/
/*                                     <div class="yamm-content">*/
/*                                         <div class="row">*/
/*                                             {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                                                 <div class="col-xs-12 col-sm-12 col-md-4 col-menu">*/
/*                                                     <ul class="links list-unstyled">*/
/*                                                         {% for child in children %}*/
/*                                                             <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                                 <!-- /.col -->*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <!-- /.row -->*/
/*                                     </div>*/
/*                                     <!-- /.yamm-content -->*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li class="dropdown menu-item"> <a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <!-- /.nav -->*/
/*         </nav>*/
/*         <!-- /.megamenu-horizontal -->*/
/*     </div>*/
/*     <!-- /.side-menu -->*/
/* {% elseif position == 'column_right' %}*/
/* */
/* {% endif %}*/
