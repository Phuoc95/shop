<?php

/* default/template/common/home.twig */
class __TwigTemplate_f7c416173c8744e479b1c1651e8e2a31da61c8c325f027dbef2ccf3b1595a2f7 extends Twig_Template
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
<div class=\"body-content outer-top-xs\" id=\"top-banner-and-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <!--  CONTENT  -->
            <div class=\"col-xs-12 col-sm-12 col-md-9 homebanner-holder\">
                <div id=\"content\">
                    ";
        // line 8
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
            <!--  SIDEBAR  -->
            <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">
                ";
        // line 14
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
            </div>
            <!--  SIDEBAR : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 19
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 24
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 24,  47 => 19,  39 => 14,  30 => 8,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div class="body-content outer-top-xs" id="top-banner-and-menu">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <!--  CONTENT  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">*/
/*                 <div id="content">*/
/*                     {{ content_top }}*/
/*                 </div>*/
/*             </div>*/
/*             <!--  CONTENT : END  -->*/
/*             <!--  SIDEBAR  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-3 sidebar">*/
/*                 {{ column_right }}*/
/*             </div>*/
/*             <!--  SIDEBAR : END  -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ footer }}*/
