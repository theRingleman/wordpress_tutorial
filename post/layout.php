<?php get_template_part('navigation'); ?>
<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 content section-padding padding-sides">
        <?php
          echo "<h1 class='post-title'>" . $post->post_title . "</h1>";
          echo "<p>" . the_date() . "</p>";
          echo "<p>" . the_category(", ") . "</p>";
          echo "<p>" . the_tags() . "</p>";
          echo get_the_content();
          comments_template();
         ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
