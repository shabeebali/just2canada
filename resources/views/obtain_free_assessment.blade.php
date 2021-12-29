@extends('layout')
@section('content')
    <!--Slider Section Start-->
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="images/banner/assessment.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--start our classes sections -->
    <!-- About Us Area -->
    <section id="aboutus" class="  our_services_area row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig " style="text-align:left;">
                    <h1 class="welc-text">
                        Obtain Free Assessment</h1><br>
                </div>
                <div class="tittle">
                    <h3 style="text-align:center;">Best 5 minutes you will ever invest in changing your life! </h3><br>
                    <br>
                </div>
                <div class="row ">
                    <div class="col-md-4">
                        <a class=" ser-icon-box2" href="{{ route('skilled-worker-assessment') }}">
                            <div class=" "><img src="images/form-icon.png" alt="">
                            </div><br>

                            <p class="thumb-corporate__title">Skilled Worker</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class=" ser-icon-box2" href="business-immigration-assessment.php">
                            <div class=" "><img src="images/form-icon.png" alt="">
                            </div><br>
                            <p class="thumb-corporate__title">Business Immigration</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="ser-icon-box2 " href="we-can-help.php">
                            <div class=" "><img src="images/form-icon.png" alt="">
                            </div><br>
                            <p class="thumb-corporate__title">Not sure about your category? <br>We can help</p>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
