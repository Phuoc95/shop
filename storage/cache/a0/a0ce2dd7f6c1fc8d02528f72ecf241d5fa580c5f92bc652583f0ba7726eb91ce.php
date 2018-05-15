<?php

/* default/template/common/language.twig */
class __TwigTemplate_9ed33dbb249cd3ee3b57d8c017dd667e1cefaef9e9b09ed7de9ea00c3d55d093 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "    <li class=\"dropdown dropdown-small\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><span class=\"value\">";
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo " </span><b class=\"caret\"></b></a>
        <form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
        <ul class=\"dropdown-menu\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "            <li>
                <a name=\"";
                // line 7
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" class=\"language-select\" href=\"#\">
                    <img
                            src=\"catalog/language/";
                // line 9
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\"
                            alt=\"";
                // line 10
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "
                </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
        <input type=\"hidden\" name=\"code\" value=\"\"/>
        <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 16
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
        </form>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 14,  49 => 10,  43 => 9,  38 => 7,  35 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/*     <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">{{ text_language }} </span><b class="caret"></b></a>*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*         <ul class="dropdown-menu">*/
/*             {% for language in languages %}*/
/*             <li>*/
/*                 <a name="{{ language.code }}" class="language-select" href="#">*/
/*                     <img*/
/*                             src="catalog/language/{{ language.code }}/{{ language.code }}.png"*/
/*                             alt="{{ language.name }}" title="{{ language.name }}"/> {{ language.name }}*/
/*                 </a>*/
/*             </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <input type="hidden" name="code" value=""/>*/
/*         <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*         </form>*/
/*     </li>*/
/* {% endif %}*/
/* */
