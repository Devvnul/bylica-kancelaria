<?php
get_template_part('/src/template-parts/blog/posts-wp-query');
$query = get_query_var('posts_query');
set_query_var('posts_query', $query);
?>

<?php
get_template_part('/src/template-parts/blog/posts-header');
?>

<hr class="blog__post-separator" />

<?php if ($query->have_posts()) { ?>
    <div class="blog__posts">
        <?php while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="blog__post">
                <?php if (has_post_thumbnail()) { ?>
                    <div class="blog__post-image-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array('class' => 'blog__post-image')); ?>
                        </a>
                    </div>
                <?php } ?>

                <div class="blog__post-content">
                    <div class="blog__post-categories">
                        <?php the_category(''); ?>
                    </div>

                    <h2 class="h4 blog__post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="blog__post-tags">
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            foreach ($tags as $tag) { ?>

                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="blog__post-tag-link">
                                    <i class="ph-thin ph-hash"></i>
                                    <?php echo $tag->name; ?>
                                </a>

                            <?php }
                        } ?>
                    </div>

                    <div class="blog__post-excerpt">
                        <?php the_excerpt(); ?>
                        <a class="blog__post-read-more" href="<?php the_permalink(); ?>">Czytaj więcej...</a>
                    </div>

                    <p class="blog__post-date">
                        <i class="ph-thin ph-clock"></i>
                        <?php echo get_the_date(); ?>
                    </p>
                </div>
            </div>

            <hr class="blog__post-separator" />
        <?php } ?>
    </div>
<?php } else { ?>
    <p>Nie znaleziono żadnych wpisów.</p>
<?php } ?>

<?php
get_template_part('/src/template-parts/blog/pagination');
?>