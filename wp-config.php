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
define( 'DB_NAME', 'membership' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Supaya bisa install theme */
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RLbs[N*YH<FtG]N:]h-&bA4w-7ee~if)?wB],Gfl`(&g*5<Sm^>~6mT(6zB2fY,u' );
define( 'SECURE_AUTH_KEY',  'zk.`n=lelLPVKH0hvi]z&penF!A^..&)[CuSd^,&!H2fPZ<qvvZ[KX&6IF%ir7h9' );
define( 'LOGGED_IN_KEY',    '}jUBaE>1~?mGpErI96f$cOW:<0F1Iktwo?cE(noM&Kv_TZ^V-jAQ-=h-rKZG~ok[' );
define( 'NONCE_KEY',        'xyEd!P&> E|-R_-NH2hBE@SPHP_ ::fAV)>0{9Zv3la]y< Va![NiP}f]IsFTQAe' );
define( 'AUTH_SALT',        '+?99M[)HUZ:2!,JboS.@[/_NfLGK:g#Y?hTP#jkO|20iveJ]Hi!0QdozJaO=NvLV' );
define( 'SECURE_AUTH_SALT', 'r|V#5rxI#`$EW}?6R]n<D<9hh-fvLD3:l?FfL>7dwM z&TqTgL#ePt5$!vogoBX#' );
define( 'LOGGED_IN_SALT',   'eo7kyB#xQS6NqQ$rM4TNbV3ilWA~_MlNOU,}4+r=s80@ku=^,f3Rfq=_y--s-J`%' );
define( 'NONCE_SALT',       './9*jMR?X?G,#XMAEa6^C6^*XTmo5V!YZ1JuY=&9RCGA*VD:Y2Cqaz@=g06.S? 7' );

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
