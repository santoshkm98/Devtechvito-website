<?php /* Template Name:services Page */ ?>
<?php get_header(); ?>
<?php
$image = get_field('desktop_image');
$mobileimage = get_field('mobile_image');

if (!empty($image)): ?>
    <link rel="preload" as="image" href="<?php echo esc_url($image['url']); ?>">
<?php endif; ?>

<?php if (!empty($mobileimage)): ?>
    <link rel="preload" as="image" href="<?php echo esc_url($mobileimage['url']); ?>">
<?php endif; ?>

<section id="banner-visuals-hero">
    <div class="banner-images-layout">
        <?php
        $image = get_field('desktop_image');
        if (!empty($image)): ?>
            <img class="Desktop-hero-banner" src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <h1><?php the_title(); ?></h1>

        <?php
        $mobileimage = get_field('mobile_image');
        if (!empty($mobileimage)): ?>
            <img class="Mobile-hero-banner" src="<?php echo esc_url($mobileimage['url']); ?>"
                alt="<?php echo esc_attr($mobileimage['alt']); ?>" />
        <?php endif; ?>

    </div>
</section>


<section id="techvito-product-contents">
    <h2>What we do</h2>
    <div class="fix-layouts">
        <div class="product-contents-layout">
            <?php $wedocontents = get_field('what_we_do');
            if ($wedocontents) { ?>
                <?php foreach ($wedocontents as $whatwedoitem) {
                    $heading = $whatwedoitem['heading'];
                    $headingcontent = $whatwedoitem['content'];
                    $activeClass = ($index === 0) ? 'pro_active' : '';
                    ?>
                    <div class="pro_detail <?php echo $activeClass; ?> layout-content">

                        <h4><?php echo $heading; ?></h4>

                        <ul>
                            <?php echo $headingcontent; ?>

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
                if ($approachcontents) { ?>
                    <?php foreach ($approachcontents as $approachitem) {
                        $heading = $approachitem['heading'];
                        $headingcontent = $approachitem['content'];
                        $contentimage = $approachitem['title_image'];
                        $approachimage_url = !empty($contentimage) ? esc_url($contentimage['url']) : '';

                        ?>
                        <div class="service-process-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-12">
                                    <div loading="lazy" class="process-image">
                                        <img src="<?php echo $approachimage_url; ?>" class="process-images-item" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col-12">
                                    <div class="process-content-container">
                                        <h3><?php echo $heading; ?></h3>
                                        <p><?php echo $headingcontent; ?></p>
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
                if ($valuedelivered) { ?>
                    <?php foreach ($valuedelivered as $valueitem) {
                        $valueheading = $valueitem['value_title'];
                        $valueheadingcontent = $valueitem['value_content'];
                        $contentimage = $valueitem['value_icon'];
                        $image_url = !empty($contentimage) ? esc_url($contentimage['url']) : '';
                        ?>
                        <div class="choose-us-item">
                            <div class="choose-icon-container">
                                <?php if ($image_url): ?>
                                    <img loading="lazy" src="<?php echo $image_url; ?>" alt="Icon 1" class="icon" />
                                <?php endif; ?>
                            </div>
                            <div class="choose-value-box">
                                <h3><?php echo $valueheading; ?></h3>
                                <p><?php echo $valueheadingcontent; ?></p>
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
                if ($differentapproach) { ?>
                    <?php foreach ($differentapproach as $differentitem) {
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
                                        <img loading="lazy" src="<?php echo $icon_url; ?>" class="offerings-icon" alt="service-offering" />
                                        <h3><?php echo $heading; ?></h3>
                                    </div>


                                    <p><?php echo $headingcontent; ?></p>
                                </div>
                                <div class="service-image-container">
                                    <img loading="lazy" src="<?php echo $image_url; ?>" />
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

                                    <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12"
                                        data-categories="<?php ?>">
                                        <div class="card-details">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($case_study_image) { ?>
                                                    <img loading="lazy" src="<?php echo esc_url($case_study_image['url']); ?>"
                                                        alt="<?php the_title(); ?>">
                                                <?php } ?>
                                                <div class="related-topic-content">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                                    <span>Read More <i
                                                            class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
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

                                        <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12"
                                            data-categories="<?php ?>">
                                            <div class="card-details">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if ($case_study_image) { ?>
                                                        <img loading="lazy" src="<?php echo esc_url($case_study_image['url']); ?>"
                                                            alt="<?php the_title(); ?>">
                                                    <?php } ?>
                                                    <div class="related-topic-content">
                                                        <h4><?php the_title(); ?></h4>
                                                        <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                                        <span>Read More <i
                                                                class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
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
        <a href="<?php echo home_url(); ?>/case-study/">View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
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
        <h3>Let's Connect!</h3>
        <p>Have a question or looking to work with us? Fill out the form below, and we'll get back to you soon.
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
  <option value="" disabled selected>I would like to talk about</option>
  <option value="Product Development">Product Development</option>
  <option value="Cloud & DevOps">Cloud & DevOps</option>
  <option value="Quality Assurance">Quality Assurance</option>
  <option value="Advanced Security">Advanced Security</option>
  <option value="Trustboxx">Trustboxx</option>
  <option value="Plan Madi">Plan Madi</option>
</select>
<span class="info" id="information-info"></span>
</div>

                </div>
                <div class="form-box">
                  <textarea class="cntinpttxt" name="message" id="message" placeholder="Message"></textarea>
                </div>
                <div class="form-box" id="terms-box">
                <input type="checkbox" id="terms_checkbox" name="terms_checkbox">
                <label for="terms_checkbox">I have read and accepted the Terms & Conditions in the footer.</label><br>
                <span  id="terms_info" style="color: red; display: none;">Please accept the terms and conditions.</span>
            </div>
                <div class="submit-cta-action">
                  <button type="submit" name="cnt_submit" id="cnt_submit">Submit <i
                      class="fa-solid fa-arrow-right blg-read-more-icon"></i> </button>

                  <p id="loader-icons">We are capturing your information please wait...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

  </div>
</section>
<div id="snackbar"><img src="<?php bloginfo('template_directory') ?>/new-images/right_icon.png">Your Response was submitted.
    our team will contact you shortly.</div>  
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