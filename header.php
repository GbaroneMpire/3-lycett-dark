<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

  <style>
    :root {
      --lct-header-height: 80px;
      --lct-html-scale: 62.5%;
      --lct-font-family: 'Poppins', sans-serif;
      --lct-font-size-body: 1.6rem;
      --lct-button-background: #FFFFFF;
      --lct-button-text: #000000;
      --lct-color-heading: #000000;

      --lct-color-bg-accent: #e0d2c9;
    }
  </style>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<nav id="navbar" class="navbar navbar-expand-md navbar-light">
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