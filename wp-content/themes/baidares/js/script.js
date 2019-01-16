jQuery( document ).ready(function() {
    // console.log( "ready!" );
});

( function( $ ) {
    $(document).ready(function(){
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:0,
            autoplay:true,
            // autoplayTimeout:1000,
            // autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        });
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    });

    // $("#heart-trigger").click(function () {
    //     $("li").toggleClass("visible");
    // });

    $(document).ready(function(){
        $("button").touch(function(){
            $("li").toggleClass("visible");
        });
    });

} )( jQuery );
