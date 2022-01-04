@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/service.jpg') }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="  our_services_area row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig" style="text-align: left; visibility: visible;">
                    <h1 class="welc-text">
                        Services</h1><br>
                </div>
                <div class="row ">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <a class="thumb-corporate" href="{{ route('canada') }}">
                            <div class=" "><img src="{{ asset('images/canada-flag.jpg') }}" alt="">
                            </div>
                        </a>
                        <p class="thumb-corporate__title">Canada</p>

                    </div>
                    <div class="col-md-4">
                        <a class="thumb-corporate" href="{{ route('united-states') }}">
                            <div class=" "><img src="{{ asset('images/us-flag.jpg') }}" alt="">
                            </div>
                        </a>
                        <p class="thumb-corporate__title">United States</p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
