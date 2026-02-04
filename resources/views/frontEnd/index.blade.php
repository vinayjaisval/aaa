@extends('frontEnd.layouts.master') 
@section('content')
    <!--/ End Preloader -->


    <section class="home">
        <video class="video-slide active" src="{{asset('public/front/img/home/1.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('public/front/img/home/2.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('public/front/img/home/3.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('public/front/img/home/4.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('public/front/img/home/5.mp4')}}" autoplay muted loop></video>
        <!-- slide1 -->
        <div class="content active">
            <h4>CERT-in Empanelled Company</h4>
            <P>Empanelled by CERT-In for rendering IT Security Auditing Services Since 2005. <br>
                Empanelled by Controller of Certifying Authorities (Ministry of Electronics & Information Technology) <br>Empanelled by NICSI, several Banks and Government Organizations</P>
        </div>

        <!-- slide2 -->
        <div class="content">
            <h4>1st and Only Listed Company focused exclusively on Information Technology & Cyber Security Audit.</h4>
            <h1 style="font-size:39px ;">Forbes India Covers AAA Technologies</h1>
            <p> An ISO 9001:2015 and ISO 27001:2013 Certified Company</p>
        </div>

        <!-- slide3 -->
        <div class="content">
            <h1>Premier Independent Auditing and Consulting Company</h1>
            <p>Rendering services in field of Information Systems Audit, Information Security, Cyber Security, IT Assurance & Compliance and, IT Governance for 22+ Years.<br>Securing Cyber Assets of the nation by providing Accurate, Reliable and Innovative Services.<br> </p>
        </div>

        <!-- slide4 -->
        <div class="content">
            <h1>Our Vision</h1>
            <p style="font-size: 20px;">Create best-of-breed global solutions for Cyber Security, IT Governance, IS Audit, IT Assurance, Information Security and allied realms.</p>
        </div>

        <!-- slide5 -->
        <div class="content">
            <h1>Our Mission</h1>
            <p style="font-size: 20px;">To secure the Cyber Assets of the Nation and thereby ensuring a secured cyber space to live in by providing Accurate, Reliable and Innovative Services</p>
        </div>

        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>

    <!-- About us section START here -->
   @include('frontEnd.homepage.homeabout')
    <!--/ About us section of home page END here -->


    <!-- Latest News section START here  -->
    @include('frontEnd.homepage.testimonial')
    <!-- Latest News section END here  -->

    <!-- Services Section START here -->
    @include('frontEnd.homepage.homeourservices')
    <!--/ Services Section END here-->

    <!-- official testimonial section was here to get it back again call that using include function of php  -->



    <!-- home timeline of home page START here  -->
    @include('frontEnd.homepage.milestone')
    <!-- home timeline of home page END here  -->

    <!-- home page Awarded and Achivement section start here  -->
    @include('frontEnd.homepage.nos_services')
    <!--/ home page Awarded and Achivement section start here -->

    <!-- our team section start here  -->
   @include('frontEnd.homepage.boardmember')
    <!-- our team section enda here  -->


    <!-- Client Area -->
    @include('frontEnd.homepage.logo_slider')

    @endsection


    

@push('after-scripts')

<script>
$(document).ready(function () {
    $('#staff').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
});
</script>
@endpush