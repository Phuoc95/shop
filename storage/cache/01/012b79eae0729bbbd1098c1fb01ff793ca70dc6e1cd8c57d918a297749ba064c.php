<?php

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_7b67c3178f84294ca17a0f139061d95ebee29c6a0aea690d0d7f1c3e7b0431f8 extends Twig_Template
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
        echo "<div id=\"brands-carousel\" class=\"logo-slider wow fadeInUp\">
    <div class=\"logo-slider-inner\">
        <div id=\"brand-slider\" class=\"owl-carousel brand-slider custom-carousel owl-theme\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "                <div class=\"item\">
                    ";
            // line 6
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 7
                echo "                        <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\"
                                                         class=\"img-responsive\"/></a>
                    ";
            } else {
                // line 10
                echo "                        <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\"/>
                    ";
            }
            // line 12
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
        <!-- /.owl-carousel #logo-slider -->
    </div>
    <!-- /.logo-slider-inner -->
</div>
<!-- /.logo-slider -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  52 => 12,  44 => 10,  33 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="brands-carousel" class="logo-slider wow fadeInUp">*/
/*     <div class="logo-slider-inner">*/
/*         <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">*/
/*             {% for banner in banners %}*/
/*                 <div class="item">*/
/*                     {% if banner.link %}*/
/*                         <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}"*/
/*                                                          class="img-responsive"/></a>*/
/*                     {% else %}*/
/*                         <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive"/>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <!-- /.owl-carousel #logo-slider -->*/
/*     </div>*/
/*     <!-- /.logo-slider-inner -->*/
/* </div>*/
/* <!-- /.logo-slider -->*/
