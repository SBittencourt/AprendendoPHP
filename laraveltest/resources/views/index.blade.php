<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Title -->
		<title>Your ID - You are exactly where you should be!</title>
	
		@include('includes/head')
	</head>
	<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
		<main id="body-inner">
			<div id="page-transition">
				<div class="ptr-overlay"></div>
				<div class="ptr-preloader">
					<div class="ptr-prel-content">
						<img src="assets/img/stage.png" class="ptr-prel-image tt-logo-light" alt="Logo">
					</div> <!-- /.ptr-prel-content -->
				</div> <!-- /.ptr-preloader -->
			</div>
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<div class="bg-noise"></div>
			<div id="scroll-container"> 				
				@include('includes/header')
				
				<!-- *************************************
				*********** Begin content wrap *********** 
				************************************** -->
				<div id="content-wrap">
					<div id="page-header" class="ph-full ph-cap-sm ph-image-cropped ph-image-cover-3 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets/img/fanID.png" alt="Image">
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption -->
							<div class="ph-caption">
								<h1 class="ph-caption-title ph-appear max-width-1000" style=""><div class="ph-title-parallax" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, -18.0009px, 0px);">YOUR Id</div></h1>
								<div class="ph-caption-title-ghost ph-appear" style=""><div class="ph-ghost-parallax" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 18.0009px, 0px);">Website</div></div>
								<div class="ph-caption-subtitle ph-appear max-width-650" style=""><div class="ph-subt-parallax" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, -4.5002px, 0px);">Centralizing <em>sports enthusiasts'</em> data for personalized experiences and seamless connectivity with their favorite teams and events.</div></div>
								<div class="tt-btn tt-btn-primary ph-appear margin-top-60" style="">
									<a href="https://1.envato.market/tank" target="_blank" rel="noopener" data-hover="Chekout now!">Chekout now!</a>
								</div>
							</div> 
							<!-- End page header caption -->

						</div> <!-- /.page-header-inner -->

						<!-- Begin scroll down circle -->
						<a href="#page-content" class="scroll-down-circle" data-offset="30">
							<div class="sdc-inner ph-appear">
								<div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
								<svg viewBox="0 0 500 500">
									<defs>
										<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
									</defs>
									<text dy="30">
										<textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
									</text>
								</svg>
							</div> <!-- /.sdc-inner -->
						</a>
						<!-- End scroll down circle -->

						<!-- Begin made with love -->
						<div class="made-with-love ph-appear">
							<div class="mwl-inner">
								<div class="mwl-text">Made with</div>
								<div class="mwl-icon"><i class="far fa-heart"></i></div>
							</div>
						</div>
						<!-- End made with love -->
						
					</div>
					<!-- End page header -->


					<!-- *************************************
					*********** Begin page content *********** 
					************************************** -->
					<div id="page-content">

						<!-- =======================
						///// Begin tt-section /////
						============================ -->
						<div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin tt-Heading -->
								<div class="tt-heading tt-heading-center tt-heading-lg margin-bottom-10-p anim-fadeinup">
									<h3 class="tt-heading-subtitle text-gray">Latest Events</h3>
									<h2 class="tt-heading-title">Events</h2>
									<div class="tt-btn tt-btn-link margin-top-20">
										<a href="portfolio-interactive-compact.html" data-hover="See All Works">See All Events</a>
									</div>
								</div>
								<!-- End tt-Heading -->


								<!-- Begin portfolio interactive -->
								@foreach ($events as $event)
										<div class="portfolio-interactive pi-borders pi-compact pi-force-scroll">

											<!-- Begin portfolio interactive item -->
											<div class="portfolio-interactive-item anim-skewinup" data-scroll-speed="3">
												<a href="single-project-1.html" class="pi-item-title-link">
													<h2 class="pi-item-title">{{$event->name}}</h2>
													<div class="pi-item-hover-title">{{$event->name}}</div>
												</a>
												<div class="pi-item-category-wrap">
													<div class="pi-item-category">People</div>
													<!-- <div class="pi-item-category">Varia</div> -->
												</div>
												<figure class="pi-item-image cover-opacity-2">
													<img src="{{$event->photo}}" alt="image">
												</figure>
											</div>
											
								@endforeach
									<!-- End portfolio interactive item -->

									

								</div>
								<!-- End portfolio interactive -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ -->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-100 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
							<div class="tt-section-inner">

								<!-- Begin testimonials slider -->
								<div class="tt-testimonials-slider ts-full-width text-center cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup" data-loop="true" data-simulate-touch="true" data-speed="900">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide font-alter">
												<div class="tt-ts-item">
													<div class="tt-ts-text">
														"One of the best template I've ever had. I love it! It's fully customizable, well coded, fast and responsive - fitting for all kind of devices."
													</div>
													<div class="tt-ts-subtext">- Wironimo</div>
												</div>
											</div> 
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide font-alter">
												<div class="tt-ts-item">
													<div class="tt-ts-text">
														"Brilliant template. Tons of options, many concepts, design flexibility, code quality, explanatory comments in each section for easy styling."
													</div>
													<div class="tt-ts-subtext">- Gneto</div>
												</div>
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide font-alter">
												<div class="tt-ts-item">
													<div class="tt-ts-text">
														"Easy to customize, plenty of choices to display your portfolio, fast loading times. Excellent support."
													</div>
													<div class="tt-ts-subtext">- Brendak</div>
												</div>
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide font-alter">
												<div class="tt-ts-item">
													<div class="tt-ts-text">
														"Very nice design and well organised and commented code. Also good customer service."
													</div>
													<div class="tt-ts-subtext">- Gazzzzz</div>
												</div>
											</div> 
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide font-alter">
												<div class="tt-ts-item">
													<div class="tt-ts-text">
														"I founded a bug on Iphone and Ipad and the author fixed very quickly. I appreciated his efforts and his quickness in solving the problem."
													</div>
													<div class="tt-ts-subtext">- Admanente</div>
												</div>
											</div> 
											<!-- End swiper slide -->

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->

									<!-- Testimonials slider navigation (arrows) -->
									<div class="tt-ts-nav-prev">
										<div class="tt-ts-nav-arrow magnetic-item"></div>
									</div>
									<div class="tt-ts-nav-next">
										<div class="tt-ts-nav-arrow magnetic-item"></div>
									</div>

									<!-- Testimonials slider pagination -->
									<div class="tt-ts-pagination hide-cursor"></div>

								</div>
								<!-- End testimonials slider -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ -->
						<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-150">
							<div class="tt-section-inner">

								<!-- Begin scrolling text
								========================== -->
								<div class="tt-scrolling-text scr-text-stroke font-italic anim-fadeinup" data-scroll-speed="15">
									<div class="tt-scrolling-text-inner text-dark-3" data-text="Let's create something awesome together! -">
										Let's create something awesome together! -
									</div> <!-- /.tt-scrolling-text-inner -->
								</div>
								<!-- End scrolling text -->

								<!-- Begin scrolling text
								========================== -->
								<div class="tt-scrolling-text scr-text-stroke scr-text-reverse font-italic anim-fadeinup" data-scroll-speed="15">
									<div class="tt-scrolling-text-inner text-dark-3" data-text="Let's create something awesome together! -">
										Let's create something awesome together! -
									</div> <!-- /.tt-scrolling-text-inner -->
								</div>
								<!-- End scrolling text -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ -->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-5 padding-right-lg-5-p">

										<!-- Begin tt-Heading 
										====================== -->
										<div class="tt-heading tt-heading-lg margin-bottom-10-p anim-fadeinup">
											<h3 class="tt-heading-subtitle text-gray">Get in Touch</h3>
											<h2 class="tt-heading-title">Drop Us<br> A Line</h2>
										</div>
										<!-- End tt-Heading -->

										<!-- <div class="text-gray padding-bottom-40 anim-fadeinup">
											<p>Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Molestias assumenda, ratione voluptatibus. Libero nisi laudantium.</p>
										</div> -->

										<!-- Begin contact info -->
										<ul class="tt-contact-info padding-bottom-40 text-gray">
											<li class="anim-fadeinup">
												<span class="tt-ci-icon"><i class="fas fa-map-marker-alt"></i></span>
												121 King Street, Melbourne, Australia
											</li>
											<li class="anim-fadeinup">
												<span class="tt-ci-icon"><i class="fas fa-phone"></i></span>
												<a href="tel:+123456789000" class="tt-link">+(123) 456 789 000</a>
											</li>
											<li class="anim-fadeinup">
												<span class="tt-ci-icon"><i class="fas fa-envelope"></i></span>
												<a href="mailto:company@email.com" class="tt-link">company@email.com</a>
											</li>
										</ul>
										<!-- End contact info -->

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-7">

										<!-- Begin form -->
										<form id="tt-contact-form" class="tt-form-minimal anim-fadeinup">

											<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
											<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
											<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
											<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
											<!-- End Hidden Required Fields -->

											<div class="tt-row">
												<div class="tt-col-md-6">

													<div class="tt-form-group">
														<label>Name <span class="required">*</span></label>
														<input class="tt-form-control" type="text" name="Name" placeholder="" required>
													</div>

												</div> <!-- /.tt-col -->

												<div class="tt-col-md-6">

													<div class="tt-form-group">
														<label>Email address <span class="required">*</span></label>
														<input class="tt-form-control" type="email" name="Email" placeholder="" required>
													</div>

												</div> <!-- /.tt-col -->
											</div> <!-- /.tt-row -->

											<div class="tt-form-group">
												<label>Subject <span class="required">*</span></label>
												<input class="tt-form-control" type="text" name="Subject" placeholder="" required>
											</div>

											<div class="tt-form-group">
												<label>Select an option <span class="required">*</span></label>
												<select class="tt-form-control" name="option" required>
													<option value="" disabled selected>Please choose an option</option>
													<option value="Say Hello">Say hello</option>
													<option value="New Project">New project</option>
													<option value="Feedback">Feedback</option>
													<option value="Other">Other</option>
												</select>
											</div>

											<div class="tt-form-group">
												<label>Message <span class="required">*</span></label>
												<textarea class="tt-form-control" rows="6" name="Message" placeholder="" required></textarea>
											</div>

											<small class="tt-form-text"><em>Fields marked with an asterisk (*) are required!</em></small>

											<div class="tt-btn tt-btn-light-outline margin-top-40">
												<button type="submit" data-hover="Send Message">Send Message</button>
											</div>
										</form>
										<!-- End form -->

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->
					

					@include('includes/footer')>


				</div>
				<!-- End content wrap -->

			</div>
			<!-- End scroll container -->


		</main>
		<!-- End body inner -->


        

		@include('includes/foot');



	</body>

</html>