<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  $vendor_directory = get_template_directory_uri() . '/vendor/';
    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Adding velocity in the footer
    // wp_enqueue_script( 'velocity', get_template_directory_uri() . '/assets/js/velocity.min.js', array( '' ), '', true );

    // Adding velocity in the footer
    wp_enqueue_script( 'velocity', $vendor_directory . 'velocity/velocity.min.js', array( 'jquery' ), '', true );

    // Add Font awesome
    // wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/e55e793280.js', array( '' ), '', false );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
