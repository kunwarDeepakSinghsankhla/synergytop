<?php
/*
Template Name: Thank You Page Template
*/
get_header(); ?>
<!-- service page-1 -->

<section id="Cus-Soft-Developer" class="default-page technology-listing" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/thank-you-banner.webp');">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-40 f-w-600 section_headingv1 mb-3">Thank You</h2>   
                <!-- <h4>Redefining Limits through Innovations in Artificial Intelligence.</h4>            -->
            </div>
        </div>
    </div>
</section>


<section id="Our-Native" class="our-native sectionSpacing pb-0">
    <div class="container">
        <div class="row pinkMix-gradient">
            <div class="col-12 col-md-8  py-4 px-5">
                <h1 class="f-30 f-w-600 section_headingv1 mb-3">We’ve Got Your Message!</h1>
                <div class="f-18 f-w-400 secondary-blk mb-3">
                    <p>Thank you for contacting us at SynergyTop. We are glad that you reached out to us and our team will get in touch with you soon.</p>
                    <p>Meanwhile, you can check out our <a href="<?php echo get_site_url(); ?>/blog/">Blog</a> and <a href="<?php echo get_site_url(); ?>/portfolio/">Portfolio</a> or know more <a href="<?php echo get_site_url(); ?>/about-us/">About Us</a>.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 px-0">
                <div class="w-100 h-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/thank-you.webp" alt="web development services banner" class="img-fluid object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="Explore-Now" class="explore-now sectionSpacing bg-white pb-0">
    <div class="container">
        <div class="w-100 text-center">
            <div class="sectionSpacing align-content-center explore-img" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2025/07/cutting-edge.png');">
                <p class="f-20 f-w-400  text-white mb-5">Have any doubts? Check out our FAQs page!</p>
                <a href="<?php echo get_site_url(); ?>/contact-us/" target="_self" class="btn btn-outline-light btn-hover bg-white f-18 f-w-500  text-primary border-0 mb-3">Get Answers</a>
            </div>
        </div>
    </div>
</section>



<section id="client" class="sectionSpacing client pb-0">
    <div class="py-5 bg-color">
        <?php echo do_shortcode('[client_testimonials]'); ?>
    </div>
</section>

<!-- blog-->

<section id="blog" class="sectionSpacing pb-0 blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="f-30 f-w-600 section_headingv1 mb-3">Our Related Blogs</h2>
                    <p class="f-18 f-w-400 black-111">
                        "Insights & Innovations: Stay Updated with Our Latest Blogs"
                    </p>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[recent_blog_section]'); ?>
    </div>
</section>
<?php get_footer(); ?>
