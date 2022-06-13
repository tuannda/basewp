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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'nY7U0JZdi&Jd1UhZl)?JvVfg.q|Y0yzMEh^oDx`FpYZS;HiB?IM d(XKiYfvCTv#' );
define( 'SECURE_AUTH_KEY',  '( 9[/!R2cJkz-DQ7HHmXj3YVl])S$ Hj_ahOMQ*+2Ua/oqqvhkpdxNCV~[>cNSvB' );
define( 'LOGGED_IN_KEY',    'rHmf+gxaFG+=qW[j!c`WP>cL`&?Y_Dr4$)}DUaDiVuwSv9*c*8(j&=!:pu!&7ZMU' );
define( 'NONCE_KEY',        'ROfnn2<V[O5AqEqx o8XLtwRLJ|x(I!qA[pAuXPplq&PA(xM~/(?ixSdmOE-<EFm' );
define( 'AUTH_SALT',        '-9&&l+cq/joEQcdk!6/lQK&B>Xj_#7P|fp1ky.ACcmEU~^e~7~1`!MSBTong!k w' );
define( 'SECURE_AUTH_SALT', 'kY8*[Y]A6c=F{QM4C4%&s>*ukU|ns>?S9<6/LF=.SR1s*+Q`t^kvKiO>b.~=*uwZ' );
define( 'LOGGED_IN_SALT',   '+kbt}A77H7;[4{:CS0PQ*xH|:.A!=2J`#o5fD,m:{0uOty+oWntQ&r0wD-8SbG,c' );
define( 'NONCE_SALT',       'NMm&k96<smqn>2cdmmHR$UMb+b/z]nt,MwkQ[f.9I4O6pK&pl.g_Ed|2Yd!w!sJ4' );

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
