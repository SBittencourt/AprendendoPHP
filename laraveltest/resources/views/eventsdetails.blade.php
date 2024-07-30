<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Title -->
		<title>{{$event->name}}</title>
		
		@include('includes/head')

	</head>
	<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
		<main id="body-inner">
			<div id="page-transition">
				<div class="ptr-overlay"></div>
				<div class="ptr-preloader">
					<div class="ptr-prel-content">
						<img src="/assets/img/stage.png" class="ptr-prel-image tt-logo-light" alt="Logo">
					</div> <!-- /.ptr-prel-content -->
				</div> <!-- /.ptr-preloader -->
			</div>
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<div class="bg-noise"></div>
			<div id="scroll-container">
				 				
			@include('includes/header')

				
				<!--  Begin content wrap -->
				<div id="content-wrap">

					
					<div id="page-header" class="ph-full ph-inline ph-bg-image ph-image-shadow ph-image-cover-5 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="{{$event->header_photo}}" alt="Image">
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption-->

							<div class="ph-caption">
								<div class="ph-categories ph-appear">
									<div class="ph-category">Nature</div>
								</div> 

								<h2 class="ph-caption-title ph-appear">{{$event->name}}</h2> 
							</div> 
							<!-- End page header caption -->

							<!-- Begin project info list-->

								<div class="project-info-list anim-fadeinup">
									<ul>
										<li>
											<div class="pi-list-heading">Place</div>
											<div class="pi-list-cont">{{$event->place}}</div>
										</li>
										<li>
											<div class="pi-list-heading">Start date</div>
											<div class="pi-list-cont">{{$event->start_date}}</div>
										</li>
										<li>
											<div class="pi-list-heading">End date</div>
											<div class="pi-list-cont">{{$event->end_date}}</div> <!-- Describe in a few words -->
										</li>
										<li>
											<div class="pi-list-heading">Website</div>
											<div class="pi-list-cont"><a href="{{$event->external_link}}" target="_blank" rel="noopener">Visit site<span class="pi-list-icon tt-link"><i class="fas fa-arrow-right"></i></span></a></div>
										</li>
									</ul>
								</div>

							<!-- End project info list -->

						</div> <!-- /.page-header-inner -->

						<!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset) 
						============================== -->
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

						<!-- Begin made with love 
						========================== -->
						<div class="made-with-love ph-appear">
							<div class="mwl-inner">
								<div class="mwl-text">Made with</div>
								<div class="mwl-icon"><i class="far fa-heart"></i></div>
							</div>
						</div>
						<!-- End made with love -->

						<!-- Begin page header share (share buttons are for design purposes only!) 
						============================= -->
						<div class="ph-share">
							<div class="ph-share-trigger ph-appear">
								<div class="ph-share-text">Share</div>
								<div class="ph-share-icon magnetic-item"><i class="fas fa-share-alt"></i></div>
							</div> <!-- /.ph-share-trigger -->

							<div class="ph-share-content">
								<div class="ph-share-close cursor-close"><div class="bg-noise"></div></div>
								<div class="ph-share-inner">
									<h1 class="ph-share-title ph-share-appear">Spread the Word!</h1>
									<div class="ph-share-subtitle ph-share-appear">Share this project with your friends</div>

									<div class="social-buttons ph-share-appear">
										<ul>
											<li><a href="#0" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#0" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#0" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
										</ul>
									</div> <!-- /.social-buttons -->

								</div> <!-- /.ph-share-inner -->
								
								<div class="ph-share-ghost ph-share-appear">Share</div>
							</div> <!-- /.ph-share-content -->
						</div>
						<!-- End page header share -->
						
					</div>
					<!-- End page header -->


					<!-- *************************************
					*********** Begin page content *********** 
					************************************** -->
					<div id="page-content">


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-180 padding-left-sm-3-p padding-right-sm-3-p">
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-4 padding-right-md-5-p">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading tt-heading-xsm margin-bottom-60 anim-fadeinup">
											<h2 class="tt-heading-title">Description</h2>
											<!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
										</div>
										<!-- End tt-Heading -->

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-8">

										<div class="anim-fadeinup text-gray">
											<p>{{$event->main_description}}</p>
											<!-- <div class="tt-btn tt-btn-link no-margin">
												<a href="dummy-page.html" data-hover="Read More">Read More</a>
											</div> -->
										</div>

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- Begin tt-image
								====================
								* Use class "tti-fixed-height" to enable image fixed height (no effect on small screens!).
								* Use class "anim-image-parallax" on <img> tag to enable parallax effect.
								* Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-100". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-image tti-fixed-height">
									<figure>
										<img class="anim-image-parallax tt-lazy" src="{{$event->photo}}" alt="image">
										<figcaption>
											Image Caption
										</figcaption>
									</figure>
								</div> 
								<!-- End tt-image -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-100 padding-bottom-xlg-100 padding-left-sm-3-p padding-right-sm-3-p">
							<div class="tt-section-inner tt-wrap max-width-900">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xsm anim-fadeinup">
									<h2 class="tt-heading-title">Afterwords</h2>
									<!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
								</div>
								<!-- End tt-Heading -->

								<div class="anim-fadeinup text-gray">
									<p><p>{{$event->second_description}}</p></p>
								</div>

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner">

								<!-- =============================
								///// Begin content carousel /////
								==================================
								* Use class "cc-shifted" to enable shifted style (no effect on small screens!).
								* Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
								* Use class "cc-scale-down" to enable scale down animation on carousel click.
								* Use class "cc-pagination-outside" to bring pagination outside.
								* Use class "cc-hide-pagination" to hide pagination (for desktop only!).
								* Use class "cc-hide-navigation" to hide navigation arrows.
								* Available data attributes:
										data-speed="900"......................(milliseconds)
										data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
										data-simulate-touch="true"............(true/false)
										data-loop="true"......................(true/false)
										data-pagination-type="bullets"........(bullets/fraction/progressbar)
								-->
								<div class="tt-content-carousel cursor-drag cc-scale-down cc-hide-pagination cc-hide-navigation" data-loop="true" data-simulate-touch="true" data-speed="900">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure class="cover-opacity-1">
														<img class="tt-cc-image anim-image-parallax swiper-lazy" src="/assets/img/area1.png" data-src="/assets/img/area1.png" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure class="cover-opacity-1">
														<img class="tt-cc-image anim-image-parallax swiper-lazy" src="/assets/img/area2.png" data-src="/assets/img/area3.png" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure class="cover-opacity-1">
														<img class="tt-cc-image anim-image-parallax swiper-lazy" src="/assets/img/low-qlt-thumb.jpg" data-src="/assets/img/portfolio/single-project/project-7/project-7-4.jpg" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure class="cover-opacity-1">
														<img class="tt-cc-image anim-image-parallax swiper-lazy" src="/assets/img/low-qlt-thumb.jpg" data-src="/assets/img/portfolio/single-project/project-7/project-7-5.jpg" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure class="cover-opacity-1">
														<img class="tt-cc-image anim-image-parallax swiper-lazy" src="/assets/img/low-qlt-thumb.jpg" data-src="/assets/img/portfolio/single-project/project-7/project-7-6.jpg" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->

									<!-- Content carousel navigation (arrows) -->
									<div class="tt-cc-nav-prev">
										<div class="tt-cc-nav-arrow magnetic-item"></div>
									</div>
									<div class="tt-cc-nav-next">
										<div class="tt-cc-nav-arrow magnetic-item"></div>
									</div>

									<!-- Content carousel pagination -->
									<div class="tt-cc-pagination hide-cursor"></div>

								</div>
								<!-- End content carousel -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin page nav 
								==================== 
								* Use class "tt-pn-stroke" to enable title stroke style.
								* Use class "tt-pn-scroll" to enable hover title scroll. Note: If "tt-pn-hover-title" text is wider than "tt-pn-link" then it scrolls by default. The longer the text, the faster it scrolls.
								-->
								<div class="tt-page-nav tt-pn-scroll">
									<a href="single-project-8.html" class="tt-pn-link anim-fadeinup">
										<div class="tt-pn-title">Next Project</div>
										<div class="tt-pn-hover-title">Wall Lamp</div>
									</a> <!-- /.tt-pn-link -->

									<div class="tt-pn-subtitle anim-fadeinup">Explore More</div>

									<!-- Use if destination page contains page header image -->
									<div class="tt-pn-image">
										<img src="/assets/img/portfolio/portfolio-7.jpg" alt="image">
									</div>
								</div>
								<!-- End page nav -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->


					<!-- ======================
					///// Begin tt-footer /////
					=========================== -->
					<footer id="tt-footer">
						<div class="tt-footer-inner">

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-left">
								<div class="footer-col-inner">

									<!-- You can use whatever button or link here -->
									<div class="tt-btn tt-btn-link">
										<a href="#" class="scroll-to-top" data-hover="Back to top">Back to top</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center order-m-last">
								<div class="footer-col-inner">

									<div class="tt-copyright">
										© Copyright - <a href="https://themetorium.net" target="_blank" rel="noopener" class="tt-link">Themetorium.net</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-right">
								<div class="footer-col-inner">

									<div class="footer-social">
										<div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>
										<div class="social-buttons">
											<ul>
												<li><a href="https://www.facebook.com/themetorium" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>
												<li><a href="https://twitter.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>
												<li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
												<li><a href="https://dribbble.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Dr.</a></li>
												<li><a href="https://www.behance.net/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Be.</a></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div> <!-- /.footer-social -->

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

						</div> <!-- /.tt-section-inner -->
					</footer>
					<!-- End tt-footer -->


				</div>
				<!-- End content wrap -->

			</div>
			<!-- End scroll container -->


		</main>
		<!-- End body inner -->


        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="/assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

		<!-- Libs and Plugins JS -->
		<script src="/assets/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
		<script src="/assets/vendor/gsap/ScrollToPlugin.min.js"></script> <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
		<script src="/assets/vendor/gsap/ScrollTrigger.min.js"></script> <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

		<script src="/assets/vendor/smooth-scrollbar.js"></script> <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
		<script src="/assets/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->
		<script src="/assets/vendor/isotope/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
		<script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="/assets/vendor/isotope/packery-mode.pkgd.min.js"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
		<script src="/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="/assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

		<!-- Theme master JS -->
		<script src="/assets/js/theme.js"></script>



	</body>

</html>