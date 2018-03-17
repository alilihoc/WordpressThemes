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
define('DB_NAME', 'wp2');

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
define('AUTH_KEY',         '6F)`!bFkr(sn}PrkylL@CWgBKoNEf}[F^|n,wgs*,Bki;TEd16YuA Ld5OMPt.``');
define('SECURE_AUTH_KEY',  'O:WJ{6<aO{_/fW}4!@cC_Ur^fK|B.)AS[4g5JjB:!*haiuXXe:)a@}y^K34RT1:e');
define('LOGGED_IN_KEY',    'j-+xd*6c_I=VjQSKchU7XT&|@6M}*a.ba[U#g9x&ExGk$3AN|?7wDHJV:xq%7:1t');
define('NONCE_KEY',        '=I$W_F|<U?u1Vu}LM9q8|hwL8#hKKy00`v$lv<;,AIXgwgBJxxM:*Sk*~FvO~|,0');
define('AUTH_SALT',        'z{15!#_e#Uor5LoYE.F*D?-_MPdWD~tk6eh_JJkx6n9/b8`$6tO4O.OJ@am$_!P<');
define('SECURE_AUTH_SALT', '-3[JWlNlL)KI6|z*#(t/_SX %-4Na`1M}w4|31?<Hv`t5:J=t,&lUz?qfA&Mlx0E');
define('LOGGED_IN_SALT',   'KCEaT4+bQ6o}:n3OhboPe*`UTf#<E92[ w3Zd1qn|.C;?g X0R>7E2X!|gO2!&Yu');
define('NONCE_SALT',       '!>b]?y!*A|/Y!Zo5LO]MH}<>SIyjz2tr:TwiKJks`ba#mi56ArioyWC-=MU!aPQ4');

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
