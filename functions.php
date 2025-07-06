<?php
// Enqueue styles and scripts
function customtheme_enqueue_scripts() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'customtheme_enqueue_scripts');

// Enable featured images
add_theme_support('post-thumbnails');

// Register Custom Post Type: Testimonials
function create_testimonials_cpt() {
    register_post_type('testimonial',
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'create_testimonials_cpt');
