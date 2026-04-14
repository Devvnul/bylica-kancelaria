<div class="blog container-fluid layout__page">
    <div class="row">
        <div class="offset-0 col-12 offset-xxl-1 col-xxl-10">
            <?php
            get_template_part('/src/template-parts/blog/introduction');
            ?>

            <?php
            get_template_part('/src/template-parts/blog/categories');
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 offset-0 col-lg-9 offset-xxl-1 col-xxl-7">
            <?php
            get_template_part('/src/template-parts/blog/posts');
            ?>
        </div>
        <div class="col-12 col-lg-3">
            <div class="blog__side-menu">
                <?php
                get_template_part('/src/template-parts/blog/tags');
                ?>

                <?php
                get_template_part('/src/template-parts/blog/archives');
                ?>
            </div>
        </div>
    </div>
</div>