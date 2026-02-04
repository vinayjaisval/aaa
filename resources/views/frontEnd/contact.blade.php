@extends('frontEnd.layouts.master')

@section('content')
<div class="home-page">
	<?php
	$title_var = "title_" . @Helper::currentLanguage()->code;
	$title_var2 = "title_" . config('smartend.default_language');
	$details_var = "details_" . @Helper::currentLanguage()->code;
	$details_var2 = "details_" . config('smartend.default_language');
	?>

	@php
	$language_code = \Helper::currentLanguage()->code;
	$heading = App\Models\Topic::where(['webmaster_id'=> 1,'status'=>1,'row_no'=>2])->get();

	$cartds = App\Models\Topic::where(['webmaster_id'=> 1,'status'=>1])->whereIn('row_no', [2])->get();
	@endphp
	<!-- Breadcrumb -->
	<div class="breadcrumbs overlay" style="background-image:url('public/front/img/contact.png'); ">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<!-- Bread Menu -->
						<div class="bread-menu">
							<ul>
								<li><a href="index-2.html">Home</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<!-- Bread Title -->
						<div class="bread-title">
							<h2>Contact Us</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Breadcrumb -->

	<!-- Contact Us -->
	<section class="contact-us section-space">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<!-- Contact Form -->
					 
					<div class="contact-form-area m-top-30">
						<h4>Get In Touch</h4>
						<div id="error_message" style="color:red"></div>
						<form action="https://aaatechnologies.co.in/contact.php" target="_self" class="form" onsubmit="return validate();" method="POST" id="frmContactus" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="icon"><i class="fa fa-user"></i></div>
										<input type="text" class="form-control" name="fname" placeholder="First Name" id="fname" autocomplete="off" maxlength="40">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="icon"><i class="fa fa-user"></i></div>
										<input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname" autocomplete="off" maxlength="40">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="icon"><i class="fa fa-envelope"></i></div>
										<input type="email" class="form-control" name="email" placeholder="Email" id="email" autocomplete="off" maxlength="40">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="icon"><i class="fa fa-tag"></i></div>
										<input type="text" class="form-control" name="mobile" placeholder="Contact Number" id="phone" maxlength="10" autocomplete="off">
									</div>
								</div>
								<div class="col-lg-12 col-12">
									<div class="form-group textarea">
										<div class="icon"><i class="fa fa-pencil"></i></div>
										<textarea type="textarea" class="form-control message" name="comments" placeholder="Enter your text here..." rows="5" id="message"></textarea>
									</div>
								</div>

								<div class="col-lg-12 col-md-6 col-12">
									<div class="form-group">
										<div class="row">
											<div class="col-lg-8">
												<input type="text" class="form-control" name="captcha" placeholder="Enter your Captcha" id="captcha" maxlength="6" autocomplete="off">
											</div>
											<div class="col-lg-4">
												<div class="cap_img">
													<img src="captcha.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="col-12">
									<div class="form-group button">
										<button type="submit" class="bizwheel-btn theme-2" id="submit" name="submit">Submit</button>
									</div>
								</div>
							</div>
						</form>														
					</div>
					
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="row mt-4" style="padding-top:5px;">
						<iframe sandbox="allow-same-origin allow-scripts allow-popups allow-forms" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.651173625265!2d72.8883486142666!3d19.122952955465685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c805b1dd69eb%3A0x620855020aeb175e!2sAAA%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1656409550815!5m2!1sen!2sin" width="700" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" rel="noopener noreferrer"></iframe>
					</div>
				</div>
			</div>

			
			<div class="row mt-4">
				<div class="col-lg-4">
					<div class="contact-box-main m-top-30">
						<div class="single-contact-box">
							<div class="c-icon"><a href="https://goo.gl/maps/PwcBgjC3kywUGtvv7"><i class="fa fa-map-marker"></i></a></div>
							<div class="c-text">
								<h4>Address</h4>
								<p>278-280, F Wing, Solaris 1,<br>
									Saki Vihar Road,Opp.L&T Gate No.6,</p>
								<p style="margin-left:75px;">Powai, Andheri East,<br>
									Mumbai 400 072, INDIA</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="contact-box-main m-top-30">
						<div class="single-contact-box">
							<div class="c-icon"><i class="fa fa-phone"></i></div>
							<div class="c-text">
								<h4></h4>
								<p>Tel.: 022-28573815 / 16<br> </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-box-main m-top-30">
						<div class="single-contact-box">
							<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
							<div class="c-text">
								<h4>Email Us</h4>
								<a href="mailto:info@aaatechnologies">
									<p>info<span>[at]</span>aaatechnologies<span>[dot]</span>co<span>[dot]</span>in</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	@endsection