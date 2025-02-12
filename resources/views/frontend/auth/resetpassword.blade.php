@extends('frontend.layout.master')
@section('content')
    <div class="container login-container my-5">
        <div class="row">
                <div class="col-lg-6 login-image text-center">
                    <div class="row pt-5">
                        <div class="col-6 nep_logo d-flex justify-content-start">
                            <a href="{{route('index')}}" class="ms-3">
                                <img width="150" src="{{ asset('uploads/logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 nep_logo reg_link d-flex justify-content-end">
                            <a href="{{route('user.register')}}" class=""><p class=" me-4">Create account</p></a>
                        </div>
                    </div>
                    <img src="{{asset('uploads/login2.jpg')}}" class="shopping-image" alt="">
                </div>
                <div class="col-lg-6 p-5 my-5 login-header">
                    <h2>Reset Password</h2>
                    <p class="form_label mb-3">Reset your account password</p>
                    <div class="login-form">
                        <form action="">
                            {{-- regular_form($input_name, $name, $type, $placeholder = null) --}}
                            {!! Main::regular_form("email", "Email", "text", "demo@gmail.com") !!}
                            
                            <div class="mb-3">
                                <button type="submit" class="form_button">Reset</button>
                            </div>
                            <div class="mb-3 text-center">
                                <p>Don't have an account? <a href="#"><span class="forgot_pass">Create free account</span> </a></p>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection