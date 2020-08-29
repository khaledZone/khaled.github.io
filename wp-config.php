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
define('DB_NAME', 'Wordpress1');

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
define('AUTH_KEY',         'I0n<6W8g5cZ)pfBj%{<T@S8^)b7;#tM@bUR_2aItK}WU#R,MxAyPM4,9(RX^i3^+');
define('SECURE_AUTH_KEY',  '78N],Gbo.Qns7DH]Pr{xKJ_YQr0T:6rO`S;5fPAw;L1.~MTfycI[L|n,[t-nIx6n');
define('LOGGED_IN_KEY',    'jtqcB5pMMBD4>?&{v%w?`p#w1(0(L0zCi0;>j{^g>dvZOQ(ViRQ|R;<ZsZe][dO6');
define('NONCE_KEY',        '@~C0]cH{Xx>1WOjNJ+(wzm-XadK1D&04/E. 0L^>&vEL2gFJo@g.8bKC$E*z#k9-');
define('AUTH_SALT',        ',%loei (sR49xGt^/shkGM4t((-;M[_~8~+@v{o2!&~V7Un)lnx:hhuzM_^7ek1L');
define('SECURE_AUTH_SALT', 'zP!fKu~|a5hMg{oX2JfnMC}vn{(^:3[.4lW=ZXe2KT5:M=-iJf>$ %7V:*0D:KkE');
define('LOGGED_IN_SALT',   'Ft385.,wAS&X$`@Izsm~,&`v`Y<y|i}.ll:ZrO$MD0l-xAFt~I*qO%]L~(28Iso_');
define('NONCE_SALT',       'RT#95|(rBsj,9s}1Okyo`*XL`u<ph6+Q= N|(jk.[Ht]32Tg<a0mr`=dsKH={]EB');

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
