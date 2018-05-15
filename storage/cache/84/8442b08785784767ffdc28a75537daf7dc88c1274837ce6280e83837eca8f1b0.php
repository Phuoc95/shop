<?php

/* default/template/checkout/checkout.twig */
class __TwigTemplate_cb472183173aca4d262acd4fd80fd21fc12dc5a3cba7a7f8250e3b257464c6b5 extends Twig_Template
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
";
        // line 2
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 3
            echo "<div class=\"container\">
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 4
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
</div>
";
        }
        // line 9
        echo "<div class=\"breadcrumb\">
    <div class=\"container\">
        <div class=\"breadcrumb-inner\">
            <ul class=\"list-inline list-unstyled\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
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
        // line 27
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
        // line 31
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                    ";
        // line 37
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 38
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">";
            // line 40
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                    ";
        } else {
            // line 47
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">";
            // line 49
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</h4>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                    ";
        }
        // line 56
        echo "                    ";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 57
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">";
            // line 59
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h4>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">";
            // line 67
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h4>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                    ";
        }
        // line 74
        echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
        // line 76
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
        // line 84
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                </div>
                ";
        // line 91
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            </div>
        </div>
        <!-- /.row -->
        ";
        // line 95
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 100
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<script type=\"text/javascript\"><!--
    \$(document).on('change', 'input[name=\\'account\\']', function () {
        if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 105
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 107
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }
        } else {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 111
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 113
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
            }
        }
    });

    ";
        // line 118
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 119
            echo "    \$(document).ready(function () {
        \$.ajax({
            url: 'index.php?route=checkout/login',
            dataType: 'html',
            success: function (html) {
                \$('#collapse-checkout-option .panel-body').html(html);

                \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 126
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    ";
        } else {
            // line 136
            echo "    \$(document).ready(function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address',
            dataType: 'html',
            success: function (html) {
                \$('#collapse-payment-address .panel-body').html(html);

                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 143
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    ";
        }
        // line 153
        echo "
    // Checkout
    \$(document).delegate('#button-account', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
            dataType: 'html',
            beforeSend: function () {
                \$('#button-account').button('loading');
            },
            complete: function () {
                \$('#button-account').button('reset');
            },
            success: function (html) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                \$('#collapse-payment-address .panel-body').html(html);

                if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 172
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                } else {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 174
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                }

                \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Login
    \$(document).delegate('#button-login', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/login/save',
            type: 'post',
            data: \$('#collapse-checkout-option :input'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-login').button('loading');
            },
            complete: function () {
                \$('#button-login').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    // Highlight any found errors
                    \$('input[name=\\'email\\']').parent().addClass('has-error');
                    \$('input[name=\\'password\\']').parent().addClass('has-error');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Register
    \$(document).delegate('#button-register', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/register/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-register').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-register').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 254
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 255
            echo "                    var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            success: function (html) {
                                // Add the shipping address
                                \$.ajax({
                                    url: 'index.php?route=checkout/shipping_address',
                                    dataType: 'html',
                                    success: function (html) {
                                        \$('#collapse-shipping-address .panel-body').html(html);

                                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 269
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                    }
                                });

                                \$('#collapse-shipping-method .panel-body').html(html);

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 278
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 282
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 283
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 284
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-shipping-address .panel-body').html(html);

                                \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 297
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 301
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 302
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 303
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 311
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 317
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 321
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                    ";
        }
        // line 328
        echo "
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-register').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-address .panel-body').html(html);

                            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 338
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Payment Address
    \$(document).delegate('#button-payment-address', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-address').button('loading');
            },
            complete: function () {
                \$('#button-payment-address').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    ";
        // line 389
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 390
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 396
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 400
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 401
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 402
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                    ";
        } else {
            // line 420
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 426
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 430
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                    ";
        }
        // line 448
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Shipping Address
    \$(document).delegate('#button-shipping-address', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_address/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-address').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-address').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-address').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 501
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 505
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 506
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');

                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Guest
    \$(document).delegate('#button-guest', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 578
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 579
            echo "                    var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                // Add the shipping address
                                \$.ajax({
                                    url: 'index.php?route=checkout/guest_shipping',
                                    dataType: 'html',
                                    success: function (html) {
                                        \$('#collapse-shipping-address .panel-body').html(html);

                                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 596
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                    }
                                });

                                \$('#collapse-shipping-method .panel-body').html(html);

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 605
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 609
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 610
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/guest_shipping',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                \$('#collapse-shipping-address .panel-body').html(html);

                                \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 626
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 630
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 631
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 632
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 640
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 649
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 653
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                    ";
        }
        // line 660
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Guest Shipping
    \$(document).delegate('#button-guest-shipping', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest_shipping/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest-shipping').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest-shipping').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest-shipping').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 713
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 717
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 718
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).delegate('#button-shipping-method', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method/save',
            type: 'post',
            data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 762
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 766
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).delegate('#button-payment-method', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_method/save',
            type: 'post',
            data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-payment-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/confirm',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-payment-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-checkout-confirm .panel-body').html(html);

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 810
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
";
        // line 826
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 826,  1058 => 810,  1011 => 766,  1004 => 762,  957 => 718,  953 => 717,  946 => 713,  891 => 660,  881 => 653,  874 => 649,  863 => 640,  852 => 632,  848 => 631,  844 => 630,  837 => 626,  818 => 610,  814 => 609,  807 => 605,  795 => 596,  776 => 579,  774 => 578,  699 => 506,  695 => 505,  688 => 501,  633 => 448,  612 => 430,  605 => 426,  597 => 420,  576 => 402,  572 => 401,  568 => 400,  561 => 396,  553 => 390,  551 => 389,  497 => 338,  485 => 328,  475 => 321,  468 => 317,  460 => 311,  449 => 303,  445 => 302,  441 => 301,  434 => 297,  418 => 284,  414 => 283,  410 => 282,  403 => 278,  391 => 269,  375 => 255,  373 => 254,  290 => 174,  285 => 172,  264 => 153,  251 => 143,  242 => 136,  229 => 126,  220 => 119,  218 => 118,  210 => 113,  205 => 111,  198 => 107,  193 => 105,  185 => 100,  177 => 95,  170 => 91,  160 => 84,  149 => 76,  145 => 74,  135 => 67,  124 => 59,  120 => 57,  117 => 56,  107 => 49,  103 => 47,  93 => 40,  89 => 38,  87 => 37,  78 => 31,  71 => 27,  58 => 16,  47 => 14,  43 => 13,  37 => 9,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* {% if error_warning %}*/
/* <div class="container">*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
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
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <div class="panel-group" id="accordion">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h4 class="panel-title">{{ text_checkout_option }}</h4>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-checkout-option">*/
/*                             <div class="panel-body"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% if not logged and account != 'guest' %}*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h4 class="panel-title">{{ text_checkout_account }}</h4>*/
/*                             </div>*/
/*                             <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*                                 <div class="panel-body"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h4 class="panel-title">{{ text_checkout_payment_address }}</h4>*/
/*                             </div>*/
/*                             <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*                                 <div class="panel-body"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if shipping_required %}*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h4 class="panel-title">{{ text_checkout_shipping_address }}</h4>*/
/*                             </div>*/
/*                             <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*                                 <div class="panel-body"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h4 class="panel-title">{{ text_checkout_shipping_method }}</h4>*/
/*                             </div>*/
/*                             <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*                                 <div class="panel-body"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h4 class="panel-title">{{ text_checkout_payment_method }}</h4>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*                             <div class="panel-body"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h4 class="panel-title">{{ text_checkout_confirm }}</h4>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*                             <div class="panel-body"></div>*/
/*                         </div>*/
/*                     </div>*/
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
/* {{ column_right }}*/
/* <script type="text/javascript"><!--*/
/*     $(document).on('change', 'input[name=\'account\']', function () {*/
/*         if ($('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {*/
/*             if (this.value == 'register') {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*             } else {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*             }*/
/*         } else {*/
/*             if (this.value == 'register') {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_account }}');*/
/*             } else {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_address }}');*/
/*             }*/
/*         }*/
/*     });*/
/* */
/*     {% if not logged %}*/
/*     $(document).ready(function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/login',*/
/*             dataType: 'html',*/
/*             success: function (html) {*/
/*                 $('#collapse-checkout-option .panel-body').html(html);*/
/* */
/*                 $('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                 $('a[href=\'#collapse-checkout-option\']').trigger('click');*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     {% else %}*/
/*     $(document).ready(function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/payment_address',*/
/*             dataType: 'html',*/
/*             success: function (html) {*/
/*                 $('#collapse-payment-address .panel-body').html(html);*/
/* */
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                 $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     {% endif %}*/
/* */
/*     // Checkout*/
/*     $(document).delegate('#button-account', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/*             dataType: 'html',*/
/*             beforeSend: function () {*/
/*                 $('#button-account').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-account').button('reset');*/
/*             },*/
/*             success: function (html) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 $('#collapse-payment-address .panel-body').html(html);*/
/* */
/*                 if ($('input[name=\'account\']:checked').val() == 'register') {*/
/*                     $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*                 } else {*/
/*                     $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                 }*/
/* */
/*                 $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Login*/
/*     $(document).delegate('#button-login', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/login/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-checkout-option :input'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-login').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-login').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#collapse-checkout-option .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                     // Highlight any found errors*/
/*                     $('input[name=\'email\']').parent().addClass('has-error');*/
/*                     $('input[name=\'password\']').parent().addClass('has-error');*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Register*/
/*     $(document).delegate('#button-register', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/register/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-register').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-register').button('reset');*/
/* */
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/* */
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                     var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                     if (shipping_address) {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_method',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 // Add the shipping address*/
/*                                 $.ajax({*/
/*                                     url: 'index.php?route=checkout/shipping_address',*/
/*                                     dataType: 'html',*/
/*                                     success: function (html) {*/
/*                                         $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/*                                         $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                     },*/
/*                                     error: function (xhr, ajaxOptions, thrownError) {*/
/*                                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                     }*/
/*                                 });*/
/* */
/*                                 $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/*                                 $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                                 $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/*                                 $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     } else {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/*                                 $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                                 $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/*                                 $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     }*/
/*                     {% else %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-method .panel-body').html(html);*/
/* */
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                     {% endif %}*/
/* */
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_address',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-register').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-address .panel-body').html(html);*/
/* */
/*                             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Payment Address*/
/*     $(document).delegate('#button-payment-address', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/payment_address/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-payment-address').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-payment-address').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/* */
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_address',*/
/*                         dataType: 'html',*/
/*                         success: function (html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/*                             $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     }).done(function () {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_address',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-address .panel-body').html(html);*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                     {% else %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-method .panel-body').html(html);*/
/* */
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     }).done(function () {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_address',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-address .panel-body').html(html);*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                     {% endif %}*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Shipping Address*/
/*     $(document).delegate('#button-shipping-address', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/shipping_address/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-shipping-address').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-shipping-address').button('reset');*/
/* */
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/* */
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().parent().addClass('has-error');*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-shipping-address').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* */
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function (html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     }).done(function () {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_address',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-address .panel-body').html(html);*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Guest*/
/*     $(document).delegate('#button-guest', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/guest/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-guest').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-guest').button('reset');*/
/* */
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/* */
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                     var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                     if (shipping_address) {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_method',*/
/*                             dataType: 'html',*/
/*                             complete: function () {*/
/*                                 $('#button-guest').button('reset');*/
/*                             },*/
/*                             success: function (html) {*/
/*                                 // Add the shipping address*/
/*                                 $.ajax({*/
/*                                     url: 'index.php?route=checkout/guest_shipping',*/
/*                                     dataType: 'html',*/
/*                                     success: function (html) {*/
/*                                         $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/*                                         $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                     },*/
/*                                     error: function (xhr, ajaxOptions, thrownError) {*/
/*                                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                     }*/
/*                                 });*/
/* */
/*                                 $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/*                                 $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                                 $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     } else {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/guest_shipping',*/
/*                             dataType: 'html',*/
/*                             complete: function () {*/
/*                                 $('#button-guest').button('reset');*/
/*                             },*/
/*                             success: function (html) {*/
/*                                 $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/*                                 $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                                 $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/*                                 $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     }*/
/*                     {% else %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-method .panel-body').html(html);*/
/* */
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                     {% endif %}*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Guest Shipping*/
/*     $(document).delegate('#button-guest-shipping', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/guest_shipping/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-guest-shipping').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-guest-shipping').button('reset');*/
/* */
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/* */
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-guest-shipping').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/* */
/*                             $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $(document).delegate('#button-shipping-method', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/shipping_method/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-shipping-method').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-shipping-method').button('reset');*/
/* */
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-shipping-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-shipping-method').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-method .panel-body').html(html);*/
/* */
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $(document).delegate('#button-payment-method', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/payment_method/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-payment-method').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-payment-method').button('reset');*/
/* */
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/confirm',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-payment-method').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-checkout-confirm .panel-body').html(html);*/
/* */
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                             $('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/
