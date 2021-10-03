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
define( 'DB_NAME', 'InceptionDB' );

/** MySQL database username */
define( 'DB_USER', 'hcharlsi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'ubhl@G_mY/ en{tXO2BJ,+AmyxI5w*YcVAsh,d~58Q8UE[XK 4W(oCrvDn8hb|QG' );
define( 'SECURE_AUTH_KEY',  '1ucY-SnWx2Ke?*(FN?D6VB&y&n[()}xDN5DBTOK4i-7+nZ9~<dN0O$ @jCsPq`~h' );
define( 'LOGGED_IN_KEY',    '0S+BK1/?TQXb4_Dls$&~%dqk=bg4u@$EPb>Sr!qk) 0|)gx>1qL2;ld$QM{nWq=x' );
define( 'NONCE_KEY',        'leb4:lmEDNJl@!@GU08d[;$So^H)Mx S(;@PmW<+6IkngaDf1cnr8.0*yF:YT >7' );
define( 'AUTH_SALT',        '@Fjm:uE/Hfcgp_1kY7u{Nf#^ZmH,Y{TVN5SpHES8<>fE[EnZN2Y:s^l}$]vKM]UC' );
define( 'SECURE_AUTH_SALT', 'j#mAT6F)kr1zAq0{{O=o{sI!#l}NIW.CK2>KVXoc?4zzC5o nHh+Lmdyhac#m^`q' );
define( 'LOGGED_IN_SALT',   '+n0l7yM&OUN>DHK?ZIt-9sd3zZ#%_v~YDOKJW)Uj<y;hp+U?LGz+{2]6fz;h{T(n' );
define( 'NONCE_SALT',       'zWQeU?qW<|U@8#{TbDU?kd79K<L%rI^:Xo4!m+:LYX%aeyR?zbN8^8mGpV|ez+IH' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
