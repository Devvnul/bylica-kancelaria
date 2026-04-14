<?php
$tags = get_tags();
$activeTagId = get_queried_object_id(); // Get the ID of the current tag
?>

<h5 class="h5 blog__tags-header">
    <i class="ph-thin ph-tag"></i>
    Tagi
</h5>

<hr />

<div class="blog__tags mb-5 pb-5">
    <?php foreach ($tags as $tag) { ?>
        <?php
        $activeClass = ($tag->term_id == $activeTagId) ? 'active' : '';
        ?>

        <a class="blog__tag-link <?php echo $activeClass; ?>" href="<?php echo get_tag_link($tag->term_id); ?>"
            title="#<?php echo $tag->name; ?>">
            #<?php echo $tag->name; ?>
        </a>
    <?php } ?>
</div>