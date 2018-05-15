<?php

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_1d06ebd890d53e49e54194f1833850d5b168d304c883917da27d71180c4a5dd0 extends Twig_Template
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
        echo "<div id=\"hero\">
    <div id=\"owl-main\" class=\"owl-carousel owl-inner-nav owl-ui-sm\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "        <div class=\"item\" style=\"background-image: url(";
            echo $this->getAttribute($context["banner"], "image", array());
            echo ");\">
            <div class=\"container-fluid\">
                <div class=\"caption bg-color vertical-center text-left\">
                    <div class=\"big-text fadeInDown-1\"> <span class=\"highlight\">";
            // line 7
            echo $this->getAttribute($context["banner"], "title", array());
            echo "</span></div>
                    ";
            // line 8
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 9
                echo "                    <div class=\"button-holder fadeInDown-3\">
                        <a href=\"";
                // line 10
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\" class=\"btn-lg btn btn-uppercase btn-primary shop-now-button\">";
                echo (isset($context["text_detail"]) ? $context["text_detail"] : null);
                echo "</a>
                    </div>
                    ";
            }
            // line 13
            echo "                </div>
                <!-- /.caption -->
            </div>
            <!-- /.container-fluid -->
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
    <!-- /.owl-carousel -->
</div>
<!-- ========================================= SECTION – HERO : END ========================================= -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  51 => 13,  43 => 10,  40 => 9,  38 => 8,  34 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="hero">*/
/*     <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">*/
/*         {% for banner in banners %}*/
/*         <div class="item" style="background-image: url({{ banner.image }});">*/
/*             <div class="container-fluid">*/
/*                 <div class="caption bg-color vertical-center text-left">*/
/*                     <div class="big-text fadeInDown-1"> <span class="highlight">{{ banner.title }}</span></div>*/
/*                     {% if banner.link %}*/
/*                     <div class="button-holder fadeInDown-3">*/
/*                         <a href="{{ banner.link }}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{ text_detail }}</a>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <!-- /.caption -->*/
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <!-- /.owl-carousel -->*/
/* </div>*/
/* <!-- ========================================= SECTION – HERO : END ========================================= -->*/
