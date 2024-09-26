<?php get_header(); ?>

<section id="banner-visuals-hero">
    <img src="https://eleks.com/wp-content/uploads/heade-application-development-min-2048x725.jpg"
        class="Desktop-hero-banner" alt="Services-detail-pages" />
    <img src="https://eleks.com/wp-content/uploads/heade-application-development-min-768x272.jpg"
        class="Mobile-hero-banner" alt="service detail pages" />
</section>

<!-- <?php
// Check if there are any posts
if (have_posts()) : 
    while (have_posts()) : the_post();
        // Get the terms associated with the custom post type
        $categories = get_the_terms(get_the_ID(), 'service_cat'); // Change 'category' to your custom taxonomy if needed
        
        // Ensure we only get selected categories (i.e., not empty or errors)
        if ($categories && !is_wp_error($categories)) {
            echo '<ul class="selected-categories">';
            foreach ($categories as $category) {
                echo '<li>';
                echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>'; // Link to the category page
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo 'No categories assigned.';
        }
    endwhile; 
endif; 
?> -->
<section id="techvito-product-contents">
<h2>What we do</h2>
    <div class="fix-layouts">
        <div class="product-contents-layout">
        <?php $wedocontents = get_field('what_we_do');
     if( $wedocontents ) { ?>
        <?php foreach( $wedocontents as $whatwedoitem) { 
              $heading = $whatwedoitem['heading'];
              $headingcontent = $whatwedoitem['content'];
              $activeClass = ($index === 0) ? 'pro_active' : '';
            ?>
            <div class="pro_detail <?php echo $activeClass; ?> layout-content" >
                <img src="https://eleks.com/wp-content/uploads/card-data-ai-img-2048x1212.jpg" alt="Image 1">
                <h4><?php echo $heading;?></h4>
              
                <ul>
                       <?php echo $headingcontent;?>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div>
            <?php } ?> 
            <?php } ?> 

            <!-- <div class="pro_detail">
                <img src="https://eleks.com/wp-content/uploads/card-data-ai-img-2048x1212.jpg" alt="Image 1">
                <h4>UI/UX Design</h4>
                <ul>
                        <li>User Research & Personas</li>
                        <li>Wireframing & Prototyping</li>
                        <li>UI Design</li>
                        <li>User Journey Mapping</li>
                        <li>Usability Testing</li>
                        <li>Design Systems</li>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div>
            <div class="pro_detail">
                <img src="https://eleks.com/wp-content/uploads/card-data-ai-img-2048x1212.jpg" alt="Image 1">
                <h4>Development</h4>
               
                    <ul>
                        <li>Backend & Frontend Development</li>
                        <li>API Development & Integration</li>
                        <li>Microservices Architecture</li>
                        <li>Database Management</li>
                        <li>Performance Optimization</li>
                        <li>Version Control & Code Reviews</li>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div>
            <div class="pro_detail">
                <img src="https://eleks.com/wp-content/uploads/card-data-ai-img-2048x1212.jpg" alt="Image 1">
                <h4>IaC</h4>
         
                <ul>
                        <li>Automated Provisioning</li>
                        <li>Cloud Infrastructure Setup</li>
                        <li>Configuration Management</li>
                        <li>Scalability & High Availability</li>
                        <li>Security & Compliance</li>
                        <li>Cost Optimization</li>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div>
            <div class="pro_detail">
                <img src="https://eleks.com/wp-content/uploads/card-finance-img-2048x1212.jpg" alt="Image 1">
                <h4>DevOps & Continuous Integration</h4>
               
                <ul>
                        <li>CI/CD Pipelines</li>
                        <li>Containerization</li>
                        <li>Monitoring & Logging </li>
                        <li>Release Management</li>
                        <li>Incident Management</li>
                        <li>Automation of Infrastructure</li>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div>
            <div class="pro_detail">
                <img src="https://eleks.com/wp-content/uploads/card-eleks-img-2048x1212.jpg" alt="Image 1">
                <h4>Testing (Automation & Manual) Deployment</h4>
              
                <ul>
                        <li>Manual Testing</li>
                        <li>Automated Unit/Integration Testing</li>
                        <li>End-to-End Testing</li>
                        <li>Performance & Load Testing</li>
                        <li>Security Testing & Audits</li>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div> -->
        </div>
    </div>
</section>

<section id="services-process">
    <div class="fix-layouts">
        <div class="services-layouts">
            <h2>Our Approach</h2>
            <div class="services-process-lists">
            <?php $approachcontents = get_field('our_approach');
     if( $approachcontents ) { ?>
        <?php foreach( $approachcontents as $approachitem) { 
              $heading = $approachitem['heading'];
              $headingcontent = $approachitem['content'];
              $contentimage = $approachitem['title_image']
  
            ?>
                <div class="service-process-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                            <div class="process-image">
                                <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
                                    class="process-images-item" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col-12">
                            <div class="process-content-container">
                                <h3><?php echo $heading;?></h3>
                                <p><?php echo $headingcontent;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <?php } ?> 

                <!-- <div class="service-process-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                            <div class="process-image">
                                <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
                                    class="process-images-item" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col-12">
                            <div class="process-content-container">
                                <h3>Innovative Design & User Experience</h3>
                                <p>Our design team crafts visually appealing and intuitive user interfaces. We focus on delivering exceptional user experiences by combining aesthetics with functionality, ensuring that your application is easy to use and aligns with your brand identity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-process-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                            <div class="process-image">
                                <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
                                    class="process-images-item" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col-12">
                            <div class="process-content-container">
                                <h3>Agile Development Process</h3>
                                <p>We follow agile methodologies to ensure flexibility and collaboration throughout the development process. Our iterative approach allows us to adapt to changes quickly, deliver functional components in phases, and involve you in every step of the journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-process-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                            <div class="process-image">
                                <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
                                    class="process-images-item" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col-12">
                            <div class="process-content-container">
                                <h3>Scalable & Secure Architecture</h3>
                                <p>Our team builds applications on scalable architectures that grow with your business needs. We integrate robust security protocols at every level to protect your data, ensuring compliance with industry standards and providing peace of mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-process-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                            <div class="process-image">
                                <img src="https://cdn.prod.website-files.com/6365117e0f7392f8f79f332d/6378fbc38c7bd87351cefbe0_Submit.png"
                                    class="process-images-item" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col-12">
                            <div class="process-content-container">
                                <h3>Continuous Testing & Improvement</h3>
                                <p>Quality is at the heart of what we do. We conduct rigorous testing at every stage of development to identify and resolve issues early. Post-launch, we provide continuous improvements based on user feedback and evolving technology trends.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <ul class="process-slider-btns">
                <li class="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></li>
                <li class="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></li>
            </ul>
        </div>
    </div>
</section>

<section id="what-set-us-apart">
    <div class="fix-layouts">
        <h2>Value Delivered</h2>
        <div class="choosing-us-layout">
            <div class="choosing-us-grid">
            <?php $valuedelivered = get_field('value_delivered');
     if( $valuedelivered ) { ?>
        <?php foreach( $valuedelivered as $valueitem) { 
              $valueheading = $valueitem['value_title'];
              $valueheadingcontent = $valueitem['value_content'];
              $contentimage = $valueitem['value_icon'];
              $image_url = !empty($contentimage) ? esc_url($contentimage['url']) : ''; 
            ?>
                <div class="choose-us-item">
                    <div class="choose-icon-container">
                    <?php if ($image_url): ?>
                        <img src="<?php echo $image_url; ?>" alt="Icon 1"
                            class="icon" />
                            <?php endif; ?>
                    </div>
                    <div class="choose-value-box">
                    <h3><?php echo $valueheading;?></h3>
                     <p><?php echo $valueheadingcontent;?></p>
                     </div>
                </div>
                <?php } ?> 
                <?php } ?> 
                <!-- <div class="choose-us-item">
                    <div class="choose-icon-container">
                        <img src="<?php bloginfo('template_directory') ?>/new-images/scaleability.svg" alt="Icon 2"
                            class="icon" />
                    </div>
                    <h3>Scalability</h3>
                  <p>Applications that grow with your business seamlessly.</p>
                </div>
                <div class="choose-us-item">
                    <div class="choose-icon-container">
                        <img src="<?php bloginfo('template_directory') ?>/new-images/security.svg" alt="Icon 3"
                            class="icon" />
                    </div>
                    <h3>Security</h3>
                   <p>Enterprise-grade protection for data and user privacy.</p>
                </div>
                <div class="choose-us-item">
                    <div class="choose-icon-container">
                        <img src="<?php bloginfo('template_directory') ?>/new-images/user-centric.svg" alt="Icon 4"
                            class="icon" />
                    </div>
                    <h3>User-Centric Design</h3>
                  <p>Tailored experiences for enhanced user engagement.</p>
                </div>
                <div class="choose-us-item">
                    <div class="choose-icon-container">
                        <img src="<?php bloginfo('template_directory') ?>/new-images/innovation.svg" alt="Icon 5"
                            class="icon" />
                    </div>
                    <h3>Innovation</h3>
                 <p>Cutting-edge solutions driving your digital transformation.</p>
                </div>
                <div class="choose-us-item">
                    <div class="choose-icon-container">
                        <img src="<?php bloginfo('template_directory') ?>/new-images/Reliability.svg" alt="Icon 6"
                            class="icon" />
                    </div>
                    <h3>Reliability</h3>
                    <p>High-performance applications built to last.</p>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section id="service-offerings">
    <div class="fix-layouts">
        <h2>What Makes Us Different</h2>
        <div class="offerings-detail">
            <ul class="expertise-slider-btns">
                <li class="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></li>
                <li class="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></li>
            </ul>
            <div class="offerings-layout">

            <?php $differentapproach = get_field('what_makes_us_different');
     if( $differentapproach ) { ?>
        <?php foreach( $differentapproach as $differentitem) { 
              $heading = $differentitem['title'];
              $headingcontent = $differentitem['content'];
              $contentimage = $differentitem['full_image'];
              $contenticon = $differentitem['icon'];
              $image_url = !empty($contentimage) ? esc_url($contentimage['url']) : ''; 
              $icon_url = !empty($contenticon) ? esc_url($contenticon['url']) : ''; 
            ?>
                <div class="offerings-service-item">
                    <a>
                        <div class="content-services">
                            <div class="icon-container">
                                <img src="<?php echo $icon_url; ?>"
                                    class="offerings-icon" alt="service-offering" />
                            </div>

                            <h3><?php echo $heading;?></h3>
                            <p><?php echo $headingcontent;?></p>
                        </div>
                        <div class="service-image-container">
                            <img src="<?php echo $image_url; ?>" />
                        </div>
                    </a>
                </div>

                <?php } ?> 
                <?php } ?> 

                <div class="offerings-service-item">
                    <a>
                        <div class="content-services">
                            <div class="icon-container">
                                <img src="<?php bloginfo('template_directory') ?>/new-images/agile-methedologies.svg"
                                    class="offerings-icon" alt="service-offering" />
                            </div>

                            <h3>Agile & Adaptive</h3>
                            <p>We embrace change and ensure timely delivery by following agile methodologies, adapting to evolving project needs.</p>
                        </div>
                        <div class="service-image-container">
                            <img src="<?php bloginfo('template_directory') ?>/new-images/agile-methedologies.webp" />
                        </div>
                    </a>
                </div>
                <div class="offerings-service-item">
                    <a>
                        <div class="content-services">
                            <div class="icon-container">
                                <img src="<?php bloginfo('template_directory') ?>/new-images/full-lifecycle.svg"
                                    class="offerings-icon" alt="service-offering" />
                            </div>

                            <h3>Full Lifecycle Support</h3>
                            <p>From concept to maintenance, we offer comprehensive support at every stage of the development process.</p>
                        </div>
                        <div class="service-image-container">
                            <img src="<?php bloginfo('template_directory') ?>/new-images/full-lifecycle.webp" />
                        </div>
                    </a>
                </div>
                <div class="offerings-service-item">
                    <a>
                        <div class="content-services">
                            <div class="icon-container">
                                <img src="<?php bloginfo('template_directory') ?>/new-images/expertise.svg"
                                    class="offerings-icon" alt="service-offering" />
                            </div>

                            <h3>Proven Expertise</h3>
                            <p>Our team brings years of experience in various industries, delivering innovative and sustainable solutions tailored to your business.</p>
                        </div>
                        <div class="service-image-container">
                            <img src="<?php bloginfo('template_directory') ?>/new-images/proven-expertise.webp" />
                        </div>
                    </a>
                </div>
              
            </div>
        </div>
    </div>
</section>



<section id="related-studies">
    <div class="fix-layouts">
        <h3>Related Case Studies</h3>
        <div class="related-topics-container">
            <div class="related-topics-box">
                <?php
                // Get the terms (categories) for the current services post
                $service_terms = get_the_terms(get_the_ID(), 'service_cat');
                $related_posts = [];
                $current_post_id = get_the_ID();

                // Check if there are terms and no errors
                if ($service_terms && !is_wp_error($service_terms)) {
                    // Get term IDs
                    $term_ids = wp_list_pluck($service_terms, 'term_id');

                    // Fetch posts related to the selected service categories, excluding the current post
                    $related_posts = get_posts(array(
                        'post_type' => 'casestudy',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'casestudy_category', // The taxonomy for case studies
                                'field' => 'term_id',
                                'terms' => $term_ids, // Match with the term IDs from services
                            ),
                        ),
                        'post__not_in' => array($current_post_id), // Exclude the current services post
                        'posts_per_page' => 3, // Fetch up to 3 related posts
                    ));
                }

                // If there are fewer than 3 related posts, fetch random case studies
                if (count($related_posts) < 3) {
                    $remaining_posts_needed = 3 - count($related_posts);
                    $random_posts = get_posts(array(
                        'post_type' => 'casestudy',
                        'posts_per_page' => $remaining_posts_needed,
                        'post__not_in' => array_merge(array($current_post_id), wp_list_pluck($related_posts, 'ID')), // Ensure no duplicates
                        'orderby' => 'rand', // Randomize order
                    ));

                    // Merge related and random posts
                    $related_posts = array_merge($related_posts, $random_posts);
                }

                // Limit to a maximum of 3 posts
                $related_posts = array_slice($related_posts, 0, 3);

                // Loop through the posts and display them
                if (!empty($related_posts)) {
                    foreach ($related_posts as $post) {
                        setup_postdata($post); ?>
                        <div class="related-topic-item">
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?php the_title(); ?>" />
                            <?php } ?>
                            <div class="related-topic-content">
                                <a href="<?php the_permalink(); ?>">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                    <span>Read More &#xf061;</span>
                                </a>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo '<p>No related case studies found.</p>';
                }
                wp_reset_postdata(); // Reset the global $post variable ?>
            </div>
        </div>
    </div>
