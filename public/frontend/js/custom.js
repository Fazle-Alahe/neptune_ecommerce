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
  $(".bar-icon").click(function(){
    $(".category-section").addClass("hamburger");
  });

  $(".mobile-close-btn").click(function(){
    $(".category-section").removeClass("hamburger");
  });
});


$(document).ready(function(){
  $(".more-btnn").click(function(){
    $("input").addClass("inp-active");
  });

  $(".more-btnn").click(function(){
    $(".topbar-search").removeClass("inp-active");
  });
})

// whatsapp button
$(document).ready(function(){
  $(".wclose-btn").click(function(){
    $(".whatsapp").addClass("wt-remove");
  });
})

// search for mobile
$(document).ready(function(){
  $(".more-btnn").click(function(){
    $(".search-input input").toggleClass('tggl')
    $(".chev-up").toggleClass('tggl')
  });
});


$(function() {
  $(".tglmenu").click(function() {
    // if ( $(this).closest('div').next().find('.sub-visible').hasClass("tggl") ) {   
    
      
    if ( !$(this).closest('.category').find('.sub-visible').hasClass("tggl") ) {  
      $('.sub-visible').removeClass('tggl');
      $(this).closest('.category').find('.sub-visible').toggleClass('tggl'); 
    }
    else{
      $(this).closest('.category').find('.sub-visible').removeClass('tggl');
    }
  });
});



$(function() {
  $(".tglsubmenu").click(function() {
    
    if ( !$(this).closest('.subcategory-card').find('.submenu').hasClass('tggl') ) {  
      $('.submenu').removeClass('tggl');
      $(this).closest('.subcategory-card').find('.submenu').toggleClass('tggl'); 
    }
    else{
      $(this).closest('.subcategory-card').find('.submenu').removeClass('tggl');
    }
  });
});



$('.autoplay').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.new-arrival-autoplay').slick({
  prevArrow: '.arrow_prev',
  nextArrow: '.arrow_next',
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
        infinite: true,
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

$('.top-selling-autoplay').slick({
  prevArrow: '.arrow_prev_ts',
  nextArrow: '.arrow_next_ts',
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
        infinite: true,
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

$('.t-shirt-autoplay').slick({
  prevArrow: '.arrow_prev_tshirt',
  nextArrow: '.arrow_next_tshirt',
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
        infinite: true,
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

$('.shirt-autoplay').slick({
  prevArrow: '.arrow_prev_shirt',
  nextArrow: '.arrow_next_shirt',
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
        infinite: true,
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

$('.jeans-autoplay').slick({
  prevArrow: '.arrow_prev_jeans',
  nextArrow: '.arrow_next_jeans',
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
        infinite: true,
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


$('.katuya-autoplay').slick({
  prevArrow: '.arrow_prev_katuya',
  nextArrow: '.arrow_next_katuya',
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
        infinite: true,
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

$('.polo-autoplay').slick({
  prevArrow: '.polo-prev',
  nextArrow: '.polo-next',
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
        infinite: true,
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


$('.panjabi-autoplay').slick({
  prevArrow: '.panjabi-prev',
  nextArrow: '.panjabi-next',
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
        infinite: true,
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

$('.kabli-autoplay').slick({
  prevArrow: '.kabli-prev',
  nextArrow: '.kabli-next',
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
        infinite: true,
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

$('.pajama-autoplay').slick({
  prevArrow: '.pajama-prev',
  nextArrow: '.pajama-next',
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
        infinite: true,
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

$('.kids-autoplay').slick({
  prevArrow: '.kids-prev',
  nextArrow: '.kids-next',
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
        infinite: true,
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

$('.koti-autoplay').slick({
  prevArrow: '.koti-prev',
  nextArrow: '.koti-next',
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
        infinite: true,
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