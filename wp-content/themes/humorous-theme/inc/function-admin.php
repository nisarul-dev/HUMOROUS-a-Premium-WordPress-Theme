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

// Activate custom settings
function humorous_custom_settings() {
    // Registering 'input items'
    register_setting( /*option group*/ 'humorous-setting-group', /*option name*/ 'first_name'); // This 'option name' will be found in the database under wp_options table

    // Declaring 'Section' for items
	add_settings_section( /*id*/ 'humorous_sidebar_options', /*title*/ 'Sidebar Options', /*callback*/ 'humorous_sidebar_options', /*page*/ 'humorous_theme_options');

	// Registering 'Fields' for the items
	add_settings_field( /*id*/ 'sidebar_name', /*title*/ 'Full Name', /*callback*/ 'humorous_sidebar_name', /*page*/ 'humorous_theme_options', /*section*/ 'humorous_sidebar_options');
}
add_action('admin_init', 'humorous_custom_settings');

// === Callback Functions ===
function humorous_sidebar_options() { ?>
    <p>Customize Your Sidebar Information</p>
<?php }

function humorous_sidebar_name() {
    $first_name = esc_attr( get_option( 'first_name' ) ); ?>
    <label>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>" placeholder="First Name">
    </label>
<?php }

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