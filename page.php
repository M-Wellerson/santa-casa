<?php get_header(); ?>

<div class="full-<?= is_user_logged_in() ? 'logged' : 'not-logged' ?>" >
    <div class="container <?= is_user_logged_in() ? 'logged' : 'not-logged' ?>">
        <div class="space"></div>
        <?php if( !is_user_logged_in() ) : ?>
            <img src="<?= get_template_directory_uri() ?>/assets/logo/logo.png" class="logo-login">
        <?php endif; ?>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
        <div class="space"></div>
    </div>
</div>


<?php get_footer(); ?>