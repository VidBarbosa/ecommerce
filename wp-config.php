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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'nuf%d0IW)uIG_^BATpm4tE]^qPoE2Q|s/ }MBmbVn(JaD,5j.{s:N[5g.;Sfo~1X' );
define( 'SECURE_AUTH_KEY',  '#n2&~60CNVF%(g;A l9#c]ANdcXp0&rA9Me1&5U@{Tk`U?gqNa?9DFvO^yn:?lKc' );
define( 'LOGGED_IN_KEY',    'jr>6_L5OKjci$3]$&-e5E`nI*ak6DWpi$;DsN]JfksZCF8~!%;_(=+(?v[<Kv[R/' );
define( 'NONCE_KEY',        'VWEL.4`uf7c~(vh-Q==/g+7FJxq{4w])K,KQ$OOHy<J#D?aI_pk]]o-;AVxttZ2|' );
define( 'AUTH_SALT',        'F?CR3{Ss_q3]WFO8>tiiUy!rQxoI5YIB7-`sd%bm*k,R9`0Dvh)Tm9{UP{$++zmb' );
define( 'SECURE_AUTH_SALT', 'D,;SkZ$jh81+7=t^wM}p^sZT7 >eR@bkL$XHFFM?}~Bmc{?&) {&Rg]J%gj~tM4X' );
define( 'LOGGED_IN_SALT',   '{f_e}[co.SMuy,SL#0<KpHCDGC7pC?`c3yJp8l8^$]uk2S$QN4z0*u]h8W.=y>fr' );
define( 'NONCE_SALT',       'jCA:$>t`Cj.f y[bvyQ@qqx4!Hz)%D4)z *-*LH tD1GcVrN[#c-(<P:t`VWc.zr' );

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
