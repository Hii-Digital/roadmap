<?php
     $footer_disclaimer_text = get_field('footer_disclaimer_text', 'option');
     $disclaimer_secondary_text = get_field('disclaimer_secondary_text', 'option');
     $contact_info = get_field('contact_info', 'option');
     $social = get_field('social', 'option');
     $extra_content = get_field('extra_content', 'option');
     $additional_scripts = get_field('additional_scripts', 'option');
?>

<footer class="footer-nav">
     <div class="container-fluid">
          <div class="row">
               <?php if($contact_info): ?>
                    <div class="col-md-3">
                         <div class="footer-nav__contact">
                              <h2 class="text--xl heading--secondary text--uppercase">Contact</h2>
                              <?php if($contact_info['email']): ?>
                                   <p>Email: <a href="mailto:<?= $contact_info['email']; ?>"><?= $contact_info['email']; ?></a></p>
                              <?php endif; ?>
                              <?php if($contact_info['phone']): ?>
                                   <p>Phone: <a href="tel:+1<?= $contact_info['phone']; ?>"><?= $contact_info['phone']; ?></a></p>
                              <?php endif; ?>
                              <?php if($contact_info['address']): ?>
                                   <p>Address: <a href="https://www.google.com/maps/place/<?= $contact_info['address']; ?>"><?= $contact_info['address']; ?></a></p>
                              <?php endif; ?>
                         </div>
                    </div>
               <?php endif; ?>

               <div class="offset-md-1"></div>

               <?php if($social): ?>
                    <div class="col-md-3">
                         <div class="footer-nav__social">
                              <h2 class="text--xl heading--secondary text--uppercase">Social</h2>
                              <ul class="list--inline list--unstyled">
                                   <?php if($social['facebook']): ?>
                                        <li><a href="<?= $social['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                   <?php endif; ?>
                                   <?php if($social['twitter']): ?>
                                        <li><a href="<?= $social['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                   <?php endif; ?>
                                   <?php if($social['youtube']): ?>
                                        <li><a href="<?= $social['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                   <?php endif; ?>
                                   <?php if($social['linkedin']): ?>
                                        <li><a href="<?= $social['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                   <?php endif; ?>
                                   <?php if($social['rss']): ?>
                                        <li><a href="<?= $social['rss']; ?>" target="_blank"><i class="fas fa-rss"></i></a></li>
                                   <?php endif; ?>
                              </ul>
                         </div>
                    </div>
               <?php endif; ?>

               <div class="offset-md-1"></div>

               <?php if($extra_content): ?>
                    <div class="col-md-3">
                         <div class="footer-nav__extra">
                              <?php if($extra_content['content']): ?>
                                   <?= $extra_content['content']; ?>
                              <?php endif; ?>
                         </div>
                    </div>
               <?php endif; ?>
          </div>
     </div>
     <div class="container-fluid">
          <div class="row">
               <div class="col-12 disclaimer">
                    <p>&copy; <?= date('Y'); ?> <?= $footer_disclaimer_text; ?></p>
                    <div class="footer-nav__main">
                         <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
                    </div>
                    <p><?= $disclaimer_secondary_text; ?></p>
               </div>
          </div>
     </div>
</footer>

<?php wp_footer(); ?>
<?= $additional_scripts; ?>

</body>
</html>