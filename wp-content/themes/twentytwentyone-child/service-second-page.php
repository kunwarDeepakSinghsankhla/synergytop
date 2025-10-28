<?php
/*
Template Name: Service Second Page Template
*/
get_header(); 
$pageID = get_the_ID(); ?>
<!-- service page-2 -->
<section id="Service-second" class="service-second" style="background-image: url('<?php echo get_field('banner_image')['url']; ?>');">
    <div class="container h-100 align-content-center">
        <div class="row h-100 align-content-center">
            <div class="col-12 text-center px-2 px-md-5">
                <p class="f-20 f-w-600 gradient-text mb-2 mb-md-4"><?php echo get_field('banner_title', $pageID); ?></p>
                <h2 class="f-30 f-w-600 section_headingv1 mb-3">
                    <?php echo get_field('banner_sub_title', $pageID); ?>
                </h2>
                <p class="f-18 f-w-400 secondary-blk">
                    <?php echo get_field('banner_description', $pageID); ?>
                </p>
                <?php 
                $banner_button = get_field('banner_button', $pageID);

                if ($banner_button){ 
                    $button_url_raw = $banner_button['url'];
                    $button_title = $banner_button['title'];
                    $button_target = $banner_button['target'] ? $banner_button['target'] : '_self';
                    $button_url = ($button_url_raw === '#') ? 'javascript:void(0);' : esc_url($button_url_raw); ?>
                    <a href="<?php echo $button_url; ?>" 
                       target="<?php echo esc_attr($button_target); ?>" 
                       class="btn btn-primary mt-3 mt-md-4 f-18 f-w-400 btn-violet-them px-3 pt-1 pb-2 rounded-0 border-0 mb-0">
                        <?php echo esc_html($button_title); ?>
                    </a>
                <?php 
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- More Customer -->
<section id="More-customer" class="more-customer sectionSpacing">
    <div class="container">
        <?php
        $aboutUsItems = get_field('about_us_items', $pageID);

        if ($aboutUsItems){
            foreach ($aboutUsItems as $index => $item){
                $about_title = $item['about_title'];
                $about_description = $item['about_description'];
                $about_image = $item['about_image']; 
                $is_even = ($index % 2 !== 0); ?>
                <div class="row <?php echo $is_even ? 'flex-row-reverse mt-2 mt-md-0' : ''; ?>">
                   <div class="col-md-6 col-12 border-gradient-violet border-<?php echo $is_even ? 'start' : 'end'; ?>-0 ps-md-0">
                      <div class="px-md-4 pt-md-3">
                            <h3 class="f-24 f-w-600 section_headingv1 mb-2">
                                <?php echo $about_title; ?>
                            </h3>
                            <div class="f-18 f-w-400 secondary-blk mb-2 text-justify lh-12">
                                <?php echo $about_description; ?>
                            </div>
                      </div>
                   </div>

                    <div class="col-md-6 col-12 p-0">
                        <?php 
                        if ($about_image){ ?>
                            <img src="<?php echo esc_url($about_image['url']); ?>" class="img-fluid object-fit-cover" alt="<?php echo esc_attr($about_image['alt'] ?: 'About Image'); ?>">
                        <?php 
                        } ?>
                    </div>
               </div>
            <?php 
            }
        } ?>
    </div>
</section>

<!-- OurCustomSoftwareDevelopment -->
<section id="Our-Cus-Soft-Dev" class="our-cus-soft-dev sectionSpacing" style="background-color: #F0F5FF;">
    <div class="container">
        <h2 class="f-30 f-w-600 text-center section_headingv1 mb-4"><?php echo get_field('software_development_title', $pageID); ?></h2>
        <div class="custom-tabbing-dev">
            <div class="row">
                <!-- Left Menu -->
                <div class="col-md-4 pe-md-0">
                    <div class="nav flex-column mb-3 mb-md-0 f-18 f-w-500  " id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <?php 
                        $softwareItems = get_field('software_development_items', $pageID);
                        if($softwareItems){
                            foreach($softwareItems as $index => $item){ ?>
                            <a class="nav-link <?php echo $index== 0 ? 'active': ''; ?> title" id="tab<?php echo $index; ?>-tab" data-bs-toggle="pill"
                                href="#tab<?php echo $index; ?>" role="tab"><?php echo $item['software_items_heading']; ?></a>
                            <?php 
                            }
                        } ?>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-md-8 ps-md-0">
                    <div class="tab-content" id="v-pills-tabContent">
                        <?php
                        $softwareItems = get_field('software_development_items', $pageID);
                        if($softwareItems){
                            foreach($softwareItems as $index => $item){ ?>
                                <div class="tab-pane fade <?php echo $index == 0 ? 'show active' : ''; ?> content-box p-2 p-md-5" id="tab<?php echo $index; ?>" role="tabpanel">
                                    <ul class="f-16 f-w-400 text-secondary p-0" type="none">
                                        <li class="mb-3">
                                            <h2 class="f-20 f-w-600 mb-3 section_headingv1"><?php echo $item['software_items_heading']; ?></h2>    
                                            <p><?php echo $item['software_items_content']; ?></p>
                                            <div class="w-100 mt-5 text-center px-3">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/tab-1-img.png"
                                                    alt="App Migration Services" class="img-fluid object-fit-cover rounded-4">
                                             </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php 
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Explore Now-->
<section id="Explore-Now" class="explore-now sectionSpacing bg-white">
    <div class="container">
        <div class="w-100 text-center">
            <div class="sectionSpacing align-content-center explore-img" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/cutting-edge.png');">
                <p class="f-20 f-w-400   text-white mb-5">
                    <?php echo get_field('explore_title', $pageID); ?>
                </p>
                <?php 
                $explore_button = get_field('explore_button', $pageID);
                if ($explore_button){ 
                    $button_url_raw = $explore_button['url'];
                    $button_title = $explore_button['title'];
                    $button_target = $explore_button['target'] ? $explore_button['target'] : '_self';
                    $button_url = ($button_url_raw === '#') ? 'javascript:void(0);' : esc_url($button_url_raw); ?>
                    <a href="<?php echo $button_url; ?>" target="<?php echo esc_attr($button_target); ?>" class="btn btn-outline-light btn-hover bg-white f-18 f-w-500   text-primary border-0 mb-3"><?php echo esc_html($button_title); ?></a>
                <?php 
                } ?>
            </div>
        </div>
    </div>
</section>

<!-- Our Expert -->
<section id="OurExpert" class="sectionSpacing ourExpert">
    <div class="container">
        <div class="mb-4 text-center">
          <h2 class="f-30 f-w-600 section_headingv1 mb-3"><?php echo get_field('expertise_title', $pageID); ?></h2>
        </div>
    
        <div class="row">
            <?php 
            $ourExpertiseItem = get_field('expertise_items', $pageID);
            if($ourExpertiseItem){
                foreach($ourExpertiseItem as $item){ ?>
                    <div class="col-12 col-md-6 col-lg-3 px-2">
                        <div>
                            <img src="<?php echo $item['expertise_image']['url']; ?>" class="img-fluid" alt="<?php echo $item['expertise_image']['alt']; ?>">
                        </div>
                    </div>
                <?php
                }
            } ?>
        </div>
    </div>
</section>

<!-- Our Core Custom -->
<section id="Our-Core-Expert" class="sectionSpacing our-core-expert" style="background-color: #F0F5FF;">
    <div class="container">
        <div class="mb-4 text-center">
          <h1 class="f-30 f-w-600 section_headingv1 mb-4"><?php echo get_field('service_heading', $pageID); ?></h1>
        </div>
        <div class="row pt-2">
            <?php 
            $serviceItems = get_field('service_items', $pageID); 
            if($serviceItems){
                foreach($serviceItems as $item){ ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="card rounded-4 d-flex align-items-left core-cards-info">
                            <div class="core-card-inner mb-3">
                                 <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" style="width:50px; height:50px" class="rounded-circle">
                               <h2 class="f-18 f-w-500 mb-0" style="color: #111;"><?php echo $item['title']; ?></h2>
                            </div>
                            <div>
                                <p class="f-16 f-w-400 secondary-blk mb-0"><?php echo $item['description']; ?></p>
                            </div>
                          
                        </div>
                    </div>
                <?php
                }
            } ?>
        </div>
    </div>
</section>

<!-- brandRating section -->
<?php echo do_shortcode('[brand_rating_slider]'); ?>

<!-- Our Recent Work -->
<section id="Our-Recent-Work" class="our-recent-wrk sectionSpacing ">
    <div class="container">
        <div class="text-center">
            <h2 class="f-30 f-w-600 section_headingv1 mb-3"><?php echo get_field('recent_work_title', $pageID); ?></h2>
            <div class="f-18 f-w-400 black-111 mb-4">
                <p class="mb-0"><?php echo get_field('recent_work_sub_title', $pageID); ?></p>
            </div>
        </div>
          <?php echo do_shortcode('[our_work_section]'); ?>
        <div>
            <!-- slider  -->
        </div>
    </div>
</section>

<!-- why choose st -->
<section id="Why-Choose-St" class="why-choose-st sectionSpacing" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/why-chose-st-service-2.png');">
    <div class="container py-4">
        <div class="row col-11">
            <h1 class="f-30 f-w-600 text-white mb-3">Why choose Synergytop for your SEO solutions?</h1>
            <p class="f-16 f-w-400 text-white mb-2">SynergyTop offers bespoke SEO solutions for businesses that want to enhance their online presence, increase leads and generate more revenue.</p>
            <p class="f-16 f-w-400 text-white mb-2">The SEO practices and techniques we follow are backed by research, experience, and experimentation and have yielded successful results for all our clients in the past.</p>
        </div>
       <p class="f-16 f-w-400 text-white mb-2">Here are few more reasons to pick SynergyTop for SEO services –</p>
       <ul class="m-0 f-16 f-w-400 text-white">
        <li>
             Utmost satisfaction of the client
        </li>
          <li>
             Search engine optimization within a committed time frame
        </li>
          <li>
             Experience of having worked with clients from diverse industry verticals
        </li>
          <li>
             Transparent and measurable results and regular reporting
        </li>
          <li>
             In-depth experience in digital marketing services
        </li>
       </ul>
    </div>
</section>

<!-- Frequently Ask Questions -->
<section id="F-A-Q-Section" class="F-A-Q-Section sectionSpacing">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="f-w-600 f-30 section_headingv1"><?php echo get_field('faqs_heading', $pageID); ?></h1>
        </div>
        <div class="FAQ-dropdown row col-12 col-lg-10 mx-auto pt-2">
            <div class="accordion d-flex gap-3 flex-column" id="accordionExample">
                <?php 
                $faqItems = get_field('faqs_item', $pageID);
                if($faqItems){
                    foreach($faqItems as $index => $item){ ?>
                        <div class="accordion-item rounded-0 border-0">
                            <h2 class="accordion-header rounded-pill bg-primary  f-16  ">
                            <button class="accordion-button rounded-pill border-0 bg-primary text-white f-16" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $index; ?>" aria-expanded="<?php echo $index == 0 ? true : false; ?>" aria-controls="collapse-<?php echo $index; ?>">
                              <?php echo $item['faqs_item_title']; ?>
                            </button>
                            </h2>
                            <div id="collapse-<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index == 0 ? 'show' : ''; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body f-16  " >
                                    <?php echo $item['faqs_item_content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                } ?>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose SynergyTop -->
<section id="Why-Choose-ST" class="why-choose-st sectionSpacing" style="background-color: #F0F5FF">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-12">
                <h2 class="f-30 f-w-600 section_headingv1 mb-3"><?php echo get_field('why_choose_synergytop_heading', $pageID); ?></h2>
                <div class="f-18 f-w-400 secondary-blk">
                    <?php echo get_field('why_choose_synergytop_description', $pageID); ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-12">
                <div style="background-color: #C4D5FF" class="form-input-wrapper px-4 py-4">
                    <h3 class="f-18 f-w-600 section_headingv1"><?php echo get_field('contact_form_heading', $pageID); ?></h3>
                    <?php echo do_shortcode('[contact-form-7 id="1e97a09" title="New Project Form"]'); ?>
                </div>
            </div>
        </div>
    <div>
</section>

<!-- blog-->
<section id="blog" class="sectionSpacing blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="f-30 f-w-600 section_headingv1 mb-3"><?php echo get_field('related_blogs_heading', $pageID); ?></h2>
                    <p class="f-18 f-w-400 black-111">
                        <?php echo get_field('related_blogs_sub_heading', $pageID); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[recent_blog_section]'); ?>
    </div>
</section>
<?php get_footer(); ?>