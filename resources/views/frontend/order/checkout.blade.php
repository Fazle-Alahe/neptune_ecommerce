@extends('frontend.layout.master')
@section('content')
    <style>
        .required-star {
            color: red;
        }

        .checkout-card {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .checkout-cart {
            width: 100%;
            padding: 20px 0 15px;
            border-bottom: 1px solid rgb(211, 210, 210);
        }

        .checkout-cart p {
            margin-bottom: 0;
        }

        .form-section-title {
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .radio-group {
            gap: 15px;
        }

        .btn-primary {
            width: 100%;
            padding: 15px;
            font-size: 1.2rem;
            border-radius: 10px;
        }

        .checkout-card img {
            width: 80px;
            height: 60px;
        }

        .shipping-form label {
            font-weight: 600;
        }

        .shipping-form .form-check-label {
            font-weight: 400;
            font-size: 15px;
        }

        .form-check-input:checked {
            background-color: #54162B;
            border-color: #54162B;
            outline: none;
        }

        .checkout-card .item-quantity button,
        .checkout-card .cart-details .quantity {
            background-color: white;
        }

        .checkout-card .item-quantity button:hover {
            color: white;
            background-color: var(--violet);
        }

        .coupon-input {
            position: relative;
        }

        .coupon {
            position: absolute;
            top: 0;
            right: 0;
        }

        .coupon-button {
            border: 1px solid var(--violet);
            border-radius: 5px;
            background-color: var(--violet);
            color: white;
            padding: 8px 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .coupon-button:hover {
            color: var(--violet);
            background-color: white;
        }

        .list-group-item {
            border: none;
        }

        .checkout-total {
            border-top: 1px solid var(--darkblue) !important;
        }

        .checkout-total span {
            color: var(--darkblue);
            font-size: 20px;
            font-weight: 600;
        }

        @media (max-width: 450px) {

            .checkout-card .cart-image {
                margin-right: 15px;
            }
        }
    </style>

    <div class="container my-5">
        <div class="row g-5">

            <!-- Shipping Form -->
            <div class="col-lg-7">
                <div class="checkout-card">
                    <div class="form-section-title mb-3">Shipping Information</div>
                    <form class="shipping-form">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name <span class="required-star">*</span></label>
                            <input type="text" class="form-control" id="fullName" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address <span
                                    class="required-star">*</span></label>
                            <input type="email" class="form-control" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number <span
                                    class="required-star">*</span></label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="country" class="form-label">Country <span
                                        class="required-star">*</span></label>
                                <select id="country" class="form-select" required>
                                    <option selected disabled>Choose Country</option>
                                    <option>USA</option>
                                    <option>Canada</option>
                                    <option>UK</option>
                                    <option>India</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City <span class="required-star">*</span></label>
                                <input type="text" class="form-control" id="city" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="state" class="form-label">State <span class="required-star">*</span></label>
                                <input type="text" class="form-control" id="state" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="zip" class="form-label">ZIP Code <span
                                        class="required-star">*</span></label>
                                <input type="text" class="form-control" id="zip" required>
                            </div>
                        </div>

                        <!-- Inside or Outside City -->
                        <div class="mb-4">
                            <label class="form-label">Shipping Area <span class="required-star">*</span></label>
                            <div class="d-flex radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shippingArea" id="insideCity" value="80"
                                        checked>
                                    <label class="form-check-label" for="insideCity">Inside Dhaka</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shippingArea" id="outsideCity" value="100">
                                    <label class="form-check-label" for="outsideCity">Outside Dhaka</label>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-4">
                            <label class="form-label">Payment Method <span class="required-star">*</span></label>
                            <div class="d-flex radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="cod"
                                        checked>
                                    <label class="form-check-label" for="cod">Cash on Delivery</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="gateway">
                                    <label class="form-check-label" for="gateway">Pay with Gateway</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terms" required>
                            <label class="form-check-label" for="terms">
                                I have read and agree to the Terms and Conditions.
                            </label>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Cart Review -->
            <div class="col-lg-5">
                <div class="checkout-card">
                    <div class="form-section-title">Review Your Cart</div>


                    <div class="checkout-cart d-inline-flex">
                        <div class="cart-image mx-3">
                            <img src="{{ asset('uploads/banner/banner1.jpeg') }}" alt="" class="rounded">
                        </div>
                        <div class="cart-details me-2">
                            <a href="#">
                                <p title="Stylish pink coatcvsdfvgsdgfv">Women T-shirt...</p>
                            </a>
                            <div class="item-quantity d-flex mt-2">
                                <button class="decrease px-2 d-flex align-items-center">-</button>
                                <input type="number" value="1" class="quantity text-center mx-2" min="1"
                                    readonly>
                                <button class="increase px-2 d-flex align-items-center">+</button>
                            </div>
                        </div>
                        <div class="cart-price mx-2 text-center">
                            <i class="fa-solid fa-trash trash"></i>
                            <p class="pt-2">&#2547;<span class="price">11000</span></p>
                        </div>
                    </div>
                    <div class="checkout-cart d-inline-flex">
                        <div class="cart-image mx-3">
                            <img src="{{ asset('uploads/banner/banner3.jpeg') }}" alt="" class="rounded">
                        </div>
                        <div class="cart-details me-2">
                            <a href="#">
                                <p title="Stylish pink coatcvsdfvgsdgfv">GUCCI HORSEBIT CHAINc...</p>
                            </a>
                            <div class="item-quantity d-flex mt-2">
                                <button class="decrease px-2 d-flex align-items-center">-</button>
                                <input type="number" value="1" class="quantity text-center mx-2" min="1"
                                    readonly>
                                <button class="increase px-2 d-flex align-items-center">+</button>
                            </div>
                        </div>
                        <div class="cart-price mx-2 text-center">
                            <i class="fa-solid fa-trash trash"></i>
                            <p class="pt-2">&#2547;<span class="price">21000</span></p>
                        </div>
                    </div>
                    <div class="checkout-cart d-inline-flex">
                        <div class="cart-image mx-3">
                            <img src="{{ asset('uploads/banner/banner2.jpeg') }}" alt="" class="rounded">
                        </div>
                        <div class="cart-details me-2">
                            <a href="#">
                                <p title="Stylish pink coatcvsdfvgsdgfv">Stylish pink coatc...</p>
                            </a>
                            <div class="item-quantity d-flex mt-2">
                                <button class="decrease px-2 d-flex align-items-center">-</button>
                                <input type="number" value="1" class="quantity text-center mx-2" min="1"
                                    readonly>
                                <button class="increase px-2 d-flex align-items-center">+</button>
                            </div>
                        </div>
                        <div class="cart-price mx-2 text-center">
                            <i class="fa-solid fa-trash trash"></i>
                            <p class="pt-2">&#2547;<span class="price">22100</span></p>
                        </div>
                    </div>

                    <div class="my-3 coupon-input">
                        <input type="text" class="form-control py-2" placeholder="Coupon code">
                        <div class="coupon">
                            <button class="coupon-button">Apply</button>
                        </div>
                    </div>

                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>$45.00</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Shipping</span>
                            <strong><span>&#2547;<span class="shipping-charge"></span></span></strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Discount</span>
                            <strong class="text-success">- $10.00</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between checkout-total">
                            <span>Total</span>
                            <span>&#2547;<span class="checkout-subtotal"></span></span>
                        </li>
                    </ul>

                    <button class="w-100 coupon-button">Pay Now</button>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            <i class="bi bi-shield-lock"></i> Secure Checkout - SSL Encrypted
                        </small>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </html>
@endsection
