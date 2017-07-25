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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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

define('AUTH_KEY',         '99u(,j4?!T(2^~Oz sObY-:U_YHx0vq[)_I5R,Uy,ni;u)#}G^07 P=(8o,+>I?P');
define('SECURE_AUTH_KEY',  '1.#:&Ksh-YhWSh3A>3.xF?+q+{j7!}7 cl-o6Lh#tjju73!~%mIT9Qdj6p}]d,f]');
define('LOGGED_IN_KEY',    'zh8/Njg{Fby?<Y-arf#XKGBea;p:+7?d.~)~.L9gc%gy;M(>G7nm{Oc^seev=u+/');
define('NONCE_KEY',        'tsg-p1!*UM2+e26+Bj#*aru(Hp|2!L_c.nxE({o %%2ozJr^N* Hhvyg_~xDI 05');
define('AUTH_SALT',        '?V{vn]_M7f)GN+|xbc+{~.{QwuE;!AO5ya#%LGavNZk-3ezt4}+Ky+Ruli ^lk/A');
define('SECURE_AUTH_SALT', 'rwr4dCOo8/I!Q9TD%wI9O24$o<~/-=159&^jS|~~FmPLT|1zr~CGHD7ft+U]=DA(');
define('LOGGED_IN_SALT',   'N%~~|i`-Qe4z4DkSQHN?T/-l4Xl(@:hx}JRhdsw#m+:|[u^55#iX$m2Yy]dE}v|n');
define('NONCE_SALT',       'r7>NY9W(o(njG08DR3e,KTlzFQ}z;957tT}pVgYTN{eDIVwr?RB+w2}|e!QDp3b3');


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
