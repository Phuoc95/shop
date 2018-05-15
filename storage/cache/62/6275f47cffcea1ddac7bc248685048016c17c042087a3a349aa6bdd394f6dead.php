<?php

/* default/template/error/not_found.twig */
class __TwigTemplate_61c12d51ef48ac36c5de01014abc53c4c4c0729dd37735721524db3037b34c8d extends Twig_Template
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
        // line 2
        echo "<div class=\"breadcrumb\">
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
<div class=\"body-content\">
    <div class=\"container\">
        <div class=\"contact-page\" style=\"margin-bottom: 20px;\">
            <div id=\"content\">
                <h1>";
        // line 20
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</h1>
                <p>";
        // line 21
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</p>
                <div class=\"buttons clearfix\">
                    <div class=\"pull-right\"><a href=\"";
        // line 23
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
                </div>
                ";
        // line 25
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            </div>
        </div>
        <!-- /.row -->
        ";
        // line 29
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 35
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  78 => 29,  71 => 25,  64 => 23,  59 => 21,  55 => 20,  42 => 9,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {{ header }}{#{{ column_left }}#}*/
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
/* <div class="body-content">*/
/*     <div class="container">*/
/*         <div class="contact-page" style="margin-bottom: 20px;">*/
/*             <div id="content">*/
/*                 <h1>{{ text_error }}</h1>*/
/*                 <p>{{ text_error }}</p>*/
/*                 <div class="buttons clearfix">*/
/*                     <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*                 </div>*/
/*                 {{ content_top }}*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {#{{ column_right }}#}*/
/* {{ footer }}*/
