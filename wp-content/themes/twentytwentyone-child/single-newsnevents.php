<?php get_header(); ?>

<section class="single-post-hero">
    <div class="hero-image">
        <?php 
        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
        if ($thumbnail_url) : ?>
            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
        <?php else : ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/synergy-top-banner.png" alt="Default Image" />
        <?php endif; ?>
    </div>
</section>

<section class="container py-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <h1 class="mb-4"><?php the_title(); ?></h1>

                    <div class="post-meta mb-3">
                        <span><?php echo get_the_date(); ?></span> |
                        <span>By <?php the_author(); ?></span>
                    </div>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                
                </article>            
            <?php endwhile; endif; ?>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4" style="display: none;">
            <aside class="right-sidebar">        
                <!-- Recent Posts -->
                <div class="recent-posts">
                    <h5>Recent Posts</h5>
                    <ul>
                        <?php
                        $recent_posts = wp_get_recent_posts(['numberposts' => 5, 'post_type' => 'newsnevents']);
                        foreach ($recent_posts as $post) {
                            echo '<li><a href="' . get_permalink($post["ID"]) . '">' . esc_html($post["post_title"]) . '</a></li>';
                        }
                        wp_reset_query();
                        ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
