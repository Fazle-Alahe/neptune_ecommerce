<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neptune</title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/md.css')}}" media="(max-width: 992px)"> --}}
</head>

<body>
    <style>

        @media (max-width: 992px) {

            .main-header .logo img{
                width: 150px;
            }
            .account a{
                font-size: 17px;
            }
            .bottom-header li{
                font-size: 16px;
            }
         }

         @media (max-width: 768px) {
            .main-header{
                padding: 10px !important;
            }
            .main-header .logo{
                text-align: center;
                margin-bottom: 20px
            }
            .search-bar .input-form{
                width: 100%
            }
            .input-form{
                display: none;
            }
            .form-button{
                margin-top: 8px;
            }
            .account:first-child{
                margin-right: 25px !important;
                justify-content: space-between !important;
            }
            .account span{
                display: none;
            }
         }

         @media (min-width: 576px) { 
            
            .top-header p{
                font-size: 13px;
            }

         }

    </style>

    {{-- <div class="top-section"> --}}
        {{-- top header --}}
        <section class="top-header container-fluid py-1">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p><i class="fa-solid fa-location-dot me-2"></i>583 Shamim Sarani, Mirpur, Dhaka, Bangladesh</p>
                    </div>
                    <div class="col-6 text-end">
                        <p><span>Call us: +8801863000000</p>
                    </div>
                </div>
            </div>
        </section>
    
        {{-- main header --}}
        <section class="main-header container-fluid py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-8 logo">
                        <a href="#" class="">
                            <img src="{{asset('uploads/logo.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-2 text-end">
                        <div class="search-bar">
                            <form action="">
                                <div class="input-field">
                                    <input type="text" placeholder="search anything..." class="input-form px-3">
                                    <div class="form-button">
                                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-2 d-flex align-items-center justify-content-end">
                        <div class="account me-5">
                            <a href="#"><span>Login</span><i class="fa-regular fa-user ms-2"></i></a>
                        </div>
                        <div class="account">
                            <a href="#">
                                <div class="cart">
                                    <span>Login</span> <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart3 mb-1" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                      </svg>
                                    <span class="cart-count d-flex align-items-center justify-content-center">0</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- bottom header --}}
        <section class="bottom-header container-fluid py-2">
            <div class="container d-flex justify-content-center">
                <ul class="d-flex">
                    <li class="me-4 py-1 main-menu"><a href="#" class="pe-4">Fashion<i class="fa-solid fa-chevron-down ms-1"></i></a>
                        <div class="child-menu">
                            <ul>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fasfvdfbdbdghion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="me-4 py-1 main-menu"><a href="#" class="pe-4">Fashion<i class="fa-solid fa-chevron-down ms-1"></i></a>
                        <div class="child-menu">
                            <ul>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="me-4 py-1 main-menu"><a href="#" class="pe-4">Fashion<i class="fa-solid fa-chevron-down ms-1"></i></a>
                        <div class="child-menu">
                            <ul>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="me-4 py-1 main-menu"><a href="#" class="pe-4">Fashion</a></li>
                    <li class="me-4 py-1 main-menu"><a href="#" class="pe-4">Fashion</a></li>
                    <li class="me-4 py-1 main-menu"><a href="#" class="pe-4">Fashion</a></li>
                </ul>
            </div>
        </section>
    {{-- </div> --}}
