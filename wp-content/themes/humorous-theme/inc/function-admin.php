<?php

/*
 * =====================
 *      ADMIN PAGE
 * =====================
 */

function humorous_add_admin_page() {
    // Generate Humorous Admin Page
	add_menu_page(
		'Humorous Theme Options', // page title
		'Humorous', // menu title
		'manage_options', // capability
		'humorous_theme_options', // menu slug
		'humorous_theme_admin_page', // function
		get_template_directory_uri() . '/img/humorous-icon-white.svg', //icon url
		100 // position
	);

	// Generate Humorous Admin Sub-Pages
    add_submenu_page(
        'humorous_theme_options',  // parent slug
        'Humorous Theme Options', // page title
        'General', // sub-menu title
        'manage_options', // capability
        'humorous_theme_options', // menu slug
        'humorous_theme_admin_page' // function
    );
    add_submenu_page(
        'humorous_theme_options', // parent slug
        'Humorous CSS options', // page title
        'Custom CSS', // sub-menu title
        'manage_options', // capability
        'humorous_custom_css', // menu slug
        'humorous_theme_custom_css_page' // function
    );
}
add_action('admin_menu', 'humorous_add_admin_page');

function humorous_theme_admin_page() {
	// Generation of admin page (General)
	require_once get_template_directory() . '/inc/templates/humorous-admin.php';
}

function humorous_theme_custom_css_page() {
	// Generation of Custom CSS page
	?>
    <h1>Custom CSS</h1>
	<?php
}