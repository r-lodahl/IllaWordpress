<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  @import url("https://use.typekit.net/tdi0uwr.css");
</style>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md navbar-default sticky-top paperback-small row-border-bottom no-padding px-4">
  <div class="container-responsive">

    <a class="navbar-brand no-padding" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new illarion_walker_nav_menu()
        ) );
      ?>

      <ul id="menu-fixed-navigation" class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li id="menu-item-discord" class="menu-item menu-item-type-post_type menu-item-object-page nav-item nav-item-discord">
      <a class="nav-link" target="_blank" rel="noopener noreferrer" href="https://discord.gg/b4rJcrq"><i class="fab fa-discord fa-flip-horizontal"></i></a>
      </li>
      <li id="menu-item-patreon" class="menu-item menu-item-type-post_type menu-item-object-page nav-item nav-item-patreon">
      <a class="nav-link" target="_blank" rel="noopener noreferrer" href="https://www.patreon.com/"><i class="fab fa-patreon"></i></a>
      </li>
      </ul>
    </div>

  </div>
</nav>
