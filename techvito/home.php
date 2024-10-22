<?php /* Template Name:Home Page */ ?>

<?php get_header(); ?>

<section id="home-hero-widget">
<div class="fix-layouts">
<div class="hero-container">
  <div class="hero-bg-overlay"></div>
  <!-- <span id="company-brand">Techvito</span> -->
  <h1>Transform Business Digitally</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ipsa eveniet quo sed doloremque quas</p>
  <div class="hero-container-cta">
<a class="hero_primary">Explore <i
class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
<a class="hero_secondary">Contact Us <i
class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
  </div>
<!-- <div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
<h1>Transform Business <br/> Digitally</h1>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
<img src=""/>
</div>
</div> -->

</div>
</div>

</section>

<section id="related-studies">
  <div class="fix-layouts">
    <h1>Proven Results</h1>

    <div class="row" id="blog-row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row" id="blog-posts">
          <?php
          $args = array(
            'post_type' => 'casestudy',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3,
          );


          $query = new WP_Query($args);

          if ($query->have_posts()):
            while ($query->have_posts()):
              $query->the_post();
              $case_study_image = get_field('case_study_card_image'); ?>

              <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php

              ?>">
                <div class="card-details">
                  <a href="<?php the_permalink(); ?>">
                    <?php if ($case_study_image) { ?>
                      <img src="<?php echo esc_url($case_study_image['url']); ?>" alt="<?php the_title(); ?>">
                    <?php } ?>
                    <div class="related-topic-content">
                      <h4><?php the_title(); ?></h4>
                      <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                      <span>Read More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
                    </div>
                    <!-- <div class="card-contents">
                                              
                                            <span><img src="<?php bloginfo('template_directory') ?>/images/time-clock-icon.png"
                                                    class="blog-card-icons" /><?php echo do_shortcode('[rt_reading_time postfix="mins"]'); ?></span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a> -->
                  </a>
                </div>
              </div>
            <?php endwhile;
          else:
            echo '<p>No posts found.</p>';
          endif;

          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
    <div class="view-more-cta">
      <a>View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
    </div>
  </div>
</section>
<section id="clients">
  <div class="fix-layouts">
    <div class="row" id="stats-row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
        <div class="stats-contents">
          <h4>We build lasting partnerships with our clients</h4>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
     
        <div class="stats-items">
    <div class="stats1" > 
      <h5>5+</h5>
    <span>Years of delivering quality solutions</span>
  </div>
    <div class="stats2" >

    <h5>4.9/5</h5>
    <span>Average customer satisfaction rating</span>
    </div>
    <div class="stats3" >
    <h5>10+</h5>
    <span>Satisfied Clients</span>
    </div>
    <div class="stats4" >
    <h5>98%</h5>
    <span>Projects delivered on time within budget</span>
    </div>
    <div class="stats5" >
    <h5>100%</h5>
    <span>Clients from repeat business or referrals</span>
    </div>
</div>
      </div>
    </div>
    <div class="clients-layout">
      <div class="client-lists">

      
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/dexter-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/uob-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/mumpredict-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/neelitech-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/srianvi-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/Kasmo-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/Leanpitch-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/parajanya-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/ai4c-logo.svg" />
        </div>
        <div class="client-item">
          <img loading="lazy" src="<?php bloginfo('template_directory') ?>/new-images/indeclectik-logo.svg" />
        </div>
      </div>
    </div>
  </div>
</section>

