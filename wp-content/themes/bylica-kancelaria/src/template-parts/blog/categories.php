<?php
$categories = get_categories();
$activeCategoryId = get_queried_object_id(); // Get the ID of the current category
$blogMainPageActiveClass = '';

$blogMainPageId = 44; // ID of the main blog page

if ($activeCategoryId == $blogMainPageId) {
    $blogMainPageActiveClass = 'active';
}
?>

<h5 class="h3 blog__categories-header">
    <i class="ph-thin ph-chat-text"></i>
    Główne tematy
</h5>

<?php if (!empty($categories)) { ?>
    <div class="blog__categories">
        <a class="blog__category-link <?php echo $blogMainPageActiveClass; ?>"
            href="<?php echo get_permalink($blogMainPageId); ?>">
            Wszystkie
        </a>
        <?php foreach ($categories as $category) { ?>
            <?php
            $activeClass = ($category->term_id == $activeCategoryId) ? 'active' : '';
            ?>

            <a class="blog__category-link <?php echo $activeClass; ?>"
                href="<?php echo get_category_link($category->term_id); ?>">
                <?php echo $category->name; ?>
            </a>
        <?php } ?>
    </div>
<?php } ?>