<?php
/*
Template Name: Pricing Page Template
*/
get_header(); ?>
<!-- service page-1 -->
<style>
    .pricing-card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      position: relative;
      overflow: hidden;
    }
    .pricing-card:hover {
      transform: translateY(-5px);
    }
    /* .badge-discount {
      position: absolute;
      top: 15px;
      left: 15px;
      background: #ff4757;
      color: #fff;
      font-size: 0.8rem;
      padding: 0.4rem 0.7rem;
      border-radius: 50px;
    } */
    /* .price-row {
      margin: 1rem 0;
    } */
    /* .price {
      font-size: 2rem;
      font-weight: bold;
      color: #2c3e50;
    } */
    /* .old-price {
      text-decoration: line-through;
      color: #888;
      margin-left: 10px;
      font-size: 1rem;
    } */
    /* .plan-name {
      font-size: 1.1rem;
      font-weight: 600;
      color: #3498db;
    } */
    /* .features-list {
      list-style: none;
      padding: 0;
      margin: 1rem 0 0;
    }
    .features-list li {
      padding: 0.4rem 0;
      border-bottom: 1px solid #f1f1f1;
    }
    .features-list li:last-child {
      border-bottom: none;
    } */
    /* .btn-subscribe {
      margin-top: 1rem;
      background: #3498db;
      border: none;
      padding: 0.6rem 1.2rem;
      border-radius: 50px;
      font-weight: 600;
      color: #fff;
      transition: background 0.3s;
    }
    .btn-subscribe:hover {
      background: #2176bd;
    } */
  </style>
<section id="Pricing-section" class="default-page ricing-section technology-listing" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/imag5.webp');">
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col-12 text-center px-5">   
                <h2 class="f-36 f-w-600 section_headingv1 mb-3">Privacy Policy</h2>
                  <div class="f-18 f-w-400 section_headingv1">
                       <p>Hassle-free Data Sync: monday.com ↔ Zoho Integration</p>
                  </div>         
            </div>
        </div>
    </div>
</section>

<section  id="Pricing-Card" class="sectionSpacing pb-0">
  <div class="container">
    <div class="row g-4">
      <!-- Plan 1 -->
      <div class="col-md-6 col-12">
        <div class="card shadow-sm rounded-4 h-100">
          <div class="card-body p-4">
            <span class="badge bg-danger mb-2 f-12 f-w-500">Inaugural Discount</span>
            <div class="plan f-16 f-w-400"><p class="mb-0"> Plan Id - ZI001 </p></div>
            <h5 class="color-lightblue f-20 f-w-700">Unlimited</h5>
            <h2 class="fw-bold f-24 f-w-700">
              $49.00 <small class="f-14 text-muted f-w-600">/Month</small>
              <span class="text-decoration-line-through text-muted f-14 f-w-600">$60.00</span>
            </h2>
            <p class="text-muted f-16 f-w-400">Unlock the full capabilities of this app</p>
            <h6 class="mt-3 f-w-700 f-16">Features</h6>
            <ul class="list-unstyled mb-4 f-w-400 f-16">
              <li>✅ Unlimited Users</li>
              <li>✅ Unlimited Boards and Workspaces</li>
              <li>✅ Unlimited Automation Actions</li>
            </ul>
            <a href="#" class="btn btn-primary w-100 rounded-pill">Subscribe Now</a>
          </div>
        </div>
      </div>

      <!-- Plan 2 -->
      <div class="col-md-6 col-12">
        <div class="card shadow-sm rounded-4 h-100">
          <div class="card-body p-4">
            <span class="badge bg-danger mb-2 f-12 f-w-500">Inaugural Discount</span>
            <div class="plan f-16 f-w-400"><p class="mb-0"> Plan Id - ZI001 </p></div>
            <h5 class="color-lightblue f-20 f-w-700">Unlimited</h5>
            <h2 class="fw-bold f-24 f-w-700">
              $39.00 <small class="f-14 text-muted f-w-600">/Month (Billed Yearly)</small>
              <span class="text-decoration-line-through text-muted f-14 f-w-600">$50.00</span>
            </h2>
            <p class="text-muted f-16 f-w-400">Unlock the full capabilities of this app</p>
            <h6 class="fw-bold mt-3 f-16 f-w-700">Features</h6>
            <ul class="list-unstyled mb-4">
              <li>✅ Unlimited Users</li>
              <li>✅ Unlimited Boards and Workspaces</li>
              <li>✅ Unlimited Automation Actions</li>
            </ul>
            <a href="#" class="btn btn-primary w-100 rounded-pill">Subscribe Now</a>
          </div>
        </div>
      </div>
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
