<?php
  wp_footer();
 ?>

  <footer class="footer container-fluid">
    <div class="row">
      <div class="col-sm-3 col-sm-offset-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Hideaway Cafe">
      </div>

      <div id="footer-widget-1">

      	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-1')) : else : ?>

      	<div class="pre-widget col-sm-2">
      		<p class="footer-heading"><strong>Widgetized Area</strong></p>
      		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
      	</div>

      	<?php endif; ?>

      </div>

      <div id="footer-widget-2">

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-2')) : else : ?>

        <div class="pre-widget col-sm-2">
          <p class="footer-heading"><strong>Widgetized Area</strong></p>
          <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </div>

        <?php endif; ?>

      </div>

      <div id="footer-widget-3">

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-3')) : else : ?>

        <div class="pre-widget col-sm-2">
          <p class="footer-heading"><strong>Widgetized Area</strong></p>
          <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </div>

        <?php endif; ?>

      </div>

    </div>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
