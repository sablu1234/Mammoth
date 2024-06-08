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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mammoth' );

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
define( 'AUTH_KEY',         'WC[5WVf5, .AkUs|prA~6H4JsoTx]+}Nxj{gPXPDsUOCq$$x&+*V8R(exwjYd@B4' );
define( 'SECURE_AUTH_KEY',  'j95W];#}q`nX4{{07aHJFIY,yjVY9+4(A$18nu~|2-H!]eg[iJFwzP3_c/|#k$AB' );
define( 'LOGGED_IN_KEY',    'En6<og-0TS*OcN$W|lH:&N,WN!6wTBhU>DwQC0rt}bXD6cC`0v[!u_((9[GX_2RF' );
define( 'NONCE_KEY',        ')?|f}#i?Mw<JJ#c&`p3O5[W4hjZ,oEGuoQsA3]S|2:t0|VF:0X1ymW>w0P$]0h+-' );
define( 'AUTH_SALT',        'gR6:8Ph.BPmoW>kmGi:Xp+bv<HPN--%@B)G3 P3pLQ?joy&lk D6zb}G~JL:#qEo' );
define( 'SECURE_AUTH_SALT', '.O]Qj61LaX}XwcB=n0:ko-&t7&aykEkRj+*$eL^ZkWC@QW/+5A,NS0#t{q9L2lWd' );
define( 'LOGGED_IN_SALT',   'G[cw[~!TLYYze*xw/(`7[0O)0|z!8{1PtB^|HBa]FsOO6&,;Z|njbrzmyv6+^m?$' );
define( 'NONCE_SALT',       '[;%c5tu]U!a3>6$wBMb ^!:0<BTL8(BCYgq%K=f~;{%C[zw?u~mtY<F9;]=;)Boi' );

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
