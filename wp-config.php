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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hieptran');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')TnBuv9a)T[Tn>d(*%?4*:-A<V7i:~,/FB1HBd1_/50vM_D+r|s17aCVd&f_)LM+');
define('SECURE_AUTH_KEY',  '{`K}5m{!7BoCJ *>^4*Wr<go5]iCg_bvB?*-WR/<A(3I,WhWo7j>6(O}TS(ddKcP');
define('LOGGED_IN_KEY',    'T`W=SqTzaw}TF}v>54,^]O[$d;fXx3*T3#ddBt{?H>>e9opJSM<d1>}WkzQ]&gfO');
define('NONCE_KEY',        'XzY{&:IciYsh3#RJl)= Hx:6P`ep:B%dTF0N*}gA3Ge-LKR^e<k-/2<08-S`G5Yv');
define('AUTH_SALT',        ',T7Uf:wIUYfRFJQrvun/AqoNK:*AcNTD$vTv81=Irf%|Om: `)6^2{<^@<)+,FB[');
define('SECURE_AUTH_SALT', 'j}BRunbtS.*)D<,Hc1L,;y#qY8:-Sl}K+Td-b[OI9ec E<TcG~Yqy?O;M,27<msv');
define('LOGGED_IN_SALT',   '_3~82+$wn{!2DUj4b-w^ULN]^b2U]Z(}]qMtW;~h#!vR-dC<#F5j|pZ;i$ oe4k/');
define('NONCE_SALT',       'JsAv=y_|-[XuD|>rApcj][F_N%>44+:touf*RFP}JQkf.HOY^$jY`#K-3g_]b802');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

