<footer class="mt-5 bg-dark">

  <div class="container-responsive">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

    <div class="row pt-3">
	  <div class="col">
        <p class="text-center"><a href="<?php echo home_url('/'); ?>">Contact</a></p>
      </div>
	  <div class="col">
        <p class="text-center"><a href="<?php echo home_url('/'); ?>">Code of Conduct</a></p>
      </div>
	  <div class="col">
        <p class="text-center"><a href="<?php echo home_url('/'); ?>">Privacy Policy</a></p>
      </div>
    </div>

  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
