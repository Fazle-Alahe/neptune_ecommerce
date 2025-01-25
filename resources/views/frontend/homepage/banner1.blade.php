<style>
    .slider img{
        width: 100%;
    }

    
    @media (max-width: 768px) { 
        .slider img{
        width: 100%;
        }
    }

    @media (max-width: 576px) { 
        .slider img{
        width: 100%;
        }
    }
</style>



{{-- banner-1 section --}}

<div class="banner">
    <div class="slider">
        <img src="{{asset('uploads/banner/banner1.jpeg')}}" alt="">
    </div>
    <div class="slider">
        <img src="{{asset('uploads/banner/banner2.jpeg')}}" alt="">
    </div>
    <div class="slider">
        <img src="{{asset('uploads/banner/banner3.jpeg')}}" alt="">
    </div>
</div>