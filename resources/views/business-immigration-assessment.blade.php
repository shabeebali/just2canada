@extends('layout')
@section('content')
    <!--Slider Section Start-->
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="images/banner/form2.jpg" alt="">
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
                        Business Immigration Assessment</h1><br>
                </div>
                <div class="skilled-worker-form">
                    <div class="form-div">
                        <h4>CONFIDENTIAL WHEN COMPLETED.</h4>
                        Just To Canada case assessment specialists will use the collected information from this form to
                        assess all Canadian immigration possibilities. None of the information will be shared with any third
                        parties for any purposes whatsoever.
                        <br>
                        <br>
                        <div class="form-inner">
                            <x-business-immigration-form />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
@endsection
