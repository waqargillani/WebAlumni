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
define('DB_NAME', 'webalumni');

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
define('AUTH_KEY',         'I>/GLGKF6{IEVQPE&JdVZe%| o9lOx=o%fqcBJ<NI*gL;Et=#%5?Nzzb3*lN*lC(');
define('SECURE_AUTH_KEY',  'THYN,dOU#@(S26PMb>?+?e}p*q`!&<-oKF&5#{7|m:N|?vr$5JII9X-G6w1EWEkm');
define('LOGGED_IN_KEY',    'nyjDExH(6|q7*mcqWpE;kiKM=mvjvfVR]sd8PoU>7I+`FO-O.Py9=#n4/FTENj|H');
define('NONCE_KEY',        '_2bn= m](P8<Upp-2e6LA_PuWUPr5)%wN K*y.PJIm9tEeCGq,NBnGC|#H%f/Jy8');
define('AUTH_SALT',        '@foqJ$[E`XwR@jXsP[0 iGlb@I5CrI3yWlN{9%>w|ua,dz$G2NxJ?e%Dc~NC)sau');
define('SECURE_AUTH_SALT', 'HuD.#MY!V@op%-dr0C)VLE;VzOn>/.}($SH22cr{%HSa#h7J4gFeF+vchr%GPTxZ');
define('LOGGED_IN_SALT',   '2Mo15X>^pbp)mH(TO;t[_z%c%/p>gs7uCefs4PV:ba6gkp&#$?9Tenuy1%wG!B^m');
define('NONCE_SALT',       'g;[EP2$jERRm+VEYQB%qE#L^>Rtemfjttw=-3{o|!Y d4aLLH#o(DE39cz^7U}qF');

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
