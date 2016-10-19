<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">Search Results: <?php echo get_search_query(); ?></h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <br>
          <?php the_excerpt(); ?>
          <hr>

        <?php endwhile; else : ?>
        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
