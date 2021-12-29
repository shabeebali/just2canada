@extends('layout')
@section('content')
    <!--Slider Section Start-->
    @include('components.home.slider')
    <!--start our classes sections -->
    <!-- About Us Area -->
    @include('components.home.about_us')
    <!-- End About Us Area -->
    @include('components.home.consultation_block')
    @include('components.home.quick_links')
    @include('components.home.our_services')
    @include('components.home.testimonial')
    @include('components.home.request_callback')
    @include('components.home.team')
    @include('components.home.contact')
@endsection
