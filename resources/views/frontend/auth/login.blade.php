@extends('frontend.layout.master')
@section('title')
    <x-page-title title="Customer Login" />
@endsection
@section('content')
    <div class="container login-container my-5">
        <div class="row">
            <div class="col-lg-6 login-image text-center">
                <div class="row pt-5">
                    <div class="col-6 d-flex justify-content-start">
                        <a href="{{ route('index') }}" class="ms-3">
                            <img width="150" src="{{ asset('uploads/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 reg_link d-flex justify-content-end">
                        <a href="{{ route('customer.register') }}" class="">
                            <p class=" me-4">Create account</p>
                        </a>
                    </div>
                </div>
                <img src="{{ asset('uploads/login2.jpg') }}" class="shopping-image" alt="">
            </div>
            <div class="col-lg-6 p-5 login-header">
                <h2>Login</h2>
                <p class="form_label">Sign into your account</p>
                <div class="login-form">
                    <form action="">
                        {{-- regular_form($input_name, $name, $type, $placeholder = null) --}}
                        {!! Main::regular_form('email', 'Email', 'text', 'demo@gmail.com') !!}

                        {{-- password_form($name, $id, $input_name) --}}
                        {!! Main::password_form('Password', 'log_password1', 'password') !!}

                        <div class="mb-3">
                            <a href="{{ route('customer.reset.password') }}">
                                <p class="forgot_pass">Forgot password?</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="form_button">Login</button>
                        </div>
                        <div class="mb-3 text-center">
                            <span class="forgot_pass">OR</span>
                        </div>
                        <div class="mb-3">
                            <div class="social-icon text-center">
                                <a href="#">
                                    <i class="fa-brands fa-google s-icon me-2"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-facebook s-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mb-3 text-center">
                            <p>Don't have an account? <a href="{{ route('customer.register') }}"><span
                                        class="forgot_pass">Create free account</span> </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
