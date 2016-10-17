<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php if (get_post_type() == "post" ) {
      echo "<h1>" . $post->post_title . "</h1>";
      echo "<p>" . the_date() . "</p>";
      the_content();
  } ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
