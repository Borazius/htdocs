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
define('DB_NAME', 'wordpresstraining');

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
define('AUTH_KEY',         '$n,/*:*:yew0:#*4|43>v|~g^.+_0nE|6ET*#aKJI]*Ti1B(exv&gqbt~~X]cdZB');
define('SECURE_AUTH_KEY',  'n%Dxh2GM/t[]eob&5fJXOcN)s+AMsd+P7SI*!~+Vf}]=VhzZM]INshNgjiat$qrA');
define('LOGGED_IN_KEY',    '}+PxQ-`O|ERuhaxliZr;G;UHv!M$ lM@gm^(X}pk^1_1hACI{APbh1yu$<1<A2W=');
define('NONCE_KEY',        'B)@ZW2&e353TvF%e-~0[*w1-zD.CJVrSk>Q<dAB%K(zieNI@vxk;qQG[(_>X4TNf');
define('AUTH_SALT',        '4KjHiBG*_qC-{:MU6l;mfjAnpKk+lM.l)3+9o&N``B$[yU-$1|5(qp0>QzkI>KxI');
define('SECURE_AUTH_SALT', '?H.`cr0;x8BSm*W3b(Wl)YM/(@$9v(7nZ-CRaBIiN>T:D9r@P+mivF@4bQHE58;b');
define('LOGGED_IN_SALT',   '_Z2C@6tF^/^GOdndw>!r^{H0-s3:kEP[ i5Yd*1Ec5qvF6,Q#Th3vD^S|GYcq_|/');
define('NONCE_SALT',       'i:qrtP Q% ?kfo~@je)0sN;V|zxO}JP.gy~FCxM<}im<^EWUN4Q+!RA7w62,r2Nm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bo';

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
