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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Cloudlab123@' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
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
define('AUTH_KEY',         '1FQKZ,*HeVhO-7x2RU:)SxZzX@p!*]5+Msyy9v4M%Jqf^(gP&+^o7-kAI!S-`E<|');
define('SECURE_AUTH_KEY',  '(`g6hLRRsFB_72Z^(esglnm-GW&ge$mWJF/4<ZMz@0/Vp0MG}*cD<Na-&rv4|#]L');
define('LOGGED_IN_KEY',    ':+bChiZh9_6E@O&]|;,EOpJjn|xX ^/F*,C#>c,Lj,+{QfnMU|xS#^E7^ B^;=E;');
define('NONCE_KEY',        'VPv&RM|cqqrd!FBd0C{7n?R$+MNqWA<(0L-CMDK4NV55C^Fq]l]dh-o7MU{q%$+M');
define('AUTH_SALT',        '6L3-?Lb`9).z,MkW@-Do&r1xbEd`4|T`OtL>t@<q>@wi+d) W=)lD[NG&ZDDo~ ?');
define('SECURE_AUTH_SALT', 'Ut$#MMbTcJDB_VkCq3j8qmul](ME.9MNQa^2~{t3AoYvQuf!5DkBv4K5zUpLCFon');
define('LOGGED_IN_SALT',   '+*(UDOn7wnvDge3T,8XnJ.v+mm8<&R0KM/8|{#Zzk5!+hiH&pa+ti|Iwe.l%iO$O');
define('NONCE_SALT',       '<->!9Vts)-vlueQ$AKjxA!-6{5Sx*(ZM+kqu_eG-CV`ffAC<)>?N+jp{dE^4|^BB');


define('WP_HOME', 'http://maira.store');
define('WP_SITEURL', 'http://maira.store');
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
