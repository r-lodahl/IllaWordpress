<?php
/**!
 * Enqueues
 */

if ( ! function_exists('illarion_enqueues') ) {
	function illarion_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css', false, '4.1.0', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('illarion-css', get_template_directory_uri() . '/theme/css/illarion.css', false, null);
		wp_enqueue_style('illarion-css');

		// Scripts

		wp_register_script('font-awesome-config-js', get_template_directory_uri() . '/theme/js/font-awesome-config.js', false, null, null);
		wp_enqueue_script('font-awesome-config-js');

		wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/js/all.js', false, '5.2.0', null);
		wp_enqueue_script('font-awesome');

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

//		wp_enqueue_script('jquery-ui-core');
//		wp_enqueue_script('jquery-ui-menu');
//		wp_enqueue_script('jquery-ui-autocomplete');

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false, '1.14.0', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js', false, '4.1.0', true);
		wp_enqueue_script('bootstrap-js');

		// Slick Enqueue
		if (is_front_page()) {
			wp_register_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css');
			wp_register_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css');
			wp_register_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', null, null, true);

			wp_enqueue_style('slick-css');
			wp_enqueue_style('slick-theme-css');
			wp_enqueue_script('slick-js');
		}

		wp_register_script('illarion-js', get_template_directory_uri() . '/theme/js/illarion.js', false, null, true);
		wp_enqueue_script('illarion-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'illarion_enqueues', 100);
