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
define( 'DB_NAME', 'Headles-Nuxt-CMS' );

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
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/wordpress');
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
define( 'AUTH_KEY',         'pAfW8oLZrwqKJG7ZN93TMHvgdTZTAW6fS7r3wY6uiJc493a6aunF7L5AYFpnWVqr' );
define( 'SECURE_AUTH_KEY',  'IlT6greibrnvzG3pmTfcekPjLlThIGfZSFoL1MSKMyTSUMhaDeI0mEtOiAWcUf6J' );
define( 'LOGGED_IN_KEY',    '8BzrCrde5kv3HkHHiS8D8AVWNb0pc3oV8HW3Fpfohr0qUN2CUv24mCX6mNkpWJVT' );
define( 'NONCE_KEY',        'gdveLgttyYuOGet1CBy7PRiIvX0T4Md45RRbaw64LteoAHK7GZ9a5GVxsxKhtqE3' );
define( 'AUTH_SALT',        'zY0mUjVLiUrzvdqqbmKqguCL4o4haxmO5qOVDkSkgiVdlrRc9IuElzkKNrh8sKkk' );
define( 'SECURE_AUTH_SALT', 'AyfiAjVrUgAuV3Yx76QICjJ3Bc8VMeyJneLwtR78SpKSBtiKejRNQ3V7nHfCu7Rx' );
define( 'LOGGED_IN_SALT',   'o9iOSqRPdHoQJx9UimBM7Tib0cv7FIKhc7t2VKacunr8nUsAHOl6Rknktmwnp85Y' );
define( 'NONCE_SALT',       'e1K0NtEISM2IEf4Wx3do3nDMxXGkuUeneWTw8xfw2gZEdDtI7YIEDnuzYDzD4IjW' );

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
