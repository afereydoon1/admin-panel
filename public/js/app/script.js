
$(function ($) {

    $('#menu').slicknav({
        label: 'منوی سایت',
        closedSymbol: "&#9664;",
        duration: 1000,
        easingOpen: "easeOutBounce",
        prependTo: '#demo2'
    });
    
    $("#slider-one").owlCarousel({
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        items:1,
        autoplay: 500,
        center: true,
        autoplayHoverPause : true,
        loop:true,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ]
    });

     var owl = $("#slider-one");
     $(".next").click(function(){
      owl.trigger('owl.next');
    });
    $(".prev").click(function(){
      owl.trigger('owl.prev');
    });


});