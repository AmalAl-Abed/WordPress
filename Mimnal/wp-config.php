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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '9,o$4#c<.v}~C{1A2`L=B-m.3WM_e6SGd.;IXN:#cJ3o5.^[o/9TCo`e(D%Dx?K}' );
define( 'SECURE_AUTH_KEY',  'S/-;q9%/GQ/9MRNetw8Vz `_@uhVX~=S$*Da=tSZ_I<S*;DWIAr:+9jn2Ct}f*(_' );
define( 'LOGGED_IN_KEY',    '$[pb^zE2r~T&gW9-8R0nPG4ma!+e]H|AzpMX~?as]lu<^iN?2f,Dl;v.F4jcR8$5' );
define( 'NONCE_KEY',        'Vt_7wTKX.lcNq.?~jKc~^JbJz^6oJaAIlYKa C&E8!Msk!]!|42wfD]])6_[eY~ ' );
define( 'AUTH_SALT',        'wf0tO$5gY&juiSM*Te$88;cMy8;-C#gsV1d$-X}pAT<J{8:H-<7jf~^dl0cq/[DH' );
define( 'SECURE_AUTH_SALT', 'Lw[Wbk@M={,La^@ogzLg3DS|K[zex.~F+.V,L/1?aTeOb|Zi&]v.Ki}pO}]R4|lt' );
define( 'LOGGED_IN_SALT',   'WS2pa~b5sKwCR;kX4#Jt%m2nS7zps}=8{q$W=f}4L(zje5hIxD#el<SyeYkvHQ=(' );
define( 'NONCE_SALT',       'P<^Ly&m]A%W^_CS!D3a[5n]40!xaliK|BOrgW_(e9h<J|sc=GT/frK4!5%63MC+S' );

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
