<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// require_once dirname( __FILE__ ) . '/vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();
// require __DIR__ . '/vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
// $dotenv->load();
// require 'vendor/autoload.php';
    
// # $dotenv = new Dotenv\Dotenv(__DIR__);
// # Replaced by following line
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// # and then rest of code as normal
// $dotenv->load();
// require_once dirname(__FILE__) . '/vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();
// if(file_exists(__DIR__ . '/vendor/autoload.php')) {
// 	require_once __DIR__ . '/vendor/autoload.php';
// 	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// 	$dotenv->load();
// }
// if(file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
// 	require_once dirname(__DIR__) . '/vendor/autoload.php';
// 	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// 	$dotenv->load();
// }
require_once dirname( __FILE__ ) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//echo 'Hello world';
// echo $_ENV["DB_NAME"];
// echo $_ENV["DB_USER"];
// echo $_ENV["DB_PASSWORD"];
// echo $_ENV["DB_HOST"];
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', getenv('DB_NAME') );
define( 'DB_NAME', $_ENV["DB_NAME"] );
//define( 'DB_NAME', 'Faishal_DB' );

/** Database username */
//define( 'DB_USER', getenv('DB_USER') );
define( 'DB_USER', $_ENV["DB_USER"] );
//define( 'DB_USER', 'Faishal' );

/** Database password */
//define( 'DB_PASSWORD', getenv('DB_PASSWORD')  );
define( 'DB_PASSWORD', $_ENV["DB_PASSWORD"]  );
//define( 'DB_PASSWORD', '*Faishalreza17#' );

/** Database hostname */
//define( 'DB_HOST', getenv('DB_HOST') );
define( 'DB_HOST', $_ENV["DB_HOST"] );
//define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