</section>


<!-- <section id="related-studies">
  <div class="fix-layouts">
    <h3>Expert Articles</h3>
    <div class="related-topics-container">
      <div class="related-topics-box">
        <?php
        // Query to get posts from the 'casestudy' post type
        $args = array(
          'post_type' => 'post', // Custom post type 'casestudy'
          'posts_per_page' => 3,      // Number of posts to display
        );

        $casestudy_query = new WP_Query($args);

        // Loop through the posts
        if ($casestudy_query->have_posts()):
          while ($casestudy_query->have_posts()):
            $casestudy_query->the_post(); ?>

            <div class="related-topic-item">
              <?php if (has_post_thumbnail()) { ?>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" />
              <?php } ?>
              <div class="related-topic-content">
                <a href="<?php the_permalink(); ?>">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                  <span>Read More &#xf061;</span>
                </a>
              </div>
            </div>

          <?php endwhile;
        else: ?>
          <p>No Articles found.</p>
        <?php
        endif;

        wp_reset_postdata(); // Reset the global $post variable 
        ?>
      </div>
    </div>
  </div>
</section> -->


<section id="contact-us">
<div class="fix-layouts">
<div class="quick-contact">

<form id="contactus-enquiry" method="post">
<h3>Contact Us</h3>
          <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12">
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
            <div class="form-box">
              <textarea class="cntinpttxt" name="message" id="message" placeholder="Message"></textarea>
            </div>
            <div class="submit-cta-action">
              <input type="submit" name="cnt_submit" id="cnt_submit" value="submit" />
              <p>Loading Please wait</p>
            </div>
            </div>
            
            </div>
            <div class="col-lg-3 col-md-12 col-xs-12 col-sm-12 col-12">
            <img src="<?php bloginfo('template_directory') ?>/images/techvito-white-logo.webp" alt="Logo" />
            </div>
          </div>
          </div>
          


        </form>
