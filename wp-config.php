<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'habibsur_website' );

/** MySQL database username */
define( 'DB_USER', 'habibsur_habibsuruj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tamim@420K' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qnl3wyaugtoimdww1dw2of9wn54otcqendzurwrlaam4ohooudj9s5fopwfwhyag' );
define( 'SECURE_AUTH_KEY',  'asp05nv9g5epjufwatx1vm4tdvpeuvrxl4e0fami7reznj838acrabjyhju5lbnk' );
define( 'LOGGED_IN_KEY',    'anxsdhidrmyhyzd2vi2rzd7y8klnbtgz2b7w33cxgkf4t7lil87u0yjuqebhn2ry' );
define( 'NONCE_KEY',        'dialt8v7hufw7zuv9aztyaagb6x7h5c7tnut5z9spbd9kwrtnpcncif66jbokliq' );
define( 'AUTH_SALT',        'hk4mpw1efyzaz3m7zxtsia5c2ulxttejsyhzqmvic9q0e2c7sko2p43pkxmuuncw' );
define( 'SECURE_AUTH_SALT', 'et140ikitkz4dbpszqyr36snnwredc3ucykkwggdaqnry3ebkcdeolqv2v0ltcyk' );
define( 'LOGGED_IN_SALT',   'rbgbmgnp3fdbemv9opsyt3t8dxxbwsfdsrxqurphexuhso7rfvvy7cbyugxl3lbf' );
define( 'NONCE_SALT',       'xaovpz8zvdaijckww8qjsulkeogs0r2ejlrizk6cfdeiivwvwwn9zht6gwa5xrfe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpu6_';

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
