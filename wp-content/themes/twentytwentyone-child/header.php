<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SynergyTop</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://db.onlinewebfonts.com/c/40fccfffa7bc57048f06f7420d6fe7ae?family=Bower-Bold" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Bootstrap-5.2.3.min.css">
    <?php
    if ( is_page(262) ){ ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/HealthcarePage.css">
    <?php
    }
    if ( is_page(270) ){  ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Reneweble-Energy.css">
    <?php
    }
    if(is_page(267) || is_page_template('education-page-template.php')){ ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Education.css">
    <?php
    }
    if(is_page_template('ecommerce-page-template.php')){ ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/E-Commerce.css">
    <?php
    }
    if(is_page_template('service-page-template.php')){ ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/service-page-template.css">
    <?php
    }
    if ( is_page_template('career-page-template.php') || is_singular('awsm_job_openings') ) { ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Career.css">
    <?php
    }
    if(is_page_template('service-second-page.php')){ ?> ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/service-second-page.css">
    <?php
    }
    if(is_page_template('contact-us-page-template.php')){ ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Contact-us.css">
    <?php
    }
    if(is_page_template('about-leadership-template.php')){ ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/About-leadership.css">
    <?php
    } ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Blog-detail.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('toggle-sidebar'); ?>> 
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between w-100">
        <div class="d-flex align-items-center justify-content-between gap-4">
          <div class="hamburger toggle-sidebar-btn">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/toggleMenu.png" class="" alt="logo">
          </div>
          <a href="<?php echo get_site_url(); ?>" class="logo d-flex align-items-center">
            <img class="cus-w-90" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/navbarLogo.png" alt="logo">
          </a>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-2 gap-md-2 gap-lg-4">
          <div class="d-none d-md-flex align-items-center justify-content-between f-16 gap-2 gap-md-3 gap-lg-4">
            <a href="<?php echo get_site_url(); ?>/services/" class="text-white text-decoration-none" >Services</a>
            <a href="<?php echo get_site_url(); ?>/portfolio/" class="text-white text-decoration-none">Portfolio</a>
            <a href="<?php echo get_site_url(); ?>/about-us/" class="text-white text-decoration-none">About Us</a>
          </div>
           <div class="button-contact d-flex align-items-center gap-0 gap-md-2">
             <a href="tel:+1 619-349-4911" class="m-0 text-white me-3 whatsapp-icon text-decoration-none">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/teliphone.png"
                 style="width:24px; height:24px;" class="me-1" alt="phone"> 
                 <span class="no-hide d-none d-md-inline">+1 619-349-4911 </span>
             </a>
             <a href="<?php echo get_site_url(); ?>/contact-us/" class="blog-btn rounded-0 btn btn-primary rating_sld_section f-14 px-3 py-2">Contact Us</a>
           </div>
        </div>
      </div>
    </header>
   <?php get_sidebar(); ?>
    <!-- End Header -->