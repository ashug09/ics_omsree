<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u223502581_4Th6W' );

/** MySQL database username */
define( 'DB_USER', 'u223502581_Y8U86' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hk06v0yGDx' );

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
define( 'AUTH_KEY',          'EuqRhskzY)A0_Y>}I2ugnMX[G[OCWF-=el{UpjnA_6OwQ+@S.:&f@[OY43VlE![i' );
define( 'SECURE_AUTH_KEY',   'Ci|D|weX1(TxlB#p&r`-.u~)/@3c/$I}=e+O>CE/snko1_@P-bVUT}:1 [JT)|/I' );
define( 'LOGGED_IN_KEY',     '5!~tlX_~M `Ia}>5~i]i*f 3R/Zk^ha+sv#r?YMlr5<X6~U2Y&k]oiLaW>V`fDlQ' );
define( 'NONCE_KEY',         'OM%6/(0YowDEJjpP`iH4f5,(`phHi@%^_3`X0_eX=<17xQPj/kNg`v>T(wUUo2Mo' );
define( 'AUTH_SALT',         'Ue}`;X0WcCQZ2t%gw[V{Sm;Fi)K{6xiyy8cpiu#:V0_=?D}-4DgQ<}O>6s;+->[)' );
define( 'SECURE_AUTH_SALT',  '6Rv-xX6zo*wc6?TNszt,0^Df*]~d6VWOe4/qX]r.hg6U|<vNmBmJ[piexlzA.3)G' );
define( 'LOGGED_IN_SALT',    ';|&5eCjXc-sr1Ccph/,|$P#Oh{f;zzG3O_{fD:4xQ<%|Rb=anYOk6~y0_0;hTKy3' );
define( 'NONCE_SALT',        '&bV2~73c}1~B-s+y;)%Jma^sW.5?Jf[*JsZzH/&3[6BsV*sW:8>RM&j}R~MK4=<_' );
define( 'WP_CACHE_KEY_SALT', 'lmQ~o:J<MomA+)qi}.U.NhpMF@sT*-r93^A9NYFgdI6!E;ZcsoHL&M~-#uk,v4Md' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
