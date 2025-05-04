@extends('frontend.layout.master')
@section('content')
<style>
  .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
  }

  header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid #eee;
      margin-bottom: 30px;
  }

  .logo {
      font-size: 24px;
      font-weight: bold;
  }

  nav ul {
      display: flex;
      list-style: none;
  }

  nav ul li {
      margin-left: 20px;
  }

  nav ul li a {
      text-decoration: none;
      color: #333;
      font-size: 14px;
  }

  .product-container {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
  }

  .product-gallery {
      flex: 1;
      min-width: 300px;
  }

  .main-image {
      width: 100%;
      height: 500px;
      object-fit: cover;
      margin-bottom: 15px;
  }

  .thumbnail-slider {
      width: 100%;
  }

  .thumbnail-slider .slick-slide {
      padding: 0 5px;
  }

  .thumbnail-slider img {
      width: 100%;
      height: 80px;
      object-fit: cover;
      cursor: pointer;
      border: 1px solid #ddd;
  }

  .thumbnail-slider .slick-current img {
      border-color: #000;
  }

  .product-info {
      flex: 1;
      min-width: 300px;
  }

  .product-title {
      font-size: 28px;
      margin-bottom: 10px;
  }

  .product-price {
      font-size: 24px;
      font-weight: bold;
      margin: 20px 0;
  }

  .color-options,
  .size-options {
      margin: 20px 0;
  }

  .color-options h3,
  .size-options h3 {
      font-size: 16px;
      margin-bottom: 10px;
  }

  .color-selector,
  .size-selector {
      display: flex;
      gap: 10px;
  }

  .color-option,
  .size-option {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ddd;
      cursor: pointer;
  }

  .color-option.active,
  .size-option.active {
      border-color: #000;
  }

  .quantity-selector {
      display: flex;
      align-items: center;
      margin: 30px 0;
  }

  .quantity-selector button {
      width: 40px;
      height: 40px;
      background: #f5f5f5;
      border: 1px solid #ddd;
      font-size: 18px;
      cursor: pointer;
  }

  .quantity-selector input {
      width: 60px;
      height: 40px;
      text-align: center;
      border: 1px solid #ddd;
      border-left: none;
      border-right: none;
  }

  .add-to-cart,
  .buy-now {
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      font-size: 16px;
      cursor: pointer;
  }

  .add-to-cart {
      background: #000;
      color: #fff;
      border: none;
  }

  .buy-now {
      background: #fff;
      color: #000;
      border: 1px solid #000;
  }

  .product-description {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #eee;
  }

  .lightbox {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
  }

  .lightbox img {
      max-width: 90%;
      max-height: 90%;
  }

  .color-option,
  .size-option {
      padding: 10px 15px;
      border: 1px solid #ccc;
      background: #fff;
      cursor: pointer;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.2s ease-in-out;
  }

  .color-option.active,
  .size-option.active {
      border: 1px solid #54162b;
      background-color: #faf0e6;
  }

  .quantity-selector {
      display: flex;
      align-items: center;
      gap: 10px;
  }

  .quantity-selector button {
      width: 35px;
      height: 35px;
      font-size: 20px;
      background-color: #faf0e6;
      border: 1px solid #ccc;
      cursor: pointer;
      border-radius: 6px;
  }

  .quantity-selector input {
      width: 50px;
      text-align: center;
      height: 35px;
      border: 1px solid #ccc;
      border-radius: 6px;
  }

  /* For Webkit browsers (Chrome, Safari) */
  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
  }

  /* For Firefox */
  input[type=number] {
      -moz-appearance: textfield;
  }


  @media (max-width: 768px) {
      .product-container {
          flex-direction: column;
      }

      .main-image {
          height: 400px;
      }
  }
</style>

