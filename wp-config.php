<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Humorous' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S5v9hHEWqYRTHLpbtLPeRNuNF0lvYDLRNECRRgfDv8YN1O2m8JozwTLNo5xrlaNB' );
define( 'SECURE_AUTH_KEY',  '6T4jZvzlIVcVS78H8j5hyMSG4yTGfghELityOjEp5jMbQIyVL6yPeh9hPw3bdrF8' );
define( 'LOGGED_IN_KEY',    'PguqJCPAd3D2ualR1L2L4ErIVUJbIRLyyGgwPg0nB8L1r0VGlIYXffbsAte5NSKc' );
define( 'NONCE_KEY',        'R8Zb3yGJb5Ct2bFDWTXBRnisjuASgggZ4qT8oGoq0arYMtbwnYfnutqPzk16zPiV' );
define( 'AUTH_SALT',        'VMP1K0o5cK1wlrd2kprNPZK4Qce0gTr0YEJem3OBHyDvyzkul6agD4myMCoS1ufi' );
define( 'SECURE_AUTH_SALT', '6XH4FFC4ooymYkti50A6edXdTkdaD7Cu9kbTvcP9f2oKyW7O8K3zwJmkJcE3wklx' );
define( 'LOGGED_IN_SALT',   'oghrzq46Qj5arkTG5VufmO8FM976gl8rlrD9E5NgPgKQE0fJAF9gXdOTUX10sLnV' );
define( 'NONCE_SALT',       'PTe75MSYvRan1cfzSkCS6UDwkv8jHoijdvVrmGxTpXcepqU9NYPQ401R6qPq97XP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
