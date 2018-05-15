<?php

/* default/template/extension/module/quick_info.twig */
class __TwigTemplate_dd9472b4d0f4f3212ff7c51d6cf5a925d1d6e29daa76a3f30d504a4f4637c845 extends Twig_Template
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
        echo "<div class=\"info-boxes wow fadeInUp\">
    <div class=\"info-boxes-inner\">
        <div class=\"row\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 5
            echo "                <div class=\"col-md-6 col-sm-4 col-lg-4\">
                    <div class=\"info-box\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <h4 class=\"info-box-heading green\">";
            // line 9
            echo $this->getAttribute($context["info"], "title", array());
            echo "</h4>
                            </div>
                        </div>
                        <h6 class=\"text\">";
            // line 12
            echo $this->getAttribute($context["info"], "description", array());
            echo "</h6>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
        <!-- /.row -->
    </div>
    <!-- /.info-boxes-inner -->
</div>
<!-- /.info-boxes -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/quick_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  40 => 12,  34 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="info-boxes wow fadeInUp">*/
/*     <div class="info-boxes-inner">*/
/*         <div class="row">*/
/*             {% for info in infos %}*/
/*                 <div class="col-md-6 col-sm-4 col-lg-4">*/
/*                     <div class="info-box">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-12">*/
/*                                 <h4 class="info-box-heading green">{{ info.title }}</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                         <h6 class="text">{{ info.description }}</h6>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/*     <!-- /.info-boxes-inner -->*/
/* </div>*/
/* <!-- /.info-boxes -->*/
