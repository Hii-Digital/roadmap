<?php
     $google_tag = get_field('google_tag_manager_id', 'option');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php if($google_tag) : ?>
     <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $google_tag; ?>"></script>
     <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', <?= $google_tag; ?>);
     </script>
<?php endif; ?>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
     <script async type="application/json" src="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Rubik:wght@300;400;700&display=swap"></script>
</head>
<body <?php body_class(); ?> style="display: none;">