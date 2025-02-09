<?php

namespace App\Helpers;

class Main
{
    public static function product($img_src, $discount = null, $category = null, $product_name, $price, $after_discount = null)
    {
        $html = '<div class="col-lg-3 col-md-4 col-6">';
        $html .= ' <div class="product">';
        $html .= '  <div class="product-image">';
        // $html .= '      <a href="#"><img src="{{ asset("uploads/banner/banner5.jpeg") }}" alt=""></a>';
        $html .= '      <a href="#"><img src=" '.asset($img_src).' " alt=""></a>';
        $html .= '      <div class="discount-badge text-center">';
        $html .= '          <span>'.$discount.'</span>';
        $html .= '      </div>';
        $html .= '      <div class="category-badge text-center ">';
        $html .= '          <a href="#"><span>'.$category.'</span></a>';
        $html .= '      </div>';
        $html .= '  </div>';
        $html .= ' <div class="product-title px-3 mt-3">';
        $html .= '      <a href="#"><p>'.$product_name.'</p></a>';
        $html .= ' </div>';
        $html .= ' <div class="price d-flex px-3 mb-1"> ';
        $html .= '      <p><s class="discount-price me-2">&#2547;'.$price.'</s></p><p>&nbsp; &#2547;'.$after_discount.'</p> ';
        $html .= ' </div> ';
        $html .= ' <div class="product-widget mb-3"> ';
        $html .= '      <div class="row px-2 align-items-center justify-content-center"> ';
        $html .= '          <div class="col-8 buy-now text-center"> ';
        $html .= '              <a href="#" class="">Buy Now</a> ';
        $html .= '          </div> ';
        $html .= '          <div class="col-3 text-center product_cart"> ';
        $html .= '              <a href="#"><i class="fa-solid fa-cart-shopping"></i></a> ';
        $html .= '          </div> ';
        // $html .= '          <div class="col-3 text-center product_cart"> ';
        // $html .= '              <a href="#"><i class="fa-solid fa-heart"></i></a> ';
        // $html .= '          </div> ';
        $html .= '         </div> ';
        $html .= '      </div> ';
        $html .= '  </div> ';
        $html .= ' </div> ';

        return $html;
    }
}
