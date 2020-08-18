<?php
     $cf_content = $structure['content_form_content'];
     $cf_form_content = $structure['content_form_form_content'];
     $cb_form = $structure['content_form_form'];
     $shadow = get_field('shadow', 'option');
?>

<div class="content-form">
     <div class="container-fluid container-fluid--small">
          <div class="row align-items-center">
               <div class="col-md-6">
                    <div class="content-form__content">
                         <?= $cf_content; ?>
                    </div>
               </div>
               <div class="col-md-1">
                    <div class="shadow-img">
                         <img src="<?= $shadow['url']; ?>" />
                    </div>
               </div>
               <div class="col-md-5">
                    <div class="content-form__form">
                         <?= $cf_form_content; ?>
                         <?= $cb_form; ?>
                    </div>
               </div>
          </div>
     </div>
</div>