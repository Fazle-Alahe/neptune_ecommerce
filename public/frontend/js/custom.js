// cart

$(document).ready(function(){
  $(".cart").click(function(e){
    e.stopPropagation();
    $(".cart-content").addClass("cart-toggle");
  });

  $(".cart-close").click(function(e){
    e.stopPropagation();
    $(".cart-content").removeClass("cart-toggle");
  });

  $('body').click(function() {
    $(".cart-content").removeClass("cart-toggle");
  });

  $(".cart-content").click(function(e) {
    e.stopPropagation();
  });

});


// hamburger
$(document).ready(function(){
  $(".fa-bars").click(function(e){
    e.stopPropagation();
    $(".hamburger-menu").addClass("hamburger-active");
  });

  $(".hamburger-close").click(function(e){
    e.stopPropagation();
    $(".hamburger-menu").removeClass("hamburger-active");
  });

  $('body').click(function() {
    $(".hamburger-menu").removeClass("hamburger-active");
  });

  $(".hamburger-menu").click(function(e) {
    e.stopPropagation();
  });

});



// view cart font
// $(document).ready(function() {
//   // When hovering over the parent element
//   $(".parent").hover(
//     function() {
//       $(this).find(".child").css("color", "red");  // Children font color
//     },
//     function() {
//       $(this).find(".child").css("color", "");  // Reset children font color
//     }
//   );
// });

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