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
define('DB_NAME', 'wordpress_eshop');

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
define('AUTH_KEY',         'g o`SBo&w?!$oFrkE0SnXehvF`,S4|kwv:Z?;oMK5;%`Xq,C5yJ6Mh3=@pdt!N<!');
define('SECURE_AUTH_KEY',  ':Tc)A8jv`gHIt6boPVo6Z}:pP^~=FW1V3Mt):#%V.(l#~$M?Rt}.i[g{Fi7eLj4[');
define('LOGGED_IN_KEY',    'EoLONqSy*Om0u/ad|lm-@sl[Q/BjGtP2nncS]VF>AjDlm$<85.&W?7cCxrGbjeiT');
define('NONCE_KEY',        '.Su]Kr=1JaYWZYIG<B*Xg+/e%^fT5%E6sgPl26>hbZ9sED3;a(t9b+h3g@YI5kUk');
define('AUTH_SALT',        '!-JQ#gv$a6-z<1DMglh@`KyH!]9HJD0}(_0.86a~I[OG;UPK@N0|R8Jx?/rmzl*B');
define('SECURE_AUTH_SALT', 'KUOu0VFq0Wj93q`!`eu~euz++o4*:;x5F$OP?=iD5?x@GbOI;Q1w1aJ}C[t|<K?[');
define('LOGGED_IN_SALT',   'a-|f?~Ka/l!,gUj&*&<RQ8OC~C2<bXx$z)(8|g>Hh{-=E#<=b.gP2>RdTzsc6 H3');
define('NONCE_SALT',       'WG< IRt1{OB%U20&a|0 W]:</}^u*9;)]a^+D!FS;O?(;75%|zcZS^sQ:`HNY%f&');

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
