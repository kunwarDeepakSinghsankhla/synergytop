<?php
/*
Template Name: Service Page Template
*/
get_header(); ?>
<!-- service page-1 -->

<?php
$topBannerImage     = get_field('top_banner_image');
$bannerTopHeading   = get_field('banner_top_heading');
$topBannerSubHeading= get_field("top_banner_sub_heading");
$topBannerContent   = get_field("top_banner_content");
$topBannerButton    = get_field("top_banner_button");
?>
<section id="Cus-Soft-Developer" class="cus-soft-developer">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">
                <!-- <p class="f-20 f-w-600 gradient-text  mb-4">Servicios De Desarrollo Web</p> -->
                <h2 class="f-30 f-w-600 black-carbon mb-3">Enterprise Performance Management</h2>
                <!-- <p class="f-18 f-w-400 secondary-blk"> Como empresa de desarrollo web, ofrecemos todo lo que necesita para crear una sólida presencia en línea. Descubra cómo podemos ayudarle a dominar la web.</p>
                <a href="http://103.21.53.30/staging.synergytop.com/contact-us/" target="_self" class="btn btn-primary mt-4 f-18 f-w-400  btn-violet-them px-3 pt-1 pb-2 rounded-0 border-0 mb-3 mb-md-0">Solicitar presupuesto</a> -->
            </div>
        </div>
    </div>
</section>


<section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
    <div class="container">
        <div class="text-center mb-0">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4">High-end Enterprise Performance Management Solutions</h2>
            <div class="f-16 f-w-400   secondary-blk">
                <p>The processes and applications of Enterprise Performance Management speed up the business excellence by merging strategy, planning and execution throughout the operational and management systems. It is much more than just point solutions and spreadsheets. The comprehensive set of Enterprise Performance Management services at SynergyTop guide the clients in leveraging data-driven insights to analyze the business potential with enhanced management and decision-making. The EPM team with us has deep knowledge and expertise in analytics and financial processes which are required for the companies in driving the predictable performance.</p>
                <p>The Enterprise Performance Management applications connect the business plan to the financial resources and utilize forecasting techniques so that strategic goals are put in motion.</p>
            </div>
        </div>
    </div>
</section>


<section id="Our-Native" class="our-native sectionSpacing pb-0">
    <div class="container">
        <div class="row pinkMix-gradient">
            <div class="col-12 col-md-8  py-4 px-5">
                <h1 class="f-30 f-w-600 section_headingv1 mb-3">The functions of EPM are as follows</h1>
                <div class="f-18 f-w-400 secondary-blk mb-3">
                    <ul>
                        <li>Planning (Forecasting, Budgeting and Modeling)</li>
                        <li>Consolidation (Financial consolidation and close management)</li>
                        <li>Monitoring (Tracking the measures of performance like Key Performance Indicators)</li>
                        <li>Reporting and Analytics (Regulatory, Management, Financial and ad hoc)</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4 px-0">
                <div class="w-100 h-100">
                    <img src="https://synergytop.com/wp-content/uploads/2020/12/Untitled-design-1.png" alt="web development services banner" class="img-fluid object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Expert -->
<?php echo do_shortcode('[our_expert_e_commerce_development_services]'); ?>

<section id="Our-Native" class="our-native sectionSpacing pb-0">
    <div class="container">
        <div class="row pinkMix-gradient">
            <div class="col-12 col-md-12  py-4 px-5">
                <h1 class="f-30 f-w-600 section_headingv1 mb-3 text-center">Delivering EPM Services To Support Advanced Performance Methodologies</h1>
                <div class="f-18 f-w-400 secondary-blk mb-3">
                    <ul>
                        <li><strong>Consulting:</strong> We customize the Enterprise Performance Management service for different business goals and make them as unique as possible.</li>
                        <li><strong>Implementation:</strong> We develop and deploy a system with proven scalability which can enhance the decision-making capabilities of the business with appropriate analysis and modeling.</li>
                        <li><strong>Migration and Upgradation:</strong>We can effectively upgrade the client’s current system with improved efficiency and even combine the inherited processes with the newly built system</li>
                        <li><strong>Support and Maintenance: </strong>We are a trusted partner for many enterprises when comes to support and maintenance services for any enterprise performance management system.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Our-Native" class="our-native sectionSpacing">
    <div class="container">
        <div class="row pinkMix-gradient1">
            <div class="col-12 col-md-12  py-4 px-5">
                <h1 class="f-30 f-w-600 section_headingv1 mb-3 text-center">Why SynergyTop For Enterprise Performance Management Services?</h1>
                <div class="f-18 f-w-400 secondary-blk mb-3">
                    <ul>
                        <li><strong>Budgeting, Planning and Forecasting: </strong>We have intense domain know-how when it comes to budgeting, planning and forecasting. We do everything it takes to enable the client’s business to perform better every single day.</li>
                        <li><strong>Financial Consolidation and Reporting: </strong>The regular updating financial consolidation and reporting help the businesses in staying a step ahead. The fund related reporting becomes more efficient and streamlined with the enterprise performance management system</li>
                        <li><strong>Enterprise Scorecards and Dashboards: </strong>In order to measure the performance of the businesses, we provide easy to understand dashboards and scorecards for the enterprises. These provide actionable insights to enhance business performance.</li>
                        <li><strong>Advanced Visualization and Analytics: </strong>With advanced analytics, the organizations are being able to take seamless and informed decisions. The key points of this system are planning and simplicity to measure the performance of an enterprise.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- Frequently Ask Questions -->
<?php
$faqsHeading = get_field("faqs_heading");
$faqsItem   = get_field("faqs_item");
if($faqsItem){ ?>
    <section id="F-A-Q-Section" class="F-A-Q-Section sectionSpacing">
        <div class="container">
            <?php
            if($faqsHeading){ ?>
                <div class="text-center mb-4">
                    <h1 class="f-w-600 f-30 section_headingv1"><?php echo $faqsHeading; ?></h1>
                </div>
            <?php
            } ?>
            <div class="FAQ-dropdown row col-12 col-lg-10 mx-auto pt-2">
                <div class="accordion d-flex gap-3 flex-column" id="accordionExample">
                    <?php
                    $counter = 1;
                    foreach ($faqsItem as $faqsItemValue) {
                        if($counter == 1){$show = "show";}else{$show = "";} ?>
                        <div class="accordion-item rounded-0 border-0">
                            <h2 class="accordion-header rounded-pill bg-primary  f-16 ">
                                <button class="accordion-button rounded-pill border-0 bg-primary text-white  f-16" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>"><?php echo $faqsItemValue['faqs_item_title']; ?></button>
                            </h2>
                            <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $show; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body f-16  " >
                                    <?php echo $faqsItemValue['faqs_item_content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    $counter++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php
} ?>


<!-- Why Choose SynergyTop -->
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
