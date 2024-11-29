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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ';Bp,LPl8x/d`kEMKm;-Ih$I>Wz/}q50QUB;KRp 4yuXXLk#Q4Jh6_Q!5gv;a9in&' );
define( 'SECURE_AUTH_KEY',  '$e}Y^x=5wkMbe~e#a^[Y{!0MfwL~d%6I1&?`5PQlYQ>e?h3uKxx{=>|X-x(id*]`' );
define( 'LOGGED_IN_KEY',    'E)e`cg#FnGayLT/ Ka6Z(5Z_/mmmNY}X//.Z-f1 ~k_G-iogVCP(zcMm_Z|09*Kk' );
define( 'NONCE_KEY',        '[QFtJ9/ Nvj@dLL+m{evBkgOL<*P:/CKvcF?A;5K$%@4~g8+{/1lH&!t$]bIn%H+' );
define( 'AUTH_SALT',        'Tt$!2d!xjAv%H)em,ia:7;R&5^:4xzqLr&jg2EF?l`CIUwguB>Z}OFW;.#K<5x2S' );
define( 'SECURE_AUTH_SALT', '}3s{Elsb?bm[&CD>gcf[:E.EpUR6(^xT &CnIaj#s!@BBmd0iGe@gA}h;E#Vsw`w' );
define( 'LOGGED_IN_SALT',   'Y$fj0gyDFqty?TId[cnB9VOqn]StqLw$x-e+iy#EYu4U#J3xP|Bjw>G(kQe|njuA' );
define( 'NONCE_SALT',       '46[Ln&2eJFnVx}>.]Na4ECos(`#IF7I:j*kZ%)Uaq%;Y??e~<P.NbI4gwIUg<2V2' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
