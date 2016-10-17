<?php
  echo "<h1>" . $post->post_title . "</h1>";
  echo "<p>" . the_date() . "</p>";
  echo "<p>" . the_category(", ") . "</p>";
  the_content();
 ?>
