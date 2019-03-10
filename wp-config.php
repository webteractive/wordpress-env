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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freshwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'M+wt:fw:gJ[aB931QsecPJTN+lYXe0xfFn&+uB#je-/abI5.s<m[UC+ wAb<E|:S');
define('SECURE_AUTH_KEY',  'D8vH88XT|Yl]i1uuI9~ec?3L#GYv}:IpJTA%8FxEb1VUDHl5*!PL?^|v_D.g$bo?');
define('LOGGED_IN_KEY',    'X=]v5Dk>ct!Xv6I83/=Yx+Z-b-5.>mS9BKeoE+(~U7!R0u:I0p9!2swby@YAP@!6');
define('NONCE_KEY',        '>G/&@hW@+_4C_GL{~L^?FF)_X2f|eQ:;C ARfSI(9l%7@<2LQP8a)R[%|o_.y%#S');
define('AUTH_SALT',        'j%w[|v@W^%C|avw+}k+-|_71%JB6tno(%GtY@4?fv`&f#^z5_=kY,?+tIV|s7{sp');
define('SECURE_AUTH_SALT', '#Q>S*w{14fz`;x;9VGUHdCLu`ohBDh2&C=[X49l.od;BlyYfh<EEj1`$mrr9&D$K');
define('LOGGED_IN_SALT',   'Ma|8a|]2k,|6C&T_Y=2~+Kug=EK/2?odl~65Q{s`Xj$0L_CR6Mr_Cfdm;rYTCQ&F');
define('NONCE_SALT',       'PaNE-%k[tM)(jgP72_>LFzpIHGpGSy*|MHjb/f7Rm[-H(|73G.K6b%2X5*O/z+l+');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
