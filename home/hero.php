<?php
  // Advanced Custom Fields

  $hero_logo = get_field("hero_logo");
  $hero_text = get_field("hero_text");
?>

<section class="hero row">
  <?php get_template_part("navigation"); ?>

  <div class="hero-logo">
    <h1><?php echo $hero_text ?></h1>
    <?php if(!empty($hero_logo)) : ?>
      <img src="<?php echo $hero_logo['url']; ?>" alt="<?php echo $hero_logo['alt']; ?>" class="center-block">
    <?php endif ?>
  </div>
</section>
