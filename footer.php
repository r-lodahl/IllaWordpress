<footer class="mt-5 row-border-top paperback-small no-padding">

  <div class="container-responsive">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'footer-menu',
          'container'       => 'div',
	  'container_class' => 'row',
          'items_wrap'      => '%3$s',
          'depth'           => 1,
          'walker'          => new Col_Nav_Walker
        ) );
      ?>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
