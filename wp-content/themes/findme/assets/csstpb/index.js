 // RESIZE
 $(window).resize(function () {
    var left = $(".wrap-menu").offset().left;
    if ($(window).width() <= 1268) {
      $(".list-menu").css({ left: -left });
    } else {
      $(".list-menu").css({ left: "" });
    }
  });
// resize menu
$(window).on("load", function () {
    var left = $(".wrap-menu").offset().left;
    if ($(window).width() <= 1268) {
      $(".list-menu").css({ left: -left });
    } else {
      $(".list-menu").css({ left: "" });
    }
});


$(document).ready(function() {

    // modal boostrap
    // $('#dialog1').modal('show');
        // modal boostrap


    setTimeout(function(){

        $('#dialog1').modal('show');

    }, 20000);


    $(window).on("scroll", function () {

    var scroll_menu = $(window).scrollTop();

    if (scroll_menu > 500) {
    $(".section1").addClass("fixed");
    }
    if (scroll_menu > 700) {
    $(".section1").addClass("active");
    }
    else if (scroll_menu < 500) {
    $(".section1").removeClass("fixed");
    }
    else {
    $(".section1").removeClass("active");      
    }


    if (scroll_menu > 1200) {

      $(".back-to-top").addClass("show-menu");

    } else {

      $(".back-to-top").removeClass("show-menu");

    }

  });

// SHOW MENU
document.getElementById('menu-toggle').addEventListener(
  'click',
  function() {
    this.classList.toggle('menu-toggle-active');
    $(this).parents(".wrap-menu").find(".list-menu").slideToggle();
    $(this).toggleClass("active");
  }
);


// SHOW SUBMENU 
$(".drop-down-all").on("click",function () {
  if($(window).width()<991){
    $(this).parents(".list-menu").find(">.nav-item").not($(this).parents(".nav-item")).find(".dropdownmenu").slideUp();
    $(this).parents(".nav-item").find(".dropdownmenu").slideToggle();
    $(this).toggleClass("active");
  }
});


 // BACK TO TOP

    $(".back-to-top").on("click",function () {

    $("html,body").animate({ scrollTop: 0 }, 1500);

    });











    // slick slider
    if ( jQuery().slick ) {
      var slick = jQuery(".slick-carousel");
      slick.each(function(){
          var item        = jQuery(this).data('item'),
              item_lg     = jQuery(this).data('item_lg'),
              item_md     = jQuery(this).data('item_md'),
              item_sm     = jQuery(this).data('item_sm'),
              item_mb     = jQuery(this).data('item_mb'),
              row         = jQuery(this).data('row'),
              arrows      = jQuery(this).data('arrows'),
              dots        = jQuery(this).data('dots'),
              vertical    = jQuery(this).data('vertical');
          jQuery(this).slick({
              dots: dots,
              arrows: arrows,
              infinite: true,
              autoplaySpeed: 3000,
              vertical: vertical,
              slidesToShow: item,
              slidesToScroll: 1,
              lazyLoad: 'ondemand',
              rows: row,
              responsive: [
                  {
                      breakpoint: 1200,
                      settings: {
                          slidesToShow: item_lg,
                          slidesToScroll: 1,
                      }
                  },
                  {
                      breakpoint: 1025,
                      settings: {
                          slidesToShow: item_md,
                          slidesToScroll: 1,
                      }
                  },
                  {
                      breakpoint: 768,
                      settings: {
                          slidesToShow: item_sm,
                          slidesToScroll: 1,
                      }
                  },
                  {
                      breakpoint: 576,
                      settings: {
                          slidesToShow: item_mb,
                          slidesToScroll: 1,
                      }
                  }
              ]
          });
      });

  }


});

