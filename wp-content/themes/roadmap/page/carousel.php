<?php
     $carousel_buttons = $structure['include_buttons'];
     $carousel_bullets = $structure['include_bullets'];
     $carousel_type = $structure['carousel_type'];
     $slides = $structure['slides'];
?>

<div class="carousel <?= $carousel_type ? 'carousel--' . $carousel_type : ''; ?> <?= $carousel_buttons ? 'carousel--has-buttons' : '' ;?> <?= $carousel_bullets ? 'carousel--has-bullets' : '' ;?>">
     <div class="container-fluid">
          <div class="row">
               <div class="col-12">
                    <div class="glide">
                         <div data-glide-el="track" class="glide__track">
                              <ul class="glide__slides">
                                   <?php foreach($slides as $slide):
                                        $slide_type = $slide['slide_type'];
                                        $slide_post = $slide['post_slide'];
                                   ?>
                                        <li class="glide__slide glide__slide--<?= $slide_type; ?>">
                                             <?php if($slide_type === 'post'):
                                                  $poster = get_field('poster', $slide_post[0]);
                                                  $film_title = get_the_title($slide_post[0]);
                                                  $permalink = get_permalink($slide_post[0]);
                                             ?>
                                                  <div class="glide__post-slide">
                                                       <?php if($permalink): ?>
                                                            <a class="glide__post-link" href="<?= $permalink; ?>" title="More information about the film called <?= $film_title; ?>">
                                                       <?php endif; ?>
                                                       <?php if($poster): ?>
                                                            <img src="<?= $poster['url']; ?>" alt="Film Poster for <?= $film_title; ?>" />
                                                       <?php endif; ?>
                                                       <?php if($film_title): ?>
                                                            <h2><?= $film_title; ?></h2>
                                                       <?php endif; ?>
                                                       <?php if($permalink): ?>
                                                            </a>
                                                       <?php endif; ?>
                                                  </div>
                                             <?php else: ?>
                                                  CUSTOM
                                             <?php endif; ?>
                                        </li>
                                   <?php endforeach; ?>
                              </ul>
                         </div>

                         <?php if($carousel_buttons): ?>
                              <div class="glide__arrows" data-glide-el="controls">
                                   <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                                   <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                              </div>
                         <?php endif; ?>

                         <?php if($carousel_bullets): ?>
                              <div class="glide__bullets" data-glide-el="controls[nav]">
                                   <?php foreach($slides as $key => $slide): ?>
                                        <button class="glide__bullet" data-glide-dir="=<?= $key; ?>"></button>
                                   <?php endforeach; ?>
                              </div>
                         <?php endif; ?>
                    </div>
               </div>
          </div>
     </div>
</div>