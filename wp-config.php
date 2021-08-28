<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'globaltech_wp100' );

/** MySQL database username */
define( 'DB_USER', 'globaltech_wp100' );

/** MySQL database password */
define( 'DB_PASSWORD', ')U5Sp4P0]m' );

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
define( 'AUTH_KEY',         'aa3qm9h28mcmxg2kjwuai18ecw0tfkjhtrikzsbjmd65ubi92iqj2dhpojkmtpda' );
define( 'SECURE_AUTH_KEY',  'oq88bvhm8yjqik4nza53dyl0lgmn4xbftce99gcfnruekgwsng4jxkrpukszzfrn' );
define( 'LOGGED_IN_KEY',    'qygcvi0ohdtcxz02rqciaq1yh6dgzttebplp7ufimcmgfzqedblrqtaustcbbhzl' );
define( 'NONCE_KEY',        '7rs7cuiioluigftftvwiwrvstecrozdee5zbjjejuvsrqmf2mjwshbzliid3fe0f' );
define( 'AUTH_SALT',        'iuqfdhnjjer03xgfbyrulreqcxcaiftyiftc9bltflk4jzs2eo4x3rdcixcjlhcl' );
define( 'SECURE_AUTH_SALT', 'cjjihudvvnbzjqvh13jbwccxboe3omerkqtvaiz1y1jslzrmaqtcx9cxztcaqwag' );
define( 'LOGGED_IN_SALT',   '5qpqh82vtcqvtidaejqxkbrk3uijc6cc0vqqmrmcclhedzxdwlyfwfbusjc17t9q' );
define( 'NONCE_SALT',       'qxkfmmlyre7sopya5xkwj9olodprzg1nvmyihseux5uhfnbagsueknxluzspewon' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmj_';

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
