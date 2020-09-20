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
define( 'DB_NAME', 'fdev' );

/** MySQL database username */
define( 'DB_USER', 'fdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fdev' );

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
define( 'AUTH_KEY',         '!%DA|z3,kFL2]}9&0blDG|o>:sOJjfX+ %ZFj;hcML2,T06N0iuHZea{sul{b;$J' );
define( 'SECURE_AUTH_KEY',  'ru+>Ot9vQ_}]/)Y/wJj4Doz%@xtz|AOF&~WRNU]&=nUibJ5+Xgp4:5MJ!7-,5be(' );
define( 'LOGGED_IN_KEY',    'k]iQ.]WHx.x]4Uj;hd,qW1KaUq`j(1+ly#BS})=9]L9Kn~`.NK[!_tMTpW1oFQD)' );
define( 'NONCE_KEY',        '<mn^6;vxV<X_#2ZhKx;{zivxTsVzi8CTe:6t~gFGPFVV=)sq>s0yj^kr}<4:?V4:' );
define( 'AUTH_SALT',        'RlAy>Z33(rh8F=TX5kQe#A:XGwk$Qn/,[C6+akhWs^k&X`%,{ypO3_-KBThIY3JX' );
define( 'SECURE_AUTH_SALT', '3PNxK@.5})Y%QhRB[)m^5#&_Vp]o~vl$8dH|Z^rHMoJuG0Q0y,0]pi4k!]E%=)x@' );
define( 'LOGGED_IN_SALT',   'T~Y;W@5%L<F1!s;i~t%nmY!#,H|j3:}ZdRpTJ7,R1I/KDbL4Rj+KEW51.6XX^pXd' );
define( 'NONCE_SALT',       'Uzm.4/|{>f^i fK~D+M 6*y<[pVg+XwW6&J-3+qO_K(DXLwu/5;f14F+Wh72(~Zx' );

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
