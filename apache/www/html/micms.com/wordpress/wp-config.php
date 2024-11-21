<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'W0rdpress22#' );

/** Database hostname */
define( 'DB_HOST', '172.18.0.2' );

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
define( 'AUTH_KEY',         'PP~!Rk}9&#,Qg:nyu #<Pl10(L5]@uUW3;:BI2>K*+Lx}[fY t~VqP5wJFRfp6/g' );
define( 'SECURE_AUTH_KEY',  'x/e/Y-57|_@f|%L;a,MyGa)}A*s2K/S-vL;M&[l7Hb4IVKgC?vTAiH,OzB;s[yq6' );
define( 'LOGGED_IN_KEY',    'v2TR9)^!WKJa6<a7v$T#R2BpI~xT.i`C*c:aJ,X D;3Iph#xrsg%{t0!n|*)ze@D' );
define( 'NONCE_KEY',        'O]o=Dt|%H/H)UMAje1@SJl_I)7@n6_A<^Yz^7Ga7Aa6*R!]ve9!vL@r05x@#jRam' );
define( 'AUTH_SALT',        'nX0r`UJlLSn|[c.<Ce[OV9*t6tD|29>nCrAHj1uI)PP-ri2s}:&ut6gp%S2.W?OY' );
define( 'SECURE_AUTH_SALT', 'o:0qfhum]|##Neg.DZ~5Oj|0]/<n{C<6e`!V*8k<(TD)!!u#0x2YQaE84$m|/k2>' );
define( 'LOGGED_IN_SALT',   'dS3i4<*@1Q(1~37??rVY&[51PqsndB{xN.S4oisR0XQ7&Cws^N)&jxV7V,g*fga(' );
define( 'NONCE_SALT',       '(SY.*T83e_t}g<c=][=<%xN9~+O@)g0r5Fo#^,vMCq{oCdNDZ9A4J%mXl$l`{gvb' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
