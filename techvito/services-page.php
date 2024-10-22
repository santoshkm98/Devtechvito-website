<?php /* Template Name:services Page */ ?>
<?php get_header(); ?>

<section id="banner-visuals-hero">
    <img src="https://eleks.com/wp-content/uploads/heade-application-development-min-2048x725.jpg"
        class="Desktop-hero-banner" alt="Services-detail-pages" />
    <img src="https://eleks.com/wp-content/uploads/heade-application-development-min-768x272.jpg"
        class="Mobile-hero-banner" alt="service detail pages" />
</section>


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
            
                <h4><?php echo $heading;?></h4>
              
                <ul>
                       <?php echo $headingcontent;?>
                        
                    </ul>
                <span class="toggle-icon"><i class="fa-solid fa-circle-plus"></i></span>
            </div>
            <?php } ?> 
            <?php } ?> 

          
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
              $contentimage = $approachitem['title_image'];
              $approachimage_url = !empty($contentimage) ? esc_url($contentimage['url']) : ''; 
  
            ?>
                <div class="service-process-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                            <div class="process-image">
                                <img src="<?php echo $approachimage_url; ?>"
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


            </div>
            <ul class="process-slider-btns">
                <li class="prev"><i class="fa-solid fa-arrow-left"></i></li>
                <li class="next"><i class="fa-solid fa-arrow-right"></i></li>
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

            </div>
        </div>
    </div>
</section>

<section id="service-offerings">
    <div class="fix-layouts">
        <h2>What Makes Us Different</h2>
        <div class="offerings-detail">
            <ul class="expertise-slider-btns" id="what-makes-us-different-icon-arrow">
             <li class="previous-icon"><i class="fa-solid fa-arrow-left"></i></li>
                <li class="next-icon"><i class="fa-solid fa-arrow-right"></i></li>
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
                                    <h3><?php echo $heading;?></h3>
                            </div>

                           
                            <p><?php echo $headingcontent;?></p>
                        </div>
                        <div class="service-image-container">
                            <img src="<?php echo $image_url; ?>" />
                        </div>
                    </a>
                </div>

                <?php } ?> 
                <?php } ?> 

               
              
            </div>
        </div>
    </div>
</section>



<section id="related-studies">
    <div class="fix-layouts">
        <h3>Related Case Studies</h3>
        <div class="related-topics-container">
            <div class="related-topics-box">
                <div class="row" id="blog-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row" id="blog-posts">
                            <?php
                            // Get the current page slug (e.g., product-strategy)
                            $current_slug = get_post_field('post_name', get_post());

                            // First, fetch related case studies
                            $related_args = array(
                                'post_type' => 'casestudy',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'casestudy_category', // Replace with your taxonomy name if different
                                        'field' => 'slug',
                                        'terms' => $current_slug,
                                    ),
                                ),
                            );

                            $related_query = new WP_Query($related_args);
                            $related_posts = [];

                            if ($related_query->have_posts()) {
                                while ($related_query->have_posts()) {
                                    $related_query->the_post();
                                    $related_posts[] = get_the_ID(); // Store the ID of related posts for later use
                                    $case_study_image = get_field('case_study_card_image'); ?>

                                    <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php ?>">
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
                                            </a>
                                        </div>
                                    </div>

                                <?php }
                            }

                            // Check how many related posts were found
                            $related_count = count($related_posts);

                            // If fewer than 3 related case studies, fetch random case studies
                            if ($related_count < 3) {
                                $remaining_posts = 3 - $related_count; // Calculate how many more we need

                                // Fetch additional random case studies excluding the related ones
                                $random_args = array(
                                    'post_type' => 'casestudy',
                                    'orderby' => 'rand', // Order by random
                                    'posts_per_page' => $remaining_posts,
                                    'post__not_in' => $related_posts, // Exclude already displayed posts
                                );

                                $random_query = new WP_Query($random_args);

                                if ($random_query->have_posts()) {
                                    while ($random_query->have_posts()) {
                                        $random_query->the_post();
                                        $case_study_image = get_field('case_study_card_image'); ?>

                                        <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php ?>">
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
                                                </a>
                                            </div>
                                        </div>

                                    <?php }
                                }
                            }

                            // Reset post data for both queries
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view-more-cta">
    <a>View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
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
        <h3>How can we Help ?</h3>
        <p>Do you have a question or you are interested in working with my team?
          <br />
          Just fill out the form below.
        </p>

        <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
            <div class="form-enquiries">
              <div class="form-box">
               <select  name="subject" id="subject" class="form-input" >
                <option value="" disabled selected>I'd like to chat about</option>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Consulting Inquiry">Consulting Inquiry</option>

               </select>
               <span class="info" id="subject-info"></span>
              </div>
             
              <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
              <div class="form-box">
                <input type="text" name="cnt_name" id="cnt_name" class="form-input" placeholder="Full Name" />
                <span class="info" id="cnt_name_info"></span>
              </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
              <div class="form-box">
                <input type="text" name="cnt_email" id="cnt_email" class="form-input" placeholder="Business Email" />
                <span class="info" id="cnt_email_info"></span>
              </div>
              </div>
              <div class="form-box">
                <textarea class="cntinpttxt" name="message" id="message" placeholder="Message"></textarea>
              </div>
              <div class="submit-cta-action">
              <input type="submit" name="cnt_submit" id="cnt_submit" value="Submit" />
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
    $('.offerings-layout').slick({
        centerPadding: '40%',
        infinite: true,
        slidesToShow: 4,
        prevArrow: $('.previous-icon'),
        nextArrow: $('.next-icon'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow: $('.previous-icon'),
                    nextArrow: $('.next-icon'),
                }
            },
            {
                breakpoint: 1050,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: $('.previous-icon'),
                    nextArrow: $('.next-icon'),
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: $('.previous-icon'),
                    nextArrow: $('.next-icon'),
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: $('.previous-icon'),
                    nextArrow: $('.next-icon'),

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
// Function to set the active item based on index
function setActiveItem(index) {
    items.forEach(item => item.classList.remove('pro_active'));
    items[index].classList.add('pro_active');
}

//Function to handle auto rotation
function autoRotate() {
    currentIndex = (currentIndex + 1) % items.length;
    setActiveItem(currentIndex);
}

// Intersection Observer to activate first item when in view
const section = document.querySelector('.product-contents-layout'); // Change this selector if necessary

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Activate the first item only when the section is in view
            setActiveItem(0);
            clearInterval(autoRotateInterval); // Stop auto-rotation when in view
            autoRotateInterval = setInterval(autoRotate, intervalTime); // Restart it
            observer.unobserve(section); // Stop observing after activating
        }
    });
}, { threshold: 0.1 }); // Trigger when 10% of the section is in view

// Start observing the section
observer.observe(section);

// Add click event listeners to layout-content
document.querySelectorAll('.layout-content').forEach((icon, index) => {
    icon.addEventListener('click', () => {
        clearInterval(autoRotateInterval); // Stop auto rotation on click
        setActiveItem(index);
        currentIndex = index;
        autoRotateInterval = setInterval(autoRotate, intervalTime); // Restart it
    });
});

//Set the currentIndex for auto rotation
let currentIndex = 0;
const items = document.querySelectorAll('.pro_detail');
const intervalTime = 1000000;
let autoRotateInterval; 
</script>


<?php get_footer(); ?>