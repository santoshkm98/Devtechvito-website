<?php get_header(); ?>
<?php if (have_posts()):

    while (have_posts()):
        the_post();
        $image_id = get_post_thumbnail_id();
        //go get image attributes [0] => url, [1] => width, [2] => height
        $image_url = wp_get_attachment_image_src($image_id, '', true);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
        <section id="detail-layouts" class="case-study-main">

            <div class="fix-layouts">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
                        <div class="blog-breadcrumbs">
                            <ul>
                                <li><a>Home</a></li>
                                <li>&#xf061;</li>
                                <li><a>Blogs</a></li>
                                <li>&#xf061;</li>
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
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" class="Blog-detail-image">
                            <?php } ?>
                           
                        </div>

                    </div>
                </div>

                <div class="row">
                 <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 col-12 share-socials">
                    <h4>Share</h4>
                    <br/>
                 <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                 </div>
                 <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12 mainblog-content-area">
                    <!-- <div class="border-line"></div> -->
                 <div class="blog-content-division">
                            <?php $blogcontents= get_field('content_area');
                            echo $blogcontents;
                            ?>
                            </div>

                 </div>
                 <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12 table-of-contents">
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