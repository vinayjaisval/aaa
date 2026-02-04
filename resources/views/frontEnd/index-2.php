
	<body id="bg">
	     <?php include 'header.php'; ?>
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
    <section class="home">
      <video class="video-slide active" src="img/home/1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="img/home/1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="img/home/1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="img/home/1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="img/home/1.mp4" autoplay muted loop></video>
      
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


    <script>
      var slides = document.querySelectorAll('.video-slide');
      var btns = document.querySelectorAll('.nav-btn');
      const contents = document.querySelectorAll('.content');
      let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });

        contents.forEach((content) => {
          content.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
      contents[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        contents[i].classList.add('active');

        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 7000);
      }
      repeater();
    }
    repeat();
    </script>

    

  </body>

<!-- Mirrored from aaatechnologies.co.in/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jan 2026 11:13:01 GMT -->
</html>
		
<!-- About us section START here -->
<section class="features-area " style="background-image:url('img/bg_20.jpg')"   >
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-12">
                <div class="section-title default text-center">
                    <div class="section-top text-center">
                        <h1><b>About Us</b></h1>
                    </div>
                    <div class="section-bottom " >
                        <div class="text about-para" >
                            <p style="color:#000;">We are an Information Technology and Cyber Security Auditing & Consulting Company offering a platform that enables organizations to identify the issues of corporate governance of the information system in computerized environment and execute security controls to safeguard information and information system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Feature -->
                <div class="single-feature">
                    <div class="icon-head"><i class="fa fa-podcast"></i></div>
                    <h4><a href="overview.html">NSE & BSE Main Board Listed</a></h4>
                    <p>Listed on Noverber 28,2022</p>
                    <br>
                    <div class="button">
                        <a href="overview.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Read More</a>
                    </div>
                </div>
                <!--/ End Single Feature -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Feature -->
                <div class="single-feature">
                    <div class="icon-head"><i class="fa fa-newspaper-o"></i></div>
                    <h4><a href="overview.html">Our Expertise</a></h4>
                    <p> Cumulative expertise of more than 1000+ man years and 22+ years of experience.</p>
                    <div class="button">
                        <a href="overview.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Read More</a>
                    </div>
                </div>
                <!--/ End Single Feature -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Feature -->
                <div class="single-feature">
                    <div class="icon-head"><i class="fa fa-globe"></i></div>
                    <h4><a href="overview.html">ISO Certified</a></h4>
                    <p>An ISO 9001:2015 & ISO 27001:2013 accredited company</p>
                    <br>
                    <div class="button">
                        <a href="overview.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Read More</a>
                    </div>
                </div>
                <!--/ End Single Feature -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Feature -->
                <div class="single-feature">
                    <div class="icon-head"><i class="fa fa-users"></i></div>
                    <h4><a href="overview.html">Sector Agnostic</a></h4>
                    <p>Diverse industry spread caters almost 25+ industry sectors</p><br>
                    
                    <div class="button">
                        <a href="overview.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Read More</a>
                    </div>
                </div>
                <!--/ End Single Feature -->
            </div>
        </div>
    </div>
</section>
<!--/ About us section of home page END here -->
		
		
<!-- Latest News section START here  -->
<section class="features-area latest_news section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title default text-center">
                    <div class="section-top text-center">
                        <h1><b style="color:#fff;">Latest News </b></h1>
                    </div>
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="img-feature ">
                    <img src="img/Latest_AAA/4.png" alt="Video Thumbnail">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12" style="margin-top: 20px;">
                <div class="news_content owl-carousel">
                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Extension of Empanelment by CERT-In till 31-10-2024</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Received Times Applaud Trendsetters Award 2024 in field of Cyber Security</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Received Award from the Hon&#039;ble Governor of Maharashtra Shri Ramesh Bais for contribution in the field of Cyber Security</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Empanelled by National Informatics Centre Services Inc. (NICSI), IDBI Bank, Bank of Baroda, Indian Bank</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Certificate of Excellence in the field of &quot;IS Audit And Cyber Security-2023&quot; from CEO Magazine</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>23rd AGM held on 16th September 2023</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Company have received Certificate of Appreciation for prompt filing of returns and payment of Goods and Service Tax during the year 2022-23</p>
                        </div>
                    </div>

                                        <div class="single_news">
                        <div class="latest_news">
                            <p>Migration from NSE Emerge to NSE Main Board and also simultaneously getting listed on BSE Main Board.</p>
                        </div>
                    </div>

                                    </div>
            </div>
        </div>

    </div>
