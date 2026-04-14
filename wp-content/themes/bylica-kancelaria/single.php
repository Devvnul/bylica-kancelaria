<?php get_header(); ?>

<div class="single-post container">
    <div class="row pt-5 mb-5">
        <div class="col-12 pt-5 mt-5">

            <main>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <h1>
                            <?php echo get_the_title(); ?>
                        </h1>
                    </header>

                    <div class="single-post__tags">
                        <?php
                        $tags = get_the_tags();

                        if ($tags) {
                            foreach ($tags as $tag) { ?>
                                <a class="single-post__tag-link" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                    title="#<?php echo esc_attr($tag->name); ?>">
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                                &nbsp;
                            <?php }
                        }
                        ?>
                    </div>

                    <div class="single-post__img-wrapper mt-5">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>

                    <div class="single-post__content-wrapper mt-4">
                        <?php
                        echo apply_filters('the_content', get_the_content());
                        ?>
                    </div>
                </article>

            </main>

        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
    jQuery(function () {
        jQuery('.navbar a[href*="<?php echo get_permalink(44); ?>"]').addClass('active');
    });
</script>