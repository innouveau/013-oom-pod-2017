<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'pod_wp_2017');

/** MySQL database username */
define('DB_USER', 'innouveau');

/** MySQL database password */
define('DB_PASSWORD', 'p2C1M0MXG6kAfAD');

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
define('AUTH_KEY',         'D-u;/H)&w3bDI$,SKaK.Nk[?e}p|wx4yLr(t,wc=&E]~-m} I?u4T--(>-!#,4-/');
define('SECURE_AUTH_KEY',  '0(v0.P]ohaHD0S>:J|20IkE`_JR5~xn2qY<6KDY@9.2P{.|Oo|i $Kfpka+>1I8J');
define('LOGGED_IN_KEY',    'H6pQd_G`|_~3tgWNmz{U_DBn,gHU/1(M}2xwE!vl@%|X>nuIbyJ!y+>[i9mpE+jH');
define('NONCE_KEY',        '.}7SagT?6l.v-M+^<-?Gp+Es;<QFmF1XJSMR`-P),]^_-c]I**wU%-<%uV!eJ  A');
define('AUTH_SALT',        'ix9s]4Oz7h7Rrz^R:b`v|R:dyq K*Jg_ls;r(Xn]V4:,(OZ[Mo5e1>QU clq:<J1');
define('SECURE_AUTH_SALT', 'P13u4<%GZH*ZtY~+  Pl>^n-DwL+cdn]4q]d=L!|5=Jyr8PV976m~3h.n(}H4O)K');
define('LOGGED_IN_SALT',   'r#+2~0n8h7]|?C67A+$_17Lv%.-b~EO@VOSKqq7YDti jg{ `KKpV~aWcbRQn{p^');
define('NONCE_SALT',       'e?I}Qn7lzl>s_EgW6TH<,@=WDXMd?+30*+[r|U8mw~{.tk>j7=xA{5yb~#!(HtdK');

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
