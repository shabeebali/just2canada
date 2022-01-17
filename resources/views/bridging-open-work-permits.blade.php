@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal7.jpg') }}" alt="">
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
                        Bridging Open Work Permit (BOWP)<a href="{{ route('personal-immigration') }}"
                            class="backlink pull-right"><i class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                The BOWP allows individuals who are already working in Canada with a work permit to extend their stay as
                they standby for a decision on their permanent residency. BOWP is readily available to those who have placed
                a submission for permanent residency, as well as having an active work permit in place. Getting approval for
                BOWP enables an open work permit, giving the individual access to work for multiple employers in as many
                locations they want.
                <br>
                <br>
                Being eligible for a BOWP includes having an active work permit which expires in 4 months or less, a
                submitted permanent residence application and currently living in Canada. It is important to note however,
                not all permanent residence programs give eligibility to BOWP.
                <br>
                <br>
                If an individual’s current work permit expires while a decision is pending for their BOWP application, there
                is a chance to continue work in Canada under implied status. Once a decision is approved, they may continue
                with their work. However, a denied application would cause the individual to stop working in Canada
                effective immediately. Continuing to work with an expired work permit can have serious implications on
                future immigration applications.
                <br>
                <br>
                <h3>LET US HELP</h3>
                Just To Canada can help aid you in every process to ensure you get the correct permits you need. We can help
                make the process as smooth as possible, whether you’re a student, visitor or skill worker. Our goal is to
                make the process seamless, and find the best pathway for your situation to come to Canada.
            </div>
        </div>
    </section>
@endsection