</div>
</div>
</section>
<script>
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
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,

        }
      },
      
    ]
  });
</script>

<script>
    $('.offerings-layout').slick({
        centerPadding: '40%',
        infinite: true,
        slidesToShow: 4,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                }
            },
            {
                breakpoint: 1050,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>


<script>
    $('.services-process-lists').slick({
        centerPadding: '40%',
        infinite: true,
        slidesToShow: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                }
            },
            {
                breakpoint: 1050,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

<script>
  document.querySelectorAll('.layout-content').forEach(icon => {
    icon.addEventListener('click', (event) => {
        // Prevent event bubbling to parent
        event.stopPropagation();

        // Get the parent pro_detail of the clicked icon
        const detail = icon.closest('.pro_detail');

        // Remove 'active' class from all items
        document.querySelectorAll('.pro_detail').forEach(item => {
            item.classList.remove('pro_active');
        });

        // Add 'active' class to the clicked item
        detail.classList.add('pro_active');
    });
});

// Set the first item as active by default
let currentIndex = 0;
const items = document.querySelectorAll('.pro_detail');
const intervalTime = 10000;

function setActiveItem(index) {
    items.forEach(item => item.classList.remove('pro_active'));
    items[index].classList.add('pro_active');
}

function autoRotate() {
    currentIndex = (currentIndex + 1) % items.length;
    setActiveItem(currentIndex);
}

// Start auto rotation after the page load
let autoRotateInterval = setInterval(autoRotate, intervalTime);

document.querySelectorAll('.layout-content').forEach((icon, index) => {
    icon.addEventListener('click', () => {
        clearInterval(autoRotateInterval);
        setActiveItem(index);
        currentIndex = index;
        autoRotateInterval = setInterval(autoRotate, intervalTime);
    });
});
</script>
<?php get_footer(); ?>