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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '!XLz]Uv_5^CfE%?9_pKV{L&dxg@GH02V0PIjJ1G%(d)&In~HLYb;8G(:Hiy6OrU^' );
define( 'SECURE_AUTH_KEY',  'nQ%RN]uB-a3eI Su[Yru0(^0jD,3?/s(oy$c)t<9;3aX]y@70LQ>wF;PMh|#u-1y' );
define( 'LOGGED_IN_KEY',    '|1J3WNNNr@nO5fg$mF?X}^-t@[h#dxYS9-:KM/otU~If23cPXN]M01i~,NM[/1L#' );
define( 'NONCE_KEY',        '*IZ.pu#@#=iO&z{CDrnAr?GF-e?CQUX&Lc;0`0+v_AX[4 `uPyww7{xJEw*V=MeS' );
define( 'AUTH_SALT',        'hkH&N!znY9^HEn!7P1d[%<[_&{`VNdazN#VzM2oe*)M;wu*}g-gLGVt uitzcFs^' );
define( 'SECURE_AUTH_SALT', 'L:IRa:#{l4Jj>{YJqL_-Qm>Z0-~P@B@XwiN%wMYMq&kBd[7+=5^@&JCDse~vEU1,' );
define( 'LOGGED_IN_SALT',   '+[s>6_)Z4j:O7{X=|ju00_4vY`=#pElVT+)x8apDE5@OO$/)pcQ`u$fALh1cP*wH' );
define( 'NONCE_SALT',       'XdtQgo3#0rxU4Wq12gyEvA[zuF9[fnyxKX,w0 ?)1,$q[99ai8Ck<:FPn?#,QiQ;' );

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
