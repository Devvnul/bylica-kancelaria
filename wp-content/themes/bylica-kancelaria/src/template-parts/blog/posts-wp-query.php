<?php
global $wp_query; // Use the global $wp_query for archive, tag, category, search, and blog pages

// Check the current paged value
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Use the default query for archive, tag, category, search, and blog pages
if (is_category() || is_tag() || is_archive() || is_search() || is_home()) {
    // For blog page and archives, use the default WordPress query
    $query = $wp_query;
} else {
    // For any other custom pages, create a custom query if needed
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => get_option('posts_per_page'),  // Use WordPress global setting
        'post_status' => 'publish',
        'paged' => $paged,
    );
    $query = new WP_Query($args);
}

// Pass the query to the template part
set_query_var('posts_query', $query);
?>