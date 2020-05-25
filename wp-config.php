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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'rq/wba/5EM:VnpBCGA!?!`p]Dg9AIE?>E/wRc_NSQzS`Nj5ny%G^ay0d8LGCU %c' );
define( 'SECURE_AUTH_KEY',  'QZE?twxS7_TTP])XK)h;BJ!Y~3.|zs,b-y7b1Y|?>@tK:C((<d60D7TPhPQ=5nwz' );
define( 'LOGGED_IN_KEY',    '.faPa5w(_Ul~z{VYr;up 8pIJ.{;c/WcUppVyM6B34q3AYMO.;4 2&m)N{mh5:Zt' );
define( 'NONCE_KEY',        'p[TP:hoPgqmK0Ytp@5g?eLwOFAia}g:&&]$=+EHNF4OjSjF?q-q7DHaj[MC-u$we' );
define( 'AUTH_SALT',        'yTM7,w?U~k?2,<#sBjB96=Mx#&D $oMfUWHli=>=PA!utu`,cqMqC[Dh<r.w-Y{t' );
define( 'SECURE_AUTH_SALT', 'm1V1x^1GR[dc3`*Y?S^((l;_l9h hAkP@a7A:-CW FB$rB` }/Syro#m0]:<I8J9' );
define( 'LOGGED_IN_SALT',   '~YW8!H/M9}/Jv`F*>:)iwm<o;OZ@e{%D{A[ke]~$DRFWL<+e(#%[$sup[*#a*1;H' );
define( 'NONCE_SALT',       'ms`5 k^Zxtsi8s]hv5c3F=Jvcg %/A40WzKg//>o:7vdG1P0>z<bwOI5e83Q8nQ|' );

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
