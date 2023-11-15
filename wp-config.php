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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_v631_cms_cuoiki' );

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
define( 'AUTH_KEY',         '5^qZk)Y:X,WJu*8C~g4q`-(7c${Y&hj](,AHq&bE5}g]l,m%os/V!;:.C>s^zP5H' );
define( 'SECURE_AUTH_KEY',  '(JAuxY{|0XF3cp|P(#dL?OmlYSp)kS)o^)!4kMjUx=$A,.a0y,4z5d mp_K[O<?Q' );
define( 'LOGGED_IN_KEY',    'j:*vx-Vf1fL<.L30^5|qhMV<lZG:v*$gsXrG~J@Sh~k<F#Y`V |Pl$E8zPu|y2w{' );
define( 'NONCE_KEY',        ',E>ejEO(,xczQ~84w@C%B~0T*&%XR2P0.4BH%QgcU]qmPubuTY|PT(SHUX9MjU(D' );
define( 'AUTH_SALT',        'z&yx?hi_aKh`c#xL/8b YHEvL%.AD2zt3SW@U)l)sQ}3?c%H<{w}f6d<og8]dlD*' );
define( 'SECURE_AUTH_SALT', '7-c>{&-b{1jJV~.Vdl`X{q91DqD&}qh>5v[T;Z[@;k(zXvL}/4mBJVC%)WuI1=Nr' );
define( 'LOGGED_IN_SALT',   '&{:m.8 Z3CxdK]u*JiTs{^7yz7,p>8/`g?1t(MW)qZW1Xew[!W.]Cd)dWL@b<oWr' );
define( 'NONCE_SALT',       '&F_GMg$z~AS(nB7[~wSD0~Le )UC ~u_|y9v6Rp^26PP:? 59*p]fWyH{F:cS!#G' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
