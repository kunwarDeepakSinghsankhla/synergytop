<?php 
    /* Template Name: WordPress */

get_header(); ?>

<!-- banner page #c -->
<section id="Angular-banner" class="service-second technology-listing angular-banner"
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/services-listing.png');">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-2 px-md-5">
                <h2 class="f-36 f-w-600 section_headingv1 mb-4">WordPress</h2>
            </div>
        </div>
    </div>
</section>
<!-- Why choose WordPress -->
<section id="#WordPress-Why-choose" class="WordPress-why-choose sectionSpacing">
    <div class="container"> 
        <div class="card soft-gradient-pink-lightblue border-pink-lightblue py-4 px-5 rounded-2 ">
            <div class="row justify-content-center justify-content-md-end">
                <div class="col-12">
                    <div class="mt-3">
                        <div class="webkit-center mb-4">
                            <h2 class="f-24 f-w-600 section_headingv1 pb-2 border-bottom mx-content">
                               Why choose WordPress for your business website?
                            </h2>
                        </div>
                        <div class="f-16 f-w-400 secondary-blk">
                            <p> WordPress is the most popular Content Management System (CMS) with almost 1/3rd of the web being built on it. Whether you are looking for speed, efficiency, ease, or customization control, WordPress delivers on all grounds. At a cost that matches any budget. </p>
                            <p> With SynergyTop’s experienced WordPress wizards, you can launch your business website, blog, or E-commerce store in no time. Plus you get seamless and round-the-clock maintenance services to keep your WordPress world up and running always. </p>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-center gap-4">
                            <a href="<?php echo get_site_url(); ?>/technology/wordpress-development/" class="text-decoration-none">
                                <button class="btn btn-gradient-pink-blue rounded-0  py-2 px-3 border-0 mx-1 text-white">Looking for WordPress Development Services ? </button>
                            </a>
                            <a href="<?php echo get_site_url(); ?>/technology/wordpress-maintenance/" class="text-decoration-none">
                                <button class="btn btn-gradient-pink-blue rounded-0  py-2 px-3 border-0 mx-1 text-white"> Looking for WordPress Development Services ? </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Explore Now -->
<section id="Explore-Now" class="explore-now sectionSpacing bg-white pb-0">
    <div class="container">
       <div class="w-100 text-center mb-3">
            <div class="sectionSpacing align-content-center explore-img px-4" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/cus-soft-dev/cutting-edge.png');">
                <div class="f-24 f-w-600  mb-3 mt-3 text-white">
                    <p> Kickstart Your WordPress Development Project Today </p>
                </div>
                <div class="f-18 f-w-400 secondary-blk text-white">
                    <p> Ready to take your business to the next level with our expert WordPress Development services? SynergyTop is among the top WordPress Development companies in the USA and can help you achieve the best results. </p>
                </div>
                <a href="<?php echo get_site_url(); ?>/contact-us" class="btn btn-outline-light btn-hover bg-white f-18 f-w-500  text-primary border-0 mt-2">Explore Now</a>
            </div>
        </div>
    </div>
</section>
<!-- blog-->
<section id="blog" class="sectionSpacing pb-0 blog">
    <div class="container">
        <div class="text-center mb-3">
            <h2 class="section_headingv1 mb-0  pb-2 f-30 f-w-600">Our Related Blogs</h2>
            <div class="f-18 f-w-400 secondary-blk">
                <p> "Insights & Innovations: Stay Updated with Our Latest Blogs" </p>
            </div>
        </div>
        <div class="row mt-4">
            <?php echo do_shortcode('[recent_blog_section]'); ?>
        </div>
    </div>
</section>
<?php
get_footer(); ?>