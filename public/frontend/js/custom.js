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
