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
define( 'DB_NAME', 'nadasalama' );

/** MySQL database username */
define( 'DB_USER', 'nadasalama' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':pv{cZp,Q?mqB1;2n=Fq&fIs&c6=~6:`-*A9oVcm! [eszX_mxMtTzff~KzuN4;]' );
define( 'SECURE_AUTH_KEY',  'gNQ**<+p>&6yQYieV<Jp1N^0w} }I>>pQgWs> @$x EIW`A_NA@`{Wu1Xhai6:a:' );
define( 'LOGGED_IN_KEY',    'rMDY|wW8DiB5AW0XT%<?IyF$qR@):kv/%kw6wGkt?)t]ev|9hs>,~oEmet[8nWzZ' );
define( 'NONCE_KEY',        '|N@MQYr$$5LoF]E>u|2NtGw{cddB{6xpc-?%st/[`ZIf[*]DFV-t=o>rHx{=-%;2' );
define( 'AUTH_SALT',        'VgqAclUik}5+m&R!n=L6{6/M|[GP]-L_8,-(?g:<yPE-0UY>AwJ?dhVTxQ$<f^r?' );
define( 'SECURE_AUTH_SALT', 't=VO=K=O-UpVb#y`064u$afI(MHfM#&JOJ6BT:C]W:/m$O%i5I[EL@*|(CQ?A;-D' );
define( 'LOGGED_IN_SALT',   'Ulv6fL6n$]GvCeP*0}BA0g_7.b;t,os=:(` 4qu5]%6=9e|[3. dMKK`E/xofC67' );
define( 'NONCE_SALT',       '40`Qdn:p.Ad%s: aa3;2]<@+rAB[^kur1A:aZ7[M/J0jmR7X+{6L$3?aj1uKhw-m' );

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

/** Block external HTTP requests */
define('WP_HTTP_BLOCK_EXTERNAL', true);