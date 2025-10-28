<?php
/*
Template Name: Prortfolio Template
*/
get_header(); ?>
<!-- Portfolio-Banner -->
<section id="Portfolio-Banner" class="portfolio-banner about-leadership"
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/portfolio-banner.png');">
    <div class="container h-100 align-content-center">
        <div class="text-center mx-md-5">
            <h2 class="f-w-600 f-46  gradient-text mb-3">Portfolio</h2>
            <p class="f-24 f-w-600  section_headingv1 mb-3">Showcasing custom e-commerce, web and mobile solutions that
                helped businesses make a mark in the digital world</p>
            <p class="f-18 black-carbon f-w-400 mx-md-5 mb-0">Staying ahead of the competition, expanding the user
                base, maximizing revenue, and minimizing effort-our
                E-Commerce, Web, and Mobile solutions deliver all this and more for our clients. In this section, we
                showcase projects that blend cutting-edge technology with superior design thinking and precise
                implementation to drive real, measurable results.</p>
        </div>
    </div>
</section>
<!-- Call back -->
<section id="Portfolio-Blog" class="portfolio-blog sectionSpacing pb-0">
    <div class="container">
        <div class="sectionSpacing pt-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex flex-wrap justify-content-center gap-2 more-btn-wrapper" id="portfolio-tabs1">
                        <?php
                        // Determine the current active tab from the URL (?tab=...)
                        $current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'all';
                        ?>
                        <a href="<?php echo esc_url( get_site_url() . '/portfolio/'); ?>" data-filter="all"
                            class="btn border bg-white hover-blue f-14 f-w-500 fontPoppins secondary-blk rounded-1 <?php echo ($current_tab === 'all') ? 'active' : ''; ?>">All</a>
                        <?php 
                        $categories = get_categories( array(
                            'taxonomy'   => 'portfolio_category',
                            'type'       => 'avada_portfolio',
                            'hide_empty' => false, 
                        ) );
                        if($categories){
                            foreach($categories as $cat){
                                $active_class = ($current_tab === $cat->slug) ? 'active' : ''; ?>
                                <a href="<?php echo esc_url( get_site_url() . '/portfolio/?tab=' . $cat->slug ); ?>" 
                                   class="btn border bg-white hover-blue f-14 f-w-500 fontPoppins secondary-blk rounded-1 <?php echo esc_attr( $active_class ); ?>">
                                    <?php echo esc_html( $cat->name ); ?>
                                </a>
                            <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
       <!-- Portfolio Cards -->
        <div class="row" id="portfolio-cards">
            <?php
            $big = 999999999;
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $tax_query = array();
            if ( ! empty( $_GET['tab'] ) ) {
                $tax_query[] = array(
                    'taxonomy' => 'portfolio_category',
                    'field'    => 'slug',
                    'terms'    => sanitize_text_field( $_GET['tab'] ),
                );
            }

            $args = array(
                'post_type'      => 'avada_portfolio',
                'posts_per_page' => 9,
                'paged'          => $paged,
                'tax_query'      => $tax_query,
            );

            $portfolio_query = new WP_Query( $args );

            if ( $portfolio_query->have_posts() ) {
                while ( $portfolio_query->have_posts() ) {
                    $portfolio_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 portfolio-card">
                        <div class="card rounded-1 border-0 h-100" style="outline:1px solid #C3D7FF">
                            <div class="portfolio-img"> 
                                <?php
                                $image_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );

                                if ( $image_url ) {
                                    echo '<img src="' . esc_url( $image_url ) . '" class="img-fluid object-fit-cover" alt="' . esc_attr( get_the_title() ) . '">';
                                } else {
                                    echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/portfolio/hand-touching-tablet-blog1.png" class="img-fluid object-fit-cover" alt="No image">';
                                }
                                ?>
                            </div>
                            <div class="card-body rounded-bottom-1 d-flex flex-column justify-content-between" style="background-color:#F0F5FF">
                                <p class="secondary-blk f-w-500 fw-18 truncate-2line">
                                    <?php echo get_the_title(); ?>
                                </p>
                                <a href="<?php echo get_the_permalink(); ?>" class="color-lightblue f-w-500 fw-16">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } ?>
        </div>
        <?php
            $pages = paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'    => '?paged=%#%',
                'current'   => max( 1, $paged ),
                'total'     => $portfolio_query->max_num_pages,
                'prev_text' => 'Previous',
                'next_text' => 'Next',
                'type'      => 'array',
            ) );

            if ( is_array( $pages ) ) {
                echo '<nav aria-label="Page navigation" style="justify-items: center;">';
                echo '<ul class="pagination">';

                foreach ( $pages as $page ) {
                    if ( strpos( $page, 'current' ) !== false ) {
                        echo '<li class="page-item active" aria-current="page"><span class="page-link">' . strip_tags( $page ) . '</span></li>';
                    }
                    elseif ( strpos( $page, 'dots' ) !== false ) {
                        echo '<li class="page-item disabled"><span class="page-link">' . strip_tags( $page ) . '</span></li>';
                    }
                    else {
                        preg_match( '/href="([^"]+)"/', $page, $href );
                        $url  = $href[1] ?? '#';
                        $text = strip_tags( $page );

                        echo '<li class="page-item"><a class="page-link" href="' . esc_url( $url ) . '">' . esc_html( $text ) . '</a></li>';
                    }
                }

                echo '</ul>';
                echo '</nav>';
            } ?>
    </div>
</section>

<!-- Call back -->
<section id="Explore-Now" class="explore-now sectionSpacing bg-white pb-0">
    <div class="container">
        <div class="w-100 text-center">
            <div class="sectionSpacing align-content-center explore-img px-3"
                style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cus-soft-dev/cutting-edge.png');">
                <h2 class="f-30 f-w-600   text-white mb-3 mt-3">We’re ready when you are — let’s talk!</h2>
                <p class="f-20 f-w-400  text-white mb-4">
                    Our experts will guide you through every phase, from planning to execution.
                </p>
                <a href="#"
                    class="btn btn-outline-light btn-hover bg-white f-18 f-w-500  text-primary border-0 mb-4">Request a
                    Call Back</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>