<header>
    <h1 class="page-header"><?= get_the_title(); ?></h1>
    <?php if (is_single()) {
        get_template_part('templates/components/entry-meta');
    } ?>
</header>