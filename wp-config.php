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
define( 'DB_NAME', 'chasethecoder' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'O%e>D)gK2<kPCe>d=2Z9s<lV0;M/kWeDCs-;W4#0qE-(%*$)cR?{1$mZdqps990C' );
define( 'SECURE_AUTH_KEY',  '+bU@5Y-[#e@2hTk.%u{}.(=KWY$MkA194)x6U{uy[Je4J-J/3:~G>4=j[<Uw>WH^' );
define( 'LOGGED_IN_KEY',    'k@ZQ;:y2-haiy0y,[6-p]J)}va7(#HT.^KD@/.`w~0@TM^B5@$l=,JmH*G|o=Zmk' );
define( 'NONCE_KEY',        'TZ6##u.S9}/3`%=J#F*0]ubfeT?/X73X{v3rKH#/kfis3iy#;|=nN)M.`==XJ>ZJ' );
define( 'AUTH_SALT',        'E6ZhQHR:YTONBjL*~n08uQlydnGrc+W,X 6ZV;]4 TZNoT IK]h,w~_n+Si[.-{4' );
define( 'SECURE_AUTH_SALT', '8hXH]f(u#3&2o3e$&;6IH$Ssqv/,qR2;11f$EAv:[`)L-BagNHKMHy@tt}fXxlYd' );
define( 'LOGGED_IN_SALT',   '3b<GV&(ag]A?Q-~[TBm-`VO*IYCKO;]pY)AKkqFneH5}wf[ /8=dJ[8su<T=KoBR' );
define( 'NONCE_SALT',       'ZKi@FFR>[Prpn|b(XamUl2}Q3mRgw&4K=v]k@&$5`;_jIp~L_Sab$r@D,;#8QP%<' );

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
