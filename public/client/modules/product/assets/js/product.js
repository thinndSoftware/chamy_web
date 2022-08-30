$(document).ready(function () {
    // /* áº¢nh sáº£n pháº©m*/
    // $('.product-thumbs ul li').click(function () {
    //     $('.product-thumbs ul li').removeClass('selected');
    //     $(this).addClass('selected');
    //     $('#product-image').attr('src', $(this).children('img').attr('src').replace('/small/', '/large/'));
    //     initZoom();
    // });

    $('.c-btn_scrollImg').click(function () {
        var data_id = $(this).attr('data-id');
        $('html, body').animate({
            scrollTop: $('#img_' + data_id).offset().top - 75
        }, 500);
    })

    // /* Tabs */
    // $('#quantity').change(function () {
    //     var $obj = $('.bound-quantity a.add-cart');
    //     $id = $obj.attr('data-id');
    //     $quantity = $(this).val();
    //     $('.bound-quantity a.add-cart').attr('href', '/index.php?module=product&view=cart&task=addCart&id=' + $id + '&quantity=' + $quantity);
    // });

    // if($('#product-zoom').length)
    //     initZoom();

    $('ul.tabs li a.tabs-label').click(function () {
        $('ul.tabs li').removeClass('selected');
        $(this).parent().addClass('selected');
        $('.tabs-content').removeClass('selected');
        var $tab = $(this).attr('data-content');
        $('#' + $tab).addClass('selected');
    });

    $('#product-faqs .faq-heading a').click(function () {
        $(this).parent().parent().toggleClass('selected');
    });

    $('.button-add').click(function () {
        var $quantity = $('input[name="quantity"]').val();
        $quantity = parseInt($quantity) + 1;
        $('input[name="quantity"]').val($quantity);
        $('.quantity-text').html($quantity);
    });

    $('.button-sub').click(function () {
        var $quantity = $('input[name="quantity"]').val();
        if (parseInt($quantity) == 1)
            return;
        $quantity = parseInt($quantity) - 1;
        $('input[name="quantity"]').val($quantity);
        $('.quantity-text').html($quantity);
    });


    $('#increment').click(function () {
        $('#quantity').val(function (i, oldval) {
            if (oldval < 6)
                return parseInt(oldval, 10) + 1;
            else
                return parseInt(oldval, 10);
        });
    });
    $('#decrement').click(function () {
        var val = $('#quantity').val()
        if (val > 1) {
            $('#quantity').val(function (i, oldval) {
                return parseInt(oldval, 10) - 1;
            });
        }
    });

    // $(window).on('load',function () {
    var total_color = $('#total_color').val();
    // console.log(total_color);
    // setTimeout(function () {
    for (i = 0; i < total_color; i++) {
        if ($(window).width() > 1024) {
            // setTimeout(function () {
            $('#lightSlider' + i).lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                slideMargin: 0,
                enableDrag: true,
                thumbItem: 5,
                vertical: true,
                verticalHeight: 705,
                vThumbWidth: 90,
                currentPagerPosition: 'left',
                mode: 'fade',
                speed: 1500,

            });
            // },1)

        } else {
            // setTimeout(function () {
            $('#lightSlider' + i).lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                slideMargin: 0,
                enableDrag: true,
                verticalHeight: 600,
                thumbItem: 4,
                currentPagerPosition: 'left',
                // mode: 'fade',
                speed: 1500,
            });
            // },2)
        }
    }
    // },0)
    // })

    $(".c-box_all--images .lSPrev").prepend("<i class='fa fa-angle-left'/>  ");
    $(".c-box_all--images .lSNext").prepend("<i class='fa fa-angle-right'/>  ");

    if ($('.c-box_all--images').hasClass('c-has_video')) {
        $('.lSGallery').addClass('c-has_video');
        // $('.lSGallery li:last-child').addClass('bbbbbbb')
        // $('<i class="fa fa-play"></i>').insertAfter($('.lSGallery').children(':last'));

    }

    $('.lSSlideOuter').fadeOut();
    $('#lightSlider0').parent().parent().fadeIn();

    jQuery("#extend_colorProduct .c-item_color").click(function (e) {
        var id_color = $(this).attr('d-color');
        var name_color = $(this).attr('d-name');
        var data_show = $(this).attr('data-show');
        $('#extend_colorProduct .c-item_color').removeClass('active');
        $(this).addClass('active');
        $('.c-show_color--name span').html(name_color);

        $('.lSSlideOuter').fadeOut(200);
        $('#' + data_show).parent().parent().fadeIn(800);

        $('.c-item_choose--size').hide();
        $('#c-show_size--name span').html('');
        $('#extend_size').val('');
        $('.c-item_choose' + id_color).css("display", "flex");


        $('html, body').animate({
            scrollTop: $('.c-box_all--images').offset().top - 100
        }, 1000);

        // e.stopPropagation();
        // var swatch_id = $(this).attr('data-watch');
        // var index = jQuery("#product-image-gallery").find("." + swatch_id).attr('data-slick-index');
        //
        // jQuery('#product-image-gallery').slick('slickGoTo', index);

    });


    var swiperRelate = new Swiper('.c-swipper-relate', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            // dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


    $('#product-related .sp-item .checked').click(function () {
        var $checked = $(this).attr('data-checked');
        if ($checked == 1) {
            $(this).addClass('unchecked');
            $(this).attr('data-checked', 0);
        } else {
            $(this).removeClass('unchecked');
            $(this).attr('data-checked', 1);
        }

        var $ids = '0';
        $('#product-related .sp-item .checked').each(function () {
            var $checked = $(this).attr('data-checked');
            var $id = $(this).attr('data-id');
            if ($checked == 1)
                $ids += ',' + $id;
        });
        $('#product-related .btn-related').attr('data-id', $ids);
    })


    // stick_scroll();
    // scroll_tab();


    var alert_info1 = $('#alert_info').val();
    arr_alertInfo = alert_info1 ? JSON.parse(alert_info1) : [];


});

