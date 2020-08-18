<?php
     $callout_background = $structure['callout_background'];
     $callout_content = $structure['callout_content'];
?>

<div class="callout callout--<?= $callout_background; ?>">
     <div class="container">
          <div class="row">
               <div class="col-12">
                    <?= $callout_content; ?>
               </div>
          </div>
     </div>
</div>