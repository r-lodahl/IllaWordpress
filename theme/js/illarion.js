/**!
 * illarion JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here
		$('.frontcarousel').slick({
		  centerMode: true,
		  slidesToShow: 3,
		  autoplay: true,
		  autoplaySpeed: 5000,
		  arrows: false,
		  dots: true,
		  centerPadding: '0px',
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        slidesToShow: 1,
			centerPadding: '100px'
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        slidesToShow: 1
		      }
		    }
		  ]
		});
	});

}(jQuery));
