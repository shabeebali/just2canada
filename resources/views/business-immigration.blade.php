@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/business.jpg') }}" alt="">
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
                        Business Immigration</h1><br>
                </div>
                <div class="row ">
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('business-provincial-nominee-immigration') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/business1.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Provincial Nominee Immigration</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('canada-start-up-visa') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/business2.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Canada Start-Up Visa</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('intra-company-transfers') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/business3.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">Intra-Company Transfers (ICT)</p>
                        </a>
                    </div>
                    <p class="clearfix"></p>
                    <br>
                    <br>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <a class="ser-icon-box" href="{{ route('lmia-owner-operators') }}">
                            <div class="thumb-corporate">
                                <div class="thumb-corporate__inner"><img src="{{ asset('images/business4.jpg') }}" alt="">
                                </div>
                            </div>
                            <p class="thumb-corporate__title">LMIA-OWNER/OPERATORS</p>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
