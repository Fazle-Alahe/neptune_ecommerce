// cart

$(document).ready(function(){

  $(".count").on("click", function (e) {
    // $(".cart-content").toggleClass("cart-toggle");
    //   e.stopPropagation();
    alert();
  });

  $(".cart-close").on("click", function (e) {
      cartContent.removeClass("cart-toggle");
      e.stopPropagation();
  });

  // body.on("click", function () {
  //     cartContent.removeClass("mini-cart-content-toggle");
  // }).find(cartContent).on("click", function (e) {
  //     e.stopPropagation();
  // });

});


$(document).ready(function(){
  $(".cart").click(function(){
    $(".cart-content").addClass("cart-toggle");
    // alert();
  });

  $(".fa-xmark").click(function(){
    $(".cart-content").removeClass("cart-toggle");
    // alert();
  });
});

$(document).ready(function(){
  $('.hamburger-menu').on('click', function() {
    $('#nav-menu').toggleClass('hamburger-active');
  });

  // Close the menu when the close button (X) is clicked
  $('.close-button').on('click', function() {
    $('#nav-menu').removeClass('hamburger-active');
  });
});

// $(document).ready(function(){
//   $(".more-btnn").click(function(){
//     $(".search-input input").toggleClass('tggl')
//     $(".chev-up").toggleClass('tggl')
//   });
// });

$(document).ready(function(){
$('.form-button').hover(
  function() {
      $('.input-form, .arrow').addClass('block');
  },
  function() {
      $('.input-form, .arrow').removeClass('block');
  }
);
});


$('.jubba-autoplay').slick({
  prevArrow: '.jubba-prev',
  nextArrow: '.jubba-next',
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  infinite: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});