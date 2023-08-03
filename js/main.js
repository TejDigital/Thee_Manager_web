$(function () {
    var navbar = $(".header-inner");
    var top_nav = $(".top_nav");
    $(window).scroll(function () {
      if ($(window).scrollTop() <= 40) {
        top_nav.css("display","block");
        navbar.removeClass("navbar-scroll");
      } else {
        top_nav.css("display","none");
        navbar.addClass("navbar-scroll");
      }
    });
  });
  
  // --------------------------------Active-link-Navbar--------------------
  // const currentlink = location.href;
  // const menuitems = document.getElementsByClassName("nav-link");
  // // console.log(menuitems);
  // for (let i = 0; i < menuitems.length; i++) {
  //   if (menuitems[i].href === currentlink) {
  //     menuitems[i].className = "current";
  //   }
  // }

  //----------------------------gallery---------------------
  $(".gallery_slider_area").owlCarousel({
    autoplay: true,
    slideSpeed: 1000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    items: 3,
    loop: true,
    // rtl: true,
    mouseDrag: true,
    // nav: true,
    center:true,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa fa-arrow-right"></i>',
    ],
    margin: 10,
    dots: true,
    dotsEach: true,
    responsive: {
      320: {
        items: 1,
      },
      767: {
        items: 2,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  // --------------------carousel_for_testimonial------------
$(".owl_testimonial").owlCarousel({
  autoplay: true,
  slideSpeed: 3000,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  items: 1,
  loop: true,
  rtl: false,
  mouseDrag: true,
  nav: false,
  navText: [
    '<i class="fa fa-arrow-left"></i>',
    '<i class="fa fa-arrow-right"></i>',
  ],
  // margin: 10,
  dots: false,
  dotsEach: true,
  responsive: {
    320: {
      items: 1,
    },
    767: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});