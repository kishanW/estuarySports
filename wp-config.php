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
define('DB_NAME', 'estuarysports20131119');

/** MySQL database username */
define('DB_USER', 'webWorker');

/** MySQL database password */
define('DB_PASSWORD', 'atox-d1109');

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
define('AUTH_KEY',         '<z3`pw<E}O?SVJR3+z[-dw}ij|NX]4,-MCZZuq@ODY;=oSmhfVYabRS3inb}I!V|');
define('SECURE_AUTH_KEY',  'oC+58/`!=/;K/_V&v-OZ.ebx@f3jXCsHPr_i2kY6!?{(NyhjF6|<}1umKho_JJ+l');
define('LOGGED_IN_KEY',    'jun?qKKDS8-UZ)SpYHQ*}n]CRMQk|RjFHv(f<].2b&l8CJrm*_:/EzDlt|x4VqUG');
define('NONCE_KEY',        'Yv*wWJpr1]B04SCl@G~zO#) NJ%s! CCx$uX:S8/c?+0|i2b0Q2`uy.Hbdje*i|Q');
define('AUTH_SALT',        'Ceeb10C)h `R[gdSLnxM[33MC85cLrV^bp-81wM8p*xm:|R)W||Cb$/M`X__- dQ');
define('SECURE_AUTH_SALT', 'G0ZkU_1p~|Xl9U;pM~A|!r+H}3YM^-DaoKk *WZiUVSZ4#+|)I@,U7Mx M>Mmqd4');
define('LOGGED_IN_SALT',   'h16CE4uga-,pVdd1k).=!-!eg,eoc]p,h [pj?<n|B/ AEj$j&{stQ5|BdL&&`?s');
define('NONCE_SALT',       'C9b_++hoj__|F(r7-(#:BYZXFx|Cvo,PKi5|PvJ(?nj.QLH%Y94SIdZXiGu6~(&x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'es_';

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
