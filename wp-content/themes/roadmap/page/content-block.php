<?php
     $cb_font_size = $structure['content_block_font_size'] ? 'text--' .$structure['content_block_font_size'] : 'text--default';
     $cb_image = $structure['content_block_image'];
     $cb_video = $structure['content_block_video'];
     $cb_title = $structure['content_block_title'];
     $cb_content = $structure['content_block_content'];
     $cb_link = $structure['content_block_link'];
     $cb_reverse = $structure['content_block_reverse'] ? 'flex-row-reverse' : '';
?>

<div class="content-block <?= $cb_font_size; ?>">
     <div class="container-fluid">
          <div class="row <?= $cb_reverse; ?> align-items-center">
               <?php if($cb_image || $cb_video ): ?>
               <div class="col-md-6">
                    <?php if($cb_video) : ?>
                         <div class="content-block__video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe class="embed-responsive-item" src="<?= $cb_video; ?>"></iframe>
                              </div>
                         </div>    
                    <?php else : ?>
                         <div class="content-block__image">
                              <img src="<?= $cb_image['sizes']['large']; ?>" />
                         </div>
                    <?php endif; ?>
               </div>
               <div class="col-md-6">
               <?php else: ?>
               <div class="col-md-12">
               <?php endif; ?>
                    <div class="content-block__content">
                         <?php if($cb_title): ?>
                              <h2 class="title-block title-block__decor title-block__decor--small text-left"><?= $cb_title; ?></h2>
                         <?php endif; ?>
                         <?= $cb_content; ?>
                         <?php if($cb_link): ?>
                              <a class="button button__primary text--uppercase text--md" href="<?= $cb_link['url']; ?>" target="<?= $cb_link['target']; ?>"><?= $cb_link['title']; ?></a>
                         <?php endif; ?>
                    </div>
               </div>
          </div>
     </div>
</div>