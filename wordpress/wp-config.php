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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OF/up1=u<zg*LJ(9yEAzExBm6Mp|{^~lT{v(!wE&W9c|<@FBivdPy+qOpNnQKja~');
define('SECURE_AUTH_KEY',  'ZWP^#w?FBLZK/|AN--G;}+}Tc;Ey:Gbp7io}!G^Zjl2-?pj9w=^XLk0x,7.T49xV');
define('LOGGED_IN_KEY',    '[@ZH_*B~xrW0+K$];P~d_-&4Eb|(aKu lFKQ8IiPH8<(*|OxQIwnO5C|?Nvlhr@L');
define('NONCE_KEY',        ',.guXb^-:%N?_w=524:|D7rg)WbOGfsr`+%qZ|PjC!J2obvl84:v+nOA,Ws_;~R.');
define('AUTH_SALT',        '-%ZlH6Mv/vjxS~;=whmh*,NNrR_JTw#bs!EQa?Sb^L+`3O;.T[6! KprLa( ;77+');
define('SECURE_AUTH_SALT', 'vQ.-O{;>i`k`q207[OVR$U@_w%J)3Fgc}@``;An|Rz4:Q0ym:.-Ss@sBX!Gp95lv');
define('LOGGED_IN_SALT',   ':iqu~G-Ye*1ADQB&]xs32-#bUzC==SD7TdI]0|t19A{daP{nTKGck4x /J02+&%A');
define('NONCE_SALT',       '0kA:qQY3B} N/FS+BhBBr*I,$W=6KQT8S?a1|5sWL=Z/s.VKL5{GJkd%}uEB|Wnq');

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
