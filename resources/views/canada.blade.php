@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/ser1.jpg') }}" alt="">
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
                        Service Canada <a href="{{ route('services') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i>
                            Back</a></h1><br>
                </div>
                <h3>IMMIGRATION CANADA</h3>
                With 28 years of experience in various Canadian immigration matters, our practice spans various immigration
                categories and programs.<br><br>
                The most important aspect of immigration practice comes from the practitioner’s exposure in soliciting
                various categories of applications.<br><br>
                When an applicant completes the questionnaire, we closely work towards assessing the applicant’s Canadian
                immigration qualifications keeping in mind<br><br>
                <h3>TOP FIVE CONSIDERATIONS!</h3>
                The applicant’s primary objective in moving to Canada – expansion of business, education, gain experience,
                family, permanent residence, and preferable geographic location where he wishes to settle;<br><br>
                <ul class="inner2">
                    <li>Best possible solution and applicable category</li>
                    <li>Alternative categories, if any</li>
                    <li>Time frames involved in achieving the best possible results</li>
                    <li>Whether the client would meet all the mandatory requirements to qualify.</li>
                </ul>
                <strong>Our immigration practice has evolved around the following categories for over past two
                    decades:</strong><br>
                <br>
                Business category applicants including various International Mobility Programs
                <br>
                <br>
                <strong>Entrepreneur stream – Provincial Nominee Programs</strong>
                <ul class="inner2">
                    <li> Ontario</li>
                    <li>Prince Edward Island</li>
                    <li>Nova Scotia</li>
                    <li>Saskatchewan</li>
                </ul>
                <strong>Canada Startup Visas</strong><br>
                <ul class="inner2">
                    <li>Incubator stream</li>
                    <li>Angel Investor stream</li>
                    <li>Venture Capital stream</li>
                    <li>Significant benefit – R205 (a) C10</li>
                    <li>Entrepreneurs / Self-employed seeking to operate a business in Canada – R205a – C11</li>
                    <li>Intra Company Transfers – R205 (a) Exemption Code C12</li>
                    <li>Business Owner / Operator Program</li>
                    <li>Immigration programs for farmers</li>
                </ul>
                <strong>Skilled Workers</strong><br>
                <ul class="inner2">
                    <li> Express Entry – Express Entry Profile</li>
                    <li>Express Entry – Provincial Nominee Programs</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
