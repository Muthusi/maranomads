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
define( 'DB_NAME', 'muthusi1_mara' );

/** Database username */
define( 'DB_USER', 'muthusi1_mara' );

/** Database password */
define( 'DB_PASSWORD', 'call2DUTY123' );

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
define( 'AUTH_KEY',         '2w)i)Cx$+70Fgzv65jwv[3v2}M(f}!a@D;N:&u8)Sb;}fLdMIddPg8;Dj Ef5zBX' );
define( 'SECURE_AUTH_KEY',  'KlYO4ii[YaoGb Lf?xGuE3R9U`tfC:;z6yFBQ&V@fRJ,+sIi2Hb~8/4|BnFf&<ef' );
define( 'LOGGED_IN_KEY',    '?v%[+$Kv[5jPw!~iR].0Q1SsfLIT$.v.IW}!OfC6B2>}WXVcguC69gM^L(Ft@Y)L' );
define( 'NONCE_KEY',        '?W8m)+& %o}]V?`<TdFv`)iW8mSlQ:+[1XliH>sh=|20;:RJ#iI n|kAgk(pXA;b' );
define( 'AUTH_SALT',        'v7eE3[aHB5m|o`mZmM.&D-}D|C_iO[c~zUxTSfWi@-Y`dNV{u-sGN28Rk!z3-EH0' );
define( 'SECURE_AUTH_SALT', 's1q:=Gfz3Chv(K@XO`$;i[o*+Da=a.HX^f~5FRd)4]scayrCn-WJ#k*@W58U{F-9' );
define( 'LOGGED_IN_SALT',   'r}g*Xf=sDS6,$TU2 q)PS Z~6B;/<sY;+sCfWe4H9Z$hi^@XI%@{hvKHqlt&])><' );
define( 'NONCE_SALT',       'a5jUk5(wbL2p<P7xu_su*s!+CY4H1wc;m0>)Z4%>1@+e(0aOT&)Faq{7[:XfZpf3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mara_';

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
