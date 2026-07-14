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
define( 'AUTH_KEY',         '?h(_6T)G7`1lvSJ$p]&U_i`Ie(7t|Pny5TX0u3dXB4=)Y~2g.S;k5{WZ/7@_dATj' );
define( 'SECURE_AUTH_KEY',  '0lmP6%FV]*L~9y<#BzXUv!bwEy%ya~+Sea%nb`qh*za?Px>m7!IOT8ltQY5l cY7' );
define( 'LOGGED_IN_KEY',    'x0/Z*fMt^>pT|<FW7F^sIu8AL&Q#*GNe?xLi*1#366?5GXO.%0QM+Vx3?k#4;|ur' );
define( 'NONCE_KEY',        'X+(fTC~JYrg?KAcUdyuY!rl8:q1cdwBQYBD7KZR+7P6>$}T${5$f{;+C{@W|`wN>' );
define( 'AUTH_SALT',        'B=7R(75Z1TJ2>eV/;iEyl3h/0!Vb(U5ZN*$y,Ar{sh$=X=2(gBX2TxKNu?S$x]pT' );
define( 'SECURE_AUTH_SALT', 'L4iyLH9A+=HF9ld8w[5)2{VEF%uw[4bfk{8Tr4u8f-H56>??;l*?09owexO9>2:g' );
define( 'LOGGED_IN_SALT',   '>Ync|lFnu+ZM=cn-?$a0!j2j=,.t#mMMXIchJ)yYyxlwQr]+g=|{#]{P8-h1FO!f' );
define( 'NONCE_SALT',       'TKyki O*j:d:|XIsn&;~iRa1VNMj1Tw~?&V=)OTqNN&4j~*GEvIyNB6:/v_E2[I*' );

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
