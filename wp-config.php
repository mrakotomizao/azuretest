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
define('DB_NAME', 'azuretest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'RK_U#,_MG|kz~l@]A-z8u80 R>C!(2S~~@%>v.rx0]/RI-Gz59KSP6xEK9%W[w`L');
define('SECURE_AUTH_KEY',  'Cw|bhbj[G=[lUcE8D;h+Y|t60s|9[WQuKv1V(X/Lkl-_Me&3hO*DO#tj-2`I0CiH');
define('LOGGED_IN_KEY',    'mDKnvztm_S!`|53^_!_$pK^Z#p[be;fainHOZ5`+!ch8TMg# r|_70OA@k$^TD65');
define('NONCE_KEY',        '#*@I0TcOWal_pN>#jQ#.,hH3`4#mwO(7kqmyRttbB_E>JqKG*A=, HO}+F`?^^ u');
define('AUTH_SALT',        'hK[@@1TR^nH A{qzo)<#}ybgX%!3|DZL4$JV#ln Yl_L48o0{X&SSgB)ek6uwxs$');
define('SECURE_AUTH_SALT', '/7a;mdt1=<+869lMf7#{%t0?Zs3CQaj|n4nE=1Qn!ju5aNN#*<,c`S7S/j;1edO+');
define('LOGGED_IN_SALT',   '@MCt$CR8?h-r<4U|cd^r+XN6]pg/Zg4DT15#Eyfw7;t _/|^t(>3)`k#V11E$7N.');
define('NONCE_SALT',       '<ub)TXJiD.Suew-,E+$@VKW}xA&/Q=Iowc9HTe8TZkS|)4ycTngYHVW$VZjFCT-%');

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
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
