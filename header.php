<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-branding">
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
    <p class="site-description"><?php bloginfo('description'); ?></p>
  </div>

  <nav class="main-navigation">
    <div class="nav-left">
      <a href="<?php echo esc_url(home_url('/https://www.google.com/search?q=real+estate&rlz=1C1CHBF_enIN1125IN1125&oq=real+estate&gs_lcrp=EgZjaHJvbWUyDAgAEEUYORixAxiABDIMCAEQIxgnGIAEGIoFMgwIAhAjGCcYgAQYigUyCggDEAAYkgMYgAQyDQgEEAAYkgMYgAQYigUyCggFEAAYsQMYgAQyBwgGEAAYgAQyEAgHEAAYgwEYsQMYyQMYgAQyBwgIEAAYgAQyCggJEAAYsQMYgATSAQk3NDM3ajBqMTWoAgiwAgHxBZltnEnIoiQn&sourceid=chrome&ie=UTF-8')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
    </div>

    <div class="nav-center">
      <?php get_search_form(); ?>
    </div>

    <div class="nav-right">
      <a class="register-link" href="#">Register</a>
    </div>
  </nav>
</header>
