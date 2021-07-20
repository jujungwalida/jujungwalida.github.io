<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<dL9fUA[><UxiEb.jx#Emlg~GYJ#)Ic$HO3605Y[X `$UTDFP?@TL]Z>3rz(;&2i' );
define( 'SECURE_AUTH_KEY',  'IjxU)J{{e,?6YUc;d|^ODBd9;0tfb1Og`,Hlw?xX%E7=8tTZHH.A7C:E?b`XU).-' );
define( 'LOGGED_IN_KEY',    'e#4=#Q~e`2D-wv8f_k^PR|L0%a/$u:R.$LNpQHa:![m7wPed|KP>bVlRU[0]Re:Q' );
define( 'NONCE_KEY',        'j$o<;=^Obg_N&c|(K}O[tFc}>CA5g,/)%]TTn@:sAvhG7!Us0,lqcz]u :=|6~]u' );
define( 'AUTH_SALT',        'p*[c8tJ2p<fb*W-p>*,EYY4_y]JVHu_/zzv-FWOrG[m2kItQrsi%xBWSa|AuEg4.' );
define( 'SECURE_AUTH_SALT', '!$SjclZ+ IJ3)zWTqAP]PiHuKkAwES7M@IN}PlO5!Li9u [>t-e7akv/Br,<0Kb]' );
define( 'LOGGED_IN_SALT',   '(127_0fd0xM$-pJjV=4PcJMRW}hd1HxjF@u&9#={ug@yB0e(VZk]JoeCpeEJ%AX`' );
define( 'NONCE_SALT',       '.J.Xfq[9N~}NQHa}D!37V1A4Xp|BQHQ33=-v=Ii-s1blXlNE1ZOldKI<lsqPMBVo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
