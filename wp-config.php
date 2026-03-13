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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newsportal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'osm0szmj9njf9ptzievfah2d29n145bcaqnduuynetyrio96qafegsmpnybjxrv8' );
define( 'SECURE_AUTH_KEY',  'ax9ofaqsns93gynjomxtwjyqkozqndbauyy3gpf82uknmpcgzdfhu6inrzomrqco' );
define( 'LOGGED_IN_KEY',    'op4jrbng3ydwowuofwbuqj6cxfienvnyvnueyos5fvyld2u8j51h86wxxyypixyy' );
define( 'NONCE_KEY',        'rymdr8nqe5grgkvfn43fnm07dn9eyshbu61rcqejiwrx0c7nc0jdqizkvazwtzvp' );
define( 'AUTH_SALT',        'iebqtlnwoa0rghvdtpah6b6swbmxcn3l6kdh8nmk7fscleapkgwntyktzr7gay4f' );
define( 'SECURE_AUTH_SALT', 'qqv4s5rpp2wxqswrz7sfh0s5wa7fkmiyxpw5jd2at2ktjiyeq1ksymxwbgfbjtuz' );
define( 'LOGGED_IN_SALT',   'miiwpzle3s2srbxyzvitro35hcm9byzpvqsejinxhb0jzcjqejaxaauqex4mhvf1' );
define( 'NONCE_SALT',       'yn8vuw9znslbdjkaacvgnqi3c4fyqmj4i4nwbe6jxcau7natp0qdxcohjuj34t8b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ob_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



// Local URL override: always point to the vhost root.
define( 'WP_HOME', 'http://wp-newsportal-main.test' );
define( 'WP_SITEURL', 'http://wp-newsportal-main.test' );

define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// define('DISALLOW_FILE_EDIT', true);
// define('DISALLOW_FILE_MODS', true);