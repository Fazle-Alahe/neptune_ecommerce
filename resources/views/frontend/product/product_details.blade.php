@extends('frontend.layout.master')
@section('content')
    <div class="container ">
        <div class="product-details">
            <div class="row">
                <div class="col-5">
                      
                    <div class="demo">
                        <ul id="lightSlider">
                            
                        <li data-thumb="{{asset('uploads/banner/banner1.jpeg')}}" data-src="largeImage1">
                            <img src="{{asset('uploads/banner/banner1.jpeg')}}" />
                          </li>
                          <li data-thumb="{{asset('uploads/banner/banner2.jpeg')}}" data-src="largeImage2">
                            <img src="{{asset('uploads/banner/banner2.jpeg')}}" />
                          </li>
                          <li data-thumb="{{asset('uploads/login1.png')}}" data-src="largeImage3">
                            <img src="{{asset('uploads/login1.png')}}" />
                          </li>
                          <li data-thumb="{{asset('uploads/banner/banner4.jpeg')}}" data-src="largeImage4">
                            <img src="{{asset('uploads/banner/banner4.jpeg')}}" />
                          </li>
                          <li data-thumb="{{asset('uploads/banner/banner3.jpeg')}}" data-src="largeImage5">
                            <img src="{{asset('uploads/banner/banner3.jpeg')}}" />
                          </li>
                          <li data-thumb="{{asset('uploads/banner/banner4.jpeg')}}" data-src="largeImage4">
                            <img src="{{asset('uploads/banner/banner4.jpeg')}}" />
                          </li>
                          <li data-thumb="{{asset('uploads/banner/banner3.jpeg')}}" data-src="largeImage5">
                            <img src="{{asset('uploads/banner/banner3.jpeg')}}" />
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-7">
                    <div class="pd-title">
                        <p>Walton WSI-KRYSTALINE-18MH Inverter Split AC Air</p>
                    </div>
                    <div class="pd-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
