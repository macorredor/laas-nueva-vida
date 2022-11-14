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
define( 'DB_NAME', 'laas_bd' );

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
define( 'AUTH_KEY',         'qY1O^b>ZY4Jw0=M]!lZuQ$Fm51-|g^-g$8IA9zfHO,m<#PK5yPEYb{xh&/n:31fT' );
define( 'SECURE_AUTH_KEY',  'T*`cPj>R77a! Ybw}e5Jg!9ah[!COQBR(6`Grj>;SM1:E28$h<:21 c4v(WUJfwN' );
define( 'LOGGED_IN_KEY',    ';~ciS`lUT w|0ExQm26TJybOG~f2f>P0.NNUR$w*>crG1Z@zb:h.}9ak@Y)#I=}#' );
define( 'NONCE_KEY',        '`P;scjJ#K|o16U2l+5pdh!fy$yrtN8u8jcp-fV n,w??>8JfA:t/U}6 SS:,$LmC' );
define( 'AUTH_SALT',        '![ZYTgg5Ket*#H~B).}X$|,s1}AztJ3nC%?wFM3x<;M{DyKD7(QE6XxA{FJssV;]' );
define( 'SECURE_AUTH_SALT', 'x=MMjg}Za8O$[a1k4@3`XW-a,6H=9l2e6E3+1!l6[vzd<Qo7pEyJk/:,5-(SzPm>' );
define( 'LOGGED_IN_SALT',   '37-a4^uXV_h&@;[A*beXzDOMF+%1[jw($iAk%5uwH~M:aV;qB=_yu+UkYXhYr`ix' );
define( 'NONCE_SALT',       'npBx<Bt6y2F#pgCXANHU$C&tbWp~jDuR.5:H/D_y:Tz,v>GY0.O)90Md$tI)#= (' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
