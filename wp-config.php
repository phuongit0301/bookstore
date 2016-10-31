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
ini_set('memory_limit', '-1');

define('DB_NAME', 'bookstore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Root31');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'a;kh8p6ys}B:<u{0YG6o-VT+*:6)+~-fu-GN;/AC+-Uy&U]*QJ[E*hX?d[2?S%h|');
define('SECURE_AUTH_KEY',  '7rCgA^`lPNDoJMEZfltuF:P!?M@rgJ*0-W!(ufx64cU;B-wXsByfnj6mXBp8m *T');
define('LOGGED_IN_KEY',    'd#1>^yB{:*+%7k-#1{+C7od|U;cz+B8U-CK-).K0Ypf[mVAj`z-mA6fMsJ#+u8Ik');
define('NONCE_KEY',        'R(}%rB(b9CG6UQyYQ{G-feAK f/;31.6dIL<@J@-s{<+s-HhEH9=Qb~+rpnupzFb');
define('AUTH_SALT',        ':s4T:+D8#cCXQ_#7oI>Hb#;Nm#so`35# A;X&EhWJ9r|8i<>x7f9Ksx|mSu{+^8F');
define('SECURE_AUTH_SALT', '0&@ ^e4FK?[.?4.tPG+u25C1(m?].tNW,1R+b]rw2Lk5r;3I$8}Gb$gvBA,VP-ex');
define('LOGGED_IN_SALT',   'r$5|dgs0h{$m+jp|jDWU}V<@YR8{#Frg+G;$ZEQ(s|eEonergF|O<;Jum3qo5TW:');
define('NONCE_SALT',       'wMSLafc>+MQb:It0_^&$PqGL|FH-oRZglfy!JevZzGT-u}W;rHcFd+VLhf9OHVj3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bs_';

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
