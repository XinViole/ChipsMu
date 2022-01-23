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
define( 'DB_NAME', 'webkbt' );

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
define( 'AUTH_KEY',         'uXTJ2SUbZrjG9!r6)c=390P>2{c:ViYSKh.vofb]~n0w$pN2J,ngtT1dMS(4-Bv[' );
define( 'SECURE_AUTH_KEY',  'lW}RI7P>e3ur0Z>gV/M{3[wL_f|q(EBWguxD|*.x#z2KyAfY^YF_@b/N0#aY?8=e' );
define( 'LOGGED_IN_KEY',    'I)A/$=,T^c7Muu,Er|l0z`viBn!jAsYZvAuqQ@siaWOvfXgz>wl*>Kz2wS>6cD>Z' );
define( 'NONCE_KEY',        '`Ict54^+j(!NZTmx^2e$j6]?5(yn-N^=s-rKK6:SD)Q.,/D?un}$H5}= RtLWZ94' );
define( 'AUTH_SALT',        'eT1em1H=ZV]b!#bm2k*24|i_1C_8Ym@;B+R+|bEI|sco|_j4Hm;t@(iS~A~q~Ru4' );
define( 'SECURE_AUTH_SALT', '_8%brfa}CE=wpFnH:02-PXseeSfMqHs{EaEve0H1f*iAj%sEV!K9^^04mJ_X8~b/' );
define( 'LOGGED_IN_SALT',   '[jDoVm<vS-1jFCeBKr|.cm C$hxW2wwzacEfN Qfm%L{G[s5R,:ji+VDfV[F}tN|' );
define( 'NONCE_SALT',       '^MB3BXS);FdFV<N8*xLRSjlN5<4wBAQ#,Y_v0soA~la5^VU2(,`;O9#A=inr@V/-' );

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