</section>
<!-- Latest News section END here  -->
		
<!-- Services Section START here -->
<section class="team section-bg section-space"  style="background:#FFF;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>Our Services</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-slider">
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/IT-audit-system-audits1.jpg" alt="#">
                    </div>
                    <div class="service-content">
                        <h4><a href="IT-System-Audit.html">IT Systems Audit</a></h4>
                        <p>Examination of the management controls within an Information Technology (IT) infrastructure.</p>
                        
                        <a class="btn" href="IT-System-Audit.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/914.jpg" alt="#">
                    </div>
                    <div class="service-content">
                        <h4><a href="cyber-security-audit.html">Cyber Security Audit</a></h4>
                        <p>Provide management with an assessment of an organization’s Cyber Security</p>
                        <a class="btn" href="cyber-security-audit.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/916.jpg" alt="#">
                    </div>
                    <div class="service-content">
                        <h4><a href="IT-Governance.html">IT Governance</a></h4>
                        <p>Emphasizes on IT Systems, their risk management, and its performance.</p>
                        <br>
                        <a class="btn" href="IT-Governance.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/914.jpg" alt="#">
                    </div>
                    <div class="service-content">
                        <h4><a href="IT-Security-Audit.html">IT Security Audit</a></h4>
                        <p>Audit on the level of information security in an organization.</p>
                        <br>
                        <a class="btn" href="IT-Security-Audit.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/915.png" alt="#">
                    </div>
                    <div class="service-content">
                        <h4><a href="IT-Assurance-compliance.html">IT Assurance & Compliance</a></h4>
                        <p>Assuring smooth IT procedures and fulfilling different IT Compliances.</p>
                        <br>
                        <a class="btn" href="IT-Assurance-compliance.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
        </div>
    </div>
</section> 	
<!--/ Services Section END here-->

<!-- official testimonial section was here to get it back again call that using include function of php  -->



<!-- home timeline of home page START here  -->
<section class="features-area" style="background-image:url('img/bg21.jpg')">
    <div class="container mb-3">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>Our Milestone</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- <h2 class="pb-5 pt-5 text-center mb-5 display-5">Our Milestone</h2> -->
        <!-- First Content Section-->
        <div class="row align-items-center connecting-lines d-flex">
            <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                <div class="circle font-weight-bold"><i class="fa fa-check"></i>
            </div>
        </div>
        <div class="col-6">
            <h4>2020</h4>
            <p>September: Initial Public Offering. <br >October: Listing on NSE Emerge</p>
        </div>
        </div>
        <!-- Path Line -->
        <div class="row home_timeline">
        <div class="col-2">
            <div class="corner top-right"></div>
        </div>
        <div class="col-8">
            <hr/>
        </div>
        <div class="col-2">
            <div class="corner left-bottom"></div>
        </div>
        </div>
        <!-- Second Content Section-->
        <div class="row align-items-center justify-content-end connecting-lines d-flex">
            <div class="col-6 text-right">
                <h4>2021</h4>
                <p>One of the 54,439 organizations in India to receive certificate of appreciation to honour GST Tax payers</p>
            </div>
            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                <div class="circle font-weight-bold"><i class="fa fa-check"></i></div>
            </div>
        </div>
        <!-- Path Line -->
        <div class="row home_timeline">
            <div class="col-2">
                <div class="corner right-bottom"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner top-left"></div>
            </div>
        </div>
        <!-- Third Content Section -->
        <div class="row align-items-center connecting-lines d-flex">
        <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
            <div class="circle font-weight-bold"><i class="fa fa-check"></i></div>
        </div>
        <div class="col-6">
            <h4>2022</h4>
            <p>Conducted work/ rendered services to City And Industrial Development Corporation Of Maharashtra Limited (CIDCO) of Rs. 4+ Crore.</p>
            <p><b>Migration to Main Board of NSE & BSE.</b></p>
        </div>
        </div>
    </div>
    <div class="button mt-5 text-center" >
        <a href="milestone.html" class="bizwheel-btn theme-2">Know More</a>
    </div>
</section>
<!-- home timeline of home page END here  -->

