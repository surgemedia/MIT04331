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
 
/*====================================
=            LOCAL CONFIG            =
====================================*/


// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}


// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'mit04331_jollyhelp38');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'mit04331_7uMWxEN');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'zh*a9aJ2zVsWAa56Cd!+');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<HnG);:814i;5>UB:v|4!Xg$->Fjo1Q[XngYg+Xi*i~OWVE:QfROJ!Hb0)tkC-6>');
define('SECURE_AUTH_KEY',  'x4Ypv_D)+YOVL6Z?;A#_Z9*W2 5u*uOPE/|l~pW*,;Txz:)a! :Y(-C| ?xVN<o5');
define('LOGGED_IN_KEY',    '$m+qH.^?HXeb|S|%JlAX`h2D@#:$WdDsZN;8pS{Q,eDU$xU_W5gzZ_ZuGL]WkSW:');
define('NONCE_KEY',        'kuLjwi}Z<_*Z(#|WIGcBK+;}fX(L%JU%ovLV~4]Z ko|=S~iFP+`-Rv+f8hHV*mC');
define('AUTH_SALT',        'uJE+wazbd%Z8<t_>s5*&f_j|7}{S@;vH ph~#B;KT Kb /=}ebu+%mn>dZ+`q^E=');
define('SECURE_AUTH_SALT', '3dZMP:Vc57o^I0._>nQ1frBU^xF!$+*jjCrUkp |-x(_Z(;Q-/cq?re}%7!a@C9Q');
define('LOGGED_IN_SALT',   'c8,JeyPW$1p|!Rmg.*Gb$-`QJ3Dyq=(W=T.|WI7%Z&$-OTFSPjvyoA![TGmTku>w');
define('NONCE_SALT',       't@!D;}s-|7$Y`4f#+{[aOmZC)&|zJ$#|;|hQ: HTX~*YLoA.R{U54B[U-o6}mCHn');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
	define( 'SCRIPT_DEBUG', true );

}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
