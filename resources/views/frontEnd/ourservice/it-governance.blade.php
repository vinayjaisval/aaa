@extends('frontEnd.layouts.master')
@section('content')

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
                            <li><a href="IT-Governance.html">Services</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    <div class="bread-title"><h2>IT Governance</h2></div>
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
                    <img src="img/916.jpg" alt="#">
                </div>
                <!--/End About Video  -->
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h1><b>IT Governance</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text text-justify">
                            <p>IT Governance is the system by which IT activities in a Company or enterprise are directed and controlled to achieve business objectives with the ultimate objective to achieve stakeholder needs.</p>
                            <p>IT governance emphasizes Information Technology Systems, their risk management, and its performance. It ensures that the investments made on IT yield fruitful results, which mitigate IT-associated risks and threats.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="text text-justify">
                    <p><b>IT Governance It can be divided in two parts:</b></p><br>
                    <p class="default text-center"><img src="img/governace.png" alt=""></p><br>

                    <p><b>IT Governance helps to optimize the value of an organization’s IT-enabled investments by:</b></p><br>

                    
                    <p>
                        <ul style="padding-left:25px">
                            <li>•	Establishing the governance, monitoring and control framework</li>
                            <li>•	Providing strategic direction for aligning projects with strategic goals and objectives (Enterprise Portfolio management) </li>
                            <li>•	Facilitating system selection to align objectives with solutions</li>
                            <li>•	Reviewing quality assurance and organizational readiness capabilities people and tools</li>
                        </ul>
                    </p><br>
                    <p><b>Why do you need IT Governance?</b></p><br>
                    <p class="default text-center"><img src="img/12.png" alt=""></p><br>
                    <p>Broadly our Company provides IT Governance audits according to following standards / models:</p><br>
                    <p>
                        <ul style="padding-left:25px">
                            <li>a)	COBIT</li>
                            <li>b)	Val IT</li>
                            <li>c)	Balanced Scorecard</li>
                            <li>d)	IT & Business Maturity Models</li>
                        </ul>
                    </p><br>

                    <p><b>a)  COBIT - </b> Control Objectives for Information and Related Technology. It is a framework created by the ISACA (Information Systems Audit and Control Association) for IT governance and management.</p><br>

                    <p><b>b)  Val IT - </b> is a governance framework that can be used to create business value from IT investments. It consists of a set of guiding principles and a number of processes and best practices that are further defined as a set of key management practices to support and help executive management and boards at an enterprise level</p><br>

                    <p><b>c)  Balanced Scorecard - </b> Balanced scorecard is a strategy performance management tool – a semistandard structured report, that can be used by managers to keep track of the execution of activities by the staff within their control and to monitor the consequences arising from these actions.</p><br>

                    <p><b>d)  IT & Business Maturity Models</b></p>
                </div>
            </div>
        </div>
    </div>
</section>	
<!--/ End About Us -->

<section class="features-area">
    <div class="topic-area section-padding40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="single-topic text-center">
                        <div class="topic-img">
                            <img src="img/bg-15.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="IT-System-Audit.html">IT System Audit</a> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="single-topic text-center ">
                        <div class="topic-img">
                            <img src="img/bg-15.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                <h3><a href="cyber-security-audit.html">Cyber Security</a> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="single-topic text-center">
                        <div class="topic-img">
                            <img src="img/bg-15.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="IT-Assurance-compliance.html">IT Assurance & Compliance</a> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="single-topic text-center ">
                        <div class="topic-img">
                            <img src="img/bg-15.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                <h3><a href="IT-Security-Audit.html">IT Security Audit</a> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
