<?php

/* default/template/common/footer.twig */
class __TwigTemplate_458dd986796b6fab7b617802b3ff26a1e6dce870f5d1394799a02195bc31af24 extends Twig_Template
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
        echo "<!--  FOOTER  -->
<footer id=\"footer\" class=\"footer color-bg\">
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"module-heading\">
                        <h4 class=\"module-title\">";
        // line 8
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class=\"module-body\">
                        <ul class=\"toggle-footer\" style=\"\">
                            <li class=\"media\">
                                <div class=\"pull-left\"> <span class=\"icon fa-stack fa-lg\"> <i class=\"fa fa-map-marker fa-stack-1x fa-inverse\"></i> </span> </div>
                                <div class=\"media-body\">
                                    <p>";
        // line 17
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</p>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"pull-left\"> <span class=\"icon fa-stack fa-lg\"> <i class=\"fa fa-mobile fa-stack-1x fa-inverse\"></i> </span> </div>
                                <div class=\"media-body\">
                                    <p>";
        // line 23
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</p>
                                </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"pull-left\"> <span class=\"icon fa-stack fa-lg\"> <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i> </span> </div>
                                <div class=\"media-body\"> <span><a href=\"mailto:";
        // line 28
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></span> </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"module-heading\">
                        <h4 class=\"module-title\">";
        // line 38
        echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
        echo "</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class=\"module-body\">
                        <ul class='list-unstyled'>
                            <li><a href=\"";
        // line 44
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
                            <li><a href=\"";
        // line 45
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
                            <li><a href=\"";
        // line 46
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
                            <li><a href=\"";
        // line 47
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"module-heading\">
                        <h4 class=\"module-title\">";
        // line 56
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class=\"module-body\">
                        <ul class='list-unstyled'>
                            ";
        // line 62
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 63
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 64
                echo "                                    <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                            ";
        }
        // line 67
        echo "                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"module-heading\">
                        <h4 class=\"module-title\">";
        // line 75
        echo (isset($context["text_why_choose"]) ? $context["text_why_choose"] : null);
        echo "</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class=\"module-body\">
                        <ul class='list-unstyled'>
                            <li><a href=\"";
        // line 81
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
                            <li><a href=\"";
        // line 82
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
                            <li><a href=\"";
        // line 83
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
                            <li><a href=\"";
        // line 84
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
            </div>
            <hr style=\"border-top: 1px solid #272727;\">
            <div style=\"color: #505050;\">";
        // line 91
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</div>
        </div>
    </div>
    <div class=\"copyright-bar\">
        <div class=\"container\">
            <div class=\"col-xs-12 col-sm-6 no-padding social\">
                <ul class=\"link\">
                    ";
        // line 98
        if ((isset($context["social_network"]) ? $context["social_network"] : null)) {
            // line 99
            echo "                        ";
            if ($this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "facebook", array())) {
                // line 100
                echo "                            <li class=\"fb pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"";
                echo $this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "facebook", array());
                echo "\" title=\"Facebook\"></a></li>
                        ";
            }
            // line 102
            echo "                        ";
            if ($this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "twitter", array())) {
                // line 103
                echo "                            <li class=\"tw pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"";
                echo $this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "twitter", array());
                echo "\" title=\"Twitter\"></a></li>
                        ";
            }
            // line 105
            echo "                        ";
            if ($this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "google_plus", array())) {
                // line 106
                echo "                            <li class=\"googleplus pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"";
                echo $this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "google_plus", array());
                echo "\" title=\"GooglePlus\"></a></li>
                        ";
            }
            // line 108
            echo "                        ";
            if ($this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "pinterest", array())) {
                // line 109
                echo "                            <li class=\"pintrest pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"";
                echo $this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "pinterest", array());
                echo "\" title=\"Pinterest\"></a></li>
                        ";
            }
            // line 111
            echo "                        ";
            if ($this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "linkedin", array())) {
                // line 112
                echo "                            <li class=\"linkedin pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"";
                echo $this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "linkedin", array());
                echo "\" title=\"Linkedin\"></a></li>
                        ";
            }
            // line 114
            echo "                        ";
            if ($this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "youtube", array())) {
                // line 115
                echo "                            <li class=\"youtube pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"";
                echo $this->getAttribute((isset($context["social_network"]) ? $context["social_network"] : null), "youtube", array());
                echo "\" title=\"Youtube\"></a></li>
                        ";
            }
            // line 117
            echo "                    ";
        }
        // line 118
        echo "                </ul>
            </div>
            <div class=\"col-xs-12 col-sm-6 no-padding\">
                <div class=\"clearfix payment-methods\">
                    <ul>
                        <li><img src=\"catalog/view/theme/default/assets/images/payments/1.png\" alt=\"\"></li>
                        <li><img src=\"catalog/view/theme/default/assets/images/payments/2.png\" alt=\"\"></li>
                        <li><img src=\"catalog/view/theme/default/assets/images/payments/3.png\" alt=\"\"></li>
                        <li><img src=\"catalog/view/theme/default/assets/images/payments/4.png\" alt=\"\"></li>
                        <li><img src=\"catalog/view/theme/default/assets/images/payments/5.png\" alt=\"\"></li>
                    </ul>
                </div>
                <!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
";
        // line 136
        echo "<script src=\"catalog/view/theme/default/assets/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/bootstrap-hover-dropdown.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/owl.carousel.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/echo.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/jquery.easing-1.3.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/bootstrap-slider.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/jquery.rateit.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/lightbox.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/bootstrap-select.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/wow.min.js\"></script>
