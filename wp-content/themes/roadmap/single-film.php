<?php get_header(); ?>

<div class="single-post__area">
     <div class="container-fluid">
          <?php while ( have_posts() ) : the_post(); ?>
               <?php if(has_post_thumbnail()) : ?>
                    <div class="row">
                         <div class="single-post__image">
                              <?php the_post_thumbnail('large'); ?>
                         </div>
                    </div>
               <?php endif; ?>

               <div class="row">
                    <div class="col-12 single-post__title">
                         <h1><?php the_title(); ?></h1>
                    </div>
               </div>

               <div class="row">
                    <main class="col-md-8">
                         <div class="row">
                              <div class="col-md-4 text-center">
                                   <div class="single-post__image">
                                        <img alt="Film poster of <?= get_the_title(); ?>" src="<?= get_field('poster')['url']; ?>" />
                                   </div>
                              </div>
                              <div class="col-md-8 text--sm">
                                   <div class="single-post__content">
                                        <?= get_field('content'); ?>
                                   </div>
                                   <div class="single-post__buttons">
                                        <?php if( get_field('website_button') ): ?>
                                             <a class="button button__primary" href="<?= get_field('website_button')['url']; ?>" title="<?= get_field('website_button')['title']; ?>" target="<?= get_field('website_button')['target']; ?>"><?= get_field('website_button')['title']; ?></a>
                                        <?php endif; ?>
                                        <?php if( get_field('trailer_url') ): ?>
                                             <button class="button button__dark" data-toggle="modal" data-target="#trailer">View Trailer</button>
                                        <?php endif; ?>
                                   </div>

                                   <?php if( get_field('trailer_url') ): ?>
                                   <div class="modal fade" id="trailer" tabindex="-1" role="dialog" aria-labelledby="trailer" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                  <button type="button" class="button button__close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <div class="modal-body">
                                                       <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="<?= get_field('trailer_url'); ?>"></iframe>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <?php endif; ?>

                              </div>
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