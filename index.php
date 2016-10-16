<?php get_header(); ?>


<div class="wrapper">
  <div class="container">

    <h1 class="text-center">Welcome to my practice WordPress theme!</h1>

    <div class="row">
      <div class="col-sm-4">
        <?php
          $pages = get_pages();

          foreach ( $pages as $page ) {
          	$option = '<a href="' . get_page_link( $page->ID ) . '">';
          	$option .= $page->post_title;
          	$option .= '</a> <hr>';
          	echo $option;
          }
         ?>
      </div>

      <div class="col-sm-4">
        <?php
          $args = array('posts_per_page' => 3);

          $post_data = get_posts($args);

          foreach($post_data as $post){
            echo get_the_title() . "<hr>";
          }
         ?>
      </div>

      <?php get_sidebar(); ?>
    </div>

  </div>
</div>


<?php get_footer(); ?>
