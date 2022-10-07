<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Bonsai Settings',
		'menu_title'	=> 'Bonsai Settings',
		'menu_slug' 	=> 'bonsai-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Head Settings',
		'menu_title'	=> 'Head',
		'parent_slug'	=> 'bonsai-settings',
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Modal Windows Settings',
		'menu_title'	=> 'Modals',
		'parent_slug'	=> 'bonsai-settings',
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Navbar Settings',
		'menu_title'	=> 'Navbar',
		'parent_slug'	=> 'bonsai-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'bonsai-settings',
	));

}
