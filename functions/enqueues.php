<?php
/*
 * Enqueues
 */


function b4st_enqueues() {

	// Styles
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', false, '4.6.2', null);
	wp_enqueue_style('bootstrap');

	wp_register_style('fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, '5.8.1', null);
	wp_enqueue_style('fontawesome5');

	wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );

	wp_register_style('b4st', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
	wp_enqueue_style('b4st');

	wp_register_style('lct-base', get_template_directory_uri() . '/theme/css/lct-base.css', false, null);
	wp_enqueue_style('lct-base');

	wp_register_style('lct-utils', get_template_directory_uri() . '/theme/css/lct-utils.css', false, null);
	wp_enqueue_style('lct-utils');

	wp_register_style('lct-flickity-style', 'https://unpkg.com/flickity@2/dist/flickity.min.css', false, '2.0.0', null);
	wp_enqueue_style('lct-flickity-style');

	wp_register_style('pswp-css', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.css', array(), '4.1.3'); // Modernizr
	wp_enqueue_style('pswp-css'); // Enqueue it!

	wp_register_style('pswp-css-default', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.css', array(), '4.1.3'); // Modernizr
	wp_enqueue_style('pswp-css-default'); // Enqueue it!

	// Scripts
	wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	wp_enqueue_script('modernizr');

	wp_enqueue_script('jquery');

	wp_register_script('bootstrap-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js', false, '4.3.1', true);
	wp_enqueue_script('bootstrap-bundle');
	// (The Bootstrap JS bundle contains Popper JS.)

	wp_register_script('lct-flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', false, '2.0.0', true);
	wp_enqueue_script('lct-flickity-js');

	wp_register_script('lct-isotope-js', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', false, '3.0.0', true);
	wp_enqueue_script('lct-isotope-js');

	wp_register_script('pswp-js', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js', false, '4.1.3', null);
	wp_enqueue_script('pswp-js');
	
	wp_register_script('pswp-js-default', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js', false, '4.1.3', null);
	wp_enqueue_script('pswp-js-default');


	wp_register_script('b4st', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
	wp_enqueue_script('b4st');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

// Load conditional scripts
function b4st_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// ACTIONS
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
//add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
