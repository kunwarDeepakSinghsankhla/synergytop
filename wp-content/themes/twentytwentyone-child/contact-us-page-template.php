<?php
/*
Template Name: Contact Us Page Template
*/
get_header(); ?>

<!-- contact banner -->
<section id="Contact-us-section" class="contact-us-section py-3"
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact-us/contact-info.png');">
    <div class="banner-health w-100">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <h2 class="f-w-600 f-46 gradient-text mb-3">Contact Us</h2>
                    <h3 class="f-w-600 f-24 color-blue lh-sm">
                        Meet The Team That Drives Innovation & Excellence
                    </h3>
                    <div class="f-w-400 f-18 black-carbon">         
                        <p>
                            Meet the team behind our success — a group of innovators, strategists, and problem-solvers
                            committed to delivering excellence. Whether you have a question, a project idea, or just want to
                            connect, we’re here to listen and help. Reach out to start a conversation with the people who
                            are passionate about turning your vision into reality.
                        </p>
                    </div>
                    <a href="#" class="text-hover color-lightblue f-18 f-w-500   my-2 my-md-1">Questions,
                        ideas, or projects — we’re just a click away.</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get-in-touch  -->
 <section id="contact" class="get-in-touch sectionSpacing">
   <div class="container">
	   <div class="p-4" style="background: #E2EDFF;">
		<div class="row">
			<div class="col-md-12 text-white">
				<h4 class="mt-3 f-18 f-w-600 section_headingv1">Get In Touch</h4>
                <?php echo do_shortcode('[contact-form-7 id="b8858d9" html_class="mt-4" title="Contact Us Form"]'); ?>
				<!-- <form class="mt-4">
					<div class="row">	
						<div class="col-md-12 mb-3">
							<label class="form-label text-primary-gray f-14">Your
							Name <span class="text-danger">*</span></label>
							<input type="text" class="form-control input-txt fontPoppins" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3 mt-3">
							<label class="form-label text-primary-gray f-14">Your Email
							ID <span class="text-danger">*</span></label> 
							<input type="email" class="form-control input-txt fontPoppins" required>
						</div>
						<div class="col-md-6 mb-3 mt-3">
							<label class="form-label text-primary-gray f-14" for="phone">Phone No.<span class="text-danger">*</span></label>
							<input type="tel" class="form-control input-txt fontPoppins" name="phone" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3 mt-3">
							<label class="form-label text-primary-gray f-14">Company Name</label> 
							<input type="text" class="form-control input-txt fontPoppins">
						</div>
						<div class="col-md-6 mb-3 mt-3">
							<label class="form-label text-primary-gray f-14">Company Website</label>
							<input type="text" class="form-control input-txt fontPoppins">
						</div>
					</div>
					<div class="mb-4 mt-3">
						<textarea class="form-control rounded-0 f-14" rows="3" placeholder="Message"></textarea>
					</div>
					<div class="text-end">
						<button type="submit" class="btn btn-light  px-5 py-2 border-0 rounded-0 f-14">Submit</button>
					</div>
				</form> -->
			</div>
		</div>
	   </div>
   </div>
 </section>

 <section id="client" class="sectionSpacing client">
    <div class="py-5 bg-color">
        <?php echo do_shortcode('[client_testimonials]'); ?>
    </div>
</section>

<!-- Our Growth section -->
<section id="growth-statistics" class="sectionSpacing growth-statistics">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section_headingv1 text-center mb-4 pb-2 f-30 f-w-600">Our
                    Growth Statistics</h2>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="  counter" data-target="50">50+</h4>
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/icon/GrowthStatistics01.png"
                            alt="GrowthStatistics01">
                    </div>
                    <p class="mb-0">5-star <span class="d-block fw-semibold ">client
                            reviews</span></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="  counter" data-target="100">100+</h4>
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/icon/GrowthStatistics02.png"
                            alt="GrowthStatistics02">
                    </div>
                    <p class="mb-0">Custom software<span class="d-block fw-semibold ">Solutions</span></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="  counter" data-target="11">11+</h4>
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/icon/GrowthStatistics03.png"
                            alt="GrowthStatistics03">
                    </div>
                    <p class="mb-0">Yeras of<span class="d-block fw-semibold ">Experience</span></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="  counter" data-target="100">100+</h4>
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/icon/GrowthStatistics04.png"
                            alt="GrowthStatistics04">
                    </div>
                    <p class="mb-0">Software<span class="d-block fw-semibold ">Masterminds</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brand Rating Section -->
