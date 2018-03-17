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
define('DB_NAME', 'projet_wp');

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
define('AUTH_KEY',         '`%d:NHU*=#:Mzit/TMB#k-1@m!Z,S(ETxodWm`dF7D]d&(x)h]bY6KR0kN$;V{UK');
define('SECURE_AUTH_KEY',  'M]]kW]O+JSj}s4|0ge fsNz^;vuZl9O89BsQJtroEEwmG$q%PbW[7lU{?r(60m|K');
define('LOGGED_IN_KEY',    ']bwN7>O{tf4,3Rkvrlgk}C|Gd[VY0$5$uY92iEo:Lm2C]S64W:hpBu9~vD[)}V>2');
define('NONCE_KEY',        'a;f:oeW5cR:pro5o?t.6BF0eJ&B:0fPNq74@5d#vU(`W?ZB{dEAm+/NsZ &9#jm?');
define('AUTH_SALT',        'Z8a%l:P*v*p_%UN% 3Niw=2uQg;c1wiBN]+!c#-+hxM;NX@<o=(>U={ot.`W<q~g');
define('SECURE_AUTH_SALT', '+KB|Kx<2j9mVY`^>}U!sxoY, }qb{d&UN!h1Jt`r3dr=uzq#>uA:,uE&x[0q3(t[');
define('LOGGED_IN_SALT',   '.]r}dI%]n{iK^c_t*PI<vvSO27?wwBnIm=8tvz?=?mw?>r:7>-RQt7eU7fY8_Aw5');
define('NONCE_SALT',       'l%%F?V00<Ks$,cS<E|f! ]x+$9wfx8)aZ!cf=zQ2b$*%OEQ[BA~=%XF]c/,5H9)P');

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
