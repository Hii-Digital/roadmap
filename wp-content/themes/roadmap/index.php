<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <?php if (! have_posts()) : ?>
            <div class="alert alert-warning">
                <?php _e('Sorry, no results were found.', 'situation'); ?>
            </div>
            <?php get_search_form(); ?>
        <?php else: ?>
            <div class="col-md-12 single-post__title">
                <?php if(is_category()): ?>
                    <h1><?= single_cat_title(); ?></h1>
                <?php else: ?>
                    <h1><?= get_the_title(); ?></h1>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-6 posts__item-outer">
                <?php get_template_part('components/loop'); ?>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="row">
        <div class="col-12">
            <?php the_posts_navigation(); ?>
        </div>
    </div>  
</div>

<?php get_footer();