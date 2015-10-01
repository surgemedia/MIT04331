<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mit04331_jollyhelp38');

/** MySQL database username */
define('DB_USER', 'mit04331_7uMWxEN');

/** MySQL database password */
define('DB_PASSWORD', 'zh*a9aJ2zVsWAa56Cd!+');

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
define('AUTH_KEY',         '1?a+dvy}Nc <`1 xLp3Kr&rb%R87hRDgEw>XfZ+cG-Z;_|^ssW@F!D%sxUN9znWF');
define('SECURE_AUTH_KEY',  'MU5ARL&V(/>)@ hk9OByX/T=m{N4R~|o@/S|@r7!Y<lAY,v9T]2L@J`Zvva<cFzE');
define('LOGGED_IN_KEY',    'ahiEG|l/cXnCG<V,4.L#cIb6t@rMV_]4ktdpY_B|^C_G/6 Tuc8BpV~,[)s^5Xoj');
define('NONCE_KEY',        'WYX&Hg|)?Ssr}jYC]y@/k)P^A<dp.c@=C?FnU|Y#_D7vIuS<aPV=Zca)-]])b/im');
define('AUTH_SALT',        'BaFZO}E4$qPLH5;d{aGU:)mw4$9t8}gACt*f_aooy}HP1t.RH{5u+|I:tKp{s562');
define('SECURE_AUTH_SALT', 'B/k`y4q!<ht:uh&KP=]S/,1SUF*uA-G6#EJ-TsN6CY+Y4NK/M-LTYi?mFdE|e,vq');
define('LOGGED_IN_SALT',   '|xv%M6?HRiI/&sjv*C,Wimk%6XFPvF9-&&)|CkB&2hT59T}l]RjVHtMfX,K(sym[');
define('NONCE_SALT',       'Y=C;|dO&6dw9EZ.X6`-<C.,QK6l&&Q=2WZv0>AJ{26,CW} B(ve #!QN%_Aq|Q=0');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
