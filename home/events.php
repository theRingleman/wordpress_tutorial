<?php
  // Advanced Custom Fields

  $event_gold_title = get_field("event_gold_title");
  $event_black_title = get_field("event_black_title");

  $event_title_1 = get_field("event_title_1");
  $event_sub_title_1 = get_field("event_sub_title_1");
  $event_image_1 = get_field("event_image_1");

  $event_title_2 = get_field("event_title_2");
  $event_sub_title_2 = get_field("event_sub_title_2");
  $event_image_2 = get_field("event_image_2");

  $event_title_3 = get_field("event_title_3");
  $event_sub_title_3 = get_field("event_sub_title_3");
  $event_image_3 = get_field("event_image_3");
?>

<section class="row event-section section-padding ">
  <h2 class="section-heading smoke-heading text-center events-heading"><span class="cursive cursive-events"><?php echo $event_gold_title; ?></span> <?php echo $event_black_title; ?></h2>

    <div class="col-sm-3 col-sm-offset-2 events-pictures-main-alignment events-pictures">
      <?php if(!empty($event_image_1)) : ?>
        <img src="<?php echo $event_image_1['url']; ?>" alt="<?php $event_image_1["alt"]; ?>">
      <?php else : ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hideaway_open_coffee_day.png" alt="coffee cup">
      <?php endif ?>
      <p class="event-text"><span class="linebreak"><?php echo $event_title_1; ?></span> <?php echo $event_sub_title_1; ?></p>
    </div>

    <div class="col-sm-3 events-pictures">
      <?php if(!empty($event_image_1)) : ?>
        <img src="<?php echo $event_image_2['url']; ?>" alt="<?php $event_image_2["alt"]; ?>">
      <?php else : ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hideaway-snacks-small.png" alt="coffee cup">
      <?php endif ?>
      <p class="event-text"><span class="linebreak"><?php echo $event_title_2; ?></span> <?php echo $event_sub_title_2; ?></p>
    </div>

    <div class="col-sm-3 events-pictures">
      <?php if(!empty($event_image_1)) : ?>
        <img src="<?php echo $event_image_3['url']; ?>" alt="<?php $event_image_3["alt"]; ?>">
      <?php else : ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hideaway_happy_hour.png" alt="coffee cup">
      <?php endif ?>
      <p class="event-text"><span class="linebreak"><?php echo $event_title_3; ?></span> <?php echo $event_sub_title_3; ?></p>
    </div>

</section>
