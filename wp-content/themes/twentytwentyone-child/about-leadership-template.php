<?php
/*
Template Name: About Leadership Template
*/
get_header(); 
$page_id = get_the_ID();
?>
<?php 
$bg_image = get_field('bg-image',$page_id);
$page_title = get_field('page_title',$page_id);
?>

<?php if (!empty($bg_image['url'])): ?>
<section id="About-leadership" class="about-leadership" style="background-image: url('<?php echo $bg_image['url']; ?>');">
    <div class="container h-100 align-content-center">
        <div class="text-center">
            <h2 class="f-w-600 f-46 section_headingv1"><?php echo $page_title; ?></h2>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
$descriptions = get_field('descriptions',$page_id);
$management = get_field('management',$page_id);

?>

<div class="container">
    <!-- start -->
    <section id="Leaders-Of-St" class="leaders-of-st">
        <div class="text-center sectionSpacing pb-0 f-16 f-w-500 secondary-blk">
            <p><?php echo $descriptions; ?></p>
        </div>
        <?php 
        foreach($management as $index => $managementValue){
             $social_link = !empty($managementValue['social_link']) ? esc_url($managementValue['social_link']) : '#';
            ?>
            <div class="row align-items-center sectionSpacing pb-0 <?php echo $index%2 != 0 ? 'flex-row-reverse' : ''; ?> ">
                <!-- Left: Image and name -->
                <div class="col-md-4 col-lg-3 text-center text-md-start mb-4 mb-md-0">
                    <div class="lead-wrapper-box position-relative">
                        <img src="<?php echo $managementValue['profile_image']['url']; ?>" class="profile-img mb-3" alt="<?php echo $managementValue['profile_image']['alt']; ?>">                
                         <a href="<?php echo $social_link; ?>" class="position-absolute end-0" target="_blank" rel="noopener">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/About-us/Linkedin.png" alt="Linkedin">
                        </a>
                        <div class="pb-3 text-center">
                            <h5 class="f-18 f-w-600  text-primary"><?php echo $managementValue['name']; ?></h5>
                            <p class="f-14 black-111 mb-0"><?php echo $managementValue['designation']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Right: Description and Expertise -->
                <div class="col-md-8 col-lg-9 pe-md-5">
                    <div class="f-16 f-w-400 secondary-blk">
                        <p class="mb-0">
                        <?php echo $managementValue['experience']; ?>

                        <!-- <label class="f-16 f-w-500  d-block mb-3 mt-4">Expertise:</label>
                        <div class="d-flex gap-2 flex-wrap f-16 f-w-500  ">
                                <a href="#" class="gradient-btn">Leadership</a>    
                                
                                <a href="#" class="gradient-btn">Technology</a>    
                                
                                <a href="#" class="gradient-btn">Leadership</a>    
                                
                                <a href="#" class="gradient-btn">Technology</a>    
                                
                                <a href="#" class="gradient-btn">Leadership</a>    
                        </div> -->
                        </p>
                    </div>
                </div>
            </div>
        <?php 
        } ?>
    </section>
<?php 
$explore_description = get_field('explore_description',$page_id);
$explore_now = get_field('explore_now',$page_id);

?>
    <section id="Explore-Now" class="explore-now sectionSpacing bg-white pb-0">
       <div class="w-100 text-center">
            <div class="sectionSpacing px-3 align-content-center explore-img" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/cus-soft-dev/cutting-edge.png');">
                <div class="f-20 f-w-400 text-white mb-5 mt-3">
                    <p class="mb-0">
                       <?php  echo $explore_description; ?>
                    </p>
                </div>
                <a href="<?php echo $explore_now['url']; ?>" class="btn btn-outline-light btn-hover bg-white f-18 f-w-500  text-primary border-0 mb-3"><?php echo $explore_now['title']; ?></a>
            </div>
        </div>
    </section>
   <!-- End -->
</div>
<?php get_footer(); ?>
