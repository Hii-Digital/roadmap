<?php
     $minimum_height = $structure['minimum_height'];
     $minimum_height_mobile = $structure['minimum_height_mobile'];
     $left_column = $structure['left_column'];
     $right_column = $structure['right_column'];
?>

<style>
     .content-block__two .col-md-6 {
          min-height: <?= $minimum_height_mobile ? $minimum_height_mobile : 0; ?>px;
     }
     @media screen and (min-width: 768px) {
          .content-block__two .col-md-6 {
               min-height: <?= $minimum_height ? $minimum_height : 0; ?>px;
          }
     }
</style>

<div class="content-block content-block__two">
     <div class="container-fluid container-fluid--full">
          <div class="row align-items-center">
               <div class="col-md-6 content-block__two-outer" style="background-image:url(<?= $left_column['background_image']['sizes']['large']; ?>)">
                    <div class="content-block__two-inner <?= $left_column['block_position'] ? 'content-block__two-inner--'.$left_column['block_position'] : ''; ?>">
                         <div class="content-block__two-content">
                              <?php if($left_column['button'] && $left_column['button_type'] === 'link'): ?>
                                   <a class="button button__primary" href="<?= $left_column['button']['url']; ?>" target="<?= $left_column['button']['target']; ?>"><?= $left_column['button']['title']; ?></a>
                              <?php endif; ?>
                              <?php if($left_column['button_type'] === 'modal'): ?>
                                   <button class="button button__primary" data-toggle="modal" data-target="#<?= $left_column['modal_name']; ?>"><?= $left_column['button_modal_text']; ?></button>
                                   <div class="modal fade" id="<?= $left_column['modal_name']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $left_column['modal_name']; ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                  <button type="button" class="button button__close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <div class="modal-body">
                                                       <?= $left_column['modal_content']; ?>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              <?php endif; ?>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 content-block__two-outer" style="background-image:url(<?= $right_column['background_image']['sizes']['large']; ?>)">
                    <div class="content-block__two-inner <?= $right_column['block_position'] ? 'content-block__two-inner--'.$right_column['block_position'] : ''; ?>">
                         <div class="content-block__two-content">
                              <?php if($right_column['button'] && $right_column['button_type'] === 'link'): ?>
                                   <a class="button button__primary" href="<?= $right_column['button']['url']; ?>" target="<?= $right_column['button']['target']; ?>"><?= $right_column['button']['title']; ?></a>
                              <?php endif; ?>
                              <?php if($right_column['button_type'] === 'modal'): ?>
                                   <button class="button button__primary" data-toggle="modal" data-target="#<?= $right_column['modal_name']; ?>"><?= $right_column['button_modal_text']; ?></button>
                                   <div class="modal fade" id="<?= $right_column['modal_name']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $right_column['modal_name']; ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                  <button type="button" class="button button__close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <div class="modal-body">
                                                       <?= $right_column['modal_content']; ?>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              <?php endif; ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>