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
define( 'DB_NAME', 'synergytop' );

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
define( 'AUTH_KEY',         'yzdv<8tJ7}WjP87]|+}u<rY7Qr=3jhZxWatctd(YGLnz?TQ@+|n3)Nv$gF(Jg}[|' );
define( 'SECURE_AUTH_KEY',  'ISMQxy})1*-tzZYJjusZ0EM>[BMn7 ^=K;T-B(fFW(/smV4x6ke:[UNMWWwDL^&L' );
define( 'LOGGED_IN_KEY',    ']e?&Yd1M&1&-NSh~z%P)U7p@VNM/~$)r5V6!)4t<^8g7Bu2DMcO+10rr0%$7q!0|' );
define( 'NONCE_KEY',        '&Y?nUFm_PBO|Ej`oWPH.^,*?,:.iW1.zYPWhBkqm0V3 EbMrg|?&Y>>?(>tkDV0/' );
define( 'AUTH_SALT',        't%r}k rVV87/x@rWh`wH`RDnX~9YK`qnP@Vx]S!&~4w^]jv!!IQ@xt(]*hZL`dSP' );
define( 'SECURE_AUTH_SALT', '[IG1~&<Rgl.RfH?Lf$/x8h4mN#0/U=W`Pa_O$qAO?rV,tYk{-{njte[`%yj,?b::' );
define( 'LOGGED_IN_SALT',   '51xZytKBdY)}Q,t=W-9hb;t9BhXujx^/m[Z5,OnfRMy]mO1LpFEr7K@s]!|5h8Ln' );
define( 'NONCE_SALT',       'kQ0!l[/Y9~XgnoEKdX|{s}>@#y&$$$Tclc+^j;7x(S-6`,|#a$_8.MxCK9MA%Wq0' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
