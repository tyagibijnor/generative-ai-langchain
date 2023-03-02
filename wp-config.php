<?php
define( 'WP_CACHE', false ); // Added by WP Rocket


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
define( 'DB_NAME', 'u340478488_5IQPX' );

/** Database username */
define( 'DB_USER', 'u340478488_4qOnQ' );

/** Database password */
define( 'DB_PASSWORD', 'KRAv6PmQzK' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '{bI<rg6Grw*fWJ37|^3Nhy2<Lf>(6)q6eOxa=$_2?m6FNH906-t=&yM~Q/y*2]OA' );
define( 'SECURE_AUTH_KEY',   '[{#x x}l&6Mx>oCiBRBN/J[%K=Aua2(6GkS:qHRN(re+5cR&R}DhL]2Ly6^P~^R%' );
define( 'LOGGED_IN_KEY',     ';nRgO&/a!g-x;A;<<S%e;lfu9baD}pup1pO YPhp[q8odSfto02VP){#//yf A`&' );
define( 'NONCE_KEY',         ']mb1ZIkS%p?4}RA3-KQ8bgwQc)c|O]Ol+Y$/`0bvek 0CG6l8*V@bKOg/v7F<y=O' );
define( 'AUTH_SALT',         '/!(v~a2`g^lo+%jQCh:IJR*`;$w7uoVui!+, PlKQ/wV-Kbw(Ur|*AoK;^m:D[iY' );
define( 'SECURE_AUTH_SALT',  'u?_1(<A3i1VH q42KoV8Wf=a;z]=t{y$whF;4eZ]cA&al1sol)BN>vHGbG~3<V&d' );
define( 'LOGGED_IN_SALT',    '=4<T:e43CcMP=!A-F7.Z)sJOl9m4#D)R3d/{PYQ,!JQXm,LIZjU7H?-kehuWh4~C' );
define( 'NONCE_SALT',        'QMjY9ad]!/l?1aYEk 8rMt~?Eib//^hZN5_Efy}.7+HJ0r.G[b;t7u_)DzNE~aE^' );
define( 'WP_CACHE_KEY_SALT', 'VG#tLsP,3Y. 0B[?M/k2!;k?h^8B{9.A_1jZXmp}t6pm`:>8b6b26sN+7?|s1c<A' );


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



define( 'WP_AUTO_UPDATE_CORE', false );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
