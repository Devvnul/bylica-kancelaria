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

    wp_enqueue_script('countup-js', get_theme_file_uri('/node_modules/countup.js/dist/countUp.umd.js'));
    wp_enqueue_script('lenis', get_theme_file_uri('/node_modules/lenis/dist/lenis.min.js'));
    wp_enqueue_script('all-scripts', get_theme_file_uri('/dist/js/all.min.js'));
    wp_enqueue_script('bootstrap-scripts', get_theme_file_uri('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'));
}

function register_uslugi_cpt()
{
    $labels = array(
        'name' => 'Usługi',
        'singular_name' => 'Usługa',
        'add_new' => 'Dodaj nową',
        'add_new_item' => 'Dodaj nową usługę',
        'edit_item' => 'Edytuj usługę',
        'new_item' => 'Nowa usługa',
        'view_item' => 'Zobacz usługę',
        'search_items' => 'Szukaj usług',
        'not_found' => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono w koszu',
        'menu_name' => 'Usługi'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'uslugi'),
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('uslugi', $args);
}
add_action('init', 'register_uslugi_cpt');

add_action('wpcf7_init', 'custom_add_form_tag_url_by_id');

function custom_add_form_tag_url_by_id()
{
    wpcf7_add_form_tag('page_url', 'custom_page_url_handler');
}

function custom_page_url_handler($tag)
{
    // Default
    $page_id = null;

    // Loop over options like id:42
    foreach ($tag->options as $option) {
        if (strpos($option, 'id:') === 0) {
            $page_id = intval(substr($option, 3));
            break;
        }
    }

    if (!$page_id) {
        return '';
    }

    $url = get_permalink($page_id);

    if (!$url || get_post_status($page_id) !== 'publish') {
        return '';
    }

    return esc_url($url);
}
