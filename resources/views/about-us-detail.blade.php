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
            <div class="row about_row" style="padding-top:0;">
                <div class="col-md-6 col-sm-6 about_client wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <img src="{{ asset('images/wel-img.jpg') }}" alt="">
                </div>
                <div class="who_we_area col-md-6 col-sm-6">
                    <div class="tittle wow fadeInUpBig"
                        style="text-align: left; visibility: visible; animation-name: fadeInUpBig;">
                        <h3>Who are we?</h3>
                        <h2 class="welc-text">
                            SINCE 1993, MR. LAL FROM JUST TO CANADA HAS BEEN OFFERING IMMIGRATION SERVICES TO HUNDREDS OF
                            CLIENTS FROM AROUND THE WORLD.</h2>
                    </div>
                    <p>
                        Just To Canada is a top-of-the-line immigration services firm designed to effectively aid foreign
                        nationals on the best route for them to take when immigrating to Canada. For almost 3 decades, Just
                        To Canada has flowered its expertise in all aspects of immigration services. Considerable and
                        reputable, Just To Canada is one of the best Licensed Canadian Immigration Practitioner in the
                        country.
                        <br>
                        <br>
                        No matter the pathway you are looking to take, whether that be Express Entry, open work permits or
                        business visas; here at Just To Canada we find the most effective route for you to immigrate to
                        Canada as smoothly as possible. Our team prides ourselves on making your transition as efficient as
                        can be, as well as helping you achieve the status you are looking to gain here in Canada.
                        <br>
                        <br>
                        Let us help you embrace the future, and find your way into your new life – reach out to Just To
                        Canada today!
                    </p>
                    <a href="{{ route('obtain-free-assessment') }}" class="btn"> Obtain Free Assessment</a>
                </div>
            </div>
        </div>
    </section>
    <div class="bottom-icon-div">
        <div class="container bg-texture1 wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-md-12">
                <center>
                    <div class="tittle wow fadeInUpBig" style="visibility: visible; animation-name: fadeInUpBig;">
                        <h3>HOW WE HELP CLIENTS</h3>
                        <h2>
                            Apply for visas in 3 simple steps</h2><br>
                    </div>
                    When in doubt, feel free to contact us and we will be happy to help you.
                </center>
                <br>
                <br>
                <div class="col-md-4">
                    <a href=" ">
                        <div class="bot-icon-sec">
                            <img src="{{ asset('images/bot-icon1.png') }}" class="bot-img">
                            <h2>Step 1 <br>

                                <span>Obtain FREE assessment </span>
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href=" ">
                        <div class="bot-icon-sec">
                            <img src="{{ asset('images/bot-icon2.png') }}" class="bot-img">
                            <h2>Step 2<br>

                                <span>Select your pathway and submit documents</span>
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href=" ">
                        <div class="bot-icon-sec">
                            <img src="{{ asset('images/bot-icon3.png') }}" class="bot-img">
                            <h2>Step 3<br>

                                <span>Get ready to
                                    receive your vis </span>
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="about_us_area row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="who_we_area col-md-12 col-sm-6">
                    <center>
                        <div class="tittle wow fadeInUpBig"
                            style="text-align: center; visibility: visible; animation-name: fadeInUpBig;">
                            <h3>Contact us now for</h3>
                            <h2 class="welc-text">
                                Countless Benefits &amp; Easy Processing</h2><br>
                        </div>
                    </center>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <a href=" ">
                            <div class="bot-icon-sec">
                                <img src="{{ asset('images/bot-icon4.png') }}" class="bot-img">
                                <h2>Legal Immigration Success </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href=" ">
                            <div class="bot-icon-sec">
                                <img src="{{ asset('images/bot-icon5.png') }}" class="bot-img">
                                <h2>Required Documents Support </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutus" class="about-box row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="who_we_area col-md-6 col-sm-6">
                    <img src="{{ asset('images/about-img3.jpg') }}">
                </div>
                <div class="who_we_area col-md-6 col-sm-6">
                    <br>
                    <br>
                    <div class="tittle wow fadeInUpBig"
                        style="text-align: left; visibility: visible; animation-name: fadeInUpBig;">
                        <h3>Get FREE online visa assessment today!</h3>
                        <h2 class="welc-text">
                            Top-rated by customers &amp; immigration firms with a high success rate.</h2><br>

                        <a href="{{ route('skilled-worker-assessment') }}" class="btn"> Apply Visa Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
