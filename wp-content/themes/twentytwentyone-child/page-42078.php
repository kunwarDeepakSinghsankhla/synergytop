<?php
/*
Template Name: Custom Software Development Page Template
*/
get_header(); ?>
<section id="Cus-Soft-Developer" class="cus-soft-developer">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-30 f-w-600 black-carbon mb-3">Xamarin</h2>              
            </div>
        </div>
    </div>
</section>

<section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
    <div class="container">
        <div class="text-center mb-0">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4">Xamarin</h2>
            <div class="f-18 f-w-400   secondary-blk text-start">
               <p>Xamarin is a cross-platform technology developed by Microsoft used for developing native applications for Windows, Android, and iOS devices. The Xamarin code is reusable, and the apps built using it are equally functional across platforms. Apps developed using Xamarin are also known for delivering high performance.</p>
               <p>The SynergyTop team is proficient in <strong>Xamarin mobile app development. </strong> And our team uses Xamarin.iOS, Xamarin.Android and Xamarin Studio or Visual Studio to develop Native iOS and Android Apps in C#. We can help you by converting the existing code library to a Xamarin Application with the help of bindings. Xamarin also enables the use of the same code for similar functions – such as business logic, network access, and database usage. Our developers have to write the code once and they can use the same code again and again on multiple platforms. This helps you speed up app development timelines and get a faster time-to-market.</p>
            </div>
            <div class="col-md-8 mx-auto px-0">
                <div class="w-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services/XAMRIN-800x555.jpg"   alt="XAMRIN" class="img-fluid object-fit-cover">
                </div>
            </div> 
        </div>
    </div>
</section>


<section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
    <div class="container">
        <div class="text-center mb-0">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4">Xamarin Services at SynergyTop</h2>
            <p>Here are the top reasons to place your trust in Xamarin development services by SynergyTop:</p>
            <div class="f-18 f-w-400   secondary-blk text-start">    
               <ul>
                <li><strong>Bespoke services –</strong>No copied or generic solutions. Tailor-made solutions that meet and match your needs.</li>
                <li><strong>Focus on quality –</strong>Our experts excel at coding, programming, and app development. And quality remains our prime focus during each step of the process.</li>
                <li><strong>Maintenance and post-launch services –</strong>We don’t leave you to handle post-launch app maintenance on your own. Our continued services ensure that you don’t just have a great app but also a well-maintained app.</li>
                <li><strong>Use of industry’s best practices and processes –</strong>Our experts don’t rely on shortcuts or workarounds. We follow the industry’s best practices for all our projects.</li>
                <li><strong>A team of experienced Xamarin developers –</strong>Our team of <strong>Xamarin developers</strong> has more than just degrees. They have actual hands-on experience, which aids them in developing solutions that yield results.</li>             
               </ul>
            </p>
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
