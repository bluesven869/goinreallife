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
define('DB_NAME', 'heroku_cc3d4bd95557472');

/** MySQL database username */
define('DB_USER', 'b817f06a93abf0');

/** MySQL database password */
define('DB_PASSWORD', 'e004490d');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');

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

define('AUTH_KEY',         'xJ~+_9Bv:>z1MC4&?qqS/vPP}!bQCnqe6OAMT44)Td2OVN$qj5X_eLcA^PX6lWWS');
define('SECURE_AUTH_KEY',  'i^Rbk%l_fcPiz:J]EEhh6&QgA>j)=$+.:D#Flb9[hok@L*y*nIE^P?8 <B4b/? [');
define('LOGGED_IN_KEY',    ')UW~?)C+?<*#.|wZWxn6#jq{WN.nu]{-uJfle~!}{V&Hy^!uc_hD-HWC+;wOlsvV');
define('NONCE_KEY',        ']YqUbww5<}!OAMuY<Uw~K/R5V{!i;$.XH!H`4ySWL/o.Jfbg}*_q^cF/4bCDuU$M');
define('AUTH_SALT',        '#bbBPl+mAA:_MThi[shPi4k=m!:Lc$8HXVlzvpC$w[k.1Vp.l.z8S?K>41Cg^ebh');
define('SECURE_AUTH_SALT', '>/I*N{`7#679Jy%D3hPpC1;FF]W$SV<u3 S;ILm.4:bV+QPq!/|8<Raun^#pt0[+');
define('LOGGED_IN_SALT',   'o+-9Fq!9v;?sNf&iDt[^o9XeiYP 3cFc=,cI.4QcRy~bt0{stnkm;Ky%o{/pZ+5L');
define('NONCE_SALT',       'xK}X-H(1LB49q/4ivsl@2ll`pnV@RMncNJ*=-i >OXSErv>.28K3cDt&Ca+LorZ!');
/*
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/
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
