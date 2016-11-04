<?php
  // Advanced Custom Fields

  $menu_gold_title = get_field("menu_gold_title");
  $menu_white_title = get_field("menu_white_title");
  $menu_sub_title = get_field("menu_sub_title");

  $menu_item_title_1 = get_field("menu_item_title_1");
  $menu_item_price_1 = get_field("menu_item_price_1");
  $menu_item_description_1 = get_field("menu_item_description_1");

  $menu_item_title_2 = get_field("menu_item_title_2");
  $menu_item_price_2 = get_field("menu_item_price_2");
  $menu_item_description_2 = get_field("menu_item_description_2");

  $menu_item_title_3 = get_field("menu_item_title_3");
  $menu_item_price_3 = get_field("menu_item_price_3");
  $menu_item_description_3 = get_field("menu_item_description_3");

  $menu_item_title_4 = get_field("menu_item_title_4");
  $menu_item_price_4 = get_field("menu_item_price_4");
  $menu_item_description_4 = get_field("menu_item_description_4");

  $menu_item_title_5 = get_field("menu_item_title_5");
  $menu_item_price_5 = get_field("menu_item_price_5");
  $menu_item_description_5 = get_field("menu_item_description_5");

  $menu_item_title_6 = get_field("menu_item_title_6");
  $menu_item_price_6 = get_field("menu_item_price_6");
  $menu_item_description_6 = get_field("menu_item_description_6");

  $menu_item_title_7 = get_field("menu_item_title_7");
  $menu_item_price_7 = get_field("menu_item_price_7");
  $menu_item_description_7 = get_field("menu_item_description_7");

  $menu_item_title_8 = get_field("menu_item_title_8");
  $menu_item_price_8 = get_field("menu_item_price_8");
  $menu_item_description_8 = get_field("menu_item_description_8");
?>

<section class="row menu-section section-padding">
  <h2 class="text-center section-heading"><span class="cursive menu"><?php echo $menu_gold_title; ?></span> <?php echo $menu_white_title; ?></h2>
  <h3 class="text-center"><?php echo $menu_sub_title; ?></h3>

  <div class="col-sm-4 col-sm-offset-2">
    <dl>
      <dt><?php echo $menu_item_title_1; ?> <span class="menu-price"><?php echo $menu_item_price_1; ?></span></dt>
      <dd><?php echo $menu_item_description_1; ?></dd>

      <dt><?php echo $menu_item_title_2; ?> <span class="menu-price"><?php echo $menu_item_price_2; ?></span></dt>
      <dd><?php echo $menu_item_description_2; ?></dd>

      <dt><?php echo $menu_item_title_3; ?> <span class="menu-price"><?php echo $menu_item_price_3; ?></span></dt>
      <dd><?php echo $menu_item_description_3; ?></dd>

      <dt><?php echo $menu_item_title_4; ?> <span class="menu-price"><?php echo $menu_item_price_4; ?></span></dt>
      <dd><?php echo $menu_item_description_4; ?></dd>
    </dl>
  </div>

  <div class="col-sm-4">
    <dl>
      <dt><?php echo $menu_item_title_5; ?> <span class="menu-price"><?php echo $menu_item_price_5; ?></span></dt>
      <dd><?php echo $menu_item_description_5; ?></dd>

      <dt><?php echo $menu_item_title_6; ?> <span class="menu-price"><?php echo $menu_item_price_6; ?></span></dt>
      <dd><?php echo $menu_item_description_6; ?></dd>

      <dt><?php echo $menu_item_title_7; ?> <span class="menu-price"><?php echo $menu_item_price_7; ?></span></dt>
      <dd><?php echo $menu_item_description_7; ?></dd>

      <dt><?php echo $menu_item_title_8; ?> <span class="menu-price"><?php echo $menu_item_price_8; ?></span></dt>
      <dd><?php echo $menu_item_description_8; ?></dd>
    </dl>
  </div>
</section>
