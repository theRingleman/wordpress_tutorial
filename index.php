<?php get_header(); ?>


<div class="wrapper">
  <div class="container">

    <h1 class="text-center">Welcome to my practice WordPress theme!</h1>

    <div class="row">
      <div class="col-sm-4">
        <p class="text-center">This is my first awesome column</p>
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
