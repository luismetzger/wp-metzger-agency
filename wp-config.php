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
define('DB_NAME', 'wp_metzger');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'flare1mill');

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
define('AUTH_KEY',         'q||Obd!($O6B?:Ys)`[+cJ#)0oB78wx!!$+W(n9J23G2nyRw0/Ub=L#4aR`[}nZG');
define('SECURE_AUTH_KEY',  '|nR0.k|9V3A5~;,l TIV3`LRK2Z}6.F_#$3]NH>|9k>M-AB2$e}U`So+/DevdC s');
define('LOGGED_IN_KEY',    'Pqq9zIymZUDP*K-p>gC|uLut!K=%+lL%zh4.7FLl%S-?%cb+2ei%-L1vykjzXYk6');
define('NONCE_KEY',        '[+3s}f]`YIiUY=wyD-F!}m@h~|+#Z[jzNLMX,F:d~rwNK<Ul$ ]>O]dvT<haIBTL');
define('AUTH_SALT',        'f6u_[x[STy@ziJV|=kFeM(,++Mj=6IUZoG*7<h<F-F-m/Pg[3jUdU1>S6@X}-T-|');
define('SECURE_AUTH_SALT', 'V!QTmjrs2|emEHw/rYOa*l1_u?`i?dYr$zrY=nxI@~pb(7eB-XZ12,>$=(!7`XaD');
define('LOGGED_IN_SALT',   ',(Y5q[12kM]-xwxK<|l;d6Wh2bHmEO|+(~T!L^D<]Ro)>PeiVa19H#jEQ+8>7Yl`');
define('NONCE_SALT',       '`b#>32J)K2^2|- kuYAWyW-R:+H>il$S g@/]`n^@+$a^3O?y5.H=UQDx5y;M6dY');

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
