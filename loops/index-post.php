<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article class="mb-5" role="article" id="post_<?php the_ID()?>" <?php post_class(); ?> >
  <header>
    <h2>
      <a class="text-illarion"  href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
    <p class="text-muted">
      <i class="far fa-calendar-alt"></i>&nbsp;<?php illarion_post_date(); ?>&nbsp;|
      <i class="far fa-user"></i>&nbsp; <?php _e('By ', 'illarion'); the_author_posts_link(); ?>&nbsp;|
      <i class="far fa-comment"></i>&nbsp;<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'illarion' ), number_format_i18n( get_comments_number() ) ); ?></a>
    </p>
  </header>
  <main>
    <?php the_post_thumbnail(); ?>

    <?php if ( has_excerpt( $post->ID ) ) {
  	the_excerpt();
    ?><p><a href="<?php the_permalink(); ?>">
    	<?php _e( '&hellip; ' . __('Continue reading', 'illarion' ) . ' <i class="fas fa-arrow-right"></i>', 'illarion' ) ?>
      </a></p>
  	<?php } else {
  	 the_content( __( '&hellip; ' . __('Continue reading', 'illarion' ) . ' <i class="fas fa-arrow-right"></i>', 'illarion' ) );
	} ?>
  </main>
</article>
