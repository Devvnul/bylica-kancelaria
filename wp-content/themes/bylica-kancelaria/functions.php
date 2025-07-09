<?php

add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'load_styles');
add_action('wp_enqueue_scripts', 'load_scripts');

function theme_setup()
{
    add_theme_support('post-thumbnails'); // https://codex.wordpress.org/Post_Thumbnails
    add_theme_support('title-tag'); // https://wordpress.com/go/tutorials/how-to-add-edit-and-optimize-title-tags-on-wordpress-sites/
    add_theme_support('custom-logo'); // https://developer.wordpress.org/themes/functionality/custom-logo/
}

function load_styles()
{
    wp_enqueue_style('optimized-bootstrap', get_theme_file_uri('/dist/css/optimized-bootstrap.min.css'));
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('all-styles', get_theme_file_uri('/dist/css/all.min.css'));
}

function load_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script('all-scripts', get_theme_file_uri('/dist/js/all.min.js'));
    wp_enqueue_script('bootstrap-scripts', get_theme_file_uri('/node_modules/bootstrap/dist/js/bootstrap.min.js'));
}
