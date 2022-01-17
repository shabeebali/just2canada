@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal2.jpg') }}" alt="">
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
                        Skilled Worker <a href="{{ route('personal-immigration') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>




                Under the skilled worker immigration category, the program has set out the minimum requirement for
                professional work experience, language ability in English, French, (or both), and education. The Applicant’s
                eligibility determinants are assessed based on a better job offer and adaptability factor/s.
                <br>
                <br>

                These factors are part of a 100 point great used to assess eligibility for the Federal Skilled Worker
                Program.
                <br>
                <br>

                Please note that once the Applicant enters the express entry pool, a different system of ranking the profile
                takes over. The highest-ranking candidates from the pool are issued the Invitation To Apply (ITA). It is
                worthwhile to note that you are assessed based on the national occupation classification groups, which are
                one of the following:
                <br>
                <br>
                <ul class="inner2">

                    <li><strong>NOC O</strong> – Managerial jobs</li>
                    <li><strong>NOC A</strong> – Professional jobs</li>
                    <li><strong>NOC B</strong> – Technical jobs and skilled trades.</li>
                </ul>
                <br>
                <br>

                Throughout our extensive experience, we have noticed that many applicants make a severe mistake in assessing
                their expertise related to their immigration qualifications.
                <br>
                <br>
                The Applicant must provide evidence that while working in the primary occupation, he or she performed the
                duties in the same type of job that has the same profession.
                <br>
                <br>
                Hence assessing the application requires a careful review of each qualifying factor.
                <br>
                <br>
                There are other mandatory factors as well that need consideration.
                <br>
                <br>
                We will be happy to discuss these matters with you on a one-to-one basis and provide you proper consultation
                to assess your application.
            </div>
        </div>
    </section>
@endsection
