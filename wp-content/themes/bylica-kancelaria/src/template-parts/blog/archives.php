<h5 class="h5 blog__archives-header">
    <i class="ph-thin ph-archive"></i>
    Archiwum
</h5>

<hr />

<ul class="blog__archives-list">
    <?php
    wp_get_archives(array(
        'type' => 'monthly',   // Group by month
        'format' => 'html',    // Display as HTML links
        'show_post_count' => true  // Optionally show the post count next to the month
    ));
    ?>
</ul>