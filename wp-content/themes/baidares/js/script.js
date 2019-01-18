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

    // window.onscroll = function() {scrollFunction()};
    //
    // function scrollFunction() {
    //     if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    //         document.getElementById("myBtn").style.display = "fixed";
    //     } else {
    //         document.getElementById("myBtn").style.display = "none";
    //     }
    // }
    // document.getElementById("myBtn2").ontouchend = function() {hideControls("menu")};
} )( jQuery );