<section id="brandRating" class="contact-client rating_sld_section sectionSpacing">
    <div class="container">
        <div class="row">
			<h2 class="text-white text-center mb-3 pb-2 f-30 f-w-600">Our Happy Clients</h2>
            <div class="col-12">
                <div class="ratingDiv my-3">
                    <div class="swiper RatingSwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-5d2b10a66941f28e2" aria-live="off"
                            style="cursor: grab; transition-duration: 0ms; transform: translate3d(-105.091px, 0px, 0px); transition-delay: 0ms;">
                            <div class="swiper-slide swiper-slide-prev" style="width: 170.182px; margin-right: 40px;"
                                role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                                <div class="card border-0 text-center p-4 rounded-1">
                                    <div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/logo-client/Client Logo's Color/Onswitch.png" class="logo" alt="Onswitch">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" style="width: 170.182px; margin-right: 40px;"
                                role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                                <div class="card border-0 text-center p-4 rounded-1">
                                    <div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/logo-client/Client Logo's Color/Orisis.png" class="logo" alt="Orisis">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="width: 170.182px; margin-right: 40px;"
                                role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                                <div class="card border-0 text-center p-4 rounded-1">
                                    <div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/logo-client/Client Logo's Color/Prickly-pea.png" class="logo" alt="Prickly-pea">
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="6 / 6" data-swiper-slide-index="5"
                                style="width: 170.182px; margin-right: 40px;">
                                <div class="card border-0 text-center p-4 rounded-1">
                                    <div>
                                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/logo-client/Client Logo's Color/Nasdaq.png" class="logo" alt="Nasdaq">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 170.182px; margin-right: 40px;" role="group"
                                aria-label="2 / 6" data-swiper-slide-index="1">
                                <div class="card border-0 text-center p-4 rounded-1">
                                    <div>
                                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/logo-client/Client Logo's Color/Revolve.png" class="logo" alt="Revolve">
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 170.182px; margin-right: 40px;" role="group"
                                aria-label="3 / 6" data-swiper-slide-index="2">
                                <div class="card border-0 text-center p-4 rounded-1">
                                    <div>
                                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/logo-client/Client Logo's Color/Stark.png" class="logo" alt="Stark">
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span
                            class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Meet Us Section -->
<section id="contact" class="meet-us sectionSpacing pb-0">
    <div class="container">
        <div class="row mx-0">
            <div class="col-md-12 p-4 ctm-bdr contact-bg">
                <div class="d-flex ">
                    <div class="f-18">
                        <p class="mb-2"><span class="me-1"><img
                                    src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/icon/section_pointer.png"
                                    class="w-auto" height="20px" alt="section_pointer"></span>Meet Us</p>
                        <h2 class="section_headingv1 mb-0  pb-2 mb-3 f-30 f-w-600">Let’s
                            Create Digital Excellence Together</h2>
                        <h3 class="contact_heading f-18 f-w-600">Office Address</h3>
                    </div>
                </div>
                <div class="row mt-4 address">
                    <div class="col-12">
                        <div class="row mx-0">
                            <div class="col-md-4">
                                <h5 class=" city f-16 f-w-600">San Diego</h5>
                                <p class="text-primary-gray fontOpenSans f-14">8155 Mercury Ct, Suite 120, San <br>
                                    Diego, CA 92111</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class=" city f-16 f-w-600">Los Altos </h5>
                                <p class="text-primary-gray fontOpenSans f-14">878 Lockhaven CT, Los Altos, CA<br> 94024
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h5 class=" city f-16 f-w-600">Los Angeles</h5>
                                <p class="text-primary-gray fontOpenSans f-14">3343
                                    Keystone Ave, Suite 7, Los <br>Angeles, CA 90034</p>
                            </div>
                        </div>
                        <div class="border-blue-btm mx-2"></div>
                        <div class="row mt-5 mx-0">
                            <div class="col-md-6">
                                <h5 class=" city f-16 f-w-600">Pune</h5>
                                <p class="text-primary-gray fontOpenSans f-14">402, 4th
                                    Floor, TRANSBAY Balewadi, Pune,<br> Maharashtra India
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5 class=" city f-16 f-w-600">Indore</h5>
                                <p class="text-primary-gray fontOpenSans f-14">MPSEDC
                                    IT Park, 142-A, Electronic Complex,<br> Indore, MP, India
                                    452010</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>