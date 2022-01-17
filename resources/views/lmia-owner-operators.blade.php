@extends('layout')

@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/business4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="    row">
        <div class="container">

            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig" style="text-align: left; visibility: visible;">

                    <h1 class="welc-text">
                        LMIA-OWNER/OPERATORS <a href="{{ route('business-immigration') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                If the applicant is prepared to make a substantial investment in the Canadian company and where all of the
                pre-requisites are met with respect to the temporary foreign worker program, an LMIA may be approved under
                this program.
                <br>
                <br>

                The application is evaluated as any other LMIA application and as mentioned, must meet all the requirements.
                The requirement for an investment must be included in the documentation.<br>
                <br>

                <strong>There must be a real job. The new Owner must be taking over a job that is already required in the
                    business, usually tasks the seller was performing on a day to day basis.</strong>
                <br>
                <br>

                Just To Canada has gained extensive experience in soliciting applications under this category.
                <br>
                <br>
                Please contact us to discuss this program and related processing.
            </div>
        </div>
    </section>
@endsection
