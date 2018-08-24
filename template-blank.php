<?php
/* 
Template Name: Blank Page
*/
?>

<?php get_header(); ?>

<div class="container-responsive mt-5 text-illarion">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
