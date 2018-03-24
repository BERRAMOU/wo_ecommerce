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
define('DB_NAME', 'wp_ecommerce');

define('FS_METHOD', 'direct');

/** MySQL database username */
define('DB_USER', 'Your_username');

/** MySQL database password */
define('DB_PASSWORD', 'Your_password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ea{m@JEJ;D< jNx5R(|] aVg13wRn]-(r3fDRPynZ.ryltykfRXn3L:<eM#}.Vd*');
define('SECURE_AUTH_KEY',  'Apm)hi-2zQ%~PKa}N!=:bQV}B6Nlp:t,-U!B_vM]HG78]L4L:hRoM7#cSY[v}0@A');
define('LOGGED_IN_KEY',    '@<=gD0cEs^BE?u/jd} W`&tK9haCagM<ZiTP=NI:v%7czOYZdK0g-brW0?Vo5Y!X');
define('NONCE_KEY',        'Tl=95 lQ1V#JRUa+ ]J)1&s$qOJp^%N+bXjf5W:g ZX7U_X*_h9ygn::%?M!di,U');
define('AUTH_SALT',        '~ow_`v@k0b#Zmkp-^2=jFoF)[Ob>(+27U~<(VS)w9x%}KEYEB6(rkz!|M:rSKpA$');
define('SECURE_AUTH_SALT', '7>=MugIml!b=TFGg5n EPm!~?Wz?U6FQ%3M){33I>3?C1gq)/me3UF0G>afX`wM)');
define('LOGGED_IN_SALT',   '|JAuG+F=Z7h?Leil}LH4J*/H+qDg=wx:K00<59^ZepI8E?J]H{gIUc{vrvkD-=+n');
define('NONCE_SALT',       '0:ebMXDhBW>x2N$1K#rX$c4r&1?5ZI$_(KzUbgHDspiFk26dJzmXM,UNQ_xVGx]/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
