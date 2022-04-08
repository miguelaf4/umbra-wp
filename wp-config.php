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
define( 'DB_NAME', 'umbra' );

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
define( 'AUTH_KEY',         '1/2DKCo`Ki8g^#O?hdOJI;~2u&T(5Pyj+^3hYq{GUhn)Yrz2%Z/xf$.)kv?u]!,F' );
define( 'SECURE_AUTH_KEY',  'DcKY.XueTzP*]F}FRXJ]A[*}EY8]e7ZeN/ws7TjW4M0Q[;mjt;VQe foHwxNi !p' );
define( 'LOGGED_IN_KEY',    '!x.Zx+v3_*TL2^FOb^qK6kN($:%{97=K`F&u@O`$Q$+Te}Fs `dL<;9UR<=K$cr<' );
define( 'NONCE_KEY',        ';X<d.X=b7W&LwG}<9|v5snWR{iEB6(QFL0K;58NMM4,o:sV`?>J~TwS8itVt*nwu' );
define( 'AUTH_SALT',        'KNV0p?a7txWj#WGz8U^Dv^:-M6Q]wU@o7B.{*H,V5yh7egA&(%dT@]Pfs,33.ca+' );
define( 'SECURE_AUTH_SALT', ' {v^fMNU{bZh&A;MqiPYtgv%1^(5p+m94`hmlD@(F5:Po7R1Z}t,veku$u0]hFbH' );
define( 'LOGGED_IN_SALT',   'Uk9`JK?:aG69;^pAR{!ImA*q3>c{2 AfZ(7|5,U)}:D Oen5rJmO*/W4l,+-wkW[' );
define( 'NONCE_SALT',       '[kjjBu6[_`D1k{(8<;6 qB@8bdWLn*|Rp0M7uE{;ah/^q,*oa,|&tp7MBw^okM(9' );

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
