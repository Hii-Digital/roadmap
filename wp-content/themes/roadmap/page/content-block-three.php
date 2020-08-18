<?php
     $minimum_height = $structure['minimum_height'];
     $minimum_height_mobile = $structure['minimum_height_mobile'];
     $left_column = $structure['left_column'];
     $right_column = $structure['right_column'];
     $middle_column = $structure['middle_column'];
?>

<style>
     .content-block__three .col-md-4 {
          min-height: <?= $minimum_height_mobile ? $minimum_height_mobile : 0; ?>px;
     }
     @media screen and (min-width: 768px) {
          .content-block__three .col-md-4 {
               min-height: <?= $minimum_height ? $minimum_height : 0; ?>px;
          }
     }
</style>

<div class="content-block content-block__three">
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-4 content-block__two-outer" style="background-image:url(<?= $left_column['background_image']['sizes']['large']; ?>)">
                    <div class="content-block__two-inner <?= $left_column['block_position'] ? 'content-block__two-inner--'.$left_column['block_position'] : ''; ?>">
                         <div class="content-block__two-content">
                              <?= $left_column['content']; ?>
                              <?php if($left_column['button']): ?>
                                   <a class="button button__primary" href="<?= $left_column['button']['url']; ?>" target="<?= $left_column['button']['target']; ?>"><?= $left_column['button']['title']; ?></a>
                              <?php endif; ?>
                         </div>
                    </div>
               </div>
               <div class="col-md-4 content-block__two-outer" style="background-image:url(<?= $middle_column['background_image']['sizes']['large']; ?>)">
                    <div class="content-block__two-inner <?= $left_column['block_position'] ? 'content-block__two-inner--'.$middle_column['block_position'] : ''; ?>">
                         <div class="content-block__two-content">
                              <?= $middle_column['content']; ?>
                              <?php if($middle_column['button']): ?>
                                   <a class="button button__primary" href="<?= $middle_column['button']['url']; ?>" target="<?= $middle_column['button']['target']; ?>"><?= $middle_column['button']['title']; ?></a>
                              <?php endif; ?>
                         </div>
                    </div>
               </div>
               <div class="col-md-4 content-block__two-outer" style="background-image:url(<?= $right_column['background_image']['sizes']['large']; ?>)">
                    <div class="content-block__two-inner <?= $right_column['block_position'] ? 'content-block__two-inner--'.$right_column['block_position'] : ''; ?>">
                         <div class="content-block__two-content">
                              <?= $right_column['content']; ?>
                              <?php if($right_column['button']): ?>
                                   <a class="button button__primary" href="<?= $right_column['button']['url']; ?>" target="<?= $right_column['button']['target']; ?>"><?= $right_column['button']['title']; ?></a>
                              <?php endif; ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>