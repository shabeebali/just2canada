@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/about.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="about_us_area row">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-4 text-center">
                <a class="ser-icon-box" href="{{ route('about-us-detail') }}">
                    <div class="thumb-corporate">
                        <div class="thumb-corporate__inner"><img src="{{ asset('images/about1.jpg') }}" alt="">
                        </div>
                    </div>
                    <p class="thumb-corporate__title">About Us</p>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a class="ser-icon-box" href="{{ route('our-team') }}">
                    <div class="thumb-corporate">
                        <div class="thumb-corporate__inner"><img src="{{ asset('images/about2.jpg') }}" alt="">
                        </div>
                    </div>
                    <p class="thumb-corporate__title">Our Team</p>
                </a>
            </div>
        </div>
    </section>
@endsection
