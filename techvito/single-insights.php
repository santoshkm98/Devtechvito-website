<?php get_header(); ?>
<?php if (have_posts()):

    while (have_posts()):
        the_post();
?>
        <section id="detail-layouts" class="case-study-main">

            <div class="fix-layouts">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
                        <div class="blog-breadcrumbs">
                            <ul>
                                <li><a>Home</a></li>
                                <li><i class="fa-solid fa-arrow-right blg-read-more-icon"></i></li>
                                <li><a>Insights</a></li>
                                <li><i class="fa-solid fa-arrow-right blg-read-more-icon"></i></li>
                                <li><?php the_title(); ?></li>
                            </ul>
                        </div>
                  
                        <div class="blog-detailed-layout">
                            <h1><?php the_title(); ?></h1>
                            <div class="blog-info-row">
                                <div class="author-info-row">
                                    <img class="avatar" alt="Blog-author"
                                        src="https://cdn-icons-png.freepik.com/512/14268/14268099.png?" />
                                    <div class="author-info">
                                        <h6>Sandeep Gokhale</h6>
                                        <p><?php the_time('F jS, Y'); ?></p>
                                    </div>
                                </div>
                                <!-- <div class="blog-published-date">
                                    <p><?php the_time('F jS, Y'); ?></p>
                                </div> -->
                            </div>
                           
           <?php               
    $image_url = get_field('insights_image'); 
    if ($image_url) { ?>
        <img src="<?php echo esc_url($image_url['url']); ?>" alt="<?php the_title(); ?>" class="Blog-detail-image">
    <?php } 
 ?>
                           
                        </div>

                    </div>
                </div>

                <div class="row">
                 <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 col-12 share-socials">
                    <div class="sharing-options">
                    <h4>Share</h4>
                    <br/>
                 <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                 </div>
                 </div>
                 <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-12 mainblog-content-area">
                    <!-- <div class="border-line"></div> -->
                 <div class="blog-content-division">
                            <?php $blogcontents= get_field('content_area');
                            echo $blogcontents;
                            ?>
                            </div>

                 </div>
                 <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12 table-of-contents">
                    <div class="blogs-container-boxes">
                 <div class="blog-related-topics-box">
                  <div class="related-blog-lists">
                    <h5>Related Topics</h5>
                  <?php
// Define the custom post type
$post_type = 'insights';

// Query arguments
$args = array(
    'post_type' => $post_type,
    'posts_per_page' => -1, // Get all posts
);

// The Query
$insights_query = new WP_Query($args);

// Check if we have posts
if ($insights_query->have_posts()) {
    echo '<ul>'; // Start the unordered list

    // The Loop
    while ($insights_query->have_posts()) {
        $insights_query->the_post();
        
        // Display the title with a link
        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }

    echo '</ul>'; // End the unordered list
} else {
    echo 'No insights found.';
}

// Restore original Post Data
wp_reset_postdata();
?>
                  </div>
                 
                 </div>
                 <div class="subscription-insights">
    <a id="openPopup"class="subscribe-button">
        Subscribe to our blog
        <span><i class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
    </a>
</div>
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

    <section id="related-studies">
    <div class="fix-layouts">
        <h3>Related Topics</h3>
        <div class="related-topics-container">
            <div class="related-topics-box">
                <?php 
                // Get the terms (categories) for the current post
                $terms = get_the_terms(get_the_ID(), 'category');
                $related_posts = [];
                $current_post_id = get_the_ID();

                if ($terms && !is_wp_error($terms)) {
                    // Get the first term
                    $term = array_shift($terms);
                    
                    // Fetch posts related to the selected category, excluding the current post
                    $related_posts = get_posts(array(
                        'post_type' => 'post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => $term->term_id,
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
                        'post_type' => 'post',
                        'posts_per_page' => $remaining_posts_needed,
                        'post__not_in' => array($current_post_id), // Ensure the current post is not included
                        'orderby' => 'rand', // Randomize order
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => $term->term_id,
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
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?php the_title(); ?>" />
                        <?php } ?>
                        <div class="related-topic-content">
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <span>Read More <i class="fa-solid fa-arrow-right blg-read-more-icon"></i></span>
                            </a>
                        </div>
                    </div>
                <?php } 
                wp_reset_postdata(); // Reset the global $post variable ?>
            </div>
        </div>
    </div>
</section>
<div id="casestudy-popupForm" class="popup">
    <div class="subscribepopup">
        <span class="close">&times;</span>
        <h3>Don't Miss Out! <br/> Subscribe for Exclusive Insights!</h3>
        <form id="casestudydownloadform"  action="https://dev.techvito.in/wp-content/themes/techvito/mail/services-mailer.php"  method="post">
            <div class="form-box">
                <input id="cs_name" name="cs_name" placeholder="Name*" class="form-input">
                <span class="info" id="cs_name_info"></span>
            </div>
            <div class="form-box">
                <input id="cs_email" name="cs_email" placeholder="Email*" class="form-input">
                <span class="info" id="cs_email_info"></span>
            </div>

            <div class="cs_download_cta">
           <input type=submit id="cs_download" name="cs_download" value="Download Now"/>
           </div>
        </form>
    </div>
</div>
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
<?php get_footer(); ?>