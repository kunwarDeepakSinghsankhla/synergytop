<?php get_header(); 
$page_id = get_the_ID();
?>
<!-- ACF -->
<?php 
$bannerTitle = get_field('banner_title');
$bannerDescription = get_field('banner_description');
$exploreServices = get_field('explore_services');
$services = get_field('services');
?> 
<section id="homePage-Banner" class="homePage-Banner">
    <div class="bannerContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12 mt-0 mt-xl-5">
                    <div class="before-effect position-relative">
                        <?php if ( !empty($bannerTitle) ) { ?>
                            <h1 class="text-white  mb-3 f-46 f-w-700 position-relative"><?php echo $bannerTitle; ?></h1>
                        <?php } ?>
    
                        <?php if ( !empty($bannerDescription) ) { ?>
                            <div class="position-relative banner-para f-18 text-white">
                                <p><?php echo $bannerDescription; ?></p>
                            </div>
                            
                            <?php if ( !empty($exploreServices['url']) && !empty($exploreServices['title']) ) { ?>
                                <a href="<?php echo $exploreServices['url']; ?>" class="btn btn-outline-light rounded-0 px-4 py-2   mt-0 mt-md-3 f-18 f-w-500">
                                    <?php echo $exploreServices['title']; ?>
                                </a>
                            <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-5 col-md-6 col-12 ps-md-5 d-none d-md-block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/HeroImage.png"
                    class="w-100 img-fluid floating-laptop mt-0 mt-lg-2" alt>
                </div>
            </div>
        </div>
        <div class="container mt-4 mt-md-3 mt-lg-0">
            <div class="row gap-2 gap-md-0">
                <?php 
                foreach($services as $servicesValue){ ?>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div>
                            <a href="<?php echo $servicesValue['services_name']['url']; ?>" class="btn btn-primary w-100 bannerTab   f-18"
                                type="submit"><?php echo $servicesValue['services_name']['title']; ?>
                                 <i class="fa-solid fa-arrow-right-long d-block"></i> 
                            </a>
                        </div>
                    </div>
                <?php 
                }  ?>
            </div>
        </div>
    </div>
</section>
<!-- brandRating section -->
 <?php echo do_shortcode('[brand_rating_slider]'); ?>
<!--growth-statistics section  -->
<section id="growth-statistics" class="sectionSpacing pb-0 growth-statistics">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section_headingv1 text-center mb-4 pb-2 f-30 f-w-600">Our Growth Statistics</h2>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="counter" data-target="50">0+</h4>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/GrowthStatistics01.png" alt>
                    </div>
                    <p class="mb-0">5-star <span class="d-block fw-semibold ">Client Reviews</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="counter" data-target="100">0+</h4>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/GrowthStatistics02.png" alt>
                    </div>
                    <p class="mb-0">Custom Software<span
                        class="d-block fw-semibold ">Solutions</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="counter" data-target="11">0+</h4>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/GrowthStatistics03.png" alt>
                    </div>
                    <p class="mb-0">Yeras of<span
                        class="d-block fw-semibold ">Experience</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="card border-0 rounded-0 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="counter" data-target="100">0+</h4>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/GrowthStatistics04.png" alt>
                    </div>
                    <p class="mb-0">Software<span
                        class="d-block fw-semibold ">Masterminds</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Crafting_Innovative section  -->
<section id="Crafting_Innovative" class="sectionSpacing crafting_innovative card-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="mb-2 f-18"><span class="me-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/section_pointer.png" class="w-auto"
                        height="20px" alt></span>Our Expertise</p>
                <h2 class="section_headingv1 mb-0  f-30 f-w-600 pb-2">Crafting Innovative Digital Solutions</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                <div class="card rounded-0 p-2 position-relative">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Custom-software-development.png"
                        alt="Custom-software-development" class="top-image">
                        <h3 class="our_expertise_heading mt-3 f-18 f-w-700">Custom Software Development</h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">Sometimes
                            At SynеrgyTop, we understand that very well. That's why with our custom softwarе
                            dеvеlopmеnt services, we help you break free from onе-sizе-fits-all solutions. Wе takе timе to undеrstand your specific nееds, goals, and constraints to dеlivеr softwarе that truly fits your businеss.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/our-custom-software-development.png"
                    alt="custom-software-development" class="ourExpertiseImg-craft">
                    <a class="ourExpertise-button btn rounded-0" href="<?php echo get_site_url(); ?>/services/custom-software-development/">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt="service-btn">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                <div class="card rounded-0 p-2 position-relative ">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Ecommerce.png"
                        alt="Top Image" class="top-image">
                        <h3 class="our_expertise_heading mt-3 f-18 f-w-700">Ecommerce Development</h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">At SynergyTop, our eCommerce experts create solutions that not only keep up with industry trends but set new benchmarks. We design engaging storefronts that reflect your brand’s essence. And deliver seamless shopping experiences that delight customers.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ourExpertiseCard01.png"
                    alt="Bottom Image" class="ourExpertiseImg-craft">
                    <a class="ourExpertise-button btn rounded-0" href="<?php echo get_site_url(); ?>/services/ecommerce-development/">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                <div class="card rounded-0 p-2 position-relative ">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Mobile-App-Development.png"
                        alt="Mobile-App-Development" class="top-image">
                        <h3 class="our_expertise_heading mt-3 index-9 f-18 f-w-700">Mobile App Development</h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">SynergyTop creates captivating mobile apps that win both screen space and user hearts. Our development team turns your ideas into powerful, user-friendly applications. We focus on feature-rich solutions that engage and delight your audience.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mobile-app-development.png"
                    alt="mobile-app-development" class="ourExpertiseImg-craft">
                    <a class="ourExpertise-button btn rounded-0" href="<?php echo get_site_url(); ?>/services/mobile-application-development-services/">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                <div class="card rounded-0 p-2 position-relative ">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Web-Development-1.png"
                        alt="Web-Development" class="top-image">
                        <h3 class="our_expertise_heading mt-3 f-18 f-w-700">Web Development</h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">Sometimes
                        you need solutions that are tailored to your
                        unique business needs. Sometimes you need solutions that are
                        tailored to your unique business needs.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-engninner.png"
                    alt="web-development" class="ourExpertiseImg-craft" width="100%">
                    <a class="ourExpertise-button   btn rounded-0" href="<?php echo get_site_url(); ?>/services/website-development-services/">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt="Crafting_InnovativeArrow">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4 d-none">
                <div class="card rounded-0 p-2 position-relative ">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/UI-UX-services-1.png"
                        alt="UI-UX-services" class="top-image">
                        <h3 class="our_expertise_heading mt-3 f-18 f-w-700">UI/UX Services</h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">Wе takе usеr-cеntеrеd dеsign to hеart. Our UI/UX еxpеrts undеrstand thе importancе of a wеll-craftеd intеrfacе that dеlights usеrs and kееps thеm coming back. Wе blеnd crеativity with usability to crеatе dеsigns that arе visually appеaling and highly intuitivе. Your usеrs dеsеrvе thе bеst. Wе'rе hеrе to makе surе thеy gеt it. So you can trust us to turn your concеpts into usеr еxpеriеncеs that stand out in thе digital crowd.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ui-ux.png"
                    alt="ui-ux.png" class="ourExpertiseImg-craft">
                    <a class="ourExpertise-button   btn rounded-0" href="#">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt="Crafting_InnovativeArrow">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                <div class="card rounded-0 p-2 position-relative ">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Product-engineering.png"
                        alt="Product-engineering" class="top-image">
                        <h3
                        class="our_expertise_heading mt-3 index-9 f-18 f-w-700">Product Engineering </h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">Our cross-functional teams collaboratе with you еvеry stеp of thе way, from concеpt to dеploymеnt to understand what you have envisioned for your business. We understand your business, your goals, and the specific intricacies of your market. </p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-engninner.png"
                    alt="product-engninner" class="ourExpertiseImg-craft">
                    <a class="ourExpertise-button   btn rounded-0" href="<?php echo get_site_url(); ?>/services/product-engineering-services/">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt="Crafting_InnovativeArrow">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                <div class="card rounded-0 p-2 position-relative ">
                    <div class="card-inner-detail">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Digital-MArketing.png"
                        alt="Digital-Marketing" class="top-image">
                        <h3
                        class="our_expertise_heading mt-3  f-18 f-w-700">Digital Marketing </h3>
                        <p class="our_expertise_para fontOpenSans index-9 f-14">At SynergyTop, we help your brand shine online with our digital marketing services.Using strategic, data-driven approaches, we connect you with the right audience at the right time.From SEO and content marketing to social media and paid ads, we’ve got you covered.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-marketing.png"
                    alt="digital-marketing" class="ourExpertiseImg-craft">
                    <a class="ourExpertise-button   btn rounded-0" href="<?php echo get_site_url(); ?>/services/digital-marketing-services/">
                    <span class="long-text ">Explore Service</span>
                    <img class="m-0 me-1" id="icon-chat"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png" alt="Crafting_InnovativeArrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--OurWork-->
<?php
$ourWorkTitle = get_field('our_work_section_title',$page_id);
$our_work = get_field('our_work',$page_id);
?>
<section id="OurWork" class="sectionSpacing">
    <div class="container ps-98">
        <div class="row d-flex align-items-center justify-content-between mb-4 gap-4">
            <div class="col-xl-9 col-md-8 col-lg-9 col-12">
                <p class="p-0 f-18 mb-0 text-dark"> <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/power-icon.svg"
                    class="w-auto h-auto pe-1">Our Work</p>
                <h2 class="section_headingv1 mb-0  f-30 pb-2"><?php echo $ourWorkTitle;  ?></h2>
            </div>            
        </div>
        <div class="our-recent-wrk">
            <?php echo do_shortcode('[our_work_section]'); ?>              
        </div>
    </div>
</section>

<!--Award-->
<section id="award" class="sectionSpacing">
    <div class="py-5 bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5 col-12">
                    <h2 class="text-white mb-4 fw-bold f-30  f-w-600">Awards and
                    recognitions</h2>
                    <div class="text-white fst-italic f-18 f-w-400">
                        <p class="text-white">Recognized for delivering
                        cutting-edge web solutions with innovation and
                        precision, Honored for consistently exceeding client
                        expectations with seamless digital experiences.
                        Acknowledged for partnering with top brands and businesses to
                        craft impactful digital solutions.
                        Celebrated for pushing the boundaries of design and development
                        in web and app solutions. Recognized for
                        delivering high-quality projects that drive growth and success
                        for our clients.</p>
                    </div>
                    <ul class="list-group list-group-flush bg-transparent d-flex flex-row flex-wrap justify-content-between d-flex-lg-column justify-content-lg-start align-items-center">
                    <li class="list-group-item bg-transparent text-white f-18 f-w-600 px-0 border-0"><span
                        class="me-2"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/awards01.png"
                            style="width: 45px;" alt="awards01"></span>Excellence in Web
                        Development</li>
                    <li class="list-group-item bg-transparent text-white f-18 f-w-600 px-0 border-0"><span
                        class="me-2"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/awards02.png"
                            style="width: 45px;" alt="awards01"></span>Client Satisfaction Award
                    </li>
                    <li class="list-group-item bg-transparent text-white f-18 f-w-600 px-0 border-0"><span
                        class="me-2"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/awards03.png"
                            style="width: 45px;" alt="awards01"></span>Trusted by Industry
                        Leaders </li>
                    <li class="list-group-item bg-transparent text-white f-18 f-w-600 px-0 border-0"><span
                        class="me-2"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/awards04.png"
                            style="width: 45px;" alt="awards01"></span>Innovation & Creativity
                        Award</li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-7 col-12">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/award.png" alt="awards01">
                </div>
            </div>
        </div>
    </div>
</section>
<!--OurTechnologies-->
<section id="OurTechnologies" class="sectionSpacing our-technologies">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="mb-2 f-18"><span class="me-1"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/section_pointer.png" class="w-auto"
                        height="20px" alt="section_pointer"></span>Our Technologies</p>
                <h2 class="section_headingv1 mb-0  pb-2 f-w-600 f-30">Powering Innovation with Technology</h2>
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row tech-container row-gap">
            <!-- Left Side Tabs -->
            <div class="col-md-12">
                <ul
                    class="nav nav-pills justify-content-center justify-content-xl-between justify-content-md-center gap-2 gap-xl-0"
                    id="techTabs" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link f-14 rounded-xl-0 active" id="frontend-tab"
                        data-bs-toggle="pill" href="#frontend" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconFrontendTechnology.png"
                        class style="width: 30px;height: 30px;"
                        alt="IconFrontendTechnology">Frontend Technology</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link f-14 rounded-xl-0" id="backend-tab"
                        data-bs-toggle="pill" href="#backend" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconBackendTechnology.png"
                        class style="width: 30px;height: 30px;"
                        alt="IconBackendTechnology"> Backend Technology</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link f-14 rounded-xl-0" id="database-tab"
                        data-bs-toggle="pill" href="#database" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconDatabaseTechnology.png"
                        class style="width: 30px;height: 30px;"
                        alt="IconDatabaseTechnology">
                        Database Technology</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link f-14 rounded-xl-0" id="framework-tab"
                        data-bs-toggle="pill" href="#framework" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconFrameworksTechnology.png"
                        class style="width: 30px;height: 30px;" alt="IconFrameworksTechnology">Frameworks Technology</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link f-14 rounded-xl-0" id="ecommerce-tab"
                        data-bs-toggle="pill" href="#ecommerce" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconEcommerce.png" class
                        style="width: 30px;height: 30px;" alt="IconEcommerce">Ecommerce</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link f-14 rounded-xl-0" id="cms-tab"
                        data-bs-toggle="pill" href="#cms" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconCMS.png" class
                        style="width: 30px;height: 30px;" alt="cms"> CMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link f-14 rounded-xl-0" id="mobile-tab" data-bs-toggle="pill" href="#mobile" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconMobile.png" class
                        style="width: 30px;height: 30px;" alt="Mobile"> Mobile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link f-14 rounded-xl-0" id="devops-tab"
                        data-bs-toggle="pill" href="#devops" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconDevOps.png" class
                        style="width: 30px;height: 30px;" alt="DevOps">DevOps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link f-14 rounded-xl-0" id="cloud-tab"
                        data-bs-toggle="pill" href="#cloud" role="tab">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconCloud.png" class
                        style="width: 30px;height: 30px;" alt="Cloud">Cloud</a>
                    </li>
                </ul>
            </div>

            <!-- Right Side Tab Content -->
            <div class="col-md-12 mt-0">
                <div class="tab-content">
                    <!-- frontend Technology Tab -->
                    <div class="tab-pane fade show active" id="frontend" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/Angular.png" alt="Angular">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/react.png" alt="ReactJs">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/vite.png" alt="Vite">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/vue js.png" alt="vue">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/typescript.png" alt="Ts">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/javascript.png" alt="Js">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/Group 1686557311.png" alt="html">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/CSS.png" alt="Css">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frontend/tailwind.png" alt="tailwind">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- backend Technology Tab -->
                    <div class="tab-pane fade" id="backend" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/python.png" alt="python">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/net.png" alt="net">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/net-core.png" alt="net-core">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/node-JS.png" alt="node-JS">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/Java.png" alt="java">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/c.png" alt="c#">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/php.png" alt="php">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Backend/GO.png" alt="go">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- database Tab -->
                    <div class="tab-pane fade" id="database" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/firebase.png" alt="firebase">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/Group 1686557319.png" alt="database">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/mongodb.png" alt="mongodb">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/my-sql.png" alt="my-sql">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/postgre-sql.png" alt="postgre-sql">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/SQL-server.png" alt="SQL-server">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Database/sqlite.png" alt="sqlite ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- framework Tab -->
                    <div class="tab-pane fade" id="framework" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap justify-content-center">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frameworks/cakephp.png" alt="cakephp">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frameworks/codeigniter.png" alt="codeigniter">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frameworks/django.png" alt="django">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frameworks/laravel.png" alt="laravel">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Frameworks/rails.png" alt="rails">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ecommerce Tab -->
                    <div class="tab-pane fade" id="ecommerce" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/atg.png" alt="atg">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/commerce-cloud.png" alt="commerce-cloud">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/commerce-tools.png" alt="commerce-tools">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/elasticpath.png" alt="elasticpath">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/endeka.png" alt="endeka">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/magento.png" alt="magento">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/oracle-.png" alt="oracle-">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/oracle.png" alt="oracle">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/os-commerce.png" alt="os-commerce">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/shopify.png" alt="shopify">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/Ecommerce/woo-commerce.png" alt="woo-commerce">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cms Tab -->
                    <div class="tab-pane fade" id="cms" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/CMS/drupal.png" alt="drupal">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/CMS/Group.png" alt="cms">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/CMS/joomla.png" alt="joomla">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/CMS/squarespace.png" alt="squarespace">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/CMS/weebly.png" alt="weebly">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/CMS/wix.png" alt="wix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- mobile Tab -->
                    <div class="tab-pane fade" id="mobile" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/android.png" alt="android">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/flutter.png" alt="flutter">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/ionic.png" alt="ionic">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/IOS.png" alt="IOS">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/mobile.png" alt="mobile">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/react-native.png" alt="react-native">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/mobile/X.png" alt="x">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- devops Tab -->
                    <div class="tab-pane fade" id="devops" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/devops/azure.png" alt="azure">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/devops/devops.png" alt="devops">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cloud Tab -->
                    <div class="tab-pane fade" id="cloud" role="tabpanel">
                        <div class="swiper techno-swiper">
                            <div class="swiper-wrapper techno-row row-gap">
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/cloud/AWS.png" alt="AWS">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/cloud/google-clous.png" alt="googl-clous">
                                    </div>
                                </div>
                                <div class="swiper-slide inner-sec">
                                    <div class="tech-card rounded">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Technologies-Section-icon/cloud/microsoft-azure.png" alt="microsoft-azure">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Industries Crafting Innovative -->
<section id="Crafting_Innovative" class="sectionSpacing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="mb-2 f-18"><span class="me-1"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/section_pointer.png"
                        class="w-auto" height="20px" alt></span>Our Industries</p>
                        <h2 class="section_headingv1 mb-0  pb-2 f-30 f-w-600">Industry we serve</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="<?php echo get_site_url(); ?>/industry-expertise/healthcare-software-development-company/" class="text-decoration-none">
                    <div class="industry-card position-relative text-white">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/OurIndustries01.png" class
                        alt="Healthcare">
                        <div class="top-left-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconHealthcare.png" alt="IconHealthcare">
                        </div>
                        <div class="overlay">
                            <h5>Healthcare</h5>
                        </div>
                        <div class="arrow">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/right-arrow.png"
                            style="width: 30px;" alt="right-arrow">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="<?php echo get_site_url(); ?>/industry-expertise/education-industry-services/" class="text-decoration-none">
                    <div class="industry-card position-relative text-white">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/OurIndustries02.png" class
                        alt="Edtech">
                        <div class="top-left-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconEdtech.png" alt="IconEdtech">
                        </div>
                        <div class="overlay">
                            <h5>Edtech</h5>
                        </div>
                        <div class="arrow">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/right-arrow.png"
                            style="width: 30px;" alt="ight-arrow">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="<?php echo get_site_url(); ?>/industry-expertise/renewable-energy/" class="text-decoration-none">
                    <div class="industry-card position-relative text-white">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/OurIndustries03.png" class
                        alt="Renewable Energy">
                    <div class="top-left-icon"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconRenewableEnergy.png"
                        alt="IconRenewableEnergy"></div>
                    <div class="overlay">
                        <h5>Renewable Energy</h5>
                    </div>
                    <div class="arrow"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/right-arrow.png"
                        style="width: 30px;" alt="right-arro"></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="<?php echo get_site_url(); ?>/services/ecommerce-development/" class="text-decoration-none">
                    <div class="industry-card position-relative text-white">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/OurIndustries04.png" class
                        alt="E-Commerce">
                    <div class="top-left-icon"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/IconIndustryE-Commerce.png"
                        alt="IconIndustryE-Commerce"></div>
                    <div class="overlay">
                        <h5>E-Commerce</h5>
                    </div>
                    <div class="arrow"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/right-arrow.png"
                        style="width: 30px;" alt="right-arrow"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Meet our Clients -->
<section id="client" class="sectionSpacing client">
    <div class="py-5 bg-color">
        <?php echo do_shortcode('[client_testimonials]'); ?>
    </div>
</section>
<!-- blog-->
<section id="blog" class="sectionSpacing pb-0 blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex ">
                    <div>
                        <div class="mb-2 f-18"><span class="me-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/section_pointer.png"
                        class="w-auto" height="20px" alt="section_pointer"></span>Our Blogs</div>
                        <h2 class="section_headingv1 mb-0  pb-2 f-30 f-w-600">Exploring Trends, Sharing Knowledge</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[recent_blog_section]'); ?>
    </div>
</section>
<!-- Contact -->
<?php echo do_shortcode('[footer_contact_section]'); ?>
<?php get_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize all Swiper sliders with class 'techno-swiper'
        document.querySelectorAll('.techno-swiper').forEach(function (swiperEl) {
            new Swiper(swiperEl, {
                slidesPerView: 5,
                spaceBetween: 10,
                breakpoints: {
                    320: { slidesPerView: 2 },
                    576: { slidesPerView: 3 },
                    768: { slidesPerView: 4 },
                    992: { slidesPerView: 5 }
                }
            });
        });
    });
</script>