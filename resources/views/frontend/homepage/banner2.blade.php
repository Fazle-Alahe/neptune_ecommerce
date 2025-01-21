@push('banner2')
    
<style>
    .main-header{
        border-bottom: none;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
    }
    .bottom-header{
        display: none !important;
    }
    .banner2-section .slider img{
        width: 100%;
        height: 65vh;
        border-radius: 10px;
    }
    /* .side-bar{
        paddt
    } */
    .side-bar li a:hover{
        color: var(--theme);
    }
    .side-bar .child-menu{
        display: none !important;
    }
    .main-menu .fa-chevron-down{
        float: right;
    }
</style>

@endpush


{{-- banner 2 --}}
<section class="banner2-section">
    <div class="container">
        <div class="row">
            <div class="col-3 side-bar pt-4">
                <ul class="">
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
            <div class="col-9">
                <div class="card">
                    <div class="banner">
                        <div class="slider">
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
