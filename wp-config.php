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
define( 'DB_NAME', 'connectme1811192' );

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
define( 'AUTH_KEY',         '8$RG>7{JTPVt[og($$jVU9Jrl1Y9?vC8E|&UaX+eVETKty7N3Prs,}um9G;Rtpvd' );
define( 'SECURE_AUTH_KEY',  'l`0HHrN[e!lz6] W&. !V(*Yqo&*$?|RtIlt.baq2dm-so^{P~A`S)<_IYNC;3x.' );
define( 'LOGGED_IN_KEY',    '2C))pa.V=^j33S{ZfR.8&|vpVw:Op{Sg`SLG)o5l9I|`A`VL5Jln:>HiPn3cTk*v' );
define( 'NONCE_KEY',        '6!luKhP;a,y5t_yE_J,VDhj_1N_.$%[=yJ.Y[N9j@._:XFzHF)N!*tHwcH9^&f|%' );
define( 'AUTH_SALT',        '.oT3g%2~:{P@{R[I)8uybyHH#]s/A-#2W{V !I_zhYraKv!]=S Jsj0woS-,e_ET' );
define( 'SECURE_AUTH_SALT', 'C0P3IS*1GT]FtU2]C>eWeQW@U=Zn>qp</g8+9P^rkOG{$=-<xfJPEYHC +z=Y`M%' );
define( 'LOGGED_IN_SALT',   'NY#Cou>8.I- p2KvWT.Upf$*e%/J#b`@:(g;VQ=)~IuUXN#g^G(W(Ej]2|U6xd&J' );
define( 'NONCE_SALT',       '|oc M:^Gbpa{9[={2mqlTIzv c}I8,UfLWg3j&_%kuzWAh]Qh?I*t;{DG&yHdN3d' );

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
