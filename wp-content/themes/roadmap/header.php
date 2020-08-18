<?php
     $header_bg_color = get_field('header_background_color', 'option') ? 'bg-color--' . get_field('header_background_color', 'option') : 'bg-color--transparent';
     $header_logo = get_field('logo', 'option');
     $nav_button = get_field('nav_button', 'option');
     get_template_part('components/head'); ?>

<header class="header-nav <?= $header_bg_color; ?> sticky-header">
     <div class="header-nav__container container-fluid">
          <div class="row align-items-center">
               <div class="col-3 header-nav__brand-block">
                    <div class="header-nav__brand">
                         <?php if($header_logo): ?>
                              <a href="<?= home_url(); ?>">
                                   <img src="<?= $header_logo['url']; ?>" alt="<?= $header_logo['title']; ?>" />
                              </a>
                         <?php endif; ?>
                    </div>
               </div>

               <div class="col-9 header-nav__menu-block">
                    <div class="header-nav__menu primary-menu">
                         <nav id="navi_btn" class="primary-menu__ham">
                              <div class="primary-menu__ham-text <?= $nav_button['hide_text'] ? 'screen-reader-text' : ''; ?>"><?= $nav_button['text']; ?></div>
                              <div class="primary-menu__ham-btn">
                                   <span></span>
                              </div>
                         </nav>
                    </div>
                    <?php if (has_nav_menu('primary-menu')) : ?>
                         <div id="navi_menu" class="header-nav__main">
                              <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
                         </div>
                    <?php endif; ?>
               </div>
          </div>
     </div>
</header>