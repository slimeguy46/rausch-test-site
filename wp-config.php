<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/slimeguy46/Sites/www.example.dev/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'exampleDBjud5g');

/** MySQL database username */
define('DB_USER', 'exampleDBjud5g');

/** MySQL database password */
define('DB_PASSWORD', '2sxVgGSnwN');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@!n!rYJnUF0N4,lSD:H1_p:-l~pWGlSC:G1_C:~k_oZKI2.6<yf.qaLeP6aL2_A]x');
define('SECURE_AUTH_KEY',  '6^j^nYFjQBYF^E^q,ubMqXIbM7.cN4,B>z3,vczgQrcI3QB>z3,u>yfMO8|w[-h');
define('LOGGED_IN_KEY',    'dZG1RC:-:~oVzkRoZG0xePAXE;H2.p<te*paHeP6#H1_5#xefQ7<B{$7<uf$jUufP');
define('NONCE_KEY',        'SO5O9]wXE^3,u.qbufQ6bL2.6<y2.uaxePA8>z}@kUvgNkUB}Q7>y}$j>ufMjQB');
define('AUTH_SALT',        '.TAPixat.6*2Hn$0F>BQgMcrYn^y{BQ7MbrXn^jy{AKZoVk@:z[8R4JdFVo@kz>C');
define('SECURE_AUTH_SALT', 'AEXm*m+;x]AP6LaHWm*ix]9#5PUn@0z>BQ7McIYr,n^3$EUAQjMfu<Rh-gw|8!4J');
define('LOGGED_IN_SALT',   'ad-[w|9!5KZjy<u.6METmPeyeu.6*;HXDTixet#Ngv,r^3$}FU7Qfvbr,n^E<BQ');
define('NONCE_SALT',       ';ePexap_2~;H]DSh{BQjMbuXq^3${ET6PfIbq*m+E<6PVk@}z>CR4NcFUo@kz}B,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
