<?php
  // Advanced Custom Fields

  $story_gold_title = get_field("story_gold_title");
  $story_black_title = get_field("story_black_title");
  $story_description = get_field("story_description");
  $story_image = get_field("story_image");
?>

<section class="our-story row section-padding">
    <div class="col-sm-4 col-sm-offset-2">
      <h2 class="section-heading smoke-heading"><span class="cursive"><?php echo $story_gold_title; ?></span> <?php echo $story_black_title; ?></h2>
      <p><?php echo $story_description; ?></p>
      <button>Learn More</button>
    </div>

    <div class="col-sm-4 col-sm offset 1">
      <div class="thumbnail">
        <?php if(!empty($story_image)) : ?>
          <img src="<?php echo $story_image['url']; ?>" alt="<?php echo $story_image['alt']; ?>">
        <?php else : ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hideaway_snacks.png" alt="cupcakes">
        <?php endif ?>
      </div>
    </div>
</section>
