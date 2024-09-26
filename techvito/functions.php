<?php



add_theme_support('post-thumbnails');



ini_set('display_errors','');



function remove_core_updates()

{

  global $wp_version;

  return (object) array('last_checked' => time(), 'version_checked' => $wp_version, );

}

add_filter('pre_site_transient_update_core', 'remove_core_updates');

add_filter('pre_site_transient_update_plugins', 'remove_core_updates');

add_filter('pre_site_transient_update_themes', 'remove_core_updates');





function my_custom_post_casestudy() {
  $labels = array(
    'name'               => _x( 'Case Studies', 'post type general name' ),
    'singular_name'      => _x( 'Case Study', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'case study' ),
    'add_new_item'       => __( 'Add New Case Study' ),
    'edit_item'          => __( 'Edit Case Study' ),
    'new_item'           => __( 'New Case Study' ),
    'all_items'          => __( 'All Case Studies' ),
    'view_item'          => __( 'View Case Study' ),
    'search_items'       => __( 'Search Case Studies' ),
    'not_found'          => __( 'No case studies found' ),
    'not_found_in_trash' => __( 'No case studies found in the Trash' ),
    'menu_name'          => 'Case Studies'
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Case Studies',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'menu_icon'     => 'dashicons-format-aside',
    'rewrite'       => array( 'slug' => 'case-studies' ),
  );

  register_post_type( 'casestudy', $args ); 
}
add_action( 'init', 'my_custom_post_casestudy' );

function my_custom_taxonomy_casestudy() {
  $labels = array(
    'name'              => _x( 'Case Study Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Case Study Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Case Study Categories' ),
    'all_items'         => __( 'All Case Study Categories' ),
    'parent_item'       => __( 'Parent Case Study Category' ),
    'parent_item_colon' => __( 'Parent Case Study Category:' ),
    'edit_item'         => __( 'Edit Case Study Category' ), 
    'update_item'       => __( 'Update Case Study Category' ),
    'add_new_item'      => __( 'Add New Case Study Category' ),
    'new_item_name'     => __( 'New Case Study Category' ),
    'menu_name'         => __( 'Case Study Categories' ),
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'public' => true,
    'show_admin_column' => true,
    'rewrite' => array( 'slug' => 'case-study-category' ),
  );

  register_taxonomy( 'casestudy_category', 'casestudy', $args );
}
add_action( 'init', 'my_custom_taxonomy_casestudy' );



//insights

function create_insightsposttype()
{

  $args = array(

    'labels' => array(

      'name' => __('Insights'),

      'singular_name' => __('insights'),

      'all_items' => __('All insights'),

      'add_new_item' => __('Add New Insights'),

      'edit_item' => __('Edit Insights'),

      'view_item' => __('View Insights'),

      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),


    ),

    'public' => true,

    'has_archive' => true,

    'rewrite' => array('slug' => 'insights'),

    'show_ui' => true,

    'show_in_menu' => true,

    'show_in_nav_menus' => true,

    'capability_type' => 'page',

    'supports' => array('title'),

    'exclude_from_search' => true,

    'menu_position' => 30,

    'show_in_graphql' => true,

    'graphql_single_name' => 'insight',

    'graphql_plural_name' => 'insights',

    'menu_icon' => 'dashicons-format-gallery'

  );

  register_post_type('insights', $args);

}

add_action('init', 'create_insightsposttype');

add_action('init', 'jss_create_insights_taxonomies', 0);

function jss_create_insights_taxonomies()
{

  register_taxonomy(

    'insight_cat',
    'insights',

    array(

      'hierarchical' => true,

      'label' => 'insights Category',

      'singular_label' => 'insights Category',

      'rewrite' => true,

      'show_in_graphql' => true,

      'graphql_single_name' => 'insightCategory',

      'graphql_plural_name' => 'insightsCategory',
      

    )

  );


}

add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'insights' );
};



// Services


function create_servicesposttype() {
  $args = array(
      'labels' => array(
          'name' => __('Services'),
          'singular_name' => __('Service'),
          'all_items' => __('All Services'),
          'add_new_item' => __('Add New Service'),
          'edit_item' => __('Edit Service'),
          'view_item' => __('View Service'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => '', 'with_front' => false), // No base slug
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'capability_type' => 'page',
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'exclude_from_search' => false,
      'menu_position' => 30,
      'menu_icon' => 'dashicons-format-gallery',
      'show_in_graphql' => true,
      'graphql_single_name' => 'service',
      'graphql_plural_name' => 'services',
  );

  register_post_type('services', $args);
}
add_action('init', 'create_servicesposttype');

// Register Custom Taxonomy
add_action('init', 'jss_create_services_taxonomies', 0);
function jss_create_services_taxonomies() {
  register_taxonomy(
      'service_cat',
      'services',
      array(
          'hierarchical' => true,
          'label' => 'Service Categories',
          'singular_label' => 'Service Category',
          'rewrite' => array('slug' => 'service-category', 'with_front' => false), // Custom category slug
          'show_in_graphql' => true,
          'graphql_single_name' => 'serviceCategory',
          'graphql_plural_name' => 'serviceCategories',
      )
  );
}

// Customize the Permalink Structure
add_filter('post_type_link', 'custom_services_permalink', 10, 2);
function custom_services_permalink($permalink, $post) {
  if ($post->post_type === 'services') {
      // Get the categories assigned to the service
      $terms = get_the_terms($post->ID, 'service_cat');
      if ($terms && !is_wp_error($terms)) {
          // Use the first category
          $category = array_shift($terms);
          // Construct the permalink using the category slug
          $permalink = str_replace('%service_cat%', $category->slug, $permalink);
      }
  }
  return $permalink;
}

// Ensure the custom permalink structure is registered
function create_services_posttype_with_permalink() {
  register_post_type('services', array(
      'labels' => array(
          'name' => __('Services'),
          'singular_name' => __('Service'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => '%service_cat%', 'with_front' => false), // Use the category slug
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
  ));
}
add_action('init', 'create_services_posttype_with_permalink');