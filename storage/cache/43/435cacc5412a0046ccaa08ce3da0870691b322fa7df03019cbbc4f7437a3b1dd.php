<?php

/* default/template/account/account.twig */
class __TwigTemplate_464fd150fa4cd3ae111c7e1f0234cca30b7a65c3f7c4f2cf9bf18d3756fb70c7 extends Twig_Template
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
";
        // line 16
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
";
        }
        // line 19
        echo "<div class=\"body-content\">
    <div class=\"container\">
        <div class=\"contact-page\" style=\"margin-bottom: 20px;\">
            <div id=\"content\">
                <h1>";
        // line 23
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h1>
                ";
        // line 24
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 26
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
                    <li><a href=\"";
        // line 27
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
                    <li><a href=\"";
        // line 28
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
                    <li><a href=\"";
        // line 29
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
                </ul>
                ";
        // line 31
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 32
            echo "                    <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
                    <ul class=\"list-unstyled\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 35
                echo "                            <li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </ul>
                ";
        }
        // line 39
        echo "                <h2>";
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 41
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
                    <li><a href=\"";
        // line 42
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
                    ";
        // line 43
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 44
            echo "                        <li><a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a></li>
                    ";
        }
        // line 46
        echo "                    <li><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
                    <li><a href=\"";
        // line 47
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a></li>
                    <li><a href=\"";
        // line 48
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a></li>
                </ul>
                <h2>";
        // line 50
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    ";
        // line 52
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 53
            echo "                        <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
                    ";
        } else {
            // line 55
            echo "                        <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
                        <li><a href=\"";
            // line 56
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
                    ";
        }
        // line 58
        echo "                </ul>
                <h2>";
        // line 59
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 61
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        ";
        // line 66
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 71
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
";
        // line 72
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 72,  230 => 71,  222 => 66,  212 => 61,  207 => 59,  204 => 58,  197 => 56,  190 => 55,  182 => 53,  180 => 52,  175 => 50,  168 => 48,  162 => 47,  155 => 46,  147 => 44,  145 => 43,  139 => 42,  133 => 41,  127 => 39,  123 => 37,  112 => 35,  108 => 34,  102 => 32,  100 => 31,  93 => 29,  87 => 28,  81 => 27,  75 => 26,  70 => 24,  66 => 23,  60 => 19,  54 => 17,  52 => 16,  43 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
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
/* {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/* {% endif %}*/
/* <div class="body-content">*/
/*     <div class="container">*/
/*         <div class="contact-page" style="margin-bottom: 20px;">*/
/*             <div id="content">*/
/*                 <h1>{{ text_my_account }}</h1>*/
/*                 {{ content_top }}*/
/*                 <ul class="list-unstyled">*/
/*                     <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*                     <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*                     <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*                     <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*                 </ul>*/
/*                 {% if credit_cards %}*/
/*                     <h2>{{ text_credit_card }}</h2>*/
/*                     <ul class="list-unstyled">*/
/*                         {% for credit_card in credit_cards %}*/
/*                             <li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*                 <h2>{{ text_my_orders }}</h2>*/
/*                 <ul class="list-unstyled">*/
/*                     <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                     <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                     {% if reward %}*/
/*                         <li><a href="{{ reward }}">{{ text_reward }}</a></li>*/
/*                     {% endif %}*/
/*                     <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*                     <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                     <li><a href="{{ recurring }}">{{ text_recurring }}</a></li>*/
/*                 </ul>*/
/*                 <h2>{{ text_my_affiliate }}</h2>*/
/*                 <ul class="list-unstyled">*/
/*                     {% if not tracking %}*/
/*                         <li><a href="{{ affiliate }}">{{ text_affiliate_add }}</a></li>*/
/*                     {% else %}*/
/*                         <li><a href="{{ affiliate }}">{{ text_affiliate_edit }}</a></li>*/
/*                         <li><a href="{{ tracking }}">{{ text_tracking }}</a></li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*                 <h2>{{ text_my_newsletter }}</h2>*/
/*                 <ul class="list-unstyled">*/
/*                     <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ column_right }}*/
/* {{ footer }}*/
