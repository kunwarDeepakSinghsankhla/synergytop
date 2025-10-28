<?php
/**
 * Template Name: Sitemap Page
 * Description: A custom sitemap page template using Bootstrap layout.
 */
get_header();
?>
<section id="Cus-Soft-Developer" class="cus-soft-developer" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/portfolio-banner.png');">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-30 f-w-600 black-carbon mb-3">Sitemap</h2>              
            </div>
        </div>
    </div>
</section>
<section id="sitemap-design" class="our-web-design bg-white">
	<div class="container my-5">
	    <div class="row">
	        <!-- Pages -->
	        <div class="col-md-4 mb-4">
	            <h3 class="section_headingv1 text-left f-w-600">Pages</h3>
	            <ul class="list-group">
	                <?php
	                wp_list_pages(array(
	                    'title_li' => '',
	                ));
	                ?>
	            </ul>
	        </div>


	        <div class="col-md-4 mb-4">
	            <h3 class="section_headingv1 f-w-600">Portfolio</h3>
	            <ul class="list-group">
	                <?php
	                $posts = get_posts(array(
	                	'post_type'      => 'avada_portfolio',
	                    'numberposts' => 60,
	                    'orderby' => 'title',
	                    'order' => 'ASC',
	                ));
	                foreach ($posts as $post) {
	                    echo '<li class="list-group-item"><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
	                }
	                ?>
	            </ul>
	        </div>

	        <div class="col-md-4 mb-4">
	            <h3 class="section_headingv1 f-w-600">News & Events</h3>
	            <ul class="list-group">
	                <?php
	                $posts = get_posts(array(
	                	'post_type'      => 'newsnevents',
	                    'numberposts' => -1,
	                    'orderby' => 'title',
	                    'order' => 'ASC',
	                ));
	                foreach ($posts as $post) {
	                    echo '<li class="list-group-item"><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
	                }
	                ?>
	            </ul>
	        </div>


	        <?php
	        /*
	        <!-- Posts -->
	        <div class="col-md-4 mb-4">
	            <h3>Posts</h3>
	            <ul class="list-group">
	                <?php
	                $posts = get_posts(array(
	                    'numberposts' => -1,
	                    'orderby' => 'title',
	                    'order' => 'ASC',
	                ));
	                foreach ($posts as $post) {
	                    echo '<li class="list-group-item"><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
	                }
	                ?>
	            </ul>
	        </div>

	        <!-- Categories -->
	        <div class="col-md-4 mb-4">
	            <h3>Categories</h3>
	            <ul class="list-group">
	                <?php
	                wp_list_categories(array(
	                    'title_li' => '',
	                ));
	                ?>
	            </ul>
	        </div>
	        */ ?>
	    </div>
	</div>
</section>
<?php get_footer(); ?>
