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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_ironhills');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o$y/;mHPXPW Lwwjie9 4kj63e{M4Bqqs=_q#*@8E7%x7OVP>2 m8S3z6/D{[0j^');
define('SECURE_AUTH_KEY',  '~_hojb),0s_Q:AvD 6y`o&NNMYvBV}$ ,;3EfK!3/P+$rtoIiIZ7$}4p1s.]i{8;');
define('LOGGED_IN_KEY',    'gcwbc}Ec/uG503UQL]n#$$$[N<UaA^Z:Ty;~ng<D8aeYS2$ /zN!bem-:Xb}bTOs');
define('NONCE_KEY',        'x<G!uutNDQl~R|pQSKCDGo||[K{!]x~#zJ[e.g ]>,$TG8ioOzKjm-iBJG~zyq<|');
define('AUTH_SALT',        'lD:6[cNRnrz|@&NhY<A/iX]M5Tg ~3/!eil7uE*i:UN&&BKF9o4gm.J__47F?Ka(');
define('SECURE_AUTH_SALT', '2<rxq@_Tg [Ly(+1h/_IU#2OCOx7V<(2Dwh7G#*CR@gch+,sgLW._mT~3O*^I8Le');
define('LOGGED_IN_SALT',   'b-?WO^&39dl+nrWKdkA[?Ws%/X@CTxm+X+4fa1k6rEJ@O>`#Qr8l0h5Bf`b${B.?');
define('NONCE_SALT',       'GIm8kMv`2An<D5R/U|5YKh|uFn@&XEnkiGtleO]C;.(22b`9J;AO$.n;;Yp!buo{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
