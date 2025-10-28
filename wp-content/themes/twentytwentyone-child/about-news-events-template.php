<?php
/*
Template Name: About News Event Template
*/
get_header();
$page_id = get_the_ID();
?>

<!-- // ACF Fields -->
<?php
$page_title = get_field('page_title', $page_id);
$bg_image = get_field('bg_image', $page_id);
?> 
<section id="About-news" class="service-second technology-listing about-news"
    style="background-image: url('<?php echo $bg_image['url']; ?>');">
    <div class="container align-content-center">
            <div class="text-center">
                <h2 class="f-w-600 f-46 text-white"><?php echo $page_title; ?></h2>
            </div>
    </div>
</section>

<div class="container">
    <section id="News-Events" class="news-events sectionSpacing blog pb-0">
        <div class="row mt-4">
             <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'newsnevents',
                'posts_per_page' => 9,
                'paged' => $paged,
            );

            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) {
                while ($news_query->have_posts()) {
                    $news_query->the_post();
                    ?>
                <div class="col-md-4 mb-3">
                    <a href="<?php the_permalink(); ?>">
                        <div class="card rounded-0 position-relative">
                             <?php 
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
                                if ($thumbnail_url) : ?>
                                    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php else : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/synergy-top-banner.png" alt="Default Image" />
                                <?php endif; ?>
                            <div class="p-2 mt-3">
                                <button class="blog-btn rating_sld_section mb-3 f-12"><?php echo get_the_date(); ?></button>
                                <h3 class="our_expertise_heading f-18 f-w-600"><?php the_title(); ?></h3>
                                <p class="blog_para f-14"><?php echo wp_trim_words(get_the_content(), 33); ?></p>
                            </div>
                        </div>
                   </a>
                </div>
                <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p>No news or events found.</p>';
            }
            ?>
        </div>
        
        <!-- Custom Pagination -->
        <?php
        $total_pages = $news_query->max_num_pages;

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));
            ?>
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4">
                <ul class="pagination">
                    <?php if ($current_page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo get_pagenum_link($current_page - 1); ?>">Previous</a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php echo ($i === $current_page) ? 'active' : ''; ?>">
                            <a class="page-link" href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($current_page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo get_pagenum_link($current_page + 1); ?>">Next</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php } ?>
    </section>

    <section id="Explore-Now" class="explore-now sectionSpacing bg-white pb-0">
       <div class="w-100 text-center">
            <div class="sectionSpacing align-content-center explore-img px-3" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/cutting-edge.png');">
                <p class="f-20 f-w-400  text-white mb-5 mt-3">
                    We leverage cutting-edge technologies to deliver industry-leading solutions.
                </p>
                <a href="<?php echo get_site_url(); ?>/contact-us/" class="btn btn-outline-light btn-hover bg-white f-18 f-w-500  text-primary border-0 mb-3">Explore Now</a>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>