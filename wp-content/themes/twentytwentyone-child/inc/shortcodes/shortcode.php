<?php 
// Footer Contact Section
function custom_footer_contact_section_shortcode(){
    ob_start(); ?>
        <section id="contact" class="sectionSpacing pb-0">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-md-5 p-4 bg-primary text-white">
                        <h4 class="mt-3 f-18 f-w-600 section_headingv1">Let's start a new
                        project</h4>

                        <?php echo do_shortcode('[contact-form-7 id="1e97a09" title="New Project Form" html_class="mt-4"]'); ?>
                    </div>
                    <div class="col-md-7 p-4 border-start-0 contact-bg">
                        <div class="d-flex ">
                            <div>
                                <p class="mb-2 f-18"><span class="me-1"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/section_pointer.png"
                                    class="w-auto"
                                    height="20px" alt></span>Meet Us</p>
                                <h2 class="section_headingv1 mb-0  pb-2 mb-3 f-30 f-w-600">Let’s
                                Create Digital Excellence Together</h2>
                                <h3 class="contact_heading f-18 f-w-600">Office Address</h3>
                            </div>
                        </div>
                        <div class="row mt-4 address">
                            <div class="col-12">
                                <div class="row mx-0">
                                    <div class="col-md-6">
                                        <h5 class=" city f-16 f-w-600">San Diego</h5>
                                        <p class="text-primary-gray fontOpenSans f-14">8155
                                        Mercury Ct, Suite 120, San Diego, CA 92111</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class=" city f-16 f-w-600">Los Angeles</h5>
                                        <p class="text-primary-gray fontOpenSans f-14">3343
                                        Keystone Ave, Suite 7, Los Angeles, CA 90034</p>
                                    </div>
                                </div>
                                <div class="row border-blue-btm mx-0">
                                    <div class="col-md-6">
                                        <h5 class=" city f-16 f-w-600">Los Altos</h5>
                                        <p class="text-primary-gray fontOpenSans f-w-600 f-14">878
                                        Lockhaven CT, Los Altos, CA 94024</p>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row border-violet-btm mt-5 mx-0">
                                    <div class="col-md-12">
                                        <h5 class=" city f-16 f-w-600">Pune</h5>
                                        <p class="text-primary-gray fontOpenSans f-14">402, 4th
                                        Floor, TRANSBAY Balewadi, Pune, Maharashtra India
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class=" city f-16 f-w-600">Indore</h5>
                                        <p
                                        class="text-primary-gray fontOpenSans f-w-600 f-14">MPSEDC
                                        IT Park, 142-A, Electronic Complex, Indore, MP, India
                                        452010</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    return ob_get_clean(); 
}

add_shortcode('footer_contact_section', 'custom_footer_contact_section_shortcode');

// Our Work section
function custom_our_work_section_shortcode(){
    ob_start(); ?>
        <div class="swiper ourWorkSwiper our-recent-wrk">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="<?php echo get_site_url();?>/portfolio-item/machadalo/" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Machadalo-.png" alt="Machadalo">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="<?php echo get_site_url();?>/portfolio-item/driving-better-customer-engagement-for-a-leading-solar-energy-market-platform-with-a-python-powered-web-application/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Onswitch-.png" alt="Onswitch">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="<?php echo get_site_url();?>/portfolio-item/helping-doctors-manage-40-more-patients-with-the-practiceaid-web-and-mobile-app/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/PractiseAid-.png" alt="PractiseAid">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="<?php echo get_site_url();?>/portfolio-item/creating-a-solid-digital-presence-for-an-arizona-based-sports-news-platform/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sports 360-.png" alt="Sports 360">
                </a>
            </div>

            <div class="swiper-slide">
                  <a href="<?php echo get_site_url();?>/portfolio-item/synergytop-revitalized-a-creative-platform-for-kids-helped-them-grow" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Taletree-.png" alt="Taletree">
                  </a>
            </div>

            <div class="swiper-slide">
                  <a href="<?php echo get_site_url();?>/portfolio-item/hockenbergs/" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Trimark.png" alt="Trimark">
                  </a>
            </div>
          </div>

          <!-- Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
    <?php
    return ob_get_clean(); 
}

add_shortcode('our_work_section', 'custom_our_work_section_shortcode');


