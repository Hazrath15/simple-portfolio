// jQuery(document).ready(function ($) {
//     $('#sp-loadmore-btn').on('click', function () {
//         let button = $(this);
//         let page = parseInt(button.data('page')) + 1;
//         let per_page = button.data('perpage');
//         let type = button.data('type');

//         $.ajax({
//             url: sp_portfolio_ajax.ajaxurl,
//             type: 'POST',
//             data: {
//                 action: 'sp_loadmore_portfolio',
//                 // nonce: sp_portfolio_ajax.nonce,
//                 page: page,
//                 per_page: per_page,
//                 type: type
//             },
//             success: function (res) {
//                 $('#sp-portfolio-list').append(res.data.html);
//                 button.data('page', page);
//                 // Optionally hide button if no more posts
//             }
//         });
//     });
// });

jQuery(document).ready(function ($) {
    $('#sp-loadmore-btn').on('click', function () {
        let button = $(this);
        let page = parseInt(button.data('page')) + 1;
        let per_page = button.data('perpage');
        let type = button.data('type');

        $.ajax({
            url: sp_portfolio_ajax.ajaxurl,
            type: 'POST',
            data: {
                action: 'sp_loadmore_portfolio',
                page: page,
                per_page: per_page,
                type: type
            },
            success: function (res) {
                if (res.success && res.data.html.trim() !== '') {
                    $('#sp-portfolio-list').append(res.data.html);
                    button.data('page', page);

                    if (res.data.is_last_page) {
                        button.hide();
                    }

                } else {

                    button.hide(); 
                    $('<p class="sp-no-more">No more portfolio items found.</p>').insertAfter(button);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX error:", error);
                button.hide();
            }
        });
    });
});


