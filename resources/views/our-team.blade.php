@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/team.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="about_us_area row">
        <div class="container">

            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig"
                    style="text-align: left; visibility: visible; animation-name: fadeInUpBig;">
                    <h1 class="welc-text">
                        Our Team</h1><br>
                </div>
                <div class="col-md-4 col-sm-6 about_client wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <img src="{{ asset('images/team-img1.jpg') }}" alt="">
                </div>
                <div class="who_we_area col-md-8 col-sm-6">
                    <div class="tittle wow fadeInUpBig"
                        style="text-align: left; visibility: visible; animation-name: fadeInUpBig;">
                        <h2 class="welc-text">
                            Anoo Lal</h2>
                        <h3>President, CEO </h3>anoolal@myvisas.org
                    </div>
                    <p>With over 28 years of far-reaching experience as a Canadian immigration practitioner, President, CEO
                        Mr. Anoo Lal launched his practice in 1993.
                        <br>
                        <br>

                        Mr. Lal is a Regulated Canadian Immigration Consultant and an accredited member of The Immigration
                        Consultants of Canada Regulatory Council (ICCRC), Canada, License # R413863. Mr. Lal mentored
                        various new RCICs as well.
                        <br>
                        <br>
                        Mr. Lal is a Commissioner of Oaths in the Province of Ontario and a Certified, approved
                        International and National Recruiter in the Province of Alberta.
                        <br>
                        <br>
                        He is also a member in good standing of the Canadian Association of Professional Immigration
                        Consultants, Canada.
                    </p>
                </div>
                <div class="who_we_area col-md-12 col-sm-6">
                    <p>Mr. Lal also brings 14 years of combined expertise in information technology, banking, and human
                        resources, serving leading banks in the Middle East. Mr. Lal specializes in business and skilled
                        workers’ immigration matters.
                        <br>
                        <br>
                        With synergies in Canadian immigration and its acts and regulations, Mr. Lal also co-counsels
                        various legal practitioners and former Canadian immigration officials.
                        <br>
                        <br>
                        Covid-19 has dramatically influenced people worldwide, and more and more people are looking up to
                        Canada and wish to make this wonderful country their home. Providing sound and practical immigration
                        advice is paramount in these challenging times, and Mr. Lal virtually meets every client, ensuring
                        that they receive the most accurate assessment of their Canadian immigration qualifications.
                        <br>
                        <br>
                        Mr. Lal is happily married with three grown-up sons, all well-settled in Canada.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 about_client wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <img src="{{ asset('images/team-img2.jpg') }}" alt="">
                </div>
                <div class="who_we_area col-md-8 col-sm-6">
                    <div class="tittle wow fadeInUpBig"
                        style="text-align: left; visibility: visible; animation-name: fadeInUpBig;">
                        <h2 class="welc-text">
                            Khaldoun Barbir</h2>
                        <h3>Director, Operations – Middle East Region </h3>kbarbir@myvisas.org
                    </div>
                    <p>Khaldoun is a people’s person.
                        <br>
                        <br>
                        He is a strategic and bottom-line-oriented professional with extensive experience in retail
                        management and client-customer relation management.
                        <br>
                        <br>
                        He brings over 15 years of international exposure and the opportunity to work with a multinational
                        retail leader in three different GCC countries.
                        <br>
                        <br>
                        Being fluent in English and Arabic, Khaldoun engages with Just To Canada’s team and interacts with
                        clients from different parts of the work, particularly from the Middle East. He assists in
                        understanding the needs of entrepreneurs, senior managers, and skilled workers.
                    </p>
                </div>
                <div class="who_we_area col-md-12 col-sm-6">
                    <p>Skilled in Store operations management, visual merchandising, recruitment, and talent acquisition
                        allowed him to contribute to his company’s overall vision to be the leading retailer of consumer
                        electronics in the MENA region.
                        <br>
                        <br>
                        Khaldoun’s passion during that period was to lead his team to launch more than a dozen of Big-Box
                        high visibility locations that proved successful in delivering high sales volume turnover, healthy
                        bottom-line, and an opportunity to serve thousands of customers.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 about_client wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <img src="{{ asset('images/team-img3.jpg') }}" alt="">
                </div>
                <div class="who_we_area col-md-8 col-sm-6">
                    <div class="tittle wow fadeInUpBig"
                        style="text-align: left; visibility: visible; animation-name: fadeInUpBig;">
                        <h2 class="welc-text">
                            Neha Thakordas</h2>
                        <h3>Director, Employer Engagement &amp; Global Talent </h3>neha@myvisas.org
                    </div>
                    <p>Neha is an award-winning post-secondary education professional with over 11 years of experience and
                        proven expertise in academic support, career advising, employer stakeholder management, and job
                        market placement. Neha holds a Master of Public Policy, Administration and Law (MPPAL) and Bachelor
                        of Public Administration (Honours) specialization Management degree(s) from the School of Public
                        Policy and Administration, York University. Neha also is a Certified Career Educator from the
                        Canadian Association of Career Educators and Employers.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
