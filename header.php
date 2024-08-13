<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HEHPGV2H7B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HEHPGV2H7B');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/9dcf5e9e11.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>

  <style>
    :root {
      --lct-header-height: 80px;
      --lct-section-padding: max(5%, 40px);
      --lct-background-color: #222222;
      --lct-html-scale: 62.5%;
      --lct-font-family: 'Century Gothic', sans-serif;
      --lct-font-size-body: 1.6rem;
      --lct-color-accent: #1472ba;
      --lct-button-background: #FFFFFF;
      --lct-button-text: #000000;
      --lct-color-heading: #FFFFFF;
      --lct-color-body: #FFFFFF;

      --lct-color-bg-accent: #e0d2c9;

      --lct-color-dark-text: #FFFFFF;
      --lct-color-light-text: #222222;

      --lct-gap-1: .5em;
      --lct-gap-2: .75em;
      --lct-gap-3: 1em;

      --lct-transition-ease: cubic-bezier(0.33, 1, 0.68, 1);
      --lct-transition-timing-long: 1s;

  </style>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<nav id="navbar" class="navbar navbar-expand-lg <?= (is_front_page()) ? 'navbar-dark' : 'navbar-light' ?>">
  <div class="container">

    <?php b4st_navbar_brand(); ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">

      <?php b4st_nav(); ?>

      <?php //b4st_navbar_search();?>    
      
    </div>

  </div>
</nav>

<?php b4st_navbar_after();?>