function scroll_tab() {
    // var offser = $('.col_aside').offset();

    var height_thumb_img = $('.c-list--thumb_image')[0].scrollHeight;
    var height_ctn = $('#body_fix_add_cart')[0].scrollHeight;
    $(window).scroll(function () {
        var offser_of_partner = $('.list-product-same').offset();
        var offser_box_image = $('.c-box_all--images').offset();
        var mbox_add_cart = $('.c-mbox--add_cart').offset();
        var height_mbox_add_cart = $('.c-mbox--add_cart')[0].scrollHeight;
        var scrolltop = $(window).scrollTop();

        // console.log(offser_of_partner.top);
        console.log(window.innerHeight);
        console.log(scrolltop);
        console.log(offser_box_image.top);

        // if (scrolltop >= (height_thumb_img - 66) && (offser_of_partner.top - (height_thumb_img - 10)) >= scrolltop) {
        if (scrolltop >= (offser_box_image.top - 70)) {
            if (scrolltop < (offser_of_partner.top - (height_thumb_img + 70))) {
                $('.c-list--thumb_image').attr("style", "position:fixed; top: 100px;");
            } else {
                $('.c-list--thumb_image').attr("style", "position:absolute; bottom: 0; top: unset;");

            }
        } else {
            $('.c-list--thumb_image').attr("style", "position:relative; top: auto;");
        }
        if ($(window).width() > 1024) {
            if (scrolltop >= (offser_box_image.top - 70)) {
                if (scrolltop < (offser_of_partner.top - (height_ctn + 70))) {
                    $('#body_fix_add_cart').attr("style", "position:fixed; top: 100px;");
                    $('#body_fix_add_cart').addClass("fixing");
                } else {
                    $('#body_fix_add_cart').attr("style", "position:absolute; bottom: 0; top: unset;");
                    $('#body_fix_add_cart').addClass("fixing");
                }
            } else {
                $('#body_fix_add_cart').attr("style", "position:relative; top: auto;");
                $('#body_fix_add_cart').removeClass("fixing");
            }
        }

        if ($(window).width() < 768) {
            $('.c-mbox--add_cart').attr("style", "height:" + ($('.c-m--add_cart')[0].scrollHeight + 50) + 'px;');
            if (scrolltop <= (offser_of_partner.top - window.innerHeight)) {
                $('.c-m--add_cart').attr("style", "position:fixed; margin: 0px");
            } else {
                $('.c-m--add_cart').attr("style", "position:absolute; ");
            }
        }

    });
}


var stick_scroll = function () {
    var win = $(window);
    stick_act();
    win.resize(function (e) {
        stick_act();
    });

    function stick() {
        // $('.c-list--thumb_image').stick_in_parent({
        //     offset_top: 60,
        // });
    }

    function stick_ctn() {
        // $('.c-list--thumb_image').stick_in_parent({
        //     offset_top: 60,
        // });
    }

    function un_stick() {
        $('.c-list--thumb_image').trigger("sticky_kit:detach");
    }

    function un_stick_ctn() {
        // $('#body_fix_add_cart').trigger("sticky_kit:detach");
    }

    function stick_act() {
        (win.width() < 1025) ? un_stick() : stick();
        (win.width() < 1025) ? un_stick_ctn() : stick_ctn();
    }
}

// function initZoom() {
//     var $src = $('#product-zoom img').attr('src').replace('/medium/', '/original/');
//     $('#product-zoom').zoom({url: $src});
// }


