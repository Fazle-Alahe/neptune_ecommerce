@extends('frontend.layout.master')
@section('content')
    <div class="container my-5">
        <div class="row">
                <div class="col-lg-6 login-image text-center">
                    <div class="row pt-5">
                        <div class="col-6 d-flex justify-content-start">
                            <a href="#" class="ms-3">
                                <img width="150" src="{{ asset('uploads/logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 reg_link d-flex justify-content-end">
                            <a href="#" class=""><p class=" me-4">Create account</p></a>
                        </div>
                    </div>
                    <img src="{{asset('uploads/login2.jpg')}}" class="mt-4" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>pkfojiojm</h2>
                </div>
        </div>
    </div>
@endsection