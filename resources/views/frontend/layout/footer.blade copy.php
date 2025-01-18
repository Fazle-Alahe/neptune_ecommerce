<style>

:root {
        --notwhite: #F9F9F9;
        --pinkwhite: #faf0e6;
        --darkblue: #0b1b32;
        --theme: #b4182d;
        --violet: #54162b;
        --ftext: #cdc8c8;
        }

    .fot-col{
        width: 24%;
    }
    .footer-section{
        background-color: var(--darkblue);
    }
    .footer-section p{
        color: var(--ftext);
    }
    .footer-section .contact a{
        color: var(--ftext) !important;
        font-size: 18px !important;
    }
    .footer-section .contact a:hover{
        color: var(--pinkwhite) !important;
    }
    .footer-section .contact p{
        font-size: 18px;
    }
    .footer-section h4{
        color: var(--ftext);
    }
    .footer_hr{
        margin-bottom: 10px;
    }
    .social-media a{
        color: var(--ftext) !important;
        font-size: 28px !important;
    }
    .footer-top{
        border-bottom: 1px solid var(--ftext);
    }

    /* responsive */
    @media (max-width: 992px) {
        .footer-section .contact p{
            font-size: 16px;
        }
        .footer-section .contact a{
            font-size: 16px !important;
        }
        .footer-logo p{
            font-size: 15px;
        }
        .footer-section h4{
            font-size: 20px;
        }
        .contact i{
            margin-right: 10px !important;
        }
    }


    @media (max-width: 768px) {
        .footer-bottom p{
            font-size: 14px;
        }
    }
</style>




{{-- footer section --}}
<section class="footer-section container-fluid">
    <div class="container footer-top py-5">
        <div class="row">
            <div class="fot-col footer-logo">
                <a href="#" class="">
                    <img class="mb-3" width="180" src="{{asset('uploads/logo.png')}}" alt="">
                </a>
                <p>Neptune is your ultimate online shopping destination,
                 offering a seamless e-commerce experience with a wide range of high-quality products.
                 Neptune provides customers with a curated selection of top-notch items at competitive prices.</p>
            </div>
            <div class="fot-col mt-2">
                <h4 class="">Contact Us</h4>
                <hr class="footer_hr">
                <div class="contact pt-2">
                    <p><i class="fa-regular fa-envelope me-3"></i>neptune@gamil.com</p>
                    <p class="mt-2"><i class="fa-solid fa-phone me-3"></i>+8801863000000</p>
                    <p class="mt-2"><i class="fa-solid fa-location-dot me-3"></i>+583 Shamim Sarani, Mirpur, Dhaka, Bangladesh</p>
                </div>
            </div>
            <div class="fot-col mt-2">
                <h4 class="">Customers Account</h4>
                <hr class="footer_hr">
                <div class="contact pt-2">
                    <p class=""><a href="#">Sign In</a></p>
                    <p class="mt-2"><a href="#">Create New Account</a></p>
                    <p class="mt-2"><a href="#">My Shopping Cart</a></p>
                    <p class="mt-2"><a href="#">My Orders</a></p>
                    <p class="mt-2"><a href="#">User Dashboard</a></p>
                </div>
            </div>
            <div class="fot-col mt-2">
                <h4 class="">Related Page</h4>
                <hr class="footer_hr">
                <div class="contact pt-2">
                    <p class=""><a href="#">Returns & Refund Policy</a></p>
                    <p class="mt-2"><a href="#">Terms & Condition</a></p>
                </div>
                <div class="social-media mt-4">
                    <a href="#"><i class="fa-brands fa-facebook me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-bottom py-3 text-center">
        <p>Copyright © 2025 • Cyber World IT • All Rights Reserved </p>
    </div>
</section>



<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('frontend/js/all.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>