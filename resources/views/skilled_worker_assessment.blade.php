@extends('layout')
@section('content')
    <!--Slider Section Start-->
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="images/banner/form1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--start our classes sections -->
    <!-- About Us Area -->
    <section id="" class=" row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig " style="text-align:left;">
                    <h1 class="welc-text">
                        Skilled Worker</h1><br>
                </div>
                <div class="skilled-worker-form">
                    <div class="row">
                        <div class="col">
                            <div class="pull-left">Main Applicant</div>
                            <div class="pull-right text-danger">Please answer all questions</div>
                        </div>
                    </div>
                    <div class="bg-primary" style="padding: 15px;">
                        <h6>PERSONAL INFORMATION - JUST TO CANADA INC. IS BOUND BY CONFIDENTIALITY OBLIGATIONS. THE
                            INFORMATION
                            SUBMITTED HERE IS TREATED AS STRICTLY CONFIDENTIAL WHEN COMPLETED.</h6>
                    </div>
                    <x-skilled-worker-form />
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
@endsection
