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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_pass' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'EV?J[=x7 R>-@:B76jf.,s|jJ(jL[!:d8yrnz{R*g`l{SEV@$wEF35wDHl2T?K|,' );
define( 'SECURE_AUTH_KEY',  'gG<gD7vR0bs}B-}]A*}-Un,&dI^w2q?M`v7/u[&O,XA8o<[)U]CaQ5o$-0O8,b)K' );
define( 'LOGGED_IN_KEY',    'YKsJ{ZHuri%@Q~jc^U0cp)~cUNUzU]Y|`14595z5%Hy-okD&O/?q;;F#*9DTt)zZ' );
define( 'NONCE_KEY',        '&3yK;X:-l!)53I=n|HY7el ) F@h{(A2(tKoHj%epfzzvbaUf4tRu,th-<J!#hWZ' );
define( 'AUTH_SALT',        '.&~uy]MiAi/ncQ[L1^Vad81ds%]Uoz`XY>ajw,m,dY6tCTp,qF?|BM,}+OQRl<IR' );
define( 'SECURE_AUTH_SALT', '/WoIUH[Wo/036>LQM.7/;!xO=8&HoDKXs={WNHBQMsvnW/h6m%&FY;t#yF]}6IOw' );
define( 'LOGGED_IN_SALT',   'g2h6G*]9@ldNK2z]{G+@LMd~!;mb+t|qJx6,G6XDv ]xor@S[jr7v$01J1I|_ud~' );
define( 'NONCE_SALT',       '):{g<$Ht!eJ*nQXoS`w-Fx.n{#&:}L>YW@TS8sPeVx/,&qA/J5Oz^;$MpWV>GN<S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
