<?php

  //update_option('siteurl','http://development/dark-square-bishop/website-2017'); //update site URL
  //update_option('home','http://development/dark-square-bishop/website-2017');

  //delete medium_large thumbnail size
  update_option('medium_large_size_w', '0');
  update_option('medium_large_size_h', '0');

  // start ONLOAD
  add_theme_support( 'menus' );

  add_filter('jpeg_quality', function($arg){return 98;});
  add_action( 'init', 'register_my_menus' );

  add_acf_options();

  add_action('init', 'removeHeadLinks');
  remove_action('wp_head', 'wp_generator');

  add_action( 'wp_enqueue_scripts', 'dsb_scripts' );
  add_action( 'wp_enqueue_scripts', 'dsb_styles' );

  automatic_feed_links(); // Add RSS links to <head> section

  add_action('widgets_init', 'blank_widgets_init');

  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support( 'post-thumbnails' ); // Enable Post Thumbnail Sizes
  add_action('init', 'blank_disable_wp_emojicons');

  // end onLOAD

  // Register and enqueue our scripts
  function dsb_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

      // register jQuery
      wp_deregister_script('jquery');
      wp_register_script(
        'jquery', 
        "https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js",
        '',
        false
      );
      wp_enqueue_script('jquery');

      // register responsify
      wp_deregister_script('responsify');
      wp_register_script(
        'responsify', 
        get_template_directory_uri().'/js/responsify.min.js',
        '',
        false
      );
      wp_enqueue_script('responsify');

      // register our bundle of custo JS
      wp_deregister_script('bundle');
      wp_register_script(
        'bundle', 
         get_template_directory_uri().'/js/bundle.js',
        '',
        false
      );
      wp_enqueue_script('bundle');

    }
  }

  // register and enqueue our styles
  function dsb_styles(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

      wp_register_style(
        'stylesheet', 
        get_template_directory_uri().'/style.css',
        array(), 
        '', 
        false
      ); 
      wp_enqueue_style('stylesheet');

    }
  }
    
    // Clean up the <head>
  function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
  }

  
  // add ACF options page
  function add_acf_options(){
    if( function_exists('acf_add_options_page') ) {
      acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'globals',
      ));
    }
  }

  // Add Menu Function
  function register_my_menus() {
    register_nav_menus(
      array(
        'navigation' => __( 'Navigation' ),
        'footer-site-map' => __( 'Footer Site Map' )
      )
    );
  }

  // Add link highlighing to child post of archive parent in nav menu (add "Title Attribute to parent")
  add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2 );
  function current_type_nav_class($classes, $item) {
      $post_type = get_query_var('post_type');
      if ($item->attr_title != '' && $item->attr_title == $post_type) {
          array_push($classes, 'current-menu-item');
      };
      return $classes;
  }
    
  // Remove emoji junk.
  // The next two functions are by Christine Cooper:
  // http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
  function blank_disable_emojicons_tinymce($plugins) {
      if (is_array($plugins)) {
          return array_diff($plugins, array('wpemoji'));
      } else {
          return array();
      }
  }

  function blank_disable_wp_emojicons() {
    // all actions related to emojis
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');

    // filter to remove TinyMCE emojis
    add_filter('tiny_mce_plugins', 'blank_disable_emojicons_tinymce');
  }

  function blank_widgets_init() {
    register_sidebar(array(
      'name' => 'Sidebar Widgets',
      'id'   => 'sidebar-widgets',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>'
   ));
  }

  function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="pagination"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
  }

?>