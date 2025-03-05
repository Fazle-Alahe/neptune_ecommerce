@extends('frontend.layout.master')
@section('content')
    <div class="container login-container my-5">
        <div class="row">
                <div class="col-lg-6 login-image text-center">
                    <div class="row pt-5">
                        <div class="col-6 d-flex justify-content-start">
                            <a href="{{route('index')}}" class="ms-3">
                                <img width="150" src="{{ asset('uploads/logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 reg_link d-flex justify-content-end">
                            <a href="{{route('customer.login')}}" class=""><p class=" me-4">Log In</p></a>
                        </div>
                    </div>
                    <img src="{{asset('uploads/login2.jpg')}}" class="shopping-image" alt="">
                </div>
                <div class="col-lg-6 p-5 login-header">
                    <h2>Signup</h2>
                    <p class="form_label">Create a new account</p>
                    <div class="login-form">
                        <form action="">
                            
                            {{-- regular_form($input_name, $name, $type, $placeholder = null) --}}
                            {!! Main::regular_form("first_name", "First Name", "text", "Your first name here...") !!}
                            {!! Main::regular_form("last_name", "Last Name", "text", "Your last name here...") !!}
                            {!! Main::regular_form("email", "Email", "text", "Your email here...") !!}

                            {{-- password_form($name, $id, $input_name) --}}
                            {!! Main::password_form("Password", "password1", "password", "Your password here") !!}
                            {!! Main::password_form("Confirm Password", "con_password", "confirm_password", "Your password here") !!}

                            <div class="mb-3">
                                <button class="form_button">Signup</button>
                            </div>
                            <div class="mb-3 text-center">
                                <p>Already have an account? <a href="{{route('customer.login')}}"><span class="forgot_pass">Login here</span> </a></p>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection