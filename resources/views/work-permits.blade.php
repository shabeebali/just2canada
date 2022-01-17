@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal6.jpg') }}" alt="">
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
                        Work Permits <a href="{{ route('personal-immigration') }}" class="backlink pull-right"><i
                                class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                A Canadian work permit is needed when taking a job in Canada when you are from a foreign country. In most
                cases, you need a work permit to be able to work in Canada.
                <br>
                <br>
                <strong>While different work permits vary requirements, all of them must meet the following
                    criteria:</strong>
                <ul class="inner2">
                    <li>You must leave Canada when your work permit expires, this must be proved to an officer</li>
                    <li>Having sufficient funds to live in Canada and being able to return to home when required</li>
                    <li>Being healthy and passing a medical examination if needed</li>
                    <li>No criminal record, police clearance certificate may be required</li>
                    <li>Not endangering to national security</li>
                    <li>Not working for employers who have failed to comply with conditions (i.e. ineligible status)</li>
                    <li>Giving the officer further proof you can enter the country</li>
                </ul>
                <br>
                <h3>TYPES OF PERMITS</h3>
                Work permits are split into 2 types. One being an open work permit, and the other being an employer specific
                work permit. An open work permit gives you access to work for any employer in Canada, with the only
                exception being employers on the ineligibility list for failing to comply with conditions. It is also
                unavailable to employers that offer inappropriate tactics such as stripteases and erotic services. Getting
                an open work permit is widely situational, in instances you are eligible for one include applying or having
                a family member who has applied for permanent residence or being a graduated international student from a
                designated learning institution are just some of the cases where you can be eligible for an open work
                permit.
                <br>
                <br>
                An employer-specific work permit relays to working in regards to the conditions of the work permit. This
                would include the length you can work for, the location, and the name of your employer.
                <br>
                <br>
                <h2>OPEN WORK PERMITS</h2>
                <h3>Post-Graduation Work Permits (PGWP)</h3>
                These permits are given to international students that have graduated from a Canadian program. PGWPs give
                the individual the ability to work for as many hours and for any employer, anywhere within Canada.
                <br>
                <br>
                The validity for PGWPs lasts between 8 months and up to 3 years. It is an excellent pathway to obtaining
                work experience in Canada and guiding hopefuls to a potential permanent residence here in Canada.
                <br>
                <br>
                It is good to note that not all programs of study in Canada lead to eligibility for a Post-Graduation Work
                Permit. Cross referencing which programs are eligible can help validate if your program of study coincides
                with the permit.
                <br>
                <br>
                A PGWP also doesn’t require a LMIA, unlike various other work permits. The eligibility for the permit
                includes being over the age of 18 and studying full-time in Canada with a program that runs for a minimum of
                8 months. The program requires completion at a Designated Learning Institution with a program that is
                eligible with the permit. Applications must be done within 180 days of the individual’s program being
                completed. The PGWP process generally takes anywhere from 80 to 180 days.
                <br>
                <br>
                <h3>International Experience Canada (IEC)</h3>
                IEC is a variety of programs ran to allow young adults to travel to Canada and work for a temporary period
                of time. These programs allow foreigners to apply for a work permit without needing a LMIA. IEC
                authenticates a stay up to one year in Canada.
                <br>
                <br>
                For eligibility in the IEC program the individual must be from one of the countries Canada works with. These
                countries all vary in which programs they allow their citizens to participate in. The 3 programs the IEC run
                include Working Holiday Visa, Young Professionals and International Co-Op Internship. Not only does the
                countries participation vary program to program but so does other aspects such as application procedure and
                what criteria is needed to be eligible.
                <br>
                <br>
                The Working Holiday Visa is made for individuals who want the ability to work for any employer when in
                Canada. Successful applicants will receive an open work permit. This Visa is a great benefit for those who
                are looking for the freedom to move around in Canada, work multiple jobs or work in Canada without currently
                having a standing job offer.
                <br>
                <br>
                The Young Professionals program gives young foreigners the chance to gain professional experience in Canada.
                This program requires the individual to have a withstanding job offer in order to apply. Successful
                applicants will be given an employer-specific work permit. This relates to working for a singular employer
                during their stay, and being in the same location throughout. For professional consideration, the job in
                most cases must be Skill Level 0, A or B through National Occupation Classification (NOC).
                <br>
                <br>
                An International Co-Op Internship gives students the chance to complete their work placement in Canada which
                is a requirement for their graduation. The requirement is having a job offer in Canada that correlates
                directly with their field of study. Successful applicants will receive an employer-specific work permit in
                the case of this program.
            </div>
        </div>
    </section>
@endsection