<body>
  <div class="container">
      <header>
          <div class="logo">off-white</div>
          <nav>
              <ul>
                  <li><a href="#">New offers</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Men</a></li>
                  <li><a href="#">Women</a></li>
                  <li><a href="#">Children</a></li>
                  <li><a href="#">Brands</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </nav>
      </header>

      <div class="product-container">
          <div class="product-gallery">
              <div class="main-image-slider">
                  <div><img src="image/image1.jpg" alt="Nike ACG Hoodie" class="main-image"></div>
                  <div><img src="image/image2.jpg" alt="Back View" class="main-image"></div>
                  <div><img src="image/image3.jpg" alt="Detail View" class="main-image"></div>
                  <div><img src="image/image4.jpg" alt="Detail View" class="main-image"></div>
                  <div><img src="image/image5.jpg" alt="Detail View" class="main-image"></div>
              </div>

              <div class="thumbnail-slider">
                  <div><img src="image/image1.jpg" alt="Front Thumbnail"></div>
                  <div><img src="image/image2.jpg" alt="Back Thumbnail"></div>
                  <div><img src="image/image3.jpg" alt="Detail Thumbnail"></div>
                  <div><img src="image/image4.jpg" alt="Detail Thumbnail"></div>
                  <div><img src="image/image5.jpg" alt="Detail Thumbnail"></div>
              </div>
          </div>

          <div class="product-info">
              <h1 class="product-title">Elegant Leather Backpack</h1>
              <div class="product-price" style="color: #0a8f4a;">$149.99</div>
              <div class="reviews" style="margin: 10px 0;">
                  <span style="color: #f5a623; font-size: 18px;">★★★★☆</span>
                  <span style="color: #f5a623;">(128 reviews)</span>
              </div>

              <p style="margin-bottom: 20px;">
                  Crafted from premium leather, this backpack is the perfect blend of style and utility.
                  Spacious compartments, sleek design—ideal for professionals and creatives on the go.
              </p>

              <div class="color-options">
                  <h3>Color:</h3>
                  <div class="color-selector">
                      <button class="color-option active">Brown</button>
                      <button class="color-option">Black</button>
                      <button class="color-option">Tan</button>
                  </div>
              </div>

              <div class="size-options">
                  <h3>Size:</h3>
                  <div class="size-selector">
                      <button class="size-option active">S</button>
                      <button class="size-option">M</button>
                      <button class="size-option">L</button>
                  </div>
              </div>

              <div class="quantity-selector" style="margin: 20px 0;">
                  <button class="decrement">-</button>
                  <input type="number" value="1" min="1">
                  <button class="increment">+</button>
              </div>

              <div class="button-group" style="display: flex; gap: 10px;">
                  <button class="add-to-cart"
                      style="flex: 1; background-color: #009f7f; color: white; border: none; border-radius: 6px;">Add
                      to Cart</button>
                  <button class="buy-now"
                      style="flex: 1; background-color: #fff; color: #009f7f; border: 2px solid #009f7f; border-radius: 6px;">Buy
                      Now</button>
              </div>
          </div>


      </div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Slick Slider JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
      $(document).ready(function () {
          // Main image slider  
          $('.main-image-slider').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              asNavFor: '.thumbnail-slider'
          });

          // Thumbnail slider  
          $('.thumbnail-slider').slick({
              slidesToShow: 5,
              slidesToScroll: 1,
              asNavFor: '.main-image-slider',
              dots: false,
              centerMode: false,
              focusOnSelect: true,
              vertical: false,
              responsive: [
                  {
                      breakpoint: 768,
                      settings: {
                          slidesToShow: 4
                      }
                  }
              ]
          });

          // Color selection  
          $('.color-option').click(function () {
              $('.color-option').removeClass('active');
              $(this).addClass('active');
          });

          // Size selection  
          $('.size-option').click(function () {
              $('.size-option').removeClass('active');
              $(this).addClass('active');
          });

          // Quantity selector  
          $('.increment').click(function () {
              var input = $(this).siblings('input');
              var value = parseInt(input.val());
              input.val(value + 1);
          });

          $('.decrement').click(function () {
              var input = $(this).siblings('input');
              var value = parseInt(input.val());
              if (value > 1) {
                  input.val(value - 1);
              }
          });
      });

      $('.main-image-slider').on('click', '.slick-slide', function () {
          var imgSrc = $(this).find('img').attr('src');
          $('body').append('<div class="lightbox"><img src="' + imgSrc + '"></div>');

          $('.lightbox').click(function () {
              $(this).remove();
          });
      });
  </script>
</body>
@endsection
