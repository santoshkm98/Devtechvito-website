<?php get_header(); ?>

<?php if (have_posts()):

    while (have_posts()):
        the_post();
        $image_id = get_post_thumbnail_id();
        $image_url = wp_get_attachment_image_src($image_id, '', true);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
        <section id="detail-layouts">
            <div class="fix-layouts">
                <div class="layout-breadcrumbs">
                 <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li>/</li>
                    <li><a href="<?php echo home_url(); ?>/case-study/">Case Studies</a></li>
                    <li>/</li>
                    <li class="active-link"><?php the_title(); ?></li>
                 </ul>
                </div>
                <div class="case-study-detailed-layout">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 ">
                            <div class="case-study-main-contents">
                                <h1><?php the_title(); ?></h1>
                           
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                            <?php if (has_post_thumbnail()) { ?>
                                <img class="casestudy-image" src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                            <?php } ?>
                        </div> -->
                    </div>
                    <div class="row case-study-contents">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 col-cs">
                        <div class="Challenge-content">  
                    <h2>Challenge</h2>
                    <div class="cs_content-details">
                        <?php echo get_field('challenge_content'); ?>
                        </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 col-cs">
                    <div class="Solution-content">
                            <h2>Solution</h2>
                            <div class="cs_content-details">
                            <?php echo get_field('solution_content'); ?>
                            </div>
                        </div>
                    </div>
                    </div>
                

                    <!-- <div class="cta-download-pdf">
                        <a id="openPopup">Read More <i
                        class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
                    </div> -->



                </div>

            </div>

        </section>


    <?php endwhile; endif; ?>
    <section id="casestudydownload-layout">
<div class="fix-layouts">
<div class="row">
<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-12">
    <div class="cs_downlodable-details">
<h5>Download the case study here!</h5>
<p>You're one step away from building great software. This case study will help you learn more about how Techvito helps successful companies extend their tech teams.</p>

<h6>Want to talk more? Get in touch today!</h6>

<div class="cs_infos">
    <p>Email us at <a href="mailto:hello@techvito.in"> hello@techvito.in </a> or give us a call at <a href="tel:+91 6363327997"> +91 6363-32-7997</a> </p>


</div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12">
<form id="casestudydownloadform" method="post"  >
            <div class="form-box">
                <input id="cs_name" name="cs_name" placeholder="Name*" class="form-input" >
                <span class="info" id="cs_name_info"></span>
            </div>
            <div class="form-box">
                <input id="cs_email" name="cs_email" placeholder="Company Email*" class="form-input" type="email" >
                <span class="info" id="cs_email_info"></span>
            </div>
            <div class="form-box">
                <input id="cs_companyname" name="cs_companyname" placeholder="Company Name*" class="form-input" >
                <span class="info" id="cs_companyname_info"></span>
            </div>
            <div class="form-box" id="terms-box-cs">
                <input type="checkbox" id="terms_checkbox_cs" name="terms_checkbox_cs">
                <label for="terms_checkbox_cs">I have read the Terms & Conditions in the footer.</label><br>
                <span  id="terms_info_cs" style="color: red; display: none;">Please accept the terms and conditions.</span>
            </div>
            <div class="cs_download_cta">
            <input type="hidden" name="pdf_file_url" value="<?php echo esc_attr(base64_encode(get_field('case_study_pdf'))); ?>">
                <input type="submit" id="cs_download" name="cs_download" value="Download Now"/>
                <p id="loaders-icons">We are capturing your information please wait...</p>
            </div>
        </form>
