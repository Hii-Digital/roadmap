<?php
     $img_desktop = $structure['desktop_image'];
     $img_mobile = $structure['mobile_image'] ? $structure['mobile_image'] : $img_desktop;
     $alt_tag = $structure['alt_tag'];
?>

<div class="image-block">
     <picture>
          <source media="(min-width:768px)" srcset="<?= $img_desktop['url']; ?>">
          <img src="<?= $img_mobile['url']; ?>" alt="<?= $alt_tag; ?>">
     </picture>
</div>