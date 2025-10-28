<?php
get_header(); ?>
<section id="Portfolio-Detail" class="portfolio-detail sectionSpacing mt-5">
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <div class="row justify-content-center">
                    <div class="col-12 col-md-12">
                            <h1 class="f-24 f-w-600  section_headingv1 text-center px-2 pt-4"> <?php echo get_the_title(); ?></h1>
                            <div class="violetMix-gradient col-12 justify-self-center" style="height:2px"></div>
                    </div>
                    <div class="mt-4">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid object-fit-cover" alt="portfolio-details">
                    </div>
                    </div>
                </div>
                <div class="row justify-content-center sectionSpacing px-0 px-md-2">
                    <div class="col-12 col-md-12 px-md-0">
                        <div class="row text-justify">
                            <div class="col-12 col-md-8">
                                <?php
                                while ( have_posts() ) : the_post();
                                    the_content();
                                endwhile;
                                ?>                                
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card shadow p-3 rounded-4 position-sticky mt-5 mt-md-0" style="top:80px">
                                    <h2 class="f-20  w-600 section_headingv1 mb-3">Let’s Explore</h2>
                                    <?php echo do_shortcode('[contact-form-7 id="275bf6d" title="Let’s Explore"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- Our-Recent-Work slider -->
<section id="Our-Recent-Work" class="our-recent-wrk sectionSpacing ">
    <div class="container">
        <div class="text-center">
            <h2 class="f-30 f-w-600  section_headingv1 mb-4">Our Recent Work</h2>
            <p class="f-18 f-w-400   black-111">
                Bringing Your Ideas to Life &amp; Crafting Your Digital Success
            </p>
        </div>
        <div>
            <?php echo do_shortcode('[our_work_section]'); ?>
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