// cart item

$(document).ready(function(){
  $(".all-carts").click(function(){
    $(".cart-details").addClass("active");
  });

  $(".close-btn").click(function(){
    $(".cart-details").removeClass("active");
  });
});


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