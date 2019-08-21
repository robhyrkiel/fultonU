<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url()?>"><strong>Fulton</strong> University</a></h1>
      
      <a href="<?php echo esc_url(site_url('/search'));?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
      
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
        <?php 
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
            ));
          ?>
          <!-- <ul>
            <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class=current-menu-item' ?><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li><a href="#">Blog</a></li>
          </ul> -->
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <a href="<?php echo esc_url(site_url('/search'));?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </header>