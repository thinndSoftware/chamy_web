var clicks = 0;

function hide_search() {
    clicks += 1;
    if (clicks % 2 == 1) {
        // $('#nav-right').css('display', 'none');
        // $('#nav-right').css('opacity', 'hide');
        // $('#nav-right').css('width', 'hide');
        // $('#mobile-info').css('display','non');
    } else {
        // $('#nav-right').css('display', 'block');
        $('#mobile-info').css('display', 'block');
    }
    // $('#nav-right').toggle();
    $('#nav-right').fadeToggle();
}

$(document).click(function () {
    $("#nav-right").hide();
});
$("#nav-right").click(function (e) {
    this.hide_search().click;
});
$('.c-box_mmenu .offcanvas-menu-toggler').click(function () {
    var element = $(this).parent().parent();
    if (element.hasClass('c-open')) {
        element.removeClass('c-open');
    } else {
        element.removeClass('c-open');
        element.addClass('c-open');
    }
})

$(document).ready(function () {
    $('.c-box_search .c-call_search').click(function () {
        $(".c-box_search .search-box").toggle(400);
        $(".c-box_funs .c-box_viewCart").hide('slow');
        return false;
    })

    $('.menu_header .c-btn_cart,.menu_header .c-close_cart,.c-modal_overlay').click(function () {
        $(".c-modal_overlay").toggle();
        $(".menu_header .c-box_viewCart").toggle(400);
        $(".c-box_search .search-box").hide('slow');
        return false;
    })

    $('#c-call_account,.c-btn_close--account,.c-mem_overlay,.c-btn_call--login').click(function () {
        $(".c-mem_overlay").toggle();
        $(".c-box_nonmember").toggle(300);
        $('.c-box_mmenu').hide();
        return false;
    })

    $('.c-box_mmenu .c-btn_close--menu,#call_menu').click(function () {
        $(".c-box_mmenu").toggle(400);
        $(".c-menu_mobile,.c-box_maccount").show();
        return false;
    })

    $('.c-call_msearch').click(function () {
        $(".c-box_mmenu").toggle(400);
        $(".c-menu_mobile,.c-box_maccount").hide();
        return false;
    })

    // $('.c-btn_sort').click(function () {
    //     $(".c-box_sort .dropdown-menu").toggle(400);
    //     return false;
    // });

    $('.c-btn_sort').click(function () {
        if($(".c-box_sort .dropdown-category").css('display') == 'block'){
            $(".c-box_sort .dropdown-category").toggle(400);
        }
        $(".c-box_sort .dropdown-sort").toggle(400);
        return false;
    });

    $('.c-btn_cate').click(function () {
        if($(".c-box_sort .dropdown-sort").css('display') == 'block'){
            $(".c-box_sort .dropdown-sort").toggle(400);
        }
        $(".c-box_sort .dropdown-category").toggle(400);
        return false;
    });

    $(document).on('click', '.dropdown-category', function (e) {
        e.stopPropagation();
    });

    $('.main-menu > .menu-item > a').click(function () {
        var element = $(this).parent();
        if (element.hasClass('c-open')) {
            element.removeClass('c-open');
            // $('.c-main_menu .light-menu').fadeOut(400);
        } else {
            $('.c-main_menu .dropdown.c-open').toggleClass('c-open');
            element.removeClass('c-open');
            element.addClass('c-open');
            // $(this).next().fadeIn(400);
        }
    })


    var info_alertNonMem = $('#info_alertNonMem').val();
    arr_alertNonMem = info_alertNonMem ? JSON.parse(info_alertNonMem) : [];

    // loadNav();
})



// check submit
$('#btnlogin').click(function() {
    if (checkFormsubmitLg()) {
        $('.preloader_regis').show();
        document.loginform.submit();
    }
});

$('#loginform').keydown(function (event) {
    if (event.which == 13) {
        if (checkFormsubmitLg()) {
            $('.preloader_regis').show();
            document.loginform.submit();
        }
    }
});


// check submit
$('#btnSignUp').click(function () {
    if (checkFormsubmitReg()) {
        $('.preloader_regis').show();
        document.formSignUp.submit();
    }
});

$('#formSignUp').keydown(function (e) {
    if (e.which == 13) {
        if (checkFormsubmitReg()) {
            $('.preloader_regis').show();
            document.formSignUp.submit();
            return false;
        }
    }
});


function checkFormsubmitLg() {
    $('label.label_error').prev().remove();
    $('label.label_error').remove();

    if (!notEmpty("log_email", arr_alertNonMem[9])) {
        return false;
    }
    // if (!emailValidator("log-email", arr_alertNonMem[2])) {
    //     return false;
    // }

    if (!notEmpty("log_password", arr_alertNonMem[3])) {
        return false;
    }

    return true;
}


function checkFormsubmitReg() {
    $('.label_error').remove();

    if (!notEmpty("regis_email", arr_alertNonMem[1])) {
        return false;
    }
    if (!emailValidator("regis_email", arr_alertNonMem[2])) {
        return false;
    }
    if (!notEmpty("regis_phone", arr_alertNonMem[7])) {
        return false;
    }
    if (!isPhone("regis_phone", arr_alertNonMem[8])) {
        return false;
    }
    if (!lengthMin("regis_phone", 10, arr_alertNonMem[8])) {
        return false;
    }
    if (!lengthMax("regis_phone", 13, arr_alertNonMem[8])) {
        return false;
    }

    if (!notEmpty("regis_name", arr_alertNonMem[0])) {
        return false;
    }


    if (!notEmpty("regis_password", arr_alertNonMem[3])) {
        return false;
    }

    if (!lengthMin("regis_password", 8, arr_alertNonMem[6])) {
        return false;
    }

    // if (!lengthMax("regis_password", 32, arr_alertNonMem[6])) {
    //     return false;
    // }
    // if (!uppercase('password', arr_alertNonMem[5])) {
    //     return false;
    // }
    // if (!number_pass('password', arr_alertNonMem[5])) {
    //     return false;
    // }

    // if (!notEmpty("re_password", arr_alertNonMem[4])) {
    //     return false;
    // }
    //
    // if (!checkMatchPass_2("password", "re_password", arr_alertNonMem[5])) {
    //     return false;
    // }

    return true;
}

function loadNav() {
    $('.main-menu > .menu-item > a').hover(function () {
        // $(this).next().toggle(500);
        //
        $(this).next().stop(true, true).slideDown(500);
    }, function () {
    });

    $('.main-menu > .menu-item').hover(function () {
    }, function () {
        // $(this).find('.light-menu').toggle(500);
        $(this).find('.light-menu').stop(true, true).slideUp(500);
    });
}

function changeQuantityCart(id) {


}



