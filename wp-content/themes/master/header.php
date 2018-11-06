<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"/>

    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/extended.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.min.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>

  <div class="nav__overlay">

    <div id="close" class="mobileToggle"></div>
    
    <a href="<?php bloginfo('url'); ?>" id="logo" alt="Dark Square Bishop"></a>
    
    <ul>
      <?php wp_nav_menu( array( 'menu' => 'navigation', 'sort_column' => 'menu_order', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
    </ul>

  </div>

  <header>
    <div class='header__inner'>

        <a class="header__logo__link" href="<?php bloginfo('url'); ?>">
          <img class='header__logo__image' src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Dark Square Bishop"/>
        </a>

        <nav class='header__nav'>
          <ul>
            <?php wp_nav_menu( array( 'menu' => 'navigation', 'sort_column' => 'menu_order', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
          </ul>
        </nav>

        <div class="navicon mobileToggle"></div>

        <div class='clear'></div>

    </div>
  </header>

  <main class="main">