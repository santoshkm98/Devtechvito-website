<?php /* Template Name:Case Study Page */ ?>

<?php get_header(); ?>
<section id="related-studies" class="page-layout-main">
    <div class="fix-layouts">
        <h1>Explore our Case Studies</h1>

        <?php
        // $filter_cat = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';

        // // Get categories from the custom taxonomy 'casestudy_category'
        // $categories = get_terms(array(
        //     'taxonomy' => 'casestudy_category',
        //     'hide_empty' => false,
        // ));
        // ?>

        <!-- // <ul id="desktop-categories" class="cat_cls">
        //     <?php
        //     foreach ($categories as $category) {
        //         $selected = ($filter_cat == $category->slug) ? 'category-active' : '';
        //         echo '<li class="' . esc_attr($selected) . '"><a href="#" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a></li>';
        //     }
        //     ?>
        // </ul> -->

        <!-- // <div class="scroll-container">
        //     <ul id="mobile-categories" class="cat_cls">
        //         <?php
        //         foreach ($categories as $category) {
        //             $selected = ($filter_cat == $category->slug) ? 'category-active' : '';
        //             echo '<li class="' . esc_attr($selected) . '"><a href="#" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a></li>';
        //         }
        //         ?>
        //     </ul>
        // </div> -->

        <div class="row" id="blog-row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row" id="blog-posts">
                    <?php
                    $args = array(
                        'post_type' => 'casestudy',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );

                    if ($filter_cat && $filter_cat !== 'all') {
                        $args['tax_query'] = array(
                            array(
                                'taxonomy' => 'casestudy_category',
                                'field'    => 'slug',
                                'terms'    => $filter_cat,
                            ),
                        );
                    }
                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            $case_study_image = get_field('case_study_card_image'); ?>
                           
                            <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php
                            $post_categories = get_the_terms(get_the_ID(), 'casestudy_category');
                            $categories_slugs = array();
                            if ($post_categories) {
                                foreach ($post_categories as $cat) {
                                    $categories_slugs[] = esc_attr($cat->slug);
                                }
                            }
                            echo implode(' ', $categories_slugs);
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
    </div>
</section>

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

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var category = new URLSearchParams(window.location.search).get('q') || 'all';
        var links = document.querySelectorAll('.cat_cls li');
        var posts = document.querySelectorAll('#blog-row .blog-content-card');

        function filterPosts(category) {
            posts.forEach(function (post) {
                var categories = post.getAttribute('data-categories').split(' ');
                if (category === 'all' || categories.includes(category)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        }

        function updateActiveLink(category) {
            links.forEach(function (link) {
                link.classList.remove('category-active');
                if (link.querySelector('a').getAttribute('data-category') === category) {
                    link.classList.add('category-active');
                }
            });
        }

        filterPosts(category);
        updateActiveLink(category);


        document.querySelectorAll('.cat_cls a').forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                var selectedCategory = link.getAttribute('data-category');
                filterPosts(selectedCategory);
                updateActiveLink(selectedCategory);
                var newUrl = new URL(window.location);
                newUrl.searchParams.set('q', selectedCategory);
                history.pushState(null, '', newUrl);
            });
        });
    });


</script>

<?php get_footer(); ?>