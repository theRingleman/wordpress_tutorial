<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php

    if (get_post_type() == "post" ) {
      get_template_part("post/layout");
    } elseif (get_post_type() == "page") {
      get_template_part("page/layout");
    }

  ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
