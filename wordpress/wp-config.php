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
define( 'DB_NAME', 'u874808407_u5ded' );
/** MySQL database username */
define( 'DB_USER', 'u874808407_L8IXt' );
/** MySQL database password */
define( 'DB_PASSWORD', '4Urb3twFq1' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '%VKlQ$3Skcg$d]4M[+{ZY&>KiHuv@NuRGrP0[%,wZrs|ktfoSckfBaeL;`_FTJ<Z' );
define( 'SECURE_AUTH_KEY',   '5*H#y$*+R&FEw(WaWQ+z*6MV4Z0c=JGoqCKt&yol5?V9g[0K0+NIc#fr0{QF`gal' );
define( 'LOGGED_IN_KEY',     'n4LfWn[&BKkJbxA-Fx0n}!6+iZ<ypQ{L4)P[5WC`zXIT7EJh>g&$prUelW;#xKyT' );
define( 'NONCE_KEY',         '[}]^Q))Ud$|@^i8/.kah3OIHMx2L.3HWvGrxHl1&m lcSIBkg:F:WLF9`ib4GL7V' );
define( 'AUTH_SALT',         'ClGp^3VOMK4MRrmz;Ai8sn)%QY%$V;kk=]S{{7;z5~j2yE^p_U:{Ehc$)GGTo>Z$' );
define( 'SECURE_AUTH_SALT',  '7)%]{ges-IS2[[9bB{6!IMx*h>i %62an$aIEBv_H^@5*h6;Nu]!Y)DR@KXM{zmo' );
define( 'LOGGED_IN_SALT',    '2e>qGvaGe,ND&iRY`M69Z3avMX0EF46I+.r9aTzq84*_&5RunxX4pPggMHPB!.tB' );
define( 'NONCE_SALT',        ':WwXGj>3^T3pd^QI3WJjZV|5s>*jvXYUV~uCF|LgW^~#}4ymZUz]g,W>hZ$YpYI:' );
define( 'WP_CACHE_KEY_SALT', 'YW1ggWYNSGl$m/$5q?]`->;`p9:V0j ,v!W_[2Xf/|Cp>*=zt;D7:sYFGi_xIdW9' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
