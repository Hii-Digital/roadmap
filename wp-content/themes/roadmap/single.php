<?php get_header(); ?>

<div class="single-post__area">
     <div class="container-fluid">
          <?php while ( have_posts() ) : the_post(); ?>
               <div class="row">
                    <div class="single-post__title col-md-12">
                         <h1><?php the_title(); ?></h1>
                    </div>
               </div>

               <div class="row">
                    <main class="col-md-8">
                         <?php if(has_post_thumbnail()) : ?>
                              <div class="single-post__image">
                                   <?php the_post_thumbnail('large'); ?>
                              </div>
                         <?php endif; ?>
                         <div class="single-post__content text--default">
                              <?php the_content(); ?>
                         </div>
                    </main>
                    <aside class="col-md-4">
                         <?php get_sidebar(); ?>
                    </aside>
               </div>
          <?php endwhile; ?>
     </div>
</div>

<?php get_footer();