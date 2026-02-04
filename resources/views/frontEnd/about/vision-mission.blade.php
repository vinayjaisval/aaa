
@extends('frontEnd.layouts.master')

@section('content')


<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('img/vision-banner.png'); background-color:#2e2751 ;background-size: cover;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="vision%26mission.html">Our Vision & Mission</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    <div class="bread-title"><h2>Our Vision & Mission</h2></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- our vision and mission section start here  -->
<section class="features-area" id="vision">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h2><b>Our Vision</b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 offset-lg-1 col-md-6 col-12">
                <div class="vision">
                    <img src="img/vision.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-12">
                <div class="section-bottom vision-content">
                    <div class="text mt-5" style="font-size:20px;">
                        <p>Create best-of-breed global solutions for Cyber Security, IT Governance, IS Audit, IT Assurance, Information Security and allied realms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-area"  id="mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top mission-top" >
                        <h2><b>Our Mission</b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">      
            <div class="col-lg-8 offset-lg-1 col-md-6 col-12">
                <div class="section-bottom mission-content">
                    <div class="text mt-5" style="font-size:20px; margin-bottom:10px">
                        <p>To secure the Cyber Assets of the Nation and thereby ensuring a secured cyber space to live in by providing Accurate, Reliable and Innovative Services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-3">
                <div class="vision">
                    <img src="img/mission1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-area" id="philosophy">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h2><b>Our Philosophy</b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 offset-lg-1 col-md-6 col-12">
                <div class="vision">
                    <img src="img/values.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-12">
                <div class="section-bottom">
                    <div class="text mt-5" style="font-size:20px;">
                        <p>Cumulative expertise of more than 1000+ man years with vast Business Domain as well as technical knowledge delivering innovative solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our vision and mission section ends here  -->

@endsection