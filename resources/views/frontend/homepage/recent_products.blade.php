

<div class="container-fluid my-5">
    <div class="container">
        <div class="title d-flex align-items-center justify-content-between">
            <h1 class="my-4">Recent Products</h1>
            <p class="show-more">Show more</p>
        </div>
        <div class="row gy-5">
            {{-- <div class="col-6 col-lg-3 col-md-4">
                <div class="product">
                    <div class="product-image">
                        <a href="#"><img src="{{ asset('uploads/banner/banner1.jpeg') }}" alt=""></a>
                        <div class="discount-badge text-center">
                            <span>-17%</span>
                        </div>
                        <div class="category-badge text-center pb-1">
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
                        <div class="row px-2">
                            <div class="col-8 buy-now text-center">
                                <a href="#" class="">Buy Now</a>
                            </div>
                            <div class="col-3 text-center product_cart">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                            <div class="col-3 text-center product_cart">
                                <a href="#"><i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
            {!! Main::product("uploads/products/AC1.png",'Walton WSI-KRYSTALINE-18MH Inverter Split AC Air',  43000, ' ', 'Aircondition', 39000) !!}
            {!! Main::product("uploads/products/rice-cooker.png",'Walton WRC-SGAE280 Rice Cooker - 2.8 Litre',  5400, '-5%', 'Rice Cooker', 4400) !!}
            {!! Main::product("uploads/products/oil1.jpeg",'Arabian Cheetah SAE-HD 50 Motor Engine Oil - 1 Liter', 600, '-7%', 'Oil',  499) !!}
            {!! Main::product("uploads/products/jbl1.png",'JBL Charge 5 Portable Bluetooth Speaker ', 8243, '-9%', 'Speaker',  7324) !!}
            {!! Main::product("uploads/products/mobile1.jpeg",'Orbit Y11 Smart Phone - 2GB RAM - 16GB ROM',  34200,'-11%', 'Smartphone',  33) !!}
            {!! Main::product("uploads/products/grinder1.jpeg",'Multifunctional Stainless Steel Grinder Machine', 3442, '-13%', 'Grinder',  3343) !!}
            {!! Main::product("uploads/products/rice1.png",'Pusti Aromatic Rice - 1Kg', 89, '-10%', 'Rice',  84) !!}
            {!! Main::product("uploads/products/tv1.png",'Electro 43ES1 4K Smart Eye Protector Android LED TV - 43 Inch', 43000, '-2%', 'TV',  41999) !!}
        </div>
    </div>
</div>
