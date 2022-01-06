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
define( 'DB_NAME', 'm1192_mojblog' );

/** MySQL database username */
define( 'DB_USER', 'm1192_forseti' );

/** MySQL database password */
define( 'DB_PASSWORD', '*E#6qW#FquyYAOb2a2Ht9CrAc0O4wtGP' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql47.mydevil.net' );

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
define( 'AUTH_KEY',         '>Ph@U`K#cm#+rB&$yAwIh&Tq7f^(yI$a~6F{1a`vN,$/Lyaa*$WUl$4kQ`%#)a#u' );
define( 'SECURE_AUTH_KEY',  'tin&Z$wVlJQqCp[/T.e{~D?;ol5LOK[EQP5+[Divm`#w,V;2XO,SRx#Q;wqT0N/R' );
define( 'LOGGED_IN_KEY',    'r8N>gMk9?}6$Fh`X6FHY2I_0@LCdH%_%?Rx(# `2#i=lV!m5bNdn s8IX@8^(yOG' );
define( 'NONCE_KEY',        'tTQm<6%=vT:vNta)/D2D?@89`I`mh6pa]x{XIrUt;U<;CgwE8Wyxv,p{q#NT0,|L' );
define( 'AUTH_SALT',        '37H?k3qP$l|spKL=&>a$<jHFU)5Ib&js&a rZD$@VUM!A~f6$,mF3Vkry*H#No(D' );
define( 'SECURE_AUTH_SALT', 'xj6j.qLKZ8)%#J%e_I(hRR@V`LcF}*`kBGlOY;/;mWI|~^puQFlDXcCi 9^>`Ya{' );
define( 'LOGGED_IN_SALT',   '=]s$]:ewo%x<[fJ13h0UF%y5u,TPsZqOc-/VO/`Qa^ bc<Nk1;T Hur>~y2y6UYU' );
define( 'NONCE_SALT',       '#,3_zB7%/g/{-r_Mz&e,Z`^y@tKsZ|kZ#tQauLjIJ4.&az%!2@>l&FryX3lWqQ5>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mojblog_';

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
