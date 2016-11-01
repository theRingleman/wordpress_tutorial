<?php

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5');
  add_theme_support( 'menus' );

  add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary Navigation', 'wordpress-tutorial' ) );
						register_nav_menu( 'posts', __( 'Posts', 'wordpress-tutorial' ) );
						register_nav_menu( 'categories', __( 'Categories', 'wordpress-tutorial' ) );
        }
    endif;

  function get_current_year(){
    $this_year = Date("Y");
    return $this_year;
  }

  function get_all_pages() {
    $pages = get_pages();

    foreach ( $pages as $page ) {
      $option = '<a href="' . get_page_link( $page->ID ) . '">';
      $option .= $page->post_title;
      $option .= '</a> <hr>';
      echo $option;
    }
  }

  function get_all_posts(){
    $args = array('posts_per_page' => 10);

    $post_data = get_posts($args);

    foreach($post_data as $post){
      echo get_the_title() . "<hr>";
    }
  }

 ?>
