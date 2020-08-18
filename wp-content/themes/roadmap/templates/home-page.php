<?php
     /* Template Name: Home */
     get_header();
     $bg_image = get_field('hero_background_image') ? get_field('hero_background_image') : '';
     $hero_content = get_field('hero_content');
     $hero_speaker_image = get_field('hero_speaker_image');
     $hero_speaker_link = get_field('hero_speaker_name');
     $hero_cta_link = get_field('hero_cta_link');
?>

<style>
     .hero__image {
          background-image: url(<?= $bg_image['url']; ?>);
     }
</style>

<div class="hero bg-color--gray-lighter">
     <div class="hero__container container-fluid">
          <div class="row">
               <div class="col-md-11">
                    <div class="hero__image">
                         <div class="hero__image-content">
                              <?= $hero_content; ?>
                              <button class="button button--link" data-toggle="modal" data-target="<?= $hero_cta_link['url']; ?>"><i class="fas fa-play"></i> <?= $hero_cta_link['title']; ?></button>
                         </div>
                         <?php if($hero_speaker_image): ?>
                              <div class="hero__speaker">
                                   <a href="<?= $hero_speaker_link['url']; ?>"><span><?= $hero_speaker_link['title']; ?></span></a>
                                   <img src="<?= $hero_speaker_image['url']; ?>" alt="<?= $hero_speaker_image['title']; ?>" />
                              </div>
                         <?php endif; ?>
                    </div>
               </div>
          </div>
     </div>
</div>

<div class="modal fade" id="<?= remove_hash($hero_cta_link['url']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">
               ...
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
               </div>
          </div>
     </div>
</div>

<div class="posts">
     <div class="container-fluid">
          <div class="row">
               <?php 
                    $args = array( 'numberposts' => 3 );
                    $latest_posts = get_posts( $args );
                    foreach($latest_posts as $latest_post):
               ?>
                    <div class="col-md-4"> 
                         <div class="posts__item">
                              <div class="posts__item-container">
                                   <h2 class="posts__item-title"><?= $latest_post->post_title; ?></h2>
                                   <p><?= wp_trim_words($latest_post->post_content, 18); ?></p>
                                   <a href="">Read More <i class="fas fa-chevron-right"></i></a>
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
          </div>
          <div class="row">
               <div class="col-md-12 text-right posts__read-more">
                    <a href="">Read More Blog Posts <i class="fas fa-chevron-right"></i></a>
               </div>
          </div>
     </div>
</div>

<div class="posts posts--testimonials">
     <div class="container-fluid">
          <div class="row">
               <?php 
                    $args = array( 'numberposts' => 3, 'post_type' => 'testimonial', );
                    $latest_testimonials = get_posts( $args );
                    foreach($latest_testimonials as $latest_testimonial):
               ?>
                    <div class="col-md-4"> 
                         <div class="posts__item">
                              <div class="posts__bg">
                                   <i class="fas fa-quote-left"></i>
                              </div>
                              <div class="posts__item-container">
                                   <p><?= $latest_testimonial->post_content; ?></p>
                                   <h2 class="posts__item-title title-block title-block__decor"><span><?= $latest_testimonial->post_title; ?></span></h2>
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
          </div>
     </div>
</div>

<?php get_footer();