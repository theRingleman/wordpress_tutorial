<div class="col-sm-4 sidebar">
  <?php get_search_form(); ?>

  <hr>

  <?php
    $args = array('posts_per_page' => 5);

    $post_data = get_posts($args);

    foreach($post_data as $post){
      $link = get_permalink();
       echo "<a href='$link'>" . get_the_title() . "</a><hr>";
    }
   ?>
</div>