function validateComment() {
    if ($('#txtCom').val() == '') {
        Boxy.alert('Báº¡n vui lĂ²ng nháº­p bĂ¬nh luáº­n.', function () {
            $('#txtCom').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    if ($('#txtName').val() == '') {
        Boxy.alert('Báº¡n vui lĂ²ng nháº­p tĂªn.', function () {
            $('#txtName').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    if (!isEmail($('#txtMail').val())) {
        Boxy.alert('HĂ£y nháº­p Ä‘á»‹a chá»‰ Email.', function () {
            $('#txtMail').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    if ($('#txtCode').val() == '') {
        Boxy.alert('Báº¡n vui lĂ²ng nháº­p mĂ£ báº£o máº­t.', function () {
            $('#txtCode').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    var $data = $('form#frmComment').serialize();
    $('#waitting').addClass('show');
    $.ajax({
        type: 'POST',
        url: '/index.php?module=ajax&view=ajax&task=commentProduct',
        dataType: 'json',
        data: $data,
        success: function (data) {
            Boxy.alert(data.message, function () {
                $('#waitting').removeClass('show');
                if (data.error == false) {
                    location.reload(true)
                }
            }, {
                title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                    $('#boxy_button_OK').focus();
                }
            });
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Boxy.alert('CĂ³ lá»—i trong quĂ¡ trĂ¬nh Ä‘Æ°a lĂªn mĂ¡y chá»§. Xin báº¡n vui lĂ²ng kiá»ƒm tra láº¡i káº¿t ná»‘i.', function () {
                $('div#waitting').css('display', 'none');
            }, {
                title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                    $('#boxy_button_OK').focus();
                }
            });
        }
    });
    return false;
}

function quickBuy($id) {
    tb_show('Mua nhanh', '/index.php?module=product&view=product&raw=1&width=510&task=quickBuy&id=' + $id);
    return false;
}

function validquickBuy() {
    if ($('#qname').val() == '') {
        Boxy.alert('Báº¡n vui lĂ²ng nháº­p tĂªn.', function () {
            $('#qname').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    if ($('#qmobile').val() == '') {
        Boxy.alert('Báº¡n vui lĂ²ng nháº­p sá»‘ Ä‘iá»‡n thoáº¡i.', function () {
            $('#qmobile').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    if ($('#qaddress').val() == '') {
        Boxy.alert('Báº¡n vui lĂ²ng nháº­p Ä‘á»‹a chá»‰.', function () {
            $('#qaddress').focus();
        }, {
            title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                $('#boxy_button_OK').focus();
            }
        });
        return false;
    }
    var $data = $('form#frm_quick_buy').serialize();
    $('#waitting').show();
    $.ajax({
        type: 'POST',
        url: '/index.php?module=ajax&view=ajax&task=frm_quick_buy&raw=1',
        dataType: 'json',
        data: $data,
        success: function (data) {
            Boxy.alert(data.message, function () {
                $('#waitting').hide();
                if (data.error == false) {
                    location.reload(true)
                }
            }, {
                title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                    $('#boxy_button_OK').focus();
                }
            });
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            Boxy.alert('CĂ³ lá»—i trong quĂ¡ trĂ¬nh Ä‘Æ°a lĂªn mĂ¡y chá»§. Xin báº¡n vui lĂ²ng kiá»ƒm tra láº¡i káº¿t ná»‘i.', function () {
                $('div#waitting').css('display', 'none');
            }, {
                title: 'ThĂ´ng bĂ¡o.', afterShow: function () {
                    $('#boxy_button_OK').focus();
                }
            });
        }
    });
    return false
}

$('.related_products_detail').click(function () {
    var $price = parseInt($('#product_price').val());

    var checkedVals = $('.related_products_detail:checkbox:checked').map(function () {
        return this.value;
    }).get();

    $ids = checkedVals.join(",");

    $('#product_related').val($ids);

    var $arrIds = $ids.split(',');
    $(".related_products").prop('checked', false);
    if ($ids != '')
        $.each($arrIds, function (key, value) {
            $(".related_" + value).prop('checked', true);
            $price = $price + parseInt($('#product_price_' + value).val());
        });

    $('span.price-all').html($.number($price, 0, ',', '.') + ' Ä‘');

    var $obj = $('#add-cart-detail');
    $id = $obj.attr('data-id');
    $related = $('#product_related').val();
    $('a.add-cart').attr('href', '/dat-mua-' + $id + '?related=' + $related)
});

$('.related_products_quick').click(function () {
    var $price = parseInt($('#product_price').val());

    var checkedVals = $('.related_products_quick:checkbox:checked').map(function () {
        return this.value;
    }).get();

    $ids = checkedVals.join(",");

    $('#product_related').val($ids);

    var $arrIds = $ids.split(',');
    $(".related_products").prop('checked', false);
    if ($ids != '')
        $.each($arrIds, function (key, value) {
            $(".related_" + value).prop('checked', true);
            $price = $price + parseInt($('#product_price_' + value).val());
        });

    $('span.price-all').html($.number($price, 0, ',', '.') + ' Ä‘');

    var $obj = $('#add-cart-detail');
    $id = $obj.attr('data-id');
    $related = $('#product_related').val();
    $('a.add-cart').attr('href', '/dat-mua-' + $id + '?related=' + $related)
});

$('.c-btn_sub--size').click(function (event) {

    $('label.label_error').prev().remove();
    $('.label_error').remove();

    var height = $('#info_height').val(), weight = $('#info_weight').val();

    if (!notEmpty("info_height", arr_alertInfo[4])) {
        return false;
    }
    if (!isPhone("info_height", arr_alertInfo[6])) {
        return false;
    }
    if (!notEmpty("info_weight", arr_alertInfo[5])) {
        return false;
    }
    if (!isPhone("info_weight", arr_alertInfo[6])) {
        return false;
    }

    var data_id = $(this).attr('data-id');
    var url_root = $('#url_root').val();
    $.ajax({
        type: 'POST',
        url: 'index.php?module=product&view=product&task=find_size&raw=1',
        dataType: 'json',
        data: 'd-height=' + height + '&d-weight=' + weight + '&d-id=' + data_id,
        success: function ($json) {
            if ($json.error == true) {
                //     alert($json.msg);
            } else {
                $('.c-col_find--size .c-box_form').hide('hide');
                if ($json.data_rs == false) {
                    $('.c-message_data,.c-call_chat').show();
                    $('.c-message_data').html($json.msg);
                    $('.c-col_find--size .c-info_size').hide('hide');
                    $('.c-col_find--size .c-btn_choose--size').hide('hide');

                } else {
                    $('.c-name_size, .c-size').html($json.data_rs['name']);
                    $('.c-box_resuft--size .c-info_size').show();
                    if ($json.sold_out == 2) {
                        var txt = '';
                        $('.c-message_data').hide('');
                        $('.c-box_resuft--size .c-sum').hide();
                        $('.c-btn_choose--size').hide();
                        $('.c-box_resuft--size .c--sold-out').show();
                        $('.c-call_chat').show();
                    } else {
                        $('.c-message_data').hide();
                        $('.c-call_chat').hide();
                        $('.c-box_resuft--size .c-sum').show();
                        $('.c-box_resuft--size .c--sold-out').hide();
                        $('.c-btn_choose--size').html('ThĂªm size ' + $json.data_rs['name']);
                        $('.c-btn_choose--size').attr('size-id', $json.data_rs['id']);
                        $('.c-info_size,.c-btn_choose--size').show();
                    }

                }

                $('.c-box_resuft--size').show('slow');

            }
        }
    });
});


$('.c-btn_reset--size').click(function (event) {
    $('.c-col_find--size .c-box_form').show('slow');
    $('.c-box_resuft--size').hide('slow');

})

$('.c-btn_choose--size').click(function (event) {
    var size_id = $(this).attr('size-id');
    $('#extend_size').val(size_id);
    $('.c-name_size--choose ').removeClass('active');
    $('.c-size_' + size_id).addClass('active');
    $('#modalFindSize').modal('hide');

})

$('.add-cart').click(function (event) {
    $('label.label_error').prev().remove();
    $('.label_error').remove();

    var noti_addCart = $('#alert_addcart').val();
    var $id = $(this).attr('data-id');
    var $quantity = 1;
    var $quantity = $('#quantity').val();
    $quantity = parseInt($quantity);

    var color = $('input[type="radio"]:checked').val();
    var $size = $('#extend_size').val();
    var max_quan = $('.c-size_' + $size + color).attr('dt-mx');
    max_quan = parseInt(max_quan);

    if (color == 0 || color == '' || color == undefined) {

        $("#extend_colorProduct").parent().find('.label_error').remove();
        $("#extend_colorProduct").parent().find('.label_success').remove();
        $('<div class=\'label_error\'>' + arr_alertInfo[7] + '</div>').insertAfter($('#extend_colorProduct').children(':last'));
        $("#extend_colorProduct").addClass("redborder");

        return false;
    }

    if ($size == 0 || $size == '' || $size == undefined) {
        $(".input_size").parent().find('.label_error').remove();
        $(".input_size").parent().find('.label_success').remove();
        $('<div class=\'label_error\' style="margin-top: -15px;">' + arr_alertInfo[8] + '</div>').insertAfter($('.input_size').next());
        $(".input_size").addClass("redborder");

        return false;
    }

    if (max_quan < $quantity) {
        $(".input_size").parent().find('.label_error').remove();
        $(".input_size").parent().find('.label_success').remove();
        $('<div class=\'label_error\' style="margin-top: -15px;">' + arr_alertInfo[10] + '</div>').insertAfter($('.input_size').next());
        $(".input_size").addClass("redborder");

        return false;
    }

    if ($quantity <= 0) {
        alert('Báº¡n vui lĂ²ng chon sá»‘ lÆ°á»£ng > 0');
        return false;
    }

    var url_root = $('#url_root').val();
    $.ajax({
        type: 'POST',
        url: 'index.php?module=product&view=product&task=add_cart&raw=1',
        dataType: 'json',
        data: 'id=' + $id + '&quantity=' + $quantity + '&color=' + color + '&size=' + $size,
        success: function ($json) {
            if ($json.error == true) {
                //     alert($json.msg);
            } else {
                text = '<span><strong></strong> ' + noti_addCart + ' </span>'
                // $('.c-btn_cart .c-alert_addCart span').remove();
                // $('.c-btn_cart .c-alert_addCart').removeClass('hide');
                // $('.c-btn_cart .c-alert_addCart').prepend(text);
                $('.c-btn_cart .c-amount_cart').html('(' + $json.total + ')');
                // $('.c-box_viewCart .c-note_empty').html(text);
                $('.c-box_viewCart .c-box_shopping--cart').html($json.html);

                $(".c-modal_overlay").toggle();
                $(".menu_header .c-box_viewCart").toggle(400);
                $(".c-box_search .search-box").hide('slow');

                // setTimeout(function () {
                //     $('.c-btn_cart .c-alert_addCart').addClass('hide');
                //     // location.reload();
                //     //  // $('.c-btn_cart .c-alert_addCart span').remove();
                // }, 2500)
                // fbq('track', 'AddToCart');
                // showQuickCart();
            }
        }
    });
});

function fsAlert($option) {
    $option = $option || {};
    var box = $("<div></div>");
    box.html($option.msg).dialog({
        modal: true,
        title: 'ThĂ´ng bĂ¡o',
        buttons: {
            Ok: function () {
                $.isFunction($option.func) && ($option.func)();
                $(this).dialog('destroy').remove();
            }
        }
    }).dialog('open');
    return false;
}


$('.empty-product').click(function () {
    alert('Sáº£n pháº©m táº¡m thá»i háº¿t hĂ ng.');
});


$('.payment-method > a').click(function () {
    $('.payment-method').removeClass('selected');
    $(this).parent().addClass('selected');
    $('#payment_method').val($(this).attr('data-id'));
});

$('a.btn-related').click(function () {
    var $IDs = $(this).attr('data-id');
    var $comboID = $(this).attr('data-combo');
    if ($IDs == '0' || $IDs == '') {
        fsAlert('Báº¡n vui lĂ²ng chon sáº£n pháº©m!');
        return false;
    }
    $(this).addClass('disabled');
    $.ajax({
        type: 'POST',
        sync: false,
        dataType: 'json',
        url: '/index.php?module=product&view=product&task=add_cart_multi&raw=1',
        data: 'ids=' + $IDs + '&cid=' + $comboID,
        success: function ($json) {
            if ($json.error == false)
                location.href = $json.url;
        },
        error: function () {
            $(this).removeClass('disabled');
        }
    });
    return false;
});

function showQuickCart() {
    $.ajax({
        type: 'POST',
        url: '/index.php?module=product&view=product&task=quick_cart&raw=1',
        dataType: 'html',
        success: function ($json) {
            $('#fs-modal .modal-body').html($json);
            $('#fs-modal').modal({show: true});
        }
    });
}

$('#sender_city').change(function () {
    setSelectDistricts($('#sender_district'), $(this).val(), 0);
});

$('#recipients_city').change(function () {
    setSelectDistricts($('#recipients_district'), $(this).val(), 0);
});

function validateUpdateCart() {
    $('input.quantity-value').each(function () {
        if (Number.isInteger($(this).val()) || $(this).val() <= 0) {
            alert('Sá»‘ lÆ°á»£ng pháº£i lĂ  sá»‘ vĂ  lá»›n hÆ¡n 0.');
            $(this).focus();
            return false;
        }
    });
    var data = $('#frmUpdateCart').serialize();

    $.ajax({
        type: 'POST',
        url: 'index.php?module=product&view=product&raw=1&task=updateCart',
        dataType: 'JSON',
        data: data,
        success: function (data) {
            // alert("success");
            window.location.reload(true);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    return false;
}

function validatePayment() {
    $count = 0;
    if ($('#username').val() == '') {
        alert('HĂ£y nháº­p há» vĂ  tĂªn cá»§a báº¡n.');
        $('#username').focus();
        return false;
    }
    if ($('#recipients_email').val() == '') {
        alert('Nháº­p email cá»§a báº¡n.');
        $('#recipients_email').focus();
        return false;
    }
    if ($('#recipients_address').val() == '') {
        alert('Nháº­p Ä‘á»‹a chá»‰ cá»§a báº¡n.');
        $('#recipients_address').focus();
        return false;
    }
    if ($('#recipients_telephone').val() == '') {
        alert('Nháº­p sá»‘ Ä‘iá»‡n thoáº¡i cá»§a báº¡n.');
        $('#recipients_telephone').focus();
        return false;
    }
    var filterEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!$('#recipients_email').val().match(filterEmail)) {

        alert('Email chÆ°a Ä‘Ăºng Ä‘á»‹nh dáº¡ng');

        $('#recipients_email').focus();

        return false;
    }
    if (!$('#recipients_telephone').val().match(phoneno)) {

        alert('Sá»‘ Ä‘iá»‡n thoáº¡i chÆ°a Ä‘Ăºng Ä‘á»‹nh dáº¡ng');

        $('#recipients_telephone').focus();

        return false;
    }


    // if($('#payment_method').val() == 1) {
    //     if ($('#payment_bank').val() == '') {
    //         fsAlert('Báº¡n vui chá»n ngĂ¢n hĂ ng Ä‘á»ƒ chuyĂªn khoáº£n.');
    //         $('#payment_bank').focus();
    //         return false;
    //     }
    // }else{
    //     $('#payment_bank').val('');
    // }
    var payment_method = $("input[name='payment_method']:checked").val();
    $count++;
    if ($count == 1) {
        $('.click_one').addClass('disable_click');
        if (payment_method == 1) {
            $total_order = $('#fb_total_order').val();
            if ($total_order) {
                $total = $total_order;
            } else {
                $total = 0;
            }

            // fbq('track', 'Purchase', {value: $total, currency: 'VND'});

            document.forms['frmPayment'].submit();
        }
    }


}

$('#txtPayLive').click(function () {

    if ($('#username').val() == '') {
        alert('HĂ£y nháº­p há» vĂ  tĂªn cá»§a báº¡n.');
        $('#username').focus();
        return false;
    }
    if ($('#recipients_email').val() == '') {
        alert('Nháº­p email cá»§a báº¡n.');
        $('#recipients_email').focus();
        return false;
    }
    if ($('#recipients_address').val() == '') {
        alert('Nháº­p Ä‘á»‹a chá»‰ cá»§a báº¡n.');
        $('#recipients_address').focus();
        return false;
    }
    if ($('#recipients_telephone').val() == '') {
        alert('Nháº­p sá»‘ Ä‘iá»‡n thoáº¡i cá»§a báº¡n.');
        $('#recipients_telephone').focus();
        return false;
    }

    var filterEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!$('#recipients_email').val().match(filterEmail)) {
        alert('Email chÆ°a Ä‘Ăºng Ä‘á»‹nh dáº¡ng');
        $('#recipients_email').focus();
        return false;
    }
    if (!$('#recipients_telephone').val().match(phoneno)) {
        alert('Sá»‘ Ä‘iá»‡n thoáº¡i khĂ´ng Ä‘Ăºng Ä‘á»‹nh dáº¡ng');
        $('#recipients_telephone').focus();
        return false;
    }

    $('.showATM_online').css('display', 'block');
    $('#submit-bt3').css('display', 'none');
    var username = $('#username').val();
    var recipients_email = $('#recipients_email').val();
    var recipients_address = $('#recipients_address').val();
    var recipients_telephone = $('#recipients_telephone').val();
    var sender_comments = $('#sender_comments').val();
    var payment_method = 0;
    var sender_sex = $("input[name='sender_sex']:checked").val();
    // document.forms['frmPayment'].submit();
    $.ajax({
        type: 'POST',
        url: 'index.php?module=product&view=cart&task=paymentSave2&raw=1',
        dataType: 'json',
        data: 'username=' + username + '&recipients_email=' + recipients_email + '&recipients_address=' + recipients_address + '&recipients_telephone=' + recipients_telephone + '&sender_comments=' + sender_comments + '&payment_method=' + payment_method + '&sender_sex=' + sender_sex,
        success: function ($json) {
            document.getElementById("order_id").setAttribute('value', $json);
        }
    });
});
$('#txtPayOff').click(function () {
    $('.showATM_online').css('display', 'none');
    $('#submit-bt3').css('display', 'inline-block');
});

$('.nav-tabs.nav-bank li a').click(function () {
    $('input[name="payment_bank"]').val($(this).attr('data-value'));
});

function validApplyDiscount() {
    if (!isEmpty('discount_code')) {
        fsAlert('HĂ£y nháº­p mĂ£ giáº£m giĂ¡ cá»§a báº¡n.');
        $('#discount_code').focus();
        return false;
    }
    $.ajax({
        type: 'POST',
        url: '/index.php?module=ajax&view=ajax&raw=1&task=applyDiscount',
        dataType: 'json',
        data: {discount_code: $('#discount_code').val(), cart_total: $('#cart_total').val()},
        success: function (data) {
            if (data.error == true) {
                fsAlert(data.message);
                $('#discount_code').focus();
            } else {
                fsAlert(data.message);
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            fsAlert('CĂ³ lá»—i trong quĂ¡ trĂ¬nh Ä‘Æ°a lĂªn mĂ¡y chá»§. Xin báº¡n vui lĂ²ng kiá»ƒm tra láº¡i káº¿t ná»‘i.');
        }
    });
    return false;
}


// function run() {
//     document.getElementById("extend_size").value = document.getElementById("size-extends").value;
//     document.getElementById("extend_style").value = document.getElementById("style-extends").value;
// }
// var heightImg = document.getElementById('default-color').offsetHeight;
// var offsetHeight = $('#body_fix_add_cart').outerHeight(); // chiá»u cao chi tiáº¿t sp
// var heiLeft = $('#col-img').outerHeight(); // chiá»u cao áº£nh sp
// // alert(offsetHeight);
//
//
// /*Scroll to top when arrow up clicked BEGIN*/
// if(screen.width>=768){
//     $(window).bind('scroll', function () {
//         var heightTop = $(window).scrollTop();
//         // alert(heightTop);
//         // if(heightTop <=heiLeft){
//         //
//         // }
//         if(heightTop>80 && heightTop>offsetHeight && heightTop <=heiLeft-600){
//             $('#body_fix_add_cart').addClass('body_fix_add_cart');
//         }
//         if(heightTop>heiLeft-600 || heightTop <80){
//             $('#body_fix_add_cart').removeClass('body_fix_add_cart');
//         }
//     });
// }


;(function ($) {
    $(function () {
        $('.btn-click-1').bind('click', function (e) {
            e.preventDefault();
            $('#exampleModalCenter').bPopup();
        });
        $('.btn-click-2').bind('click', function (e) {
            e.preventDefault();
            $('#exampleModal').bPopup();
        });
    });
})(jQuery);

/*================================================================================
 * @name: bPopup - if you can't get it up, use bPopup
 * @author: (c)Bjoern Klinggaard (twitter@bklinggaard)
 * @demo: http://dinbror.dk/bpopup
 * @version: 0.9.4.min
 ================================================================================*/
(function (b) {
    b.fn.bPopup = function (z, F) {
        function K() {
            a.contentContainer = b(a.contentContainer || c);
            switch (a.content) {
                case "iframe":
                    var h = b('<iframe class="b-iframe" ' + a.iframeAttr + "></iframe>");
                    h.appendTo(a.contentContainer);
                    r = c.outerHeight(!0);
                    s = c.outerWidth(!0);
                    A();
                    h.attr("src", a.loadUrl);
                    k(a.loadCallback);
                    break;
                case "image":
                    A();
                    b("<img />").load(function () {
                        k(a.loadCallback);
                        G(b(this))
                    }).attr("src", a.loadUrl).hide().appendTo(a.contentContainer);
                    break;
                default:
                    A(), b('<div class="b-ajax-wrapper"></div>').load(a.loadUrl, a.loadData, function () {
                        k(a.loadCallback);
                        G(b(this))
                    }).hide().appendTo(a.contentContainer)
            }
        }

        function A() {
            a.modal && b('<div class="b-modal ' + e + '"></div>').css({
                backgroundColor: a.modalColor,
                position: "fixed",
                top: 0,
                right: 0,
                bottom: 0,
                left: 0,
                opacity: 0,
                zIndex: a.zIndex + t
            }).appendTo(a.appendTo).fadeTo(a.speed, a.opacity);
            D();
            c.data("bPopup", a).data("id", e).css({
                left: "slideIn" == a.transition || "slideBack" == a.transition ? "slideBack" == a.transition ? g.scrollLeft() + u : -1 * (v + s) : l(!(!a.follow[0] && m || f)),
                position: a.positionStyle || "absolute",
                top: "slideDown" == a.transition || "slideUp" == a.transition ? "slideUp" == a.transition ? g.scrollTop() + w : x + -1 * r : n(!(!a.follow[1] && p || f)),
                "z-index": a.zIndex + t + 1
            }).each(function () {
                a.appending && b(this).appendTo(a.appendTo)
            });
            H(!0)
        }

        function q() {
            a.modal && b(".b-modal." + c.data("id")).fadeTo(a.speed, 0, function () {
                b(this).remove()
            });
            a.scrollBar || b("html").css("overflow", "auto");
            b(".b-modal." + e).unbind("click");
            g.unbind("keydown." + e);
            d.unbind("." + e).data("bPopup", 0 < d.data("bPopup") - 1 ? d.data("bPopup") - 1 : null);
            c.undelegate(".bClose, ." + a.closeClass, "click." + e, q).data("bPopup", null);
            H();
            return !1
        }

        function G(h) {
            var b = h.width(), e = h.height(), d = {};
            a.contentContainer.css({height: e, width: b});
            e >= c.height() && (d.height = c.height());
            b >= c.width() && (d.width = c.width());
            r = c.outerHeight(!0);
            s = c.outerWidth(!0);
            D();
            a.contentContainer.css({height: "auto", width: "auto"});
            d.left = l(!(!a.follow[0] && m || f));
            d.top = n(!(!a.follow[1] && p || f));
            c.animate(d, 250, function () {
                h.show();
                B = E()
            })
        }

        function L() {
            d.data("bPopup", t);
            c.delegate(".bClose, ." + a.closeClass, "click." + e, q);
            a.modalClose && b(".b-modal." + e).css("cursor", "pointer").bind("click", q);
            M || !a.follow[0] && !a.follow[1] || d.bind("scroll." + e, function () {
                B && c.dequeue().animate({
                    left: a.follow[0] ? l(!f) : "auto",
                    top: a.follow[1] ? n(!f) : "auto"
                }, a.followSpeed, a.followEasing)
            }).bind("resize." + e, function () {
                w = y.innerHeight || d.height();
                u = y.innerWidth || d.width();
                if (B = E()) clearTimeout(I), I = setTimeout(function () {
                    D();
                    c.dequeue().each(function () {
                        f ? b(this).css({left: v, top: x}) : b(this).animate({
                            left: a.follow[0] ? l(!0) : "auto",
                            top: a.follow[1] ? n(!0) : "auto"
                        }, a.followSpeed, a.followEasing)
                    })
                }, 50)
            });
            a.escClose && g.bind("keydown." + e, function (a) {
                27 == a.which && q()
            })
        }

        function H(b) {
            function d(e) {
                c.css({display: "block", opacity: 1}).animate(e, a.speed, a.easing, function () {
                    J(b)
                })
            }

            switch (b ? a.transition : a.transitionClose || a.transition) {
                case "slideIn":
                    d({left: b ? l(!(!a.follow[0] && m || f)) : g.scrollLeft() - (s || c.outerWidth(!0)) - C});
                    break;
                case "slideBack":
                    d({left: b ? l(!(!a.follow[0] && m || f)) : g.scrollLeft() + u + C});
                    break;
                case "slideDown":
                    d({top: b ? n(!(!a.follow[1] && p || f)) : g.scrollTop() - (r || c.outerHeight(!0)) - C});
                    break;
                case "slideUp":
                    d({top: b ? n(!(!a.follow[1] && p || f)) : g.scrollTop() + w + C});
                    break;
                default:
                    c.stop().fadeTo(a.speed, b ? 1 : 0, function () {
                        J(b)
                    })
            }
        }

        function J(b) {
            b ? (L(), k(F), a.autoClose && setTimeout(q, a.autoClose)) : (c.hide(), k(a.onClose), a.loadUrl && (a.contentContainer.empty(), c.css({
                height: "auto",
                width: "auto"
            })))
        }

        function l(a) {
            return a ? v + g.scrollLeft() : v
        }

        function n(a) {
            return a ? x + g.scrollTop() : x
        }

        function k(a) {
            b.isFunction(a) && a.call(c)
        }

        function D() {
            x = p ? a.position[1] : Math.max(0, (w - c.outerHeight(!0)) / 2 - a.amsl);
            v = m ? a.position[0] : (u - c.outerWidth(!0)) / 2;
            B = E()
        }

        function E() {
            return w > c.outerHeight(!0) && u > c.outerWidth(!0)
        }

        b.isFunction(z) && (F = z, z = null);
        var a = b.extend({}, b.fn.bPopup.defaults, z);
        a.scrollBar || b("html").css("overflow", "hidden");
        var c = this, g = b(document), y = window, d = b(y), w = y.innerHeight || d.height(),
            u = y.innerWidth || d.width(), M = /OS 6(_\d)+/i.test(navigator.userAgent), C = 200, t = 0, e, B, p, m, f,
            x, v, r, s, I;
        c.close = function () {
            a = this.data("bPopup");
            e = "__b-popup" + d.data("bPopup") + "__";
            q()
        };
        return c.each(function () {
            b(this).data("bPopup") || (k(a.onOpen), t = (d.data("bPopup") || 0) + 1, e = "__b-popup" + t + "__", p = "auto" !== a.position[1], m = "auto" !== a.position[0], f = "fixed" === a.positionStyle, r = c.outerHeight(!0), s = c.outerWidth(!0), a.loadUrl ? K() : A())
        })
    };
    b.fn.bPopup.defaults = {
        amsl: 50,
        appending: !0,
        appendTo: "body",
        autoClose: !1,
        closeClass: "b-close",
        content: "ajax",
        contentContainer: !1,
        easing: "swing",
        escClose: !0,
        follow: [!0, !0],
        followEasing: "swing",
        followSpeed: 500,
        iframeAttr: 'scrolling="no" frameborder="0"',
        loadCallback: !1,
        loadData: !1,
        loadUrl: !1,
        modal: !0,
        modalClose: !0,
        modalColor: "#000",
        onClose: !1,
        onOpen: !1,
        opacity: 0.7,
        position: ["auto", "auto"],
        positionStyle: "absolute",
        scrollBar: !0,
        speed: 250,
        transition: "fadeIn",
        transitionClose: !1,
        zIndex: 9997
    }
})(jQuery);

function run() {
    document.getElementById("extend_size").value = document.getElementById("size-extends").value;
    document.getElementById("extend_style").value = document.getElementById("style-extends").value;
}


$(document).on('click', '.quantity-selector .entry', function () {
    var _qty = parseInt($('.quantity-selector .number').val());
    if ($(this).hasClass('sub')) {
        if (_qty > 1) {
            $('.quantity-selector .number').val(--_qty);
        }
    } else {
        $('.quantity-selector .number').val(++_qty);
    }
});


$(document).ready(function () {
    $('.choose-style').click(function () {
        var id_style = $(this).attr('data-id');
        $('#extend_style').val(id_style);
        $('.choose-style').removeClass('active');
        $(this).addClass('active');
    });

    $('.choose-size').click(function () {
        var id_size = $(this).attr('data-id');
        $('#extend_size').val(id_size);
        $('.choose-size').removeClass('active');
        $(this).addClass('active');
    });

    $('.c-item_choose--size .c-name_size--choose').click(function () {
        var id_size = $(this).attr('data-v');
        var name_size = $(this).attr('data-name');
        var sold_out = $(this).attr('data-stock');

        if (sold_out == 1) {
            $('#extend_size').val(id_size);
            $('#c-show_size--name span').html(name_size);
            $('.c-item_choose--size .c-name_size--choose').removeClass('active');
            $(this).addClass('active');
        } else {
            // $(this).addClass('active');
        }
        var id_color = $('.c-item_color.active').attr('d-color');
        var id_pro = $('.add-cart').attr('data-id');
        var cms_price = $('#price-no-discount').attr('data-price');
        $.ajax( {
            type: 'POST',
            dataType : 'JSON',
            url: '/index.php?module=product&view=product&raw=1&task=get_size_price',
            data: {id_size: id_size, id_color: id_color,id_pro: id_pro,cms_price: cms_price},
            success: function (data) {
                if( parseInt(data.size_price) < parseInt(cms_price)){
                    $('#price-no-discount').html(data.pr);
                } else {
                    $('#price-no-discount').html(data.cms_price);
                }
            }
        })
    });

    del_cart();
});


function UpUpdateCart(id) {

    var val = parseInt($('#add_quantity_' + id).val());

    if (val <= 0) $('#add_quantity_' + id).val(val = 1);
    pro_id = id;
    up = 1;
    if (val < 6)
        quan = val + 1;
    else
        return false;
    $.ajax({
        type: 'POST',
        url: 'index.php?module=product&view=product&raw=1&task=updateCart',
        dataType: 'json',
        data: {pro_id: pro_id, quan: quan, up: up},
        success: function (data) {
            $('#checkadd_quantity_' + id).html(quan);
            $('#add_quantity_' + id).val(quan);
            window.location.reload(true);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('CĂ³ lá»—i trong quĂ¡ trĂ¬nh táº£i lĂªn mĂ¡y chá»§. Xin báº¡n vui lĂ²ng kiá»ƒm tra láº¡i káº¿t ná»‘i.');
        }
    });
    return false;
}

function DowUpdateCart(id) {
    var val = parseInt($('#add_quantity_' + id).val());
    // if (val < 0) $('#add_quantity_'+id).val(val = 1);
    // $('#add_quantity_'+id).val(val + 1);
    if (val > 1) {
        pro_id = id;
        up = 2;
        quan = val - 1;
        $.ajax({
            type: 'POST',
            url: 'index.php?module=product&view=product&raw=1&task=updateCart',
            dataType: 'json',
            data: {pro_id: pro_id, quan: quan, up: up},
            success: function (data) {
                $('#checkadd_quantity_' + id).html(quan);
                $('#add_quantity_' + id).val(quan);
                window.location.reload(true);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('CĂ³ lá»—i trong quĂ¡ trĂ¬nh táº£i lĂªn mĂ¡y chá»§. Xin báº¡n vui lĂ²ng kiá»ƒm tra láº¡i káº¿t ná»‘i.');
            }
        });
        return false;
    } else
        return false;
}


function del_cart() {

    $(".del-pro-link").click(function () {
        $a = $(this).attr("data-tr");
        $("." + $a).hide();

        var $id = $(this).attr("data-id");
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/index.php?module=product&view=product&task=edel&raw=1',
            data: "id=" + $id,
            success: function (data) {
                window.location.reload(true);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('CĂ³ lá»—i trong quĂ¡ trĂ¬nh táº£i lĂªn mĂ¡y chá»§. Xin báº¡n vui lĂ²ng kiá»ƒm tra láº¡i káº¿t ná»‘i.');
            }
        });
    });
}


function save_post(id) {
    // var alert_info = $('#alert_info').val();
    // alert_info = alert_info ? JSON.parse(alert_info) : [];


    var name_id1 = $('.c-btn_heart');

    $.ajax({
        url: "index.php?module=product&view=product&task=ajax_add_like&raw=1",
        data: {
            product_id: id
        },
        dataType: "text",
        success: function (result) {
            if (result == 1) {
                name_id1.removeClass('active');
                // var data_like = $('.c-amount_like').attr('data-like')
                // $('.c-amount_like').html('(' + (parseInt(data_like) - 1) + ')')
                // $('.c-amount_like').attr('data-like', parseInt(data_like) - 1)
                close(arr_alertInfo[3], 'success');
            } else if (result == 2) {
                name_id1.addClass('active');
                // var data_like = $('.c-amount_like').attr('data-like')
                // $('.c-amount_like').html('(' + (parseInt(data_like) + 1) + ')')
                // $('.c-amount_like').attr('data-like', parseInt(data_like) + 1)
                close(arr_alertInfo[2], 'success');
            } else if (result == 3) {
                close(arr_alertInfo[1], 'warning');
            } else {
                close(arr_alertInfo[0], 'warning');
                return false;
            }
        }
    });
}

function close__() {
    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function () {
                div.style.display = "none";
            }, 600);
        }
    }

    var x = document.getElementById("alert_")
    x.className = "alert";
    setTimeout(function () {
        x.className = x.className.replace("alert", "hide");
    }, 3000);
}