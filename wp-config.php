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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bshop2024' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$jZRU-Y!|C1AX:5_837Wvy(FfslO%B1B<m%Nc@Es;/,%4V%^)X+r$r1:Tvh<yJ1x' );
define( 'SECURE_AUTH_KEY',   'zqb9SG7eQVG:`&ja$:fCJPc/$PuM}:`Li4MM<PE7Zt-s]nCeJ3OvL!f8bh-Xwk,f' );
define( 'LOGGED_IN_KEY',     'Qh7tHulAlRRKx-7tlmcE|Zlyy[6jp2lb^q[G+_!~cF^[>04V+CP%4~aL<W6I46;g' );
define( 'NONCE_KEY',         'm:negvzgqM*}B>J49|[y|mql|{|1BBT=9SP*``0R<5A.rRUZ]yPk-E&Ua@,d+)xc' );
define( 'AUTH_SALT',         'h`2F#RTX=6BCSR~tl@iIj(+{}#::!-oF2Gm{DB/JuG57LGNO%;ONwpZEHP6Rn|wD' );
define( 'SECURE_AUTH_SALT',  'va<@-xw^:pDFrsr (10&b$p[v0`;>d^=XDLG?]q8CKejYf.~(h f&NXgC6q0Q}Va' );
define( 'LOGGED_IN_SALT',    'Y9xpTu=j<+*ld{%/[,_mK:HNo(!MQh6}=$&).WVcn:_06wX_NwN9tjf<&*T2&R(W' );
define( 'NONCE_SALT',        ';eDzc}T=w-X&}k;5:Rh^6|o}h/h1*Do[I[Hs8(;75k;u9@F*MOgF7q:-i=K5}w)m' );
define( 'WP_CACHE_KEY_SALT', '~F?Rvz@le9e{gf5M<0p+LF+x%#Hj[%bKXQq9K5g[Ho,{eEAL4pFPa RB?ApeG_}:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
