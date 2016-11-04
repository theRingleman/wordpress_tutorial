<?php
  // Advanced Custom Fields

  $barista_gold_title = get_field("barista_gold_title");
  $barista_white_title = get_field("barista_white_title");
  $barista_description = get_field("barista_description");
  $barista_disclaimer = get_field("barista_disclaimer");
?>

<section class="row barista-section section-padding">
  <h2 class="section-heading text-center barista-heading"><span class="cursive cursive-barista"><?php echo $barista_gold_title; ?></span> <?php echo $barista_white_title; ?></h2>

  <div class="col-sm-8 col-sm-offset-2">
    <p class="barista-training-text"><?php echo $barista_description; ?></p>
  </div>

  <div class="col-sm-8 col-sm-offset-2 barista-form">
    <form>
      <div class="col-sm-3">
        <label for="guests"><input type="text" name="guests" placeholder="No. of Guests"></label>
      </div>
      <div class="col-sm-3">
        <label for="time"><input type="text" name="time" placeholder="Time and Date"></label>
      </div>
      <div class="col-sm-3">
        <label for="skill"><input type="number" name="skill" placeholder="Skill Level"></label>
      </div>
      <div class="col-sm-3">
        <label for="submit"><input type="submit" name="submit" value="Check Availabilty"></label>
      </div>
    </form>
  </div>

  <div class="col-sm-8 col-sm-offset-2">
    <p class="training-notice"><?php echo $barista_disclaimer; ?></p>
  </div>
</section>
