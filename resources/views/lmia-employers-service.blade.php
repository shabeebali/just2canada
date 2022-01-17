@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig" style="text-align: left; visibility: visible;">
                    <h1 class="welc-text">
                        LMIA – EMPLOYER SERVICES <a href="{{ route('personal-immigration') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                <h3>Employer’s assistance to hire and process foreign workers.</h3>
                <h3>LMIA – Processing &amp; Work Permits</h3>
                For years we have been assisting Canadian employers with the recruitment and processing of temporary foreign
                workers.
                <br>
                <br>
                The LMIA (Labour Market Impact Assessment) process is complex and requires a detailed study of the
                employer’s business. Hiring a temporary foreign worker requires documented evidence of advertisement for
                that position with the Job Bank and other employment websites. Service Canada officials would evaluate all
                announcements and the responses received from Canadian citizens and permanent residents. The advertisements
                must run for at least one month.
                <br>
                <br>
                We have been assisting various small and large businesses inside and outside the Greater Toronto Area,
                Saskatchewan, Alberta, and British Columbia in the entire foreign worker’s recruitment process from around
                the world.<br>
                <br>
                <h3>LMIA – Arranged employment, leading to permanent residence in Canada.</h3>
                Another category under the LMIA supports the applicant’s request for permanent residence in Canada. Foreign
                workers can help employers meet their labor needs when Canadians and permanent residents are not available.
                As part of this process, the government supports higher-skilled foreign workers based on their potential to
                become economically established in Canada and to assist employers in meeting their skilled labor shortages.
                <br>
                <br>
                Employers who wish to hire skilled foreign workers and support their permanent resident visa application can
                make a job offer under Immigration, Refugees and Citizenship Canada (IRCC) Express Entry system. The job
                offer for the economic immigration program must meet the listed criteria. Contact us for more details.
            </div>
        </div>
    </section>
@endsection
