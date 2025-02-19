// modal

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
  $(".bar-icon").click(function(e){
    e.stopPropagation();
    $(".hamburger-menu").addClass("hamburger-active");
  });

  $(".close-button").click(function(e){
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

// banner slick
$(document).ready(function(){
  $('.banner').slick({
    // dots: true,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    speed: 1000,
    autoplaySpeed: 3000,
    fade: true,
    cssEase: 'linear'
    });
});

// form-button
$(document).ready(function(){
  $(".form-button").click(function(e){
    e.stopPropagation();
    if($(".input-form, .arrow").hasClass("block")){
      $(".input-form, .arrow").removeClass("block");
    }
    else{
      $(".input-form, .arrow").addClass("block");
    }
  });

  $('body').click(function() {
    $(".input-form, .arrow").removeClass("block");
  });

  $(".input-form, .arrow").click(function(e) {
    e.stopPropagation();
  });

});

// banner2 sidebar
$(document).ready(function() {
  $(".fa-chevron-down").click(function() {
    // alert();
    var $childMenu = $(this).closest('.category').find('.child-category');
    // console.log("hello");
    if (!$childMenu.hasClass("toggle")) {
      $('.child-category').removeClass('toggle').slideUp(); 
      $childMenu.addClass('toggle').slideDown();
    } else {
      $childMenu.removeClass('toggle').slideUp(); 
    }
  });
});


// mobile-hamburger-submenu
$(document).ready(function() {
  $(".hamburger-chevron").click(function() {
    // alert();
    var $childMenu = $(this).closest('.main-menu').find('.child-menu');
    // console.log("hello");
    if (!$childMenu.hasClass("toggle")) {
      $('.child-menu').removeClass('toggle').slideUp(); 
      $childMenu.addClass('toggle').slideDown();
    } else {
      $childMenu.removeClass('toggle').slideUp(); 
    }
  });
});


// cart update

$(document).ready(function(){

// calculate total
function updateTotals(){
  let subtotal = 0;
  $('.single-cart').each(function (){
    let productQuantity = parseInt($(this).find('.quantity').val());
    let productPrice = $(this).find('span').text();
    subtotal += productQuantity * productPrice; 
  });

  $('.subtotal-m').text(subtotal);
}

// increase quantity
  $('.increase').click(function(){
    let inputQuantity = $(this).siblings('.quantity');
    inputQuantity.val(parseInt(inputQuantity.val()) + 1 );
    updateTotals();
  });

// decrease quantity
  $('.decrease').click(function(){
    let inputQuantity = $(this).siblings('.quantity');
    if(inputQuantity.val() > 1){
      inputQuantity.val(parseInt(inputQuantity.val()) - 1 );
    }
    updateTotals();
  });

//cart item remove
  $('.trash').click(function(){
     $(this).closest('.single-cart').remove();
     updateTotals();
  });

  updateTotals();
});


// shop slick
$('.all-shop').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 540,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    }
  ]
});


// $('#exampleModal').click(modal());
// password show/hide
$(document).ready(function () {

  $(".eye").click(function () {
    var input = $("#" + $(this).attr("data-target"));

    if(input.attr("type") === 'password'){
      input.attr("type", "text");
      $(this).attr("src", $(this).attr("data-hidden"));
    }
    else{ 
      input.attr("type", "password");
      $(this).attr("src", $(this).attr("data-visible"));
    }

  });
});



$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 6
});