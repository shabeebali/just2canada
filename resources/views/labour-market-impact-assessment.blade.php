@extends('layout')
@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/personal8.jpg') }}" alt="">
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
                        LABOUR MARKET IMPACT ASSESSMENT <a href="{{ route('personal-immigration') }}"
                            class="backlink pull-right"><i class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                <h3>LMIA GENERAL INFORMATION</h3>
                The Labour Market Impact Assessment (LMIA), is a report executed by the ESDC that outlines the potential
                impacts that come with hiring a foreign worker into Canada’s labour market. LMIA’s are done to ensure the
                market is not impacted in a negative light, and is a requirement in order to hire foreign workers. A
                positive LMIA is often referred to as a confirmation letter.
                <br>
                <br>
                The employer is asked for information to concur why they are looking to hire a foreign worker. This includes
                items such as how many Canadians had applied, been considered, and ultimately why they were not hired.
                <br>
                <br>
                <strong>Once a LMIA has been confirmed as positive, the employee must apply for a work permit. The permit
                    must include:</strong>
                <ul class="inner2">
                    <li>Job Offer Letter</li>
                    <li>Contract</li>
                    <li>Copy of LMIA</li>
                    <li>LMIA Number</li>
                </ul>
                <br>
                <h3>LMIA REQUIRMENTS</h3>
                The LMIA process now offers two categories for hiring foreign skilled workers. One being high-wage and other
                being low-wage. While high-wage references salaries above or the same as the median wage in the province,
                low-wage refers to salaries below the median line. The amount required for an employer to make a request for
                a LMIA is $1000 per worker.
                <br>
                <br>
                For an employer to hire high-wage foreign workers, a requirement needed is a transition plan. This
                transition plan is a Schedule C form for the LMIA application. The transition plan helps enforce a
                commitment from the employer in regards to the location and occupation when looking to hire foreign workers.
                The plan is an indication that the company plans to move towards Canadian workers rather than foreign
                workers, proof in areas such as skilled training programs, hiring Canadian apprentices and aiding foreign
                workers in becoming permanent residents are all positives for qualifying for a transition plan. Progress
                reports of the transition plan is required when an inspection is done or when an employer has applied for a
                renewal of their LMIA.
                <br>
                <br>
                For low-wage foreign workers, a transition plan is not required. Employers are given a cap that limits how
                many low-wage foreign workers they are allowed to employ. Any business with more than 10 overall employees
                are capped at 10% of their workforce being low-wage foreign workers.
                <br>
                <br>
                English and French are the only languages that can be considered requirements for LMIAs. Unless an employer
                can give understandable reasoning to why another language may be needed for the job.
                <br>
                <br>
                In order to apply for a LMIA, employers must have advertised job openings in the Canadian market for at
                least 4 weeks. They’re also required evidence of two other hiring strategies in addition to running an
                advertisement on the Canadian Job Bank site.
                <br>
                <br>
                Between all requirements, Just To Canada can help breakdown everything you need to know about a LMIA,
                whether it’s on the employer side or the employee side. Our long-lasting expertise and seasoned
                professionals provide a hand, no matter which perspective you may need a LMIA for.
                <br>
                <br>
                <h3>HOW LONG DOES A LMIA TAKE?</h3>
                LMIA vary on the type of application that is being placed. For example, high skilled jobs in demand (such as
                trades) have a standard of being processed in 10 business days, meeting that expectation about 80% of the
                time. Other streams such as agricultural work is done in 13 business days. While high wage streams take
                about 33 business days, and low-wage streams taking 29 business days.
                <br>
                <br>
                Just To Canada can help aid you in your LMIA process. Letting you know what needs to be accomplished in
                order to be confirmed for skilled foreign workers in the most efficient and timely manner possible.
            </div>
        </div>
    </section>
@endsection
