@extends('frontend.layout.master')

@section('content')

@include('frontend.homepage.banner1')
{{-- @include('frontend.homepage.banner2') --}}
@include('frontend.homepage.trending')
@include('frontend.homepage.shops')
@include('frontend.homepage.featured')
@include('frontend.homepage.recent_products')
@include('frontend.homepage.payment')

@endsection


