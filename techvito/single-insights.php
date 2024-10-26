<?php get_header(); ?>
<?php if (have_posts()):

    while (have_posts()):
        the_post();
?>
        <section id="detail-layouts" class="case-study-main">

            <div class="fix-layouts">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
                   

                    </div>
                </div>

                <div class="row">
                 <!-- <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 col-12 share-socials">
                    <div class="sharing-options">
                    <h4>Share</h4>
                    <br/>
                 <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                 </div>
                 </div> -->
                 <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 mainblog-content-area mx-auto">
                 <div class="layout-breadcrumbs">
                 <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li>/</li>
                    <li><a href="<?php echo home_url(); ?>/insight/">Insights</a></li>
                    <li>/</li>
                    <li class="active-link"><?php the_title(); ?></li>
                 </ul>
                </div>
                  
                        <div class="blog-detailed-layout">
                            <div class="blog-detail-page-images">
                        <?php               
    $image_url = get_field('insights_image'); 
    if ($image_url) { ?>
        <img src="<?php echo esc_url($image_url['url']); ?>" alt="<?php the_title(); ?>" class="Blog-detail-image Desktop-hero-banner" >
    <?php } 
    
 ?>
    <?php               
    $mobileimage_url = get_field('blog_inside_mobile_image'); 
    if ($mobileimage_url) { ?>
        <img src="<?php echo esc_url($mobileimage_url['url']); ?>" alt="<?php the_title(); ?>" class="Blog-detail-image Mobile-hero-banner" >
    <?php } 
    
 ?>
   <h1><?php the_title(); ?></h1>
 </div>
                          
                        
                            <div class="blog-information-row">
                                <div class="avatar-info-details">
                            <img class="avatar" alt="Blog-author" src="<?php bloginfo('template_directory') ?>/new-images/user-avatar.png"/>
                            <h6>Sandeep Gokhale</h6>
                            </div>
                            <div class="blog-information-row-details">
                            <p><img class="insights-time" alt="Insights Time" src="<?php bloginfo('template_directory') ?>/new-images/insights-time.png"/><?php echo do_shortcode('[rt_reading_time " postfix="minutes" postfix_singular="minute"]'); ?></p>
                            <p><img class="insights-date" alt="Insights Date" src="<?php bloginfo('template_directory') ?>/new-images/insights-date.png"/><?php the_time('F jS, Y'); ?></p>
                            </div>
                            </div>
       
 
                           
                        </div>
                    <!-- <div class="border-line"></div> -->
                 <div class="blog-content-division">
                            <?php $blogcontents= get_field('content_area');
                            echo $blogcontents;
                            ?>
                            </div>
                            <!-- <div class="subscription-insights">
                                <h4>Subscribe to our Expert Articles</h4>
                             
            <a id="openPopup" class="subscribe-button">
                Subscribe to our Insights <i class="fa-solid fa-arrow-right blg-read-more-icon"></i>
            </a>
        </div> -->

                            <!-- <div class="sharing-options">
                    <h4>Spread the Word</h4>
                    
                 <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                 </div> -->

             
 



                 

                 </div>
                 

            </div>

            <div class="blogs-container-boxes">
        <div class="blog-related-topics-box">
            <h5>Related Topics</h5>
            <?php
            // Define the custom post type
            $post_type = 'insights';
            $current_post_id = get_the_ID();

            // Query arguments
            $args = array(
                'post_type' => $post_type,
                'posts_per_page' => 3, // Get all posts
                'post__not_in' => array($current_post_id),
            );

            // The Query
            $insights_query = new WP_Query($args);

            // Check if we have posts
            if ($insights_query->have_posts()) {
                // Start a row for the cards
                echo '<div class="row" id="blog-row">';

                // The Loop
                while ($insights_query->have_posts()) {
                    $insights_query->the_post();
                    $blogcardimage = get_field('insights_card_image');
                    $blog_description = get_field('content_area');
                    ?>

                    <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="card-details">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ($blogcardimage) { ?>
                                    <img class="related-images" src="<?php echo esc_url($blogcardimage['url']); ?>" alt="<?php the_title(); ?>">
                                <?php } ?>
                                <div class="related-topic-content">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php echo wp_trim_words($blog_description, 15); ?></p>
                                    <span>Read More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                }
                
                // End the row
                echo '</div>';
            } else {
                echo '<p>No insights found.</p>';
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
              <div class="view-more-cta">
      <a>View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
    </div>
        </div>

     
    </div>

            <!-- <div class="detail-center-divs">
<div class="Layout-start">
<?php if (has_post_thumbnail()) { ?>
         <img src="<?php echo $image_url[0]; ?>" alt="">
         <?php } ?>
<p><?php the_time('F jS, Y'); ?></p>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

</div>
</div> -->
        </section>
    <?php endwhile; endif; ?>

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

<div id="insights-popupForm" class="popup">
    <div class="subscribepopup">
        <span class="close">&times;</span>
        <h3>Don't Miss Out! <br/> Subscribe for Exclusive Insights!</h3>
        <form id="subscriptionblog"  method="post">
            <div class="form-box">
                <input id="s_name" name="s_name" placeholder="Name*" class="form-input">
                <span class="info" id="s_name_info"></span>
            </div>
            <div class="form-box">
                <input id="s_email" name="s_email" placeholder="Email*" class="form-input">
                <span class="info" id="s_email_info"></span>
            </div>
            <div class="form-box" id="terms-box-cs">
                <input type="checkbox" id="terms_checkbox_cs" name="terms_checkbox_cs">
                <label for="terms_checkbox_cs">I have read the Terms and Conditions in the footer.</label><br>
                <span  id="terms_info_cs" style="color: red; display: none;">Please accept the terms and conditions.</span>
            </div>
            <div class="cs_download_cta">
                <input type="hidden" name="blog_title" id="blog_title" value="<?php the_title(); ?>"/>
           <input type=submit id="s_subscription" name="s_subscription" value="Subscribe Now"/>
         
<p id="loaders-icons">We are capturing your information please wait...</p>
           </div>
        </form>
    </div>
</div>
<div id="confirmation"><img src="<?php bloginfo('template_directory') ?>/new-images/right_icon.png">Thank you for being fan our content.You will start receiving amazing contents soon.</div>  
<script>
      $(".related-topics-box").slick({
   slidesToShow: 3,
   infinite:true,
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
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var popup = document.getElementById("insights-popupForm");
        var btn = document.getElementById("openPopup");
        var span = document.getElementsByClassName("close")[0];

        // Open the popup when the button is clicked
        btn.onclick = function () {
            popup.style.display = "block";
        }

        // Close the popup when the close (x) is clicked
        span.onclick = function () {
            popup.style.display = "none";
        }

        // Close the popup when clicking outside of the popup content
        window.onclick = function (event) {
            if (event.target === popup) {
                popup.style.display = "none";
            }
        }

        // Optional: Handle form submission
 
    });
</script>

<script>
jQuery(document).ready(function($) {
    // Initially hide the popup
    $('#insights-popupForm').hide();

    // Variable to track if the popup has been shown
    let popupShown = false;

    // Function to check if element is in the viewport
    function isInViewport(element) {
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    // Check if the popup should appear
    function checkPopup() {
        if (!popupShown && isInViewport('.blogs-container-boxes')) {
            $('#insights-popupForm').fadeIn(); // Show popup with fade-in effect
            popupShown = true; // Set the flag to true to prevent it from showing again
        }
    }

    // Check on scroll
    $(window).on('scroll', function() {
        checkPopup();
    });

    // Check on load in case it's already in view
    checkPopup();

    // Close popup on close button click
    $('.close').click(function() {
        $('#insights-popupForm').fadeOut();
    });
});

</script>
<?php get_footer(); ?>