<!-- home page Awarded and Achivement section start here  -->
<section class="team section-bg section-space"  style="background:#2e2751;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top" >
                        <h1 style="color:#FFF"><b>Awards and Achievements</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-slider" style="margin-top:-20px">
            
            <div class="single-slider" >
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head" >
                        <img src="img/awards/2022.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px ;">
                        <h3>2022</h3>
                        <p>Certificate of Excellence in the field of &quot;IS Audit And Cyber Security-2022&quot; from CEO Magazine.</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            
            <div class="single-slider" >
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head" >
                        <img src="img/awards/ECT.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px ;">
                        <h3>2022</h3>
                        <p>Company has been awarded with the ET Change Makers Award in the field of Cyber Security from Economic Times</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            
            <div class="single-slider" >
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head" >
                        <img src="img/awards/home_page_award/1.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px ;">
                        <h3>2021</h3>
                        <p>Certificate of Excellence in the field of “IS Audit and Cyber Security”</p>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/awards/SS.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px;">
                        <h3>2021</h3>
                        <p>Awarded Pride of Bharat</p>
                        <br>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/awards/6.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px;">
                        <h3>2021</h3>
                        <p>Awarded Pride of Bharat</p>
                        <br>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service" >
                    <div class="service-head">
                        <img src="img/awards/15.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px;">
                        <h3>2021</h3>
                        <p>Business Leader of the Year </p>
                        <br>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service" >
                    <div class="service-head">
                        <img src="img/awards/RC3.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px;">
                        <h3>2020</h3>
                        <p>Most Trusted Cyber Security Auditing & Consulting of the year</p>
                        
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            
            
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service" >
                    <div class="service-head">
                        <img src="img/awards/home_page_award/forbes.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px;">
                        <h3>2020</h3>
                        <p>Forbes India covers AAA Technologies</p>
                        <br>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="single-slider">
                <!-- Single Team -->
                <div class="single-service">
                    <div class="service-head">
                        <img src="img/awards/7.png" alt="#">
                    </div>
                    <div class="service-content" style="margin-top:-25px;">
                        <h3>2009</h3>
                        <p>Maharashtra IT Award</p>
                        <br>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
        </div>
        <div class="button mt-3 text-center" >
            <a href="awards.html" class="bizwheel-btn theme-2">Know More</a>
        </div>
    </div>
</section> 	
<!--/ home page Awarded and Achivement section start here -->



		

		


<!-- our team section start here  -->
<section class="sec sec-2 bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><b>BOARD MEMBERS</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text">
                            <p>People who are doing things the right way and their brief profiles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-10 col-12">
                <div class="owl-carousel owl-theme" id="staff">
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="img/Team/4764%20(1)%20(2).png" >
                            </div>
                            <h3><a href="our-management.html">Mr. Anjay Agarwal</a></h3>
                            <p><a href="our-management.html">Chairman and Managing Director</a></p><br>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="img/Team/4767%20(1)%20(2).png">
                            </div>
                            <h3><a href="our-management.html">Mr. Venugopal M. Dhoot</a> </h3>
                            <p><a href="our-management.html">Whole Time Director, Director (Finance) and CFO</a> </p><br>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="img/Team/4761%20(1)%20(1).png">
                            </div>
                            <h3><a href="our-management.html">Mrs. Ruchi Agarwal</a> </h3>
                            <p><a href="our-management.html">Executive Director<br>(HR & Administration)</a> </p><br>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="img/Team/Rajesh%20Pic.jpg">
                            </div>
                            <h3><a href="our-management.html">Mr. Rajesh Chandra Verma</a></h3>
                            <p><a href="our-management.html">Independent Director</a></p><br>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="img/Team/Naveen%20Srivastava.jpg">
                            </div>
                            <h3><a href="our-management.html">Mr. Naveen Kumar Srivastava</a></h3>
                            <p><a href="our-management.html">Independent Director</a></p><br>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-b staff">
                            <div class="box-img" style="margin-left:70px">
                                <img src="img/Team/Nabankur%20Sen-photo.jpg">
                            </div>
                            <h3><a href="our-management.html">Mr. Nabankur Sen</a> </h3>
                            <p><a href="our-management.html">Independent Director</a> </p><br>
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our team section enda here  -->

		
<!-- Client Area -->
<div class="clients section-bg" style="background-image:url('img/bg21.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-12">
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
<!--/ End Client Area -->
<!-- footer start -->
    <?php include 'footer.php'; ?>
	<!-- footer-end -->



