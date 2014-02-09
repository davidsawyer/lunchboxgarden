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

define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lunchboxgarden');

/** MySQL database username */
define('DB_USER', 'lunchboxgarden');

/** MySQL database password */
define('DB_PASSWORD', 'lunchbox!');

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
define('AUTH_KEY',         '|y9/?~+wnr(_a!PBYQaw]&jNtNC,V(0((Ufc+D7&MSOT9tc _ >%Zd/ta_<.Dl8W');
define('SECURE_AUTH_KEY',  'HlfWNu#o3gfZ*+;SdO:NWe~BbTZf]K%zK9.hBD`A=~JC5>|*U+gK&R|i6J2UyM#Q');
define('LOGGED_IN_KEY',    'k]-v(Il[w&Tj!$cF}iYKyP mm@No`oiIW^^u7Sn[D028Q0ywWoUSGH <$j+F5V*F');
define('NONCE_KEY',        'M.iB)R4KUB!i`,{d@h31]Ar9@Dkxn1G@,b4eea{w?+X[!5PoO@n.V+~YB_Cfx|_/');
define('AUTH_SALT',        'Zy/[}lz):Q()!vNfD>v(LT*UL`)FL;Q> {obu`C5sZpC]mr@Tc@uaw`y#T|;6UeN');
define('SECURE_AUTH_SALT', 'vZRjkFi{xXkWe3pIh^l`yo/1!,N6H#xU7W>>[R<U$qKS-A*GOz RAf%h{MsY,l|+');
define('LOGGED_IN_SALT',   'm|getl:pB^B7y5[m(2brx[I_n5KM,XuDD@)jSAHW<YpA^;u&m}Ax(vDbC|TYSYbZ');
define('NONCE_SALT',       '2DO2V|EmHJWIQ0U,7X=d/[Il$8WKpDwy*E7#v-@J:v5~x#2m FLMadI-24eC0OvM');

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
