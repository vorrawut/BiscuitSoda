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
define('DB_NAME', 'wdp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'MuRRJ4OFaz');

/** MySQL :!hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** FTP config */
define('FTP_PUBKEY','/home/wp-user/wp_rsa.pub');
define('FTP_PRIKEY','/home/wp-user/wp_rsa');
define('FTP_USER','wp-user');
define('FTP_PASS','');
define('FTP_HOST','128.199.245.147:22');



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0+_|{;F:7Q`;cV@m^;{]xrNxXJjy.oc<6dI?uU-#RLUkYwn+iIP<D^+}.}3iqVDw');
define('SECURE_AUTH_KEY',  '(oFnXnwK-+;-oo9/^a&6+x$W7+eZhk1G+xi?4aJQR|#&Z?aTp+c|>Ks1VPRom<BC');
define('LOGGED_IN_KEY',    'WL%N^rE:U+m=%5B_n}W4ia3XIx]>oOE+SwVMa[T|+-[W52`r(iD)v)iEl)R-sOr6');
define('NONCE_KEY',        'N`5N.uum)iOMO0`k- 1u~qp>D1F2dgz1e-[uWoL(Ne3`J867e]L1jB+F`??2t[E_');
define('AUTH_SALT',        '/dpZ@{=7zbks|c0w9$ 8BWe>)FJ^wn{fSMj0-Ch+6eE+HU<(8n5B~`zS]Z5`@=Bm');
define('SECURE_AUTH_SALT', 'Dh~Z1xN GA{-%07+2|S<GMcNc=3$jE[;<R-:@~ci81!jD?#!d2}7E@DWWlt]u@[y');
define('LOGGED_IN_SALT',   'Y55^&IYo7_5ez]KM-#~ucXPY|W8/4(nYA5@?4p&;-{,4|2)-`3+shHybFc;>EZ$)');
define('NONCE_SALT',       'u)~qPpz/h[[D2/xreK[q1+gb*&+D-rm^Prwbiv,QP42O:^J{XxP_hXp%UN=*cyy|');

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

/**relocate website  */
//define('RELOCATE',true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


