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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '^RaOs^OU 4xr)2!kSpqRHX>oWzt6/Jf>[%Uy7^BlAK-$u2JKd!;[<tX5=|,wR~A]');
define('SECURE_AUTH_KEY',  '403|E#uvv$M*:vmV,9b.DtT1iy8+2*tz>wft0vuLZPpakL^Hu8C.]rqk;hU9>sKJ');
define('LOGGED_IN_KEY',    ' wE:bLjfm`ipvB6I=nh*q:hu>]|NL*adg05^<HDAV VzPVk` U %(vgYrAh&pEDe');
define('NONCE_KEY',        ']~uuQ:W]c]HNvU@(8!?6J`9-M-a ~Pj]bj[cFJ>-Df=$wR5e*WAlcyxMvsiXS)A1');
define('AUTH_SALT',        ',wM!U_2)%OMZc>N}Z<(B/EbBEI$M<MhQ]z-%DIQ$&!zM7_8}qqrw3 {Gl9gPu9!e');
define('SECURE_AUTH_SALT', '>EePNLQ`+*T[=S|)?UGD*#L=}%i%k{M.#[ydKV},gF~h<[W2/cc7=0RN<t`c>KTw');
define('LOGGED_IN_SALT',   '[,bl?-h*<]~Md*B1[pK_y?C*W)cSiBCoxR0-7)yz `E9#I^0jeD8|gn&qOgRsXh{');
define('NONCE_SALT',       'Q<6 |DZTJ_}h[K_vSlXj(DAu9l8aoPrcyA/tfP4Ey@|3F1%FOyU .G#[{YTK{nj7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
