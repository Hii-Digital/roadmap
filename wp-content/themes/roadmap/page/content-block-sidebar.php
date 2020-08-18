<?php
     $cb_content = $structure['content_block_content'];
     $cb_link = $structure['content_block_link'];
     $cb_reverse = $structure['content_block_reverse'] ? 'flex-row-reverse' : '';
     $cb_sidebar_content = $structure['sidebar_content'];
     $cb_font_size = $structure['content_block_font_size'] ? 'text--' .$structure['content_block_font_size'] : 'text--default';
?>

<div class="content-block content-block--sidebar <?= $cb_font_size; ?>">
     <div class="container-fluid">
          <div class="row <?= $cb_reverse; ?> align-items-center">
               <div class="col-md-8">
                    <div class="content-block__content">
                         <?= $cb_content; ?>
                         <?php if($cb_link): ?>
                              <a class="button button__primary text--uppercase text--md" href="<?= $cb_link['url']; ?>" target="<?= $cb_link['target']; ?>"><?= $cb_link['title']; ?></a>
                         <?php endif; ?>
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="content-block__sidebar">
                         <?= $cb_sidebar_content; ?>
                    </div>
               </div>
          </div>
     </div>
</div>