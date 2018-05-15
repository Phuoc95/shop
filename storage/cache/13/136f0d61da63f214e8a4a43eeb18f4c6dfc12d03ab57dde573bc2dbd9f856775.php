<?php

/* default/template/extension/module/banner.twig */
class __TwigTemplate_e0095dfcfd37367409e62e93ac2b7931e50b05753fe44f79f13a15967918a9a3 extends Twig_Template
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
        if ((isset($context["banners"]) ? $context["banners"] : null)) {
            // line 2
            echo "    ";
            if (((isset($context["position"]) ? $context["position"] : null) == "content_top")) {
                // line 3
                echo "    <div class=\"wide-banners wow fadeInUp outer-bottom-xs\">
        <div class=\"row\">
            ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                    // line 6
                    echo "            <div class=\"col-md-6 col-sm-6\">
                <div class=\"wide-banner cnt-strip\">
                    <div class=\"image\">
                        ";
                    // line 9
                    if ($this->getAttribute($context["banner"], "link", array())) {
                        // line 10
                        echo "                            <a href=\"";
                        echo $this->getAttribute($context["banner"], "link", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["banner"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["banner"], "title", array());
                        echo "\" class=\"img-responsive\"/></a>
                        ";
                    } else {
                        // line 12
                        echo "                            <img src=\"";
                        echo $this->getAttribute($context["banner"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["banner"], "title", array());
                        echo "\" class=\"img-responsive\" />
                        ";
                    }
                    // line 14
                    echo "                    </div>
                </div>
                <!-- /.wide-banner -->
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </div>
        <!-- /.row -->
    </div>
    <!-- /.wide-banners -->
    ";
            } elseif (((            // line 23
(isset($context["position"]) ? $context["position"] : null) == "column_right") || ((isset($context["position"]) ? $context["position"] : null) == "column_left"))) {
                // line 24
                echo "        <div class=\"column-right-banner\">
            ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                    // line 26
                    echo "                <div class=\"wide-banner cnt-strip\" style=\"margin-bottom: 10px;\">
                    <div class=\"image\">
                        ";
                    // line 28
                    if ($this->getAttribute($context["banner"], "link", array())) {
                        // line 29
                        echo "                            <a href=\"";
                        echo $this->getAttribute($context["banner"], "link", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["banner"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["banner"], "title", array());
                        echo "\" class=\"img-responsive\"/></a>
                        ";
                    } else {
                        // line 31
                        echo "                            <img src=\"";
                        echo $this->getAttribute($context["banner"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["banner"], "title", array());
                        echo "\" class=\"img-responsive\" />
                        ";
                    }
                    // line 33
                    echo "                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  106 => 33,  98 => 31,  88 => 29,  86 => 28,  82 => 26,  78 => 25,  75 => 24,  73 => 23,  67 => 19,  57 => 14,  49 => 12,  39 => 10,  37 => 9,  32 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if banners %}*/
/*     {% if position == 'content_top' %}*/
/*     <div class="wide-banners wow fadeInUp outer-bottom-xs">*/
/*         <div class="row">*/
/*             {% for banner in banners %}*/
/*             <div class="col-md-6 col-sm-6">*/
/*                 <div class="wide-banner cnt-strip">*/
/*                     <div class="image">*/
/*                         {% if banner.link %}*/
/*                             <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive"/></a>*/
/*                         {% else %}*/
/*                             <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.wide-banner -->*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/*     <!-- /.wide-banners -->*/
/*     {% elseif position == 'column_right' or position == 'column_left' %}*/
/*         <div class="column-right-banner">*/
/*             {% for banner in banners %}*/
/*                 <div class="wide-banner cnt-strip" style="margin-bottom: 10px;">*/
/*                     <div class="image">*/
/*                         {% if banner.link %}*/
/*                             <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive"/></a>*/
/*                         {% else %}*/
/*                             <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endif %}*/