</div>
</div>
</div>
</section>

    <section id="related-studies">
    <div class="fix-layouts">
        <h1>Related Topics</h1> <!-- Changed to h1 for consistency -->

        <div class="row" id="blog-row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row" id="blog-posts">
                    <?php
                    // Get the terms (categories) for the current post
                    $terms = get_the_terms(get_the_ID(), 'casestudy_category');
                    $related_posts = [];
                    $current_post_id = get_the_ID();

                    if ($terms && !is_wp_error($terms)) {
                        // Get the first term
                        $term = array_shift($terms);

                        // Fetch posts related to the selected category, excluding the current post
                        $related_posts = get_posts(array(
                            'post_type' => 'casestudy',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'casestudy_category',
                                    'field' => 'term_id',
                                    'terms' => $term->term_id,
                                ),
                            ),
                            'post__not_in' => array($current_post_id), // Exclude the current post
                            'posts_per_page' => 3,
                        ));
                    }

                    // If there are fewer than 3 related posts, fetch random case studies
                    if (count($related_posts) < 3) {
                        $remaining_posts_needed = 3 - count($related_posts);
                        $random_posts = get_posts(array(
                            'post_type' => 'casestudy',
                            'posts_per_page' => $remaining_posts_needed,
                            'post__not_in' => array($current_post_id), // Ensure the current post is not included
                            'orderby' => 'rand', // Randomize order
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'casestudy_category',
                                    'field' => 'term_id',
                                    'terms' => $term->term_id,
                                    'operator' => 'NOT IN', // Exclude current category
                                ),
                            ),
                        ));

                        // Merge related and random posts without duplicates
                        $related_posts = array_merge($related_posts, $random_posts);
                        $related_posts = array_unique($related_posts, SORT_REGULAR); // Remove duplicates based on entire post object
                    }

                    // Limit to 3 posts
                    $related_posts = array_slice($related_posts, 0, 3);

                    // Loop through the posts and display them
                    foreach ($related_posts as $post) {
                        setup_postdata($post);
                        $case_study_image = get_field('case_study_card_image'); ?>
                        <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
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
                    wp_reset_postdata(); // Reset the global $post variable ?>
                </div>
            </div>
        </div>
        <div class="view-more-cta">
            <a href="<?php echo home_url(); ?>/case-study/">View More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></a>
        </div>
    </div>
</section>






<!-- <div id="casestudy-popupForm" class="popup">
    <div class="casestudypopup">
        <span class="close">&times;</span>
        <h3>Download the case study here!</h3>
        <form id="casestudydownloadform" method="post"  >
            <div class="form-box">
                <input id="cs_name" name="cs_name" placeholder="Name*" class="form-input" >
                <span class="info" id="cs_name_info"></span>
            </div>
            <div class="form-box">
                <input id="cs_email" name="cs_email" placeholder="Company Email*" class="form-input" type="email" >
                <span class="info" id="cs_email_info"></span>
            </div>
            <div class="form-box">
                <input id="cs_companyname" name="cs_companyname" placeholder="Company Name*" class="form-input" >
                <span class="info" id="cs_companyname_info"></span>
            </div>
            <div class="form-box" id="terms-box">
                <input type="checkbox" id="terms_checkbox" name="terms_checkbox">
                <label for="terms_checkbox">I have read and accepted the Terms and Conditions.</label><br>
                <span  id="terms_info" style="color: red; display: none;">Please accept the terms and conditions.</span>
            </div>
            <div class="cs_download_cta">
            <input type="hidden" name="pdf_file_url" value="<?php echo esc_attr(base64_encode(get_field('case_study_pdf'))); ?>">
                <input type="submit" id="cs_download" name="cs_download" value="Download Now"/>
                <p id="loaders-icons">We are capturing your information please wait...</p>
            </div>
        </form>
    </div>
</div> -->

<div id="confirmation"><img src="<?php bloginfo('template_directory') ?>/new-images/right_icon.png">Thank you for your interest in our case studies. Please check your inbox for the PDF document.</div>  

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
                <label for="terms_checkbox">I have read the Terms and Conditions in the footer.</label><br>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var popup = document.getElementById("casestudy-popupForm");
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
                    slidesToShow: 2,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script> -->
<?php get_footer(); ?>