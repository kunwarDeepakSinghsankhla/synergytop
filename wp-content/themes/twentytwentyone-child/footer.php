<!-- Contact -->
<section class="addonftr sectionSpacing pb-0">
    <div class="container-fluid px-0 inner">
        <div class="">
            <div class="row mx-0">
                <div class="col-lg-4 px-3 px-md-4 px-lg-5 py-4">
                    <div class="col-12 col-lg-12 col-xl-10" style="justify-self:end;">
                        <?php if ($logo = get_option('footer_logo')): ?>
                            <a href="<?php echo get_site_url(); ?>">
                                <img src="<?php echo esc_url($logo); ?>" alt="st-log" class="w-50 mb-3">
                            </a>
                        <?php endif; ?>
                        <!-- About Text -->
                        <?php if ($footer_about = get_option('footer_about')): ?>
                            <p class="fontOpenSans"><?php echo esc_html($footer_about); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class>
                        <div class="px-xl-5 px-md-4 px-3 py-4"
                            style="background-color: #EAF0FF;"><h4
                            class="py-2 m-0 f-18 f-w-600">Contact Us</h4></div>
                        <div class="px-xl-5 px-md-4 px-3 py-4">
                            <?php if ($email = get_option('contact_email')): ?>
                                <div class="d-flex gap-2 align-items-center mt-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/contactMail.png"
                                    style="width: 30px;height: 30px;" alt="contactMail">
                                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                                </div>
                            <?php endif; ?>
                            <div class="d-flex gap-2 align-items-center mt-4">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/contactPhone.png"
                                style="width: 30px;height: 30px;" alt="contactPhone">
                                <?php if ($phone_india = get_option('contact_phone_india')): ?>
                                    <a href="tel:<?php echo esc_attr($phone_india); ?>"><?php echo esc_html($phone_india); ?></a>
                                <?php endif; ?>
                                <?php if ($phone_us = get_option('contact_phone_us')): ?>
                                    <a href="tel:<?php echo esc_attr($phone_us); ?>"><?php echo esc_html($phone_us); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 p-0">
                    <div class>
                        <div class="px-xl-5 px-md-4 px-3 py-4"
                            style="background-color: #EAF0FF;"><h4
                            class="py-2 m-0 f-18 f-w-600">Follow Us</h4>
                        </div>
                        <div class="px-xl-5 px-md-4 px-2 py-4 d-flex flex-md-column flex-row justify-content-between">
                            <?php
                            $counter = 0;
                            $output = '';
                            for ($i = 1; $i <= 6; $i++) {
                                $icon = get_option("social_icon_$i");
                                $link = get_option("social_link_$i");
                                if ($icon && $link) {
                                    if ($counter % 3 === 0) {
                                        if ($counter !== 0) {
                                            $output .= '</div>'; 
                                        }
                                        $output .= '<div class="d-flex gap-2 align-items-center mt-md-3">';
                                    }
                                    $output .= '<a href="' . esc_url($link) . '" target="_blank"><img src="' . esc_url($icon) . '" style="width: 30px; height: 30px;" alt="Social ' . $i . '"></a>';

                                    $counter++;
                                }
                            }
                            if ($counter > 0) {
                                $output .= '</div>';
                            }
                            echo $output; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer text-white mt-2 mt-mb-0 mt-lg-0 mt-xl-0">
    <div class="container">
        <div class="row">
        <!-- Services -->
        <?php
        $services = get_option('services_list_array');
        if (!empty($services) && is_array($services)) : ?>
            <div class="col-lg-3 px-lg-3 py-3 py-lg-4">
                <h5 class="f-18 f-w-600">Services</h5>
                <ul class="ps-4 f-14">
                    <?php 
                    foreach ($services as $service) :
                        $title = isset($service['title']) ? esc_html($service['title']) : '';
                        if ($title): ?>
                            <li>
                                <?php 
                                if($title == 'Staffing'){ 
                                    echo '<a href="https://st-creativeminds.com/">'.$title.'</a>'; 
                                }else{ ?>
                                    <a href="<?php echo get_permalink($service['link']); ?>"><?php echo $title; ?></a>
                                <?php 
                                } ?>
                            </li>
                        <?php 
                        endif; 
                    endforeach; ?>
                </ul>
            </div>
        <?php
        endif; ?>

        <!-- Technologies -->
        <?php
        $technologies = get_option('technologies_list_array');
        if (!empty($technologies) && is_array($technologies)) : ?>
            <div class="col-lg-3 px-lg-3 py-3 py-lg-4">
                <h5 class="f-18 f-w-600">Technologies</h5>
                <ul class="ps-4 f-14">
                    <?php 
                    foreach ($technologies as $technologiesValue) :
                        $title = isset($technologiesValue['title']) ? esc_html($technologiesValue['title']) : '';
                        if ($title): ?>
                            <li><a href="<?php echo get_permalink($technologiesValue['link']); ?>"><?php echo $title; ?></a></li>
                        <?php 
                        endif; 
                    endforeach; ?>
                </ul>
            </div>
        <?php
        endif; ?>

        <!-- About -->
        <?php
        $about = get_option('about_links_array');
        if (!empty($about) && is_array($about)) : ?>
            <div class="col-lg-3 px-lg-3 py-3 py-lg-4">
                <h5 class="f-18 f-w-600">About</h5>
                <ul class="ps-4 f-14">
                    <?php 
                    foreach ($about as $aboutValue) :
                        $title = isset($aboutValue['title']) ? esc_html($aboutValue['title']) : '';
                        if ($title): ?>
                            <li><a href="<?php echo get_permalink($aboutValue['link']); ?>"><?php echo $title; ?></a></li>
                        <?php 
                        endif; 
                    endforeach; ?>
                </ul>
            </div>
        <?php
        endif; ?>
        <!-- Contact & Social Media -->
        <div class="col-lg-3 px-lg-3 py-3 py-lg-4">
            <h5 class="f-18 f-w-600">Latest Blog</h5>
            <?php 
            $api_url = 'https://synergytop.com/blog/wp-json/wp/v2/posts?per_page=5&status=publish&_embed';
            $response = wp_remote_get($api_url);
            if (is_wp_error($response)) {
                echo '<p>Failed to fetch posts.</p>';
            } 
            else {
                $posts = json_decode(wp_remote_retrieve_body($response), true); 
                if (!empty($posts)) { ?>
                    <ul class="f-14 ps-0" type="none">
                        <?php 
                        foreach ($posts as $post) { 
                            echo '<li><a href="'.$post['link'].'">'.wp_trim_words( wp_strip_all_tags( $post['title']['rendered'] )).'</a></li>';
                        } ?>
                    </ul>
            <?php 
                }
            } ?>
        </div>
        </div>
    </div>
    <div class="text-center  py-2" style="background-color: #000F33;">
        <p class="mb-0 f-14">&copy; Copyright SynergyTop | All Rights
        Reserved 2025</p>
    </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Navigation-assets/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Navigation-assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Navigation-assets/js/megamenu.js"></script>
<!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/Navigation-assets/js/bootstrap.bundle.min.js"></script> -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
    </body>
</html>