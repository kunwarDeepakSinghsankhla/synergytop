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
    <div class="container h-100">
        <div class="row align-content-center h-100">
            <div class="col-12 text-center px-5">
                <?php
                if($bannerTopHeading){ ?>
                    <p class="f-20 f-w-600  mb-4"><?php echo $bannerTopHeading; ?></p>
                <?php
                }
                if($topBannerSubHeading){ ?>
                    <h2 class="f-30 f-w-600 black-carbon mb-3">
                        <?php echo $topBannerSubHeading; ?>
                    </h2>
                <?php
                }
                if($topBannerContent){ ?>
                    <p class="f-18 f-w-400 secondary-blk">
                        <?php echo $topBannerContent; ?>
                    </p>
                <?php
                } 
                if( $topBannerButton ){ 
                    $url = $topBannerButton['url'];
                    $title = $topBannerButton['title'];
                    $target = $topBannerButton['target'] ? $topBannerButton['target'] : '_self';?>
                    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>"
                       class="btn btn-primary mt-4 f-18 f-w-400  btn-violet-them px-3 pt-1 pb-2 rounded-0 border-0 mb-3 mb-md-0">
                        <?php echo esc_html($title); ?>
                    </a>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>

<!-- Our native -->
<?php
$aboutServiceHeading = get_field("about_service_heading");
$aboutServiceContent = get_field("about_service_content");
$about_service_image = get_field("about_service_image");
if($aboutServiceContent){ ?>
    <section id="Our-Native" class="our-native sectionSpacing pb-0">
        <div class="container">
            <div class="row pinkMix-gradient">
                <div class="col-12 col-md-8  py-4 px-5">
                    <?php
                    if($aboutServiceHeading){ ?>
                        <h1 class="f-30 f-w-600 section_headingv1 mb-3"><?php echo $aboutServiceHeading; ?></h1>
                    <?php
                    } ?>
                    <div class="f-18 f-w-400 secondary-blk mb-3">
                        <?php echo $aboutServiceContent; ?>
                    </div>
                </div>
                <?php
                if($about_service_image) { ?>
                    <div class="col-12 col-md-4 px-0">
                        <div class="w-100 h-100">
                            <img src="<?php echo esc_url($about_service_image['url']); ?>" alt="<?php echo esc_attr($about_service_image['alt']); ?>" class="img-fluid object-fit-cover">
                        </div>
                    </div>
                <?php 
                } ?>
            </div>
        </div>
    </section>
<?php
} ?>


<!-- OurCustomSoftwareDevelopment -->
<?php
$software_development_title = get_field('software_development_title');
$software_development_items = get_field('software_development_items');
if($software_development_items && $software_development_title ){ ?>
    <section id="Our-Cus-Soft-Dev" class="our-cus-soft-dev sectionSpacing" style="background-color: #F0F5FF;">
        <div class="container">
            <h2 class="f-30 f-w-600  text-center section_headingv1 mb-4">Our eCommerce Development Service – More That Just Developing your eCommerce Website</h2>
            <div class="custom-tabbing-dev">
                <div class="row">
                    <!-- Left Menu -->
                    <div class="col-md-4 pe-md-0">
                        <div class="nav flex-column  mb-3 mb-md-0" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active title f-18 f-w-500 fontPoppins" id="tab0-tab" data-bs-toggle="pill"
                                href="#tab0" role="tab">App Migration Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab1-tab" data-bs-toggle="pill" href="#tab1"
                                role="tab">Android Mobile Application Development Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab2-tab" data-bs-toggle="pill" href="#tab2"
                                role="tab">iOS Mobile Application
                                Development Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab3-tab" data-bs-toggle="pill" href="#tab3"
                                role="tab">Flutter Mobile Application
                                Development Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab4-tab" data-bs-toggle="pill" href="#tab4" role="tab">React Native Mobile Application
                            Development Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab5-tab" data-bs-toggle="pill" href="#tab5"
                                role="tab">Enterprise Mobile Application
                                Development Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab6-tab" data-bs-toggle="pill" href="#tab6"
                                role="tab">QA and Testing Services</a>
                            <a class="nav-link f-18 f-w-500 fontPoppins" id="tab7-tab" data-bs-toggle="pill" href="#tab7"
                                role="tab">Other Services</a>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="col-md-8 ps-md-0">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active content-box p-5" id="tab0" role="tabpanel">
                                <ul class="f-14 f-w-500  secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab1" role="tabpanel">
                                <ul class="f-14 f-w-500  secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary"><span>What we do:</span> Streamline your business processes, optimize
                                        existing investments, and create a dynamic roadmap for seamless software delivery
                                        and monitoring services.</p>
                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab2" role="tabpanel">
                                 <ul class="f-14 f-w-500 secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab3" role="tabpanel">
                               <ul class="f-14 f-w-500  secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab4" role="tabpanel">
                                 <ul class="f-14 f-w-500 secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab5" role="tabpanel">
                                <ul class="f-14 f-w-500 secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600  mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab6" role="tabpanel">
                                <ul class="f-14 f-w-500 secondary-blk p-0" type="none">
                                    <li class="mb-3">
                                     <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                     <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                     <div class="w-100 mt-5 text-center px-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                            alt="App Migration Services" class="img-fluid object-fit-cover">
                                     </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade content-box p-5" id="tab7" role="tabpanel">
                                <ul class="f-14 f-w-500 secondary-blk p-0" type="none">
                                        <li class="mb-3">
                                        <h2 class="f-20 f-w-600 mb-3 section_headingv1">App Migration Services</h2>    
                                        <p class="f-16 f-w-400 text-secondary">As technologies and your business needs evolve and change, it is common to want to migrate from one platform/technology to another. Migrating your mobile app to technologies or platforms with advanced functionality can be the key differentiator between long-term success and otherwise. Our experts will carefully understand your current mobile app and your business needs to develop a systematic, efficient, and cost-effective migration process. This would ensure minimal downtime and a timeline-adherent migration.</p>

                                        <div class="w-100 mt-5 text-center px-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                                alt="App Migration Services" class="img-fluid object-fit-cover">
                                        </div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
} ?>

<!--Explore Now-->
<?php
$exploreBackgroundImg   = get_field("explore_now_background_image");
$exploreNowTitle        = get_field("explore_now_title");
$exploreNowButton       = get_field("explore_now_button");
?>
<section id="Explore-Now" class="explore-now sectionSpacing bg-white pb-0">
    <div class="container">
        <div class="w-100 text-center">
            <div class="sectionSpacing align-content-center explore-img" style="background-image:url('<?php echo $exploreBackgroundImg; ?>');">
                <?php
                if($exploreNowTitle){ ?>
                    <p class="f-20 f-w-400  text-white mb-5"><?php echo $exploreNowTitle; ?></p>
                <?php
                }
                if( $exploreNowButton ){ 
                    $url = $exploreNowButton['url'];
                    $title = $exploreNowButton['title'];
                    $target = $exploreNowButton['target'] ? $exploreNowButton['target'] : '_self';?>
                    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>"
                       class="btn btn-outline-light btn-hover bg-white f-18 f-w-500  text-primary border-0 mb-3">
                        <?php echo esc_html($title); ?>
                    </a>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>

<!-- cards -->

<?php
$service_card_item = get_field('service_card_item');
if(!empty($service_card_item)){ ?>
    <section id="Cards-Info-data" class="cards-info-data sectionSpacing mt-4" style="background-color: #F4F8FF;">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach($service_card_item as $service_card_item_value){
                    $service_card_title     = $service_card_item_value['service_card_title'];
                    $service_card_image_url = $service_card_item_value['service_card_image']; ?>
                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card rounded-0" style="background-image: url('<?php echo $service_card_image_url; ?>'); background-size: cover; background-position: center;">
                            <div class="cards-info-card">
                                <p class="f-18 f-w-500   m-3 text-white text-center px-1 py-3">
                                    <?php echo $service_card_title; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </section>
<?php
} ?>

<!-- Our Web design -->
<?php 
$webDesignTitle         = get_field("web_design_title");
$webDesignContent       = get_field("web_design_content");
$webDesignBottomImage   = get_field("web_design_bottom_image");

if($webDesignTitle || $webDesignContent){ ?>
    <section id="Our-web-design" class="sectionSpacing our-web-design bg-white pb-0">
        <div class="container">
            <div class="text-center mb-5">
                <?php
                if($webDesignTitle){ ?>
                    <h2 class="f-30 f-w-600  section_headingv1 mb-4"><?php echo $webDesignTitle; ?></h2>
                <?php
                } ?>
                <div class="f-16 f-w-400   secondary-blk">
                    <?php echo $webDesignContent; ?>
                </div>
            </div>

           
            <?php
            if($webDesignBottomImage){ ?>
                <div class="w-100 h-100 text-center">
                    <img src="<?php echo esc_url($webDesignBottomImage['url']); ?>" alt="<?php echo esc_attr($webDesignBottomImage['alt']); ?>" class="img-fluid w-75">
                </div>
            <?php
            } ?>
        </div>
    </section>
<?php
} ?>

<!-- ST Seamless eCommerce -->
<?php
$seamless_image     = get_field('seamless_image');
$seamless_heading   = get_field('seamless_heading');
$seamless_content   = get_field('seamless_content');
?>
<section  id="St-Seamless" class="st-seamless sectionSpacing pb-0">
    <div class="container">
       <div class="row gap-3 gap-md-0 position-relative align-items-center">
            <div class="col-12 col-md-10 col-lg-7 col-xl-7 col-xxl-7">
                <div class="w-100 card border-0 rounded-4">
                    <?php if(!empty($seamless_image)){ ?>
                    <img src="<?php echo $seamless_image['url']; ?>"
                        alt="<?php echo $seamless_image['alt']; ?>" class="img-fluid object-fit-cover">
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-7 col-xl-7 col-xxl-7 position-absolute end-0">
                <div class="card px-3 py-3 px-md-4 py-md-4 py-lg-4 py-xl-5 border rounded-4 justify-content-center" style="background-color: #F0F5FF; border-color: #C3D7FF;">
                    <h2 class="f-24 f-w-600 section_headingv1"><?php echo $seamless_heading; ?></h2>
                        <?php echo $seamless_content; ?>
                </div>
            </div>
       </div>
    </div>
</section>

<!-- Our Expert -->

<?php echo do_shortcode('[our_expert_e_commerce_development_services]'); ?>


<!-- Our Core Custom -->
<?php
$coreExpertHeading  = get_field("core_expert_heading");
$coreExpertItem     = get_field("core_expert_item");
if(!empty($coreExpertItem)){ ?>
    <section id="Our-Core-Expert" class="sectionSpacing our-core-expert" style="background-color: #F4F8FF;">
        <div class="container">
            <?php
            if($coreExpertHeading){ ?>
                <div class="mb-4 text-center">
                    <h1 class="f-30 f-w-600 section_headingv1 mb-4"><?php echo $coreExpertHeading; ?></h1>
                </div>
            <?php
            } ?>
            <div class="row pt-2">
                <?php
                foreach ($coreExpertItem as $coreExpertValue) {
                    $coreExpertItemTitle    = $coreExpertValue['core_expert_item_title'];
                    $coreExpertItemContent  = $coreExpertValue['core_expert_item_content'];
                    $coreExpertItemImage    = $coreExpertValue['core_expert_image']['url']; ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="card rounded-4 d-flex align-items-left core-cards-info p-0">
                            <div class="p-3 inner-core-cover">
                                <div class="core-card-inner mb-3">
                                    <?php if (!empty($coreExpertItemImage)) : ?>
                                        <img src="<?php echo esc_url($coreExpertItemImage); ?>" alt="<?php echo esc_attr($coreExpertItemTitle); ?>" style="width:50px; height:50px" class="rounded-circle">
                                    <?php endif; ?>                   
                                   <h2 class="f-18 f-w-500 mb-0" style="color: #111;">
                                       <?php echo $coreExpertValue['core_expert_item_title']; ?>
                                   </h2>
                                </div>
                                <div>
                                    <div class="f-16 f-w-400 secondary-blk mb-0">
                                        <?php echo $coreExpertValue['core_expert_item_content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </section>
<?php
} ?>


<!-- brandRating section -->
<?php echo do_shortcode('[brand_rating_slider]'); ?>


<!-- Our Recent Work -->
<section id="Our-Recent-Work" class="our-recent-wrk sectionSpacing pb-0">
    <div class="container">
        <div class="text-center">
            <h2 class="f-30 f-w-600 section_headingv1 mb-3">Our Recent Work</h2>
            <div class="f-18 f-w-400 black-111 mb-4">
                <p class="f-18 f-w-400 black-111 mb-0">
                    Bringing Your Ideas to Life & Crafting Your Digital Success
                </p>
            </div>
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
