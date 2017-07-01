(function($){

    /* FIX IMAGE ALIGNMENT IN POSTS AND PAGES */

    $('.alignleft, .alignright').each(function(k, v){

        if ("IMG" != v.nodeName) {
            return;
        }

        if ($(v).hasClass('alignleft')) {
            $(this).wrap('<span class="image left"></div>');
        } else if ( $(v).hasClass('alignright') ) {
            $(this).wrap('<span class="image right"></div>');
        } else if ( $(v).hasClass('aligncenter') ) {
            $(this).wrap('<span class="image center"></div>');
        }
    });

})(jQuery);