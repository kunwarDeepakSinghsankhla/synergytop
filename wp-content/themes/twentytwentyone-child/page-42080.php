<?php
/*
Template Name: Custom Software Development Page Template
*/
get_header(); ?>
<section id="Cus-Soft-Developer" class="cus-soft-developer">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-30 f-w-600 black-carbon mb-3">React Native</h2>              
            </div>
        </div>
    </div>
</section>

<section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
    <div class="container">
        <div class="text-center mb-0">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4">Unleash the power of react native</h2>
            <div class="f-18 f-w-400   secondary-blk text-start">
                <p>React Native is among one of the most popular Cross-Platform Development Technologies. Our React Native development team has vast experience and expertise to develop <strong>cutting-edge mobile applications</strong> that are perfectly aligned with your requirements. We have different engagement models and flexible pricing structures you can choose from to suit your budget and individual needs. We offer 24 x7 support to our clients and the team is committed to on-time project delivery.</p>
            </div>
        </div>
    </div>
</section>


<section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
    <div class="container">
        <div class="text-center mb-0">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4 text-start">React Native Services</h2>
            <div class="f-18 f-w-400   secondary-blk text-start">    
               <ul>
                <li>Custom Application Development</li>
                <li>UI and UX Development</li>
                <li>Migration to React Native</li>
                <li>Application Maintenance and Support</li>
               </ul>
            </p>
            </div>
        </div>
    </div>
</section>
<section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
    <div class="container">
        <div class="text-center mb-0">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4 text-start">Why React Native</h2>
            <p>React Native is an open-source, cross-platform technology developed on JavaScript and backed by Facebook. We love working on React Native due to its numerous advantages that ultimately bring business benefits for our clients –</p>
            <div class="f-18 f-w-400   secondary-blk text-start">    
               <ul>
                <li>Reusable Code</li>
                <li>Enables faster development and quicker go-to-market</li>
                <li>Responsive UI</li>
                <li>Maximum Viable Product at lower cost</li>
                <li>Hot Reloading</li>
                <li>Easy Integration of Third-party Applications</li>
               </ul>
            </p>
            </div>
            <div class="col-md-8 mx-auto px-0">
                <div class="w-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services/new-react-native-1-800x683.webp" alt="react-native" class="img-fluid object-fit-cover">
                </div>
            </div> 
        </div>
    </div>
</section>

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
