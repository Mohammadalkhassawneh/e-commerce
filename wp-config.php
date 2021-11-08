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
define( 'DB_NAME', 'e-commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',LsYo=*T]B$;Out{Ir8!2&Q qRe{6,y24Bt}]`<ueKN~O>x~/ce;{?SUMCs$LMEq' );
define( 'SECURE_AUTH_KEY',  'S0O3.PK6Rkw>%}@j2ww@Ry= EU73n[-;{kcS3RZbzP<_lPqNSjN`(%5C#>Wv<g){' );
define( 'LOGGED_IN_KEY',    'h=_)4Vv{Mj@-n=08cl+ ; A g$6W;Nt o[t*2a`xS?GFaF!/2|8w=AW>LOEYR.Yv' );
define( 'NONCE_KEY',        'A~wHcLq BOJW!T 6)s1yh}nq|ZfE e.Q<Jl.7w@F77|JCG]Wf[P#<&FROoHS8y(O' );
define( 'AUTH_SALT',        '6Gm?0v>TlzC2]0o[34]k_:H=E&$Jv HGlr`,ebOp7p$=9yK%vO$Sv-:Da7;ZBlat' );
define( 'SECURE_AUTH_SALT', 'r0i!UX5e&p %[F_A3,5V_u$Y/+I}4e5F<U|?L@V&F)b@o?PB3N&Xa}_z5<Qh]1TC' );
define( 'LOGGED_IN_SALT',   'i/z0>9h>t%UQqaDrPV}ET1ckt2!7<Ww`a.h~Ns901&CLVmGt RS]ag:hk`;w!219' );
define( 'NONCE_SALT',       '3McZ.IKoHHyo0|{bhl@{mdD!h}=^qF}t6PP6zi,U_BYR~/TyN(~gZb[^!Aq]k5x7' );

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
