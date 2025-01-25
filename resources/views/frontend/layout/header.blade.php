<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neptune</title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick/slick-theme.css')}}">

    @stack('banner2')
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/md.css')}}" media="(max-width: 992px)"> --}}
</head>

<body>
    <style>

  
        :root {
            --notwhite: #F9F9F9;
            --pinkwhite: #faf0e6;
            --darkblue: #0b1b32;
            --theme: #b4182d;
            --violet: #54162b;
        }


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
                padding:15px 0 !important;
                border-bottom: none;
                box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;   
            }
            .hamburger{
                display: block;
            }
            .main-header .logo{
                margin-bottom: 5px;
            }
            .search-bar{
                position: relative;
            }
            .search-bar .input-form{
                width: 250px;
                position: absolute;
                top: 45px;
                left: -80px;
                background-color: #fff;
                z-index: 5;
                /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
                box-shadow: rgba(0, 0, 0, 0.35) 0px 1px 9px;
                display: none;
            }
            .block{
                display: block !important;
            }
            
            .arrow{
                position: absolute;
                content: "";
                left: -7px;
                top: 21px;
                border: 12px solid transparent;
                border-bottom: 12px solid #54162b;
                display: none;
            }
            .form-button{
                font-size: 22px;
                margin-right: 30px;
            }
            .form-button button{
                margin-top: -2px !important;
            }
            .account:first-child{
                margin-right: 25px !important;
                justify-content: space-between !important;
            }
            .account span{
                display: none;
            }
            .account svg{
                height: 22px;
                width: 22px;
            }
            /* hamburger menu */
            .bottom-header{
                display: none !important;
                box-shadow: none;
            }
            .hamburger-menu{
                position: fixed;
                top: 0;
                left: -80%;
                display: block;
                width: 300px;
                height: 100vh;
                background-color: white;
                padding: 0 0 30px 30px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                transition-duration: 0.5s; 
            }
            .hamburger-menu li a:hover{
                color: var(--theme)
            }
            
            .hamburger-menu li{
                border-top: 1px solid rgb(198, 193, 193);
                padding: 8px 0 !important;
            }
            .hamburger-active{
                display: block;
                left: 0;
            }
            .bottom-header .main-menu a{
                border-right: 0;
            }
            .main-menu .fa-chevron-down{
                float: right;
            }
            .main-menu:hover .child-menu{
                display: none;
            }
            .close-button{
                display: flex;
                justify-content: right;
            }
         }

         /* @media (min-width: 576px) { 
            
            .top-header p{
                font-size: 13px;
            } */

         /* } */

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
    
        <div class="sticky-header">
            {{-- main header --}}
            <section class="main-header container-fluid py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-8 logo">
                            <div class="row">
                                <div class="col-4 hamburger">
                                    <div class="bar-con">
                                        <i class="fa-solid fa-bars bar-icon ms-2"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <a href="#" class="">
                                        <img width="180" src="{{asset('uploads/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-2 text-end">
                            <div class="search-bar">
                                <form action="">
                                    <div class="input-field">
                                        <input type="text" placeholder="search anything..." class="input-form px-3">
                                        <div class="form-button">
                                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                        <div class="arrow">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-2 d-flex align-items-center justify-content-end right-navigation">
                            <div class="account me-5">
                                <a title="login" href="#"><span>Login</span><i class="fa-regular fa-user ms-2"></i></a>
                            </div>
                            <div class="account d-flex">
                                <a href="#" title="Cart">
                                    <div class="cart">
                                        <span>Cart</span> <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart3 mb-1" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                          </svg>
                                        <span class="cart-count d-flex align-items-center justify-content-center">0</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cart-content">
                            <div class="cart-close aaa text-right">
                                <i class="fa-solid fa-xmark cart-close"></i>
                            </div>
                            <div class="subtotal d-flex">
                                <p>Subtotal:<span class="subtotal-count">&#2547; 99990</span></p>
                            </div>
                            <div class="view-cart text-center">
                                <a href="#" class="view-text">View Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            {{-- hamburger menu --}}
            <div class="hamburger-menu">
                <ul class="">
                    <div class="close-button text-right">
                        <i class="fa-solid fa-xmark hamburger-close"></i>
                    </div>
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

            {{-- bottom header --}}
            <section class="bottom-header container-fluid py-2">
                <div class="container d-flex justify-content-center">
                    
                    <ul class="d-flex nav-menu">
                        <div class="close-button text-right">
                            <i class="fa-solid fa-xmark hamburger-close"></i>
                        </div>
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
        </div>

        <div class="containerr">
  
        </div>
        
    {{-- </div> --}}
