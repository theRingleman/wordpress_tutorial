<?php
  wp_footer();

  // Advanced Custom Fields

  $footer_logo = get_field("footer_logo");
 ?>

  <footer class="footer container-fluid">
    <div class="row">
      <div class="col-md-3 col-md-offset-2">
        <?php if(!empty($footer_logo)) : ?>
          <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>">
        <?php else : ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Hideaway Cafe">
        <?php endif ?>
      </div>

      <div id="footer-widget-1">

      	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-1')) : else : ?>

      	<div class="pre-widget col-md-2">
      		<p class="footer-heading"><strong>Widgetized Area</strong></p>
      		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
      	</div>

      	<?php endif; ?>

      </div>

      <div id="footer-widget-2">

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-2')) : else : ?>

        <div class="pre-widget col-md-2">
          <p class="footer-heading"><strong>Widgetized Area</strong></p>
          <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </div>

        <?php endif; ?>

      </div>

      <div id="footer-widget-3">

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-3')) : else : ?>

        <div class="pre-widget col-md-2">
          <p class="footer-heading"><strong>Widgetized Area</strong></p>
          <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </div>

        <?php endif; ?>

      </div>

    </div>
  </footer>

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
