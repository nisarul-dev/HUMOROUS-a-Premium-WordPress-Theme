<?php

/*
 * =====================
 *      ADMIN PAGE
 * =====================
 */

function humorous_add_admin_page() {
	add_menu_page(
		'Humorous Theme Options', // page title
		'Humorous', // menu title
		'manage_options', // capability
		'humorous_theme_options', // menu slug
		'humorous_add_create_page', // function
		get_template_directory_uri() . '/img/humorous-icon-white.svg', //icon url
		100 // position
	);
}
add_action('admin_menu', 'humorous_add_admin_page');

function humorous_add_create_page() {
	// Generation of admin page
	?>
	<h1>Humorous Theme Options</h1>
<?php
}