<script src=\"catalog/view/theme/default/assets/js/scripts.js\"></script>
";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 148
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 150,  297 => 148,  293 => 147,  280 => 136,  261 => 118,  258 => 117,  252 => 115,  249 => 114,  243 => 112,  240 => 111,  234 => 109,  231 => 108,  225 => 106,  222 => 105,  216 => 103,  213 => 102,  207 => 100,  204 => 99,  202 => 98,  192 => 91,  180 => 84,  174 => 83,  168 => 82,  162 => 81,  153 => 75,  143 => 67,  140 => 66,  129 => 64,  124 => 63,  122 => 62,  113 => 56,  99 => 47,  93 => 46,  87 => 45,  81 => 44,  72 => 38,  57 => 28,  49 => 23,  40 => 17,  28 => 8,  19 => 1,);
    }
}
/* <!--  FOOTER  -->*/
/* <footer id="footer" class="footer color-bg">*/
/*     <div class="footer-bottom">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="module-heading">*/
/*                         <h4 class="module-title">{{ text_contact }}</h4>*/
/*                     </div>*/
/*                     <!-- /.module-heading -->*/
/* */
/*                     <div class="module-body">*/
/*                         <ul class="toggle-footer" style="">*/
/*                             <li class="media">*/
/*                                 <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>*/
/*                                 <div class="media-body">*/
/*                                     <p>{{ address }}</p>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="media">*/
/*                                 <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>*/
/*                                 <div class="media-body">*/
/*                                     <p>{{ telephone }}</p>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="media">*/
/*                                 <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>*/
/*                                 <div class="media-body"> <span><a href="mailto:{{ email }}">{{ email }}</a></span> </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.module-body -->*/
/*                 </div>*/
/*                 <!-- /.col -->*/
/* */
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="module-heading">*/
/*                         <h4 class="module-title">{{ text_customer }}</h4>*/
/*                     </div>*/
/*                     <!-- /.module-heading -->*/
/* */
/*                     <div class="module-body">*/
/*                         <ul class='list-unstyled'>*/
/*                             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                             <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*                             <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.module-body -->*/
/*                 </div>*/
/*                 <!-- /.col -->*/
/* */
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="module-heading">*/
/*                         <h4 class="module-title">{{ text_information }}</h4>*/
/*                     </div>*/
/*                     <!-- /.module-heading -->*/
/* */
/*                     <div class="module-body">*/
/*                         <ul class='list-unstyled'>*/
/*                             {% if informations %}*/
/*                                 {% for information in informations %}*/
/*                                     <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.module-body -->*/
/*                 </div>*/
/*                 <!-- /.col -->*/
/* */
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="module-heading">*/
/*                         <h4 class="module-title">{{ text_why_choose }}</h4>*/
/*                     </div>*/
/*                     <!-- /.module-heading -->*/
/* */
/*                     <div class="module-body">*/
/*                         <ul class='list-unstyled'>*/
/*                             <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*                             <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*                             <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*                             <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.module-body -->*/
/*                 </div>*/
/*             </div>*/
/*             <hr style="border-top: 1px solid #272727;">*/
/*             <div style="color: #505050;">{{ powered }}</div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="copyright-bar">*/
/*         <div class="container">*/
/*             <div class="col-xs-12 col-sm-6 no-padding social">*/
/*                 <ul class="link">*/
/*                     {% if social_network %}*/
/*                         {% if social_network.facebook %}*/
/*                             <li class="fb pull-left"><a target="_blank" rel="nofollow" href="{{ social_network.facebook }}" title="Facebook"></a></li>*/
/*                         {% endif %}*/
/*                         {% if social_network.twitter %}*/
/*                             <li class="tw pull-left"><a target="_blank" rel="nofollow" href="{{ social_network.twitter }}" title="Twitter"></a></li>*/
/*                         {% endif %}*/
/*                         {% if social_network.google_plus %}*/
/*                             <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="{{ social_network.google_plus }}" title="GooglePlus"></a></li>*/
/*                         {% endif %}*/
/*                         {% if social_network.pinterest %}*/
/*                             <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="{{ social_network.pinterest }}" title="Pinterest"></a></li>*/
/*                         {% endif %}*/
/*                         {% if social_network.linkedin %}*/
/*                             <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="{{ social_network.linkedin }}" title="Linkedin"></a></li>*/
/*                         {% endif %}*/
/*                         {% if social_network.youtube %}*/
/*                             <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="{{ social_network.youtube }}" title="Youtube"></a></li>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-6 no-padding">*/
/*                 <div class="clearfix payment-methods">*/
/*                     <ul>*/
/*                         <li><img src="catalog/view/theme/default/assets/images/payments/1.png" alt=""></li>*/
/*                         <li><img src="catalog/view/theme/default/assets/images/payments/2.png" alt=""></li>*/
/*                         <li><img src="catalog/view/theme/default/assets/images/payments/3.png" alt=""></li>*/
/*                         <li><img src="catalog/view/theme/default/assets/images/payments/4.png" alt=""></li>*/
/*                         <li><img src="catalog/view/theme/default/assets/images/payments/5.png" alt=""></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.payment-methods -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* {#<script src="catalog/view/theme/default/assets/js/jquery-1.11.1.min.js"></script>#}*/
/* <script src="catalog/view/theme/default/assets/js/bootstrap.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/bootstrap-hover-dropdown.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/owl.carousel.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/echo.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/jquery.easing-1.3.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/bootstrap-slider.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/jquery.rateit.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/lightbox.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/bootstrap-select.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/wow.min.js"></script>*/
/* <script src="catalog/view/theme/default/assets/js/scripts.js"></script>*/
/* {% for script in scripts %}*/
/*     <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* </body>*/
/* </html>*/
