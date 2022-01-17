@extends('layout')

@section('content')
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <img src="{{ asset('images/banner/business3.jpg') }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="    row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig " style="text-align: left; visibility: hidden; animation-name: none;">
                    <h1 class="welc-text">
                        Intra-Company Transfers (ICT) <a href="{{ route('business-immigration') }}"
                            class="backlink pull-right"><i class="fa-chevron-left fa"></i> Back</a></h1><br>
                </div>
                The International Mobility Program is a program that allows high-valued foreign workers to work in Canada
                temporarily, making them become what is known as an Intra-Company Transferee. If an international company
                has a Canadian location, the company itself can apply to have their employees registered and eventually
                transferred over to the Canadian location. The Intra-Company Transfer Visa gives companies the ability to do
                this without applying for a LMIA. This transfer is a LMIA-exempt work permit. Qualified workers require
                certain work permits however, and need to be considered economically beneficial to Canadian business.
                <br>
                <br>
                <h3>WORKER REQUIREMENTS</h3>
                <strong>These are the requirements for foreign workers to be applicable for an intra-company
                    transfer:</strong>
                <ul class="inner2">
                    <li>Currently employed by an international company looking for entry in Canada through a brand,
                        affiliate or other subsidiary of the company</li>
                    <li>Being transferred to an executive or high-level managerial role</li>
                    <li>Employment has been continuous by the company and being transferred to similar position for at least
                        one year. Proof of employment can be shown through payroll</li>
                    <li>Coming to Canada only for a temporary period</li>
                    <li>Having complied with all immigration requirements </li>
                </ul>
                <br>

                <h3>COMPANY REQUIREMENTS</h3>

                <strong>These are the requirements for the employer/company to meet to be applicable for ICT:</strong>
                <ul class="inner2">
                    <li>In most cases, having a physical location to run the Canadian operation (mostly for specialized
                        knowledge)</li>
                    <li>Sufficient funds and financial backing to running a business in Canada as well as being able to pay
                        staff</li>
                    <li>Must have a realistic plan to staff the Canadian operation</li>
                    <li>Have proper conditions met when transferring executives, managers and specialized knowledge workers
                    </li>
                </ul>
                <br>


                <h3>DOCUMENTS NEEDED</h3>

                <strong>Documents that are needed for ICT include:</strong>
                <ul class="inner2">
                    <li>Documents proofing that the worker is currently employed by a multi-national enterprise outside of
                        Canada</li>
                    <li>Proof of employment of at least one year in a continuous full-time role outside of Canada</li>
                    <li>Detailing the applicant’s position in an executive or managerial position</li>
                    <li>For specialized knowledge workers, proof the person has expertise and the position in Canada
                        requires said knowledge</li>
                    <li>Details of the position in Canada including name, title, place in the company and job description
                    </li>
                    <li>Outlining intended duration of stay</li>
                    <li>Details surrounding the relationship between the company in Canada and the International company
                    </li>
                </ul>
                <br>

                The average processing time for ICT can be anywhere between 2 to 10 weeks, pending on the prioritization of
                the application. Normal ICT Visa’s last for one year, any renewals must be done and give evidence to why the
                ICT should be extended.








            </div>
        </div>
    </section>
@endsection
