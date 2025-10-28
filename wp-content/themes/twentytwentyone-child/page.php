<?php
/*
Template Name: Custom Software Development Page Template
*/
get_header(); ?>
<!-- service page-1 -->

<section id="Privacy-Policy" class="default-page technology-listing" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/imag5.webp');">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-40 f-w-600 section_headingv1 mb-0"><?php echo get_the_title(); ?></h2>             
            </div>
        </div>
    </div>
</section>

<section class="sectionSpacing pb-0">
    <div class="container">
        <div class="text-left">
            <main id="primary" class="site-main">
                <h1 class="f-30 f-w-600 section_headingv1"><?php the_title(); ?></h1>
                <div class="content-area f-18 f-w-400 black-111">
                    <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </main>
        </div>
    </div>
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
