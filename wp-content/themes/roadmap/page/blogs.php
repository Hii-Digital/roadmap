<?php
     $blog_type = $structure['blog_type'] ? $structure['blog_type'] : 'any';
     $blog_name = $structure['blog_name'];
     $blog_category = $structure['blog_category'];
     $blog_posts_per_page = $structure['blog_posts_per_page'] ? $structure['blog_posts_per_page'] : 10;
     $blog_cats = array();
     foreach($blog_category as $blog_cat) {
          $blog_cats[] = $blog_cat->slug;
     }
?>

<div class="blogs">
     <div class="container-fluid">
          <?php if($blog_name): ?>
               <div class="row">
                    <div class="col-12">
                         <h2><?= $blog_name; ?></h2>
                    </div>
               </div>
          <?php endif; ?>
          <div class="row">
               <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $query = new WP_Query( array(
                         'post_type' => $blog_type,
                         'category_name' => implode($blog_cats, ','),
                         'posts_per_page' => $blog_posts_per_page,
                         'paged' => $paged
                    ) );
               ?>

               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="col-sm-6 posts__item-outer">
                         <div class="posts__item">
                              <?php if(has_post_thumbnail()): ?>
                              <div class="posts__item-image">
                                   <?= get_the_post_thumbnail(); ?>
                              </div>
                              <?php endif; ?>
                              <div class="posts__item-container">
                                   <?php if($blog_type === 'events'): ?>
                                        <h2 class="posts__item-title"><?php the_title(); ?></h2>
                                        <?php if($start_date = get_field('event_start_date')) : ?>
                                             <div class="mb--0">
                                                  <date><?= $start_date; ?></date>
                                                  <?php if($end_date = get_field('event_end_date')): ?>
                                                       - <date><?= $end_date; ?></date>
                                                  <?php endif; ?>
                                             </div>
                                        <?php endif; ?>
                                        <?php if($event_location = get_field('event_location')): ?>
                                             <p><?= $event_location; ?></p>
                                        <?php endif; ?>
                                   <?php else: ?>
                                        <div class="posts__item-date">
                                             <?= get_the_date(); ?>
                                        </div>
                                        <h2 class="posts__item-title"><a href="<?php the_permalink(); ?>" title="Read"><?php the_title(); ?></a></h2>
                                        <p><?= wp_trim_words(get_the_content(), 18); ?></p>
                                        <a href="<?php the_permalink(); ?>" title="Read">Read More <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
                                   <?php endif; ?>
                              </div>
                         </div>
                    </div>

               <?php endwhile; ?>

                    <div class="col-12">
                         <div class="pagination">
                              <?= paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $query->max_num_pages,
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => false,
                                        // 'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                                        // 'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                   ) );
                              ?>
                         </div>
                    </div>


               <?php wp_reset_postdata(); ?>

               <?php else : ?>
                    <div class="col-12">
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    </div>
               <?php endif; ?>
          </div>
     </div>
</div>