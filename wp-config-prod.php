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
define('DB_NAME', 'u966346877_dshbv');

/** MySQL database username */
define('DB_USER', 'u966346877_ajdsn');

/** MySQL database password */
define('DB_PASSWORD', 'LKj05s07kBwOD!n0zX');

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
define('AUTH_KEY',         ',+lk-JE83{4CY(A!7gE{s W4/hl67,+@EZzy[u~T~_fl1hNN@~]_Q:=6UtA|S$r!');
define('SECURE_AUTH_KEY',  'VW:BJ*z|tE+?Ij0iaJ.*[dy7#K4fVgN{1$/9b75}y,x|5!PwT9=M@#zs7B>,`d,h');
define('LOGGED_IN_KEY',    'E!PBEn^!zi!1l#Gjt}&8GYypwK@qP@~_#lx1;B.X~~bd3F+<n9|ECPz!%nqp(;Y/');
define('NONCE_KEY',        '0YeKN+6s!|HFZdTB.o~hQmR`qv9wfIl;D6 YnpX*qu6V3|U/f+x6B36FPnNmdJI=');
define('AUTH_SALT',        ',U+/XHg;%r`^LjhBA#INv6}#nK[znYoxqhPX_tDw~zvN(aA.GnDGdph>IN9j6nD_');
define('SECURE_AUTH_SALT', '@]FEJc0>9]n/;yIJ8<6e[!BgheddZ5I3tn=7Ff><xx.=YVW4UdrFn1i+c0cCxO(l');
define('LOGGED_IN_SALT',   'w^U`;6l1lV=u<sSEMzAhl G8u,}tS0q-vH;-tnByMC2p2)m+]m5OmI4*U/k_/9u{');
define('NONCE_SALT',       '0/at26_1ao:m~@~-vO*fz#/Xmh;L-W+a?XVqI#-T<YA{,<l1,s;((X5[!#pP:4=g');

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
