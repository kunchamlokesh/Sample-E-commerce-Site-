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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'trnd9571_wp309');

/** MySQL database username */
define('DB_USER', 'trnd9571_wp309');

/** MySQL database password */
define('DB_PASSWORD', 'P.Svo-551m');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y2wgkimzmed4f91kmo2fiu3n7fk0wu7zrfnqpdyvuoiwtksohfvuxmufrjg0i1wj');
define('SECURE_AUTH_KEY',  'nrag2cj00a0uzqgazxfvok76qpebs4v41x5lzp4bink4xgfz1lszxxq4j2fsao8q');
define('LOGGED_IN_KEY',    'nht2kovevuulmjd35f0nujqvrnip76knlvxwehjide4ps1dwewkkedapqiv2mv0l');
define('NONCE_KEY',        'rqwwkylhoajr73zzcrnvnv1a6tkbjnoapktq0yjxbtkgyainvklacgp4fgxisj4f');
define('AUTH_SALT',        'xrgk7cxxqhtlirojv6mgfgwxdypntwses3nqoqptqd0naetwszbos6t6fsbcdnhk');
define('SECURE_AUTH_SALT', '6pwb7akvf4ol9oodw8c3l6jnbs0xcwbqswjsrrtfedgrlx1ye8bewlsnvfue4a9b');
define('LOGGED_IN_SALT',   'cyt6dhr759lfrgzjkgg9gjkl40vg3gqhumzd8luthgo36soxbq2xtgsqtwrwdea0');
define('NONCE_SALT',       'xlnl28oti4dseadifc7uxkaainlasdmkh9iiitmjo5hgcns8avbtfpmvktywmqie');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
