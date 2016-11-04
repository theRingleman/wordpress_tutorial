<?php if (is_front_page()) {
  echo '<div class="navigation">';
} else {
  echo '<div class="primary-navigation">';
} ?>
  <nav class="container navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <?php /* Primary navigation */
          wp_nav_menu( array(
        'menu'       => 'primary',
        'depth'      => 2,
        'container'  => false,
        'menu_class' => 'nav navbar-nav navbar-right',
        'walker'     => new wp_bootstrap_navwalker())
        );
      ?>
    </div>
  </nav>
</div>
