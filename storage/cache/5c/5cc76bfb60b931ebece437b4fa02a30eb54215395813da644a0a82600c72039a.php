<?php

/* default/template/common/currency.twig */
class __TwigTemplate_a8b65f67486ea1c79c7a008f72f453845f7db0cd8797394c39f39ba139d9965c extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "    <li class=\"dropdown dropdown-small\">
        <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\"
                                           data-toggle=\"dropdown\"><span class=\"value\">";
            // line 4
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo " </span><b
                    class=\"caret\"></b></a>
        <form action=\"";
            // line 6
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
            <ul class=\"dropdown-menu\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "                    ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 10
                    echo "                        <li>
                            <a name=\"";
                    // line 11
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\" class=\"currency-select\" href=\"#\">
                                ";
                    // line 12
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "
                            </a>
                        </li>
                    ";
                } else {
                    // line 16
                    echo "                        <li>
                            <a name=\"";
                    // line 17
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\" class=\"currency-select\" href=\"#\">
                                ";
                    // line 18
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "
                            </a>
                        </li>
                    ";
                }
                // line 22
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </ul>
            <input type=\"hidden\" name=\"code\" value=\"\"/>
            <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 25
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
        </form>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 23,  74 => 22,  65 => 18,  61 => 17,  58 => 16,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/*     <li class="dropdown dropdown-small">*/
/*         <a href="#" class="dropdown-toggle" data-hover="dropdown"*/
/*                                            data-toggle="dropdown"><span class="value">{{ text_currency }} </span><b*/
/*                     class="caret"></b></a>*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*             <ul class="dropdown-menu">*/
/*                 {% for currency in currencies %}*/
/*                     {% if currency.symbol_left %}*/
/*                         <li>*/
/*                             <a name="{{ currency.code }}" class="currency-select" href="#">*/
/*                                 {{ currency.symbol_left }} {{ currency.title }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li>*/
/*                             <a name="{{ currency.code }}" class="currency-select" href="#">*/
/*                                 {{ currency.symbol_right }} {{ currency.title }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <input type="hidden" name="code" value=""/>*/
/*             <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*         </form>*/
/*     </li>*/
/* {% endif %}*/
