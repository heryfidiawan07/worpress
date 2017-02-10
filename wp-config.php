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
define('DB_PASSWORD', '7@april');

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
define('AUTH_KEY',         '(JEPieNxki}Q2 ~DEd=U4AorY!Nf2IhV75^/!/Je4kIt|Il{7og-FY)Z<?*l#55O');
define('SECURE_AUTH_KEY',  '%^2= z-I7QR5V~sXM}m$&HliJmt%t4ai{clX);;?BXtG*m=6rx%E9+0WK9h%:|?2');
define('LOGGED_IN_KEY',    'rf(xRt.Qpz ZdV!!GLZgN.|lPV.KU}+1#WxJ+6aKz%#`wiVjr3=xh6D6Cv1/_vTb');
define('NONCE_KEY',        '*j6GMX0sX?VISqJ|n!@?3p,mKT0 O7xG!*c Wg)9!?AA`W[@4RLG{?~~0Q0m3; K');
define('AUTH_SALT',        'c_^mxv[*z]8hCfomc4JVW5z:?Vg;hec=5D >h5)p9A!9LN?p<yI25D+cz-j(AjK`');
define('SECURE_AUTH_SALT', 'P9e/ ,8Za3U,&Pr%,,q#s$WdOVu Kk9Hipox_Wb& }CwZvNo%J^M:1Yvx=1E?U<}');
define('LOGGED_IN_SALT',   'oGZ0RsO.1a{B~q{uy/d~4[._it&$B42WlT:`tpie)lf@`H3Re{Y7yp_<)d_ssRt(');
define('NONCE_SALT',       'my/&[RpK~]J}xtPH#,U06H1YOD?bHS_](mCK/Q`P3EJpysN3OkfTtrUV}DH]%o%x');

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

