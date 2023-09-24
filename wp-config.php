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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scalex_db' );

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
define( 'AUTH_KEY',         'NS|KT7sRPkJUfCb~,QZK%v7E_X~6atnZIwr;?Gi*65+>g7}~u6]hmY3imrqZ^n!G' );
define( 'SECURE_AUTH_KEY',  '0kgY[%fIBJE%$W4Bg0NQvyT*m|eP,ye@kP}2Btk<~yGi1iBvn@E&8xZz|9403;3K' );
define( 'LOGGED_IN_KEY',    '.ctXLm8aYkNYeY7 6W2,Gz..QMPS{i`M)nuq9t{s$muljPdIw)Sr:y@ g<PHAe*s' );
define( 'NONCE_KEY',        'wY(*.wEvF*Kt26==PUHi:3@77!k85*0.(JcJV0dmgl eh<;yG*aI2Y1qr.( P.nI' );
define( 'AUTH_SALT',        'e2V$`*Fc]I+7<LF]SI{AvN~bTZaVfkU65m^2+rWdGRd+;Zoh)qa^T$Zi;{)}zI#6' );
define( 'SECURE_AUTH_SALT', 'Nt:k/+]G!{}C6&+m/z<^itK,:$MJIcqptX3`q|fB-cw>gM^K(^c$kfP9%v]#K{,;' );
define( 'LOGGED_IN_SALT',   'L8X}J[-=-hPYZ!Z,o>NFpvwEUQ|n%5hok%a_js=+><17+(9Mm8a%PN7w(Mt$qc(Q' );
define( 'NONCE_SALT',       'TOsU^N;UVt=dr}t J)$-;_sk3JOW#8tC|t]AqZmW9t1og$ZpZxDS}t,2u,$zjzUO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
