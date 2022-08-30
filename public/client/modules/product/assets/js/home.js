$(document).ready(function () {


});

$('.c-product_menu .offcanvas-menu-toggler').click(function () {
    var element = $(this).parent();
    if (element.hasClass('opened')) {
        element.removeClass('opened');
    } else {
        element.removeClass('opened');
        element.addClass('opened');
    }
})

$('.c-box_color .c-color').click(function () {

    var id = $(this).attr('data-action');
    var src_img = $(this).attr('data-rel');

    $('.c-item' + id + ' .c-color').removeClass('active');
    $(this).addClass('active');

    $('.c-item' + id + ' .img-sec').attr('src', src_img);
    $('.c-item' + id + ' .img-sec').css("opacity", "1");
    if ($(this).hasClass('c-default')) {
        $('.c-item' + id + ' .img-first').show();
        $('.c-item' + id + ' ').addClass('is-default')
        // mouseEvent();
    } else {
        $('.c-item' + id + ' ').removeClass('is-default')
    }
});

function mouseEvent() {
    $('.c-box_list .c-item').bind({
        mouseover: function () {
            $(this).children('c-image').removeClass('ddd')
        }, mouseleave: function () {
            $(this).children('c-image').addClass('ddd')
        }
    });
}

// $('.show_cat').click(function () {
//     $(this).toggleClass('active');
//     $(this).prev('.item').toggleClass('active');
//     $(this).parent().toggleClass('opened');
//     var id = $(this).attr('data-id');
//     $(this).next('#' + id).slideToggle('slow');
// });


var end_load = false;

// $(window).scroll(function () {
//     //get position
//     var eleDiv = document.getElementById("loading");
//     $height = eleDiv.offsetTop;

//     //scroll
//     // var scroll = $(window).scrollTop();
//     //
//     // if (scroll >= $height - 600) {
//     //     setTimeout(function () {
//     //         LoadMore___();
//     //     }, 500);
//     //
//     // } else {
//     //     // $(".loading").removeClass("loading_block");
//     // }
// });

var LoadMore___ = function () {
    resetLoad();

    if (end_load == true)
        return false;

    var pagecurrent = $('#loading').attr("data-pagecurrent");
    var nextpage = $('#loading').attr("data-nextpage");
    var limit = $('#loading').attr("limit");
    var data_cat = $('#loading').attr("data-cat");
    var data_order = $('#loading').attr("data-order");
    var data_continue = $('#loading').attr("data-end");

    pagecurrent = Number(pagecurrent);
    nextpage = Number(nextpage);
    if (data_continue == 1) {
        $('#loading').attr("data-pagecurrent", nextpage);
        $('#loading').attr("data-nextpage", nextpage + 1);
        end_load = true;
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: '/index.php?module=product&view=home&raw=1&task=loadmore',
            data: '&page=' + nextpage + '&limit=' + limit + '&data_cat=' + data_cat + '&sort_by=' + data_order,
            success: function (html) {
                if (html == '') {
                    // alert('Dữ liệu đã hết');
                    $('#e-loader').slideUp();
                    end_load = true;
                    $('#loading').attr("data-end", 2);
                    // $(".loading").removeClass("loading_block");
                    // $(".loading").hide();
                } else {
                    $('.c-box_list.c-box_loadMore').append(html);
                }
            }
        });
    }
};

function resetLoad() {
    setInterval(function () {
        end_load = false;
    }, 5000);
}