// Recent Blog Section
function custom_recent_blog_section_shortcode(){
    ob_start(); ?>
    <div class="row mt-4">
        <?php
        $api_url = 'https://synergytop.com/blog/wp-json/wp/v2/posts?per_page=3&status=publish&_embed';
        $response = wp_remote_get($api_url);
        if (is_wp_error($response)) {
            echo '<p>Failed to fetch posts.</p>';
        } 
        else {
            $posts = json_decode(wp_remote_retrieve_body($response), true);
            if (!empty($posts)) {
                foreach ($posts as $post) { 
                    $date = new DateTime($post['date']);
                    $formatted_date = $date->format('j M, Y');
                    $featured_image_url = isset($post['_embedded']['wp:featuredmedia'][0]['source_url']) 
                    ? $post['_embedded']['wp:featuredmedia'][0]['source_url'] 
                    : ''; ?>
                    <div class="col-md-4 mb-3">
                        <div class="card rounded-0 position-relative px-2 pt-2">
                            <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($post['title']['rendered']); ?>">
                            <div class="p-2 mt-3">
                                <button class="blog-btn rating_sld_section mb-3 f-12"><?php echo $formatted_date; ?></button>
                                <a class="our_expertise_heading f-18 f-w-600" href="<?php echo $post['link']; ?>"><?php echo esc_attr($post['title']['rendered']); ?></a>
                                <p class="blog_para f-14"><?php echo wp_trim_words( wp_strip_all_tags( $post['content']['rendered'] ), 30, '...' ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } 
        } ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('recent_blog_section', 'custom_recent_blog_section_shortcode');


// Add this in your theme's functions.php or in a custom plugin
function shortcode_client_testimonials() {
    ob_start();
    ?>
    <div class="container">
        <div class="row heading_section">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="other-client-pg">
                        <p class="mb-2 text-center f-18">
                            <span class="me-1">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/section_pointerv2.png" class="w-auto" height="20" alt="">
                            </span>
                            Meet Our Clients
                        </p>
                        <h2 class="section_headingv1 mb-0 pb-2 text-center f-30 f-w-600">Our client love us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <!-- Left Side Logos -->
            <div class="col-md-12 col-lg-6 mb-4 mb-md-0 d-none d-md-flex flex-column justify-content-center">
                <div class="client-logos">
                    <?php
                    $logos = new WP_Query(array(
                        'post_type'      => 'testimonials',
                        'posts_per_page' => -1,
                    ));
                    if ($logos->have_posts()) : ?>
                        <table class="mb-4 mb-lg-0">
                            <tbody>
                                <?php 
                                $i = 0; 
                                while ($logos->have_posts()) : $logos->the_post(); 
                                    $logo = get_field('testimonials_logo');
                                    $color_logo = get_field('testimonials_color_logo');
                                    $final_logo = $color_logo ? $logo : $color_logo;

                                    // agar image missing hai -> skip
                                    if (!$final_logo) continue;

                                    if ($i % 3 == 0) echo '<tr class="client-sidebar">'; ?>
                                    <td class="logo-grid">
                                        <div class="logo-item" data-index="<?php echo $i+1; ?>">
                                            <img src="<?php echo esc_url($final_logo['url']); ?>" alt="<?php the_title(); ?>">
                                        </div>
                                    </td>
                                    <?php 
                                    $i++;
                                    if ($i % 3 == 0) echo '</tr>';
                                endwhile; 
                                ?>
                            </tbody>
                        </table>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- Right Side Testimonials -->
            <div class="col-md-12 col-lg-6">
                <div class="Testimonials_sld">
                    <div class="swiper Testimonials_Swiper ourworks-btns position-relative">
                        <div class="swiper-wrapper">
                            <?php
                            $testimonials = new WP_Query(array(
                                'post_type'      => 'testimonials',
                                'posts_per_page' => -1,
                            ));
                            if ($testimonials->have_posts()) :
                                while ($testimonials->have_posts()) : $testimonials->the_post();
                                    $logo = get_field('testimonials_logo');
                                    $color_logo = get_field('testimonials_color_logo');
                                    $final_logo = $color_logo ? $color_logo : $logo;

                                    // agar image missing hai -> skip
                                    if (!$final_logo) continue;
                                    $designation = get_field('designation'); ?>
                                    <div class="swiper-slide">
                                        <div class="card border-0 rounded-0 p-4 gap-3">
                                            <div class="img-wrraper mx-auto">
                                                <img src="<?php echo esc_url($final_logo['url']); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                            </div>
                                            <div class="text-primary-gray text-center f-16 client-truncate">
                                                <p><?php the_content(); ?></p>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <?php if(get_the_post_thumbnail_url()): ?>
                                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 85px;height: 85px;border-radius: 100%;" class="m-auto object-fit-cover" alt="">
                                                <?php endif; ?>
                                                <p class="name mt-2 mb-0 f-16 f-w-600"><?php the_title(); ?></p>
                                                <?php if($designation): ?>
                                                    <span class="designation text-primary-gray f-14"><?php echo esc_html($designation); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php 
                                endwhile; 
                            endif; 
                            wp_reset_postdata(); ?>
                        </div>

                        <!-- Swiper Nav -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('client_testimonials', 'shortcode_client_testimonials');

// Shortcode for Brand Rating Slider
function brand_rating_slider_shortcode() {
    ob_start(); ?>
        <section id="brandRating" class="rating_sld_section py-3 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ratingDiv my-3">
                            <div class="swiper RatingSwiper">
                                <div class="swiper-wrapper">

                                    <!-- Slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="card border-0 text-center p-3">
                                            <a href="https://clutch.co/profile/synergytop" target="_blank" rel="noopener noreferrer">
                                                <div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/bannerSld01.png"
                                                    class="logo" alt>
                                                </div>
                                            </a>
                                            <div class="mt-2">
                                                <p class="mb-1 f-12">4.9
                                                    <?php for($i=0;$i<5;$i++){ ?>
                                                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/ratingStar.svg" width="9px" alt="ratingStar"></span>
                                                    <?php } ?>
                                                </p>
                                                <p class="brand mb-0 f-12">Rating on Clutch</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="card border-0 text-center p-3">
                                            <a href="https://www.designrush.com/agency/profile/synergytop" target="_blank" rel="noopener noreferrer">
                                                <div>                                     
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/bannerSld02.png" class="logo" alt="bannerSld02">
                                                </div>
                                            </a>
                                            <div class="mt-2">
                                                <p class="mb-1 f-12">4.9
                                                    <?php for($i=0;$i<5;$i++){ ?>
                                                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/ratingStar.svg" width="9px" alt="ratingStar"></span>
                                                    <?php } ?>
                                                </p>
                                                <p class="brand mb-0 f-12">Rating on DesignRush</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide 3 -->
                                    <div class="swiper-slide">
                                        <div class="card border-0 text-center p-3">
                                            <a href="https://www.goodfirms.co/company/synergytop" target="_blank" rel="noopener noreferrer">
                                                <div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/bannerSld03.png"
                                                    class="logo" alt="bannerSld03">
                                                </div>
                                            </a>
                                            <div class="mt-2">
                                                <p class="mb-1 f-12">4.9
                                                    <?php for($i=0;$i<5;$i++){ ?>
                                                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/ratingStar.svg" width="9px" alt="ratingStar"></span>
                                                    <?php } ?>
                                                </p>
                                                <p class="brand mb-0 f-12">Rating on GoodFirms</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide 4 -->
                                    <div class="swiper-slide">
                                        <div class="card border-0 text-center p-3">
                                            <a href="https://www.sortlist.com/agency/synergytop" target="_blank" rel="noopener noreferrer">
                                                <div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/bannerSld04.png"
                                                    class="logo" alt="bannerSld04">
                                                </div>
                                            </a>
                                            <div class="mt-2">
                                                <p class="mb-1 f-12">4.7
                                                    <?php for($i=0;$i<5;$i++){ ?>
                                                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/ratingStar.svg" width="9px" alt="bannerSld04"></span>
                                                    <?php } ?>
                                                </p>
                                                <p class="brand mb-0 f-12">Rating on Sortlist</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide 5 -->
                                    <div class="swiper-slide">
                                        <div class="card border-0 text-center p-3">
                                            <a href="https://techbehemoths.com/company/synergytop#reviews" target="_blank" rel="noopener noreferrer">
                                                <div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/bannerSld05.png"
                                                    class="logo" alt="bannerSld05">
                                                </div>
                                            </a>
                                            <div class="mt-2">
                                                <p class="mb-1 f-12">4.7
                                                    <?php for($i=0;$i<5;$i++){ ?>
                                                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/ratingStar.svg" width="9px" alt="ratingStar"></span>
                                                    <?php } ?>
                                                </p>
                                                <p class="brand mb-0 f-12">Rating on Techbehemoths</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide 6 -->
                                    <div class="swiper-slide">
                                        <div class="card border-0 text-center p-3">
                                            <a href="https://www.bark.com/en/us/company/synergytop---mobile-apps-web-development-and-seo-services/gBemX/" target="_blank" rel="noopener noreferrer">
                                                <div>
                                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/bark.png"
                                                    class="logo" alt="bark">
                                                </div>
                                            </a>
                                            <div class="mt-2">
                                                <p class="mb-1 f-12">5.0
                                                    <?php for($i=0;$i<5;$i++){ ?>
                                                        <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/ratingStar.svg" width="9px" alt="ratingStar"></span>
                                                    <?php } ?>
                                                </p>
                                                <p class="brand mb-0 f-12">Rating on Bark</p>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- swiper-wrapper -->
                            </div> <!-- swiper -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    return ob_get_clean();
}
add_shortcode('brand_rating_slider', 'brand_rating_slider_shortcode');

// Shortcode For Our Experties

function our_expert_e_commerce_development_services() {
    ob_start(); 
    ?>
    <section id="OurExpert" class="sectionSpacing ourExpert">
        <div class="container">
            <div class="mb-4 text-center">
                <h1 class="f-30 f-w-600 section_headingv1 mb-3">Our Expert e-Commerce Development Services</h1>
                <p class="f-18 f-w-400 black-111">Strategic <b>e-Commerce solutions development</b> for B2B and B2C digital commerce</p>
            </div>
        
            <div class="logo-flex-wrapper">
                <!-- Your new-col blocks -->
                <div class="new-col">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/oracle.new.png" class="w-100" alt>
                    </div>
                </div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/oracle-commerece-cloud.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/netsuite.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/magento.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/Woocommerce.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/shopify.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/commercetools.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/shopifyplus.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/elasticpath.png" class="w-100" alt></div></div>
                <div class="new-col"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/E-commerce/our-exprt/oracle-endeca.png" class="w-100" alt></div></div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('our_expert_e_commerce_development_services', 'our_expert_e_commerce_development_services');



