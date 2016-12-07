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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '},3Lq+9Y^JL`cT-c|piU`I}qq`7-]<G#vIxQ<bP9{)x*`M`Ny]|g3x_NaS%v=s+$');
define('SECURE_AUTH_KEY',  'k&GQ|Vu/5+kIJ0Kt$Z7QO>{0*>*q&`iI7sj`$l]wYX>z!dVa+-2<8ou+fi9d%vu+');
define('LOGGED_IN_KEY',    '>WwlHBik9~HYQ4lAME+3BzRT,|xIDIP`=-KO+?7|uFwGJsx-+~ZZ[qsCKCPc|%0;');
define('NONCE_KEY',        'NO/{Z+t!+oE`sp{41TwB(@2rE|`?|3J0c~%:qzy)2 .*OQen7?xXO]eZ&1wv`,*.');
define('AUTH_SALT',        'id,Ym)MwkyVk2r+D(H]E!%G;%>DIxc0_dLsHF|*IQ|FX/zJk[c-XK*pGV~BAL|2G');
define('SECURE_AUTH_SALT', 'ou@!VoT|>kb|S-+<xjRpX=-*,dR6rHYHq,$%@#]xt/) _Md):?*-JBM);M. D+r6');
define('LOGGED_IN_SALT',   'NX{.mn|^Hnt}Yd{#{{l }d|.rmuOb.^urnV[g+K=NB{w>Qm)a]G~/k+`B=R#J]JO');
define('NONCE_SALT',       '~l^)|bU-OVbxA!`)-+4:[[Mv(~0hgt7gxX)iF.m|Dev9ZzH=A2`Q&^BO!!13 oBZ');
define('AWS_ACCESS_KEY_ID',     getenv('AWS_ACCESS_KEY_ID'));
define('AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY'));

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
