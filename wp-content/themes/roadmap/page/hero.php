<?php
     $hero_content = $structure['page_snippet'] ? $structure['page_snippet'] : '';
     $hero_replace = $structure['replace_title'];
     $hero_title = $structure['custom_title'] ? $structure['custom_title'] : get_the_title(get_the_ID());
     $hero_title_image = $structure['custom_image'];
?>

<div class="hero">
     <?php if($hero_replace): ?>
          <h1 class="screen-reader-text"><?= $hero_title; ?></h1>
          <img alt="Decorative image of the page title" src="<?= $hero_title_image['url']; ?>" />
          <div class="container-fluid">
               <div class="row align-items-center">
                    <div class="col-md-12 ">
                         <?= $hero_content; ?>
                    </div>
               </div>
          </div>
     <?php else: ?>
          <div class="container-fluid hero__container">
               <div class="row align-items-center">
                    <div class="col-md-12 ">
                         <h1><?= $hero_title; ?></h1>
                         <?= $hero_content; ?>
                    </div>
               </div>
          </div>
     <?php endif; ?>
</div>