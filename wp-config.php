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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'j8g P}i@LUhJU#e*u*8DMn3Ru#8!2MZ.;&b}fERpRpQEaHl^OK9kp]d+H*D{h7U<' );
define( 'SECURE_AUTH_KEY',  'T*k>]#i,/idw-n/w*6D!T|DDyt =8<#q_Jg2GjeR(p=JVZ;RHx=~Jco0;?%^7S(!' );
define( 'LOGGED_IN_KEY',    '0-6/x3C,>pqep-gm*l$$)P~v`s^YIh_!kezWfQ$0:NPNt55(1%B#Ev0yV d_l#9P' );
define( 'NONCE_KEY',        '[&fa>#ZQ)40k=k/8^Lg-+CRe/dU)w:fM)a_ij,`oIZWDcKye-mLZ1]xstb7^3H0W' );
define( 'AUTH_SALT',        'FWqE74b1}02R6o$+W7cO5Y)EGuM{4ix0Nfp>[A}D[ZNrh!$/AM8t{ZWATRWMxd`}' );
define( 'SECURE_AUTH_SALT', 'zA2:1+xBdhoS7g21K{ac P[,9[k.U4d4YC)`ZK{DUDa2pLi^lLb>6;m$ja@hx3# ' );
define( 'LOGGED_IN_SALT',   '; k0p~1Vw);6K$86<hU ]nX}N7|h)/yaw<#GkP ;/30#|dN6qxKCZb#0C9V|]Iy,' );
define( 'NONCE_SALT',       '$;S@&mqL}`?be0[8;-MK|wwfixh ]b=zZV%7I0@xuN8/8V]3^*hRzu^g=CMn16FD' );

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
