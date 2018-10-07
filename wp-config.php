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
define('DB_NAME', 'lg_library');

/** MySQL database username */
define('DB_USER', 'lg_library');

/** MySQL database password */
define('DB_PASSWORD', 'lg_library');

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
define('AUTH_KEY',         '<BGP0N6Xn%rw-y,pBO?/8=:Q|b;gSk5ru;dqw5_M&E}GC)#.`VE3gzCT?.8Zw}eC');
define('SECURE_AUTH_KEY',  'V;hBHs_5y5CbvV9nC$yS{;0x}u|q/%h`|1iFr+v}uFCV>#J+%%FNsO@v^O+_dTM2');
define('LOGGED_IN_KEY',    ';caIGJLyL&,x^e.MTQx!|{6o-.UR$Td!4hrH*F7Y7LTE!T7pNU%P{`fuU`TA}XC_');
define('NONCE_KEY',        'M_^As5zCd-cE=TZc4=z!xe{#tviY0l@!/4`x|+CZ^5^n%*&kCbWMc$V%e:/$3;|7');
define('AUTH_SALT',        ':o$(6GP~feE)66VIn[[3+v~=N%W~M48r IE4rBy<M$842eJy+>hH/@N=I+P02.GU');
define('SECURE_AUTH_SALT', 'RwgYkwUmg?WKb0p fOhr|e/Li,F`s>+,[3/$#e3QXf7i*ENZ5|Q{56S@*hK9|Vbq');
define('LOGGED_IN_SALT',   'ETx7Qp#<0b,_oLRty,}#%H8OnbQA,Y(uH(b**4~R13:]|jw:HX&]4bTO! zY+$!-');
define('NONCE_SALT',       '9c!>d+RV~&7.  hL0P=}O3Z r/Y$uLuq=n=Y[vbI+RShaL_-*p/Gb*Bz9_3-?l+N');

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
