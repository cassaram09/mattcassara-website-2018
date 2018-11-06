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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/mattcassara/Development/Personal/mattcassara-website-2018/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'mattcassara_2018');

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
define('AUTH_KEY',         '4vX!^x1md%euFs1_ 9}$rPiaEsZ1~E{Uyy]Z%g|yweZ6J>&,M/@?i$36n2]t&XKO');
define('SECURE_AUTH_KEY',  '`#m<F(K5{0 e]b1ArlJ}>RK8:rb*CepQwfLCBc&u=@oPd<Zh(dU=eO+uC:~Jx$[%');
define('LOGGED_IN_KEY',    '&RZs2F7wv<2(>Uc}i^,ra>I$P4uBNfnhi$?qVqAQ@`CdEt8QOgR260E+`#6> 7W0');
define('NONCE_KEY',        'oqR@q1xITNWJ2m-36-1f29@^Ej(mU.Yh&zqG(pcyY>u4hOR_%_aA:[|??Bj&|7i<');
define('AUTH_SALT',        '4?``((;z-?~gybP&=tL=|HmKxjwh1=p7<[5]Fp^ R/xc#_;k^kxX)4xm+~<oN>a|');
define('SECURE_AUTH_SALT', 'f1Pw}p5[B^Ycj->X4i=UXVGI*E#{J2#F@..a+~2T2/2[^CU=rh2^=>xV9XAe3^xm');
define('LOGGED_IN_SALT',   'd+KcVt}u-^&e&T&OQ]GW?B?k5-[?0E)b6b;iLb|vw~oi29Q<xSF*$/p27`DZD01D');
define('NONCE_SALT',       '4jdalFz<!K}EzfoOxA4b1[h&Zwp)ed<c+p7B:q`SpZV5BS6`HuEa2V.;roB:}Sq>');

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
