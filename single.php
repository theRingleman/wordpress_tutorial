<?php get_header(); ?>

<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php get_template_part("loop"); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
