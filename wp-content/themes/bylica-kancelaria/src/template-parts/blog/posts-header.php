<h5 class="h3 blog__posts-header mt-5">
    <?php if (!is_page(44)): ?>
        Najnowsze wpisy:
    <?php endif; ?>

    <?php
    if (is_category()) {
        single_cat_title();
    } elseif (is_tag()) {
        echo '#' . single_tag_title('', false);
    } elseif (is_month()) {
        echo ucfirst(get_the_date('F Y')); // Capitalize the first letter
    } elseif (is_search()) {
        echo '"' . get_search_query() . '"';
    } else {
        echo 'Najnowsze wpisy';
    }
    ?>
</h5>