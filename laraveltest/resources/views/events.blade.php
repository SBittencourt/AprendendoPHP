<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Title -->
		<title>Your ID - Your are exactly where you should be!</title>

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
					<div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
						<div class="page-header-inner tt-wrap">
							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets/img/page-header/ph-1.jpg" alt="Image">
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<h1 class="ph-caption-title ph-appear">Events</h1>
								<div class="ph-caption-title-ghost ph-appear">Events</div>
								<div class="ph-caption-subtitle ph-appear">Check what's coming</div>
							</div> 
							<!-- End page header caption -->

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
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- Begin portfolio grid (works combined with tt-Ggrid!)
								========================== 
								* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
								* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
								* Use class "pgi-cap-center" to position portfolio grid item caption to center.
								* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
								--> 
								<div id="portfolio-grid" class="pgi-hover">

									<!-- Begin tt-Grid
									=================== 
									* Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
									* Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
									* Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
									* Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
									* Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
									* Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									* Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									-->
									<div class="tt-grid ttgr-layout-3 ttgr-gap-3">

										<!-- Begin tt-Ggrid top content 
										================================ -->
										<div class="tt-grid-top">

											<!-- Begin tt-Ggrid categories/filter classic
											============================================== -->
											<div class="tt-grid-categories-classic">

												<!-- Begin tt-Ggrid categories
												===============================
												* Use class "ttgr-cat-classic-center" to enable position center (no effect on small screens!).
												* Use class "ttgr-cat-classic-right" to enable position right (no effect on small screens!).
												-->
												<!-- <div class="ttgr-cat-classic-nav ttgr-cat-classic-right anim-fadeinup">
													<ul class="ttgr-cat-classic-list">
														<li class="ttgr-cat-classic-item"><a href="#" class="active">Show All</a></li>
														<li class="ttgr-cat-classic-item"><a href="#" data-filter=".branding">Branding</a></li>
														<li class="ttgr-cat-classic-item"><a href="#" data-filter=".people">People</a></li>
														<li class="ttgr-cat-classic-item"><a href="#" data-filter=".nature">Nature</a></li>
														<li class="ttgr-cat-classic-item"><a href="#" data-filter=".creative">Creative</a></li>
													</ul>
												</div> -->
												<!-- End tt-Ggrid categories-->

											</div>
											<!-- End tt-Ggrid categories/filter classic -->

										</div>
										<!-- End tt-Grid top content -->


										<!-- Begin tt-Grid items wrap 
										============================== -->
										<div class="tt-grid-items-wrap isotope-items-wrap">

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item people">
												<div class="ttgr-item-inner">

												

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
													-->
													<div class="portfolio-grid-item">
														@foreach ($events as $event)
															
															<a href="{{ route('events.details', $event->id) }}" class="pgi-image-wrap" data-cursor="View<br>Event">
																<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
																<div class="pgi-image-holder">
																	<div class="pgi-image-inner anim-zoomin">
																		<figure class="pgi-image ttgr-height">
																			<img src="{{ $event->photo }}" alt="image">
																		</figure> <!-- /.pgi-image -->
																	</div> <!-- /.pgi-image-inner -->
																</div> <!-- /.pgi-image-holder -->
															</a> <!-- /.pgi-image-wrap -->
															
																<div class="pgi-caption">
																<div class="pgi-caption-inner">
																	<h2 class="pgi-title">
																		<a href="{{ route('events.details', $event->id) }}">{{$event->name}}</a>
																	</h2>
																	<div class="pgi-categories-wrap">
																		<div class="pgi-category">{{$event->main_description}}</div>
																		<!-- <div class="pgi-category">Varia</div> -->
																	</div> <!-- /.pli-categories-wrap -->
																</div> <!-- /.pgi-caption-inner -->
															</div> <!-- /.pgi-caption -->
														</div>
									
														@endforeach


													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											

											
									</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End portfolio grid -->


								<!-- Begin tt-pagination (uncomment below code if you want to use pagination)
								========================= 
								* Use class "tt-pagin-center" to align center.
								-->
								<!-- <div class="tt-pagination tt-pagin-center anim-fadeinup">
									<div class="tt-pagin-prev">
										<a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
									</div>
									<div class="tt-pagin-numbers">
										<a href="#0" class="tt-pagin-item magnetic-item active">1</a>
										<a href="" class="tt-pagin-item magnetic-item">2</a>
										<a href="" class="tt-pagin-item magnetic-item">3</a>
										<a href="" class="tt-pagin-item magnetic-item">4</a>
									</div>
									<div class="tt-pagin-next">
										<a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div> -->
								<!-- End tt-pagination -->

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
									<a href="contact.html" class="tt-pn-link anim-fadeinup">
										<div class="tt-pn-title">Let's talk</div>
										<div class="tt-pn-hover-title">Let's talk</div>
									</a> <!-- /.tt-pn-link -->

									<div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>

									<!-- Use if destination page contains page header image -->
									<div class="tt-pn-image">
										<img src="assets/img/page-header/ph-3.jpg" alt="image">
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
		<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
		<script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script> <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
		<script src="assets/vendor/gsap/ScrollTrigger.min.js"></script> <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

		<script src="assets/vendor/smooth-scrollbar.js"></script> <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
		<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->
		<script src="assets/vendor/isotope/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
		<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/isotope/packery-mode.pkgd.min.js"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
		<script src="assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>



	</body>

</html>