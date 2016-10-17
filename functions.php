<?php

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
