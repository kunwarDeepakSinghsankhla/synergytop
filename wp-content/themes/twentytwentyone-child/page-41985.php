<?php
/*
Template Name: Custom Software Development Page Template
*/
get_header(); ?>
<section id="Cus-Soft-Developer" class="cus-soft-developer">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-30 f-w-600 black-carbon mb-3">Client Testimonials</h2>              
            </div>
        </div>
    </div>
</section>
<!-- client Testimonials -->
<div style="background: linear-gradient(90deg, #630463 15%, #001c64 85%);" class="client-test sectionSpacing pb-0">
    <?php echo do_shortcode('[client_testimonials]'); ?>
</div>


<!-- Our Expert -->
<?php echo do_shortcode('[our_expert_e_commerce_development_services]'); ?>

<!-- brandRating section -->
<?php echo do_shortcode('[brand_rating_slider]'); ?>


<!-- Our Recent Work -->
<section id="Our-Recent-Work" class="our-recent-wrk sectionSpacing ">
    <div class="container">
        <div class="text-center">
            <h2 class="f-30 f-w-600 section_headingv1 mb-4">Our Recent Work</h2>
            <p class="f-18 f-w-400 black-111">
                Bringing Your Ideas to Life & Crafting Your Digital Success
            </p>
        </div>
        <?php echo do_shortcode('[our_work_section]'); ?>
    </div>
</section>


<section id="Why-Choose-ST" class="why-choose-st sectionSpacing" style="background-color: #F0F5FF">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-12">
                <h2 class="f-30 f-w-600 section_headingv1 mb-3">Why Choose SynergyTop For Product Engineering?</h2>
               <p class="f-18 f-w-400 secondary-blk">
                    At SynergyTop, we have a proven track record of delivering high-quality enterprise product engineering services. Products that can help businesses achieve their goals faster, enhance efficiency, and boost organizational performance.
               </p>
               <p class="f-18 f-w-400 secondary-blk">
                     Here are some reasons why you should choose us for as your preferred digital product engineering services company:
               </p>
               <p class="f-18 f-w-400 secondary-blk">
                    Experienced team of product engineers Agile and customer-centric approach to product development Cutting-edge technologies and tools End-to-end product engineering solutions Proven track record of delivering successful projects Affordable pricing and flexible engagement models
               </p>
                <p class="f-18 f-w-400 secondary-blk">
                    At SynergyTop, we are a committed product engineering services company. And we are always eager to help businesses build innovative products that can deliver value to their customers. Contact us today to learn how our product engineering solutions can help you achieve your business objectives faster.
                </p>
            </div>
            <div class="col-lg-5 col-md-4 col-12">
                <div style="background-color: #C4D5FF" class="form-input-wrapper px-4 py-4">
                    <h3 class="f-18 f-w-600 section_headingv1">Lets start a new project</h3>
                       <?php echo do_shortcode('[contact-form-7 id="1e97a09" title="Let\'s Start A New Project"]'); ?>
                </div>
            </div>
        </div>
    <div>
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
