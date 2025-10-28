<?php
/*
Template Name: About Us Page Template
*/
get_header();

$page_id = get_the_ID();

// ACF Fields
$page_title           = get_field('page_title', $page_id);
$bg_image             = get_field('bg-image', $page_id);
$page_descriptiopn    = get_field('page_descriptiopn', $page_id);
$page_sub_description = get_field('page_sub_description', $page_id);
?>

<!-- About banner -->
<section id="About-us-section" class="about-us-section py-4 py-md-3"
         style="background-image: url('<?php echo $bg_image['url']; ?>');">
  <div class="banner-health w-100 align-items-end">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-md-9 mx-auto">
          <h2 class="f-w-600 f-46 gradient-text mb-3"><?php echo $page_title; ?></h2>
          <div class="f-w-400 f-18 black-carbon">
            <h4 class="f-w-600 f-24 color-blue lh-sm">
              <?php echo $page_descriptiopn; ?>
            </h4>
            <?php echo $page_sub_description; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rating section -->
<?php echo do_shortcode('[brand_rating_slider]'); ?>

<?php
// ACF Fields
$our_growth_statistics_text = get_field('our_growth_statistics_text', $page_id);
$our_growth_statistics      = get_field('our_growth_statistics', $page_id);
?>    

<!-- Growth Statistics -->
<section id="growth-statistics" class="sectionSpacing growth-statistics">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section_headingv1 text-center mb-4 pb-2 f-30 f-w-600">
          <?php echo $our_growth_statistics_text; ?>
        </h2>
      </div>

      <?php foreach ($our_growth_statistics as $our_growth): ?>
        <div class="col-lg-3 col-md-6">
          <div class="card border-0 rounded-0 p-3">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="counter"
                  data-target="<?php echo esc_attr($our_growth['no_experience']); ?>">
                15+
              </h4>
              <img src="<?php echo $our_growth['icon']['url']; ?>"
                   alt="<?php echo $our_growth['icon']['alt']; ?>">
            </div>
            <p class="mb-0">
              <?php echo $our_growth['title']; ?>
              <span class="d-block fw-semibold"><?php echo $our_growth['sub_title']; ?></span>
            </p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php
// ACF Fields
$who_are_we_text        = get_field('who_are_we_text', $page_id);
$who_are_we_description = get_field('who_are_we_description', $page_id);
?> 

<!-- Who we are -->
<section id="how-we-are" class="how-we-are sectionSpacing sky-bg rounded">
  <div class="container">
    <div class="row gap-4 gap-lg-0">
      <div class="col-12 col-lg-7">
        <h2 class="f-30 f-w-600 color-blue"><?php echo $who_are_we_text; ?></h2>
        <?php echo $who_are_we_description; ?>
      </div>

      <div class="col-12 col-lg-5">
        <div class="one-side-round h-100">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/About-us/about-who-we-are.jpg"
               class="img-fluid object-fit-cover h-100" alt="Who we are">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// ACF Fields
$know_more_about_us_text = get_field('know_more_about_us_text', $page_id);
$know_more_about_us      = get_field('know_more_about_us', $page_id);
?> 

<!-- Know About Us -->
<?php if ($know_more_about_us_text || $know_more_about_us): ?>
  <section id="Know-About-Us" class="sectionSpacing Know-About-us pb-0">
    <div class="container">

      <?php if ($know_more_about_us_text): ?>
        <div class="row">
          <div class="col-12">
            <p class="f-w-600 f-30 color-blue"><?php echo esc_html($know_more_about_us_text); ?></p>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($know_more_about_us): ?>
        <div class="row justify-content-center">
          <?php foreach ($know_more_about_us as $know_more): ?>
            <?php
              $title       = $know_more['title'] ?? '';
              $description = $know_more['description'] ?? '';
              $image       = $know_more['image'] ?? '';
              $services    = $know_more['services'] ?? '';
            ?>
            <div class="col-lg-4 col-md-6 mt-4">
              <div class="text-decoration-none">
                <div class="card rounded-0 position-relative">
                  <div class="px-3 pt-3">
                    <!-- Static top icon -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/About-us/icon/1.png"
                         alt="Top Icon" class="top-image index-9">
                    
                    <!-- Title -->
                    <?php if ($title): ?>
                      <h3 class="color-blue mt-3 index-9 f-18 f-w-700"><?php echo esc_html($title); ?></h3>
                    <?php endif; ?>
  
                    <!-- Description -->
                    <?php if ($description): ?>
                      <p class="our_expertise_para fontOpenSans index-9 f-14">
                        <?php echo esc_html($description); ?>
                      </p>
                    <?php endif; ?>
                  </div>

                  <!-- Image -->
                  <?php if (!empty($image['url'])): ?>
                    <img src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt'] ?? ''); ?>"
                         class="ourExpertiseImg-craft">
                  <?php endif; ?>

                  <!-- Services Link -->
                  <?php if (!empty($services['url']) && !empty($services['title'])): ?>
                    <a class="ourExpertise-button btn rounded-0"
                       href="<?php echo $services['url']; ?>">
                      <span class="long-text"><?php echo esc_html($services['title']); ?></span>
                      <img class="m-0 me-1" id="icon-chat"
                           src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/Crafting_InnovativeArrow.png"
                           alt="Arrow">
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