<section id="areas-of-expertise-layout">
  <div class="fix-layouts">
    <h2>Areas of Expertise</h2>
    <div class="services-container">
      <div class="gradient-cards">
        <div class="expertise-card">
          <div class="container-card ">
            <div class="container-card-logo-product-development"></div>
          
            <div class="expertise-card-content">
              <p class="expertise-card-title">Product Development</p>
              <p class="expertise-card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable
                rates. No
                interest charged, ever.</p>
            </div>
          </div>
        </div>

        <div class="expertise-card">
          <div class="container-card ">
          <div class="container-card-logo-cloud"></div>
            <div class="expertise-card-content">
              <p class="expertise-card-title">Cloud & DevOps</p>
              <p class="expertise-card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable
                rates. No
                interest charged, ever.</p>
            </div>
          </div>
        </div>
        <div class="expertise-card">
          <div class="container-card ">
          <div class="container-card-logo-quality"></div>
            <div class="expertise-card-content">
              <p class="expertise-card-title">Quality</p>
              <p class="expertise-card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable
                rates. No
                interest charged, ever.</p>
            </div>
          </div>
        </div>

        <div class="expertise-card">
          <div class="container-card ">
          <div class="container-card-logo-security"></div>
            <div class="expertise-card-content">
              <p class="expertise-card-title">Security</p>
              <p class="expertise-card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable
                rates. No
                interest charged, ever.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="expertise-widget">
  <div class="fix-layouts">
    <h2>Our Products</h2>
    <div class="product-layout-detail">
    <div class="product-layout-box">
    <div class="product-layout-item">
        <a href="https://www.trustboxx.com/" target="_blank">
      <img src="<?php bloginfo('template_directory') ?>/new-images/Product-trustboxx.webp"/>
      <div class="product-layout-content">
      <h3>Securely Share and Analyze your sensitive Data With Trustboxx</h3>
      <p>Compliant data management with scalable infrastructure and industry-leading analysis tools. Seamlessly collaborate with confidence while automated compliance ensures consistent regulatory adherence.</p>
      </div>
      </a>
      </div>
      <div class="product-layout-item">
        <a href="https://www.planmadi.com/" target="_blank">
      <img src="<?php bloginfo('template_directory') ?>/new-images/Product-planmadi.webp"/>
      <div class="product-layout-content">
      <h3>Effortlessly Bringing Your Dream Events to Life.</h3>
      <p>A platform designed to make event planning effortless and enjoyable. The platform connects users with a variety of vendors, including bakers, photographers, makeup artists, and more, to bring their events to life.</p>
      </div>
      </a>
      </div>
      <div class="product-layout-item">
        <a href="https://www.evolvv.in/" target="_blank">
      <img src="<?php bloginfo('template_directory') ?>/new-images/Product-Evolvv.webp"/>
      <div class="product-layout-content">
      <h3>Acquire Industry relevant skills and evolve.</h3>
      <p>Learning from top tech experts offers vital insights and keeps individuals updated in the fast-changing tech landscape, fostering growth and success.</p>
      </div>
      </a>
      </div>
      <div class="product-layout-item">
        <a href="https://solvv.in/" target="_blank">
      <img src="<?php bloginfo('template_directory') ?>/new-images/Product-solvv.webp"/>
      <div class="product-layout-content">
      <h3>Crack the Quizzes, Learn Smarter with Solvv</h3>
      <p>Learning should be fun, interactive, and effective. With our platform, you can crack challenging quizzes while sharpening your knowledge along the way. Designed to help you learn smarter.</p>
      </div>
      </a>
      </div>
      <div class="product-layout-item">
        <a href="https://www.thelearningbuddy.in/" target="_blank">
      <img src="<?php bloginfo('template_directory') ?>/new-images/Product-learningbuddy.webp"/>
      <div class="product-layout-content">
      <h3>Daily Learning, Delivered to Your Fingertips</h3>
      <p>A platform designed to make learning accessible and engaging for everyone. It offers daily tech tips, interview guidance, and industry insights through WhatsApp, providing a free and convenient way for users to enhance their skills.</p>
      </div>
      </a>
      </div>
      
    </div>
    </div>


  


    <!-- <div class="expertise-layout-detail">
      <div class="expertise-layout-box">
        <div class="expertise-layout-item" data-aos="fade-up">
          <a href="https://www.trustboxx.com/" target="_blank">
            <h4>Trustboxx</h4>
            <p>Compliant data management with scalable infrastructure and industry-leading analysis tools. Seamlessly
              collaborate with confidence while automated compliance ensures consistent regulatory adherence. </p>
            <div class="expertise-info-container">
              <div class="button-container">
                <span class="button-text">Learn More</span>
                <div class="arrow-circle">
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
              <div class="image-container">
                <img src="https://www.trustboxx.com/images/TrustBoxx-final-logo.png" alt="Hidden Image"
                  class="hidden-image">
              </div>
            </div>
          </a>
        </div>
        <div class="expertise-layout-item" data-aos="fade-up">
          <a href="https://www.planmadi.com/" target="_blank">
            <h4>Effortlessly Bringing Your Dream Events to Life.</h4>
            <p>A platform designed to make event planning effortless and enjoyable. The platform connects users with a
              variety of vendors, including bakers, photographers, makeup artists, and more, to bring their events to
              life. Offering end-to-end event management.</p>
            <div class="expertise-info-container">
              <div class="button-container">
                <span class="button-text">Learn More</span>
                <div class="arrow-circle">
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
              <div class="image-container">
                <img src="https://eleks.com/wp-content/uploads/product-design-home.jpg" alt="Hidden Image"
                  class="hidden-image">
              </div>
            </div>
          </a>
        </div>
        <div class="expertise-layout-item" data-aos="fade-up">
          <a href="https://www.evolvv.in/" target="_blank">
            <h4>Acquire Industry relevant skills and evolve.</h4>
            <p>Learning from top tech experts offers vital insights and keeps individuals updated in the fast-changing
              tech landscape, fostering growth and success.</p>
            <div class="expertise-info-container">
              <div class="button-container">
                <span class="button-text">Learn More</span>
                <div class="arrow-circle">
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
              <div class="image-container">
                <img src="https://eleks.com/wp-content/uploads/product-design-home.jpg" alt="Hidden Image"
                  class="hidden-image">
              </div>
            </div>
          </a>
        </div>
        <div class="expertise-layout-item">
          <a href="https://www.solvv.in/" target="_blank">
            <h4>Crack the Quizzes, Learn Smarter with Solvv</h4>
            <p>Learning should be fun, interactive, and effective. With our platform, you can crack challenging quizzes
              while sharpening your knowledge along the way. Designed to help you learn smarter, Solvv turns every quiz
              into an opportunity for growth and mastery.</p>
            <div class="expertise-info-container">
              <div class="button-container">
                <span class="button-text">Learn More</span>
                <div class="arrow-circle">
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
              <div class="image-container">
                <img src="https://eleks.com/wp-content/uploads/product-design-home.jpg" alt="Hidden Image"
                  class="hidden-image">
              </div>
            </div>
          </a>
        </div>
        <div class="expertise-layout-item">
          <a href="https://www.thelearningbuddy.in/" target="_blank">
            <h4>Daily Learning, Delivered to Your Fingertips</h4>
            <p>A platform designed to make learning accessible and engaging for everyone. It offers daily tech tips,
              interview guidance, and industry insights through WhatsApp, providing a free and convenient way for users
              to enhance their skills.</p>
            <div class="expertise-info-container">
              <div class="button-container">
                <span class="button-text">View More</span>
                <div class="arrow-circle">
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
              <div class="image-container">
                <img src="https://eleks.com/wp-content/uploads/product-design-home.jpg" alt="Hidden Image"
                  class="hidden-image">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div> -->
    <!-- <ul class="expertise-slider-btns">
      <li class="prev"><i class="fa-solid fa-arrow-left"></i></i></li>
      <li class="next"><i class="fa-solid fa-arrow-right"></i></li>
    </ul> -->
  </div>
