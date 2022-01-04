@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/ser2.jpg') }}" alt="">
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
                        Service United States <a href="{{ route('services') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                <h3>USA Immigration Visa Services.</h3>
                We provide integrated legal solutions to complex problems that permit our clients to achieve USA immigration
                visa services — working with our attorneys in multiple practice groups, including Corporate, International,
                Real Estate, Tax, and Wealth Planning. We represent companies and individuals concerning non-immigrant and
                permanent / “green card” employment-based, family-based, naturalization, and derivative citizenship
                matters.<br>
                <br>
                Our experience ranges from start-ups, small – to medium-size enterprises (SMEs), and public companies that
                employ individuals that need U.S. visa options to grow and expand their business; families who wish to live
                in the U.S. temporarily and/ permanently; and persons who want to acquire U.S. citizenship.
                <br>
                <br>
                <strong>USA Immigration Visa ServicesNon-immigrant visas including</strong><br>
                <ul class="inner2">
                    <li>B-1/B-2 visitors for business and pleasure;</li>
                    <li>F-1 students;</li>
                    <li>E-1 treaty traders for goods and services,</li>
                    <li>E-2 treaty investors;</li>
                    <li>E-3 for Australian citizens;</li>
                    <li>H-1B and H1B1 specialty occupation;</li>
                    <li>L-1 intracompany transferee;</li>
                    <li>L-1 blanket petitions; O-1 extraordinary ability,</li>
                    <li> P-1 athletes and entertainers,</li>
                    <li>R-1 religious workers, and</li>
                    <li>TN Visas</li>
                </ul>
                <strong>Immigrant visas including</strong><br>
                <ul class="inner2">
                    <li>EB-1(A) extraordinary ability,</li>
                    <li>EB-1(B) outstanding foreign researchers or professors,</li>
                    <li>EB-1(C) managers and executives transferred from multinational corporations,</li>
                    <li>EB-2 professionals holding an advanced degree with a U.S. job,</li>
                    <li>EB-2 National Interest Waiver,</li>
                    <li>EB-3 professional workers,</li>
                    <li>EB-5 immigrant investors</li>
                </ul>
                <strong>Strategic planning concerning immigration consequences of formation, disposition, and reorganization
                    of U.S. businesses</strong><br>
                <ul class="inner2">
                    <li>Consular processing for non-immigrant and immigrant visas</li>
                    <li>Family-based immigration matters</li>
                    <li>Complex naturalization and derivative citizenship matters</li>
                </ul>
                <div class="blue-box">
                    <h3>For tested solutions to any of the United States immigration matters, please email us at
                        USA@MyVisas.org.</h3>
                    <strong>Additional information for Canadian Immigration</strong><br>
                    <br>
                    With 28 years of experience in various Canadian immigration matters, Just2Canada practice spans multiple
                    immigration categories and programs. However, the most important aspect of immigration practice is the
                    practitioner’s exposure to soliciting various applications.<br>
                    <br>
                    When an applicant completes the questionnaire, we closely assess the applicant’s Canadian immigration
                    qualifications keeping in mind. Read more about immigration to Canada and more.
                </div>
            </div>
        </div>
    </section>
@endsection
