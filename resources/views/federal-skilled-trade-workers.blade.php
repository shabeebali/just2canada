@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig " style="text-align: left; visibility: hidden; animation-name: none;">
                    <h1 class="welc-text">
                        Federal Skilled Trade Workers <a href="{{ route('personal-immigration') }}"
                            class="backlink pull-right"><i class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                This program is for people in technical trades who wish to become permanent residents of Canada.
                <br>
                <br>
                These trades include industrial, electrical and construction, maintenance and equipment operations,
                agriculture and production, processing, transport, manufacturing, cooks and chefs, bakers, and butchers.
                <br>
                <br>
                There are licensing requirements in many of the trades. We have extensive experience in soliciting skilled
                trade applications and will be happy to assist in this category. As well, each province in Canada has its
                licensing requirements.
                <br>
                <br>
                Please note, for example, that there are minimum requirements to meet under the language proficiency levels,
                and an English proficiency test is a mandatory requirement.
                <br>
                <br>
                In the Federal Skilled Worker program, the minimum reading, writing, speaking, and listening requirement is
                CLB 7 in the English language.
                <br>
                <br>
                In the Canadian Experience Class program, the minimum level of reading, writing, speaking, and listening
                under NOC 0 and A is CLB 7, and under NOC B, it is CLB 5.
                <br>
                <br>
                In the Federal Skilled Trades Program, the English language proficiency requirements are more relaxed. To be
                eligible to apply, one must score CLB 5 in speaking and listening and CLB 4 in reading and writing.
                <br>
                <br>
                Again, there are various other considerations. Please contact us directly so we can assess your immigration
                qualifications. Each application is different from the other. Hence the assessment differs.
            </div>
        </div>
    </section>
@endsection
