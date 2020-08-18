<?php
     $list_block_title = $structure['list_group_title'];
     $list_content = $structure['list_group_description'];
     $list_items = $structure['list_items'];
     $list_shadow = get_field('shadow', 'option');
?>

<div class="list-group__block">
     <div class="container-fluid">
          <div class="row align-items-center">
               <div class="col-md-4">
                    <?php if($list_content): ?>
                         <?= $list_content; ?>
                    <?php endif; ?>
                    <div class="list-group" id="list-tab" role="tablist">
                         <?php if($list_block_title): ?>
                              <h2 class="heading--secondary h5"><?= $list_block_title; ?></h2>
                         <?php endif; ?>
                         <?php foreach($list_items as $index => $item): ?>
                              <?php $num = $index === 0 ? 'active' : ''; ?>
                              <a class="list-group-item list-group-item-action <?= $num; ?>" id="list-<?= convert_into_id($item['list_item_tab']); ?>" data-toggle="list" href="#<?= convert_into_id($item['list_item_tab']); ?>" role="tab" aria-controls="<?= $item['list_item_tab']; ?>"><?= $item['list_item_tab']; ?></a>
                         <?php endforeach; ?>
                    </div>
               </div>
               <div class="col-md-1 d-none d-md-block">
                    <div class="shadow-img">
                         <img src="<?= $list_shadow['url']; ?>" />
                    </div>
               </div>
               <div class="col-md-7">
                    <div class="tab-content" id="nav-tabContent">
                         <?php foreach($list_items as $index => $item): ?>
                              <?php $num = $index === 0 ? 'show active' : ''; ?>
                              <div class="tab-pane fade <?= $num; ?>" id="<?= convert_into_id($item['list_item_tab']); ?>" role="tabpanel" aria-labelledby="list-<?= convert_into_id($item['list_item_tab']); ?>">
                                   <div class="list-group__content">
                                        <div class="row align-items-center">
                                             <?php if( $item['list_item_image'] ): ?>
                                                  <div class="col-md-6">
                                                       <h3><?php if($item['list_item_icon']['title']) : ?><img src="<?= $item['list_item_icon']['url']; ?>" /><?php endif; ?><?= $item['list_item_title']; ?></h3>
                                                       <?= $item['list_item_content']; ?>
                                                       <?php if( $item['list_item_link'] ): ?>
                                                            <a class="title-block title-block__decor title-block__decor--small" href="<?= $item['list_item_link']['url']; ?>" target="<?= $item['list_item_link']['target']; ?>"><span><?= $item['list_item_link']['title']; ?></span></a>
                                                       <?php endif; ?>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="list-group__image">
                                                            <img class="img-fluid" src="<?= $item['list_item_image']['url']; ?>" alt="<?= $item['list_item_image']['title']; ?>" />
                                                       </div>
                                                  </div>
                                             <?php else: ?>
                                                  <div class="col-md-12">
                                                       <h3><?php if($item['list_item_icon']['title']) : ?><img src="<?= $item['list_item_icon']['url']; ?>" /><?php endif; ?><?= $item['list_item_title']; ?></h3>
                                                       <?= $item['list_item_content']; ?>
                                                       <?php if( $item['list_item_link'] ): ?>
                                                            <a class="button button__primary" href="<?= $item['list_item_link']['url']; ?>" target="<?= $item['list_item_link']['target']; ?>"><?= $item['list_item_link']['title']; ?></a>
                                                       <?php endif; ?>
                                                  </div>
                                             <?php endif; ?>
                                        </div>
                                   </div>
                              </div>
                         <?php endforeach; ?>
                    </div>
               </div>
          </div>
     </div>
</div>