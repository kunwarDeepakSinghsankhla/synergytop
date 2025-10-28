<?php
/*
Template Name: Jobs Listing Page
*/
get_header(); ?>
<!-- About banner -->
<section id="Career-banner" class="career-banner"
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Career-img/career-banner-2.png');">
    <div class="container h-100 align-content-md-end align-content-center">
        <div class="row mb-space">
            <div class="col-12 text-center px-5">
                <h2 class="f-45 f-w-600 gradient-text fontPoppins mb-3">CAREERS</h2>
                <h4 class="f-24 f-w-600 section_headingv1 fontPoppins mb-3">Join Us - Where Ordinary Careers Become
                    Extraordinary Tales of Excellence</h4>
                <p class="fontOutfit f-18 black-carbon f-w-400 mb-0">We believe that our employees are our biggest asset! We
                    strive to provide them with new and challenging opportunities to hone their technology skills and
                    fast-paced career growth. Write to us at careers@synergytop.com or give us a call
                    at +91 7879123770 if you wish to be a part of our dynamic team.</p>
            </div>
        </div>
    </div>
</section>
<!-- Job openings -->
<section id="Job-openings" class="job-openings sectionSpacing">
    <div class="container ">
        <?php
        if ( have_posts() ) {

            // Load posts loop.
            while ( have_posts() ) {
                the_post();

                echo do_shortcode("[awsmjobs]");
            }

            // Previous/next page navigation.
            twenty_twenty_one_the_posts_navigation();

        } else {

            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content/content-none' );

        } ?>
    <div class="f-18 f-w-500">
        <a href="mailto:hr@synergytop.com" class="black-111">Submit Your Resume to hr@synergytop.com</a>
    </div>
    </div>
</section>


<!-- Us is Epic -->
 <section id="Us-is-Epic"  class="us-is-epic sectionSpacing" style="background-color: #F0F5FF;">
    <div class="container">
        <div class=" text-center mb-4">
            <h2 class="f-30 f-w-600 section_headingv1 fontPoppins">This is Why Working With Us is Epic</h2>
        </div>
        <div class="row g-4">
            <!-- Job Card Start -->
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card rounded-5">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Career-img/st-em-1.webp" class="card-img-top" alt="Epic Image 1">
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card rounded-5">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Career-img/st-em-2.webp" class="card-img-top" alt="Epic Image 2">
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card rounded-5">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Career-img/st-em-3.webp" class="card-img-top" alt="Epic Image 3">
                </div>
            </div>
        </div>
    </div>

 </section>
 <!-- let’s talk! -->
<section id="lets-talk" class="lets-talk sectionSpacing bg-white explore-now pb-0">
    <div class="container">
       <div class="w-100 text-center">
        <div class="sectionSpacing align-content-center explore-img" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/cutting-edge.png');">
            <h1 class="f-30 f-w-700 fontPoppins text-white mb-3">
               We’re ready when you are — let’s talk!
            </h1>
            <p class="f-20 f-w-500 fontOutfit text-white mb-4">
                 Our experts will guide you through every phase, from planning to execution.
            </p>
            <a href="<?php echo get_site_url(); ?>/contact-us/" class="btn btn-outline-light btn-hover bg-white f-18 f-w-500 fontPoppins text-primary color-lightblue border-0 mb-3">Request a Call Back</a>
        </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>