<?php

/* default/template/mail/register.twig */
class __TwigTemplate_aa1e60c91cb0f8bd8ad4e7f8a7ac00cee3448a5301ea69b889d4ea2b429047be extends Twig_Template
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
        echo (isset($context["text_welcome"]) ? $context["text_welcome"] : null);
        echo "

";
        // line 3
        if ( !(isset($context["approval"]) ? $context["approval"] : null)) {
            // line 4
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "

";
            // line 6
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "

";
            // line 8
            echo (isset($context["text_service"]) ? $context["text_service"] : null);
            echo "

";
            // line 10
            echo (isset($context["text_thanks"]) ? $context["text_thanks"] : null);
            echo "
";
            // line 11
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "
";
        } else {
            // line 13
            echo (isset($context["text_approval"]) ? $context["text_approval"] : null);
            echo "

";
            // line 15
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "

";
            // line 17
            echo (isset($context["text_thanks"]) ? $context["text_thanks"] : null);
            echo "
";
            // line 18
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  60 => 17,  55 => 15,  50 => 13,  45 => 11,  41 => 10,  36 => 8,  31 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ text_welcome }}*/
/* */
/* {% if not approval %}*/
/* {{ text_login }}*/
/* */
/* {{ login }}*/
/* */
/* {{ text_service }}*/
/* */
/* {{ text_thanks }}*/
/* {{ store }}*/
/* {% else %}*/
/* {{ text_approval }}*/
/* */
/* {{ login }}*/
/* */
/* {{ text_thanks }}*/
/* {{ store }}*/
/* {% endif %}*/
