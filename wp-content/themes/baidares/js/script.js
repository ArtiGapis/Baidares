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
    // -----------scrool-hidder------------------

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").className = "owl-carousel owl-theme owl-loaded owl-drag";
      document.getElementById("sidebar-wraper").className ="container";
      document.getElementById("blue-line").className ="header-line-wraper";
      document.getElementById("line").classList.remove("fix");
  } else {
      document.getElementById("navbar").className = "owl-hider";
      document.getElementById("sidebar-wraper").className ="col-lg-6 sidebar-fix";
      document.getElementById("blue-line").className ="header-line-wraper-fix";
      document.getElementById("line").className ="fix";
  }
  prevScrollpos = currentScrollPos;
};

    $( document ).ready(function() {
        $('#cssmenu li.menu-item-has-children>a').on('click', function(){
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        });

    });
    $('.nolink').change(function () {
        $('.sample-link-wrapper').toggle(!this.checked);
    }).change();
} )( jQuery );
