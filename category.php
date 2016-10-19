<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>Category: <?php echo single_cat_title(); ?></h2>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br>
        <p>Published on <?php echo get_the_date(); ?></p>
        <p>Published by <?php the_author(); ?></p>
        <?php the_excerpt(); ?>
        <hr>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
