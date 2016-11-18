(function($){
    $(window).scroll(function(e){
        var headerHeight = $('header.top-header').outerHeight(true),
            scrollDist   = $(document).scrollTop(),
            navbar       = $('nav.navbar');
        if (scrollDist >= headerHeight){
            navbar.addClass('navbar-fixed-top');
        }
        else {
            navbar.removeClass('navbar-fixed-top');
        }
    });
})(jQuery);