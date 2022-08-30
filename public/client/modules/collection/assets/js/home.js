function loadMore() {


    var pagecurrent = $('#loading').attr("data-pagecurrent");
    var nextpage = $('#loading').attr("data-nextpage");
    var limit = $('#loading').attr("limit");
    var data_cat = $('#loading').attr("data-cat");
    // var data_order = $('#loading').attr("data-order");
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
            url: '/index.php?module=collection&view=home&raw=1&task=loadmore',
            data: '&page=' + nextpage + '&limit=' + limit + '&data_cat=' + data_cat ,
            success: function (html) {
                if (html == '') {
                    end_load = true;
                    $('#loading').attr("data-end", 2);
                    // $(".loading").removeClass("loading_block");
                    $(".show_more").hide();
                } else {
                    $('.c-list_album.c-box_loadMore').append(html);
                }
            }
        });
    }
}

