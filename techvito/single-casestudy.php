<?php get_header(); ?>
<?php if (have_posts()):

    while (have_posts()):
        the_post();
        $image_id = get_post_thumbnail_id();
        //go get image attributes [0] => url, [1] => width, [2] => height
        $image_url = wp_get_attachment_image_src($image_id, '', true);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
        <section id="detail-layouts">
            <div class="fix-layouts">
                <div class="case-study-detailed-layout">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 ">
                            <div class="case-study-main-contents">
                                <h1><?php the_title(); ?></h1>
                                <h5>Category: <span> <?php
                                $terms = get_the_terms(get_the_ID(), 'casestudy_category');
                                if ($terms && !is_wp_error($terms)) {
                                    // Get the first term
                                    $term = array_shift($terms);
                                    echo esc_html($term->name);
                                } else {
                                    echo 'No category'; // Fallback if no category is found
                                }
                                ?></span></h5>
                                <h5>Services: <span><?php echo get_field('services'); ?></span></h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                            <?php if (has_post_thumbnail()) { ?>
                                <img class="casestudy-image" src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
                            <?php } ?>
                        </div>
                    </div>

                    <div class="case-study-contents">
                        <h2>Challenge</h2>
                        <?php echo get_field('challenge_content'); ?>


                        <div class="Solution-content">
                            <h2>Solution</h2>

                            <?php echo get_field('solution_content'); ?>
                        </div>


                    </div>

                    <div class="cta-download-pdf">
                        <a id="openPopup">Read More</a>
                    </div>



                </div>

            </div>

        </section>


    <?php endwhile; endif; ?>

<section id="related-studies">
    <div class="fix-layouts">
        <h3>Related Topics</h3>
        <div class="related-topics-container">
            <div class="related-topics-box">
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
                    setup_postdata($post); ?>
                    <div class="related-topic-item">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>"
                                alt="<?php the_title(); ?>" />
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
                wp_reset_postdata(); // Reset the global $post variable ?>
            </div>
        </div>
    </div>
</section>

<?php
// Get the value of the ACF field
$pdf_file = get_field('case_study_pdf'); 
?>
<div id="casestudy-popupForm" class="popup">
    <div class="casestudypopup">
        <span class="close">&times;</span>
        <h3>Download the case study here!</h3>
        <form id="casestudydownloadform"  action="https://dev.techvito.in/wp-content/themes/techvito/mail/services-mailer.php"  method="post">
            <div class="form-box">
                <input id="cs_name" name="cs_name" placeholder="Name*" class="form-input">
                <span class="info" id="cs_name_info"></span>
            </div>
            <div class="form-box">
                <input id="cs_email" name="cs_email" placeholder="Company Email*" class="form-input">
                <span class="info" id="cs_email_info"></span>
            </div>

            <div class="form-box">
                <input id="cs_companyname" name="cs_companyname" placeholder="Company Name*" class="form-input">
                <span class="info" id="cs_companyname_info"></span>
            </div>
            <div class="cs_download_cta">
            <?php wp_nonce_field('cs_download_nonce', 'cs_download_nonce_field'); ?>
            <?php
$file = get_field('case_study_pdf');
if ($file):
    $url = $file['url'];
    $encoded_url = base64_encode($url);
    $title = $file['title'];
    ?>
      <input type="hidden" name="file_url" value="<?php echo esc_attr($encoded_url); ?>">
      <span><?php echo esc_html($title); ?></span>
      <?php endif; ?>
           <input type=submit id="cs_download" name="cs_download" value="Download Now"/>
           </div>
        </form>
    </div>
</div>

<style>
    .popup {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1000;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        background-color: rgba(0, 0, 0, 0.5);
        /* Black background with opacity */
    }

    .casestudypopup {
        background-color: #1e232e;
        padding: 40px 20px;
        border-radius: 12px;
        margin: 7% auto;
        width: 500px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {

        text-decoration: none;
        cursor: pointer;
    }
    #casestudy-popupForm h3{
   text-align: center;
   color: #fff;
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    font-size: 24px;
    }
    #casestudydownloadform #cs_download{
        background: #4285f5;
    padding: 10px 20px;
    border-radius: 12px;
    color: #fff !important;
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    border: none;
    transition: .5s;
    text-align: center;

    }
    #casestudydownloadform #cs_download:hover{
        background: #0f55cc;
    }
    .cs_download_cta{
        text-align: center;
    }
    #pdf-field-value {
        display: none;
    }
    .cta-download-pdf a{
        background: #4285f5;
    padding: 10px 20px;
    border-radius: 12px;
    color: #fff !important;
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    border: none;
    transition: .5s;
    }
</style>
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
        document.getElementById("casestudydownloadform").onsubmit = function (event) {
            event.preventDefault(); // Prevent default form submission
            // Handle form submission logic here
            alert('Form submitted!'); // Example action
            popup.style.display = "none"; // Close the popup after submission
        }
    });
</script>
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
</script>
<?php get_footer(); ?>