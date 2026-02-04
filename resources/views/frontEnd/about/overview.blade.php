
@extends('frontEnd.layouts.master')

@section('content')
@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1,'row_no'=>1])->get();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1])->whereIn('row_no', [1])->get();
@endphp

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('img/overview-1.jpg'); background-size: cover;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="overview.html">Overview</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    <div class="bread-title"><h2>Overview</h2></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->


<!-- About Us -->
<section class="about-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg- col-md-6 col-12">
                <!-- About Video -->
                <div class="modern-img-features " style="margin-top:25px;">
                    <img src="img/overview-inner1.png" alt="#">
                </div>
                <!--/End About Video  -->
            </div>
            <div class="col-lg-8 col-md-6 col-12">
                <div class="about-content section-title default text-left text-justify">
                    <div class="section-top text-justify">
                        <h1><b>Enabling Organizations To Identify Issues Of Cyber Security & IT Corporate Governance And Providing.</b></h1><br>
                        <h3><b>Accurate | Reliable | Innovative Services</b></h3><br>

                    </div>
                    <div class="section-bottom text-justify">
                        <div class="text"style="justify-content:center;">
                            <p>AAA Technologies Private Limited was incorporated at Mumbai as a Private Limited Company in October 2000 with a vision of a world where each day is safer and more secure than the one before. </p>
                            <p>Subsequently, the company was converted into a Public Limited Company and consequently the name of the Company was changed to “AAA Technologies Limited” w.e.f. 03-08-2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text text-justify">
                    <p>AAA Technologies Limited was listed on National Stock Exchange Limited - Emerge Platform (NSE Emerge Platform) on 13th October, 2020. The company Migrated from NSE Emerge to NSE Main Board and also simultaneously got listed on BSE Main Board on 28th Novmber, 2022.</p><br>
                    <p>The Company is an ISO 9001:2015 and ISO 27001:2013 Certified Company.</p><br>
                    <p>The Company has kept its focus exclusively on IT Systems Audit, Cyber Security Audit, IT Security Audit, IT Assurance & Compliance, IT Governance since incorporation and has been rendering these services for 22+ Years with cumulative expertise of more than 1000+ man years.</p><br>
                    <p>The Company is agnostic and consequently it has no dependency on any single industry for procuring business. The Company has successfully completed assignments of Companies/ Institutions across various industries like banking, insurance, Financial Institutions, NBFCs, Regulatory Bodies, Government, Municipalities Corporations, Payment Gateways, Stock Brokers, Education, Travel and Transport, Hospitality, Manufacturing and Engineering, Infrastructure, Healthcare, Information Technology, IT Enabled Services (ITeS), Ports, Power, Trading Corporations, Entertainment, E-Tendering, Defense and refineries and many more.</p>
                </div>
            </div>
        </div>
    </div>
</section>	
<!--/ End About Us -->

<!-- Client Area -->
<div class="clients section-bg" style="background-image:url('img/bg21.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>Current empanelment</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text">
                            <p>As a testimonial to our expertise, following regulatory bodies and prominent organizations have chosen to confer unto us empanelment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">      
            <div class="col-12">        
                <div class="partner-slider">
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/138076768_client1-1.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/402669572_client2-2.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/239664760_client3-3.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/738638275_client4-4.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/757729138_client5-5.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/688077271_client6-6.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/874595360_client8-8.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/948807260_client11-11.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/254904514_client12-12.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/906364856_client13-13.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/879099780_client14-14.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/179731274_client15-15.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/162144283_client16-16.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/815272763_client17-17.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/456562269_client18-18.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                    
                        <!-- Single client -->
                        <div class="single-slider">
                            <div class="single-client">
                                <img src="admin/upload/Client_logo/550474581_client19-19.png"alt="#">
                            </div>
                        </div>
                        <!--/ End Single client -->
                                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
