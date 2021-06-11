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
define( 'DB_NAME', 'wordpress' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7nV;y4-dX0`|pl0]Jq_!#2[[Hd3@d5#eVM+G }cr9vd`)$Hil(b&9j-b/m$vE{QP' );
define( 'SECURE_AUTH_KEY',  '9m5|L~fa2CwaORU:}a;|7RN*3a9l#0`F1H]>J?On#.{9tWeB@LQvQykfM8;j[!WD' );
define( 'LOGGED_IN_KEY',    'AhU)}eQ[8k[pWEzV&m1IX/m%j]^(uhNkf{q~]N#k?i>O( >Ww3CtMJp( oK^ 9=<' );
define( 'NONCE_KEY',        '4mG`G[Iv.;S;U[2m;HK=?!<89HI#4 ?n8NNVrHOPQc}_2R0>cBxSN$Is%wi^.fVV' );
define( 'AUTH_SALT',        '>VwNj:<huY]*lBqkH(,B Fk+XSb,X+-X(EjHuOxdkubt).o7)%HC8[,w 5c<EnYS' );
define( 'SECURE_AUTH_SALT', 'ujWa|<UOC`,91f/}#A_&3&a#?A*nE9;]W&~FkMhPjb5rH[oYLWE n]-bRZ #: ZM' );
define( 'LOGGED_IN_SALT',   '*|/HoEk;dkC!w~NW0=g0u;0nv3}fH$b;iO{,~1fCRW,Mgh*yUs:@__{[%z<U1SQI' );
define( 'NONCE_SALT',       '#k2Fr[eIgm$:vsZRQtEswy.{D,|ogDo~reqrJ_8Ra99Wc.GEr}QpBoHx3,u{vH3o' );

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

@ini_set( 'upload_max_filesize' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
