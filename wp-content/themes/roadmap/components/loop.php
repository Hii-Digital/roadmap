<article <?php post_class('posts__item'); ?>>
    <div class="posts__item-container">
        <div class="posts__item-date">
            <?= get_the_date(); ?>
        </div>
        <h2 class="posts__item-title"><a href="<?php the_permalink(); ?>" title="Read"><?php the_title(); ?></a></h2>
        <p><?= wp_trim_words(get_the_content(), 18); ?></p>
        <a href="<?php the_permalink(); ?>" title="Read">Read More <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
    </div>
</article>