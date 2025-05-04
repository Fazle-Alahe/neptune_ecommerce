@push('banner2')
    
<style>
    .banner2-section .banner{
        background-color: #F3F4F6;
        padding: 0 !important;
        border-radius: 10px;
    }
    .main-header{
        border-bottom: none; 
    }
    .bottom-header{
        display: none !important;
    }
    .banner2-section .slider img{
        width: 100%;
        border-radius: 10px;
    }
    .side-menu{
        width: 25%;
        border-radius: 10px;
        padding: 20px;
    }
    .side-menu li{
        cursor: pointer;
        border-bottom: 1px solid rgb(225, 222, 222);
        border-radius: 10px;
        font-size: 17px;
        font-weight: 500;
        padding-right: 15px;
        padding-left: 15px;
    }
    .side-menu li:hover{
        background-color: #E5E7EB;
    }
    .side-menu li a:hover{
        color: var(--darkblue);
    }
    .right-slider{
        width: 75%;
    }
    .child-category{
        position: static !important;
        margin-top: 5px;
        display: none !important;
        overflow: hidden;
        height: 0;
        transition: height 0.5s ease-out;
    }
    .child-category li{
        cursor: pointer;
    }
    .child-category li:hover{
        background-color: #F3F4F6;
    }
    .child-category li a{
        font-size: 15px;
    }
    .toggle{
        display: block !important;
        height: auto;
    }
    .category .fa-chevron-down{
        float: right;
        font-size: 13px;
        margin-top: 3px;
    }


    @media (max-width: 768px) {
        
    }
</style>

@endpush


{{-- banner 2 --}}
<section class="banner2-section py-2">
    <div class="container banner">
        <div class="row d-flex">
            <div class="side-menu">
                <ul class="text-start">
                    <li class="me-2 py-2 category"><a href="#" class="pe-4">Fashion<i class="fa-solid fa-chevron-down ms-1"></i></a>
                        <div class="child-category">
                            <ul>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fasfvdfbdbdghion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="me-2 py-2 category"><a href="#" class="pe-4">Fashion<i class="fa-solid fa-chevron-down ms-1"></i></a>
                        <div class="child-category">
                            <ul>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="me-2 py-2 category"><a href="#" class="pe-4">Fashion<i class="fa-solid fa-chevron-down ms-1"></i></a>
                        <div class="child-category">
                            <ul>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                                <li class="py-2 px-3"><a href="#" class="">Fashion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="me-2 py-2 category"><a href="#" class="pe-4">Fashion</a></li>
                    <li class="me-2 py-2 category"><a href="#" class="pe-4">Fashion</a></li>
                    <li class="me-2 py-2 category"><a href="#" class="pe-4">Fashion</a></li>
                </ul>
            </div>
            <div class="right-slider">
                <div class="card">
                    <div class="banner">
                        <div class="slider">
                            <img src="{{ asset('uploads/banner/banner1.jpeg') }}" alt="">
                            <img src="{{ asset('uploads/banner/banner1.jpeg') }}" alt="">
                        </div>
                        <div class="slider">
                            <img src="{{ asset('uploads/banner/banner2.jpeg') }}" alt="">
                        </div>
                        <div class="slider">
                            <img src="{{ asset('uploads/banner/banner3.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>