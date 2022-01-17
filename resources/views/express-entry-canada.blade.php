@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal1.jpg') }}" alt="">
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
                        Express Entry Canada <a href="{{ route('personal-immigration') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                Express Entry is considered one of the most efficient ways to enter the country for immigrants who are
                looking for a fresh start in Canada. The application has a wide variety of requirements ranging from
                language proficiency to work experience in Canada. With close to 3 decades of expertise, our professionals
                at Just To Canada can help guide you through this process in order to achieve an accurate score.
                <br>
                <br>
                <h3>HOW TO APPLY</h3>
                <strong>The application process begins with submitting a profile which needs to contain the following
                    documents:</strong>
                <ul class="inner2">
                    <li>Travel or Passport Document</li>
                    <li>Language Proficiency Test Results</li>
                    <li>Educational Credential Assessment Report</li>
                </ul>
                Once a submission has been placed, an invitation to apply for permanent residence will be acquired. This
                part of the application involves giving more in-depth information including, reference letters, a police
                clearance certificate, results of a medical examination, as well as additional identification documents. Our
                professionals at Just to Canada will take you through the application process and provide you with clarity
                on any roadblocks or confusion that may occur.
                <br>
                <br>
                <h3>ELIGIBILITY AND REQUIREMENTS</h3>
                Eligibility for express entry include persons with post-secondary degrees and having skilled work
                experience. Having an ideal ability at speaking English and/or French is also needed to be considered a
                potential candidate. Persons who qualify for the Federal Skilled Worker, Federal Skilled Trades or Canadian
                Experience Class programs also gain eligibility to apply for the Express Entry program.
                <br>
                <br>
                In regards to requirements needed for Express Entry, workers need to have had 1 year of consistent and
                continuous full time work experience in a skilled occupation, within the last 10 years. It is also required
                to have a minimum of a 7 in the language test (ranked by the Canadian Language Benchmark) and the total
                completion of a post-secondary program approved by an Educational Credential Assessment.
                <br>
                <br>
                Ideally, while it is okay to meet the minimum requirements, the workers with stronger profiles will always
                be selected because of their richer work experience and educational certificates. Things such as being under
                the age of 30, having multiple Bachelor’s degrees or a Master’s degree, and having several years of skilled
                work experience all raise that individuals’ chances at being selected for an application. Candidates are
                ranked using the Comprehensive Ranking System (CRS) and are ranked higher or lower based on the factors
                discussed above.
                <br>
                <br>
                The Federal Skilled Worker must score a minimum of 67 points to gain the invitation to apply for Express
                Entry. Here at Just to Canada we can help you achieve the best score you possibly can, giving you the best
                chance to rank high and be invited to apply for Express Entry.
                <br>
                <br>
                <h3>POTENTIAL COSTS</h3>
                While there are no fees for the initial Express Entry profile, fees are requested by the government when
                applying for permanent residence in Canada. Also, sufficient funds are required in order to enter the
                program. For example, a family of 2 needs a minimum of
                $16,449, these are not fees to pay the government but instead settlement funds required when resettling into
                Canada. The more family members, the higher the settlement fund.
                <br>
                <br>
                <strong>In terms of costs, tests and fees for the Express Entry program, here is the following things needed
                    and the average cost:</strong>
                <ul class="inner2">
                    <li>Educational Credential Assessment - $200 (Average Cost)</li>
                    <li>Language Test - $300 (Average Cost)</li>
                    <li>Police Clearance Certificate - $100 (Average Cost)</li>
                    <li>Government Fees - $1325 Per Adult &amp; $225 Per Child</li>
                    <li>Medical Examination Fees - $450 Per Adult &amp; 250 Per Child</li>
                    <li>Biometrics - $85 Per Individual</li>
                </ul>
                <h3>FAQS ABOUT EXPRESS ENTRY</h3>
                <div id="firstpane" class="menu_list">
                    <p class="menu_head">How long does the process take?</p>
                    <div class="menu_body" style="display: block;">Express Entry can be as fast as 6 months for the
                        complete process to go through. In some cases, it could take up 12 months. If after a year you have
                        not been invited to apply, you may resubmit your profile.
                    </div>
                    <p class="menu_head">Do I need to be working or have work lined up to apply?</p>
                    <div class="menu_body" style="">You do not need a job or a job offer when applying as most who are
                        applying for Express Entry don’t have either. However, those who do a have a formal job offer lined
                        up will benefit greatly when being ranked.
                    </div>
                    <p class="menu_head">Is there an age cut off for applying to Express Entry?</p>
                    <div class="menu_body" style="">No, there is no age cut off for applicants. Those between the age
                        of 20-29 do receive the highest point of age, but those who are older can make up for lost points
                        through work and educational experience.
                    </div>
                    <p class="menu_head">Can I apply twice to Express Entry?</p>
                    <div class="menu_body" style="">No, you cannot have two applications at the same time. You may
                        resubmit your profile only after a year of not receiving an invitation to apply.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
