<h1 class="my-5 text-center">Recent Productss</h1>

<div class="container-fluid">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3">
                <div class="product">
                    <div class="product-image">
                        <a href="#"><img src="{{ asset('uploads/banner/banner1.jpeg') }}" alt=""></a>
                        <div class="discount-badge text-center">
                            <span>-17%</span>
                        </div>
                        <div class="category-badge text-center">
                            <a href="#"><span>Category</span></a>
                        </div>
                    </div>
                    <div class="product-title px-3 mt-3">
                        <a href="#"><p>WFE-2H2-GDXX-XX</p></a>
                    </div>
                    <div class="price d-flex px-3 mb-1">
                        <p><s class="discount-price me-2">&#2547;40000</s></p><p>&nbsp; &#2547;35000</p>
                    </div>
                    <div class="product-widget mb-3">
                        <div class="row justify-content-center">
                            <div class="col-6 buy-now text-center">
                                <a href="#" class="">Buy Now</a>
                            </div>
                            <div class="col-2 text-center product_cart me-1">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                            <div class="col-2 text-center product_cart">
                                <a href="#"><i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {!! Main::product("uploads/banner/banner8.jpeg") !!}
            {!! Main::product("uploads/banner/banner3.jpeg") !!}
            {!! Main::product("uploads/banner/banner4.jpeg") !!}
            {!! Main::product("uploads/banner/banner7.jpeg") !!}
            {!! Main::product("uploads/banner/banner5.jpeg") !!}
            {!! Main::product("uploads/banner/banner2.jpeg") !!}
        </div>
    </div>
</div>
