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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'userwp');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '76B3!.(#P<qcoNnPO*.~u&eIn>Yy-w`<oH[E(2r1G2Wpl+=v,`ts2Fq1|m^-RctQ');
define('SECURE_AUTH_KEY',  'uGBv>}4KT-_+@yEuw7?i8wp;+({jml*B8-H0f~UmU|:8nnz@RX+tvsg[fGH017Am');
define('LOGGED_IN_KEY',    '+<!1=8`+EBv,c#:yu|9/]RGl1WDQf7| f8=4n+tH$6EYu>PbK;gXZtX>b?^BC*nB');
define('NONCE_KEY',        'bN62E-`cbGq86i5jk`|A3Wr$?Ws`=b7_Y*vV{AqTa|p1x vfwS,#MnS(?!{{^o=q');
define('AUTH_SALT',        '0:8>~?Fl-+0H^7&PDFQ--T*id0a8VGFeqQsKQ+M*Fc6U#44!n!3;1G2$[9coQh*m');
define('SECURE_AUTH_SALT', 'Dq9 yvSvt-]Rf:sh+tQgK;]dKS>/;(tZHKeZC/=J1`+Xb3U)2w|nSD2If3)V||dO');
define('LOGGED_IN_SALT',   '.!Z)4t|y.|Z`GeWr#@!C`b=a&gT3T|C9Gu*F,f5j9|c&Jx)RIe^L8(`n74ZY5|M8');
define('NONCE_SALT',       'RXz,+o=gD[b|a4&LYA)7daNz-T0[u.fx?a@ HPFtM-,k2-|CjHV i[F|LZu]L#|B');

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
