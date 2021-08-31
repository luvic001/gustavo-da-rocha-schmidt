<?php

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title() ?></title>
  <meta name="theme-color" content="#000">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=<?= GOOGLE_FONTS ?>" rel="stylesheet">
  <?php load_extra_css() ?>

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?= $TEMPLATE_DIRECTORY_URI ?>/style.css">
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jquery-input-mask.min.js"></script>

  <script>
    let site_url = '<?= site_url() ?>';
    let siteLoader = `
    <div class="loading-options">
      <?= svg('lds-ring') ?>
      <p>Carregando</p>
    </div>
    `;
    <?= get_file('js/script.min.js') ?>
  </script>
</head>
<body>
  
  <?php get_modules('popup', 'global') ?>