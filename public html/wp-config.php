<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u219857939_flukydigital' );

/** Database username */
define( 'DB_USER', 'u219857939_flukydigital' );

/** Database password */
define( 'DB_PASSWORD', 'Monojit@7797' );

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
define( 'AUTH_KEY',          'r%^lK)eLYbrx!-lqX{7@z5bX]{?4z_C16.2/+Yfo2 Z^W`+31r[%k`kWL|;x&uja' );
define( 'SECURE_AUTH_KEY',   '0yhQ?$7P,Q)d=oGZ<K3N2o-xHohs`T;[B r {V6MPsB~}Y9})SS7ud@Ul20+*PMT' );
define( 'LOGGED_IN_KEY',     'x~op6!^lJ !6mL9J:C:G-QnvQE}d~uH8!D=]y?L^ZBFUAD])}eOqgD9H:zqb*wrC' );
define( 'NONCE_KEY',         'O,jR;F=&oeTV[Y_bO-dX1,a@DA^8[EuRY-/UK]_N}R>u3Q:IE9G]]!=:^=D}X7gG' );
define( 'AUTH_SALT',         '(Gc!(>Hq#QZ3 r9wJfzb*xCsj:&lY5v*_EcCG$p+*@{gmQYa)rmM?WHGUyU;est#' );
define( 'SECURE_AUTH_SALT',  '`;2ROp|^-/iz?.OjrfW!fMbz_df9;}o`P[cOGQ]Sp&V[Dbp[]Q=r(VaMTt{/kg0m' );
define( 'LOGGED_IN_SALT',    '5a# %.qjK;CBLoTw14U4_.(B&h$x#>/uIS|d~|=]5Dt2-AsPew9PVoV>(mgH)fb1' );
define( 'NONCE_SALT',        'FMyKkf)t3kTS$E$#Kc+OT]PP|OP29{[<~m]?ea!=q]K60[>WoItzN:1yUo$.S|3_' );
define( 'WP_CACHE_KEY_SALT', 'Hi2%.>x2KyQ)d64;L@^c4ko>*qD.3@2]whG2 lt&z_kl<Z{MJy#pk7s#9mbCV2d%' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
