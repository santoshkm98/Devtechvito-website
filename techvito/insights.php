<?php /* Template Name:Insights Page */ ?>

<?php get_header(); ?>
<section id="related-studies" class="page-layout-main">
    <div class="fix-layouts">
        <h1>Read Our Latest News & Insights</h1>

        <?php
        $filter_cat = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';
        ?>

        <ul id="desktop-categories" class="cat_cls">
            <?php

            $categories = get_categories();
            foreach ($categories as $category) {
                $selected = ($filter_cat == $category->slug) ? 'category-active' : '';
                echo '<li class="' . esc_attr($selected) . '"><a href="#" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a></li>';
            }
            ?>
        </ul>

        <div class="scroll-container">

            <ul id="mobile-categories" class="cat_cls">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    $selected = ($filter_cat == $category->slug) ? 'category-active' : '';
                    echo '<li class="' . esc_attr($selected) . '"><a href="#" data-category="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a></li>';
                }
                ?>
            </ul>


        </div>
        <div class="row" id="blog-row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row" id="blog-posts">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );

                    if ($filter_cat && $filter_cat !== 'all') {
                        $args['category_name'] = $filter_cat;
                    }
                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="blog-content-card col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12" data-categories="<?php
                            $post_categories = get_the_category();
                            $categories_slugs = array();
                            foreach ($post_categories as $cat) {
                                $categories_slugs[] = esc_attr($cat->slug);
                            }
                            echo implode(' ', $categories_slugs);
                            ?>">
                                <div>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, 'full', true);
                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <?php if (has_post_thumbnail()) { ?>
                                            <img src="<?php echo esc_url($image_url[0]); ?>"
                                                alt="<?php echo esc_attr($image_alt); ?>" class="blog-image" />
                                        <?php } ?>
                                        <div class="related-topic-content">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                        <span>Read More &#xf061;</span>
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
    </div>
</section>

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