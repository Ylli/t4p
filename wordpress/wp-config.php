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
define('DB_NAME', 'wordpress123');

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
define('AUTH_KEY',         'j#[bDd<z}FF;c.}-[~)!,T:>iEA_uxKoU5:`ugkTZofaD5)6IQ<r4tF Z8{,J/2c');
define('SECURE_AUTH_KEY',  '7)o$(w7!8_cXGI!Qi/z8l_4O{AJ0/}MFVK7jKTDJn`maL57.)hw6Hli17jh_pD!3');
define('LOGGED_IN_KEY',    'jQ0TqMZzizwV#T=a+H),`Rp`za_r=Dd2,St@[wMwXaHa;{AMg#!0$}qHlf=YAKHq');
define('NONCE_KEY',        'g*RrPM4CUyg2<T1(gNgFoMjoNffN)ouy:o*X,l/uDwU7JoVSR>^F(AVfc7b;FiA}');
define('AUTH_SALT',        'l[bfFZ;&29eeQV3YE@HG/XM~~uRA$e~G!)ZbfvI2e%ljd6%1pL-xHCzA&|*)EyEU');
define('SECURE_AUTH_SALT', 'N-G_bgp0&2#qh.1 =JZCpK~4Fg!hXaDd@;Y!fSJ1b2C8Y{7VU)t(JggfeT,#DW)E');
define('LOGGED_IN_SALT',   'vh<1=q6^`VIh$sliaNU>m:,_k8N.Bm4Yi;J%q87Y>jlTJca}E%5x@WxTm^djbPuE');
define('NONCE_SALT',       'VK`st@cEn^,>s-AW_7.I,}u7WLmT;Jp%H-Eu[17x-0ijuod`I^l^rm`=Eq!,INPL');

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
