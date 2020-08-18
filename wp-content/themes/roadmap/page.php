<?php
     get_header();
     $page_structure = get_field('page_structure'); ?>

<?php while ( have_posts() ) : the_post(); ?>
     
     <?php the_content(); ?>

     <?php if ( !post_password_required() ) : foreach($page_structure as $structure): ?>

          <?php if($structure['acf_fc_layout'] === 'hero'): ?>
               <?php include( locate_template( '/page/hero.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'list_group'): ?>
               <?php include( locate_template( '/page/list-group.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'content_block'): ?>
               <?php include( locate_template( '/page/content-block.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'content_block_two'): ?>
               <?php include( locate_template( '/page/content-block-two.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'content_block_three'): ?>
               <?php include( locate_template( '/page/content-block-three.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'content_block_sidebar'): ?>
               <?php include( locate_template( '/page/content-block-sidebar.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'content_form'): ?>
               <?php include( locate_template( '/page/content-form.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'blog'): ?>
               <?php include( locate_template( '/page/blogs.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'image_block'): ?>
               <?php include( locate_template( '/page/image-block.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'callout'): ?>
               <?php include( locate_template( '/page/callout.php', false, false ) ); ?>
          <?php endif; ?>

          <?php if($structure['acf_fc_layout'] === 'carousel'): ?>
               <?php include( locate_template( '/page/carousel.php', false, false )); ?>
          <?php endif; ?>

     <?php endforeach; endif; ?>

<?php endwhile; ?>

<?php get_footer();