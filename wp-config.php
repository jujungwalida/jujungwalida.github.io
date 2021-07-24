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
define( 'AUTH_KEY',         '!U:3[I12-Z.DGIy2B[Y9U-t}<1;r[:Fi+iX<#mNFM|3/R=;}lb* ^i3>U+k:pBE/' );
define( 'SECURE_AUTH_KEY',  '`jef`<y@#V:.MU<`uL~HSe#Vxg+7G5>]`|R< FW2!dJ&n?i4}>uL`q9]~!u(y0zt' );
define( 'LOGGED_IN_KEY',    '5}42FOp1o)k;TcU(S3k[I3-<>rclcPA}f5F_eGO86^RJ7z$lLIvM|Jwhj2?a,BjR' );
define( 'NONCE_KEY',        'ktcC`4W*ESr*OPzgBM!+Fr`)+O<Y|0PT8{Gg9dLm0NSvNu|A+5SV<r[4|z9mx57w' );
define( 'AUTH_SALT',        ' iK8&jgtp([^EJb{R~gA?~V*p.>i9ioNX(1<Y7!]w264g?#cAwr2^wJp/Ac=^zQ&' );
define( 'SECURE_AUTH_SALT', 'G>F4A%>Oh3Q!3k2ykiao_acD|k_9avA72$ >o=u*dviTy//-[i)xmN^*,Q}?X@4=' );
define( 'LOGGED_IN_SALT',   'ylHW`XTw^!J6Oy6U*-/mNtY^.tf.kC6%O<DO6Sw^oqT6Gm/0<o5,tVxT7R;M*sIp' );
define( 'NONCE_SALT',       '$c~[3lwm9ALGm,ql^ ?U+e:!nm]b`??fwkveOsWZ_-V}w;&= @<D{ewKo:9;-RmY' );

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
// define('WP_HTTP_BLOCK_EXTERNAL', true);