</section>

<section id="home-how-we-do-it-layout">
  <div class="fix-layouts">
    <h2>How We Do It</h2>
    <!-- <div class="flex-container">
    <div class="one clearfix">
      <div class="left">
    <div class="layout-container">
  
      <h4>The First Handshake</h4>
   
      <p>At Techvito, We start by deeply understanding your business needs and challenges. This initial handshake sets the foundation for a strong partnership, ensuring our approach is tailored to your goals from the start.
      </p>
      <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>
   
    
    </div>
    <div class="layout-container">
  
      <h4>Aligning Vision and Setting Goals
      </h4>
   
      <p>Through in-depth discussions, we align your vision with our expertise, defining clear goals. This step ensures we’re on the same page, setting a solid foundation for success.
      .
      </p>
      <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>

      </div>
     
    <div class="layout-container">
  
      <h4>Strategic Roadmap
      </h4>
   
      <p>We create a strategic, actionable roadmap with measurable milestones. Each step is designed to drive value and guide the project smoothly from start to finish.

      </p>
      <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>
   
      </div>
    
 
    <div class="layout-container">
  
      <h4>Iterative and Agile Development
      </h4>
     
      <p>Our agile process ensures continuous improvement and flexibility. By breaking projects into manageable sprints, we deliver incremental value while adapting to feedback.

      </p>
      <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>
   
      </div>
 
   
    <div class="layout-container">

      <h4>Secure and High-Quality Execution
      </h4>
    
      <p>We prioritize security and quality in every deliverable from Day 1. Through rigorous testing and industry-standard practices, we ensure your project is secure and meets the highest standards.

      </p>
      <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>
     
     
    </div>
    <div class="layout-container">
  
      <h4>Open and Transparent Communication
      </h4>
  
      <p>We maintain open, real-time communication throughout the project. Regular updates and feedback loops ensure a smooth process and quick issue resolution.

      </p>
      <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>
      
    </div>
    <div class="layout-container">
  
  <h4>Ongoing Support and Evolution

  </h4>

  <p>After delivery, we provide ongoing support to maintain and optimize your solution. We ensure your project continues to evolve and deliver value over time.


  </p>
  <img src="https://outgrid.uicore.co/web3-marketplace/wp-content/uploads/sites/15/2023/08/Web3-Marketplace-How-Image-1.webp"/>
  
