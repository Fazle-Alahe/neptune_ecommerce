<?php

namespace App\Helpers;

class Main
{
    public static function product($img_src, $product_name, $price, $discount = null, $category = null,  $after_discount = null)
    {
        $html = '<div class="col-lg-3 col-md-4 col-6">';
        $html .= ' <div class="product d-flex flex-column h-100">';
        $html .= '  <div class="product-image">';
        // $html .= '      <a href="#"><img src="{{ asset("uploads/banner/banner5.jpeg") }}" alt=""></a>';
        $html .= '      <a href="#"><img src=" ' . asset($img_src) . ' " alt=""></a>';
        $html .= '      <div class="discount-badge text-center">';
        $html .= '          <span>' . $discount . '</span>';
        $html .= '      </div>';
        $html .= '      <div class="category-badge text-center ">';
        $html .= '          <a href="#"><span>' . $category . '</span></a>';
        $html .= '      </div>';
        $html .= '  </div>';
        $html .= ' <div class="product-title px-3 mt-3">';
        $html .= '      <a href="#"><p>' . $product_name . '</p></a>';
        $html .= ' </div>';
        $html .= ' <div class="price d-flex px-3 mb-1"> ';
        $html .= '      <p><s class="discount-price me-2">&#2547;' . $price . '</s></p><p>&nbsp; &#2547;' . $after_discount . '</p> ';
        $html .= ' </div> ';
        $html .= ' <div class="product-widget mb-3 mt-auto"> ';
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

    public static function shop($img_src)
    {
        $html = '<div class="shop d-flex align-items-center justify-content-center m-2">';
        $html .= '  <a href="#">';
        $html .= '      <img src="' . asset($img_src) . '" alt="your-favourite-shop">';
        $html .= '  </a>';
        $html .= '</div>';

        return $html;
    }

    public static function regular_form($input_name, $label_name, $type, $placeholder = null)
    {
        $html = '<div class="mb-3">';
        $html .= '  <label for="' . $input_name . '" class="form_label">' . $label_name . '</label><br>';
        $html .= '    <input type="' . $type . '" name="' . $input_name . '" class="form_input" placeholder="' . $placeholder . '">';
        $html .= '</div>';

        return $html;
    }


    public static function password_form($name, $id, $input_name, $placeholder = null)
    {
        $html = '<div class="mb-3">';
        $html .= '<label for="password" class="form_label">' . $name . '</label><br>';
        $html .= '<div class="eye_password">';
        $html .= '<input type="password" id="' . $id . '" name="' . $input_name . '" class="form_input @error(' . $input_name . ') is-invalid @enderror" placeholder="' . $placeholder . '">';
        $html .= '<img class="eye" 
                src="' . asset('uploads/eye.png') . '";
                data-target="' . $id . '" 
                data-visible="' . asset('uploads/eye.png') . '" 
                data-hidden="' . asset('uploads/hidden.png') . '" 
                alt="Toggle Password">';
        $html .= '</div>';
        $html .= ' </div>';
        return $html;
    }

    public static function ShowUploadImageHtml($id, $value, $name)
    {
        $html = '<div class="input-group-image">';
        $html .= '<div class="preview-image-container" style="margin-right: 10px;">';
        $html .= ($value) ? '<img src="' . ((!empty($value)) ? asset($value) : '') . '" id="' . e($id) . '_preview" style="max-width: 250px; max-height: 190px;">' : '<img id="' . e($id) . '_preview" style="max-width: 250px; max-height: 180px; display: none;">';
        $html .= '</div>';
        $html .= '<input type="hidden" class="form-control" id="' . e($id) . '" name="' . e($name) . '" value="' . e($value) . '">';
        $html .= '<span class="input-group-btn">';
        $html .= '<button type="button" class="btn btn-rounded btn-' . (($value) ? 'danger' : 'warning') . ' upload-button btn-xs mt-2" data-inputid="' . e($id) . '">' . (($value) ? 'Change Image' : 'Upload Image') . '</button>';
        $html .= '</span>';
        $html .= '<input type="file" id="' . e($id) . '_file" style="display: none">'; // Hidden file input
        $html .= '</div>';
        return $html;
    }

    // admin
    public static function password_field($name, $id, $input_name, $placeholder = null)
    {
        $html = '<div class="mb-3 eye_parent">';
        $html .= '<label for="password" class="form-label">' . $name . '</label><br>';
        $html .= '<div class="eye_password">';
        $html .= '<input type="password" id="' . $id . '" name="' . $input_name . '" class="form-control" placeholder="' . $placeholder . '" required>';
        $html .= '<img class="eye" 
                src="' . asset('uploads/eye.png') . '";
                data-target="' . $id . '" 
                data-visible="' . asset('uploads/eye.png') . '" 
                data-hidden="' . asset('uploads/hidden.png') . '" 
                alt="Toggle Password">';
        $html .= '</div>';
        $html .= ' </div>';
        return $html;
    }
}
// if (!function_exists('toast')) {
//     /**
//      * Flash a toast notification to the session.
//      *
//      * @param string $type success|error|warning|info
//      * @param string $message The message to display
//      */
//     function toast($type, $message)
//     {
//         session()->flash('toast', [
//             'type' => $type,
//             'message' => $message
//         ]);
//     }
// }
