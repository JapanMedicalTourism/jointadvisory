<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content=" <?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/favico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . base_path() . drupal_get_path('theme', 'business') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>