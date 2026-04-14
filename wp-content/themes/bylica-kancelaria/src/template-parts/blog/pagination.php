<?php
$query = get_query_var('posts_query');
?>

<div class="blog__pagination">
    <?php
    echo paginate_links(array(
        'total' => $query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'mid_size' => 2,
        'prev_text' => __('<i class="ph-thin ph-caret-left"></i>'),
        'next_text' => __('<i class="ph-thin ph-caret-right"></i>'),
    ));
    ?>
</div>

<?php wp_reset_postdata(); // Reset the query to the original main loop ?>