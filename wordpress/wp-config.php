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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hieu' );

/** MySQL database username */
define( 'DB_USER', 'hieu' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'T?>o(fGJM/8np47>gy-3rgJ(6hFxVpsar<B5J.oCWjTF?Za=NT7S[20 =>B>|x]5' );
define( 'SECURE_AUTH_KEY',  'ZI1!TU&O4Hf$^93f*g;ek/&q[0 ueD.ut{qZvp5uTFS{QB+R6z2gafejBiy2Z*}K' );
define( 'LOGGED_IN_KEY',    'z~]6({V!I5:>`?Q^Xsr{Mn>io%#jY-vlu2,E0S<k*Vq<Q*y%9|%dF6M1E0`W59l>' );
define( 'NONCE_KEY',        'J$]a)Z=?7+#kI<NsbS5dN#)SO,Ui+2f8~[L%Y<GysBR|?n{/Zcvo124X2zMNvPT`' );
define( 'AUTH_SALT',        ' L-~G>yP;2j)nv!h |T$+@KIMR4Jt(k:(k%@rX,aV=XJ7Se4LY1|zuBy<Y8]^e7s' );
define( 'SECURE_AUTH_SALT', '^uavbS8u7N8>QvfJ]TJt[<l:GlR9))1-hKmAO80<7;p2%N^>R=.ye;aR$k|71<a6' );
define( 'LOGGED_IN_SALT',   'WSG+u>r4ZzuQ vm2%/J$DvIfFk)ygX?zH`3G~mxa,}%_TXwjQO Y8xv[n>*0~iR_' );
define( 'NONCE_SALT',       'eL1E-y6d<t4:PE`8x+H!k X=Gs[:H9r*a}P*aB@muqAzH/7V4f4e]t|-9Ha3YN ,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
