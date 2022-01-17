@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal.jpg') }}" alt="">
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
                        Personal Immigration</h1><br>
                </div>
                <div class="row ">
                    <div class="col-md-4">
                        <a href="{{ route('express-entry-canada') }}" class="ser-icon-box">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal1.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Express Entry Canada</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('skilled-worker') }}" class="ser-icon-box">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal2.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Skilled Worker</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('federal-skilled-trade-workers') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal3.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Federal Skilled Trade Workers</p>
                        </a>
                    </div>
                    <p class="clearfix"></p>
                    <br>
                    <br>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('provincial-nominee-immigration') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal4.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Provincial Nominee Immigration</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('labour-market-impact-assessment') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">LABOUR MARKET IMPACT ASSESSMENT </p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('lmia-employers-service') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">LMIA – EMPLOYER SERVICES </p>
                        </a>
                    </div>
                    <p class="clearfix"></p>
                    <br>
                    <br>
                    <div class="col-md-2"></div>

                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('work-permits') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Work Permits</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('bridging-open-work-permits') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/personal8.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Bridging Open Work Permit</p>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
