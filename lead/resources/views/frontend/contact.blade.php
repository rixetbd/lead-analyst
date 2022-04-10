@extends('layouts.frontend_layout')

@section('content')

		<!--Breadcrumb Area-->
		<section class="breadcrumb-area banner-6">
			<div class="text-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 v-center">
							<div class="bread-inner">
								<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
									<h2>Contact</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Breadcrumb Area-->
		<!--Start Enquire Form-->
		<section class="contact-page pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 v-center">
						<div class="common-heading text-l">
							<span>Contact Now</span>
							<h2 class="mt0 mb0">Have Question? Write a Message</h2>
							<p class="mb60 mt20">We will catch you as early as we receive the message</p>
						</div>
						<div class="form-block">
							<form id="contactForm" data-bs-toggle="validator" class="shake">
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text"  id="name" placeholder="Enter name" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<input type="email"  id="email" placeholder="Enter email" required>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<select name="Dtype" id="Dtype" required>
											<option value="">Select Requirement</option>
											<option value="web">web</option>
											<option value="graphic">graphic</option>
											<option value="video">video</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group">
									<textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</form>
									</div>
								</div>
								<div class="col-lg-5 v-center">
									<div class="contact-details">
										<div class="contact-card wow fadeIn" data-wow-delay=".2s">
											<div class="info-card v-center">
												<span><i class="fas fa-phone-alt"></i> Phone:</span>
												<div class="info-body">
													<p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
													<a href="tel:+10000000000">(+91) 0000 000 000</a>
												</div>
											</div>
										</div>
										<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
											<div class="info-card v-center">
												<span><i class="fas fa-envelope"></i> Email:</span>
												<div class="info-body">
													<p>Our support team will get back to in 24-h during standard business hours.</p>
													<a href="mailto:info@businessname.com">info@businessname.com</a>
												</div>
											</div>
										</div>
										<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
											<div class="info-card v-center">
												<span><i class="fab fa-skype"></i> Skype:</span>
												<div class="info-body">
													<p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
													<a href="skype:niwax.company?call">niwax.company</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End Enquire Form-->
					<!--Start Location-->
					<section class="contact-location pad-tb bglight">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<div class="common-heading">
										<span>Our Locations</span>
										<h2>Our office</h2>
									</div>
								</div>
							</div>
							<div class="row justify-content-center upset shape-numm">
								<div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
									<div class="office-card">
										<div class="skyline-img">
											<img src="{{ asset('frontend_assets') }}/images/location/newyork.png" alt="New York" class="img-fluid" />
										</div>
										<div class="office-text">
											<h4>New York</h4>
											<p>603 FA Forest Avenue, New York, USA 10021</p>
											<a href="javascript:void(0)" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".4s">
									<div class="office-card">
										<div class="skyline-img">
											<img src="{{ asset('frontend_assets') }}/images/location/sydeny.png" alt="sydney" class="img-fluid" />
										</div>
										<div class="office-text">
											<h4>Sydney</h4>
											<p>2449 Columbia Boulevard, Sydney, 10021</p>
											<a href="javascript:void(0)" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".6s">
									<div class="office-card mb0">
										<div class="skyline-img">
											<img src="{{ asset('frontend_assets') }}/images/location/rome.png" alt="rome" class="img-fluid" />
										</div>
										<div class="office-text">
											<h4>Rome</h4>
											<p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
											<a href="javascript:void(0)" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End Location-->

@endsection