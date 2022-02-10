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
define( 'DB_NAME', 'dsc' );

/** MySQL database username */
define( 'DB_USER', 'dsc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DSC123@' );

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
define( 'AUTH_KEY',         'r:,ZGB,dUjoZr,zK6|UF!Q=i`HA2VjN`Vf(Il9~4vTB%98.g9T^}o$^ }MPaOB$C' );
define( 'SECURE_AUTH_KEY',  'sbl2g.J1vkCBOdFQK+y .a563?KpM*8(f|`0s#GO>Ba_a>+*[zBi{7nxN`kn7lW?' );
define( 'LOGGED_IN_KEY',    '@jeuD0Mar)z$s$q@G0/h9,zUC+Z?%bHcG<L#_v@%#NRDt2&Hp)ev2$1UEi,&=de:' );
define( 'NONCE_KEY',        'T_;2G[Z/h}<L>`S(^}4|x7prK9HT^#y~}B$en@(320pqV:$|Lbt*3kJ~qaymF<Y3' );
define( 'AUTH_SALT',        '`uN8Y6-m<E>k6hae2{B($%3dJ.~P(g7 ZSE46fz|gsJQ$J}8Lrxc,zQ3;DxVCV7u' );
define( 'SECURE_AUTH_SALT', 'R{>910-[Blc{ID80mf>ZJ`q(*sUOr;Qa@|ij%&SBF|0)v@-Ows:JGpFY`ngGCZEm' );
define( 'LOGGED_IN_SALT',   ';l282Y#y05y:C-/)O;2H>P@qkFO3xK_Tw1ab`3Xu7`=}wF)Oe7^Sa@L>LSKix@LC' );
define( 'NONCE_SALT',       'Gf[W9+swg>6`OFeqx9UU`[az-GlSjhr?R#~_%k6*k7~e!&%bmBdvh=kXuPq`O5=E' );

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