</div>

  </div>
  <div class="right">
    <div class="right-child">
      <span>How it Works</span>
      <h3>Exclusive digital assets in 7 steps</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, obcaecati aut omnis perspiciatis architecto est soluta! Quos nihil ipsam, tempora quod, voluptatem necessitatibus libero ea corporis officiis cupiditate blanditiis aut!</p>
     
    </div>
  </div>
        </div>
        </div> -->
    <article class="tabbed-content tabs-side">
      <nav class="tabs">
        <ul>
          <li><a href="#side_tab1" class="active"><img src="<?php bloginfo('template_directory') ?>/new-images/handshake-icon.svg"/>The First Handshake
          </a></li>
          <li><a href="#side_tab2"><img src="<?php bloginfo('template_directory') ?>/new-images/aligning-vision-icons.svg"/>Aligning Vision and Setting Goals
          </a></li>
          <li><a href="#side_tab3"><img src="<?php bloginfo('template_directory') ?>/new-images/strategic-roadmap-icons.svg"/>Strategic Roadmap
          </a></li>
          <li><a href="#side_tab4"><img src="<?php bloginfo('template_directory') ?>/new-images/agile-development-icons.svg"/>Iterative and Agile Development
          </a></li>
          <li><a href="#side_tab5"><img src="<?php bloginfo('template_directory') ?>/new-images/quality-execution-icons.svg"/>Secure and High-Quality Execution

          </a></li>
          <li><a href="#side_tab6"><img src="<?php bloginfo('template_directory') ?>/new-images/transperant-communication-icons.svg"/>Open and Transparent Communication

          </a></li>
          <li><a href="#side_tab7"><img src="<?php bloginfo('template_directory') ?>/new-images/ongoing-support-icon.svg"/>Ongoing Support and Evolution

          </a></li>
        </ul>
      </nav>
      <section id="side_tab1" class="item active" data-title="The First Handshake">
        <div class="item-content">
        
      
          
            
   
              <h3>The First Handshake</h3>
              <div class="flex-line"></div>
          
            <p>At Techvito, We start by deeply understanding your business needs and challenges. This initial handshake sets the foundation for a strong partnership, ensuring our approach is tailored to your goals from the start.
            </p>
                <div class="tab-image">
             <img src="<?php bloginfo('template_directory') ?>/new-images/the-first-handshake.webp"/>
              </div>
        </div>
      </section>

      <section id="side_tab2" class="item" data-title="Aligning Vision and Setting Goals" >
        <div class="item-content">
        <div>
            <h3>Aligning Vision and Setting Goals</h3>
            <div class="flex-line"></div>
            <p>Through in-depth discussions, we align your vision with our expertise, defining clear goals. This step ensures we’re on the same page, setting a solid foundation for success.
            </p>
            <div class="tab-image">
            <img src="<?php bloginfo('template_directory') ?>/new-images/aligning-vision-and-setting-goals.webp"/>
              </div>
          </div>
        </div>
      </section>

      <section id="side_tab3" class="item" data-title="Strategic Roadmap">
        <div class="item-content">
        <div>
            <h3>Strategic Roadmap</h3>
            <div class="flex-line"></div>
            <p>We create a strategic, actionable roadmap with measurable milestones. Each step is designed to drive value and guide the project smoothly from start to finish.
          </p>
          <div class="tab-image">
          <img src="<?php bloginfo('template_directory') ?>/new-images/strategic-roadmap.webp"/>
              </div>
          </div>
        </div>
      </section>

      <section id="side_tab4" class="item" data-title="Iterative and Agile Development">
        <div class="item-content">
        <div>
            <h3>Iterative and Agile Development</h3>
            <div class="flex-line"></div>
            <p>Our agile process ensures continuous improvement and flexibility. By breaking projects into manageable sprints, we deliver incremental value while adapting to feedback.</p>
            <div class="tab-image">
            <img src="<?php bloginfo('template_directory') ?>/new-images/iterative-ans-agile-devlopment.webp"/>
              </div>
          </div>
        </div>
      </section>


      <section id="side_tab5" class="item" data-title="Secure and High-Quality Execution">
        <div class="item-content">
        <div>
            <h3>Secure and High-Quality Execution</h3>
            <div class="flex-line"></div>
            <p>We prioritize security and quality in every deliverable from Day 1. Through rigorous testing and industry-standard practices, we ensure your project is secure and meets the highest standards.</p>
            <div class="tab-image">
            <img src="<?php bloginfo('template_directory') ?>/new-images/secure-and-high-quality-execution.webp"/>
              </div>
          </div>
        </div>
      </section>


      <section id="side_tab6" class="item" data-title="Open and Transparent Communication">
        <div class="item-content">
        <div>
            <h3>Open and Transparent Communication</h3>
            <div class="flex-line"></div>
            <p>We maintain open, real-time communication throughout the project. Regular updates and feedback loops ensure a smooth process and quick issue resolution.</p>
            <div class="tab-image">
            <img src="<?php bloginfo('template_directory') ?>/new-images/open-and-transperant-communication.webp"/>
              </div>
          </div>
        </div>
      </section>

      <section id="side_tab7" class="item" data-title="Ongoing Support and Evolution">
        <div class="item-content">
        <div>
            <h3>Ongoing Support and Evolution
            </h3>
            <div class="flex-line"></div>
            <p>After delivery, we provide ongoing support to maintain and optimize your solution. We ensure your project continues to evolve and deliver value over time.
          </p>
          <div class="tab-image">
          <img src="<?php bloginfo('template_directory') ?>/new-images/ongoing-support-and-evolution.webp"/>
              </div>
          </div>
        </div>
      </section>


    </article>
  </div>
