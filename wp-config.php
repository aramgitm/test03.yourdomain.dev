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
define('DB_NAME', 'test03.yourdomain.dev');

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
define('AUTH_KEY',         'Ruy/sUh =R%n1W!iM$Y^Bu&dx`5ycm1$`o@<9P/I)0*9GE @2a[`5SH;Jk,-l%L]');
define('SECURE_AUTH_KEY',  '&eqihL]*5EN5C-EQ$S-340AY$-@,ceE#Ll*Wwvm3=eF7d1v*UZr80&+B@4cJ)LLN');
define('LOGGED_IN_KEY',    'j6,$G|s$ENH=fQ|msJdrGse-&FB@,#>(Y[%.r5x|mZFb)-RTyS??4A]Besj^85-&');
define('NONCE_KEY',        'lkrqFru36_tLskqT>>IHv>U!7vB7| aI]6^Y,zjg{<H#792DyS-3~>TR1 }41Y4h');
define('AUTH_SALT',        '+9:.w6o1ofiqJS4_xMMzCQq%aF-B 0h+!%9N9>Kg(7|;9uoS(Tw;]cw*|Y&^~wEt');
define('SECURE_AUTH_SALT', 'pQLU$q^wTt#|xS5ox,We2~fs;/^[Xgs4eWT8d~/Y,eg(XhRc-/z%d3gz!S(*/9H)');
define('LOGGED_IN_SALT',   'SU%N0Dq*>@r- o&;-6d&M0ZZf<N-9*ylc|D (J p#k)h[w<1p2`sPPr[DA(o<zW|');
define('NONCE_SALT',       'VNI>cp29(Eq@3{-r,|~PqUgm<=(A3;GryKP.g3I+8]!w*b5fA>,g_D=2tx-7}YyQ');

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
