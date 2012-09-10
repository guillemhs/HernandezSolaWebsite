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
define('DB_NAME', 'will_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bo3usi');

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
define('AUTH_KEY',         '95>aA;skZrRdbC)N8N:>uI[5S_)ip8x=.Lso4$HT1,rn4ZN[W(TmDal*=B;Z)/J=');
define('SECURE_AUTH_KEY',  'Wcqte1{rjjsa^Hs0Qt6}j#|-/@m55A?/+;5DGFYu3]LJy-mMi$)ZKf$p^m;k|4+ ');
define('LOGGED_IN_KEY',    'Jv[&n]6%C@#QQc-y#~x99PZ-HG)gOs)x$s>*q*xZ8je+$%T%L:6el<SDb?+?KepI');
define('NONCE_KEY',        'S+%qGQ*6>[<.[D_%DUkdO)HWA;9m7U#^MX?X!bVq[0,]peM=GTskgQ^X4Wq[)|^K');
define('AUTH_SALT',        'RQ:rO]/|vr7*fL2Ps}/|W3>-8>ld#Flz&!ZtBR]x<-@zuE89$2p)Y>~9iPF.b&9u');
define('SECURE_AUTH_SALT', '!-t$-z:-F-&`?+2Fa2z?Z}f[/ObAig:|kF9->ZG[|#HtB#+PPKv+A}2xBeYVc|yE');
define('LOGGED_IN_SALT',   'ynbluZ:4SV!4(y}%q7j/*(FR[a!#<`o={,U>CR-%=z7I9#*5BdiN|@pW3|BbCv:,');
define('NONCE_SALT',       '>&o-@v*=&5~^@*K/+H E!A^^li]E8-*@pg+lc-,{9gz #~_Hjl|w/23@KFZRnE=q');

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