</section>



<!-- <section id="related-studies">
  <div class="fix-layouts">
    <h3>Case Studies</h3>
   
    <div class="casestudy-cards">
      <?php
      $args = array(
        'post_type' => 'casestudy',  // Custom post type 'casestudy'
        'posts_per_page' => 4,       // Fetch 4 posts
      );

      $casestudy_query = new WP_Query($args);



      if ($casestudy_query->have_posts()):
        while ($casestudy_query->have_posts()):
          $casestudy_query->the_post();
          $case_study_image = get_field('case_study_card_image'); ?>

          <div class="casestudy-card">
            <a href="<?php the_permalink(); ?>">
              <div class="card-image">
                <?php if ($case_study_image) { ?>
                  <img src="<?php echo esc_url($case_study_image['url']); ?>" alt="<?php the_title(); ?>">
                <?php } ?>
              <div class="casestudy-card-content">
                <h4><?php the_title(); ?></h4>
                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                <span>Read More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
              </div>
            </a>
          </div>

        <?php endwhile;
      else: ?>
        <p>No case studies found.</p>
        <?php
      endif;

      wp_reset_postdata();
      ?>
    </div>
    <div class="view-more-cta">
      <a>View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
    </div>
  </div>
</section> -->

<!-- <style>
 

h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.read-more {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.read-more:hover {
    text-decoration: underline;
}



</style> -->
<section id="related-studies" class="blog-page-layout-main">
  <div class="fix-layouts">
    <h1>Expert Articles</h1>

    <div class="row" id="blog-row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row" id="blog-posts">
          <?php
          $args = array(
            'post_type' => 'insights',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3,
          );


          $query = new WP_Query($args);

          if ($query->have_posts()):
            while ($query->have_posts()):
              $query->the_post();
              $blogcardimage = get_field('case_study_card_image'); ?>

              <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php

              ?>">
                <div class="card-details">
                  <a href="<?php the_permalink(); ?>">
                    <?php if ($case_study_image) { ?>
                      <img src="<?php echo esc_url($case_study_image['url']); ?>" alt="<?php the_title(); ?>">
                    <?php } ?>
                    <div class="related-topic-content">
                      <h4><?php the_title(); ?></h4>
                      <?php

                      $blog_description = get_field('content_area');
                      ?>
                      <p><?php echo wp_trim_words($blog_description, 15); ?></p>
                      <span>Read More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
                    </div>
                    <!-- <div class="card-contents">
                                              
                                            <span><img src="<?php bloginfo('template_directory') ?>/images/time-clock-icon.png"
                                                    class="blog-card-icons" /><?php echo do_shortcode('[rt_reading_time postfix="mins"]'); ?></span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a> -->
                  </a>
                </div>
              </div>
            <?php endwhile;
          else:
            echo '<p>No posts found.</p>';
          endif;

          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
    <div class="view-more-cta">
      <a>View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
    </div>
  </div>
</section>


<!-- <section id="contact-us">
  <div class="fix-layouts">
    <h3>Contact Us</h3>
    <div class="row">
      <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 col-12">
        <form id="contactus-enquiry" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
              <div class="form-box">
                <input type="text" name="cnt_name" id="cnt_name" class="form-input" placeholder="Full Name" />
                <span class="info" id="cnt_name_info"></span>
              </div>
              <div class="form-box">
                <input type="text" name="cnt_phonenumber" id="cnt_phonenumber" class="form-input"
                  placeholder="Phone Number" />
                <span class="info" id="cnt_phonenumber_info"></span>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
              <div class="form-box">
                <input type="text" name="cnt_email" id="cnt_email" class="form-input" placeholder="Business Email" />
                <span class="info" id="cnt_email_info"></span>
              </div>
              <div class="form-box">
                <input type="text" name="cnt_company_name" id="cnt_company_name" class="form-input"
                  placeholder="Company Name" />
                <span class="info" id="cnt_companyname_info"></span>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
            <div class="form-box">
              <textarea class="cntinpttxt" name="message" id="message" placeholder="Message"></textarea>
            </div>
            <div class="submit-cta-action">
              <input type="submit" name="cnt_submit" id="cnt_submit" value="submit" />
              <p>Loading Please wait</p>
            </div>
          </div>


        </form>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-12">
        <div class="quick-enquiry">
          <div class="quick-enquiry-cta">
            <img src="https://techvito.in/wp-content/themes/techvito/images/phone-icon.webp" />
            <div class="enquiry-block">
              <h5>Call Us</h5>
              <a href="tel:+91 6363-32-7997">+91 6363-32-7997</a>
            </div>

          </div>
          <div class="quick-enquiry-cta">
            <img src="https://techvito.in/wp-content/themes/techvito/images/phone-icon.webp" />
            <div class="enquiry-block">
              <h5>Mail Us</h5>
              <a href="mailto:techvito@outlook.com">techvito@outlook.com</a>
            </div>
          </div>
          <div class="quick-enquiry-cta">
            <img src="https://techvito.in/wp-content/themes/techvito/images/phone-icon.webp" />
            <div class="enquiry-block">
              <h5>Address</h5>
              <a>55/1, 3rd Floor, 3rd Cross, 4th Main, Gavipuram Extension, Hanumantha Nagar Bangalore 560019</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section id="contact-us">
  <div class="fix-layouts">
    <div class="quick-contact">

      <form id="contactus-enquiry" method="post">
        <h3>How can we Help ?</h3>
        <p>Do you have a question or you are interested in working with my team?
          <br />
          Just fill out the form below.
        </p>

        <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
            <div class="form-enquiries">


              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                  <div class="form-box">
                    <input type="text" name="cnt_name" id="cnt_name" class="form-input" placeholder="Full Name" />
                    <span class="info" id="cnt_name_info"></span>
                  </div>
                  <div class="form-box">
                    <input type="text" name="cnt_phone" id="cnt_phone" class="form-input" placeholder="Mobile Number" />
                    <span class="info" id="cnt_phone_info"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                  <div class="form-box">
                    <input type="text" name="cnt_email" id="cnt_email" class="form-input"
                      placeholder="Business Email" />
                    <span class="info" id="cnt_email_info"></span>
                  </div>
                  <div class="form-box">

                    <select id="information" class="form-input" name="information">
                      <option value="" disabled selected>I'd like to chat about</option>
                      <option value="General Inquiry">General Inquiry</option>
                      <option value="Consulting Inquiry">Consulting Inquiry</option>
                    </select>
                    <span class="info" id="information-info"></span>
                  </div>

                </div>
                <div class="form-box">
                  <textarea class="cntinpttxt" name="message" id="message" placeholder="Message"></textarea>
                </div>
                <div class="form-box" style="text-align:center; margin-top:10px;">

                  <input type="checkbox" id="disclaimer" name="disclaimer[]">

                  <label for="disclaimer" id="label-txt">I have read and understood the Terms & Conditions</label>
                  <br />
                  <span class="info" id="disclaimer-info"></span>

                </div>
                <div class="submit-cta-action">
                  <button type="submit" name="cnt_submit" id="cnt_submit">Submit <i
                      class="fa-solid fa-arrow-right blg-read-more-icon"></i> </button>

                  <p>Loading Please wait</p>
                </div>
              </div>
            </div>
          </div>
        </div>





      </form>
    </div>

  </div>
</section>

<script>
  // $(".study-features").slick({
  //   slidesToShow: 3,
  //   infinite: true,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 3000,
  //   dots: false,
  //   arrows: false,
  //   pauseOnHover: true,
  //   responsive: [

  //     {

  //       breakpoint: 1024,

  //       settings: {

  //         slidesToShow: 3,

  //         slidesToScroll: 1,

  //         infinite: true,

  //         dots: false,

  //       }

  //     },
  //     {

  //       breakpoint: 768,

  //       settings: {

  //         slidesToShow: 2,

  //         slidesToScroll: 1,

  //         infinite: true,

  //         dots: false,
  //         arrows: false,

  //       }

  //     },
  //     {

  //       breakpoint: 460,

  //       settings: {

  //         slidesToShow: 1,

  //         slidesToScroll: 1,

  //         infinite: true,

  //         dots: false,
  //         arrows: false

  //       }

  //     },
  //   ]

  // });
  $('.client-lists').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 6000,
    pauseOnHover: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 1050,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 0,
          speed: 6000,
          pauseOnHover: true,
          cssEase: 'linear',
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          arrows: false,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 0,
          speed: 6000,
          pauseOnHover: true,
          cssEase: 'linear',
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          arrows: false,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 0,
          speed: 6000,
          pauseOnHover: true,
          cssEase: 'linear',
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 0,
          speed: 6000,
          pauseOnHover: true,
          cssEase: 'linear',
        }
      },
    ]
  });

  // $('.expertise-layout-box').slick({
  //   centerPadding: '30%',
  //   infinite: true,
  //   slidesToShow: 5,

  //   responsive: [
  //     {
  //       breakpoint: 1050,
  //       settings: {
  //         slidesToShow: 3,
  //         slidesToScroll: 1,
  //         prevArrow: $('.prev'),
  //         nextArrow: $('.next'),
  //       }
  //     },
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //         prevArrow: $('.prev'),
  //         nextArrow: $('.next'),
  //       }
  //     },
  //     {
  //       breakpoint: 600,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //         prevArrow: $('.prev'),
  //         nextArrow: $('.next'),

  //       }
  //     }
  //     // You can unslick at a given breakpoint now by adding:
  //     // settings: "unslick"
  //     // instead of a settings object
  //   ]
  // });
</script>

<!-- <script>
  $(".related-topics-box").slick({
    slidesToShow: 3,
    infinite: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,

        }
      },
     
    ]
  });
</script> -->


<script>
tabControl();


var resizeTimer;
$(window).on('resize', function(e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function() {
    tabControl();
  }, 250);
});


function tabControl() {
    var tabs = $('.tabbed-content').find('.tabs');
    
    tabs.find('a').on('click', function(event) {
        event.preventDefault();
        var target = $(this).attr('href'),
            buttons = tabs.find('a'),
            items = tabs.parents('.tabbed-content').find('.item');
        
        buttons.removeClass('active');
        items.removeClass('active');
        
        $(this).addClass('active');
        $(target).addClass('active');
    });
    
    $('.item').on('click', function() {
        var container = $(this).parents('.tabbed-content'),
            currId = $(this).attr('id'),
            items = container.find('.item');
        
        items.removeClass('active');
        $(this).addClass('active');
        container.find('.tabs a').removeClass('active').filter(`[href="#${currId}"]`).addClass('active');
    });
}
</script>

<style>

</style>




<script>
  document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
  });
</script>


<?php get_footer(); ?>