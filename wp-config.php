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
define('DB_NAME', 'smurfhowl');

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
define('AUTH_KEY',         '#7c3Ry::[]F0_;(XdENrYqKbXW@.4^&=HSt}Smm{eOd.wQ(rhz~*7a;>tg,X01uz');
define('SECURE_AUTH_KEY',  'ybd}`B-Kz{t%{ke450Fc.2}o>&*bpk%~!Q5(Zn=H>WzPEH_fKNHEeL#ycZWiZ!%$');
define('LOGGED_IN_KEY',    'Q@.FhDS;ivzt:Rr7+sHdp9BqxhHyo)Ic1*,xr}~Wmm^DIP!/$*5Ue?%irR/d,I;g');
define('NONCE_KEY',        'qDapP4ZgjG^]oT}JUjT[wv56?`Xp$NDQo6@S;e{s7Aa}E-6NEUD6Ex;7gc;(]6I_');
define('AUTH_SALT',        ';FU39d,q@ QV[TL?8F+_i#fck!/WB`|3ek|n;:]&47c=?^(2+ai,#w+(8rU<@XIX');
define('SECURE_AUTH_SALT', '6D7s,64!.X(`TwAg7B,E-nIG5rbz2A,-lG9x$A7&aRqa.-dpa+(HCkux`-[*#K<|');
define('LOGGED_IN_SALT',   '0Fq}=P1;LG?0wI5`3uH,a5sj}SNI Qvz$nRFcc!^^.*`2p@*yFVrC!$iz1Wr.h#X');
define('NONCE_SALT',       'CC.[j?ZX*hup7b=r#Yh(8]>3=F#;DNg1LC*M>ti$kT<p:qhVPY9Vh7}~]x!v^gV{');

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
