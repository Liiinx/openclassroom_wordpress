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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'M|BD3/G1/8rRF`zN:Bt1s >Sq5+)f7UT)Q~WY%&_4(^l*n.+]dFw>BCq9PbE*g9w' );
define( 'SECURE_AUTH_KEY',  ':S5%k0=oGZ8X9^lWkYQaz>AluV)[KB;)h)CFx&N.-q&KA-h>#53}0Z7Xcy_0b?W<' );
define( 'LOGGED_IN_KEY',    'd ^2:85yx;^Vd[J7gPVK+Ao`76;K8KKo}8}tw.AKSo-[trZy=dr=c5fCO~o@hca#' );
define( 'NONCE_KEY',        'l:i`D_9BLrgXoi;6xFm4c3XW:,/qup+_BO=CUTP`1e$(DQ|K2ycdaxSsqM{K~EkE' );
define( 'AUTH_SALT',        '*5N}1}XBNbQCtjgx|%wd%r4s5dT+[e&oQt}R^?1>6RS.}]1{g%Ig 7.CZDmzfx6G' );
define( 'SECURE_AUTH_SALT', '5A&Ml{)ua(mFa|ED5i8+]Fux]up!m;W1+5>,5eO$P_T|y{415][n5<x02?lv>@06' );
define( 'LOGGED_IN_SALT',   '_S)nYUP@q IRO9e>CP;v4~.1&[%!8?J_r(hiOEKbk6!:_L]7&u-EOx#2yRxI4n8f' );
define( 'NONCE_SALT',       'ST;8C} H2HAMx_uSSUFR-G8WQ27(TU*!G.lvu3$vRy$L4QQI.Bva2]{{Ij1a0?%(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
